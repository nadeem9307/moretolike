/*****SIMILAR*****/
$('#simelar_product_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
   navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
   autoplaySpeed: 1000,
   autoplayTimeout:2000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:2,
            nav:true,
            loop:true
        },
        600:{
            items:4,
            nav:true,
            loop:true
        },
        1000:{
            items:6,
            nav:true,
            loop:true
        }
    }
});

/*****PICTURE POST*****/
$('#picture-post-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
   navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
   autoplaySpeed: 1000,
   autoplayTimeout:2000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:2,
            nav:true,
            loop:true
        },
        600:{
            items:4,
            nav:true,
            loop:true
        },
        1000:{
            items:6,
            nav:true,
            loop:true
        }
    }
});





/*****mobile-product-slider*****/
$('.mobile_pro_sec_update').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
   navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
   autoplaySpeed: 2000,
   autoplayTimeout:5000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        }
      
    }
});



/*******login bg slider******/


//$('.login_cl_model').owlCarousel({
//    loop:true,
//    margin:10,
//    dots:false,
//    nav:false,
//    animateOut: 'fadeOut',
//    autoplay:true,
//     autoplaySpeed: 2000,
//   autoplayTimeout:5000,
//    responsive:{
//        0:{
//            items:1
//        }
//      
//    }
//})




/*****mobile_proct*****/
$('.mobile_pro_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
   navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
   autoplaySpeed: 1000,
   autoplayTimeout:4000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:3,
            nav:true,
            loop:true
        }
      
    }
});




/*****Mobile Slider*****/
$('#mobile_slider_head').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    navText:[],
   autoplaySpeed: 1000,
	autoplayTimeout:8000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:1,
            nav:true,
            loop:true
        },
        1000:{
            items:6,
            nav:true,
            loop:true
        }
    }
});

$('#logo-slider').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	autoplay:true,
	dots: true,
	navText:[],
	autoplaySpeed: 1000,
	autoplayTimeout:8000,
	//smartSpeed:2000,
	//center:true,
	responsiveClass:true,	
	responsive:{
		0:{
			items:1,
			loop:true
		},
		600:{
			items:1,
			loop:true
		},
		1000:{
			items:1,
			loop:true
		}
	}
});



/*****Feture_product mobile*****/
$('.feature_pro_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
   navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
   autoplaySpeed: 2000,
   autoplayTimeout:9000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        }
      
    }
});


/*****Feature_pro_desktop*****/

$('.desto_pro_f').owlCarousel({
	loop:true,
	margin:10,
	nav:true,
	autoplay:true,
	dots: true,
	navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	autoplaySpeed: 1000,
	autoplayTimeout:8000,
	//smartSpeed:2000,
	//center:true,
	responsiveClass:true,	
	responsive:{
		0:{
			items:1,
			loop:true
		},
		600:{
			items:1,
			loop:true
		},
		1000:{
			items:1,
			loop:true
		}
	}
});





