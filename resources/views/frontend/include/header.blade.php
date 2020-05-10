 <!doctype html>
<html lang="en">
   <!-- HEAD STARTED -->
   <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $static_data['title'] }}</title>
<link rel="shortcut icon" href="{{asset('assets/images/small-logo.ico')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/default.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/component.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-moretolike.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/NoteraM2L01.css')}}" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
<!-- main page -->
<!--      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}" />-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-slider.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}" />
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />   
<!-- ./main page -->
<!-- profile page -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/glightbox-master/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/glightbox-master/css/glightbox.css')}}" />
<!-- profile page -->
<script type="text/JavaScript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets/glightbox-master/js/codemirror.js')}}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       
   
       
      <!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
      <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
      <script type="text/javascript">

         $(document).ready(function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        /*  $(".leftamenu").click(function(){
            alert('sds');
            $(this).toggleClass("active");
          });*/
            $('.openBox').click(function(){
               $('.searchBox').toggleClass('searchboxb').toggle();
            });
           $(function(){
            var $searchlink = $('#searchtoggl i');
            var $searchbar  = $('#searchbar');
            $('#topnav li a').on('click', function(e){
              e.preventDefault();
              if($(this).attr('id') == 'searchtoggl') {
                if(!$searchbar.is(":visible")) { 
                  // if invisible we switch the icon to appear collapsable
                  $searchlink.removeClass('fa-search').addClass('fa-search-minus');
                } else {
                  // if visible we switch the icon to appear as a toggle
                  $searchlink.removeClass('fa-search-minus').addClass('fa-search');
                }
                $searchbar.slideToggle(300, function(){
                  // callback after search bar animation
                });
              }
            });
            $('#searchform').submit(function(e){
              e.preventDefault(); // stop form submission
            });
          });
          ///Search Products
          $("#search").on('keyup', function() {
            var search_val = $(this).val();
            $.ajax({
              url: "{{ url('search-result') }}",
              data: { "search": search_val, "_token": '{{ csrf_token() }}' }, 
              type: "POST",
              success: function(response) {
                console.log(response);
              }, error: function(err) {
                console.log(err);
              }
            });
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.progress-value > span').each(function(){
              $(this).prop('Counter',0).animate({
                  Counter: $(this).text()
              },{
                  duration: 1500,
                  easing: 'swing',
                  step: function (now){
                      $(this).text(Math.ceil(now));
                  }
              });
          });
      });
      </script>
       
   </head>
   <!-- HEAD END -->
   <!-- BODY STARTED -->
   <!-- cbp-spmenu-push -->
    
    
<body id="main">
       
<!--Top Strip--->
    

    
  
<section class="">        
<header class="hide_for_xs">
    <div id="myHeader"></div>
    <div id="showLeft"></div>
    <div id="showLeft1"></div>
    
    
    
    <div class="top_bor_he" style="display: none;">
  <div class="container">
       <div class="wrap_top_strip">
    <ul class="content_first_list list-inline fers_serw">
        
        <li class="list-inline-item"><b>Your online Shopping experience</b></li>
         <li class="list-inline-item">-</li>
         <li class="list-inline-item sec_sde_de_new"><b>Download our App</b>
              <span><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></span>
              <span><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></span>
        </li>
        
<!--
        <li class="list-inline-item">
            <a href="#">
            <i class="fa fa-phone" aria-hidden="true"></i>  
            <span>+060 (800) 801-858</span>
            </a>
        </li>
-->
<!--
        <li class="list-inline-item"><a href="#">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
           <span>info@electro.com</span>
            </a>
        </li>
-->
    </ul>
           
        <ul class="content_second_list list-inline">
<!--
        <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Store Locator</span>
            </a>
        </li>
-->
            
        <li class="list-inline-item">
            <a href="{{ url('/track-order') }}">
                <i class="fa fa-truck" aria-hidden="true"></i> 
                <span> Track Your Order</span>
            </a>
            </li>
<!--
        <li class="list-inline-item sho_sed">
            <a href="#">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                 <span>Shop</span>
            </a>
            </li>
-->
             <li class="list-inline-item sho_sed new_ad_al_sm">
            @if((Session::get('user_id')))
               <a class="nav-link dropdown-toggle nav-link1 logoutUrl" href="{{ url('logout') }}" >
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span>Logout</span> 
               </a>
              @else
                <a class="nav-link dropdown-toggle nav-link1" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" role="button"  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
               Register Or Sign in
              </a>
              @endif
            </li>
           
<!--
        <li class="list-inline-item">
            <a href="#">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <span> My Account</span>
            </a>
            </li>
       
-->
      </ul>
           
       </div>
  </div>  
    </div> 
    
    
    
    
    <!---Desktop Side Nav---->
    
 <div id="mySidenavdesktop" class="sidenavdesktop cust_nav_cross_sw">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavdesktop()">
     <i class="fa fa-arrow-left" aria-hidden="true"></i>
     </a>
 
