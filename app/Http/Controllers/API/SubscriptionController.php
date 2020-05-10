<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SubscriptionController extends Controller
{
    //
	public $successStatus = 200;

	public function getSubscription() {

		$withdrawData = DB::table('users')
					  ->select('id', 'f_name', 'l_name', 'email', 'store_name', 'user_status')
					  ->where('deleted_status','=','Not deleted')
					  ->get();
		return response()->json(['withdraw'=>$withdrawData, $this->successStatus]);	  
	}

}

