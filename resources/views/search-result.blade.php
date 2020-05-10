@include('single-product-sections/header')
<style type="text/css">
    p.close.tooltipClosesingle {
    border: 1px solid #ccc;
    padding: 4px 7px;
    border-radius: 82px;
}
.topic2 {
    float: left;
    margin-right: 3px;
    padding-top: 6px;
}
a.collectioncl {

    color: #7d7d7d !important;

}
</style>
 <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span><a href="javascript:void(0)">Search Result</a></nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            

                            <header class="page-header">

                                @if(isset($search_value))
                                <h1 class="page-title">Search Result: 
                                    {{$search_value}} 
                                </h1>

                                @else
                                 <h1 class="page-title">Search Result</h1>
                                @endif

                                <!-- <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p> -->
                            </header>

                            <div class="shop-control-bar">
                           
                                    <input type="hidden" id="search_value" value="{{$search_value}}">

                                    <input type="hidden" id="product_cat" value="{{$product_cat}}">

                                    <select name="drp_search" id="drp_search" 
                                    class="orderby" onchange="get_search_result();">
                                        <option value="" selected="selected">Select Categaries</option>
                                        <option value="new">Short by Newness</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="price-asc">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                        
                                </nav>
                            </div>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
                                    <br>
                                    <ul class="products columns-3" id="filter_prooduct_list">

                                       <!--  @foreach($searchData as $store_product_list1)
                                         <li class="product">

                                            <a href="javascript:void" style="display: none;">{{$store_product_list1->current_price}}</a>
                                            <b href="javascript:void" style="display: none;">{{$store_product_list1->product_name}}</b>
                                            <i href="javascript:void" style="display: none;">{{$store_product_list1->fk_sub_category_id}}</i>
                
                
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="/product-details/{{$store_product_list1->slug}}" rel="tag">{{$store_product_list1->name}}</a>
                                                            <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$store_product_list1->product_id}}" onclick="compare({{$store_product_list1->product_id}})">Compare</a>
                                                            <span id="added_compare_{{$store_product_list1->product_id}}" style="padding-left: 71px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                                                        </span>
                                                            <a href="/product-details/{{$store_product_list1->slug}}">
                                                            <h3>{{$store_product_list1->product_name }}</h3>
                                                            <div class="product-thumbnail">
                                                                <img data-echo="{{getenv('URL')}}{{ $store_product_list1->product_img}}"
                                                                 src="{{getenv('URL')}}{{$store_product_list1->product_img}}" id="img-responsive_{{$store_product_list1->product_id}}" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;{{$store_product_list1->current_price}}</span></ins>
                                                                    <del><span class="amount">&#036;{{$store_product_list1->mrp}}</span></del>
                                                                </span>
                                                            </span>
                                                            <span class="wrappert"><a rel="" href="" class="button add_to_collection_button">Add To Collection</a><div class="tooltip">Add To Collection</div></span>
                                                            <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCart({{$store_product_list1->product_id}})"><img src="{{ asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                                            
                                                        </div>
                                                        <div class="action-buttons ">
                                      @if($session != '')
                                 <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$store_product_list1->product_id}},{{$session}})"><i class="add_to_wishlist1" id="{{$store_product_list1->product_id}}"></i> Add To Wishlist</a>
                                   @else
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist">Add To Like</a>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
                                    @endif
                                  </div>
                                  <div class="hover-area">
                                 <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javaascript:void(0)" onclick="quickView({{json_encode($store_product_list1->product_id)}})" style="color:white !important;"> Quick View</a></span>
                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach -->
                                        <li class="product" >
                          <div class="product-outer">
                            <div class="product-inner"> 
                                <span class="loop-product-categories">
                                <span class="loop-product-categories">
             
                          <a href="javascript:void(0);" productid="single" class="show-single" data-toggle="tooltip_s3single" data-html="true" title="<div class='tooltip_1'><p  productid='single' style='text-align:right; color: white; font-size: 10px; font-weight: 400; position: absolute;top: 10px;  right: 15px;color:#ffffff' class='close tooltipClosesingle'>x</p>Add this product to your Store you earn 15% on each sale.<br><br>This product is delivered by:<br><span class='undeline'>Superstore</span> <span class='ftrt'> <a href='javascript:void(0)' onclick='addToCollectionConfirm(45, , 0)'>Click to add..</a></span></div>"> </a>
             
                              <span class=""><a href="javascript:void(0);" class="show-single" productid="single">
                                <i class="fa fa-barcode"></i></a></span> &nbsp; <a href="#">My Store</a> 
                              <!--tooltip-->
                              
                              <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_deal_45" onclick="compare(45)">Compare</a>
                                                    <span id="added_compare_deal_45" class="compare-added"><i class="fa fa-check"></i> Added For Compare</span>
                            </span>
                                </span> 
                            <p class="mystorep">Cameras</p>
                                <a href="">
                              <h3>Wireless Audio System Multiroom 360</h3>

                           <div class="product-thumbnail">
                        <img src="https://admin-api.moretolike.com/uploads/fb6445b978ea61446313a6a100a55279.jpg" id="best_seller45" alt="">
                    </div>
                              </a>
                              <div class="price-add-to-cart">
                                <span class="price">
                                    <span class="electro-price" style="position: relative;">
                                        <ins><span class="amount"> $18999</span></ins>
                                        <del style="position:absolute;left:0;top:-14px;"><span class="amount">$19999</span></del>
                                        <span class="amount"> </span>
                                    </span>
                                </span>
                 
                                   <span class="wrappers-sngle"><a href="javascript:void(0)" class="button" onclick="addToCarthome(24,'best_seller')" style="float: right;"><img src="https://moretolike.com/uploads/cart.png"></a><div class="tooltip">Add To Cart</div></span>
                                    <div class="line"></div>
                                    <span>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="add_to_wishlist abca">3</a>

                                        <span class="wrappert-sngle">
                                            <div class="tooltip">Add To Collection</div>
                                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" rel="nofollow" class="collectioncl"><span class="topic2"><img src="https://moretolike.com/images/add-clooection.png" style="width: 12px;"></span>  Collection</a>
                                        </span>
                                                              
                                        </span></div>
                              <!-- /.price-add-to-cart -->
                              <div class="hover-area" style="border: none;">
                               <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="#" style="color:white !important;"> Quick View</a></span>
                              </div>
                            </div>
                            <!-- /.product-inner --> 
                          </div>
                          <!-- /.product-outer --> 
                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- <div class="shop-control-bar-bottom">
                                <form class="form-electro-wc-ppp">
                                    <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
                                </form>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">→</a></li>
                                    </ul>
                                   
                                </nav>
                            </div> -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                    <div id="sidebar" class="sidebar" role="complementary">
                       <!--  <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                    <ul class="show-all-cat">
                                        <li class="product_cat" style="box-shadow:none !important;">
                                        <a data-toggle="collapse" data-target="#demo" href="javascript:void(0)">Show All Categories</a>
                                            <ul id="demo" class="collapse in">
                                            	
                                            	@foreach($sub_category as $row)
                                                	<li class="cat-item"><a href="javascript:void(0)" id="sub_category_{{$row->id}}" onclick="subCategoryFilter(this.id)">{{$row->name}}</a> </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside> -->
                        <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                    <ul class="show-all-cat">
                                        <li class="product_cat"><span class="show-all-cat-dropdown">Show All Categories<span class="child-indicator"></span></span>
                                            <ul style="display: none;">
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>GPS &amp; Navi</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Home Entertainment</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Cameras &amp; Photography</a> <span class="count">(5)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Smart Phones &amp; Tablets</a> <span class="count">(20)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Video Games &amp; Consoles</a> <span class="count">(3)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>TV &amp; Audio</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Gadgets</a> <span class="count">(3)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Car Electronic &amp; GPS</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Accessories</a> <span class="count">(11)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Printers &amp; Ink</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Software</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Office Supplies</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Computer Components</a> <span class="count">(1)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="cat-item current-cat"><a href="product-category.html"><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>Laptops &amp; Computers</a> <span class="count">(13)</span>
                                            <ul class="children" style="display: block;">
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Laptops</a> <span class="count">(6)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Ultrabooks</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Computers</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Mac Computers</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>All in One</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Servers</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Peripherals</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Gaming</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html"><span class="no-child"></span>Accessories</a> <span class="count">(2)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                        <form method="post" action="javascript:void(0)" id="filterForm">
                        <aside class="widget widget_electro_products_filter">
                            <h3 class="widget-title">Filters</h3>
                            <aside class="widget woocommerce widget_layered_nav">
			                <div class="container">
			                    <p>
			                    <label for="amount">Price range:</label>
			                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
			                    </p>

			                    <div id="slider-range"></div>
			                </div>
			            </aside>
			            <aside class="widget woocommerce widget_layered_nav">
			                <h3 class="widget-title">Brands</h3>
			                <ul>
			                    @foreach($brand as $brand)
			                    <li style="">
			                        <input type="checkbox" id="brand_{{$brand->brand_id}}" class="brand_check" name="brand" value="{{$brand->brand_id}}" style="margin-right: 10px">
			                       <label class="count" for="brand_{{$brand->brand_id}}" style="cursor: pointer; margin-bottom: -2.143em">{{$brand->brand_name}}({{$brand->brand_count}})</label></li>
			                    @endforeach
			                </ul>
			            </aside>
			            <aside class="widget woocommerce widget_layered_nav">
			                <h3 class="widget-title">Color</h3>
			                <ul>
			                    @foreach($color as $color)

			                    <li style="">
			                        <input type="checkbox" id="color_check_{{$color->id}}" name="color" value="{{$color->id}}" class="color_check" style="margin-right: 10px">
			                        <label class="count" for="color_check_{{$color->id}}" style="cursor: pointer; margin-bottom: -2.143em">
			                        {{$color->color_name}}</label></li>
			                   @endforeach
			                </ul>
			            </aside>
                        </aside>
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <a href="#"><img src="/images/banner/ad-banner-sidebar.jpg" alt="Banner"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_products">
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
                        </aside>
                      </form>
                      
                    </div>

                </div><!-- .container -->
