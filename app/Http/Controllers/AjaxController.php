<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use Cart;
use Session;
use Cookie;
use App\Customer;
class AjaxController extends Controller
{
  public function __construct()
  {
        $this->website_menu = DB::table('website_menu')
                   ->where('status','=','1')
                   ->get();
        $this->website_customer_service = DB::table('website_customer_service')
                   ->where('status','=','1')
                   ->get();
        $this->website_show_the_following = DB::table('website_show_the_following')
                   ->where('status','=','1')
                   ->get();
    }
    public function getNotification(Request $request){
      if(Session::has('user_id')){
        $notification = DB::table('notification')->where('user_id', Session::get('user_id'))->where('status', 0)->count();
        return $notification;
      }
    }
    public function vendor_log(){
      //
      // A very simple PHP example that sends a HTTP POST to a remote site
      //
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,"https://www.moretolike.com/tester");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,
                  "postvar1=value1&postvar2=value2&postvar3=value3");
      // In real life you should use something like:
      // curl_setopt($ch, CURLOPT_POSTFIELDS, 
      //          http_build_query(array('postvar1' => 'value1')));
      // Receive server response ...
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $server_output = curl_exec($ch);
      curl_close ($ch);
      // Further processing ...
      //if ($server_output == "OK") { ... } else { ... }
    }
   
   
   
    public function instagramLogin(Request $request)
    {
      $data = $request->all();
      $access_token = $data['access_token'];
      $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$access_token;
      $return_data = $this->getDataByUrl($url);
      $instagram_media = json_decode($return_data)->data;
      print_r($instagram_media); exit;
      $query = DB::table('customers')->where('email', '=',$data['email'])->where('deleted_status', '=','Not deleted')->first();
      if(!isset($query->id)){
          echo 'Please Enter Correct Credentials.';
      }elseif(isset($query->customer_status) && ($query->customer_status == 'Inactive')){
          echo 'Your Profile is Inactive. Please Contact To admin.';
      }else{
          if(isset($query->id))
          {
        Session::put('user_id', $query->id);
        Session::put('f_name', $query->f_name);
        Session::put('vendor_id', $query->fk_vendor_id);
       // Session::put('profile_image', $query->profile_image);
        if(!Cart::isEmpty()){
            $cartContent = Cart::getContent();
            foreach ($cartContent as $value) {
                $checkValue = DB::table('cart')
                        ->where('fk_user_id','=',$query->id)
                        ->where('cart_id','=',$value->id)
                        ->where('fk_order_id','=',0)
                        ->first();
                if(isset($checkValue->quantity)){
                        $qty = $checkValue->quantity + $value->quantity;
                        $updateCart = DB::table('cart')
                             ->where('fk_user_id','=',$query->id)
                             ->where('cart_id','=',$value->id)
                             ->update(['quantity' => $qty]);  
                } else {       
                    $input['fk_user_id'] = $query->id;
                    $input['cart_id'] = $value->id;
                    $input['quantity'] = $value->quantity;
                    $input['product_name'] = $value->name;
                    $input['product_attributes'] = $value->attributes;
                    $input['product_price'] = $value->price;
                    $input['created_date'] = date("Y-m-d");
                    $input['fk_product_id'] = $value->attributes['product_id']; 
                    // return $input;
                    $cartInsertion = DB::table('cart')->insert($input);
                }
            }
        } 
                  Cart::clear();  
                  Cart::session($query->id)->clear();
                  $userCart = DB::table('cart')
                          ->where('fk_user_id','=',$query->id)
                          ->where('fk_order_id','=',0)
                          ->get();
                  foreach ($userCart as $value) {
                          $inputs['id'] = $value->cart_id;
                          $inputs['name'] = $value->product_name;
                          $inputs['price'] = $value->product_price;
                          $inputs['quantity'] = $value->quantity;
                          $inputs['attributes'] = json_decode($value->product_attributes);
                          Cart::session($query->id)->add($inputs); 
                  }
                  //$url = url()->previous();
                 // return Redirect($url);
                  echo 'success';
          }
      }
    }
    public function addCart(Request $request){
      $session = '';
        $requestData 	= $request->all();
		//dd($requestData);
		$count_product_id  = $requestData['product_id'];
		$product_ids  = explode(',',$requestData['product_id']);
		//$input = array();
		 $cart = DB::table('cart')
							  ->orderBy('pk_cart_id','desc')
							  ->first();
		  if(isset($cart->pk_cart_id) && !empty($cart->pk_cart_id)){
			  // $color_arr = explode('#',$requestData['color']);
			  $unique_cart_id = $cart->pk_cart_id + 1;
		  } else{
			  $unique_cart_id = 1;
		  }
		//$unique_cart_id = 886;
		foreach($product_ids as $key=>$product_id){
        $product_detail = DB::table('product')
                            ->where('product_id','=',$product_id)
                            ->select('product.product_name','product.current_price','product.mrp','product.product_img')
                            ->first();
		$input[$key]['name'] 		= $product_detail->product_name;
		$input[$key]['price'] 	= $product_detail->current_price;
		$input[$key]['quantity'] 	= $requestData['quantity'];
		$input_size 		= array();
        
        if(isset($requestData['color'])){
        if(array_key_exists('vendor_id', $requestData)){
        $input[$key]['attributes'] = ['img'=>$product_detail->product_img,'color'=>$requestData['color'],'product_id'=>$product_id, 'vendor_id' => $requestData['vendor_id']];
        }else{
              $input[$key]['attributes'] = ['img'=>$product_detail->product_img,'color'=>$requestData['color'],'product_id'=>$product_id];
        }
        } else {
          if(array_key_exists('vendor_id', $requestData)){
            $input[$key]['attributes'] = ['img'=>$product_detail->product_img,'product_id'=>$product_id, 'vendor_id' => $requestData['vendor_id']];
            }else{
                  $input[$key]['attributes'] = ['img'=>$product_detail->product_img,'product_id'=>$product_id];
            }
        }
		
			$input[$key]['attributes']['attributes'] = $requestData['attributes'];
		
		//dd($input);
		if(Session::has('user_id')){
			 $session = $request->session()->get('user_id');
			 $checkValue = DB::table('cart')
								->where('fk_user_id','=',$session)
								->where('fk_product_id','=',$product_id)
								->where('fk_order_id','=',0)
								->first();
								if(isset($checkValue->quantity) ){
								  $input[$key]['id'] = $checkValue->cart_id;
								$qty = $checkValue->quantity + $input[$key]['quantity'];
					   $updateCart = DB::table('cart')
									 ->where('fk_user_id','=',$session)
									  ->where('fk_product_id','=',$product_id)
									  ->where('fk_order_id','=',0)
									 ->update(['quantity' => $qty]);  
					  } else {  
								$cart = DB::table('cart')
							  ->orderBy('pk_cart_id','desc')
							  ->first();
						  if(isset($cart->pk_cart_id) && !empty($cart->pk_cart_id)){
							  // $color_arr = explode('#',$requestData['color']);
							  $input[$key]['id'] = $cart->pk_cart_id + 1;
						  } else{
							  $input[$key]['id'] = 1;
						  } 
							$inputs['fk_user_id'] = $session;
							$inputs['cart_id'] = $input[$key]['id'];
							$inputs['quantity'] = $input[$key]['quantity'];
							$inputs['product_name'] = $input[$key]['name'];
							$inputs['product_attributes'] = json_encode($input[$key]['attributes']);
							$inputs['product_price'] = $input[$key]['price'];
							$inputs['created_date'] = date("Y-m-d");
							$inputs['fk_product_id'] = $product_id;
						 
							$cartInsertion = DB::table('cart')->insert($inputs);
					}
		} else {
		  
			$input[$key]['id'] = $unique_cart_id;
			$unique_cart_id++;
			$cart_pre = Cart::getContent();
			//Cart::session($input['id']);		  
			if(is_object($cart_pre) && $cart_pre != '[]'){
				$inserting_product_id = $input[$key]['attributes']['product_id'];
				$jsonText = $cart_pre;
				$decodedText = html_entity_decode($jsonText);
				$cart_data = json_decode($decodedText, true);
				
				foreach($cart_data as $key1=>$val){
					if($val['attributes']['product_id'] == $inserting_product_id){
					  $input[$key]['id'] = $key1;
					  break;
					}else{
					  $add_id = $key1;
					  $input[$key]['id'] = $add_id+1;
					}
				}
			}
			//dd($cart_pre);	
			//echo $input['id']; die();
		}
		}
		  //dd($input);
    //return $input;
		if(Session::has('user_id')){
			Cart::session($session)->add($input);
			$carts = Cart::session($session)->getContent();
			$getTotlaQty = Cart::session($session)->getTotalQuantity();
			$getSubTotal = Cart::session($session)->getSubTotal();
		}else{
			Cart::add($input); 
			$carts 			= Cart::getContent();
			$getTotlaQty 	= Cart::getTotalQuantity();
			$getSubTotal 	= Cart::getSubTotal();
		}
		$cart_beta = '';
		$cart_cout = 0;
		$cart_cout_val = count($cart);
		foreach($carts as $key=>$cart_row){
			$cart_cout = $cart_cout+1;
			$onclick = "removeCart(".$cart_row->id.",".$cart_row->quantity.",".$cart_row->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
			//echo $onclick; die();
		  $cart_beta .= '<li>
							 <div class="row">
                              <div class="col-sm-3"><img src="'.getenv("URL").'75X75_'.$cart_row->attributes->img.'" alt="" /> </div>
                              <div class="col-sm-6 productname">
                                 <a href="javascript:void(0)">'.$cart_row->name.'</a>
                                 <p>'.$cart_row->quantity.' × $'.money_format("%i", $cart_row->price).'</p>
                              </div>
                          
                           </div>
                            
                              <div class="row mobile_wi_kj">
                                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 padding_ndb_c">
                                   <div class="card_collection_img">
                                    <a href="#"> 
                                      <img src="https://moretolike.com/images/add-clooection.png">
                                       <span>Add to a Collection</span>
                                       </a>
                                   </div> 
                               </div>
                               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 the_ponsv">
                                 <div class="remove_content_cared_cu">
                                     <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="'.$onclick.'" id="'.$cart_row->id.'">× Remove</a>
                                </div>  
                                </div>   
                            </div>
						 </li>';
			//echo $cart_beta; die();
		}
		$fly_cart = '';
		$res= '<li class="nav-item dropdown open" id="open_cart_menu">
					<a href="/cart" class="nav-link" data-toggle="dropdown">
						<i class="ec ec-shopping-bag"></i>
						<span class="cart-items-count count">'.$getTotlaQty.'</span>
						<span class="cart-items-total-price total-price"><span class="amount amount_total">&#36;'.$getSubTotal.'</span></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-mini-cart" id="style-3">
					<li><a href="#"><i class="fa fa-times circle1"></i> </a><h4 class="shopi">SHOPPING BAG</h4></li>
									   <li><hr></li>
						<li>
							<div class="widget_shopping_cart_content">
								<ul class="cart_list product_list_widget " >';
		foreach ($carts as $cart) {
			$onclick = "removeCart(".$cart->id.",".$cart->quantity.",".$cart->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
			$res .= '<li class="mini_cart_item">
				  <a title="Remove this item" class="remove" href="javascript:void(0);" onclick="'.$onclick.'" id="'.$cart->id.'">×</a>
										<a href="single-product.html">
											<img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="'.getenv('URL').$cart->attributes['img'].'" alt="">'.$cart->name.'&nbsp;
										</a>
										<span class="quantity">'.$cart->quantity.' × <span class="amount amount_total">$'.$cart->price.'</span></span>
									</li>';
				  $fly_cart .='<li class="mini_cart_item">
				  <a title="Remove this item" class="remove" href="javascript:void(0);" onclick="'.$onclick.'" id="'.$cart->id.'_li">×</a>
										<a href="single-product.html">
											<img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="'.getenv('URL').$cart->attributes['img'].'" alt="">'.$cart->name.'&nbsp;
										</a>
										<span class="quantity">'.$cart->quantity.' × <span class="amount amount_total">$'.$cart->price.'</span></span>
									</li>'; 
		}
		 $res .= '</ul><!-- end product list -->
								<p class="buttons">
									';
									  if($session != '') {
										$res .= '<a class="button checkout wc-forward" href="/checkout">Proceed to Checkout</a>';
									  }
									  else  {
										$res .= '<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Proceed to Checkout</a>';
									  }
								$res .= '</p>
							</div>
						</li>
					</ul>
				</li>
			';
		if($session != '') {
			$checkout_button = '<a class="mycheckout slide_checkout_page" href="javascript:void(0);">Proceed to Checkout</a>';
		}else{
			$checkout_button = '<a href="javascript:void(0)" id="login" data-toggle="modal" data-target="#exampleModal" class="mycheckout">Proceed to Checkout</a>';
		}
		if($session != '') {
			$cart_button = '<a href="javascript:void(0);" class="mybtncart slide_cart_page">Go To Cart</a>';
		}else{
			$cart_button = '<a href="javascript:void(0);" class="mybtncart" id="login" data-toggle="modal" data-target="#exampleModal">Go To Cart</a>';
		 }
		//echo $this->loadAllCartData($request);
        return ['data'=> $res, 'sub_data'=>$fly_cart, 'total_quantity' => $getTotlaQty, 'total_price' => money_format('%i', $getSubTotal), 'cart'=> $input, 'cart_beta' => $cart_beta, 'checkout_button' => $checkout_button, 'cart_button' => $cart_button, 'cart_cout' => $cart_cout, 'cart_cout_val' => $cart_cout_val];
                //echo $res;
    }
	public function loadAllCartData(Request $request){
		if(Session::has('user_id')){
			$session = $request->session()->get('user_id');
			$cart = Cart::session($session)->getContent();
			$getTotlaQty = Cart::session($session)->getTotalQuantity();
			$getSubTotal = Cart::session($session)->getSubTotal();
		}else{
			$cart = Cart::getContent();
			$getTotlaQty = Cart::getTotalQuantity();
			$getSubTotal = Cart::getSubTotal();
		}
		echo count($cart); exit();
		foreach($cart as $key=>$cart_row){
			$cart_cout = $cart_cout+1;
			$onclick = "removeCart(".$cart_row->id.",".$cart_row->quantity.",".$cart_row->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
		  $cart_beta .= '<li>
							<div class="row">
							   <div class="col-sm-3"><img src="'.getenv("URL").'75X75_'.$cart_row->attributes->img.'" alt="" /> </div>
							   <div class="col-sm-6 productname">
								  <a href="javascript:void(0)">'.$cart_row->name.'</a>
								  <p>'.$cart_row->quantity.' × $'.money_format("%i", $cart_row->price).'</p>
							   </div>
							   <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="'.$onclick.'" id="'.$cart_row->id.'">×</a>
							</div>
						 </li>';
		}
	}
    public function addToCustomerCollection(Request $request){
      $requestData 	= $request->all();
      $product_id 	= $requestData['product_id'];
      $customer_id 	= $requestData['customer_id'];
      $type 		= $requestData['type'];
      $success 		= '';
      $error 		= '';
      $is_exists = DB::table('customer_collections')->where('product_id', $product_id)->where('customer_id', $customer_id)->where('type', $type)->count();
      if($is_exists == 0){
        $bool_ins = DB::table('customer_collections')->insert([
                    'product_id' => $product_id,
                    'customer_id' => $customer_id,
                    'type' => $type
                    ]);
        $success .= 'Successfully added in your collection';
      }else{
        $error .= 'You have already added this product';
      }
      if(strlen($error) > 0){
        return ['data'=> $error];
      }else{
        return ['data'=> $success];
      }
    }
    /*for adding product in his collection*/
    public function addToStore(Request $request){
        $session = '';
        $requestData = $request->all();
        $product_id = $requestData['product_id'];
        $error = '';
        $success = '';
        if(isset($product_id) && !empty($product_id)){
          $product = DB::table('product')->where('product_id', '=', $product_id)->where('deleted_status', '=', 'Not deleted')->where('shareable_product', '=', 'shareable')->first();
          if(isset($product) && !empty($product)){
            if(Session::has('user_id')){
                $user_id = Session::get('user_id');
                $user = DB::table('customers')->where('id', '=', $user_id)->where('fk_vendor_id', '!=', NULL)->first();
                if(is_object($user) && isset($user) && !empty($user) && property_exists($user, 'fk_vendor_id')){
                  if($user->fk_vendor_id != '' && $user->fk_vendor_id != NULL && $user->fk_vendor_id != 0){
                    /*check if product exist in collection store*/
                    $bool_exist = DB::table('product_shared_vendors')->where('fk_product_id', '=', $product_id)->where('fk_vendor_id', '=', $user->fk_vendor_id)->first();
                    if($bool_exist == null){
                        $bool_ins = DB::table('product_shared_vendors')->insert([
                        'fk_product_id' => $product_id,
                        'fk_vendor_id' => $user->fk_vendor_id
                        ]);
                        $success .= $product->product_name.' successfully added in your collection';
                    }else{
                      $error .= $user->customer_name.' You have already added '.$product->product_name.' in your store.';
                    }
                  }else{
                    $error .= $user->customer_name.' you are not a vendor upgrade yourself as a vendor';
                  }
                }
                else{
                $error .= 'You are not registered user!';
              }
            }else{
              $error .= 'you have not logged in login before!';
            }
          }
          else{
            $error .= 'Sorry! This product is not shareable';
          }
        }else{
          $error .= 'Sorry! This product is not shareable';
        }
        if(strlen($error) > 0){
          return ['data'=> $error];
        }else{
          return ['data'=> $success];
        }
    }
    /*for adding product in his collection*/
   public function addCartFlyto(Request $request) {
      // echo "hello";
       if(Session::has('user_id')){
                     $session = $request->session()->get('user_id');
                   $getTotlaQty = Cart::session($session)->getTotalQuantity();
                } else {
                   $getTotlaQty = Cart::getTotalQuantity();
                }
                return $getTotlaQty;
    }
    public function dealsAndTabsProducts(Request $request)
    {
      if(Session::has('user_id')){
                     $session = $request->session()->get('user_id');
                   }
        $requestData = $request->all();
       $result = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        ->join('products_sub_category', 'product.product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->where('fk_product_type_id','=',$requestData['id'])
        ->get();
        $res = '';
          foreach ($result as $key=>$value) {
          if($key > 5) {
                   break;
          } else {
        $res .= '<li class="product">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <span class="loop-product-categories"><a href="/product-details/$value->slug" rel="tag">'.$value->name.'</a>
                                    <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_'.$value->product_id.'" onclick="compare('.$value->product_id.')">Compare</a>
                                                            <span id="added_compare_deal_'.$value->product_id.'" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                                    </span>
                                    <a href="product-details/'.$value->slug.'">
                                        <h3>'.$value->product_name.'</h3>
                                        <div class="product-thumbnail">
                                            <img src="'.getenv('URL').$value->product_img.'" data-echo="'.getenv('URL').$value->product_img.'" id="img-responsive_'.$value->product_id.'" alt="">
                                        </div>
                                    </a>
                                    <div class="price-add-to-cart">
                                        <span class="price">
                                            <span class="electro-price">
                                                <ins><span class="amount amount_total"> $'.$value->current_price.'</span></ins>
                                                <del><span class="amount amount_total">$'.$value->mrp.'</span></del>
                                                <span class="amount amount_total"> </span>
                                            </span>
                                        </span>
                                        <span class="wrappertz"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                            <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$value->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                    </div><!-- /.price-add-to-cart -->
                                    <div class="hover-area">
                                        <div class="action-buttons">';
                                         if(Session::has('user_id')) {
                              $res .=  '<a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                     <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$value->product_id.','.$session.')"><i class="add_to_wishlist1" id="deals_'.$value->product_id.'"></i> Add To Wishlist</a>';
                                           } else {
                                          $res .= ' <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>';
                                            }
                                           $res .= ' <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView('.$value->product_id.')" style="color:white !important;"> Quick View</a></span>
                                        </div>
                                    </div>
                                </div><!-- /.product-inner -->
                            </div><!-- /.product-outer -->
                        </li><!-- /.products -->';
         }
     }
         echo $res;
    }
    public function updateCart(Request $request) 
    {
        $requestData = $request->all();
        if(Session::has('user_id')){
         $session =Session::get('user_id');
         for ($i=0; $i < Cart::session($session)->getTotalQuantity(); $i++) { 
            if(isset($requestData["id_".$i])) {
                $id = $requestData["id_".$i];
                Cart::session($session)->update($id,array(
                    'quantity'=> array(
                                  'relative' => false,
                                  'value' => $requestData["name_".$i]
                              )
                ));
             } else {
                break;
             }
         }
           $cartContent = Cart::session($session)->getContent();
                        foreach ($cartContent as $value) {
                            $checkValue = DB::table('cart')
                                    ->where('fk_user_id','=',$session)
                                    ->where('cart_id','=',$value->id)
                                    ->where('fk_order_id','=',0)
                                    ->first();
                            if(isset($checkValue->quantity)){
                                    $qty = $value->quantity;
                                    $updateCart = DB::table('cart')
                                         ->where('fk_user_id','=',$session)
                                         ->where('cart_id','=',$value->id)
                                         ->update(['quantity' => $qty]);  
                            } 
                        }
         } else {
         // echo Cart::getTotalQuantity();
         for ($i=0; $i < Cart::getTotalQuantity(); $i++) { 
            if(isset($requestData["id_$i"])) {
                $id = $requestData["id_$i"];
                // echo $i;
                Cart::update($id,array(
                    'quantity'=> array(
                                  'relative' => false,
                                  'value' => $requestData["name_$i"]
                              )
                ));
             } else {
                break;
             }
             }
              //return json_encode(Cart::getContent()); 
         }
         return Redirect()->back();
       // foreach ($requestData as $value) {
        // print_r($value);
        // $id = $requestData['id'];
        // Cart::update($id,array(
        //  'quantity'=>$requestData["name_$id"]
        // ));
       // }
    }
	public function updateSlideCart(Request $request) 
    {
        $requestData = $request->all();
        if(Session::has('user_id')){
         $session =Session::get('user_id');
         for ($i=0; $i < Cart::session($session)->getTotalQuantity(); $i++) { 
            if(isset($requestData["id_".$i])) {
                $id = $requestData["id_".$i];
                Cart::session($session)->update($id,array(
                    'quantity'=> array(
                                  'relative' => false,
                                  'value' => $requestData["name_".$i]
                              )
                ));
             } else {
                break;
             }
         }
           $cartContent = Cart::session($session)->getContent();
                        foreach ($cartContent as $value) {
                            $checkValue = DB::table('cart')
                                    ->where('fk_user_id','=',$session)
                                    ->where('cart_id','=',$value->id)
                                    ->where('fk_order_id','=',0)
                                    ->first();
                            if(isset($checkValue->quantity)){
                                    $qty = $value->quantity;
                                    $updateCart = DB::table('cart')
                                         ->where('fk_user_id','=',$session)
                                         ->where('cart_id','=',$value->id)
                                         ->update(['quantity' => $qty]);  
                            } 
                        }
         } else {
         // echo Cart::getTotalQuantity();
         for ($i=0; $i < Cart::getTotalQuantity(); $i++) { 
            if(isset($requestData["id_$i"])) {
                $id = $requestData["id_$i"];
                // echo $i;
                Cart::update($id,array(
                    'quantity'=> array(
                                  'relative' => false,
                                  'value' => $requestData["name_$i"]
                              )
                ));
             } else {
                break;
             }
             }
              //return json_encode(Cart::getContent()); 
         }
		$input 			= 'ss';
		$cart 			= Cart::getContent();
		$getTotlaQty 	= Cart::getTotalQuantity();
		$getSubTotal 	= Cart::getSubTotal();
		$cart_beta 		= '';
		foreach($cart as $cart_row){
			$onclick = "removeCart(".$cart_row->id.",".$cart_row->quantity.",".$cart_row->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
		  $cart_beta .= '<li>
							<div class="row">
							   <div class="col-sm-3"><img src="'.getenv("URL").'75X75_'.$cart_row->attributes->img.'" alt="" /> </div>
							   <div class="col-sm-6 productname">
								  <a href="javascript:void(0)">'.$cart_row->name.'</a>
								  <p>'.$cart_row->quantity.' × $'.money_format("%i", $cart_row->price).'</p>
							   </div>
							   <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="'.$onclick.'" id="'.$cart_row->id.'">×</a>
							</div>
						 </li>';
		}
			$fly_cart = '';
			$res= '<li class="nav-item dropdown open" id="open_cart_menu">
						<a href="/cart" class="nav-link" data-toggle="dropdown">
							<i class="ec ec-shopping-bag"></i>
							<span class="cart-items-count count">'.$getTotlaQty.'</span>
							<span class="cart-items-total-price total-price"><span class="amount amount_total">&#36;'.$getSubTotal.'</span></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-mini-cart" id="style-3">
						<li><a href="#"><i class="fa fa-times circle1"></i> </a><h4 class="shopi">SHOPPING BAG</h4></li>
										   <li><hr></li>
							<li>
								<div class="widget_shopping_cart_content">
									<ul class="cart_list product_list_widget " >';
			foreach ($cart as $cart) {
			$onclick = "removeCart(".$cart->id.",".$cart->quantity.",".$cart->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
			$res .= '<li class="mini_cart_item">
			  <a title="Remove this item" class="remove" href="javascript:void(0);" onclick="'.$onclick.'" id="'.$cart->id.'">×</a>
									<a href="single-product.html">
										<img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="'.getenv('URL').$cart->attributes['img'].'" alt="">'.$cart->name.'&nbsp;
									</a>
									<span class="quantity">'.$cart->quantity.' × <span class="amount amount_total">$'.$cart->price.'</span></span>
								</li>';
			  $fly_cart .='<li class="mini_cart_item">
			  <a title="Remove this item" class="remove" href="javascript:void(0);" onclick="'.$onclick.'" id="'.$cart->id.'_li">×</a>
									<a href="single-product.html">
										<img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="'.getenv('URL').$cart->attributes['img'].'" alt="">'.$cart->name.'&nbsp;
									</a>
									<span class="quantity">'.$cart->quantity.' × <span class="amount amount_total">$'.$cart->price.'</span></span>
								</li>'; 
			}
			$res .= '</ul><!-- end product list -->
							<p class="buttons">
								';
								  if($session != '') {
									$res .= '<a class="button checkout wc-forward" href="/checkout">Proceed to Checkout</a>';
								  }
								  else  {
									$res .= '<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Proceed to Checkout</a>';
								  }
							$res .= '</p>
						</div>
					</li>
				</ul>
			</li>
		';
        return ['data'=> $res, 'sub_data'=>$fly_cart, 'total_quantity' => $getTotlaQty, 'total_price' => money_format('%i', $getSubTotal), 'cart'=> $input, 'cart_beta' => $cart_beta];
        return 'success';
       // foreach ($requestData as $value) {
        // print_r($value);
        // $id = $requestData['id'];
        // Cart::update($id,array(
        //  'quantity'=>$requestData["name_$id"]
        // ));
       // }
    }
    public function removeCart(Request $request) 
    {
      $cart_id 	= $request['cart_id'];
      $slide 	= $request['slide'];
      $removeData = '';
      if(Session::has('user_id')){
        $session = Session::get('user_id');
       Cart::session($session)->remove($cart_id);
       $removeData = DB::table('cart')
                     ->where('cart_id','=',$cart_id)
                     ->where('fk_order_id','=',0)
                     ->delete();
                     //print_r(Cart::session($session)->getTotalQuantity());
      }  else { 
        Cart::remove($cart_id);
      }
      /*if($request['cart'] == 1) {
        return Redirect()->back();
      } else {
      return $removeData;
      }*/
      if(Session::has('user_id')){
        $user_id = $request->session()->get('user_id');
        $cart = Cart::session($user_id)->getContent();
        $getTotlaQty = Cart::session($user_id)->getTotalQuantity();
        $getSubTotal = Cart::session($user_id)->getSubTotal();
        $wishlistCount = DB::table('customer_wishlist')
                  ->where('fk_customer_id','=',$user_id)
                  ->get()
                  ->count();
      } else {
        $cart = Cart::getContent();
        $getTotlaQty = Cart::getTotalQuantity();
        $getSubTotal = Cart::getSubTotal();
        $wishlistCount = 0;
      }
      $cart_data = '';
      foreach($cart as $row){
		  $onclick = "removeCart(".$row->id.",".$row->quantity.",".$row->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
        $cart_data .= '<li>

         <div class="row">
                              <div class="col-sm-3"><img src="'.getenv("URL").'75X75_'.$row->attributes->img.'" alt="" /> </div>
                              <div class="col-sm-6 productname">
                                 <a href="javascript:void(0)">'.$row->name.'</a>
                                 <p>'.$row->quantity.' × $'.money_format("%i", $row->price).'</p>
                              </div>
                          
                           </div>
                            
                              <div class="row mobile_wi_kj">
                                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 padding_ndb_c">
                                   <div class="card_collection_img">
                                    <a href="#"> 
                                      <img src="https://moretolike.com/images/add-clooection.png">
                                       <span>Add to a Collection</span>
                                       </a>
                                   </div> 
                               </div>
                               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 the_ponsv">
                                 <div class="remove_content_cared_cu">
                                     <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="'.$onclick.'" id="'.$row->id.'">× Remove</a>
                                </div>  
                                </div>   
                            </div>
                      
                     </li>';
      }
      $cart_page_data = '';
      foreach($cart as $row){
		$onclick = "removeCart(".$row->id.",".$row->quantity.",".$row->price.",".$getTotlaQty.",".$getSubTotal.",'slide')";
        $cart_page_data .= '<tr>
                          <td><img src="'.getenv("URL").'75X75_'.$row->attributes->img.'" style="height: 100px; width: 100px" /> </td>
                          <td>'.$row->name.'</td>
                          <td>$ '.money_format("%i", $row->price).'</td>
                          <td><input type="number" class="select1" name="quantity" min="1" max="5" value="'.$row->quantity.'"></td>
                          <td class="text-right"> $ '.money_format('%i', $row->price*$row->quantity).'</td>
                          <td class="text-right"><button class="btn btn-sm btn-danger"  onclick="'.$onclick.'" id="'.$row->id.'"><i class="fa fa-trash"></i> </button> </td>
                       </tr>';
      }
      return ['data' => $cart_data, 'subtotal' => money_format('%i', $getSubTotal), 'cart_page_data' => $cart_page_data, 'total_quantity' => $getTotlaQty ];
    }
    public function checkEmail(Request $request)
    {
        $requestData = $request->input('cutomer_name');
       print_r ($requestData);
        $username = DB::table('customers')->where('cutomer_name','=',$requestData)->get();
        if(count($username) > 0){
            return $username['cutomer_name'];
        }
    }
    public function storeFollower(Request $request)
    {
        $date = date('Y-m-d h:i:s');
        $inputs['fk_customer_id'] = $request['fk_customer_id'];
        $inputs['fk_vendor_id'] = $request['fk_vendor_id'];
        $inputs['follower_type'] = $request['follower_type'];
        $inputs['follow_date'] = $date;
        $store_follower = DB::table('store_follower')->insert($inputs);
        echo '<a href="javascript:void(0)" class="button2"><i class="fa fa-user"></i> Followed Store</a>';
    }
	public function userFollower(Request $request)
    {
        $date = date('Y-m-d h:i:s');
        $inputs['follower_id'] = $request['follower_id'];
        $inputs['following_id'] = $request['following_id'];
        $store_follower = DB::table('user_follower')->insert($inputs);
        echo '<a href="javascript:void(0)" class="button2"><i class="fa fa-user"></i> Followed Store</a>';
    }
    public function getCountryCode(Request $request)
    {
        $country_code =DB::table('ms_countries')->where('id',$request->countryid)->first();
        echo $country_code->phonecode;
    }
    public function searchFilter(Request $request) 
    {
       if(Session::has('user_id')){
        $session = Session::get('user_id');
      }
        $requestData = $request->all();
        $filter_brand = implode(',',json_decode($requestData['brand'], true));
        $filter_color = implode(',',json_decode($requestData['color'], true));
         // print_r(($requestData));  
        $where = "1";
        if(isset($requestData['search_value'])){
            $where .= " and p.product_name like '%".$requestData['search_value']."%'";
        }
        if(isset($filter_brand) && !empty($filter_brand)){
         $where .= ' and b.id in ('.$filter_brand.')' ;
        } 
        if(isset($filter_color) && !empty($filter_color)) {
            $where .= ' and c.color_code in ('.$filter_color.')';
        }
        if(isset($requestData['search_cat']) && $requestData['search_cat'] != 0){
            $where .= ' and ps.fk_sub_category_id = '.$requestData['search_cat'];
        }
        if(isset($requestData['low_amt']) && isset($requestData['high_amt'])){
            $where .= ' and p.current_price between '.(int)$requestData['low_amt'].' and '.(int)$requestData['high_amt'];
        }
        // return $requestData;
          $filterResult = DB::select(DB::raw("select p.product_id,p.product_name,p.slug, p.mrp, p.current_price, p.product_img, ms.name from product as p inner join ms_brands as b  on p.brand_id = b.id inner join product_color as c on p.product_id = c.fk_product_id inner join products_sub_category as ps on p.product_id = ps.fk_product_id inner join ms_sub_category as ms on ps.fk_sub_category_id = ms.id where ".$where));
         // return $filterResult;
          $res = '';
          if(count($filterResult) > 0){
          foreach ($filterResult as $store_product_list1) {
            // return $search;
              $res .='<li class="product">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <span class="loop-product-categories"><a href="/product-details/$store_product_list1->slug" rel="tag">'.$store_product_list1->name.'</a>
                                        <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_'.$store_product_list1->product_id.'" onclick="compare('.$store_product_list1->product_id.')">Compare
                                        </a>
                                        <span id="added_compare_deal_'.$store_product_list1->product_id.'" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                                        </span>
                                        <a href="product-details/'.$store_product_list1->slug.'">
                                                <h3>'.$store_product_list1->product_name.'</h3>
                                                <div class="product-thumbnail">
                                                    <img src="'.getenv('URL').$store_product_list1->product_img.'" data-echo="'.getenv('URL').$store_product_list1->product_img.'" class="img-responsive" alt="">
                                                </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount amount_total"> $'.$store_product_list1->current_price.'</span></ins>
                                                    <del><span class="amount amount_total">$'.$store_product_list1->mrp.'</span></del>
                                                    <span class="amount amount_total"> </span>
                                                </span>
                                            </span>
                                            <span class="wrappertz"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                                <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$store_product_list1->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                        </div>
                                    <div class="hover-area">
                                        <div class="action-buttons">';
                                         if(Session::has('user_id')) {
                              $res .=  '<a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                     <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$store_product_list1->product_id.','.$session.')"><i class="add_to_wishlist1" id="deals_'.$store_product_list1->product_id.'"></i> Add To Wishlist</a>';
                                           } else {
                                          $res .= ' <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>';
                                            }
                                           $res .= ' <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView('.$store_product_list1->product_id.')" style="color:white !important;"> Quick View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
          }
      } else {
        $res .= 'Sorry no result found';
      }
            echo $res;
          }
     public function getState(Request $request){
        $state =DB::table('ms_states')->where('country_id',$request->countryid)->get();
        foreach($state as $state1){
                echo "<option value='{$state1->id}'>{$state1->state_name}</option>";
        } 
    }   
    public function getCity(Request $request)
    {
        $city =DB::table('ms_cities')->where('state_id',$request->stateid)->get();
        foreach($city as $city){
                echo "<option value='{$city->id}'>{$city->name}</option>";
           } 
    }
    public function addWishlist(Request $request) 
    {
      // return $request->product_id;
      $count = DB::table('customer_wishlist')
                ->where('fk_product_id','=',$request->product_id)
                ->where('fk_customer_id','=',$request->customer_id)
                ->get()
                ->count();
                if($count == 0) {
      $input['fk_product_id'] = $request->product_id;
      $input['fk_customer_id'] = $request->customer_id;
        $addData = Db::table('customer_wishlist')->insert($input);
      }
       $wishlistCount = DB::table('customer_wishlist')
                ->where('fk_customer_id','=',$request->customer_id)
                ->get()
                ->count();
      $res = '<li class="nav-item" id="header-wishlist">
                            <a href="/wishlist" class="nav-link"><i class="ec ec-favorites"></i><span class="cart-items-count count">'.$wishlistCount.'</span></a>
                        </li>';
                    echo $res;
    }
    public function compare(Request $request) 
    {
        $requestData = $request->all();
        $compare_ids = Session::get('compare_id');
        $res = '';
        if(!isset($compare_ids)){
          $compare_ids = [];
        }
        if(count($compare_ids) < 4) {
          if(!(in_array($requestData['product_id'], $compare_ids))){
            array_push($compare_ids, $requestData['product_id']);
            Session::put("compare_id", $compare_ids);
          }
          /*$res = '<li class="nav-item"> <a href="/compare" class="nav-link"><i class="ec ec-compare"></i><span class="cart-items-count count">'.count($compare_ids).'</span></a> </li>';*/
          $res_count = count($compare_ids);
          $res .= '<b>Product Added.</b> <a href="'.url('/beta-compare').'"> View </a>';
        }else{
          $res .= '<b>You have already added <code>four</code> prodcut for comparison. Remove one of them.</b>';
          $res .= '<ul class="cart_list product_list_widget popup_product_compare" ';
          foreach($compare_ids as $key=>$product_id){
            $url = getenv('URL').'/75X75_'.$product->product_img;
            $product = DB::table('product')->where('product_id', $product_id)->first();
            $res .= '<li class="mini_cart_item">
                      <div class="row">
                         <div class="col-lg-3 col-md-3 col-xs-3"><img src="'.$url.'" alt=""> </div>
                         <div class="col-lg-7 col-md-7 col-xs-7 productname">
                            <a href="javascript:void(0)">'.$product->product_name.'</a>
                         </div>
                         <a title="Remove this item" product_id = "'.$product_id.'" class="remove remove_compare" onclick="remove_compare(this,'.$product_id.')" href="javascript:void(0);">×</a>
                      </div>
                      </li>';
          } 
          $res .= '</ul>';
        //  $res = 'Error : You have already added 4 product for compare.';
          $res_count = 4;
        } 
        return ['data' => $res, 'data_count' => $res_count];
    }
    public function remove_compare(Request $request) {
      //return $request;
       $request->id;
        $product_ids = Session::get('compare_id');
        array_splice($product_ids, array_search($request->id,$product_ids),1);
        Session::forget('compare_id');
        Session::put('compare_id',$product_ids);
        return 'success';
    }
   /* public function registerCustomer(Request $request) {
        if($request['customer_name'])
        {
            $username = DB::table('customers')
                    ->where('customer_name','=',$request['customer_name'])
                    ->select('*')
                    ->get();
            if(count($username) >0 ){
                echo "Please Enter another username.This username is already used";
            }
        }
        if($request['email'])
        {
            $email =  DB::table('customers')
                      ->where('email','=',$request['email'])
                      ->select('*')
                      ->get();
            if(count($email) > 0){
                echo "Please Enter another email.This email is already used.";
            }
        }
        if(!empty($request['profile_image']))
            {
                $profile_extension =  explode(".", strtolower($request['profile_image']));
                $profile_extension = $request['profile_image']->getClientOriginalExtension();
                if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'|| $profile_extension=='svg' ){
                            $profile_image = time().'.'.$profile_extension;
                            $request['profile_image']->move(public_path('uploads'), $profile_image);
                }else{
                    $profile_image ='';
                }
            }else{
                    $profile_image ='';
            }
        $date = date('Y-m-d h:i:s');
        $inputs['f_name'] = $request['f_name'];
        $inputs['l_name'] = $request['l_name'];
        $inputs['customer_name'] = $request['customer_name'];
        $inputs['password'] = md5($request['password']);
        $inputs['email'] = $request['email'];
        $inputs['dob'] = $request['dob'];
        $inputs['contact_no'] = $request['contact_no'];
        $inputs['profile_image'] = $profile_image;
        $inputs['created_date'] = $date;
        $users = DB::table('customers')->insert($inputs);
        echo  $users;
    }*/
    public function customerAddressDelete(Request $request)
    {
          $requestData = $request->all();
          $data = DB::table('order_address_info')
                ->where('pk_address_id','=',$requestData['del_id'])
                ->delete();
          //echo $data;
          if($data == 1)
          {
            echo "success";
          }
    }
    public function customerAddressEdit(Request $request) 
    {
          $requestData = $request->all();
          $data = DB::table('order_address_info')
                ->where('pk_address_id','=',$requestData['edit_id'])
                ->first();
            echo json_encode($data);
    }
   
    
    public function resetCustomerPassUpdate(Request $request){
        $pass = md5($request->pass);
        $update_customer = Customer::
        where('email','=',$request->customer_email)
                  ->update(['password' => $pass]);
        echo $update_customer;
    }
    
    public function quickView(Request $request) 
    {
      $requestData = $request->all();
      // return $requestData['product'];
      $product_data = DB::table('product')
                      ->where('product_id','=',$requestData['product'])
                      ->first();
      // $requestData = json_decode($requestData);
      // print_r($requestData['product']['product_name']);
      $review_count = DB::table('reviews')
                      ->where('ref_id','=',$product_data->product_id)
                      ->where('review_type','=','p')
                      ->get()
                      ->count();
      $reviewAvg = DB::table('reviews')
                        ->where('ref_id','=',$product_data->product_id)
                        ->where('review_type','=','p')
                        ->avg('rating');
                        $rating_width = $reviewAvg*20;   
      $res = '<div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="fa fa-close"></span></a>
                    <h3 class="modal-title">'.$product_data->product_name.'</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="'.getenv('URL').$product_data->product_img.'" class="img-responsive">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4>Product Id: <span>'.$product_data->product_id.'</span></h4>
                            <h5 class="cost"><span class="glyphicon glyphicon-usd"></span> '.$product_data->current_price.' <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> '.$product_data->mrp.'</small></h5>
                            <div class="rating">
                            <div class="star-rating" title="Rated '.$reviewAvg.' out of 5">
                                <span style="width:'.$rating_width.'%">
                                  <strong itemprop="ratingValue"></strong> out of 5</span>
                              </div>
                                ('.$review_count.' reviews)
                            </div>
                            <p>'.$product_data->description.'</p>
                            <div class="space-ten"></div>
                           <div class="col-md-6" style="margin-bottom:20px;"><input type="number" id="quantity_5b5018ab23158" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" onkeypress="return isNumberKey(event)" inputmode="numeric" aria-labelledby=""></div>
                            <div class="btn-ground col-md-12" >
                              <button type="button" class="btn btn-primary pd" onclick="addToCart('.$product_data->product_id.')"><span class="glyphicon glyphicon-shopping-cart" ></span> Add To Cart</button>  
                              <button type="button" class="btn btn-primary pd" onclick="addToCart('.$product_data->product_id.')"><span class="glyphicon glyphicon-shopping-cart" ></span> Add To Collection</button>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        echo $res;
    }
    public function search_drp_filter(Request $request)
    {
          $session='';
            if(Session::has('user_id')){
                $session = $request->session()->get('user_id');
            }
            $requestData = $request->all();
            $cond = '1';
            $search_result ='';
            //for shop detail page textbox search
          if(isset($requestData['store_id']) && !empty($requestData['store_id']) && isset($requestData['search_text']) && !empty($requestData['search_text']) && isset($requestData['drp_search']) && !empty($requestData['drp_search']))
          {
            if($requestData['drp_search'] =='new') 
            {
              $cond .= ' AND p.user_id = "'.$requestData['store_id'].'" AND p.product_name LIKE "%'.$requestData['search_text'].'%"  AND p.created_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)';
            }
            if($requestData['drp_search'] =='price-asc'){
               $cond .= ' AND p.user_id  = "'.$requestData['store_id'].'"  AND p.product_name LIKE "%'.$requestData['search_text'].'%"  ORDER BY current_price ASC ';
            }
            if($requestData['drp_search'] =='price-desc'){
               $cond .= ' AND p.user_id  = "'.$requestData['store_id'].'"  AND p.product_name LIKE "%'.$requestData['search_text'].'%"  ORDER BY current_price DESC ';
            }
              $store_product_list = DB::select(DB::raw('select p.product_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where '.$cond)); 
            //for dropdown search of shop detail 
          }elseif(isset($requestData['store_id']) && !empty($requestData['store_id']) && isset($requestData['drp_search']) && !empty($requestData['drp_search']) ) 
          {
            if($requestData['drp_search'] =='new'){
              $cond .= ' AND p.user_id = "'.$requestData['store_id'].'" AND p.created_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)';
            }
            if($requestData['drp_search'] =='price-asc'){
               $cond .= ' AND p.user_id  = "'.$requestData['store_id'].'" ORDER BY current_price ASC ';
            }
            if($requestData['drp_search'] =='price-desc'){
               $cond .= ' AND p.user_id  = "'.$requestData['store_id'].'" ORDER BY current_price DESC ';
            }
              $store_product_list = DB::select(DB::raw('select p.product_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where '.$cond)); 
          }else{
            if(isset($requestData['store_id']) && !empty($requestData['store_id']) && isset($requestData['search_text']) && !empty($requestData['search_text']) )
            {
                $store_product_list = DB::select(DB::raw('select p.product_id, p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where p.product_name LIKE "%'.$requestData['search_text'].'%"  AND p.user_id = "'.$requestData['store_id'].'"')); 
            }
          }
            if(isset($store_product_list) && !empty($store_product_list))
            {
              foreach($store_product_list as $store_product_list1)
              {
             $search_result .='<li class="product">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <span class="loop-product-categories"><a href="/product-details/$store_product_list1->slug" rel="tag">'.$store_product_list1->name.'</a>
                                        <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_'.$store_product_list1->product_id.'" onclick="compare('.$store_product_list1->product_id.')">Compare
                                        </a>
                                        <span id="added_compare_deal_'.$store_product_list1->product_id.'" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                                        </span>
                                        <a href="product-details/'.$store_product_list1->slug.'">
                                                <h3>'.$store_product_list1->product_name.'</h3>
                                                <div class="product-thumbnail">
                                                    <img src="'.getenv('URL').$store_product_list1->product_img.'" data-echo="'.getenv('URL').$store_product_list1->product_img.'" class="img-responsive" alt="">
                                                </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount amount_total"> $'.$store_product_list1->current_price.'</span></ins>
                                                    <del><span class="amount amount_total">$'.$store_product_list1->mrp.'</span></del>
                                                    <span class="amount amount_total"> </span>
                                                </span>
                                            </span>
                                            <span class="wrappertz"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                                <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$store_product_list1->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                        </div>
                                    <div class="hover-area">
                                        <div class="action-buttons">';
                                         if(Session::has('user_id')) {
                              $search_result .=  '<a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                     <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$store_product_list1->product_id.','.$session.')"><i class="add_to_wishlist1" id="deals_'.$store_product_list1->product_id.'"></i> Add To Wishlist</a>';
                                           } else {
                                          $search_result .= ' <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>';
                                            }
                                           $search_result .= ' <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView('.$store_product_list1->product_id.')" style="color:white !important;"> Quick View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
            }
              echo $search_result;
            }else{
              echo "<h4>No Product Available.</h4>";
            }
    }
    public function search_for_search_page(Request $request)
    {
      $session='';
      if(Session::has('user_id')){
        $session = $request->session()->get('user_id');
      }
      $requestData = $request->all();
      $cond = ' 1 ';
      $search_result ='';
      //echo  $requestData['search_value'].' '. $requestData['product_cat'].' '. $requestData['drp_search'];
      //for shop detail page textbox search
      if(isset($requestData['search_value']) && !empty($requestData['search_value']) && isset($requestData['product_cat']) && !empty($requestData['product_cat']) && isset($requestData['drp_search']) && !empty($requestData['drp_search'])){
        if($requestData['drp_search'] =='new'){
          $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'" AND p.product_name LIKE "%'.$requestData['search_value'].'%"  AND p.created_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)';
        }
        if($requestData['drp_search'] =='price-asc'){
          $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'"  AND p.product_name LIKE "%'.$requestData['search_value'].'%"  ORDER BY p.current_price ASC ';
        }
            if($requestData['drp_search'] =='price-desc'){
               $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'"  AND p.product_name LIKE "%'.$requestData['search_value'].'%"  ORDER BY p.current_price DESC ';
            }
               $store_product_list =  DB::select(DB::raw('select p.product_id,p.brand_id, p.product_name, p.brand_id, p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where '.$cond)); 
        }elseif(isset($requestData['search_value']) && !empty($requestData['search_value']) && isset($requestData['drp_search']) && !empty($requestData['drp_search']) ) 
        {
            if($requestData['drp_search'] =='new'){
              $cond .= ' AND p.product_name LIKE "%'.$requestData['search_value'].'%"  AND p.created_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)';
            }
            if($requestData['drp_search'] =='price-asc'){
               $cond .= 'AND p.product_name LIKE "%'.$requestData['search_value'].'%"  ORDER BY current_price ASC ';
            }
            if($requestData['drp_search'] =='price-desc'){
               $cond .= ' AND p.product_name LIKE "%'.$requestData['search_value'].'%"  ORDER BY current_price DESC ';
            }
              $store_product_list =DB::select(DB::raw('select p.product_id,p.brand_id,p.product_name , p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where '.$cond)); 
        }else{
            if(isset($requestData['product_cat']) && !empty($requestData['product_cat']) && isset($requestData['drp_search']) && !empty($requestData['drp_search']) )
            {
                if($requestData['drp_search'] =='new'){
                  $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'"  AND p.created_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)';
                }
                if($requestData['drp_search'] =='price-asc'){
                   $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'"  ORDER BY current_price ASC ';
                }
                if($requestData['drp_search'] =='price-desc'){
                   $cond .= ' AND psc.fk_sub_category_id = "'.$requestData['product_cat'].'"  ORDER BY current_price DESC ';
                }
                $store_product_list = DB::select(DB::raw('select p.product_id,p.product_name,p.brand_id, p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id where '.$cond)); 
            }
        }
        if(isset($store_product_list) && !empty($store_product_list))
        {
              foreach($store_product_list as $store_product_list1)
                {
                    $search_result .='<li class="product">
                                      <a href="javascript:void" style="display: none;">'.$store_product_list1->current_price.'</a>
                <p style="display: none;">'.$store_product_list1->brand_id.'</p>
                            <div class="product-outer">
                                <div class="product-inner">
                                    <span class="loop-product-categories"><a href="/product-details/$store_product_list1->slug" rel="tag">'.$store_product_list1->name.'</a>
                                        <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_'.$store_product_list1->product_id.'" onclick="compare('.$store_product_list1->product_id.')">Compare
                                        </a>
                                        <span id="added_compare_deal_'.$store_product_list1->product_id.'" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                                        </span>
                                        <a href="product-details/'.$store_product_list1->slug.'">
                                                <h3>'.$store_product_list1->product_name.'</h3>
                                                <div class="product-thumbnail">
                                                    <img src="'.getenv('URL').$store_product_list1->product_img.'" data-echo="'.getenv('URL').$store_product_list1->product_img.'" class="img-responsive" alt="">
                                                </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount amount_total"> $'.$store_product_list1->current_price.'</span></ins>
                                                    <del><span class="amount amount_total">$'.$store_product_list1->mrp.'</span></del>
                                                    <span class="amount amount_total"> </span>
                                                </span>
                                            </span>
                                            <span class="wrappertz"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                                <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$store_product_list1->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                        </div>
                                    <div class="hover-area">
                                        <div class="action-buttons">';
                                         if(Session::has('user_id')) {
                              $search_result .=  '<a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                     <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$store_product_list1->product_id.','.$session.')"><i class="add_to_wishlist1" id="deals_'.$store_product_list1->product_id.'"></i> Add To Wishlist</a>';
                                           } else {
                                          $search_result .= ' <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>';
                                            }
                                           $search_result .= ' <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView('.$store_product_list1->product_id.')" style="color:white !important;"> Quick View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                }
              echo $search_result;
        }else{
            echo "<h4>No Product Available.</h4>";
        }
    }
    public function colorFilter(Request $request)
    {
      $session='';
      if(Session::has('user_id')){
        $session = $request->session()->get('user_id');
      }
      $requestData = $request->all();
      //$requestData['color']
      $cond = ' 1 ';
      $search_result ='';
      $store_product_list = DB::select(DB::raw('select p.product_id,p.product_name,p.brand_id, p.mrp , p.slug , p.current_price , p.product_img , msc.name  from product as p left join products_sub_category as psc on p.product_id = psc.fk_product_id left join  ms_sub_category as msc on  psc.fk_sub_category_id = msc.id')); 
        if(isset($store_product_list) && !empty($store_product_list))
        {
              foreach($store_product_list as $store_product_list1)
                {
                    $search_result .='<li class="product">
                                      <a href="javascript:void" style="display: none;">'.$store_product_list1->current_price.'</a>
                <p style="display: none;">'.$store_product_list1->brand_id.'</p>
                            <div class="product-outer">
                                <div class="product-inner">
                                    <span class="loop-product-categories"><a href="/product-details/$store_product_list1->slug" rel="tag">'.$store_product_list1->name.'</a>
                                        <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_'.$store_product_list1->product_id.'" onclick="compare('.$store_product_list1->product_id.')">Compare
                                        </a>
                                        <span id="added_compare_deal_'.$store_product_list1->product_id.'" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                                        </span>
                                        <a href="product-details/'.$store_product_list1->slug.'">
                                                <h3>'.$store_product_list1->product_name.'</h3>
                                                <div class="product-thumbnail">
                                                    <img src="'.getenv('URL').$store_product_list1->product_img.'" data-echo="'.getenv('URL').$store_product_list1->product_img.'" class="img-responsive" alt="">
                                                </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount amount_total"> $'.$store_product_list1->current_price.'</span></ins>
                                                    <del><span class="amount amount_total">$'.$store_product_list1->mrp.'</span></del>
                                                    <span class="amount amount_total"> </span>
                                                </span>
                                            </span>
                                            <span class="wrappertz"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                                <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCart('.$store_product_list1->product_id.')"><img src="'.asset('uploads/cart.png').'"></a><div class="tooltip">Add To Cart</div></span>
                                        </div>
                                    <div class="hover-area">
                                        <div class="action-buttons">';
                                         if(Session::has('user_id')) {
                              $search_result .=  '<a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                     <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist('.$store_product_list1->product_id.','.$session.')"><i class="add_to_wishlist1" id="deals_'.$store_product_list1->product_id.'"></i> Add To Wishlist</a>';
                                           } else {
                                          $search_result .= ' <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>';
                                            }
                                           $search_result .= ' <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView('.$store_product_list1->product_id.')" style="color:white !important;"> Quick View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                }
              echo $search_result;
        }else{
            echo "<h4>No Product Available.</h4>";
        }
    }
    public function followCollection(Request $request){
      $data = ['customer_id' => $request->customer_id, 'collection_id' => $request->collection_id, 'status' => $request->status];
      $is_already_followed = DB::table('collection_followers')->where('customer_id', $request->customer_id)->where('collection_id', $request->collection_id)->count();
      $msg = 'You have already followed this collection';
      if($is_already_followed==0){
        DB::table('collection_followers')->insert($data);
        $msg = 'You have followed this collection successfully';
      }
      return $msg;
    }
    public function isStoreAvailable(Request $request){
        if(isset($_SERVER['HTTP_X_STORE_NAME']) && !empty($_SERVER['HTTP_X_STORE_NAME'])){
          $response = DB::table('users')->where('store_name', $_SERVER['HTTP_X_STORE_NAME'])->count();
          return $response;
        }
    }
    public function getColorById(Request $request, $id){
      if(isset($id) && !empty($id)){
        $data = DB::table('product_color')->where('id', $id)->first();
        return json_encode($data);
      }
    }
    public function addLike(Request $request){
      $data = ['product_id' => $request->product_id, 'customer_id' => $request->user_id];
      $is_already_followed = DB::table('product_like')->where('customer_id', $request->user_id)->where('product_id', $request->product_id)->count();
      if($is_already_followed==0){
        DB::table('product_like')->insert($data);
      }
      //for getting total like on particular products 
      $total_liked = DB::table('product_like')->where('product_id', $request->product_id)->count();
      return $total_liked;
    }
    public function deleteCollectionCategory(Request $request){
       $requestData = $request->all();
       $collection_id = $requestData['collection_id'];
       DB::table('collection_category')->where('id', '=', $collection_id)->delete();
       $customer_id = Session::get('user_id');
       $collection_category = DB::table('collection_category')->where('customer_id', $customer_id)->get();
          $data = '';
          foreach($collection_category as $row){
            $data .= '<tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->collection_category_name.'</td>
                    <td><a href="javascript:void(0)" onclick="removeCollectionCat(this.id)" id="'.$row->id.'"><i class="fa fa-trash"></i></a></td>
            /tr>';
          }
          echo $data;
    }
    public function getCollectionCategory(Request $request){
      $requestData = $request->all();
      $category_name = $requestData['category_name'];
      $customer_id = Session::get('user_id');
      $collection = DB::table('customer_collections')->join('product', 'customer_collections.product_id', '=', 'product.product_id')->where('customer_collections.category', $category_name)->where('customer_collections.customer_id', $customer_id)->get();
      $msg = '';
      if(isset($collection) && !empty($collection)){
        foreach($collection as $row){
          $msg .= '<div class="col-sm-3 collection-category" onclick="getProduct('.$row->product_id.', '.$row->id.')" style="background: url('.getenv('URL').$row->product_img.'); background-size: 100%; background-repeat: no-repeat;"><b id="collection_product_name_'.$row->id.'" style="background: yellow; color: black; padding: 10px;">'.$row->product_name.'</b>
            </div>';
        }
      }
      echo $msg;
    }
    public function getAssetUrl(){
      return getenv('URL');
    }
    public function getCollectionProductDetails(Request $request){
      $requestData = $request->all();
      $product_id = $requestData['product_id'];
      $collection_id = $requestData['collection_id'];
      $customer_id = Session::get('user_id');
      $collection = DB::table('customer_collections')->where('id', $collection_id)->first();
      $product = DB::table('product')->where('product_id', $product_id)->first();
      $collection_category = DB::table('collection_category')->where('customer_id', $customer_id)->get();
         $form = '';
         $form .= '<form method="post" action="javascript:void(0)" id="product_category_change_form">';
         $form .= '<input type="hidden" name="customer_id" value="'.$customer_id.'">';
         $form .= '<input type="hidden" name="product_id" value="'.$product_id.'">';
         $form .= '<div class="row">';
         $form .= '<div class="col-sm-12">';
         $form .= '<div class="col-sm-6">';
         $form .= '<img src="'.getenv('URL').$product->product_img.'">';
         $form .= '</div>';
         $form .= '<div class="col-sm-6" style="border-left: 1px solid black">';
         $form .= '<table class="table table-bordered">';
         $form .= '<tr>';
         $form .= '<th>';
         $form .= '<b>Product Name</b>';
         $form .= '</th>';
         $form .= '<td>';
         $form .= '<b>'.$product->product_name.'</b>';
         $form .= '</td>';
         $form .= '</tr>';
         $form .= '<tr>';
         $form .= '<th>';
         $form .= '<b>Product SKU</b>';
         $form .= '</th>';
         $form .= '<td>';
         $form .= '<b>'.$product->sku.'</b>';
         $form .= '</td>';
         $form .= '</tr>';
         $form .= '<tr>';
         $form .= '<th>';
         $form .= '<b>Product Category</b>';
         $form .= '</th>';
         $form .= '<td>';
         $form .= '<b><select class="form-control" name="collection_category_name">';
         $form .= '<option>'.$collection->category.'</option>';
         foreach($collection_category as $row){
          $form .= '<option>'.$row->collection_category_name.'</option>';
         }
         $form .= '</select></b>';
         $form .= '</td>';
         $form .= '</tr>';
         $form .= '<tr>';
         $form .= '<th>';
         $form .= '<b>&nbsp;</b>';
         $form .= '</th>';
         $form .= '<td>';
         $form .= '<button type="submit" class="btn btn-primary" onclick="updateCollectionCategory()">Save</button>';
         $form .= '</td>';
         $form .= '</tr>';
         $form .= '</table>';
         $form .= '</div>';
         $form .= '</div>';
         $form .= '</div>';
         $form .= '</form>';
         echo $form;
    }
    public function updateCollectionCategory(Request $request){
      $requestData = $request->all();
      DB::table('customer_collections')->where('customer_id', $requestData['customer_id'])->where('product_id', $requestData['product_id'])->update(['category'=>$requestData['collection_category_name']]);
      echo "Collection category updated successfully!";
    }
    public function searchGeneral(Request $request){
      $requestData = $request->all();
      $search_value = $requestData['search_value'];
      $product = DB::table('product')->where('product_name', 'LIKE', '%'.$search_value.'%')->get();
      $shop = DB::table('user')->where('f_name', 'LIKE', '%'.$search_value.'%')->orwhere('l_name', 'LIKE', '%'.$search_value.'%')->get();
      return json_encode($product);
    }
    public function notificationSeen(Request $requset){
      if(isset($requset->notification_id) && !empty($requset->notification_id && is_numeric($requset->notification_id))){
        $result = DB::table('notification')
                ->where('id','=',$requset->notification_id)
                ->update(['status' => '1']);
        return json_encode($result);
      } 
    }
    public function load_more(Request $requset){
      $data = '';
      switch ($requset->key) {
          case "category":
              $limit = $requset->limit+6;
              $category = DB::table('ms_category')
                          ->orderby('id', 'desc')
                          ->limit($limit)
                          ->get();
              $data = '';
              if(isset($category) && !empty($category)){
                $data = '<a href="" data-toggle="collapse" data-target="#menu4" class="leftamenu"><b>Categaries </b> </a>
                  <li class="collapse show" id="menu4">
                      <input type="text" name="search" placeholder="Search Categaries.." class="bgimg" onkeyup="categoryFilter(this.value)">
                  </li>';
                foreach($category as $row){
                  $data .= '<li class="side-menu-filter category-menu-filter collapse show" id="menu4"><input type="checkbox" class="checkbox" name="category[]" value="'.$row->id.'"> 
                      <span class="inputpa"><a href="/beta-category/'.$row->id.'" class="cat_val">'.$row->category_name.'</a></span></li>';
                }
                $data .= '<li class="collapse show" id="menu4">
                            <a class="btn btn-warning fullbtn" onclick="load_more(\'category\', '.$limit.')">SHOW MORE </a>
                           </li>';
              }
              break;
          case "brand":
              $limit = $requset->limit+6;
              $brand = DB::select(DB::raw('select ms_brands.id, ms_brands.name, ms_brands.brand_img, ms_brands.status, ms_brands.deleted_status, (select COUNT(*) from product where product.brand_id = ms_brands.id) as product from ms_brands limit '.$limit));
              $data = '';
              if(isset($brand) && !empty($brand)){
                $data = '<a href="" data-toggle="collapse" data-target="#menu5" class="leftamenu"><b>Brand </b> </a>
                  <li class="collapse show" id="menu5">
                      <input type="text" name="search" placeholder="Search Brand.." class="bgimg" onkeyup="brandFilter(this.value)">
                  </li>';
                foreach($brand as $row){
                  $data .= '<li class="side-menu-filter brand-menu-filter collapse show" id="menu5"><input type="checkbox" class="checkbox" name="brand[]" value="'.$row->id.'"> 
                      <span class="inputpa" class="side-menu-filter"><a href="/beta-brands/'.$row->id.'" class="bran_val">'.$row->name.'</a> </span><span class="count side-menu-filter" >('.$row->product.')</span></li>';
                }
                $data .= '<li class="collapse show" id="menu5">
                            <a class="btn btn-warning fullbtn" onclick="load_more(\'brand\', '.$limit.')">SHOW MORE </a>
                           </li>';
              }
              break;
          case "retailer":
              $limit = $requset->limit+6;
              $retailer = DB::select(DB::raw('select id, store_name from users where deleted_status = "Not deleted" and  user_status = "Active" and store_name != "" limit '.$limit));
                $data = '';
                if(isset($retailer) && !empty($retailer)){
                  $data = '<a href="" data-toggle="collapse" data-target="#menu7" class="leftamenu"><b>retailer </b> </a>
                    <li class="collapse show" id="menu7">
                        <input type="text" name="search" placeholder="Search retailer.." class="bgimg" onkeyup="retailerFilter(this.value)">
                    </li>';
                  foreach($retailer as $row){
                    $data .= '<li class="side-menu-filter retailer-menu-filter collapse show" id="menu7"><input type="checkbox" class="checkbox" name="retailer[]" value="'.$row->id.'"> 
                        <span class="inputpa" class="side-menu-filter"><a href="/beta-retailers/'.$row->id.'" class="ret_val">'.$row->store_name.'</a> </span></li>';
                  }
                  $data .= '<li class="collapse show" id="menu7">
                              <a class="btn btn-warning fullbtn" onclick="load_more(\'retailer\', '.$limit.')">SHOW MORE </a>
                             </li>';
              }
              break;
          case "color":
              $limit = $requset->limit+6;
              $color = DB::table('product_color')
                   ->where('status','=','Active')
                   ->groupBy('color_name')
                   ->limit($limit)
                   ->get();
                $data = '';
                if(isset($color) && !empty($color)){
                  $data = '<a href="" data-toggle="collapse" data-target="#menu6" class="leftamenu"><b>color </b> </a>
                    <li class="collapse show" id="menu6">
                        <input type="text" name="search" placeholder="Search color.." class="bgimg" onkeyup="colorFilter(this.value)">
                    </li>';
                  foreach($color as $row){
                    $data .= '<li class="side-menu-filter color-menu-filter collapse show" id="menu6"><input type="checkbox" class="checkbox" name="color[]" value="'.strtolower($row->color_name).'"> 
                        <span class="inputpa" class="side-menu-filter"><a href="/beta-colors/'.$row->id.'" class="col_val">'.ucfirst($row->color_name).'</a> </span></li>';
                  }
                  $data .= '<li class="collapse show" id="menu6">
                              <a class="btn btn-warning fullbtn" onclick="load_more(\'color\', '.$limit.')">SHOW MORE </a>
                             </li>';
              }
              break;
          default:
              $data = 'default';
      }
      return json_encode($data);
    }

public function load_more_details(Request $requset){
      $data = '';
      switch ($requset->key) {
          case "category":
              $limit = $requset->limit;
              $page = $requset->page+1;
              $category =  DB::table('ms_category')->orderBy('category_name','ASC')->paginate(8);
              $data = '';
			 // dd($category->items);
              if(isset($category) && !empty($category) && count($category)){
                /*$data = '
                  <li class="collapse show" id="menu4">
                      <input type="text" name="search" placeholder="Search Categaries.." class="bgimg" onkeyup="categoryFilter(this.value)">
                  </li>';*/
                foreach($category as $row){
                  $data .= '<li class="side-menu-filter category-menu-filter collapse show" id="menu4">
                            <input type="checkbox" id="category-'.$row->id.'" class="checkbox common_selector f_category" name="category[]" value="'.$row->id.'" > 
                            <label class="cat_val" for="category-'.$row->id.'">'.ucfirst($row->category_name).'</label>
                            </li>';
                }
                $data .= '<li class="r_category collapse show" id="menu4">
                            <a class="btn btn-warning fullbtn" onclick="load_more_details(\'category\', '.$limit.','.$page.')">SHOW MORE </a>
                           </li>';
              }else{
				  echo ''; exit();
			  }
              break;
          case "brand":
              $limit 	= $requset->limit;
              $page 	= $requset->page+1;
              $brand 	=  DB::table('ms_brands')->orderBy('name','ASC')->paginate(8);
              /* $brand = DB::select(DB::raw('select ms_brands.id, ms_brands.name, ms_brands.brand_img, ms_brands.status, ms_brands.deleted_status, (select COUNT(*) from product where product.brand_id = ms_brands.id) as product from ms_brands limit '.$limit)); */
              $data = '';
              if(isset($brand) && !empty($brand) && count($brand)){
               /*  $data = '
                  <li class="collapse show" id="menu5">
                      <input type="text" name="search" placeholder="Search Brand.." class="bgimg" onkeyup="brandFilter(this.value)">
                  </li>'; */
                foreach($brand as $row){
                  $data .= '<li class="side-menu-filter brand-menu-filter collapse show" id="menu5"><input type="checkbox" id="brand-'.$row->id.'" class="checkbox common_selector f_brand" name="brand[]" value="'.$row->id.'"> 
                      <label class="bran_val" for="brand-'.$row->id.'">
                      '.ucfirst($row->name).'
                      </label>
                      </li>';
                }
                $data .= '<li class="collapse show r_brand" id="menu5">
                            <a class="btn btn-warning fullbtn" onclick="load_more_details(\'brand\', '.$limit.','.$page.')">SHOW MORE </a>
                           </li>';
              }
              break;
          case "retailer":
              $limit 	= $requset->limit;
              $page 	= $requset->page+1;
              $retailer = DB::table('users')
						->where('deleted_status', 'Not deleted')
						->where('user_status','Active')
						->where('store_name','<>','')
						->orderby('id','DESC')
						->paginate(8);
                $data = '';
                if(isset($retailer) && !empty($retailer) && count($retailer)){
                 /*  $data = '
                    <li class="collapse show" id="menu7">
                        <input type="text" name="search" placeholder="Search retailer.." class="bgimg" onkeyup="retailerFilter(this.value)">
                    </li>'; */
                  foreach($retailer as $row){
                    $data .= '<li class="side-menu-filter retailer-menu-filter collapse show" id="menu7">
                                <input type="checkbox" id="retailer-'.$row->id.'" class="checkbox" name="retailer[]" value="'.$row->id.'"> 
                                <label class="ret_val" for="retailer-'.$row->id.'">'.ucfirst($row->store_name).'</label>
                              </li>';
                  }
                  $data .= '<li class="collapse show r_retailer" id="menu7">
                              <a class="btn btn-warning fullbtn" onclick="load_more_details(\'retailer\', '.$limit.','.$page.')">SHOW MORE </a>
                             </li>';
              }
              break;
          case "color":
              $limit 	= $requset->limit;
              $page 	= $requset->page+1;
              $color 	=  DB::table('product_color')->where('status','active')->orderBy('color_name','ASC')->groupBy('color_name')->paginate(8);
             /*  $color = DB::table('product_color')
                   ->where('status','=','Active')
                   ->limit($limit)
                   ->get(); */
                $data = '';
                if(isset($color) && !empty($color) && count($color)){
                  /* $data = '
                    <li class="collapse show" id="menu6">
                        <input type="text" name="search" placeholder="Search color.." class="bgimg" onkeyup="colorFilter(this.value)">
                    </li>'; */
                  foreach($color as $row){
                    $data .= '<li class="side-menu-filter color-menu-filter collapse show" id="menu6">
                                <input type="checkbox" id="color-'.$row->id.'" class="checkbox" name="website_color[]" value="'.strtolower($row->color_name).'"> 
                                <label class="col_val" for="color-'.$row->id.'">'.ucfirst($row->color_name).'</label>
                              </li>';
                  }
                  $data .= '<li class="collapse show r_color" id="menu6">
                              <a class="btn btn-warning fullbtn" onclick="load_more_details(\'color\', '.$limit.','.$page.')">SHOW MORE </a>
                             </li>';
              }
              break;
          default:
              $data = 'default';
      }
      return json_encode($data);
    }

    public function getCollectionProduct(Request $requset){
      $collection_id = $requset->collection_id;
      $collection = DB::table('vendor_collections')
                    ->where('id', $collection_id)->first();
      $product_ids = explode(',', explode(']', explode('[', $collection->products_data)[1])[0]);
      $collection_product = '';
      foreach($product_ids as $key => $value){
        $product = DB::table('product')
                    ->where('product_id', $value)->first();
        $collection_product .= '<div class="col-lg-3 col-sm-6 largepad">
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
                                                <h5>Camra</h5>
                                              </div>
                                              <div class="price-detail">
                                                <h3><a href="javascript:void(0)">'.substr($product->product_name,0, 30).'</a></h3>
                                              </div>
                                            </div>
                                            <div class="photo hovereffect"> <a href="javascript:void(0)"><img src="'.getenv('URL').$product->product_img.'" class="img-responsive" alt="a"></a> 
                                             <!-- <div class="overlay">
                                                <a class="info1" href="#">Quick View</a>
                                              </div>-->
                                            </div>
                                            <div class="info">
                                            <div class="price-wrapper">
                                              <div class="price">
                                                <h5 class="price-text-color"> $'.money_format('%i',$product->current_price).'</h5>
                                                <del><span class="amount">$'.money_format('%i',$product->mrp).'</span></del>
                                                </div>
                                                <div class="rating hidden-sm">
                                                  <span class="wrapper1">
                                                    <a href="javascript:void(0)">
                                                     <span class="add-cart-large add-to-cart" id="add-to-cart-'.$product->product_id.'" onclick="addToCartCollection('.$product->product_id.')"><img src="images/cart.png" alt=""></span>
                                                    </a>
                                                  <span class="tooltip">Add To Cart</span>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="separator clear-left">
                                              <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                              <p class="btn-details"> <span class="wrapper"><img src="images/add-clooection.png" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span> </p>
                                            </div>
                                            </div>
                                          </div>
                                </div>';
      }

      echo $collection_product;
    }
	public function beta_product_filter(Request $request){
		if(Session::has('user_id')){
			$user_id = Session::has('user_id');
			$customer_id = Session::get('user_id');
			$cond = '1';
			$join = '';
			if($request->get('s'))
			{
				$cond .= ' AND p.product_name LIKE "%'.$request->get('s').'%"';
			}
			if($request->get('category')&&count($request->get('category'))>0)
			{
				$cat_q = implode("','", $request->get('category'));
				$cond .= " AND (psc.fk_sub_category_id IN('".$cat_q."'))";
			}
			if($request->get('brand')&&count($request->get('brand'))>0)
			{
				$brand_q = implode("','", $request->get('brand'));
				$cond .= " AND (p.brand_id IN('".$brand_q."'))";
			}
			if($request->get('color')&&count($request->get('color'))>0)
			{
				$join	= 'JOIN product_color pc ON p.product_id = pc.fk_product_id';
				$color_q = implode("','", $request->get('color'));
				$cond 	.= " AND (pc.id IN('".$color_q."'))";
			}
			if($request->get('retailer')&&count($request->get('retailer'))>0)
			{
				//$join	= 'JOIN vendor_collections vc';
				$retailer_q = implode("','", $request->get('retailer'));
				$cond 	.= " AND (p.user_id IN('".$retailer_q."'))";
			}
			if($request->get('min_price')&&$request->get('max_price'))
			{
				$cond 	.= " AND (p.current_price BETWEEN '".$request->get('min_price')."' AND '".$request->get('max_price')."')";
			}
			$order_by = '';
			$per_page = '';
			if($request->get('sort_by'))
			{
				if($request->get('sort_by')=='price-asc')
				$order_by 	.= " ORDER BY p.current_price ASC";
				elseif($request->get('sort_by')=='price-desc')
				$order_by 	.= " ORDER BY p.current_price DESC";
				elseif($request->get('sort_by')=='new')
				$order_by 	.= " ORDER BY p.product_id DESC";
			}
			$per_page = 9;
			if($request->get('per_page'))
			{
				$per_page = $request->get('per_page');
			}
			if($per_page < 0)
			$per_page = 9;
			if($request->get('page')){
				$page 	= $request->get('page');
			}else{
				$page 	= 1;
			}
			$limit 		= "LIMIT ".$per_page." OFFSET ".$page;
			if(Session::has('user_id')){
			  $session = $request->session()->get('user_id');
			  $this->static_data['cart'] = Cart::session($session)->getContent();
			  $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
			  $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
			  $this->static_data['wishlistCount'] = DB::table('customer_wishlist')
						->where('fk_customer_id','=',$session)
						->get()
						->count();
			} else {
			  $this->static_data['cart'] = Cart::getContent();
			  $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
			  $this->static_data['getSubTotal'] = Cart::getSubTotal();
			  $this->static_data['wishlistCount'] = 0;
			}
			$category_id = 1;
			if($request->get('page_name')=='collection'){
				$query = 'SELECT * FROM customer_collections cc join product p on p.product_id = cc.product_id join products_sub_category psc on psc.fk_product_id = p.product_id JOIN ms_sub_category ON ms_sub_category.id = psc.fk_sub_category_id '.$join.' WHERE cc.customer_id = "'.$customer_id.'" AND ' .$cond.' '.$order_by;
			}
			if($request->get('page_name')=='like'){
				$query 		= 'select product_like.product_id, p.* from product_like inner join product p on product_like.product_id = p.product_id join products_sub_category psc on psc.fk_product_id = p.product_id JOIN ms_sub_category ON ms_sub_category.id = psc.fk_sub_category_id '.$join.' where product_like.customer_id = '.$customer_id.' AND ' .$cond.' '.$order_by;
				//dd($query);
			}
			if($request->get('page_name')=='home'){
				$query = 'SELECT psc.fk_sub_category_id, msc.category_id, p.product_id, p.product_name, p.mrp, p.slug, p.current_price, p.product_img, p.brand_id,msc.name FROM product as p left JOIN products_sub_category as psc ON p.product_id = psc.fk_product_id left JOIN ms_sub_category as msc ON  psc.fk_sub_category_id = msc.id '.$join.' WHERE '.$cond;
			}
			$product 	= DB::select(DB::raw($query));
			$product	= $this->arrayPaginator($product,$request);
			
			$pagination = $product;
			if(isset($product) && !empty($product)){
			  $i = 0;
			  foreach($product as $row){
				//dd($row);  
				$product[$i]->product_color = DB::select('CALL getProductColorByProductId('.$row->product_id.')');
				$product[$i]->product_size = DB::select('CALL getProductSizeByProductId('.$row->product_id.')');
				$product[$i]->product_attr = DB::select('CALL getProductAttributeByProductId('.$row->product_id.')');
				$product[$i]->product_like = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
				if($row->user_id){
					$product[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
				}
				$product[$i]->product_review = DB::select('CALL getProductReviewsByProductId('.$row->product_id.')');
				$product[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$row->product_id.')');
				if($row->user_id){
					$product[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
				}
				$product[$i]->product_review_count = DB::select('CALL getReviewCountByProductId('.$row->product_id.')');
				$product[$i]->people_who_like = $this->people_who_like($row->product_id);
				$product[$i]->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$row->product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
				if($user_login = true){
				  $product[$i]->is_liked = DB::table('product_like')->where('product_id', $row->product_id)->where('customer_id', Session::get('user_id'))->count();
				}
				$i++;
			  }
			}
			$data['recent_added_products'] = $product;
			$data['product'] = $product;
		}else{
			$data['recent_added_products'] = ['Please login'];
			$data['product'] = ['Please login'];
		}
		$data['page_ajax'] = 'ajax';
		if($data['product'])
        return view('frontend/include/filtered_product',['static_data' => $this->static_data, 'data' => $data,'pagination'=>$pagination]); 
		else
		echo ''; exit();
	}
	public function people_who_like($product_id){
      $people_who_like = array();
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
            array_push($people_who_like, $row);
          }
        }else{
        $people_who_like = DB::table('product_like')
                        ->join('customers','customers.id','=','product_like.customer_id')
                        ->where('product_like.product_id', $product_id)
                        ->get();
        }
        return $people_who_like;
    }
	public function product_detail(Request $request,$product_id){
		$product_id = 1;
		//dd($product_id);
		if(Session::has('user_id')){
			$session = $request->session()->get('user_id');
			$this->static_data['cart'] = Cart::session($session)->getContent();
			$this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
			$this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
			$this->static_data['wishlistCount'] = DB::table('customer_wishlist')
					  ->where('fk_customer_id','=',$session)
					  ->get()
					  ->count();
		}else{
			$this->static_data['cart'] = Cart::getContent();
			$this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
			$this->static_data['getSubTotal'] = Cart::getSubTotal();
			$this->static_data['wishlistCount'] = 0;
		}
		$user_login = null;
		if(Session::has('user_id')){
			$user_login = true;
		}else{
			$user_login = false;
		}
		$product = DB::table('product')
			//->leftJoin('products_types', 'products_types.fk_product_id', '=', 'product.product_id')
         ->leftJoin('products_sub_category','product.product_id', '=', 'products_sub_category.fk_product_id')
        ->leftJoin('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->leftJoin('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        ->leftJoin('ms_brands','product.brand_id','=','ms_brands.id')
        
        ->where('product.product_id','=',$product_id)
        ->select(
          'product.shareable_product',
          'product.product_id',
          'product.product_name',
          'product.slug',
          'product.sku',
          'product.mrp',
          'product.current_price',
          'product.user_id',
          'product.stock_quantity',
          'product.description',
          'product.product_details',
          'product.product_img',
          'product.specification',
          'product.attributes',
          'product.vendor_commission_type',
          'product.vendor_commission',
          'ms_sub_category.id as category_id',
          'ms_category.id as sub_category_id',
          'ms_category.category_name',
          DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
            )
          )
			->first();
		  ///print_r($product); dd();
      $product->attributes  =  json_decode($product->attributes);
		 $product->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$product_id.')');
		 $product->product_color = DB::select('CALL getProductColorByProductId('.$product_id.')');
          $product->product_size = DB::select('CALL getProductSizeByProductId('.$product_id.')');
          $product->product_attr = DB::select('CALL getProductAttributeByProductId('.$product_id.')');
          $product->product_like = DB::select('CALL getPeopleByProductId('.$product_id.')');
		  if($product->user_id){
			$product->store_details = DB::select('CALL getStoreDetailsByStoreId('.$product->user_id.')');
		  }
          $product->product_review = DB::select('CALL getProductReviewsByProductId('.$product_id.')');
          $product->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$product_id.')');
		  if($product->user_id){
			$product->store_product = DB::select('CALL getProductByStoreId('.$product->user_id.', "3")');
		  }
          $product->product_review_count = DB::select('CALL getReviewCountByProductId('.$product_id.')');
          if($user_login = true){
            $product->is_liked = DB::table('product_like')->where('product_id', $product_id)->where('customer_id', Session::get('user_id'))->count();
            $product->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
          }
		$home_obj = new HomeController;
        $product->people_who_like = $home_obj::people_who_like($product_id);
		$data['product'] = $product;
		$recent_added_products = DB::table('product')
        ->leftJoin('products_sub_category','product.product_id', '=', 'products_sub_category.fk_product_id')
        ->leftJoin('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->leftJoin('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        ->leftJoin('ms_brands','product.brand_id','=','ms_brands.id')
       
        //->where('product.product_id','=',$product_id)
        ->select(
          'product.shareable_product',
          'product.product_id',
          'product.product_name',
          'product.slug',
          'product.sku',
          'product.mrp',
          'product.current_price',
          'product.user_id',
          'product.stock_quantity',
          'product.description',
          'product.product_details',
          'product.product_img',
          'product.specification',
          'product.vendor_commission_type',
          'product.vendor_commission',
          'ms_sub_category.id as category_id',
          'ms_category.id as sub_category_id',
          'ms_category.category_name',
          DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
            )
          )
			->limit(20)
			->get();
      //print_r($recent_added_products); dd();
      //return json_encode($recently_added);
      /*recent_added_products*/
      //$recent_added_products = DB::select("CALL `getRecentAddedProduct`()");
      //return json_encode($recent_added_products); 
      if(isset($recent_added_products) && !empty($recent_added_products)){
        $i = 0;
        foreach($recent_added_products as $row){
          $recent_added_products[$i]->product_color = DB::select('CALL getProductColorByProductId('.$row->product_id.')');
          $recent_added_products[$i]->product_size = DB::select('CALL getProductSizeByProductId('.$row->product_id.')');
          $recent_added_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId('.$row->product_id.')');
          $recent_added_products[$i]->product_like = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
          $recent_added_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
          $recent_added_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId('.$row->product_id.')');
          $recent_added_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$row->product_id.')');
          $recent_added_products[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
          $recent_added_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId('.$row->product_id.')');
          if($user_login = true){
            $recent_added_products[$i]->is_liked = DB::table('product_like')->where('product_id', $row->product_id)->where('customer_id', Session::get('user_id'))->count();
            $recent_added_products[$i]->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$row->product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
          }
            $recent_added_products[$i]->people_who_like = $this->people_who_like($row->product_id);
          $i++;
        }
      }
	  //dd($recent_added_products);
      $data['recent_added_products'] = $recent_added_products;
      /*recent_added_products*/
      /*populer_products*/
      ///$populer_products = DB::select("CALL `getProductByTypeId`('6')");
      $populer_products = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',1)
        ->select(
          'product.shareable_product',
          'product.product_id',
          'product.product_name',
          'product.slug',
          'product.sku',
          'product.mrp',
          'product.current_price',
          'product.user_id',
          'product.stock_quantity',
          'product.description',
          'product.product_details',
          'product.product_img',
          'product.specification',
          'product.vendor_commission_type',
          'product.vendor_commission',
          'ms_sub_category.id as category_id',
          'ms_category.id as sub_category_id',
          'ms_category.category_name',
          DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
            )
          )
        ->limit(20)
        ->get();
      if(isset($populer_products) && !empty($populer_products)){
        $i = 0;
        foreach($populer_products as $row){
          $populer_products[$i]->product_color = DB::select('CALL getProductColorByProductId('.$row->product_id.')');
          $populer_products[$i]->product_size = DB::select('CALL getProductSizeByProductId('.$row->product_id.')');
          $populer_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId('.$row->product_id.')');
          $populer_products[$i]->product_like = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
          $populer_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
          $populer_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId('.$row->product_id.')');
          $populer_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$row->product_id.')');
          $populer_products[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
          $populer_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId('.$row->product_id.')');
          if($user_login = true){
            $populer_products[$i]->is_liked = DB::table('product_like')->where('product_id', $row->product_id)->where('customer_id', Session::get('user_id'))->count();
            $populer_products[$i]->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$row->product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
          }
          $populer_products[$i]->people_who_like = $this->people_who_like($row->product_id);
          $i++;
        }
      }
      $data['populer_products'] = $populer_products;
      /*populer_products*/
      /*best_seller_products*/
      //$best_seller_products = DB::select("CALL `getProductByTypeId`('4')");
      $best_seller_products = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        ->join('ms_brands','product.brand_id','=','ms_brands.id')
        ->where('ms_brands.status','=','Active')
        ->where('ms_brands.deleted_status','=','Not deleted')
        ->where('fk_product_type_id','=',4)
        ->select(
          'product.shareable_product',
          'product.product_id',
          'product.product_name',
          'product.slug',
          'product.sku',
          'product.mrp',
          'product.current_price',
          'product.user_id',
          'product.stock_quantity',
          'product.description',
          'product.product_details',
          'product.product_img',
          'product.specification',
          'product.vendor_commission_type',
          'product.vendor_commission',
          'ms_sub_category.id as category_id',
          'ms_category.id as sub_category_id',
          'ms_category.category_name',
          DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
            )
          )
        ->limit(20)
        ->get();
      if(isset($best_seller_products) && !empty($best_seller_products)){
        $i = 0;
        foreach($best_seller_products as $row){
          $best_seller_products[$i]->product_color = DB::select('CALL getProductColorByProductId('.$row->product_id.')');
          $best_seller_products[$i]->product_size = DB::select('CALL getProductSizeByProductId('.$row->product_id.')');
          $best_seller_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId('.$row->product_id.')');
          $best_seller_products[$i]->product_like = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
          $best_seller_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
          $best_seller_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId('.$row->product_id.')');
          $best_seller_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$row->product_id.')');
          $best_seller_products[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
          $best_seller_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId('.$row->product_id.')');
          if($user_login = true){
            $best_seller_products[$i]->is_liked = DB::table('product_like')->where('product_id', $row->product_id)->where('customer_id', Session::get('user_id'))->count();
            $best_seller_products[$i]->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$row->product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
          }
          $best_seller_products[$i]->people_who_like = $this->people_who_like($row->product_id);
          $i++;
        }
      }
      $data['best_seller_products'] = $best_seller_products;
      /*best_seller_products*/
      /*top_rated_products*/
      //$top_rated_products = DB::select("CALL `getProductByTypeId`('2')");
      $top_rated_products = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
         ->join('products_sub_category','products_types.fk_product_id', '=', 'products_sub_category.fk_product_id')
        ->join('ms_sub_category', 'products_sub_category.fk_sub_category_id', '=', 'ms_sub_category.id')
        ->join('ms_category', 'products_sub_category.fk_category_id', '=', 'ms_category.id')
        ->where('fk_product_type_id','=',2)
        ->select(
          'product.shareable_product',
          'product.product_id',
          'product.product_name',
          'product.slug',
          'product.sku',
          'product.mrp',
          'product.current_price',
          'product.user_id',
          'product.stock_quantity',
          'product.description',
          'product.product_details',
          'product.product_img',
          'product.specification',
          'product.vendor_commission_type',
          'product.vendor_commission',
          'ms_sub_category.id as category_id',
          'ms_category.id as sub_category_id',
          'ms_category.category_name',
          DB::raw('(select count(*) from product_like where product_like.product_id=product.product_id) as product_like'
            )
          )
        ->limit(20)
        ->get();
      if(isset($top_rated_products) && !empty($top_rated_products)){
        $i = 0;
        foreach($top_rated_products as $row){
          $top_rated_products[$i]->product_color = DB::select('CALL getProductColorByProductId('.$row->product_id.')');
          $top_rated_products[$i]->product_size = DB::select('CALL getProductSizeByProductId('.$row->product_id.')');
          $top_rated_products[$i]->product_attr = DB::select('CALL getProductAttributeByProductId('.$row->product_id.')');
          $top_rated_products[$i]->product_like = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
          $top_rated_products[$i]->store_details = DB::select('CALL getStoreDetailsByStoreId('.$row->user_id.')');
          $top_rated_products[$i]->product_review = DB::select('CALL getProductReviewsByProductId('.$row->product_id.')');
          $top_rated_products[$i]->acc_product = DB::select('CALL getProductAccessoriesByProductId('.$row->product_id.')');
          $top_rated_products[$i]->store_product = DB::select('CALL getProductByStoreId('.$row->user_id.', "3")');
          $top_rated_products[$i]->product_review_count = DB::select('CALL getReviewCountByProductId('.$row->product_id.')');
          if($user_login = true){
            $top_rated_products[$i]->is_liked = DB::table('product_like')->where('product_id', $row->product_id)->where('customer_id', Session::get('user_id'))->count();
            $top_rated_products[$i]->userReview = DB::table('reviews')
                    ->join('customers','reviews.fk_customer_id','=','customers.id')
                    ->select('reviews.*','customers.f_name','customers.l_name')
                    ->where('ref_id','=',$row->product_id)
                    ->where('fk_customer_id','=', Session::get('user_id'))
                    ->first();
          }
          $top_rated_products[$i]->people_who_like = $this->people_who_like($row->product_id);
          $i++;
        }
      }
      $data['top_rated_products'] = $top_rated_products;
      /*top_rated_products*/
      $data['recent_view_products'] = DB::table('products_types')
        ->join('product', 'products_types.fk_product_id', '=', 'product.product_id')
        ->where('fk_product_type_id','=',7)
        ->select('product.product_name','product.mrp','product.current_price','product.product_img','product.slug','product.product_id')
        ->orderby('products_types.pk_id', 'desc')
        ->get();
      $data['m_banner'] = DB::table('ms_banner')
        ->where('status','Active')
        ->where('banner_type','m')
        ->where('deleted_status','Not deleted')
        ->get();
      $data['s_banner'] = DB::table('ms_banner')
        ->where('status','Active')
        ->where('banner_type','s')
        ->where('deleted_status','Not deleted')
        ->get();
      $data['d_banner'] = DB::table('ms_banner')
        ->where('status','Active')
        ->where('banner_type','d')
        ->where('deleted_status','Not deleted')
        ->get();
      $data['b_banner'] = DB::table('ms_banner')
        ->where('status','Active')
        ->where('banner_type','b')
        ->where('deleted_status','Not deleted')
        ->get();
      $data['categories'] = DB::table('ms_category')
        ->where('status','Active')
        ->where('deleted_status','Not deleted')
        ->orderby('id', 'desc')
        ->limit(7)
        ->get();
      $data['home_slider'] = DB::table('slider')->join('product', 'product.product_id', '=', 'slider.product_id')->get();
      //dd($data);
      // return json_encode($data);
      return view('frontend/include/product_detail',['static_data' => $this->static_data,'data' => $data,'row' => $data['product']]);
	}
	public function load_state(Request $request){
		$country_id = $request['country_id'];
		$request->request->add(['countryid' => $country_id]);
		
		echo '<option value="">Select State</option>';
		$html 		= $this->getState($request);
		echo $html; exit();
	}
	public function load_city(Request $request){
		$state_id 	= $request['state_id'];
		$request->request->add(['stateid' => $state_id]);
		
		echo '<option value="">Select City</option>';
		$html 		= $this->getCity($request);
		echo $html; exit();
	}
}