      <style>
#loading_lo {
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:1000;
    width:100%;
    height:100%;
    min-height:100%;
    background:#000;
    opacity:0.5;
    text-align:center;
    color:#fff;
}

#loading_anim {
    position:absolute;
    left:50%;
    top:50%;
    z-index:1010;
}
</style>



<div id="loading_lo"><div id="loading_anim" class="login__submit processing"></div></div>

<!--- add two --->
    <section class="carousel-border">
	 <div class="container-fluid">
<!--
		<div id="clients">
		   <div class="clients-wrap">
			  <ul id="clients-list" class="clearfix">
				 @foreach($static_data['brands'] as $row)
				 <li>
					<a href="javascript:void(0)">
					@if(file_exists(getenv('URL').'60X200_'.$row->brand_img))
					<img src="{{ getenv('URL')}}60X200_{{$row->brand_img}}" alt="{{$row->name}}">
					@else
					{{$row->name}}
					@endif
					</a>
				 </li>
				 @endforeach
			  </ul>
		   </div>
		   
		</div>
-->
         <div id="clients">
		   <div class="clients-wrap">
			  <ul id="clients-list" class="clearfix">
				 <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/graphicriver.png" alt="">
					</a>
				 </li>
                   <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/codecanyon.png" alt="">
					</a>
				 </li>
                   <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/activeden.png" alt="">
					</a>
				 </li>
                   <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/themeforest.png" alt="">
					</a>
				 </li>
                   <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/3docean.png" alt="">
					</a>
				 </li>
                   <li>
					<a href="javascript:void(0)">
                      <img src="https://moretolike.com/assets/images/audiojungle.png" alt="">
					</a>
				 </li>
			  </ul>
		   </div>
		   <!-- @end .clients-wrap -->
		</div>
         
         
         
	 </div>
	</section>
	<!--footer first-->


	<section style="margin-bottom: 30px;" class="footer_pe_di">
		<div class="container-fluid">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
				  <h5 class="footer-heading">Featured Products</h5>
				  <ul class="list-unstyled quick-links">
					 @foreach($static_data['featured_product'] as $fp)
						<li>
						   <div class="row">
							  <div class="produc-left"> <a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail" ><img src="{{ getenv('URL')}}75X75_{{$fp->product_img}}" alt="{{$fp->product_name}}" /></a> </div>
							  <div class="detail-right">
								 <h4 class="price-detail"><a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail">{{$fp->product_name}}</a></h4>
								 <p>&#36;{{$fp->current_price}}</p>
							  </div>
						   </div>
						</li>   
					 @endforeach
				  </ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 class="footer-heading">Onsale Products</h5>
					<ul class="list-unstyled quick-links">
					 @foreach($static_data['on_sale'] as $fp)
						<li>
						   <div class="row">
							  <div class="produc-left"> <a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail"><img src="{{ getenv('URL')}}75X75_{{$fp->product_img}}" alt="{{$fp->product_name}}" /></a> </div>
							  <div class="detail-right">
								 <h4 class="price-detail"><a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail">{{$fp->product_name}}</a></h4>
								 <p>&#36;{{$fp->current_price}}</p>
							  </div>
						   </div>
						</li>   
					 @endforeach
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 class="footer-heading">Featured Gigs</h5>
					<ul class="list-unstyled quick-links">
					 @foreach($static_data['top_rated'] as $fp)
						<li>
						   <div class="row">
							  <div class="produc-left"> <a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail"><img src="{{ getenv('URL')}}75X75_{{$fp->product_img}}" alt="{{$fp->product_name}}" /></a> </div>
							  <div class="detail-right">
								 <h4 class="price-detail"><a href='{{url("/product/".$fp->product_id)}}' class="show_product_detail">{{$fp->product_name}}</a></h4>
								 <p>&#36;{{$fp->current_price}}</p>
							  </div>
						   </div>
						</li>   
					 @endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
      <!--brand slider-->
	<section class="footer-newsletter">
	 <div class="container-fluid">
		<div class="footer-newsletter">
		   <div class="container">
			  <div class="row">
				 <div class="col-lg-7 col-md-6  col-xs-12">
					<h5 class="newsletter-title"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Sign up to Newsletter</h5>
					<span class="newsletter-marketing-text">...and receive <strong>$20 coupon for first shopping</strong></span> 
				 </div>
				 <div class="col-lg-5 col-md-6 col-xs-12">
					<form method="get" action="https://moretolike.com/user-register">
					   <div class="input-group nsh_nsm_l">
						  <input type="email" class="form-control subs" placeholder="Enter your email">
						  <span class="input-group-btn">
						  <button class="btn btn-theme btn-subs" type="submit">Subscribe</button>
						  </span> 
					   </div>
					</form>
				 </div>
			  </div>
		   </div>
		</div>
	 </div>
	</section>
	<!-- Footer -->

	<section id="footer" class="hide_for_xs">
		<div class="container footer-pad">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
			   <div class="col-xs-12 col-sm-4 col-md-4"> 
				  <h5><a href="javascript:void(0)" class="footerlogo">
				   <img src="{{asset('assets/images/moretolike-new-logo.png')}}" alt="">
				  </a></h5>
				  <ul class="list-unstyled quick-links">
					 <li>
						<div class="row">
						   <div class="col-sm-3"> <img src="{{asset('assets/images/headphone.jpg')}}" alt="" /> </div>
						   <div class="col-sm-9">
							  <p class="small-p"> Got Questions ? Call us 24/7!</p>
							  <p class="big-p">(800) 8001-8588, (0600) 874 548</p>
						   </div>
						</div>
					 </li>
					 <li><b>Contact Info</b></li>
					 <li>17 Princess Road, London, Greater London NW1 8JR, UK</li>
					 <li>
						<ul class="list-unstyled list-inline social ">
						   <li class="list-inline-item"><a href="https://www.facebook.com/moretolike" target="_blank"><i class="fa fa-facebook"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.twitter.com/moretolike" target="_blank"><i class="fa fa-twitter"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-instagram"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.youtube.com/moretolike" target="_blank"><i class="fa fa-youtube"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.rss.com/moretolike" target="_blank"><i class="fa fa-rss"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.tumblr.com/moretolike" target="_blank"><i class="fa fa-tumblr"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						   <li class="list-inline-item"><a href="https://www.pinterest.com/moretolike" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					 </li>
				  </ul>
			   </div>
			   <div class="col-xs-12 col-sm-6 col-md-6">
				  <h5>Find It Fast</h5>
				  <div class="row">
					 <div class="col-sm-6">
						<ul class="list-unstyled quick-links">
						   @foreach($static_data['categories_row_1'] as $row)
							  <li><a href="{{getenv('APP_URL')}}/category/{{$row->id}}">{{$row->category_name}}</a></li>
						   @endforeach
						</ul>
					 </div>
					 <div class="col-sm-6">
						<ul class="list-unstyled quick-links">
						   @foreach($static_data['categories_row_2'] as $row)
							  <li><a href="{{getenv('APP_URL')}}/category/{{$row->id}}">{{$row->category_name}}</a></li>
						   @endforeach
						</ul>
					 </div>
				  </div>
			   </div>
			   <div class="col-xs-12 col-sm-2 col-md-2">
				  <h5>Customer Care</h5>
				  <ul class="list-unstyled quick-links">
					 <li><a href="">Cart</a></li>
					 <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
					 <li><a href="{{ url('/order-list') }}">My Orders</a></li>
					 <li><a href="{{ url('/compare') }}">Comapre</a></li>
					 <li><a href="{{ url('/faq') }}">FAQs</a></li>
					 <li><a href="{{ url('/contact') }}">Product Support</a></li>
				  </ul>
			   </div>
			</div>
			<div class="row">
			   <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5"> </div>
            </div>
			   <hr>
	
		</div>
		<div class="container-fluid">
			<div class="row copyright-bar">
			   <div class="col-xs-12 col-sm-6 col-md-6 ">
				  <p>© Moretolike - All Rights Reserved </p>
			   </div>
			   <div class="col-xs-12 col-sm-6 col-md-6"> <a href="javascript:void(0)"><img src="{{asset('assets/images/patment-icon.png')}}" align="right" alt="" /></a> </div>
			</div>
		</div>
	</section>
	<!-- ./Footer --> 


   <!---Login-->

