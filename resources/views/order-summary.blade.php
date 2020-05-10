@include('single-product-sections/header')
<div class="page home page-template-default">
 <div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <nav class="woocommerce-breadcrumb"><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Orders  </nav>
        <div id="primary" class="content-area">
          <main id="main" class="site-main">


            @foreach($order_list as $order_list)
              <div class="row brd">
               <!--  <div class="heading">
                  <div class="row">
                      <div class="col-md-8"> <span class="btn btn-secondary">order id no</span></div>
                      <div class="col-md-2"> <span class="btn btn-secondary">Need Help</span></div>
                      <div class="col-md-2"> <span class="btn btn-secondary">Track</span></div>
                  </div>
                </div>-->
                <?php $attributes = json_decode($order_list->product_attributes); ?>


                  <div class="row">
                    <div class="col-md-3">
                      <table class="shop_table shop_table_responsive cart">
                          <tbody>
                            <tr class="cart_item">
                              <td class="product-thumbnail">
                                <b> Order id: <a href="/order-details/{{ $order_list->order_no}}">{{ $order_list->order_no}}</a></b>
                              </td> 
                            </tr>
                          </tbody>
                      </table>
                    </div> 
                    <div class="col-md-2 ">
                      <table class="shop_table shop_table_responsive cart">
                          <tbody>
                            <tr class="cart_item">
                              <td class="product-thumbnail">
                                  <a href="product-details/{{$order_list->slug}}"><img width="180" height="180" src="{{getenv('URL')}}{{$attributes->img}}" alt=""></a>
                              </td> 
                            </tr>
                          </tbody>
                      </table>
                    </div> 
                    <div class="col-md-7">
                       <table class="shop_table shop_table_responsive cart">
                          <tbody>
                            <tr class="cart_item">
                              <td data-title="Product" class="product-name">
                                  <a href="product-details/{{$order_list->slug}}">{{$order_list->product_name}}</a>
                              </td>

                              <td data-title="Price" class="product-price">
                                  <span class="amount">{{$order_list->quantity}}X{{$order_list->product_price}}</span>
                              </td>

                              <?php  $deliver_date =  date('D d F, Y', strtotime($order_list->deliver_date)) ;?>
                              <td data-title="Delivered" class="product-subtotal">
                                  <span class="amount">Delivered on {{$deliver_date}} </span>
                              </td>
                            </tr>

                         <tr class="cart_item">
                              <td data-title="Product" class="product-name">
                              	@if(isset($attributes->color))
                                  <span> Color:  <input type="color" id="body" name="color" value="{{$attributes->color}}" disabled="" /> <br><br>Seller: {{$order_list->f_name}} {{$order_list->l_name}} </span>
                                @endif
                                </td>

                                <td data-title="OFFERS" class="product-price">
                                    <!-- <span class="amount">OFFERS:1 </span> -->
                                </td>
                                <td data-title="Return policy" class="product-subtotal">
                                   <!--  <span class="amount">Return policy ended on Jun 19th '18</span> -->
                                </td>
                            </tr>
                        </tbody>
                      </table>    
                    </div>
                  </div>
             
              <!--<div class="row">
                  <div class="refund brd">
                      <span class="col-md-6"><h5>Refund Status</h5></span>
                      <span class="col-md-6 alrtsa"><a href="#">View Detail</a></span>
                      <div class="clearfix"></div>
                      <div class="col-md-12 bgs">
                      
                        <table class="shop_table shop_table_responsive cart">
                          <tbody>
                            <tr class="cart_item">
                                <td data-title="Product" class="product-name">
                                    <a href="">Refund To: Original payment mode </a>
                                </td>
                                <td data-title="Price" class="product-price">
                                  <span class="amount">$ 494.0</span>
                                </td>
                                <td data-title="Delivered" class="product-subtotal">
                                    <span class="amount">$ 494.0 as refund will be transferred to your Original payment mode within 6 business days (Bank holidays not included).</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                              <td data-title="Product" class="product-name"><a href="">Refund ID:124793731</a></td>
                              <td class="cart_item"></td>
                              <td class="cart_item"></td>
                            </tr>
                            <tr class="cart_item">
                              <td data-title="Product" class="product-name">
                                <a href="">COMPLETED</a>
                              </td>
                              <td class="cart_item"></td>
                              <td class="cart_item"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                </div> -->
              </div> <br>
            @endforeach
          </main><!-- #main -->
        </div>
    </div>
    </div>
  </div>
           @include('layouts/footer')