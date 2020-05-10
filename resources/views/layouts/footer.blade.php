<style type="text/css">
  .fa-heart{
    color: red;
  }
</style>
  <div class="footer-newsletter">
        <div class="container">
              <div class="row">
                    <div class="col-xs-12 col-sm-6">
                          <h5 class="newsletter-title">Sign up to Newsletter</h5>
                          <span class="newsletter-marketing-text">...and receive <strong>$20 coupon for first shopping</strong></span>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                          <form method="get" action="{{getenv('APP_URL')}}/user-register">
                                <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Enter your email address">
                                      <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="submit">Sign Up</button>
                                      </span>
                                </div>
                          </form>
                    </div>
              </div>
        </div>
  </div>

  <div class="footer-bottom-widgets">
        <div class="container">
              <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-md-push-6">
                          <div class="columns">
                                <aside id="nav_menu-2" class="widget clearfix widget_nav_menu">
                                      <div class="body">
                                            <h4 class="widget-title">Find It Fast</h4>

              <div class="menu-footer-menu-1-container">
                    <ul id="menu-footer-menu-1" class="menu">
                          @foreach($category as $row)
                          @if($row->id <= 8)
                          <li class="menu-item"><a href="{{getenv('APP_URL')}}/category-product/{{$row->id}}">{{$row->category_name}}</a></li>
                          @endif
                          @endforeach
                    </ul>
              </div>
                                      </div>
                                </aside>
                          </div><!-- /.columns -->

                          <div class="columns">
                                <aside id="nav_menu-3" class="widget clearfix widget_nav_menu">
              <div class="body">
                    <h4 class="widget-title">&nbsp;</h4>
                    <div class="menu-footer-menu-2-container">
                          <ul id="menu-footer-menu-2" class="menu">
                          @foreach($category as $row)
                          @if($row->id > 8 && $row->id < 16)
                          <li class="menu-item"><a href="{{getenv('APP_URL')}}/category-product/{{$row->id}}">{{$row->category_name}}</a></li>
                          @endif
                          @endforeach
                          </ul>
                    </div>
              </div>
                                </aside>
                          </div><!-- /.columns -->

                          <div class="columns">
                                <aside id="nav_menu-4" class="widget clearfix widget_nav_menu">
                                      <div class="body">
                                            <h4 class="widget-title">Customer Care</h4>
                                            <div class="menu-footer-menu-3-container">
                                                  <ul id="menu-footer-menu-3" class="menu">
                                                        @if($session != '')
                                                        <li class="menu-item"><a href="/customer">My Account</a></li>
                                                        @endif
                                                        <li class="menu-item"><a href="/cart">Cart</a></li>
                                                        <li class="menu-item"><a href="/wishlist">Wishlist</a></li>
                                                        <li class="menu-item"><a href="/order-summary">My Orders</a></li>
                                                        <li class="menu-item"><a href="/compare">Comapre</a></li>
                                                        <li class="menu-item"><a href="{{getenv('APP_URL')}}/faq">FAQs</a></li>
                                                        <li class="menu-item"><a href="{{getenv('APP_URL')}}/product-support">Product Support</a></li>
                                                  </ul>
                                            </div>
                                      </div>
                                </aside>
                          </div><!-- /.columns -->

                    </div><!-- /.col -->

                    <div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
                          <div class="footer-logo">
                               <a href="/"> <img src="/images/logo-moretolike.png" alt="more-to-like-logo"></a>
                          </div><!-- /.footer-contact -->

                          <div class="footer-call-us">
                                <div class="media">
                                      <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                                      <div class="media-body">
                                            <span class="call-us-text">Got Questions ? Call us 24/7!</span>
                                            <span class="call-us-number"><a href="call:(800) 8001-8588">(800) 8001-8588</a>, <a href="call:(0600) 874 548">(0600) 874 548</a></span>
                                      </div>
                                </div>
                          </div><!-- /.footer-call-us -->


                          <div class="footer-address">
                                <strong class="footer-address-title">Contact Info</strong>
                                <address><a href="https://www.google.com/search?q=17 Princess Road, London, Greater London NW1 8JR, UK" target="_blank">17 Princess Road, London, Greater London NW1 8JR, UK </a></address>
                          </div><!-- /.footer-address -->

                          <div class="footer-social-icons">
                                <ul class="social-icons list-unstyled">
                                      <li><a class="fa fa-facebook" href="https://www.facebook.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-twitter" href="https://www.twitter.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-pinterest" href="https://www.pinterest.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-linkedin" href="https://www.linkedin.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-google-plus" href="https://www.plus.google.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-tumblr" href="https://www.tumblr.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-instagram" href="https://www.instagram.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-youtube" href="https://www.youtube.com/moretolike" target="_blank"></a></li>
                                      <li><a class="fa fa-rss" href="https://www.rss.com/moretolike" target="_blank"></a></li>
                                      </ul>
                          </div>
                    </div>

              </div>
        </div>
  </div>

  <div class="copyright-bar">
        <div class="container">
              <div class="pull-left flip copyright">&copy; <a href="https://moretolike.com/">MoreToLike</a> - All Rights Reserved</div>
              <div class="pull-right flip payment">
                    <img src="https://demo2.madrasthemes.com/electro/wp-content/uploads/2017/02/patment-icon.png">
                    <!-- <div class="footer-payment-logo">
                          <ul class="cash-card card-inline">
                                <li class="card-item"><img src="{{ asset('images/footer/payment-icon/1.png') }}" alt="" width="52"></li>
                                <li class="card-item"><img src="{{ asset('images/footer/payment-icon/2.png') }}" alt="" width="52"></li>
                                <li class="card-item"><img src="{{ asset('images/footer/payment-icon/3.png') }}" alt="" width="52"></li>
                                <li class="card-item"><img src="{{ asset('images/footer/payment-icon/4.png') }}" alt="" width="52"></li>
                                <li class="card-item"><img src="{{ asset('images/footer/payment-icon/5.png') }}" alt="" width="52"></li>
                          </ul>
                    </div> --><!-- /.payment-methods -->
                    </div>
              </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
  </footer><!-- #colophon -->

