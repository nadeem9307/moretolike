
 <section class="brands-carousel">
            	<h2 class="sr-only">Brands Carousel</h2>
            	<div class="container-fluid">
                        <div class="row">
                              <div class="col-md-12 col-lg-12">
            		<div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">
                              @foreach($brand_carousel as $brand)
            			<div class="item">

            				<a href="#">

            					<figure>
            						<figcaption class="text-overlay">
            							<div class="info">
            								<h4>{{$brand->name}}</h4>
            							</div><!-- /.info -->
            						</figcaption>

            						 <img src="{{getenv('URL')}}{{$brand->brand_img}}" data-echo="{{getenv('URL')}}{{$brand->brand_img}}" class="img-responsive" alt="{{$brand->name}}">

            					</figure>
            				</a>
            			</div><!-- /.item -->
                              @endforeach

            		</div><!-- /.owl-carousel -->
                  </div>
            </div>
            	</div>
            </section>