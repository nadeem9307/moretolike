@if(count($best_seller_products) > 0)
<style type="text/css">
  a.collectioncl{float: right;}
</style>
<section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">

    <header>

        <h2 class="h1">Best Sellers</h2>

        <ul class="nav nav-inline">
            <?php $i = 1;?>
            <li style="cursor: pointer;" class="nav-item active" onclick="shortProduct('*', 'best_seller')"><span class="nav-link">Top 20</span></li>
            @foreach($sub_category as $row)
             @if($i < 8 )
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)"  onclick="shortProduct({{$row->id}}, 'best_seller')">{{$row->name}}</a></li>
             @endif
            <?php $i++; ?>
            @endforeach
            <!-- 

            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Laptops &amp; Computers</a></li>

            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Video Cameras</a></li> -->
        </ul>
    </header>

    <div id="home-v1-product-cards-careousel">
        <div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">

            <ul class="products columns-3" id="best_seller">
                @foreach($best_seller_products as $value)
                <li class="product product-card bestSeller best_seller">
                  <a class="hidden" href="javascript:void(0)">{{$value->pk_id}}</a>
                    <div class="product-outer" style="margin-right: 20px;">
                        <div class="media product-inner">

                            <a class="media-left" href="product-details/{{$value->slug}}" title="Pendrive USB 3.0 Flash 64 GB">
                                <img class="media-object wp-post-image img-responsive" src="{{getenv('URL')}}{{$value->product_img}}" data-echo="{{getenv('URL')}}{{$value->product_img}}" id="best_seller{{$value->product_id}}" alt="">
                            </a>

                            <div class="media-body">
                               <span class="loop-product-categories">
                                @if($value->shareable_product == 'shareable')   
             <a href="javascript:void(0);" class="showtt" data-toggle="tooltip{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get("user_id")}}, 1)">Click to add..</a></span></div>'> </a>
             @else
             <a href="javascript:void(0);" class="showtt" data-toggle="tooltip{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get("user_id")}}, 0)">Click to add..</a></span></div>'> </a>
             @endif
                
             <!-- <a href="javascript:void(0);" class="showtt" data-toggle="tooltip_s3{{$value->product_id}}" data-html="true" title='<div class="tooltip_1"><p  productid="{{$value->product_id}}" style="text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff" class="close tooltipClose4">x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class="undeline">Superstore</span> <span class="ftrt"> <a href="product-details/{{$value->slug}}">Click to add..</a></span></div>'> </a> -->

                  <span class=""><a href="javascript:void(0);" class="show-tt4" productid="{{$value->product_id}}">
                    <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
                  <!--tooltip-->
                  
                  <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_{{$value->product_id}}" onclick="compare({{$value->product_id}})">Compare</a>
                                        <span id="added_compare_deal_{{$value->product_id}}" class="compare-added"><i class="fa fa-check" ></i> Added For Compare</span>
                </span>

                                <a href="product-details/{{$value->slug}}">
                                    <p class="mystorep">{{$value->name}}</p>
                                    <h3>{{$value->product_name}}</h3>
                                </a>

                                <div class="price-add-to-cart">
                                    <span class="price">
                                        <span class="electro-price">
                                            <ins><span class="amount"> </span></ins>
                                            <span class="amount">${{$value->current_price}}</span>
                                        </span>
                                    </span>
<!-- 
                                   <span class="wrappert">
                                    @if($value->shareable_product == 'shareable')
                                    <a rel="" href="javascript:void(0)" class="button add_to_collection_button" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)">Add To Collection</a>
                                    @else
                                    <a rel="" href="javascript:void(0)" class="button add_to_collection_button" onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 0)">Add To Collection</a>
                                    @endif

                                    <div class="tooltip">Add To Collection</div></span> -->
                             <span class="wrappersz"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$value->product_id}},'best_seller')" style="float: right;"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                              <div class="line"></div>
                              <span>
                                           @if(Session::has('user_id'))
                              @if(in_array($value->product_id, $product_like))
                                  <a href="javascript:void(0)" id="product_like_{{$value->product_id}}" class="abca"><i class="fa fa-heart"></i> {{$value->product_like}}</a>
                                @else
                                  <a href="javascript:void(0)" id="product_like_{{$value->product_id}}" class="abca" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$value->product_id}})"><i class="fa fa-heart-o"></i> {{$value->product_like}}</a>
                                @endif
                              
                                @if($value->shareable_product == 'shareable')
                                <span class="wrappertz">
                                  <div class="tooltip"  >Add To Collection</div>
                                  <a href="javascript:void(0)"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a>
                                </span>
                                @else
                                <span class="wrappertz">
                                  <div class="tooltip"  >Add To Collection</div>
                                  <a href="javascript:void(0)"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 0)" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a>
                                </span>
                                @endif


                              



                                     @else
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">{{$value->product_like}}</a>
                             <span class="wrappert">
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="" style="color: #9a9797;    float: right;"> <span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span> Collection</a> 
                              <div class="tooltip">Add To Collection</div></span>
                              @endif
                                        </span>
                                </div><!-- /.price-add-to-cart -->

                                <div class="hover-area" style="border: none;">
                                    <div class="action-buttons ">
          <!--  <span class="quickb2az" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{$value->product_id}})" style="color:white !important;"> Add To My Shop</a></span> -->
       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$value->product_id}}"" data-effect="mfp-zoom-in"><a href="javascript:void(0)" style="color:white !important;">Quick View</a></span>

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
                        <h5 class="cost"><span class="glyphicon glyphicon-usd"></span>${{$value->current_price}} <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span>${{$value->mrp}}</small></h5>
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
                            @if($value->shareable_product == 'shareable')
                            <a rel="" href="javascript:void(0)" class="button add_to_collection_button btn btn-primary quick-moretoliike"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 1)">
                            Add To Collection
                            </a>
                            @else
                            <a rel="" href="javascript:void(0)" class="button add_to_collection_button btn btn-primary quick-moretoliike"  onclick="addToCollectionConfirm({{$value->product_id}}, {{Session::get('user_id')}}, 0)">
                            Add To Collection
                            </a>
                            @endif
                            <!-- <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> ADD TO COLLECTION</button> -->
                        </div>
                        </div>
                    </div>
                   
                  
                    
                    <!-- Product short description -->
                  
                    <!-- Product cart link -->
                   
              
                  </div>
            </div>
                            </div>
                        </div><!-- /.product-inner -->
                    </div><!-- /.product-outer -->

                </li><!-- /.products -->
                @endforeach
               <!-- /.products -->
            </ul>
            
        </div>
    </div><!-- #home-v1-product-cards-careousel -->

</section>
@endif