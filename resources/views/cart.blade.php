
@include('frontend/include/header')
<section class="mobile_here_no">
<div class="page home page-template-default">
<div id="content" class="site-content" tabindex="-1">
            	<div class="container">

            		<nav class="woocommerce-breadcrumb"><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cart</nav>

            		<div id="primary" class="content-area">
            			<main id="main" class="site-main">
            				<article class="page type-page status-publish hentry">
            					<header class="entry-header">
                                 <div class="row">
                                       <div class="col-md-6" style="text-align: left;"> <h1 itemprop="name" class="entry-title">Cart</h1>
                                   </div>
                                   <div class="col-md-6" style="text-align: right;">
                                    <a href="{{ url()->previous() }}"><input type="button btn btn-primary"  value="Continue Shopping" name="action" class="button"></a></div>
                                 </div>

                                 </header><!-- .entry-header -->

                                     @if(count($cart) > 0)
                                <form method="post" action="/cart/update-cart">
                                     {{ csrf_field() }}
                                    <table class="shop_table shop_table_responsive cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $items)
                                            <tr class="cart_item">

                                                <td class="product-remove">
                                                    <a class="remove-item" href="remove-cart-item/{{$items->id}}/1">×</a>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="javascript:void(0)"><img width="180" height="180" src="{{getenv('URL')}}{{$items->attributes['img']}}" alt=""></a>
                                                </td>

                                                <td data-title="Product" class="product-name">
                                                    <a href="javascript:void(0)">{{$items->name}}</a>
                                                </td>

                                                <td data-title="Price" class="product-price">
                                                    <span class="amount">${{$items->price}}</span>
                                                </td>

                                                <td data-title="Quantity" class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" id="minus_{{$count}}" onclick="updateQty('minus',{{$count}})" class="minus" value="-">
                                                        <label>Quantity:</label>
                                                        <input type="hidden" name="id_{{$count}}" value="{{$items->id}}">
                                                        <input type="text" size="4" class="input-text qty text" title="Qty" min="1" max="100" id="qty_{{$count}}" value="{{(int)$items->quantity}}" name="name_{{$count}}" max="29" min="0" step="1" onkeypress="return isNumberKey(event)">
                                                    <input type="button" id="plus_{{$count}}" onclick="updateQty('plus',{{$count}})" class="plus" value="+">
                                                    </div>
                                                </td>

                                                <td data-title="Total" class="product-subtotal">
                                                   @if(isset($session)&& !empty($session))
                                                    <span class="amount">
                                                        ${{Cart::session($session)->get($items->id)->getPriceSum()}}</span>
                                                       
                                                        @else
                                                        <span class="amount">
                                                        ${{Cart::get($items->id)->getPriceSum()}}</span>
                                                        @endif
                                                </td>
                                            </tr>
                                          <?php  $count++; ?>
                                            @endforeach
                                            <tr>
                                                <td class="actions" colspan="6">

                                                    <!-- <div class="coupon">

                                                        <label for="coupon_code">Coupon:</label> <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">

                                                    </div> -->

                                                    <input type="submit" value="Update Cart" name="action" class="button">

                                                    <div class="wc-proceed-to-checkout">
                                                         @if($session != '')
                                                        <a class="checkout-button button alt wc-forward" href="/checkout">Proceed to Checkout</a>
                                                         @else 
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Proceed to Checkout</a>
                                                     @endif
                                                    </div>

                                                    <input type="hidden" value="1eafc42c5e" name="_wpnonce"><input type="hidden" value="/electro/cart/" name="_wp_http_referer">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </form>
            					<div class="cart-collaterals">

                                    <div class="cart_totals ">

                                        <h2>Cart Totals</h2>

                                        <table class="shop_table shop_table_responsive">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th><h5>Subtotal</h5></th>
                                                    <td data-title="Subtotal"><span class="amount"><h5>${{$getSubTotal}}</h5></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th><h5>Total</h5></th>
                                                    <td data-title="Total"><strong><span class="amount"><h5>${{$getTotal}}</h5></span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="wc-proceed-to-checkout">

                                            <a class="checkout-button button alt wc-forward" href="checkout.html">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <table class="shop_table shop_table_responsive cart">
                                        Your cart is empty.
                                    </table>
                                    @endif
            				</article>
            			</main><!-- #main -->
            		</div><!-- #primary -->
            	</div><!-- .container -->
            </div>
            </div>
</section>
           @include('frontend/include/footer')