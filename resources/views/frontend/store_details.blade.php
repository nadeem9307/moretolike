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
      



<section class="new__store__details">
  <div class="">
       
      <div class="pro__new__baner" style="background-image: url(https://moretolike.com/assets/images/fbback.jpg);">
          <div class="content_baner_strore">
              <div class="row">
                  <div class="col-lg-4 col-md-6 offset-lg-4">
                      <div class="baner_lft_pros">
                          <p>Welcome to the</p>
                          <h1>Stay Fine</h1>
                          <h3>Store</h3>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="rating_system_cl">
                          <p>4.3<br>Overall<br>Rating</p>
                          <h5>Your Rating <span></span></h5>
                          <small class="smal_sewdrfr">3752 Followers</small>
                          <ul class="list-inline baner_bnt_apwd">
                              
                             <li class="list-inline-item">
                                 <a href="#" class="get_st__dw">Get Store Support</a>
                              </li>
                              
                              <li class="list-inline-item">
                                 <a href="#" class="get__ewdss"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                              </li>
                              
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="container-fluid">
      <div class="panel_her__store">
         <div class="row">
             <div class="col-lg-2 col-md-2">
               <div class="store_details_hher">
                  <img class="img-responsive" src="https://via.placeholder.com/800x500" alt="image">
                   <p>Store Name</p>
               </div>
             </div>
             <div class="col-lg-5 col-md-7">
                   <ul class="nav nav-pills tab_foiusewd_swe" role="tablist">
                       <li class="nav-item">
                           <a class="nav-link active" data-toggle="pill" href="#home_store_1">
                               Products
                               <b>1560</b>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" data-toggle="pill" href="#home_store_2">
                               Collection
                               <b>150</b>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" data-toggle="pill" href="#home_store_3">
                               Followers
                               <b>1010</b>
                           </a>
                       </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="pill" href="#home_store_4">
                               Store Info
                               <b></b>
                            </a>
                       </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="pill" href="#home_store_5">
                              Review
                               <b></b>
                            </a>
                       </li>
                   </ul>
             </div>
             <div class="col-lg-2 col-md-3 nab_spe">
               <div class="input-group here_cl_swdf">
                   <input type="text" class="form-control" id="exampleInputAmount" placeholder="Search product in store...">
<!--
                   <span class="input-group-btn">
                       <button type="button" class="btn btn-secondary">Go!</button>
                   </span>
-->
               </div>

             </div>
             <div class="col-lg-3 col-md-6">
               <div class="select_her_se__sw">
                  <ul class="list-inline">
                     <li class="list-inline-item">
                         <select name="cars" class="custom-select mb-1">
                             <option selected>Sort by newness</option>
                             <option value="volvo">Volvo</option>
                             <option value="fiat">Fiat</option>
                             <option value="audi">Audi</option>
                         </select>
                     </li>
                         <li class="list-inline-item">
                         <select name="cars" class="custom-select mb-1">
                             <option selected>Select a category</option>
                             <option value="volvo">Volvo</option>
                             <option value="fiat">Fiat</option>
                             <option value="audi">Audi</option>
                         </select>
                     </li>
                  </ul>
               </div>
             </div>
         </div>
      </div>
          
          
          
       

  <!-- Tab panes -->
          
  <div class="tab-content cut_tab_nshdfg">
      
    <!--TAB ONE-->
    <div id="home_store_1" class="tab-pane active"><br>
    <div class="tabstore_new_cs">
        <h1 class="product_cl">Products</h1>
    
        <div class="row">
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
                 <div class="col-lg-2 col-md-4 col-6 bdw_wpoe">
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
        </div>   
        
        <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">3</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
        </div>    
        <!---PRODUCT-->
         
        
        
        
        
        
        </div>       
    </div> 
    <!--TAB TWO-->
    <div id="home_store_2" class=" tab-pane fade"><br>
       <h1 class="product_cl">Collection</h1>
        <div class="collection_panel__h">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
          <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">3</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
        </div>    
        
    </div> 
    <!--TAB THREE-->
    <div id="home_store_3" class=" tab-pane fade"><br>
     <h1 class="product_cl">Followers</h1>
        <div class="follwing_content_pane_new">
                                
                                <div class="panel__cl_newq">
                                  <div class="row">
                                       
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_2.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                             <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_1.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                               <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/feature_pro.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_1.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/ifill_tower.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/profile_i_cl.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/ipad_one_5.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/pro_swma.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                             <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/aqxzcfbg.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                 <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                              <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/feature_pro.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                              <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_1.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
        
          <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">3</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
        </div>    
    </div> 
    <!--TAB FOUR-->
    <div id="home_store_4" class=" tab-pane fade"><br>
             <h1 class="product_cl"> Store Info</h1>
        <div class="store_ingor__swe">
           
            <div class="cuast__sksu_akn">
                
                
                 <div class="row">
                       <div class="col-md-12">
                         <div class="input-group">
                           <h1>Address</h1>
                            <p>77 Massachusetts Ave, Cambridge, MA 02139, United States</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Phone</h1>
                            <p>+9187951445XX</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Store Url</h1>
                            <p>storeinfo.com</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Social</h1>
                           <span><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> storeinfofacebook.com </a></span>
                 <span><a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i> storeinfotwitter.com</a></span>
                 <span><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i> storeinfolinkedin.com </a></span>
                 <span><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> storeinfogoogleplus.com </a></span> 
                         </div>
                           
                       </div>
                    </div>    
                    
                
                
                
                
                
                
                
                
                
