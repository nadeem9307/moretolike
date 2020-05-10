@include('single-product-sections/header')
@include('single-product-sections/menu-search-bar')

<!-- @foreach($order_details as $order_details1)

  {{ $order_details1->product_name  }}
  @endforeach -->



<div class="page home page-template-default">
	<div id="content" class="site-content" tabindex="-1">
    <div class="container">
      <nav class="woocommerce-breadcrumb">
        <a href="/">Home</a>
          <span class="delimiter"><i class="fa fa-angle-right"></i></span>  
          <a href="/customer">Rating & Review</a>
          <span class="delimiter"><i class="fa fa-angle-right"></i></span>   
          <a href="/order-details/{{$order_details[0]->order_no}}">{{$order_details[0]->order_no}}</a>
      </nav>
      <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <div class="row bgwt">
          <div class="col-md-4"><h5>Rate & Reviews</h5></div>
          <div class="col-md-8"></div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-3">
            <div class="full-wrap1">
            <h5>Whats make you good review</h5>
            <hr />
            <p><b>Have you used this products?</b></p>
            <p>your review should be about your experince with the productLorem Ipsum.</p>
             <hr />
             <p><b>Why review a product?</b></p>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s specimen book. </p>
             <hr />
            <p><b>How to review a product?</b></p>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            </div>
          </div>
          
          <div class="col-md-9 bgwt">
           <h5>Rate This Products</h5>
            <div class="col-md-12"><p>
                                                                                <span class="fa fa-star checked" id="1" onclick="rating(1)"></span>
                                                                                <span class="fa fa-star checked" id="2" onclick="rating(2)"></span>
                                                                                <span class="fa fa-star" id="3" onclick="rating(3)"></span>
                                                                                <span class="fa fa-star" id="4" onclick="rating(4)"></span>
                                                                                <span class="fa fa-star" id="5" onclick="rating(5)"></span>

                                                                            </p></div>
           
            <div class="clearfix"></div>
            <hr />
             <div class="col-md-12"><p><b>Review This Products</p></div>
             <div class="col-md-12">
              <form action="/action_page.php" id="usrform">
               <input type="text" name="usrname" placeholder="Title" style="width: 100%; margin-bottom: 20px;">
                <textarea name="comment" form="usrform" style="height: 120px;">Discription...</textarea>
              </form>



             </div>
              <div class="clearfix"></div>
             <hr>
             <div class="col-md-12"><p class="tt1">Title (Optional)</p></div>
             <div class="col-md-12"><p class="ttt">Review Title</p></div>
             <hr>
             <div class="col-md-12 rcd"><button class="btn btn-primary">SUBMIT</button></div>
           

         
          </div>
            
      
          <div class="clearfix"></div>
          <!--Order Detail Close-->
        </main>
        <!-- #main -->
      </div>
      <!-- #primary -->
    </div>
    <!-- .container -->
  </div>
</div>

@include('layouts/footer')