</div>
</section>
<!-- #page -->
<!-- <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip " >
<div class="cart-btn1"><span class="nmbr1 cart_anchor" id="cart_content1"><a href="#"><img src="{{ asset('images/cart.png') }}" width="70" height="70" > </a></span><span class="nmbr2" id="sticky-cart-count">{{$getTotlaQty}}</span></div>
</ul> -->

<!-- dynamic cart -->
<div class="cart-btn1" style="background: transparent;">
<ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip " >
<li class="nav-item dropup">
    <!-- for menu -->
    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">
          <div class="">
                <span class="nmbr1 cart_anchor" id="cart_content1">
                      <!-- <img src="{{ asset('images/cart.png') }}" width="70" height="70" > -->
                </span>
                <!-- <span class="nmbr2" id="sticky-cart-count">{{$getTotlaQty}}</span> -->
          </div>
    </a>
    <!-- /for menu -->
    <!-- for menu content -->
    <ul class="dropdown-menu" style="width: 350px;left: auto;right: 0;padding: 2.2em 2.2em 1.2em 2.2em;border-radius: 0; box-shadow: 0px 0px 6px 0px rgba(1, 1, 1, 0.3);border: none;">
          <li>
          <div class="widget_shopping_cart_content" id="cart_content_dynamic">

              <ul class="cart_list product_list_widget " id="cart_list_dynamic" style="height: 200px;overflow-y: auto;">
                  @foreach($cart as $key=>$cart)
                  
                  <li class="mini_cart_item">
                      <a title="Remove this item" class="remove" href="javascript:void(0)" onclick="removeCart({{$cart->id}},{{$cart->quantity}},{{$cart->price}},{{$getTotlaQty}},{{$getSubTotal}})" id="{{$cart->id}}">×</a>
                      <a href="javascript:void(0)">
                          <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="{{getenv('URL')}}{{$cart->attributes['img']}}" alt="">{{$cart->name}}&nbsp;
                      </a>

                      <span class="quantity">{{$cart->quantity}} × <span class="amount">${{$cart->price}}</span></span>
                  </li>
                @endforeach
              </ul><!-- end product list -->


              <!-- <p class="total"><strong>Subtotal:</strong> <span class="amount">${{Cart::getSubTotal()}}</span></p> -->


              <p class="buttons">
                  <a class="button btnforall wc-forward" href="/cart">View Cart</a>
                   @if($session != '')
                  <a class="button btnforall checkout wc-forward" href="/checkout">Checkout</a>
                    @else 
                       <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Checkout</a>
                   @endif
              </p>


          </div>
          </li>
          </ul>
    <!-- /for menu content -->