<div class="profileslide_con">
    
    <div class="profile_info_h">
        <ul class="list-inline">
           <li class="list-inline-item ghsy_clas">
            <div class="p_de_cl">
                <img src="https://moretolike.com/assets/images/profile.jpg" class="img-responsive" alt="Image">       
            </div>
            </li>
           <li class="list-inline-item">
            <div class="pro_n_ds">
                <h1 class="clickable_profile_make">Kent-Inge Baardseng <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></h1>
                <p>Kent-Inge Baardseng@gmail.com</p>
            </div>
            </li>    
        </ul>
    </div>
     <!---Desktop Profile--->
     <div class="mobile__data_drop">
         <ul class="list-unstyled list_mibilr__menu_drop">
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  My Account</a></li>
             <!--<li><a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal_cl" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock" aria-hidden="true"></i> SignIn/SignUp</a></li>-->
              <li>
                <a href="javascript:void(0);" onclick="openNav_mobile_login()"><i class="fa fa-lock" aria-hidden="true"></i> SignIn/SignUp</a>
             </li>
             <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
          
         </ul>
     </div> 
    
<!--
    <div class="pro_four_ic">
      <ul class="list-inline ndswe_cl">
           <li class="list-inline-item po_pakhew_bhs">
               <a href="#">
               <i class="fa fa-heart-o" aria-hidden="true"></i>
               <span>Likes</span>
               </a>
               <b>0</b>
          </li>
          
           <li class="list-inline-item po_pakhew_bhs">
               <a href="#">
             <i class="fa fa-eye" aria-hidden="true"></i>
                   <span>Visited</span>
               </a>
               <b>0</b>
          </li>
          
           <li class="list-inline-item">
               <a href="#">
               <i class="fa fa-th-large" aria-hidden="true"></i>
                   <span>Collections</span>
               </a>
          </li>
          
        
          
           <li class="list-inline-item">
               <a href="#">
               <i class="fa fa-bell-o" aria-hidden="true"></i>
                   <span>Notifications</span>
               </a>
          </li>
      </ul>
    </div>
-->
    
    
<div>      
<div class="pro_four_ic">    
<ul class="tabs_cust_nav list-inline ndswe_cl" data-tabgroup="first-tab-group">
    
     <li class="list-inline-item tab_makeing_cl">
        <a href="#tab1" class="active">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>Menu</span>
        </a>
    </li>
    
    <li class="list-inline-item po_pakhew_bhs tab_makeing_cl">
        <a href="#tab2" >
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span>Likes</span>
        </a>
        <b>0</b>
    </li>

    <li class="list-inline-item po_pakhew_bhs tab_makeing_cl">
        <a href="#tab3">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <span>Visited</span>
        </a>
        <b>0</b>
    </li>

    <li class="list-inline-item tab_makeing_cl">
        <a href="#tab4">
            <i class="fa fa-th-large" aria-hidden="true"></i>
            <span>Collections</span>
        </a>
    </li>
    
     <li class="list-inline-item tab_makeing_cl last__nav_atv po_pakhew_bhs">
        <a href="#tab5">
          <i class="fa fa-bell" aria-hidden="true"></i>
            <span>Notification</span>
        </a>
          <b>2</b>
    </li>
    
    
    
</ul>
    
 
</div>           
<section id="first-tab-group" class="tabgroup">
    
<!---TAB 1-->    
  <div id="tab1">
    <div class="heree__locc_sdsd">
    <div class="depr_cl">
      <h1>Departments</h1> <span class="sssss">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></span>
    </div>
    <div class="menu_item_h_cl">
      <ul class="list-unstyled list_m_dvco">
          
           <li class="tree_menu_cust">
             
               <ul class="tree1">
                <li><a href="#" class="serv_cl_mjh_tree">Products</a>

                    <ul>
                        <li>Lavel One</li>
                        <li>Products second
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Products Three</li>
                            </ul>
                        </li>
                      </ul>
                </li>
               
            </ul>
               
               
           </li>
          
           <li>
            <a href="https://www.moretolike.com/trending">
                <span>
                    <img src="https://moretolike.com/assets/img/menu_icon_img/ezgif.csssom-gif-maker.png" class="img-responsive" alt="Image">
               </span>  &nbsp;Trending
               </a>
          </li>
          <li><a href="https://www.moretolike.com/featured"><span><i class="fa fa-diamond" aria-hidden="true"></i></span> Features</a></li>
           <li>
            <a href="https://www.moretolike.com/store-list"><span>
                   <img src="https://moretolike.com/assets/img/menu_icon_img/ezgif.com-gif-maker.png" class="img-responsive" alt="Image">
                </span>  &nbsp;Stores</a>
          </li>
<!--
            <li>
            <a href="https://www.moretolike.com/new-collection"><span><i class="fa fa-th-large" aria-hidden="true"></i></span>  &nbsp;Collection</a>
          </li>
-->
           <li>
            <a href="https://www.moretolike.com/gigs"><span>
                   <img src="https://moretolike.com/assets/img/menu_icon_img/customcccer.png" class="img-responsive" alt="Image">
                </span>  &nbsp;Gigs</a>
          </li>
          <li>
            <a href="https://www.moretolike.com/cryptocollectibles"><span><i class="fa fa-gamepad" aria-hidden="true"></i></span> Crypto Collectibles</a>
          </li>
          
           
<!--           <li><a href="#"><span><i class="fa fa-rss" aria-hidden="true"></i></span>  &nbsp;Feed</a></li>-->
           <li><a href="https://www.moretolike.com/people"><span><i class="fa fa-users" aria-hidden="true"></i></span> people</a></li>
<!--           <li><a href="#"><span><i class="fa fa-archive" aria-hidden="true"></i></span> Stores</a></li>-->
           <li><a href="https://www.moretolike.com/brands"><span>
               <img src="https://moretolike.com/assets/img/menu_icon_img/price-tag.png" class="img-responsive" alt="Image">
               </span> Brands</a></li>
