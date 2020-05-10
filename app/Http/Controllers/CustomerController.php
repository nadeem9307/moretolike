<?php
namespace App\Http\Controllers;
use DB;
use Cart;
use Auth;
use Cookie;
use Session;
use App\User;
use App\City;
use App\State;
use Validator;
use Instagram;
use App\Orders;
use App\Support;
use App\Reviews;
use App\Country;
use App\Customer;
use App\CartModel;
use App\UserGroup;
use App\ProductLike;
use App\UserFollower;
use App\StoreFollower;
use App\CustomerWishlist;
use App\VendorCollections;
use App\CollectionCategory;
use App\CustomerCollection;
use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class CustomerController extends Controller {

  public function ajaxRequest(){
    return view('ajaxRequest');
  }

  public function test(Request $request){
    return "pankaj";
  }
  public function getProductLikeCountByCustomerAndProductId($product_id,  $customer_id){
      return ProductLike::where('product_id', $product_id)->
      where('customer_id', $customer_id)
      ->count();
  }
  public function userRegistraion(Request $request) {
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
    return view('user-registration',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus,'category'=>$category,'sub_category'=>$sub_category, 'cart'=>$cart,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
  }

  protected function userCreate(Request $data){
    $date = date('Y-m-d h:i:s');
    $username_count = 0;
    $username = DB::table('customers')
    ->where('customer_name','=',$data['customer_name'])
    ->get();
    if(is_array($username)){
      $username_count = count($username);          
    }
    if($username_count >= 1 ){
      return redirect()->back()->with('alert', 'Please enter another username.This username is alraedy use.');
    }
    $email_count = 0;
    $email = DB::table('customers')
    ->where('email','=',$data['email'])
    ->get();
    if(is_array($email)){
      $email_count = count($email);          
    }
    if($email_count >= 1 ){
      return redirect()->back()->with('alert', 'Please enter another email.This email is alraedy use.');
    }
    if($username_count  != 1 && $email_count != 1){
      if($data['profile_image'])
      {
        $profile_extension = $data['profile_image']->getClientOriginalExtension();
        if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg')
        {
          $profile_image = time().'.'.$profile_extension;
          $data['profile_image']->move(public_path('uploads'), $profile_image);
        }else{
          $profile_image ='';
        }
      }else{
        $profile_image ='';
      }
      $fields = [
        'f_name' => $data['f_name'],
        'l_name' => $data['l_name'],
        'customer_name' => $data['customer_name'],
        'password' => md5($data['password']),
        'email' => $data['email'],
        'contact_no' => $data['contact_no'],
        'dob' => $data['dob'],
        'gender' => $data['gender'],
        'profile_image' => $profile_image,
        'customer_status' => 'Active',
        'deleted_status' => 'Not deleted',
        'created_date' => $date,
      ];
      DB::table('customers')->insert($fields);
      return redirect()->back()->with('success', 'You are registered successfully..');
    }
  }

  public function doLogin(Request $data){
    $pass = md5($data['password']);
    $query = DB::table('customers')->where('email', '=',$data['email'])->where('password', '=',$pass)->where('deleted_status', '=','Not deleted')->first();
    if(isset($query->customer_status) && ($query->customer_status == 'Inactive')){
      return redirect()->back()->with('alert', 'Your Profile is Inactive. Please Contact To admin.');
    }else{
      if(isset($query->id)){
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
            ->first();
            if(isset($checkValue->quantity) && ($checkValue->fk_order_id == 0)){
              $qty = $checkValue->quantity + $value->quantity;
              $updateCart = DB::table('cart')
              ->where('fk_user_id','=',$query->id)
              ->where('cart_id','=',$value->id)
              ->where('fk_order_id','=',0)
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
        $url = url()->previous();
        return Redirect($url);
      }
      return redirect()->back()->with('alert', 'Please Enter Correct Credentials.');
    } 
  }

  public function upgradeProfile(){
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
    $customer_id =   Session::get('user_id');
    $country = DB::table('ms_countries')->get();
    $customer_data = DB::table('customers')->where('id',$customer_id)->first();
    return view('upgrade-profile', ['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'pro_info'=>$pro_info, 'category'=>$category,'sub_category'=>$sub_category,  'country'=>$country,'customer_data'=>$customer_data, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
  }

  public function customerSection(Request $request){   
    $compare_count = 0;
    $session = 1;
    $instagram_url = '#';
    $instagram_media = '';
    $data = '';
    $compare_ids = Cookie::get('compare_id');
    if(is_array($compare_ids)){
      $compare_count = count($compare_ids);
    }
    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      /*for getting instagram post*/
      $customer = DB::table('customers')->where('id', $session)->get();
      $c_insta_access_token = $customer[0]->insta_access_token; 
      if($c_insta_access_token == '' && $request->code == '' ){
        $instagram_url = Instagram::getLoginUrl();
      }else{
        if($request->code != ''){
          $code = $request->code;
          $data = Instagram::getOAuthToken($code);
          if($data->access_token!=''){
            $updateCart = DB::table('customers')
            ->where('id','=',$session)
            ->update(['insta_access_token' => $data->access_token]);
            $c_insta_access_token = $data->access_token;
          }
        }
        /*fetch instagram data*/
        $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$c_insta_access_token;
        $return_data = $this->getDataByUrl($url);
        $instagram_media = json_decode($return_data)->data;
      } 
      /*for getting instagram post*/
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
    $product_rating = DB::table('reviews')
    ->join('product','reviews.ref_id','=','product.product_id')
    ->where('fk_customer_id','=',$session)
    ->where('review_type','=','p')
    ->select('reviews.*', 'product.product_name')
    ->get();
    $support_list = DB::table('support')->where('customer_id', $session)->orderBy('id', 'desc')->get();
    $store_rating = DB::table('reviews')
    ->join('product','reviews.ref_id','=','product.product_id')
    ->where('fk_customer_id','=',$session)
    ->where('review_type','=','s')
    ->select('reviews.*', 'product.product_name')
    ->get();
    $wishlistData = DB::table('customer_wishlist')
    ->join('product','customer_wishlist.fk_product_id','=','product.product_id')
    ->select('product.product_img','product.product_name','product.current_price','product.availability','customer_wishlist.pk_cw_id','product.product_id','product.slug')
    ->where('customer_wishlist.fk_customer_id','=',$session)
    ->get();
    /* $addessess = DB::table('order_address_info')
    ->join('ms_countries','order_address_info.fk_billing_country','=','ms_countries.id')
    ->join('ms_countries','order_address_info.fk_shipping_country','=','ms_countries.id')
    ->where('order_address_info.fk_customer_id','=',$session)
    ->get();*/
    $order_list = DB::table('cart')
    ->join('orders','cart.fk_order_id','=','orders.pk_order_id')
    ->join('product','cart.fk_product_id','=','product.product_id')
    ->join('users','product.user_id','=','users.id')
    ->where('cart.fk_order_id','!=',0)
    ->where('cart.fk_user_id','=',$session)
    ->select('orders.*', 'cart.*','users.f_name', 'users.l_name', 'product.*')
    ->orderBy('orders.created_date', 'desc')
    ->get();
    $user_id = session('user_id');
    $addessess =  DB::select(DB::raw('select oa.*,billing_country.country_name as billing_country_name,shipping_country.country_name as shipping_country_name from  order_address_info as oa left join ms_countries as billing_country on oa.fk_billing_country = billing_country.id left join ms_countries as shipping_country on oa.fk_shipping_country = shipping_country.id where fk_customer_id ='.$session));
    $country = DB::table('ms_countries')->get();
    // $customer_data = DB::table('customers')->where('id',$user_id)->first();
    $user_data = DB::table('customers')->where('id','=',$user_id)->first();
    $collection_category = DB::table('collection_category')->where('customer_id', $user_id)->get();
    $product_collection = DB::table('customer_collections')->join('product', 'customer_collections.product_id', '=', 'product.product_id')->where('customer_collections.customer_id', $user_id)->get();
    return view('my-profile',['vertical_product_types'=>$vertical_product_types, 'menu'=>$menus, 'category'=>$category,'sub_category'=>$sub_category,  'user_data'=> $user_data,'country'=>$country,'customer_data'=>$user_data, 'cart'=>$cart,'count'=>0,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session, 'wishlistData'=>$wishlistData, 'product_rating'=>$product_rating, 'store_rating'=>$store_rating, 'addessess'=>$addessess,'order_list'=> $order_list,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count,'instagram'=>$instagram_url,'instagram_media'=>$instagram_media, 'support_list' => $support_list, 'collection_category' => $collection_category, 'product_collection' => $product_collection, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
  }

  public function getDataByUrl($url){
    $options = array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER         => false, 
      CURLOPT_FOLLOWLOCATION => true,   
      CURLOPT_MAXREDIRS      => 10,    
      CURLOPT_ENCODING       => "",   
      CURLOPT_USERAGENT      => "test",
      CURLOPT_AUTOREFERER    => true,  
      CURLOPT_CONNECTTIMEOUT => 120,    
      CURLOPT_TIMEOUT        => 120,
    ); 
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $content  = curl_exec($ch);
    curl_close($ch);
    return $content;
  }

 
  public function customerAddress(Request $request){
    $requestData = $request->all();
    if(!empty($requestData['update_id']))
    {
      $insert_data['billing_first_name'] = $requestData['billing_first_name'];
      $insert_data['billing_last_name'] = $requestData['billing_last_name'];
      $insert_data['billing_company'] = $requestData['billing_alternate_no'];
      $insert_data['billing_email'] = $requestData['billing_email'];
      $insert_data['billing_phone'] = $requestData['billing_phone'];
      $insert_data['billing_address_1'] = $requestData['billing_address_1'];
      $insert_data['billing_address_2'] = $requestData['billing_address_2'];
      $insert_data['billing_city'] = $requestData['billing_city'];
      $insert_data['billing_postcode'] = $requestData['billing_postcode'];
      $insert_data['fk_billing_country'] = $requestData['fk_billing_country'];
      $insert_data['billing_country_code'] = $requestData['billing_country_code'];
      $insert_data['shipping_first_name'] = $requestData['shipping_first_name'];
      $insert_data['shipping_last_name'] = $requestData['shipping_last_name'];
      $insert_data['shipping_company'] = $requestData['shipping_alternate_no'];
      $insert_data['shipping_email'] = $requestData['shipping_email'];
      $insert_data['shipping_phone'] = $requestData['shipping_phone'];
      $insert_data['shipping_address_1'] = $requestData['shipping_address_1'];
      $insert_data['shipping_address_2'] = $requestData['shipping_address_2'];
      $insert_data['shipping_city'] = $requestData['shipping_city'];
      $insert_data['shipping_postcode'] = $requestData['shipping_postcode'];
      $insert_data['fk_shipping_country'] = $requestData['fk_shipping_country'];
      $insert_data['shipping_country_code'] = $requestData['shipping_contact_country_code'];
      $address_info_insertion = DB::table('order_address_info')
      ->where('pk_address_id','=', $requestData['update_id'])
      ->update($insert_data);
      return redirect()->back()->with('msg', 'Your address updated successfully. ');
    }else{
      $session = $request->session()->get('user_id');
      $insert_data['billing_first_name'] = $requestData['billing_first_name'];
      $insert_data['billing_last_name'] = $requestData['billing_last_name'];
      $insert_data['billing_company'] = $requestData['billing_alternate_no'];
      $insert_data['billing_email'] = $requestData['billing_email'];
      $insert_data['billing_phone'] = $requestData['billing_phone'];
      $insert_data['billing_address_1'] = $requestData['billing_address_1'];
      $insert_data['billing_address_2'] = $requestData['billing_address_2'];
      $insert_data['billing_city'] = $requestData['billing_city'];
      $insert_data['billing_postcode'] = $requestData['billing_postcode'];
      $insert_data['fk_billing_country'] = $requestData['fk_billing_country'];
      $insert_data['billing_country_code'] = $requestData['billing_country_code'];
      $insert_data['shipping_first_name'] = $requestData['shipping_first_name'];
      $insert_data['shipping_last_name'] = $requestData['shipping_last_name'];
      $insert_data['shipping_company'] = $requestData['shipping_alternate_no'];
      $insert_data['shipping_email'] = $requestData['shipping_email'];
      $insert_data['shipping_phone'] = $requestData['shipping_phone'];
      $insert_data['shipping_address_1'] = $requestData['shipping_address_1'];
      $insert_data['shipping_address_2'] = $requestData['shipping_address_2'];
      $insert_data['shipping_city'] = $requestData['shipping_city'];
      $insert_data['shipping_postcode'] = $requestData['shipping_postcode'];
      $insert_data['fk_shipping_country'] = $requestData['fk_shipping_country'];
      $insert_data['shipping_country_code'] = $requestData['shipping_contact_country_code'];
      $insert_data['created_date'] = date('Y-m-d h:i:s');
      $insert_data['fk_customer_id'] = $session;
      $address_info_insertion = DB::table('order_address_info')
      ->insert($insert_data);
      return redirect()->back()->with('msg', 'Your address submited successfully. ');
    }
  }

 
  public function updateMember(Request $request){
    $customer_id =   Session::get('user_id');
    $requestData = $request->all();
    if(isset($requestData['update_user_id']) && !empty($requestData['update_user_id'])){
      if(isset($requestData['user_role']) && !empty($requestData['user_role'])){
        if(!empty($requestData['profile_image']))
        {
          $profile_extension = $requestData['profile_image']->getClientOriginalExtension();
          if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'|| $profile_extension=='svg' ){
            $inputs['profile_image'] = mt_rand(1000000, 9999999).'.'.$profile_extension;
            $requestData['profile_image']->move(public_path('uploads'), $inputs['profile_image']);
          }else{
            $profile_image ='';
          }
        }else{
          $profile_image ='';
        }
        $inputs['f_name'] = $requestData['f_name'];
        $inputs['l_name'] = $requestData['l_name'];
        $inputs['contact_no'] = $requestData['contact_no'];
        $inputs['role'] = $requestData['user_role'];
        $updated = DB::table('users')->where('id', $requestData['update_user_id'])->update($inputs);
        if(isset($updated) && !empty($updated)){
          return redirect()->back()->with('mesage', 'Your member updated successfully.');
        }else{
          return redirect()->back()->with('error', 'Sorry! Your member could not updated successfully.');
        }
      }  
    }
  }

  public function addStaff(Request $request){

    $customer_id                = Session::get('user_id');
    $requestData                = $request->all();
    $inputs['created_by']       = Session::get('user_id');
    $inputs['f_name']           = $requestData['f_name'];
    $inputs['l_name']           = $requestData['l_name'];
    $inputs['email']            = $requestData['email'];
    $inputs['contact_no']       = $requestData['contact_no'];
    $inputs['created_date']     = Date('Y-m-d');
    $added                      = User::insert($inputs);
    if(isset($added) && !empty($added)){
      return redirect()->back()->with('mesage', 'Your member added successfully.');
    }else{
      return redirect()->back()->with('error', 'Sorry! Your member could not added successfully.');
    }
  }

 
  public function customerForgetPass(){
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
    return view('forget-pass',['cart'=>$cart,'count'=>0,'getTotlaQty'=>$getTotlaQty,'getSubTotal'=>$getSubTotal,'getTotal'=>$getTotal,'session'=>$session,'vertical_product_types'=>$vertical_product_types, 'menu'=>$menus,'category'=>$category,'sub_category'=>$sub_category,'wishlistCount'=>$wishlistCount,'compare_count'=>$compare_count, 'website_menu' => $this->website_menu, 'website_customer_service' => $this->website_customer_service, 'website_show_the_following' => $this->website_show_the_following]);
  }

  public function logout(Request $request){
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
  }
  public function collectionCategory(Request $request){
    $requestData = $request->all();
    DB::table('collection_category')->insert(['collection_category_name' => $requestData['category_name'], 'customer_id' => $requestData['customer_id']]);
    $collection_category = DB::table('collection_category')->where('customer_id', $requestData['customer_id'])->get();
    $data = '';
    foreach($collection_category as $row){
      $data .= '
      <tr>
      <td>'.$row->id.'</td>
      <td>'.$row->collection_category_name.'</td>
      <td><a href="javascript:void(0)"  onclick="removeCollectionCat(this.id)" id="'.$row->id.'"><i class="fa fa-trash"></i></a></td>
      /tr>';
    }
    echo $data;
  }
  public function userAvailable(Request $request){
    $requestData = $request->all();
    return json_encode($requestData->user_name);
  }

  public function my_account(Request $request){

    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      $this->static_data['cart'] = Cart::session($session)->getContent();
      $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
      $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
      $session)->get()->count();
    }else{
      return redirect(getenv('BASEURL'))->with('success', 'You are not logged in now..');
    }
    if(Session::has('user_id')){ 
      $user_id        = Session::get('user_id');
      $customer       = Customer::with(['support_list','reviews','orders','collection_category'])
                        ->findOrFail($user_id);

      $data['vendor'] = User::where('customer_id', $user_id)->first();
      $insta_token    = $customer->insta_access_token; 
      if(empty($insta_token) && empty($request->code)){
        $data['instagram_url'] = Instagram::getLoginUrl();
      }else{
        if(!empty($request->code)){
          $code = $request->code;
          $data = Instagram::getOAuthToken($code);
          if(!empty($data->access_token)){ 
            Customer::where('id','=',$user_id)
            ->update(['insta_access_token' => $data->access_token]);
            $insta_token = $data->access_token;
          }
        }
        $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$insta_token;
        $return_data = $this->getDataByUrl($url);
        $data['instagram_media']= json_decode($return_data)->data;
      }       
      $data['support_list'] = $customer->support_list;
      foreach ($data['support_list'] as $key => $value) {  
        $result = DB::table('messages')->where('support_id', $value->id)->select('messages.*', 'users.f_name as from_u_f_name','users.l_name as from_u_l_name', 'users.profile_image as from_u_profile','customers.f_name','customers.l_name', 'customers.profile_image')
        ->leftJoin('users', 'users.id', '=', 'messages.from_user_id')
        ->leftJoin('customers', 'customers.id', '=', 'messages.from_user_id')
        ->get();
        $seen_msg = DB::table('messages')->where('support_id', $value->id)->where('view', '0')->where('to_user_id', $user_id)->select('id')->get();
        if(!empty($result)){
          foreach ($result as $key1 => $value1) {
            if($value1->profile_image==''){
              $result[$key1]->to_img =  'https://moretolike.com/uploads/no-image.png';
            }else{
              $result[$key1]->to_img = 'https://moretolike.com/uploads/'.$value1->profile_image;
            }
            if($value1->from_u_profile==''){
              $result[$key1]->from_u_profile =  'https://moretolike.com/uploads/default-user.png';
            }else{
              $result[$key1]->from_u_profile = 'https://moretolike.com/uploads/'.$value1->from_u_profile;
            }
            // unset($value->restaurant);
          }
          $data['support_list'][$key]->chat_message = $result;
        }else{
          $data['support_list'][$key]->chat_message = '';
        }
        $data['support_list'][$key]->seen_msg = count($seen_msg);
      }
      
      /*support list*/
      $data['product_rating'] = Reviews::join('product','reviews.ref_id','=','product.product_id')
      ->where('fk_customer_id','=',$user_id)
      ->where('review_type','=','p')
      ->select('reviews.*', 'product.product_name')
      ->get();

      $data['store_rating'] = Reviews::join('product','reviews.ref_id','=','product.product_id')
      ->where('fk_customer_id','=',$user_id)
      ->where('review_type','=','s')
      ->select('reviews.*', 'product.product_name')
      ->get();

      $data['order_list'] = CartModel::join('orders','cart.fk_order_id','=','orders.pk_order_id')
      ->join('product','cart.fk_product_id','=','product.product_id')
      ->join('users','product.user_id','=','users.id')
      ->where('cart.fk_order_id','!=',0)
      ->where('cart.fk_user_id','=',$user_id)
      ->select('orders.*', 'cart.*','users.f_name', 'users.l_name', 'product.*')
      ->orderBy('orders.created_date', 'desc')
      ->get();
      $data['user'] = $customer;
      $data['user_role'] = UserGroup::whereNotIn('id', [1, 2, 3, 4])->get();
      $data['payment_history'] = $customer->orders()
      ->where('fk_payment_type', 'STRIPE')
      ->where('transaction_id', '!=', '')
      ->get();      
      $data['member'] = User::where('created_by', $user_id)->get();
      $stripe = Stripe::make();
      foreach($data['payment_history'] as $i => $row){
        try {
          $data['payment_history'][$i]->charge = $stripe->charges()->find($row->transaction_id);
        } catch (\Cartalyst\Stripe\Exception\NotFoundException $e) {
          $code = $e->getCode();
          $message = $e->getMessage();
          $type = $e->getErrorType();
        }
      }
      try {
        $data['active_card'] = $cards = $stripe->cards()->all($customer->stripe_token);
      } catch (\Cartalyst\Stripe\Exception\NotFoundException $e) {
        $code = $e->getCode();
        $message = $e->getMessage();
        $type = $e->getErrorType();
      }

      $data['collection_category'] = $customer->collection_category;
      $data['product_collection'] = CustomerCollection::join('product', 'customer_collections.product_id', '=', 'product.product_id')->where('customer_collections.customer_id', $user_id)->where('customer_collections.type', 'p')->get();
      $data['countries']   = Country::get(); 
      $data['b_country']   = Country::where('id',$data['user']->billing_country)->first();
      $data['s_country']   = Country::where('id',$data['user']->shipping_country)->first();
      $data['bstates']     = State::where('country_id',$data['user']->billing_country)->get();
      $data['b_state']     = State::where('id',$data['user']->billing_state)->first();
      $data['v_states']    = State::where('country_id',$data['vendor']->country)->get();
      $data['bcities']     = City::where('state_id',$data['user']->billing_state)->get();
      $data['b_city']      = City::where('id',$data['user']->billing_city)->first();
      $data['v_cities']    = City::where('state_id',$data['vendor']->state)->get();
      $data['sstates']     = State::where('country_id',$data['user']->shipping_country)->get();
      $data['s_state']     = State::where('id',$data['user']->shipping_state)->first();
      $data['scities']     = City::where('state_id',$data['user']->shipping_state)->get();
      $data['s_city']      = City::where('id',$data['user']->shipping_city)->first();
      $data['current_user_id'] = $session;
      return view('frontend/account',['static_data' => $this->static_data, 'data' => $data]);
    }else{
      return redirect()->back()->with('success', 'You are not logged in now..');
    }  
  }

  public function upgrade_vendor(Request $request){
    $customer_id      = $request->session()->get('user_id');
    $date             = date('Y-m-d h:i:s');
    $slug             = str_slug($request['store_name']);
    $slug             = $this->getSlug($table = 'users',$slug,'store_url');
    if($request['store_logo']){
      $profile_extension = $request['store_logo']->getClientOriginalExtension();
      if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'){
          $store_logo = str_replace(' ','-',$request['store_name']).'-logo-'.time().''.uniqid().'.'.$profile_extension;
          $request['store_logo']->move(public_path('uploads'), $store_logo);
      }else{
        $store_logo = $request['old_store_logo'];
      }
    }else{
        $store_logo = $request['old_store_logo'];
    }
    if($request['store_banner']){
      $profile_extension = $request['store_banner']->getClientOriginalExtension();
      if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'){
          $store_banner = str_replace(' ','-',$request['store_name']).'-banner-'.time().''.uniqid().'.'.$profile_extension;
          $request['store_banner']->move(public_path('uploads'), $store_banner);
      }else{
        $store_banner = $request['old_store_banner'];
      }
    }else{
        $store_banner = $request['old_store_banner'];
    }
    $fields = [
      'customer_id'   => $customer_id,
      'role'      => '3',
      'store_name'  => $request['store_name'],
      'store_url'   => $slug,
      'contact_no'  => $request['contact_no'],
      'address1'    => $request['address1'],
      'address2'    => $request['address2'],
      'country'     => $request['country'],
      'state'     => $request['state'],
      'city'      => $request['city'],
      'zip_code'    => $request['zip_code'],
      'facebook'    => $request['facebook'],
      'youtube'     => $request['youtube'],
      'instagram'   => $request['instagram'],
      'store_banner'  => $store_banner,
      'store_logo'  => $store_logo,
    ];
    $vendor_details   = User::where('customer_id',$customer_id)->first();
    if($vendor_details){
      $fields['updated_date'] = $date;
      User::where('customer_id',$customer_id)->update($fields);
    }else{
      $fields['created_date'] = $date;
      User::insert($fields);
      $id = DB::getPdo()->lastInsertId();;
      $fields1['fk_vendor_id'] = $id;
      Customer::where('id',$customer_id)->update($fields1);
    }
    return redirect()->back()->with('success', 'Your vendor upgraded successfully...');
  }
  public function profile(Request $request, $user_id = null){
    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      $this->static_data['cart'] = Cart::session($session)->getContent();
      $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
      $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
      $session)->get()->count();
    }else{
       return redirect(getenv('BASEURL'))->with('success', 'You are not logged in now..');
    }
    $following_id = $user_id;
    if(isset($user_id) && !empty($user_id)){
      $user_id = $user_id; 
    }else{
      $user_id = Session::get('user_id'); 
    }
    $data['current_follower'] =  DB::table('user_follower')
    ->where('following_id','=',$user_id)
    ->where('follower_id','=',$user_id)->first();

    if(isset($user_id) && !empty($user_id)){ 
      $customer = Customer::with(['support_list','reviews','orders','collection_category'])
      ->findOrFail($user_id);
      $data['collection'] = VendorCollections::
      join('customers','vendor_collections.user_id', '=','customers.fk_vendor_id' )
      ->select(
        'vendor_collections.*',
        'customers.id as customer_id',
        'customers.f_name',
        'customers.l_name'
      )
      ->where('user_id', $customer->fk_vendor_id)->get();
      $instagram_media = '';
      $user_vendor_id = $customer->fk_vendor_id;
      $instagram_access_token = $customer->insta_access_token;
      if($instagram_access_token){
        $user_url = "https://api.instagram.com/v1/users/self/?access_token=".$instagram_access_token;
        $insta_user_details =$this->getDataByUrl($user_url);
        $insta_user_details = json_decode($insta_user_details);
        if(isset($insta_user_details) && property_exists($insta_user_details, 'data')){
          $data['insta_user_details'] = $insta_user_details->data;
        }else{
          $data['insta_user_details'] = '';
        }
        $data['instagram_url'] = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$instagram_access_token;
        $instagram_media = $this->getDataByUrl($data['instagram_url']);
        $instagram_media = json_decode($instagram_media);
        if(is_object($instagram_media) && property_exists($instagram_media, 'data')){
          $data['instagram_media'] = $instagram_media->data;
        }else{
          $data['instagram_media'] = '';
        }
      }else{
        $data['instagram_url']    = Instagram::getLoginUrl();
        $data['insta_user_details'] = '';
        $data['instagram_media']  = '';
      }
      $data['product_like'] = ProductLike::
      join('product','product_like.product_id','=','product.product_id')
      ->join('products_sub_category','products_sub_category.fk_product_id','=','product.product_id')
      ->join('ms_category','ms_category.id','=','products_sub_category.fk_category_id')
      ->where('product_like.customer_id', $user_id)
      ->get();
      if(isset($data['product_like']) && !empty($data['product_like'])){
        foreach($data['product_like'] as $i => $row){
          $data['product_like'][$i]['is_liked'] = $this->getProductLikeCountByCustomerAndProductId($row->product_id,$user_id);
          $data['product_like'][$i]['product_like'] = DB::select('CALL getPeopleByProductId('.$row->product_id.')');
      }
    }
    $data['following'] = UserFollower::join('customers', 'customers.id', '=', 'user_follower.following_id')
    ->where('follower_id', $customer_id)
    ->get();
    $data['follower'] = UserFollower::
    join('customers', 'customers.id', '=', 'user_follower.follower_id')
    ->where('following_id', $customer_id)
    ->get();
    $data['store_follower'] = StoreFollower::
    join('users', 'users.id', '=', 'store_follower.fk_vendor_id')
    ->where('store_follower.fk_customer_id', $customer_id)
    ->get();
    $data['user']   = $customer;
    $data['stores'] = User::
    where('users.id', $data['user']->fk_vendor_id)->get();
      return view('frontend/profile',['static_data' => $this->static_data, 'data' => $data]);
    }else{
      return redirect()->back()->with('success', 'You are not logged in now..');
    } 
  }
  public function forget_pass(Request $request){
    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      $this->static_data['cart'] = Cart::session($session)->getContent();
      $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
      $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
      $session)->get()->count();
    } else {
      $this->static_data['cart'] = Cart::getContent();
      $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::getSubTotal();
      $this->static_data['wishlistCount'] = 0;
    }
    return view('frontend/forget_password',['static_data' => $this->static_data]);
  }
  public function resetCustomerPass($token){
    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      $this->static_data['cart'] = Cart::session($session)->getContent();
      $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
      $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
      $session)->get()->count();
    } else {
      $this->static_data['cart'] = Cart::getContent();
      $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::getSubTotal();
      $this->static_data['wishlistCount'] = 0;
    }
    $customer = Customer::where('forget_pass_token','=',$token)->first();
    if(empty($customer)){
      return view('frontend/forget_password', ['expired'=>false]);
    }else{
      $email =  $customer->email;
      $time1 = strtotime($customer->forget_pass_current_timestamp) + 24 * 60 * 60;
      $new_curr_timestamp =  time();
      if($time1 > $new_curr_timestamp) {
        return view('frontend/forget_password', ['email'=>$email, 'expired'=>true]);
      }
      else{
        return view('frontend/forget_password', ['email'=>$email, 'expired'=>false]);
      }
    }
  }
  public function resetPassSuccess(){
    if(Session::has('user_id')){
      $session = $request->session()->get('user_id');
      $this->static_data['cart'] = Cart::session($session)->getContent();
      $this->static_data['getTotlaQty'] = Cart::session($session)->getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::session($session)->getSubTotal();
      $this->static_data['wishlistCount'] = CustomerWishlist::where('fk_customer_id','=',
      $session)->get()->count();
    } else {
      $this->static_data['cart'] = Cart::getContent();
      $this->static_data['getTotlaQty'] = Cart::getTotalQuantity();
      $this->static_data['getSubTotal'] = Cart::getSubTotal();
      $this->static_data['wishlistCount'] = 0;
    }
    // return redirect('/forget-pass')->with('success', 'You are not logged in now..');
    return view('frontend/forget-pass-success',['static_data' => $this->static_data]);
    }
}