<!--
	<div class="modal fade in login_on_mobile" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content login_model_con" style="">
 <div class="fulldivinsta"><a href="javascript:void(0)" onclick="instagramLogin();"><img src="{{asset('assets/images/insta.png')}}" alt="" style="width: 100%"></a></div>

		   <div class="modal-header mdheader">
			  <p class="close close1" data-dismiss="modal" aria-hidden="true" style="padding: 5px 11px 7px 10px;">x</p>
			  <h4 class="modal-title" id="myModalLabel">
				 <div class="row">
					<div class="col-md-12 facebook-l">
					   <a href="javascript:void(0);" onclick="fbLogin()" id="fbLink" class="fb btn"> <i class="fa fa-facebook fa-fw"></i> Login with Facebook </a>
					</div>
				 </div>
			  </h4>
		   </div>

		   <div class="modal-body">

			  <div class="row">
				 <div class="col-md-12">
					
					<ul class="modal-login">
					   <li>
						  <h3>Log In with your credentials</h3>
					   </li>
					   <li>
						  <p>or  <a href="beta-user-register">Create an account</a></p>
					   </li>
					</ul>
					<div class="tab-content">
					   <div class="tab-pane active" id="tab-accessories">
						  <form role="form" class="form-horizontal" action="javascript:void(0)" method="post">
							 <div class="form-group login-moretolike">
								<input type="hidden" name="_token" value="HEAmDDyRY5bFtTzxkieJQ3EYC1WE7GX5tZ3g99m1">
								<div class="col-sm-12">
								   <input type="email" class="form-control" id="login_email" placeholder="Email" name="email" required>
								</div>
							 </div>
							 <div class="form-group">
								<div class="col-sm-12">
								   <input type="password" autocomplete class="form-control" id="login_password" placeholder="Password" name="password" required>
								</div>
							 </div>
							 <div class="form-group">
								<div class="col-sm-12">
								   <button type="submit" class="btnsilver" onclick="login();" style="width: 100%;"> Sign in</button>
								</div>
							 </div>
							 <div class="form-group row">
								<div class="col-sm-6"> <label>
								   <input type="checkbox" name="checkbox" id="checkbox">
								   </label>  <b>Remeber Me</b>
								</div>
								<div class="col-sm-6 forgotpas"> 
                                    <a href="https://moretolike.com/beta-forget-pass">Forgot your password?</a> 
                                 </div>
							 </div>
						  </form>
					   </div>
					</div>
				 </div>
			  </div>

               
<div  class="owl-carousel owl-theme login_cl_model">
  <div class="item">
        <img src="https://moretolike.com/assets/images/login_img_slide_3.jpg" class="img-responsive" alt="Image">
    </div>
   <div class="item">
        <img src="https://moretolike.com/assets/images/login_img_slide_2.jpg" class="img-responsive" alt="Image">
    </div>
   <div class="item">
        <img src="https://moretolike.com/assets/images/login_img_slide_3.jpg" class="img-responsive" alt="Image">
    </div>

</div>
 </div>
		</div>
	 </div>
	</div>

-->





<!--
<div class="modal fade" id="exampleModal_cl">
    <div class="modal-dialog">
      <div class="modal-content">
      
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
   
        <div class="modal-body">
           <div class="login_con_cl_ma">
     
         
             <div class="tab_login_new">
             <ul class="nav nav-pills" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active" data-toggle="pill" href="#login_id_tab">Sign up</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="pill" href="#create_id_tab">Sign in</a>
                 </li>
             </ul>

            
             <div class="tab-content">
                 <div id="login_id_tab" class="container tab-pane active"><br>
                   <div class="login_cl_ide">
                     
                       <div class="social_icon_cl_wqa">
                           <ul class="list-inline">
                               <li class="list-inline-item"><a href="#" style="background-color: #6d84b4;"><i  class="fa fa-facebook-official" aria-hidden="true"></i> <span class="nmmaq__msn">Sign in with Facebook</span></a></li>
                               
                               <li class="list-inline-item"><a href="#" style="background-color: #df4b37;"><i class="fa fa-google-plus-square" aria-hidden="true"></i> <span class="nmmaq__msn">Sign in with Google</span></a></li>
                           </ul>
                       </div>
                       
                       <div class="or_c_swer">
                         <p>Or</p>
                           <hr>
                       </div>
                       
                   </div>  
                 </div>
                 <div id="create_id_tab" class="container tab-pane fade"><br>
                     <div class="create_cl_ide">
                       <h3>2</h3>
                   </div>  
                 </div>
                 
                 <div class="form__panel_qwd">
                      <div class="input-group mb-3">
                          <label for="usr">E-mail address</label>
                          <input type="text" class="form-control" placeholder="Email">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          </div>
                      </div>
                     <div class="input-group mb-3">
                         <label for="usr">Password</label>
                          <input type="text" class="form-control" placeholder="Password">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
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
-->





