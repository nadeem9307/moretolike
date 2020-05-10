<section class="mobile_here_no diff_class_cart_sec">
        <div class="page home page-template-default">
      <div class="container content mrgtp12-- slide_cart_content ">
         <!---user registration--> 
         <div class="row storelist">
            <ul class="top-link">
               <li><a href="javascript:void(0);" class="back_to_slide">Back</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="javascript:void(0);">Cart</a></li>
               <!--  <li><i class="fa fa-angle-right"></i></li>
                  <li><a href="" class="top-link-btn">Headphones</a></li>
                  <li><i class="fa fa-angle-right"></i></li>
                   <li><a href="">Ultra Wireless S50 Headphones S50 with Bluetooth</a></li> -->
            </ul>
         </div>
         <div class="bsfwee_mjko">
<!--
            <div class="row">
               <div class="col-12">
-->
                  <div class="table-responsive mrgtp12--">
                  <form method="post" id="updateCartForm" action="/cart/update-cart">
                     {{ csrf_field() }}
                     <table class="table table-striped hera__ad_cksdy">
                        <thead>
                           <tr class="cart_slider_head">
                              <th scope="col">Product</th>
                             <!--<th scope="col"></th>-->
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col" class="">Price</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody id="cart-data">
                           @if(isset($static_data['cart']) && !empty($static_data['cart']) && (count($static_data['cart']) > 0))
                              <?php $i = 0;?>
                              @foreach($static_data['cart'] as $row)
                                 <tr>
                                    <td valign="middle" class="img_cart_table_dse"><img src="{{ getenv('URL')}}{{$row->attributes->img}}"/> 
                                     <span class="data_na_cart_cl"><a href="#" class="namepr"> {{$row->name}}</a></span>
                                     </td>
                                  
                                    <td class="pri_uyt" valign="middle">$ {{money_format('%i', $row->price)}}</td>
                                    <td class="sec_oiuj">
                                       <input type="hidden" name="id_{{$i}}" value="{{$row->id}}">
                                       <input type="number" class="select1 nbsre" name="name_{{$i}}" min="1" max="5" value="{{$row->quantity}}" style="width: 50%;">
                                    </td>
                                    <td valign="middle"> $ {{money_format('%i', $row->price*$row->quantity)}}</td>
                                    <td class="text-right dele_cart_btn_cl" valign="middle"><a class="btn btn-sm btn-danger" onclick="removeCart({{$row->id}},{{$row->quantity}},{{$row->price}},{{$static_data['getTotlaQty']}},{{$static_data['getSubTotal']}})" id="{{$row->id}}"><i class="fa fa-trash wht"></i> </a> </td>
                                 </tr>
                                 <?php $i++; ?>
                              @endforeach
                           @else
                           <tr>
                              <td colspan="6">
                                 <b>There is no data in cart...</b>
                              </td>
                           </tr>
                           @endif
                        </tbody>
                         
                     </table>
                  </div>
               </div>
               <div class="col mb-2">
                  <div class="row">
                     <div class="col-sm-12  col-md-6 hera__ad_cksdy">
                        <!-- <form method="get" action="https://moretolike.com/user-register"> -->
                         <h4>Apply Coupon</h4>
                           <div class="input-group ma__sjshtop_o">
                                 
                              <input type="email" class="form-control subs" placeholder="Coupon Code">
                              <span class="input-group-btn">
                              <button class="btn btn-theme btn-subs" type="submit">Apply Coupon</button>
                              </span> 
                           </div>
                        <!-- </form> -->
                     </div>
                   <!--   <div class="col-sm-12 col-md-3 text-right">
                        <input type="submit" class="btn btn-theme btn-subs" value="Update Cart">
                     </div> -->
                 <!--     <div class="col-sm-12 col-md-3 text-right">
                        @if(Session::has('user_id'))
                           <a class="btn btn-warning btn-subs1" href="/beta-checkout">Proceed to Checkout</a>
                        @else
                           <a class="btn btn-warning btn-subs1" data-toggle="modal"  data-target="#exampleModal">Proceed to Checkout</a>
                        @endif
                     </div> -->
                     <div class="col-md-6 pr-0">
                      
                         <div class="hera__ad_cksdy">
                           <form>
                      
                              <h4>Cart Totals</h4>
                         
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                 <tbody class="t_body_h_re">
                                    <tr class="">
                                       <th width="50%">Subtotal</th>
                                       <td width="50%"><b>$ {{money_format('%i', $static_data['getSubTotal'])}}</b></td>
                                    </tr>
                                    <tr class="">
                                       <th width="50%">Shipping</th>
                                       <td width="50%"><b>$300.00 </b><span class="calculate"><a href="">Calculate Shipping</a></span></td>
                                    </tr>
<!--
                                    <tr class="borders">
                                       <td width="70%" height="40"></td>
                                       <td width="30%"></td>
                                    </tr>
-->
                                    <tr class="basw__nsbdfr">
                                       <th width="50%">Total</th>
                                       <td width="50%"><h5>$ {{money_format('%i', $static_data['getSubTotal']+300)}}</h5></td>
                                    </tr>
                                    <tr class="use_al_sec">
                                          <td class=""> 
                                           <input style="background-color: #fed700;" type="button" class="btn" value="Update Cart" onclick="update_cart();"></td>
                                        <td>
                                             @if(Session::has('user_id'))
                                                <a class="btn" href="/beta-checkout" style="background-color: #333e48;">Proceed to Checkout</a>
                                             @else
                                                <a class="btn" style="background-color: #333e48;" data-toggle="modal"  data-target="#exampleModal">Proceed to Checkout</a>
                                             @endif
                                        </td>
                                    </tr>
                                 </tbody>
                              </table>
                               
                               
                               
                               
                              </form>
                           </div>
                        </div>
                     </div>
                        </div>
                         </div>
                     </div>
                  
           
         <!---user registration-->  
<!--
      </div>
    </div>
-->
   </section>