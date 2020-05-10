/*for home page js*/
var disable_cart_slide = true;
$(document).ready(function(){
    $('a.logoutUrl').click(function(){
          $("#loading_lo").show();
      });
	var page = 2;
	
    $(document).on('change', '.disable_cart_slide', function() {
        if(this.checked) {
          disable_cart_slide = false;
        }else{
            disable_cart_slide = true;
        }
    });
	$('#price_detail_dl').slider({
        range:true,
        min:10,
        max:100000,
        values:[10, 100000],
		slide: function( event, ui ) {
			$( "#home_price_show" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		},
        stop:function(event, ui)
        {
            $('#home_price_show').html('$'+ui.values[0] + ' - ' + '$'+ui.values[1]);
            $('#home_min_price').val(ui.values[0]);
            $('#home_max_price').val(ui.values[1]);
        }
    });
	/***** Cart and cheeckout Ajax ************/
	jQuery(document).on('click','.slide_cart_page',function(e){
		e.preventDefault();
		if(jQuery('#cart-items li').length){
		load_cart_page();
		}else{
		jQuery('.cart_err').empty();
		jQuery("<p class='text-center cart_err'><small>Cart is empty.</small></p>").insertAfter(this);
		}
	});
	jQuery(document).on('click','.back_to_slide',function(){
		jQuery('.slide_cart_content').remove();
		//openNav();
		jQuery('.carts,.cart-header').toggle();
        //jQuery('#mySidenav').css('right','0px');
       jQuery('#mySidenav').css('width','250px');
         jQuery('#mySidenav').css('padding-left','0px');
           jQuery('#mySidenav').css('padding-right','0px');
       
      
	});
	jQuery(document).on('click','.back_to_cart',function(e){
		var back = jQuery(this).attr('back');
         
		jQuery('.slide_checkout_content').remove();
		if(back=='slide_menu'){
			jQuery('.slide_cart_content').remove();
			//openNav();
            
			jQuery('.carts,.cart-header').toggle();
		}else{
			load_cart_page();
		}
        jQuery('#mySidenav').css('width','250px');
         jQuery('#mySidenav').css('padding-right','0px');
	});
	jQuery(document).on('click','.slide_checkout',function(e){
		e.preventDefault();
		jQuery('.slide_cart_content').remove();
		jQuery('#mySidenav .content').remove();
		load_checkout_page();
	});
	jQuery(document).on('click','.slide_checkout_page',function(e){
		e.preventDefault();
         jQuery('#mySidenav').removeClass('sidenav23');
		if(jQuery('#cart-items li').length){
			jQuery('.slide_cart_content').remove();
			load_checkout_page('slide_menu');
		}else{
			jQuery('.cart_err').empty();
			jQuery("<p class='text-center cart_err'><small>Cart is empty.</small></p>").insertAfter(this);
		}
	});
	jQuery(document).on('click','.close_slide_cart',function(){
		jQuery('.slide_cart_content').remove();
		jQuery('.carts,.cart-header').toggle();
		jQuery('#mySidenav').removeClass('col-lg-8');
		jQuery('#mySidenav').css('width','0px');
	});
	jQuery(document).on('submit','#customer_details_form',function(e){
		e.preventDefault();
		//$("#mySidenav").css({"opacity": "0.6","cursor": "wait"});
		$("#place_order").val("Please Wait...");
		slide_place_order();
	});
	jQuery(document).on('submit','#makePayment',function(e){
		e.preventDefault();
		$('.pay_with_form_btn').val('Please wait...');
		slide_make_payment(this,'by_form');
	});
	jQuery(document).on('submit','#makePaymentWithSavedCard',function(e){
		e.preventDefault();
		$('.pay_with_card_btn').val('Please wait...');
		slide_make_payment(this,'pay_with_saved_card');
	});
	/***** End Cart and cheeckout Ajax ************/
	
	jQuery('p.check_show>span.fa-star').removeClass('checked');
	var total_review = jQuery('.check_show').attr('total');
	//console.log(total_review);
	for (var i = 1; i <= total_review; i++) {
		jQuery(".check_show #"+i).addClass("checked");
	}
	
	/* Start Load Country, State and City ajax ****/
	jQuery(document).on('change','.country',function(e){
		var country_id = jQuery(this).val();
		load_state(this,country_id);
	});
	
	jQuery(document).on('change','.state',function(e){
		var state_id = jQuery(this).val();
		load_city(this,state_id);
	});
	/* End Load Country, State and City ajax ****/
	jQuery(document).on('click','.load_tab',function(){
      	var cat_id = $(this).attr('cat_id');  
      	var tab = $(this).attr('aria-controls');  
      	jQuery.ajax({
			url:'/tab-product',
			type:'GET',
			 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			data:{cat_id: cat_id,tab: tab},
			success:function(data){
				jQuery("#"+tab).html(data);
			}
		});
 	}); 
});

/*for tool tip*/
$(document).on("click",".show-tt1",function () {
	var productid = $(this).attr('productid');
	console.log(productid);
	//  alert("[data-toggle="tooltip+productid+"]");
	$("[data-toggle='tooltip" + productid + "']").tooltip('toggle');
});
$(document).on('click', '.tooltipClose1', function () {
	var productid = $(this).attr('productid');
	$("[data-toggle='tooltip" + productid + "']").tooltip('toggle');
});
/*./for tool tip*/
/* for side nav */
function openNav() {
    $('#mySidenav').addClass('sidenav23');
    document.getElementById("mySidenav").style.right = "0px";
}
function closeNav() {
   // $('#mySidenav').removeClass('sidenav23');
	document.getElementById("mySidenav").style.right = "-250px";
}
/* ./for side nav */
function showCollectionDetails(collection_id){
	jQuery.ajax({
			   	url:'/fetch-collection/'+collection_id,
			   	type:'get',
			   	headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			   	data:{},
			   	success:function(data) {
			   		 jQuery('#collection_details').html(data.result_beta);
			   	}
			   });
}
/* for compare */
function compare(product_id) {
	$.ajax({
		url:'/compare',
		type:'post',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data:{product_id:product_id},
		success:function(data) {
			var compare_data_count = '<i class="ec ec-compare"></i><span class="abs beta-compare">'+data['data_count']+'</span> Compare';
			$('#beta-compare').html(compare_data_count);
			//data = data['data'];
			if(!$.isNumeric(data.data)){
				//var msg = '<p style="color:red">'+data.split(':')['1']+', </p>';
				bootbox.dialog({ message: data.data });
				$('div.modal-dialog').css('margin-top', '200px');
			}else{
				var data = '<i class="fa fa-check"></i> Added';
				$('#compare_'+product_id).html(data);
				$('#compare_1_'+product_id).html(data);
				/*$('span.compare_added').removeClass('hidden');
				$('span.compare_added').html(data);*/
				/*$('#added_compare_'+product_id).show();
				$('#com_'+product_id).hide();
				$('#added_compare_deal_'+product_id).show();
				$('#com_deal_'+product_id).hide();
				$('#header-comapre').html(data);*/
			}
		}
	});
}
function remove_compare(thisObj,product_id) {
	$.ajax({
		url:'/remove-compare',
		type:'post',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data:{id:product_id},
		success:function(data) {
			var compare_data_count = '<i class="ec ec-compare"></i><span class="abs beta-compare">'+data['data_count']+'</span> Compare';
			$('#beta-compare').html(compare_data_count);
			//data = data['data'];
			$(thisObj).closest('li').remove();
		}
	});
}
/* ./for compare */
/*for product like*/
function productLike(id, user_id, product_id){
	jQuery.ajax({
	   	url:'/add-like',
	   	type:'POST',
	   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
	   	data:{user_id: user_id,product_id:product_id},
	   	success:function(result) {
	   		var heartinnerHTML = '<i class="fa fa-heart color-red"></i> '+parseInt(result)+' ';
	   		$('#'+id).html(heartinnerHTML);
		},
	   	error:function(e){
	   		console.log('e');
	   		console.log(e);
	   	}
	});
}
/*for product like*/
/* for clientslist */
$(function () {
	// vars for clients list carousel
	// http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
	var $clientcarousel = $('#clients-list');
	var clients = $clientcarousel.children().length;
	var clientwidth = (clients * 220); // 140px width for each client item 
	$clientcarousel.css('width', clientwidth);
	var rotating = true;
	var clientspeed = 0;
	var seeclients = setInterval(rotateClients, clientspeed);
	$(document).on({
		mouseenter: function () {
			rotating = false; // turn off rotation when hovering
		},
		mouseleave: function () {
			rotating = true;
		}
	}, '#clients');
	function rotateClients() {
		if (rotating != false) {
			var $first = $('#clients-list li:first');
			$first.animate({
				'margin-left': '-220px'
			}, 2000, function () {
				$first.remove().css({
					'margin-left': '0px'
				});
				$('#clients-list li:last').after($first);
			});
		}
	}
});
/* ./for clientslist */
/* for modal */
$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
});
/* ./for modal */
/* for stricky */
window.onscroll = function () {
	myFunction()
};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
		$('.sidenav').addClass('small-header');
	} else {
		header.classList.remove("sticky");
		$('.sidenav').removeClass('small-header');
	}
}
/* ./for stricky */
/* for menu left */
var menuLeft = document.getElementById('cbp-spmenu-s1'),
	showLeft = document.getElementById('showLeft'),
	body = document.body;