<!--
            <li><a href="https://www.moretolike.com/new-collection">
                <span><i class="fa fa-th-large" aria-hidden="true"></i></span> Collections</a></li>
-->
              <li><a href="https://www.moretolike.com/blog"><span>
               <img src="https://moretolike.com/assets/img/menu_icon_img/blog.png" class="img-responsive" alt="Image">
               </span> Blog</a></li>
          
          
<!--
           <li><a href="https://www.moretolike.com/blog"><span>
               <i class="fa fa-commenting-o" aria-hidden="true"></i>
               </span>  &nbsp;Blog</a></li>
-->
          
          
        
        
          
          
      </ul>
    </div>
    <div class="services_menu_cl">
      
      <div class="triger_cl_sec">
        <h5>Help <span><i class="fa fa-angle-up" aria-hidden="true"></i></span></h5>
      </div>     
        <ul class="list-unstyled fesd_fg">
           <li><a href="https://www.moretolike.com/customer-service"><span><i class="fa fa-info-circle" aria-hidden="true"></i></span>  &nbsp;Customer Services</a></li>
           <li><a href="#"><span><i class="fa fa-arrows" aria-hidden="true"></i></span>  &nbsp;About Moretolike</a></li>
           <li><a href="https://www.moretolike.com/faq"><span><i class="fa fa-question-circle" aria-hidden="true"></i></span> Help Center</a></li>
           <li><a href="#"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span>  Video Instructions</a></li>
      </ul>
    </div>
    </div>
 
  </div>
    
<!---TAB 2-->       
  <div id="tab2">
    <div class="visit_by_here_nam">
        <ul class="list-unstyled list_cll_his_visit">
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
        
        </ul>
    </div>  
  </div>
    
<!---TAB 3-->       
  <div id="tab3">
     <div class="visit_by_here_nam">
        <ul class="list-unstyled list_cll_his_visit">
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
           <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
        </ul>
    </div>  
  </div>
    
<!---TAB 4-->       
  <div id="tab4">
   <div class="collection_new_create">
      
        <div class="wrap_data_collection_new">
          <h3>Saterdays <a href="#">Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
        <div class="wrap_data_collection_new">
          <h3>Saterdays <a href="#">Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
        <div class="wrap_data_collection_new">
          <h3>Saterdays <a href="#">Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
        
   </div>
  </div>
    
<!---TAB 5-->       
<div id="tab5">   
     <div class="notification_slider_menu">
       <ul class="list-unstyled here__ahsdre__notic">
           <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://moretolike.com/assets/images/demo_cu_03.png" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text <strong>50%</strong></h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
            <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://moretolike.com/assets/images/demo_cu_01.png" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text</h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
           <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://admin-api.moretolike.com/uploads/410X281_0d19846715db5a9edc1f8daa44c200d2.jpg" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text</h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
           
           
       </ul>
     </div>
</div>
    
    
</section>
</div>

    
    
    
    
</div>
     
</div>
    
    
  
    
  <!---Close Desktop Side Nav---->    
<div></div>

    
<span style="font-size:30px;cursor:pointer" id="triger_click" onclick="openNavdesktop()">&#9776;</span>
<nav class="navbar navbar-expand-md new_nav tob-bar-fix">
    
    
   
    
    <div class="d-flex justify-content-between res_cus_memu">
        
        <div class="flex_data_header ham_icon">
            <div id="triger_nav" onclick="myFunction1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="triger_nav2" onclick="closeNavdesktop()" class="change" style="display: none;">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="flex_data_header dis_ipa_n">
            <a class=" logo_new_nav " href="{{ url('/') }}">
				<img class="desktop_logo_here" src="{{asset('assets/images/moretolike-new-logo.png')}}">
                <img class="ipad_logo_logo_here"  src="https://moretolike.com/assets/images/mobile_logo_n.png">
			</a>   
        </div>
        <div class="flex_data_header">    
         <div class="input-group search_new_modifie">
             <div class="input-search-field"> 
                  <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search">
             </div>
             
<!--
             <div class="input-group-addon search-categories">
                 <select name="product_cat" id="product_cat" class="postform resizeselect">
                     <option value="" selected="selected">All</option>
                     <option class="level-1" value="accessories">Stores</option>
                     <option class="level-2" value="home-entertainment">Gigs</option>
                     <option class="level-3" value="cameras-photography">Products</option>
                     <option class="level-4" value="computer-components">Brands</option>
                     <option class="level-5" value="gadgets">People</option>
                     <option class="level-6" value="laptops-computers">Collections</option>
                     <option class="level-7" value="computer-components">Digital products</option>
                     <option class="level-8" value="gadgets">Collectibles</option>
                     <option class="level-9" value="laptops-computers">In-game items </option>
                     <option class="level-12" value="laptops-computers">Artwork </option>

                 </select>
             </div>
