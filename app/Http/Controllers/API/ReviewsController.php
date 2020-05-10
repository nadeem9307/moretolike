<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReviewsController extends Controller
{
	public $successStatus = 200;

	
	public function reviewsListing()
	{
		$customer = DB::table('reviews')
					//->where('deleted_status','=', 'Not Deleted')
					->orderBy('id', 'desc')
					->get();
		return response()->json(['success' => $customer], $this->successStatus);
	}


	public function reviewsInfo(Request $request)
	{
		$reviews_id = $request->info_id;
		$customer = DB::table('reviews')
					->where('deleted_status','=', 'Not Deleted')
					->where('id','=', $reviews_id)
					->first();
		return response()->json(['success' => $customer], $this->successStatus);
	}


	public function reviewsStatus(Request $request)
	{

		$id = request()->getContent();

		$customer = DB::table('reviews')
				->where('id', '=', $id)
				->get();
		
		if($customer[0]->status == '1')
		{
		$customer = DB::table('reviews') ->where('id','=', $id)->update(['status' => '0']);
		}
		else
		{
		$customer = DB::table('reviews') ->where('id','=', $id)->update(['status' => '1']);
		}
	    return response()->json(['success' => $customer],$this->successStatus);
	}


	public function reviewsDelete(Request $request)
	{

				DB:: table('reviews')
				->where('id', '=', $request->del_id)
				->update(['deleted_status' => 'Deleted']);

				
		$customer = DB::table('reviews')
					->where('deleted_status','=', 'Not Deleted')
					->orderBy('id', 'desc')
					->get();  
		return response()->json(['success'=> 'Customer Deleted Successfully', 'data' =>$customer ], $this->successStatus);
	}

	public function serach(Request $request)
	{
		$requestData = json_decode(request()->getContent(), true);

		$search_value = explode(' ', $requestData['search_value']);

		//return $search_value[0];

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			
			/*$search_data = DB::table('reviews')
						->where('status', '=', $requestData['dropdown_value'])   
						->where('deleted_status','=', 'Not Deleted')
						//->where(function($query)  use ($requestData) {
                		//return $query->where('f_name', 'like', $requestData['search_value'])
						->where('f_name', 'like', $search_value[0])
		                ->orWhere('email', 'like', $search_value[0])
						->orWhere('contact_no', 'like', $search_value[0])
						->orderBy('id', 'desc')
						->get();*/
					
           // })->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('reviews')
							//->where('status', '=', $requestData['dropdown_value']) 
							->where('deleted_status','=', 'Not Deleted')
							->orderBy('id', 'desc')
							->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('reviews')
						->where('deleted_status','=', 'Not Deleted')
						/*->where('f_name', 'like', $search_value[0])
						->orWhere('email', 'like', $search_value[0])
						->orWhere('contact_no', 'like', $search_value[0])*/
						->orderBy('id', 'desc')
						->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('reviews')
							->where('deleted_status','=', 'Not Deleted')
							->orderBy('id', 'desc')
							->get();
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);
	}

	
}
