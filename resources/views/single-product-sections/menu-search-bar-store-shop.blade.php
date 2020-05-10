   <!--karan 10September/2018-->
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
   
   <div id="sticky-anchor"></div>
   
    <div class="navbardiv" id="sticky">
        <nav class="stickyheader">
      <div class="container">
               <div class="row">
             <div class="col-xs-2 brdrigt"><a href="#"><i class="fa fa-user iconcs" ></i></a></div> 
             <div class="col-xs-2 brdrigt"><div class="btn-group dropup">
              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"> <i class="fa fa-search iconcs" ></i></a>
          <div class="dropdown-menu togalia" >
              <form class="navbar-form" role="search">
              <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default btnheght" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
              </form>
            </div>
          </div></div> 
          <div class="col-xs-2"><a href="#"><i class="ec ec-shopping-bag iconcs"></i></a> <span class="abs"><p>0</p></span></div>
          <div class="col-xs-2 brdrigt"><a href="#"><i class="ec ec-favorites iconcs" ></i></a> <span class="abs"><p>0</p></span></div> 
             <div class="col-xs-2 brdrigt"><a href="/compare" class="nav-link"><img src="https://moretolike.com/images/add-clooection.png" style="margin-top: 2px; width: 15px;"></a> <span class="abs"><p>0</p></span></div> 
            
            <div class="col-xs-2 brdrigt"><a href="#"><i class="ec ec-compare iconcs" ></i></a><span class="abs"><p>0</p></span></div>
           
          </div>
   </nav>
       <!--karan 10September/2018-->
    <nav class="navbar navbar-primary navbar-full hidden-md-down">
                <div class="container">
                    <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown "><a class="nav-link storec">Store Directory</a></li>
                    </ul>
                    <form class="navbar-search" method="post" action="/search-result">
                        {{csrf_field()}}
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            @if(isset($search_value))

                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="{{$search_value}}" name="search_value" placeholder="Search for products" />

                            @else

                             <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="search_value" placeholder="Find your favourite store at moretolike.com" />

                            @endif

                           
                            
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>

            <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip cart_anchor"  id="cart_content">
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">
                                <i class="ec ec-shopping-bag"></i>
                                <span class="cart-items-count count">{{$getTotlaQty}}</span>
                                <span class="cart-items-total-price total-price"><span class="amount">&#36;{{$getSubTotal}}</span></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget_shopping_cart_content" id="cart_content">

                                        <ul class="cart_list product_list_widget " id="cart_list" style="height: 200px;overflow-y: auto;">
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


                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">${{Cart::getSubTotal()}}</span></p>


                                        <p class="buttons">
                                            <a class="button btnforall wc-forward" href="/cart">View Cart</a>
                                             @if($session != '')
                                            <a class="button checkout wc-forward" href="/checkout">Checkout</a>
                                              @else 
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="button checkout wc-forward">Checkout</a>
                                             @endif
                                        </p>


                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
              
                 
                   <!--  <ul class="navbar-wishlist nav navbar-nav pull-right flip" id="header-wishlist">
                       
                        <li class="nav-item">
                            <a href="/wishlist" class="nav-link"><i class="ec ec-favorites"></i><span class="cart-items-count count1">{{$wishlistCount}}</span></a>
                        </li>
                    </ul>
                    <ul class="navbar-compare nav navbar-nav pull-right flip" id="header-comapre">
                          <li class="nav-item">
                             <a href="/compare" class="nav-link"><img src="https://moretolike.com/images/add-clooection.png" style="height: 20px;margin-top: 6px;"></a>
                        </li>
                        <li class="nav-item">
                            <a href="/compare" class="nav-link"><i class="ec ec-compare"></i><span class="cart-items-count count1">{{$compare_count}}</span></a>
                        </li>
                    </ul> -->
                </div>
            </nav>
</div>