<div class="modal fade product_view " id="product_view" style=" margin: auto; top:90px;" >
<div class="modal-dialog" id="quick_view">

</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px;background-color: #000;width: 30px; margin: 0px;"> ×</button>  -->
<div class="modal-dialog modal-md">
<div class="modal-content" style="width: 90%!important; margin: auto;">
<div class="fulldivinsta"><a href="javascript:void(0)" onclick="instagramLogin();"><img src="/images/insta.png" alt="" style="width: 100%" /></a></div>
<!-- <div class="ordiv">Or</div> -->
<div class="modal-header" style="background-color:#3a5795; min-height:130px;">
   <p style="text-align:right; color: white; font-size: 18px; font-weight: 400; position: absolute;top: 10px;
right: 10px;
color: #ffffff;
border: 1px solid #fff;
padding: 5px 11px 7px 10px;
border-radius: 100%;"  class="close" data-dismiss="modal" aria-hidden="true">x</p>
  <h4 class="modal-title" id="myModalLabel">
    <div style="text-align:center;padding-top: 20px;"><a href="javascript:void(0);" onclick="fbLogin()" id="fbLink" class="fb btn"> <i class="fa fa-facebook fa-fw"></i> Login with Facebook </a></div>
  </h4>
</div>
<div class="modal-body" >
  <div class="row">
      <div class="col-md-12"> 
        <!-- Nav tabs -->
          <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
              <h3 style="text-align:center;">Log In with your credentials</h3>
              <p style="text-align:center;">or  <a href="/user-register">Create an account</a></p>

                                             
          </ul><!-- Tab panes -->
    <!--     login -->
    <div class="tab-content">
      <div class="tab-pane active" id="tab-accessories">
        <form role="form" class="form-horizontal"  action = "javascript:void(0)" method="post">
          <div class="form-group login-moretolike">
                  {{csrf_field()}}
           <!--  <label for="email" class="col-sm-3 control-label"> Email <span style="color: red">*</span></label> -->
            <div class="col-sm-12">
              <input type="email" class="form-control" id="login_email" placeholder="Email" name="email" required />
            </div>
          </div>
          <div class="form-group">
           <!--  <label for="password" class="col-sm-3 control-label"> Password <span style="color: red">*</span></label> -->
            <div class="col-sm-12">
              <input type="password" class="form-control" id="login_password" placeholder="Password" name="password" required/>
            </div>
          </div>
           <div class="form-group">
              <div class="col-sm-12" >
              <button type="submit" class="btnsilver" onclick="login();" style="width: 100%;" > Sign in</button>
             
            </div> 
           </div>
          <div class="form-group">
        <div class="col-sm-6" > <label>
          <input type="checkbox" name="checkbox" id="checkbox">
        </label>  <b>Remeber Me</b></div>
            <div class="col-sm-6" style="text-align: right; padding-top: 13px;"> <a href="/customer/forget-pass">Forgot your password?</a> <!--  <a href="/user-register">User SignUP</a> --></div>
            <!-- <div class="col-sm-6" style="text-align:left;">  </div> -->
          </div>
        
        </form>
      </div>

      <!-- user registration  --> 

       
     
</div>
      </div>
</div>
</div></div></div></div>
<!--New Modal Kaaran -->

