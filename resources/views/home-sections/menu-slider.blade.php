

</div>

<div class="container hidden-lg-up">
   
<div class="handheld-header">

<!-- small header nav bar    -->

<div class="row">
 <div class="col-xs-2">
   <nav class="app-navbar navbar-top-padding">
   <span class="" data-toggle="push" data-target="#sidebar-left" data-distance="250" title="Open left navigation" style="color: black;">
      <i class="fa fa-bars fsizecl"></i>
        <i class="fa fa-times hidden" ></i>   
    </span> 
  </nav>
 </div>
 <!-- small header  logo    -->
 <div class="col-xs-7" style="text-align: center;">
   <div class="header-logo">
  <a href="#"  class="header-logo-link"><img src="/images/logo-moretolike.png" alt="" /></a>
</div>
 </div> 
 <!-- small header  cart    -->
 <div class="col-xs-3">
   <ul class="navbar-mini-cart navbar-nav animate-dropdown nav flip cart_anchor" id="cart_content_bottom">
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


<!--  Header Logo : End -->

<!-- Header Logo Karan-->

<!-- Header Logo Karan-->


<!-- Header Cart Karan-->
</div>
</div>

</header><!-- #masthead -->

<div class="container hidden-sm-down">
</div>
<div class="row">
  <div class="col-xs-12 col-lg-3">

  </div>


</div>