showLeft.onclick = function () {
	$('#showLeft>i').toggleClass("fa-bars");
	$('#showLeft>i').toggleClass("fa-times");
	classie.toggle(this, 'active');
	classie.toggle(body, 'cbp-spmenu-push-toright');
	classie.toggle(menuLeft, 'cbp-spmenu-open');
	disableOther('showLeft');
};
showLeft1 = document.getElementById('showLeft1'),
	body = document.body;
showLeft1.onclick = function () {
	$('#showLeft1>i').toggleClass("fa-bars");
	$('#showLeft1>i').toggleClass("fa-times");
	classie.toggle(this, 'active');
	classie.toggle(body, 'cbp-spmenu-push-toright');
	classie.toggle(menuLeft, 'cbp-spmenu-open');
	//disableOther( 'showLeft1' );
};
function closePanel() {
	$('#cbp-spmenu-s1').removeClass('cbp-spmenu-open');
	$('body').removeClass('cbp-spmenu-push-toright');
	$('#showLeft1>i').toggleClass("fa-bars");
	$('#showLeft1>i').toggleClass("fa-times");
	$('#showLeft>i').toggleClass("fa-bars");
	$('#showLeft>i').toggleClass("fa-times");
}
/* ./for menu left */
/* for crausel */
$(document).ready(function () {
	getNotificationUpdate();
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function () {
		clickEvent = true;
		$('.nav li').removeClass('active');
		$(this).parent().addClass('active');
	}).on('slid.bs.carousel', function (e) {
		if (!clickEvent) {
			var count = $('.nav').children().length - 1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if (count == id) {
				$('.nav li').first().addClass('active');
			}
		}
		clickEvent = false;
	});
	$('.add-to-cart').each(function (i, el) {
		$(el).click(function (e) {
			e.preventDefault();
			var carousel = $(this).closest('.col-item');
			var img = carousel.find('.photo img');
			var position = $(img).offset();
			var productName = $(this).closest('.col-item').find('.col-info .price-detail h3').text();
			$("body").append('<div class="floating-cart"></div>');
			var cart = $('div.floating-cart');
			$("<img src='" + img.attr('src') + "' class='floating-image-large' />").appendTo(cart);
			$(cart).css({
				'top': position.top + 'px',
				"left": position.left + 'px'
			}).fadeIn("slow").addClass('moveToCart');
			setTimeout(function () {
				//$("body").addClass("MakeFloatingCart");
			}, 800);
			setTimeout(function () {
				$('div.floating-cart').remove();
				//$("body").removeClass("MakeFloatingCart");
				var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='" + img.attr('src') + "' alt='' /></div><div class='info'><span>" + productName + "</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div></div>";
				$("#cart .empty").hide();
				$("#cart").append(cartItem);
				$("#checkout").fadeIn(500);
				$("#cart .cart-item").last()
					.addClass("flash")
					.find(".delete-item").click(function () {
						$(this).parent().parent().fadeOut(300, function () {
							$(this).remove();
							if ($("#cart .cart-item").length == 0) {
								$("#cart .empty").fadeIn(500);
								$("#checkout").fadeOut(500);
							}
						})
					});
				setTimeout(function () {
					$("#cart .cart-item").last().removeClass("flash");
				}, 10);
			}, 1000);
		});
	});
	$('.shopping-cart-wrp').click(function () {
		$(this).find('#cart').addClass('open');
	});
});
/* ./for crausel */
/* for bs crausel */
$(document).ready(function () {
	$('#myCarousel').on('slid.bs.carousel', function () {
		//alert("slid");
	});
});
/* ./for bs crausel */
/* for Flyto */
function flyToElement(cart, flyer, flyingTo) {
	console.log(cart);
	var $func = $(this);
	var divider = 3;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({
		position: 'absolute',
		top: $(flyer).offset().top + "px",
		left: $(flyer).offset().left + "px",
		opacity: 1,
		'z-index': 99999999
	});
    
    $(flyerClone).addClass("fly_cust_cl");
    
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + 18 + ($(flyingTo).width() / 2) - ($(flyer).width() / divider) / 2;
	var gotoY = $(flyingTo).offset().top - 10 + ($(flyingTo).height() / 2) - ($(flyer).height() / divider) / 2;
	$(flyerClone).animate({
			opacity: 0.4,
			left: gotoX,
			top: gotoY,
			width: $(flyer).width() / divider / 2.5,
			height: $(flyer).height() / divider / 2.5
		}, 700,
		function () {
			$(flyingTo).fadeOut('fast', function () {
				$(flyingTo).fadeIn('fast', function () {
					$(flyerClone).animate({
						'top': $(flyingTo).offset().top - 10,
						'z-index': '999999999999'
					}, function () {
						$(flyerClone).remove();
                        if(disable_cart_slide)
						$('#mySidenav').css('right', '0px');
						$('.cartvalue').html(cart.total_quantity);
						//update cart value
						$(".my_cart a b").html(cart.total_quantity);
						$('#cart-items').html(cart.cart_beta);
						$('.checkout_button').html(cart.checkout_button);
						$('.cart_button').html(cart.cart_button);
						$('.cart-total-price').html('$'+cart.total_price);
						$(".my_cart a span").html('$'+cart.total_price);
						$('body').addClass('body_overlay');
						//$('.mycheckout').addClass('slide_checkout_page');
					});
				});
			});
		});
}
$(document).ready(function () {
	$(document).on('click','span.add-to-cart', function () {
		var product_id = this.id.split('-')[3];
		var quantity = 1;
		var itemImg = $(this).parents('.flyer_parent_div').find('div.photo.hovereffect').find('img').eq(0);
		/*detect mobile*/
		var isMobile = false; //initiate as false
		// device detection
		if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
			/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
			isMobile = true;
		}
		/*add to cart*/
		addFlyToCart(quantity,product_id,itemImg,isMobile);
		/*add to cart*/
		/*detect mobile*/
	});
	$(document).on('click','.add-to-cart1', function () {
		var product_id 	= this.id.split('-')[3];
		var quantity 	= 1;
		var itemImg = $('.pro_image'+product_id).find('img').eq(0);
		/*detect mobile*/
		var isMobile = false; //initiate as false
		// device detection
		if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
			/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
			isMobile = true;
		}
		/*add to cart*/
		addFlyToCart(quantity,product_id,itemImg,isMobile);
		/*add to cart*/
		/*detect mobile*/
	});
	$(document).on('click','.add-to-cart-detail', function () {
		var product_id 	= this.id.split('-')[3];
		var quantity 	= $('#quantity_'+product_id).val();
		var color 		= $('#attr_color_'+product_id).val();
		var size 		= $('#attr_size_'+product_id).val();
		var itemImg = $('#pic-1-'+product_id).find('img').eq(0);
		/*detect mobile*/
		var isMobile = false; //initiate as false
		// device detection
		if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
			/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
			isMobile = true;
		}
		var attributes = [];
		$('.all_attr').each(function(i, obj) {
			var item_name 	= $(this).attr('item_name');
			var att_id 		= $(this).attr('att_id');
			var item_text 	= $(this).find(":selected").text();
			if(this.value != ''){
		    attributes.push({ id: att_id,item_id: this.value, name: item_name, item_text: item_text }); 
			}
		   
		});
			//console.log(attributes);
		/*add to cart*/
		addFlyToCart(quantity,product_id,itemImg,isMobile,attributes,size);
		/*add to cart*/
		/*detect mobile*/
	});
});
function addFlyToCart(quantity=false,product_id=false,itemImg='',isMobile=false,attributes='',size=''){
	jQuery.ajax({
		   	url:'/product-details/add-to-cart',
		   	type:'POST',
		   	headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		   	data:{quantity: quantity,product_id: product_id,attributes: attributes,size: size},
		   	success:function(result) {
		   		if (isMobile == true) {
					if ($('.sticky_bag_large').css('display') == 'none' && $('.mobile_main_pnl').css('display') == 'none') {
						console.log('sdsdsdsdssd');
						flyToElement(result, $(itemImg), $('.sticky_bag_ipad'));
					} else {
						console.log('sdsdsdsdssd12');
						flyToElement(result, $(itemImg), $('.sticky_bag_mobile'));
					}
				} else {
					flyToElement(result, $(itemImg), $('.sticky_bag_large'));
				}
		   		/*jQuery('#cart_content').html(result['data']);
				jQuery('#cart_list_dynamic').html(result['sub_data']);
		   		window.location.href = "/beta-cart";*/
		   	},
		   	error:function(e){
		   		console.log(e);
		   	}
		});
}
/* ./for Flyto */
/* for CountDown */
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
// Update the count down every 1 second
var x = setInterval(function () {
	// Get todays date and time
	var now = new Date().getTime();
	// Find the distance between now and the count down date
	var distance = countDownDate - now;
	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	// Output the result in an element with id="demo"
	var timer_data = '<span data-value="0" class="days"> <span class="value">' + days + '</span> <br>';
	timer_data += '<b>Days</b> </span> <span class="hours"> <span class="value">' + hours + '</span><br>';
	timer_data += '<b>Hours</b> </span> <span class="minutes"> <span class="value">' + minutes + '</span><br>';
	timer_data += '<b>Mins</b> </span> <span class="seconds"> <span class="value">' + seconds + '</span><br>';
	timer_data += '<b>Secs</b> </span>';
	//document.getElementById("demo").innerHTML = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
	$("div.deal-countdown.countdown.hunder").html(timer_data);
	// If the count down is over, write some text 
	if (distance < 0) {
		clearInterval(x);
		$("div.deal-countdown.countdown.hunder").html('Expired');
	}
}, 1000);
//$("#ex2").slider({});
/* ./for CountDown */
/*./for home page js*/
/* for my-profile page js*/
var lightbox = GLightbox();
var lightboxDescription = GLightbox({
   selector: 'glightbox2'
 });
