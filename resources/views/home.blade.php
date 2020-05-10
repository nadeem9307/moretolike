@include('layouts.header')
@include('home-sections.menu-slider')

<style type="text/css">
  
 #myCarousel .nav a small {
    display:block;
}
#myCarousel .nav {
   /* background:#eee;*/
}
#myCarousel .nav li.active{    text-align: center;
    border-top: 2px solid #fed700;
    padding-top: 10px;}
#myCarousel .nav a {
    border-radius:0px;}
    .mrtoppy{  margin-top: 100px; }
    .mrtoppyt{  margin-top: 25px;  }
    .clhh{ color: red; }
    .mdft{ color: black; font-size: 15px; font-weight: 400;}
    .clfty{ color: #0062bd; font-size: 21px; font-weight: 400; }
    .similars{font-size: 62px;
    line-height: 50px;
    font-weight: 300;
    color: rgb(51, 62, 72);
    letter-spacing: 0px;
    font-family: "Open Sans";}
    .limiteds{font-size: 48px;
    line-height: 43px;
    font-weight: 300;
    color: rgb(51, 62, 72);
    letter-spacing: 0px;
    font-family: "Open Sans";}
    .hurryup{font-size: 15px;
    line-height: 16px;
    font-weight: 700;
    color: rgb(51, 62, 72);
    letter-spacing: 0px;
    font-family: "Open Sans";}
     .hurryups{font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    color: rgb(130, 131, 132);
    letter-spacing: 0px;
    font-family: "Open Sans";}
    .value{ font-size: 21px; }
    .days{padding: 5px; border: 2px solid #fed700; float: left; text-align: center; margin-right: 3px;}
    .hours{ padding: 5px; border: 2px solid #fed700; float: left;  text-align: center; margin-right: 3px;}
    .minutes{padding: 5px; border: 2px solid #fed700; float: left; text-align: center; margin-right: 3px;}
    .seconds{padding: 5px; border: 2px solid #fed700; float: left; text-align: center; margin-right: 3px;}
    .hunder{ width: 100%; margin-bottom: 10px; }
    .clear{ margin-bottom: 5px; }
    .stock-sold{ width: 50%; float: left; text-align: left; }
    .stock-available{ width: 50%;  float: left; text-align: center; }
    #progressbar {
  background-color: #e8e8e8;
  border-radius: 13px;
  /* (height of inner div) / 2 + padding */
  /*padding: 3px;*/
}

#progressbar>div {
  background-color: #fed700;
  width: 40%;
  /* Adjust with JavaScript */
  height: 20px;
  border-radius: 10px;
}
   
   
@media (max-width: 767px){
.mrtoppy{  margin-top: 10px; }
    .mrtoppyt{  margin-top: 10px;  }
.hurryups{font-size: 11px;
    line-height: 11px;
    font-weight: 400;
    color: rgb(130, 131, 132);
    letter-spacing: 0px;
    font-family: "Open Sans";}

}

.ads-block.row .col-sm-4 {
    margin-bottom: 10px;
}

</style>

 <div id="content" class="site-content" tabindex="-1">
                <div class="container-fluid">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="home-v1-slider" >
                    <!-- /.owl-carousel -->

                                 <div class="container-fluid ">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner ">
        <?php $i = 0;?>  
        @foreach($home_slider as $row)
          <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
            <div class="row">
               <div class="col-md-4   mrtoppy">
                  <?=$row->left_title?> 
                </div> 
               <div class="col-md-4  mrtoppyt">
                <img src="{{getenv('URL')}}{{$row->product_img}}" width="320" alt="">
               </div> 
                <div class="col-md-4  mrtoppy">
                  
                <h5 class=" clfty"><?=$row->product_name?></h5>
                <h3 class="clhh">$<?=money_format($row->current_price, 2)?> <span class="mdft"> $<?=money_format($row->mrp, 2)?> </span></h3>
                    <div class="deal-countdown countdown hunder">
                       <span data-value="0" class="days">
                         <span class="value">0</span> <br>
                            <b>Days</b>
                              </span>
                            <span class="hours">
                             <span class="value">7</span><br>
                              <b>Hours</b>
                              </span>
                             <span class="minutes">
                              <span class="value">41</span><br>
                               <b>Mins</b>
                               </span>
                               <span class="seconds">
                               <span class="value">58</span><br>
                              <b>Secs</b>
                              </span>
                             </div>
                      <div class="clear"></div>
                  <div class="deal-progress">
                    <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> 
                      <span class="stock-available">Available: <strong>27</strong></span>
            
                 </div>
                         </div>
                          <div class="clear"></div>
                     <div id="progressbar">
                  <div></div>
                </div>
              
                 </div>  

            </div>
        </div>
        <?php $i++;?>  
        @endforeach
        <!-- End Item -->
 
         <!-- <div class="carousel-item">
            <div class="row   ">
                 <div class="col-md-4  mrtoppy"> 
                  <h3 class=" limiteds">LIMITED</h3> 
                      <h1 class="similars">WEEK DEAL</h1>
                      <h5 class="hurryup">HURRY UP BEFORE DEAL END</h5>
                  </div> 
                 <div class="col-md-4  mrtoppyt">
                   <img src="/images/slider1.png" width="320" alt="">
                 </div> 
                <div class="col-md-4  mrtoppy">
                    
                  <h5 class=" clfty">Game Console Controller <br>+ USB 3.0 Cable</h5>
                  <h3 class="clhh">$3,320.00 <span class="mdft"> $4,320.00 </span></h3>
                      <div class="deal-countdown countdown hunder">
                         <span data-value="0" class="days">
                           <span class="value">0</span> <br>
                              <b>Days</b>
                                </span>
                              <span class="hours">
                               <span class="value">7</span><br>
                                <b>Hours</b>
                                </span>
                               <span class="minutes">
                                <span class="value">41</span><br>
                                 <b>Mins</b>
                                 </span>
                                 <span class="seconds">
                                 <span class="value">58</span><br>
                                <b>Secs</b>
                                </span>
                               </div>
                               <div class="clear"></div>
                                <div class="deal-progress">
                                  <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> 
                                    <span class="stock-available">Available: <strong>27</strong></span>
                                   
                                </div> </div>
                                 <div class="clear"></div>
                                 <div id="progressbar">
                        			<div></div>
                      			</div>
                
                   </div>  

              </div>
         </div> -->
         <!-- End Item -->
        
        <!-- <div class="carousel-item">
            <div class="row   ">
                 <div class="col-md-4  mrtoppy"> 
                  <h3 class=" limiteds">LIMITED</h3> 
                      <h1 class="similars">WEEK DEAL</h1>
                      <h5 class="hurryup">HURRY UP BEFORE DEAL END</h5>
                  </div> 
                 <div class="col-md-4  mrtoppyt">
                  <img src="/images/slider3.png" width="320" alt="">
                 </div> 
                <div class="col-md-4  mrtoppy">
                    
                  <h5 class=" clfty">Game Console Controller <br>+ USB 3.0 Cable</h5>
                  <h3 class="clhh">$3,320.00 <span class="mdft"> $4,320.00 </span></h3>
                      <div class="deal-countdown countdown hunder">
                         <span data-value="0" class="days">
                           <span class="value">0</span> <br>
                              <b>Days</b>
                                </span>
                              <span class="hours">
                               <span class="value">7</span><br>
                                <b>Hours</b>
                                </span>
                               <span class="minutes">
                                <span class="value">41</span><br>
                                 <b>Mins</b>
                                 </span>
                                 <span class="seconds">
                                 <span class="value">58</span><br>
                                <b>Secs</b>
                                </span>
                               </div>
                               <div class="clear"></div>
                              <div class="deal-progress">
                                <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> 
                                  <span class="stock-available">Available: <strong>27</strong></span>
                                </div> 
                              </div>
                              <div class="clear"></div>
                                 <div id="progressbar">
                        			<div></div>
              			         </div>
                
                   </div>   

                </div>
        </div> -->

        <!-- End Item -->
        
        <!-- <div class="carousel-item">
            <div class="row   ">
                   <div class="col-md-4  mrtoppy"> 
                    <h3 class=" limiteds">LIMITED</h3> 
                        <h1 class="similars">WEEK DEAL</h1>
                        <h5 class="hurryup">HURRY UP BEFORE DEAL END</h5>
                    </div> 
                   <div class="col-md-4  mrtoppyt">
                    <img src="/images/slider4.png" width="320" alt="">
                   </div> 
                   <div class="col-md-4  mrtoppy">
                      
                    <h5 class=" clfty">Game Console Controller <br>+ USB 3.0 Cable</h5>
                    <h3 class="clhh">$3,320.00 <span class="mdft"> $4,320.00 </span></h3>
                        <div class="deal-countdown countdown hunder">
                           <span data-value="0" class="days">
                             <span class="value">0</span> <br>
                                <b>Days</b>
                                  </span>
                                <span class="hours">
                                 <span class="value">7</span><br>
                                  <b>Hours</b>
                                  </span>
                                 <span class="minutes">
                                  <span class="value">41</span><br>
                                   <b>Mins</b>
                                   </span>
                                   <span class="seconds">
                                   <span class="value">58</span><br>
                                  <b>Secs</b>
                                  </span>
                                 </div>
                                 <div class="clear"></div>
                                 <div class="deal-progress">
                                  <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> 
                                  <span class="stock-available">Available: <strong>27</strong></span>
                             
                                  </div>  </div>
                                   <div class="clear"></div>
                                     <div id="progressbar">
                            			<div></div>
                          			</div>
                  
                     </div> 

                </div>
        </div> -->

        <!-- End Item -->
         <!-- <div class="carousel-item">
            <div class="row   ">
                 <div class="col-md-4 mrtoppy"> 
                  <h3 class=" limiteds">LIMITED</h3> 
                      <h1 class="similars">WEEK DEAL</h1>
                      <h5 class="hurryup">HURRY UP BEFORE DEAL END</h5>
                  </div> 
                 <div class="col-md-4  mrtoppyt">
                   <img src="/images/slider5.png" width="320" alt="">
                 </div> 
                  <div class="col-md-4  mrtoppy">
                    
                  <h5 class=" clfty">Game Console Controller <br>+ USB 3.0 Cable</h5>
                  <h3 class="clhh">$3,320.00 <span class="mdft"> $4,320.00 </span></h3>
                      <div class="deal-countdown countdown hunder">
                         <span data-value="0" class="days">
                           <span class="value">0</span> <br>
                              <b>Days</b>
                                </span>
                              <span class="hours">
                               <span class="value">7</span><br>
                                <b>Hours</b>
                                </span>
                               <span class="minutes">
                                <span class="value">41</span><br>
                                 <b>Mins</b>
                                 </span>
                                 <span class="seconds">
                                 <span class="value">58</span><br>
                                <b>Secs</b>
                                </span>
                               </div>
                               <div class="clear"></div>
                              <div class="deal-progress">
                              <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> 
                                <span class="stock-available">Available: <strong>27</strong></span>
                                  </div> </div>
                                  <div class="clear"></div>
                                   <div id="progressbar">
                          			<div></div>
                        			</div>
               

                   </div>  

              </div>
         </div> -->

        <!-- End Item -->
                
      </div><!-- End Carousel Inner -->


        <ul class="nav nav-pills nav-justified" style="margin-top: 25px; margin-bottom: 15px;">
        
        <?php $i = 0;?>  
        @foreach($home_slider as $row)
          <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}" style="float: left; width: 20%;text-align: center;"><a href="#"><h5 class="hurryups"><?=$row->tab_title?></h5></a></li>
        <?php $i++;?>  
        @endforeach

          <!-- <li data-target="#myCarousel" data-slide-to="1" style="float: left; width: 20%;text-align: center;  "><a href="#">
            <h5 class="hurryups">GAME CONSOLES</h5></a></li>
          <li data-target="#myCarousel" data-slide-to="2" style="float: left; width: 20%;text-align: center;"><a href="#">
            <h5 class="hurryups">LIMITED WEEK <br>DEAL-GAMEPAD</h5></a></li>
          <li data-target="#myCarousel" data-slide-to="3" style="float: left; width: 20%;text-align: center;"><a href="#">
            <h5 class="hurryups">SECOND PRODUCT<br> 40% CHEAPER</h5></a></li>
           <li data-target="#myCarousel" data-slide-to="4" style="float: left; width: 20%; text-align: center;"><a href="#"> 
           <h5 class="hurryups">$ 10 BUKS OR LESS</h5></a></li>
            -->
        </ul>


    </div><!-- End Carousel -->
</div>



                                <!--SECTION – HERO : END-->

                            </div>
                            <!-- /.home-v1-slider -->
                            <!-- Deal products -->
							 @include('home-sections.category_1')

							<!-- Deal products -->

                            
                            <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<div class="ads-block row">
                                @foreach($top_sub_banner as $row)
                                <div class="ad col-xs-12 col-sm-6">
                            			<div class="media">
                            				<div class="media-left media-middle">
                            					<img src="{{getenv('URL')}}{{$row->banner_img}}" alt="">
                            				</div>
                            				<div class="media-body media-middle">
                            					<div class="ad-text">
                                        {{$row->banner_title}}
                            					
                            					</div>
                            					<br>
                            					<div class="ad-action">
                            						<a href="#">Shop now</a>
                            					</div>
                            				</div>
                            			</div>
                            		</div>
                                @endforeach
                               
                            	</div>
                            </div>

                          <!--  2-1-2 Product Grid -->
                           @include('home-sections.category_2')
                           <!--  2-1-2 Product Grid -->
                            @include('home-sections.category_3')
                           <!--  2-1-2 Product Grid -->
                               <div class="home-v1-banner-block animate-in-view fadeIn animated" data-animation="fadeIn">
                                <div class="home-v1-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                                  <a href="#">
                                   <img src="https://demo2.madrasthemes.com/electro/wp-content/uploads/2018/04/home-v5-banner.png" class="img-fluid lazyloading" alt="" data-was-processed="true">
                                  </a>
                                </div>
                              </div>
                           <!--categaries-->
                             <!--  2-1-2 Product Grid -->
                            @include('home-sections.category_4')
                           <!--  2-1-2 Product Grid -->
                            @include('home-sections.best-sellers')
                           <!-- Category Wise Product -->




                           <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            <div class="ads-block row">
                              @foreach($down_banner as $row)
                              <div class="ad col-xs-12 col-sm-4">
                                <div class="media">
                                  <div class="media-left media-middle"> <div class="media-img"><img src="{{getenv('URL')}}{{$row->banner_img}}" alt="Home &amp; Audio Enternteinment" width="330" height="308" class="lazyloading" data-was-processed="true">
                                  </div></div>
                                  <div class="media-body media-middle">
                                    <div class="ad-text">
                                      {{$row->banner_title}}
                                     <!-- Catch Big <br>
                                      <strong>Deals</strong> on the <br>
                                      Cameras --> </div>
                                    <div class="ad-action"> <a href="#">Shop now</a> </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                           </div>
                          
                          <!--add banner-->

                          <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            <div class="ads-block row">
                            
                              <div class="col-sm-8 col-xs-12 da">
                                <div class="col-sm-6 col-xs-12">  <a href="#"> <img src="/images/add-1-1.jpg" alt="" /></a></div>
                              <div class="col-sm-6 col-xs-12 patop">
                                <h2 class="title"><strong>G9 Laptops with</strong><br>Ultra 4K HD Display</h2>
                                 <span class="description">and the fastest Intel Core i7 processor ever</span><span class="price"> <br>
                                 <span class="price"><span class="prefix">from</span><span class="value"><sup>$</sup>399</span></span>
                              </div>
                              
                              </div>

                              <div class="col-sm-4 col-xs-12">
                              <a href="#">  <img src="/images/home-v5-ads-2.jpg" alt="" /></a>
                              </div>

                            </div>
                          </div>
                          <!--add banner-->
                            
                          <!--add banner-->

                          <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            <div class="ads-block row">
                            
                              <div class="col-sm-4 col-xs-12">
                              <a href="#"> <img src="/images/home-v5-ads-1.jpg" alt="" /></a>
                              </div>

                              <div class="col-sm-8 col-xs-12 da">
                             <div class="col-sm-6 col-xs-12 patop">
                                 <h2 class="title"><strong>Fresh Honor 9</strong><br>32GB Unlocked quadcore</h2>
                                
                                 <span class="description"><span>4GB RAM</span><span>64GB ROM</span><span>20MP + 12MP Dual Camera</span></span>
                                 <br>
                                 <span class="price"><span class="prefix">now at</span><span class="value"><sup>$</sup>279</span></span>
                               </div>
                              <div class="col-sm-6 col-xs-12">  <a href="#"> <img src="/images/add-1-2.jpg" alt="" /></a></div>
                             
                              </div>

                            </div>
                          </div>
                          <!--add banner-->
                           
                           


                           </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .container -->
        </div>
@include('home-sections.brands-carousel')
@include('home-sections.footer-widgets')
@include('layouts.footer')


          