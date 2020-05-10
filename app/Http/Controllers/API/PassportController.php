<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;


class PassportController extends Controller
{
	public $successStatus = 200;

	public function login(Request $request) {
		$value = json_decode($request->getContent());
		//return json_encode($value);
		if(Auth::attempt(['email'=> $value->email,'password'=>$value->password, 'user_status'=> 'Active'])){
			$user = Auth::user();
			
			$role = DB::table('user_group')->where('id', $user['role'])->first();
			
			$permission = DB::table('permission')->where('user_group_id', $user['role'])->first();

			unset($permission->id);			
			unset($permission->user_group_id);			

			if(($user['role'] == 1 || $user['role'] == 2 || $user['role'] == 3) && $permission->login == 1 && $user['user_status'] == 0)
			{
				$success['token']=$user->createToken($user['user_name'])->accessToken;
				$success['role'] = $user['role'];
				$success['vendor_id'] = $user['vendor_id'];
				$success['id'] = $user['id'];
				$success['f_name'] = $user['f_name'];
				$success['l_name'] = $user['l_name'];
				$success['email'] = $user['email'];
				$success['permission'] = $permission;
				return response()->json(['success' => $success],$this->successStatus);

			} else {
				return response()->json(['error' => 'Unauthorized'],401);
			}

		} else {
			return response()->json(['error' => 'Unauthorized'],401);
		}
	}

	public function logout(Request $request){

		$value = json_decode($request->getContent());
			
		$user = DB::table('users')->where('id', $value->user_id)->first();
		$users = DB::table('users')->get();
		
		DB::table('oauth_access_tokens')->where('user_id', $value->user_id)->delete();
		
		if($value->is_admin == true && $value->own != true){
						
			return response()->json(['success' => $user->user_name.'! has logged out successfully!', 'data' => $users],$this->successStatus);
		}

		return response()->json(['success' => $user->user_name.'! You have logged out successfully!'],$this->successStatus);
	}

	public function isLogin(Request $request){
		return response()->json(['success' => 'yes'],$this->successStatus);	
	}




	/*public function forgetPassword(Request $request) 
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|email',
		]);

		if($validator->fails()) 
		{
			return response()->json(['error' => $validator->errors()] ,401);
		}

		else
    	{
    		$users = DB::table('users')->where('email', '=', $request->email)->get();

    		if(count($users) == 1)
			{
			  	$new_pass = mt_rand(1000000, 9999999);

			  	$input['password']= bcrypt($new_pass);

			 	$users = DB::table('users')->where('email', '=', $request->email)->update($input);

				return response()->json(['success' =>'Your Password Changed successfully'],$this->successStatus);
			}
			else
			{
				return response()->json(['success' =>'Please Enter Registered EmailId.'],$this->successStatus);
			}
    	}
	}*/


}
