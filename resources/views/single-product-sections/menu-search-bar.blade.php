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
   <!-- <script>
   	$(document).ready(function(){
   		$("#serchbtn12").click(function(){
   			$("#serachdiv").toggle();
   		});

   	});
   	</script> -->
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
         <!--  <div class="row" id="serachdiv" style="display: none;">
               <div class="col-xs-12">
                <form>
                  <div class="input-group" style="background-color: #fff;border-radius: 8px;">
            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="search_value" placeholder="Search for products" style="height: 52px;border: none;">
            <div class="input-group-addon search-categories" style="background-color: white; border:none;">
              <select name="product_cat" id="product_sub_cat" class="postform resizeselect" style="width: 141px; border:none; ">
                <option value="0" selected="selected">All Categories</option>
                                <option class="level-0" value="1">test</option>
                                <option class="level-0" value="2">Shirts</option>
                                <option class="level-0" value="3">sports</option>
                                <option class="level-0" value="4">books</option>
                                <option class="level-0" value="5">Phones</option>
                                <option class="level-0" value="6">Android</option>
                                <option class="level-0" value="7">Androids</option>
                                <option class="level-0" value="8">comics</option>
                                <option class="level-0" value="9">sub-cat test</option>
                              </select>
            </div>
            <div class="input-group-btn">
            
              <button type="submit" class="btn btn-secondary" style="border-radius: 0px 5px 5px 0px; height: 52px;"><i class="ec ec-search"></i></button>
            </div>
          </div>
                </form>
                  </div>  
          </div> -->
      </div>
   </nav>
       <!--karan 10September/2018-->
    <nav class="navbar navbar-primary navbar-full hidden-md-down">
                <div class="container">
                    <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown ">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                  

                             <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">


                                @foreach($vertical_product_types as $pro_type)    
                                <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="/product-type/{{$pro_type->id}}">{{$pro_type->type}}</a></li>
                                @endforeach


                                @foreach($menu as $menu)
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                                    <a title="Computers &amp; Accessories" href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">{{$menu->menu_name}}</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                </div>
                                                <div class="vc_row row wpb_row vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            @for($i=0;$i<(count($category));$i++)
                                                                                @if($menu->id == $category[$i]->menu_id)
                                                                                    <li class="nav-title">{{$category[$i]->category_name}}</li>

                                                                                    @for($j=0;$j<(count($sub_category));$j++)

                                                                                        @if($sub_category[$j]->category_id == $category[$i]->id && $sub_category[$j]->menu_id == $menu->id)

                                                                                            <li><a href="/category-product/{{$sub_category[$j]->id}}">{{$sub_category[$j]->name}}</a></li>
                                                                                        @endif
                                                                                    @endfor
                                                                                @endif
                                                                            @endfor
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                @endforeach
                            </ul>


                             
                        </li>
                    </ul>
                    <form class="navbar-search" method="post" action="/search-result">
                        {{csrf_field()}}
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            @if(isset($search_value))

                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="{{$search_value}}" name="search_value" placeholder="Search for products" />

                            @else

                             <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="search_value" placeholder="Search for products" />

                            @endif

                            <div class="input-group-addon search-categories">
                                <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                    <option value='0' selected='selected'>All Categories</option>
                                    @foreach($sub_category as $sub_cat)
                                        <option class="level-0" value="{{$sub_cat->id}}" 
                                            <?php  echo  (isset($product_cat) && ($product_cat == $sub_cat->id) ) ? 'selected' : ''; ?> >{{$sub_cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
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
                                <span class="cart-items-total-price total-price"><span class="amount amount_total">&#36;{{$getSubTotal}}</span></span>
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

                                                <span class="quantity">{{$cart->quantity}} × <span class="amount amount_total">${{$cart->price}}</span></span>
                                            </li>
                                          @endforeach
                                        </ul><!-- end product list -->


                                        <p class="total"><strong>Subtotal:</strong> <span class="amount amount_total">${{Cart::getSubTotal()}}</span></p>


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

                  <!--   <ul class="navbar-wishlist nav navbar-nav pull-right flip" id="header-wishlist">
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