<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Cookie;
use App\CustomerWishlist;
class OrderController extends Controller
{

    public function index(Request $request) 
    {
    	$session='';
      $compare_count = 0;
      $compare_ids = Cookie::get('compare_id');
      if(is_array($compare_ids)) {
        $compare_count = count($compare_ids);
      }
      if(Session::has('user_id')) {
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

      $order_list = DB::table('cart')
                        ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
                        ->join('product','cart.fk_product_id','=','product.product_id')
                        ->join('users','product.user_id','=','users.id')
                        ->where('cart.fk_order_id','!=',0)
                        ->where('cart.fk_user_id','=',$session)
                        ->select('orders.*', 'cart.*','users.f_name', 'users.l_name', 'product.*')
                        ->orderBy('orders.pk_order_id', 'DESC')
                        ->get();
                        // return $order_list;
      return view('order-summary',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,'order_list'=>$order_list,'cart'=>$cart,'count'=>0,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function review(Request $request,$order_no)
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

      // $order_detail = DB::table('cart')
      //                     ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
      //                     ->join('order_address_info','orders.fk_address_id','=','pk_address_id')
      //                     ->where('orders.order_no','=',$order_no)
      //                     ->where('cart.fk_user_id','=',$session)
      //                     ->select('orders.*', 'cart.*','order_address_info.*')
      //                     ->get();

      $order_details = DB::select(DB::raw("select c.product_name,c.product_attributes,c.quantity,c.product_price,c.updated_date as order_date,o.order_no, o.total_amount,p.slug, cntry.country_name, (c.product_price*c.quantity) as amt,oa.* , o.deliver_date, u.f_name, u.l_name from cart as c inner join orders as o on o.pk_order_id = c.fk_order_id inner join product as p on p.product_id = c.fk_product_id  inner join users as u on u.id = p.user_id  inner join order_address_info as oa on oa.pk_address_id = o.fk_address_id  inner join ms_countries as cntry on cntry.id = oa.fk_billing_country  where o.order_no = '".$order_no."' and c.fk_user_id = ".$session));


      /*   echo "<pre>";
            print_r($order_details);
            die;*/



      return view('order-review',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,'cart'=>$cart,'count'=>0,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'order_details'=>$order_details,'compare_count'=>$compare_count,'wishlistCount'=>$wishlistCount, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function details(Request $request,$order_no) 
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
        $this->static_data['cart'] = $cart;
        $this->static_data['getTotlaQty'] = $getTotlaQty;
        $this->static_data['getSubTotal'] = $getSubTotal;
        $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
        $session)->get()->count();
        $total_cart = 0;
        if(!empty($cart)){
          foreach ($cart as $id => $val) 
          {
              if ($val > 0) {
                $total_cart += $val['quantity'];
              } 
          }
        }
        $this->static_data['my_cart_total'] = $total_cart;
      } else {
        $cart = Cart::getContent();
        $getTotlaQty = Cart::getTotalQuantity();
        $getSubTotal = Cart::getSubTotal();
        $getTotal = Cart::getTotal();
        $wishlistCount = 0;
        $this->static_data['cart'] = $cart;
        $this->static_data['getTotlaQty'] = $getTotlaQty ;
        $this->static_data['getSubTotal'] = $getSubTotal;
        $this->static_data['wishlistCount'] = 0;
        $total_cart = 0;
        if(!empty($cart)){
          foreach ($cart as $id => $val) 
          {
              if ($val > 0) {
                $total_cart += $val['quantity'];
              } 
          }
        }
        $this->static_data['my_cart_total'] = $total_cart;
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

      // $order_detail = DB::table('cart')
      //                     ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
      //                     ->join('order_address_info','orders.fk_address_id','=','pk_address_id')
      //                     ->where('orders.order_no','=',$order_no)
      //                     ->where('cart.fk_user_id','=',$session)
      //                     ->select('orders.*', 'cart.*','order_address_info.*')
      //                     ->get();

      $order_details = DB::select(DB::raw("select c.product_name,c.product_attributes,c.quantity,c.product_price,c.updated_date as order_date,o.order_no, o.total_amount,p.slug, cntry.country_name, (c.product_price*c.quantity) as amt,oa.* , o.deliver_date, u.f_name, u.l_name from cart as c inner join orders as o on o.pk_order_id = c.fk_order_id inner join product as p on p.product_id = c.fk_product_id  inner join users as u on u.id = p.user_id  inner join order_address_info as oa on oa.pk_address_id = o.fk_address_id  inner join ms_countries as cntry on cntry.id = oa.fk_billing_country  where o.order_no = '".$order_no."' and c.fk_user_id = ".$session));
      return view('order-detail',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,'cart'=>$cart,'count'=>0,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'order_details'=>$order_details,'compare_count'=>$compare_count,'wishlistCount'=>$wishlistCount, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following, 'static_data' => $this->static_data]);

    }

    public function trackYourOrder(Request $request)
    {
        $session = '';
        $compare_count = 0;
        $compare_ids = Cookie::get('compare_id');
        if (is_array($compare_ids))
        {
            $compare_count = count($compare_ids);
        }
        if (Session::has('user_id'))
        {
            $session = $request->session()
                ->get('user_id');
            $cart = Cart::session($session)->getContent();
            $getTotlaQty = Cart::session($session)->getTotalQuantity();
            $getSubTotal = Cart::session($session)->getSubTotal();
            $getTotal = Cart::session($session)->getTotal();
            $wishlistCount = DB::table('customer_wishlist')->where('fk_customer_id', '=', $session)->get()
                ->count();
        }
        else
        {
            $cart = Cart::getContent();
            $getTotlaQty = Cart::getTotalQuantity();
            $getSubTotal = Cart::getSubTotal();
            $getTotal = Cart::getTotal();
            $wishlistCount = 0;
        }
        $vertical_product_types = DB::table('ms_product_types')->where('position', '=', 'v')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->orderBy('position_order', 'asc')
            ->get();
        $menus = DB::table('ms_menu')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category = DB::table('ms_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        $category_home = DB::table('ms_category')->where('category_order', '=', 's')
            ->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->limit(9)
            ->get();
        $sub_category = DB::table('ms_sub_category')->where('status', '=', 'Active')
            ->where('deleted_status', '=', 'Not deleted')
            ->get();
        return view('track-your-order', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function track_order(Request $request)
    {
        return view('frontend/track-order', ['static_data' => $this->static_data, 'data' => $data]);

    }
}
