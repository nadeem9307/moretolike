
      <hr>
<section >
      <div class="content mrgtp">
          <div class="fan_pr_as">
              
              
              
            <section class="new_card_panel">
    
<div class="row storelist remove_header">
            <ul class="top-link">
               <li><a href="javascript:void(0);" class="slide_checkout">Checkout</a></li>
               <!--li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">shop</a></li-->
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="">Payment</a></li>
            </ul>
         </div>    
    
<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front">
        <div class="chip"></div>
        <div class="logo_card">
         <img class="img-responsive" src="https://moretolike.com/assets/img/visa_here.png" alt="image">
        </div>
        <div class="number"></div>
        <div class="card-holder">
          <label>Card holder</label>
          <div></div>
        </div>
        <div class="card-expiration-date">
          <label>Expires</label>
          <div></div>
        </div>
      </div>
      <div class="back">
        <div class="strip"></div>
        <div class="logo_card">
         <img class="img-responsive" src="https://moretolike.com/assets/img/visa_here.png" alt="image">
        </div>
        <div class="ccv">
          <label>CCV</label>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <form class="form" autocomplete="off" novalidate>
    <fieldset>
      <label for="card-number">Card Number</label>
      <input type="num" id="card-number" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
    </fieldset>
    <fieldset>
      <label for="card-holder">Card holder</label>
      <input type="text" id="card-holder" />
    </fieldset>
    <fieldset class="fieldset-expiration">
      <label for="card-expiration-month">Expiration date</label>
      <div class="select">
        <select id="card-expiration-month">
          <option></option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
      </div>
      <div class="select">
        <select id="card-expiration-year">
          <option></option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="card-ccv">CCV</label>
      <input type="text" id="card-ccv" maxlength="3" />
    </fieldset>
    <button class="btn"><i class="fa fa-lock"></i> Make Payment</button>
  </form>
</div>



</section>
  
              
              
              
              
              
              
<!--
         <div class="row storelist remove_header">
            <ul class="top-link">
               <li><a href="javascript:void(0);" class="slide_checkout">Checkout</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="">Payment</a></li>
            </ul>
         </div>
-->
              
<!--
         @if($errors->any())
            <div class="alert alert-danger">
              <strong>Oh!</strong> {{$errors->first()}}
            </div>
         @endif
         @if(isset($static_data['message']) && !empty($static_data['message']))
		<div class="row storelist">
            <ul class="top-link">
               <li><a href="{{getenv('BASEURL')}}" >Home</a></li>
            </ul>
        </div>
         <div class="alert alert-success">
           <strong>Success!</strong> <?=$static_data['message']?>
         </div>
        
         @endif
         <?php 
            $is = json_decode(json_encode($data['stripe_cards']));
         ?>
		<div class="after_payment_done">
         @if(empty($is->url))
        <div class="row">
			
			<div class="col-md-12" style="background-color: #ececec;">
				<form id="makePaymentWithSavedCard" class="form-horizontal" action="beta-payment" role="form" enctype="multipart/form-data" method="post" name="checkout">
				 {{csrf_field()}}
				 <div class="headingpa">Card by which you have..</div>
					   <input type="hidden" name="stripe_customer_id" value="{{$data['stripe_customer_id']}}">
					   <input type="hidden" name="address_id" value="{{Session::get('cart_id_address')}}">
					   @foreach($data['stripe_cards'] as $row)
						  <div class="panel-body">
							 <input type="radio" name="card[]" value="{{$row['id']}}">
							 ended with {{$row['last4']}} expired on {{$row['exp_month']}} of {{$row['exp_year']}} 
						  </div>
					   @endforeach
                    
                    <div class="milit_sen text-center">
				      <input type="submit" class="btn btn-warning pay_with_card_btn" name="pay_with_card" value="Pay With Saved Card">
                    </div>
                    
				  <p style="text-align: center;"><b>OR</b></p>
				</form>
			</div>
			
		</div>
         @endif
        <div class="row">
			
			<div class="col-md-12">
			 <form id="makePayment" class="form-horizontal" action="slide-beta-payment" role="form" enctype="multipart/form-data" method="post" name="checkout" >
				{{csrf_field()}}
				<div class="row">
				<input type="hidden" name="fk_customer_id" value="{{Session::get('user_id')}}">
				<input type="hidden" name="stripe_customer_id" value="{{$data['stripe_customer_id']}}">
				<input type="hidden" name="address_id" value="{{Session::get('cart_id_address')}}">
				   <div class="col-md-12 payment-b">
					<div class="row form-margin">
						 <div class="col-md-6">
						 
							<input type="text" value="" placeholder="Name on card" id="name" name="name" class="form-control" required>
						 </div>
						 <div class="col-md-6 form-margin">
						
							<input type="number" value="" min="14" placeholder="Card Number" id="card_number" name="card_number" class="form-control" required>
						 </div>
					</div>
					
					  <div class="row">
						 <div class="col-md-12 form-margin">
							<div class="row">
							   <div class="col-md-8"><p><strong>Valid upto</strong></p></div>
							   <div class="col-md-4"> <p><strong>CVV</strong></p> </div>
							</div>
							<div class="row">
							   <div class="col-md-4">
								  <select class="form-control" name="month" required>
									 @for($i = 1; $i<=12; $i++)
									 <option>{{$i}}</option>
									 @endfor
								  </select>
							   </div>
							   <div class="col-md-4">
								  <select class="form-control" name="year" required>
									 @for($i = 2018; $i<=2050; $i++)
									 <option>{{$i}}</option>
									 @endfor
								  </select>
							   </div>
							   <div class="col-md-4">
								<input type="password" class="form-control" size="4" min="3" max="3" placeholder="CVV" id="cvv" name="cvv" required>
							   </div>
							</div>
						 </div>
					  </div>
				 
					  <div class="row">
						 <div class="col-md-12 form-margin case_saq_saz">
							<input type="submit" name="pay" class="btn btn-warning pay_with_form_btn" value="Make Payment">
						 </div>
					  </div>
				   </div>
				</div>
			 </form>
			</div>
		
