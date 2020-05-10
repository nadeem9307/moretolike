@include('frontend/include/header')

<div class="page home page-template-default cus_pro_des_sm">
	<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        
        
        

<div id="crumbs">

	<ul>
		<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
		<li><a href="/customer"><i class="fa fa-shopping-bag" aria-hidden="true"></i> My Orders</a></li>
<!--		<li><a href="#3"><i class="fa fa-cart-plus" aria-hidden="true"></i> My Orders</a></li>-->
		<li><a href="/order-details/{{$order_details[0]->order_no}}">
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i> {{$order_details[0]->order_no}}</a>
        </li>
		
	</ul>
</div>
        
        

        
        
        
        
        
<!--
      <nav class="woocommerce-breadcrumb f__wed_c__de">
        <a href="/">Home</a>
          <span class="delimiter"><i class="fa fa-angle-right"></i></span>  
          <a href="/customer">My Orders</a>
          <span class="delimiter"><i class="fa fa-angle-right"></i></span>   
          <a href="/order-details/{{$order_details[0]->order_no}}">{{$order_details[0]->order_no}}</a>
      </nav>
-->
      <div id="primary" class="content-area">
        <main id="main" class="site-main">

       
            <div class="row brd">

              <div class="col-lg-4 col-md-6 col-sm-12 bg__imsh__sw">
                <table class="cu_ore_de_tab" width="100%" border="0">
                    
                    <thead>
                       <tr>
                      <td colspan="2"><strong>ORDER DETAILS</strong></td>
                    </tr>
                    </thead>
                    
                    <tbody>
                     
                    <tr>
                      <td><strong>Order ID </strong></td>
                       <td>{{$order_details[0]->order_no}}
                       <b>({{count($order_details)}} items) </b></td>
                    </tr>
                    <tr>
                      <td><strong>Order Date </strong></td>
                      <td> <?php  $deliver_date =  date('D d F, Y', strtotime($order_details[0]->order_date)) ;?>
                            {{ $deliver_date}}
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Total Amount </strong></td>
                      <td>${{ $order_details[0]->total_amount }} + Shipping Charge $300 through COD</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 bg__imsh__sw">
                <table class="cu_ore_de_tab" width="100%" border="0" >
                    <thead>
                      <tr>
                      <td colspan="2"><strong>COMMUNICATION</strong></td>
                    </tr>
                    </thead>
                  <tbody>
                   
<!--
                    <tr>
                        <td><strong>{{ $order_details[0]->billing_phone }}  {{ $order_details[0]->billing_company }}   </strong></td>
                    </tr>
-->
                       <tr>
                        <td><strong>Email</strong></td>
                        <td>demo@gmail.com</td>
                    </tr>
                      
                    <tr>
                        <td><strong>Address</strong></td>
                        <td> {{ $order_details[0]->billing_address_1 }}  {{ $order_details[0]->billing_address_2 }} {{ $order_details[0]->billing_city }}  {{ $order_details[0]->billing_postcode }}  {{ $order_details[0]->billing_postcode }}  {{ $order_details[0]->country_name }}</td>
                    </tr>
                    <tr>
                        <td> <strong>Phone</strong></td>
                        
                      <td>
                          
                   {{ $order_details[0]->billing_phone }} &nbsp;&nbsp;&nbsp; {{ $order_details[0]->billing_company }}
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 bg__imsh__sw">
                <table width="100%" border="0" class="cu_ore_de_tab">
                    
                    <thead>
                      <tr>
                    <td colspan="2"><strong>MANAGE ORDER</strong></td>
                    </tr>
                    </thead>
                    <thead>
                       
                    </thead>
                    
                  <tbody>
                  
                    <tr>
                        <td><a href="#"> REQUEST INVOICE</a> <i class="fa fa-file-pdf-o"></i></td>
                    </tr>
                    <tr>
                      <td><a href="#">NEED HELP</a> <i class="fa fa-question-circle" aria-hidden="true"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div> 

            </div>
            
         
     <div class="cor__swe_sd_order_d">
          <div class="clearfix"></div>
          @foreach($order_details as $order_details1)
           @php $attributes = json_decode($order_details1->product_attributes); @endphp
            <div class="row brd">
            	<div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="he__catr_cma_swe">
            		<table class="shop_table shop_table_responsive cart ">
                  <tbody>
                    <tr class="cart_item">
                      <td class="product-thumbnail">
                        <a href="/product-details/{{$order_details1->slug}}"><img src="{{getenv('URL')}}{{$attributes->img}}" alt=""></a>
                      </td> 
                      <td data-title="Delivered" class="product-subtotal">
                        <span class="product-name">{{$order_details1->product_name}}</span>
                          <br>
                        
                        <span class="ctl">
                          @if(isset($attributes->color))
                          Color: <input type="color" id="body" name="color" value="{{$attributes->color}}" disabled="" /> 
                          @endif
                          @if(isset($attributes->size))
                          Size: S
                          @endif

                        </span>
                          <br>
                        <span class="ctl_sec__s">Seller: {{$order_details1->f_name}} {{$order_details1->l_name}}</span><br>
                        <span class="btn__csa"><!-- Return policy ended on Jun 19th '18 --> <a href="/product-details/{{$order_details1->slug}}">Know more</a></span> 
                      </td>
                    </tr>          
                  </tbody>
                </table>
                    </div>    
            	</div>

    			    <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="he__catr_cma_swe">
