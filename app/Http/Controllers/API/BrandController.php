<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BrandController extends Controller
{
    public $successStatus = 200;



	public function brand_listing() 
	{
		$brand = DB::table('ms_brands')
				->where('deleted_status','=','Not deleted')
				->orderBy('id', 'desc')
				->get();
		return response()->json(['success' => $brand],$this->successStatus);
	}

	public function addBrand()
	{
		$date = date('Y-m-d h:i:s');

		$requestData = json_decode(request()->getContent(), true);

		$file_path = $this->upload($requestData['form_data']['brand_img']);

		$destinationPath = public_path('uploads/');
		
		$file_arr = explode('.', $file_path);
		
		$extension = $file_arr[count($file_arr)-1];
		//imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
		$this->imageResize($file_path, $destinationPath, $extension, '60', '200', '60X200_');
		$this->imageResize($file_path, $destinationPath, $extension, '75', '75', '75X75_');


		$input = $requestData['form_data'];
		$input['brand_img'] = $file_path;

		$input['created_date'] = $date ;
		$input['updated_date'] = $date ;

		$brands = DB::table('ms_brands')->insert([$input]);

		if($brands)
		{
		$brands = DB::table('ms_brands')
			->where('deleted_status','=','Not deleted')
			->orderBy('id', 'desc')
			->get();
		return response()->json(['success'=>'Data Inserted Successfully','data'=>$brands], $this->successStatus);
		}
	}


	public function getBrandData(Request $request) 
	{
		$brand = DB::table('ms_brands')
				->where('id','=',$request->brand_id)
				->first();
		return response()->json(['success' => $brand],$this->successStatus);
	}
	public function getBrandDataByName(Request $request) 
	{
		$brand = DB::table('ms_brands')
				->where('name','=',$request->brand_name)
				->first();
		return response()->json(['success' => $brand],$this->successStatus);
	}
	public function updateBrand()
	{

		$requestData = json_decode(request()->getContent(), true);

		if(isset($requestData['form_data']['brand_img']) && !empty($requestData['form_data']['brand_img']))
		{

			$file_path = $this->upload($requestData['form_data']['brand_img']);
			$destinationPath = public_path('uploads/');
		
			$file_arr = explode('.', $file_path);
			
			$extension = $file_arr[count($file_arr)-1];
			//imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
			$this->imageResize($file_path, $destinationPath, $extension, '60', '200', '60X200_');
			$this->imageResize($file_path, $destinationPath, $extension, '75', '75', '75X75_');

			unset($requestData['form_data']['old_brand_logo']);

		}else{

			$file_path = $requestData['form_data']['old_brand_logo'];
		}


		$id  = $requestData['form_data']['id'];
		unset($requestData['form_data']['id']);
		unset($requestData['form_data']['old_brand_logo']);

		$input = $requestData['form_data'];
		$input['brand_img'] = $file_path;


		$brands = DB::table('ms_brands')->where('id','=',$id)->update($input);

		
		return response()->json(['success'=>'Data Updated Successfully'], $this->successStatus);
		
	}



	public function deleteBrand(Request $request)
   {
   		$id = $request->del_id;

   		DB::table('ms_brands')->where('id','=',$id)->update(['deleted_status' => 'Deleted']);

	  	$brands = DB::table('ms_brands')
				  	->where('deleted_status','=','Not deleted')
				  	->orderBy('id', 'desc')
				  	->get();

	   	return response()->json(['success'=>'Data Deleted Successfully', 'data'=>$brands], $this->successStatus);
   	}

   	public function brandStatus(Request $request)
   {
   		$id = request()->getContent();

   		$brands = DB::table('ms_brands')->where('id','=',$id)->get();

   		if($brands[0]->status == 'Active')
   		{
   			$brands = DB::table('ms_brands')->where('id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$brands = DB::table('ms_brands')->where('id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}


   	public function BrandSearch()
   {
   		$requestData = json_decode(request()->getContent(), true);
		if(($requestData['dropdown_value']!='' ) && ($requestData['search_value']!='' ))
		{
			$search_data = DB::table('ms_brands')
			->where('status', '=', $requestData['dropdown_value'])   
			->where('name', '=', $requestData['search_value'])
			->where('deleted_status','=','Not deleted')
			->orderBy('name','ASC')
			->get();
		}

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_brands')
			->where('status', '=', $requestData['dropdown_value'])
			->where('deleted_status','=','Not deleted') 
			->orderBy('name','ASC')
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('ms_brands')
			->where('name', '=', $requestData['search_value'])
			->where('deleted_status','=','Not deleted')
			->orderBy('name','ASC')
			->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('ms_brands')
			->where('deleted_status','=','Not deleted')
			->orderBy('name','ASC')
			->get();
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


   	

}