-->
             
             <div class="input-group-btn desew_bsg">
                 <input type="hidden" id="search-param" name="post_type" value="product">
                 <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
             </div>
             
         </div> 
          
        </div>
       
        <div class="flex_data_header">
          
        
            <div class="dropdown megamenu">
                <a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle logo_new_nav">
                 Menu <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                
                <div aria-labelledby="megamneu" class="dropdown-menu new_mega_menu_cl">
                     <div class="container">
                        <div class="wrap_data_mega_menu_all">
                            <div class="fancy_box_content">
            <div class="">
               
                <ul class="nav nav-pills nav_menga_m" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#mega_1">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_2">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_3">Kids</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_4">Home & Living</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_5">Gadgets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_6">Art</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_7">Explore</a>
                    </li>
                </ul>

             
                <div class="tab-content cus_mega_menu">
                    
                      <div id="mega_1" class=" tab-pane active">
                        <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_2" class=" tab-pane fade">
                    <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_3" class=" tab-pane fade">
                       <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                    <div id="mega_4" class=" tab-pane fade">
                        <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_5" class=" tab-pane fade">
                         <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                      <div id="mega_6" class=" tab-pane fade">
                       <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                     </div>
                    
                      <div id="mega_7" class=" tab-pane fade">
                          <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
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
                    </div>
            </div>
          
            
        </div>    
        <div class="flex_data_header hom__plmjh">
            <a class=" logo_new_nav nav-link1" href="https://www.moretolike.com/trending">Trending</a>
        </div>
        <div class="flex_data_header">
            <a class=" logo_new_nav nav-link1" href="https://www.moretolike.com/featured">Featured</a>
        </div>
        <div class="flex_data_header">
              <div class="dropdown">
            @if((Session::get('user_id')))
           
               <a class="dropdown-toggle nav-link  nav-link1 pro_cll_man poa_dew logo_new_nav" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<!--               My Account - {{ Session::get('f_name') }}-->
                  <img class="img-responsive" src="https://moretolike.com/assets/img/profile_i_cl.jpg" alt="image"> 
                   <i class="fa fa-angle-down" aria-hidden="true"></i>
               </a>
              @else
               <a class="dropdown-toggle nav-link  nav-link1 logo_new_nav" href="javascript:void(0);" id="login" onclick="openNav_mobile_login()" role="button"  aria-haspopup="true" aria-expanded="false">
                My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              @endif
           
            <div class="dropdown-menu dropdown-menu-right new_dro_m sec_data_n dfdfd__sosjasdx" aria-labelledby="navbarDropdown">
             <!--<a class="dropdown-item" href="#"><span><i class="fa fa-bell-o" aria-hidden="true"></i></span> Notification</a>-->
               
                <a class="dropdown-item pro_cl_nshw" href="javascript:void(0)" data-target="my_profile">
                    <span class="nsh_sjew"><i class="fa fa-user" aria-hidden="true"></i></span> My Profile &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="list-unstyled profile_dro_ne_s" id="my_profile">
                <li><a class="dropdown-item" href="{{ url('/my-profile') }}"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> Profile</a></li>
                <li><a class="dropdown-item" href="{{ url('/my-account') }}"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> My Account </a></li>
                </ul>
              
            
                  <a class="dropdown-item pro_cl_nshw" href="javascript:void(0)" data-target="my_store">
                        <span class="nsh_sjew"><i class="fa fa-cart-plus" aria-hidden="true"></i></span> My Store &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="list-unstyled profile_dro_ne_s" id="my_store">
                    <li><a class="dropdown-item" href="#"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> DropDwn 1</a></li>
                    <li><a class="dropdown-item" href="#"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> DropDwn 2</a></li>
                    <li><a class="dropdown-item" href="#"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> DropDwn 3</a></li>
                    </ul>

                
                @if((Session::get('user_id')))
                <a class="dropdown-item" href="{{ url('logout') }}"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a>
                @endif
            </div>
            </div>      
        </div>
         <div class="flex_data_header"><i style="color:white"></i></div>
        <div class="flex_data_header">
                <div class="dropdown">
               <a class="nav-link dropdown-toggle nav-link1 pro_cll_man poa_dew sna_bell__cl" href="javascript:void(0)" id="preview_pao1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="img-responsive" src="https://www.moretolike.com/assets/img/bell-solid.svg" alt="image" ><b>2</b>
                </a>
                <div class="dropdown-menu dropdown-menu-right new_dro_m sec_data_n cus_second___frop" aria-labelledby="preview_pao1">
                 <ul class="list-inline sadgds_lis_not">
                     <li class="list-inline-item">
                         <p>Lorem Ipsum is simply dummy text of the printing. </p>
                         <small>2 hrs ago</small>
                     </li>
                       <li class="list-inline-item"> 
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <small>3 hrs ago</small>
                     </li>
                 </ul>
                </div>
                </div>
            </div>
        
        <div class="flex_data_header dea_item_b sticky_bag sticky_bag_large all_one_cs_ap my_cart">
                <a class="nav-link sna_bell__cl" href="javascript:void(0);" onclick="openNav()">
                    <img class="img-responsive" src="https://www.moretolike.com/assets/img/shopping-cart-solid.svg" alt="image" >
                    <b>{{ $static_data['my_cart_total'] }}</b> 
                     <span>${{ $static_data['getSubTotal'] }}</span>
                  </a>
         </div>
        <div class="flex_data_header dea_item_b sticky_bag sticky_bag_ipad all_one_cs_ap sna_bell__cl">
                <a class="nav-link" href="javascript:void(0);" onclick="openNav()">
                    <img class="img-responsive" src="https://www.moretolike.com/assets/img/shopping-cart-solid.svg" alt="image" >
                    <b>0</b> <span>$0.00</span></a>
           </div>
  
    </div>
    
    
</nav>   
</header>  
</section>        
        
<!---Fancy Box---> 
    