</div>

            
        </div>
    </div>
      
    <div id="home_store_5" class="container tab-pane fade"><br>
     <h1 class="product_cl">Review</h1>
        <div class="review_new_panel_cl">
          <div class="row">
              
                <div class="col-lg-6 col-md-6">
                  <div class="review_lft_pane_ccl">
                        <div class="review_cl_here">
                                    <h2>Review (1)</h2>
                                    <hr>
                                   
                                 <h1>5.0 <span class="first_star_cl"></span></h1>
                                   
                                   
                                   <div class="orq_caw">
                                   <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-1">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-7">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                     <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-1">
                                        <p>1</p>
                                       </div>
                                       <div class="col-lg-8 col-md-7 col-7">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:50%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                     <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-1">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-7">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:40%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                     <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-1">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-7">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:30%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                      <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-1">
                                        <p>1</p>
                                       </div>
                                       <div class="col-lg-8 col-md-7 col-7">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:20%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   </div>
                               </div>
                    </div>
                </div>
              
                <div class="col-lg-6 col-md-6">
                    <div class="review_rght_pane_ccl">
                       <div class="review_form_cl">
                                  <h1>Add a review</h1>
                                    <hr class="haqsw_pam">
                                    
                                    <form>
                                       
                                        <div class="sra_aws">
                                          <p>Your Rating</p>
                                            <span></span>
                                        </div>
                                        
                                        <div class="row haqw_pa">
                                            <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <label for="usr">Name <span>*</span></label>
                                                      <input type="text" class="form-control" id="usr">
                                                  </div>  
                                            </div>
                                            
                                           <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <label for="usr">Email <span>*</span></label>
                                                      <input type="text" class="form-control" id="usr">
                                                  </div>  
                                            </div>
                                            
                                             <div class="col-lg-12">
                                                 <div class="form-group">
                                                     <label for="comment">Your Review</label>
                                                     <textarea class="form-control" rows="6" id="comment"></textarea>
                                                 </div>
                                              </div>
                                            
                                              <div class="col-lg-12">
                                                 <div class="form-group nam_qals">
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                 </div>
                                              </div>
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                    </form>
                                    
                                </div>
                    </div>
                </div>
          </div>
            
            <div class="revide_cl_qad">
                       <hr>
                         <div class="row cjagw">
                              <div class="col-lg-2 col-md-3">
                                  <div class="nam_pshd">
                                      <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                    <h5>John Debit</h5>
                                      <p>June 21, 2017</p>
                                      <span></span>
                                  </div>
                               </div>
                              <div class="col-lg-10 col-md-9">
                                  <div class="mesa_kahw">
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                  </div>
                             </div>
                         </div>
                
                         <div class="row cjagw">
                              <div class="col-lg-2 col-md-3">
                                  <div class="nam_pshd">
                                      <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                    <h5>John Debit</h5>
                                      <p>June 21, 2017</p>
                                      <span></span>
                                  </div>
                               </div>
                              <div class="col-lg-10 col-md-9">
                                  <div class="mesa_kahw">
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                  </div>
                             </div>
                         </div>
                
                     </div>
            
        </div>
    </div>
      
      
  </div>
