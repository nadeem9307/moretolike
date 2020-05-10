<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CustomerController extends Controller
{
	public $successStatus = 200;

	
	public function customerListing()
	{
		$customer = DB::table('customers')
					->where('deleted_status','=', 'Not Deleted')
					->orderBy('id', 'desc')
					->get();
		return response()->json(['success' => $customer], $this->successStatus);
	}


	public function customerInfo(Request $request)
	{
		DB::table('customers')->where('id', '=', $request->info_id)->first();
		return reponse()->json(['success'=>$success], $this->successStatus);
	}


	public function customerStatus(Request $request)
	{

		$id = request()->getContent();

		$customer = DB::table('customers')
				->where('id', '=', $id)
				->get();
		
		if($customer[0]->customer_status == 'Active')
		{
		$customer = DB::table('customers') ->where('id','=', $id)->update(['customer_status' => 'Inactive']);
		}
		else
		{
		$customer = DB::table('customers') ->where('id','=', $id)->update(['customer_status' => 'Active']);
		}
	    return response()->json(['success' => $customer],$this->successStatus);
	}


	public function customerDelete(Request $request)
	{

				DB:: table('customers')
				->where('id', '=', $request->del_id)
				->update(['deleted_status' => 'Deleted']);

				
		$customer = DB::table('customers')
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
			
			$search_data = DB::table('customers')
						->where('customer_status', '=', $requestData['dropdown_value'])   
						->where('deleted_status','=', 'Not Deleted')
						//->where(function($query)  use ($requestData) {
                		//return $query->where('f_name', 'like', $requestData['search_value'])
						->where('f_name', 'like', $search_value[0])
		                ->orWhere('email', 'like', $search_value[0])
						->orWhere('contact_no', 'like', $search_value[0])
						->orderBy('id', 'desc')
						->get();
					
           // })->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('customers')
							->where('customer_status', '=', $requestData['dropdown_value']) 
							->where('deleted_status','=', 'Not Deleted')
							->orderBy('id', 'desc')
							->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) {
			$search_data = DB::table('customers')
						->where('deleted_status','=', 'Not Deleted')
						->where('f_name', 'like', $search_value[0])
						->orWhere('email', 'like', $search_value[0])
						->orWhere('contact_no', 'like', $search_value[0])
						->orderBy('id', 'desc')
						->get();
		}

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('customers')
							->where('deleted_status','=', 'Not Deleted')
							->orderBy('id', 'desc')
							->get();
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);
	}

	
}
