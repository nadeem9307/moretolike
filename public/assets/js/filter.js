/* $('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>'); */
$(document).ready(function(){
    $(document).on('keyup','#keywords',function(){
		$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>');
        filter_data();
    }); 
	$(document).on('click','.common_selector',function(){
		$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>');
        filter_data();
    });
	$(document).on('change','#sort_by',function(){
		$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>');
		var sort_by 		= $('#sort_by').val();
		if(sort_by)
        filter_data();
    });
	$(document).on('change','#per_page',function(){
		$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>Loading...</h4></div>');
		var per_page 		= $('#per_page').val();
		if(per_page)
        filter_data();
    });
	$(document).on('click','#product_paginate ul li a',function(e){
		e.preventDefault();
		$('#page').val('ajax');
		var page = $(this).attr('page');
		filter_data(page);
    });

    $('#price_range').slider({
        range:true,
        min:10,
        max:100000,
        values:[10, 100000],
		slide: function( event, ui ) {
			console.log(ui.values[ 0 ]);
			$( "#price_show" ).text( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		},
        stop:function(event, ui)
        {
            $('#price_show').text('$'+ui.values[0] + ' - ' + '$'+ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
		
    });
	$(document).on('click','.load_more_ajax',function(e){
		e.preventDefault();
		$(this).text('Loading..');
		load_store_products(this);
    });
});
	function filter_data(page = 1)
    {
        var action 			= 'fetch_data';
		var page_name		= $('#pageName').val();
		var s 				= $('#keywords').val();
		var sort_by 		= $('#sort_by').val();
		var per_page 		= $('#per_page').val();
		var min_price 		= $('#hidden_minimum_price').val();
        var max_price 		= $('#hidden_maximum_price').val();
        var category 		= get_filter('f_category');
        var brand 			= get_filter('f_brand');
        var color 			= get_filter('f_color');
        var retailer 		= get_filter('f_retailer');
		//console.log(category);
        $.ajax({
            url:"/beta-product-filter",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method:"POST",
            data:{action: action, s: s, page: page, category: category, brand: brand, color: color, retailer: retailer, min_price: min_price, max_price: max_price, sort_by: sort_by, per_page: per_page, page_name: page_name, pageName: page_name},
            success:function(data){
				if(data){
                $('.filteted_row').html(data);
				}else{
				$('.filteted_row').html('<div id="loading" class="col-lg-12" style="text-align: center" ><h4>No data found.</h4></div>');
				}
				$('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        });
    }

    function get_filter(class_name)
    {
		//console.log(class_name);
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
	function load_store_products(thisObj){
		var page = $(thisObj).attr('page');
		var load = $(thisObj).attr('load');
		console.log(load);
		$.ajax({
            url: load,
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method:"POST",
            data:{page: page},
            success:function(data){
				if(data){
					$('.load_pagination').remove();
					$('.load_more_added').append(data);
				}
            }
        });
	}
	$('#searchboxID').keyup(function(){
		$('.search_item').hide();
		var txt = $('#searchboxID').val();
		$('.search_item').each(function(){
			console.log($(this).attr('product_title'));
		   if($(this).attr('product_title').toUpperCase().indexOf(txt.toUpperCase()) != -1){
			   $(this).show();
		   }
		});
	});