/* ./for my-profile page js*/
/*facebook*/
// Load the JavaScript SDK asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// Facebook login with JavaScript SDK
function fbLogin() {
  FB.init({
        appId      : '492415414648686', // FB App ID

        cookie     : true,  // enable cookies to allow the server to access the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v4.0' // use graph api version 2.8
      });
      // Check whether the user already logged in
      FB.getLoginStatus(function(response) {
         
           console.log('yes');
          if (response.status === 'connected') {
          	
              //display user data
              getFbUserData();
          }
      });
  FB.login(function (response) {
      if (response.authResponse) {
          // Get and display the user profile data
          getFbUserData();
      } else {
          document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
      }
  }, {scope: 'email'});
}
function getFbUserFeed(){
  FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
  function (response) {
      document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
      document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
      document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
  });
}
// Logout from facebook
function fbLogout() {
  FB.logout(function() {
      document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
      document.getElementById('fbLink').innerHTML = '<img src="http://demos.codexworld.com/login-with-facebook-using-javascript-sdk/fblogin.png"/>';
      document.getElementById('userData').innerHTML = '';
      document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
  });
}
function getFbUserData(){
  FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
  function (response) {
      var access_token = '';
      FB.getLoginStatus(function(response) {
          if (response.status === 'connected') {
              access_token = response.authResponse.accessToken;
          }
      });
      $.ajax({
        url:'/facebook-login',
        type:'POST',
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        data:{ email:response.email, access_token:access_token},
        success:function(result){
          console.log(result);
          if(result == 'success'){
            var pathname = window.location.pathname;
              if(pathname == '/user-register')
                {
                window.location.href= 'https://'+window.location.hostname+'/customer';
                }else{
                  window.location.href=pathname;
                }
              }else{
              $('#error_login').html(result);
              $('#login_password').val('');
              }
            }
    });
      console.log('response');
      console.log(response);
      /*document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
      document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
      document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';*/
      // Save user data
      //saveUserData(response);
  });
}
/*facebook*/
/*login in application*/
function login(){
	var email = jQuery('#login_email').val();
	var password = jQuery('#login_password').val();
	var emailErr = passwordErr = true;
	if (email == "") {
		printError("emailErrLogin", "Please enter your email address");
	}else{
		  // Regular expression for basic email validation
		   printError("emailErrLogin", "");
	    var regex = /^\S+@\S+\.\S+$/;
	    if(regex.test(email) === false) {
	        printError("emailErrLogin", "Please enter a valid email address");
	    } else{
	        printError("emailErrLogin", "");
	        emailErr = false;
	    }
	}
	if(password == ""){
	    printError("passwordErrLogin", "Please enter your password"); 
	}else{
	  	printError("passwordErrLogin", "");
	  	passwordErr = false;
	}
	if((emailErr || passwordErr) == true) {
		//error present
       return false;
    }else{
    	//No error
    	jQuery('.login__submit').addClass('processing');
		jQuery.ajax({
			url:'/user-login',
			type:'POST',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			data:{ email:email, password:password },
			success:function(result){
				console.log(result);
				if(result == 'success'){
					var pathname = window.location.pathname;
					if(pathname == '/user-register')
					{
						window.location.href= 'https://'+window.location.hostname+'/customer';
					}else{
						window.location.href=pathname;
					}
				}else{
		            jQuery('.login__submit').removeClass('processing');
		            printError("emailErrLogin", result);
					/*bootbox.alert('Not able to login : '+result);*/
					//jQuery('#error_login').html(result);
					jQuery('#login_password').val('');
				}
			},
			error : function (e){
		         jQuery('.login__submit').removeClass('processing');
		        printError("emailErrLogin", e);
				//bootbox.alert('Not able to login');
			}
		});
    }
    
}
/*login in application*/
/*for product rating*/
function rating(rate_val){
		
		var valuess = jQuery('#rating_val').val(rate_val);
		jQuery('p.stars>span.fa-star').removeClass('checked');
		for (var i = 1; i <= rate_val; i++) {
			console.log("p.stars #star"+i);
		jQuery("p.stars #star"+i).addClass("checked");
		}
	}
