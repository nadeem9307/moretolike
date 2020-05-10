<?php
use \App\Http\Controllers\HomeController;
?>
   @include('frontend/include/header')
   </div>
   <hr>

<div class="profile_bla_panel">
  
      <div class="container-fluid content mrgtp">
         <div class="row storelist">
            <ul class="top-link">
               <li><a href="">Home</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">shop</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="">User Profile</a></li>
            </ul>
         </div>
            <div class="cust_mak_pro_fi">
         <!--Store Detail -->
         <div class="container-fluid backwrap">
           <div class="row">
             <div class="fullcover" style="background-image: url('{{asset('uploads/'.$data['user']->profile_banner)}}');     width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
             </div>
             <div class="col-lg-2 col-md-2">
                <img class="img-thumbnail2" alt="140x140" src="{{asset('uploads')}}/{{$data['user']->profile_image}}" alt="{{$data['user']->customer_name}}" />
             </div>
             <div class="col-lg-8 col-md-7 ttxt">
                <h4 class="nameheading">
                        {{$data['user']->f_name.' '.$data['user']->l_name}}
                     </h4>
                     <p>{{$data['user']->description}}</p>
             </div>
             <div class="col-lg-2 col-md-3 ttxt1">  @if(Session::get('user_id'))
                     @if($data['current_follower'])
						<span id="followed">
                        <button class="btn btn-warning btn-block" type="button"> Followed</button>
						</span>
                     @else
						 <span id="follow">
                        <button class="btn btn-warning btn-block" type="button" onclick="follow_user({{Session::get('user_id')}}, {{$data['user']->id}})"> Follow</button>
						</span>
						<span id="followed"></span>
                     @endif
                  @else
                     <button class="btn btn-warning btn-block" type="button" data-toggle="modal" data-target="#myModal"> Follow</button>
                  @endif</div>
           </div>
         </div>
      </div>
    
    </div>
      <!---Store detail-->
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 text-right">
               <ul class="list-unstyled list-inline social social_icon_saw">
                  <li class="list-inline-item">
                        <h4>Share Profile</h4>
                  </li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-youtube"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-rss"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-tumblr"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-linkedin"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-pinterest"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
    
    
    
