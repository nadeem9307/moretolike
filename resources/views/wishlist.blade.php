@include('single-product-sections/header')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<div class="page home page-template-default">
<div tabindex="-1" class="site-content" id="content">
                <div class="container">


                    <nav class="woocommerce-breadcrumb"><a href="/">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Wishlist</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="page type-page status-publish hentry">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div id="yith-wcwl-messages"></div>
                                    <form class="woocommerce" method="post" id="yith-wcwl-form">

                                        <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                        <!-- TITLE -->
                                        <div class="wishlist-title ">
                                            <h2>My wishlist</h2>
                                        </div>
                                        	@if(count($wishlistData) > 0)
                                        <!-- WISHLIST TABLE -->
                                        <table id="support_table">

                                            <thead>
                                                <tr>

                                                    <th class="product-remove"></th>

                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-price">
                                                        <span class="nobr">Unit Price</span>
                                                    </th>
                                                    <th class="product-stock-stauts">
                                                        <span class="nobr">Stock Status</span>
                                                    </th>

                                                    <th class="product-add-to-cart"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                            	@foreach($wishlistData as $wishlist)
                                                <tr>
                                                    <td class="product-remove">
                                                        <div>
                                                            <a title="Remove this product" class="remove-wishlist remove_from_wishlist" href="/remove-wishlist/{{$wishlist->pk_cw_id}}">×</a>
                                                        </div>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="/product-details/{{$wishlist->slug}}"><img width="180" height="180" alt="1" class="wp-post-image" src="{{getenv('URL')}}{{$wishlist->product_img}}" id="wishlist{{$wishlist->product_id}}"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="product-details/{{$wishlist->slug}}">
                                                        	{{$wishlist->product_name}}
                                                        </a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">${{$wishlist->current_price}}</span></span>
                                                    </td>

                                                    <td class="product-stock-status">
                                                        <span class="in-stock">{{$wishlist->availability}}</span>
                                                    </td>

                                                    <td class="product-add-to-cart">
                                                        <!-- Date added -->

                                                        <!-- Add to cart button -->
                                                        <a href="javascript:void(0)" onclick="addToCarthome({{$wishlist->product_id}},'wishlist')" class="button btn btn-primary"> Add to Cart</a>
                                                        
                                                        <!-- Change wishlist -->

                                                        <!-- Remove from wishlist -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                            <!-- <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                            </tfoot> -->

                                        </table>
                                         @else 
                                         <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">
                                         	<tr>
            									There is no data.
            								</tr>
            								</table>
           								 @endif
                                        <input type="hidden" value="85fe311a9d" name="yith_wcwl_edit_wishlist" id="yith_wcwl_edit_wishlist"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">

                                    </form>

                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

            </div>
            <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#support_table').DataTable();
  });
</script>
           @include('layouts/footer')