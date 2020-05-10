 <?php 
	$store_details 		= $data['store_details'];
	$store_products 	= $data['store_product'];
	$store_follwers 	= $data['store_follwers'];
	$store_collections 	= $data['collection'];
	$vc_products 		= $data['vc_products'];
	$insta_user_details = $data['insta_user_details'];
	//dd($store_products->total())

?>
 @include('frontend/include/header')
   </div>
      <hr>
<section class="make_pro_sec_bvf">
    

      <div class="container-fluid content mrgtp">
         <div class="row storelist">
            <ul class="top-link">
               <li><a href="">Home</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">Store List Detail</a></li>
            </ul>
         </div>
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
          
    
          
          
         <!--Store Detail -->
          
         <div class="fb-profile">
            
            @if(isset($store_details->store_banner) && !empty($store_details->store_banner))
               <img align="left" class="fb-image-lg" src="{{asset('uploads')}}/{{$store_details->store_banner}}" alt="Profile image example"/> 
            @else
               <img align="left" class="fb-image-lg" src="{{asset('assets/images/fbback.jpg')}}" alt="Profile image example"/>
            @endif
            
            @if(isset($store_details->store_banner) && !empty($store_details->store_banner))
               <img align="left" class="fb-image-profile thumbnail" src="{{asset('uploads')}}/{{$store_details->store_logo}}" alt="Profile image example"/> 
            @else
               <img align="left" class="fb-image-profile thumbnail" src="{{asset('assets/images/fbprofile.jpg')}}" alt="Profile image example"/>
            @endif
             
            <div class="fb-profile-text">
               <h4>{{$store_details->store_name}} <span class="follow">
			   @if(Session::get('user_id'))
				@if($store_follower->pk_follower_id)
				<span id="followed">
					<a href="javascript:void(0);" class="btn btn-warning flots"> <i class="fa fa-user"></i> 
					Followed Store</a> 
				</span>
				@else
				<span id="followed"></span>
				<span id="follow">
					<a href="javascript:void(0);" class="btn btn-warning flots" onclick = "follow_store1({{Session::get('user_id')}},{{$store_details->id}});"> <i class="fa fa-user"></i> 
				Follow Store</a> 
				</span>
				@endif
				@endif
               <a href="#" class="btn btn-warning flots1">Follow Store</a> 
			   <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalsupport" class="btn btn-warning flots1">
                   Get Store Support
                   </a> 
              
			   <span class="searchbox search_field">
			   <input type="search" id="searchboxID" class="form-control searchbox" placeholder="Search your favorite Product here..." name=""> </span>
			   </span> </h4>
               <p><i class="fa fa-map-marker"></i> 
               {{$store_details->address1 ? $store_details->address1.', ' : ''}}
               {{$store_details->address2 ? $store_details->address2.', ' : ''}}
               {{$store_details->city_name ? $store_details->city_name.', ' : ''}}
               {{$store_details->state_name ? $store_details->state_name.', ' : ''}}
               {{$store_details->country_name ? $store_details->country_name.', ' : ''}}
               {{$store_details->zip_code ? $store_details->zip_code : ''}}
               </p>
				<p class="check_show" total = "{{$review->product_review_count['0']->reviews_avg}}" >
					<span id='1' class="fa fa-star"></span> 
					<span id='2' class="fa fa-star"></span>
					<span id='3' class="fa fa-star"></span> 
					<span id='4' class="fa fa-star"></span> 
					<span id='5' class="fa fa-star"></span>
				</p>
            </div>
         </div>
         <!-- /container --> 
     
      </div>
  
   
    
    <div  class="container-fluid">
        
        <!----FOR MOBILE--->
    <div class="mobile_pro_store_details">
              
    <div class="store_detals_ban">
    <img  class="img-responsive" src="https://moretolike.com/assets/images/fbback.jpg" alt="Profile image example">
    </div>
    <div class="pro_mobi_sto_i">
      <img  class="img-responsive" src="https://moretolike.com/assets/images/fbprofile.jpg">   
       
       </div>
               
                <ul class="list-inline mobile_st_fol_btn">
                  <li class="list-inline-item"><a href="#">Follow Store</a></li>
                   <li class="list-inline-item">
                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalsupport">Get Store Support</a>
                    </li>
               </ul>
               
               
               <div class="profile_info_sec">
               <h1>Profile Name</h1>
                <b><i class="fa fa-map-marker" aria-hidden="true"></i>  Norway</b>  
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
               </div>
        
           </div>
    </div>
    
    
    
 

   
      <div class="">    
    <div class="sort_by_sec">
       <ul class="list-inline">
            <li class="list-inline-item">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Sort by newness</option>
                <option>Newest</option>
                <option>Old</option>
                <option>Tranding</option>
              </select>
            </div>
            </li>
          <li class="list-inline-item">
              <div class="form-group">
                  <select class="form-control" id="sel1">
                      <option>Select a category</option>
                      <option>Clothes</option>
                      <option>Electronic</option>
                      <option>Games</option>
                  </select>
              </div>
          </li> 
         
        </ul>
    </div>
          
          
          
          
           
           <div class="deskto_none_wqas">
        <div class="container-fluid">
               
         <ul class="nav nav-tabs responsive" id="borderline" role="tablist">
            <li class="nav-item credit">
               <a class="nav-link active" data-toggle="tab" href="#Product" role="tab">Product ({{$store_products->total()}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link credit" data-toggle="tab" href="#Collection" role="tab">Collection ({{count($store_collections)?count($store_collections):'0'}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Followers" role="tab">Followers</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Store" role="tab">Store Info</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Blog" role="tab">My Blog </a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Review" role="tab">Review </a>
            </li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content responsive" style="">
			<div class="tab-pane active" id="Product" role="tabpanel">
<!--
				<div class="container-fluid">
                  <div class="row mt-3">
               
					<div class="container">
							@if($store_products)
						<div class="load_more_added">
						<div class="row">
							@foreach($store_products as $store_product)
							<div class="col-lg-3 col-sm-6 brds search_item" product_title="{{$store_product->product_name}}">
								<div class="product-grid2 ">
								   <div class="add-to-cart1">
								   <a href="#" class="viewp1">Save this+</a> 
									@if(Session::has('user_id'))
                                          @if($store_product->is_liked == 0)
											 
                                             <a href="javascript:void(0)" class="viewp2" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$store_product->product_id}})" id="like_{{$store_product->product_id}}">
                                                <i class="fa fa-heart"></i> {{count($store_product->product_like)}} 
                                             </a>
                                          @else
                                             <a href="javascript:void(0)" class="viewp2">
                                                <i class="fa fa-heart color-red"></i> {{count($store_product->product_like)}} 
                                             </a>
                                          @endif
                                         @endif
								   </div>
									<div class="product-image2">
										<a href="#">
								<img class="pic-1" src="{{ getenv('URL')}}308X330_{{$store_product->product_img}}" alt="" />

										</a>
										 <div class="product-content">
											<h4 class="topshop">{{$store_details->store_name}}</h4>
										   <h3 class="title"><a href="#">{{$store_product->product_name}}</a></h3>
										   <span class="price">{{$store_product->current_pri}}</span>
										</div>
										<ul class="add-to-cart">
                                            <li class="list-inline-item">
                                            <a href="{{url('/product/'.$store_product->product_id)}}" class="show_product_detail viewp">View Product</a>
                                            </li>   
                                            <li class="list-inline-item">
                                            <a href="#" class="buy">BUY AT STORE</a>
                                            </li>      
                                        </ul>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="load_pagination" >
							@include('frontend/pagination/load_more', ['paginator' => $store_products,'store_id'=>$store_details->id])
						</div>
						</div>
						@endif
					</div>
  
                  </div>
               </div>
