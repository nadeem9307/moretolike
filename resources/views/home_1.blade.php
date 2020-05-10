
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="https://moretolike.com/css/style_cart.css" media="all" />
@include('home-sections.menu-slider')


        <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="home-v1-slider" >

                            	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            		<?php
                            			$i=1;
                            		?>
                            		@foreach($top_banner as $tb)
                            		<div class="item" style="background-image: url(images/banner/banner-{{$i}}.jpg);">
                            			<div class="container">
                            				<div class="row">
                            					<div class="col-md-offset-3 col-md-5">
                            						<div class="caption vertical-center text-left">
                            							<div class="hero-1 fadeInDown-1">
                            								{!!$tb->banner_title!!}
                                                            
                            							</div>

                            							<div class="hero-subtitle fadeInDown-2">
                            								{!!$tb->sub_title!!}
                            							</div>
                            							<div class="hero-v2-price fadeInDown-3">
                            								from <br><span>$749</span>
                            							</div>
                            							<div class="hero-action-btn fadeInDown-4">
                            								<a href="{{$tb->redirect_url}}" class="big le-button ">Start Buying</a>
                                                            <a class="cd-add-to-cart btn" data-price="25.99">Add To Cart</a>
                            							</div>
                            						</div><!-- /.caption -->
                            					</div>
                                                <!-- <div class="col-md-offset-3 col-md-5" style=" position: absolute; top: 20px; right: 0px;">
                                                    <img src="{{getenv('URL')}}{{$tb->banner_img}}" width="300" alt="" />
                                                </div> -->
                            				</div>
                            			</div><!-- /.container -->
                            		</div><!-- /.item -->
                            		<?php 
                            			$i++;
                            		?>
                            		@endforeach

                            

                            	</div><!-- /.owl-carousel -->

                                <!-- ========================================= SECTION – HERO : END ========================================= -->

                            </div><!-- /.home-v1-slider -->
                            
                            <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<div class="ads-block row">
                                    @foreach($top_sub_banner as $ts)
                            		<div class="ad col-xs-12 col-sm-4">
                            			<div class="media">
                            				<div class="media-left media-middle">
                            					<img data-echo="{{getenv('URL')}}{{$ts->banner_img}}" src="{{getenv('URL')}}{{$ts->banner_img}}" alt="">
                            				</div>
                            				<div class="media-body media-middle">
                            					<div class="ad-text">
                            						{!!$ts->banner_title!!}
                            					</div>
                            					<div class="ad-action">
                            						<a href="#">{!!$ts->sub_title!!}</a>
                            					</div>
                            				</div>
                            			</div>
                            		</div>
                                    @endforeach
                            </div>
       



							<div class="cd-cart-container empty">
							<a href="#0" class="cd-cart-trigger">
							Cart
							<ul class="count"> 
							<li>0</li>
							<li>0</li>
							</ul> 
							</a>
							<div class="cd-cart">
							<div class="wrapper">
							<header>
							<h2>Cart</h2>
							<span class="undo">Item removed. <a href="#0">Undo</a></span>
							</header>
							<div class="body">
							<ul>

							</ul>
							</div>
							<footer>
							<a href="#0" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
							</footer>
							</div>
							</div> 
							</div> 
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
							<script>
							    if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
							</script>
                           @include('home-sections.deals-and-tabs')

                            <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
                            @include('home-sections.products-grid')
                            <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->

                           @include('home-sections.best-sellers')
                           <!-- Category Wise Product -->

                            @include('home-sections.category_1')
                            @include('home-sections.category_2')
                            @include('home-sections.category_3')
                            @include('home-sections.category_4')

                           <!-- /Category Wise Product -->

                            <div class="home-v1-banner-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<div class="home-v1-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                            		<a href="#"><img src="{{getenv('URL')}}{{$top_bottom_banner->banner_img}}" data-echo="{{getenv('URL')}}{{$top_bottom_banner->banner_img}}" class="img-responsive" alt=""></a>
                            	</div>
                            </div><!-- /.home-v1-banner-block -->
                            @include('home-sections.on-sales')
                            @include('home-sections.recently-added')

                           
                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .container -->
        </div>
@include('home-sections.brands-carousel')
@include('home-sections.footer-widgets')
@include('layouts.footer')


          