<!--
<div class="facy_box_her sssss">
        <div class="container">
            <div class="fancy_box_content">
            <div class="">
               
                <ul class="nav nav-pills nav_menga_m" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#mega_1">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_2">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_3">Kids</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_4">Home & Living</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_5">Gadgets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_6">Art</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#mega_7">Explore</a>
                    </li>
                </ul>

             
                <div class="tab-content cus_mega_menu">
                    
                      <div id="mega_1" class=" tab-pane active">
                        <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_2" class=" tab-pane fade">
                    <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_3" class=" tab-pane fade">
                       <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                    <div id="mega_4" class=" tab-pane fade">
                        <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                    
                      <div id="mega_5" class=" tab-pane fade">
                         <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                    </div>
                    
                      <div id="mega_6" class=" tab-pane fade">
                       <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
                                      </div>
                                  </div>
                              </div>


                          </div>
                     </div>
                    
                      <div id="mega_7" class=" tab-pane fade">
                          <div class="mega_menu_panel">

                              <div class="row">
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Collection <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Art for Your Home</a></li>
                                          <li><a href="#">Neo Art</a></li>
                                          <li><a href="#">Wallpaper,Murals,and Decals</a></li>
                                          <li><a href="#">Posters & Prints</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel border_cl_m__as">
                                          <li>
                                              <h4>Stores <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Curioos</a></li>
                                          <li><a href="#">Giant Art</a></li>
                                          <li><a href="#">Six Eleven</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <ul class="list-unstyled coolect_menga_panel">
                                          <li>
                                              <h4>Gigs <i class="fa fa-caret-right" aria-hidden="true"></i></h4>
                                          </li>
                                          <li><a href="#">Epik Canvas</a></li>
                                          <li><a href="#">The Hoop Dream Studio</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3 col-md-3">
                                      <div class="imd_mega__cl">
                                          <img src="https://moretolike.com/assets/img/saq__nm.jpg" alt="Testing">
                                          <a href="#">All things KAWS</a>
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

         
       
    
  
        
<!----------- Cart Slide ------------------->
        
  <div class="container-fluid banner-bg content">
         <div id="mySidenav" class="sidenav">
            <div class="row carts">
             <div class="col-sm-2 closeDiv">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             </div>
             <div class="col-sm-10"> <h4 class="shoppingcart">SHOPPING CART</h4></div>
            </div>
            <ul class="cart-header">
               @if(isset($static_data['cart']) && !empty($static_data['cart']))
                  <div id="cart-items">
                     @foreach($static_data['cart'] as $row)
                        <li>
                           <div class="row">
                              <div class="col-lg-4 col-sm-4 col-3"><img src="{{ getenv('URL')}}75X75_{{$row->attributes->img}}" alt="" /> </div>
                              <div class="col-lg-8 col-sm-8 col-9 productname">
                                 <a href="javascript:void(0)">{{ucfirst($row->name)}}</a>
                                 <p>{{$row->quantity}} × ${{money_format('%i', $row->price)}}</p>
                              </div>
                        
                                <!--
                                 <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="removeCart({{$row->id}},{{$row->quantity}},{{$row->price}},{{$static_data['getTotlaQty']}},{{$static_data['getSubTotal']}},'slide')" id="{{$row->id}}">×</a>
                                -->
                               
                           </div>
                            
                              <div class="row mobile_wi_kj">
                                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 padding_ndb_c">
                                   <div class="card_collection_img">
                                    <a href="#"> 
                                      <img src="https://moretolike.com/images/add-clooection.png">
                                       <span>Add to a Collection</span>
                                       </a>
                                   </div> 
                               </div>
                               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 the_ponsv">
                                 <div class="remove_content_cared_cu">
                                     <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="removeCart({{$row->id}},{{$row->quantity}},{{$row->price}},{{$static_data['getTotlaQty']}},{{$static_data['getSubTotal']}},'slide')" id="{{$row->id}}">× Remove</a>
                                </div>  
                                </div>   
                            </div>
                            
                        </li>
                     @endforeach
                    </div>
                    <li class="botomli">
                      <div class="row">
                        <!--div class="col-sm-12">
                          <div class="progress-outer">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:50%;"></div>
                                <div class="progress-value"><span>50</span>%</div>
                            </div>
                        </div>
                        </div-->
                        <div class="col-sm-12"><p>Free shipping for orders over $500.00</p></div>
                        <!-- <div class="col-sm-12"><p>Free shipping for orders over $500.00</p></div> -->
                      </div>
						<div class="row">
							<div class="col-sm-6"><h5>Cart Total</h5></div>
							<div class="col-sm-6">
								<h5 class="cart-total-price">
								@if(isset($static_data['getSubTotal']) && !empty($static_data['getSubTotal']))
									${{$static_data['getSubTotal']}}
								@else
									$0
								@endif
								</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 cart_button">
								@if((Session::get('user_id')))
								<a href="javascript:void(0);" class="mybtncart {{count($static_data['cart'])>0?'slide_cart_page':''}}">Go To Cart</a>
								@else
								<a href="javascript:void(0);" id="login" data-toggle="modal" data-target="#exampleModal" class="mybtncart">Go To Cart</a>
								@endif
							</div>
                        </div>
						<div class="row">
							<div class="col-sm-12 checkout_button"> 
								@if((Session::get('user_id')))
								<a href="javascript:void(0);" class="mycheckout {{count($static_data['cart'])>0?'slide_checkout_page':''}}" >Proceed To Checkout</a>
								@else
								<a href="javascript:void(0);" id="login" data-toggle="modal" data-target="#exampleModal" class="mycheckout" >Proceed To Checkout</a>
								@endif
							</div>
                                                                                                                                           
						</div>
                    </li>
               @else
                  <b>There is no item in cart..</b>
               @endif
                
                
                <li>
                    <div class="dont_open_ev_time">
                <label class="container_cart">Don’t open the cart every time a product is added<br>
                  <input class="disable_cart_slide" type="checkbox">
                  <span class="checkmark_cart"></span>
                </label>
             </div>
                </li>
                
            </ul>
             
           
             
             
         </div>