<!----MOBILE MODEL SECTION---->
<!--
<div class="container">


  <div class="modal fade" id="exampleModal_cl">
    <div class="modal-dialog">
      <div class="modal-content cus__nbder_mj">
          <button type="button" class="close bhhs_ew" data-dismiss="modal">Close &times;</button>
          <div class="modal-body">
            <div class="tab_login_new">
                <ul class="nav nav-pills" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#menu_sign_u_m">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="pill" href="#home_login_m">Sign up</a>
                    </li>
                </ul>

         
                <div class="tab-content">
                    
                    
                       <div id="menu_sign_u_m" class="tab-pane fade active show"><br>

                       <div class="login_cl_ide nabv__dw">
                       <div class="social_icon_cl_wqa">
                           <ul class="list-inline">
                                  <li class="list-inline-item"><a href="#" style="background-color: #6d84b4;" onclick="fbLogin()"><i  class="fa fa-facebook-official"  aria-hidden="true"></i> <span class="nmmaq__msn">Sign Up with Facebook</span></a></li>
                               
                               
                               <li class="list-inline-item"><a href="#" style="background-color: #df4b37;"><i class="fa fa-google-plus-square" aria-hidden="true"></i> <span class="nmmaq__msn">Sign in with Google</span></a></li>
                           </ul>
                       </div>
                       
                       <div class="or_c_swer">
                         <p>Or</p>
                           <hr>
                       </div>
                         <form class="form" action="javascript:void(0)" method="post">
                        <div class="form__panel_qwd">
                        	<div class="error" id="emailErrLogin"></div>
                      <div class="input-group mann_sww__mn">
                          <label for="usr">E-mail address</label>
                          <input type="hidden" name="_token" value="HEAmDDyRY5bFtTzxkieJQ3EYC1WE7GX5tZ3g99m1">
                          <input type="text" class="form-control" placeholder="Email" name="email" id="login_email">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          </div>
                      </div>
                      <div class="error" id="passwordErrLogin"></div>
                     <div class="input-group mb-3">
                         <label for="usr">Password</label>
                          <input type="password" autocomplete class="form-control email_cl_sa" id="login_password" name="password">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                          </div>
                      </div>
                 </div>
                           
                   <div class="eye_cll_mnbg">   
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="blury_cl_make">
                              <i class="fa fa-eye login_pass" aria-hidden="true"></i><span>Show password</span>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="nabfgww__pmh">
                                <a href="#">Forgot your password?</a>
                              </div>
                           </div>
                    </div>
                        </div> 
                           
                           <div class="btn__nbfdre">
                                <button onclick="login();" class="login__submit--" >Sign in</button>
                           </div> 
                           </form> 
                   </div> 
                        
                      
                        	<form method="post" onsubmit="get_registered_email(event)">
                        <div class="for_get_pasqw">
                                 <div class="form__panel_qwd">
                                 	<div id="error_email"></div>
                                 	<div id="unsuccess_email"></div>
                      <div class="input-group mann_sww__mn">
                      
                          <label for="usr">E-mail address</label>

                          <input type="text" class="form-control" placeholder="Email" id="email_forget">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          </div>
                      </div>
                   
                 </div>
                           
                       <div class="bac_login_cll">
                            <a href="#">Back to Login</a>
                        </div>
                           
                           <div class="btn__nbfdre">
                             <button type="submit" class="btn btn-secondary">Reset password</button>
                           </div> 
                        </div>
                       
                        
                           </form>
                        
                    </div>
            
                       
                       <div id="home_login_m" class="tab-pane"><br>
                     <div class="login_cl_ide">
                     
                       <div class="social_icon_cl_wqa">
                           <ul class="list-inline">
                               <li class="list-inline-item"><a href="#" style="background-color: #6d84b4;" onclick="fbLogin()"><i  class="fa fa-facebook-official"  aria-hidden="true"></i> <span class="nmmaq__msn">Sign Up with Facebook</span></a></li>
                               
                               <li class="list-inline-item"><a href="#" style="background-color: #df4b37;"><i class="fa fa-google-plus-square" aria-hidden="true"></i> <span class="nmmaq__msn">Sign Up with Google</span></a></li>
                           </ul>
                       </div>
                       
                       <div class="or_c_swer">
                         <p>Or</p>
                           <hr>
                       </div>
                       

                       <div>

                       <form name="Register"  method="POST" onsubmit="return validateForm(event)">
                        <div class="form__panel_qwd">
                       {{csrf_field()}}

                      <div class="input-group mann_sww__mn">
                      	 <div class="error" id="emailErr"></div>
                          <label for="usr">E-mail address</label>
                          <input type="text" class="form-control" placeholder="Email" name="email">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                          </div>
                      </div>
                     <div class="input-group mb-3">
                     	<div class="error" id="passwordErr"></div>
                         <label for="usr">Password</label>
                          <input type="password" class="form-control" placeholder="Password" name="password" id="regis_pass">
                          <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                          </div>
                      </div>
                 </div>
                           
                        <div class="eye_cll_mnbg">   
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                              <div class="blury_cl_make">
                                <i class="fa fa-eye" aria-hidden="true"></i><span>Show password</span>
                              </div>
                            </div>
                           
                    </div>
                        </div> 
                         
                         <div class="check__mnbft">
                         	<div class="error" id="customCheck1Err"></div>
                            <p>I have read and agree to the following:</p>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1">
                                  <label class="custom-control-label" for="customCheck1">Terms & Conditions <a href="#">view</a></label>
                              </div>
                              <div class="error" id="customCheck2Err"></div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck2" name="customCheck2">
                                  <label class="custom-control-label" for="customCheck2">Privacy Policy <a href="#">view</a></label>
                              </div>
                         </div>
                           
                           <div class="btn__nbfdre">
                             <button type="submit" class="btn btn-secondary">Register</button>
                           </div>
                  </form>
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

  
-->



<!--

<section class="login_main_sec_im">
   <div class="container">
  <div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
      <div class="modal-content">
       
       
          <button type="button" class="close" data-dismiss="modal">Close &times;</button>
      
        
       
        <div class="modal-body">

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://moretolike.com/assets/images/login_img_slide_3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://moretolike.com/assets/images/login_img_slide_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://moretolike.com/assets/images/login_img_slide_2.jpg" alt="Third slide">
    </div>
  </div>
</div>
      
<div class="login_con_cl_ma">
     <div class="card card-login card-plain">
         
         <div class="tab_login_new">
           
             <ul class="nav nav-pills" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active" data-toggle="pill" href="#login_id_tab">Sign up</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="pill" href="#create_id_tab">Sign in</a>
                 </li>

             </ul>

            
             <div class="tab-content">
                 <div id="login_id_tab" class="container tab-pane active"><br>
                   <div class="login_cl_ide">
                     
                       <div class="social_icon_cl_wqa">
                           <ul class="list-inline">
                               <li class="list-inline-item"><a href="#" style="background-color: #6d84b4;"><i  class="fa fa-facebook-official" aria-hidden="true"></i> <span class="nmmaq__msn">Sign in with Facebook</span></a></li>
                               
                               <li class="list-inline-item"><a href="#" style="background-color: #df4b37;"><i class="fa fa-google-plus-square" aria-hidden="true"></i> <span class="nmmaq__msn">Sign in with Google</span></a></li>
                           </ul>
                       </div>
                       
                       <div class="or_c_swer">
                         <p>Or</p>
                           <hr>
                       </div>
                       
                   </div>  
                 </div>
                 <div id="create_id_tab" class="container tab-pane fade"><br>
                     <div class="create_cl_ide">
                       <h3>2</h3>
                   </div>  
                 </div>

             </div>
         </div>
         
         

            <form class="form" action="javascript:void(0)" method="post">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="https://moretolike.com/assets/images/login_model_logo.png" alt="">
                </div>
              </div>
              <div class="card-body ma_saw_axz">
                <div class="input-group no-border input-lg after_input_cl">
                    	<input type="hidden" name="_token" value="HEAmDDyRY5bFtTzxkieJQ3EYC1WE7GX5tZ3g99m1">
                  <input type="text" class="form-control email_cl_sa" placeholder="Email" name="email" id="login_email" required>
                </div>
                  
                <div class="input-group no-border input-lg after_password_cl">
                  <input type="password" placeholder="Password" autocomplete class="form-control email_cl_sa" id="login_password" name="password" required>
                </div>
                  
              </div>
              <div class="card-footer text-center">
                <button onclick="login();" class="login__submit" >Sign in</button>
                  
                <div class="new_as_sdew_login">
                   <div class="pull-left">
                  <h6>
                    <div  class="link remo_l"> <input type="checkbox" name="checkbox" id="checkbox"> <span>Remeber Me</span></div>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="{{ url('forget-pass') }}" class="link">Forgot your password?</a> 
                  </h6>
                </div>
                </div>
                 
                    <div class="input-group no-border input-lg login_wit_us">
                        
                        
                        <label>Login With Us</label>
                    </div>
                  
                  <div class="login_with_us">
                    <ul class="list-inline login_in_social_model">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> 
                     </ul>
                      
                       <div class="cre_a_mo_lo"><a href="{{ url('user-register') }}"> Create an account</a></div>
                      
                  </div>
                  
                
            
            </div></form>

          </div>           
