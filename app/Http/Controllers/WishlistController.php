<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cart;
use DB;
use Cookie;
class WishlistController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
       $wishlistCount = DB::table('customer_wishlist')
                ->where('fk_customer_id','=',$session)
                ->get()
                ->count();
    } else {
       $cart = Cart::getContent();
       $getTotlaQty = Cart::getTotalQuantity();
       $getSubTotal = Cart::getSubTotal();
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


    $wishlistData = DB::table('customer_wishlist')
                    ->join('product','customer_wishlist.fk_product_id','=','product.product_id')
                    ->select('product.product_img','product.product_name','product.current_price','product.availability','customer_wishlist.pk_cw_id','product.product_id','product.slug')
                    ->where('customer_wishlist.fk_customer_id','=',$session)
                    ->get();
                    // return $wishlistData;
        return view('wishlist',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,  'wishlistData'=>$wishlistData,'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $remove_wishlist = DB::table('customer_wishlist')
                           ->where('pk_cw_id','=',$id)
                           ->delete();
                           return redirect()->back();
    }
}
