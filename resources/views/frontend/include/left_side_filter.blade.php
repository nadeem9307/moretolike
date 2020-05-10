  <?php
use \App\Http\Controllers\HomeController;
$recomended = HomeController::getRecentAddedProduct();
//dd($requestData);
?>
  <div class="row">
    <div class="col-md-12">
      <div class="full_left">
        <h4>Categories</h4>
        <ul class="categaries_1" id="category_menu_details">
        <li><input type="text" name="search" placeholder="Search Brand.." class="bgimg" onkeyup="categoryFilter(this.value)"></li>
        @foreach($static_data['categories_row_1'] as $row)
          <li id="menu5" class="category-menu-filter">
            <input type="checkbox" id="category-{{$row->id}}" class=" checkbox category-checkbox common_selector f_category" name="category[]" value="{{$row->id}}" {{in_array($row->id,$requestData['category'])?'checked':''}} > 
            <label class="cat_val" for="category-{{$row->id}}">
              {{ucfirst($row->category_name)}}
            </label>
          </li>
        @endforeach
        <li class="r_category"><a class="btn btn-warning fullbtn" onclick="load_more_details('category', 6 , 2)">SHOW MORE </a></li>
      </ul>
      </div>
    </div>
    <div class="col-md-12">
      <div class="full_left">
        <h4>Brand</h4>
        <ul class="categaries_1" id="brand_menu_details">
        <li><input type="text" name="search" placeholder="Search Brand.." class="bgimg" onkeyup="brandFilter(this.value)"></li>
        @foreach($static_data['f_brands'] as $row)
        <li id="menu5" class="brand-menu-filter">
          <input type="checkbox" id="brand-{{$row->id}}" class="checkbox common_selector f_brand" name="brand[]" value="{{$row->id}}" {{in_array($row->id,$requestData['brand'])?'checked':''}} > 
          <label class="bran_val" for="brand-{{$row->id}}">{{ucfirst($row->name)}}</label>
        </li>
        @endforeach
        <li class="r_brand"><a class="btn btn-warning fullbtn" onclick="load_more_details('brand', 6, 2)">SHOW MORE </a></li>
      </ul>
      </div>
    </div>
    <div class="col-md-12">
      <div class="full_left">
        <h4>Retailer</h4>
        <ul class="categaries_1" id="retailer_menu_details">
        <li><input type="text" name="search" placeholder="Search Brand.." class="bgimg" onkeyup="retailerFilter(this.value)"></li>
        @foreach($static_data['f_retailer'] as $row)
        <li id="menu5" class="retailer-menu-filter">
          <input type="checkbox" class="checkbox common_selector f_retailer" name="retailer[]" value="{{$row->id}}" id="retailer-{{$row->id}}" {{in_array($row->id,$requestData['retailer'])?'checked':''}}> 
          <label class="ret_val" for="retailer-{{$row->id}}">
            {{ucfirst($row->store_name)}}
          </label>
        </li>
        @endforeach
        <li class="r_retailer"><a class="btn btn-warning fullbtn" onclick="load_more_details('retailer', 6)">SHOW MORE </a></li>
      </ul>
      </div>
    </div>
     <div class="col-md-12">
      <div class="full_left">
        <h4>Color</h4>
        <ul class="categaries_1" id="color_menu_details">
        <li><input type="text" name="search" placeholder="Search Color.." class="bgimg" onkeyup="colorFilter(this.value)"></li>
        @foreach($static_data['website_color'] as $row)
        <li id="menu5" class="color-menu-filter">
          <input type="checkbox" class="checkbox common_selector f_color" name="color[]" value="{{strtolower($row->color_name)}}" id="color-{{$row->id}}" {{in_array(strtolower($row->color_name),$requestData['color'])?'checked':''}}> 
          <label class="col_val" for="color-{{$row->id}}">{{ucfirst($row->color_name)}} </label>
        </li>
        @endforeach
        <li class="r_color"><a class="btn btn-warning fullbtn" onclick="load_more_details('color', 6, 2)">SHOW MORE </a></li>
      </ul>
      </div>
    </div>
    <div class="col-md-12 brd-line" style="background:white">
        <h4 class="brand">Filter</h4>
        <div class="full_left">
            <div class="col-md-12">
              <b>Price</b>
            </div>
            <div class="col-md-12">
              <div id="price_range" class="price-filter-range" name="rangeInput"></div>
              <input type="hidden" id="price_detail_val_detail" name="price_detail_val">
              <p id="price_show">$10 - $100000</p>
			  <input type="hidden" id="hidden_minimum_price" value="0" />
              <input type="hidden" id="hidden_maximum_price" value="100000" />
            </div>         <!-- <div style="margin:30px auto"></div> -->
        </div>
    </div>
                <div class="col-md-12 " style="background:white">
                    <ul class="readmore">
                        <li>
                            <p><b>Add Banner</b></p>
                        </li>
                        <li>
                            <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBMSduU9cK8qV-GaMrWZAAMkF0uKBBVQ3KW9mDjWy-bCcXxzXX" alt="Banner IMage"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 brd-line" style="background:white">
                    <h4 class="brand">Latest Products</h4>
                    <ul class="list-unstyled quick-links">
                        @foreach(json_decode(HomeController::getLatestProduct()) as $row)
                        <li>
                            <div class="row">
                                <div class="produc-left">
                                    <a href="/beta-product-details/{{$row->product_id}}"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" alt=""></a>
                                </div>
                                <div class="detail-right">
                                    <h4 class="price-detail"><a href="/beta-product-details/{{$row->product_id}}">{{substr($row->product_name,0, 30)}}</a></h4>
                                    <p>${{money_format('%i',$row->current_price)}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>