</div>            
            
            
            
            
        </div>
        
   
      </div>
    </div>
  </div>
  
</div>

</section>
-->





<!----MOBILE NAV SLIDER LOGIN--->


<div id="mySidenav_mobile_login" class="sidenav_mobile_login">

    <a href="javascript:void(0)" class="closebtn close_nav_cl_angle" onclick="closeNav_mobile_login()">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>

    <div class="new_login_sec_mobile">
        <div class="login_here_content_make">
            <img class="img-fluid" src="https://www.moretolike.com/assets/img/M2like_square_trans.png" alt="image">
        </div>

        <div class="mobile_login_tab_new">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="active" data-toggle="pill" href="#login_model_new_mobile">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="pill" href="#sign_model_new_mobile">Sign Up</a>
                </li>

            </ul>

            <div class="tab-content">

                <div id="login_model_new_mobile" class="container tab-pane active">
                    
                    
                    
                    <!---LOGIN--->
                    <div class="panel_login_here_cl_slide dis_none_for_forget_psw">  
                        
                       
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                      <form class="form" action="javascript:void(0)" method="post">
                                 <div class="form__panel_qwd">
                                    
                                    <div class="error" id="emailErrLogin"></div>
                                     <div class="input-group mb-3">
                                         <label for="usr">E-mail address</label>
                                         <input type="hidden" name="_token" value="HEAmDDyRY5bFtTzxkieJQ3EYC1WE7GX5tZ3g99m1">
                                         <input type="text" class="form-control" placeholder="Email" name="email" id="login_email">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
                                       <div class="error" id="passwordErrLogin"></div>
                                     <div class="input-group mb-3">
                                         <label for="usr">Password</label>
                                         <input  type="password" autocomplete class="form-control email_cl_sa" id="login_password" name="password">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
                                 </div>
                                     </form>   
                                    <div class="form-group lohgin_and forgrt_psw_cl_new">
                                        <button onclick="login();" type="button" class="btn btn-secondary">Log In</button>
                                        <a href="javascript:void(0)" class="forget_psw_btn_here">Forgot your password?</a>
                                    </div>
                                    <div class="form-group">
                                        <div class="or_c_swer">
                                            <p>Or</p>
                                            <hr>
                                        </div>
                                        <ul class="list-inline login__new_slide_social">
                                            <li class="list-inline-item">
                                                <a href="#" onclick="fbLogin()">
                                                    <i class="fa fa-facebook" style="background-color: #3b5999;" aria-hidden="true"></i>
                                                </a>
                                            </li>


                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="background-color: #dd4b39;" class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       
                        
                        </div>
                    <!---FORGET PSW-->
                    <div class="forget_psw_hide_field"> 
                    <div class="panel_login_here_cl_slide">
                        <form method="post" onsubmit="get_registered_email(event)">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                               <div class="form__panel_qwd">
                                     <div id="error_email"></div>
                                     <div id="unsuccess_email"></div>
                                     <div class="input-group mb-3">
                                         <label for="usr">E-mail address</label>
                                         <input type="text" class="form-control"  placeholder="Email" id="email_forget">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
                                </div>
                                   <div class="form-group lohgin_and forgrt_psw_cl_new">
                                       <button type="button" class="btn btn-secondary">Forgot password</button>
                                       <a href="javascript:void(0)" class="back_to_login_cl">Back to Login</a>
                                   </div>
                            </div>
                        </div>
                            </form>
                    </div>
                        
                    </div>
                    
                </div>
                
                
                <div id="sign_model_new_mobile" class="container tab-pane fade">
<!--
                    <div class="here_promo_code">
                        <h1>Free standard shipping on orders over $ 46</h1>
                    </div>
-->
                      <div class="panel_login_here_cl_slide">  
                         
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                   
                                    <div class="form__panel_qwd">
                                          <form name="Register" method="POST" onsubmit="return validateForm(event)">
                                     <div class="input-group mb-3">
                                          <div class="error" id="emailErr"></div>
                                         <label for="usr">E-mail address</label>
                                         <input type="text" class="form-control" placeholder="Email" name="email">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
                                     <div class="input-group mb-3">
                                          <div class="error" id="passwordErr"></div>
                                         <label for="usr">Password</label>
                                         <input type="text" class="form-control" placeholder="Password" name="password" id="regis_pass">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
                                         </form>     
<!--
                                          <div class="input-group mb-3">
                                         <label for="usr">Confirm Password</label>
                                         <input type="text" class="form-control" placeholder="Confirm Password">
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                         </div>
                                     </div>
-->
                                        
                                         <div class="check__mnbft">
                                              <div class="error" id="customCheck1Err"></div>
                                              <p>I have read and agree to the following:</p>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1">
                                                  <label class="custom-control-label" for="customCheck1">Terms & Conditions <a href="#">view</a></label>
                                              </div>
                                              <div class="error" id="customCheck2Err"></div>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck2" name="customCheck2">
                                                  <label class="custom-control-label" for="customCheck2">Privacy Policy <a href="#">view</a></label>
                                              </div>
                                          </div>
                                        
                                 </div>
                                    <div class="form-group lohgin_and forgrt_psw_cl_new">
                                        <button type="button" class="btn btn-secondary">Create An Account</button>
                                    </div>
                                    <div class="form-group">
                                        <div class="or_c_swer">
                                            <p>Or</p>
                                            <hr>
                                        </div>
                                        <ul class="list-inline login__new_slide_social">
                                            <li class="list-inline-item">
                                                <a href="#" onclick="fbLogin()">
                                                    <i class="fa fa-facebook" style="background-color: #3b5999;" aria-hidden="true"></i>
                                                </a>
                                            </li>


                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="background-color: #dd4b39;" class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
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



<!----Mobile Footer--->

<section class="hide_for_lg">
    <div class="mobile_foter_panel">
      <div class="container-fluid">
        <div class="row">
