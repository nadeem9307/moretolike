@include('frontend/include/header')
   </div>
      <hr>
      <div class="container content mrgtp">
         <!---user registration--> 
         <div class="row">
            <ul class="top-link">
               <li><a href="">Home</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">Campare</a></li>
               
            </ul>
         </div>
         <!---user registration-->  
      </div>
      <!--slider-->
      <section>
         <div class="container" id="primary">
            <main class="site-main" id="main">
               <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                  <div itemprop="mainContentOfPage" class="entry-content">
                     <div class="table-responsive">
                        @if(count($products_info) > 0)
                            <table class="table table-compare compare-list">
                                <tbody>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">Product</th>
                                        @foreach($products_info as $product_info)
                                        <td>
                                            <a class="product" href="/product-details/{{$product_info->slug}}">
                                                <div class="product-image">
                                                    <div class="pro_image{{$product_info->product_id}}">
                                                        <img width="250" height="232" alt="1" class="wp-post-image" src="{{getenv('URL')}}{{$product_info->product_img}}" id="compare{{$product_info->product_id}}">
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title">{{$product_info->product_name}}</h3>

                                                </div>
                                            </a><!-- /.product -->
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">Price</th>
                                         @foreach($products_info as $product_info)
                                        <td>
                                            <div class="product-price price"><span class="electro-price"><span class="amount">${{$product_info->current_price}}</span></span></div>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">Availability</th>
                                         @foreach($products_info as $product_info)
                                        <td><span class="in-stock">{{$product_info->availability}}</span></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">Description</th>
                                         @foreach($products_info as $product_info)
                                        <td>
                                            <p class="pa_asq_xzas">
                                           {!!$product_info->description!!}
                                            </p>        
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">Add to cart</th>
                                         @foreach($products_info as $product_info)
                                        <td>
                                        <a class="button btn btn-warning add-to-cart1" href="javascript:void(0)" id="add-to-like-{{$product_info->product_id}}" rel="nofollow">Add to cart</a>
                                             
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="pro_nam_sewa_abv">MRP Price</th>
                                          @foreach($products_info as $product_info)
                                        <td>
                                            <div class="product-price price"><span class="electro-price"><span class="amount">${{$product_info->mrp}}</span></span></div>
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        @foreach($products_info as $product_info)
                                        <td class="text-center">
                                            <a href="remove-compare/{{$product_info->product_id}}" title="Remove" class="remove-icon"><i class="fa fa-times"></i></a>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            @else 
                            There is no data for compare.
                            @endif
                     </div>
                     <!-- /.table-responsive -->
                  </div>
                  <!-- .entry-content -->
               </article>
               <!-- #post-## -->
            </main>
            <!-- #main -->
         </div>
      </section>
      @include('frontend/include/footer')