function submitReview() {
	var rate_point = jQuery('#rating_val').val();
	if(rate_point){
		var form_val = jQuery('#commentform').serialize();
		jQuery.ajax({
			url:'/rating',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			type:'post',
			data:form_val,
			success:function(data){
					jQuery('#rate_error').html('Thank u for submit Your rating.');
					jQuery('#comment').val('');
			},
			error:function(e){
			}
		});
	}
	else
	{
		jQuery('#rate_error').html('Please give us your rate for this product.');
	}
}
/*for product rating*/
function uploadImage(){
	$('input[file]').trigger("click");
}
/*add to cart*/
function addToCarts(product_id) {
	var quantity = jQuery('#quantity_'+product_id).val();
	if($.isNumeric( quantity ) && quantity > 0 ){
		quantity = quantity;
	}else{
		quantity = 1;
	}
	var color = jQuery('#attr_color_'+product_id).val();
	jQuery.ajax({
	   	url:'/product-details/add-to-cart',
	   	type:'POST',
	   	headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
	   	data:{quantity: quantity,product_id:product_id, color:color},
	   	success:function(result){
	   		jQuery('#cart_content').html(result['data']);
			jQuery('#cart_list_dynamic').html(result['sub_data']);
	   		window.location.href = "/beta";
	   	},
	   	error:function(e){
	   		console.log(e);
	   	}
	});
}
/*add to cart*/
function addToCartsSlider(product_id) {
	var quantity = 1;
	jQuery.ajax({
	   	url:'/product-details/add-to-cart',
	   	type:'POST',
	   	headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
	   	data:{quantity: quantity,product_id:product_id},
	   	success:function(result) {
	   		jQuery('#cart_content').html(result['data']);
			jQuery('#cart_list_dynamic').html(result['sub_data']);
	   		window.location.href = "/beta-cart";
	   	},
	   	error:function(e){
	   		console.log(e);
	   	}
	});
}
function removeCart(cartid,qty,price,totalqty,total,slide = ''){
		    /*$this=jQuery(this);
		    var totalqty=jQuery(".count").html();
		    var total=jQuery("span.amount.amount_total").html();
		    console.log('total');
		    console.log(total);
		    totalarr =  total.split('$');
		    var remove_price = parseInt(qty)*parseInt(price);
		    console.log('remove_price');
		    console.log(remove_price);
		    var total_qty = parseInt(totalqty) - parseInt(qty);
		    var total= parseInt(totalarr[1])  - parseInt(remove_price);
		    jQuery(".count").html(total_qty);
		    jQuery("span.amount.amount_total").html('$'+total);
			jQuery('#'+cart_id).closest('li').remove();
			jQuery('#'+cart_id+'_li').closest('li').remove();*/
		    var cart_id = cartid;
			if(slide)
		    var slide 	= slide;
			else
		    var slide 	= 'no_slide';
			jQuery.ajax({
				url:'/remove-cart-item',
				type:'post',
				headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
				data:{cart_id: cart_id,slide: slide},
				success:function(data){
					jQuery('.slide_cart_content').remove();
					$('.cartvalue').html(data.total_quantity);
					$('#cart-items').html(data.data);
					$('.cart-total-price').html('$'+data.subtotal);
					$(".my_cart a b").html(data.total_quantity);
					$(".my_cart a span").html('$'+data.subtotal);
					if(slide == 'no_slide')
					load_cart_page();
				}
			});
	}
	function followUser(follower_id, following_id, like_id){
      jQuery.ajax({
          url:'/product-details/add-user-follow',
          type:'POST',
           headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          data:{follower_id: follower_id, following_id: following_id},
          success:function(result) {
            if(result == 'fa-plus'){
              $('#user_'+like_id).removeClass('fa-check');
              $('#user_'+like_id).addClass(result);
            }else{
              $('#user_'+like_id).removeClass('fa-plus');
              $('#user_'+like_id).addClass(result);
            }
            //bootbox.dialog({message : result});
          },
          error:function(e){
            console.log(e);
          }
       });
    }
    jQuery(document).on('change','#terms',function() {
		if (jQuery('#terms').is(":checked")) {
          jQuery('#place_order').prop("disabled", false);
        } else {
        	jQuery('#place_order').prop("disabled", true);
        }
	});
