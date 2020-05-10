<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
	public $successStatus = 200;
    public function orderListing(Request $request ) 
	{

		 $requestData = json_decode(request()->getContent(), true);

		 $where = 1;
		 if($requestData['loggedUserRole'] != 1) {
			$where .= ' and p.user_id = '.$requestData['loggedUserId'];
		}
		 $order = DB::select(DB::raw('select o.*,c.product_name,c.shipping_status,c.refund_status,p.slug, cus.customer_name from orders as o left join cart as c on c.fk_order_id = o.pk_order_id left join product as p on p.product_id = c.fk_product_id left join customers as cus on cus.id=c.fk_user_id where '.$where.' group by o.order_no'));
		
		return response()->json(['success' => $order],$this->successStatus);

	}

	public function getOrderDetails(Request $request) {

		$requestData = json_decode(request()->getContent(), true);
		$where = 'o.order_no = "'.$requestData['order_no'].'"';
		if($requestData['loggedUserRole'] != 1) {
			$where .= ' and p.user_id = '.$requestData['loggedUserId'];
		}
		return $order_details = DB::select(DB::raw("select c.product_name,c.product_attributes,c.quantity,c.product_price,c.refund_status,c.shipping_status,c.updated_date as order_date,o.*,p.slug,p.product_img,p.sku, cntry.country_name, (c.product_price*c.quantity) as amt,oa.* , u.f_name, u.l_name from cart as c left join orders as o on o.pk_order_id = c.fk_order_id left join product as p on p.product_id = c.fk_product_id  left join users as u on u.id = p.user_id  left join order_address_info as oa on oa.pk_address_id = o.fk_address_id left join ms_countries as cntry on cntry.id = oa.fk_billing_country  where ".$where));

	}

	public function filterOrder(Request $request) {

		 $requestData = json_decode(request()->getContent(),true);
		

		$where = '1';
		$order = ' order by o.order_no ASC';
		if($requestData['loggedUserRole'] != 1) {
			$where .= ' and p.user_id = '.$requestData['loggedUserId'];
		}
		if($requestData['dropdown_value'] != ''){
			$order = ' order by o.order_no '.$requestData['dropdown_value'];
		}

		if($requestData['search_value'] != '') {
			$where .= ' and o.order_no like "%'.$requestData['search_value'].'%"';
		}

		  $order = DB::select(DB::raw('select o.*,c.product_name,c.shipping_status,c.refund_status,p.slug, cus.customer_name from orders as o left join cart as c on c.fk_order_id = o.pk_order_id left join product as p on p.product_id = c.fk_product_id left join customers as cus on cus.id=c.fk_user_id where '.$where.' group by o.order_no '.$order));
		
		return response()->json(['success' => $order],$this->successStatus);
		

	}


	public function shippingStatus() {
		 $requestData = json_decode(request()->getContent(),true);

		 $update_status = DB::select(DB::raw('update cart set shipping_status = "'.$requestData['shipping_status'].'" where fk_order_id = '.$requestData['order_id']));
		 return response()->json(['success' => 'updated successfully'],$this->successStatus);
	}

}