$(document).ready(function(){
	$('.product-shop-margin').magnificPopup({
		type:'inline',
		midClick: true,
		gallery:{
			enabled:true
		},
		delegate: 'span.wpb_wl_preview',
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: false,
	});
    
	$('.category1').magnificPopup({
		type:'inline',
		midClick: true,
		gallery:{
			enabled:true
		},
		delegate: 'span.wpb_wl_preview',
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: false,
	});
    
	$('.bestSeller').magnificPopup({
		type:'inline',
		midClick: true,
		gallery:{
			enabled:true
		},
		delegate: 'span.wpb_wl_preview',
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: false,
	});
	$('.category4').magnificPopup({
		type:'inline',
		midClick: true,
		gallery:{
			enabled:true
		},
		delegate: 'span.wpb_wl_preview',
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: false,
	});
	$('.category3').magnificPopup({
		type:'inline',
		midClick: true,
		gallery:{
			enabled:true
		},
		delegate: 'span.wpb_wl_preview',
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: false,
	});
	$('.show_product_detail').magnificPopup({
		type:'ajax',
		ajax: {
			settings: null,
			type:'GET',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			cursor: 'mfp-ajax-cur', 
			tError: '<a href="%url%">The content</a> could not be loaded.',
		},
        
		callbacks: {
            open: function() {
              $("body").addClass("pop_overf_h");
            },
            close: function() {
               $("body").removeClass("pop_overf_h"); 
            },
			ajaxContentAdded: function() {  
               
				$('#pro_model_slider').owlCarousel({
					loop:true,
					margin:10,
					nav:false,
                    dots:false,
					autoplay:true,
					navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
					autoplaySpeed: 2000,
					autoplayTimeout:8000,
                    pullDrag: false,
					//smartSpeed:2000,
					//center:true,
					responsiveClass:true,	
					responsive:{
						0:{
							items:1,
							nav:true,
							loop:true
						},
						600:{
							items:2,
							nav:true,
							loop:true
						},
						1000:{
							items:3,
							nav:true,
							loop:true
						}
					}
				});
                
                $('#pro_model_slider_mobile').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					autoplay:true,
					navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
					autoplaySpeed: 2000,
					autoplayTimeout:8000,
					//smartSpeed:2000,
					//center:true,
					responsiveClass:true,	
					responsive:{
						0:{
							items:1,
							nav:true,
							loop:true
						},
						600:{
							items:2,
							nav:true,
							loop:true
						},
						1000:{
							items:3,
							nav:true,
							loop:true
						}
					}
				});
                
                $('.simelar_product_slider').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    autoplay:false,
                   navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                   autoplaySpeed: 1000,
                   autoplayTimeout:2000,
                   //smartSpeed:2000,
                    //center:true,
                    responsiveClass:true,	
                    responsive:{
                        0:{
                            items:2,
                            nav:true,
                            loop:true
                        },
                        600:{
                            items:4,
                            nav:true,
                            loop:true
                        },
                        1000:{
                            items:5,
                            nav:true,
                            loop:true
                        }
                    }
                });
                
                
                
                 
/************PRODUCT MODEL CSS*************/        
                
     $(document).ready(function() {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: false,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ]
  })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 5,
    dots: true,
    nav: false,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});

                
                    $(document).ready(function () {
                        $(".view__cus__sw").click(function () {
                            $('.revi_con_sdw').toggleClass('hieght_icre');
                        });
                    });
            
            
                
                
         $(function () {
      var swiper2 = new Swiper('#demo1 .products-carousel', {
        slidesPerView: 5,
//          spaceBetween: 10,
        loop: false,
        navigation: {
          nextEl: '.button-next-2',
          prevEl: '.button-prev-2',
        },
        breakpoints: {
            1400: {
                slidesPerView: 5
            },
            1300: {
              slidesPerView: 4
            },
            1150: {
              slidesPerView: 4
            },
            800: {
              slidesPerView: 3
            },
            640: {
              slidesPerView: 2
            },
            400: {
              slidesPerView: 2
            }
          }
      });
                
          });         
                
           
                
                
            
            
			}
		}
	});
    
    
/**********CLOSE*******/
    
    
	$(document).on('click','.show_product_detail1',function(){
		var product_id = $(this).attr('product_id');
		$.ajax({
			url:'/product-detail',
			type:'GET',
			 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			data:{product_id: product_id},
			success:function(data){
				$.magnificPopup.open({
					delegate: 'a',
					type: 'inline',
					items: {
						src: data
					},
					preloader: true,
					tLoading: 'Loading...',
					midClick: true,
					gallery:{
						enabled:true
					},
					//delegate: 'span.wpb_wl_preview',
					//removalDelay: 500, //delay removal by X to allow out-animation
					callbacks: {
						beforeOpen: function() {
						   this.st.mainClass = 'mfp-zoom-in';
						}
					},
					cursor: 'mfp-ajax-cur',
					tError: '<a href="%url%">The content</a> could not be loaded.'
					//closeOnContentClick: false,
				});
			},
			error:function(e){
				console.log(e);
			}
		});
	});
	$("[data-fancybox]").fancybox();
    
    
    $(document).on('click','.view_tr',function(){
        //alert("Hello! I am an alert box!!");
$(".like_deat_panle").css("display","block");
 });     
    
    
