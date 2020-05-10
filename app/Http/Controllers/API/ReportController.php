<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ReportController extends Controller
{
	public $successStatus =200;

	public function __construct(){

	}

	public function reportInventory(Request $request){
		
		$requestData = json_decode(request()->getContent(), true);
		$query = '';
		if($requestData['role'] == 1){
			$query = DB::raw("select product.product_id, product.sku, product.product_name, (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id) as total_sale_q, (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id) as total_sale_m, product.stock_quantity from product where product.deleted_status = 'Not Deleted' and (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id)>0 and (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id)>0");

		} else {
			
			$colname = $requestData['loggedUserId'];

			$query = DB::raw("select product.product_id, product.sku, product.product_name, (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id) as total_sale_q, (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id) as total_sale_m, product.stock_quantity from product where product.user_id = ".$requestData['loggedUserId']." and product.deleted_status = 'Not Deleted' and (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id)>0 and (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id)>0");
		}

		$product =  DB::select($query);

		return response()->json(['success'=>$product], $this->successStatus);
	}



	public function reportInventoryByDateRange(Request $request){
		
		$requestData = json_decode(request()->getContent(), true);
		
		$start_date = explode('T', $requestData['start_date']);
		
		$end_date = explode('T', $requestData['end_date']);


		$query = '';
		if($requestData['role'] == 1){
			$query = DB::raw("select 
								product.product_id, 
								product.sku, 
								product.product_name, 
								(select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) as total_sale_q, 
								(select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) as total_sale_m,
								product.stock_quantity 
								from 
								product 
								where product.deleted_status = 'Not Deleted' and (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) > 0 and (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) > 0");

		} else {
			
			$colname = $requestData['loggedUserId'];

			$query = DB::raw("select 
								product.product_id, 
								product.sku, 
								product.product_name, 
								(select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) as total_sale_q, 
								(select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) as total_sale_m,
								product.stock_quantity 
								from 
								product where product.user_id = ".$requestData['loggedUserId']." and product.deleted_status = 'Not Deleted' and (select sum(cart.quantity) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) > 0 and (select sum(cart.product_price) from cart where cart.fk_product_id = product.product_id and cart.created_date BETWEEN CAST('".$start_date['0']."' AS DATE) AND CAST('".$end_date['0']."' AS DATE)) > 0");
		}

		$product =  DB::select($query);

		return response()->json(['success'=>$product], $this->successStatus);
	}

}