</div><!-- #content -->
<script type="text/javascript">
    $(document).ready(function (){
        var brands_id = [];
        var colors_id = [];
        $('input[type=checkbox].brand_check').click(function (){
            if(this.checked == true){
                if(!brands_id.includes(this.value) == -1){
                    brands_id.push(this.value);
                }
            }else{
                brands_id.pop(this.value);
            }
            brandFilter(brands_id);
        });

        $('input[type=checkbox].color_check').click(function (){
            if(this.checked == true){
                if(!colors_id.includes(this.value)){
                    colors_id.push(this.value);
                }
            }else{
                
                colors_id.pop(this.value);
                
            }
            colorFilter(colors_id);
        });
    });


    function brandFilter(brand_id_arr) {
        var filter, ul, li, p, i;
        ul = document.getElementById("filter_prooduct_list");
        li = ul.getElementsByTagName("li");

        for (i = 0; i < li.length; i++) {
            p = li[i].getElementsByTagName("p")[0];
            var brand_id = p.innerHTML;
            
            if(brand_id_arr.includes(brand_id)){
                console.log('show');
                li[i].style.display = "";
            }else{
                console.log('hide');
                li[i].style.display = "none";
            }
        }
    }

    function colorFilter(brand_id_arr) {


        console.log('brand_id_arr');
        console.log(brand_id_arr);

        
         $.ajax({
          url:'/color-filter',
          type:'POST',
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          data:{ color:brand_id_arr},
          success:function(result){
            $('#filter_prooduct_list').html(result);
          }
      });


        console.log('brand_id_arr');
        console.log(brand_id_arr);
        
    }

    function subCategoryFilter(sub_category_id){
    	var subCategoryFilter = [];
		var filter, ul, li, i, p;
        ul = document.getElementById("filter_prooduct_list");
        li = ul.getElementsByTagName("li");
		for (i = 0; i < li.length; i++) {
        	p = li[i].getElementsByTagName("i")[0];
        	var subcategory_id = p.innerHTML;
        	
        	console.log(sub_category_id.split('_')['2']);
        	console.log(p.innerHTML);

        	if (p.innerHTML == sub_category_id.split('_')['2']) {
	            console.log(li);
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }

        }
    }


    </script>

@include('layouts/footer')