$(document).on('click','.clic_cl',function(){
$(".like_deat_panle").css("display","none");    
    
 });  

    $(document).on('click','.hsle_as',function(){
        var popup_class = $(this).attr('popupid');
        $(".hover_share_link").not( '.'+popup_class ).removeClass("show_se_da_n");    
        $("."+popup_class).toggleClass("show_se_da_n");
         $(".content_on_share_se").removeClass("blog_sede");
         console.log(popup_class)  
    });  
   
   $(document).on('click','.hsle_as',function(){
      $(".hsle_as").not(this).removeClass("shaowse_cl"); 
      $(this).toggleClass("shaowse_cl");    
    }); 
    
     $(document).on('click','.close_share_model',function(){
        $('.product-width').removeClass('shaowse_cl123');
     });
    
        $(document).on('click','.hsle_as',function(){
        $('.product-width').removeClass('shaowse_cl123');
         $(this).parent().parent().parent().parent().parent().parent().toggleClass("shaowse_cl123");   
      }); 
    
    $(document).on('click','.can_im',function(){
      $(this).parent().parent().parent().removeClass("shaowse_cl123"); 
   }); 
  
    $(document).on('click','.hsle_as_close',function(){
      $(".content_on_share_se").removeClass("blog_sede"); 
    }); 
    
    
    $(document).on('click','.sea_pro_model',function(){
  //  $(".content_on_share_se").addClass("blog_sede");  
    $(".hover_share_link").removeClass("show_se_da_n");  
     $(".hsle_as").removeClass("shaowse_cl");      
    
 }); 
  
      $(document).on('click','.sea_pro_model',function(){
        var popup_class = $(this).attr('popupid');
          console.log(popup_class);
        $(".content_on_share_se").not( '.'+popup_class ).removeClass("blog_sede");    
        $(".content_on_share_se."+popup_class).toggleClass("blog_sede");      
    });  
   
      $(document).on('click','.pro_cl_nshw',function(e){
          var data_target = $(this).data('target');
         // console.log(data_target);
          $('#'+data_target).toggleClass("dro_sjhek");
           $(".profile_dro_ne_s").not('#'+data_target).removeClass("dro_sjhek"); 
          e.stopPropagation();

     // $(".profile_dro_ne_s").addClass("dro_sjhek"); 
     }); 
   
    $(document).on('click','.can_im',function(){
      $(".hover_share_link").removeClass("show_se_da_n"); 
    $(".dess_dot").removeClass("shaowse_cl");     
 }); 
  
      $(document).on('click','.btn-add a',function(){
//          $('.product-width').not('.').removeClass('shaowse_cl123');
//         $(this).parent().parent().parent().parent().parent().toggleClass("shaowse_cl123");      
          var popupids = $(this).attr('popupids');
         // console.log(data_target);
          $('.'+popupids).toggleClass("shaowse_cl123");
           $(".product-width").not('.'+popupids).removeClass("shaowse_cl123"); 
      });
    
      $(document).on('click','.separator.clear-left',function(){
//          $('.product-width').not('.').removeClass('shaowse_cl123');
//         $(this).parent().parent().parent().parent().parent().toggleClass("shaowse_cl123");      
          var popupids = $(this).attr('popupids');
         // console.log(data_target);
          $('.'+popupids).toggleClass("shaowse_cl123");
           $(".product-width").not('.'+popupids).removeClass("shaowse_cl123"); 
      });
        $(document).on('click','.col-info',function(){
//          $('.product-width').not('.').removeClass('shaowse_cl123');
//         $(this).parent().parent().parent().parent().parent().toggleClass("shaowse_cl123");      
          var popupids = $(this).attr('popupids');
         // console.log(data_target);
          $('.'+popupids).toggleClass("shaowse_cl123");
           $(".product-width").not('.'+popupids).removeClass("shaowse_cl123"); 
      });
  
   /*****Model Js Add Body Class***/ 
  
    
  /*****Close Model Js Add Body Class***/    
 
  $(document).on('click','.pro_cl_nshw',function(){
      $(".pro_cl_nshw").not(this).removeClass("roe_asdm"); 
      $(this).toggleClass("roe_asdm");     
 }); 
 
    
    
    
    
//  $(window).click(function(event) {
//    
//       if($(event.target).hasClass('sssss')){
//         //alert('has class');
//        }else{
//            closeNavdesktop();
//             closeNavmobile();
//        
//           // closeNavmobile();
//        }
//      $("#main").removeClass("body_overlay");
//     // }
//    
//});

    
       
   
    
    
    
