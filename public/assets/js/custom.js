function categoryFilter(category_name){
  var side_menu_filter = $('.category-menu-filter'), i;
  var input = category_name;
    var filter = input.toUpperCase();
    
  for(i = 0; i < side_menu_filter.length; i++){
    if ($('.cat_val')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.category-menu-filter')[i].style.display = "";
        } else {
            $('.category-menu-filter')[i].style.display = "none";
        }
  }

}

function brandFilter(brand_name){
  var side_menu_filter = $('.brand-menu-filter'), i;
  var input = brand_name;
    var filter = input.toUpperCase();
    
  for(i = 0; i < side_menu_filter.length; i++){
    if ($('.bran_val')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.brand-menu-filter')[i].style.display = "";
        } else {
            $('.brand-menu-filter')[i].style.display = "none";
        }
  }
}

function retailerFilter(retailer_name){
  var side_menu_filter = $('.retailer-menu-filter'), i;
  var input = retailer_name;
    var filter = input.toUpperCase();
    
  for(i = 0; i < side_menu_filter.length; i++){
    if ($('.ret_val')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.retailer-menu-filter')[i].style.display = "";
        } else {
            $('.retailer-menu-filter')[i].style.display = "none";
        }
  }
}

function colorFilter(color_name){
  var side_menu_filter = $('.color-menu-filter'), i;
  var input = color_name;
    var filter = input.toUpperCase();
    
  for(i = 0; i < side_menu_filter.length; i++){
    if ($('.col_val')[i].innerHTML.replace(/<[^>]*>/g, "").toUpperCase().indexOf(filter) > -1) {
            $('.color-menu-filter')[i].style.display = "";
        } else {
            $('.color-menu-filter')[i].style.display = "none";
        }
  }
}

function getProduct(product_id, collection_id){
  jQuery.ajax({
    url:'/get-collection-product-details',
    headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
    type:'post',
    data:{'product_id' : product_id, 'collection_id' : collection_id},
    success:function(form){
      bootbox.dialog({message : form});
    },
    error:function(e){

    }
  });
}

function updateCollectionCategory(){

  var form_val = jQuery('#product_category_change_form').serialize();
  jQuery.ajax({
    url:'/update-collection-category',
    headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
    type:'post',
    data:form_val,
    success:function(form){
      bootbox.dialog({message : form});
    },
    error:function(e){

    }
  }); 
}

function followCollection(collection_id, customer_id){
  
    jQuery.ajax({
          url:'/follow-collection',
          type:'POST',
           headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          data:{customer_id: customer_id,collection_id:collection_id, status:1},
          success:function(result) {
            //window.location.href = "/cart";
            bootbox.alert({
              message: result,
              className: 'bb-alternate-modal'
          });
          },
          error:function(e){
            console.log(e);
          }
         });
}

function showDetails(collection_id){
  jQuery.ajax({
    url:'/get-collection-product',
    type:'POST',
     headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
    data:{collection_id: collection_id},
    success:function(result) {
      $('#collection-list').css('display', 'none');
      $('#collection-details').css('display', 'block');
      $('#collection-grid-details').html($('#collection-grid-'+collection_id).html());
      $('#collection-product').html(result);
    },
    error:function(e){
      console.log(e);
    }
   });
  
  
}

function addToCartCollection(product_id){
    
    var product_id = product_id;
    var quantity = 1;

    var itemImg = $('span#add-to-cart-'+product_id).parent().parent().parent().parent().parent().parent().find('div.photo.hovereffect').find('img').eq(0);
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
  
}

function backToCollectionList(){
  $('#collection-details').css('display', 'none');
  $('#collection-list').css('display', 'block');
}

$(document).ready(function(){
  $('.checkbox').click(function() {
    if ($(this).is(':checked')) {
      var element_id = this.id;
      element_id = element_id.split('-');
      var section = element_id['0'];
      var filter = element_id['1'];

      var side_menu_filter = $('.search-filter-'+section), i;
        
      $('.category-checkbox:checkbox:checked').each(function () {
           var sThisVal = (this.checked ? $(this).val() : "");
           console.log('sThisVal');
           console.log(sThisVal);
      });

      for(i = 0; i < side_menu_filter.length; i++){
        if (parseInt($('.search-filter-'+section)[i].innerText) == parseInt(filter)) {
                $('.search-filter-'+section)[i].parentElement.style.display = "";
            } else {
                $('.search-filter-'+section)[i].parentElement.style.display = "none";
            }
      }

    }else{
      console.log('unchecked');
    }
  });
});