<!-- Close Cart Slide --------->
        
  
  
        
   
        
<!--------FOR MOBILE--------->     
        
   <section class="mobile_main_pnl hide_for_lg">
        <div class="static_header_mobile">
       <div class="header_mobile_new">
           <ul class="list-inline menu_nav_mo sssss">
               <li class="list-inline-item nased_cl sssss"><span class="sssss" style="font-size:30px;cursor:pointer;display:block;" onclick="openNavmobile()">
                    <div class="bar_mo sssss"></div>
                    <div class="bar_mo sssss"></div>
                    <div class="bar_mo sssss"></div>
                   </span></li>
               <li class="list-inline-item">
               <div class="m_new_logo">
                   <a href="https://www.moretolike.com">
               <img src="https://moretolike.com/assets/images/moretolike-new-logo.png" class="img-responsive" alt="Image"> 
                    </a>   
               </div>
                
                   
               </li>
               <li class="list-inline-item bag_mo">
                   <a class="sssss" href="javascript:void(0);" onclick="openNav()">
                        <img class="img-responsive sssss" src="https://www.moretolike.com/assets/img/shopping-cart-solid.svg" alt="image" >
                     
                        <b class="sssss">1</b>
                       <span class="sssss">$0.00</span>
                   </a>
               </li>
           </ul>
       </div>     
       
 
        
<div class="search_mobile_s">
    <div class="">
        <div class="input-group mo_se_con_cl">
            <input type="text" class="form-control" id="exampleInputAmount" placeholder="Search">
            <span class="input-group-btn">
                <button type="button" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
        </div>

    </div>
</div>  
    </div>   
  <!--Sticky Header-->
            <div class="sticky_header_wrap">
            <div class="header_mobile_new">
            <ul class="list-inline mobile_ori_view sssss">
               <li class="list-inline-item nased_cl st_j_menu sssss"><span class="sssss" style="font-size:30px;cursor:pointer" onclick="openNavmobile()">
<!--
                    <div class="bar_mo"></div>
                    <div class="bar_mo"></div>
                    <div class="bar_mo"></div>
-->
                    <img src="https://moretolike.com/assets/images/menu_bar.png" class="img-responsive sssss" alt="Image">   
                   
                   </span></li>
               <li class="list-inline-item">
               <div class="stick_mobi_logo">
                <a href="https://www.moretolike.com"> 
                    <img src="https://moretolike.com/assets/images/mobile_logo_n.png" class="img-responsive" alt="Image">  
                   </a> 
               </div>  
               </li>
                
            <li class="list-inline-item serach_st_h_n">
            <div class="input-group stickty_header_search">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                <button type="button" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
            </div>
            </li>
                
                
               <li class="list-inline-item bag_mo sticky_bag sticky_bag_mobile">
                <a class="sssss" href="javascript:void(0);" onclick="openNav()">
<!--                       <i class="fa fa-shopping-bag sssss" aria-hidden="true"></i> -->
                     <img class="img-responsive sssss" src="https://www.moretolike.com/assets/img/shopping-cart-solid.svg" alt="image" >
                       <b class="sssss">1</b>
                       <span class="sssss">$0.00</span>
                   </a>
               </li>
                
               
                
                
           </ul>
       </div>
            
       
</div>                
<!--Close Sticky Header-->            
                  
       
       
</section>      
            
     
            
        
    
<div class="container">  
<div class="mobile_side_n">    
<div class="row">
<div id="mySidenav-m" class="sidenav">
<a href="javascript:void(0)" class="closebtn mobile_close_btn" onclick="closeNavmobile()">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
    
<div class="profileslide_con">
    
    <div class="profile_info_h">
        <ul class="list-inline">
           <li class="list-inline-item ghsy_clas">
            <div class="p_de_cl">
                <img src="https://moretolike.com/assets/images/profile.jpg" class="img-responsive" alt="Image">       
            </div>
            </li>
           <li class="list-inline-item">
            <div class="pro_n_ds">
               <h1 class="clickable_profile_make">Kent-Inge Baardseng 
                   <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </h1>
                <p>Kent-Inge Baardseng@gmail.com</p>
            </div>
              
            </li>    
        </ul>
    </div> 
    
    <!---Mobile Profile--->
     <div class="mobile__data_drop">
         <ul class="list-unstyled list_mibilr__menu_drop">
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  My Account</a></li>
             <!--<li><a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal_cl" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock" aria-hidden="true"></i> SignIn/SignUp</a></li>-->
              <li>
                <a href="javascript:void(0);" onclick="openNav_mobile_login()"><i class="fa fa-lock" aria-hidden="true"></i> SignIn/SignUp</a>
             </li>
             <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
          
         </ul>
     </div> 
    
    
   <div>      