function addToCartAcc(accessories,thisobj) {
		var rand_val = jQuery(thisobj).attr('rand_val');
		$('.add_msg').remove();
		var add_this_all = jQuery('.add_this_all:checked').length;
		if(add_this_all){
			var product_id = [];
			jQuery.each(jQuery('.add_this_all:checked'),function() {
				//var product_id[] = $(this).val();
				product_id.push($(this).val());
			});
			product_id = product_id.join(',');
			addAccItemsToCart(product_id,'all');
		}else{
			var product_ids = jQuery(thisobj).attr('product_id');
			//console.log(rand_val);
			console.log('this_div_checked'+rand_val+' .add_this_all');
			jQuery.each(jQuery('.this_div_checked'+rand_val+' .add_this_all'),function() {
				var product_id = $(this).val();
			});
				addAccItemsToCart(product_ids,'all');
			/* jQuery.each(accessories,function(acc) {
				addAccItemsToCart(accessories,acc);
			}); */
		}
		jQuery("<p class='add_msg'>All Product Added.</p>").insertAfter(".add-all-to-cart");
		//flyto();
}
function addAccItemsToCart(accessories,acc = ''){
		/* if(acc != ''){
			var product_id 	= accessories[acc].product_id;
			var itemImg 	= jQuery('#img-responsive_'+accessories[acc].product_id).eq(0);
		}else{ */
			var product_id 	= accessories;
			var itemImg 	= jQuery('#img-responsive_'+product_id).eq(0);
		//}
        //flyToElement(accessories[acc].product_id, jQuery(itemImg), jQuery('#cart_content1'));
		// console.log(accessories[acc].product_id);
		jQuery.ajax({
			url:'/product-details/add-to-cart',
			type:'POST',
			 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			data:{quantity: 1,product_id: product_id, color: '', all_p: acc},
			success:function(cart) {
				 // res = JSON.parse(result);
				//console.log(cart.cart_beta); 
				$('.cartvalue').html(cart.total_quantity);
				$('#cart-items').html(cart.cart_beta);
				$('.checkout_button').html(cart.checkout_button);
				$('.cart_button').html(cart.cart_button);
				$('.cart-total-price').html('$'+cart.total_price);
				 // jQuery('.tab-pane').addClass("active");
				//   source: JSON.parse(result)
				// });
				// window.location.href = "/beta-cart";
			},
			error:function(e){
				console.log(e);
			}
		});
}
function submitReview() {
		var rate_point = jQuery('#rating_val').val();
		if(rate_point){
			var form_val = jQuery('#commentform').serialize();
			jQuery.ajax({
				url:'/rating',
				headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
				type:'post',
				data:form_val,
				success:function(data){
						jQuery('#rate_error').html('Thank u for submit Your rating.');
						jQuery('#comment').val('');
						bootbox.alert('Thank u for submit Your rating');
				},
				error:function(e){
				}
			});
		}
		else
		{
			var review_type = $('#commentform #review_type').val();
			
			if(review_type == 's'){
				jQuery('#rate_error').html('Please give us your rate for this shop.');
			}else{
				jQuery('#rate_error').html('Please give us your rate for this product.');
			}
		}
	}
function addToCollectionConfirm(product_id, customer_id, is_shareable){
    if(is_shareable == 0){
    var msg = '<div style="text-align:center"><a href="javascript:void(0)" class="btn btn-warning marginadd" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }else{
  	var msg = '<div style="text-align:center"><a href="javascript:void(0)" class="btn btn-warning marginadd" onclick="addToMyStoreHome('+product_id+', '+customer_id+')">Add to my Store Collection</a> <a href="javascript:void(0)" class="btn btn-warning marginadd" onclick="addToMyCollectionHome('+product_id+', '+customer_id+')">Add to my Personal Collection</a></div>';
    }
    bootbox.dialog({
		    message: msg,
			closeButton: true,
	});
    $('div.modal-dialog').css('width', '400px');
    $('div.modal-content').css('top', '80px');
    $('div.modal-footer>button').removeClass('btn-primary');
    $('div.modal-footer>button').addClass('btn-warning');
  }