<div class="col-sm-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         We Recommend
        </a>
      </h4>

        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
             <div class="mobile_f_tab_data">
                   <ul class="list-unstyled data_f_se_b">
                       <li><a href="#">20% off Photography</a></li>
                        <li><a href="#">Warehouse Sale!</a></li>
                        <li><a href="#">Laptops & Computers</a></li>
                        <li><a href="#">TV & Audio</a></li>
                        <li><a href="#">Gadgets</a></li>
                   </ul>
             </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          My Account
        </a>
      </h4>

        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
             <div class="mobile_f_tab_data">
                   <ul class="list-unstyled data_f_se_b">
                       <li><a href="#">20% off Photography</a></li>
                        <li><a href="#">Warehouse Sale!</a></li>
                        <li><a href="#">Laptops & Computers</a></li>
                        <li><a href="#">TV & Audio</a></li>
                        <li><a href="#">Gadgets</a></li>
                   </ul>
             </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Customer Care
        </a>
      </h4>

        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="mobile_f_tab_data">
                   <ul class="list-unstyled data_f_se_b">
                       <li><a href="#">Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">My Orders</a></li>
                        <li><a href="#">Comapre</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Product Support</a></li>   
                   </ul>
             </div>
            </div>
        </div>
    </div>
     <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         About Us
        </a>
      </h4>

        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              <div class="mobile_f_tab_data">
                   <ul class="list-unstyled data_f_se_b">
                       <li><a href="#">20% off Photography</a></li>
                        <li><a href="#">Warehouse Sale!</a></li>
                        <li><a href="#">Laptops & Computers</a></li>
                        <li><a href="#">TV & Audio</a></li>
                        <li><a href="#">Gadgets</a></li>
                   </ul>
             </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
          
<ul class="list-unstyled list-inline  footer_socail_h">
    <li class="list-inline-item">
     <a href="https://www.facebook.com/moretolike" target="_blank"><i class="fa fa-facebook"></i></a>
    </li>
    <li class="list-inline-item">
     <a href="https://www.twitter.com/moretolike" target="_blank"><i class="fa fa-twitter"></i></a>
    </li>
    <li class="list-inline-item">
     <a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-instagram"></i></a>
    </li>
    <li class="list-inline-item">
     <a href="https://www.youtube.com/moretolike" target="_blank"><i class="fa fa-youtube"></i></a>
    </li>
    <li class="list-inline-item">
    <a href="https://www.instagram.com/moretolike" target="_blank"><i class="fa fa-linkedin"></i></a>
    </li>
    <li class="list-inline-item">
     <a href="https://www.pinterest.com/moretolike" target="_blank"><i class="fa fa-pinterest"></i></a>
    </li>
</ul>
    

    <div class="footer_l_con">
        <div class="det_co_mo">
         <p>Got Questions ? Call us 24/7!</p>
         <h1>(800) 8001-8588</h1>
         <h1>(800) 8001-8588</h1>     
        </div> 
    </div>     
          
          
          
          
    <div class="row copyright-bar">
       
        <div class="col-xs-12 col-sm-6 col-md-6"> <a href="javascript:void(0)"><img src="https://moretolike.com/assets/images/patment-icon.png" align="right" alt=""></a> 
        </div>
         <div class="col-xs-12 col-sm-6 col-md-6 ">
            <p>© Moretolike - All Rights Reserved </p>
        </div>
    </div>    
          
</div>
</div>    
</section>




<!-----Embed this Item------->

 <div class="embed_this_item_panel">
     <div class="container">

         <!-- The Modal -->
         <div class="modal fade" id="myModalEmbed">
             <div class="modal-dialog">
                 <div class="modal-content">

                     <!-- Modal Header -->
                     <div class="modal-header">
                         <h4 class="modal-title">Embed this Item</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>

                     <!-- Modal body -->
                     <div class="modal-body">
                         <div class="content_embed_model">
                             <div class="row">
                                 <div class="col-lg-4 col-md-4">
                                     <div class="embed_link_lft">

                                         <div class="hea_im_pr_asd">
                                             <img src="https://moretolike.com/assets/images/embed_img.png" class="img-responsive" alt="Image">
                                             <div class="sec_em_i_start">

                                             </div>
                                         </div>

                                         <div class="sec_em_i_one">
                                             <p></p>
                                         </div>

                                         <div class="sec_em_i_two">
                                             <span class="hea_l_two_fir_s"></span>
                                             <span class="hea_l_two_sec"></span>
                                         </div>

                                         <div class="sec_em_i_three">
                                             <p></p>
                                         </div>


                                     </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8">
                                     <div class="embed_link_rght">

                                         <div class="form-group new_pa_em">
                                             <label for="usr">Card Width</label>
                                             <input value="450" type="text" class="form-control" id="usr">
                                             <span>px</span>
                                         </div>

                                         <div class="selct_list_drop_w">
                                             <h5 class="ma_hfi">Customize <i class="fa fa-angle-down" aria-hidden="true"></i></h5>
                                             <div class="flo_eaqx_ax_em">
                                                 <ul class="list-unstyled mogh_cl_emb">
                                                     <li>
                                                         <label class="container_embed">Title
                                                             <input class="em_ch_one" type="checkbox">
                                                             <span class="checkmark_emb"></span>
                                                         </label>
                                                     </li>

                                                     <li>
                                                         <label class="container_embed">Price
                                                             <input class="em_ch_two" type="checkbox">
                                                             <span class="checkmark_emb"></span>
                                                         </label>
                                                     </li>

                                                     <li>
                                                         <label class="container_embed">Username
                                                             <input class="em_ch_three" type="checkbox">
                                                             <span class="checkmark_emb"></span>
                                                         </label>
                                                     </li>

                                                     <li>
                                                         <label class="container_embed">Action Bar
                                                             <input class="em_ch_four" type="checkbox">
                                                             <span class="checkmark_emb"></span>
                                                         </label>
                                                     </li>

                                                 </ul>
                                             </div>
                                             <div class="ta_as_em_qp">
                                                 <label class="container_embed car_show_s_j">Moretolike Anywhere
                                                     <input class="che_fir_em" type="checkbox">
                                                     <span class="checkmark_emb"></span>
                                                 </label>
                                             </div>

                                         </div>

                                     </div>
                                 </div>

                                 <div class="col-lg-12">
                                     <div class="form-group hew_wm_htm">
                                         <label for="comment">Insert this code into your HTML</label>
                                         <textarea class="form-control" id="comment">
                                                  <div>
                                                  	<script src="//demo.com/embed.js?v=150608" async="async" class="demo-embed" data-id="1402669022708764345" data-ref="deepakcodeable" data-type="tt,pr,by,bt" data-width="450"></script>
                                                  </div>
                                              </textarea>
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

