@include('single-product-sections/header')
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
	.topic2{float: left;
    margin-right: 3px;
    padding-top: 6px;}
    a.collectioncl{ color: #7d7d7d!important;}
    p.close.tooltipClosesingle {
    border: 1px solid #ccc;
    padding: 4px 7px;
    border-radius: 82px;
}
.folbtn{float: right;}
.wc-tabs > li a, .ec-tabs > li a {
   font-size: 1.1em;}
   
@media (min-width: 1024px) {
    .search-w1{
      display: none; } }

}
</style>
<div class="single-product full-width">
<div id="content" class="site-content" tabindex="-1">
<div class="container">
  <nav class="woocommerce-breadcrumb"> 
    <a href="{{url('/')}}">Home</a> <span class="delimiter"><i class="fa fa-angle-right"></i></span>
    <a href="{{url('/store-list')}}">Shop List</a> <span class="delimiter"><i class="fa fa-angle-right"></i></span> 
    <a href="/store-details/{{$store_list_details->id}}">{{$store_list_details->store_name}}</a> <span class="delimiter"></span> 
  </nav>

<div  class="container shop-store">
  <div class="row" > 
      @if(isset($store_list_details->store_banner) &&!empty($store_list_details->store_banner)) 
      <img src="{{asset('uploads')}}/{{$store_list_details->store_banner}}" 
      alt="Store Banner" style="height: 190px; width:1170px " />
      @else
      <img src="{{getenv('URL')}}stor_default_banner.png" alt="Store Banner"  style="height: 190px; width:1170px "/>
      @endif
</div>
<div class="row" style="margin-top: 15px;">
    <div class="col-md-2 col-sm-5">
        <div class="logo-b"> 
          @if(isset($store_list_details->store_logo)  &&!empty($store_list_details->store_logo)) 
          <img src="{{asset('uploads')}}/{{$store_list_details->store_logo}}" 
          alt="Store Logo" style="width: 150px;" />
          @else
          <img src="{{getenv('URL')}}default_store_logo.png" alt="Store Logo"  style="width: 150px;" alt="" />
          @endif 
        </div>
    </div>

<!--karan-->
<div class="col-md-5 patm">
  <ul class="product-shop">
  <li><h3>{{$store_list_details->store_name}}</h3></li>
  <li><i class="fa fa-map-marker"></i> <span class="street_1"> {{$store_list_details->address1}}, {{$store_list_details->address2}}, {{$store_list_details->name}}, {{$store_list_details->state_name}}, {{$store_list_details->country_name}}</span></li>
<!--<li><i class="fa fa-mobile"></i> <a href="tel:9026522944">{{$store_list_details->contact_country_code}} {{$store_list_details->contact_no}}</a></li>-->
<!--<li><i class="fa fa-envelope-o"></i> <a href="mailto:testuser@gmail.com">{{$store_list_details->email}}</a></li>-->

  <li class="star-rating" title="Rated {{$avg}} out of 5"> 
  <?php  $avgwidth =  $avg*20; ?>
<span style="width:{{$avgwidth}}%"></span>
</li>                
</ul> 
</div>
<!--karan-->
<div class="col-md-5 folbtn">
<div class="folloowesbtn">
@if(Session::get('user_id'))
@if($current_follower)

<a href="javascript:void(0)" class="button2"><i class="fa fa-user"></i> Follow Store</a>
<a href="javascript:void(0)" class="button2" data-toggle="modal" data-target="#suppotModel">Get Store Support</a>
</div>
@else

<div id="followed" >
<a href="javascript:void(0)" class="button2" onclick="follow_store({{Session::get('user_id')}}, {{$store_list_details->id}})"><i class="fa fa-user"></i> Following store</a>
</div>
@endif
@else
<div class="followed1">
<a href="javascript:void(0)" id="follow" class="button2" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user" ></i> Follow Store</a>
</div>
@endif

<div class="followed2">
@if(Session::get('user_id'))


@else
<a href="javascript:void(0)" class="button2" data-toggle="modal" data-target="#myModal">Get Store Support</a>
@endif
</div>
<div class="shop-search">
<!-- <form role="search" method="post" class="search-form" action="#"> -->

<label>
  <span class="screen-reader-text">Search for:</span>
  <!-- <input type="text" id="store_id" name="store_id"  value="{{$store_list_details->id}}"> -->

  <input type="text" class="search-field search-w" placeholder="Search product on this store..." id="search_text" name="search_text" onkeyup="get_search_product({{$store_list_details->id}});" value="">

</label> 

<!--  </form> -->
</div>
</div>

</div>
<div class=" col-sm-12 logo-name">
  <ul class="product-shop1">
