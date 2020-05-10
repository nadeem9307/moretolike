 @if(count($hori_product_types)>0)


    <div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<div class="deals-block col-lg-4">
                            		<section class="section-onsale-product">
                            			<header>
                            				<h2 class="h1">Special Offer</h2>
                            				<div class="savings">
                            					<span class="savings-text">Save <span class="amount">$20.00</span></span>
                            				</div>
                            			</header><!-- /header -->

                            			<div class="onsale-products">
                            				<div class="onsale-product">
                            					<a href="javascript:void(0)">
                            						<div class="product-thumbnail">
                            							<img data-echo="{{ asset('images/product-cards/game.jpg') }}" src="{{ asset('images/product-cards/game.jpg') }}" alt=""></div>

                            							<h3>Game Console Controller <br>+ USB 3.0 Cable</h3>
                            					</a>

                            					<span class="price">
                            						<span class="electro-price">
                            							<ins><span class="amount">$79.00</span></ins>
                            							<del><span class="amount">$99.00</span></del>
                            						</span>
                            					</span><!-- /.price -->

                            					<div class="deal-progress">
                            						<div class="deal-stock">
                            							<span class="stock-sold">Already Sold: <strong>2</strong></span>
                            							<span class="stock-available">Available: <strong>26</strong></span>
                            						</div>

                            						<div class="progress">
                            							<span class="progress-bar" style="width:8%">8</span>
                            						</div>
                            					</div><!-- /.deal-progress -->

                            					<div class="deal-countdown-timer">
                            						<div class="marketing-text text-xs-center">Hurry Up! Offer ends in:	</div>


                            						<div id="deal-countdown" class="countdown">
                            							<span data-value="0" class="days"><span class="value">0</span><b>Days</b></span>
                            							<span class="hours"><span class="value">7</span><b>Hours</b></span>
                            							<span class="minutes"><span class="value">29</span><b>Mins</b></span>
                            							<span class="seconds"><span class="value">13</span><b>Secs</b></span>
                            						</div>
                            						<span class="deal-end-date" style="display:none;"><?php 
                                                        $dt = date("Y-m-d");
                                                        echo date( "Y-m-d", strtotime( "$dt +1 day" ) );
                                                     ?></span>
                            						<script>
                            						// set the date we're counting down to
                            						var deal_end_date = document.querySelector(".deal-end-date").textContent;
                            						var target_date = new Date( deal_end_date ).getTime();

                            						// variables for time units
                            						var days, hours, minutes, seconds;

                            						// get tag element
                            						var countdown = document.getElementById( 'deal-countdown' );

                            						// update the tag with id "countdown" every 1 second
                            						setInterval( function () {

                            						// find the amount of "seconds" between now and target
                            						var current_date = new Date().getTime();
                            						var seconds_left = (target_date - current_date) / 1000;

                            						// do some time calculations
                            						days = parseInt(seconds_left / 86400);
                            						seconds_left = seconds_left % 86400;

                            						hours = parseInt(seconds_left / 3600);
                            						seconds_left = seconds_left % 3600;

                            						minutes = parseInt(seconds_left / 60);
                            						seconds = parseInt(seconds_left % 60);

                            						// format countdown string + set tag value
                            						countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days +  '</span><b>Days</b></span><span class="hours"><span class="value">' + hours + '</span><b>Hours</b></span><span class="minutes"><span class="value">'
                            						+ minutes + '</span><b>Mins</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Secs</b></span>';

                            						}, 1000 );
                            						</script>
                            					</div><!-- /.deal-countdown-timer -->
                            				</div><!-- /.onsale-product -->
                            			</div><!-- /.onsale-products -->
                            		</section><!-- /.section-onsale-product -->
                            	</div><!-- /.col -->


                                <div class="tabs-block col-lg-8">
                                    <div class="products-carousel-tabs">
                                        <ul class="nav nav-inline">
                                        @foreach($hori_product_types as $pro_type)
                                             @if($pro_type->position_order >= 1 )
                                            <li class="nav-item"><a class="nav-link" href="#{{$pro_type->type}}" data-toggle="tab" onclick="dealsAndTabsProducts('{{$pro_type->id}}')">{{$pro_type->type}}</a></li>
                                            @endif
                                        @endforeach
                                           <!--  <li class="nav-item"><a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a></li> -->
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane deals-tab" id="{{$pro_type->type}}" role="tabpanel">
                                                <div class="woocommerce columns-3">
                                                    <ul class="products columns-3" id="ajax_products">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.tabs-block -->
    </div><!-- /.deals-and-tabs -->
@endif