<!------Shareable Product------>
<section class="shareable_model_new_panle">
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModalshareable">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-body">
                   <div class="content_on_share_se popupidradded{{$row->product_id}}{{$row->sub_category_id}}">
                      <div class="main_panle_sh">
                          <div class="sh_im_s">
                              <div class="shareble_pro_panel">
                                  <h1>
                                      <span><i class="fa fa-share-alt" aria-hidden="true"></i></span> Shareble Products  
                                      <b class="hsle_as_close close" data-dismiss="modal">
                                          <i class="fa fa-times close_share_model" aria-hidden="true"></i>
                                      </b>
                                  </h1>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="mo_pr_op">
                                              <img class="img-fluid" src="{{asset('assets/images/home-v5-ads-1.jpg')}}" alt="image">

                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="moderl_des_c">
                                             <a href="javascript:void(0);" onsubmit="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 0)" class="hide_for_lg">ADD PRODUCT TO MY STORE</a>
                                              <p>{{ $row->description }}</p>
                                              <a href="javascript:void(0);" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 0)" class="btn btn-secondary hide_for_xs">ADD PRODUCT TO MY STORE</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="pro_info_model_new">
                                      <h3>Product Info:</h3>
                                      <p>{{ $row->description }}</p>
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
<!----Close Shareable PRoduct--->



<!---Add to Collection --->

<section class="panel_add_collection">
<div class="container">  
  <!-- Button to Open the Modal -->
  <!-- The Modal -->
  <div class="modal fade" id="myModalCollection">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ADD TO COLLECTION</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body wa_co_his_as"> 
            
         <!-- TAB -->
          <div class="model_tab_collect_cl">
              <ul class="nav nav-pills first_tab_here_kitt" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#collection_model_one">Personal Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#collection_model_two">Store 1</a>
                </li>
                   <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#collection_model_third">Store 2</a>
                </li>
                   <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#collection_model_four">Store 3</a>
                </li>
                   <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#collection_model_five">Store 4</a>
                </li>
              </ul>
              <div class="tab-content">
                  
                <div id="collection_model_one" class="tab-pane active">
                    <div class="wrap_mo_ta_da">    
                    <div class="collection_search_cl">
                    
                  <ul class="list_add_collection">
                      <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1">
                              <label class="custom-control-label" for="check1">Collection Name 1
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2">
                              <label class="custom-control-label" for="check2">Collection Name 2
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check3">
                              <label class="custom-control-label" for="check3">Collection Name 3
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4">
                              <label class="custom-control-label" for="check4">Collection Name 4
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5">
                              <label class="custom-control-label" for="check5">Collection Name 5
                                <i class="fa fa-link" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                  </ul>
                    
                </div>     
                 <div class="create_click_list_cl">
                 <p>+ Create New List</p>
                  <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Enter Collection Name...">
                    <span><button type="button" class="btn btn-secondary"> Create</button></span>
                 </div>      
                 </div>      
                </div> 
                </div>
               
                <div id="collection_model_two" class="tab-pane fade">
                   <div class="wrap_mo_ta_da">    
                    <div class="collection_search_cl">
                    
                  <ul class="list_add_collection">
                      <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1">
                              <label class="custom-control-label" for="check1">Collection Name 1
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2">
                              <label class="custom-control-label" for="check2">Collection Name 2
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check3">
                              <label class="custom-control-label" for="check3">Collection Name 3
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4">
                              <label class="custom-control-label" for="check4">Collection Name 4
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5">
                              <label class="custom-control-label" for="check5">Collection Name 5
                                <i class="fa fa-link" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                  </ul>
                    
                </div>     
                 <div class="create_click_list_cl">
                 <p>+ Create New List</p>
                  <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Enter Collection Name...">
                    <span><button type="button" class="btn btn-secondary"> Create</button></span>
                 </div>      
                 </div>      
                </div>    
                </div>
                  
                   <div id="collection_model_third" class="tab-pane fade">
                   <div class="wrap_mo_ta_da">    
                    <div class="collection_search_cl">
                    
                  <ul class="list_add_collection">
                      <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1">
                              <label class="custom-control-label" for="check1">Collection Name 1
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2">
                              <label class="custom-control-label" for="check2">Collection Name 2
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check3">
                              <label class="custom-control-label" for="check3">Collection Name 3
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4">
                              <label class="custom-control-label" for="check4">Collection Name 4
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5">
                              <label class="custom-control-label" for="check5">Collection Name 5
                                <i class="fa fa-link" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                  </ul>
                    
                </div>     
                 <div class="create_click_list_cl">
                 <p>+ Create New List</p>
                  <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Enter Collection Name...">
                    <span><button type="button" class="btn btn-secondary"> Create</button></span>
                 </div>      
                 </div>      
                </div>    
                  </div>
                  
                   <div id="collection_model_four" class="tab-pane fade">
                   <div class="wrap_mo_ta_da">    
                    <div class="collection_search_cl">
                    
                  <ul class="list_add_collection">
                      <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1">
                              <label class="custom-control-label" for="check1">Collection Name 1
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2">
                              <label class="custom-control-label" for="check2">Collection Name 2
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check3">
                              <label class="custom-control-label" for="check3">Collection Name 3
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4">
                              <label class="custom-control-label" for="check4">Collection Name 4
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5">
                              <label class="custom-control-label" for="check5">Collection Name 5
                                <i class="fa fa-link" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                  </ul>
                    
                </div>     
                 <div class="create_click_list_cl">
                 <p>+ Create New List</p>
                  <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Enter Collection Name...">
                    <span><button type="button" class="btn btn-secondary"> Create</button></span>
                 </div>      
                 </div>      
                </div>    
                  </div>
                  
                   <div id="collection_model_five" class="tab-pane fade">
                   <div class="wrap_mo_ta_da">    
                    <div class="collection_search_cl">
                    
                  <ul class="list_add_collection">
                      <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1">
                              <label class="custom-control-label" for="check1">Collection Name 1
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2">
                              <label class="custom-control-label" for="check2">Collection Name 2
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                      <li>
                         
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check3">
                              <label class="custom-control-label" for="check3">Collection Name 3
                               <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4">
                              <label class="custom-control-label" for="check4">Collection Name 4
                              <i class="fa fa-lock" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                     <li>
                          
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5">
                              <label class="custom-control-label" for="check5">Collection Name 5
                                <i class="fa fa-link" aria-hidden="true"></i>
                              </label>
                          </div>
                      </li>
                  </ul>
                    
                </div>     
                 <div class="create_click_list_cl">
                 <p>+ Create New List</p>
                  <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Enter Collection Name...">
                    <span><button type="button" class="btn btn-secondary"> Create</button></span>
                 </div>      
                 </div>      
                </div>    
                   </div>
                  
                  
                  
              </div>
            </div>
            <!--CLOSE TAB-->
            
         
        </div> 
          
            
          
          
      </div>
    </div>
  </div>
</div>
</section>



