<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Moretolike.com - Your online shopping experience!</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/font-electro.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/owl-carousel.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/colors/yellow.css')}}" media="all" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

<!-- <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"> -->
<link rel="shortcut icon" href="/images/small-logo.png">

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link href="/css1/push.css" rel="stylesheet">
  <link href="/css1/application.css" rel="stylesheet">
<!--     <link rel="stylesheet" href="/resources/demos/style.css">
 -->    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="{{ asset('js/readmore.js') }}"></script>
    
    <style type="text/css">
    .mybtn1{background-color: #fff; border: 1px solid #7b7b7b !important; border-radius: 8px; width: 175px;}
    .hidden{display: none;}
    .fsizecl{color: #7d7d7d;font-size: 16px; }

    .wdth{ width: 312px; padding-top: 15px; }
    .nav-side-menu { transition: unset!important;transform: none!important; }
    .brandlogo{ width: 80%; margin:auto; border: 1px solid #fff;
    margin-bottom: 10px;     border-radius: 100%; }
    .imgbrand{border-radius: 100%;width: 100px;height: 60px;}
    ul#categaries {height: 200px;overflow-y: scroll;overflow-x: hidden;}
    #categaries::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5;}
    #categaries::-webkit-scrollbar{width: 10px;background-color: #F5F5F5;}
    #categaries::-webkit-scrollbar-thumb{background-color: #000000;border: 2px solid #555555;}
     ul#brand_desk_menu{height: 200px; overflow-y: scroll; overflow-x: hidden;}
    #brand_desk_menu::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5;}
    .padt{padding-top: 10px;}
    #brand_desk_menu::-webkit-scrollbar{width: 10px;background-color: #F5F5F5;}
    #brand_desk_menu::-webkit-scrollbar-thumb{background-color: #000000;border: 2px solid #555555;}
    ul#retailers{height: 200px;overflow-y: scroll;overflow-x: hidden;}
    #retailers::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5;}
    #retailers::-webkit-scrollbar{width: 10px;background-color: #F5F5F5;}
    #retailers::-webkit-scrollbar-thumb{background-color: #000000;border: 2px solid #555555;}
    a.collectioncl{float: right;}
    h4.shopi {float: right;padding-right: 10px;color: #7d7d7d;}
    .circle1{border: 1px solid #ccc;padding: 5px;border-radius: 100px;color: #7d7d7d;}
    .cartscroll{min-height: 400px; overflow-y: scroll;}
    #style-3::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5;}
    #style-3::-webkit-scrollbar{width: 6px;background-color: #F5F5F5;}
    #style-3::-webkit-scrollbar-thumb{background-color: #000000;}
    .nav-bar-1{ height: 50px;}
    .nav-bar-1 ul{list-style: none;margin: 0 auto;}
    .nav-bar-1 ul li{color: #7d8189;line-height: 50px;text-align: center;cursor: pointer;text-transform: uppercase;
      font-family: Arial;transition: 0.5s;position: relative;}

    .nav-bar-1 ul li:nth-child(3){background: #fed700;}

    .nav-bar-1 ul li:hover:not(.active){/* background: #D80B15;*/}

    .search-box-1{background: #E8E8E4;position: absolute; top: 54px;right: 28.7%;width: 350px;
  height: 60px;line-height: 60px;box-shadow: 0 0 10px rgba(0,0,0,0.5);border-top:4px solid #fed700;display: none;z-index: 999;}

  .search-box-1:before{content: "";position: absolute;top: -32px;right: 13px; border-left: 12px solid transparent;
  border-right: 12px solid transparent;border-top: 14px solid transparent;border-bottom: 14px solid #fed700;}

  .search-box-1 input[type="text"]{width: 200px;padding: 5px 10px;margin-left: 23px;border: 1px solid #fed700;outline: none;}
  .search-box-1 input[type="button"]{ width: 80px; padding: 5px 0;background: #fed700;color: #fff;margin-left: -10px; 
    border: 1px solid #fed700;outline: none;cursor: pointer;border-radius: 0px;}
   .value3{position: absolute;top: 147px;left: 34px;background-color: #fed700; padding: 3px;border-radius: 50px;color: #fff;}
   .sidebar{ width: 280px; padding-top: 20px; }
   .marlft{margin-left: 30px;}
   .margntp{margin-top:5px;}
   .inputpa{padding-left: 15px;}
/* Media Queries */
  .topic-left{float: left;margin-right: 10px;padding-top: 10px;padding-left: 13px;}
  .brds{ border: 1px solid #ccc; border-radius: 5px;width: 250px;padding: 10px; background-color: #f5f4f4;}
  ul.dropdown-menu.right{position: relative; /*right:90px;*/}
  .posit{position: absolute;right: 32px;top: -17px;font-size: 24px;color: #ccc;}
  @media (max-width: 1199px) and (min-width: 992px){
    ul.dropdown-menu.right{position: relative; }
  }
  </style>
    <script type="text/javascript">
       function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top;
        if (window_top > div_top) {
          $('#sticky').addClass('stick');
        } else {
          $('#sticky').removeClass('stick');
        }
      }

      $(function() {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
      });
   </script>
<script>
  $(document).ready(function() {
     
            $(".homesearch").click(function() {
               $(".search-box-1").toggle();
               $(".home-search").focus();
             });
 
        });
</script>
</head>

<body class="page home page-template-default">
<nav class="push-sidebar hidden" id="sidebar-left">
<div class="nav-side-menu wdth">
    @if(Session::has('user_id'))
      <div class="row">
          <div class="col-xs-4">
              <div class="brandlogo"><img src="{{asset('uploads')}}/{{Session::get('profile_image')}}" class="imgbrand" alt="nbvnvbn" align="right;"></div>
          </div>
           <div class="col-xs-8" style="padding: 0px; padding-top: 8px;">
              <b>{{Session::get('f_name')}}</b>
              <!-- <span style="color: #8e8e8e;">Premium Member </span> <a href="#">(Edit)</a> --><br>
              <a href="/customer">My Account</a>
          </div>
      </div>
    @endif
    <div class="row" style="border-bottom: 1px solid #d6d6d6; padding: 5px;"> 
        <div class="col-xs-12">
       
            <form method="post" action="/search-result">
            {{csrf_field()}}
              <input name='product_cat' type="hidden">
               <div class="input-group marlft">
                <span style="position: absolute; top: 7px;left: 7px; color:#bfbfbf; font-size: 13px; "><i class="fa fa-search"></i></span>
                <input id="msg" type="text" class="form-control" name="search_value" placeholder="Search....." style="padding-left: 40px; padding-left: 24px;border-radius: 3px;width: 225px;">
              </div>
            </form>

        </div> 
       </div>
   
    <div class="menu-list">
  
            <ul id="menu-content" class="menu-content">
              
                <ul >
                  
                  <div id="sidebar" class="sidebar hewipamr" role="complementary">
                       <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                 <ul>
                                   <li class="cat-item current-cat"><a href=""><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>MENU</a> <span class="count"></span>
                                            <ul class="children readmore" style="display: block;">
                                                @foreach($website_menu as $row)
                                                  <li class="cat-item"><a href="{{$row->links}}"> 
                                                  @if(count(explode('http', $row->icon)) >= 2)
                                                  <span class="topic-left"><img src="{{$row->icon}}" style="width: 12px;"></span>
                                                  @else
                                                  <i class="{{$row->icon}}"></i>
                                                  @endif
                                                   {{$row->name}}</a></a> </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                     <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                 <ul>
                                   <li class="cat-item current-cat"><a href=""><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>SHOW the following</a> <span class="count"></span>
                                            <ul class="children readmore" style="display: block;">
                                                @foreach($website_show_the_following as $row)
                                                <li class="cat-item"><a href="{{$row->links}}"><i class="{{$row->icon}}"></i> {{$row->name}}</a> </li>
                                                @endforeach
                                            
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>

              <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                 <ul>
                                   <li class="cat-item current-cat"><a href=""><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>CUSTOMER SERVICE</a> <span class="count"></span>
                                            <ul class="children readmore" style="display: block;">
                                                @foreach($website_customer_service as $row)
                                                <li class="cat-item"><a href="{{$row->links}}"><i class="{{$row->icon}}"></i> {{$row->name}}</a> </li>
                                                @endforeach
                                               
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
              <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                 <ul>
                                   <li class="cat-item current-cat"><a href=""><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>Browse Categaries</a> <span class="count">({{count($sub_category)}})</span>
                                            <ul class="children readmore" style="display: block;">
                                                @foreach($sub_category as $row)
                                                <li class="cat-item"><a href="/category-product/{{$row->id}}"><i class="fa fa-angle-right"></i> {{$row->name}}</a> </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_electro_products_filter">
                            <h3 class="widget-title">Filters</h3>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Brands</h3>
                                <ul class="readmore">
                                    @foreach($brand_carousel as $row)
                                      <li><input type="checkbox" > <span class="inputpa">{{$row->name}} </span><span class="count">(4)</span></li>
                                    @endforeach

                                    
                                </ul>
                                <!-- <p class="maxlist-more"><a href="#">+ Show more</a></p> -->
                            </aside>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Color</h3>
                                <ul>
                                    <li><input type="checkbox" > <span class="inputpa">Black </span><span class="count">(4)</span></li>
                                    <li><input type="checkbox" > <span class="inputpa">Black Leather </span> <span class="count">(2)</span></li>
                                    <li><input type="checkbox" > <span class="inputpa">Turquoise </span><span class="count">(2)</span></li>
                                    <li><input type="checkbox" > <span class="inputpa">White </span><span class="count">(4)</span></li>
                                    <li><input type="checkbox" > <span class="inputpa">Gold </span><span class="count">(4)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_price_filter">
                                <h3 class="widget-title">Price</h3>
                                <form action="#">
                                    <div class="price_slider_wrapper">
                                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <a href="#" class="button">Filter</a>
                                            <div style="" class="price_label">Price: <span class="from">$428</span> — <span class="to">$3485</span></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </aside>
                      
                      
                    </div>  
                   
                  </ul>
                 
                  <ul>
                  <li>
                    <aside class="widget widget_text  ">
                            <div class="textwidget">
                                <a href="#"><img src="/images/banner/ad-banner-sidebar.jpg" alt="Banner IMage"></a>
                            </div>
                        </aside></li>
                 
                </ul>
               
                  <ul >
                  <li><aside class="widget widget_products">
                            <h3 class="widget-title">Latest Products</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                                        <img src="/images/product-category/1.jpg" class="wp-post-image" alt="" width="180" height="180"><span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">$1,999.00</span></ins> <del><span class="amount">$2,299.00</span></del></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Tablet Thin EliteBook  Revolve 810 G6">
                                        <img src="/images/product-category/2.jpg" class="wp-post-image" alt="" width="180" height="180"><span class="product-title">Tablet Thin EliteBook  Revolve 810 G6</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">$1,300.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Widescreen Z51-70  40K6013UPB">
                                        <img src="/images/product-category/3.jpg" class="wp-post-image" alt="" width="180" height="180"><span class="product-title">Notebook Widescreen Z51-70  40K6013UPB</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">$1,100.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Purple G952VX-T7008T">
                                        <img src="/images/product-category/4.jpg" class="wp-post-image" alt="" width="180" height="180"><span class="product-title">Notebook Purple G952VX-T7008T</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">$2,780.00</span></span>
                                </li>
                            </ul>
                        </aside></li>
                 
                </ul>
               



            </ul>
     </div>

</div>
</div> 
  
</nav>

<section class="canvas" id="canvas">
  <div id="page" class="hfeed site"> 
    <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a> 
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
  <div class="top-bar hidden-md-down top-container">
    <div class="container">
      <nav>
        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
          <li class="menu-item animate-dropdown"><a  href="{{getenv('APP_URL')}}"><span class="only-desktop">Moretolike.com - Your online shopping experience - </span>Download our App &nbsp;  </a> <a href="#"><img src="/images/apple.png" title="Apple Play Store" alt="" style="width: 15px;" /> </a>  <a href="#"><img src="/images/playstore.png" alt=""  title="Google Play Store" style="width: 15px;" /> </a></li>
        </ul>
      </nav>
      <nav>
        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
          <!--New-->

          <li class="menu-item animate-dropdown"><a title="Store Locator" href="/my-collections"><span class="topic"><img src="https://moretolike.com/images/add-clooection.png" style="width: 15px;"></span> My Collection</a></li>

          <li class="menu-item animate-dropdown">
            <a title="Store Locator" href="/my-likes">
            <i class="ec ec-favorites"></i> My Loved Products</a></li>

          <li class="menu-item animate-dropdown"><a title="Compare" href="/compare"><i class="ec ec-compare">
            @if($compare_count > 0)
              <span class="value1 compare_added">{{$compare_count}}</span>
            @else
              <span class="value1 compare_added hidden">{{$compare_count}}</span>
            @endif
          </i> Compare</a></li>

        
          <li class="menu-item animate-dropdown"><a title="Shop" href="/my-notifications">
            <i class="fa fa-bell">  <!-- <span class="value1">0</span> --></i> Notification</a></li>

          @if(Session::get('user_id'))
          
          
          <li class="menu-item dropdown" style="cursor: pointer;">
              <a class="dropdown-toggle" type="button" data-toggle="dropdown">My Accountss - {{Session::get('f_name')}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="lable"><a href="{{url('/customer')}}">My Account</a></li>
                <li class="lable"><a href="{{url('/my-profile')}}">My Profile</a></li>
              </ul>
          </li>

          <li class="menu-item animate-dropdown"><a title="Shop" href="/logout" ><i class="ec ec-logout"></i>Logout</a></li>
              @else
                 <li class="menu-item animate-dropdown"><a title="Shop" id="login" href="#" data-toggle="modal" data-target="#myModal"><i class="ec ec-shopping-bag"></i>Register Or Sign in</a></li>
              @endif
        </ul>
      </nav>
    </div>
  </div>
  <!-- /.top-bar --> 

          
           

        <!--   @if (session('alert'))
             <b> <div id="alert" style="text-align:center;color: red"  class="alert alert-success">
                  {{ session('alert') }}
              </div></b>
          @endif -->

    </div>
      </div>
            </div>
        </div>
      </div>
    </div>
  </div>
   <div class="row hidden-md-down">
        <div class="col-sm-4"></div>
         <div class="col-sm-4 padt"> <a href="/"><img src="/images/logo-moretolike.png" alt="" /></a> </div>
      </div>
  <!-- Model Close-->
   <div id="sticky-anchor"></div>
   
    <div class="navbardiv" id="sticky">
        <nav class="stickyheader">
      <div class="container">
          <div class="row">
             <div class="col-xs-2 brdrigt"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-user iconcs" ></i></a></div> 
             <div class="col-xs-2 brdrigt"><div class="btn-group dropup">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"> <i class="fa fa-search iconcs" ></i></a>
            <div class="dropdown-menu togalia" >
              <form class="navbar-form" role="search" method="post" action="/search-result">
              {{csrf_field()}}
              <div class="input-group add-on">
                <input name='product_cat' type="hidden">
                <input class="form-control" name="search_value" placeholder="Search for products" id="srch-term" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default btnheght" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
              </form>
            </div>
          </div></div> 
          <div class="col-xs-2"><a href="#"><i class="ec ec-shopping-bag iconcs"></i></a> 
          @if($getTotlaQty > 0)
            <span class="abs"><p class="cart-quantity">{{$getTotlaQty}}</p></span>
          @endif
          </div>
          <div class="col-xs-2 brdrigt"><a href="#"><i class="ec ec-favorites iconcs" ></i></a> <!-- <span class="abs"><p>0</p></span> --></div> 
             <div class="col-xs-2 brdrigt"><a href="/compare" class="nav-link"><img src="https://moretolike.com/images/add-clooection.png" style="margin-top: 2px; width: 15px;"></a> <!-- <span class="abs"><p>0</p></span> --></div> 
            
            <div class="col-xs-2 brdrigt"><a href="#"><i class="ec ec-compare iconcs" ></i></a>
              @if($compare_count > 0)
              <span class="abs compare_added"><p>{{$compare_count}}</p></span>
              @else

                <span class="compare_added abs hidden"><p>{{$compare_count}}</p></span>
              @endif
              
            </div>
           
          </div>
         
      </div>
   </nav>
 </div>
  <!--model 2-->
  <header id="myHeader" class="site-header header header-v1">
    
    <div class="container hidden-md-down ">
      <!--karan-->
     
      <!---karan-->
      <div class="row"> 
        <div class="col-sm-2"></div>
       <div class="primary-nav animate-dropdown col-sm-8">
         <div class="clearfix">
                 <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#default-header">
                        &#9776;
                 </button>
            </div>

            <div class="collapse navbar-toggleable-xs" id="default-header">
                <nav>
                    <ul id="menu-main-menu" class="nav nav-inline yamm">
                    
                       <li class="menu-item animate-dropdown"><a title="" href="#">
                         <img src="/images/small-logo.jpg" width="40" alt="" >
                       </a> </li>
                       <li class="menu-item animate-dropdown">
                        <nav class="app-navbar">
                          <span class="" data-toggle="push" data-target="#sidebar-left" data-distance="250" title="Open left navigation" style="color: black;">
                             <i class="fa fa-bars fsizecl"></i>
                             <i class="fa fa-times hidden" ></i>
                             <a title="Menu" href="javascript:void(0)" style="font-weight: bold; color: #7d7d7d">Menu</a>
                             </span> 
                           
                          </nav>
                       </li>
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown ham-menu-left">
                           <!--  <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown  "><a title="Home v1" href="home.html">Home v1</a></li>
                                <li class="menu-item current-menu-item current_page_item animate-dropdown active"><a title="Home v2" href="home-v2.html">Home v2</a></li>
                                <li class="menu-item animate-dropdown  "><a title="Home v3" href="home-v3.html">Home v3</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item animate-dropdown"><a title="Explore" href="#">Explore</a></li>
                         <li class="menu-item animate-dropdown"><a title="Shop" href="#">Shop</a></li>
                          <li class="menu-item animate-dropdown"><a title="People" href="#">People</a></li>
                           <li class="menu-item animate-dropdown"><a title="Stores" href="#">Stores</a></li>
                            <li class="menu-item animate-dropdown"><a title="My Collection" href="/my-collections">Collection</a></li>
                            <li class="menu-item animate-dropdown"><a title="Brands" href="#">Brands</a></li>
                            <li class="menu-item animate-dropdown"><a title="Blog" href="/blog">Blog</a></li>
                            
                            <li id="signInDropdown" class="menu-item menu-item-has-children animate-dropdown dropdown nav navbar-nav navbar-left">
                            
                             <span id="dropdownMenu1" data-toggle="dropdown" class=""><a href="#"><i class="fa fa-search" style="color: #7d7d7d;"></i></a></span> 
                       
                        <ul class="dropdown-menu right">
                          <li><i class="fa fa-angle-up posit"></i></li>
                          <li style="width: 250px;">
                                <form class="navbar-form form animate-spin" role="form">
                                    <div class="form-group" style="margin-bottom: 1px; padding-bottom: 1px;">
                                      <div class="input-group">
                                          <!--   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span> -->
                                            <!--EMAIL ADDRESS-->
                                            <input id="emailInput" placeholder="Start typing to search..." class="brds" required="">
                                        </div>
                                    </div>
                                 
                                 
                                </form>
                            </li>
                        </ul>
                    </li>
               
                         
                     
                       
                      
                    </ul>
                </nav>
            </div>
        </div>
     
          <div class="col-sm-2">
          <ul class="navbar-mini-cart navbar-nav animate-dropdown nav flip cart_anchor" id="cart_content_top">
                          <li class="nav-item dropdown {{count($cart) > 0 ? 'open' : ''}}" id="open_cart_menu"> <a href="javascript:void(0)" class="nav-link" > <i class="ec ec-shopping-bag"></i>  
                          @if($getTotlaQty > 0)
                          <span class="cart-items-count count" >{{$getTotlaQty}}</span>
                          @endif
                            <span class="cart-items-total-price total-price"><span class="amount amount_total">&#36;{{$getSubTotal}}</span></span> </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart scrollbar addscroll" id="scrollbar">
                              <li><a href="javascript:void(0)" onclick="$(this).parent().parent().parent().removeClass('open')"><i class="fa fa-times circle1"></i> </a><h4 class="shopi">SHOPPING BAG</h4></li>
                               <li><hr></li>
                              <li>
                               
                                <div class="widget_shopping_cart_content" >
                                  <ul class="cart_list product_list_widget " >
                                    @foreach($cart as $key=>$cart)
                                    <li class="mini_cart_item" > <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="removeCart({{$cart->id}},{{$cart->quantity}},{{$cart->price}},{{$getTotlaQty}},{{$getSubTotal}})" id="{{$cart->id}}">×</a> <a href="javascript:void(0)"> <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="{{getenv('URL')}}{{$cart->attributes['img']}}" alt="">{{$cart->name}}&nbsp; </a> <span class="quantity">{{$cart->quantity}} × <span class="amount amount_total">{{$cart->price}}</span></span> </li>
                                    @endforeach
                                  </ul>
                                  <!-- end product list -->
                                  
                                  <p class="total"><strong>Subtotal:</strong> <span class="amount amount_total">${{Cart::getSubTotal()}}</span></p>

                                  <p class="buttons">
                                 <!--   <a class="button btnforall wc-forward" href="/cart">View Cart</a> -->
                                     @if($session != '')
                                    <a class="button checkout wc-forward" href="/checkout">Proceed to Checkout</a>
                                    @else 
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Proceed to Checkout</a>
                                    @endif
                                   </p>
                                </div>
                              </li>
                            </ul>
                          </li>
                        </ul>

</div> 
      </div>
   

      <!-- /.row -->
   <script type="text/javascript">
    $(document).ready(function(){
      $('.brandlogo').click(function (){
        $('ul.readmore').readmore({
          speed: 50,
          collapsedHeight: 300,
          heightMargin: 10,
          moreLink: '<a href="#">Load More[+]</a>',
          lessLink: '<a href="#">Load Less[-]</a>',
          embedCSS: true,
          blockCSS: 'display: block; width: 100%;',
          startOpen: false,

          // callbacks
          blockProcessed: function() {},
          beforeToggle: function(){},
          afterToggle: function(){}
        });
      });
    });
  </script>