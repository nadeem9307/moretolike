<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use DB;


class UserController extends Controller
{

	public $successStatus = 200;

	public function user_test(){
		$users = DB::table('users')
				->get();

	


	    return response()->json(['success' => $users],$this->successStatus);
	}

    public function user_register(Request $request)
    {
    	

    	$date = date('Y-m-d h:i:s');

    	$validator = Validator::make($request->all(),[

    		'f_name' => 'required',
    		'user_name' => 'required',
    		'password' => 'required',
    		//'c_password' => 'required',
    		'email' => 'required|email',
    		'contact_no' => 'required',
    		'gender' => 'required',
    	]);


    	if($request['profile_image'])
    	{

    	$this->validate($request, [
        'profile_image' => 'image|mimes:jpeg,png,jpg|max:2048',
   		 ]);
    	}

    	if($validator->fails()){
    		return response()->json(['error'=>$validator->errors()],401);
    	}
    	else
    	{

    		$email = DB::table('users')->where('email', '=', $request->email)->get();

    		if(count($email) > 0)
    		{

    			return response()->json(['success' => 'Please enter another email.this email address is already registered'],$this->successStatus);
    		}
    		else
    		{

		    	/*if ($request->hasFile('profile_image')) 
		    	{
			        $image = $request->file('profile_image');
			        $name = time().'.'.$image->getClientOriginalExtension();
			        $destinationPath = public_path('/upload/user_images');
			        $image->move($destinationPath, $name);
			    }
			    else
			    {
			    	$name='';

			    }*/

		    	 $input = $request->all();
		  
		    	 $input['password'] = bcrypt($input['password']);
		    	 $input['address1'] =  $input['country1'].','.$input['state1'].','.$input['city1'];
		    	 unset($input['country1']);
		    	 unset($input['state1']);
		    	 unset($input['city1']);
		    	 // $input['profile_image'] = $name;
		    	 $input['role'] = 2;
		    	 $input['user_status'] = 0;
		    	 $input['created_at'] = $date;
		    	 $input['updated_at'] = $date;
		    	 $user = User::create($input);
		    	 $success['token'] = $user->createToken('MyApp')->accessToken;
		    	 $success['f_name']= $user->f_name;

			  return response()->json(['success' => $success],$this->successStatus);
			}
    	}

    }



	public function vendor_info(Request $request)
	{


		$users = DB::table('users')
				->join('ms_cities', 'users.city', '=', 'ms_cities.id')
				->join('ms_states', 'users.state', '=', 'ms_states.id')
				->join('ms_countries', 'users.country', '=', 'ms_countries.id')
				->where('users.id', '=', $request->edit_id)
				->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
				->first();

	


	    return response()->json(['success' => $users],$this->successStatus);
	}


	public function update_vendor(Request $request)
	{
		 $requestData = json_decode(request()->getContent(), true); 
    	$date = date('Y-m-d h:i:s');

    	$validator = Validator::make($requestData,[

    		'f_name' => 'required',
    		'user_name' => 'required',
    		'email' => 'required|email',
    		'contact_no' => 'required',
    		'gender' => 'required',
    	]);


    	/*if($request['profile_image'])
    	{

    	$this->validate($request, [
        'profile_image' => 'image|mimes:jpeg,png,jpg|max:2048',
   		 ]);
    	}*/

    	if($validator->fails()){
    		return response()->json(['error'=>$validator->errors()],401);
    	}
    	else
    	{

	    	/*if ($request->hasFile('profile_image')) 
	    	{
		        $image = $request->file('profile_image');
		        $name = time().'.'.$image->getClientOriginalExtension();
		        $destinationPath = public_path('/upload/user_images');
		        $image->move($destinationPath, $name);
		    }
		    else
		    {
		    	$name='';

		    }*/
	    	 $input = $requestData;
	    	 $input['updated_at'] = $date;

			$users = DB::table('users')->where('id', '=', $input['id'])->update($input);

		  return response()->json(['success' =>'Your Profile Updated successfully'],$this->successStatus);
    	}
	}


	public function update_vendor_username(Request $request){
		$requestData = json_decode(request()->getContent(), true);
		//return json_encode($requestData['form_data']['user_name']);
		$user_name = $requestData['form_data']['user_name'];
		$user_id = $requestData['form_data']['user_id'];
		DB::table('users')->where('id', $user_id)->update(['user_name' => $user_name]);
		return response()->json(['success' =>'Your Profile Updated successfully'],$this->successStatus);
	}


