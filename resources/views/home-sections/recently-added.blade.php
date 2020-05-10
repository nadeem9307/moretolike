@if(count($recently_added) > 0)
<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
  <header>
    <h2 class="h1">Recently Added</h2>
    <div class="owl-nav"> <a href="#products-carousel-prev" data-target="#recently-added-products-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a> <a href="#products-carousel-next" data-target="#recently-added-products-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a> </div>
  </header>
  <div id="recently-added-products-carousel">
    <div class="woocommerce columns-6">
      <div class="products owl-carousel recently-added-products products-carousel columns-6">
        <!-- repeat code will placed here -->
        @foreach($recently_added as $key=>$value)
        <div class="product">
          <div class="product-outer" style="height: 335px;">
            <div class="product-inner">
                <span class="loop-product-categories"><a href="/product-details/$value->slug" rel="tag">{{$value->name}}</a>
                <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_{{$value->product_id}}" onclick="compare({{$value->product_id}})">Compare</a>
                                        <span id="added_compare_deal_{{$value->product_id}}" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                </span>

                <a href="/product-details/{{$value->slug}}">
                    <h3>{{$value->product_name}}</h3>
                    
                    <div class="product-thumbnail">
                        <img src="{{getenv('URL')}}{{$value->product_img}}" data-echo="{{getenv('URL')}}{{$value->product_img}}" id="best_seller{{$value->product_id}}" alt="">
                    </div>
                </a>

                <div class="price-add-to-cart">
                    <span class="price">
                        <span class="electro-price">
                            <ins><span class="amount"> ${{$value->current_price}}</span></ins>
                            <del><span class="amount">${{$value->mrp}}</span></del>
                            <span class="amount"> </span>
                        </span>
                    </span>
                    <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                    <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$value->product_id}},'best_seller')"><img src="{{asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                </div><!-- /.price-add-to-cart -->
                
                <div class="hover-area">
                    <div class="action-buttons">
                     @if(Session::has('user_id'))
          <a href="javascript:void(0)" rel="nofollow" onclick="productLike({{Session::get('user_id')}}, {{$value->product_id}})" class="add_to_wishlist">Add To Like</a>
 <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$value->product_id}},{{$session}})"><i class="add_to_wishlist1" id="deals_{{$value->product_id}}"></i> Add To Wishlist</a>
                       @else
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
              <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>@endif
                      <span class="quickg1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{$value->product_id}})" style="color:white !important;"> Quick View</a></span>
                      <span class="quickg1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{$value->product_id}})" style="color:white !important;"> Quick View</a></span>
                    </div>
                </div>
            </div><!-- /.product-inner -->
        </div><!-- /.product-outer --> 
        </div>
        @endforeach
        <!-- repeat code will placed here -->
        
      </div>
    </div>
  </div>
</section>
@endif