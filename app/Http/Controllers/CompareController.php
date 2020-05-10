<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cart;
use Cookie;
use DB;
class CompareController extends Controller
{




    //

    public function index(Request $request) {
    	 $session='';
       $compare_count = 0; 
       $product_ids = Cookie::get('compare_id');
       if(is_array($product_ids)){
          $compare_count = count($product_ids);
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

    if($compare_count > 0){
    	$products_info = DB::select(DB::raw('select product_id,product_name,product_img,current_price,availability,description,mrp, product.slug from product where product_id in ('.implode(',',$product_ids).')'));
    } else {
    	$products_info = [];
    }
    
// return $products_info;
     return view('compare',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category, 'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'products_info'=>$products_info,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    
    }


    public function remove(Request $request) {
    	 $request->id;
    		$product_ids = Session::get('compare_id');
    		array_splice($product_ids, array_search($request->id,$product_ids),1);
    		Session::forget('compare_id');
    		Session::put('compare_id',$product_ids);
    		return redirect()->back();
    }
}
