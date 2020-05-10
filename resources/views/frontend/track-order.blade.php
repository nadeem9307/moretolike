   @include('frontend/include/header')
   </div>
      <hr>
      <div class="container content mrgtp">
         <!--list profile-->
         <div class="row">
            <ul class="top-link">
               <li><a href="">Home</a></li>
               <li><i class="fa fa-angle-right"></i></li>
               <li><a href="" class="top-link-btn">Track your Order</a></li>
            </ul>
         </div>
          
          
          
          <section class="track_order_panal">
          
              <div class="para_f_tra">
                  <h1>Track your Order</h1>
                 <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
              </div>
              
              <form>
              
                  <div class="row">
                   
                          <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                                <label for="usr">Order ID</label>
                                                <input type="text" class="form-control" id="usr">
                                        </div>
                                </div>
                      
                        <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                                <label for="usr">Billing email</label>
                                                <input type="text" class="form-control" id="usr">
                                        </div>
                                </div>
                      
                        <div class="col-lg-12 col-md-12">
                                      <div class="form-group te_b_track_order">
                                           <button type="submit" class="button" name="track" value="Track">Track</button>
                                        </div>
                                </div>
                  
                  </div>
                  
              </form>
              
          </section>   
     
        
          
         
          
    </div>
    @include('frontend/include/footer')

    
