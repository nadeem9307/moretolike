@if(count($on_sale_slider) > 0)
<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
  <header>
     <div class="row">
      <div class="col-sm-6"><h2 class="h1">Popular Products</h2></div>
     
      <div class="col-sm-6 tabmar">
        <a href="javascript:void(0)" class="brdmenu" onclick="shortProduct('*', 'on_sale_slider')">Top 20 </a>
        <?php $i = 1;?>
        @foreach($sub_category as $row) 
          @if($i < 8 )
          <a href="javascript:void(0)"  onclick="shortProduct({{$row->id}}, 'on_sale_slider')" class="brdmenu1">{{$row->name}}</a>
          @endif
          <?php $i++; ?>
        @endforeach <!-- 
        <a href="#" class="brdmenu1">Laptop</a> 
        <a href="#" class="brdmenu1">Gaming</a></div> -->
    </div>
    <div class="owl-nav"> 
      <a href="#products-carousel-prev" data-target="#category_4" class="slider-prev">
        <i class="fa fa-angle-left"></i></a> 
        <a href="#products-carousel-next" data-target="#category_4" class="slider-next">
          <i class="fa fa-angle-right"></i></a> 
      </div>
  </header>
  <div id="category_4" class="row">
     <div class="col-lg-12 col-md-12">
      <div class="products owl-carousel recently-added-products products-carousel columns-6" id="on_sale_slider">
        <!-- repeat code will placed here -->
        @foreach($on_sale_slider as $key=>$value)
        <div class="product category4 on_sale_slider">
          <a class="hidden" href="javascript:void(0)">{{$value->pk_id}}</a>
          <div class="product-outer">
            <div class="product-inner">
                <span class="loop-product-categories">
                 @if($value->shareable_product == 'shareable')   
             <a href="javascript:void(0);" class="showtt" data-toggle="tooltip{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get("user_id")}}, 1)">Click to add..</a></span></div>'> </a>
             @else
             <a href="javascript:void(0);" class="showtt" data-toggle="tooltip{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get("user_id")}}, 0)">Click to add..</a></span></div>'> </a>
             @endif
             <!-- <a href="javascript:void(0);" class="showtt" data-toggle="tooltip_s2{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose3">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="product-details/{{$value->slug}}">Click to add..</a></span></div>'> </a> -->

                  <span class=""><a href="javascript:void(0);" class="show-tt3" productid="{{$value->product_id}}">
                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
                  <!--tooltip-->
                  
                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_{{$value->product_id}}" onclick="compare({{$value->product_id}})">Compare</a>
                                        <span id="added_compare_deal_{{$value->product_id}}" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                </span>

                <a href="product-details/{{$value->slug}}">
                  <p class="mystorep">{{$value->name}}</p>
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
                   <!--  <span class="wrappert">
                      @if($value->shareable_product == 'shareable')
                      <a rel="" href="javascript:void(0)" class="button add_to_collection_button"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)">Add To Collection</a>
                      @else
                      <a rel="" href="javascript:void(0)" class="button add_to_collection_button"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)">Add To Collection</a>
                      @endif
                      <div class="tooltip">Add To Collection</div></span> -->
                       <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$value->product_id}},'best_seller')" style="float: right;"><img src="{{asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                        <div class="line"></div><span>
                         @if(Session::has('user_id'))
          @if(in_array($value->product_id, $product_like))
                            <a href="javascript:void(0)" id="product_like_{{$value->product_id}}" class="abca"><i class="fa fa-heart"></i> {{$value->product_like}}</a>
                          @else
                            <a href="javascript:void(0)" id="product_like_{{$value->product_id}}" class="abca" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$value->product_id}})"><i class="fa fa-heart-o"></i> {{$value->product_like}}</a>
                          @endif
                           @if($value->shareable_product == 'shareable')
                                <span class="wrappert">
                                  <div class="tooltip"  >Add To Collection</div>
                                  <a href="javascript:void(0)"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a>
                                </span>
                                @else
                                <span class="wrappert">
                                  <div class="tooltip"  >Add To Collection</div>
                                  <a href="javascript:void(0)"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 0)" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a>
                                </span>
                                @endif
                       @else
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">{{$value->product_like}}</a>
             <span class="wrappert">
                          <div class="tooltip"  >Add To Collection</div>
                          <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a>
                        </span>@endif
                                        </span>
                </div><!-- /.price-add-to-cart -->
                
                <div class="hover-area" style="border: none;">
                    <div class="action-buttons">
                   <!--   <span class="quickb2az" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{$value->product_id}})" style="color:white !important;"> Add To My Shop</a></span> -->
                      <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$value->product_id}}"" data-effect="mfp-zoom-in"><a href="javascript:void(0)" style="color:white !important;">Quick View</a></span>
                    </div>
                </div>
                      <div id="wpb_wl_quick_view_{{$value->product_id}}" class="mfp-hide mfp-with-anim wpb_wl_quick_view_content wpb_wl_clearfix product">
                  <div class="col-md-6">
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-3 images" data-columns="1"><div class="">
                      <figure class="woocommerce-product-gallery__wrapper">
                        <div data-thumb="{{getenv('URL')}}{{$value->product_img}}" class="woocommerce-product-gallery__image"><a href="{{getenv('URL')}}{{$value->product_img}}" data-fancybox="gallery-719" style="overflow: hidden;"><img width="600" height="550" src="{{getenv('URL')}}{{$value->product_img}}" class="attachment-shop_single size-shop_single wp-post-image eilandscape" alt="" title="" data-src="{{getenv('URL')}}{{$value->product_img}}" data-large_image="{{getenv('URL')}}{{$value->product_img}}" data-large_image_width="720" data-large_image_height="660" srcset="{{getenv('URL')}}{{$value->product_img}} 600w, {{getenv('URL')}}{{$value->product_img}} 300w,{{getenv('URL')}}{{$value->product_img}} 720w" sizes="(max-width: 600px) 100vw, 600px"><!-- POST ID: 2932  and IMAGE URL:  --></a>
                        </div><!-- POST ID: 2650  and IMAGE URL:  -->
                         </figure></div></div>
                  </div>
                  <div class="col-md-6">
                    <!-- Product Title -->
                    <div class="col-md-12 product_content">
                       <h4 class="wpb_wl_product_title">{{$value->product_name}}</h4>
                        <h4>Product Id: <span>{{$value->product_id}}</span></h4>
                        <h5 class="cost"><span class="glyphicon glyphicon-usd"></span> {{$value->current_price}} <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> {{$value->mrp}}</small></h5>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  when an unknown printer took a galley of type and scrambled it to make a type  industry.</p>
                       
                       
                        <div class="space-ten"></div>

                       <div class="col-md-12">
                          <input type="number" id="quantity_5b5018ab23158" class="input-text qty text" step="1" min="1" max="20" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                           <button type="button" class="btn btn-primary quick-moretoliike"><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART</button>
                        </div>
                         <div class="col-md-6">
                            <button type="button" class="btn btn-primary quick-moretoliike"><span class="glyphicon glyphicon-heart"></span> ADD TO COLLECTION</button>
                        </div>
                        </div>
                    </div>
                   
                  
                    
                    <!-- Product short description -->
                  
                    <!-- Product cart link -->
                   
              
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