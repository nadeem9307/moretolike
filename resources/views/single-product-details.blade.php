@include('single-product-sections/header')
<style type="text/css">
.blog .carousel-indicators {left: 0;top: auto;bottom: -40px;}
.blog .carousel-indicators li {background: #a3a3a3;border-radius: 50%;width: 8px; height: 8px;}
.blog .carousel-indicators .active {background: #707070;}
.brddetail{ border: 2px solid #dfdfdf; border-radius: 20px; padding: 20px; background-color: #fff; float: right; margin-right:17px;box-shadow: 0px 0px 6px 0px rgba(1, 1, 1, 0.3);
    -moz-box-shadow: 0px 0px 6px 0px rgba(1, 1, 1, 0.3);
    box-shadow: -webkit-box-shadow: 0px 0px 6px 0px rgba(1, 1, 1, 0.3);  }
.text-center{ text-align: center; }
ul.social-product{list-style-type:none;}
ul.social-product li{float: left; padding-right: 70px;}
ul.social-product li a{ color: #7d7d7d; font-size: 24px; }
#exampleFormControlSelect1{ border:1px solid #ccc; }
.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
  min-height: 380px;
    max-width: 340px; // orginal twitter width: 290px;
    box-shadow: 2px 2px 10px 2px rgba(1, 1, 1, 0.3);

-moz-box-shadow: 2px 2px 10px 2px rgba(1, 1, 1, 0.3);

box-shadow: -webkit-box-shadow: 2px 2px 10px 2px rgba(1, 1, 1, 0.3);
}
.twPc-bg {
    background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}
.twPc-button {
    margin: -13px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
   /* float: left;*/
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 72px;
    width: 72px;
}
.twPc-divUser {
    margin: 5px 0 0;
}
.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divName a {
    color: inherit !important;
}
.twPc-divStats {
    margin-left: 11px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatLabel {
    color: #7d7d7d;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}
.main-profile{ text-align: center;}
ul.image-botom{list-style-type: none;}
ul.image-botom li{float: left; padding-right: 10px;}
.hfive{margin-top: 5px;padding: 3px;color: #7d7d7d;}
a.mystorebtn{ border:1px solid #ccc; padding: 10px; }
 .image_outer_container{
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;
       }

       .image_inner_container{
       	border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
       }
       .image_inner_container img{
       /*	height: 200px;*/
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;
       }

       .image_outer_container .green_icon{
        background-color: #07bde8;
position: absolute;
right: 30px;
/*bottom: 10px;*/
height: 30px;
width: 30px;
border: 5px solid #f4f4f4;
border-radius: 50%;
text-align: center;
color: white;
       }
       .pagination.page li {
    width: 50px;
    float: none;}
    .bg-imgpro{background-image: url(/images/product-bg.jpg);  background-repeat: repeat-x; padding-top: 50px; border-radius: 15px;}
     .bg-imgpro1{background-image: url(/images/product-bg1.jpg); padding-top: 30px;
padding-bottom: 20px;
border-radius: 0px 0px 15px 15px;}
 .pagination.page li a{color:#7d7d7d;}
   .topic2{float: left;
    margin-right: 3px;
    padding-top: 6px;}
    a.collectioncl{ color: #7d7d7d!important;}
    p.close.tooltipClosesingle {
    border: 1px solid #ccc;
    padding: 4px 7px;
    border-radius: 82px;
}
.imag1{    width: 30%;
    float: left;
    margin-right: 5px;
    text-align: center;
    margin-top: 15px;}
.margin-single1{margin-top: 35px;}
.singleproduct-margin{ margin-bottom: 10px; }
@media only screen and (max-width: 768px){
ul.social-product li {
    float: left;
    padding-right: 30px;}
}
@media only screen and (max-width: 1024px) {
   

ul.social-product li {
  
    padding-right: 50px;}
}
}
</style>
<div class="single-product full-width">
<div id="content" class="site-content" tabindex="-1">
<div class="container">
<nav class="woocommerce-breadcrumb singleproduct-margin">
                        <a href="home.html">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="product-category.html">Accessories</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="product-category.html">Headphones</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>Ultra Wireless S50 Headphones S50 with Bluetooth
                    </nav>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<div class="product">

<!--container-->

<div class="container bg-imgpro">
	<div class="single-product-wrapper row">
    <!-- product image div -->
    <div class="col-sm-5">

        <div class="row" style="margin-bottom:50px;">
        	<div class="col-sm-6"><h5>   <a href="javascript:void(0);" productid="single" class="show-single" data-toggle="tooltip_s3single" data-html="true" title="<div class='tooltip_1'><p  productid='single' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
                              <span class=""><a href="javascript:void(0);" class="show-single" productid="single">
                                <i class="fa fa-barcode"></i></a></span> &nbsp; My Store</h5></div>
        	<div class="col-sm-6"><h5><a href="#"><i class="ec ec-compare"></i> Compare</a></h5></div>
        </div>


        <div class="row">
        <img class="xzoom" id="xzoom" src="{{getenv('URL')}}{{$pro_info->product_img}}" xoriginal="{{getenv('URL')}}{{$pro_info->product_img}}" />
        <!--</div> -->
        <!-- ./product image div -->
        <div class="thumbnails-all columns-6">
            @foreach($product_gallery as $img)
            <a href="javascript:void(0)" class="first" title=""><img src="{{getenv('URL')}}{{$pro_info->product_img}}" onclick="setMainImage(this.src)" data-echo="{{getenv('URL')}}{{$img->gallery_img}}" class="wp-post-image" alt="" style="height: 100px"></a>
            @endforeach
        </div>
        </div>

    </div>
    <!-- product summary div -->
   
    <!-- ./product summary div -->
    
    <!-- product action div -->
    <div class="col-sm-6 brddetail">
        <div class="row">
         <div class="col-sm-12"><h2>{{$pro_info->product_name}}</h2></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
              <h2>${{$pro_info->current_price}} USD</h2>
              <meta itemprop="price" content="1215" />
              <meta itemprop="priceCurrency" content="USD" />
              <link itemprop="availability" href="http://schema.org/InStock" />
            </div>
             <div class="col-sm-6">
             
             <div class="rating-bar">
                <div class="star-rating" title="Rated 5 out of 5">
                    <span style="width:100%"></span>
                </div>
                <?php 
                if(isset($avg) && ($avg > 0)){
                $percent_view_five = $avg*100/$count['total']; 
                } else { 
                $percent_view_five =0;
                     $avg = 0;
                }?>

                <div class="rating-percentage-bar">
                    <span style="width:{{$percent_view_five}}%" class="rating-percentage">

                    </span>
                </div>
            </div>

             <span>({{number_format($avg ,1)}} customer rewiews)</span></div>
        </div>
         <!-- form -->
         <div class="row">
            <form class="variations_form cart" action="javascript:void(0)" id="add_to_cart_form" method="post">
              <div class="col-sm-8">
              @if(count($product_color) > 0)
              <table class="variations">
              <tbody>
              <tr>
              <td class="value">
              <select class="" name="attribute_pa_color" id="attr_color">
                  <option value="">Choose a color</option>
                  @foreach($product_color as $color)
                  <option value="{{$color->id}}" >{{$color->color_name}}</option>
                  @endforeach
              </select>
              <a onclick="return document.getElementById('attr_color').value=''" class="reset_variations" href="javascript:void(0)">Clear</a>
              </td>
              </tr>
              </tbody>
              </table>
              @endif

              <!-- product size -->
              @if(count($product_size) > 0)
              <table class="variations">
              <tbody>
              <tr>
              <td class="value">
              <select class="" name="attribute_pa_color" id="attr_size">
                  <option value="">Choose a size</option>
                  @foreach($product_size as $size)
                  <option value="{{$color->color_code}}" >{{$size->size_name}}</option>
                  @endforeach
              </select>
              <a onclick="return document.getElementById('attr_size').value=''" class="reset_variations" href="javascript:void(0)">Clear</a>
              </td>
              </tr>
              </tbody>
              </table>
              @endif
	           </div>
              <div class="col-sm-4">
                <input name="quantity" id="quantity" min="1" onkeypress="return isNumberKey(event)" value="1" title="Qty" class="input-text qty text" type="number" style="border-radius: 40px; height: 38px; margin-top:11px;">
                <input type="hidden" id="product_id" name="product_id" value="{{$pro_info->product_id}}" >
              </div> 
             
            </form>
         </div>
         <div class="row">
         	 <div class="col-sm-6">
              <button type="button" onclick="addToCarts()" class="button">Add to cart</button>
              </div>
         </div>
         <!-- form -->
         <hr>
         <div class="row">
             <div class="col-sm-12">
              <div class="col-sm-12">
                <h4>Product Details</h4>
              </div>
            @if(isset($pro_info->product_details))
                <ul>
                {{$pro_info->product_details}}
                </ul>
              @endif
             </div>
              <div class="col-sm-12">
              <?php echo htmlspecialchars_decode(substr($pro_info->description, 0, 1000))?>
              </div>
               <div class="col-sm-12">
                   <p><b>SKU:</b> {{$pro_info->sku}} </p>
               </div>
               <div class="col-sm-12"><h4 class="text-center">Share this product</h4></div>
                 <div class="col-sm-12">
                   <ul class="social-product">
                       <li><a class="fa fa-facebook" href="https://www.facebook.com/mtolike/" target="_blank"></a></li>
                      <li><a class="fa fa-twitter" href="https://twitter.com/more_to_like" target="_blank"></a></li>
                      <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
                      <li><a class="fa fa-pinterest" href="https://no.pinterest.com/moretolike/" target="_blank"></a></li>
                      <li><a class="fa fa-envelope" href="https://www.youtube.com/channel/UCKlOY34UsBFn_xFtk4LF1Cg" target="_blank"></a></li> 
                   </ul>
               </div>

         </div>
          
        
    </div>
    <!-- ./product action div -->
    
    <!-- .summary -->
</div>
<div class="row bg-imgpro1" style="margin-bottom:20px;">
        	<div class="col-sm-3"><h5>
          @if(Session::has('user_id'))
            @if($is_like > 0)
            <a href="javascript:void(0)"><i class="fa fa-heart" aria-hidden="true" ></i></a> {{$like}}
            @else
            <a href="javascript:void(0)"><i class="fa fa-heart-o" aria-hidden="true" ></i></a> {{$like}}
            @endif
          @else
            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart-o" aria-hidden="true" ></i></a> {{$like}}
          @endif
          </h5></div>
        	<div class="col-sm-6" ><h5><span class="topic"><img src="https://moretolike.com/images/add-clooection.png" style="width: 15px;"></span>  

          @if(Session::has('user_id'))
            @if($pro_info->shareable_product == 'shareable')   
              <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$pro_info->product_id}}, {{Session::get('user_id')}}, 1)">Add To Collection</a>
            @else
              <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$pro_info->product_id}}, {{Session::get('user_id')}}, 0)">Add To Collection</a>
            @endif
          @else
            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Add To Collection</a>
          @endif
            
          </h5></div>
        </div><!-- /.single-product-wrapper -->
</div>

<!--container-->


<div class="woocommerce-tabs wc-tabs-wrapper margin-single1">
<ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
<li class="nav-item accessories_tab">
<a href="#tab-accessories" data-toggle="tab">Accessories</a>
</li>

<li class="nav-item description_tab">
<a href="#tab-description" class="active" data-toggle="tab">Description</a>
</li>

<li class="nav-item specification_tab">
<a href="#tab-specification" data-toggle="tab">Specification</a>
</li>

<li class="nav-item reviews_tab">
<a href="#tab-reviews" data-toggle="tab">Reviews</a>
</li>
</ul>

<div class="tab-content">
<div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
<div class="accessories">

<div class="row">
@if(count($product_accessories) > 0)

<div class="col-xs-12 col-sm-9 col-left">
<ul class="products columns-3">
<?php $total = 0; ?>
@foreach($product_accessories as $accessories)
<li class="product">
    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="/product-details/{{$accessories->slug}}" rel="tag">{{$accessories->name}}</a></span>
            <a href="/product-details/{{$accessories->slug}}">
                <h3>{{$accessories->product_name}}</h3>
                <div class="product-thumbnail">
                    <img data-echo="{{getenv('URL')}}{{$accessories->product_img}}" src="{{getenv('URL')}}{{$accessories->product_img}}" alt="{{$accessories->product_name}}"
                    id="img-responsive_{{$accessories->product_id}}">

                </div>
            </a>

            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <?php $total = $accessories->current_price+ $total; 
                        ?>
                        <ins><span class="amount">&#036;{{$accessories->current_price}}</span></ins>
                        <del><span class="amount">&#036;{{$accessories->mrp}}</span></del>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
            </div><!-- /.price-add-to-cart -->

           <!--  <div class="hover-area">
                <div class="action-buttons">
                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                    <a href="#" class="add-to-compare-link">Compare</a>
                </div>
            </div> -->
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
</li>
@endforeach
</ul><!-- /.products -->

<div class="check-products">
<div class="checkbox accessory-checkbox">
    <label>
        <input checked disabled type="checkbox" class="product-check">
        <span class="product-title">
           {{$pro_info->product_name}}
        </span>
        -
        <span class="accessory-price">
            <span class="amount">&#36;{{$pro_info->current_price}}</span>
        </span>
    </label>
</div>
</div><!-- /.check-products -->

</div><!-- /.col -->

<div class="col-xs-12 col-sm-3 col-right">
<div class="total-price">
<span class="total-price-html">
    <span class="amount">&#036;{{$total}}</span>
</span>
for <span class="total-products">{{count($product_accessories)}}</span>
items
</div><!-- /.total-price -->

<div class="accessories-add-all-to-cart">
<button type="button" class="button btn btn-primary add-all-to-cart" onclick="addToCartAcc({{$product_accessories}})">Add all to cart</button>
</div><!-- /.accessories-add-all-to-cart -->
</div><!-- /.col -->
@else 
<div>No Accessories Available</div>
@endif
</div><!-- /.row -->

</div><!-- /.accessories -->
</div>

<div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
<div class="electro-description">
<table class="table" >
<tbody>
<tr>
<td>
{!!$pro_info->description!!}
</td>

<td>
    <img class="alignright" data-echo="{{getenv('APP_URL')}}/assets/images/single-product/ForDescription.jpg" src="{{getenv('APP_URL')}}/assets/images/blank.gif" alt="">

</td>
</tr>
</tbody>
</table>
</div><!-- /.electro-description -->

<div class="product_meta">
<span class="sku_wrapper">SKU: <span class="sku" itemprop="sku">{{$pro_info->sku}}</span></span>


<span class="posted_in">Category:

<a href="product-category.html" rel="tag">{{is_array($product_subcategory) ? $product_subcategory->name : ''}}</a>

</span>

<span class="tagged_as">Tags:
@foreach($product_tags as $tag)
<a href="product-category.html" rel="tag">{{$tag->tag_name}}</a>,
@endforeach
</span>

</div><!-- /.product_meta -->
</div>

<div class="tab-pane panel entry-content wc-tab" id="tab-specification">
<h3>Technical Specifications</h3>
<table class="table">
<tbody>
@foreach($product_attr as $attr)
<tr>
<td>{{$attr->attribute_name}}</td>
<td>{{$attr->attribute_value}}</td>
</tr>
@endforeach
</tbody>
</table>
</div><!-- /.panel -->

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

        @if(isset($userReview) && !empty($userReview))
            <div id="comments">
                <ol class="commentlist">
                    <li itemprop="review" class="comment even thread-even depth-1">
                        <div id="comment-390" class="comment_container">
                            <img alt='' src="{{ asset('images/blog/avatar.jpg')}}" class="avatar" height='60' width='60' />
                            <div class="comment-text" id="current_user_rating">

                                <div class="star-rating" title="Rated {{$userReview->rating}} out of 5">
                                    <?php  $width =  $userReview->rating*20; ?>
                                  <span style="width:{{$width}}%">
                                    <strong itemprop="ratingValue">{{$userReview->rating}}</strong> out of 5</span>
                                </div>


                                <p class="meta">
                                    <strong>{{$userReview->f_name}} {{$userReview->l_name}}</strong> &ndash;
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

                    <input name="submit" type="button" onclick="submitReview()" id="submit" class="submit" value="Add Review" /> <br>
                      <span id="rate_error"  style="color:red; "></span>
                @else

                <!-- <a href="javascript:void(0)"  class="submit"data-toggle="modal" data-target="#myModal" ><i class="fa fa-user" ></i> Add Review</a> -->
                <input name="submit" type="button" data-toggle="modal" data-target="#myModal" class="submit" value="Add Review" />


                @endif  



                    <input type='hidden' name='product_id' value='{{$pro_info->product_id}}' id='product_id' />
                    <input type='hidden' name='user_id' id='user_id' value="{{Session::get('user_id')}}" />
                </p>

                <input type="hidden" id="review_type" name="review_type" value="p" />
                <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
            </form>
        @endif
       
     

    </div><!-- #respond -->
</div>
</div>



</div>



<!-- /.col -->
</div><!-- /.row -->

<div id="comments">

<ol class="commentlist">
@foreach($review as $review)
<li itemprop="review" class="comment even thread-even depth-1">

<div id="comment-390" class="comment_container">

    <img alt='' src="{{ asset('images/blog/avatar.jpg')}}" class="avatar" height='60' width='60' />
    <div class="comment-text">

        <div class="star-rating" title="Rated {{$review->rating}} out of 5">
             <?php  $width =  $review->rating*20; ?>
            <span style="width:{{$width}}%">
            <strong itemprop="ratingValue">{{$review->rating}}</strong> out of 5</span>

         
        </div>


        <p class="meta">
            <strong>{{$review->f_name}}{{$review->l_name}}</strong> &ndash;
            <time itemprop="datePublished" datetime="{{$review->created_date}}">{{$review->created_date}}</time>
        </p>



        <div itemprop="description" class="description">
            <p>{{$review->comment}}
            </p>
        </div>


        <p class="meta">
            <strong>{{$review->f_name}}{{$review->l_name}}</strong> &ndash;
            <time itemprop="datePublished" datetime="{{$review->created_date}}">{{$review->created_date}}</time>
        </p>


    </div>
</div>
</li>
@endforeach

</ol>

</div>


</div><!-- /.electro-advanced-reviews -->
    <div id="comments">

        <ol class="commentlist list-of-posts" style="list-style-type: none;">
            @foreach($product_reviews as $product_review)
            <li itemprop="review" class="comment even thread-even depth-1 post">

                <div id="comment-390" class="comment_container">

                    <img alt="" src="/uploads/{{$product_review->profile_image}}" class="avatar" height="60" width="60">
                    <div class="comment-text">

                        <div class="star-rating" title="Rated {{$product_review->rating}} out of 5">
                            <span style="width:{{20*$product_review->rating}}%"><strong itemprop="ratingValue">{{$product_review->rating}}</strong> out of 5</span>
                        </div>


                        <p class="meta">
                            <strong>{{$product_review->f_name}} {{$product_review->l_name}}</strong> –
                            <time itemprop="datePublished" datetime="{{$product_review->created_date}}">{{$product_review->created_date}}</time>:
                        </p>



                        <div itemprop="description" class="description">
                            <p>{{$product_review->comment}}
                            </p>
                        </div>


                        <p class="meta">
                            <strong>{{$product_review->f_name}} {{$product_review->l_name}}</strong> –
                            <time itemprop="datePublished" datetime="{{$product_review->created_date}}">{{$product_review->created_date}}</time>:
                        </p>

                    </div>
                </div>
            </li><!-- #comment-## -->
            @endforeach

            <!-- <li class="comment odd alt thread-odd thread-alt depth-1">

                <div class="comment_container">

                    <img alt="" src="assets/images/blog/avatar.jpg" class="avatar" height="60" width="60">
                    <div class="comment-text">

                        <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>

                        <p class="meta">
                            <strong>Anna Kowalsky</strong> –
                            <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                        </p>


                        <div itemprop="description" class="description">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                            </p>
                        </div>

                        <p class="meta">
                            <strong itemprop="author">Anna Kowalsky</strong> – <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                        </p>

                    </div>
                </div>
            </li> --><!-- #comment-## -->

            <!-- <li class="comment odd alt thread-odd thread-alt depth-1">

                <div class="comment_container">

                    <img alt="" src="assets/images/blog/avatar.jpg" class="avatar" height="60" width="60">
                    <div class="comment-text">

                        <div itemprop="reviewRating" class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>

                        <p class="meta">
                            <strong>Anna Kowalsky</strong> –
                            <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                        </p>


                        <div itemprop="description" class="description">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                            </p>
                        </div>

                        <p class="meta">
                            <strong itemprop="author">Anna Kowalsky</strong> – <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                        </p>

                    </div>
                </div>
            </li> --><!-- #comment-## -->
        </ol><!-- /.commentlist -->

    </div>
</div><!-- /.panel -->
</div>
</div><!-- /.woocommerce-tabs -->
<!--karan product detail -->

<div class="container">
    
<div class="col-md-8">
    <div class="row">
       <div class="col-sm-12"><h4>People who like this :</h4></div>
         <div class="col-sm-12">
         <div class="container">
         	<div class="row">
            @foreach($people_who_like as $row)
           		<div class="col-sm-3">
               	<div class="d-flex justify-content-center h-100">
      						<div class="image_outer_container">
                    @if(Session::has('user_id'))
        							
                      <div class="green_icon" onclick="followUser({{Session::get('user_id')}}, {{$row->customer_id}}, {{$row->id}})" style="cursor: pointer;"><i class="fa {{$row->is_follow == 1 ? 'fa-check' : 'fa-plus'}}" id="user_{{$row->id}}"></i></div>

                    @else
                      <div class="green_icon" data-toggle="modal" data-target="#myModal" style="cursor: pointer;"><i class="fa fa-plus"></i></div>                      
        						@endif
                    <div class="image_inner_container">
      								<img src="{{asset('uploads')}}/{{$row->profile_image}}">
      							</div>
      							<div class="text-center">{{$row->f_name}} {{$row->l_name}}</div>
      						</div>
      					</div>
           		</div>
            @endforeach

         		<!-- <div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
    					</div>
         		</div>
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
    					</div>
         		</div>
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
    					</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
    					</div>
         		</div>
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
					     </div>
         		</div>
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
					   </div>
         		</div>
         		<div class="col-sm-3">
         			<div class="d-flex justify-content-center h-100">
    						<div class="image_outer_container">
    							<div class="green_icon"><i class="fa fa-plus"></i></div>
    							<div class="image_inner_container">
    								<img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
    							</div>
    							<div class="text-center">Mertskaplan Singh</div>
    						</div>
					     </div>
         		</div> -->
         	</div>
         	<div class="row">
         	<!-- 	<nav aria-label="Page navigation example">
				  <ul class="pagination page">
				    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
				</nav> -->
         	</div>
         </div>


         </div>  
    </div>
</div>
<div class="col-md-4">
    
<div class="row">
        <div class="col-sm-12"><h4>More Frome : </h4></div>
         <div class="col-sm-12">
           
         <div class="twPc-div">
         @if($store->store_banner == null)
			     <a class="twPc-bg twPc-block"></a>
          @else
            <a class="twPc-bg twPc-block" style="background: url({{asset('uploads')}}/{{$store->store_banner}})"></a>
          @endif

				<div class="main-profile">
					<div class="twPc-button">
			            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
			            <a href="" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true"></a>
			           
			            <!-- Twitter Button -->   
					</div>

					<a title="{{$store->store_name}}" href="/store-details/{{$store->id}}" class="twPc-avatarLink">
						<img alt="{{$store->store_name}}" src="{{asset('uploads')}}/{{$store->store_logo}}" class="twPc-avatarImg">
					</a>

					<div class="twPc-divUser">
						<div class="twPc-divName">
							<a href="/store-details/{{$store->id}}">{{$store->store_name}}</a>
						</div>
						<span>
							<a href="/store-details/{{$store->id}}">@<span>{{$store->user_name}}</span></a>
						</span>
						<br><br>
						<span><a href="" class="mystorebtn">+ Follow Store</a></span>
					</div>
						<div class="col-sm-12">
              @foreach($store_products as $row)
							<div class="imag1"><img alt="Mert S. Kaplan" src="{{getenv('URL')}}{{$row->product_img}}"></div>
              @endforeach
					</div>

					
				</div>
				<div class="col-sm-12">
					<h5 class="hfive">Shop more from Rare Botique</h5>
				</div>
			</div>


         </div>    
    


</div>


</div>


<!--karan product detail -->


</div><!-- /.product -->
<div class="Clear"></div>
<div class="container margin-single1">
	<div class="row">
		<div class="tabs-block col-lg-12">
              <div class="products-carousel-tabs">
                <ul class="nav nav-inline">
                  <li class="nav-item"><h3>YOU MIGHT ALSO LIKE</h3></a></li>
                 </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                    <div class="woocommerce columns-4">
                      <ul class="products columns-4">
                      
                      @foreach($recently_added as $row)

                        <li class="product" style="padding-left: 15px;">
                          <div class="product-outer" >
                            <div class="product-inner"> 
                            	<span class="loop-product-categories">
								          <span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="{{$row->product_id}}" class="show-single" data-toggle="tooltip_s3{{$row->product_id}}" data-html="true" title="<div class='tooltip_1'><p  productid='{{$row->product_id}}' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
			                  <span class=""><a href="javascript:void(0);" class="show-single" productid="{{$row->product_id}}">
			                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
			                  <!--tooltip-->
			                  
			                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_{{$row->product_id}}" onclick="compare({{$row->product_id}})">Compare</a>
                        <span id="added_compare_deal_{{$row->product_id}}" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
			                </span>
                            	</span> 
							         <p class="mystorep">Cameras</p>
                            	<a href="/product-details/{{$row->slug}}">
                              <h3>{{$row->product_name}}</h3>
                              <div class="product-thumbnail">
                                <img src="{{getenv('URL')}}{{$row->product_img}}" id="best_seller{{$row->product_id}}" alt="{{$row->product_img}}" style="height: 230px;">
                              </div>
                              </a>
                              <div class="price-add-to-cart">
			                    <span class="price">
			                        <span class="electro-price" style="position: relative;">
			                            <ins><span class="amount"> ${{$row->current_price}}</span></ins>
			                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">${{$row->mrp}}</span></del>
			                            <span class="amount"> </span>
			                        </span>
			                    </span>
                 
			                       <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome({{$row->product_id}},'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
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

                        @endforeach
                         </ul>
                    </div>
                  </div>
                  
                 
                </div>
              </div>
            </div>
	</div>
</div>
</main><!-- /.site-main -->
</div><!-- /.content-area -->
</div><!-- /.container -->
</div><!-- /.site-content -->
</div>

<!-- style -->
<script type="text/javascript">
    $(document).ready(function (){
        $('#attr_color').change(function (){
            
            var color_id = $('#attr_color').val();
            /*getting color by id*/
            $.ajax({
                "url" : '/product-details/get-color-by-id/'+color_id,
                "method" : 'get',
                "success" : function (res){
                    console.log('res');
                    console.log(res);
                    $('#xzoom').attr('src', 'https://admin-api.moretolike.com/uploads/'+JSON.parse(res).product_img);
                    $('#xzoom').attr('xoriginal', 'https://admin-api.moretolike.com/uploads/'+JSON.parse(res).product_img);

                },
                "error" : function (e){
                    console.log('e');
                    console.log(e);
                }
            });
            /*getting color by id*/

            /*$('.wp-post-image').removeClass($('.wp-post-image').attr('class'));
            $('.wp-post-image').addClass('saturate');*/
        });
    });

    function setMainImage(img){
        $('#xzoom').attr('src', img);
        $('#xzoom').attr('xoriginal', img);

    }

    function clearImg(){
        document.getElementById('attr_color').value='';
        var img = "<?=getenv('URL').$pro_info->product_img?>";

        $('#xzoom').attr('src', img);
        $('#xzoom').attr('xoriginal', img);
    }

    function followUser(follower_id, following_id, like_id){
      jQuery.ajax({
          url:'/product-details/add-user-follow',
          type:'POST',
           headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          data:{follower_id: follower_id, following_id: following_id},
          success:function(result) {
            if(result == 'fa-plus'){
              $('#user_'+like_id).removeClass('fa-check');
              $('#user_'+like_id).addClass(result);
            }else{
              $('#user_'+like_id).removeClass('fa-plus');
              $('#user_'+like_id).addClass(result);
            }
            //bootbox.dialog({message : result});
          },
          error:function(e){
            console.log(e);
          }
       });
      
    }

</script>
 <style type="text/css">
    .saturate { filter: saturate(3); }
    .grayscale { filter: grayscale(100%); }
    .contrast { filter: contrast(160%); }
    .brightness { filter: brightness(0.25); }
    .blur { filter: blur(3px); }
    .invert { filter: invert(100%); }
    .sepia { filter: sepia(100%); }
    .huerotate { filter: hue-rotate(180deg); }
    .rss.opacity { filter: opacity(50%); }
</style>
<!-- style -->
@include('home-sections/brands-carousel')
@include('layouts/footer')