<div id="myModalbtn123" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content" style="width: 300px!important;margin-top: 250px!important; margin: auto;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Choose Collection</h4>
    </div>
    <div class="modal-body row">
    <span class="col-xs-12" style="text-align: center; margin-bottom: 20px;"><button type="button" class="btn btn-default">Add To Collection</button></span>
    <span class="col-xs-12" style="text-align: center; margin-bottom: 20px;"> <button type="button" class="btn btn-default">Add To Store</button></span>
    </div>
   <!--  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div> -->
  </div>

</div>
</div>
</div>
</div>
</div></div>
<!-- new Modal karan-->
<!-- <link rel="stylesheet" type="text/css" href="https://moretolike.com/css/style_cart.css" media="all" /> -->


<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/echo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="/js1/push.js"></script>
<script src="/js1/application.js"></script>


<!-- product image  -->
<!-- CSS STYLE-->
<link rel="stylesheet" href="{{ asset('css/xzoom.css') }}">

<!-- XZOOM JQUERY PLUGIN  -->
<script src="{{ asset('js/xzoom.min.js') }}"></script>

<script type="text/javascript">
$(document).ready(function (){
  $(".xzoom").xzoom();
});
</script>
<!-- product image  -->

<!-- <script type="text/javascript" src="{{ asset('js/jquery.twbsPagination.js') }}"></script> -->



<!-- added for pagignate -->
<link rel="stylesheet" href="{{ asset('css/pag.css') }}">

<script type="text/javascript" src="{{ asset('js/paginate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<!-- added for pagignate -->
<script>
$('aside .widget.woocommerce ul').readmore({
speed: 50,
collapsedHeight: 300,
heightMargin: 16,
moreLink: '<a href="#">More[+]</a>',
lessLink: '<a href="#">Less[-]</a>',
embedCSS: true,
blockCSS: 'display: block; width: 100%;',
startOpen: false,

// callbacks
blockProcessed: function() {},
beforeToggle: function(){},
afterToggle: function(){}
});


</script>

<script type="text/javascript">


$(document).ready( function() {
  $('#myCarousel').carousel({
  interval:   4000
});

var clickEvent = false;
$('#myCarousel').on('click', '.nav a', function() {
    clickEvent = true;
    $('.nav li').removeClass('active');
    $(this).parent().addClass('active');    
}).on('slid.bs.carousel', function(e) {
  if(!clickEvent) {
    var count = $('.nav').children().length -1;
    var current = $('.nav li.active');
    current.removeClass('active').next().addClass('active');
    var id = parseInt(current.data('slide-to'));
    if(count == id) {
      $('.nav li').first().addClass('active');  
    }
  }
  clickEvent = false;
});
});
</script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- Your share button code -->

<script type="text/javascript" src="{{ asset('js/electro.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>  -->
@if($_SERVER['REQUEST_URI'] == '/')
<script type="text/javascript">
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
if (window.pageYOffset > sticky) {
  header.classList.add("sticky");
} else {
  header.classList.remove("sticky");
}
}
</script>


@endif


<script type="text/javascript">
function shareOnFacebook(id) {
    var title = $('.name_'+id).html();
    var img = $('.img_'+id).attr('src');
    window.open('https://www.facebook.com/sharer.php?title='+title+'&description='+title+'&u=https://moretolike.com/store-details/'+id+'&picture='+img, 'Share', 'scrollbars=yes,resizable=yes,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no,width=300, height=300, top=300, left=300' );
  }
</script>


