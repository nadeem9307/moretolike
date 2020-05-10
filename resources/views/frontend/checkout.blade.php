<?php 
   if($static_data['user'] != null){
      $user = $static_data['user'];
   }else{
      $user = new stdClass();
   }

  $user->id;
  $user->fk_vendor_id;
  $user->f_name;
  $user->l_name;
  $user->customer_name;
  $user->email;
  $user->contact_no;
  $user->dob;
  $user->gender;
  $user->shipping_address1;
  $user->shipping_address2;
  $user->billing_address1;
  $user->billing_address2;
  $user->contact_country_code;
  $user->country;
  if(Session::has('user_id')){
   $user = $data['customer']; 
  }
?>
{{--@include('frontend/include/header')--}}
   <!--/div>
      <hr-->
<div class="add_cl_slider_show_cart">
      <div class="container content slide_checkout_content ">
         <div class="row storelist">
            <ul class="top-link">
               <li><a href="javascript:void(0);" class="back_to_cart">Back</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <!--li><a href="" class="top-link-btn">shop</a></li>
               <li><i class="fa fa-angle-right"></i></li-->
               <li><a href="">Payment</a></li>
            </ul>
         </div>
		 @if($errors->any())
            <div class="alert alert-danger">
              <strong>Oh!</strong> {{$errors->first()}}
            </div>
         @endif
         @if(isset($static_data['message']) && !empty($static_data['message']))
		<div class="row storelist">
            <ul class="top-link">
               <li><a href="{{getenv('BASEURL')}}" >Home</a></li>
            </ul>
        </div>
         <div class="alert alert-success">
           <strong>Success!</strong> <?=$static_data['message']?>
         </div>
         <!--script type="text/javascript">
            window.location.href="/beta-order-summary";
         </script-->
         @endif
		 <div id="cod_msg"></div>
         <!--user registration -->
         <form class="form-horizontal here_form__cl_cs" role="form" enctype="multipart/form-data" action="/beta-checkout-order" class="checkout woocommerce-checkout" method="post" name="checkout"  id="customer_details_form">
            {{csrf_field()}}
             
             
            <div class="row">
            <input type="hidden" name="fk_customer_id" value="{{Session::get('user_id')}}">


               <div class="col-md-7 ">
                   <div class="payment-b">
                  <div class="row">
                     <div class="col-md-12">
                        <h4 class="borders">Billing Address</h4>
                     </div>
                  </div>
                  <div class="row form-margin">
                     <div class="col-md-6">
                        <p><strong>Frst Name </strong></p>
                        <input type="text"  placeholder="Enter First Name" id="billing_first_name" name="billing_first_name" class="form-control" value="{{$user->f_name}}" required>
                     </div>
                     <div class="col-md-6">
                        <p><strong>Last Name</strong></p>
                        <input type="text"  placeholder="Enter Last Name" id="billing_last_name" name="billing_last_name" class="form-control" value="{{$user->l_name}}">
                     </div>
                  </div>
                  <!-- <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Company Name</strong></p>
                        <input type="text"  placeholder="Enter Company Name" id="billing_company" name="billing_company" class="form-control" value="{{isset($data['f_name']) ? $data['f_name'] : ''}}">
                     </div>
                  </div> -->
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Country</strong></p>
                        <select class="input-select form-control dateyear" name="country" id="add_country" required >
                           <option value="">Select Country</option>
                          @foreach($data['country'] as $bill_country )
                              <option value="{{$bill_country->id}}" {{$bill_country->id == $user->country_id ? 'selected="selected"' : ''}}>{{$bill_country->country_name}}</option>
                          @endforeach

                      </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Street Address</strong></p>
                        <input type="text"  placeholder="Enter Street address" id="billing_address_1" name="billing_address_1" class="form-control" required value="{{$user->shipping_address1}}">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <input type="text"  placeholder="Enter Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="form-control" value="{{$user->shipping_address2}}">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Post Code ZIP</strong></p>
                        <input type="text"  placeholder="Enter Postcode / ZIP" id="billing_postcode" name="billing_postcode" class="form-control" onkeypress="return isNumberKey(event)" required >
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Town City</strong></p>
                        <input type="text"   placeholder="Enter Town / City" id="billing_city" name="billing_city" class="form-control" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Phone</strong></p>
                        <input type="tel" placeholder="Enter Phone Number" id="billing_phone" name="billing_phone" class="form-control" onkeypress="return isNumberKey(event)" required value="{{$user->contact_no}}">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 form-margin">
                        <p><strong>Email Address</strong></p>
                        <input type="email"  placeholder="Enter Emailid" id="billing_email" name="billing_email" class="form-control" required value="{{$user->email}}">
                     </div>
                  </div>
                  <!--div class="row">
                     <div class="col-md-12 form-margin">
                        <input type="checkbox" name="create_acc" class="input-checkbox" id="c_a_a">&nbsp;&nbsp;&nbsp;&nbsp;<label for="c_a_a">Create an Account</label><br>
                     </div>
                  </div-->
                   
                  </div> 
               </div>
               <!--billing address-->
               <div class="col-md-5 ">
                   <div class="payment-bg">
                  <div class="row">
                     <div class="col-md-12">
                        <h4 class="borders">Your Order</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <table class="he_catd__bodr_m" width="100%" cellpadding="0" cellspacing="0" border="0">
                           <tr class="borders pro__cl__swq">
                              <th width="70%" height="40">Product</th>
                              <th width="30%" class="text-right">Price</th>
                           </tr>
                           @if(isset($static_data['cart']) && !empty($static_data['cart']))
                              @foreach($static_data['cart'] as $row)
                                 <input name="cart_id[]" value="{{$row->id}}" type="hidden">
                                 <input name="product_id[]" value="{{$row->attributes->product_id}}" type="hidden">
                                 <tr class="borders">
                                    <th width="70%">{{$row->name}}</th>
                                    <td width="30%" class="text-right">$ {{function_exists('money_format') ? money_format('%i', $row->price) : $row->price}}</td>
                                 </tr>
                                <tr class="borders">
                                    <th width="70%">ORDER SUMMARY</th>
                                    <td width="30%" class="text-right">Data</td>
                                 </tr>
                                 <tr class="borders">
                                    <th width="70%">SUBTOTAL</th>
                                    <td width="30%" class="text-right">$200</td>
                                 </tr>
                                 <tr class="borders">
                                    <th width="70%">SHIPPING</th>
                                    <td width="30%" class="text-right">$120</td>
                                 </tr>
                               <tr class="borders">
                                    <th width="70%">TAXES</th>
                                    <td width="30%" class="text-right">$12</td>
                                 </tr>

                              @endforeach
                           @else
                             
                           @endif
                        </table>
                     </div>
                  </div>
                  
               </div>
                   
                   <div class="payment-bg her__slkdye__cart">
                       <table class="he_catd__bodr_m" width="100%" cellpadding="0" cellspacing="0" border="0">
                           
                                <tr class="borders totla__make_here_cart">
                                    <th width="70%">TOTAL</th>
                                    <td width="30%" class="text-right">$332</td>
                                 </tr>
