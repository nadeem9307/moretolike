<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Session;
use Cart;
use DB;
use Cookie;
class CheckoutController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $successStatus = 200;
    public function index(Request $request)
    {
        $session='';
        $compare_count = 0;
     $compare_ids = Cookie::get('compare_id');
     if(is_array($compare_ids)){

     $compare_count = count($compare_ids);
     } 
        if(Session::has('user_id')){
         $session = $request->session()->get('user_id');
        $cart = Cart::session($session)->getContent();
       $getTotlaQty = Cart::session($session)->getTotalQuantity();
       $getSubTotal = Cart::session($session)->getSubTotal();
       $getTotal = Cart::session($session)->getTotal();
       $wishlistCount = DB::table('customer_wishlist')
                ->where('fk_customer_id','=',$session)
                ->get()
                ->count();
    } else {
       $cart = Cart::getContent();
       $getTotlaQty = Cart::getTotalQuantity();
       $getSubTotal = Cart::getSubTotal();
       $getTotal = Cart::getTotal();
       $wishlistCount = 0;
    }

    $vertical_product_types = DB::table('ms_product_types')
               ->where('position','=','v')
               ->where('status','=','Active')
               ->where('deleted_status','=','Not deleted')
               ->orderBy('position_order', 'asc')
               ->get();

       $menus = DB::table('ms_menu')
               ->where('status','=','Active') 
               ->where('deleted_status','=','Not deleted')
               ->get();        

        $category  = DB::table('ms_category')
                   ->where('status','=','Active') 
                   ->where('deleted_status','=','Not deleted')
                   ->get();

        $category_home  = DB::table('ms_category')
                   ->where('category_order','=','s') 
                   ->where('status','=','Active') 
                   ->where('deleted_status','=','Not deleted')
                   ->limit(9)
                   ->get();

        $sub_category = DB::table('ms_sub_category')
                   ->where('status','=','Active')
                   ->where('deleted_status','=','Not deleted')
                   ->get();

    $country = DB::table('ms_countries')->get();

    $address =  DB::select(DB::raw('select oa.*,billing_country.country_name as billing_country_name,shipping_country.country_name as shipping_country_name from  order_address_info as oa left join ms_countries as billing_country on oa.fk_billing_country = billing_country.id left join ms_countries as shipping_country on oa.fk_shipping_country = shipping_country.id  '));

        return view('checkout',['customer_address'=>$address,'vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'country'=>$country,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //return json_encode($request->all());
        $session = $request->session()->get('user_id');
        $requestData = $request->all();
        $insert_data['billing_first_name'] = $requestData['billing_first_name'];
        $insert_data['billing_last_name'] = $requestData['billing_last_name'];
        $insert_data['billing_company'] = $requestData['billing_company'];
        $insert_data['billing_email'] = $requestData['billing_email'];
        $insert_data['billing_phone'] = $requestData['billing_phone'];
        $insert_data['billing_address_1'] = $requestData['billing_address_1'];
        $insert_data['billing_address_2'] = $requestData['billing_address_2'];
        $insert_data['billing_city'] = $requestData['billing_city'];
        $insert_data['billing_postcode'] = $requestData['billing_postcode'];
        $insert_data['fk_billing_country'] = $requestData['country'];
        //$insert_data['billing_country_code'] = $requestData['contact_country_code'];


        if(isset($requestData['ship_to_different_address'])){
            $insert_data['ship_to_different_address'] = 'y';
        $insert_data['shipping_first_name'] = $requestData['shipping_first_name'];
        $insert_data['shipping_last_name'] = $requestData['shipping_last_name'];
        $insert_data['shipping_company'] = $requestData['shipping_company'];
        $insert_data['shipping_email'] = $requestData['shipping_email'];
        $insert_data['shipping_phone'] = $requestData['shipping_phone'];
        $insert_data['shipping_address_1'] = $requestData['shipping_address_1'];
        $insert_data['shipping_address_2'] = $requestData['shipping_address_2'];
        $insert_data['shipping_city'] = $requestData['shipping_city'];
        $insert_data['shipping_postcode'] = $requestData['shipping_postcode'];
        $insert_data['fk_shipping_country'] = $requestData['shipping_country'];
        //$insert_data['shipping_country_code'] = $requestData['shipping_contact_country_code'];
    }

        $total_amount = Cart::session($session)->getSubTotal();
        
        $insert_data['fk_customer_id'] = $requestData['fk_customer_id'];
        

          if($requestData['payment_mode'] == 'cod'){
                $address_info_insertion = DB::table('order_address_info')
                                      ->insert($insert_data);
                                      if($address_info_insertion) {
                                        // return redirect()->url()
                                      }
              $address_id = DB::getPdo()->lastInsertId();
              $order_data['fk_customer_id'] = $session;  
              $order_data['fk_address_id'] = $address_id;
              //$order_data['fk_payment_type'] = $requestData['payment_method'];
              $order_data['fk_payment_type'] = 'COD';
              $order_data['order_no'] = 'OD'.time().mt_rand();
              $dt = date("Y-m-d");
              $deliver_date = date( "Y-m-d", strtotime( "$dt +1 day" ) );
              $order_data['deliver_date'] = $deliver_date;
              $order_data['total_amount'] = Cart::session($session)->getSubTotal();
              $order_insertion = DB::table('orders')
                                ->insert($order_data);
              $last_order_id = DB::getPdo()->lastInsertId();
              foreach ($requestData['cart_id'] as $value) {
                 DB::table('cart')
                ->where('cart_id', $value)
                ->update(['fk_order_id'=>$last_order_id]);
                Cart::session($session)->clear();
              }

               $order_list = DB::table('cart')
                            ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
                            ->where('cart.fk_order_id','!=',0)
                            ->where('cart.fk_user_id','=',$session)
                            ->select('orders.*', 'cart.*')
                            ->orderBy('orders.created_date', 'desc')
                            ->get();
             return redirect('/beta-order-summary');
          }else{

              $address_info_insertion = DB::table('order_address_info')
                                          ->insert($insert_data);
              $address_id = DB::getPdo()->lastInsertId();
              $order_data['fk_customer_id'] = $session;  
              $order_data['fk_address_id'] = $address_id;
              $order_data['fk_payment_type'] = 'stripe';
              $order_data['order_no'] = 'OD'.time().mt_rand();
              $dt = date("Y-m-d");
              $deliver_date = date( "Y-m-d", strtotime( "$dt +1 day" ) );
              $order_data['deliver_date'] = $deliver_date;
              $order_data['total_amount'] = Cart::session($session)->getSubTotal();
              

              /*$order_insertion = DB::table('orders')
                                ->insert($order_data);
              $last_order_id = DB::getPdo()->lastInsertId();
              foreach ($requestData['cart_id'] as $value) {
                 DB::table('cart')
                ->where('cart_id', $value)
                ->update(['fk_order_id'=>$last_order_id]);
                Cart::session($session)->clear();
              }

               $order_list = DB::table('cart')
                            ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
                            ->where('cart.fk_order_id','!=',0)
                            ->where('cart.fk_user_id','=',$session)
                            ->select('orders.*', 'cart.*')
                            ->orderBy('orders.created_date', 'desc')
                            ->get();*/
             


            /*
            $stripe = new Stripe();
            $stripe = Stripe::make();
            $customer = $stripe->customers()->create([
                'email' => $requestData['billing_email'],
                'description' => json_encode($requestData['cart_id']),
            ]);*/

            /*return json_encode($customer);
            
            echo $customer['id'];*/

            Session::put('amount', $total_amount);
            return redirect('/beta-payment');
          }





          // return redirect()->back();
        // return response()->json(['success'=>'Data Inserted Successfully','data'=>$address_info_insertion], $this->successStatus);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
