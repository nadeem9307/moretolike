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
  .shop-store1{ border:1px solid #ccc; background-color: #eee; }
  ul.muprofile{list-style-type: none; padding-bottom: 25px;}
  .social-ic{text-align: right;margin-top: 20px;}
  .shop-inl1{ width: 100%; font-size: 0.9em; }
  .topic2{float: left;margin-right: 10px;padding-top: 10px;padding-left: 13px;}
  p.close.tooltipClosesingle {
    border: 1px solid #ccc;
    padding: 4px 7px;
    border-radius: 82px;
}
a.collectioncl {
    color: #7d7d7d !important;
}
  @media (max-width: 568px) {
    .muprofile{margin-top: 60px;}
  }
</style>
<div class="single-product full-width">
<div id="content" class="site-content" tabindex="-1">
<div class="container">
  <nav class="woocommerce-breadcrumb"> 
  <a href="{{url('/')}}">Home</a> <span class="delimiter"><i class="fa fa-angle-right"></i></span>
  <a href="{{url('/store-list')}}">Store</a> <span class="delimiter"><i class="fa fa-angle-right"></i></span> 
  <a href="/store-details/{{$store_list_details->id}}">{{$store_list_details->store_name}}</a> <span class="delimiter"></span> 
  </nav>

<div  class="container shop-store1">
<div class="row" > 
@if(isset($store_list_details->store_banner) &&!empty($store_list_details->store_banner)) 
<img src="{{asset('uploads')}}/{{$store_list_details->store_banner}}" 
alt="Store Banner" style="height: 190px; width:1170px " />
@else
<img src="{{getenv('URL')}}stor_default_banner.png" alt="Store Banner"  style="height: 190px; width:1170px "/>
@endif

</div>
<div class="row" style="margin-top: 15px;">
<div class="col-md-2 col-xs-12">
<div class="logo-b"> 
@if(isset($store_list_details->store_logo)  &&!empty($store_list_details->store_logo)) 
<img src="{{asset('uploads')}}/{{$store_list_details->store_logo}}" 
alt="Store Logo"style=" width: 150px;" />
@else
<img src="{{getenv('URL')}}default_store_logo.png" alt="Store Logo"  style="height: 150px; width: 150px;"/>
@endif 
</div>
</div>
<!--karan-->
<div class="col-md-10 col-xs-12 ">
<ul class="muprofile">
 <li> <h5>Admin </h5></li>
<li><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p></li>
<li style="float: right;"><div class="folloowesbtn">
@if(Session::get('user_id'))
@if($current_follower)

<a href="javascript:void(0)" class="button2"> FOLLOW</a>
</div>
@else

<div id="followed" class="followed2">
<a href="javascript:void(0)" class="button2" onclick="follow_store({{Session::get('user_id')}}, {{$store_list_details->id}})">FOLLOWING </a>
</div>
@endif
@else
<div class="followed1" style="margin-right: 10px;">
<a href="javascript:void(0)" id="follow" class="button2" data-toggle="modal" data-target="#myModal" >FOLLOW</a>
</div>
@endif</li>
</ul> 
</div>
<!--karan-->


</div>
</div>
<div class="row">
  <div class="col-sm-12 social-ic">
    <div class="footer-social-icons">
    <ul class="social-icons list-unstyled">
      <li><b>Share Profile</b></li>
      <li><a class="fa fa-facebook" href="https://www.facebook.com/mtolike/" target="_blank"></a></li>
      <li><a class="fa fa-twitter" href="https://twitter.com/more_to_like" target="_blank"></a></li>
      <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
      <li><a class="fa fa-pinterest" href="https://no.pinterest.com/moretolike/" target="_blank"></a></li>
      <li><a class="fa fa-envelope" href="https://www.youtube.com/channel/UCKlOY34UsBFn_xFtk4LF1Cg" target="_blank"></a></li>
    </ul>
  </div>
  </div>
  
  
</div>

<div id="primary" class="content-area">
<main id="main" class="site-main">
<div class="product">
<div class="woocommerce-tabs wc-tabs-wrapper">
  <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs more-user-tab" role="tablist">
    <li class="nav-item description_tab"> <a href="#tab-description" class="active"  data-toggle="tab">My Collections</a> </li>
    <li class="nav-item accessories_tab"> <a href="#tab-accessories" data-toggle="tab">Loved Items (109)</a> </li>
    <li class="nav-item specification_tab"> <a href="#tab-specification" data-toggle="tab">Following (563)</a> </li>
    <li class="nav-item reviews_tab"> <a href="#tab-followes" data-toggle="tab">Followers ({{count($follower_list)}})</a></li>
    <li class="nav-item specification_tab"> <a href="#tab-blog" data-toggle="tab">My Blog (901)</a> </li>
    <li class="nav-item store-follow"> <a href="#store-follow" data-toggle="tab">Stores|Follow (340)</a> </li>
    <li class="nav-item my-store"> <a href="#my-store" data-toggle="tab">My Store (763)</a></li>
  </ul>

<div class="tab-content">
<div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
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
                      <ul class="products columns-3">
                        <li class="product" style="padding-left: 15px;">
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
                        
                        <li class="product" style="padding-left: 15px;">
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

                        
                     <li class="product" style="padding-left: 15px;">
                          <div class="product-outer">
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

<div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
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
               <h5 style="font-size: 18px;" class="name_{{$row->id}}"> {{$row->collection_name}} <span style="font-size: 14px;" id="followers"> 58 followers </span> <br> <div class="my-collection-created">created By {{$row->f_name}} {{$row->l_name}}</div>  </h5>
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
               <h5 style="font-size: 18px;" class="name_{{$row->id}}"> {{$row->collection_name}} <span style="font-size: 14px;" id="followers"> 58 followers </span> <br> <div class="my-collection-created">created By {{$row->f_name}} {{$row->l_name}}</div>  </h5>
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
                  @endif" data-location="" data-likes="{{$row->likes->count}}" data-imagepath="{{$row->images->standard_resolution->url}}" data-posturl="{{$row->link}}" style="background-image:url({{$row->images->standard_resolution->url}});" style="height: 200px;">

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
<!-- Stores||Follow -->

<div class="tab-pane panel entry-content wc-tab" id="store-follow">
  <div id="store-list" >
      <div class=" row">
          <div class="col-md-4 flr">
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
         <div class="col-md-4 flr" >
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
         <div class="col-md-4 flr">
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
      </div>
      <div class="clear"></div>
  </div><!-- Stores||Follow -->
</div>


<div class="tab-pane panel entry-content wc-tab" id="my-store">
  <div id="store-list">
    <div class="row">
        <div class="col-md-4 flr">
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
        <div class="col-md-4 flr">
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
        <div class="col-md-4 flr">
        <a class="hidden">Crypto</a>
            <div class="full-wrap">
                    <div class="back-img">
                      <img src="https://moretolike.com/uploads/8115158.jpg" alt="Store Banner" style="height: 100px; width: 100%;"></div>
                        <div class="prof-img"> 
                          <img src="https://moretolike.com/uploads/2779486.jpg" alt="Store Banner" style="height: 100px; width: 100px;"></div>
                           <div class="cont-box">
                              <h5>Crypto <br>
                                <span style="font-size: 15px;">https://www.moretolike.com/customer</span>
                              </h5>
                           </div>
                   <div class="img-box ">
                    <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                      <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>
                        <div class="col-md-4 col-sm-4 store-shop"><img src="/images/blog/blog-s-1.jpg" alt=""></div>                     
                    </div>
                <div class="clearfix"></div>
                <div class="btn-box"> <a href="https://moretolike.com/store-details/37" class="button1">Visit Store</a> </div>
            </div>
        </div>
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








