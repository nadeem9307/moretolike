	<?php
		use \App\Http\Controllers\HomeController;
	?>
	<div id="wpb_wl_quick_view_{{$row->product_id}}" class="mfp-with-anim wpb_wl_quick_view_content wpb_wl_clearfix product ">
        <div class="container">
			<!--Product Detail -->
			<div class="row margnst1">
            <ul class="top-link">
               <li><a href="">Home</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">Product</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                 <li><a href="">Quick View</a></li>
               
            </ul>
         </div>
			<div class="row bg-imgpro">
                <div class="col-md-6">
					<div class="row">
					 <div class="col-sm-6 left1">
						<?php $rand = rand(); ?>
						<a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipmdd{{time()}}-{{$row->product_id}}-{{$rand}}" data-html="true" title='<div class="tooltip_s"><p  productid="mdd{{time()}}-{{$row->product_id}}-{{$rand}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                       <br>
                                       <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                       <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
						<h6><a href="javascript:void(0);" class="show-tt1" productid="mdd{{time()}}-{{$row->product_id}}-{{$rand}}"><i class="fa fa-barcode"></i></a> My Store</h6>
					 </div>
					 <div class="col-sm-6 left1">
						<h6 class="compare cursor-pointer">
						   <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_1_{{$row->product_id}}" class="cursor-pointer">
							  <i class="ec ec-compare"></i> Compare
						   </a>
						</h6>
					 </div>
				  </div>
				  <div class="row">
					 <div class="preview col-md-12">
						<div class="preview-pic tab-content ">
						   <div class="tab-pane active previewimg" id="pic-1-{{$row->product_id}}"><img src="{{ getenv('URL')}}308X330_{{$row->product_img}}"></div>
						   <div class="tab-pane" id="pic-2-{{$row->product_id}}"><img src="{{asset('beta_assets/images/dish.png')}}"></div>
						   <div class="tab-pane" id="pic-3-{{$row->product_id}}"><img src="{{asset('beta_assets/images/game.png')}}"></div>
						   <div class="tab-pane" id="pic-4-{{$row->product_id}}"><img src="{{asset('beta_assets/images/camras.jpg')}}"></div>
						   <div class="tab-pane" id="pic-5-{{$row->product_id}}"><img src="{{asset('beta_assets/images/mrt.png')}}"></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs border-none previewicon">
						   <li class="left active"><a data-target="#pic-1-{{$row->product_id}}" data-toggle="tab"><img src="{{asset('beta_assets/images/dish.png')}}"></a></li>
						   <li class="left"><a data-target="#pic-2-{{$row->product_id}}" data-toggle="tab"><img src="{{asset('beta_assets/images/dish.png')}}"></a></li>
						   <li class="left"><a data-target="#pic-3-{{$row->product_id}}" data-toggle="tab"><img src="{{asset('beta_assets/images/dish.png')}}"></a></li>
						   <li class="left"><a data-target="#pic-4-{{$row->product_id}}" data-toggle="tab"><img src="{{asset('beta_assets/images/dish.png')}}"></a></li>
						   <li class="left"><a data-target="#pic-5-{{$row->product_id}}" data-toggle="tab"><img src="{{asset('beta_assets/images/dish.png')}}"></a></li>
						</ul>
					 </div>
				  </div>
				 
			   </div>
                                       <!--img-->
                    <div class="col-sm-6 brddetail">
				  <div class="row">
					 <div class="col-sm-12">
						<h2 style="text-transform: capitalize;">{{substr($row->product_name,0, 30)}}</h2>
					 </div>
				  </div>
				  <hr>
				  <div class="row">
					 <div class="col-sm-4">
						<h2>${{money_format('%i',$row->current_price)}}</h2>
					 </div>
					 <div class="col-sm-8">
						@for($i=0; $i<5; $i++)
						   @if($i < $row->product_review_count['0']->reviews_avg)
							  <i class="fa fa-star checked"></i>
						   @else
							  <i class="fa fa-star"></i>
						   @endif
						@endfor
						<span>({{$row->product_review_count['0']->total}} customer rewiews)</span>
					 </div>
				  </div>
				  <div class="row mrgbrd">
				  	
					@if(count($row->attributes)>0)
					@foreach($row->attributes as $key=>$attribute)
					
					 <div class="col-sm-6">
						<select name="attrs_{{$attribute->id}}" id="attrs_{{$attribute->id}}" class="form-control all_attr" item_name="{{$attribute->name}}" att_id="{{$attribute->id}}">
						   <option value="" selected="selected">{{$attribute->name}}</option>
						   @if(count($attribute->data))
						   @foreach($attribute->data as $kdata=>$data12)
						   
							<option value="{{ $data12->item_id }}" >{{ ucfirst($data12->item_text) }}</option>
							@endforeach
							@endif
						</select>
					 </div>
					 @endforeach
					 @endif

					 <div class="col-sm-2"><a href="javascript:void(0);">Clear </a></div>
					 <div class="col-sm-4"><input type="number" class="select1" name="quantity" id="quantity_{{$row->product_id}}" min="1" max="5" value="1"></div>
				  </div>
				  <div class="row mrgbrd">
					
					<div class="col-sm-6">
						<button class="btn btn-warning btn btnfor_mobile add-to-cart-detail" id="add-to-like-{{$row->product_id}}">Add To Cart</button>
					</div>
				  </div>
				  <!-- form -->
				  <hr>
				  <div class="row">
					 <div class="col-sm-12">
						<h4 class="prod">Product Details</h4>
					 </div>
					 <div class="col-sm-12">
						{!!html_entity_decode($row->product_details)!!}
					 </div>
					 <div class="col-sm-12">
						<p class="prod"><b>SKU:</b> {{$row->sku}} </p>
					 </div>
					 <div class="col-sm-12 martop1">
						<h4 class="text-center">Share this product</h4>
					 </div>
					 <div class="col-sm-12">
						<ul class="social-product">
						   <li><a class="fa fa-facebook" href="http://www.facebook.com/sharer.php?u={{getenv('URL')}}/beta-product-details/{{$row->product_id}}" target="_blank"></a></li>
						   <li><a class="fa fa-twitter" href="http://twitter.com/share?text={{$row->product_name}}&url={{getenv('URL')}}/beta-product-details/{{$row->product_id}}" target="_blank"></a></li>
						   <li><a class="fa fa-instagram" href="https://www.instagram.com/mtolike/" target="_blank"></a></li>
						   <li><a class="fa fa-pinterest" href="http://pinterest.com/pin/create/button/?url={{getenv('URL')}}/beta-product-details/{{$row->product_id}}&media=[MEDIA]" target="_blank"></a></li>
						   <li><a class="fa fa-envelope" href="mailto:?subject={{$row->product_name}}&body=Check out this product {{getenv('URL')}}/beta-product-details/{{$row->product_id}}" target="_blank"></a></li>
						</ul>
					 </div>
				  </div>
			   </div>
			   <!--detail-->
			    <div class="col-md-12 martop1">
					@if(Session::has('user_id'))
						@if($row->is_liked == 0)
							<div class="col-sm-3 left1">
								<h6><a href="javascript:void(0)" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="detail-like_{{$row->product_id}}"><i class="ec ec-favorites"></i> </a> {{count($row->product_like)}}</h6>
							</div>
						@else
							<div class="col-sm-3 left1">
								<h6><a href="javascript:void(0)"><i class="fa fa-heart color-red"></i> </a> {{count($row->product_like)}}</h6>
							</div>
						@endif
						@if($row->shareable_product == 'shareable')
							<div class="col-sm-6 compare left1">
							<h6><span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 1)">Collection</a> <span class="tooltip">Add To collection</span> </span> </h6>
							</div>
						@else
							<div class="col-sm-6 compare left1">
							<h6><span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 0)">Collection</a> <span class="tooltip">Add To collection</span> </span> </h6>
							</div>
						@endif
					 @else
						<div class="col-sm-3 left1">
							<h6><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><i class="ec ec-favorites"></i> </a> 3</h6>
						</div>
						<div class="col-sm-6 compare left1">
							<h6><span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> </h6>
						</div>
					 @endif
				  </div>
			</div>

			<!-- /container --> 
			<!---Store detail-->
			<!--bg-->
        </div>
		 <!--second container-->
		 <div class="container mt-4 mrgtp">
			<ul class="nav nav-tabs responsive  d-none d-sm-flex" role="tablist" id="tabs-0">
			   <li class="nav-item credit">
				  <a class="nav-link active" data-toggle="tab" href="#Accessories" role="tab">Accessories</a>
			   </li>
			   <li class="nav-item credit">
				  <a class="nav-link" data-toggle="tab" href="#Description" role="tab">Description</a>
			   </li>
			   <li class="nav-item credit">
				  <a class="nav-link" data-toggle="tab" href="#Specification" role="tab">Specification</a>
			   </li>
			   <li class="nav-item credit">
				  <a class="nav-link credit" data-toggle="tab" href="#Review" role="tab">Review</a>
			   </li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content responsive d-none d-sm-flex" style="border: 1px solid #d7d7d7;">
			   <div class="active tab-pane" id="Accessories" role="tabpanel">
				  <div class="container-fluid">
					 @if(isset($row->acc_product) && !empty($row->acc_product))
					 <div class="row mt-3">
						<div class="row">
							  <?php 
								 $i = 1;
								 $total = $row->current_price;
								 $mrp = $row->mrp;
								 $total_p = count($row->acc_product);
							  ?>
							  @foreach($row->acc_product as $key=>$acc_product)
								 <div class="col-lg-3 col-sm-4  colmdpdmg">
								 @if($i < $total_p)
									<div class="plus-btn1"><i class="fa fa-plus"></i></div>
								 @endif
									<div class="thumbnail thumbrd">
									   <p class="text"><span style="text-transform: capitalize;">{{$acc_product->category_name}}</span></p>
									   <h6 class="price-detail" style="text-transform: capitalize;">{{$acc_product->product_name}}</h6>
									   <img src="{{ getenv('URL')}}{{$acc_product->product_img}}" class="img-responsive">
									   <div class="caption">
										  <div class="row">
											 <div class="col-md-12 col-xs-12">
												<h3 class="redcl"><label>${{money_format('%i',$acc_product->current_price)}}</label> <span class="smal-font"><del>${{money_format('%i',$acc_product->mrp)}}</del></span> </h3>
											 </div>
										  </div>
									   </div>
									</div>
								 </div>
								 <?php
									$total = $total+$acc_product->current_price; 
									$mrp = $mrp+$acc_product->mrp;
									$i++; 
								 ?>
							  @endforeach
							    @foreach($row->acc_product as $acc_product_list)
								<?php $product_is[] = $acc_product_list->product_id; ?>
								@endforeach
								<?php $product_is[] = $row->product_id; ?>
								
							<?php $rand_val = rand(); ?>
						   <div class="col-lg-3 col-sm-12 price-box">
							  <h3 class="redcl"><label>${{money_format('%i', $total)}}</label> <span class="smal-font"><del>${{money_format('%i', $mrp)}}</del></span> </h3>
							  <p> for {{count($row->acc_product)+1}} items</p>
							  <button class="btn btn-warning add-all-to-cart" rand_val = {{ $rand_val }} product_id = {{ implode(',',$product_is) }} onclick="addToCartAcc({{json_encode($row->acc_product)}},this)">Add All To Cart</button>
						   </div>
						</div>
						<div class="row this_div_checked{{ $rand_val }}" style="margin-top: 20px;">
						   <div class="col-md-12">
							  <input type="checkbox" class="add_this_all" value="{{$row->product_id}}"> <b>This product: </b><a href="javascript:void(0);">{{$row->product_name}}- </a><span class="price-red">${{money_format('%i',$row->current_price)}}</span> <br>
							  @foreach($row->acc_product as $acc_product_list)
								 <input type="checkbox" class="add_this_all" value="{{ $acc_product_list->product_id }}"> <a href="javascript:void(0);" class="linkbrd">{{$acc_product_list->product_name}} -</a> <span class="price-red"> ${{money_format('%i', $acc_product_list->current_price)}}</span><br>
							  @endforeach
							  <!-- <input type="checkbox"> <a href="" class="linkbrd">Headphones USB Wires - </a> <span class="price-red"> $50.00 </span><br> -->
						   </div>
						</div>
					 </div>
					 @endif
				  </div>
			   </div>
			   <div class="tab-pane" id="Description" role="tabpanel">
				  <div class="container-fluid">
					 <div class="row mt-3">
						<div class="row">
						   <div class="col-md-12">
							  {!!html_entity_decode($row->description)!!}
						   </div>
						</div>
					 </div>
				  </div>
			   </div>
			   <div class="tab-pane" id="Specification" role="tabpanel">
				  <div class="container-fluid">
					 <div class="row mt-3">
						<h3>Technical Specifications</h3>
						<table class="table">
						   <tbody>
						   @foreach($row->product_attr as $product_attr)
							  <tr>
								 <td>{{$product_attr->attribute_name}}</td>
								 <td>{{$product_attr->attribute_value}}</td>
							  </tr>
						   @endforeach
						   </tbody>
						</table>
					 </div>
				  </div>
			   </div>
			   <div class="tab-pane" id="Review" role="tabpanel">
				  <div class="container-fluid">
					 <div class="row mt-3">
						<div class="advanced-review row">
						   <div class="col-md-8 col-xs-12">
							  <p>Based on {{$row->product_review_count['0']->total}} reviews</p>
							  <h3>{{$row->product_review_count['0']->reviews_avg}}</h3>
							  <p><span>Over All</span></p>
							  <div class="rating-histogram">
								 <div class="rating-bar">
									<span class="rating-review"><i class="fa fa-star checked"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									</span>
									<div class="rating-percentage-bar">
									   <span style="width:20%" class="rating-percentage">
									   </span>
									</div>
									<div class="rating-count">{{$row->product_review_count['0']->one}}</div>
								 </div>
								 <!-- .rating-bar -->
								 <div class="rating-bar">
									<span class="rating-review"><i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									</span>
									<div class="rating-percentage-bar">
									   <span style="width:40%" class="rating-percentage"></span>
									</div>
									<div class="rating-count">{{$row->product_review_count['0']->two}}</div>
								 </div>
								 <!-- .rating-bar -->
								 <div class="rating-bar">
									<span class="rating-review"><i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									</span>
									<div class="rating-percentage-bar">
									   <span style="width:60%" class="rating-percentage"></span>
									</div>
									<div class="rating-count zero">{{$row->product_review_count['0']->three}}</div>
								 </div>
								 <!-- .rating-bar -->
								 <div class="rating-bar">
									<span class="rating-review"><i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star "></i>
									</span>
									<div class="rating-percentage-bar">
									   <span style="width:80%" class="rating-percentage"></span>
									</div>
									<div class="rating-count zero">{{$row->product_review_count['0']->four}}</div>
								 </div>
								 <!-- .rating-bar -->
								 <div class="rating-bar">
									<span class="rating-review"><i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									<i class="fa fa-star checked"></i>
									</span>
									<div class="rating-percentage-bar">
									   <span style="width:100%" class="rating-percentage"></span>
									</div>
									<div class="rating-count zero">{{$row->product_review_count['0']->five}}</div>
								 </div>
								 <!-- .rating-bar -->
							  </div>
						   </div>
						   <div class="col-xs-12 col-md-4">
							  <div id="review_form_wrapper">
								 <div id="review_form">
									<div id="respond" class="comment-respond">
									   <h3 id="reply-title" class="comment-reply-title">
									   @if(isset($row->userReview) && !empty($row->userReview))
										  You have already replied.
									   @else
									   Add a review
										  <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
										  </small>
									   </h3>
									   <form action="javascript:void(0)" method="post" id="commentform" class="comment-form">
										{{csrf_field()}}
										<p class="comment-form-rating">
											<label>Your Rating</label>
										</p>
										<input type="hidden" name="rating_val" id="rating_val" value="">
										<p>
											<span class="fa fa-star" id="1" onclick="rating(1)"></span>
											<span class="fa fa-star " id="2" onclick="rating(2)"></span>
											<span class="fa fa-star " id="3" onclick="rating(3)"></span>
											<span class="fa fa-star" id="4" onclick="rating(4)"></span>
											<span class="fa fa-star" id="5" onclick="rating(5)"></span>
										</p>
										<p class="comment-form-comment">
											<label for="comment">Your Review</label>
											<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
										</p>
										<p class="form-submit">
										@if(Session::get('user_id'))
											<input name="submit" type="button" onclick="submitReview()" id="submit" class="submit" value="Add Review" /> <br>
											  <span id="rate_error"  style="color:red; "></span>
										@else
										<!-- <a href="javascript:void(0)"  class="submit"data-toggle="modal" data-target="#myModal" ><i class="fa fa-user" ></i> Add Review</a> -->
										<input name="submit" type="button" data-toggle="modal" data-target="#myModal" class="submit" value="Add Review" />
										@endif  
											<input type='hidden' name='product_id' value='{{$row->product_id}}' id='product_id' />
											<input type='hidden' name='user_id' id='user_id' value="{{Session::get('user_id')}}" />
										</p>
										<input type="hidden" id="review_type" name="review_type" value="p" />
										<script>/*(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();*/</script>
									</form>
									@endif
									   <!-- <form action="#" method="post" id="commentform" class="comment-form">
										  <p class="comment-form-rating">
											 <label>Your Rating</label>
										  </p>
										  <input type="hidden" name="rating_val" id="rating_val" value="">
										  <p class="stars">
											 <span class="fa fa-star " id="1" onclick="rating(1)" style="cursor: pointer;"></span>
											<span class="fa fa-star " id="2" onclick="rating(2)" style="cursor: pointer;"></span>
											<span class="fa fa-star " id="3" onclick="rating(3)" style="cursor: pointer;"></span>
											<span class="fa fa-star" id="4" onclick="rating(4)" style="cursor: pointer;"></span>
											<span class="fa fa-star" id="5" onclick="rating(5)" style="cursor: pointer;"></span>
										  </p>
										  <p class="comment-form-comment">
											 <label for="comment">Your Review</label>
											 <textarea id="comment" name="comment" cols="30" rows="3" aria-required="true" class="form-control"></textarea>
										  </p>
										  <p class="form-submit">
											 <button class="btn btn-warning">Add Review</button> 
										  </p>
										  <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="c7106f1f46">
										  <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
									   </form> -->
									   <!-- form -->
									</div>
									<!-- #respond -->
								 </div>
							  </div>
						   </div>
						   <!-- /.col -->
						</div>
						<div id="comments">
						   <ul class="commentlist">
							  @foreach($row->product_review as $product_review)
							  <li itemprop="review" class="comment even thread-even depth-1">
								 <div id="comment-390" class="comment_container">
									@if(!empty($product_review->profile_image))
									  <img alt="avtar" src="{{asset('uploads')}}/{{$product_review->profile_image}}" class="avatar img-circle" style="height: 60px; width: 60px; border-radius: 40px;">
									@else
									  <img src="{{asset('uploads')}}/default-user.png" alt="profile image" class="img-circle" style="height: 60px; width: 60px; border-radius: 40px;" />
									@endif
									<div class="comment-text">
									   <span>
									   @for($i=0; $i<5; $i++)
										  @if($i < $product_review->product_rating)
											 <i class="fa fa-star checked"></i>
										  @else
											 <i class="fa fa-star"></i>
										  @endif
									   @endfor
									   </span>
									   <p class="meta">
										  <strong style="text-transform: capitalize;">{{$product_review->customer_name}}</strong> –
										  <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">{{$product_review->date}}</time>:
									   </p>
									   <div itemprop="description" class="description">
										  <p>{{$product_review->product_comment}}
										  </p>
									   </div>
									</div>
								 </div>
							  </li>
							  @endforeach
						   </ul>
						   <!-- /.commentlist -->
						</div>
					 </div>
				  </div>
			   </div>
			</div>
			<div class="card-soup responsive d-sm-none" id="collapse-tabs-0">
			   <div class="card nav-item credit">
				  <div class="card-header">
					 <h4 class="card-title"><a class="accordion-toggle nav-link active" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Accessories">Accessories</a></h4>
				  </div>
				  <div id="collapse-Accessories" class="collapse">Accessories</div>
			   </div>
			   <div class="card nav-item credit">
				  <div class="card-header">
					 <h4 class="card-title"><a class="accordion-toggle nav-link" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Description">Description</a></h4>
				  </div>
				  <div id="collapse-Description" class="collapse">Description</div>
			   </div>
			   <div class="card nav-item credit">
				  <div class="card-header">
					 <h4 class="card-title"><a class="accordion-toggle nav-link" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Specification">Specification</a></h4>
				  </div>
				  <div id="collapse-Specification" class="collapse">Specification</div>
			   </div>
			   <div class="card nav-item credit">
				  <div class="card-header">
					 <h4 class="card-title"><a class="accordion-toggle nav-link credit" data-toggle="collapse" data-parent="#collapse-tabs-0" href="#collapse-Review">Review</a></h4>
				  </div>
				  <div id="collapse-Review" class="collapse">Review</div>
			   </div>
			</div>
		 </div>
		 <!--end second container-->
		 <div class="container mrgtp">
			<div class="row">
			   <div class="col-md-6 col-sm-12">
				  <div class="row">
					 <div class="col-sm-12">
						<h3> People who like this :</h3>
					 </div>
				  </div>
				  <div class="row">
					 @foreach($row->people_who_like as $rows)
						<div class="col-sm-3">
						   <div class="d-flex justify-content-center h-100">
								 <div class="image_outer_container">
							 @if(Session::has('user_id'))
							   <div class="green_icon" onclick="followUser({{Session::get('user_id')}}, {{$rows->customer_id}}, {{$rows->id}})" style="cursor: pointer;"><i class="fa {{$rows->is_follow == 1 ? 'fa-check' : 'fa-plus'}}" id="user_{{$rows->id}}"></i></div>
							 @else
							   <div class="green_icon" data-toggle="modal" data-target="#myModal" style="cursor: pointer;"><i class="fa fa-plus"></i></div>                      
								 @endif
							 <div class="image_inner_container">
									   <img src="{{asset('uploads')}}/{{$rows->profile_image}}">
									</div>
									<div class="text-center">{{$rows->f_name}} {{$rows->l_name}}</div>
								 </div>
							  </div>
						</div>
					 @endforeach
				  </div>
			   </div>
			   <div class="col-md-6 col-sm-12">
				  <div class="row">
					 <div class="col-lg-12 col-sm-12">
						<h3>More From :</h3>
					 </div>
					 <div class="col-lg-9 col-sm-12 ">
						<div class="card hovercard shadow">
						   <div class="cardheader cardheader-hght"> <img src="{{asset('beta_assets/images/add-1-2.jpg')}}" alt=""> </div>
						   <div class="avatar"> 
						   @if(!empty($row->store_details['0']->store_logo))
							 <img src="{{asset('uploads')}}/{{$row->store_details['0']->store_logo}}" alt="profile image" />
						   @else
							 <img alt="" src="{{asset('beta_assets/images/profile.jpg')}}" alt="profile image">
						   @endif
							</div>
						   <div class="info">
							  <div class="title"> <a target="_blank" href="javascript:void(0)" style="text-transform: capitalize;">{{$row->store_details['0']->store_name}}</a> </div>
							  <div class="desc">{{$row->store_details['0']->store_url}}</div>
							  <div class="desc fl-desc"><a href="" class="follow1">+ Follow Store</a></div>
						   </div>
						   <div class="row img-12">
							  @foreach($row->store_product as $store_product)
								 <div class="imge-1"><a href="javascript:void(0)">
								 @if(isset($store_product->product_img) && !empty($store_product->product_img))
									<img alt="{{$store_product->product_name}}" src="{{ getenv('URL')}}{{$store_product->product_img}}">
								 @else
									<img alt="" src="{{asset('beta_assets/images/profile.jpg')}}">
								 @endif
								 </a></div>
							  @endforeach
							  <!-- <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}"></a></div>
							  <div class="imge-1"> <a href=""><img alt="" src="{{asset('beta_assets/images/profile.jpg')}}"></a></div> -->
						   </div>
						   <div class="bottom"> Shop more from Rare Botique  </div>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
		 <!--profile-->
		 <div class="container mrgtp">
			<div class="row">
			   <div class="col-sm-12">
				  <h3 class="might">YOU MIGHT ALSO LIKE</h3>
			   </div>
			</div>
			<div class="row" style="margin:auto; margin-top: 30px;">
				
			   @foreach($data['recent_added_products'] as $recent_added_products)
			    <?php $per = $recent_added_products->vendor_commission_type == 'percentage' ? '%' : 'flat';?>
			   <div class="col-lg-3 col-sm-4 largepad">
				  <div class="col-item">
					 <div class="col-header">
						<div class="price-top">
							<?php $rand = rand(); ?>
						   <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipmddr{{time()}}-{{$recent_added_products->product_id}}-{{$rand}}" data-html="true" title='<div class="tooltip_s"><p  productid="mddr{{time()}}-{{$recent_added_products->product_id}}-{{$rand}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                       <br>
                                       <span class="text1">Add this product to your Store you earn {{$recent_added_products->vendor_commission}} {{$per}} on each sale.
                                       <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$recent_added_products->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
						<h6><a href="javascript:void(0);" class="show-tt1" productid="mddr{{time()}}-{{$recent_added_products->product_id}}-{{$rand}}"><i class="fa fa-barcode"></i></a> My Store</h6>
						</div>
						<div class="price-right">
						   <h5>                                       @if(is_array(Session::get('compare_id')) && in_array($recent_added_products->product_id, Session::get('compare_id')))
								  <a href="javascript:void(0)" onclick="compare({{$recent_added_products->product_id}})" id="compare_{{$recent_added_products->product_id}}" class="cursor-pointer">
									 <i class="fa fa-check"></i> Added
								  </a>
							   @else
							   <a onclick="compare({{$recent_added_products->product_id}})" href="javascript:void(0)" id="compare_{{$recent_added_products->product_id}}" class="cursor-pointer">
								  <i class="ec ec-compare"></i> Compare
							   </a>
							   @endif
							</h5>
						</div>
					 </div>
					 <div class="col-info">
						<div class="price-name">
						   <h5>{{$recent_added_products->category_name}}</h5>
						</div>
						<div class="price-detail">
						   <h3><a href="javascript:void(0)" style="text-transform: capitalize;">{{$recent_added_products->product_name}}</a></h3>
						</div>
					 </div>
					 <div class="photo hovereffect">
						<a href="javascript:void(0);"><img src="{{ getenv('URL')}}{{$recent_added_products->product_img}}" class="img-responsive" alt="a"></a> 
					 </div>
					 <div class="info">
						<div class="price-wrapper">
						   <div class="price">
							  <h5 class="price-text-color"> ${{money_format('%i',$recent_added_products->current_price)}}</h5>
							  <del><span class="amount">${{money_format('%i',$recent_added_products->mrp)}}</span></del>
						   </div>
						   <div class="rating hidden-sm">
							  <span class="wrapper1">
							  <a href="javascript:void(0)">
							  <span class="add-cart-large add-to-cart" id="add-to-like-{{$recent_added_products->product_id}}"><img src="{{asset('beta_assets/images/cart.png')}}" alt=""></span>
							  </a>
							  <span class="tooltip">Add To Cart</span>
							  </span>
						   </div>
						</div>
						<div class="separator clear-left">
							@if(Session::has('user_id'))
							  <p class="btn-add">
								 @if(HomeController::isLiked($recent_added_products->product_id, Session::get('user_id')))
									<a href="javascript:void(0)" class="hidden-sm">
									   <i class="fa fa-heart color-red"></i> {{count($recent_added_products->product_like)<=1000 ? count($recent_added_products->product_like) : '1k'}} 
									</a>
								 @else
									<a href="javascript:void(0)" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$recent_added_products->product_id}})" id="like_{{$recent_added_products->product_id}}">
									   <i class="fa fa-heart"></i> {{count($recent_added_products->product_like)<=1000 ? count($recent_added_products->product_like) : '1k'}} 
									</a>
								 @endif
							  </p>
							  <p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
								 <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, {{Session::get('user_id')}}, 1)" >Collection</a> <span class="tooltip">Add To collection</span> </span> 
							  </p>
							@else
							   <p class="btn-add"> 
								  <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
									<i class="ec ec-favorites"></i> {{count($recent_added_products->product_like)<=1000 ? count($recent_added_products->product_like) : '1k'}} 
								  </a>
							   </p>
							  <p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
								 <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
							  </p>
							@endif
						</div>
						<!--<div class="separator clear-left">
						   <p class="btn-add"> <i class="ec ec-favorites"></i><a href="" class="hidden-sm">Like</a></p>
						   <p class="btn-details"> <span class="wrapper"><img src="{{asset('beta_assets/images/add-clooection.png')}}" alt="" style="width:15px;"> <a href="javascript:void(0)">Collection</a> <span class="tooltip">Add To collection</span> </span> </p>
						</div>-->
					 </div>
				  </div>
			   </div>
			   @endforeach
			</div>
		 </div>
		 <!--you may also like-->
	</div>