function addToMyCollectionHome(product_id, customer_id){
	jQuery.ajax({
   	url:'/product-details/add-to-customer-collection',
   	type:'POST',
   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
   	data:{product_id:product_id, customer_id:customer_id, type:'p'},
   	success:function(result) {
   		 bootbox.alert({
		    message: result['data'],
		    closeButton: false,
		    className: 'bb-alternate-modal'
		});
   	},
   	error:function(e){
   		console.log(e);
   	}
   });
}
function addToMyStoreHome(product_id, customer_id){
	jQuery.ajax({
   	url:'/product-details/add-to-customer-collection',
   	type:'POST',
   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
   	data:{product_id:product_id, customer_id:customer_id, type:'s'},
   	success:function(result) {
   		 bootbox.alert({
			message: result['data'],
			closeButton: false,
			className: 'bb-alternate-modal'
		});
   	},
   	error:function(e){
   		console.log(e);
   	}
   });
}
function findSideMenu(){
	var side_menu_filter = $('.side-menu-filter'), i;
	var input = document.getElementById("side-menu-key");
    var filter = input.value.toUpperCase();
	for(i = 0; i < side_menu_filter.length; i++){
		if ($('.side-menu-filter')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.side-menu-filter')[i].style.display = "";
        } else {
            $('.side-menu-filter')[i].style.display = "none";
        }
	}
}
$(document).ready( function () {
    $('#myTable').DataTable();
    $('.table-formated').DataTable();
});
function get_registered_email(e){
	e.preventDefault();
	var email = jQuery('#email_forget').val();

	if(email == ''){
		jQuery('#error_email').html('Please enter registered email id');
		jQuery('#success_email').html('');
		jQuery('#unsuccess_email').html('');
	}else{
    	jQuery.ajax({
    		url:'/customer/forget-pass-email',
    		type:'POST',
    		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
    		data:{'email':email},
    		success:function(result){
    			if(result == 'Yes'){
    				jQuery('#email_forget').val('');
    				jQuery('#unsuccess_email').html('');
    				jQuery('#error_email').html('');
    				jQuery('#success_email').html('Please check your registered email id.');	
    			}
    			else
    			{
    				jQuery('#email_forget').val('');
    				jQuery('#success_email').html('');
    				jQuery('#error_email').html('');
    				jQuery('#unsuccess_email').html('Please enter registered emailid. This emailid doesnot exist.');	
    			}
    		}
    	});
    }
}
function reset_password(){
	var pass = jQuery('#new_password').val();
	var re_pass = jQuery('#re-pass').val();
	var customer_email = jQuery('#customer_email').val();
	if(pass =='')
	{
		event.preventDefault();
		jQuery('#error_new_password').html('Please enter password');
		jQuery('#error_re_new_password').html('Please re-enter  password');
		jQuery('#re-pass').val('');
	}else{
			if((pass != '') && (re_pass ==''))
			{
				event.preventDefault();
				jQuery('#error_new_password').html('');
				jQuery('#error_re_new_password').html('Please re-enter password');
			}else{
				if(pass == re_pass)
					{
						jQuery('#error_new_password').html('');
						//jQuery('#error_re_new_password').html('Password Matched ! ');
						jQuery.ajax({
							url:'/reset-password',
							type:'POST',
							headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
							data:{pass:pass, customer_email:customer_email},
							success:function(result)
							{
								// /alert(result);
								if(result == 1){
									jQuery('#new_password').val('');
									jQuery('#re-pass').val('');
									jQuery('#customer_email').val('');
									jQuery('#error_re_new_password').html('');
									//jQuery('#success_reset_pass').html('Your password change successfully.');
									window.location = "/reset-password-success";
									//jQuery('#login').trigger('click');
								}
								else
								{
									jQuery('#new_password').val('');
									jQuery('#re-pass').val('');
									jQuery('#customer_email').val('');
									jQuery('#error_re_new_password').html('');
									jQuery('#success_reset_pass').html('');
									jQuery('#unsuccess_reset_pass').html('Please enter another password.');
								}	
							}
						});
					}else{
						event.preventDefault();
						jQuery('#error_re_new_password').html('Please enter password same as above password ');
						jQuery('#error_new_password').html('');
						jQuery('#re_pass').val('');
					}	
			}
	}
}
$(document).ready(function(){
  //$('nav>div.row.lefttopmrg>div.col-md-12').css('background', 'white');
  $('nav>div.row.lefttopmrg>div.col-md-12>ul').css('overflow', 'hidden');
  $('nav>div.row.lefttopmrg>div.col-md-12>ul').readmore({
	speed: 50,
	collapsedHeight: 296,
	heightMargin: 16,
	moreLink: '<a href="javascript:void(0)" class="show-more">+ Show more</a>',
	lessLink: '<a href="javascript:void(0)" class="show-more">- Show less</a>',
	embedCSS: true,
	blockCSS: 'display: block; width: 100%;',
	startOpen: false,
	// callbacks
	blockProcessed: function() {},
	beforeToggle: function(){},
	afterToggle: function(){}
	});
  $('ul.readmore-brand').readmore({
	speed: 50,
	collapsedHeight: 300,
	heightMargin: 16,
	moreLink: '<a href="javascript:void(0)" class="show-more" style="margin-left: 13px !important; background: white;">+ Show more</a>',
	lessLink: '<a href="javascript:void(0)">- Show less</a>',
	embedCSS: true,
	blockCSS: 'display: block; width: 100%;',
	startOpen: false,
	// callbacks
	blockProcessed: function() {},
	beforeToggle: function(){},
	afterToggle: function(){}
	});
});
function filter_brand(brands_id){
	console.log(brands_id);
	var side_menu_filter = $('.search-filter'), i;
    var filter = brands_id;
	for(i = 0; i < side_menu_filter.length; i++){
		if ($('.search-filter')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.search-filter')[i].parentElement.style.display = "";
        } else {
            $('.search-filter')[i].parentElement.style.display = "none";
        }
	}
}
$('li.filter').click(function ()
{
   $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
});
function findDetailPageBrandFilter(){
	var side_menu_filter = $('.details-page-brand-filter'), i;
	var input = document.getElementById("details-page-brand-key");
    var filter = input.value.toUpperCase();
	for(i = 0; i < side_menu_filter.length; i++){
		if ($('.details-page-brand-filter')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.details-page-brand-filter')[i].parentElement.style.display = "";
        } else {
            $('.details-page-brand-filter')[i].parentElement.style.display = "none";
        }
	}
}
function searchProduct(){
	var side_menu_filter = $('.search-filter-product'), i;
	var input = document.getElementById("search-key");
	//console.log(input.value);
    var filter = input.value.toUpperCase();
	for(i = 0; i < side_menu_filter.length; i++){
		if ($('.search-filter-product')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.search-filter-product')[i].parentElement.style.display = "";
        } else {
            $('.search-filter-product')[i].parentElement.style.display = "none";
        }
	}
}
function sortByNewNess(){
	var side_menu_filter = $('.search-filter-product'), i;
	var input = document.getElementById("search-key");
	console.log(input.value);
    var filter = input.value.toUpperCase();
	for(i = 0; i < side_menu_filter.length; i++){
		if ($('.search-filter-product')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.search-filter-product')[i].parentElement.style.display = "";
        } else {
            $('.search-filter-product')[i].parentElement.style.display = "none";
        }
	}
}
function sortProduct(type){
	var search_value = jQuery('#search_value').val();
	jQuery.ajax({
		url:'/beta-product-by-key',
		type:'POST',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		data:{type:type, search_value:search_value},
		success:function(result){
			jQuery('#filter_prooduct_list').html(result);
		}
	});
}
function get_search_result(){
	var drp_search = jQuery('#drp_search').val();
	var search_value = jQuery('#search_value').val();
	var product_cat = jQuery('#product_cat').val();
	jQuery.ajax({
		url:'/search-for-search-page',
		type:'POST',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		data:{search_value:search_value,drp_search:drp_search,product_cat:product_cat},
		success:function(result){
			jQuery('#filter_prooduct_list').html(result);
		}
	});
}
function loadmore(){
	jQuery.ajax({
		url:'/load-more-like',
		type:'POST',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		data:{search_value:search_value,drp_search:drp_search,product_cat:product_cat},
		success:function(result){
			jQuery('#filter_prooduct_list').html(result);
		}
	});	
}
function showMoreLike(value){
	var limit_start = value.split('-')[0];
	var limit_end = value.split('-')[1];
	jQuery.ajax({
		url:'/moreLikeByLimit',
		type:'POST',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		data:{limit_start:limit_start,limit_end:limit_end},
		success:function(result){
			jQuery('#like_data').html(result);
		}
	});	
}
function seenNotification(notification_id){
	if(notification_id != undefined && notification_id != null && notification_id != ""){
		jQuery.ajax({
			url:'/notification-seen',
			type:'POST',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			data:{notification_id:notification_id},
			success:function(result){
				if(result == 1){
					jQuery('#notification_flip_'+notification_id).removeClass('alert-success');
					jQuery('#notification_flip_'+notification_id).addClass('alert-default');
					getNotificationUpdate();
					/*$('#notification_flip_'+notification_id).removeClass('alert-success');
					$('#notification_flip_'+notification_id).addClass('alert-default');*/
				}
			}
		});		
	}
}
function getNotificationUpdate(){
	jQuery.ajax({
		url:'/get-notification',
		type:'POST',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		data:{},
		success:function(result){
			if(result > 0){
				var res = '<span class="abs">'+result+'</span> <i class="fa fa-bell"></i> Notification</a>';
				jQuery('#notification_count').html(res);
			}
		}
	});
}
jQuery( function() {
    /*side bar*/
    /*jQuery( "#amount" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) +
        " - $" + jQuery( "#slider-range" ).slider( "values", 1 ) );*/
    /*side bar*/
    /*slider range details page*/
    jQuery( "#slider-range-details" ).slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 10000,
		//values: [0, 10000],
		step: 100,
		slide: function (event, ui) {
			priceFilter(ui.values[ 0 ], ui.values[ 1 ]);
			console.log('ui');
			console.log(ui);
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  jQuery( "#amount-details" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          console.log(ui.values[0]);
		  jQuery("#min_price").val(ui.values[0]);
		  jQuery("#max_price").val(ui.values[1]);
		}
    });
    jQuery( "#amount-details" ).val( "$" + jQuery( "#slider-range-details" ).slider( "values", 0 ) +
            " - $" + jQuery( "#slider-range-details" ).slider( "values", 1 ) );
    /*slider range details page*/
    $("#min_price,#max_price").on('change', function () {
	  var min_price_range = parseInt($("#min_price").val());
	  var max_price_range = parseInt($("#max_price").val());
	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }
	  /*$("#slider-range-details").slider({
		values: [min_price_range, max_price_range]
	  });*/
	});
	$("#min_price,#max_price").on("paste keyup", function () {                                        
	  var min_price_range = parseInt($("#min_price").val());
	  var max_price_range = parseInt($("#max_price").val());
	  if(min_price_range == max_price_range){
			max_price_range = min_price_range + 100;
			$("#min_price").val(min_price_range);		
			$("#max_price").val(max_price_range);
	  }
	  /*$("#slider-range-details").slider({
		values: [min_price_range, max_price_range]
	  });*/
	});
});
function priceFilter(price_from, price_to) {
	var side_menu_filter = $('.search-filter-product'), i;
	for(i = 0; i < side_menu_filter.length; i++){
		var product_price = parseInt($('.search-filter-price')[i].innerHTML);
		console.log(product_price);
        if(product_price >= price_from && product_price <= price_to){
            $('.search-filter-product')[i].parentElement.style.display = "";
        } else {
            $('.search-filter-product')[i].parentElement.style.display = "none";
        }
	}
}
function follow_store(userid, vendorid)
{
	jQuery.ajax({
		   	url:'/store-follower',
		   	type:'POST',
		   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		   	data:{fk_customer_id: userid,fk_vendor_id:vendorid, follower_type:'c'},
		   	success:function(result) {
		   		//alert(result);
		   		jQuery('#followed').html(result);
		   		jQuery('#follow').hide();
		   	},
		   	error:function(e){
		   		console.log(e);
		   	}
		   });
}
function follow_store1(userid, vendorid)
{
	jQuery.ajax({
		   	url:'/store-follower',
		   	type:'POST',
		   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		   	data:{fk_customer_id: userid,fk_vendor_id:vendorid, follower_type:'c'},
		   	success:function(result) {
		   		//alert(result);
		   		jQuery('#follow').remove();
		   		jQuery('#followed').html('<a href="javascript:void(0);" class="btn btn-warning"><i class="fa fa-user"></i> Followed Store</a>');
		   	},
		   	error:function(e){
		   		console.log(e);
		   	}
		   });
}
function follow_user(current_user, customer_id)
{
	jQuery.ajax({
		   	url:'/user-follower',
		   	type:'POST',
		   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		   	data:{follower_id: current_user,following_id: customer_id},
		   	success:function(result) {
		   		//alert(result);
		   		jQuery('#follow').remove();
		   		jQuery('#followed').html('<a href="javascript:void(0);" class="btn btn-warning">Followed</a>');
		   	},
		   	error:function(e){
		   		console.log(e);
		   	}
		   });
}
function user_available(user_name){
	if(user_name.length >= 4){
		jQuery.ajax({
			   	url:'/user-available',
			   	type:'POST',
			   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			   	data:{user_name: user_name},
			   	success:function(result) {
			   		if(result == 0){
			   			jQuery('#add-user-name').css('border', 'solid green');	
			   		}else{
			   			jQuery('#add-user-name').css('border', 'solid red');	
			   		}
			   	},
			   	error:function(e){
			   		console.log(e);
			   	}
			   });
	}else{
		jQuery('#add-user-name').css('border', 'solid red');
	}
}
function email_available(email){
	if(email.length >= 4){
		jQuery.ajax({
			   	url:'/email-available',
			   	type:'POST',
			   	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			   	data:{email: email},
			   	success:function(result) {
			   		if(result == 0){
			   			jQuery('#add-member-email').css('border', 'solid green');	
			   		}else{
			   			jQuery('#add-member-email').css('border', 'solid red');	
			   		}
			   	},
			   	error:function(e){
			   		console.log(e);
			   	}
			   });
	}else{
		jQuery('#add-member-email').css('border', 'solid red');
	}
}
$(document).ready(function (){
	$('input[type="password"]').keyup(function (){
		//console.log(this.value);
	});
});
function shortProduct(subcategory_id, tag_name, thisObj = ''){
	/*console.log(subcategory_id);*/
	$('.'+tag_name+'1 a').removeClass('active');
	$(thisObj).addClass('active');
	if(subcategory_id){
		var side_menu_filter	= $('.'+tag_name), i;
		var input 				= subcategory_id;
		if(input == '*'){
			for(i = 0; i < side_menu_filter.length; i++){
				$('.'+tag_name)[i].parentElement.style.display = "";
			}
		}else{
			var filter = parseInt(input);
			for(i = 0; i < side_menu_filter.length; i++){
				if (filter == parseInt($('.'+tag_name)[i].value)) {
					$('.'+tag_name)[i].parentElement.style.display = "";
				} else {
					$('.'+tag_name)[i].parentElement.style.display = "none";
				}
			}
		}
	}
  }
  function addCollectionCategory(){
	var form_val = jQuery('#add_category_form').serialize();
	jQuery.ajax({
		url:'/collection-category',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:form_val,
		success:function(data){
				console.log(data);
				console.log('data');
				$('#form-add-category').modal('hide');	
				bootbox.dialog({message : 'Collection category added successfully'});
				$('#collection_category_list').html(data);
		},
		error:function(e){
		}
	});
}
function removeCollectionCat(collection_id){
	jQuery.ajax({
		url:'/delete-collection-category',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:{'collection_id' : collection_id},
		success:function(data){
				bootbox.dialog({message : 'Collection category deleteds successfully'});
				$('#collection_category_list').html(data);
		},
		error:function(e){
		}
	});
}
function load_more(key, limit){
	jQuery.ajax({
		url:'/load-more',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:{key:key,limit:limit},
		success:function(data){
				//bootbox.dialog({message : 'Collection category deleteds successfully'});
			$('#'+key+'_menu').html(JSON.parse(data));
		},
		error:function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function load_more_details(key, limit = 0,page = 2){
	jQuery('.r_'+key+' a').text('Loading...');
	jQuery.ajax({
		url:'/load-more-details',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:{key:key,limit:limit,page: page},
		success:function(data){
				jQuery('.r_'+key).remove();
				if(data)
				$('#'+key+'_menu_details').append(JSON.parse(data));
		},
		error:function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function load_cart_page(){
	jQuery.ajax({
		url:'/slide-cart',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:{action:'slide_cart'},
		success:function(data){
            console.log('sss');
			$('.carts,.cart-header').hide();
			$('#mySidenav').append(data.html);
			jQuery('#mySidenav').addClass('col-lg-8');
			jQuery('#mySidenav').css('width','100%');
            jQuery('#mySidenav').removeClass('sidenav23');
		},
		error:function(e){
			
		}
	});
}
function load_checkout_page(back = ''){
	
	jQuery.ajax({
		url:'/beta-slide-checkout',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type:'post',
		data:{action:'slide_checkout'},
		success:function(data){
			$('.carts,.cart-header').hide();
			$('#mySidenav').append(data.html);
			jQuery('#mySidenav').addClass('col-lg-8');
			jQuery('#mySidenav').css('width','100%');
			jQuery('#mySidenav').css('right','0');
			$('.back_to_cart').attr('back',back);
            console.log('dsfsdd');
            jQuery('body').addClass("body_overlay");
		},
		error:function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function update_cart(){
	console.log('sss');
	var frm = $("#updateCartForm");
	console.log(frm.serialize());
	jQuery.ajax({
		url: '/update-slide-cart',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type: 'post',
		data: frm.serialize(),
		success: function(data){
			$('.carts,.cart-header').hide();
			//$('.back_to_cart').attr('back',back);
			jQuery('.slide_cart_content').remove();
			$('.cartvalue').html(data.total_quantity);
			$('#cart-items').html(data.cart_beta);
			$('.cart-total-price').html('$'+data.total_price);
			load_cart_page();
			//$('.carts,.cart-header').hide();
		},
		error: function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function slide_place_order(){
	var frm = $("#customer_details_form");
	console.log(frm.serialize());
	jQuery.ajax({
		url: '/beta-checkout-order',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type: 'post',
		data: frm.serialize(),
		success: function(data){
			if(data.msg){
				$('.storelist').remove();
				$("#cod_msg").html(data.msg);
				$('#customer_details_form').remove();
			}else{
				$('.slide_checkout_content').remove();
				$('#mySidenav').append(data);
				$("#mySidenav").css({"opacity": "1.0","cursor": "default"});
			}
			//$('.carts,.cart-header').hide();
		},
		error: function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function slide_make_payment(thisobj,action = 'by_form'){
	var frm = $(thisobj);
	//console.log(frm.serialize());
	jQuery.ajax({
		url: '/beta-payment',
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		type: 'post',
		data: frm.serialize()+'&pay_with_card='+action,
		success: function(data){
			if(data.msg){
				$('#makePayment').prepend('<p class="alert alert-warning">'+data.msg+'</p>');
			}else{
				$('#mySidenav .content,.after_payment_done,.remove_header').remove();
				$('#mySidenav').append(data);
				$('.after_payment_done,.remove_header').remove();
			}
			//$('.carts,.cart-header').hide();
		},
		error: function(e){
			console.log('e');
			console.log(e);
		}
	});
}
function isNumberKey(event)
{
	var charCode = (event.which) ? event.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57)){
		//jQuery('#errmsg').html('Enter Only Digits.');
	return false;
	}
		  //jQuery('#errmsg').html('');
	return true;
}
function readURL(input) {
	var img_id = $(input).attr('id');
	console.log('#'+img_id+'_preview');
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#'+img_id+'_preview')
				.attr('src', e.target.result)
				.width(150)
				.height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}
function load_state(thisObj,country_id = false){
	var target = jQuery(thisObj).attr('target');
	if(country_id&&target){
		jQuery.ajax({
			url: '/load-state',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			type: 'post',
			data: {country_id: country_id},
			success: function(data){
				jQuery('#'+target).html(data);
			},
			error: function(e){
				console.log('e');
				console.log(e);
			}
		});
	}
}
function load_city(thisObj,state_id = false){
	var target = jQuery(thisObj).attr('target');
	if(state_id&&target){
		jQuery.ajax({
			url: '/load-city',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			type: 'post',
			data: {state_id: state_id},
			success: function(data){
				jQuery('#'+target).html(data);
			},
			error: function(e){
				console.log('e');
				console.log(e);
			}
		});
	}
}