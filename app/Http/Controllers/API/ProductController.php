<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ProductController extends Controller
{
	public $successStatus =200;

	public function addCollection(Request $request){
		$requestData = json_decode(request()->getContent(),true);
		$data = [
			'user_id' => $requestData['user_id'],
			'collection_name' => $requestData['collection_name'],
			'products_data' => json_encode($requestData['products_data'])
		];
		
		$re_data = DB::table('vendor_collections')->insert($data);
		return json_encode($re_data);
	}

	public function addProduct(Request $request)
	{
		$date = date('Y-m-d');
		$requestData = json_decode(request()->getContent(),true);

		$file_path = $this->upload($requestData['form_data']['product_img']);

		$destinationPath = public_path('uploads/');
		
		$file_arr = explode('.', $file_path);
		
		$extension = $file_arr[count($file_arr)-1];
		//imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
		$this->imageResize($file_path, $destinationPath, $extension, '308', '330', '308X330_');
		$this->imageResize($file_path, $destinationPath, $extension, '700', '700', '700X700_');
		$this->imageResize($file_path, $destinationPath, $extension, '75', '75', '75X75_');
		$this->imageResize($file_path, $destinationPath, $extension, '660', '720', '660X720_');
		$this->imageResize($file_path, $destinationPath, $extension, '100', '100', '100X100_');

		$inputs = $requestData['form_data'];

		$brand = DB::table('ms_brands')
		->where('id', '=', $requestData['form_data']['brand_id'])
		->select('name')   
		->get();

	
		$inputs['slug'] = $brand[0]->name.'-'.$requestData['form_data']['product_name'].'-'.$requestData['form_data']['sku'];
		$inputs['slug'] = preg_replace('/[^A-Za-z0-9-]+/', '-', $inputs['slug']);
		$inputs['created_date'] = $date ;
		$inputs['product_img'] = $file_path;

			$slug_count = DB::table('product')
				->where('slug','=',$inputs['slug'])
				->get()
				->count();

				if($slug_count > 0) {
					return response()->json(['error'=>'Slug Already exist'],'404');
				} else {
		$product = DB::table('product')->insert([$inputs]);
				}

		if($product)
		{

			$lastInsertId = DB::getPdo()->lastInsertId();

			return response()->json(['success'=>$lastInsertId], $this->successStatus);
		}
	}

	public function dropshipAll(Request $request){
		$re_data = DB::table('vendor_collections')->where('deleted_status', 'Not Deleted')->orderBy('id', 'desc')->get();
		return response()->json(['success'=>$re_data], $this->successStatus);
	}

	public function productList(Request $request)
	{
		$requestData = json_decode(request()->getContent(), true);


			//return $requestData;

		if($requestData['role'] == 1){
			$product =  DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
				    	->select('product.*', 'ms_brands.name')
				    	->orderBy('product.product_id', 'desc')
				    	->get();
		} else {
			
			$colname = $requestData['loggedUserId'];

			$product =  DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						//->whereRaw('FIND_IN_SET(?,shared_vendor)', [$colname])
						->where('product.deleted_status','=', 'Not Deleted')
				    	->where('product.user_id','=',$requestData['loggedUserId'])
				    	->select('product.*', 'ms_brands.name')
				    	->orderBy('product.product_id', 'desc')
				    	->get();
		}
		return response()->json(['success'=>$product], $this->successStatus);
	}


	public function productStatus(Request $request)
   {
   		$id = request()->getContent();

   		$product = DB::table('product')
   					->where('deleted_status','=', 'Not Deleted')
   					->where('product_id','=',$id)
   					->get();

   		if($product[0]->status == 'Active')
   		{
   			$product = DB::table('product')->where('product_id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$product = DB::table('product')->where('product_id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}

   	function dropshipgetProduct(Request $request, $id){
		$requestData = json_decode(request()->getContent(), true);
		
		$vendor_collections = DB::table('vendor_collections')->where('id', $id)->first();

		$vendor_collections_products_array = explode(',', explode(']', explode('[', $vendor_collections->products_data)[1])[0]);

		$product = DB::table('product')
                    ->whereIn('product_id', $vendor_collections_products_array)
                    ->get();

		return response()->json(['success'=>$product], $this->successStatus);
   	}

   	public function dropshipStatus(Request $request){
   		$id = request()->getContent();

   		$ms_product_types = DB::table('vendor_collections')->where('id','=',$id)->get();

   		if($ms_product_types[0]->status == 'Active')
   		{
   			$ms_product_types = DB::table('vendor_collections')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$ms_product_types = DB::table('vendor_collections')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}

	public function getProduct(Request $request)
	{

		/*$requestData = json_decode(request()->getContent(), true);

		return $request->product_id;*/

			/*$product =  DB::table('product')
						->where('ms_category','=',$requestData['item_id'])
						->where('product.deleted_status','=', 'Not Deleted')
				    	->get();*/
		/*	$brand =  DB::table('ms_brands')
						->where('status','=','Active')
						->where('deleted_status','=', 'Not Deleted')
				    	->get();*/

			$product =  DB::table('product')
						->where('product_id','=',$request->product_id)
						->where('deleted_status','=', 'Not Deleted')
				    	->first();
		

		return response()->json(['success'=>$product], $this->successStatus);
	}


	public function updateProduct(Request $request)
	{

		$requestData = json_decode(request()->getContent(),true);


		if(isset($requestData['form_data']['product_img']) && !empty($requestData['form_data']['product_img'])){

			$file_path = $this->upload($requestData['form_data']['product_img']);

			$destinationPath = public_path('uploads/');
		
			$file_arr = explode('.', $file_path);
			
			$extension = $file_arr[count($file_arr)-1];
		//imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
		$this->imageResize($file_path, $destinationPath, $extension, '308', '330', '308X330_');
		$this->imageResize($file_path, $destinationPath, $extension, '700', '700', '700X700_');
		$this->imageResize($file_path, $destinationPath, $extension, '75', '75', '75X75_');
		$this->imageResize($file_path, $destinationPath, $extension, '660', '720', '660X720_');
		$this->imageResize($file_path, $destinationPath, $extension, '100', '100', '100X100_');


			unset($requestData['form_data']['old_product_img']);

		}else{

			$file_path = $requestData['form_data']['old_product_img'];
		}
		$id = $requestData['form_data']['id'];

		unset($requestData['form_data']['id']);

		unset($requestData['form_data']['old_product_img']);


		$inputs = $requestData['form_data'];

		$inputs['product_img'] = $file_path;

		$product = DB::table('product')->where('product_id','=',$id)->update($inputs);

		return response()->json(['success'=>'success'], $this->successStatus);
	}

	

	public function productDelete(Request $request)
	{
		$id = $request->del_id;

				DB::table('product')
					->where('product_id','=', $id)
					->update(['deleted_status' => 'Deleted']);
		$product = DB::table('product')
					->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
					->where('product.deleted_status','=', 'Not Deleted')
					->orderBy('product.product_id', 'desc')
					->get();
		return response()->json(['success'=>'Data Deleted Successfully', 'data'=>$product], $this->successStatus);
	}



	public function dropshipProductSearch(Request $request)
	{

		$requestData = json_decode(request()->getContent(), true);
		$product_list = array();
		$product_data = array();
		$category_list = array();
		if(is_array($requestData['dropdown_value'])){
			
			foreach($requestData['dropdown_value'] as $dropdown_data){
				$category_list[] = $dropdown_data['id'];
			}

			$product_data = DB::table('products_sub_category')->select('fk_product_id')->whereIn('fk_category_id', $category_list)->get();
			foreach($product_data as $row){
				$product_list[] = $row->fk_product_id;
			}
		}

		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->whereIn('product_id', $product_list) 
						->where('product.product_name', 'like', '%'.$requestData['search_value'].'%')
						->orwhere('product.sku', 'like', '%'.$requestData['search_value'].'%')
						->select('product.*', 'ms_brands.name')
						->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->whereIn('product_id', $product_list) 
						->select('product.*', 'ms_brands.name')
						->orderBy('product.product_id', 'desc')
						->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->whereIn('product_id', $product_list) 
						->where('product.product_name', 'like', '%'.$requestData['search_value'].'%')
						->orwhere('product.sku', 'like', '%'.$requestData['search_value'].'%')
						->select('product.*', 'ms_brands.name')
						->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) 
		{

			$search_data = DB::table('product')
							->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
							->where('product.deleted_status','=', 'Not Deleted')
							->whereIn('product_id', $product_list) 
							->select('product.*', 'ms_brands.name')
							->orderBy('product.product_id', 'desc')
							->get();
		} 

	    return response()->json(['success' => $search_data],$this->successStatus);

	}

	public function productSearch(Request $request)
	{

		$requestData = json_decode(request()->getContent(), true);

		if($requestData['shareable'] = ''){
			$requestData['shareable'] = 'shareable';
		}else{
			$requestData['shareable'] = $requestData['shareable'];
		}

		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->where('product.status', '=', $requestData['dropdown_value']) 
						->where('product.product_name', 'like', '%'.$requestData['search_value'].'%')
						->where('product.shareable_product', 'like', '%'.$requestData['shareable'].'%')
						->orwhere('product.sku', 'like', '%'.$requestData['search_value'].'%')
						->select('product.*', 'ms_brands.name')
						->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->where('product.status', '=', $requestData['dropdown_value']) 
						->where('product.shareable_product', 'like', '%'.$requestData['shareable'].'%')
						->select('product.*', 'ms_brands.name')
						->orderBy('product.product_id', 'desc')
						->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product')
						->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
						->where('product.deleted_status','=', 'Not Deleted')
						->where('product.product_name', 'like', '%'.$requestData['search_value'].'%')
						->where('product.shareable_product', 'like', '%'.$requestData['shareable'].'%')
						->orwhere('product.sku', 'like', '%'.$requestData['search_value'].'%')
						->select('product.*', 'ms_brands.name')
						->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) 
		{

			$search_data = DB::table('product')
							->join('ms_brands', 'product.brand_id','=','ms_brands.id' )
							->where('product.deleted_status','=', 'Not Deleted')
							->where('product.shareable_product', 'like', '%'.$requestData['shareable'].'%')
							->select('product.*', 'ms_brands.name')
							->orderBy('product.product_id', 'desc')
							->get();
		} 

	    return response()->json(['success' => $search_data],$this->successStatus);

	}

	public function getById(Request $request) {
		$requestData = json_decode(request()->getContent(), true);
		$product_detail = DB::table('product')
					   ->where('product_id','=',$request->edit_id)
					   ->get();
					   return response()->json(['success' => $product_detail],$this->successStatus);
	}




		//ShareableProduct
	public function addShareableProduct(Request $request) {
		$shared_vendor = [];
		$update_shared_vendor = '';
		 $requestData = json_decode(request()->getContent(), true);
		$product_detail = DB::table('product')
					   ->where('product_id','=',$requestData['product_id'])
					   ->select('shared_vendor','vendor_id','product_name')
					   ->get();
					   $shared_vendor = explode(',',$product_detail[0]->shared_vendor);

					   if($shared_vendor[0] == ''){
					   	$shared_vendor = [];
					   	$shared_vendor[] = $requestData['vendor_id'];
					   } else {
					   	$shared_vendor[] = $requestData['vendor_id'];
					   }
					    $update_shared_vendor = implode(',',$shared_vendor);
						$update_data = DB::table('product')
					   ->where('product_id','=',$requestData['product_id'])
					   ->update(['shared_vendor'=>$update_shared_vendor]);
					    if($update_data == 1) {
					   	$input['vendor_id'] =  $product_detail[0]->vendor_id;
					   	$input['status'] = 0;
					   	$input['msg'] = $requestData['vendor_id']." added yours ".$product_detail[0]->product_name." shareable product";
					   	
					    	$notification_insert = DB::table('vendor_notifications')->insert([$input]);
					    }
					    return response()->json(['success' => $update_data],$this->successStatus);
	}


		//Notification
	public function getNotification(Request $request) {
		
		$notification_data = DB::table('vendor_notifications')
							 ->where('vendor_id','=',$request->edit_id)
							 ->get();
		return response()->json(['success' => $notification_data],$this->successStatus);
	}




		//Discount
	public function addDiscount()
	{
		$category_list = DB::table('ms_category')->where('status', '=', '1')->get();
		//$product_list = DB::table('product')->where('', '', '')->get();
		return response()->json(['success'=>$category_list], $this->successStatus);

	}


	

	//Attribute
	public function addAttribute() {

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);

		$inputs = $requestData['form_data'];
		$inputs['created_date'] =  $date ;

 
		$product_attribute = DB::table('product_attribute')->insert([$inputs]);

		if($product_attribute)
		{

			return response()->json(['success'=>'Data Inserted Successfully'], $this->successStatus);
		}

	}


	//getAttribute
	public function getAttribute(Request $request) {
		$product_id =  $request->product_id;
		$attribute = DB::table('product_attribute')->where('fk_product_id','=',$product_id)->orderby('id','desc')->get();
		return response()->json(['success' => $attribute],$this->successStatus);
	}


	public function deleteAttribute(Request $request)
	{


		$id =  $request->del_id;

		DB::table('product_attribute')->where('id', '=', $id)->delete();

		$product_attribute = DB::table('product_attribute')->get();
		return response()->json(['success'=> 'Attribute Deleted Successfully', 'data' =>$product_attribute], $this->successStatus);

	}

	public function statusAttribute(Request $request)
   {
   		$id = request()->getContent();

   		$product_attribute = DB::table('product_attribute')->where('id','=',$id)->get();

   		if($product_attribute[0]->status == 'Active')
   		{
   			$product_attribute = DB::table('product_attribute')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$product_attribute = DB::table('product_attribute')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}


   
	public function attrSearch(Request $request)
	{

	    $requestData = json_decode(request()->getContent(), true);

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			// return $requestData['dropdown_value'];
			DB::enableQueryLog();
			  $search_data = DB::table('product_attribute')
			->where('status', '=', $requestData['dropdown_value'])   
			->where(function($query)  use ($requestData) {
                return $query->where('attribute_name', '=', $requestData['search_value'])
                   
					->orWhere('attribute_value', '=', $requestData['search_value']);
            })->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product_attribute')
			->where('status', '=', $requestData['dropdown_value']) 
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product_attribute')
			->where('attribute_name', '=', $requestData['search_value'])
			->orWhere('attribute_value', '=', $requestData['search_value'])

			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') && ($requestData['user_id'] != '') ) 
		{
			$search_data = DB::table('product_attribute')

			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id']) 
			->distinct()
			->get(['attribute_name']);
		} 



		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('product_attribute')->get();
		} 

	    return response()->json(['success' => $search_data],$this->successStatus);  
	}


	public function changeProductTypeStatus(Request $request)
   	{
   		$id = request()->getContent();

   		$ms_product_types = DB::table('ms_product_types')->where('id','=',$id)->get();

   		if($ms_product_types[0]->status == 'Active')
   		{
   			$ms_product_types = DB::table('ms_product_types')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$ms_product_types = DB::table('ms_product_types')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}






	//Color
	public function addColor() {

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);


		$file_path = $this->upload($requestData['form_data']['product_img']);

		$destinationPath = public_path('uploads/');
		
		$file_arr = explode('.', $file_path);
		
		$extension = $file_arr[count($file_arr)-1];

		//imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
		$this->imageResize($file_path, $destinationPath, $extension, '308', '330', '308X330_');
		$this->imageResize($file_path, $destinationPath, $extension, '700', '700', '700X700_');
		$this->imageResize($file_path, $destinationPath, $extension, '75', '75', '75X75_');
		$this->imageResize($file_path, $destinationPath, $extension, '660', '720', '660X720_');
		$this->imageResize($file_path, $destinationPath, $extension, '100', '100', '100X100_');
		
			$inputs = $requestData['form_data'];
			$inputs['created_date'] =  $date ;
			$inputs['fk_product_id'] =  $requestData['fk_product_id'] ;
			$inputs['fk_user_id'] =  $requestData['fk_user_id'] ;
			$inputs['product_img'] = $file_path;
			$product_color = DB::table('product_color')->insert([$inputs]);
		
		if($product_color)
		{

			$color = DB::table('product_color')
			->where('fk_user_id','=',$requestData['fk_product_id'] )
			->get();

			return response()->json(['success'=>$color ], $this->successStatus);
		}

	}

	public function getColor(Request $request) {

		$product_id =  $request->product_id;

		$color = DB::table('product_color')
		->where('fk_product_id','=',$product_id)
		->get();
		


		return response()->json(['success' => $color],$this->successStatus);
	}


	public function deleteColor(Request $request)
	{

		$id =  $request->del_id;
		DB::table('product_color')->where('id', '=', $id)->delete();

		$product_color = DB::table('product_color')->get();
		return response()->json(['success'=> 'Color Deleted Successfully', 'data' =>$product_color], $this->successStatus);

	}

	public function statusColor(Request $request)
   	{
   		$id = request()->getContent();

   		$product_size = DB::table('product_color')->where('id','=',$id)->get();

   		if($product_size[0]->status == 'Active')
   		{
   			$product_size = DB::table('product_color')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$product_size = DB::table('product_color')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}


	public function colorSearching(Request $request)
   	{
   		$requestData = json_decode(request()->getContent(), true);


   		// return $requestData['user_id'];
		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			DB::enableQueryLog();
			  $search_data = DB::table('product_color')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('fk_user_id', '=', $requestData['user_id']) 
			->where(function($query)  use ($requestData) {
                return $query->where('color_name', '=', $requestData['search_value'])
					->orWhere('color_code', '=', $requestData['search_value']);
            })->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product_color')
			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id']) 
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product_color')
			->where('color_name', '=', $requestData['search_value'])
			->where('fk_user_id', '=', $requestData['user_id']) 
			->orWhere('color_code', '=', $requestData['search_value'])
			->get();
		}


		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == ''))
		 {
			$search_data = DB::table('product_color')->where('fk_user_id', '=', $requestData['user_id']) ->get();
		} 




		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') && ($requestData['user_id'] != '') ) 
		{

			$search_data = DB::table('product_color')
			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id']) 
			->distinct()
			->get(['color_code','color_name']);
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);  
   	}


   	//Size
	public function addSize() 
	{

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);
		/*
		if(isset($requestData['form_data']['status'])) 
		{*/
			$inputs = $requestData['form_data'];
			$inputs['created_date'] =  $date ;
			$inputs['fk_product_id'] =  $requestData['fk_product_id'] ;
			$inputs['fk_user_id'] =  $requestData['fk_user_id'] ;

			//	return $inputs ;
			$product_size = DB::table('product_size')->insert([$inputs]);

		/*} else {

			$inputs['created_date'] =  $date ;
			$inputs['fk_product_id'] =  $requestData['fk_product_id'] ;
			$inputs['fk_user_id'] =  $requestData['fk_user_id'] ;
			$inputs['status'] =  'Active';
			foreach ($requestData['form_data'] as $value) 
			{
				$inputs['size_name'] = $value['item_text'];
				$product_size = DB::table('product_size')->insert([$inputs]);
			
			}
		}
		*/
		if($product_size)
		{
			return response()->json(['success'=>'Data Inserted Successfully'], $this->successStatus);
		}

		/*$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);

		$inputs = $requestData['form_data'];
		$inputs['created_date'] =  $date ;
		$inputs['updated_date'] =  $date ;

		$product_attribute = DB::table('product_size')->insert([$inputs]);

		if($product_attribute)
		{

			return response()->json(['success'=>'Data Inserted Successfully'], $this->successStatus);
		}*/

	}
	

	public function getSize(Request $request)
	{
		$product_id =  $request->product_id;
		$attribute = DB::table('product_size')->where('fk_product_id','=',$product_id)->get();
		return response()->json(['success' => $attribute],$this->successStatus);
	}



	public function deleteSize(Request $request)
	{

		$id =  $request->del_id;
		DB::table('product_size')->where('id', '=', $id)->delete();

		$product_size = DB::table('product_size')->get();
		return response()->json(['success'=> 'Size Deleted Successfully', 'data' =>$product_size], $this->successStatus);

	}


	public function changeSizeStatus(Request $request)
   {
   		$id = request()->getContent();

   		$product_size = DB::table('product_size')->where('id','=',$id)->get();

   		if($product_size[0]->status == 'Active')
   		{
   			$product_size = DB::table('product_size')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$product_size = DB::table('product_size')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}
   	

   	public function sizeSearching(Request $request)
	{

	    $requestData = json_decode(request()->getContent(), true);

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			// return $requestData['dropdown_value'];
			DB::enableQueryLog();
			$search_data = DB::table('product_size')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('size_name', '=', $requestData['search_value'])
			->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product_size')
			->where('status', '=', $requestData['dropdown_value']) 
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product_size')
			->where('size_name', '=', $requestData['search_value'])
			->get();
		}


		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') && ($requestData['user_id'] != '') ) 
		{
			$search_data = DB::table('product_size')
			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id']) 
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('product_size')->get();
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);  
	}



	public function addTag() {

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);
		
		$inputs = $requestData['form_data'];
		$inputs['created_date'] =  $date ;

		$inputs['fk_product_id'] =  $requestData['fk_product_id'] ;
		$inputs['fk_user_id'] =  $requestData['fk_user_id'] ;


		$product_attribute = DB::table('product_tags')->insert([$inputs]);

		if($product_attribute)
		{
			//$product_list = DB::table('product')->get();
			return response()->json(['success'=>'Data Inserted Successfully'], $this->successStatus);
		}

	}

	public function getTag(Request $request) 
	{

		$product_id =  $request->product_id;

		$tag = DB::table('product_tags')->where('fk_product_id','=',$product_id)->orderby('id','desc')->get();
		return response()->json(['success' => $tag],$this->successStatus);
	}


   	public function deleteTag(Request $request)
   {
   		$id = request()->getContent();

   		//return $id;

   		$product_tags = DB::table('product_tags')->where('id','=',$id)->get();

   		if($product_tags[0]->status == 0)
   		{
   			$product_tags = DB::table('product_tags')->where('id', '=', $id )->update(['status'=>'1']);
   		}else{
   			$product_tags = DB::table('product_tags')->where('id', '=', $id )->update(['status'=>'0']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}


   	public function statusTag(Request $request)

   {

   		$id = request()->getContent();

   		//return $id;

   		$product_tags = DB::table('product_tags')->where('id','=',$id)->get();

   		if($product_tags[0]->status =='Active')
   		{
   			$product_tags = DB::table('product_tags')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$product_tags = DB::table('product_tags')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}

	public function tagSearching(Request $request)
   {
   		$requestData = json_decode(request()->getContent(), true);

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			// return $requestData['dropdown_value'];
			DB::enableQueryLog();
			  $search_data = DB::table('product_tags')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('fk_user_id', '=', $requestData['user_id'])
			->where(function($query)  use ($requestData) {
                return $query->where('tag_name', '=', $requestData['search_value']);
				
            })->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('product_tags')
			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id'])
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('product_tags')
			->where('tag_name', '=', $requestData['search_value'])
			->where('fk_user_id', '=', $requestData['user_id'])
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') && ($requestData['user_id'] != '') ) 
		{
			$search_data = DB::table('product_tags')
			->where('status', '=', $requestData['dropdown_value']) 
			->where('fk_user_id', '=', $requestData['user_id']) 
			->get();
		} 



		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('product_tags')->where('fk_user_id', '=', $requestData['user_id'])->get();
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);  
   	}




 	public function upload($img) {
	 	$base64_string_img = explode( ',', $img);
	 	$mime=$base64_string_img[0];
	 	$mime_split_without_base64=explode(';', $mime,2);
	    $mime_split=explode('/', $mime_split_without_base64[0],2);

	     if(count($mime_split)==2)
	    {
	        $extension=$mime_split[1];
	        if($extension=='jpeg')$extension='jpg';
	        if($extension=='png')$extension='png';
	        if($extension=='gif')$extension='gif';
	        $filename_path=md5(time().uniqid()).'.'.$extension;
	    }
	     $destinationPath = public_path('uploads/');
	     $decoded=base64_decode($base64_string_img[1]);
	    file_put_contents($destinationPath.$filename_path,$decoded);
	    return $filename_path;
    
   	}

   	public function multipleUpload(Request $request) {

		$requestData = json_decode(request()->getContent(), true);

		foreach (($requestData['img']) as $value) {
		 	$base64_string_img = explode( ',', $value);
		 	$mime=$base64_string_img[0];
		 	$mime_split_without_base64=explode(';', $mime,2);
		    $mime_split=explode('/', $mime_split_without_base64[0],2);

		     if(count($mime_split)==2)
		    {
		        $extension=$mime_split[1];
		        if($extension=='jpeg')$extension='jpg';
		        if($extension=='png')$extension='png';
		        if($extension=='gif')$extension='gif';
		        $filename_path=md5(time().uniqid()).'.'.$extension;
		    }
		     $destinationPath = public_path('uploads/');
		     $decoded=base64_decode($base64_string_img[1]);

		    file_put_contents($destinationPath.$filename_path,$decoded);
		    
		    if(isset($filename_path)){
		    $input['gallery_img'] = $filename_path;
		    $input['fk_product_id'] = $requestData['fk_product_id'];
		    // $input['fk_product_id'] = 1;
		    // return $input;
		    $img_path = DB::table('product_gallery')->insert([$input]);
		    $res = 1;
		    } else {
		    	$res = 0;
		    	
		    }
		}
		if($res == 0){
			return response()->json(['error' => 'Image not uploaded. Please try again.'],$this->successStatus);
		} else {
			return response()->json(['success' => 'Image uploaded successfully'],$this->successStatus);
		}
	}



   	public function addProductSubCat(Request $request)
	{

		$requestData = json_decode(request()->getContent(),true);
		$inputs = $requestData['form_data'];

		// return $inputs;

		$product = DB::table('products_sub_category')->insert([$inputs]);
		if($product)
		{

			// $getProduct = DB::table('products_sub_category')->where('fk_product_id', '=', $requestData['form_data']['fk_product_id'])->get([$inputs]);

			return response()->json(['success'=>'Data Inserted Successfully', 'getProduct'=>$product  ],   $this->successStatus);
		}
	}


	


	public function productSubCatList(Request $request)
	{

		$product_id =  $request->product_id;


		$products_sub_cat =  DB::table('products_sub_category')
		->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id')
		->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id')
		->where('products_sub_category.fk_product_id','=',$product_id)
        ->select('products_sub_category.pk_id','products_sub_category.fk_product_id','ms_sub_category.name','ms_category.category_name','ms_menu.menu_name')
        ->get();


		return response()->json(['success'=>$products_sub_cat], $this->successStatus);	
	
	}


	public function addProductType(Request $request)
	{

		$requestData = json_decode(request()->getContent(),true);
		$inputs = $requestData['form_data'];

		$product = DB::table('products_types')->insert([$inputs]);
		if($product)
		{

			return response()->json(['success'=>'Data Inserted Successfully' ],   $this->successStatus);
		}
	}


	public function productTypeList(Request $request)
	{

		$product_id =  $request->product_id;


		$products_types =  DB::table('products_types')
		->where('products_types.fk_product_id','=',$product_id)
		->join('ms_product_types', 'products_types.fk_product_type_id', '=', 'ms_product_types.id')
        ->select('products_types.pk_id','products_types.fk_product_type_id','ms_product_types.type','ms_product_types.status')
        ->get();


		return response()->json(['success'=>$products_types], $this->successStatus);	
	
	}



	public function productTypeSearch(Request $request)
	{
		$requestData = json_decode(request()->getContent(), true);

		

		/*if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{

			$search_data = DB::table('ms_menu')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('menu_name', '=', $requestData['search_value'])
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '') ) 
		{

				//return $requestData;
			$search_data = DB::table('ms_menu')
			->where('status', '=', $requestData['dropdown_value']) 
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('ms_menu')
			->where('menu_name', '=', $requestData['search_value'])
			->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')){
			$search_data = DB::table('ms_menu')->get();
		} 
		*/
		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']=='' ))
		{
			
			$search_data = DB::table('ms_product_types')
			->where('status', '=', $requestData['dropdown_value'])  
			->orderBy('type','ASC')
			->get();
		}
	    return response()->json(['success' => $search_data],$this->successStatus);
	}


	public function productTypeDel(Request $request)
	{

		$id = request()->getContent();

		$product_id = DB::table('products_types')->where('pk_id','=',$request->delid)->first();


   		$product_tags = DB::table('products_types')->where('pk_id','=',$request->delid)->delete();

		$products_types =  DB::table('products_types')
		->where('products_types.fk_product_id','=',$product_id->fk_product_id)
		->join('ms_product_types', 'products_types.fk_product_type_id', '=', 'ms_product_types.id')
        ->select('products_types.pk_id','products_types.fk_product_type_id','ms_product_types.type','ms_product_types.status')
        ->get();


		return response()->json(['success'=>$products_types], $this->successStatus);
	}


	
	public function productDrp(Request $request)
	{

	

		$requestData = json_decode(request()->getContent(), true);

		$fk_sub_category_id =  $requestData['sub_category_id'];

		$products_ids =  DB::table('products_sub_category')
		->where('fk_sub_category_id','=',$fk_sub_category_id)
		->join('product', 'products_sub_category.fk_product_id', '=', 'product.product_id')
        ->select('product_id', 'product_name')  
			->orderBy('product_name','ASC')
        ->get();

		return response()->json(['success'=>$products_ids], $this->successStatus);	
	
	}




	public function addProductAccess() {

		$date = date('Y-m-d h:i:s');
		$requestData = json_decode(request()->getContent(),true);

		$inputs = $requestData['form_data'];
		$inputs['created_date'] =  $date ;

		//return $requestData['form_data']['fk_user_id'];

		$product_accessories = DB::table('product_accessories')->insert([$inputs]);

		if($product_accessories)
		{

			/*$products_access =  DB::table('product_accessories')
			->join('ms_category', 'ms_category.id', '=', 'product_accessories.fk_category')
			->join('ms_sub_category', 'ms_sub_category.id', '=', 'product_accessories.fk_sub_cat')
			->join('product', 'product.product_id', '=', 'product_accessories.accessory_product_id')
			->where('product_accessories.fk_user_id','=',$requestData['form_data']['fk_user_id'])
	        ->select('ms_category.category_name','ms_sub_category.name', 'product.product_name')
	        ->get();
			*/
			return response()->json(['success'=>'Data Inserted Successfully'], $this->successStatus);
		}
	}



	public function productAccessList() {

			$requestData = json_decode(request()->getContent(),true);
			//return $requestData;
			//DB::enableQueryLog();
			$products_access =  DB::table('product_accessories')
			->join('ms_category', 'product_accessories.fk_category', '=','ms_category.id' )
			->join('ms_sub_category', 'product_accessories.fk_sub_cat', '=', 'ms_sub_category.id')
			->join('product', 'product_accessories.accessory_product_id', '=', 'product.product_id')
			->where('product_accessories.fk_acc_product_id','=',$requestData)
	        ->select('product_accessories.pk_accessory_id','product_accessories.fk_acc_product_id','product.product_name','ms_category.category_name' ,'ms_sub_category.name')
	        ->get();

			// $products_access =  DB::raw('select * from product_accessories as pa left join ms_category as mc on mc.id = pa.fk_category left join ms_sub_category as msc on mmsc.id = pa.fk_sub_cat left where ');
	  
	   
			return response()->json(['success'=>$products_access], $this->successStatus);
	}




	public function delProductAccess(Request $request)
	{

		$id = request()->getContent();

		$product_id = DB::table('product_accessories')->where('pk_accessory_id','=',$request->delid)->first();


   		$product_tags = DB::table('product_accessories')->where('pk_accessory_id','=',$request->delid)->delete();



   		//$data = DB::table('product_accessories')->where('fk_acc_product_id','=',$product_id->fk_acc_product_id)->get();

   			$data =  DB::table('product_accessories')
			->join('ms_category', 'product_accessories.fk_category', '=','ms_category.id' )
			->join('ms_sub_category', 'product_accessories.fk_sub_cat', '=', 'ms_sub_category.id')
			->join('product', 'product_accessories.accessory_product_id', '=', 'product.product_id')
			->where('product_accessories.fk_acc_product_id','=',$product_id->fk_acc_product_id)
	        ->select('product_accessories.pk_accessory_id','product_accessories.fk_acc_product_id','product.product_name','ms_category.category_name' ,'ms_sub_category.name')
	        ->get();

   			return response()->json(['success'=>$data], $this->successStatus);
	}


	public function productSubCatDelete(Request $request)
	{
	
		//$id = request()->getContent();

		$product_id = DB::table('products_sub_category')->where('pk_id','=',$request->delid)->first();


   		$product_tags = DB::table('products_sub_category')->where('pk_id','=',$request->delid)->delete();



   		$product_id =  $product_id->fk_product_id;


		$data =  DB::table('products_sub_category')
		->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id')
		->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id')
		->where('products_sub_category.fk_product_id','=',$product_id)
        ->select('products_sub_category.pk_id','products_sub_category.fk_product_id','ms_sub_category.name','ms_category.category_name','ms_menu.menu_name')
        ->get();


        return response()->json(['success'=>$data], $this->successStatus);

	}

	public function addProductBulk(Request $request){
		$requestData = json_decode(request()->getContent(), true);

		$file_path = $this->upload($requestData['form_data']);
		
		$newArray = $this->csvToJsonConversion($file_path);

		$data_return = DB::table('product')->insert($newArray);

		return json_encode($data_return);

	}

	public function dropshipProductDelete(Request $request){
		$requestData = json_decode(request()->getContent(), true);
		$product_id = $requestData['product_id'];
		$dropship_id = $requestData['dropship_id'];
		
		$vendor_collections = DB::table('vendor_collections')->where('id', $dropship_id)->first();

		$vendor_collections_products_array = explode(',', explode(']', explode('[', $vendor_collections->products_data)[1])[0]);

		if (($key = array_search($product_id, $vendor_collections_products_array)) !== false) {
		    unset($vendor_collections_products_array[$key]);
		}
		$arr = '[';
		
		$total_ele = count($vendor_collections_products_array);
		
		$i = 1;
		
		foreach($vendor_collections_products_array as $val){
		
			if($total_ele != $i){
		
				$arr .= $val.',';
		
			}else{
		
				$arr .= $val;
		
			}
		
			$i++;	
		
		}
		
		$arr .= ']';
		
		DB::table('vendor_collections')->where('id', $dropship_id)->update(['products_data' => $arr]);
				

		$product = DB::table('product')
                    ->whereIn('product_id', $vendor_collections_products_array)
                    ->get();


		//$product = DB::table('product')->get();
		return response()->json(['success'=>'Data Deleted Successfully', 'data'=>$product], $this->successStatus);
	}

	public function dropshipDelete(Request $request){
		$id = $request->del_id;

				DB::table('vendor_collections')
					->where('id','=', $id)
					->update(['deleted_status' => 'Deleted']);

		$product = DB::table('vendor_collections')
					->where('deleted_status','=', 'Not Deleted')
					->orderBy('id', 'desc')
					->get();
		return response()->json(['success'=>'Data Deleted Successfully', 'data'=>$product], $this->successStatus);
	}




}