<!--
                             <tr class="borders">
                                 <td colspan="2">There is no product in your cart...</td>
                              </tr>
-->

                       </table>
                       <div class="row ">
                     <div class="col-md-12 her__list_makein_sd">
                         <hr>
                        <input type="radio" name="payment_mode" class="rediof" value="cod" checked="">Cash on Delivery
                     </div>
                     <div class="col-md-12">
                        <p class="cash">Pay with cash upon delivery</p>
                     </div>
                     <div class="col-md-12">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="credit__cart_list_mek">
                           <tr>
                              <th width="50%" height="40"><input type="radio" name="payment_mode" class="rediof" value="card" checked="">Credit Card (Stripe)</th>
                              <td width="50%">
                                  <a href="#"><img src="{{asset('assets/images/patment-icon.png')}}" width="200" align="right" alt=""></a>
                               </td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-md-12">
                        <table width="100%" class="here__data_agree" cellpadding="0" cellspacing="0" border="0">
                           <tr>
                              <td height="40" width="3%" class="ades__Swerr">
                                 <input type="checkbox" id="terms" name="terms" class="input-checkbox">
                              </td>
                              <td align="" class="ter__asdwqb_shy"  style="padding-left: 0px;">
                                 <label class="nbvt_aw"  for="terms">I agree with <sapn class="clhrf"><a href="#" class="terms">terms & Conditions</a></sapn></label> 
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-md-12">
                        <p class="butn">
                           <input type="submit" data-value="Place order" value="Place Your Order" disabled id="place_order" class="button alt btn btn-warning btns btn-lg">
                           <!-- <button type="submit" class="btn btn-warning btns btn-lg">Place Your Order</button> </p> -->
                     </div>
                  </div>
                   </div>
                   
                   
               <!--your order-->
                </div>   
            </div>
             
         </form>
         <!---user registration-->  
      </div>
        </div>  
	  {{--  @include('frontend/include/footer') --}}