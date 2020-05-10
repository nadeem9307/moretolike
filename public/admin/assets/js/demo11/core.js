$(document).ready(function(){
   
$(".click_assign").click(function(){

$(".nambe_ap").toggleClass("show_aswq")
    
}) ;   
    
});



$(document).ready(function(){
   
$(".schedule").click(function(){

$(".cus_ak").toggleClass("show_see")
    
}) ;   
    
});



$(document).ready(function(){
   
$(".track_cl_m").click(function(){

$(".hidden_cl_a").toggleClass("show_cl_menw")
    
}) ;   
    
});



$(document).ready(function(){
   
$(".schedule_sec").click(function(){

$(".cus_ak_aqws").addClass("bloc_sec");
$(".schedule_sec").addClass("hide_schedule");
$(".cancle").addClass("bloc_sec");
    
}) ;   
    
});


$(document).ready(function(){
   
$(".cancle").click(function(){

$(".cus_ak_aqws").removeClass("bloc_sec");
$(".schedule_sec").removeClass("hide_schedule");
$(".cancle").removeClass("bloc_sec");
    
}) ;   
    
});


$(document).ready(function(){
   
$(".cu_cli").click(function(){
$(".pl_do_cld").addClass("a_cl_der");
});   
    
});


$(document).ready(function(){
   
$(".n_clider").click(function(){
$(".new_asde").addClass("show_lis_swed");
}) ;   
    
});





$(document).ready(function(){

$('input[name="country"]').amsifySuggestags();
	$('input[name="color"]').amsifySuggestags({
		suggestions: ['Black', 'White', 'Red', 'Blue', 'Green', 'Orange']
	});
	$('input[name="planets"]').amsifySuggestags({
		suggestions: ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupitor', 'Uranus', 'Neptune', 'Pluto'],
		whiteList: true
	});

	$('input[name="fruits"]').amsifySuggestags({
		suggestions: ['Apple', 'Banana', 'Cherries', 'Dates', 'Guava'],
		classes: ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'],
		whiteList: true,
		afterAdd : function(value) {
			console.info(value);
		},
		afterRemove : function(value) {
			console.info(value);
		},
	});
	$('input[name="anything"]').amsifySuggestags({
		tagLimit: 5
	});

});


$(document).ready(function(){
$(".add_gigs_extra p").click(function(){
$(".first_ecsrd").addClass("show_sedee");
$(".add_gigs_extra p").addClass("show_sedee_second");    
}) ;   
    
});

$(document).ready(function(){
$(".show_sedee_second").click(function(){
$(".secone_ecsrd").addClass("show_sedee");
$(".show_sedee_second").addClass("hide_btn_sewd");    
}) ;   
    
});



$(document).ready(function(){
$(".ad_swdf_mn a").click(function(){
$(".ad_swdf_mn a").addClass("hide_btn_a");
$(".va_sede_ds").addClass("shos_wess");    
}) ;   
    
});


$(document).ready(function(){
$(".cancel_cl_s").click(function(){
$(".ad_swdf_mn a").removeClass("hide_btn_a");
$(".va_sede_ds").removeClass("shos_wess");    
}) ;    
});

