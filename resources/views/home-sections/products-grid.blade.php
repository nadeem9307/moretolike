

<section class="products-2-1-2 animate-in-view fadeIn animated" data-animation="fadeIn">
                                <h2 class="sr-only">Products Grid</h2>
                                <div class="container">

                                    <ul class="nav nav-inline nav-justified">


                                    @foreach($category_home as  $key=>$category_home)

                                        @if($key == '0')
                                            <li class="nav-item"><a href="categories-products/{{$category_home->id}}" class="active nav-link">{{ $category_home->category_name}}</a></li>
                                        @else
                                            <li class="nav-item"><a href="categories-products/{{$category_home->id}}" class=" nav-link">{{ $category_home->category_name}}</a></li>
                                        @endif
                                    @endforeach

                                  
                                        <!--  <li class="nav-item"><a class="nav-link" href="shop.html">TV &amp; Audio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Cameras</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Audio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Smartphones</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">GPS &amp; Navi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Computers</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Portable Audio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Accessories</a></li> -->

                                    </ul>

                                    <div class="columns-2-1-2">
                                        <ul class="products exclude-auto-height">

                                            <li class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="product-details/{{$cat_product[0]->slug}}" rel="tag">{{$cat_product[0]->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$cat_product[0]->product_id}}" onclick="compare({{$cat_product[0]->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$cat_product[0]->product_id}}" style="padding-left: 71px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>
                                                            <a href="product-details/{{$cat_product[0]->slug}}">
                                                            <h3>{{$cat_product[0]->product_name }}</h3>
                                                            <div class="product-thumbnail">
                                                                <img data-echo="{{getenv('URL')}}{{ $cat_product[0]->product_img}}"
                                                                 src="{{getenv('URL')}}{{ $cat_product[0]->product_img}}" id="pro_grid{{$cat_product[0]->product_id}}" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$cat_product[0]->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$cat_product[0]->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                            <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$cat_product[0]->product_id}},'pro_grid')"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                            
                                                        </div><!-- /.price-add-to-cart -->
                                  <div class="hover-area">
                                <div class="action-buttons ">
                                      @if($session != '')
                                 <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$cat_product[0]->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$cat_product[0]->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                   <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javaascript:void(0)" onclick="quickView({{json_encode($cat_product[0]->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
                            </div>
                                                       
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                            <li class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                       <span class="loop-product-categories">
                                                            <a href="product-details/{{$cat_product[1]->slug}}" rel="tag">{{$cat_product[1]->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$cat_product[1]->product_id}}" onclick="compare({{$cat_product[1]->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$cat_product[1]->product_id}}" style="padding-left: 59px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>

                                                        <a href="product-details/{{$cat_product[1]->slug}}">
                                                            <h3>{{$cat_product[1]->product_name }}</h3>
                                                            <div class="product-thumbnail">

                                                                <img data-echo="{{getenv('URL')}}{{ $cat_product[1]->product_img}}" 
                                                                src="{{getenv('URL')}}{{ $cat_product[1]->product_img}}" id="pro_grid{{$cat_product[1]->product_id}}" alt="">

                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$cat_product[1]->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$cat_product[1]->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                              <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$cat_product[1]->product_id}},'pro_grid')"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                        </div><!-- /.price-add-to-cart -->
                               <div class="hover-area">
                                <div class="action-buttons ">
                                      @if($session != '')
                                <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$cat_product[1]->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$cat_product[1]->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                   <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)"  onclick="quickView({{json_encode($cat_product[1]->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
                            </div>
                                                       
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>

                                         
                                        </ul>

                                        <ul class="products exclude-auto-height product-main-2-1-2">



                       




                                            <li class="last product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="product-details/{{$cat_product[2]->slug}}" rel="tag">{{$cat_product[2]->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$cat_product[2]->product_id}}" onclick="compare({{$cat_product[2]->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$cat_product[2]->product_id}}" style="padding-left: 409px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>
                                                        <a href="product-details/{{$cat_product[2]->slug}}">
                                                            <h3>{{$cat_product[2]->product_name }}</h3>
                                                            <div class="product-thumbnail">
                                                                <img class="wp-post-image" data-echo="{{getenv('URL')}}{{ $cat_product[2]->product_img}}" 
                                                                src="{{getenv('URL')}}{{ $cat_product[2]->product_img}}" id="pro_grid{{$cat_product[2]->product_id}}" alt="">

                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$cat_product[2]->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$cat_product[2]->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert1"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                            <span class="wrappers1"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$cat_product[2]->product_id}},'pro_grid')"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                        </div><!-- /.price-add-to-cart -->
                                           <div class="hover-area">
                                <div class="action-buttons ">
                                      @if($session != '')
                                <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$cat_product[2]->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$cat_product[2]->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                   <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{json_encode($cat_product[2]->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
                            </div>
                                                       
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                        </ul>

                                        <ul class="products exclude-auto-height">
                                            <li class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="product-details/{{$cat_product[3]->slug}}" rel="tag">{{$cat_product[3]->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$cat_product[3]->product_id}}" onclick="compare({{$cat_product[3]->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$cat_product[3]->product_id}}" style="padding-left: 59px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>
                                                        <a href="product-details/{{$cat_product[3]->slug}}">
                                                            <h3>{{$cat_product[3]->product_name }}</h3>
                                                            <div class="product-thumbnail">

                                                                <img class="wp-post-image" data-echo="{{getenv('URL')}}{{ $cat_product[3]->product_img}}" src="{{getenv('URL')}}{{ $cat_product[3]->product_img}}" id="pro_grid{{$cat_product[3]->product_id}}" alt="">


                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$cat_product[3]->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$cat_product[3]->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                            <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$cat_product[3]->product_id}},'pro_grid')"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                        </div><!-- /.price-add-to-cart -->
                            <div class="hover-area">
                                <div class="action-buttons ">
                                       @if($session != '')
                                <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$cat_product[3]->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$cat_product[3]->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                   <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)" onclick="quickView({{json_encode($cat_product[3]->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
                            </div>
                                                        
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                            <li class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="product-details/{{$cat_product[4]->slug}}" rel="tag">{{$cat_product[4]->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$cat_product[4]->product_id}}" onclick="compare({{$cat_product[4]->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$cat_product[4]->product_id}}" style="padding-left: 59px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>
                                                        <a href="product-details/{{$cat_product[4]->slug}}">
                                                            <h3>{{$cat_product[4]->product_name }}</h3>
                                                            <div class="product-thumbnail">

                                                                <img class="wp-post-image" data-echo="{{getenv('URL')}}{{ $cat_product[4]->product_img }}" src="{{getenv('URL')}}{{ $cat_product[4]->product_img}}" id="pro_grid{{$cat_product[4]->product_id}}" alt="">


                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$cat_product[4]->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$cat_product[4]->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                           <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCarthome({{$cat_product[4]->product_id}},'pro_grid')"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                        </div><!-- /.price-add-to-cart -->
                                          <div class="hover-area">
                                <div class="action-buttons ">
                                      @if($session != '')
                                <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$cat_product[4]->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$cat_product[4]->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                   <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javascript:void(0)"  onclick="quickView({{json_encode($cat_product[4]->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
                            </div>
                                                       
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                        </ul>
                                    </div>
                            
                                </div>
</section>