-->
                
                
    <div class="pane_pro_first_sec">
        
        <!---Mobile Search--->
        <div class="mobile-secr_h_hg">
          <input class="form-control form-control-sm" type="text" placeholder="Search...">
           <ul class="list-inline mobile_st_oubg">
            <li class="list-inline-item">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Sort by newness</option>
                <option>Newest</option>
                <option>Old</option>
                <option>Tranding</option>
              </select>
            </div>
            </li>
          <li class="list-inline-item">
              <div class="form-group">
                  <select class="form-control" id="sel1">
                      <option>Select a category</option>
                      <option>Clothes</option>
                      <option>Electronic</option>
                      <option>Games</option>
                  </select>
              </div>
          </li> 
         
        </ul>
        </div>
        <!--Close Mobile-->
        
        
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="product-width product category2 popupids106018">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1060" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1060&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1060, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1060"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                    <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids106018">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Accessories</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1060" style="text-transform: capitalize;" class="show_product_detail">Testing 0403</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1060" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1060" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_3c52fe92d7cf8054caecdc82e9b940a6.jpg" class="img-responsive" alt="Testing 0403">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$10.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1060"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids106018">
                                                                            <p class="btn-add">
                                                                                       <a href="javascript:void(0)" popupids="popupids106018" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> 1 
                                             </a>
                                                                                 </p>
                                      
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded106018"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded106018">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                         
                        </div>
                </div>  
            
            
            
              <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="product-width product category2 popupids10596">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1059" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1059&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1059, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1059"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1059)" href="javascript:void(0)" id="compare_1059" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10596">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1059" style="text-transform: capitalize;" class="show_product_detail">Testing</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1059" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1059" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_5e4a1574c840d57aa3535ce80a84f8cf.jpg" class="img-responsive" alt="Testing">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$4.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1059"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10596">
                                                                            <p class="btn-add">
                                                                                       <a href="javascript:void(0)" popupids="popupids10596" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> 1 
                                             </a>
                                                                                 </p>
                                      
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10596"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10596">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1059)" href="javascript:void(0)" id="compare_1059">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
                </div> 
            
                 <div class="col-lg-3 col-md-4 col-xs-6">
                   <div class="product-width product category2 popupids10587">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1058" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1058&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1058, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1058"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1058)" href="javascript:void(0)" id="compare_1058" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10587">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Printers &amp; Ink</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1058" style="text-transform: capitalize;" class="show_product_detail">Wireless Audio System Multiroo</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1058" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1058" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_bae940f6d9b541892e3f412a042530c9.jpg" class="img-responsive" alt="Wireless Audio System Multiroom 360">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$399.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1058"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10587">
                                                                            <p class="btn-add">
                                                                                       <a href="javascript:void(0)" popupids="popupids10587" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> 1 
                                             </a>
                                                                                 </p>
                                      
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10587"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10587">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1058)" href="javascript:void(0)" id="compare_1058">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
                </div> 
            
                <div class="col-lg-3 col-md-4 col-xs-6">
                   <div class="product-width product category2 popupids10576">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1057" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1057&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1057, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1057"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1057)" href="javascript:void(0)" id="compare_1057" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10576">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1057" style="text-transform: capitalize;" class="show_product_detail">test product 001</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1057" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1057" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_615154dcdf0b3c05f6f03cd9d14ff72a.jpg" class="img-responsive" alt="test product 001">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$99.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1057"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10576">
                                                                            <p class="btn-add">
                                                                                       <a href="javascript:void(0)" popupids="popupids10576" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> 1 
                                             </a>
                                                                                 </p>
                                      
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10576"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10576">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1057)" href="javascript:void(0)" id="compare_1057">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
                </div> 
                
        </div>
        
        
        
     
        
                    
                </div>
                
                
                
                
                
			</div>
            <div class="tab-pane" id="Collection" role="tabpanel">
               <div class="container-fluid">
                  <div class="row mt-3">
                     @if(isset($store_collections) && !empty($store_collections))
                       
                           @foreach($store_collections as $row)
							<?php $product = $row->product[0]; ?>
							
                              <div class="col-lg-3 col-md-3 col-sm-6 largepad search_item" product_title="{{$product->product_name}}">
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
                                       <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($product->product_name,0, 30)}}</a>
                                       
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
									<img src="{{ getenv('URL')}}308X330_{{$product->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
								</a> 
                              </div>
                                <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">${{money_format('%i',$product->current_price)}}</h5>
                                       <del><span class="amount">${{money_format('%i',$product->mrp)}}</span></del>
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
                                             <a href="javascript:void(0)" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
                                                <i class="fa fa-heart"></i> {{count($row->product_like)}} 
                                             </a>
                                          @else
                                             <a href="javascript:void(0)" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
                                             </a>
                                          @endif
                                       </p>
                                       @if($product->shareable_product == 'shareable')
                                          <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                             <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 1)" >Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                          </p>
                                         @else
                                          <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                             <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 0)" >Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                          </p>
                                         @endif
                                     @else
                                        <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
                                           </a>
                                        </p>
                                       <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                          <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                       </p>
                                     @endif
                                 </div>
                              </div>
                           </div>
                              </div>
                           @endforeach
                        
					@else
					<b> No collection found. </b>
                     @endif
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="Followers" role="tabpanel">
               <div class="container-fluid">
                  <div class="row mt-3">
                     <ul class="list-inline new_mak_cl_fol">
                        @if(isset($store_follwers) && !empty($store_follwers))
                           @foreach($store_follwers as $store_follwer)
								<li class="list-inline-item">
                                 <div class="d-flex justify-content-center h-100">
                                    <div class="image_outer_container">
                                       
                                       <div class="image_inner_container">
                                          <img src="{{getenv('APP_URL')}}/uploads/{{$store_follwer->profile_image}}">
                                       </div>
                                       <div class="text-center">{{$store_follwer->customer_name}} <br> <b>India</b></div>
                                    </div>
                                 </div>
                              </li>
                           @endforeach
                        @else
                           <b>There is no followers yet</b>
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="Store" role="tabpanel">
               <div class="container-fluid">
                  <div class="row mt-3">
                     <h4>Store Info</h4>
                     <table class="table">
                        <tbody>

                           <tr>
                              <td>Address</td>
                              <td>
                              {{$store_details->address1 ? $store_details->address1.', ' : ''}}
                              {{$store_details->address2 ? $store_details->address2.', ' : ''}}
                              {{$store_details->city_name ? $store_details->city_name.', ' : ''}}
                              {{$store_details->state_name ? $store_details->state_name.', ' : ''}}
                              {{$store_details->country_name ? $store_details->country_name.', ' : ''}}
                              {{$store_details->zip_code ? $store_details->zip_code : ''}}
                           </td>
                           </tr>
                          <!--  <tr>
                              <td>Email</td>
                              <td>{{$store_details->email}}</td>
                           </tr> -->
                           <tr>
                              <td>Phone</td>
                              <td>{{$store_details->contact_no}}</td>
                           </tr>
                           <tr class="size-weight">
                              <td>Store url </td>
                              <td>{{url('store')}}/{{$store_details->store_url}}</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-facebook-official"></i> <a href="{{$store_details->facebook}}" target="_blank"> {{$store_details->facebook}}</a></td>
                              <td></td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-youtube"></i> <a href="{{$store_details->youtube}}">{{$store_details->youtube}}</a></td>
                              <td></td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-instagram"></i> <a href="{{$store_details->instagram}}">{{$store_details->instagram}}</a></td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="tab-pane widthfh" id="Blog" role="tabpanel">
				<div class="container-fluid">
