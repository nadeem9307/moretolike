<?php
use \App\Http\Controllers\HomeController;
?>
@include('frontend/include/header')
   </div>
      <hr>
<div class="container content mrgtp">
  <!--list profile-->
  <div class="row">
      <ul class="top-link">
        <li><a href="">Home</a></li>
        <li><i class="fa fa-angle-right"></i></li>
         <li><a href="" class="top-link-btn">shop</a></li>
         <li><i class="fa fa-angle-right"></i></li>
           <li><a href="">My Loved Collection</a></li>
      </ul>
    </div>
	<div class="row shop-margin">
		<div class="col-md-3 ajax_search">
			@include('frontend/include/left_side_filter')
        </div>
        <!--left menu end-->
        <div class="col-md-9">
            <h2>My Collection</h2>
            <!--small>Showing 1–15 of 20 results</small-->
            <div class="row">
                <div class="col-sm-12">
                    <ul class="search-shop">
                        <li>
                            <input type="text" class="form-control" placeholder="Search product..." id="keywords" name="s" value="">
							 <input type="hidden" id="pageName" value="collection">
                        </li>
                        <li>
                            <select name="sort_by" id="sort_by" class="form-control">
                                <option value="" selected="selected">Default Sorting</option>
                                <option value="new">Short by Newness</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="price-asc">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </li>
                        <li>
                            <select name="per_page" id="per_page" class="form-control per_page">
                                <option value="-1" selected="selected">Show All</option>
                                <option value="5">Show 5</option>
                                <option value="10">Show 10</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row filteted_row" style="margin:auto; margin-bottom: 30px;">
			{{--@include('frontend/include/filtered_product')--}}
            </div>
        </div>
        <!--right shop section-->
    </div>

    </div>
    <!---Recomended Product-->
    <section style="margin-bottom: 40px;">

        <div class="container-fluid">
            <div class="row tabmenu-line">
                <div class="col-md-12">
                    <h2 class="popular">Recommended Products</h2>
                </div>

            </div>
            <hr>
            <div id="demo1" class="is-relative">
                <div class="nav-controls">
                    <div class="button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fa fa-angle-left"></i></div>
                    <div class="button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fa fa-angle-right"></i></div>
                </div>
                <div class="no-padding my-5 products-carousel swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-1325px, 0px, 0px); transition-duration: 0ms;">
                        
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="javascript:void(0);">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="6" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                       
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-cart-large add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="4" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="5" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="6" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-cart-large add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 210.833px; margin-right: 10px;">
                            <div class="product-width">
                                <div class="col-item">
                                    <div class="col-header">
                                        <div class="price-top">
                                            <h5><i class="fa fa-barcode"></i> My Store</h5>
                                        </div>
                                        <div class="price-right">
                                            <h5><i class="ec ec-compare"></i> Compare</h5>
                                        </div>
                                    </div>
                                    <div class="col-info">
                                        <div class="price-name">
                                            <h5>Camra</h5>
                                        </div>
                                        <div class="price-detail">
                                            <h3><a href="product-detail.html">Purple NX Mini f1 aparat SMARRT NX</a></h3>
                                        </div>
                                    </div>
                                    <div class="photo hovereffect">
                                        <a href="product-detail.html"><img src="{{asset('assets/images/dish.png')}}" class="img-responsive" alt="a"></a>
                                        
                                    </div>
                                    <div class="info">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <h5 class="price-text-color"> $199.99</h5>
                                                <del><span class="amount">$125</span></del>
                                            </div>
                                            <div class="rating hidden-sm">
                                                <span class="wrapper1">
                              <a href="#">
                               <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                </a>
                                                <span class="tooltip">Add To Cart</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                            <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </section>
    
	</div>
    @include('frontend/include/footer')
	@if($data['page'] == 'ajax')
		<script>
			$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>');
			$(document).ready(function(){
				filter_data();
			});
		</script>
	@endif