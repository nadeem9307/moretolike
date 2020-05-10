	<?php
	use \App\Http\Controllers\HomeController;
	//echo $data['page']; exit();
	?>
	@if($store_products)
	<div class="row">
	@foreach($store_products as $store_product)
	<div class="col-lg-3 col-sm-6 brds search_item" product_title="{{$store_product->product_name}}">
		<div class="product-grid2 ">
		   <div class="add-to-cart1">
		   <a href="#" class="viewp1">Save this+</a> 
			@if(Session::has('user_id'))
				  @if($store_product->is_liked == 0)
					  <!--a href="#" class="viewp2"><i class="fa fa-heart"></i></a-->
					 <a href="javascript:void(0)" class="viewp2" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$store_product->product_id}})" id="like_{{$store_product->product_id}}">
						<i class="fa fa-heart"></i> {{count($store_product->product_like)}} 
					 </a>
				  @else
					 <a href="javascript:void(0)" class="viewp2">
						<i class="fa fa-heart color-red"></i> {{count($store_product->product_like)}} 
					 </a>
				  @endif
				 @endif
		   </div>
			<div class="product-image2">
				<a href="#">
					<img class="pic-1" src="{{ getenv('URL')}}308X330_{{$store_product->product_img}}" alt="" />
					<img class="pic-2" src="{{ getenv('URL')}}{{$store_product->product_img}}" alt="" />
				</a>
				 <div class="product-content">
					<h4 class="topshop">{{$store_details->store_name}}</h4>
				   <h3 class="title"><a href="#">{{$store_product->product_name}}</a></h3>
				   <span class="price">{{$store_product->current_pri}}</span>
				</div>
				<div class="add-to-cart"><a href="{{url('/product/'.$store_product->product_id)}}" class="show_product_detail viewp">View Product</a> <a href="#" class="buy">BUY AT STORE</a></div>
			</div>
		</div>
	</div>
	@endforeach
	</div>
	<div class="load_pagination" >
		@include('frontend/pagination/load_more', ['paginator' => $pagination,'store_id'=>$store_id])
	</div>
	<script>
	$('.show_product_detail').magnificPopup({
		type:'ajax',
		ajax: {
			settings: null,
			type:'GET',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			cursor: 'mfp-ajax-cur', 
			tError: '<a href="%url%">The content</a> could not be loaded.',
		},
	});
	</script>
	@endif