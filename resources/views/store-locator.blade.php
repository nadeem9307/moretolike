@include('single-product-sections/header')





<div class="page home page-template-default">
	<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>
                    	<a href="javascript:void(0)">Store Locator</a>
                    	
                    </nav>

                    <div class="site-content-inner">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <img src="{{getenv('URL')}}/map.png">
                            </main>
                        </div>
                    </div>

                </div><!-- .container -->
            </div>
</div>
 
           @include('layouts/footer')