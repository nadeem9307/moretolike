

@include('single-product-sections/header')


<div class="page home page-template-default">

<div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="/home">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Compare</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="table-responsive">
                                        @if(count($products_info) > 0)
                                        <table class="table table-compare compare-list">
                                            <tbody>
                                                <tr>
                                                    <th>Product</th>
                                                    @foreach($products_info as $product_info)
                                                    <td>
                                                        <a class="product" href="/product-details/{{$product_info->slug}}">
                                                            <div class="product-image">
                                                                <div class="">
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
                                                    <th>Price</th>
                                                     @foreach($products_info as $product_info)
                                                    <td>
                                                        <div class="product-price price"><span class="electro-price"><span class="amount">${{$product_info->current_price}}</span></span></div>
                                                    </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th>Availability</th>
                                                     @foreach($products_info as $product_info)
                                                    <td><span class="in-stock">{{$product_info->availability}}</span></td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th>Description</th>
                                                     @foreach($products_info as $product_info)
                                                    <td>
                                                       {!!$product_info->description!!}
                                                    </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th>Add to cart</th>
                                                     @foreach($products_info as $product_info)
                                                    <td>
                                                    <a class="button btn btn-primary" href="javascript:void(0)" rel="nofollow" onclick="addToCarthome({{$product_info->product_id}},'compare')">Add to cart</a>
                                                         
                                                    </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th>MRP Price</th>
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
                                    </div><!-- /.table-responsive -->
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>
            </div>

             @include('layouts/footer')