<div class="pro_four_ic">    
<ul class="tabs_cust_nav list-inline ndswe_cl" data-tabgroup="first-tab-group_2">
    
     <li class="list-inline-item tab_makeing_cl">
        <a href="#tab_mobile_1" class="active">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>Menu</span>
        </a>
    </li>
    
    <li class="list-inline-item po_pakhew_bhs tab_makeing_cl">
        <a href="#tab_mobile_2" >
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span>Likes</span>
        </a>
        <b>0</b>
    </li>

    <li class="list-inline-item po_pakhew_bhs tab_makeing_cl">
        <a href="#tab_mobile_3">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <span>Visited</span>
        </a>
        <b>0</b>
    </li>

    <li class="list-inline-item po_pakhew_bhs tab_makeing_cl hree__shsb_bib--">
        <a href="#tab_mobile_4">
            <i class="fa fa-th-large" aria-hidden="true"></i>
            <span>collections</span>
        </a>
    </li>
    
      <li class="list-inline-item tab_makeing_cl last__nav_atv po_pakhew_bhs">
          <a href="#tab_mobile_5">
              <i class="fa fa-bell" aria-hidden="true"></i>
              <span>Notification</span>
          </a>
          <b>2</b>
      </li>

   


</ul>
</div>           
<section id="first-tab-group_2" class="tabgroup">
    
<!---TAB 1-->    
  <div id="tab_mobile_1">
    <div class="heree__locc_sdsd">
    <div class="depr_cl">
      <h1>Departments</h1>
<!--        <span class="sssss">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
        
    </div>
    <div class="menu_item_h_cl">
      <ul class="list-unstyled list_m_dvco">
          
           <li class="tree_menu_cust">
                <ul class="tree1">
                <li><a href="#" class="serv_cl_mjh_tree">Products</a>

                    <ul>
                        <li>Lavel One</li>
                        <li>Products second
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Products Three</li>
                            </ul>
                        </li>
                      </ul>
                </li>
               
            </ul>
           </li>
          
           <li>
            <a href="https://www.moretolike.com/trending">
                <span>
                    <img src="https://moretolike.com/assets/img/menu_icon_img/ezgif.csssom-gif-maker.png" class="img-responsive" alt="Image">
               </span>  &nbsp;Trending
               </a>
          </li>
          <li><a href="https://www.moretolike.com/featured"><span><i class="fa fa-diamond" aria-hidden="true"></i></span> Features</a></li>
           <li>
            <a href="https://www.moretolike.com/store-list"><span>
                   <img src="https://moretolike.com/assets/img/menu_icon_img/ezgif.com-gif-maker.png" class="img-responsive" alt="Image">
                </span>  &nbsp;Stores</a>
          </li>
            <li>
            <a href="https://www.moretolike.com/trending"><span><i class="fa fa-th-large" aria-hidden="true"></i></span>  &nbsp;Collection</a>
          </li>
           <li>
            <a href="https://www.moretolike.com/gigs"><span>
                   <img src="https://moretolike.com/assets/img/menu_icon_img/customcccer.png" class="img-responsive" alt="Image">
                </span>  &nbsp;Gigs</a>
          </li>
          <li>
            <a href="https://www.moretolike.com/cryptocollectibles"><span><i class="fa fa-gamepad" aria-hidden="true"></i></span> Crypto Collectibles</a>
          </li>
          
           
<!--           <li><a href="#"><span><i class="fa fa-rss" aria-hidden="true"></i></span>  &nbsp;Feed</a></li>-->
           <li><a href="https://www.moretolike.com/people"><span><i class="fa fa-users" aria-hidden="true"></i></span> people</a></li>
<!--           <li><a href="#"><span><i class="fa fa-archive" aria-hidden="true"></i></span> Stores</a></li>-->
           <li><a href="https://www.moretolike.com/brands"><span>
               <img src="https://moretolike.com/assets/img/menu_icon_img/price-tag.png" class="img-responsive" alt="Image">
               </span> Brands</a></li>
<!--
            <li><a href="https://www.moretolike.com/new-collection">
                <span><i class="fa fa-th-large" aria-hidden="true"></i></span> Collections</a></li>
-->
             <li><a href="https://www.moretolike.com/blog"><span>
               <img src="https://moretolike.com/assets/img/menu_icon_img/blog.png" class="img-responsive" alt="Image">
               </span> Blog</a></li>
          
<!--           <li><a href="https://www.moretolike.com/blog"><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>  &nbsp;Blog</a></li>-->
          
          
        
        
          
          
      </ul>
    </div>
    <div class="services_menu_cl">
      
      <div class="triger_cl_sec">
        <h5>Help <span><i class="fa fa-angle-up" aria-hidden="true"></i></span></h5>
      </div>     
        <ul class="list-unstyled fesd_fg">
           <li><a href="https://www.moretolike.com/customer-service"><span><i class="fa fa-info-circle" aria-hidden="true"></i></span>  &nbsp;Customer Services</a></li>
           <li><a href="#"><span><i class="fa fa-arrows" aria-hidden="true"></i></span>  &nbsp;About Moretolike</a></li>
           <li><a href="https://www.moretolike.com/faq"><span><i class="fa fa-question-circle" aria-hidden="true"></i></span> Help Center</a></li>
           <li><a href="#"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span>  Video Instructions</a></li>
      </ul>
    </div>
    </div>
 
  </div>
    
<!---TAB 2-->       
  <div id="tab_mobile_2">
    <div class="visit_by_here_nam">
        <ul class="list-unstyled list_cll_his_visit">
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                       <h5><b>Out of stock</b> <a href="#">Notify me</a></h5>
                       <h4>USD 59.95</h4>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart" style="color:rgb(237, 72, 86)" aria-hidden="true"></i>  </span>
                       <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
        
        </ul>
    </div>  
  </div>
    
