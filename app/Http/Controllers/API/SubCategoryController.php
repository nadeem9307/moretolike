<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SubCategoryController extends Controller
{

   public $successStatus = 200;

   public function subCategoryList()
   {

	   	$subCategory = DB::table('ms_sub_category')

	   	->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 

	   	->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 

	   	->where('ms_sub_category.deleted_status','=','Not deleted')

	   	->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')

	   	->orderBy('id', 'desc')

	   	->get();

		$menu = DB::table('ms_menu')
				->where('status', 'Active')
				->where('deleted_status', 'Not deleted')
				->get();

		return response()->json(['success' => $subCategory,'menu'=>$menu],$this->successStatus);
   	}


   public function deleteSubCategory(Request $request)
   {
   		$id = $request->del_id;

   		DB::table('ms_sub_category')->where('id','=',$id)->update(['deleted_status' => 'Deleted']);

   		$subCategory = DB::table('ms_sub_category')

	   	->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 

	   	->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 

	   	->where('ms_sub_category.deleted_status','=','Not deleted')

	   	->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')

	   	->orderBy('id', 'desc')

	   	->get();

	   	$menu = DB::table('ms_menu')	
		   	->where('deleted_status','=','Not deleted')
		   	->where('status', 'Active')->get();

	   	return response()->json(['success'=>$subCategory, 'data'=>$menu], $this->successStatus);
   	}



 	public function SubCategoryStatus()
   {

   		$id = request()->getContent();

   		$subCategory = DB::table('ms_sub_category')->where('id','=',$id)->get();

   		if($subCategory[0]->status == 'Active')
   		{
   			$subCategory = DB::table('ms_sub_category')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$subCategory = DB::table('ms_sub_category')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		$menu = DB::table('ms_menu')->where('deleted_status','=', 'Not deleted')->where('status', 'Active')->get();

   		return response()->json(['success'=>$subCategory,'data'=>$menu], $this->successStatus);
   }


   public function addSubCategory()
   {
   		$date = date('Y-m-d h:i:s');

		$requestData = json_decode(request()->getContent(), true);

		$input = $requestData['form_data'];

		$input['created_at'] = $date ;
		$input['updated_at'] = $date ;

		

		$sub_category = DB::table('ms_sub_category')->insert([$input]);

		if($sub_category)
		{

			$subCategory = DB::table('ms_sub_category')

			->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 

		   	->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 

		   	->where('ms_sub_category.deleted_status','=','Not deleted')

		   	->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')

		   	->orderBy('id', 'desc')

		   	->get();

		  	$menu = DB::table('ms_menu')
		  	 	->where('deleted_status','=','Not deleted')
			  	->where('status', 'Active')
			  	->get();
		   	
		   	return response()->json(['success'=>$subCategory,'menu'=>$menu], $this->successStatus);
		}
   }


   	public function getCategory()
   {

   		$requestData = json_decode(request()->getContent(), true);

   		$category = DB::table('ms_category')
   		->where('menu_id','=', $requestData['menu_id'])
   		->where('status','=','Active')
   		->where('deleted_status','=','Not deleted')
   		->orderBy('category_name','ASC')
   		->get();
   		return response()->json(['success'=>$category], $this->successStatus);
   }


   public function getSubCategory()
   {

   		$requestData = json_decode(request()->getContent(), true);
   		$category = DB::table('ms_sub_category')
   		->where('category_id','=', $requestData['category_id'])
   		->orderBy('name','ASC')
   		->get();


   		return response()->json(['success'=>$category], $this->successStatus);
   }

   public function getDataSubCategoryByName(Request $request) 
	{
		$sub_category = DB::table('ms_sub_category') 
		->where('name','=', $request->sub_cat_name)
		->first();
		return response()->json(['success' => $sub_category],$this->successStatus);
	}



   public function getSubCategoryData(Request $request)
   {

   		$subCategory = DB::table('ms_sub_category')
				   		->where('ms_sub_category.id','=', $request->sub_cat_id)
				   		->first();
   		return response()->json(['success'=>$subCategory], $this->successStatus);
   }



   public function SubCategorySearch()
   {
   		$requestData = json_decode(request()->getContent(), true);
		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{
			$search_data = DB::table('ms_sub_category')
			->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 
	   		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 
	   		->where('ms_sub_category.deleted_status','=','Not deleted')
			->where('ms_sub_category.status', '=', $requestData['dropdown_value'])   
			->where('ms_sub_category.name', '=', $requestData['search_value'])
			->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')
			->orderBy('id', 'desc')
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_sub_category')
			->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 
	   		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 
			->where('ms_sub_category.status', '=', $requestData['dropdown_value']) 
			->where('ms_sub_category.deleted_status','=','Not deleted')
			->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')
			->orderBy('id', 'desc')
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('ms_sub_category')
			->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 
	  		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 
			->where('ms_sub_category.name', '=', $requestData['search_value'])
		 	->where('ms_sub_category.deleted_status','=','Not deleted')
		 	->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')
		 	->orderBy('id', 'desc')
			->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_sub_category')
			->join('ms_menu', 'ms_sub_category.menu_id', '=', 'ms_menu.id') 
	   		->join('ms_category', 'ms_sub_category.category_id', '=', 'ms_category.id') 
	   	 	->where('ms_sub_category.deleted_status','=','Not deleted')
	   		->select('ms_sub_category.*', 'ms_menu.menu_name', 'ms_category.category_name')
	   		->orderBy('id', 'desc')
			->get();
		} 

	    return response()->json(['success' => $search_data],$this->successStatus);
   }




   public function updateSubCategory(Request $request)
   {

		$requestData = json_decode(request()->getContent(), true);



		$id = $requestData['form_data']['id'];

		unset( $requestData['form_data']['id']);

		$input = $requestData['form_data'];


		$sub_category = DB::table('ms_sub_category')->where('id','=',$id)->update($input);

		
		return response()->json(['success'=>'Update Sub Cat'], $this->successStatus);
		
   }


}