<li><h3>{{$store_list_details->store_name}}</h3></li>
<li><i class="fa fa-map-marker"></i> <span class="street_1"> {{$store_list_details->address1}}, {{$store_list_details->address2}}, {{$store_list_details->name}}, {{$store_list_details->state_name}}, {{$store_list_details->country_name}}</span></li>
<!--<li><i class="fa fa-mobile"></i> <a href="tel:9026522944">{{$store_list_details->contact_country_code}} {{$store_list_details->contact_no}}</a></li>-->
<!--<li><i class="fa fa-envelope-o"></i> <a href="mailto:testuser@gmail.com">{{$store_list_details->email}}</a></li>-->

<li class="star-rating" title="Rated {{$avg}} out of 5"> 
<?php  $avgwidth =  $avg*20; ?>
<span style="width:{{$avgwidth}}%"></span>
</li>                
</ul> 


<!-- modal support -->
  <div class="modal fade" id="suppotModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
    <style type="text/css">
      .form-group{
        padding: 0px;
      }
      .form-control{
        border: 1px solid #ccc;
      }
      .tab-content{
        background: #fff;
      }
    </style>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create a new support topic</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                 <form action="/add-support-ticket" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="customer_id" value="{{Session::get('user_id')}}">
                  <input type="hidden" name="shop_id" value="{{$store_list_details->id}}">
                  <input type="hidden" name="vendor_id" value="{{$vendor_id}}">
                    <div class="form-group">
                      <label for="subject">Subject : </label>
                      <input type="subject" class="form-control" id="subject" name="subject" placeholder="Missing Item">
                    </div>
                    <div class="form-group">
                      <label for="order_id">Order Id : </label>
                      <select name="order_id" id="order_id" class="form-control">
                        @if(is_object($customer_orders))
                          @foreach($customer_orders as $row)
                            <option value="{{$row->order_no}}">{{$row->order_no}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message">Message : </label>
                      <textarea class="form-control" name="message" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                 </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
<!-- /modal support -->

</div>

</div>

<div id="primary" class="content-area" style="margin-top: 50px;">
<main id="main" class="site-main">
<div class="product">
<div class="woocommerce-tabs wc-tabs-wrapper">
  <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
    <li class="nav-item accessories_tab"> <a href="#tab-accessories" class="active" data-toggle="tab">Products (200)</a> </li>
    <li class="nav-item description_tab"> <a href="#tab-description" data-toggle="tab">Collections (30)</a> </li>
    <li class="nav-item reviews_tab"> <a href="#tab-followes" data-toggle="tab">Followers ({{count($follower_list)}})</a></li>
    <li class="nav-item specification_tab"> <a href="#tab-specification" data-toggle="tab">Store Info</a> </li>
    <li class="nav-item specification_tab"> <a href="#tab-blog" data-toggle="tab">My Blog</a> </li> 
    <li class="nav-item reviews_tab"> <a href="#tab-reviews" data-toggle="tab">Reviews</a> </li> 
    <li class="nav-item reviews_tab search-tab">
      <input type="text" class="search-field search-w search-tab" placeholder="Search product on this store..." id="search_text" name="search_text" onkeyup="get_search_product({{$store_list_details->id}});" value=""></li>

    <li class="nav-item reviews_tab"> 
      <select name="drp_search" id="drp_search" class=" form-control orderby search-field search-w" onchange="get_search_product({{$store_list_details->id}});">
        <option value="" selected="selected">Select Categaries</option>
        <option value="new">Short by Newness</option>
        <option value="popularity">Sort by popularity</option>
        <option value="rating">Sort by average rating</option>
        <option value="price-asc">Sort by price: low to high</option>
        <option value="price-desc">Sort by price: high to low</option>
      </select>
    </li>
     <li class="nav-item reviews_tab"> 
      <select name="drp_search" id="drp_search" class=" form-control orderby search-field search-w search-w1" onchange="get_search_product({{$store_list_details->id}});">
        <option value="" selected="selected">Select Categaries</option>
        <option value="new">Short by Newness</option>
        <option value="popularity">Sort by popularity</option>
        <option value="rating">Sort by average rating</option>
        <option value="price-asc">Sort by price: low to high</option>
        <option value="price-desc">Sort by price: high to low</option>
      </select>
    </li>
</ul>

<div class="tab-content">
<div class="tab-pane panel entry-content wc-tab active" id="tab-accessories">
<div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
  <input type="serach" name="q" id="myInput" class="form-control" placeholder="Search for products">
<ul class="products columns-3 list-of-posts" id="product_view">
<div class="container">
	<div class="row">
		<div class="tabs-block col-lg-12">
              <div class="products-carousel-tabs">
             
                <div class="tab-content">
                  <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                    <div class="woocommerce columns-4">
                      <ul class="products columns-4 ">
                        <li class="product " >
                          <div class="product-outer" >
                            <div class="product-inner"> 
                            	<span class="loop-product-categories">
								<span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="single" class="show-single" data-toggle="tooltip_s3single" data-html="true" title="<div class='tooltip_1'><p  productid='single' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
			                  <span class=""><a href="javascript:void(0);" class="show-single" productid="single">
			                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
			                  <!--tooltip-->
			                  
			                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_45" onclick="compare(45)">Compare</a>
			                                        <span id="added_compare_deal_45" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
			                </span>
                            	</span> 
							<p class="mystorep">Cameras</p>
                            	<a href="">
                              <h3>Wireless Audio System Multiroom 360</h3>

                           <div class="product-thumbnail">
                        <img src="https://admin-api.moretolike.com/uploads/fb6445b978ea61446313a6a100a55279.jpg" id="best_seller45" alt="">
                    </div>
                              </a>
                              <div class="price-add-to-cart">
			                    <span class="price">
			                        <span class="electro-price" style="position: relative;">
			                            <ins><span class="amount"> $18999</span></ins>
			                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$19999</span></del>
			                            <span class="amount"> </span>
			                        </span>
			                    </span>
                 
			                       <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome(24,'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
			                        <div class="line"></div>
			                        <span>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">3</a>

				                        <span class="wrappert-sngle">
				                            <div class="tooltip">Add To Collection</div>
				                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span>  Collection</a>
				                        </span>
                                                              
               					 		</span></div>
                              <!-- /.price-add-to-cart -->
                              <div class="hover-area" style="border: none;">
                               <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="#" style="color:white !important;"> Quick View</a></span>
                              </div>
                            </div>
                            <!-- /.product-inner --> 
                          </div>
                          <!-- /.product-outer --> 
                        </li>
                        <!-- /.products -->
                        
                        <li class="product " >
                          <div class="product-outer" >
                            <div class="product-inner"> 
                            	<span class="loop-product-categories">
								<span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="single1" class="show-single" data-toggle="tooltip_s3single1" data-html="true" title="<div class='tooltip_1'><p  productid='single1' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
			                  <span class=""><a href="javascript:void(0);" class="show-single" productid="single1">
			                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
			                  <!--tooltip-->
			                  
			                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_45" onclick="compare(45)">Compare</a>
			                                        <span id="added_compare_deal_45" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
			                </span>
                            	</span> 
							<p class="mystorep">Cameras</p>
                            	<a href="">
                              <h3>Wireless Audio System Multiroom 360</h3>

                           <div class="product-thumbnail">
                        <img src="https://admin-api.moretolike.com/uploads/fb6445b978ea61446313a6a100a55279.jpg" id="best_seller45" alt="">
                    </div>
                              </a>
                              <div class="price-add-to-cart">
			                    <span class="price">
			                        <span class="electro-price" style="position: relative;">
			                            <ins><span class="amount"> $18999</span></ins>
			                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$19999</span></del>
			                            <span class="amount"> </span>
			                        </span>
			                    </span>
                 
			                       <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome(24,'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
			                        <div class="line"></div>
			                        <span>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">3</a>

				                        <span class="wrappert-sngle">
				                            <div class="tooltip">Add To Collection</div>
				                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span>  Collection</a>
				                        </span>
                                                              
               					 		</span></div>
                              <!-- /.price-add-to-cart -->
                              <div class="hover-area" style="border: none;">
                               <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="#" style="color:white !important;"> Quick View</a></span>
                              </div>
                            </div>
                            <!-- /.product-inner --> 
                          </div>
                          <!-- /.product-outer --> 
                        </li>
                        <!-- /.products -->

                        
                     <li class="product " >
                          <div class="product-outer" >
                          <div class="product-inner"> 
                            	<span class="loop-product-categories">
								<span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="single2" class="show-single" data-toggle="tooltip_s3single2" data-html="true" title="<div class='tooltip_1'><p  productid='single2' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
			                  <span class=""><a href="javascript:void(0);" class="show-single" productid="single2">
			                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
			                  <!--tooltip-->
			                  
			                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_45" onclick="compare(45)">Compare</a>
			                                        <span id="added_compare_deal_45" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
			                </span>
                            	</span> 
							<p class="mystorep">Cameras</p>
                            	<a href="">
                              <h3>Wireless Audio System Multiroom 360</h3>

                           <div class="product-thumbnail">
                        <img src="https://admin-api.moretolike.com/uploads/fb6445b978ea61446313a6a100a55279.jpg" id="best_seller45" alt="">
                    </div>
                              </a>
                              <div class="price-add-to-cart">
			                    <span class="price">
			                        <span class="electro-price" style="position: relative;">
			                            <ins><span class="amount"> $18999</span></ins>
			                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$19999</span></del>
			                            <span class="amount"> </span>
			                        </span>
			                    </span>
                 
			                       <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome(24,'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
			                        <div class="line"></div>
			                        <span>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">3</a>

				                        <span class="wrappert-sngle">
				                            <div class="tooltip">Add To Collection</div>
				                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span>  Collection</a>
				                        </span>
                                                              
               					 		</span></div>
                              <!-- /.price-add-to-cart -->
                              <div class="hover-area" style="border: none;">
                               <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="#" style="color:white !important;"> Quick View</a></span>
                              </div>
                            </div>
                            <!-- /.product-inner --> 
                          </div>
                          <!-- /.product-outer --> 
                        </li>
                        <!-- /.products -->
                        </li>
                        
                        <li class="product " >
                          <div class="product-outer" >
                          <div class="product-inner"> 
                            	<span class="loop-product-categories">
								<span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="single3" class="show-single" data-toggle="tooltip_s3single3" data-html="true" title="<div class='tooltip_1'><p  productid='single3' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
			                  <span class=""><a href="javascript:void(0);" class="show-single" productid="single3">
			                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
			                  <!--tooltip-->
			                  
			                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_45" onclick="compare(45)">Compare</a>
			                                        <span id="added_compare_deal_45" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
			                </span>
                            	</span> 
							<p class="mystorep">Cameras</p>
                            	<a href="">
                              <h3>Wireless Audio System Multiroom 360</h3>

                           <div class="product-thumbnail">
                        <img src="https://admin-api.moretolike.com/uploads/fb6445b978ea61446313a6a100a55279.jpg" id="best_seller45" alt="">
                    </div>
                              </a>
                              <div class="price-add-to-cart">
			                    <span class="price">
			                        <span class="electro-price" style="position: relative;">
			                            <ins><span class="amount"> $18999</span></ins>
			                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$19999</span></del>
			                            <span class="amount"> </span>
			                        </span>
			                    </span>
                 
			                       <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome(24,'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
			                        <div class="line"></div>
			                        <span>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">3</a>

				                        <span class="wrappert-sngle">
				                            <div class="tooltip">Add To Collection</div>
				                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span>  Collection</a>
				                        </span>
                                                              
               					 		</span></div>
                              <!-- /.price-add-to-cart -->
                              <div class="hover-area" style="border: none;">
                               <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="#" style="color:white !important;"> Quick View</a></span>
                              </div>
                            </div>
                            <!-- /.product-inner --> 
                          </div>
                          <!-- /.product-outer --> 
                        </li>
                        <!-- /.products -->
                         </ul>
                    </div>
                  </div>
                  
                 
                </div>
              </div>
            </div>
	</div>

	
</div>

</ul>
</div>
<div class="pagination"></div>
</div>

<div class="tab-pane  in panel entry-content wc-tab" id="tab-description">
  <!--karan-->
<div class="electro-description">
  <div class="row" id="collection_details">
    @if(isset($collection) && !empty($collection))
      @foreach($collection as $row)
        
        <!-- facebook -->
            <!-- You can use Open Graph tags to customize link previews.
              Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
            <meta property="og:url"           content="https://{{$_SERVER['HTTP_HOST']}}{{$_SERVER['REQUEST_URI']}}" />
            <meta property="og:type"          content="website" />
            <meta property="og:title"         content="{{$row->collection_name}}" />
            <meta property="og:description"   content="{{$row->collection_name}}" />
            <meta property="og:image"         content="https://admin-api.moretolike.com/uploads/079aab26f098f9eac4c446e9bf0fff9b.jpg" />
          
        <!-- facebook -->
        <div class="col-md-4">
          <div class="shop-wrap">
              <div class="shop-inl">
               <h5 style="font-size: 18px;" class="name_{{$row->id}}"> {{$row->collection_name}} <span style="font-size: 14px;" id="followers"> {{$row->followers}} followers </span> <br> <div class="my-collection-created">created By {{$row->f_name}} {{$row->l_name}}</div>  </h5>
              </div>
              @if(Session::get('user_id'))
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" onclick="followCollection({{$row->id}}, {{$session}})" class="button3">Follow Collection</a></div>

              @else
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" data-toggle="modal" data-target="#myModal" class="button3">Follow Collection</a></div>
              @endif
              
              
              <div class="clearfix"></div>

              <div class="shop-img" onclick="showCollectionDetails({{$row->id}})"><img class="img_{{$row->id}}" style="cursor: pointer" src="https://admin-api.moretolike.com/uploads/079aab26f098f9eac4c446e9bf0fff9b.jpg" id="best_seller23" alt=""></div>
               <div class="clearfix"></div>
               
               <div class="shop-inl1">
                  
                       <div class="footer-social-icons">
                        <ul class="social-icons list-unstyled my-collection-social">
                          <li><b>Share With</b></li>
                          <li><a class="fa fa-facebook" href="https://www.facebook.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-twitter" href="https://twitter.com/more_to_like" target="_blank"></a></li>
                          <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-pinterest" href="https://no.pinterest.com/moretolike/" target="_blank"></a></li>
                          <li><a class="fa fa-envelope" href="https://www.youtube.com/channel/UCKlOY34UsBFn_xFtk4LF1Cg" target="_blank"></a></li>
                        </ul>
                      </div>

                </div>
              <div class="clearfix"></div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="shop-wrap">
              <div class="shop-inl">
               <h5 style="font-size: 18px;" class="name_{{$row->id}}"> {{$row->collection_name}} <span style="font-size: 14px;" id="followers"> {{$row->followers}} followers </span> <br> <div class="my-collection-created">created By {{$row->f_name}} {{$row->l_name}}</div>  </h5>
              </div>
              @if(Session::get('user_id'))
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" onclick="followCollection({{$row->id}}, {{$session}})" class="button3">Follow Collection</a></div>

              @else
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" data-toggle="modal" data-target="#myModal" class="button3">Follow Collection</a></div>
              @endif
              
              
              <div class="clearfix"></div>

              <div class="shop-img" onclick="showCollectionDetails({{$row->id}})"><img class="img_{{$row->id}}" style="cursor: pointer" src="https://admin-api.moretolike.com/uploads/079aab26f098f9eac4c446e9bf0fff9b.jpg" id="best_seller23" alt=""></div>
               <div class="clearfix"></div>
               
               <div class="shop-inl1">
                  
                       <div class="footer-social-icons">
                        <ul class="social-icons list-unstyled my-collection-social">
                          <li><b>Share With</b></li>
                          <li><a class="fa fa-facebook" href="https://www.facebook.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-twitter" href="https://twitter.com/more_to_like" target="_blank"></a></li>
                          <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-pinterest" href="https://no.pinterest.com/moretolike/" target="_blank"></a></li>
                          <li><a class="fa fa-envelope" href="https://www.youtube.com/channel/UCKlOY34UsBFn_xFtk4LF1Cg" target="_blank"></a></li>
                        </ul>
                      </div>

                </div>
              <div class="clearfix"></div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="shop-wrap">
              <div class="shop-inl">
               <h5 style="font-size: 18px;" class="name_{{$row->id}}"> {{$row->collection_name}} <span style="font-size: 14px;" id="followers"> {{$row->followers}} followers </span> <br> <div class="my-collection-created">created By {{$row->f_name}} {{$row->l_name}}</div>  </h5>
              </div>
              @if(Session::get('user_id'))
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" onclick="followCollection({{$row->id}}, {{$session}})" class="button3">Follow Collection</a></div>

              @else
                <div class="shop-inr"><a href="javascript:void(0)" style="cursor: pointer" data-toggle="modal" data-target="#myModal" class="button3">Follow Collection</a></div>
              @endif
              
              
              <div class="clearfix"></div>

              <div class="shop-img" onclick="showCollectionDetails({{$row->id}})"><img class="img_{{$row->id}}" style="cursor: pointer" src="https://admin-api.moretolike.com/uploads/079aab26f098f9eac4c446e9bf0fff9b.jpg" id="best_seller23" alt=""></div>
               <div class="clearfix"></div>
               
               <div class="shop-inl1">
                  
                       <div class="footer-social-icons">
                        <ul class="social-icons list-unstyled my-collection-social">
                          <li><b>Share With</b></li>
                          <li><a class="fa fa-facebook" href="https://www.facebook.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-twitter" href="https://twitter.com/more_to_like" target="_blank"></a></li>
                          <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
                          <li><a class="fa fa-pinterest" href="https://no.pinterest.com/moretolike/" target="_blank"></a></li>
                          <li><a class="fa fa-envelope" href="https://www.youtube.com/channel/UCKlOY34UsBFn_xFtk4LF1Cg" target="_blank"></a></li>
                        </ul>
                      </div>

                </div>
              <div class="clearfix"></div>
          </div>
        </div>
      @endforeach
    @endif






  </div>
    
  </div>
                  <!-- karan-->
<div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku" itemprop="sku"></span></span> <span class="posted_in">Category: <a href="product-category.html" rel="tag"></a> </span> <span class="tagged_as">Tags: <a href="product-category.html" rel="tag">Fast</a>, <a href="product-category.html" rel="tag">Gaming</a>, <a href="product-category.html" rel="tag">Strong</a> </span> </div>
</div>


<div class="tab-pane panel entry-content wc-tab" id="tab-specification">
<h3>{{$store_list_details->store_name}}</h3>
<table class="table">
<tbody>
<tr>
<td>Address</td>
<td>{{$store_list_details->address1}} {{$store_list_details->address1}} {{$store_list_details->name}} {{$store_list_details->state_name}} {{$store_list_details->country_name}} {{$store_list_details->zip_code}}
</td>
</tr>
<tr>
<td>Email</td>
<td>{{$store_list_details->email}}</td>
</tr>
<tr>
<td>Phone</td>
<td>{{$store_list_details->contact_no}}</td>
</tr>
<tr class="size-weight">
<td>Store url </td>
<td>{{$store_list_details->store_url}}</td>
</tr>
<tr>
<td>Social Links</td>
<td><a href="#"> {{$store_list_details->facebook}}</a></td>
</tr>

<tr>
<td></td>
<td><a href="#">{{$store_list_details->facebook}}</a>
</td>
</tr>
<tr>
<td></td>
<td><a href="#">{{$store_list_details->instagram}}</a></td>
</tr>
</tbody>
</table>
</div>


<div class="tab-pane panel entry-content wc-tab" id="tab-blog">
@if($insta_user_details!='')
<div class="row">
  <div class="col-sm-12">
    <div class="col-sm-2"><img src="{{$insta_user_details->profile_picture}}" class="img-circle" width="100" height="100"></div>
    <div class="col-sm-6">
      <h3><b>{{$insta_user_details->username}}</b></h3>
      <p>{{$insta_user_details->counts->media}} Posts {{$insta_user_details->counts->followed_by}} Followers  {{$insta_user_details->counts->follows}} Following</p>
      <p><b>{{$insta_user_details->full_name}}</b></p>
    </div>
  </div>
</div>
@endif
<hr>
@if($instagram_media!='')
<!-- karan veer singh -->
  <div class="carouselGallery-grid hidden-xs">
        <div class="row">
            <div class="carouselGallery-col-120">
                
              <!-- gallery started form here -->
              @foreach($instagram_media as $key => $row)
                <div class="carouselGallery-col-1 carouselGallery-carousel" data-index="{{$key}}" data-username="<img src=''><b><i class='fa fa-instagram'></i></b> {{$row->user->username}}" data-imagetext="@if(isset($row->caption) && !empty($row->caption))
                  <p>{{$row->caption->text}}</p>
                  @endif" data-location="" data-likes="{{$row->likes->count}}" data-imagepath="{{$row->images->standard_resolution->url}}" data-posturl="{{$row->link}}" style="background-image:url({{$row->images->standard_resolution->url}});">

              <!--   <div class="carouselGallery-item">
                    <div class="carouselGallery-item-meta">
                      
                    </div>
                </div> -->
                <div class="infodetail">
                    <span style="text-align: center;">
                            @if(isset($row->caption) && !empty($row->caption))
                            <p style="margin-bottom: 0px;">{{substr($row->caption->text, 0, 60)}}</p>
                            @endif
                            <b>@</b>{{$row->user->username}}
                        </span>
                        <br>
                        <span >
                            <span class="fa fa-heart"></span>&nbsp;&nbsp;{{$row->likes->count}}
                            <span class="fa fa-comments"></span>&nbsp;&nbsp;{{$row->comments->count}}
                        </span>
                </div>
              </div>
              @endforeach
            <!-- gallery started form here -->
</div>
<div class="row" style="text-align: center;">
  <a href="#" class="btn btn-primary">Load More</a>
  <a href="https://www.instagram.com/{{$instagram_media[0]->user->username}}" class="btn btn-primary"><i class="fa fa-instagram"></i> Follow On Instagram</a>
</div>
</div>
</div>
<!-- karan veer singh -->
@else
<h4>Instagram blog not connected yet.</h4>
@endif
</div>
<!-- /.panel -->

<div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
  <div id="reviews" class="electro-advanced-reviews">
      <div class="advanced-review row">
          <div class="col-xs-12 col-md-6">
              <h2 class="based-title">Based on {{$count['total']}}  reviews</h2>
              <div class="avg-rating">
                  <span class="avg-rating-number">{{number_format($avg ,2)}}</span> overall
              </div>

              <div class="rating-histogram">
                  <div class="rating-bar">
                      <div class="star-rating" title="Rated 5 out of 5">
                          <span style="width:100%"></span>
                      </div>
                      <?php 
                      if(isset($count['five']) && ($count['five'] > 0)){
                      $percent_view_five = $count['five']*100/$count['total']; 
                      } else { 
                      $percent_view_five =0;
                           $count['five'] = 0;
                           }?>

                      <div class="rating-percentage-bar">
                          <span style="width:{{$percent_view_five}}%" class="rating-percentage">

                          </span>
                      </div>
                      <div class="rating-count">{{$count['five']}}</div>
                  </div><!-- .rating-bar -->

                  <div class="rating-bar">
                      <div class="star-rating" title="Rated 4 out of 5">
                          <span style="width:80%"></span>
                      </div>

                      <?php 
                       if(isset($count['four']) && ($count['four'] > 0)){

                       $percent_view_four = $count['four']*100/$count['total'];
                       } else {
                        $percent_view_four =0; 
                          $count['four'] = 0;

                      } ?>
                      <div class="rating-percentage-bar">
                          <span style="width:{{$percent_view_four}}%" class="rating-percentage"></span>
                      </div>
                      <div class="rating-count">{{$count['four']}}</div>
                  </div><!-- .rating-bar -->

                  <div class="rating-bar">
                      <div class="star-rating" title="Rated 3 out of 5">
                          <span style="width:60%"></span>
                      </div>
                         <?php 
                       if(isset($count['three']) && ($count['three'] > 0)){

                       $percent_view_three = $count['three']*100/$count['total'];
                       } else {
                        $percent_view_three =0; 
                          $count['three'] = 0;

                      } ?>
                      <div class="rating-percentage-bar">
                          <span style="width:{{$percent_view_three}}%" class="rating-percentage"></span>
                      </div>
                      <div class="rating-count zero">{{$count['three']}}</div>
                  </div><!-- .rating-bar -->

                  <div class="rating-bar">
                      <div class="star-rating" title="Rated 2 out of 5">
                          <span style="width:40%"></span>
                      </div>
                        <?php 
                       if(isset($count['two']) && ($count['two'] > 0)){

                       $percent_view_two = $count['two']*100/$count['total'];
                       } else {
                        $percent_view_two =0; 
                          $count['two'] = 0;

                      } ?>
                      <div class="rating-percentage-bar">
                          <span style="width:{{$percent_view_two}}%" class="rating-percentage"></span>
                      </div>
                      <div class="rating-count zero">{{$count['two']}}</div>
                  </div><!-- .rating-bar -->

                  <div class="rating-bar">
                      <div class="star-rating" title="Rated 1 out of 5">
                          <span style="width:20%"></span>
                      </div>
                        <?php 
                       if(isset($count['one']) && ($count['one'] > 0)){

                       $percent_view_one = $count['one']*100/$count['total'];
                       } else {
                        $percent_view_one =0; 
                          $count['one'] = 0;

                      } ?>
                      <div class="rating-percentage-bar">
                          <span style="width:{{$percent_view_one}}%" class="rating-percentage"></span>
                      </div>
                      <div class="rating-count zero">{{$count['one']}}</div>
                  </div><!-- .rating-bar -->
              </div>
          </div><!-- /.col -->

          <div class="col-xs-12 col-md-6">
              <div id="review_form_wrapper">
                  <div id="review_form">
                      <div id="respond" class="comment-respond">



                          <h3 id="reply-title" class="comment-reply-title">
                             @if(isset($userReview) && !empty($userReview))
                             Your review
                             @else
                            Add a review
                            @endif

                              <small>
                                  <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                              </small>
                          </h3>
                         
                          @if(isset($userReview) && !empty($userReview) && ($userReview->admin_approval= 'a') )
                            <div id="comments">
                              <ol class="commentlist">
                                 
                                  <li itemprop="review" class="comment even thread-even depth-1">

                                      <div id="comment-390" class="comment_container">

                                          <img alt='' src="{{ asset('images/blog/avatar.jpg')}}" class="avatar" height='60' width='60' />
                                          <div class="comment-text" id="current_user_rating">

                                              <div class="star-rating" title="Rated {{$userReview->rating}} out of 5">


                                                  <?php  $width =  $userReview->rating*20; ?>
                                                    <span style="width:{{$width}}%"></span>
                                                     
                                                </div>


                                              <p class="meta">
                                                  <strong>{{$userReview->f_name}}  {{$userReview->l_name}}</strong> &ndash;
                                                  <time itemprop="datePublished" datetime="{{$userReview->created_date}}">{{$userReview->created_date}}</time>
                                              </p>



                                              <div itemprop="description" class="description">
                                                <p>{{$userReview->comment}}</p>
                                              </div>


                                              <p class="meta">
                                                  <strong>{{$userReview->f_name}}{{$userReview->l_name}}</strong> &ndash;
                                                  <time itemprop="datePublished" datetime="{{$userReview->created_date}}">{{$userReview->created_date}}</time>
                                              </p>


                                          </div>
                                      </div>
                                  </li><!-- #comment-## -->
                              </ol>
                            </div>
                          @else
                            <form action="javascript:void(0)" method="post" id="commentform" class="comment-form">
                                {{csrf_field()}}
                                <p class="comment-form-rating">
                                    <label>Your Rating</label>
                                </p>
                                <input type="hidden" name="rating_val" id="rating_val" value="">
                                <p>
                                    <span class="fa fa-star" id="1" onclick="rating(1)"></span>
                                    <span class="fa fa-star " id="2" onclick="rating(2)"></span>
                                    <span class="fa fa-star " id="3" onclick="rating(3)"></span>
                                    <span class="fa fa-star" id="4" onclick="rating(4)"></span>
                                    <span class="fa fa-star" id="5" onclick="rating(5)"></span>

                                </p>

                                <p class="comment-form-comment">
                                    <label for="comment">Your Review</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                </p>

                                <p class="form-submit">

                                @if(Session::get('user_id'))

                                 <input name="submit" type="button" onclick="submitReview()" id="submit" class="submit" value="Add Review"  /> <br>
                                      <span id="rate_error"  style="color:red; "></span>

                          
                                @else
                                
                                 <input name="submit" type="button" data-toggle="modal" data-target="#myModal" class="submit" value="Add Review" />
                                @endif  



                                    <input type='hidden' name='product_id' value='{{$store_list_details->id}}' id='product_id' />
                                    <input type='hidden' name='user_id' id='user_id' value="{{Session::get('user_id')}}" />
                                </p>

                                <input type="hidden" id="review_type" name="review_type" value="s" />
                                <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
                            </form>
                          @endif
                          <!-- form -->
                      </div><!-- #respond -->
                  </div>
              </div>

          </div><!-- /.col -->
      </div><!-- /.row -->

      <div id="comments">

          <ol class="commentlist">
              @foreach($review as $review)
              <li itemprop="review" class="comment even thread-even depth-1">

                  <div id="comment-390" class="comment_container">

                      <img alt='' src="{{ asset('images/blog/avatar.jpg')}}" class="avatar" height='60' width='60' />
                      <div class="comment-text" id="current_user_rating">

                          <div class="star-rating" title="Rated {{$review->rating}} out of 5">
                            <?php  $width =  $review->rating*20; ?>
                              <span style="width:{{$width}}%">
                                <strong itemprop="ratingValue">{{$review->rating}}</strong> out of 5</span>
                          </div>


                          <p class="meta">
                              <strong>{{$review->f_name}} {{$review->l_name}}</strong> &ndash;
                              <time itemprop="datePublished" datetime="{{$review->created_date}}">{{$review->created_date}}</time>
                          </p>



                          <div itemprop="description" class="description">
                            <p>{{$review->comment}}</p>
                          </div>


                          <p class="meta">
                              <strong>{{$review->f_name}}{{$review->l_name}}</strong> &ndash;
                              <time itemprop="datePublished" datetime="{{$review->created_date}}">{{$review->created_date}}</time>
                          </p>


                      </div>
                  </div>
              </li><!-- #comment-## -->
              @endforeach
             
          </ol><!-- /.commentlist -->

      </div><!-- /#comments -->

      <div class="clear"></div>
  </div><!-- /.electro-advanced-reviews -->
</div><!-- /.panel -->
<!-- /.panel --> 


<div class="tab-pane panel entry-content wc-tab" id="tab-followes">
<div id="reviews" class="electro-advanced-reviews">
<div class="advanced-review row">
@if(!empty($follower_list ))
@foreach($follower_list  as $follower_list )
<div class="col-xs-12 col-md-6">
@if(!empty($follower_list->profile_image))
<img src="{{asset('uploads')}}/{{$follower_list->profile_image}}" height="30px;"  width="30px" />
@else
<img src="{{asset('uploads')}}/default-user.png" height="30px;"  width="30px" />

@endif

<h2 class="based-title"> {{$follower_list->customer_name}}  {{$follower_list->country_name}}</h2>
</div>
@endforeach
@else
<p>  No Followers yet </p>
@endif

</div>
</div>
</div>


<!----pannel-->
</div>
</div>


</div>


</main>

</div>
</div>
</div>
</div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#product_view li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<footer id="colophon" class="site-footer">                
@include('layouts/footer') 








