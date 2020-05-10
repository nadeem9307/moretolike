
@include('single-product-sections/header')
<style type="text/css">
    .order-details{background-color: #f5f5f5;
border-radius: 10px;}
.payment_methods1{font-weight: bold;}
.left-pa{padding-left: 5px;}
ul.order-detail {
    list-style-type: none;
}
ul.order-detail li {
       margin-bottom: 15px;
}
.pay-with{    background-color: #ececec;
  
    padding-left: 38px;
    padding-top: 10px;
    padding-bottom: 10px;}
    li.place-or{ text-align: center; }
    .ftn-cl{ font-size: 24px; color: blue; }
    [type="radio"]:checked, [type="radio"]:not(:checked) {
    width: 0px; 
     height: 0px; 
}
label {line-height: 1.9em;}
.form-row{margin-bottom: 0.5em;}
   

</style>
<div class="page home page-template-default">
    @if($getTotlaQty > 0)

<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="/home">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span><a href="/checkout">Checkout</a></nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                               <!--  <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header> --><!-- .entry-header -->
        <!-- <div class="col-md-12" style="height: 250px; overflow-y: scroll; margin-bottom: 20px; border: 1px solid #ccc;padding: 20px;">
                                 
                                    @foreach($customer_address as $addessess1)
                                        <div class="row address_div " >
                                            <div class="col-md-12" >

                                                <div class="col-md-2">
                                                    <input type="radio" class="example"  name="address_check" id="{{$addessess1->pk_address_id}}"   onchange="checkout_address({{json_encode($addessess1)}});">
                                                </div>

                                                <div class="col-md-5">
                                                    <div><h5><b>Billing Address</b></h5></div><br>

                                                    <div> {{$addessess1->billing_phone}} {{$addessess1->billing_company}} 
                                                    </div>

                                                    <div>{{$addessess1->billing_address_1}} {{$addessess1->billing_address_2}}
                                                        {{$addessess1->billing_city}} {{$addessess1->billing_country_name}} {{$addessess1->billing_postcode}}
                                                    </div>
                                                </div>
                                                              

                                                <div class="col-md-5 lftbrd" >
                                                    <div><h5><b> Shipping Address</b></h5></div><br>
                                                    <div> {{$addessess1->shipping_phone}} {{$addessess1->shipping_company}} 
                                                    </div>
                                                    <div>{{$addessess1->shipping_address_1}} {{$addessess1->shipping_address_2}}
                                                    {{$addessess1->shipping_city}} {{$addessess1->shipping_country_name}} {{$addessess1->shipping_postcode}}</div>
                                                </div>

                                            
                                            </div>
                                        </div>
                                        <br>           
                                        
                                    @endforeach
                                    </div> -->
                               
                                <form enctype="multipart/form-data" action="/checkout/order" class="checkout woocommerce-checkout" method="post" name="checkout" data-count="{{count($customer_address)}}" id="customer_details_form">
                                    {{csrf_field()}}
                                    <div id="customer_details" class="col2-set"  >

                                        <div class="col-1" >
                                            <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                               
                                                <p id="billing_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter First Name" id="billing_first_name" name="billing_first_name" class="input-text " required></p>
                                                <input type="hidden" value="{{$session}}" placeholder="" id="fk_customer_id" name="fk_customer_id" class="input-text " >

                                                <p id="billing_last_name_field" class="form-row form-row form-row-last validate-required"><label class="" for="billing_last_name">Last Name </label><input type="text" value="" placeholder="Enter Last Name" id="billing_last_name" name="billing_last_name" class="input-text "></p><div class="clear"></div>

                                                <p id="billing_company_field" class="form-row form-row form-row-wide"><label class="" for="billing_company">Company Name</label><input type="text" value="" placeholder="Enter Company Name" id="billing_company" name="billing_company" class="input-text "></p>
                                                 <p id="billing_country_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr></label>
                                                    <select class="input-select form-control dateyear" name="country" id="add_country" onchange="get_country_code(this.value); get_state(this.value);" required>


                                                        <option value="">Select Country</option>
                                                        @foreach($country as $bill_country )
                                                            <option value="{{$bill_country->id}}">{{$bill_country->country_name}}</option>
                                                        @endforeach

                                                    </select>
                                                </p>
                                                 <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Street Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter Street address" id="billing_address_1" name="billing_address_1" class="input-text " required></p>

                                                  <p id="billing_address_2_field" class="form-row form-row form-row-wide address-field"><input type="text" value="" placeholder="Enter Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text "></p>

                                                   <p id="billing_postcode_field" class="form-row form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Postcode / ZIP <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter Postcode / ZIP" id="billing_postcode" name="billing_postcode" class="input-text" onkeypress="return isNumberKey(event)" required></p>

                                                    <p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr></label><input type="text" value=""  placeholder="Enter Town / City" id="billing_city" name="billing_city" class="input-text " required></p>

                                                      <p id="billing_phone_field" class="form-row form-row form-row-wide validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="Enter Phone Number" id="billing_phone" name="billing_phone" class="input-text " onkeypress="return isNumberKey(event)" required></p>

                                                <p id="billing_email_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="Enter Emailid" id="billing_email" name="billing_email" class="input-text " required></p>

                                                   <input type="checkbox" id="terms" name="terms" class="input-checkbox"><span class="left-pa"><b>Create an account</b> </span>
                                              <!--   <p id="billing_phone_field" class="form-row form-row form-row-wide validate-required validate-phone"><label class="" for="billing_phone">Country Code <abbr title="required" class="required">*</abbr></label>
                                                <input type="text"  placeholder=" Country Code"  name="contact_country_code" id="contact_country_code"  readonly value=""/></p> -->
                                               

                                              <div class="clear"></div>
                                              <!--   <div id="errmsg"></div> -->
                                            </div>
                                        </div>

                                        <div class="col-2 order-details">
                                            <h3>Your order</h3>
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <input name="cart_id[]" value="496" type="hidden">
                                                <input name="product_id[]" value="23" type="hidden">
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                       Wirless Audio system multiroom 360 
                                                        <strong class="product-quantity">× 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$63999</span>
                                                    </td>
                                                </tr>
                                                 <tr class="cart_item">
                                                    <td class="product-name">
                                                       white solo 2 wirless 
                                                        <strong class="product-quantity">× 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$63999</span>
                                                    </td>
                                                </tr>
                                                 <tr class="cart_item">
                                                    <td class="product-name">
                                                       Wirless Audio system multiroom 360 
                                                        <strong class="product-quantity">× 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$63999</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                       white solo 2 wirless 
                                                        <strong class="product-quantity">× 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$63999</span>
                                                    </td>
                                                </tr>
                                                 <tr class="cart_item">
                                                    <td class="product-name">
                                                       Samsung S9
                                                        <strong class="product-quantity">× 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">$63999</span>
                                                    </td>
                                                </tr>
                                                                                           </tbody>
                                            <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">$63999</span></td>
                                                </tr>
                                                 <tr class="cart-subtotal">
                                                    <th>Shipping</th>
                                                  
                                                </tr>
                                                 <tr class="cart-subtotal">
                                                    <th class="product-name">enter your full address shiiping costs.</th>
                                                    
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Tax</th>
                                                    <td data-title="Shipping"><span class="amount">$300.00</span> <input class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]" type="hidden"></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">$64299</span></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                          <div class="row">
                                              <div class="col-sm-12">
                                            <ul class="order-detail">
                                                <li class="payment_methods1"><input type="radio" id="terms" name="terms" class="input-radio"><span class="left-pa">Cash on Delivery</span></li>
                                                <li class="pay-with">Pay with Cash upon Delivery </li>
                                                <li class="payment_methods1"><input type="radio" id="terms" name="terms"  class="input-radio"><span class="left-pa">Credit Card (Stripe) <i class="fa fa-cc-amex ftn-cl"></i> <i class="fa fa-cc-diners-club ftn-cl"></i>  <i class="fa fa-cc-discover ftn-cl"></i> <i class="fa fa-cc-mastercard ftn-cl"></i> <i class="fa fa-cc-paypal ftn-cl"></i> <i class="fa fa-cc-stripe ftn-cl"></i> <i class="fa fa-cc-visa ftn-cl"></i></span> </li>
                                                <li class="payment_methods1"> <input type="checkbox" id="terms" name="terms" class="input-checkbox"><span class="left-pa">I’ve read and accept the <a target="_blank" href="terms-and-conditions.html" style="color: #0eb4e0;">terms &amp; conditions</a> *</span></li>
                                                <li class="place-or"> <button class="btn btn-primary" style="width: 60%;">Place your Order</button>  </li>
                                            </ul>
                                              </div>
                                          </div>
                                            
                                        
                                           <!--  <div class="woocommerce-shipping-fields">
                                                <h3 id="ship-to-different-address">
                                                    <label class="checkbox" for="ship-to-different-address-checkbox">Ship to a different address?</label>
                                                    <input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox rtf" id="ship-to-different-address-checkbox">
                                                </h3>
                                                <div class="woocommerce-billing-fields" id="shipping_form" style="display: none;">
                                                    <p id="shipping_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="shipping_first_name">First Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter First Name" id="shipping_first_name" name="shipping_first_name" class="input-text "></p>

                                                    <p id="shipping_last_name_field" class="form-row form-row form-row-last validate-required"><label class="" for="shipping_last_name">Last Name </label><input type="text" value="" placeholder="Enter Last Name" id="shipping_last_name" name="shipping_last_name" class="input-text "></p><div class="clear"></div>

                                                    <p id="shipping_company_field" class="form-row form-row form-row-wide"><label class="" for="shipping_company">Company Name</label><input type="text" value="" placeholder="Enter Company Name" id="shipping_company" name="shipping_company" class="input-text "></p>

                                                    <p id="shipping_email_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="shipping_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="Enter Emailid"id=" shipping_email" name="shipping_email" class="input-text "></p>

                                                    <p id="shipping_country_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="shipping_country">Country <abbr title="required" class="required">*</abbr></label>


                                                    <select class="input-select form-control dateyear" name="shipping_country" id="shipping_country" onchange="get_shipping_country_code(this.value); get_state(this.value);">
                                                        <option value="">Select Country</option>
                                                        @foreach($country as $ship_country )
                                                            <option value="{{$ship_country->id}}">{{$ship_country->country_name}}</option>
                                                        @endforeach
                                                    </select></p><div class="clear"></div>

                                                    <p id="shipping_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="shipping_address_1">Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter Street address" id="shipping_address_1" name="shipping_address_1" class="input-text "></p>

                                                    <p id="shipping_address_2_field" class="form-row form-row form-row-wide address-field"><input type="text" value="" placeholder="Enter Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text "></p>

                                                    <p id="shipping_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="shipping_city">Town / City <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Enter Town / City" id="shipping_city" name="shipping_city" class="input-text " ></p>

                                                    

                                                    <p id="shipping_postcode_field" class="form-row form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="shipping_postcode">Postcode / ZIP <abbr title="required" class="required">*</abbr></label>

                                                    <input type="text" value="" placeholder="Enter Postcode / ZIP" id="shipping_postcode" name="shipping_postcode" onkeypress="isNumberKey(event)" class="input-text " ></p>


                                                    <p id="shipping_postcode_field" class="form-row form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="shipping_postcode">Country Code  <abbr title="required" class="required">*</abbr></label>

                                                    <input type="text" value=""  name="shipping_contact_country_code" class="input-text " id="shipping_contact_country_code" readonly="" placeholder="Enter Country Code"></p>
                                                    <div class="clear"></div>

                                                    <p id="shipping_phone_field" class="form-row form-row form-row-wide validate-required validate-phone"><label class="" for="shipping_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="Enter Phone Number" id="shipping_phone" name="shipping_phone" class="input-text " onkeypress="isNumberKey(event)" ></p><div class="clear" ></div>
                                                    <div id="errmsg"></div>
                                                </div>

                                           

                                                <p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Order Notes</label><textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea></p>
                                            </div> -->
                                        </div>
                                    </div>

                                  <!--   <h3 id="order_review_heading">Your order</h3> -->

                                    <!-- <div class="woocommerce-checkout-review-order" id="order_review">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart as $cart_item)
                                                <input type="hidden" name="cart_id[]" value="{{$cart_item->id}}">
                                                <input type="hidden" name="product_id[]" value="{{$cart_item->attributes['product_id']}}">
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                       {{$cart_item->name}}&nbsp;
                                                        <strong class="product-quantity">× {{$cart_item->quantity}}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">${{$cart_item->quantity*$cart_item->price}}</span>
                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                            <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">${{$getSubTotal}}</span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Shipping (Flat Rate)</th>
                                                    <td data-title="Shipping"><span class="amount">$300.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th><h3>Total</h3></th>
                                                    <td><h3><strong><span class="amount">${{$getSubTotal+300}}</span></strong> </h3></td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="woocommerce-checkout-payment" id="payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                               
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio rdt" id="payment_method_cod" checked="checked">

                                                    <label for="payment_method_cod">Cash on Delivery</label>
                                                    <div style="display:none;" class="payment_box payment_method_cod">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>
                                              
                                            </ul>
                                            <div class="form-row place-order">

                                                <p class="form-row terms wc-terms-and-conditions">
                                                    <input type="checkbox" id="terms" name="terms" class="input-checkbox">
                                                    <label class="checkbox" for="terms">I’ve read and accept the <a target="_blank" href="terms-and-conditions.html">terms &amp; conditions</a> <span class="required">*</span></label>
                                                    <input type="hidden" value="1" name="terms-field">
                                                </p>

                                                <input type="submit" data-value="Place order" value="Place order" disabled id="place_order" class="button alt">
                                            </div>
                                        </div>
                                    </div> -->
                                </form>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div>
            @else
            <div> <h2 style="margin-top: 150px; margin-bottom:200px; color: red"><center>Your Cart is empty.</center></h2></div>
            @endif
            </div>

            @include('layouts/footer')