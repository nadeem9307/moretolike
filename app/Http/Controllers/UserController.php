<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use DB;
use Cart;
use Cookie;
use Session;
use Redirect;
use Instagram;
use App\CustomerWishlist;
use App\Customer;
use Mail;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
    * Display a listing of the myCollections
    *
    *  @return \Illuminate\Http\Response
    */
   public function user_create(Request $request){
   $check_user =  Customer::where('email',$request->email)->first();
 
    if (is_null($check_user)) {
      $items = $request->validate([
            'email'     => "required|unique:customers,email",
            'password' => "required"
          ]);
      $date =   date('Y-m-d h:i:s');
      $customer = new Customer;
      $customer->email = $request->email;
      $customer->password = Hash::make($request->password);
      $customer->created_date = $date;
      $customer->save();
      $id = $customer->id;
	  Session::put('user_id',$id);
	  return 'success';

    }else {
      return 'Email already exists';
    }
    
    }
     public function userLogin(Request $request)
    {
      $data = $request->all();
      $pass = Hash::make($data['password']);
      
      $query = DB::table('customers')->where('email', '=',$data['email'])->where('deleted_status', '=','Not deleted')->first();
    
     if( Hash::check($data['password'], $query->password) == false) {
       echo 'Incorrect Email id/Password entered. Please try again.';
      } else {
     
     
      if(!isset($query->id)){
          echo 'Incorrect Email id/Password entered. Please try again.';
      }elseif(isset($query->customer_status) && ($query->customer_status == 'Inactive')){
          echo 'Your Profile is Inactive. Please Contact To admin.';
      }else{
          /*get vendor info*/
          if(isset($query->fk_vendor_id) && !empty($query->fk_vendor_id)){
          }
          /*get vendor info*/
          if(isset($query->id))
          {
                  Session::put('user_id', $query->id);
                  Session::put('f_name', $query->f_name);
                  Session::put('vendor_id', $query->fk_vendor_id);
                  Session::put('profile_image', $query->profile_image);
                  if(is_numeric($query->fk_vendor_id)){
                    $vendor_id = $query->fk_vendor_id;
                    $vendor = DB::table('users')->where('id', $vendor_id)->first();
                      Session::put('role', $vendor->role);
                  }
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
    }
     public function getDataByUrl($url){
      $options = array(
          CURLOPT_RETURNTRANSFER => true,   // return web page
          CURLOPT_HEADER         => false,  // don't return headers
          CURLOPT_FOLLOWLOCATION => true,   // follow redirects
          CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
          CURLOPT_ENCODING       => "",     // handle compressed
          CURLOPT_USERAGENT      => "test", // name of client
          CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
          CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
          CURLOPT_TIMEOUT        => 120,    // time-out on response
      ); 
      $ch = curl_init($url);
      curl_setopt_array($ch, $options);
      $content  = curl_exec($ch);
      curl_close($ch);
      return $content;
    }
    public function facebookLogin(Request $request)
    {
      $data = $request->all();
      $access_token = $data['access_token'];
      $url = "https://graph.facebook.com/v3.1/me?fields=id,name,email&access_token=".$access_token;
      $user_details = json_decode($this->getDataByUrl($url));
      $data['email'] = $user_details->email;
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
        Session::put('profile_image', $query->profile_image);
        if(is_numeric($query->fk_vendor_id)){
            $vendor_id = $query->fk_vendor_id;
            $vendor = DB::table('users')->where('id', $vendor_id)->first();
              Session::put('role', $vendor->role);
          }
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

   public function editProfile(Request $request){
    $customer_id =   Session::get('user_id');
    $requestData = $request->all();
    
    if(!empty($requestData['new_profile_image']))
    {
      $profile_extension = $requestData['new_profile_image']->getClientOriginalExtension();

      if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'){
        $profile_img = mt_rand(1000000, 9999999).'.'.$profile_extension;
        $requestData['new_profile_image']->move(public_path('uploads'),$profile_img);
      }else{
        $profile_img ='';
      }
    }else{
      $profile_img =  $requestData['old_profile_image'];
    }
    $inputs['f_name'] = $requestData['f_name'];
    $inputs['l_name'] = $requestData['l_name'];
    $inputs['customer_name'] = $requestData['customer_name'];
    $inputs['email'] = $requestData['email'];
    $inputs['contact_no'] = $requestData['contact_no'];
    $inputs['dob'] = $requestData['dob'];
    $inputs['gender'] = $requestData['gender'];   
    $inputs['profile_image'] = $profile_img;
    $customer_update = Customer::where('id','=',$customer_id)->update($inputs);
    if($customer_update == 1){
      return redirect()->back()->with('success', 'Your profile general information updated successfully.');
    }else{
      return redirect()->back();
    }
  }


    public function customerForgetPassEmail(Request $request){       
      $data   =   Customer::where('email','=',$request->email)->first();
      if(!empty($data->email)){
        $token = md5(mt_rand(1000000000,99999999999));
        $curr_timestamp = time();
        Customer::where('email','=',$request->email)
        ->update(['forget_pass_token' => $token , 'forget_pass_current_timestamp' =>date('Y-m-d H:i:s',$curr_timestamp)]);

        $content ='<html>
          <head></head>
          <body>
          <h3>Your Email id : {{$data->email}}</h3>
          <p style=" color: red">Click on the below link for reset password. This link will be active for only 24 hours.</p>
          <p><a href="'.env('APP_URL').'/reset-customer-pass/'.$token.'/'.$curr_timestamp.'/'.$request->email.'">Click Here For Reset Password</a></p>
          </body>
        </html>';  
      
   
      Mail::send(['text'=>'frontend.forget_pass'], ['content' => $content], function($message) use($data) {
         $message->to($data->email, $data->customer_name)->subject('Forget Password Mail');
         $message->from(env('MAIL_USERNAME'), env('MAIL_FROM'));
      });
       

        // Mail::queue('html.view', $content, function($message){
        //       $message->to($data->email, $data->customer_name)->subject('Forget Password Mail');
        // });
        // echo env('APP_URL').'/reset-customer-pass/'.$token.'/'.$curr_timestamp.'/'.$request->email;
        echo 'YES';
      }
      else{
        echo 'NO';
      } 
    }
  public function change_password(Request $request){
      $customer_id =   Session::get('user_id');
      $requestData = $request->all();
      $checkPass = Customer::where('id','=',$customer_id)->first();
      if( Hash::check($requestData['old_password'], $checkPass->password) == false) {
        return 'Please Enter Old Password Corrrectly';
      }else {
      if($requestData['new_password'] == $requestData['re_new_password']){
      $update_pass = Hash::make($requestData['new_password']); 
      Customer::where('id','=',$customer_id)->update(['password' => $update_pass]); 
      return 'Your password change successfully';
      }else{
      return 'New Password and  Re-password not equal.';
      }
     
    }
  }
   public function update_address(Request $request){
    $customer_id                  =  Session::get('user_id');
    $inputs['billing_name']       = $request['billing_name']; 
    $inputs['billing_contact']    = $request['billing_contact']; 
    $inputs['billing_zipcode']    = $request['billing_zipcode']; 
    $inputs['billing_locality']   = $request['billing_locality']; 
    $inputs['billing_address1']   = $request['billing_address1']; 
    $inputs['billing_country']    = $request['billing_country']; 
    $inputs['billing_state']      = $request['billing_state']; 
    $inputs['billing_city']       = $request['billing_city']; 
    $inputs['shipping_name']      = $request['shipping_name']; 
    $inputs['shipping_contact']   = $request['shipping_contact']; 
    $inputs['shipping_zipcode']   = $request['shipping_zipcode']; 
    $inputs['shipping_locality']  = $request['shipping_locality']; 
    $inputs['shipping_address1']  = $request['shipping_address1'];
    $inputs['shipping_country']   = $request['shipping_country'];
    $inputs['shipping_state']     = $request['shipping_state'];
    $inputs['shipping_city']      = $request['shipping_city'];
    Customer::where('id','=',$customer_id)->update($inputs);
    return  'Your Address updated successfully.';
  }
}    