<!---BACK TO TOP--->
<div id="toTop"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>




    <!--modal-->
     <!--  <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header bord">
                  <h4 class="modal-title">Add To Collection</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body text-center">
                     <span class="addtobtn">
                     <button class="btn btn-warning my-btn ">Add To My Store Collection</button></span>
                     <span class="addtobtn1">
                     <button class="btn btn-warning my-btn ">Add To My Personal Collection</button></span>
               </div>
            <div class="modal-footer bord">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">ok</button>
               </div> 
            </div>
         </div>
      </div> -->
      <!-- modal end-->
      <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}" />
      <script type="text/javascript" src="{{asset('assets/js/modernizr.custom.js')}}"></script> 
      <script type="text/javascript" src="{{asset('assets/js/classie.js')}}"></script> 
      <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script> 
	  <script type="text/javascript" src="{{asset('assets/js/jquery-ui.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <!-- <script type="text/javascript" src="{{asset('assets/js/accordian.js')}}"></script>  -->
      <script type="text/javascript" src="{{asset('assets/js/owl.carousel.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--
      <script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>    
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/glightbox-master/js/glightbox.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript" src="https://moretolike.com/js/readmore.js"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/filter.js')}}"></script>

 <script>
     
     
$(".menu_click_h").click(function(){
        $('.facy_box_her').toggleClass('show_mega_menu');
        $('.menu_click_h').toggleClass('add_cl_mj');

    });
$(".checkout_button").click(function(){
        $('#main').addClass('body_overlay');
    });
$('.slider_my_blog_menu').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
     navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],     
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
});
  
function openNavdesktop() {
      document.getElementById("mySidenavdesktop").style.left = "0px";
      document.getElementById("main").style.marginLeft = "320";
         document.getElementById("main").style.width  = "100%";
         document.getElementById("main").style.overflow = "hidden";
        $('#mySidenavdesktop').addClass('pullLeft');
        $('#mySidenav').addClass('sidenav23');
    //  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
function closeNavdesktop() {
      document.getElementById("mySidenavdesktop").style.left = "-320px";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
         document.getElementById("main").style.overflowY = "scroll";
         document.getElementById("main").style.overflowX = "hidden";
        if($('#mySidenavdesktop').hasClass('pullLeft')){
         $("#triger_nav2").toggle();
        $("#triger_nav").toggle();
        }
        if($('#mySidenav').hasClass('sidenav23')){
          //  console.log('sss');
           closeNav();

        }
         $('#mySidenavdesktop').removeClass('pullLeft');
        $(".fixedmenu").removeClass("fix_menu_margin"); 
    }
function myFunction1(x) {
    //x.classList.toggle("change");
    $(".fixedmenu").addClass("fix_menu_margin"); 
    $("#triger_nav2").toggle();
    $("#triger_nav").toggle();

    }
     
$(document).ready(function(){
              
$('.slide_menu_account').addClass('dddd');  
              
$("#triger_nav").click(function(){
			$("#triger_click").trigger("click");
		  }); 
              
$("#triger_nav").click(function(){
			$("#main").addClass("body_overlay");
		 });  
              
$(".closebtn").click(function(){
                $("#main").removeClass("body_overlay");
               
                //closeNav();
             }); 
              
$("#triger_nav2").click(function(){
                $("#main").removeClass("body_overlay");
               
                //closeNav();
             }); 
                         
/****Cart-Body***/
$(".sticky_bag").click(function(){
		    	$("#main").addClass("body_overlay");
		       });
             
$(".dro_menu_cl").click(function(){
			$('.dro_menu_cl').not(this).removeClass('rotet_an');
			$('.dro_menu_cl ul.show_d_m').removeClass('show_d_m');
			$(this).children('.diff_bg_menu').toggleClass("show_d_m");
		 });  
$(".dro_menu_cl").click(function(){
				$(this).toggleClass("rotet_an");
				 if($(this).hasClass('rotet_an')){
				 }else{
					 $(this).children('.diff_bg_menu').removeClass("show_d_m");
				 }
			});  
              
});
            
            
            
            
function openNavsize() {
    $('#mySidenavsize').addClass('size_guid_sidebar');
     $('#mySidenavsize').removeClass('size_rig_re');
    document.getElementById("mySidenavsize").style.right = "0%";
}
function closeNavsize() {
     $('#mySidenavsize').removeClass('size_guid_sidebar');
     $('#mySidenavsize').addClass('size_rig_re');
     document.getElementById("mySidenavsize").style.right = "-60%";
}    
            
                   
$(document).ready(function(){
         $(".cli_ac_pro_menu").click(function(){
       $('.slide_menu_account').addClass('ad_slide_ac_pro'); 
       $('#main').addClass('Overlay_la');         
            
        });
    });
            
$(document).ready(function(){
            $(".close_acc_slide p").click(function(){
             $('.slide_menu_account').removeClass('ad_slide_ac_pro');
             $('#main').removeClass('Overlay_la'); 
        
        });
        $(".w100p li a").click(function(){
             $('.slide_menu_account').removeClass('ad_slide_ac_pro');
             $('#main').removeClass('Overlay_la'); 
        
        });
    });

$(document).ready(function(){
            $(".ma_hfi").click(function(){
             $('.mogh_cl_emb').toggleClass('block_dis_a_dro');
             $('.ma_hfi i').toggleClass('fa-angle-up');
            
        
         });
    }); 

  
  
  /********EMBED POPUP*******/

$(document).ready(function(){
$('.che_fir_em').change(function(){
    if($(this).is(":checked")) {
        $('.sec_em_i_start').addClass('im_all_one_em');
    } else {
        $('.sec_em_i_start').removeClass('im_all_one_em');
    }
});
});

$(document).ready(function(){
$('.em_ch_one').change(function(){
    if($(this).is(":checked")) {
        $('.sec_em_i_one').addClass('im_all_one_em');
    } else {
        $('.sec_em_i_one').removeClass('im_all_one_em');
    }
});
});

$(document).ready(function(){
$('.em_ch_two').change(function(){
    if($(this).is(":checked")) {
        $('.hea_l_two_fir_s').addClass('im_all_one_em');
    } else {
        $('.hea_l_two_fir_s').removeClass('im_all_one_em');
    }
});
});

$(document).ready(function(){
$('.em_ch_three').change(function(){
    if($(this).is(":checked")) {
        $('.hea_l_two_sec').addClass('im_all_one_em');
    } else {
        $('.hea_l_two_sec').removeClass('im_all_one_em');
    }
});
});

$(document).ready(function(){
$('.em_ch_four').change(function(){
    if($(this).is(":checked")) {
        $('.sec_em_i_three').addClass('im_all_one_em');
    } else {
        $('.sec_em_i_three').removeClass('im_all_one_em');
    }
});
});      
/******Colection******/            

$(document).ready(function(){
            $(".create_click_list_cl p").click(function(){
             $('.create_click_list_cl .form-group').addClass('block_cab_collect');
             $('.create_click_list_cl p').addClass('create_none_dis');   
         });
    });         
         
/***********Model Login Section forget psw***************/        
        
$(document).ready(function(){
            $(".nabfgww__pmh a").click(function(){
             $('.nabv__dw').addClass('nabe_s');
             $('.for_get_pasqw').addClass('show_lske');

         });
         });         
$(document).ready(function(){
            $(".bac_login_cll a").click(function(){
             $('.nabv__dw').removeClass('nabe_s');
             $('.for_get_pasqw').removeClass('show_lske');

         });
    });         
 
/**********FRG PSW************/   
     
$(document).ready(function(){
            $(".forget_psw_btn_here").click(function(){
             $('.dis_none_for_forget_psw').addClass('hide_login_section_cl');
             $('.forget_psw_hide_field').addClass('show_forget_section_cl');

         });
    });  
$(document).ready(function(){
            $(".back_to_login_cl").click(function(){
             $('.dis_none_for_forget_psw').removeClass('hide_login_section_cl');
             $('.forget_psw_hide_field').removeClass('show_forget_section_cl');

         });
    });     
/*****back-to-top*********/
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {

    $("html, body").animate({scrollTop: 0}, 1000);
});        
            

