@include('frontend/include/header')
   </div>
      <hr>
<div class="container content mrgtp">
  <!--list profile-->
  <div class="row">
      <ul class="top-link">
        <li><a href="">Home</a></li>
        <li><i class="fa fa-angle-right"></i></li>
         <li><a href="" class="top-link-btn">color</a></li>
         <li><i class="fa fa-angle-right"></i></li>

           <li><a href="">{{$data['color']->color_name}}</a></li>
      </ul>
    </div>
  <div class="row shop-margin">

    <div class="col-md-3">
      <div class="row">
        <div class="col-md-12 notification2">
        <ul class="notification">
             <li><p><b>Show the following</b></p></li>
            <li><i class="fa fa-angle-right"></i> <a href="">All</a></li>
            <li><i class="fa fa-angle-right"></i> <a href=""> New In</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="">On Sale</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="">Exploare</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="">Stores</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="">People</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="">Blog</a></li>
        </ul>
    </div>

    <div class="col-md-12 brd-line">
        <h4 class="brand">Filter</h4>
        <ul class="readmore">
         <li><p><b>Brand</b></p></li>
          <li><input type="checkbox"> <span class="inputpa">Biba </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">brand1 </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">nbvnvbn </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">ghfghgf </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">nnnnn </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Apple </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Samsung </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">MI </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">cvvgbfgfd </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">oppo </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">vivo </span><span class="count">(4)</span></li>

                        <li><a href="#">+ Show more</a></li>
                    </ul>
                </div>
                <div class="col-md-12 brd-line">

                    <ul class="readmore">
                        <li>
                            <p><b>Color</b></p>
                        </li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Black  </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Black Leather </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Turquoise </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">White </span><span class="count">(4)</span></li>
                        <li>
                            <input type="checkbox"> <span class="inputpa">Gold </span><span class="count">(4)</span></li>

                        <li><a href="#">+ Show more</a></li>
                    </ul>
                </div>
                <div class="col-md-12 brd-line">

                    <ul class="readmore">
                        <li>
                            <p><b>Price</b></p>
                        </li>
                        <li>Price Slider</li>
                    </ul>
                </div>
                <div class="col-md-12 ">

                    <ul class="readmore">
                        <li>
                            <p><b>Add Banner</b></p>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/images/ad-banner-sidebar.jpg')}}" alt="Banner IMage"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 brd-line">
                    <h4 class="brand">Latest Products</h4>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="#"><img src="{{asset('assets/images/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="#">Headphones USB</a></h4>
                                    <p>$275</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="#"><img src="{{asset('assets/images/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="#">Headphones USB</a></h4>
                                    <p>$275</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="#"><img src="{{asset('assets/images/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="#">Headphones USB</a></h4>
                                    <p>$275</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="#"><img src="{{asset('assets/images/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="#">Headphones USB</a></h4>
                                    <p>$275</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="#"><img src="{{asset('assets/images/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="#">Headphones USB</a></h4>
                                    <p>$275</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--left menu end-->
        <div class="col-md-9">
            <h2>{{$data['color']->color_name}}</h2>
            <small>Showing {{count($data['product'])}} results</small>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="search-shop">
                        <li>
                            <input type="text" class="form-control" placeholder="Search product..." name="search_text" value="">
                        </li>
                        <li>
                            <select name="drp_search" class="form-control">
                                <option value="" selected="selected">Default Sorting</option>
                                <option value="new">Short by Newness</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="price-asc">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </li>
                        <li>
                            <select name="drp_search" class="form-control">
                                <option value="" selected="selected">Select Categaries</option>
                                <option value="new">Short by Newness</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="price-asc">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </li>
                        <li>
                            <select name="ppp" onchange="this.form.submit()" class="form-control">
                                <option value="15" selected="selected">Show 15</option>
                                <option value="-1">Show All</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin:auto; margin-bottom: 30px;">
                @if(isset($data['product']) && !empty($data['product']))
                    @foreach($data['product'] as $row)
                        <div class="product-shop-margin">
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
                                        <h5>{{$row->category_name}}</h5>
                                    </div>
                                    <div class="price-detail">
                                        <h3><span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                       <a href="javascript:void(0);" style="text-transform: capitalize;">{{substr($row->product_name,0, 30)}}</a>
                                       </span></h3>
                                    </div>
                                </div>
                               <!--  <div class="photo hovereffect">
                                    <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}"  data-effect="mfp-zoom-in" >
                                 <a href="javascript:void(0);"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="a" /></a> 
                                 </span>
                                    
                                </div> -->

                                <!-- modal start -->
                                <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}"  data-effect="mfp-zoom-in" >
                                 <a href="javascript:void(0);"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="a" /></a> 
                                 </span>
                                 
                              </div>
                              <!-- modal content-->
                              <div id="wpb_wl_quick_view_{{$row->product_id}}" class="mfp-with-anim wpb_wl_quick_view_content wpb_wl_clearfix product mfp-hide">
                                 <div class="container">
                                    <!--Product Detail -->
                                    <div class="row bg-imgpro">
                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-sm-6 left1">
                                                <h6><i class="fa fa-barcode"></i> My Store</h6>
                                             </div>
                                             <div class="col-sm-6 left1">
                                                <h6 class="compare cursor-pointer">
                                                   <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_1_{{$row->product_id}}" class="cursor-pointer">
                                                      <i class="ec ec-compare"></i> Compare
                                                   </a>
                                                </h6>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="preview col-md-6">
                                                <div class="preview-pic tab-content">
                                                   <div class="tab-pane active" id="pic-1"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}"></div>
                                                   <div class="tab-pane" id="pic-2"><img src="{{asset('assets/images/dish.png')}}"></div>
                                                   <div class="tab-pane" id="pic-3"><img src="{{asset('assets/images/game.png')}}"></div>
                                                   <div class="tab-pane" id="pic-4"><img src="{{asset('assets/images/camras.jpg')}}"></div>
                                                   <div class="tab-pane" id="pic-5"><img src="{{asset('assets/images/mrt.png')}}"></div>
                                                </div>
                                                <ul class="preview-thumbnail nav nav-tabs border-none">
                                                   <li class="left active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('assets/images/dish.png')}}"></a></li>
                                                   <li class="left"><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('assets/images/dish.png')}}"></a></li>
                                                   <li class="left"><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('assets/images/dish.png')}}"></a></li>
                                                   <li class="left"><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('assets/images/dish.png')}}"></a></li>
                                                   <li class="left"><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('assets/images/dish.png')}}"></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="row martop">
                                             <div class="col-sm-3 left1">
                                                <h6><a href="javascript:void(0)"><i class="ec ec-favorites"></i> </a> 3</h6>
                                             </div>
                                             <div class="col-sm-6 compare left1">
                                                <h6><span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)">Collection</a> <span class="tooltip">Add To collection</span> </span> </h6>
                                             </div>
                                          </div>
                                       </div>
                                       <!--img-->
                                       <div class="col-sm-6 brddetail">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <h2 style="text-transform: capitalize;">{{substr($row->product_name,0, 30)}}</h2>
                                             </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <h2>${{money_format('%i',$row->current_price)}}</h2>
                                             </div>
                                             <div class="col-sm-8">

                                                @for($i=0; $i<5; $i++)
                                                   @if($i < $row->product_review_count['0']->reviews_avg)
                                                      <i class="fa fa-star checked"></i>
                                                   @else
                                                      <i class="fa fa-star"></i>
                                                   @endif
                                                @endfor
                                                <span>({{$row->product_review_count['0']->total}} customer rewiews)</span>
                                             </div>
                                          </div>
                                          <div class="row mrgbrd">
                                             <div class="col-sm-6">
                                                <select name="drp_search" class="form-control">
                                                   <option value="" selected="selected">choose an option</option>
                                                   <option value="new">red</option>
                                                   <option value="popularity">black</option>
                                                   <option value="rating">white</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-4"><a href="">Clear </a></div>
                                             <div class="col-sm-4"><input type="number" class="select1" name="quantity" min="1" max="5" value="1"></div>
                                          </div>
                                          <div class="row mrgbrd">
                                             <div class="col-sm-6">
                                                <select name="drp_search" class="form-control">
                                                   <option value="" selected="selected">choosean an color</option>
                                                   <option value="new">LARGE </option>
                                                   <option value="popularity">XL</option>
                                                   <option value="rating">XXL</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-6"><button class="btn btn-warning btn">Add To Cart</button></div>
                                          </div>
                                          <!-- form -->
                                          <hr>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <h4 class="prod">Product Details</h4>
                                             </div>
                                             <div class="col-sm-12">
                                                {!!html_entity_decode($row->product_details)!!}
                                             </div>
                                             <div class="col-sm-12">
                                                <p class="prod"><b>SKU:</b> {{$row->sku}} </p>
                                             </div>
                                             <div class="col-sm-12">
                                                <h4 class="text-center">Share this product</h4>
                                             </div>
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
                                       <!--detail-->
                                    </div>
                                    <!-- /container --> 
                                    <!---Store detail-->
                                    <!--bg-->
                                 </div>
                                 <!--second container-->
                                 <div class="container mt-4 mrgtp">
                                    <ul class="nav nav-tabs responsive  d-none d-sm-flex" role="tablist" id="tabs-0">
                                       <li class="nav-item credit">
                                          <a class="nav-link active" data-toggle="tab" href="#Accessories" role="tab">Accessories</a>
                                       </li>
                                       <li class="nav-item credit">
                                          <a class="nav-link" data-toggle="tab" href="#Description" role="tab">Description</a>
                                       </li>
                                       <li class="nav-item credit">
                                          <a class="nav-link" data-toggle="tab" href="#Specification" role="tab">Specification</a>
                                       </li>
                                       <li class="nav-item credit">
                                          <a class="nav-link credit" data-toggle="tab" href="#Review" role="tab">Review</a>
                                       </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content responsive d-none d-sm-flex" style="border: 1px solid #d7d7d7;">
                                       <div class="active tab-pane" id="Accessories" role="tabpanel">
                                          <div class="container-fluid">
                                             @if(isset($row->acc_product) && !empty($row->acc_product))
                                             <div class="row mt-3">
                                                <div class="row">
                                                      <?php 
                                                         $i = 1;
                                                         $total = $row->current_price;
                                                         $mrp = $row->mrp;
                                                      ?>
                                                      @foreach($row->acc_product as $acc_product)
                                                         <div class="col-lg-3 col-sm-4  colmdpdmg">
                                                         @if($i > $row->acc_product)
                                                            <div class="plus-btn1"><i class="fa fa-plus"></i></div>
                                                         @endif

                                                            <div class="thumbnail thumbrd">
                                                               <p class="text"><span style="text-transform: capitalize;">{{$acc_product->category_name}}</span></p>
                                                               <h6 class="price-detail" style="text-transform: capitalize;">{{$acc_product->product_name}}</h6>
                                                               <img src="{{ getenv('URL')}}{{$acc_product->product_img}}" class="img-responsive">
                                                               <div class="caption">
                                                                  <div class="row">
                                                                     <div class="col-md-12 col-xs-12">
                                                                        <h3 class="redcl"><label>${{money_format('%i',$acc_product->current_price)}}</label> <span class="smal-font"><del>${{money_format('%i',$acc_product->mrp)}}</del></span> </h3>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <?php
                                                            $total = $total+$acc_product->current_price; 
                                                            $mrp = $mrp+$acc_product->mrp;
                                                            $i++; 
                                                         ?>
                                                      @endforeach
                                                   
                                                   <div class="col-lg-3 col-sm-12 price-box">
                                                      <h3 class="redcl"><label>${{money_format('%i', $total)}}</label> <span class="smal-font"><del>${{money_format('%i', $mrp)}}</del></span> </h3>
                                                      <p> for {{count($row->acc_product)+1}} items</p>
                                                      <button class="btn btn-warning">Add All To Cart</button>
                                                   </div>
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                   <div class="col-md-12">
                                                      <input type="checkbox"> <b>This product: </b><a href="">{{$row->product_name}}- </a><span class="price-red">${{money_format('%i',$row->current_price)}}</span> <br>

                                                      @foreach($row->acc_product as $acc_product_list)
                                                         <input type="checkbox"> <a href="" class="linkbrd">{{$acc_product_list->product_name}} -</a> <span class="price-red"> ${{money_format('%i', $acc_product_list->current_price)}}</span><br>
                                                      @endforeach
                                                      <!-- <input type="checkbox"> <a href="" class="linkbrd">Headphones USB Wires - </a> <span class="price-red"> $50.00 </span><br> -->
                                                   </div>
                                                </div>
                                             </div>
                                             @endif
                                          </div>
                                       </div>
                                       <div class="tab-pane" id="Description" role="tabpanel">
                                          <div class="container-fluid">
                                             <div class="row mt-3">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      {!!html_entity_decode($row->description)!!}
                                                      
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane" id="Specification" role="tabpanel">
                                          <div class="container-fluid">
                                             <div class="row mt-3">
                                                <h3>Technical Specifications</h3>
                                                <table class="table">
                                                   <tbody>

                                                   @foreach($row->product_attr as $product_attr)
                                                      <tr>
                                                         <td>{{$product_attr->attribute_name}}</td>
                                                         <td>{{$product_attr->attribute_value}}</td>
                                                      </tr>
                                                   @endforeach

                                                      
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane" id="Review" role="tabpanel">
                                          <div class="container-fluid">
                                             <div class="row mt-3">
                                                <div class="advanced-review row">
                                                   <div class="col-md-8 col-xs-12">
                                                      <p>Based on {{$row->product_review_count['0']->total}} reviews</p>
                                                      <h3>{{$row->product_review_count['0']->reviews_avg}}</h3>
                                                      <p><span>over all</span></p>
                                                      <div class="rating-histogram">
                                                         <div class="rating-bar">
                                                            <span class="rating-review"><i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            </span>
                                                            <div class="rating-percentage-bar">
                                                               <span style="width:20%" class="rating-percentage">
                                                               </span>
                                                            </div>
                                                            <div class="rating-count">{{$row->product_review_count['0']->one}}</div>
                                                         </div>
                                                         <!-- .rating-bar -->
                                                         <div class="rating-bar">
                                                            <span class="rating-review"><i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            </span>
                                                            <div class="rating-percentage-bar">
                                                               <span style="width:40%" class="rating-percentage"></span>
                                                            </div>
                                                            <div class="rating-count">{{$row->product_review_count['0']->two}}</div>
                                                         </div>
                                                         <!-- .rating-bar -->
                                                         <div class="rating-bar">
                                                            <span class="rating-review"><i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            </span>
                                                            <div class="rating-percentage-bar">
                                                               <span style="width:60%" class="rating-percentage"></span>
                                                            </div>
                                                            <div class="rating-count zero">{{$row->product_review_count['0']->three}}</div>
                                                         </div>
                                                         <!-- .rating-bar -->
                                                         <div class="rating-bar">
                                                            <span class="rating-review"><i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star "></i>
                                                            </span>
                                                            <div class="rating-percentage-bar">
                                                               <span style="width:80%" class="rating-percentage"></span>
                                                            </div>
                                                            <div class="rating-count zero">{{$row->product_review_count['0']->four}}</div>
                                                         </div>
                                                         <!-- .rating-bar -->
                                                         <div class="rating-bar">
                                                            <span class="rating-review"><i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            <i class="fa fa-star checked"></i>
                                                            </span>
                                                            <div class="rating-percentage-bar">
                                                               <span style="width:100%" class="rating-percentage"></span>
                                                            </div>
                                                            <div class="rating-count zero">{{$row->product_review_count['0']->five}}</div>
                                                         </div>
                                                         <!-- .rating-bar -->
                                                      </div>
                                                   </div>
                                                   <div class="col-xs-12 col-md-4">
                                                      <div id="review_form_wrapper">
                                                         <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                               <h3 id="reply-title" class="comment-reply-title">Add a review
                                                                  <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                                  </small>
                                                               </h3>
                                                               <form action="#" method="post" id="commentform" class="comment-form">
                                                                  <p class="comment-form-rating">
                                                                     <label>Your Rating</label>
                                                                  </p>
                                                                  <input type="hidden" name="rating_val" id="rating_val" value="">
                
                                                                  <p class="stars">

                                                                     <span class="fa fa-star " id="1" onclick="rating(1)" style="cursor: pointer;"></span>
                                                                    <span class="fa fa-star " id="2" onclick="rating(2)" style="cursor: pointer;"></span>
                                                                    <span class="fa fa-star " id="3" onclick="rating(3)" style="cursor: pointer;"></span>
                                                                    <span class="fa fa-star" id="4" onclick="rating(4)" style="cursor: pointer;"></span>
                                                                    <span class="fa fa-star" id="5" onclick="rating(5)" style="cursor: pointer;"></span>


                                                                  </p>
                                                                  <p class="comment-form-comment">
                                                                     <label for="comment">Your Review</label>
                                                                     <textarea id="comment" name="comment" cols="30" rows="3" aria-required="true" class="form-control"></textarea>
                                                                  </p>
                                                                  <p class="form-submit">
                                                                     <button class="btn btn-warning">Add Review</button> 
                                                                  </p>
                                                                  <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="c7106f1f46">
                                                                  <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
                                                               </form>
                                                               <!-- form -->
                                                            </div>
                                                            <!-- #respond -->
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- /.col -->
                                                </div>
                                                <div id="comments">
                                                   <ul class="commentlist">
                                                      @foreach($row->product_review as $product_review)
                                                      <li itemprop="review" class="comment even thread-even depth-1">
                                                         <div id="comment-390" class="comment_container">
                                                            
                                                            @if(!empty($product_review->profile_image))
                                                              <img alt="avtar" src="{{asset('uploads')}}/{{$product_review->profile_image}}" class="avatar img-circle" style="height: 60px; width: 60px; border-radius: 40px;">
                                                              
                                                            @else
                                                              <img src="{{asset('uploads')}}/default-user.png" alt="profile image" class="img-circle" style="height: 60px; width: 60px; border-radius: 40px;" />
                                                            @endif

                                                            <div class="comment-text">
                                                               <span>
                                                               @for($i=0; $i<5; $i++)
                                                                  @if($i < $product_review->product_rating)
                                                                     <i class="fa fa-star checked"></i>
                                                                  @else
                                                                     <i class="fa fa-star"></i>
                                                                  @endif
                                                               @endfor
                                                               
                                                               </span>
                                                               <p class="meta">
                                                                  <strong style="text-transform: capitalize;">{{$product_review->customer_name}}</strong> –
                                                                  <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">{{$product_review->date}}</time>:
                                                               </p>
                                                               <div itemprop="description" class="description">
                                                                  <p>{{$product_review->product_comment}}
                                                                  </p>
                                                               </div>
                                                               
                                                            </div>
                                                         </div>
                                                      </li>
                                                      @endforeach
                                                   </ul>
                                                   <!-- /.commentlist -->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card-soup responsive d-sm-none" id="collapse-tabs-0">
                                       <div class="card nav-item credit">
                                          <div class="card-header">
                                             <h4 class="card-title"><a class="accordion-toggle nav-link active" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Accessories">Accessories</a></h4>
                                          </div>
                                          <div id="collapse-Accessories" class="collapse"></div>
                                       </div>
                                       <div class="card nav-item credit">
                                          <div class="card-header">
                                             <h4 class="card-title"><a class="accordion-toggle nav-link" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Description">Description</a></h4>
                                          </div>
                                          <div id="collapse-Description" class="collapse"></div>
                                       </div>
                                       <div class="card nav-item credit">
                                          <div class="card-header">
                                             <h4 class="card-title"><a class="accordion-toggle nav-link" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Specification">Specification</a></h4>
                                          </div>
                                          <div id="collapse-Specification" class="collapse"></div>
                                       </div>
                                       <div class="card nav-item credit">
                                          <div class="card-header">
                                             <h4 class="card-title"><a class="accordion-toggle nav-link credit" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Review">Review</a></h4>
                                          </div>
                                          <div id="collapse-Review" class="collapse"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end second container-->
                                 <div class="container mrgtp">
                                    <div class="row">
                                       <div class="col-md-8">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <h3> People who like this :</h3>
                                             </div>
                                          </div>
                                          <div class="row">
                                             @foreach($row->product_like as $product_like)
                                             <div class="col-sm-3">
                                                <div class="d-flex justify-content-center h-100">
                                                   <div class="image_outer_container">
                                                      <div class="green_icon" onclick="followUser(35, 35, 35)" style="cursor: pointer;"><i class="fa fa-plus padlft" id="user_35"></i></div>
                                                      <div class="image_inner_container">

                                                         @if(!empty($product_like->profile_image))
                                                           <img src="{{asset('uploads')}}/{{$product_like->profile_image}}" alt="profile image" />
                                                         @else
                                                           <img src="{{asset('uploads')}}/default-user.png" alt="profile image" />
                                                         @endif
                                                      </div>
                                                      <div class="text-center">{{$product_like->customer_name}}</div>
                                                   </div>
                                                </div>
                                             </div>
                                             @endforeach
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-lg-12 col-sm-12 ">
                                                <h3>More Frome :</h3>

                                             </div>
                                             <div class="col-lg-12 col-sm-12 ">
                                                <div class="card hovercard shadow">
                                                   <div class="cardheader cardheader-hght"> <img src="{{asset('assets/images/add-1-2.jpg')}}" alt=""> </div>
                                                   <div class="avatar"> 

                                                   @if(!empty($row->store_details['0']->store_logo))
                                                     <img src="{{asset('uploads')}}/{{$row->store_details['0']->store_logo}}" alt="profile image" />
                                                   @else
                                                     <img alt="" src="{{asset('assets/images/profile.jpg')}}" alt="profile image">
                                                   @endif
                                                    </div>
                                                   

                                                   <div class="info">
                                                      <div class="title"> <a target="_blank" href="javascript:void(0)" style="text-transform: capitalize;">{{$row->store_details['0']->store_name}}</a> </div>
                                                      <div class="desc">{{$row->store_details['0']->store_url}}</div>
                                                      <div class="desc fl-desc"><a href="" class="follow1">+ Follow Store</a></div>
                                                   </div>
                                                   <div class="row img-12">
                                                      @foreach($row->store_product as $store_product)
                                                         <div class="imge-1"><a href="javascript:void(0)">
                                                         @if(isset($store_product->product_img) && !empty($store_product->product_img))
                                                            <img alt="{{$store_product->product_name}}" src="{{ getenv('URL')}}{{$store_product->product_img}}">
                                                         @else
                                                            <img alt="" src="{{asset('assets/images/profile.jpg')}}">
                                                         @endif

                                                         </a></div>
                                                      @endforeach
                                                      <!-- <div class="imge-1"> <a href=""><img alt="" src="{{asset('assets/images/profile.jpg')}}"></a></div>
                                                      <div class="imge-1"> <a href=""><img alt="" src="{{asset('assets/images/profile.jpg')}}"></a></div> -->
                                                   </div>
                                                   <div class="bottom"> Shop more from Rare Botique  </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--profile-->
                                 <div class="container mrgtp">
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <h3 class="might">YOU MIGHT ALSO LIKE</h3>
                                       </div>
                                    </div>
                                    <div class="row" style="margin:auto; margin-top: 30px;">
                                       @foreach($data['recent_added_products'] as $recent_added_products)
                                       <div class="col-lg-3 col-sm-6 largepad">
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
                                                   <h5>{{$recent_added_products->category_name}}</h5>
                                                </div>
                                                <div class="price-detail">
                                                   <h3><a href="javascript:void(0)" style="text-transform: capitalize;">{{$recent_added_products->product_name}}</a></h3>
                                                </div>
                                             </div>
                                             <div class="photo hovereffect">
                                                <a href="product-detail.html"><img src="{{ getenv('URL')}}{{$recent_added_products->product_img}}" class="img-responsive" alt="a"></a> 
                                             </div>
                                             <div class="info">
                                                <div class="price-wrapper">
                                                   <div class="price">
                                                      <h5 class="price-text-color"> ${{money_format('%i',$recent_added_products->current_price)}}</h5>
                                                      <del><span class="amount">${{money_format('%i',$recent_added_products->mrp)}}</span></del>
                                                   </div>
                                                   <div class="rating hidden-sm">
                                                      <span class="wrapper1">
                                                      <a href="javascript:void(0)">
                                                      <span class="add-to-cart"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                                      </a>
                                                      <span class="tooltip">Add To Cart</span>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="separator clear-left">
                                                   <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                                   <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)">Collection</a> <span class="tooltip">Add To collection</span> </span> </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       @endforeach

                                    </div>
                                    
                                 </div>
                                 <!--you may also like-->
                              </div>
                              <!--modal content end--> 
                                <!-- modal end -->

                                <div class="info">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <h5 class="price-text-color"> ${{money_format('%i',$row->current_price)}}</h5>
                                            <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
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
                    @endforeach
                @endif

                <!-- <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                <div class="product-shop-margin">
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
                </div> -->
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