<!--
              	 <div class="row rtcmar">
                    <ol class="progtrckr" data-progtrckr-steps="4">
                      <li class="progtrckr-done">Order</li>
                      <li class="progtrckr-todo">Packed</li>
                      <li class="progtrckr-todo">Shipped</li>
                      <li class="progtrckr-todo">Delivered</li>
                    </ol>
                </div> 
-->
                        <section class="steper_wizar_cl">
                        <div class="wizard-progress">
                            <div class="step complete">
                               <span> Order </span>
                                <div class="node"></div>
                            </div>
                            <div class="step in-progress">
                                <span> Packed </span>
                                <div class="node"></div>
                            </div>
                            <div class="step in-progress">
                                <span> Shipped </span>
                                <div class="node"></div>
                            </div>
                            <div class="step in-progress">
                               <span> Delivered </span>
                                <div class="node"></div>
                            </div>
                          
                        </div>
                        </section>
                        
                <!--<div class="row ">Your item has been picked up by courier partner.</div>
                 <div class="row "> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr><td><span class="ctl">Wed, 16th May</span></td>
                          <td><span class="ctl">2:13 am</span></td>
                          <td><span class="ctl">Seller Facility</span></td>
                          <td><span class="ctl">Item has been dispatched from the seller warehouse</span></td>
                      </tr>
                   </tbody>
                  </table>
                </div>  -->
              </div>
                </div>
  			      <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="he__catr_cma_swe">
            	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody class="dee__se_ckal">
                   <tr>
                       <th>Price</th>
                      <td> $ {{ $order_details1->product_price }}  <!-- &nbsp;   &nbsp;  &nbsp; 1 Offer Applied <i class="fa fa-question-circle" aria-hidden="true"></i> --></td>
                    </tr> 
                    <tr>
                        <th>RATE & REVIEW PRRODUCT</th>
                        <td><a href="#"></a> <i class="fa fa-star"></i> <i class="fa fa-star"></i>  </td>
                    </tr>
                    <tr>
                        <th>NEED HELP</th>
                      <td><a href="#"> <i class="fa fa-question-circle" aria-hidden="true"></i></a> </td>
                    </tr>
                  </tbody>
                </table>	
            	</div>
                </div>
                <div class="col-md-12 col-sm-12 p-0" class="pa__dhh_bvft">
                    <div class="rte__soq__ac_mnk">
                        <?php  $deliver_date =  date('D d F, Y', strtotime($order_details1->deliver_date)) ;?>

                        <i class="fa fa-truck" aria-hidden="true"></i> Delivered on {{ $deliver_date }}
                    </div>
                </div>
                        


                <!--<div class="clearfix"></div>

                <div class="col-md-4 col-sm-12">
                  <table class="shop_table shop_table_responsive cart">
                    <tbody>
                      <tr class="cart_item">
                        <td class="product-thumbnail">
                          <a href="single-product.html"><img width="180" height="180" src="assets/images/products/2.jpg" alt=""></a>
                        </td> 
                        <td data-title="Delivered" class="product-subtotal">
                          <span class="product-name">Riders Men Solid Straight Kurta</span><br>
                          <span class="ctl">Color: LAVENDER Size: S</span>
                          <span class="ctl">Seller: jayfashions14</span><br>
                          <span class="ctl">Return policy ended on Jun 19th '18 <a href="#">Know more</a></span>
                        </td>
                      </tr>          
                    </tbody>
                  </table>
                </div>

                <div class="col-md-4 col-sm-12">
                 <div class="row rtcmar">
                    <ol class="progtrckr" data-progtrckr-steps="5">
                      <li class="progtrckr-done">Order</li>
                      <li class="progtrckr-done">Packed</li>
                      <li class="progtrckr-todo">Shipped</li>
                      <li class="progtrckr-todo">Delivered</li>
                    </ol>
                 </div>
                 <div class="row ">Your Order has been placed.</div>
                 <div class="row ">
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td><span class="ctl">Mon, 14th May</span></td>
                          <td><span class="ctl">12:20 pm</span></td>
                          <td><span class="ctl">Item cancelled by you</span></td>
                        </tr>
                      </tbody>
                    </table>
                 </div>   
                </div>

                <div class="col-md-4 col-sm-12">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                      <td>$ 588  &nbsp;   &nbsp;  &nbsp; 1 Offer Applied <i class="fa fa-question-circle" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                      <td><a href="#">RATE &amp; REVIEW PRODUCT <i class="fa fa-star" aria-hidden="true"></i></a> </td>
                      </tr>
                      <tr>
                      <td><a href="#">NEED HELP <i class="fa fa-question-circle" aria-hidden="true"></i></a> </td>
                      </tr>
                    </tbody>
                  </table>  
                </div>
          
                <div class="col-md-12">
                  <del><i class="fa fa-truck" aria-hidden="true"></i> Delivered on Sun, May 20th '18</del>
                </div>-->

            <!--   <div class="col-md-12">
                <div class="refund"> <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>REFUNDCOMPLETED</strong>
                  $ 494.0 as refund will be transferred to your Original payment mode within 6 business days (Bank holidays not included).
                </div>
              </div> -->
          
          </div>
          @endforeach
           </div>
          <div class="clearfix"></div>
          <!--Order Detail Close-->
        </main>
        <!-- #main -->
      </div>
      <!-- #primary -->
    </div>
    <!-- .container -->
  </div>
</div>

@include('frontend/include/footer')