<script>
$(document).ready(function (){
  /*window.fbAsyncInit = function() {
      // FB JavaScript SDK configuration and setup
      FB.init({
        appId      : '233230897373833', // FB App ID
        cookie     : true,  // enable cookies to allow the server to access the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
      });
      
      // Check whether the user already logged in
      FB.getLoginStatus(function(response) {
          console.log('response');
          console.log(response);
          if (response.status === 'connected') {
              //display user data
              getFbUserData();
          }
      });
  };*/
   $(".show-tt").click(function(){
    var productid = $(this).attr('productid');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip"+productid+"']").tooltip('toggle');
  });
    $(document).on('click','.tooltipClose',function(){
    var productid = $(this).attr('productid');
     $("[data-toggle='tooltip"+productid+"']").tooltip('toggle');
   });

    $(".show-tt1").click(function(){
    var productid = $(this).attr('productid');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip_s"+productid+"']").tooltip('toggle');
    });
    $(document).on('click','.tooltipClose1',function(){
      var productid = $(this).attr('productid');
       $("[data-toggle='tooltip_s"+productid+"']").tooltip('toggle');
     });
    
    $(".show-tt2").click(function(){
    var productid = $(this).attr('productid');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip_s1"+productid+"']").tooltip('toggle');
  });
  
    $(document).on('click','.tooltipClose2',function(){
    var productid = $(this).attr('productid');
     $("[data-toggle='tooltip_s1"+productid+"']").tooltip('toggle');
   });
    $(".show-tt3").click(function(){
    var productid = $(this).attr('productid');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip_s2"+productid+"']").tooltip('toggle');
  });
  
    $(document).on('click','.tooltipClose3',function(){
    var productid = $(this).attr('productid');
     $("[data-toggle='tooltip_s2"+productid+"']").tooltip('toggle');
   });
     $(".show-tt4").click(function(){
    var productid = $(this).attr('productid');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip_s3"+productid+"']").tooltip('toggle');
  });
  
    $(document).on('click','.tooltipClose4',function(){
    var productid = $(this).attr('productid');
     $("[data-toggle='tooltip_s3"+productid+"']").tooltip('toggle');
   });
     $(".show-single").click(function(){
    var productid = $(this).attr('productid');
    //console.log('sds');
  //  alert("[data-toggle="tooltip+productid+"]");
   $("[data-toggle='tooltip_s3"+productid+"']").tooltip('toggle');
  });
  
    $(document).on('click','.tooltipClosesingle',function(){
    var productid = $(this).attr('productid');
     $("[data-toggle='tooltip_s3"+productid+"']").tooltip('toggle');
   });
});

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
  FB.init({
        appId      : '233230897373833', // FB App ID
        cookie     : true,  // enable cookies to allow the server to access the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
      });
      
      // Check whether the user already logged in
      FB.getLoginStatus(function(response) {
          console.log('response.authResponse');
          console.log();
          if (response.status === 'connected') {
              //display user data
              getFbUserData();
          }
      });
  FB.login(function (response) {
      if (response.authResponse) {
          // Get and display the user profile data
          getFbUserData();
      } else {
          document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
      }
  }, {scope: 'email'});
}

function getFbUserFeed(){
  FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
  function (response) {
      document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
      document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
      document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
  });
}

// Logout from facebook
function fbLogout() {
  FB.logout(function() {
      document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
      document.getElementById('fbLink').innerHTML = '<img src="http://demos.codexworld.com/login-with-facebook-using-javascript-sdk/fblogin.png"/>';
      document.getElementById('userData').innerHTML = '';
      document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
  });
}

function getFbUserData(){
  FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
  function (response) {
      var access_token = '';
      FB.getLoginStatus(function(response) {
          if (response.status === 'connected') {
              access_token = response.authResponse.accessToken;
          }
      });

      $.ajax({
        url:'/facebook-login',
        type:'POST',
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        data:{ email:response.email, access_token:access_token},
        success:function(result){
          console.log(result);
          if(result == 'success'){

            var pathname = window.location.pathname;

              if(pathname == '/user-register')
                {
                window.location.href= 'https://'+window.location.hostname+'/customer';
                }else{

                  window.location.href=pathname;
                }
            
              }else{

              $('#error_login').html(result);
              $('#login_password').val('');
              }
            }
    });

      console.log('response');
      console.log(response);
      /*document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
      document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
      document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';*/
      
      // Save user data
      //saveUserData(response);
  });
}
</script>
<!-- for instagram -->