$('.hide_for_xs').click(function(event){
    if($(event.target).hasClass('nav-link') || $(event.target).hasClass('dropdown-item')){
     //alert('has class');
    }else{
        event.stopPropagation();
    }
});
    
    
    
    
  $(document).on('click','.cat_first_one_lft h5',function(){
      $(".list_he_pm_cat").toggleClass("show_hw_lon"); 
       $(".cat_first_one_lft h5 i").toggleClass("fa-angle-up"); 
    });     
    
    
      $(document).on('click','.filter_mobile_open',function(){
      $(".main_panel_category .col-lg-3").addClass("lef_filter_sec"); 
       $("#main").addClass("over_flow_hi_body");       
      
    });  
    
    
     $(document).on('click','.over_flow_hi_body',function(){
      $(".main_panel_category .col-lg-3").removeClass("lef_filter_sec"); 
      $("#main").removeClass("over_flow_hi_body"); 
    });
    
    
    
      $(document).on('click','.feature_img_col',function(){
         $(".input_feat_cl").trigger("click");
    });
    
    

    
//    $(document).on('click','.ck_add_cl',function(){
//       $(this).toggleClass("nn"); 
//    });     
    
    
    $(document).on('click','.ck_add_cl',function(){
      $(".ck_add_cl").not(this).removeClass("ac_lft_grid_cl"); 
      $(this).toggleClass("ac_lft_grid_cl");    
    }); 
    
    var $myGroup = $('.pa_des_on');
    $myGroup.on('show.bs.collapse','.collapse', function() {
        $myGroup.find('.collapse.show').collapse('hide');
    });
    
    
    $(document).on('click','.lef_filter_sec',function(e){
        e.stopPropagation();
    }); 
    
   
    $(document).on('click','.cart-header',function(e){
        e.stopPropagation();
    }); 
    
    
    
    
    
    /******Profile Tab*****/
    