<!--
					@if($insta_user_details)
					<div class="row mt-3">
						<div class="row widthfh">
							<div class="col-md-2 col-xs-4">
								<div class="img-pro">
								<a href="https://instagram.com/{{$insta_user_details->username}}" target="_blank">
									<img src="{{$insta_user_details->profile_picture}}" alt="">
								</a>
								</div>
							</div>
							<div class="col-md-8 ">
							<h3 class="namehe">	
								{{$insta_user_details->full_name}}
							</h3> 
							<i class="fa fa-image ics"> {{$insta_user_details->counts->media}}</i>
							<i class="fa fa-user ics"> {{$insta_user_details->counts->follows}}</i>
							<br> 
							<p class="forever">{{$insta_user_details->bio}}</p>
							</div>						
						</div>
						<div class="row widthfh">
							@if(isset($data['instagram_media']) && !empty($data['instagram_media']))
							  <ul class="instagrams">
								@foreach($data['instagram_media'] as $key => $instagram)
								<?php  ?>
								<li>
									<span class="imgs"><a href="{{$instagram->link}}" target="_blank"><img src="{{$instagram->images->low_resolution->url}}" alt=""></a></span>
										<p class="texts"> 
											<a href="https://instagram.com/{{$insta_user_details->username}}" target="_blank">
											{{'@'.$instagram->user->username}}
											</a>
										</p>
									<p class="texts2">@if(isset($instagram->caption) && !empty($instagram->caption))
                                                       <p>{{$instagram->caption->text}}</p>@endif
									<p class="texts3"><i class="fa fa-heart"> {{$instagram->likes->count}}</i> &nbsp; &nbsp; &nbsp;<i class="fa fa-comments"> {{$instagram->comments->count}}</i></p>
								</li>
								@endforeach	
							</ul>
							@endif
							  
						</div>
					</div>
					@endif