<!---TAB 3-->       
  <div id="tab_mobile_3">
     <div class="visit_by_here_nam">
        <ul class="list-unstyled list_cll_his_visit">
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
           <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
            <li>
             <div class="row">
                 <div class="col-3">
                     <div class="immshs___aqw_visir">
                      <img class="img-responsive" src="https://moretolike.com/assets/img/visit_img__msk_2.jpg" alt="image">
                     </div>
                 </div>
                  <div class="col-7">
                   <div class="bisss_vidite_te">
                       <small>Tina Maria x </small>
                       <p>Pleated Garden Flower Skirt</p>
                   </div>
                  </div>
                 <div class="col-2">
                  <div class="heart_cdsmk_bvide">
                        <span> <i class="fa fa-heart-o" aria-hidden="true"></i>  </span>
                        <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  </div>
                 </div>
             </div>
            </li>
        </ul>
    </div>  
  </div>
    
<!---TAB 4-->       
  <div id="tab_mobile_4">
  <div class="collection_new_create">
      
         <div class="wrap_data_collection_new">
          <h3>Saterdays <a href="#"> Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
         <div class="wrap_data_collection_new">
          <h3>Saterdays <a href="#"> Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
         <div class="wrap_data_collection_new">
         <h3>Saterdays <a href="#"> Edit</a></h3>
           <p>58 Followers</p>
           <ul class="list-inline">
             <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__1.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__5.jpg" alt="image">
                </a>  
             </li>
                 <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__3.jpg" alt="image">
                </a>  
             </li>
                <li class="list-inline-item">
                <a href="JavaScript:Void(0);">
                  <img class="img-responsive" src="https://moretolike.com/assets/img/collection__4.jpg" alt="image">
                </a>  
             </li>
           </ul>
       </div>
       
   </div>
  </div>
<!---TAB 5-->   
<div id="tab_mobile_5">
    
     <div class="notification_slider_menu">
       <ul class="list-unstyled here__ahsdre__notic">
           <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://moretolike.com/assets/images/demo_cu_03.png" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text <strong>50%</strong></h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
            <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://moretolike.com/assets/images/demo_cu_01.png" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text</h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
           <li>
               <a href="#">
               <div class="d-flex">
                   <div class="flex__wrapslide">
                    <img class="img-fluid" src="https://admin-api.moretolike.com/uploads/410X281_0d19846715db5a9edc1f8daa44c200d2.jpg" alt="image">
                   </div>
                   <div class="flex__wrapslide">
                    <h5>Lorem Ipsum is simply dummy text</h5>
                    <p>Lorem Ipsum is simply dummy text</p>  
                    <small>2 Day Ago</small>   
                   </div>
                 
               </div>
              </a>       
           </li>
           
           
       </ul>
     </div>
    
</div>
    

    
</section>
</div>


    
    
    
</div>
    
</div>
</div>
</div>    
</div>    
        
        </div>      
<!--------CLOSE FOR MOBILE--------->          

<!---Mobile Nav js-->     
        
        
        
<!--
    <script>
        $(document).ready(function($) {
            $('#product_cat').change(function() {
                var conceptName = $('#product_cat').find(":selected").val();
                if (conceptName != '') {
                    $(this).removeClass("add_select_option");
                    $(this).addClass("add_select_option_two");
                } else {
                    $(this).addClass("add_select_option");
                    $(this).removeClass("add_select_option_two");
                }
            });
        });
    </script>
-->
        
        
        
        
        
        
    <script>
 
        function openNavmobile() {
        document.getElementById("mySidenav-m").style.left = "0px";
        $("body").addClass("Overlay_la");
        }



        function closeNavmobile() {
        document.getElementById("mySidenav-m").style.left = "-320px";
        $("body").removeClass("Overlay_la");

        }

        $(document).ready(function(){
            $(".depr_cl span").click(function(){
            $(this).toggleClass("re_ang");
            $(".menu_item_h_cl").toggleClass("show_mse");
            });


            $(".triger_cl_sec h5").click(function(){
            $(this).toggleClass("sedr_cl");
            $(".fesd_fg").toggleClass("sec_show_mse");
            });
            
            $(document).on('click', '.fancy_box_content', function (e) {
              e.stopPropagation();
            });

        });       
        
         $(document).ready(function(){
            $(".sna_bell__cl").click(function(){
             /*   console.log('dsfsd'); 
                $(".notification_sec_hste .dropdown-menu").toggle();*/
            });
        });

        
         $(document).ready(function(){
            $(".menu_click_h").click(function(){
              $("body").addClass("menu_mega_bdy_add");
            });
        });
        
//        
//         $(document).ready(function(){
//              $(".sacss").click(function(){
//                  alert("hhh");
//              $(".show_mega_menu").addClass("nnn");
//            });
//        });
//
//       
        
          $(document).ready(function(){
            $(".vnbm__zxd p i").click(function(){
              $(".vnbm__zxd p i").addClass("add_click__heart");
            });
        });
        
        
          $(document).ready(function(){
            $(".clickable_profile_make").click(function(){
              $(".mobile__data_drop").toggleClass("show__headr_show_ma");
              $(".pro_n_ds h1 span i").toggleClass("fa-angle-up");
            });
        });
        
        
    </script>   
    
    

    