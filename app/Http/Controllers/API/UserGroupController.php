<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use DB;


class UserGroupController extends Controller
{

	public $successStatus = 200;
    
    public function userGroupAll(Request $request)
	{
		$userGroup = DB::table('user_group')
				->where('status', '=', 'Active')
				->get();
		return response()->json(['success' => $userGroup],$this->successStatus);
	}

	public function getUserGroupById(Request $request)
	{
		$userGroup = DB::table('user_group')
				->where('id', '=', $request->id)
				->where('status', '=', 'Active')
				->first();
		return response()->json(['success' => $userGroup],$this->successStatus);
	}

	public function permission(Request $request)
	{
		$permission = DB::table('permission')
					->where('user_group_id', $request->id)
					->first();
		return response()->json(['success' => $permission],$this->successStatus);				
	}

	public function updatePermission(Request $request)
	{
		$requestData = json_decode(request()->getContent(),true);
		
		$id = $requestData['form_data']['user_id'];
		
		unset($requestData['form_data']['user_id']);

		DB::table('permission')->where('user_group_id','=',$id)->update($requestData['form_data']);
		
		return response()->json(['success'=>'success', 'data' => $requestData], $this->successStatus);
	
	}
}
