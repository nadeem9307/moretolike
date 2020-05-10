<footer id="colophon" class="site-footer">
<div class="footer-widgets">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget clearfix">
					<div class="body">
						<h4 class="widget-title">Featured Products</h4>
						<ul class="product_list_widget">
                                          @foreach($featured_product as $fp)
                                          
							<li>
								<a href="/product-details/{{$fp->slug}}" title="{{$fp->product_name}}">
									<img class="wp-post-image" data-echo="{{ getenv('URL')}}{{$fp->product_img}}" src="{{ getenv('URL')}}{{$fp->product_img}}" alt="">
									<span class="product-title">{{$fp->product_name}}</span>
								</a>
								<span class="electro-price"><span class="amount">&#36;{{$fp->current_price}}</span></span>
							</li>
                                          @endforeach
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget clearfix">
					<div class="body"><h4 class="widget-title">Onsale Products</h4>
						<ul class="product_list_widget">
							 @foreach($on_sale as $fp)

                                          <li>
                                                <a href="/product-details/{{$fp->slug}}" title="{{$fp->product_name}}">
                                                      <img class="wp-post-image" data-echo="{{ getenv('URL')}}{{$fp->product_img}}" src="{{ getenv('URL')}}{{$fp->product_img}}" alt="">
                                                      <span class="product-title">{{$fp->product_name}}</span>
                                                </a>
                                                <span class="electro-price"><span class="amount">&#36;{{$fp->current_price}}</span></span>
                                          </li>
                                          @endforeach
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget clearfix">
					<div class="body">
						<h4 class="widget-title">Top Rated Products</h4>
						<ul class="product_list_widget">
							@foreach($top_rated as $fp)

                                          <li>
                                                <a href="/product-details/{{$fp->slug}}" title="{{$fp->product_name}}">
                                                      <img class="wp-post-image" data-echo="{{ getenv('URL')}}{{$fp->product_img}}" src="{{ getenv('URL')}}{{$fp->product_img}}" alt="">
                                                      <span class="product-title">{{$fp->product_name}}</span>
                                                </a>
                                                <span class="electro-price"><span class="amount">&#36;{{$fp->current_price}}</span></span>
                                          </li>
                                          @endforeach
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>