-->
                    
                    COMING SOON
                    
				</div>
            </div>
			<?php $row = $review; ?>
            <div class="tab-pane" id="Review" role="tabpanel">
				<div class="container-fluid">
					<div class="mt-3">
						<div class="advanced-review row">
							
						   <div class="col-lg-6 col-md-7 col-xs-12">
							  <p>Based on {{$row->product_review_count['0']->total}} reviews</p>
							  <h3>{{$row->product_review_count['0']->reviews_avg}}</h3>
							  <p><span>Over All</span></p>
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
						   <div class="col-lg-6 col-md-5 col-xs-12">
							  <div id="review_form_wrapper">
								 <div id="review_form">
									<div id="respond" class="comment-respond">
									   <h3 id="reply-title" class="comment-reply-title">
									   @if(isset($row->userReview) && !empty($row->userReview))
										  You have already replied.
									   @else
									   Add a review
										  <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
										  </small>
									   </h3>
									   <form action="javascript:void(0)" method="post" id="commentform" class="comment-form">
										{{csrf_field()}}
										<p class="comment-form-rating">
											<label>Your Rating</label>
										</p>
										<input type="hidden" name="rating_val" id="rating_val" value="">
										<p class="stars">
											<span class="fa fa-star" id="star1" onclick="rating(1)"></span>
											<span class="fa fa-star " id="star2" onclick="rating(2)"></span>
											<span class="fa fa-star " id="star3" onclick="rating(3)"></span>
											<span class="fa fa-star" id="star4" onclick="rating(4)"></span>
											<span class="fa fa-star" id="star5" onclick="rating(5)"></span>
										</p>
										<p class="comment-form-comment">
											<label for="comment">Your Review</label>
											<textarea id="comment" name="comment" class="form-control" rows='8' aria-required="true"></textarea>
										</p>
										<p class="form-submit">
										@if(Session::get('user_id'))
											<input name="submit" type="button" onclick="submitReview()" id="submit" class="submit" value="Add Review" /> <br>
											  <span id="rate_error"  style="color:red; "></span>
										@else
										
										<input name="submit" type="button" data-toggle="modal" data-target="#myModal" class="submit" value="Add Review" />
										@endif  
								<input type='hidden' name='product_id' value='{{$store_details->id}}' id='product_id' />
								<input type='hidden' name='user_id' id='user_id' value="{{Session::get('user_id')}}" />
										</p>
										<input type="hidden" id="review_type" name="review_type" value="s" />
										
									</form>
									@endif
									   
									   <!-- form -->
									</div>
									<!-- #respond -->
								 </div>
							  </div>
						   </div>
						   <!-- /.col -->
						
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
         </div>
      </div>
          </div>
          
          
    </div>
