@include('single-product-sections/header')





<div class="page home page-template-default">
	<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>
                    	<a href="javascript:void(0)">Track your Order</a>
                    	
                    </nav>
                    <div class="site-content-inner"><div id="primary" class="content-area"><main id="main" class="site-main"><article id="post-2181" class="post-2181 page type-page status-publish hentry"><header class="entry-header"><h1 class="entry-title">Track your Order</h1></header><div class="entry-content"><div class="woocommerce"><form action="https://demo2.madrasthemes.com/electro/track-your-order/" method="post" class="track_order"><p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p><p class="form-row form-row-first"><label for="orderid">Order ID</label> <input class="input-text" name="orderid" id="orderid" value="" placeholder="Found in your order confirmation email." type="text"></p><p class="form-row form-row-last"><label for="order_email">Billing email</label> <input class="input-text" name="order_email" id="order_email" value="" placeholder="Email you used during checkout." type="text"></p><div class="clear"></div><p class="form-row"><button type="submit" class="button btnforall" name="track" value="Track">Track</button></p> <input id="_wpnonce" name="_wpnonce" value="8753dee06f" type="hidden"><input name="_wp_http_referer" value="/electro/track-your-order/" type="hidden"></form></div></div></article></main></div></div>

                </div><!-- .container -->
            </div>
</div>
 
           @include('layouts/footer')