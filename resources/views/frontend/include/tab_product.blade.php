<div class="tab_content_data">
    <div class="row">
        <?php //print_r($data); ?>
        @if(!empty($best_deals) && count($best_deals))
        <div class="col-lg-3 col-md-12 col-sm-4 col-sm-12">
            <div class="da_el">
            	<?php $b_co = 0; ?>
            	@foreach($best_deals as $key=>$row)
            	<?php $b_co++; ?>
                <div class="product category2">
                    <div class="col-item">
                        <div class="col-header">
                            <div class="price-top">
                                <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                   <br>
                                   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                             </div>
                            <div class="price-right">
                                <h5>
                                   @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                      <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                         <i class="fa fa-check"></i> Added
                                      </a>
                                   @else
                                   <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                      <i class="ec ec-compare"></i> Compare
                                   </a>
                                   @endif
                                </h5>
                            </div>
                        </div>
                        <div class="col-info">
                            <div class="price-name">
                                <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                            </div>
                            <div class="price-detail">
                                <h3>
                                   <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                   <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                   </span>
                                </h3>
                            </div>
                        </div>
                        <div class="photo hovereffect">
                            <span class="wpb_wl_preview quick1 open-popup-link">
                             </span>
                            <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
								<img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
							</a> 
                        </div>
                        <!-- modal content-->

                        <!--modal content end-->
                        <div class="info">
                            <div class="price-wrapper">
                                <div class="price">
                                   <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                   <del><span class="amount">${{money_format('%i',$row->actual_price)}}</span></del>
                                </div>
                                <div class="rating hidden-sm">
                                   <span class="wrapper1">
                                   <a href="javascript:void(0)">
                                   <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                   </a>
                                   <span class="tooltip">Add To Cart</span>
                                   </span>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ec ec-favorites"></i> 4
                                    </a>
                                </p>
                                <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                @if($b_co == 2)
                	@break
                @endif
                @endforeach

            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-4 col-sm-12">
            <div class="center_com_d">
            	<?php $b_co = 0;
            		unset($data['best_deals'][0]);
            		unset($data['best_deals'][1]);
            	 ?>
            	@foreach($data['best_deals'] as $key=>$row)
            	<?php $b_co++; ?>
                <div class="product category2">
                    <div class="col-item">
                        <div class="col-header">
                            <div class="price-top">
                                <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                   <br>
                                   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                            </div>
                            <div class="price-right">
                                <h5>
                                   @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                      <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                         <i class="fa fa-check"></i> Added
                                      </a>
                                   @else
                                   <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                      <i class="ec ec-compare"></i> Compare
                                   </a>
                                   @endif
                                </h5>
                            </div>
                        </div>
                        <div class="col-info">
                            <div class="price-name">
                                <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                            </div>
                            <div class="price-detail">
                                 <h3>
                                   <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                   <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                   </span>
                                </h3>
                            </div>
                        </div>
                        <div class="photo hovereffect must_img_h">
                            <span class="wpb_wl_preview quick1 open-popup-link">
                             </span>
                            <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
								<img src="{{ getenv('URL')}}{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
							</a> 
                        </div>
                        <!-- modal content-->

                        <!--modal content end-->
                        <div class="info">
                            <div class="price-wrapper">
                                <div class="price">
                                    <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
           							<del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                </div>
                                <div class="rating hidden-sm">
                                    <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                </div>
                            </div>
                            <div class="separator clear-left">
                              @if(Session::has('user_id'))
	                               <p class="btn-add">
	                                @if($row->is_liked == 0)
	                                   <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
	                                                <i class="fa fa-heart"></i> {{count($row->product_like)}} 
	                                             </a>
	                                          @else
	                                             <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm">
	                                                <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
	                                             </a>
	                                          @endif
	                                       </p>
	                                      
	                                     @else
	                                        <p class="btn-add"> 
	                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
	                                             <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
	                                           </a>
	                                        </p>
	                                     @endif
	                                <p class="btn-details new_cus_mo"> 
	                                <span class="wrapper">
	                                   <b>Product Menu</b>
	                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupid{{$row->product_id}}{{$row->sub_category_id}}"><img src="{{asset('assets/images/dot_in_n_grey.png')}}" alt=""></a> 
	                                    
	                                </span> 
	                                </p>
	                                 </div>

                        </div>
                    </div>
                </div>
                 @if($b_co == 1)
                	@break
                @endif
                @endforeach
            </div>
        </div>


        <div class="col-lg-3 col-md-12 col-sm-4 col-sm-12">
            <div class="da_el">
            	<?php $b_co = 0; 
            		unset($data['best_deals'][2]);
            	?>
            	@foreach($data['best_deals'] as $key=>$row)
            	<?php $b_co++; ?>
                <div class="product category2">
                    <div class="col-item">
                        <div class="col-header">
                            <div class="price-top">
                                <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                   <br>
                                   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                             </div>
                            <div class="price-right">
                                <h5>
                                   @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                      <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                         <i class="fa fa-check"></i> Added
                                      </a>
                                   @else
                                   <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                      <i class="ec ec-compare"></i> Compare
                                   </a>
                                   @endif
                                </h5>
                            </div>
                        </div>
                        <div class="col-info">
                            <div class="price-name">
                                <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                            </div>
                            <div class="price-detail">
                                <h3>
                                   <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                   <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                   </span>
                                </h3>
                            </div>
                        </div>
                        <div class="photo hovereffect">
                            <span class="wpb_wl_preview quick1 open-popup-link">
                             </span>
                            <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
								<img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
							</a> 
                        </div>
                        <!-- modal content-->

                        <!--modal content end-->
                        <div class="info">
                            <div class="price-wrapper">
                                <div class="price">
                                   <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                   <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                </div>
                                <div class="rating hidden-sm">
                                   <span class="wrapper1">
                                   <a href="javascript:void(0)">
                                   <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                   </a>
                                   <span class="tooltip">Add To Cart</span>
                                   </span>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ec ec-favorites"></i> 4
                                    </a>
                                </p>
                                <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @if($b_co == 2)
                	@break
                @endif
                @endforeach
            </div>
        </div>
        @else
        <h2>No Product Found!<h2>
        @endif
    </div>
</div>