</section>  





<!---------------
     MOBLE TAB
----------------> 




<section class="mobile_tab_panle_profile">
    <div class="container-fluid">
       <div class="mobile_profile_accordian">
        <!-- Accordian 1-->
		<div class="acc">
			<h4>Product ({{$store_products->total()}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                    
        <div class="pane_pro_first_sec">
    <ul class="list-inline mao_lsak_mb">
            <li class="list-inline-item">
             <div class="product-width product category2 popupids106018">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1060" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1060&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1060, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1060"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids106018">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Accessories</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1060" style="text-transform: capitalize;" class="show_product_detail">Testing 0403</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1060" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1060" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_3c52fe92d7cf8054caecdc82e9b940a6.jpg" class="img-responsive" alt="Testing 0403">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$10.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1060"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids106018">
                                                                            <p class="btn-add">
                                                                                       <a href="javascript:void(0)" popupids="popupids106018" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> 1 
                                             </a>
                                                                                 </p>
                                      
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded106018"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded106018">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" popupid="popupidradded106018">
<!--                                        <span><img class="img-fluid" src="https://moretolike.com/assets/images/add-clooection.png" alt="image"></span>-->
                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
            </li>
            <!--Model-->
            <!--
            <div class="content_on_share_se popupidradded106018">
                      <div class="main_panle_sh">
                          <div class="sh_im_s">
                              <div class="shareble_pro_panel">
                                  <h1><span><i class="fa fa-share-alt" aria-hidden="true"></i></span> Shareble Products <b class="hsle_as_close"><i class="fa fa-times close_share_model" aria-hidden="true"></i></b></h1>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="mo_pr_op">
                                              <img class="img-fluid" src="https://moretolike.com/assets/images/home-v5-ads-1.jpg" alt="image">

                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="moderl_des_c">
                                             <a href="javascript:void(0);" onsubmit="addToCollectionConfirm(1060, 31, 0)" class="hide_for_lg">ADD PRODUCT TO MY STORE</a>
                                              <p>Testing</p>
                                              <a href="javascript:void(0);" onclick="addToCollectionConfirm(1060, 31, 0)" class="btn btn-secondary hide_for_xs">ADD PRODUCT TO MY STORE</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="pro_info_model_new">
                                      <h3>Product Info:</h3>
                                      <p>Testing</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            -->
            <li class="list-inline-item">       
            <div class="product-width product category2 popupids10596">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1059" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1059&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1059, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1059"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1059)" href="javascript:void(0)" id="compare_1059" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10596">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1059" style="text-transform: capitalize;" class="show_product_detail">Testing</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1059" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1059" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_5e4a1574c840d57aa3535ce80a84f8cf.jpg" class="img-responsive" alt="Testing">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$4.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1059"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10596">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>
<!--
                                       <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;"> 
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                       </p>
-->
                                     
                                     
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10596"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10596">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                      <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" popupid="popupidradded104113">
<!--                                        <span><img class="img-fluid" src="https://moretolike.com/assets/images/add-clooection.png" alt="image"></span>-->
                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1041)" href="javascript:void(0)" id="compare_1041">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>  
            </li>
            <!----Model-->
           <!--
            <div class="content_on_share_se popupidradded10596">
                      <div class="main_panle_sh">
                          <div class="sh_im_s">
                              <div class="shareble_pro_panel">
                                  <h1><span><i class="fa fa-share-alt" aria-hidden="true"></i></span> Shareble Products <b class="hsle_as_close"><i class="fa fa-times close_share_model" aria-hidden="true"></i></b></h1>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="mo_pr_op">
                                              <img class="img-fluid" src="https://moretolike.com/assets/images/home-v5-ads-1.jpg" alt="image">

                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="moderl_des_c">
                                             <a href="javascript:void(0);" onsubmit="addToCollectionConfirm(1059, , 0)" class="hide_for_lg">ADD PRODUCT TO MY STORE</a>
                                              <p>eerereerer</p>
                                              <a href="javascript:void(0);" onclick="addToCollectionConfirm(1059, , 0)" class="btn btn-secondary hide_for_xs">ADD PRODUCT TO MY STORE</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="pro_info_model_new">
                                      <h3>Product Info:</h3>
                                      <p>eerereerer</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            -->    
            <li class="list-inline-item">      
            <div class="product-width product category2 popupids10587">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1058" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1058&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1058, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1058"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1058)" href="javascript:void(0)" id="compare_1058" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10587">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Printers &amp; Ink</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1058" style="text-transform: capitalize;" class="show_product_detail">Wireless Audio System Multiroo</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1058" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1058" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_bae940f6d9b541892e3f412a042530c9.jpg" class="img-responsive" alt="Wireless Audio System Multiroom 360">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$399.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1058"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10587">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>