</div>
          
          
          
<!---------------
     MOBLE TAB
----------------> 




<section class="mobile_tab_panle_profile">
    <div class="">
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
                
                <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
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
                <div class="collection_panel__h">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="collection__conter_sec">
                                           <h1 class="satr_cl__SW">Saterdays <span><a href="#">Follow collection</a></span></h1>
                                            <p class="follow__cl_aqws">58 Followers</p>
                                            <h5 class="cre__acls">Created by <a href="#">Editor</a></h5>
                                            <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="center_con__sroe">
                                                <p>How to party on</p>
                                               <h2>Saterdays</h2>
                                                <p>Made my Night</p>
                                            </div>
                                               <ul class="list-inline pro_col__img_cl">
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                                                </li>
                                               <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__6.jpg" alt="image">
                                                </li>
                                                <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                                                </li>
                                                   <li class="list-inline-item">
                                                 <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                                                </li>
                                            </ul>
                                            <div class="shre__this_col">
                                              <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this collection...</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
				</div>
                <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
        </div>
			</div>
		</div>

		<!-- Accordian 3-->
		<div class="acc">
			<h4>Followers</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
		    
                      <div class="follwing_content_pane_new">
                                
                                <div class="panel__cl_newq">
                                  <div class="row">
                                       
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_2.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                             <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_1.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                               <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/feature_pro.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_1.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/ifill_tower.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/profile_i_cl.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/ipad_one_5.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                          <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/pro_swma.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                             <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/aqxzcfbg.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                 <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                              <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/feature_pro.jpg">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                              <div class="con_fo__dwe">
                                            
                                              <div class="bg__im_swqa_mn" style="background-image: url(https://moretolike.com/assets/img/baner__o_1.png">
                                                
                                              </div>
                                              
                                              <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pa__qwa">
                                                    <div class="baner_img_new__laswq">
                                                    <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_3.jpg" alt="image">
                                                    </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 pa__qwa">
                                                     <div class="im_text_he__msnw">
                                                        <h1>Mathilda Campbell</h1>
                                                         <p>3,690 Followers</p>
                                                     </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-4 pa__qwa">
                                                   <div class="add_f__les_pw">
                                                       <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Follow</a>
                                                   </div>
                                                  </div>
                                              </div>
                                              <hr>
                                              
                                              <div class="row re__pswee_pam">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__poks">
                                                           <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Visit user</a>
                                                      </div>
                                                  </div>
                                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                      <div class="batw__psesmn">
                                                       <i class="fa fa-check" aria-hidden="true"></i> Available form Hire
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
        
                    
				</div>
                <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
        </div>
			</div>
		</div>

		<!-- Accordian 4-->
		<div class="acc">
			<h4>Store Info</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
                    
		 <div class="cuast__sksu_akn">
                
                
                  <div class="row">
                       <div class="col-md-12">
                         <div class="input-group">
                           <h1>Address</h1>
                            <p>77 Massachusetts Ave, Cambridge, MA 02139, United States</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Phone</h1>
                            <p>+9187951445XX</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Store Url</h1>
                            <p>storeinfo.com</p>  
                         </div>
                           
                            <div class="input-group">
                           <h1>Social</h1>
                           <span><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> storeinfofacebook.com </a></span>
                 <span><a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i> storeinfotwitter.com</a></span>
                 <span><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i> storeinfolinkedin.com </a></span>
                 <span><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> storeinfogoogleplus.com </a></span> 
                         </div>
                           
                       </div>
                    </div>    
                    
               </div>

				</div>
			</div>
		</div>
        
       
        <!-- Accordian 6-->
		<div class="acc">
			<h4>Review</h4>
			<div class="content_pro_ac">
				<div class="content-inner">
			<div class="container-fluid">
					  <div class="review_new_panel_cl">
          <div class="row">
              
                <div class="col-lg-6 col-md-6">
                  <div class="review_lft_pane_ccl">
                        <div class="review_cl_here">
                                    <h2>Review (1)</h2>
                                    <hr>
                                   
                                 <h1>5.0 <span class="first_star_cl"></span></h1>
                                   
                                   
                                   <div class="orq_caw">
                                   <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-2">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-6">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                     <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-2">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-6">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                     <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-2">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-6">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                      <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-2">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-6">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                   
                                        <div class="row ma_cl_aqw">
                                     <div class="col-lg-3 col-md-3 col-4">
                                        <div class="star_rt_spa">
                                        <span></span>
                                        </div>     
                                       </div>
                                      <div class="col-lg-1 col-md-1 col-2">
                                        <p>1</p>
                                       </div>
                                      <div class="col-lg-8 col-md-7 col-6">
                                          <div class="progress process_one_cl">
                                     <div class="progress-bar bg-success progress-bar-striped" style="width:60%"></div>
                                       </div>
                                       </div>   
                                   </div>
                                       
                                   </div>
                               </div>
                    </div>
                </div>
              
                <div class="col-lg-6 col-md-6">
                    <div class="review_rght_pane_ccl">
                       <div class="review_form_cl">
                                  <h1>Add a review</h1>
                                    <hr class="haqsw_pam">
                                    
                                    <form>
                                       
                                        <div class="sra_aws">
                                          <p>Your Rating</p>
                                            <span></span>
                                        </div>
                                        
                                        <div class="row haqw_pa">
                                            <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <label for="usr">Name <span>*</span></label>
                                                      <input type="text" class="form-control" id="usr">
                                                  </div>  
                                            </div>
                                            
                                           <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <label for="usr">Email <span>*</span></label>
                                                      <input type="text" class="form-control" id="usr">
                                                  </div>  
                                            </div>
                                            
                                             <div class="col-lg-12">
                                                 <div class="form-group">
                                                     <label for="comment">Your Review</label>
                                                     <textarea class="form-control" rows="6" id="comment"></textarea>
                                                 </div>
                                              </div>
                                            
                                              <div class="col-lg-12">
                                                 <div class="form-group nam_qals">
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                 </div>
                                              </div>
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                    </form>
                                    
                                </div>
                    </div>
                </div>
          </div>
            
            <div class="revide_cl_qad">
                       <hr>
                         <div class="row cjagw">
                              <div class="col-lg-2">
                                  <div class="nam_pshd">
                                      <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                    <h5>John Debit</h5>
                                      <p>June 21, 2017</p>
                                      <span></span>
                                  </div>
                               </div>
                              <div class="col-lg-10">
                                  <div class="mesa_kahw">
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                  </div>
                             </div>
                         </div>
                
                        <div class="row cjagw">
                              <div class="col-lg-2">
                                  <div class="nam_pshd">
                                      <img class="img-responsive" src="https://moretolike.com/assets/img/pro_cl_po_2.jpg" alt="image">
                                    <h5>John Debit</h5>
                                      <p>June 21, 2017</p>
                                      <span></span>
                                  </div>
                               </div>
                              <div class="col-lg-10">
                                  <div class="mesa_kahw">
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                  </div>
                             </div>
                         </div>
                
                  <div class="pagenation_wrap_new">
          <div class="pagenation">
              <ul>
                  <li class="prev"><a href="....">Prev</a></li>
                  <li class="active">1</li>
                  <li><a href="....">2</a></li>
                  <li><a href="....">...</a></li>
                  <li class="next"><a href="....">Next</a></li>
              </ul>
          </div>
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




      
      
  </div>
</section>





@include('frontend/include/footer')