<script type="text/javascript">
  // Access token is required to make any endpoint calls,
  // http://instagram.com/developer/endpoints/
  var accessToken = null;
  var authenticateInstagram = function(instagramClientId, instagramRedirectUri, callback) {
      // Pop-up window size, change if you want
      var popupWidth = 700,
          popupHeight = 500,
          popupLeft = (window.screen.width - popupWidth) / 2,
          popupTop = (window.screen.height - popupHeight) / 2;
      // Url needs to point to instagram_auth.php
      var popup = window.open('https://instagram.com/oauth/authorize/?client_id='+instagramClientId+'&redirect_uri='+instagramRedirectUri+'&response_type=token', '', 'width='+popupWidth+',height='+popupHeight+',left='+popupLeft+',top='+popupTop+'');
      popup.onload = function() {
          // Open authorize url in pop-up
          if(window.location.hash.length == 0) {
              popup.open('https://instagram.com/oauth/authorize/?client_id='+instagramClientId+'&redirect_uri='+instagramRedirectUri+'&response_type=token', '_self');
          }
          // An interval runs to get the access token from the pop-up
          var interval = setInterval(function() {
              try {
                  // Check if hash exists
                  if(popup.location.hash.length) {
                      // Hash found, that includes the access token
                      clearInterval(interval);
                      accessToken = popup.location.hash.slice(14); //slice #access_token= from string
                      popup.close();
                      
                      loginInstaMoretolike(accessToken)
                      
                      if(callback != undefined && typeof callback == 'function'){
                          login_callback(accessToken);
                      }
                  }
              }
              catch(evt) {
                  // Permission denied
              }
          }, 100);
      };
  };

  function loginInstaMoretolike(accessToken){
    $.ajax({
        url:'/instagram-login',
        type:'POST',
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        data:{ access_token:accessToken},
        success:function(result){
          console.log(result);
          if(result == 'success'){

            var pathname = window.location.pathname;

              if(pathname == '/user-register')
                {
                window.location.href= 'https://'+window.location.hostname+'/customer';
                }else{

                  window.location.href=pathname;
                }
            
              }else{

              $('#error_login').html(result);
              $('#login_password').val('');
              }
            }
    });
  }

  function login_callback(accessToken){
      //alert("You are successfully logged in! Access Token: "+accessToken);
      $.ajax({
          type: "GET",
          dataType: "jsonp",
          url: "https://api.instagram.com/v1/users/self/?access_token="+accessToken,
          success: function(response){
              // Change button and show status
              $('.instagramLoginBtn').attr('onclick','instagramLogout()');
              $('.btn-text').text('Logout from Instagram');
              $('#status').text('Thanks for logging in, ' + response.data.username + '!');
              
              // Display user data
              displayUserProfileData(response.data);
              
              // Save user data
              saveUserData(response.data);
              
              // Store user data in sessionStorage
              sessionStorage.setItem("userLoggedIn", "1");
              sessionStorage.setItem("provider", "instagram");
              sessionStorage.setItem("userData", JSON.stringify(response.data));
          }
        });
  }

  // Authenticate instagram
  function instagramLogin() {
      /*window.open("https://www.google.com", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");*/
      authenticateInstagram(
          '4b338f5af16a45c7ae1473f2cdbc886d',
          'https://www.moretolike.com/'
      );
      return false;
  }

  // Save user data to the database
  function saveUserData(userData){
      $.post('userData.php', {oauth_provider:'instagram',userData: JSON.stringify(userData)}, function(data){ return true; });
  }

  // Display user profile details
  function displayUserProfileData(userData){
      $('#userData').html('<p><b>Instagram ID:</b> '+userData.id+'</p><p><b>Name:</b> '+userData.full_name+'</p><p><b>Picture:</b> <img src="'+userData.profile_picture+'"/></p><p><b>Instagram Profile:</b> <a target="_blank" href="https://www.instagram.com/'+userData.username+'">click to view profile</a></p>');
  }
  // Get user data from session storage
  $(document).ready(function(){
      if(typeof(Storage) !== "undefined"){
          var userLoggedIn = sessionStorage.getItem("userLoggedIn");
          if(userLoggedIn == '1'){
              // Get user data from session storage
              var provider = sessionStorage.getItem("provider");
              var userInfo = sessionStorage.getItem("userData");
              var userData = $.parseJSON(userInfo);
              
              // Change button and show status
              $('.instagramLoginBtn').attr('onclick','instagramLogout()');
              $('.btn-text').text('Logout from Instagram');
              $('#status').text('Thanks for logging in, ' + userData.username + '!');
              
              // Display user data
              displayUserProfileData(userData);
          }
      }else{
          console.log("Sorry, your browser does not support Web Storage...");
      }
  });

  // Logout from instagram
  function instagramLogout() {
      // Remove user data from sessionStorage
      sessionStorage.removeItem("userLoggedIn");
      sessionStorage.removeItem("provider");
      sessionStorage.removeItem("userData");
      sessionStorage.clear();
      
      $('.instagramLoginBtn').attr('onclick','instagramLogin()');
      $('.btn-text').text('Login with Instagram');
      $('#status').text('You have successfully logout from Instagram.');
      $('#userData').html('');
  }

  function addToCollectionConfirm(product_id, customer_id, is_shareable){
    if(is_shareable == 0){
    var msg = '<div style="text-align:center"><hr> <a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }else{
  	var msg = '<div style="text-align:center"><a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyStoreHome('+product_id+')">Add to my Store Collection</a><br><hr> <a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }
    bootbox.alert(msg);
    $('div.modal-content').css('top', '80px');
  }
</script>

<!-- for instagram -->



<!-- for every page search -->

<style type="text/css">
    #product_serach {
        background-image: url('https://www.w3schools.com/css/searchicon.png'); /* Add a search icon to input */
        background-position: 10px 12px; /* Position the search icon */
        background-repeat: no-repeat; /* Do not repeat the icon image */
        width: 100%; /* Full-width */
        font-size: 16px; /* Increase font-size */
        padding: 12px 20px 12px 40px; /* Add some padding */
        border: 1px solid #ddd; /* Add a grey border */
        margin-bottom: 12px; /* Add some space below the input */
    }