<!--
                                       <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;"> 
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                       </p>
-->
                                     
                                     
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10587"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10587">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                  <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" popupid="popupidradded104113">
<!--                                        <span><img class="img-fluid" src="https://moretolike.com/assets/images/add-clooection.png" alt="image"></span>-->
                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1041)" href="javascript:void(0)" id="compare_1041">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
            </li>    
            <!---Model-->
             <!--
            <div class="content_on_share_se popupidradded10587">
                      <div class="main_panle_sh">
                          <div class="sh_im_s">
                              <div class="shareble_pro_panel">
                                  <h1><span><i class="fa fa-share-alt" aria-hidden="true"></i></span> Shareble Products <b class="hsle_as_close"><i class="fa fa-times close_share_model" aria-hidden="true"></i></b></h1>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="mo_pr_op">
                                              <img class="img-fluid" src="https://moretolike.com/assets/images/home-v5-ads-1.jpg" alt="image">

                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="moderl_des_c">
                                             <a href="javascript:void(0);" onsubmit="addToCollectionConfirm(1058, , 0)" class="hide_for_lg">ADD PRODUCT TO MY STORE</a>
                                              <p>    360 Omnidirectional Sound
    Easy Intuitive Control
    Multiroom App</p>
                                              <a href="javascript:void(0);" onclick="addToCollectionConfirm(1058, , 0)" class="btn btn-secondary hide_for_xs">ADD PRODUCT TO MY STORE</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="pro_info_model_new">
                                      <h3>Product Info:</h3>
                                      <p>    360 Omnidirectional Sound
    Easy Intuitive Control
    Multiroom App</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
             -->
            <li class="list-inline-item">
            <div class="product-width product category2 popupids10576">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1057" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1057&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1057, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1057"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1057)" href="javascript:void(0)" id="compare_1057" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10576">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1057" style="text-transform: capitalize;" class="show_product_detail">test product 001</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1057" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1057" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_615154dcdf0b3c05f6f03cd9d14ff72a.jpg" class="img-responsive" alt="test product 001">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$99.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1057"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10576">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>