function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateForm(e) {
  e.preventDefault();
  var email = document.forms["Register"]["email"].value;
  var password = document.forms["Register"]["password"].value;
  var customCheck1 = document.forms["Register"]["customCheck1"].checked;
  var customCheck2 = document.forms["Register"]["customCheck2"].checked;
  
  var emailErr = passwordErr  = customCheck1Err = customCheck2Err = true;

  if (email == "") {
    printError("emailErr", "Please enter your email address");
  }else{
  	  // Regular expression for basic email validation
  	   printError("emailErr", "");
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
  }
  if(password == ""){
    printError("passwordErr", "Please enter your password"); 
  }else{
  	 printError("passwordErr", "");
  	 passwordErr = false;
  }
  if(customCheck1 == false){
    printError("customCheck1Err", "Please check terms & conditions");
   
  }else{
  	 printError("customCheck1Err", "");
  	 customCheck1Err = false;
  }
  if(customCheck2 == false){
    printError("customCheck2Err", "Please check privacy policy");
  }else{
  	 printError("customCheck2Err", "");
  	 customCheck2Err = false;
  }

    if((emailErr || passwordErr || customCheck1Err || customCheck2Err) == true) {
       return false;
    }else{
    var http = new XMLHttpRequest();
    var params = 'email='+email+'&password='+password;

    token = document.querySelector('meta[name="csrf-token"]').content;
    
    http.open("POST", "user-registeration", true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.setRequestHeader('X-CSRF-TOKEN', token);
   
    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
        	if(http.responseText == 'Email already exists'){
        	printError("emailErr", http.responseText);
        	return false;
        	}
            else
            location.reload();
        }
    }
    http.send(params);
};
};
  
 $(document).ready(function(){
      $('.fa-eye').click(function(){
         var x = document.getElementById("regis_pass");
          
         if (x.type === "password") {
             x.type = "text";
            
           } else {
             x.type = "password";
               
         }
      });
     });  
 $(document).ready(function(){
      $('.login_pass').click(function(){
         var x = document.getElementById("login_password");
          
         if (x.type === "password") {
             x.type = "text";
            
           } else {
             x.type = "password";
               
         }
      });
     });   
 $(window).click(function(event){
    console.log("ddddd");
        if($(event.target).closest('.slide_checkout_content').length) {
            return;
        }if($(event.target).closest('.mobile_ori_view').length) {
            return;
        }
        if($(event.target).closest('.menu_click_h').length) {
            return;
        }
        if($(event.target).closest('.imgsd__di__h').length) {
            return;
        }
        
        if($(event.target).closest('.fan_pr_as').length) {
            return;
        }
          if($(event.target).closest('.nav_menga_m').length) {
            return;
        }
        if($(event.target).closest('.cuts__ssa_tab_sle').length) {
            return;
        } 
        if($(event.target).closest('#mySidenav-m').length) {
            return;
        } 
        if($(event.target).closest('#mySidenav').length) {
            return;
        } 
        if($(event.target).closest('.static_header_mobile').length) {
            return;
        } 
        if($(event.target).closest('.grid_view_here_mobile').length) {
            return;
        }
        if($(event.target).hasClass('slide_checkout_content')){
         //alert('has class');
        }else{
              console.log("Close");
            $('.facy_box_her').removeClass('show_mega_menu');
            $('.menu_click_h').removeClass('add_cl_mj');

            closeNavdesktop();
            closeNavmobile();

            $("#main").removeClass("body_overlay");
            $('.back_to_cart').trigger("click");
            $('.slide_checkout').trigger("click");
            document.getElementById("mySidenav").style.right = "-250px";
        }
    }); 
 $(document).ready(function(){
           $("#login").click(function(){
           $('body').addClass('body_overflow_hide_login');
           });
       });
 $(document).ready(function(){
           $(".close_nav_cl_angle").click(function(){
           $('body').removeClass('body_overflow_hide_login');
           });
       });
         
 
</script>


 <style>
       

svg {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  overflow: visible;
}

.svg-icon {
  cursor: pointer;
}
.svg-icon path {
  stroke: rgba(255, 255, 255, 0.9);
  fill: none;
  stroke-width: 1;
}

input, button {
  outline: none;
  border: none;
}


.login__submit {
  position: relative;
  width: 100%;
   height: 4rem;
    margin: 0 auto;
  color: rgba(255, 255, 255, 0.8);
  background: #fbd401;
  font-size: 17px;
  border-radius: 3rem;
  cursor: pointer;
  overflow: hidden;
  transition: width 0.3s 0.15s, font-size 0.1s 0.15s;
}
.login__submit:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -1.5rem;
  margin-top: -1.5rem;
  width: 3rem;
  height: 3rem;
  border: 2px dotted #fff;
  border-radius: 50%;
  border-left: none;
  border-bottom: none;
  transition: opacity 0.1s 0.4s;
  opacity: 0;
}
.login__submit.processing {
  width: 4rem;
  font-size: 0;
    margin: 0 auto;
}
.login__submit.processing:after {
  opacity: 1;
  -webkit-animation: rotate 0.5s 0.4s infinite linear;
          animation: rotate 0.5s 0.4s infinite linear;
}
.login__submit.success {
  transition: opacity 0.1s 0.3s, background-color 0.1s 0.3s, -webkit-transform 0.3s 0.1s ease-out;
  transition: transform 0.3s 0.1s ease-out, opacity 0.1s 0.3s, background-color 0.1s 0.3s;
  transition: transform 0.3s 0.1s ease-out, opacity 0.1s 0.3s, background-color 0.1s 0.3s, -webkit-transform 0.3s 0.1s ease-out;
  -webkit-transform: scale(30);
          transform: scale(30);
  opacity: 0.9;
}
.login__submit.success:after {
  transition: opacity 0.1s 0s;
  opacity: 0;
  -webkit-animation: none;
          animation: none;
}


@-webkit-keyframes animRipple {
  to {
    -webkit-transform: scale(3.5);
            transform: scale(3.5);
    opacity: 0;
  }
}

@keyframes animRipple {
  to {
    -webkit-transform: scale(3.5);
            transform: scale(3.5);
    opacity: 0;
  }
}
@-webkit-keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes animatePath {
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes animatePath {
  to {
    stroke-dashoffset: 0;
  }
}
.error,#error_email,#unsuccess_email{
	color: red;
	font-size: 12px;
}
</style>


    </body>
   <!--- BODY END --->
</html>