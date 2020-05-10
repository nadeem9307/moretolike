<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BannerController extends Controller
{
    //
	public $successStatus = 200;

	public function addBanner()
	{
		$date = date('Y-m-d h:i:s');

		$requestData = json_decode(request()->getContent(), true);

		$input = $requestData['form_data'];
		$file_path = $this->upload($requestData['form_data']['banner_img']);
		$input['banner_img'] = $file_path;
		// return $input;
		$banner = DB::table('ms_banner')->insert([$input]);

		if($banner)
		{
		$banners = DB::table('ms_banner')->get();
		return response()->json(['success'=>'Data Inserted Successfully','data'=>$banners], $this->successStatus);
		}
	}

	public function addSlider()
	{
		$date = date('Y-m-d h:i:s');

		$requestData = json_decode(request()->getContent(), true);

		$input = $requestData['form_data'];
		
		$banner = DB::table('slider')->insert([$input]);

		if($banner)
		{
		$banners = DB::table('slider')->get();
		return response()->json(['success'=>'Data Inserted Successfully','data'=>$banners], $this->successStatus);
		}
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

	    //to resize image
	    //$this->imageResize($filename_path, $destinationPath, $extension, '50', '235', 'banner_');
	    //imageResize($filename, $destinationPath, $extension, $newheight, $newwidth, $tag = 'thumb_')
		$this->imageResize($filename_path, $destinationPath, $extension, '281', '410', '281X410_');
		$this->imageResize($filename_path, $destinationPath, $extension, '143', '1401', '143X1401_');
		$this->imageResize($filename_path, $destinationPath, $extension, '308', '330', '308X330_');
		$this->imageResize($filename_path, $destinationPath, $extension, '262', '446', '262X446_');
		$this->imageResize($filename_path, $destinationPath, $extension, '208', '447', '208X447_');
		

	    return $filename_path;
    
   	}

public function bannerListing() {

	$bannerData = DB::table('ms_banner')
				  ->where('deleted_status','=','Not deleted')
				  ->get();
	return response()->json(['banner'=>$bannerData, $this->successStatus]);	  
}

public function sliderListing() {

	$bannerData = DB::table('slider')->join('product', 'product.product_id', '=', 'slider.product_id')
				  ->get();
	return response()->json(['banner'=>$bannerData, $this->successStatus]);	    
}

public function productListing(){
	$productData = DB::table('product')->select('product_id', 'product_name')->get();
	return response()->json(['product'=>$productData, $this->successStatus]);	 
}

 	public function bannerStatus(Request $request)
   {
   		 $id = request()->getContent();

   	$banner = DB::table('ms_banner')->where('pk_banner_id','=',$id)->get();

   		if($banner[0]->status == 'Active')
   		{
   			$banner = DB::table('ms_banner')->where('pk_banner_id', '=', $id )->update(['status'=>'Inactive']);
   		}else{
   			$banner = DB::table('ms_banner')->where('pk_banner_id', '=', $id )->update(['status'=>'Active']);
   		}

   		return response()->json(['success'=>'Status Updated Successfully'], $this->successStatus);
   	}

   	public function sliderDelete(Request $request, $menu_id){

   		$id = request()->getContent();
   		$banner = DB::table('slider')->where('id','=',$menu_id)->delete();
   		$bannerData = DB::table('slider')->join('product', 'product.product_id', '=', 'slider.product_id')
				  ->get();


   		return response()->json(['success'=>'Slider Deleted Successfully', 'banner'=>$bannerData], $this->successStatus);
   	}


}