<!--
                                       <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;"> 
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                       </p>
-->
                                     
                                     
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10576"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded10576">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" popupid="popupidradded104113">
<!--                                        <span><img class="img-fluid" src="https://moretolike.com/assets/images/add-clooection.png" alt="image"></span>-->
                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this products to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1041)" href="javascript:void(0)" id="compare_1041">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friendse</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or Direct link the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            

                            
                            
                            
                        </div>
            </li>
            <!---Model-->
             <!--
            <div class="content_on_share_se popupidradded10576">
                      <div class="main_panle_sh">
                          <div class="sh_im_s">
                              <div class="shareble_pro_panel">
                                  <h1><span><i class="fa fa-share-alt" aria-hidden="true"></i></span> Shareble Products <b class="hsle_as_close"><i class="fa fa-times close_share_model" aria-hidden="true"></i></b></h1>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="mo_pr_op">
                                              <img class="img-fluid" src="https://moretolike.com/assets/images/home-v5-ads-1.jpg" alt="image">

                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="moderl_des_c">
                                             <a href="javascript:void(0);" onsubmit="addToCollectionConfirm(1057, , 0)" class="hide_for_lg">ADD PRODUCT TO MY STORE</a>
                                              <p>shareable_productshareable_productshareable_productvshareable_productshareable_productshareable_productshareable_product</p>
                                              <a href="javascript:void(0);" onclick="addToCollectionConfirm(1057, , 0)" class="btn btn-secondary hide_for_xs">ADD PRODUCT TO MY STORE</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="pro_info_model_new">
                                      <h3>Product Info:</h3>
                                      <p>shareable_productshareable_productshareable_productvshareable_productshareable_productshareable_productshareable_product</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> 
             -->
            </ul>    
            
            
    
                </div>
				</div>
			</div>
		</div>

		<!-- Accordian 2-->
		<div class="acc">
			<h4>Collection ({{count($store_collections)?count($store_collections):'0'}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                B
				</div>
			</div>
		</div>

		<!-- Accordian 3-->
		<div class="acc">
			<h4>Followers</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
		       C
				</div>
			</div>
		</div>

		<!-- Accordian 4-->
		<div class="acc">
			<h4>Store Info</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                    
			        <div class="nbswa_qas">
                     <h2>Store Info</h2>
                     <table class="table">
                        <tbody>

                           <tr>
                              <td>Address</td>
                              <td>
                              {{$store_details->address1 ? $store_details->address1.', ' : ''}}
                              {{$store_details->address2 ? $store_details->address2.', ' : ''}}
                              {{$store_details->city_name ? $store_details->city_name.', ' : ''}}
                              {{$store_details->state_name ? $store_details->state_name.', ' : ''}}
                              {{$store_details->country_name ? $store_details->country_name.', ' : ''}}
                              {{$store_details->zip_code ? $store_details->zip_code : ''}}
                           </td>
                           </tr>
                          <!--  <tr>
                              <td>Email</td>
                              <td>{{$store_details->email}}</td>
                           </tr> -->
                           <tr>
                              <td>Phone</td>
                              <td>{{$store_details->contact_no}}</td>
                           </tr>
                           <tr class="size-weight">
                              <td>Store url </td>
                              <td>{{url('store')}}/{{$store_details->store_url}}</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-facebook-official"></i> <a href="{{$store_details->facebook}}" target="_blank"> {{$store_details->facebook}}</a></td>
                              <td></td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-youtube"></i> <a href="{{$store_details->youtube}}">{{$store_details->youtube}}</a></td>
                              <td></td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-instagram"></i> <a href="{{$store_details->instagram}}">{{$store_details->instagram}}</a></td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
				</div>
			</div>
		</div>
        
        <!-- Accordian 5-->
		<div class="acc">
			<h4>My Blog  </h4>
			<div class="content_pro_ac">
				<div class="content-inner">
			E
				</div>
			</div>
		</div>
        
        <!-- Accordian 6-->
		<div class="acc">
			<h4>Review</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
			<div class="container-fluid">
					<div class="">
						<div class="advanced-review row">
							
						   <div class="col-lg-6 col-md-7 col-xs-12">
							  <p>Based on {{$row->product_review_count['0']->total}} reviews</p>
							  <h3>{{$row->product_review_count['0']->reviews_avg}}</h3>
							  <p><span>Over All</span></p>
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
						   <div class="col-lg-6 col-md-5 col-xs-12">
							  <div id="review_form_wrapper">
								 <div id="review_form">
									<div id="respond" class="comment-respond">
									   <h3 id="reply-title" class="comment-reply-title">
									   @if(isset($row->userReview) && !empty($row->userReview))
										  You have already replied.
									   @else
									   Add a review
										  <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
										  </small>
									   </h3>
									   <form action="javascript:void(0)" method="post" id="commentform" class="comment-form">
										{{csrf_field()}}
										<p class="comment-form-rating">
											<label>Your Rating</label>
										</p>
										<input type="hidden" name="rating_val" id="rating_val" value="">
										<p class="stars">
											<span class="fa fa-star" id="star1" onclick="rating(1)"></span>
											<span class="fa fa-star " id="star2" onclick="rating(2)"></span>
											<span class="fa fa-star " id="star3" onclick="rating(3)"></span>
											<span class="fa fa-star" id="star4" onclick="rating(4)"></span>
											<span class="fa fa-star" id="star5" onclick="rating(5)"></span>
										</p>
										<p class="comment-form-comment">
											<label for="comment">Your Review</label>
											<textarea id="comment" name="comment" class="form-control" rows='8' aria-required="true"></textarea>
										</p>
										<p class="form-submit">
										@if(Session::get('user_id'))
											<input name="submit" type="button" onclick="submitReview()" id="submit" class="submit" value="Add Review" /> <br>
											  <span id="rate_error"  style="color:red; "></span>
										@else
										
										<input name="submit" type="button" data-toggle="modal" data-target="#myModal" class="submit" value="Add Review" />
										@endif  
											<input type='hidden' name='product_id' value='{{$store_details->id}}' id='product_id' />
											<input type='hidden' name='user_id' id='user_id' value="{{Session::get('user_id')}}" />
										</p>
										<input type="hidden" id="review_type" name="review_type" value="s" />
										
									</form>
									@endif
									   
									   <!-- form -->
									</div>
									<!-- #respond -->
								 </div>
							  </div>
						   </div>
						   <!-- /.col -->
						
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
			</div>
		</div>
        
        </div>
    </div>       
</section>




<!----Support Model--->
<div class="container">


  <!-- The Modal -->
  <div class="modal fade" id="myModalsupport">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create a new support topic</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
      
            <form action="{{ route('create-support') }}" method="post">
               {{ csrf_field() }}
                    <div class="form-group">
                      <input type="hidden" name="store_url" value="{{$store_details->store_url}}">
                      <input type="hidden" name="shop_id" value="{{$store_details->id}}">
                      <input type="hidden" name="customer_id" value="{{$store_details->customer_id}}">
                      <label for="subject">Subject : </label>
                      <input type="subject" class="form-control" id="subject" name="subject" placeholder="Missing Item">
                    </div>
                
                   <div class="form-group">
                      <label for="order_id">Order Id : </label>
                      <select name="order_id" id="order_id" class="form-control">
                        @foreach($orders as $order)
                          <option value="{{$order->order_no}}">{{$order->order_no}}</option>
                        @endforeach
                        </select>
                    </div>
                
                
                  <div class="form-group">
                      <label for="message">Message :</label>
                      <textarea rows="4" class="form-control" name="message" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                    </div>
                
                   <div class="form-group sub_btn_mod_sup">
                     <button type="submit" class="btn">Submit</button>
                    </div>
                
            </form>
            
        </div>
        
      
        
      </div>
    </div>
  </div>
  
</div>










      <!---user registration-->  
      @include('frontend/include/footer')