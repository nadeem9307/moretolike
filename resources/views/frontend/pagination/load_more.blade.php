<?php
$link_limit = 10; // maximum number of links (a little bit inaccurate, but will be ok for now)
//dd($paginator->);
?>

@if ($paginator->lastPage() > 1&&$paginator->currentPage() <= $paginator->lastPage())
    <div class="row">
		<div class="col-lg-12 text-center">
			<a href="javascript: void(0);" load="{{url('/')}}/load-store-products/{{$store_id}}" page="{{$paginator->currentPage()+1}}" class="text-center load_more_ajax">Load More</a>
		</div>
    </div>
@endif