	public function update_vendor_userpass(Request $request){
		$requestData = json_decode(request()->getContent(), true);
		$password = $requestData['form_data']['password'];
		$user_id = $requestData['form_data']['user_id'];
		DB::table('users')->where('id', $user_id)->update(['password' => bcrypt($password)]);
		return response()->json(['success' =>'Your Profile Updated successfully'],$this->successStatus);
	}


	public function vendor_listing() 
	{
		$user = DB::table('users')
				->join('ms_cities', 'users.city', '=', 'ms_cities.id')
				->join('ms_states', 'users.state', '=', 'ms_states.id')
				->join('ms_countries', 'users.country', '=', 'ms_countries.id')
				->where('deleted_status','=', 'Not Deleted')
				->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
				->orderBy('id', 'desc')
				->get();
		return response()->json(['success' => $user],$this->successStatus);
	}


	public function vendor_status(Request $request)
	{
		$id = request()->getContent();
		$users = DB::table('users')->where('id', '=', $id)->get();

		if($users[0]->user_status == 'Active')
		{
		$users = DB::table('users') ->where('id','=', $id)->update(['user_status' => 'Inactive']);
		}
		else
		{
		$users = DB::table('users') ->where('id','=', $id)->update(['user_status' => 'Active']);
		}
	    return response()->json(['success' => $users],$this->successStatus);
	}


	public function vendor_delete(Request $request)
	{
		DB::table('users')->where('id', '=', $request->vendor_id)->update(['deleted_status' => 'Deleted']);
		$user = DB::table('users')
				->join('ms_cities', 'users.city', '=', 'ms_cities.id')
				->join('ms_states', 'users.state', '=', 'ms_states.id')
				->join('ms_countries', 'users.country', '=', 'ms_countries.id')
				->where('deleted_status','=', 'Not Deleted')
				->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
				->get();  
	    return response()->json(['success' => 'Vendor deleted successfully', 'data' =>$user ],$this->successStatus);
	}

	public function serach(Request $request)
	{

	
	    $requestData = json_decode(request()->getContent(), true);

	    $search_value = explode(' ', $requestData['search_value']);

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] != '')) 
		{
			// return $requestData['dropdown_value'];
		
			DB::enableQueryLog();
			  $search_data = DB::table('users')
				->join('ms_cities', 'users.city', '=', 'ms_cities.id')
				->join('ms_states', 'users.state', '=', 'ms_states.id')
				->join('ms_countries', 'users.country', '=', 'ms_countries.id')
				->where('user_status', '=', $requestData['dropdown_value'])   
				->where('deleted_status','=', 'Not Deleted')
				->where('f_name', 'like', $search_value[0])
		        ->orWhere('email', 'like', $search_value[0])
				->orWhere('contact_no', 'like', $search_value[0])
				/*->where(function($query)  use ($requestData) {
	                return $query->where('f_name', '=', $requestData['search_value'])
	                    ->orWhere('email', '=', $requestData['search_value'])
						->orWhere('contact_no', '=', $requestData['search_value']);
	            })*/
				->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
	            ->get();
		} 

		if(($requestData['dropdown_value'] != '') && ($requestData['search_value'] == '')) 
		{
			$search_data = DB::table('users')
			->join('ms_cities', 'users.city', '=', 'ms_cities.id')
			->join('ms_states', 'users.state', '=', 'ms_states.id')
			->join('ms_countries', 'users.country', '=', 'ms_countries.id')
			->where('deleted_status','=', 'Not Deleted')
			->where('user_status', '=', $requestData['dropdown_value']) 
			->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
			->get();
		} 

		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] != '')) 
		{
			$search_data = DB::table('users')
			->join('ms_cities', 'users.city', '=', 'ms_cities.id')
			->join('ms_states', 'users.state', '=', 'ms_states.id')
			->join('ms_countries', 'users.country', '=', 'ms_countries.id')
			->where('deleted_status','=', 'Not Deleted')

			->where('f_name', 'like', $search_value[0])
		    ->orWhere('email', 'like', $search_value[0])
			->orWhere('contact_no', 'like', $search_value[0])

			->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
			->get();
		}


		if(($requestData['dropdown_value'] == '') && ($requestData['search_value'] == '')) {
			$search_data = DB::table('users')
						->join('ms_cities', 'users.city', '=', 'ms_cities.id')
						->join('ms_states', 'users.state', '=', 'ms_states.id')
						->join('ms_countries', 'users.country', '=', 'ms_countries.id')
						->where('deleted_status','=', 'Not Deleted')
						->select('users.*','ms_cities.name','ms_states.state_name' ,'ms_countries.country_name')
						->get();
		} 
	    return response()->json(['success' => $search_data],$this->successStatus);  
	}




}