-->
         
		</div>
		</div>

</section>










<style>
/*
    
#mySidenav {
    width: 40% !important;
}    
    
*/

/*--------------------
Buttons
--------------------*/
.new_card_panel .btn {display: block;background: #fbdb2e;color: white;text-decoration: none;margin: 20px 0;padding: 15px 15px;border-radius: 5px;position: relative;}
.new_card_panel .btn::after {content: '';position: absolute;z-index: 1;top: 0;left: 0;width: 100%;height: 100%;
transition: all .2s ease-in-out;box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0), 0 3px 3px rgba(0, 0, 0, 0.2);border-radius: 5px;}
.new_card_panel .btn:hover::after {background: rgba(0, 0, 0, 0.1);box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0.2);}

/*--------------------
Form
--------------------*/
.form fieldset {border: none;padding: 0;padding: 10px 0;position: relative;clear: both;}
.form fieldset.fieldset-expiration {float: left;width: 60%;}
.form fieldset.fieldset-expiration .select {width: 84px;margin-right: 12px;float: left;}
.form fieldset.fieldset-ccv {clear: none;float: right;width: 86px;}
.form fieldset label {display: block;text-transform: uppercase;font-size: 11px;color: rgba(0, 0, 0, 0.6);margin-bottom: 5px;font-weight: bold;}
.form fieldset input,
.form fieldset .select {width: 100%;height: 38px;color: #333333;padding: 10px;border-radius: 5px;font-size: 15px;outline: none !important;
border: 1px solid rgba(0, 0, 0, 0.3);box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);}
.form fieldset input.input-cart-number,
.form fieldset .select.input-cart-number {width: 82px;display: inline-block;margin-right: 8px;}
.form fieldset input.input-cart-number:last-child,
.form fieldset .select.input-cart-number:last-child {margin-right: 0;}
.form fieldset .select {position: relative;}
.form fieldset .select::after {content: '';border-top: 8px solid #222;border-left: 4px solid transparent;border-right: 4px solid transparent;
position: absolute;z-index: 2;top: 14px;right: 10px;pointer-events: none;}
.form fieldset .select select {-webkit-appearance: none; -moz-appearance: none;appearance: none;position: absolute;padding: 0;border: none;
width: 100%;outline: none !important;top: 6px;left: 6px;background: none;}
.form fieldset .select select :-moz-focusring {color: transparent;text-shadow: 0 0 0 #000;}
.form button {width: 100%;outline: none !important;background: linear-gradient(180deg, #49a09b, #3d8291);text-transform: uppercase;
font-weight: bold;border: none;box-shadow: none;text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);margin-top: 90px;}
.form button .fa {margin-right: 6px;}

/*--------------------
Checkout
--------------------*/
.checkout {margin: 150px auto 30px;position: relative;width: 460px;background: white;border-radius: 15px;padding: 160px 45px 30px;
box-shadow: 0 10px 40px rgba(136, 126, 126, 0.1)}
/*--------------------
Credit Card
--------------------*/
.credit-card-box {-webkit-perspective: 1000;perspective: 1000; width: 400px; height: 280px; position: absolute; top: -112px; left: 50%;
 -webkit-transform: translateX(-50%); transform: translateX(-50%);}
.credit-card-box:hover .flip, .credit-card-box.hover .flip {-webkit-transform: rotateY(180deg); transform: rotateY(180deg);}
.credit-card-box .front,
.credit-card-box .back {width: 400px;height: 250px;border-radius: 15px;-webkit-backface-visibility: hidden;backface-visibility: hidden;
background: linear-gradient(135deg, #fed700, #675a14);position: absolute;color: #fff;top: 0;left: 0;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);box-shadow: 0 1px 6px rgba(0, 0, 0, 0.3);}
.credit-card-box .front::before,
.credit-card-box .back::before {content: '';position: absolute;width: 100%;height: 100%;top: 0;left: 0;
background: url("http://cdn.flaticon.com/svg/44/44386.svg") no-repeat center;background-size: cover;opacity: .05;}
.credit-card-box .flip {transition: 0.6s;-webkit-transform-style: preserve-3d;transform-style: preserve-3d; position: relative;}
.credit-card-box .logo_card { position: absolute; top: 9px; right: 20px; width: 60px;}
.credit-card-box .logo_card svg { width: 100%; height: auto; fill: #fff;}
.credit-card-box .front { z-index: 2; -webkit-transform: rotateY(0deg);  transform: rotateY(0deg);}
.credit-card-box .back {-webkit-transform: rotateY(180deg);transform: rotateY(180deg);}
.credit-card-box .back .logo_card {top: 185px;}
.credit-card-box .chip {position: absolute;width: 60px;height: 45px;top: 20px;left: 20px;
background: linear-gradient(135deg, #ddccf0 0%, #d1e9f5 44%, #f8ece7 100%);border-radius: 8px;}
.credit-card-box .chip::before {content: '';position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;
border: 4px solid rgba(128, 128, 128, 0.1);width: 80%;height: 70%;border-radius: 5px;}
.credit-card-box .strip {background: linear-gradient(135deg, #404040, #1a1a1a);position: absolute;width: 100%;height: 50px;
top: 30px;left: 0;}
.credit-card-box .number {position: absolute;margin: 0 auto;top: 103px;left: 19px;font-size: 38px;}
.credit-card-box label {font-size: 10px;letter-spacing: 1px;text-shadow: none;text-transform: uppercase;font-weight: normal;
opacity: 0.5;display: block;margin-bottom: 3px;}
.credit-card-box .card-holder,
.credit-card-box .card-expiration-date {position: absolute;margin: 0 auto;top: 180px;left: 19px;font-size: 22px;text-transform: capitalize;}
.credit-card-box .card-expiration-date {text-align: right;left: auto;right: 20px;}
.credit-card-box .ccv {height: 36px;background: #fff;width: 91%;border-radius: 5px;top: 110px;left: 0;right: 0;position: absolute;margin: 0 auto;color: #000;text-align: right;padding: 10px;}
.credit-card-box .ccv label {margin: -40px 0 14px;color: #fff;}
.the-most {position: fixed;z-index: 1;bottom: 0;left: 0;width: 50vw;max-width: 200px;padding: 10px;}
.the-most img {max-width: 100%;}

    
    
    
   /********MOBILE**********/
@media(max-width:767px) {
    

.credit-card-box .front, .credit-card-box .back {width: 100%;}
.checkout {width: 100%}
.credit-card-box {width: 100%;}
.fan_pr_as {}
     
 .form fieldset input.input-cart-number, .form fieldset .select.input-cart-number {
    width: 23%;
    display: inline-block;
    margin-right: 2px;
}   
  .checkout {
    margin: 150px auto 10px;
    position: relative;
    background: white;
    border-radius: 15px;
    padding: 160px 10px 20px;
    box-shadow: 0 10px 40px rgba(136, 126, 126, 0.1);
}  
    .banner-bg .sidenav {
    padding-left: inherit;
}
    
    
    }
    
    
    
    
    
    
    
    
</style>


<script>

 $('.input-cart-number').on('keyup change', function(){
  $t = $(this);
  
  if ($t.val().length > 3) {
    $t.next().focus();
  }
  
  var card_number = '';
  $('.input-cart-number').each(function(){
    card_number += $(this).val() + ' ';
    if ($(this).val().length == 4) {
      $(this).next().focus();
    }
  })
  
  $('.credit-card-box .number').html(card_number);
});

$('#card-holder').on('keyup change', function(){
  $t = $(this);
  $('.credit-card-box .card-holder div').html($t.val());
});

$('#card-holder').on('keyup change', function(){
  $t = $(this);
  $('.credit-card-box .card-holder div').html($t.val());
});

$('#card-expiration-month, #card-expiration-year').change(function(){
  m = $('#card-expiration-month option').index($('#card-expiration-month option:selected'));
  m = (m < 10) ? '0' + m : m;
  y = $('#card-expiration-year').val().substr(2,2);
  $('.card-expiration-date div').html(m + '/' + y);
})

$('#card-ccv').on('focus', function(){
  $('.credit-card-box').addClass('hover');
}).on('blur', function(){
  $('.credit-card-box').removeClass('hover');
}).on('keyup change', function(){
  $('.ccv div').html($(this).val());
});


/*--------------------
CodePen Tile Preview
--------------------*/
setTimeout(function(){
  $('#card-ccv').focus().delay(1000).queue(function(){
    $(this).blur().dequeue();
  });
}, 500);

/*function getCreditCardType(accountNumber) {
  if (/^5[1-5]/.test(accountNumber)) {
    result = 'mastercard';
  } else if (/^4/.test(accountNumber)) {
    result = 'visa';
  } else if ( /^(5018|5020|5038|6304|6759|676[1-3])/.test(accountNumber)) {
    result = 'maestro';
  } else {
    result = 'unknown'
  }
  return result;
}

$('#card-number').change(function(){
  console.log(getCreditCardType($(this).val()));
})*/

</script>