<!----DESKTOP TAB---->
<section class="desktop_tab_profile">
         <div class="container-fluid mt-4">
         <ul class="nav nav-tabs responsive " role="tablist">
            <li class="nav-item credit">
               <a class="nav-link active" data-toggle="tab" href="#Collections" role="tab">My Collections ({{count($data['collection'])}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Loved" role="tab">Loved Items ({{count($data['product_like'])}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Following" role="tab">Following ({{count($data['following'])}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Followers" role="tab">Followers ({{count($data['follower'])}})</a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Blog" role="tab">My Blog ({{!empty($data['instagram_media'])?count($data['instagram_media']):'0'}}) </a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Follow" role="tab">Stores|Follow ({{count($data['store_follower'])}}) </a>
            </li>
            <li class="nav-item credit">
               <a class="nav-link" data-toggle="tab" href="#Store" role="tab">My Store ({{count($data['stores'])}})</a>
            </li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content responsive cus_pro_tab_cl" style=" border: 1px solid #e1e1e1;">
            <div class="tab-pane active tab_collection" id="Collections" role="tabpanel">
               <div class="" id="collection-list">
                    <div class="row mt-3">
                     @if(isset($data['collection']) && !empty($data['collection']))
                         @foreach($data['collection'] as $row)         
                            <div class="col-lg-3 col-md-6 largepad cus_tab_pvcza" id="collection-grid-{{$row->id}}">
                             <div class="col-item collect">
                                        <div class="col-header">
                                          <div class="price-top">
                                              <h5 class="main_name">{{$row->collection_name}} </h5>
                                              <span class="followerss"><a href="javascript:void(0)" data-toggle="modal" data-target="#collection_detail_{{$row->id}}">{{HomeController::collectionFollowerCountByCollectionById($row->id)}} followers</a></span>
                                              <!--modal start-->
                                              <div id="collection_detail_{{$row->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">{{$row->collection_name}}`s Follower</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="container-fluid">
                                                          <div class="row mt-3">
                                                             <div class="row">
                                                                @foreach(HomeController::collectionFollowerByCollectionById($row->id) as $rows)
                                                                   <?php 
                                                                      $customer = HomeController::getCustomerById($rows->customer_id);
                                                                   ?>
                                                                   <div class="col-sm-3" onclick="window.location.href='/profile/{{$rows->customer_id}}'" style="cursor: pointer;">
                                                                      <div class="d-flex justify-content-center h-100">
                                                                         <div class="image_outer_container">
                                                                            <div class="image_inner_container">
                                                                               <img src="{{asset('uploads')}}/{{$customer->profile_image}}">
                                                                            </div>
                                                                            <div class="text-center">{{$customer->customer_name}} <br> </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                @endforeach
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <!--modal end-->
                                          </div>
                                            @if(Session::get('user_id'))
                                              <?php
                                                $is_follow = HomeController::is_follow(Session::get('user_id'), $row->id);
                                                if($is_follow){
                                                  ?>
                                                    <div class="price-right flcol">
                                                       <a href="javascript:void(0)" class="followerss1" style="cursor: pointer"> followed</a>
                                                    </div>
                                                  <?php
                                                }else{
                                                  ?>
                                                    <div class="price-right flcol">
                                                       <a href="javascript:void(0)" class="followerss1" style="cursor: pointer" onclick="followCollection({{$row->id}}, {{Session::get('user_id')}})"> follow collection</a>
                                                    </div>
                                                  <?php
                                                }
                                              ?>
                                           @else
                                               <div class="price-right flcol">
                                                  <a href="javascript:void(0)" class="followerss1" style="cursor: pointer" data-toggle="modal" data-target="#myModal"> follow collection</a>
                                                </div>
                                           @endif     
                                        </div>
                                        <div class="col-info">
                                          <div class="price-name">
                                            <h5>Created By <a href="/profile/{{$row->customer_id}}">{{$row->f_name.' '.$row->l_name}}</a></h5>
                                          </div>
                                        </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <table class="collection" cellspacing="0" cellpadding="0" border="0">
                                                <tbody><tr>
                                                  <?php 
                                                    $product_ids = explode(',', explode(']', explode('[', $row->products_data)[1])[0]);
                                                    //print_r($product); 
                                                  ?>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['0'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['1'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['2'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                                <tr>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['3'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" height="80" align="center">
                                                      <a href="javascript:void(0)" onclick="showDetails({{$row->id}})">
                                                        <span class="howto">HOW TO PARTY ON</span> <h4 class="saterdays">{{$row->collection_name}}</h4> <span class="madein">MADE MY NIGHT</span>
                                                      </a>
                                                    </td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['4'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                                <tr>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['5'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['6'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['7'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                             </tbody></table>
                                          </div>
                                       </div>
                                        <div class="info">
                                        <div class="price-wrapper">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#share-box_{{$row->id}}" class="sharethis">Share this collection</a>
                                        <!--modal start-->
                                              <div id="share-box_{{$row->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">{{$row->collection_name}} Share on</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="container-fluid">
                                                          <div class="row mt-3">
                                                             <div class="row">
                                                                <ul class="list-unstyled list-inline social " style="font-size: 30pt;">
                                                                 <li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u={{ getenv('URL')}}{{HomeController::getProductById($product_ids['0'])->product_img}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.twitter.com/moretolike" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.youtube.com/moretolike" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.rss.com/moretolike" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.tumblr.com/moretolike" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.pinterest.com/moretolike" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                              </ul>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <!--modal end-->
                                        </div>
                                        </div>
                                      </div>
                            </div>
                        @endforeach
                      @endif
                    </div>
               </div>
               <div class="container-fluid" id="collection-details" style="display: none">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4"><a href="javascript:void(0)" onclick="backToCollectionList()"><h5><i class="fa fa-angle-left"></i> Back Editor's Collection </h5></a></div>
                        <div class="col-lg-4 col-sm-6 col-xs-12" id="collection-grid-details">
                          <div class="col-item collect">
                              <div class="col-header">
                                <div class="price-top">
                                    <h5 class="main_name">Saterdays</h5>
                                    <span class="followerss">58 followers</span>
                                </div>
                                <div class="price-right flcol">
                                   <a href="" class="followerss1"> follow collection</a>
                                </div>      
                              </div>
                              <div class="col-info">
                                <div class="price-name">
                                  <h5>Created By <a href="">Editor</a></h5>
                                </div>
                              </div>
                             <div class="row">
                              <div class="col-sm-12">
                                <table class="collection" cellspacing="0" cellpadding="0" border="0">
                                  <tbody><tr>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/1.jpg" alt="" width="65"></a></td>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/2.jpg" alt="" width="65"></a></td>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/3.jpg" alt="" width="65"></a></td>
                                  </tr>
                                  <tr>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/4.jpg" alt="" width="65"></a></td>
                                    <td width="32%" height="80" align="center"><span class="howto">HOW TO PARTY ON</span> <h4 class="saterdays">SATERDAYS</h4> <span class="madein">MADE MY NIGHT</span></td>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/5.jpg" alt="" width="65"></a></td>
                                  </tr>
                                  <tr>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/6.jpg" alt="" width="65"></a></td>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/7.jpg" alt="" width="65"></a></td>
                                    <td width="32%" align="center"><a href=""><img src="images/collection/8.jpg" alt="" width="65"></a></td>
                                  </tr>
                                </tbody></table>
                              </div>
                             </div>
                              <div class="info">
                              <div class="price-wrapper">
                              <a href="#" class="sharethis">Share this collection</a>
                              </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-4"><a href="#"><h5>Edit Collection <i class="fa fa-angle-right"></i></h5></a></div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <h5 class="secondcl">Product in this Collection</h5>
                        </div>
                        <div class="col-md-2">
                             <a href="" class="followerss1"> follow collection</a> 
                        </div>
                        <div class="col-md-2">
                             <h5 class="secondcl"> 110k followers</h5>
                        </div>
                      </div>
                    </div>
                    <div class="container mrgtp">
                        <div class="row">
                          <div class="col-sm-12">
                            <h3 class="might">YOU MIGHT ALSO LIKE</h3>
                          </div>
                        </div>
                    <div class="row" style="margin:auto; margin-top: 30px;" id="collection-product">
                        <div class="col-lg-3 col-md-6 largepad cus_tab_pvcza">
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
                                    <div class="photo hovereffect"> <a href="product-detail.html"><img src="images/dish.png" class="img-responsive" alt="a"></a> 
                                     <!-- <div class="overlay">
                                        <a class="info1" href="#">Quick View</a>
                                      </div>-->
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
                                             <span class="add-to-cart"><img src="images/cart.png" alt=""></span>
                                            </a>
                                          <span class="tooltip">Add To Cart</span>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="separator clear-left">
                                      <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
                                      <p class="btn-details"> <span class="wrapper"><img src="images/add-clooection.png" alt="" style="width:15px;"> <a href="#">Collection</a> <span class="tooltip">Add To collection</span> </span> </p>
                                    </div>
                                    </div>
                                  </div>
                        </div>
                    </div>
                      </div>
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Loved" role="tabpanel">
               <div class="">
<!--
                  <div class="row mt-3">
                        @if(isset($data['product_like']) && !empty($data['product_like']))
                           @foreach($data['product_like'] as $row)
                              <div class="col-lg-3 col-sm-6 largepad">
                                 <div class="col-item">
                                    <div class="col-header">
                                       <div class="price-top">
                                    @if(Session::has('user_id'))
							@if($row->shareable_product == 'shareable')
							  <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltip{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
							   <br>
							   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
							   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, <?=Session::get('user_id')?>, 1)">Click to add..</a></span></div>'> </a>
							  <h5><a href="javascript:void(0);" class="show-tt1" productid="{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
							@else
							  <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltip{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
							   <br>
							   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
							   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, <?=Session::get('user_id')?>, 0)">Click to add..</a></span></div>'> </a>
							  <h5><a href="javascript:void(0);" class="show-tt1" productid="{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
							 @endif
						 @else
							<a href="javascript:void(0);" class="show-tt1" data-toggle="tooltip{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
							   <br>
							   <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
							   <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"Click to add..</a></span></div>'> </a>
							  <h5><a href="javascript:void(0);" class="show-tt1" productid="{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
						 @endif
                                       </div>
                                       <div class="price-right">
											<h5 class="compare cursor-pointer">
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
                                          <h5><a href="/beta-category/{{$row->fk_category_id}}">{{$row->category_name}}</a></h5>
                                       </div>
                                       <div class="price-detail">
                                          <h3>
										 <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail" style="text-transform: capitalize;">{{substr($row->product_name,0, 30)}}</a>
										  </h3>
                                       </div>
                                    </div>
                                    <div class="photo hovereffect">
                                       	<a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" /></a> 
                                    </div>
                                    <div class="info">
                                       <div class="price-wrapper">
                                          <div class="price">
                                             <h5 class="price-text-color"> ${{money_format('%i',$row->current_price)}}</h5>
                                             <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                          </div>
                                          <div class="rating hidden-sm">
                                            <span class="wrapper1">
												<a href="javascript:void(0);">
												<span class="add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('beta_assets/images/cart.png')}}" alt=""></span>
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
										@if($row->shareable_product == 'shareable')
										<p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
										<a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 1)" >Collection</a> <span class="tooltip">Add To collection</span> </span> 
										</p>
										@else
										<p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
										<a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 0)" >Collection</a> <span class="tooltip">Add To collection</span> </span> 
										</p>
										@endif
										@else
										<p class="btn-add"> 
										<a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
										<i class="ec ec-favorites"></i> {{count($row->product_like)}} 
										</a>
										</p>
										<p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
										<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
										</p>
										@endif
										</div>
                                    </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif 
                  </div>
-->
                   
          COMING SOON
                   
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Following" role="tabpanel">
               <div class="">
                  <div class="">
                     <ul class="list-inline new_mak_cl_fol">
                     @if(isset($data['following']) && !empty($data['following']))
                        @foreach($data['following'] as $row)
                           <li class="list-inline-item" onclick="window.location.href='/profile/{{$row->id}}'" style="cursor: pointer;">
                              <div class="d-flex justify-content-center h-100">
                                 <div class="image_outer_container">
                                    <div class="image_inner_container">
                                       <img src="{{asset('uploads')}}/{{$row->profile_image}}">
                                    </div>
                                    <div class="text-center">{{$row->customer_name}} <br> </div>
                                 </div>
                              </div>
                           </li>
                        @endforeach
                     @endif
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Followers" role="tabpanel">
               <div class="">
                  <div class="">
                     <ul class="list-inline new_mak_cl_fol">
                        @if(isset($data['follower']) && !empty($data['follower']))
                           @foreach($data['follower'] as $row)
                              <li class="list-inline-item" onclick="window.location.href='/profile/{{$row->id}}'" style="cursor: pointer;">
                                 <div class="d-flex justify-content-center h-100">
                                    <div class="image_outer_container">
                                       <div class="image_inner_container">
                                          <img src="{{asset('uploads')}}/{{$row->profile_image}}">
                                       </div>
                                       <div class="text-center">{{$row->customer_name}} <br> </div>
                                    </div>
                                 
                                 </div>
                              </li>
                           @endforeach
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Blog" role="tabpanel">
               <div class="">
                  <div class="row">
                     <div class="row">
                        <section class="section pair did_pair_saz">
                           <div class="wrap">
                           @if($data['insta_user_details']!='')
                           <div class="row">
                             <div class="col-sm-12">
                               <div class="col-sm-2"><img src="{{$data['insta_user_details']->profile_picture}}" class="img-circle" width="100" height="100"></div>
                               <div class="col-sm-6">
                                 <h3><b>{{$data['insta_user_details']->username}}</b></h3>
                                 <p>{{$data['insta_user_details']->counts->media}} Posts {{$data['insta_user_details']->counts->followed_by}} Followers  {{$data['insta_user_details']->counts->follows}} Following</p>
                                 <p><b>{{$data['insta_user_details']->full_name}}</b></p>
                               </div>
                             </div>
                           </div>
                           @endif
                          
                              @if($data['insta_user_details']!='')
                                 <ul class="box-container three-cols">
                                    @foreach($data['instagram_media'] as $key => $row)
                                       <li class="box">
                                          <a href="{{$row->images->standard_resolution->url}}" class="glightbox2" data-glightbox="title: Instagram Profile Desciption; descPosition: right;">
                                             <img src="{{$row->images->standard_resolution->url}}" alt="image">
                                             <p> <b>@</b>{{$row->user->username}} <br> <i class="fa fa-heart"></i> 0 <i class="fa fa-comments-o"></i>0 </p>
                                             <div class="glightbox-desc">
                                                <p>#pankajc</p>
                                                   @if(isset($row->caption) && !empty($row->caption))
                                                      <p>{{$row->caption->text}}</p>
                                                   @endif
                                                <p><i class="fa fa-heart"></i>{{$row->likes->count}} <i class="fa fa-comments-o"></i>0 </p>
                                             </div>
                                          </a>
                                       </li>
                                    @endforeach
                                 </ul>
                              @else
								@if($data['user']->id == Session::get('user_id'))
                                <a class="btn btn-warning" href="{{isset($data['instagram_url']) ? $data['instagram_url'] : '#'}}"><span class="fa fa-instagram"></span> Sign in with Instagram
			                    </a>
								@else
								<b>Blog is not added yet</b>
								@endif
                              @endif
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Follow" role="tabpanel">
               <div class="">
                  <div class="">
                     <div class="row">
                        @if(isset($data['store_follower']) && !empty($data['store_follower']))
                           @foreach($data['store_follower'] as $row)
                              <div class="col-lg-3 col-md-6 col-xs-6 largepad cus_tab_pvcza">
                                 <div class="card hovercard">
                                <div class="cardheader"> 
                                    <img src="{{asset('uploads')}}/{{$row->store_banner}}" style="height: 140px;"alt=""> 
                                </div>
                                    <div class="avatar"> <img alt="" src="{{asset('uploads')}}/{{$row->store_logo}}" alt="" /> </div>
                                    <div class="info">
                                       <div class="title"> <a target="_blank" href="#">{{$row->store_name}}</a> </div>
                                       <div class="desc">{{$row->store_url}}</div>
                                    </div>
                                    <div class="row img-12">
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                    </div>
                                    <div class="bottom"> <a class="btn btn-warning" href="/store-details/{{$row->id}}"> Visit Store </a> </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane tab_collection" id="Store" role="tabpanel">
               <div class="">
                  <div class="">
                     <div class="row">
                        @if(isset($data['stores']) && !empty($data['stores']))
                           @foreach($data['stores'] as $row)
                              <div class="col-lg-3 col-md-6 largepad cus_tab_pvcza">
                                 <div class="card hovercard">
                                    <div class="cardheader"> <img src="{{asset('uploads')}}/{{$row->store_banner}}" style="height: 140px;" alt=""> </div>
                                    <div class="avatar"> <img alt="" src="{{asset('uploads')}}/{{$row->store_logo}}" alt="" /> </div>
                                    <div class="info">
                                       <div class="title"> <a target="_blank" href="#">{{$row->store_name}}</a> </div>
                                       <div class="desc">{{url('store')}}/{{$row->store_url}}</div>
                                    </div>
                                    <div class="row img-12">
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                    </div>
                                    <div class="bottom"> <a class="btn btn-warning" href="/store/{{$row->store_url}}"> Visit Store </a> </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    
     
<!----MOBLE TAB---> 
<section class="mobile_tab_panle_profile">
    <div class="container-fluid">
       <div class="mobile_profile_accordian">
        <!-- Accordian 1-->
		<div class="acc">
			<h4>My Collections ({{count($data['collection'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                    COMING SOON
<!--
				<div class="" id="collection-list">
                    <div class="row mt-3">
                     @if(isset($data['collection']) && !empty($data['collection']))
                         @foreach($data['collection'] as $row)         
                            <div class="col-lg-3 col-md-6 largepad cus_tab_pvcza" id="collection-grid-{{$row->id}}">
                             <div class="col-item collect">
                                        <div class="col-header">
                                          <div class="price-top">
                                              <h5 class="main_name">{{$row->collection_name}} </h5>
                                              <span class="followerss"><a href="javascript:void(0)" data-toggle="modal" data-target="#collection_detail_{{$row->id}}">{{HomeController::collectionFollowerCountByCollectionById($row->id)}} followers</a></span>
                                            
                                              <div id="collection_detail_{{$row->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                 
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">{{$row->collection_name}}`s Follower</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="container-fluid">
                                                          <div class="row mt-3">
                                                             <div class="row">
                                                                @foreach(HomeController::collectionFollowerByCollectionById($row->id) as $rows)
                                                                   <?php 
                                                                      $customer = HomeController::getCustomerById($rows->customer_id);
                                                                   ?>
                                                                   <div class="col-sm-3" onclick="window.location.href='/beta-profile/{{$rows->customer_id}}'" style="cursor: pointer;">
                                                                      <div class="d-flex justify-content-center h-100">
                                                                         <div class="image_outer_container">
                                                                            <div class="image_inner_container">
                                                                               <img src="{{asset('uploads')}}/{{$customer->profile_image}}">
                                                                            </div>
                                                                            <div class="text-center">{{$customer->customer_name}} <br> </div>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                @endforeach
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                           
                                          </div>
                                            @if(Session::get('user_id'))
                                              <?php
                                                $is_follow = HomeController::is_follow(Session::get('user_id'), $row->id);
                                                if($is_follow){
                                                  ?>
                                                    <div class="price-right flcol">
                                                       <a href="javascript:void(0)" class="followerss1" style="cursor: pointer"> followed</a>
                                                    </div>
                                                  <?php
                                                }else{
                                                  ?>
                                                    <div class="price-right flcol">
                                                       <a href="javascript:void(0)" class="followerss1" style="cursor: pointer" onclick="followCollection({{$row->id}}, {{Session::get('user_id')}})"> follow collection</a>
                                                    </div>
                                                  <?php
                                                }
                                              ?>
                                           @else
                                               <div class="price-right flcol">
                                                  <a href="javascript:void(0)" class="followerss1" style="cursor: pointer" data-toggle="modal" data-target="#myModal"> follow collection</a>
                                                </div>
                                           @endif     
                                        </div>
                                        <div class="col-info">
                                          <div class="price-name">
                                            <h5>Created By <a href="/beta-profile/{{$row->customer_id}}">{{$row->f_name.' '.$row->l_name}}</a></h5>
                                          </div>
                                        </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <table class="collection" cellspacing="0" cellpadding="0" border="0">
                                                <tbody><tr>
                                                  <?php 
                                                    $product_ids = explode(',', explode(']', explode('[', $row->products_data)[1])[0]);
                                                 
                                                  ?>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['0'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['1'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['2'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                                <tr>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['3'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" height="80" align="center">
                                                      <a href="javascript:void(0)" onclick="showDetails({{$row->id}})">
                                                        <span class="howto">HOW TO PARTY ON</span> <h4 class="saterdays">{{$row->collection_name}}</h4> <span class="madein">MADE MY NIGHT</span>
                                                      </a>
                                                    </td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['4'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                                <tr>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['5'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['6'])->product_img}}" alt="" width="65"></a></td>
                                                   <td width="32%" align="center"><a href=""><img src="{{ getenv('URL')}}{{HomeController::getProductById($product_ids['7'])->product_img}}" alt="" width="65"></a></td>
                                                </tr>
                                             </tbody></table>
                                          </div>
                                       </div>
                                        <div class="info">
                                        <div class="price-wrapper">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#share-box_{{$row->id}}" class="sharethis">Share this collection</a>
                                   
                                              <div id="share-box_{{$row->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                             
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">{{$row->collection_name}} Share on</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="container-fluid">
                                                          <div class="row mt-3">
                                                             <div class="row">
                                                                <ul class="list-unstyled list-inline social " style="font-size: 30pt;">
                                                                 <li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u={{ getenv('URL')}}{{HomeController::getProductById($product_ids['0'])->product_img}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.twitter.com/moretolike" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.youtube.com/moretolike" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.rss.com/moretolike" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.tumblr.com/moretolike" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                                 <li class="list-inline-item"><a href="https://www.pinterest.com/moretolike" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                              </ul>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            
                                        </div>
                                        </div>
                                      </div>
                            </div>
                        @endforeach
                      @endif
                    </div>
               </div>
-->
				</div>
			</div>
		</div>

		<!-- Accordian 2-->
		<div class="acc">
			<h4>Loved Items ({{count($data['product_like'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                    COMING SOON
				</div>
			</div>
		</div>

		<!-- Accordian 3-->
		<div class="acc">
			<h4>Following ({{count($data['following'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
				<div class="">
                  <div class="">
                     <ul class="list-inline new_mak_cl_fol">
                     @if(isset($data['following']) && !empty($data['following']))
                        @foreach($data['following'] as $row)
                           <li class="list-inline-item" onclick="window.location.href='/beta-profile/{{$row->id}}'" style="cursor: pointer;">
                              <div class="d-flex justify-content-center h-100">
                                 <div class="image_outer_container">
                                    <div class="image_inner_container">
                                       <img src="{{asset('uploads')}}/{{$row->profile_image}}">
                                    </div>
                                    <div class="text-center">{{$row->customer_name}} <br> </div>
                                 </div>
                              </div>
                           </li>
                        @endforeach
                     @endif
                     </ul>
                  </div>
               </div>
					
				</div>
			</div>
		</div>

		<!-- Accordian 4-->
		<div class="acc">
			<h4>Followers ({{count($data['follower'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
					 <div class="">
                  <div class="">
                     <ul class="list-inline new_mak_cl_fol">
                        @if(isset($data['follower']) && !empty($data['follower']))
                           @foreach($data['follower'] as $row)
                              <li class="list-inline-item" onclick="window.location.href='/beta-profile/{{$row->id}}'" style="cursor: pointer;">
                                 <div class="d-flex justify-content-center h-100">
                                    <div class="image_outer_container">
                                       <div class="image_inner_container">
                                          <img src="{{asset('uploads')}}/{{$row->profile_image}}">
                                       </div>
                                       <div class="text-center">{{$row->customer_name}} <br> </div>
                                    </div>
                                 
                                 </div>
                              </li>
                           @endforeach
                        @endif
                     </ul>
                  </div>
               </div>
				</div>
			</div>
		</div>
        
        <!-- Accordian 5-->
		<div class="acc">
			<h4>My Blog ({{!empty($data['instagram_media'])?count($data['instagram_media']):'0'}}) </h4>
			<div class="content_pro_ac">
				<div class="content-inner">
				    <div class="">
                  <div class="">
                     <div class="">
                        <section class="section pair">
                           <div class="wrap">
                           @if($data['insta_user_details']!='')
                           <div class="row">
                             <div class="col-sm-12">
                               <div class="col-sm-2">
                                   <img src="{{$data['insta_user_details']->profile_picture}}" class="img-circle" width="100" height="100">
                                 </div>
                               <div class="col-sm-6">
                                 <h3><b>{{$data['insta_user_details']->username}}</b></h3>
                                 <p>{{$data['insta_user_details']->counts->media}} Posts {{$data['insta_user_details']->counts->followed_by}} Followers  {{$data['insta_user_details']->counts->follows}} Following</p>
                                 <p><b>{{$data['insta_user_details']->full_name}}</b></p>
                               </div>
                             </div>
                           </div>
                           @endif
                          
                              @if($data['insta_user_details']!='')
                                 <ul class="box-container three-cols">
                                    @foreach($data['instagram_media'] as $key => $row)
                                       <li class="box">
                                          <a href="{{$row->images->standard_resolution->url}}" class="glightbox2" data-glightbox="title: Instagram Profile Desciption; descPosition: right;">
                                             <img src="{{$row->images->standard_resolution->url}}" alt="image">
                                             <p> <b>@</b>{{$row->user->username}} <br> <i class="fa fa-heart"></i> 0 <i class="fa fa-comments-o"></i>0 </p>
                                             <div class="glightbox-desc">
                                                <p>#pankajc</p>
                                                   @if(isset($row->caption) && !empty($row->caption))
                                                      <p>{{$row->caption->text}}</p>
                                                   @endif
                                                <p><i class="fa fa-heart"></i>{{$row->likes->count}} <i class="fa fa-comments-o"></i>0 </p>
                                             </div>
                                          </a>
                                       </li>
                                    @endforeach
                                 </ul>
                              @else
								@if($data['user']->id == Session::get('user_id'))
                                <a class="btn btn-warning space1" href="{{isset($data['instagram_url']) ? $data['instagram_url'] : '#'}}"><span class="fa fa-instagram"></span> Sign in with Instagram
			                    </a>
								@else
								<b>Blog is not added yet</b>
								@endif
                              @endif
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
				</div>
			</div>
		</div>
        
        <!-- Accordian 6-->
		<div class="acc">
			<h4>Stores|Follow ({{count($data['store_follower'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
				   <div class="">
                  <div class="">
                     <div class="row">
                        @if(isset($data['store_follower']) && !empty($data['store_follower']))
                           @foreach($data['store_follower'] as $row)
                              <div class="col-lg-3 col-md-6 col-sm-6  largepad cus_tab_pvcza">
                                 <div class="card hovercard">
                                <div class="cardheader"> 
                                    <img src="{{asset('uploads')}}/{{$row->store_banner}}" style="height: 140px;"alt=""> 
                                </div>
                                    <div class="avatar"> <img alt="" src="{{asset('uploads')}}/{{$row->store_logo}}" alt="" /> </div>
                                    <div class="info">
                                       <div class="title"> <a target="_blank" href="#">{{$row->store_name}}</a> </div>
                                       <div class="desc">{{$row->store_url}}</div>
                                    </div>
                                    <div class="row img-12">
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                    </div>
                                    <div class="bottom"> <a class="btn btn-warning" href="/beta-store-details/{{$row->id}}"> Visit Store </a> </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
               </div>
				</div>
			</div>
		</div>
        
         <!-- Accordian 7-->
		<div class="acc">
			<h4>My Store ({{count($data['stores'])}})</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
				  <div class="">
                  <div class="">
                     <div class="row">
                        @if(isset($data['stores']) && !empty($data['stores']))
                           @foreach($data['stores'] as $row)
                              <div class="col-lg-3 col-sm-6 col-md-6 largepad cus_tab_pvcza">
                                 <div class="card hovercard">
                                    <div class="cardheader"> <img src="{{asset('uploads')}}/{{$row->store_banner}}" style="height: 140px;" alt=""> </div>
                                    <div class="avatar"> <img alt="" src="{{asset('uploads')}}/{{$row->store_logo}}" alt="" /> </div>
                                    <div class="info">
                                       <div class="title"> <a target="_blank" href="#">{{$row->store_name}}</a> </div>
                                       <div class="desc">{{url('store')}}/{{$row->store_url}}</div>
                                    </div>
                                    <div class="row img-12">
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                       <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="" /></a></div>
                                    </div>
                                    <div class="bottom"> <a class="btn btn-warning" href="/store/{{$row->store_url}}"> Visit Store </a> </div>
                                 </div>
                              </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
               </div>
				</div>
			</div>
		</div>
        
        </div>
        
	
    </div>       
</section>
    
    
    
    
    
    
</div>
      @include('frontend/include/footer')