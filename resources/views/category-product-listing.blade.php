@include('single-product-sections/header')
<div id="content" class="site-content" tabindex="-1">
<div class="container">

<nav class="woocommerce-breadcrumb" ><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span><a href="javascript:void(0)">{{$subcategory_details->name}}</a></nav>

<div id="primary" class="content-area">
<main id="main" class="site-main">



<header class="page-header">

    <h1 class="page-title text-uppercase" style="">{{$subcategory_details->name}} 
    </h1>

    
    <!-- <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p> -->
</header>

<div class="shop-control-bar">

        <input type="hidden" id="search_value" value="$search_value}}">

        <input type="hidden" id="product_cat" value="$product_cat}}">

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
        <input type="search" name="product_serach" id="product_serach" class="form-control" placeholder="Search any product" onkeyup="productSearch()">
        <br>
        <ul class="products columns-3" id="filter_prooduct_list">
            @foreach($products as $store_product_list1)
             <li class="product">
                <a href="javascript:void" style="display: none;">{{$store_product_list1->current_price}}</a>
                <b href="javascript:void" style="display: none;">{{$store_product_list1->product_name}}</b>
                <p style="display: none;">{{$store_product_list1->brand_id}}</p>
                    <div class="product-outer">
                        <div class="product-inner">
                            <span class="loop-product-categories">
                                <a href="/product-details/{{$store_product_list1->slug}}" rel="tag">{{$store_product_list1->product_name}}</a>
                                <a href="javascript:void(0)" class="add-to-compare-link rgt" id="com_{{$store_product_list1->product_id}}" onclick="compare({{$store_product_list1->product_id}})">Compare</a>
                                <span id="added_compare_{{$store_product_list1->product_id}}" style="padding-left: 71px; display: none"><i class="fa fa-check" ></i> Added For Compare</span>
                            </span>
                                <a href="/product-details/{{$store_product_list1->slug}}">
                                <h3>{{$store_product_list1->product_name }}</h3>
                                <div class="product-thumbnail">
                                    <img data-echo="{{getenv('URL')}}{{$store_product_list1->product_img}}"
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
                                <span class="wrappers"><a href="javascript:void(0)" class="button"  onclick="addToCart({{$store_product_list1->product_id}})"><img src=" {{asset('uploads/cart.png')}}"></a><div class="tooltip">Add To Cart</div></span>
                                
                            </div><!-- /.price-add-to-cart -->
      <div class="hover-area">
    <div class="action-buttons ">
          @if($session != '')
     <a href="javascript:void(0)" rel="nofollow" class="add_to_wishlist">Add To Like</a>
      <a href="javascript:void(0)" rel="nofollow"  onclick="addWishlist({{$store_product_list1->product_id}},$session}})"><i class="add_to_wishlist1" id="{{$store_product_list1->product_id}}"></i> Add To Wishlist</a>
       @else
                <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist">Add To Like</a>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"  rel="nofollow" class="add_to_wishlist1">Add To Wishlist</a>
        @endif
       <span class="quick1" data-toggle="modal" data-target="#product_view"><a href="javaascript:void(0)" onclick="quickView({{json_encode($store_product_list1->product_id)}})" style="color:white !important;"> Quick View</a></span></div>
</div>
                           
                        </div><!-- /.product-inner -->
                    </div><!-- /.product-outer -->
                </li>
            @endforeach
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
                <ul class="readmore">
                    @foreach($brand as $brand)
                    <li style="">
                        <input type="checkbox" id="brand_{{$brand->brand_id}}" class="brand_check" name="brand" value="{{$brand->brand_id}}" style="margin-right: 10px">
                       <label class="count" for="brand_{{$brand->brand_id}}" style="cursor: pointer; margin-bottom: -2.143em">{{$brand->brand_name}}({{$brand->brand_count}})</label></li>
                    @endforeach
                </ul>
            </aside>
            <aside class="widget woocommerce widget_layered_nav">
                <h3 class="widget-title">Color</h3>
                <ul class="readmore">
                    @foreach($color as $color)

                    <li style="">
                        <input type="checkbox" id="color_check_{{$color->id}}" name="color" value="{{$color->id}}" class="color_check" style="margin-right: 10px">
                        <label class="count" for="color_check_{{$color->id}}" style="cursor: pointer; margin-bottom: -2.143em">
                        {{$color->color_name}}</label></li>
                   @endforeach
                </ul>
            </aside>

        </aside>
    </form>

</div>

</div><!-- .container -->
</div><!-- #content -->

<!-- brands filter -->
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


    </script>
<!-- brands filter -->
@include('layouts/footer')