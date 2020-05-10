<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Cookie;
use Instagram;
use Auth;
class ShopController extends Controller
{




	  public function storeList(Request $request)
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



    	$store_list = DB::table('users')->where('user_status','=','Active')->where('deleted_status','=','Not deleted')->get();
      /* for getting product image*/
        $store_list_data = array();
        if(isset($store_list) && !empty($store_list)){
          foreach($store_list as $row){
            $product_image = DB::table('product')->select('product_img')->where('user_id', $row->id)->limit(3)->get();
            $row->product = $product_image;
            array_push($store_list_data, $row);

          }
        }
        //return json_encode($store_list_data); 
      /* for getting product image*/
    
    /*$store_list = DB::select(DB::raw("select users.*, (SELECT CONCAT('[', better_result, ']') AS product FROM ( SELECT GROUP_CONCAT('', my_json, '' SEPARATOR ',') AS better_result FROM ( SELECT DISTINCT CONCAT ( product.product_img ) AS my_json FROM product INNER JOIN users ON product.user_id = users.id order by product.product_id desc limit 3 ) AS more_json ) AS yet_more_json ) as product from users"));*/
    
  

      return view('frontend.store_list', ['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus,  'category'=>$category,'sub_category'=>$sub_category, 'store_list'=>$store_list_data,'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following,'static_data' => $this->static_data]);
    }

   public function  storeListDetails(Request $request)
   {


     $session='';
     $compare_count = 0;
     $customer_orders = 0;
     $insta_user_details = '';
     $collection = '';

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

          $customer_orders = DB::table('orders')->where('fk_customer_id', $session)->get();

          } else {
           $cart = Cart::getContent();
           $getTotlaQty = Cart::getTotalQuantity();
           $getSubTotal = Cart::getSubTotal();
           $getTotal = Cart::getTotal();
           $wishlistCount = 0;
          }

      $vendor_id = $request->vendor_id;
      $instagram_media = '';

      /*for getting customer by Vendor_id*/
      $customer = DB::table('customers')->where('fk_vendor_id', $vendor_id)->first();
      if(is_object($customer)){
        $customer_id = $customer->id;
      }else{
        $customer_id =  Session::get('user_id');
      }

      $user_vendor_id = $vendor_id; 
        
      if(is_object($customer)){
        $instagram_access_token = $customer->insta_access_token;
        /*instagram user details*/
        $user_url = "https://api.instagram.com/v1/users/self/?access_token=".$instagram_access_token;
        $insta_user_details = app('App\Http\Controllers\CustomerController')->getDataByUrl($user_url);
        $insta_user_details = json_decode($insta_user_details);
        if(isset($insta_user_details) && property_exists($insta_user_details, 'data')){
          $insta_user_details = $insta_user_details->data;
        }else{
          $insta_user_details = '';
        }
        /*instagram user details*/


        $instagram_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$instagram_access_token;
        $instagram_media = app('App\Http\Controllers\CustomerController')->getDataByUrl($instagram_url);
        $instagram_media = json_decode($instagram_media);
        if(is_object($instagram_media) && property_exists($instagram_media, 'data')){
          $instagram_media = $instagram_media->data;
        }else{
          $instagram_media = '';
        }
      }
        
      /*for getting customer by Vendor_id*/


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


   		$store_list_details = DB::table('users')
            ->join('ms_countries', 'users.country', '=', 'ms_countries.id')
            ->join('ms_states', 'users.state', '=', 'ms_states.id')
            ->join('ms_cities', 'users.city', '=', 'ms_cities.id')
            ->where('users.id','=',$request->vendor_id)
            ->select('users.*', 'ms_countries.country_name', 'ms_states.state_name', 'ms_cities.name')
            ->first();

      $store_product_list= DB::table('product')
              ->join('products_sub_category','product.product_id', '=','products_sub_category.fk_product_id' )
              ->join('ms_sub_category','products_sub_category.fk_sub_category_id', '=','ms_sub_category.id' )
         			->where('product.user_id','=',$request->vendor_id)
              ->where('product.shareable_product','=','non shareable')
              ->where('ms_sub_category.status','=','Active')
              ->where('ms_sub_category.deleted_status','=','Not deleted')
              ->select('product.*', 'ms_sub_category.name')
         			->limit(20)
              ->get();

              //return $store_product_list; 
      //return $store_product_list;
            /*    echo "<pre>";
            print_r($store_product_list);     
            die;  */



      /*$store_collection_list= DB::table('product')
              ->join('products_sub_category','product.product_id', '=','products_sub_category.fk_product_id' )
              ->join('ms_sub_category','products_sub_category.fk_sub_category_id', '=','ms_sub_category.id' )
              ->where('product.user_id','=',$request->vendor_id)
              ->where('product.shareable_product','=','shareable')

              ->where('ms_sub_category.status','=','Active')

              ->where('ms_sub_category.deleted_status','=','Not deleted')

              ->select('product.*', 'ms_sub_category.name')
              ->limit(20)
              ->get();*/
      
            /*to get collection list*/
            $store_collection_list= DB::table('product_shared_vendors')
            ->join('product', 'product.product_id', '=', 'product_shared_vendors.fk_product_id')
            ->where('product_shared_vendors.fk_vendor_id', $request->vendor_id)
            ->where('product.shareable_product','=','shareable')
            ->where('product.deleted_status','=','Not deleted')
            ->limit(20)
            ->get();

            $collection = DB::table('vendor_collections')
            ->join('customers','vendor_collections.user_id', '=','customers.fk_vendor_id' )
            ->join('collection_followers','collection_followers.collection_id', '=','vendor_collections.id' )
            ->select('vendor_collections.*', 'customers.f_name', 'customers.l_name', DB::raw('COUNT(collection_followers.id) as followers'))
            ->where('user_id', $request->vendor_id)->get();

            //return json_encode($collection);
              /*to get collection list*/
            //return var_dump($store_collection_list);

          $customer_id =  Session::get('user_id');

         $follower_list = DB::table('store_follower')
            ->join('customers','store_follower.fk_customer_id', '=','customers.id' )
            ->join('ms_countries', 'customers.country', '=', 'ms_countries.id')
            ->where('store_follower.fk_vendor_id','=',$request->vendor_id)
            ->where('store_follower.fk_customer_id','!=',$customer_id)
            ->where('follower_type','=','c')
            ->select('customers.*', 'ms_countries.country_name')
            ->get();


          $current_follower=  DB::table('store_follower')
            ->join('customers','store_follower.fk_customer_id', '=','customers.id' )
            ->where('fk_customer_id','=',$customer_id)
            ->where('follower_type','=','c')
            ->select('customers.*')
            ->first();



          $session = $request->session()->get('user_id');
          $reviewData = DB::table('reviews')
                      ->join('customers','reviews.fk_customer_id','=','customers.id')
                      ->select('reviews.*','customers.f_name','customers.l_name')
                      ->where('ref_id','=',$request->vendor_id)
                      ->where('review_type','=','s')
                      ->where('admin_approval','=','a')
                      ->where('fk_customer_id','!=', $session)
                      ->limit(5)
                      ->get();

              //  return $reviewData;

          $reviewAvg = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('review_type','=','s')
                        ->avg('rating');

          $reviewCount['total'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('review_type','=','s')
                        ->get()
                        ->count();

          $reviewCount['one'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('rating','=', 1)
                        ->where('review_type','=','s')
                        ->get()
                        ->count();

          $reviewCount['two'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('rating','=', 2)
                        ->where('review_type','=','s')
                        ->get()
                        ->count();

          $reviewCount['three'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('rating','=', 3)
                        ->where('review_type','=','s')
                        ->get()
                        ->count();

          $reviewCount['four'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('rating','=', 4)
                        ->where('review_type','=','s')
                        ->get()
                        ->count();
          $reviewCount['five'] = DB::table('reviews')
                        ->where('ref_id','=',$request->vendor_id)
                        ->where('rating','=', 5)
                        ->where('review_type','=','s')
                        ->get()
                        ->count(); 


          $userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                      ->select('reviews.*','customers.f_name','customers.l_name')
                      //  ->where('reviews.ref_id','=',$request->vendor_id)
                       ->where('review_type','=','s')
                        ->where('reviews.admin_approval','=','a')
                        ->where('fk_customer_id','=', $session)
                        ->first();

                       // return $userReview->rating;

    return view('store-list-details', ['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus,  'category'=>$category,'sub_category'=>$sub_category, 'store_list_details'=>$store_list_details,'store_product_list'=>$store_product_list, 'store_collection_list'=>$store_collection_list,'follower_list'=> $follower_list,'current_follower'=> $current_follower, 'review'=>$reviewData,'avg'=>$reviewAvg,'count'=>$reviewCount, 'userReview'=>$userReview,'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'instagram_media'=>$instagram_media, 'customer_orders' => $customer_orders, 'vendor_id' => $customer_id, 'insta_user_details' => $insta_user_details, 'user_vendor_id' => $user_vendor_id, 'collection' => $collection, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);

      //return view('store-list-details', ['store_list_details'=>$store_list_details]);

    
   }

   public function fetchCollection(Request $request){
      $collection_id = $request->route('collection_id');
      $collection  = DB::table('vendor_collections')->where('id', $collection_id)->first();
      $result = '<ul class="products columns-3" id="product_view">';
      $result_beta = '';

      foreach(json_decode($collection->products_data) as $product_id){
        $product = DB::table('product')->where('product_id', $product_id)->first();
        $subcategory = DB::table('products_sub_category')->where('fk_product_id', $product_id)->first();
        
        $category = DB::table('ms_category')->where('id', $subcategory->fk_category_id)->first();

        $result_beta .= '<div class="col-lg-3 col-sm-6 largepad">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <h5><i class="fa fa-barcode"></i> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5><i class="ec ec-compare"></i> Compare</h5>
                                 </div>
                              </div>
                              <div class="col-info">
                                 <div class="price-name">
                                    <h5>'.$category->category_name.'</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3><a href="javascript:void(0)">'.substr($product->product_name,0, 30).'</a></h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <a href="javascript:void(0)"><img src="'. getenv("URL").'308X330_'.$product->product_img.'" class="img-responsive" alt="a"></a> 
                                 
                              </div>
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color"> $'.money_format('%i',$product->current_price).'</h5>
                                       <del><span class="amount">$'.money_format('%i',$product->mrp).'</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="#">
                                       <span class="add-to-cart" id="add-to-like-'.$product->product_id.'"><img src="'.asset('beta_assets/images/cart.png').'" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left">
                                    <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                    <p class="btn-details"> <span class="wrapper"><img src="'.asset('beta_assets/images/add-clooection.png').'" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span> </p>
                                 </div>
                              </div>
                           </div>
                        </div>';

        $result .= '<li class="product">
                    <div class="product-outer">
                    <div class="product-inner">
                      <span class="loop-product-categories">
                        <a href="/product-details/'.$product->slug.'" rel="tag">'.$product->product_name.'</a>

                        <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_'.$product->product_id.'" onclick="compare('.$product->product_id.')">Compare</a>

                        <span id="added_compare_'.$product->product_id.'" style="padding-left: 71px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                      </span>
                      <a href="/product-details/'.$product->slug.'">
                        <h3>'.$product->product_name.'</h3>
                        <div class="product-thumbnail">
                          <img data-echo="'.getenv('URL').$product->product_img.'" src="'.getenv('URL').$product->product_img.'" id="img-responsive_'.$product->product_id.'" alt="">
                        </div>
                      </a>

                      <div class="price-add-to-cart">
                        <span class="price">
                          <span class="electro-price">
                            <ins><span class="amount">&#036;'.$product->current_price.'</span>
                            </ins>
                            <del><span class="amount">&#036;'.$product->mrp.'</span></del>
                          </span>
                        </span>
                        <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                        <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$product->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                                  
                      </div><!-- /.price-add-to-cart -->
                      <div class="hover-area">
                        <div class="action-buttons ">
                          ';
                          if(Session::has('user_id')){
                          $result .= '
                          <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                          <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$product->product_id.','.Session::get('user_id').')"><i class="add_to_wishlist1" id="'.$product->product_id.'"></i> Add To Wishlist</a>
                           ';
                           }else{
                            $result .=' 
                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist">Add To Like</a>
                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                            ';
                          }
                          $result .= '
                          <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javaascript:void(0)" onclick="quickView('.json_encode($product->product_id).')" style="color:white !important;"> Quick View</a></span>
                        </div>
                      </div>               
                    </div><!-- /.product-inner -->
                    </div><!-- /.product-outer -->
                    </li>';

      }
      $result .='</ul>';
      return ['result' => $result, 'result_beta' => $result_beta];
      //return json_encode($result);

   }

   /*support function started from here*/
   /*add support ticket*/
    public function addSupportTicket(Request $request){
      if(Session::has('user_id')){
        $order_id = $request->order_id;
        $customer_id = $request->customer_id;
        $vendor_id = $request->vendor_id;
        $shop_id = $request->shop_id;
        $title = $request->subject;
        $description = $request->message;
        $order = DB::table('orders')->where('order_no', $order_id)->first();
        if(is_object($order)){
          $data = ['order_id' => $order_id, 'vendor_id' => $vendor_id, 'customer_id' => $customer_id, 'shop_id' => $shop_id, 'title' => $title, 'description' => $description];
          $response = DB::table('support')->insert($data);
        }
        return redirect('/store-details/'.$shop_id);
      }else{
        redirect(getenv('APP_URL'));
      }
    }
   /*add support ticket*/

   /*add response ticket*/
   public function addTicketResponse(Request $request){
    if(Session::has('user_id')){
     /* $ticket_id = $request->ticket_id;
      $response = $request->response;
      $data = ['response' => $response];

      $result = DB::table('support')->where('id', $ticket_id)->update(['response'=>$response, 'status' => '1']);*/
      $result = DB::table('messages')->where('support_id', $request->ticket_id)->select('from_user_id')->first();

      $added = DB::table('messages')->where('id', $id)->insert([
            'support_id'=>$request->ticket_id,
            'message'=>$request->response,
            'from_user_id'=>$request->session()->get('user_id'),
            'to_user_id'=>1,
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')
        ]);
        
      return redirect('/beta-account');
    }
   }
   /*add response ticket*/

   /*List support Ticket*/
  public function listSupportTicket(Request $request){
    if(Session::has('user_id')){
      $customer_id = $request->session()->get('user_id');
      $result = DB::table('support')->where('customer_id', $customer_id)->get();
      return var_dump(json_encode($result));
    }else{
        redirect(getenv('APP_URL'));
    }
  }
   /*List support Ticket*/
   /*support function end form here*/


}
