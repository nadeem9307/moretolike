<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MenuController extends Controller
{
 	public $successStatus = 200;

	public function menu_listing() 
	{
		$menu = DB::table('ms_menu')->where('deleted_status','=','Not deleted')->orderBy('menu_name','ASC')->get();
		$menu = DB::table('ms_menu')
				->where('deleted_status','=','Not deleted')
				->orderBy('id', 'desc')
				->get();
		return response()->json(['success' => $menu],$this->successStatus);
	}


	public function product_type_listing() 
	{
		$product_type = DB::table('ms_menu')->where('product_type','=','1')->where('status','=','1')->get();

		return response()->json(['success' => $product_type],$this->successStatus);
	}

	public function add_menu(Request $request)
	{

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(), true);
		$input = $requestData['form_data'];
		$input['created_date'] = $date ;
		$input['updated_date'] = $date ;
		$menu = DB::table('ms_menu')->insert([$input]);

		if($menu)
		{
			
			$data = DB::table('ms_menu')->where('deleted_status','=','Not deleted')->orderBy('id', 'desc')->get();  
			return response()->json(['success' => 'inserted Successfully', 'data'=>$data],$this->successStatus);	
		}
	}


	public function updateMenu(Request $request)
	{

		$requestData = json_decode($request->getContent(), true);
		
		$data = $requestData['form_data'];

		$input['menu_name'] = $data['menu_name'];

		$input['status'] = $data['status'];

		$menu_id = $data['menu_id'];

		$menu = DB::table('ms_menu')
					->where('id','=',$menu_id)
					->update($input);

		return response()->json(['success'=> 'success']);
		
	}


	public function menuDelete(Request $request)
	{
		$id =  $request->menu_id;

		DB::table('ms_menu')
			->where('id', '=', $id)
			->update(['deleted_status' => 'Deleted']);
		$menu = DB::table('ms_menu')
				->where('deleted_status','=','Not deleted')
				->orderBy('id', 'desc')
				->get();
		return response()->json(['success'=> 'Menu Deleted Successfully', 'data' =>$menu], $this->successStatus);
	}



	public function menuInfo(Request $request)
	{

		 $id =  $request->menu_id;

		$menu = DB::table('ms_menu')
						->where('id', '=', $id)
						->where('deleted_status','=','Not deleted')

						->first();

		//return $menu->menu_name;

		return response()->json(['success'=> $menu], $this->successStatus);
	}

	public function menuInfoByName(Request $request)
	{

		 $name =  $request->menu_name;

		$menu = DB::table('ms_menu')
						->where('menu_name', '=', $name)
						->where('deleted_status','=','Not deleted')
						->first();

		//return $menu->menu_name;

		return response()->json(['success'=> $menu], $this->successStatus);
	}


	public function  menuStatus(Request $request)
	{
		$id = request()->getContent();

		
		$menu = DB::table('ms_menu')->where('id', '=', $id)->get();

		

		if($menu[0]->status == 'Active')
		{
		$menu1 = DB::table('ms_menu')->where('id','=', $id)->update(['status' => 'Inactive']);
		}
		else
		{
		$menu1 = DB::table('ms_menu') ->where('id','=', $id)->update(['status' =>  'Active']);
		}

		//return $menu1;
	
	return response()->json(['success'=> 'Menu Updated Successfully']);
	}

	public function menuSearch(Request $request)
	{
		$requestData = json_decode(request()->getContent(), true);

		

		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{

			$search_data = DB::table('ms_menu')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('menu_name', '=', $requestData['search_value'])
			->where('deleted_status','=','Not deleted')  
			->orderBy('menu_name','ASC')
			->where('deleted_status','=','Not deleted')
			->orderBy('id', 'desc')
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') ) 
		{

				//return $requestData;
			$search_data = DB::table('ms_menu')
			->where('status', '=', $requestData['dropdown_value'])
			->where('deleted_status','=','Not deleted')  
			->orderBy('menu_name','ASC')
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('ms_menu')
			->where('menu_name', '=', $requestData['search_value'])
			->where('deleted_status','=','Not deleted')  
			->orderBy('menu_name','ASC')
			->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')){
			$search_data = DB::table('ms_menu')
						->where('deleted_status','=','Not deleted')
						->orderBy('id', 'desc')
						->get();
		} 

		
	    return response()->json(['success' => $search_data],$this->successStatus);
	}

	public function dashboardService(Request $request) {
		 $requestData = json_decode(request()->getContent(),true);
		 $where = ' and 1';
		 if($requestData['user_role'] != 1) { 
		 	$where .= ' and p.user_id = '.$requestData['user_id'];
		 }
		 $whereClause = ' and 1';
		 if($requestData['user_role'] != 1) { 
		 	$whereClause .= ' and user_id = '.$requestData['user_id'];
		 }

		 	$total_users = DB::select(DB::raw("select count(*) as total_users from users"));

		 	$active_users = DB::select(DB::raw("select count(distinct user_id) as active_users from oauth_access_tokens"));

		 	$total_orders = DB::select(DB::raw('select count(c.fk_product_id) as total_orders FROM cart as c inner JOIN product as p on c.fk_product_id = p.product_id inner JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0'.$where));

		 	$total_sales = DB::select(DB::raw('select SUM(c.quantity*p.current_price) as total_amt FROM cart as c inner JOIN product as p on c.fk_product_id = p.product_id inner JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0'.$where));

		 	$today_total_order =  DB::select(DB::raw('select count(c.fk_product_id) as total_orders FROM cart as c inner JOIN product as p on c.fk_product_id = p.product_id inner JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0 and o.created_date = CURDATE()'.$where));

		 	$today_total_sales =  DB::select(DB::raw('select SUM(c.quantity*p.current_price) as total_amt FROM cart as c INNER JOIN product as p on c.fk_product_id = p.product_id INNER JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0 and o.created_date = CURDATE()'.$where));

		 	$total_delivered_order = DB::select(DB::raw('select count(c.fk_product_id) as total_orders FROM cart as c INNER JOIN product as p on c.fk_product_id = p.product_id INNER JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0 and c.shipping_status = "d"'.$where));

		 	$total_pending_order = DB::select(DB::raw('select count(c.fk_product_id) as total_orders FROM cart as c INNER JOIN product as p on c.fk_product_id = p.product_id INNER JOIN orders as o on o.pk_order_id = c.fk_order_id WHERE c.fk_order_id != 0 and c.shipping_status = "p"'.$where));

		 	$total_products = DB::select(DB::raw('select count(product_id) as total_products from product WHERE 1'.$whereClause));

		 	$total_instock_product = DB::select(DB::raw('select count(product_id) as total_products from product WHERE availability = "in stock"'.$whereClause));

		 	$total_outstock_product = DB::select(DB::raw('select count(product_id) as total_products from product WHERE availability = "out of stock"'.$whereClause));

		 	$curr_yr = date("Y");

		 	
		 	$quater_sale = DB::select(DB::raw("select sum(total_amount) AS total_amount,sum(cASE WHEN created_date BETWEEN '".$curr_yr."-01-01' and '".$curr_yr."-03-31' then total_amount ELSE 0 END) AS Q1,sum(cASE WHEN created_date BETWEEN '".$curr_yr."-04-01' and '".$curr_yr."-06-30' then total_amount ELSE 0 END) AS Q2,sum(cASE WHEN created_date BETWEEN '".$curr_yr."-07-01' and '".$curr_yr."-09-30' then total_amount ELSE 0 END) AS Q3,SUm(cASE WHEN created_date BETWEEN '".$curr_yr."-10-01' and '".$curr_yr."-12-31' then total_amount ELSE 0 END) AS Q4 from orders"));
		 

		 return response()->json(['total_orders' => $total_orders,'total_users'=>$total_users,'active_users'=>$active_users,'total_sales'=>$total_sales,'today_total_order'=>$today_total_order,'today_total_sales'=>$today_total_sales,'total_delivered_order'=>$total_delivered_order,'total_products'=>$total_products,'total_instock_product'=>$total_instock_product,'total_outstock_product'=>$total_outstock_product,'total_pending_order'=>$total_pending_order,'quater_sale'=>$quater_sale],$this->successStatus);
	}



}