</style>
<script type="text/javascript">
    function productSearch() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById('product_serach');
        filter = input.value.toUpperCase();
        ul = document.getElementById("filter_prooduct_list");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("b")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
<!-- for every page serach -->

<!-- category sort -->
<script type="text/javascript">
  function shortProduct(subcategory_id, tag_name){

    /*functionality started from here*/
    var filter, ul, li, a, i;
    ul = document.getElementById(tag_name);
    filter = subcategory_id;
    li = ul.getElementsByClassName(tag_name);
    for (i = 0; i < li.length; i++) {
          
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].parentElement.style.display = "";
          } else {
              li[i].parentElement.style.display = "none";
          }  
          if(filter == '*'){
            li[i].parentElement.style.display = "";
          }
      }
    /*functionality stopped from here*/
  }
</script>
<!-- category sort -->


<script type="text/javascript">
  function addToCollectionWithCategory(product_id, customer_id, is_shareable){
    if(is_shareable == 0){
    var msg = '<div style="text-align:center"><hr> <a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }else{
    var msg = '<div style="text-align:center"><a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyStoreHome('+product_id+')">Add to my Store Collection</a><br><hr> <a href="javascript:void(0)" class="btn btn-primary" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }
    bootbox.alert(msg);
    $('div.modal-content').css('top', '80px');
  }
  var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;
var headerHeight = $('#myHeader').innerHeight();
var pageHeight = $('#page').innerHeight();
var logoHeight = $('.hidden-md-down').innerHeight();
var totalHegiht = headerHeight+pageHeight+logoHeight;
//console.log();
$('.addscroll').css({'max-height': windowHeight-totalHegiht,'overflow-y': 'scroll'});
//alert('viewport width is: '+ windowWidth + ' and viewport height is:' + windowHeight);
</script>
<style type="text/css">
  div.nav-side-menu.wdth{
    background: #7d7d7d;
  }
</style>
</body>
</html>
