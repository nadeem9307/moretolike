<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Cookie;
use Session;
use App\Product;
use App\ProductTypes;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function getProductById(Request $request){
      $product_id = $request->product_id;
      $product = DB::table('product')->where('product_id', $product_id)->first();
      return json_encode($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,Request $request)
    {
      $session='';
      $compare_count = 0;
      $is_like = 0;
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
        $product_data = DB::table('product')
                          ->join('users','product.user_id','=','users.id')
                           ->where('slug','=',$slug)
                          ->first();
        $is_like = DB::table('product_like')->where('customer_id', $session)->where('product_id', $product_data->product_id)->count();
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

       
      $sub_category = DB::table('ms_sub_category')
                   ->where('status','=','Active')
                   ->where('deleted_status','=','Not deleted')
                   ->get();
      $pro_info = DB::table('product')
                        ->join('users','product.user_id','=','users.id')
                        ->where('slug', $slug)
                        ->first();
                   // return $pro_info = DB::select(DB::raw('select p.*,msb.*,us.* from product as p left join users as us on p.user_id = us.id left join ms_brands as msb on p.brand_id = msb.id where p.slug = "'.$slug.'"'));
       /* $pro_info;
                        foreach ($product_info as $key => $value) {
                           $pro_info = $value;
                        }*/
      $product_attr = DB::table('product_attribute')
                        ->where('fk_product_id','=',$pro_info->product_id)
                        ->where('status','=','Active') 
                        ->get();
      $product_color = DB::table('product_color')
                         ->where('fk_product_id','=',$pro_info->product_id)
                         ->where('status','=','Active') 
                         ->get();
      $product_subcategory = DB::table('products_sub_category')
                                ->join('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
                                ->join('ms_category','products_sub_category.fk_category_id','=','ms_category.id')
                                ->join('ms_menu','products_sub_category.fk_menu_id','=','ms_menu.id')
                                ->where('fk_product_id','=',$pro_info->product_id)
                                ->first();
      $product_gallery = DB::table('product_gallery')
                            ->where('fk_product_id','=',$pro_info->product_id)
                            ->get();
      $product_size = DB::table('product_size')
                        ->where('fk_product_id','=',$pro_info->product_id)
                        ->where('status','=','Active') 
                        ->get();
      $product_tags = DB::table('product_tags')
                        ->where('fk_product_id','=',$pro_info->product_id)
                        ->where('status','=','Active') 
                        ->get();
      $related_products = DB::table('product')
                         ->join('ms_brands','product.brand_id','=','ms_brands.id')
                        ->where('slug','!=',$slug)
                        ->where('product.status','=','Active') 
                        ->limit(20)
                        ->get();

      $product_accessories = DB::table('product_accessories')
                               ->join('product','product_accessories.accessory_product_id','=','product.product_id')
                               ->join('products_sub_category','product_accessories.accessory_product_id','=','products_sub_category.fk_product_id')
                               ->join('ms_sub_category','products_sub_category.fk_sub_category_id','=','ms_sub_category.id')
                               ->where('fk_acc_product_id','=',$pro_info->product_id)
                                ->where('product.status','=','Active') 
                                ->where('product.deleted_status','=','Not deleted')
                               ->select('product.product_name','product.product_img','product.current_price','product.mrp','ms_sub_category.name','product.slug','product.product_id')
                               ->get();

      $session = $request->session()->get('user_id');                       
      $reviewData = DB::table('reviews')
                      ->join('customers','reviews.fk_customer_id','=','customers.id')
                      ->select('reviews.*','customers.f_name','customers.l_name')
                      ->where('ref_id','=',$pro_info->product_id)
                      ->where('review_type','=','p')
                      ->where('admin_approval','=','a')
                      ->where('fk_customer_id','!=', $session)
                      ->limit(5)
                      ->get();
      $reviewAvg = DB::table('reviews')
                    ->where('ref_id','=',$pro_info->product_id)
                    ->where('review_type','=','p')
                    ->avg('rating');
      $reviewCount['total'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();

      $reviewCount['one'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('rating','=', 1)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();

      $reviewCount['two'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('rating','=', 2)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();

      $reviewCount['three'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('rating','=', 3)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();

      $reviewCount['four'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('rating','=', 4)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();
      $reviewCount['five'] = DB::table('reviews')
                        ->where('ref_id','=',$pro_info->product_id)
                        ->where('rating','=', 5)
                        ->where('review_type','=','p')
                        ->get()
                        ->count();
      $userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$pro_info->product_id)
                    ->where('fk_customer_id','=', $session)
                    ->first(); 
                    if($session != '') {
      $addedWishlist = DB::table('customer_wishlist')
                ->where('fk_product_id','=',$pro_info->product_id)
                ->where('fk_customer_id','=',$session)
                ->get()
                ->count();
              } else {
                $addedWishlist = '';
              }


      //return  $userReview->comment ;
      $product_id = $pro_info->product_id; 
      $product_reviews = DB::table('reviews')->where('review_type', 'p')->where('ref_id', $product_id)
         ->join('customers', 'customers.id', '=', 'reviews.fk_customer_id')
         ->get();
      $like = DB::table('product_like')->where('product_id', $product_id)->count();
      $this->people_who_like = array();

      if(Session::has('user_id')){
        $data_people = DB::table('product_like')
                      ->join('customers','customers.id','=','product_like.customer_id')
                      ->where('product_like.product_id', $product_id)
                      ->get();
        foreach($data_people as $row){
          $is_follow = DB::table('user_follower')
                      ->where('follower_id', Session::get('user_id'))
                      ->where('following_id', $row->customer_id)
                      ->where('status', '1')
                      ->count();
          if($is_follow == 1){
            $row->is_follow = 1;
          }else{
            $row->is_follow = 0;
          }
          array_push($this->people_who_like, $row);
             
        }

      }else{
        $this->people_who_like = DB::table('product_like')
                      ->join('customers','customers.id','=','product_like.customer_id')
                      ->where('product_like.product_id', $product_id)
                      ->get();
      }

      //return json_encode($this->people_who_like);
      $store = DB::table('users')->where('id', $pro_info->user_id)->first();
      $store_products = DB::table('product')->where('user_id', $pro_info->user_id)
                      ->orderBy('product_id', 'desc')
                      ->limit(3)
                      ->get();

      return view('single-product-details',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'pro_info'=>$pro_info, 'category'=>$category,'sub_category'=>$sub_category, 'product_subcategory'=>$product_subcategory,'product_attr'=>$product_attr,'product_color'=>$product_color,'product_gallery'=>$product_gallery,'product_size'=>$product_size,'product_tags'=>$product_tags,'related_products'=>$related_products,'recently_added'=>$related_products,'brand_carousel'=>$related_products,'product_accessories'=>$product_accessories,'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'review'=>$reviewData,'avg'=>$reviewAvg,'count'=>$reviewCount,'session'=>$session, 'userReview'=>$userReview,'wishlistCount'=>$wishlistCount,'addedWishlist'=>$addedWishlist,'compare_count'=>$compare_count, 'product_reviews' => $product_reviews, 'like' => $like, 'is_like' => $is_like, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following, 'people_who_like' => $this->people_who_like, 'store' => $store, 'store_products' => $store_products]);
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

    public function addUserFollow(Request $request){
      $follower_id = $request->follower_id;
      $following_id = $request->following_id;
      $is_already_followed = DB::table('user_follower')
      ->where('follower_id', $follower_id)
      ->where('following_id', $following_id)
      ->first();
      //return json_encode($is_already_followed);
      if(!is_object($is_already_followed)){
        $data = ['follower_id' => $follower_id, 'following_id' => $following_id];
        DB::table('user_follower')->insert($data);
        return 'fa-check';
      }elseif($is_already_followed->status==0){
        DB::table('user_follower')
        ->where('follower_id', $follower_id)
        ->where('following_id', $following_id)
        ->update(['status' => '1']);
          return 'fa-check';
      }else{
        DB::table('user_follower')
        ->where('follower_id', $follower_id)
        ->where('following_id', $following_id)
        ->update(['status' => '0']);
          return 'fa-plus';
      }
    }



    public function recentAddedProduct(){
        // // return 'ffgfg';
        // return Product::
        //   select(
        //     'product.shareable_product',
        //     'product.product_id',
        //     'product.product_name',
        //     'product.slug',
        //     'product.sku',
        //     'product.mrp',
        //     'product.current_price',
        //     'product.actual_price',
        //     'product.user_id',
        //     'product.stock_quantity',
        //     'product.description',
        //     'product.product_details',
        //     'product.product_img',
        //     'product.specification',
        //     'product.vendor_commission_type',
        //     'product.vendor_commission',
        //     'product.category as category_id'
        //   )->
        //   whereHas('brand', function($q){
        //     $q->where('status', '!=', 'Active');
        //   })->with(['category'])->limit(1)->get();
         //  ->join('product','products_types.fk_product_id','=', 'product.product_id')
         //  ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
         // ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
         //  ->leftjoin('ms_category', 'product.category', '=', 'ms_category.id')
         //  ->leftjoin('ms_brands','product.brand_id','=','ms_brands.id')
         //  //->where('ms_brands.status','=','Active')
         //  ->where('product.product_name','!=','')
         //  ->where('product.deleted_status','=','Not deleted')
         //  ->where('product.status','=','Active')
         //  ->select(
         //    'product.shareable_product',
         //    'product.product_id',
         //    'product.product_name',
         //    'product.slug',
         //    'product.sku',
         //    'product.mrp',
         //    'product.current_price',
         //    'product.actual_price',
         //    'product.user_id',
         //    'product.stock_quantity',
         //    'product.description',
         //    'product.product_details',
         //    'product.product_img',
         //    'product.specification',
         //    'product.vendor_commission_type',
         //    'product.vendor_commission',
         //    'product.category as category_id',
         //    'ms_category.id as sub_category_id',
         //    'ms_category.category_name',
         //    DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
         //      )
         //    )
         //  ->orderBy('product.product_id','desc')
         //  ->limit(20)
          // ->get();
    }

    public static function getLatestProduct()
    {
        $recent_added_products = DB::table('products_types')->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
            ->join('products_sub_category', 'products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
            ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
            ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
            ->join('ms_brands', 'product.brand_id', '=', 'ms_brands.id')
            ->where('ms_brands.status', '=', 'Active')
            ->where('ms_brands.deleted_status', '=', 'Not deleted')
            ->select('product.shareable_product', 'product.product_id', 'product.product_name', 'product.slug', 'product.sku', 'product.mrp', 'product.current_price', 'product.user_id', 'product.stock_quantity', 'product.description', 'product.product_details', 'product.product_img', 'product.specification', 'product.vendor_commission_type', 'product.vendor_commission', 'ms_category.id', 'ms_category.category_name', DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'))
            ->limit(5)
            ->get();
        return json_encode($recent_added_products);
    }

    public static function getCategoryByProductId($product_id)
    {
        if (isset($product_id) && !empty($product_id))
        {
            $subcategory = DB::table('products_sub_category')->where('fk_product_id', $product_id)->first();
            $category = DB::table('ms_category')->where('id', $subcategory->fk_category_id)
                ->first();
            return json_encode($category);
        }
    }

    public function categoryProductListing(Request $request, $id)
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
        /*  $pro_info = DB::table('product')
                                  ->join('users','product.user_id','=','users.id')
                                   ->join('ms_brands','product.brand_id','=','ms_brands.id')
                                  ->where('slug','=',$slug)
                                  ->first();
        */
        $products = DB::select(DB::raw('select p.product_name,p.current_price, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name, msc.category_name,msc.id as msc_id from products_sub_category as psc left join product as p on p.product_id = psc.fk_product_id left join ms_sub_category as ms on ms.id = psc.fk_sub_category_id left join ms_category as msc on msc.id = psc.fk_category_id where psc.fk_category_id =' . $id));
        /*
              echo "<pre>";
              print_r($products);
              die;*/
        // return $products;
        return view('category-product-listing', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function subCategoryProductListing(Request $request, $id)
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
        $brands = DB::select(DB::raw('select p.brand_id,count(p.brand_id) as brand_count,brand.name as brand_name from product as p inner join ms_brands as brand on p.brand_id = brand.id  group by p.brand_id'));
        $colors = DB::select(DB::raw('select id, color_name,color_code,count(color_code) as code_count from product_color group by color_code'));
        /*  $pro_info = DB::table('product')
                              ->join('users','product.user_id','=','users.id')
                               ->join('ms_brands','product.brand_id','=','ms_brands.id')
                              ->where('slug','=',$slug)
                              ->first();
        */
        $subcategory_details = DB::table('ms_sub_category')->where('id', $id)->first();
        $products = DB::select(DB::raw('select p.product_name,p.current_price,p.brand_id,p.mrp, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name from products_sub_category as psc inner join product as p on p.product_id = psc.fk_product_id inner join ms_sub_category as ms on ms.id = psc.fk_sub_category_id where psc.fk_sub_category_id =' . $id));
        /*
              echo "<pre>";
              print_r($products);
              die;*/
        // return $products;
        return view('category-product-listing', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'brand' => $brands, 'color' => $colors, 'subcategory_details' => $subcategory_details, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function ProductTypeListing(Request $request, $id)
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
        /*  $pro_info = DB::table('product')
                              ->join('users','product.user_id','=','users.id')
                               ->join('ms_brands','product.brand_id','=','ms_brands.id')
                              ->where('slug','=',$slug)
                              ->first();
        */
        $products = DB::select(DB::raw('select p.product_name,p.current_price, p.product_img,p.slug, p.product_id, psc.fk_sub_category_id, ms.name as sub_cat_name,mspt.type,mspt.id as mspt_id from products_sub_category as psc left join product as p on p.product_id = psc.fk_product_id left join ms_sub_category as ms on ms.id = psc.fk_sub_category_id left join products_types as pt on pt.fk_product_id = p.product_id left join ms_product_types as mspt on mspt.id = pt.fk_product_type_id where pt.fk_product_type_id =' . $id));
        /*
            echo "<pre>";
            print_r($products);
            die;*/
        // return $products;
        return view('category-product-listing', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'products' => $products, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }

    public function productSupport(Request $request)
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
        return view('product-supprt', ['vertical_product_types' => $vertical_product_types, 'menu' => $menus, 'category' => $category, 'sub_category' => $sub_category, 'cart' => $cart, 'getTotlaQty' => $getTotlaQty, 'getSubTotal' => $getSubTotal, 'getTotal' => $getTotal, 'session' => $session, 'wishlistCount' => $wishlistCount, 'compare_count' => $compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
    }
    
}