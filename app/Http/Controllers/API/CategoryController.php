<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CategoryController extends Controller
{
   	public $successStatus = 200;

	public function category_listing() 
	{
		$category = DB::table('ms_category') 
		->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id') 
		->where('ms_category.deleted_status','=','Not deleted')
		->select('ms_category.*', 'ms_menu.menu_name')
		->orderBy('category_name','ASC')
		->get();

		$menu = DB::table('ms_menu')
		->where('deleted_status', 'Not deleted')
		->where('status', 'Active')->orderBy('menu_name','ASC')->get();


		return response()->json(['success' => $category,'menu'=>$menu],$this->successStatus);
	}


	public function getDataCategory(Request $request) 
	{
		$category = DB::table('ms_category') 
		->where('id','=', $request->cat_id)
		->first();

		$menu = DB::table('ms_menu')
		->where('deleted_status', 'Not deleted')
		->where('status', 'Active')->get();


		return response()->json(['success' => $category,'menu'=>$menu],$this->successStatus);
	}
public function getDataCategoryByName(Request $request) 
	{
		$category = DB::table('ms_category') 
		->where('category_name','=', $request->category_name)
		->first();
		return response()->json(['success' => $category],$this->successStatus);
	}
	// public function getDataCategory(Request $request) 
	// {
	// 	$category = DB::table('ms_category') 
	// 	->where('id','=', $request->cat_id)
	// 	->first();

	// 	$menu = DB::table('ms_menu')
	// 	->where('deleted_status', 'Not deleted')
	// 	->where('status', 'Active')->get();


	// 	return response()->json(['success' => $category],$this->successStatus);
	// }


	public function updateCat(Request $request) 
	{



		$requestData = json_decode(request()->getContent(), true);


		$id = $requestData['form_data']['id'];
		unset($requestData['form_data']['id']);

		$input = $requestData['form_data'];
	

		$category1 = DB::table('ms_category')
					->where('id','=',$id)
					->update($input);



		return response()->json(['success' => 'Updated Successfully'],$this->successStatus);
	}



	






	// for accessories
	public function categoryListAss() 
	{
		$categoryListAss = DB::table('ms_category')->where('status', 'Active')->where('deleted_status', 'not deleted')->orderBy('category_name','ASC')->get();

		//$menu = DB::table('ms_menu')->where('product_type', '0')->where('status', '1')->get();

		return response()->json(['success' => $categoryListAss],$this->successStatus);
	}


	public function addCategory(Request $request)
	{
		$date = date('Y-m-d h:i:s');

		$requestData = json_decode(request()->getContent(), true);

		$input = $requestData['form_data'];
		$input['created_at'] = $date ;
		$input['updated_at'] = $date ;

		$category1 = DB::table('ms_category')->insert([$input]);

		if($category1)
		{

			$category = DB::table('ms_category') 
			->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id') 
			->where('ms_category.deleted_status', 'Not deleted')
			->select('ms_category.*', 'ms_menu.menu_name')
			->orderBy('id', 'desc')
			->get();

			return response()->json(['success' => 'inserted Successfully', 'data' =>$category], $this->successStatus);
		}
	}



	public function deleteCategory(Request $request)
	{
		$id = $request->del_id;

		DB::table('ms_category')->where('id', '=', $id)->update(['deleted_status' => 'Deleted']);

		$category = DB::table('ms_category') 
		->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id') 
		->where('ms_category.deleted_status','=','Not deleted')
		->select('ms_category.*', 'ms_menu.menu_name')
		->orderBy('id', 'desc')
		->get();
		
		return response()->json(['success' => 'Category Deleted Successfully', 'data' =>$category], $this->successStatus);
	}

	public function CategoryStatus(Request $request)
	{

		$id = request()->getContent();	

		//return $id;
		
		$category = DB::table('ms_category')->where('id', '=', $id)->get();

		if($category[0]->status == 'Active')
		{
		$category =DB::table('ms_category')->where('id', '=', $id )->update(['status'=>'Inactive']);

		}
		else
		{
		$category =DB::table('ms_category')->where('id', '=', $id )->update(['status'=>'Active']);	
		}

		return response()->json(['success' => 'Category Updated Successfully', 'data' =>$category], $this->successStatus);
	}
	


	public function CategorySearch(Request $request)
	{
		$requestData = json_decode(request()->getContent(), true);
		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{
			$search_data = DB::table('ms_category')
			->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id')
			->where('ms_category.status', '=', $requestData['dropdown_value'])   
			->where('ms_category.category_name', '=', $requestData['search_value'])
			->where('ms_category.deleted_status','=','Not deleted')
			->select('ms_category.*', 'ms_menu.menu_name')  
			->orderBy('category_name','ASC')
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_category')
			->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id')
			->where('ms_category.status', '=', $requestData['dropdown_value']) 
			->where('ms_category.deleted_status','=','Not deleted')
			->select('ms_category.*', 'ms_menu.menu_name')  
			->orderBy('category_name','ASC')
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('ms_category')
			->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id')
			->where('ms_category.category_name', '=', $requestData['search_value'])
			->where('ms_category.deleted_status','=','Not deleted')
			->select('ms_category.*', 'ms_menu.menu_name')  
			->orderBy('category_name','ASC')
			->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_category')
			->join('ms_menu', 'ms_category.menu_id', '=', 'ms_menu.id')
			->where('ms_category.deleted_status','=','Not deleted')
			->select('ms_category.*', 'ms_menu.menu_name')  
			->orderBy('category_name','ASC')
			->get();
		} 

	    return response()->json(['success' => $search_data],$this->successStatus);

	}


	
}