$(document).ready(function(){
	$('.acc h4').click(function(){
		$(this).next('.content_pro_ac').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content_pro_ac').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
       
    
    
     
    
    
    
    /*****Desktop Fixed Header*********/
$(window).scroll(function () {

    var scroll = $(window).scrollTop();

    if (scroll > 0) {

        $(".tob-bar-fix").addClass('fixedmenu');
       

    } else {

        $(".tob-bar-fix").removeClass('fixedmenu');
      

    }

});

    /*****Mobile Fixed Header*********/
$(window).scroll(function () {

    var scroll = $(window).scrollTop();

    if (scroll > 50) {

        $(".mobile_main_pnl").addClass('fixedmenu_mobile');
        $(".static_header_mobile").removeClass('fade_sta_h');

    } else {

        $(".mobile_main_pnl").removeClass('fixedmenu_mobile');
        $(".static_header_mobile").addClass('fade_sta_h');

    }

});    
    
    
    
    
  $(document).on('click','.cl_sl_in__cl i',function(){
         $(".pr__info__cls").toggleClass("slider__csl_mnh");
    });    
    
    
    
/*********Count*********/    
function countDown() {
  // Get current Date
  const now = new Date(),
      year = now.getFullYear(),
      month = now.getMonth(),
      day = now.getDate(),
      tz = now.getTimezoneOffset() / 60,
      
      // Set end date in UTC time
      end = new Date(Date.UTC(year, month, day, 17, 0, 0)).getTime(),
  
      // How many milliseconds left from now until end
      totalTimeLeft = end - now
      
  // turn milliseconds into hours / minutes / seconds
  let hoursLeft = Math.floor(totalTimeLeft / (1000 * 60 * 60)),
      minutesLeft = Math.floor(totalTimeLeft % (1000 * 60 * 60) / (1000 * 60)),
      secondsLeft = Math.floor((totalTimeLeft % (1000 * 60)) / 1000);
      
      // add on the timezone difference if applicable
      hoursLeft = hoursLeft + tz;
  
  $('.countdown').html( hoursLeft + " hours and " + minutesLeft + " minutes " + secondsLeft + " seconds");
};

// Set interval determines how many seconds you want to count down in
const startCountDown = setInterval(countDown, 1000);    
    

    

});

$(document).on('click', '.buy_with_us_checkbox', function(){
    let checked  = $(this).find('input[type="checkbox"]').is(':checked');
    let index = $(this).find('input[type="checkbox"]').attr('data-index');
    let price = $(this).find('input[type="checkbox"]').attr('data-price');
    let total_price = $(this).find('input[type="checkbox"]').attr('data-total_price');
    if(checked){
    	$(this).find('input[type="checkbox"]').prop('checked', false);
    	$('.buy_with_us_div_'+index).hide();
    	let item_count = $('.buy_with_us_checkbox input[type="checkbox"]').filter(':checked').length;
    	let total_p = 0; 
    	$('.buy_with_us_checkbox input[type="checkbox"]').each(function(){
    		if($(this).is(':checked')) total_p +=Number($(this).attr('data-price'));
    	})
    	$('.buy_item_count').html(item_count);
    	$('.buy_total_price').html('$'+total_p.toFixed(2));
    }else{
    	$(this).find('input[type="checkbox"]').prop('checked', true);
    	$('.buy_with_us_div_'+index).show();
    	let item_count = $('.buy_with_us_checkbox input[type="checkbox"]').filter(':checked').length;
    	let total_p = 0; 
    	$('.buy_with_us_checkbox input[type="checkbox"]').each(function(){
    		if($(this).is(':checked')) total_p +=Number($(this).attr('data-price'));
    	})
    	$('.buy_item_count').html(item_count);
    	$('.buy_total_price').html('$'+total_p.toFixed(2));

    }

 });

$(document).on('click','.buy_add_all_cart_btn', function(){
	$('.buy_with_us_checkbox input[type="checkbox"]').each(function(){
		if($(this).is(':checked')){
			let index = $(this).attr('data-index');
			$('.buy_with_us_div_'+index).find('.add-to-cart').trigger('click');
		};
	})
})



    /*****Desktop Fixed Header*********/
$(window).scroll(function () {

    var scroll = $(window).scrollTop();

    if (scroll > 0) {

        $(".show_mega_menu").addClass('scroll_mega');
       

    } else {

        $(".show_mega_menu").removeClass('scroll_mega');
       

    }

});



 

$(document).ready(function () {

    $(".checkbox_redirect").click(function () {
        $(".collection_i_follow_hide").toggleClass("show_collection_sec");
        $(".hide_on_click").toggleClass("collection_hide_data_make");
    });
});

            $(document).ready(function () { 
                 $(".body_overlay").click(function () {
                   $(".body_overlay").addClass('nnnnnn');
                });

            });


 
          $(document).ready(function () {

              $('.tabgroup > div').hide();
              $('.tabgroup > div:first-of-type').show();
              $('.tabs_cust_nav .tab_makeing_cl a').click(function (e) {
                  e.preventDefault();
                  var $this = $(this),
                      tabgroup = '#' + $this.parents('.tabs_cust_nav').data('tabgroup'),
                      others = $this.closest('li').siblings().children('a'),
                      target = $this.attr('href');
                  others.removeClass('active');
                  $this.addClass('active');
                  $(tabgroup).children('div').hide();
                  $(target).show();

              })

          });
        


/*****Store slider*****/
$('.storelist_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
   autoplaySpeed: 3000,
   autoplayTimeout:6000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:1,
            nav:true,
            loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
});



/*****Store slider*****/
$('.storelist_slider_collec').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
   autoplaySpeed: 3000,
   autoplayTimeout:6000,
   //smartSpeed:2000,
    //center:true,
    responsiveClass:true,	
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:1,
            nav:true,
            loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
});



$(document).ready(function () {
    $(".menu_cl_misow p").click(function () {
        $(".brands_right_sec_new").toggleClass("after_effect_cl");
    });
});




/*********MOBILE LOGIN SLIDE**********/
function openNav_mobile_login() {
  document.getElementById("mySidenav_mobile_login").style.left = "0%";
}

function closeNav_mobile_login() {
  document.getElementById("mySidenav_mobile_login").style.left = "-100%";
}











/********TREE MENU*******/

$.fn.extend({
    treed: function (o) {
      
      var openedClass = 'fa fa-minus-circle';
      var closedClass = 'fa fa-plus-circle';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('.tree1').treed();

$('.tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('.tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});




