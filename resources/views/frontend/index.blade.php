<?php
use \App\Http\Controllers\HomeController;
?>
@include('frontend/include/header')
<!--
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-inner">
               <?php $i = 0;?> 
               @if(isset($data['home_slider']) && !empty($data['home_slider']))
                  @foreach($data['home_slider'] as $row)
                     <div class="carousel-item {{$i == 0 ? 'active' : ''}}" onclick="window.location.href='{{url("beta-product-details/".$row->product_id)}}'" style="cursor: pointer">
                        <div class="row">
                           <div class="col-md-4 mrtoppy">
                              <?=$row->left_title?>
                           </div>
                           <div class="col-md-4 zoomIn animated"><img src="{{getenv('URL')}}{{$row->product_img}}" alt="{{$row->product_name}}" class="sliderimge" /></div>
                           <div class="col-md-4  mrtoppy zoomInUp animated">
                              <h5 class=" clfty"><?=$row->product_name?></h5>
                              <h3 class="clhh">$<?=money_format($row->current_price, 2)?> <span class="mdft"> $<?=money_format($row->mrp, 2)?> </span></h3>
                              <div class="deal-countdown countdown hunder"> 
                                 <span data-value="0" class="days"> <span class="value">0</span> <br>
                                 <b>Days</b> </span> <span class="hours"> <span class="value">7</span><br>
                                 <b>Hours</b> </span> <span class="minutes"> <span class="value">41</span><br>
                                 <b>Mins</b> </span> <span class="seconds"> <span class="value">58</span><br>
                                 <b>Secs</b> </span> 
                              </div>
                              <div class="clear"></div>
                              <div class="deal-progress">
                                 <div class="deal-stock"> <span class="stock-sold">Already Sold: <strong>5</strong></span> <span class="stock-available">Available: <strong>27</strong></span> </div>
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
               @endif
            </div>
          
            <ul class="nav nav-pills nav-justified slider-menu hiddenonsmall">
				<?php $i = 0;?>  
                  @foreach($data['home_slider'] as $row)
                     <li data-target="#myCarousel" data-slide-to="{{$i}}" class="slider-nav {{$i == 0 ? 'active' : ''}}"><a href="javascript:void(0)"><h6 class="sliderheading"><?=$row->tab_title?></h6></a></li>
                     <?php $i++;?>  
                  @endforeach
            </ul>
         </div>
-->
         <!-- End Carousel --> 
      </div>




<section class="mobile_here_no">
<!--Desktop Slider Section--->    
<section class="header_down_sec hide_for_xs">
    <div class="container-fluid">
        <div class="wrap_me_sl">
            <div class="row">
<!--
                
                <div class="col-sm-2 fisr_s_cl">
                    <div class="mega_menu_sec">
                        <div class="haed_me_m">
                            <span>Departments</span>
                            <a href="#">View All</a>
                        </div>
                        <ul class="menu">
                            <li><a href="#" class="font_d_s">Value of the Day</a></li>
                            <li><a href="#" class="font_d_s">Top 100 Offers</a></li>
                            <li><a href="#" class="font_d_s">New Arrivals</a></li>
                            <li class="an_mega_m">
                                <a href="#">Laptops & Computers</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Cameras & Photography</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-3.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Smart Phones & Tablets</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Video Games & Consoles’</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-7.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">TV & Audio</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Gadgets</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Car Electronic & GPS</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Printers & Inks</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Portable Audio</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                            <li class="an_mega_m">
                                <a href="#">Accesories</a>
                                <div class="megadrop">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Software</a></li>
                                                <li><a href="#">Smartphones</a></li>
                                                <li><a href="#">Televisions</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <hr>
                                            <ul class="list-unstyled mega_neu_con">
                                                <li>
                                                    <h4>Mobiles & Tablets</h4>
                                                </li>
                                                <li><a href="#">All Mobile Phones</a></li>
                                                <li><a href="#">Mobile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega_menu_img_new">
                                        <img src="{{asset('assets/img/megamenu-4.png')}}" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
-->
                <div class="col-sm-12">
                    <div class="client-logo-slider-panel">
                        <div class="side__panel__cl">
                        <div id="logo-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="slider_content_new">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="animate one cus_cl_ad">
                                                <span>T</span><span>H</span><span>E</span>
                                                <span>N</span><span>E</span><span>W</span><br>
                                                <span>S</span><span>T</span><span>A</span><span>N</span><span>D</span><span>A</span><span>R</span><span>D</span>
                                                <div class="sec_co_se">
                                                    <p>UnderFavorable 360 Cameras</p>
                                                    <h5>Form</h5>
                                                    <h3>$749</h3>
                                                </div>
                                                <div class="slider_btn_cl">
                                                  <a href="#">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="slider_co_in_c">
                                                <img src="{{asset('assets/img/slider-img-conte.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider_content_new">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="animate one cus_cl_ad">
                                                <span>T</span><span>H</span><span>E</span>
                                                <span>N</span><span>E</span><span>W</span><br>
                                                <span>S</span><span>T</span><span>A</span><span>N</span><span>D</span><span>A</span><span>R</span><span>D</span>
                                                <div class="sec_co_se">
                                                    <p>UnderFavorable 360 Cameras</p>
                                                    <h5>Form</h5>
                                                    <h3>$749</h3>
                                                </div>
                                                 <div class="slider_btn_cl">
                                                  <a href="#">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="slider_co_in_c">
                                                <img src=" {{asset('assets/img/Smartwatches.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider_content_new">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="animate one cus_cl_ad">
                                                <span>T</span><span>H</span><span>E</span>
                                                <span>N</span><span>E</span><span>W</span><br>
                                                <span>S</span><span>T</span><span>A</span><span>N</span><span>D</span><span>A</span><span>R</span><span>D</span>
                                                <div class="sec_co_se">
                                                    <p>UnderFavorable 360 Cameras</p>
                                                    <h5>Form</h5>
                                                    <h3>$749</h3>
                                                </div>
                                                 <div class="slider_btn_cl">
                                                  <a href="#">Start Buying</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="slider_co_in_c">
                                                <img src="{{asset('assets/img/slider-img-conte.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>    
                    </div>
                    
<!--
                    <div class="slider_down_h">
                        <ul class="list-inline sd_d_y">
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="{{asset('assets/img/cat-6.jpg')}}" class="img-responsive" alt="Image">
                                    <p>Accessories</p>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="{{asset('assets/img/Accesories-330x308.jpg')}}" class="img-responsive" alt="Image">
                                    <p>Accessories</p>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="{{asset('assets/img/AllinOne-330x308.jpg')}}" class="img-responsive" alt="Image">
                                    <p>All in One</p>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src=" {{asset('assets/img/HomeEnternetiment-330x308.jpg')}}" class="img-responsive" alt="Image">
                                    <p>Audio Speakers</p>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="{{asset('assets/img/cat-6.jpg')}}" class="img-responsive" alt="Image">
                                    <p>Cameras</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
-->
                </div>
                
<!--
                <div class="col-sm-2 second_s_cl">
                    <div class="right_side_sli">
                        <ul class="list-unstyled lis_r_sli">
                            <li>
                                <a href="#">
                                    <div class="da_text_n"> Catch Big <strong>Deals</strong> on<br>The Consoles</div>
                                    <div class="da_action_sh"> Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    <img src="{{asset('assets/img/home-sl-da-1.png')}}" class="img-responsive" alt="Image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="da_text_n"> Shop the <strong>Hottest</strong><br>Products</div>
                                    <div class="da_action_sh"> Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    <img src="{{asset('assets/img/home-sl-da-2.png')}}" class="img-responsive" alt="Image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="da_text_n"> Laptops Notebooks<br> <strong>and More</strong></div>
                                    <div class="da_action_sh"> Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    <img src="{{asset('assets/img/home-sl-da-3.png')}}" class="img-responsive" alt="Image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
-->
            </div>
        </div>
    </div>
</section>


<!----------------------- RECENT ADDED PRODUCTS ------------------------->


  <section class="pr_sli_de">
      <div class="container-fluid">
          <div class="row tabmenu-line">
              <div class="col-md-6">
                  <h2 class="popular">Recent Added Products</h2>
              </div>
              <div class="col-md-6">
                  <div class="cat_h_sc">
                      <!--
                          <ul class="tab-menu recent_added_products1">
                          <li>
                          <a href="javascript:void(0)" class="active" onclick="shortProduct('*', 'recent_added_products',this)">Top 20</a>
                          </li>
                          @foreach($data['categories'] as $row)
                            <li>
                          <a href="javascript:void(0)" onclick="shortProduct({{$row->id}}, 'recent_added_products',this)">{{$row->category_name}}</a>
                          </li>
                          @endforeach
                          </ul>
                          -->
                      <div class="wrap_sec_min_sc">
                          <div class="scrollmenu">
                              @foreach($data['categories'] as $key=>$row)
                              <a href="{{url('/category/'.$row->id)}}" target="_blank">{{$row->category_name}}</a>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <hr>
          <div id="demo1" class="is-relative">
              <div class="nav-controls">
                  <div class="button-next"><i class="fa fa-angle-left"></i></div>
                  <div class="button-prev"><i class="fa fa-angle-right"></i></div>
              </div>
              <div class="no-padding my-5 products-carousel swiper-container">
                  <div class="swiper-wrapper">
                      @foreach($data['recent_added_products'] as $row)
                      <?php $per = $row->vendor_commission_type == 'percentage' ? '%' : 'flat';?>
                      <div class="swiper-slide">
                          <input type="hidden" class="recent_added_products" value="{{$row->sub_category_id}}">
                          <div class="product-width product category2 popupids{{$row->product_id}}{{$row->sub_category_id}}">
                              <div class="col-item flyer_parent_div">
                                  <div class="col-header">
                                      <div class="price-top">
                                          <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                              <br>
                                              <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                              <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                          <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                                      </div>
                                      <div class="price-right">
                                          <h5>
                                              @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                              <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                              <i class="fa fa-check"></i> Added
                                              </a>
                                              @else
                                              <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                              <i class="ec ec-compare"></i> Compare
                                              </a>
                                              @endif
                                          </h5>
                                      </div>
                                  </div>
                                  <div class="col-info" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                      <div class="price-name">
                                          <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                                      </div>
                                      <div class="price-detail">
                                          <h3>
                                              <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                              <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                              </span>
                                          </h3>
                                      </div>
                                  </div>
                                  <div class="photo hovereffect">
                                      <span class="wpb_wl_preview quick1 open-popup-link">
                                      </span>
                                      <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
                                      <img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
                                      </a> 
                                  </div>
                                  <!-- modal content-->
                                  {{--@include('frontend/include/product_detail')--}}
                                  <!--modal content end-->                    
                                  <div class="info">
                                      <div class="price-wrapper">
                                          <div class="price">
                                              <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                              <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                          </div>
                                          <div class="rating hidden-sm">
                                              <span class="wrapper1">
                                              <a href="javascript:void(0)">
                                              <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                              </a>
                                              <span class="tooltip">Add To Cart</span>
                                              </span>
                                          </div>
                                      </div>
                                      <div class="separator clear-left" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                          @if(Session::has('user_id'))
                                          <p class="btn-add">
                                              @if($row->is_liked == 0)
                                              <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
                                              <i class="fa fa-heart"></i> {{count($row->product_like)}} 
                                              </a>
                                              @else
                                              <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm">
                                              <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
                                              </a>
                                              @endif
                                          </p>
                                          @else
                                          <p class="btn-add"> 
                                              <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                              <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
                                              </a>
                                          </p>
                                          <!--
                                              <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                              </p>
                                              -->
                                          @endif
                                          <p class="btn-details new_cus_mo"> 
                                              <span class="wrapper">
                                              <b>Product Menu</b>
                                              <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded{{$row->product_id}}{{$row->sub_category_id}}_recent_a_p"><img src="{{asset('assets/images/dot_in_n_grey.png')}}" alt=""></a> 
                                              </span> 
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="hover_share_link popupidradded{{$row->product_id}}{{$row->sub_category_id}}_recent_a_p">
                                  <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="{{asset('assets/images/cancel.png')}}" alt=""></a> 
                                  </div>
                                  <ul class="list-unstyled list_se_dr_sn">
                                      <li>
                                          <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">
                                              <h4>Sharable Product</h4>
                                              <p>Add this product to your own store</p>
                                          </a>
                                      </li>
                                      <li>
                                          @if($row->shareable_product == 'shareable')
                                          <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModalCollection">
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                          </a>
                                          @else
                                          <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModalCollection">
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                          </a>
                                          @endif
                                      </li>
<!--
                                      <li>
                                          <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}">
                                              <h4>Compare</h4>
                                              <p>Add to compear list</p>
                                          </a>
                                      </li>
-->
                                      <li>
                                          <a href="#">
                                              <h4>Social Media & mail</h4>
                                              <p>Send this to your friends</p>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEmbed">
                                              <h4>Embed/Link Product</h4>
                                              <p>Embed or direct link to the Product</p>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
                  <!-- Add Arrows -->
              </div>
          </div>
      </div>
  </section>

  <section class="msnh_ls hide_for_lg">
     <div class="container-fluid">
        <img src="https://moretolike.com/assets/img/baner_lap_d.png" class="img-responsive" alt="Image">
      </div>
  </section> 

   <section class="ajds_sl">
       <div class="container-fluid">
          <div class="row">
             @foreach($data['s_banner'] as $row)
             <div class="col-md-6">
                <div class="row ad-bg">
                   <div class="col-xs-12 col-sm-6 ad-bgc"><img src="{{ getenv('URL')}}410X281_{{$row->banner_img}}" alt=""></div>
                   <div class="col-xs-12 col-sm-6 ad-bgc bch_sls">
                      <h4 class="catchpad">{{$row->banner_title}}</h4>
                      <a href="javascript:void(0)">Shop now <i class="fa fa-angle-right btsn"></i></a> 
                   </div>
                </div>
             </div>
             @endforeach
             <!--<div class="col-md-6">
                <div class="row ad-bg">
                   <div class="col-xs-12 col-sm-6"><img src="{{asset('assets/images/camras.jpg')}}" alt=""> </div>
                   <div class="col-xs-12 col-sm-6">
                      <h4> TABLETS, SMARTPHONES AND MORE </h4>
                      <a href="javascript:void(0)">Shop now <i class="fa fa-angle-right btsn"></i></a> 
                   </div>
                </div>
             </div>-->
          </div>
       </div>
    </section>
<!----------------------- END RECENT ADDED PRODUCTS --------------------->




<!----------------------- BEST SELLERS PRODUCTS ------------------------->

  <section class="pr_sli_de">
      <div class="container-fluid">
      <div class="row tabmenu-line">
          <div class="col-md-6">
              <h2 class="popular">Best Sellers</h2>
          </div>
          <div class="col-md-6">
              <!--
                  <ul class="tab-menu best_seller1">
                    <li><a href="javascript:void(0)" class="active" onclick="shortProduct('*', 'best_seller',this)" >Top 20</a></li>
                    @foreach($data['categories'] as $row)
                                   <li><a href="javascript:void(0)" onclick="shortProduct({{$row->id}}, 'best_seller',this)">{{$row->category_name}}</a></li>
                    @endforeach
                  </ul>
                  -->
              <div class="wrap_sec_min_sc">
                  <div class="scrollmenu">
                      @foreach($data['categories'] as $key=>$row)
                      <a href="{{url('/category/'.$row->id)}}" target="_blank">{{$row->category_name}}</a>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <div id="demo3" class="is-relative">
          <div class="nav-controls">
              <div class="button-next"><i class="fa fa-angle-left"></i></div>
              <div class="button-prev"><i class="fa fa-angle-right"></i></div>
          </div>
          <div class="no-padding my-5 products-carousel swiper-container">
              <div class="swiper-wrapper">
                  @foreach($data['recent_added_products'] as $row)
                  <?php $per = $row->vendor_commission_type == 'percentage' ? '%' : 'flat';?>
                  <div class="swiper-slide">
                      <input type="hidden" class="recent_added_products" value="{{$row->sub_category_id}}">
                      <div class="product-width product category2 popupids{{$row->product_id}}{{$row->sub_category_id}}">
                          <div class="col-item flyer_parent_div">
                              <div class="col-header">
                                  <div class="price-top">
                                      <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                          <br>
                                          <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                          <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                      <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                                  </div>
                                  <div class="price-right">
                                      <h5>
                                          @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                          <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                          <i class="fa fa-check"></i> Added
                                          </a>
                                          @else
                                          <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                          </a>
                                          @endif
                                      </h5>
                                  </div>
                              </div>
                              <div class="col-info" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                  <div class="price-name">
                                      <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                                  </div>
                                  <div class="price-detail">
                                      <h3>
                                          <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                          <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                          </span>
                                      </h3>
                                  </div>
                              </div>
                              <div class="photo hovereffect">
                                  <span class="wpb_wl_preview quick1 open-popup-link">
                                  </span>
                                  <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
                                  <img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
                                  </a> 
                              </div>
                              <!-- modal content-->
                              {{--@include('frontend/include/product_detail')--}}
                              <!--modal content end-->                    
                              <div class="info">
                                  <div class="price-wrapper">
                                      <div class="price">
                                          <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                          <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                      </div>
                                      <div class="rating hidden-sm">
                                          <span class="wrapper1">
                                          <a href="javascript:void(0)">
                                          <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                          </a>
                                          <span class="tooltip">Add To Cart</span>
                                          </span>
                                      </div>
                                  </div>
                                  <div class="separator clear-left" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                      @if(Session::has('user_id'))
                                      <p class="btn-add">
                                          @if($row->is_liked == 0)
                                          <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
                                          <i class="fa fa-heart"></i> {{count($row->product_like)}} 
                                          </a>
                                          @else
                                          <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm">
                                          <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
                                          </a>
                                          @endif
                                      </p>
                                      @else
                                      <p class="btn-add"> 
                                          <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                          <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
                                          </a>
                                      </p>
                                      <!--
                                          <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                          <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                          </p>
                                          -->
                                      @endif
                                      <p class="btn-details new_cus_mo"> 
                                          <span class="wrapper">
                                          <b>Product Menu</b>
                                          <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded{{$row->product_id}}{{$row->sub_category_id}}_best_seller_p"><img src="{{asset('assets/images/dot_in_n_grey.png')}}" alt=""></a> 
                                          </span> 
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="hover_share_link popupidradded{{$row->product_id}}{{$row->sub_category_id}}_best_seller_p">
                              <div class="can_jash">
                                  <a class="can_im" href="javascript:void(0)"><img src="{{asset('assets/images/cancel.png')}}" alt=""></a> 
                              </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                  <li>
                                      <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">
                                          <h4>Sharable Product</h4>
                                          <p>Add this product to your own store</p>
                                      </a>
                                  </li>
                                  <li>
                                      @if($row->shareable_product == 'shareable')
                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection" >
                                          <h4>Collection</h4>
                                          <p>Add this product to a collection</p>
                                      </a>
                                      @else
                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection" >
                                          <h4>Collection</h4>
                                          <p>Add this product to a collection</p>
                                      </a>
                                      @endif
                                  </li>
<!--
                                  <li>
                                      <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}">
                                          <h4>Compare</h4>
                                          <p>Add to compear list</p>
                                      </a>
                                  </li>
-->
                                  <li>
                                      <a href="#">
                                          <h4>Social Media & mail</h4>
                                          <p>Send this to your friends</p>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <h4>Embed/Link Product</h4>
                                          <p>Embed or direct link to the Product</p>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
              <!-- Add Arrows -->
          </div>
      </div>
      </div>
  </section>
   <section class="maeds_sl hide_for_lg">
       <div class="container-fluid">
         <img src="https://moretolike.com/assets/img/ba_ma.png" class="img-responsive" alt="Image">
        </div>  
    </section>

    <section class="delsj_p">
      <div class="container-fluid">
          <div class="ads-block row">
              <div class="col-sm-8 col-xs-12 da">
                  <div class="row g9aptops">
                      <div class="col-sm-6 col-xs-12 pa"> <a href="javascript:void(0)"> <img src="{{asset('assets/images/add-1-1.jpg')}}" alt=""></a></div>
                      <div class="col-sm-6 col-xs-12 patop">
                          <h2 class="title">G9 Laptops with<br>
                              Ultra 4K HD Display
                          </h2>
                          <span class="description">and the fastest Intel Core i7 processor ever</span><span class="price"> <br>
                          <span class="price"><span class="prefix">from</span><span class="value"><sup>$</sup>399</span></span> </span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4 col-xs-12"> <a href="javascript:void(0)"> <img src="{{asset('assets/images/home-v5-ads-2.jpg')}}" alt=""></a> </div>
          </div>
      </div>
  </section>  
  
<!----------------------- BEST SELLERS PRODUCTS ------------------------->




<!----------------------- RECENT VIEW PRODUCTS ------------------------->


  <section class="pr_sli_de">
         <div class="container-fluid">
         <div class="row tabmenu-line">
            <div class="col-md-6">
               <h2 class="popular">Recent View Products</h2>
            </div>
            <div class="col-md-6">
                <!--
                           <ul class="tab-menu recent_added_products_pro1">
                      <li>
                        <a href="javascript:void(0)" class="active" onclick="shortProduct('*', 'recent_added_products_pro',this)">Top 20
                        </a>
                      </li>
                              @foreach($data['categories'] as $row)
                                 <li><a href="javascript:void(0)" onclick="shortProduct({{$row->id}}, 'recent_added_products_pro',this)">{{$row->category_name}}</a></li>
                              @endforeach
                           </ul>
            -->

                <div class="wrap_sec_min_sc">
                    <div class="scrollmenu">
                        @foreach($data['categories'] as $key=>$row)
                        <a href="{{url('/category/'.$row->id)}}" target="_blank">{{$row->category_name}}</a>

                        @endforeach

                    </div>
                </div>

            </div>
         </div>
         <hr>
         <div id="demo5" class="is-relative">
            <div class="nav-controls">
               <div class="button-next"><i class="fa fa-angle-left"></i></div>
               <div class="button-prev"><i class="fa fa-angle-right"></i></div>
            </div>
            <div class="no-padding my-5 products-carousel swiper-container">
               <div class="swiper-wrapper">
                  @foreach($data['recent_added_products'] as $row)
                  <?php $per = $row->vendor_commission_type == 'percentage' ? '%' : 'flat';?>
                     <div class="swiper-slide">
                      <input type="hidden" class="recent_added_products" value="{{$row->sub_category_id}}">
                        <div class="product-width product category2 popupids{{$row->product_id}}{{$row->sub_category_id}}">
                           <div class="col-item flyer_parent_div">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                       <br>
                                       <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                       <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                       @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                          <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                             <i class="fa fa-check"></i> Added
                                          </a>
                                       @else
                                       <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                       @endif
                                    </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
                                <img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
                              </a> 
                              </div>
                              <!-- modal content-->
                {{--@include('frontend/include/product_detail')--}}
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                       <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                     @if(Session::has('user_id'))
                                       <p class="btn-add">
                                          @if($row->is_liked == 0)
                                             <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
                                                <i class="fa fa-heart"></i> {{count($row->product_like)}} 
                                             </a>
                                          @else
                                             <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm">
                                                <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
                                             </a>
                                          @endif
                                       </p>
                                      
                                     @else
                                        <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
                                           </a>
                                        </p>
            <!--
                                                   <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                                   </p>
            -->
                                                 
                                     
                                     @endif
                                <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded{{$row->product_id}}{{$row->sub_category_id}}_recent_v_p"><img src="{{asset('assets/images/dot_in_n_grey.png')}}" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           </div>
                            
                            <div class="hover_share_link popupidradded{{$row->product_id}}{{$row->sub_category_id}}_recent_v_p">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="{{asset('assets/images/cancel.png')}}" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                    @if($row->shareable_product == 'shareable')
                                          
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection" > 
                                            <h4>Collection</h4>
                                            <p>Add this product to a collection</p>
                                        </a> 
                                         
                                         @else
                                         
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection" > 
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                        </a>  
                                          
                                         @endif
                                    
                                  </li>
<!--
                                   <li>
                                       <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
-->
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media & mail</h4>
                                        <p>Send this to your friends</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="#">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or direct link to the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                        </div>
                         
                     </div>
           
                  @endforeach
               </div>
               <!-- Add Arrows -->
            </div>
         </div>
      </div> 
      </section>

<!----------------------- RECENT VIEW PRODUCTS ------------------------->
             
      
    
          


<!--------------------------- POPULER PRODUCTS -------------------------->


  <section class="pr_sli_de">
      <div class="container-fluid">
      <div class="row tabmenu-line">
          <div class="col-md-6">
              <h2 class="popular">Populer Products</h2>
          </div>
          <div class="col-md-6">
              <div class="wrap_sec_min_sc">
                  <div class="scrollmenu">
                      @foreach($data['categories'] as $key=>$row)
                      <a href="{{url('/category/'.$row->id)}}" target="_blank">{{$row->category_name}}</a>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <div id="demo2" class="is-relative">
          <div class="nav-controls">
              <div class="button-next"><i class="fa fa-angle-left"></i></div>
              <div class="button-prev"><i class="fa fa-angle-right"></i></div>
          </div>
          <div class="no-padding my-5 products-carousel swiper-container">
              <div class="swiper-wrapper">
                  @foreach($data['recent_added_products'] as $row)
                  <?php $per = $row->vendor_commission_type == 'percentage' ? '%' : 'flat';?>
                  <div class="swiper-slide">
                      <input type="hidden" class="recent_added_products" value="{{$row->sub_category_id}}">
                      <div class="product-width product category2 popupids{{$row->product_id}}{{$row->sub_category_id}}">
                          <div class="col-item">
                              <div class="col-header">
                                  <div class="price-top">
                                      <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa{{$row->product_id}}" data-html="true" title='<div class="tooltip_s"><p  productid="aa{{$row->product_id}}"  class="close tooltipClose1"><i class="fa fa-close"></i></p>
                                          <br>
                                          <span class="text1">Add this product to your Store you earn {{$row->vendor_commission}} {{$per}} on each sale.
                                          <br>This product is delivered by:<br></span><span class="undeline">Superstore</span> <span class="ftrt"> <a href="javascript:void(0)" onclick="addToCollectionConfirm({{$row->product_id}}, 35, 1)">Click to add..</a></span></div>'> </a>
                                      <h5><a href="javascript:void(0);" class="show-tt1" productid="aa{{$row->product_id}}"><i class="fa fa-barcode"></i></a> My Store</h5>
                                  </div>
                                  <div class="price-right">
                                      <h5>
                                          @if(is_array(Session::get('compare_id')) && in_array($row->product_id, Session::get('compare_id')))
                                          <a href="javascript:void(0)" onclick="compare({{$row->product_id}})" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                          <i class="fa fa-check"></i> Added
                                          </a>
                                          @else
                                          <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                          </a>
                                          @endif
                                      </h5>
                                  </div>
                              </div>
                              <div class="col-info" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                  <div class="price-name">
                                      <h5 style="text-transform: capitalize;">{{$row->category_name}}</h5>
                                  </div>
                                  <div class="price-detail">
                                      <h3>
                                          <a href='{{url("/product/".$row->product_id)}}' style="text-transform: capitalize;" class="show_product_detail">{{substr($row->product_name,0, 30)}}</a>
                                          <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_{{$row->product_id}}" data-effect="mfp-zoom-in" >
                                          </span>
                                      </h3>
                                  </div>
                              </div>
                              <div class="photo hovereffect">
                                  <span class="wpb_wl_preview quick1 open-popup-link">
                                  </span>
                                  <a href='{{url("/product/".$row->product_id)}}'  class="show_product_detail">
                                  <img src="{{ getenv('URL')}}308X330_{{$row->product_img}}" class="img-responsive" alt="{{$row->product_name}}" />
                                  </a> 
                              </div>
                              <!-- modal content-->
                              {{--@include('frontend/include/product_detail')--}}
                              <!--modal content end-->                    
                              <div class="info">
                                  <div class="price-wrapper">
                                      <div class="price">
                                          <h5 class="price-text-color">${{money_format('%i',$row->current_price)}}</h5>
                                          <del><span class="amount">${{money_format('%i',$row->mrp)}}</span></del>
                                      </div>
                                      <div class="rating hidden-sm">
                                          <span class="wrapper1">
                                          <a href="javascript:void(0)">
                                          <span class="add-cart-large add-to-cart" id="add-to-like-{{$row->product_id}}"><img src="{{asset('assets/images/cart.png')}}" alt=""></span>
                                          </a>
                                          <span class="tooltip">Add To Cart</span>
                                          </span>
                                      </div>
                                  </div>
                                  <div class="separator clear-left" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}">
                                      @if(Session::has('user_id'))
                                      <p class="btn-add">
                                          @if($row->is_liked == 0)
                                          <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm" onclick="productLike(this.id, {{Session::get('user_id')}}, {{$row->product_id}})" id="like_{{$row->product_id}}">
                                          <i class="fa fa-heart"></i> {{count($row->product_like)}} 
                                          </a>
                                          @else
                                          <a href="javascript:void(0)" popupids="popupids{{$row->product_id}}{{$row->sub_category_id}}" class="hidden-sm">
                                          <i class="fa fa-heart color-red"></i> {{count($row->product_like)}} 
                                          </a>
                                          @endif
                                      </p>
                                      @else
                                      <p class="btn-add"> 
                                          <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                          <i class="ec ec-favorites"></i> {{count($row->product_like)}} 
                                          </a>
                                      </p>
                                      <!--
                                          <p class="btn-details"> <span class="wrapper"><img src="{{asset('assets/images/add-clooection.png')}}" alt="" style="width:15px;"> 
                                          <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                          </p>
                                          -->
                                      @endif
                                      <p class="btn-details new_cus_mo"> 
                                          <span class="wrapper">
                                          <b>Product Menu</b>
                                          <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded{{$row->product_id}}{{$row->sub_category_id}}_popular_p"><img src="{{asset('assets/images/dot_in_n_grey.png')}}" alt=""></a> 
                                          </span> 
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="hover_share_link popupidradded{{$row->product_id}}{{$row->sub_category_id}}_popular_p">
                              <div class="can_jash">
                                  <a class="can_im" href="javascript:void(0)"><img src="{{asset('assets/images/cancel.png')}}" alt=""></a> 
                              </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                  <li>
                                      <a href="javascript:void(0)" class="sea_pro_model" popupid = "popupidradded{{$row->product_id}}{{$row->sub_category_id}}">
                                          <!--                                        <span><img class="img-fluid" src="{{asset('assets/images/add-clooection.png')}}" alt="image"></span>-->
                                          <h4>Sharable Product</h4>
                                          <p>Add this product to your own store</p>
                                      </a>
                                  </li>
                                  <li>
                                      @if($row->shareable_product == 'shareable')
                                      <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModalCollection">
                                          <h4>Collection</h4>
                                          <p>Add this product to a collection</p>
                                      </a>
                                      @else
                                      <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModalCollection">
                                          <h4>Collection</h4>
                                          <p>Add this product to a collection</p>
                                      </a>
                                      @endif
                                  </li>
<!--
                                  <li>
                                      <a onclick="compare({{$row->product_id}})" href="javascript:void(0)" id="compare_{{$row->product_id}}">
                                          <h4>Compare</h4>
                                          <p>Add to compear list</p>
                                      </a>
                                  </li>
-->
                                  <li>
                                      <a href="#">
                                          <h4>Social Media & mail</h4>
                                          <p>Send this to your friends</p>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <h4>Embed/Link Product</h4>
                                          <p>Embed or direct link to the Product</p>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
              <!-- Add Arrows -->
          </div>
      </div>
  </section>


<!--------------------------- END POPULER PRODUCTS ---------------------->


       
<section class="tab_new_pan_cl">
    <div class="container-fluid">



        <div id="tabs" class="project-tab">
            <div class="row">
                <div class="col-md-12">
                   <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><span>Best Deals</span></a>

                            @foreach($data['categories'] as $row)
		                  		<!-- <a class="nav-item nav-link load_tab" cat_id="{{$row->id}}" id="{{str_slug($row->category_name)}}{{$row->id}}-tab" data-toggle="tab" href="#{{str_slug($row->category_name)}}{{$row->id}}" role="tab" aria-controls="{{ str_slug($row->category_name) }}{{$row->id}}" aria-selected="false"><span>{{$row->category_name}}</span></a> -->
                          <a class="nav-item nav-link load_tab" cat_id="{{$row->id}}" id="{{str_slug($row->category_name)}}{{$row->id}}-tab" data-toggle="tab" href="{{URL('category')}}/{{$row->id}}" role="tab" aria-controls="{{ str_slug($row->category_name) }}{{$row->id}}" aria-selected="false"><span>{{$row->category_name}}</span></a>
		                  	@endforeach
                           
                        </div>
                    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="tab_content_data">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-sm-12">
            <div class="tab_rght_lft_sec_new">
                
            <!----LEFT ONE-->    
             <div class="product-width product category2 popupids106018">
                                          <div class="col-item flyer_parent_div">
                                              <div class="col-header">
                                                  <div class="price-top">
                                                      <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1060" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1060&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1060, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                                      <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1060"><i class="fa fa-barcode"></i></a> My Store</h5>
                                                  </div>
                                                  <div class="price-right">
                                                      <h5>
                                                          <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060" class="cursor-pointer">
                                                              <i class="ec ec-compare"></i> Compare
                                                          </a>
                                                      </h5>
                                                  </div>
                                              </div>
                                              <div class="col-info" popupids="popupids106018">
                                                  <div class="price-name">
                                                      <h5 style="text-transform: capitalize;">Accessories</h5>
                                                  </div>
                                                  <div class="price-detail">
                                                      <h3>
                                                          <a href="https://moretolike.com/product/1060" style="text-transform: capitalize;" class="show_product_detail">Testing 0403</a>
                                                          <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1060" data-effect="mfp-zoom-in">
                                                          </span>
                                                      </h3>
                                                  </div>
                                              </div>
                                              <div class="photo hovereffect">
                                                  <span class="wpb_wl_preview quick1 open-popup-link">
                                                  </span>
                                                  <a href="https://moretolike.com/product/1060" class="show_product_detail">
                                                      <img src="https://admin-api.moretolike.com/uploads/308X330_3c52fe92d7cf8054caecdc82e9b940a6.jpg" class="img-responsive" alt="Testing 0403">
                                                  </a>
                                              </div>

                                              <div class="info">
                                                  <div class="price-wrapper">
                                                      <div class="price">
                                                          <h5 class="price-text-color">$10.00</h5>
                                                          <del><span class="amount">$0.00</span></del>
                                                      </div>
                                                      <div class="rating hidden-sm">
                                                          <span class="wrapper1">
                                                              <a href="javascript:void(0)">
                                                                  <span class="add-cart-large add-to-cart" id="add-to-like-1060"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                                              </a>
                                                              <span class="tooltip">Add To Cart</span>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="separator clear-left" popupids="popupids106018">
                                                      <p class="btn-add">
                                                          <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal">
                                                              <i class="ec ec-favorites"></i> 1
                                                          </a>
                                                      </p>



                                                      <p class="btn-details new_cus_mo">
                                                          <span class="wrapper">
                                                              <b>Product Menu</b>
                                                              <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded106018"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a>

                                                          </span>
                                                      </p>
                                                  </div>
                                              </div>
                                                  <div class="hover_share_link popupidradded106018">
                                              <div class="can_jash">
                                                  <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a>
                                              </div>
                                              <ul class="list-unstyled list_se_dr_sn">
                                                  <li>
                                                <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">
                                                          <h4>Sharable Product</h4>
                                                          <p>Add this product to your own store</p>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection">
                                                          <h4>Collection</h4>
                                                          <p>Add this product to a collection</p>
                                                      </a>
                                                  </li>
<!--
                                                  <li>
                                                      <a onclick="compare(1060)" href="javascript:void(0)" id="compare_1060">

                                                          <h4>Compare</h4>
                                                          <p>Add to compear list</p>
                                                      </a>
                                                  </li>
-->
                                                  <li>
                                                      <a href="#">

                                                          <h4>Social Media &amp; mail</h4>
                                                          <p>Send this to your friends</p>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="#">
                                                          <h4>Embed/Link Product</h4>
                                                          <p>Embed or direct link to the Product</p>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                          </div>
                                      
                                      </div>
                
             <!----LEFT TWO--> 
              <div class="product-width product category2 popupids10596">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1059" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1059&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1059, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1059"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1059)" href="javascript:void(0)" id="compare_1059" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10596">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1059" style="text-transform: capitalize;" class="show_product_detail">Testing</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1059" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1059" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_5e4a1574c840d57aa3535ce80a84f8cf.jpg" class="img-responsive" alt="Testing">
              								</a> 
                              </div>
                              <!-- modal content-->
							  
                              <!--modal content end-->                    
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$4.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1059"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10596">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>
<!--
                                       <p class="btn-details"> <span class="wrapper"><img src="https://moretolike.com/assets/images/add-clooection.png" alt="" style="width:15px;"> 
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Collection</a> <span class="tooltip">Add To collection</span> </span> 
                                       </p>
-->
                                     
                                     
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10596"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                               
                                                 <div class="hover_share_link popupidradded10596">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
                                   <li>
                                       <a onclick="compare(1059)" href="javascript:void(0)" id="compare_1059">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friends</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="#">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or direct link to the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                               
                           </div>
                        </div>   
                
              </div>
</div>
                                
                                

         
            
            
            
                             
            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                <div class="tab_center_sec_new">
                   <div class="product-width product category2 popupids10587">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1058" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1058&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1058, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1058"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                    <a onclick="compare(1058)" href="javascript:void(0)" id="compare_1058" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10587">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Printers &amp; Ink</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1058" style="text-transform: capitalize;" class="show_product_detail">Wireless Audio System Multiroo</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1058" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1058" class="show_product_detail">
            <img src="https://admin-api.moretolike.com/uploads/37dff1c23708a0b6d9eda171cab5a2ac.jpg" class="img-responsive" alt="Wireless Audio System Multiroom 360">
              								</a> 
                              </div>
                                        
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$399.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1058"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10587">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>
     
                                <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10587"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                           
                            
                            <div class="hover_share_link popupidradded10587">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">
                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
<!--
                                   <li>
                                       <a onclick="compare(1058)" href="javascript:void(0)" id="compare_1058">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
-->
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friends</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="#">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or direct link to the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                            </div>   
                        </div>             
                </div>  
            </div>
                                
                <div class="col-lg-3 col-md-3 col-sm-3 col-sm-12">
                <div class="tab_rght_lft_sec_new">  
                    <div class="product-width product category2 popupids10576">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1057" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1057&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn  flat on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1057, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1057"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                                                              <a onclick="compare(1057)" href="javascript:void(0)" id="compare_1057" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info" popupids="popupids10576">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Laptops &amp; Computers</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1057" style="text-transform: capitalize;" class="show_product_detail">test product 001</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1057" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1057" class="show_product_detail">
              									<img src="https://admin-api.moretolike.com/uploads/308X330_615154dcdf0b3c05f6f03cd9d14ff72a.jpg" class="img-responsive" alt="test product 001">
              								</a> 
                              </div>
                                            
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$99.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1057"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left" popupids="popupids10576">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>

                                     
                                     
                                                                     <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidradded10576"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                         
                            
                            <div class="hover_share_link popupidradded10576">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                 
                                  <li>
                                                                             
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection"> 
                                              <h4>Collection</h4>
                                              <p>Add this product to a collection</p>
                                        </a>  
                                          
                                                                             
                                  </li>
<!--
                                   <li>
                                       <a onclick="compare(1057)" href="javascript:void(0)" id="compare_1057">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
-->
                                   <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friends</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="#">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or direct link to the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                           </div>
                        </div>
                    <div class="product-width product category2 popupids105618">
                           <div class="col-item">
                              <div class="col-header">
                                 <div class="price-top">
                                    <a href="javascript:void(0);" class="show-tt1" data-toggle="tooltipaa1056" data-html="true" title="<div class=&quot;tooltip_s&quot;><p  productid=&quot;aa1056&quot;  class=&quot;close tooltipClose1&quot;><i class=&quot;fa fa-close&quot;></i></p>
                                       <br>
                                       <span class=&quot;text1&quot;>Add this product to your Store you earn 25 % on each sale.
                                       <br>This product is delivered by:<br></span><span class=&quot;undeline&quot;>Superstore</span> <span class=&quot;ftrt&quot;> <a href=&quot;javascript:void(0)&quot; onclick=&quot;addToCollectionConfirm(1056, 35, 1)&quot;>Click to add..</a></span></div>"> </a>
                                    <h5><a href="javascript:void(0);" class="show-tt1" productid="aa1056"><i class="fa fa-barcode"></i></a> My Store</h5>
                                 </div>
                                 <div class="price-right">
                                    <h5>
                                        <a onclick="compare(1056)" href="javascript:void(0)" id="compare_1056" class="cursor-pointer">
                                          <i class="ec ec-compare"></i> Compare
                                       </a>
                                                                           </h5>
                                 </div>
                              </div>
                              <div class="col-info">
                                 <div class="price-name">
                                    <h5 style="text-transform: capitalize;">Accessories</h5>
                                 </div>
                                 <div class="price-detail">
                                    <h3>
                                       <a href="https://moretolike.com/product/1056" style="text-transform: capitalize;" class="show_product_detail">Smartwatch 2.0 LTE Wifi</a>
                                       <span class="wpb_wl_preview quick1 open-popup-link" data-mfp-src="#wpb_wl_quick_view_1056" data-effect="mfp-zoom-in">
                                       </span>
                                    </h3>
                                 </div>
                              </div>
                              <div class="photo hovereffect">
                                 <span class="wpb_wl_preview quick1 open-popup-link">
                                 </span>
                                <a href="https://moretolike.com/product/1056" class="show_product_detail">
                                  <img src="https://admin-api.moretolike.com/uploads/308X330_d3dfbddddffc46b5526e423a6f633714.jpg" class="img-responsive" alt="Smartwatch 2.0 LTE Wifi">
                                </a> 
                              </div>
                                           
                              <div class="info">
                                 <div class="price-wrapper">
                                    <div class="price">
                                       <h5 class="price-text-color">$499.00</h5>
                                       <del><span class="amount">$0.00</span></del>
                                    </div>
                                    <div class="rating hidden-sm">
                                       <span class="wrapper1">
                                       <a href="javascript:void(0)">
                                       <span class="add-cart-large add-to-cart" id="add-to-like-1056"><img src="https://moretolike.com/assets/images/cart.png" alt=""></span>
                                       </a>
                                       <span class="tooltip">Add To Cart</span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="separator clear-left">
                                                                             <p class="btn-add"> 
                                           <a href="javascript:void(0)" class="hidden-sm" data-toggle="modal" data-target="#exampleModal"> 
                                             <i class="ec ec-favorites"></i> 1 
                                           </a>
                                        </p>

                                     
                                     
                                <p class="btn-details new_cus_mo"> 
                                <span class="wrapper">
                                   <b>Product Menu</b>
                                <a class="hsle_as dess_dot" href="javascript:void(0)" popupid="popupidrvp105618"><img src="https://moretolike.com/assets/images/dot_in_n_grey.png" alt=""></a> 
                                    
                                </span> 
                                </p>
                                 </div>
                              </div>
                         
                            
                            <div class="hover_share_link popupidrvp105618">
                               <div class="can_jash">
                                      <a class="can_im" href="javascript:void(0)"><img src="https://moretolike.com/assets/images/cancel.png" alt=""></a> 
                                </div>
                              <ul class="list-unstyled list_se_dr_sn">
                                 
                                   <li>
                                       <a href="javascript:void(0)" class="sea_pro_model" data-toggle="modal" data-target="#myModalshareable">

                                       <h4>Sharable Product</h4>
                                        <p>Add this product to your own store</p>
                                       </a>
                                  </li>
                                  
                                
                                  <li>
                                                                              
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalCollection" > 
                                            <h4>Collection</h4>
                                            <p>Add this product to a collection</p>
                                        </a> 
                                         
                                                                             
                                  </li>
<!--
                                   <li>
                                       <a onclick="compare(1056)" href="javascript:void(0)" id="compare_1056">
                                    
                                       <h4>Compare</h4>
                                        <p>Add to compear list</p>
                                       </a>
                                  </li>
-->
                                    <li>
                                       <a href="#">
                                
                                       <h4>Social Media &amp; mail</h4>
                                        <p>Send this to your friends</p>
                                       </a>
                                  </li>
                                    <li>
                                       <a href="#">
                                       <h4>Embed/Link Product</h4>
                                        <p>Embed or direct link to the Product</p>
                                       </a>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
            
            
            
                </div>
            </div>
                        </div>
                        @foreach($data['categories'] as $row)
                        <div class="tab-pane fade" id="{{str_slug($row->category_name)}}{{$row->id}}" role="tabpanel" aria-labelledby="{{str_slug($row->category_name)}}{{$row->id}}-tab">
                            {{$row->category_name}}
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---CLOSE NEW SECTION--->
          
          
                    
                    
                 <!---New product--->  
         <section class="panal_trfcvb">
             <div class="container-fluid">
                 <div class="row">
                     
                <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_01.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                               <h1>From $1,990</h1>
                                <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                    

                     
                      <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_02.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                                <h1>Upto $1,990</h1>
                                  <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                     
                     
                       <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_03.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                               <h1>From $1,990</h1>
                                  <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                     
         
                
                <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_01.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                               <h1>From $1,990</h1>
                                <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                    

                     
                      <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_02.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                                <h1>Upto $1,990</h1>
                                  <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                     
                     
                       <div class="col-lg-4 col-md-6">
                   <div class="wrap_new_gri_p">
                       <div class="row">
                         <div class="col-lg-6 col-md-6">
                           <div class="img_grid_uytr">
                             <img class="media-object wp-post-image img-responsive" src="https://moretolike.com/assets/images/demo_cu_03.png"  alt="">
                            </div> 
                          </div>
                          <div class="col-lg-6 col-md-6 p_l_ze">
                            <div class="text_h_vcd">
                               <h1>From $1,990</h1>
                                  <p> Top 100 Electronic Deals</p>
                                <span>Mobile, Camera, Watch</span>
                                <a href="#">Shop now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                          </div>   
                       </div>
                    </div>
                </div>
                     
                 
             </div>    
             </div> 
        </section>         
                    
                    
                    
          
          
      <!-- Classie - class helper functions by @dclassie -->
<!--
      <section class="jase_sl" style="margin-bottom: 40px;">
         <div class="container-fluid">
         <div class="row">
            <div class="col-md-4">
               <div class="row ad-bg">
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc"><img src="{{asset('assets/images/laptop.jpg')}}" alt=""></div>
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc">
                     <h4 class="catchpad"> CATCH BIG DEALS ON THE CAMERAS</h4>
                     <a href="javascript:void(0)">Shop now <i class="fa fa-angle-right btsn"></i></a>  
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="row ad-bg">
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc"><img src="{{asset('assets/images/camras.jpg')}}" alt=""> </div>
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc">
                     <h4 class="catchpad"> TABLETS, SMARTPHONES AND MORE </h4>
                     <a href="javascript:void(0)">Shop now <i class="fa fa-angle-right btsn"></i></a> 
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="row ad-bg">
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc"><img src="{{asset('assets/images/laptop.jpg')}}" alt=""></div>
                  <div class="col-xs-12 col-sm-12 col-lg-6 ad-bgc">
                     <h4 class="catchpad"> CATCH BIG DEALS ON THE CAMERAS</h4>
                     <a href="javascript:void(0)">Shop now <i class="fa fa-angle-right btsn"></i></a>  
                  </div>
               </div>
            </div>
         </div>
          </div>
      </section>
-->
      <!-- categaries second -->
  
          
            
    
 
                    
                    
                    
                    
                    
                    
          
      <section class="end_of_sec_p">
         <div class="container-fluid">
            <div class="ads-block row">
               <div class="col-sm-4 col-xs-12 "> <a href="javascript:void(0)"> <img src="{{asset('assets/images/home-v5-ads-1.jpg')}}" alt=""></a> </div>
               <div class="col-sm-8 col-xs-12 da">
                  <div class="row">
                     <div class="col-sm-6 col-xs-12 patop">
                     <h2 class="title">Fresh Honor 9<br>
                        32GB Unlocked quadcore
                     </h2>
                     <span class="description"><span>4GB RAM</span><span>64GB ROM</span><span>20MP + 12MP Dual Camera</span></span> <br>
                     <span class="price"><span class="prefix">now at</span><span class="value"><sup>$</sup>279</span></span> 
                  </div>
                  <div class="col-sm-6 col-xs-12 pa"> <a href="javascript:void(0)"> <img src="{{asset('assets/images/add-1-2.jpg')}}" alt=""></a></div>
               </div>
                  </div>
            </div>
         </div>
      </section>
          
        
    <!---Feture Product--->    
      
         <section class="main_panle_feature_pro pr_sli_de hide__pro__swa">
      
        
            <div class="container-fluid">
                <div class="row tabmenu-line">
            <div class="col-md-12">
               <h2 class="popular">Featured stores</h2>
                <hr>
            </div>
            </div>
                <br>
                
                
            <div  class="owl-carousel owl-theme desto_pro_f">
                
                <div class="item">
            <div class="f_al_xmj">
              <div class="feature_pro_img" style="background-image: url(https://moretolike.com/assets/img/office-supplies-banner.jpg);">
                  <div class="desktop_feature_pro">
                  <img src="https://moretolike.com/assets/img/fff.png" class="img-responsive" alt="Image">
                    <p>Name</p>  
                  </div>
                  
                  <div class="fo_w_nbg">
                       <span><img src="https://www.moretolike.com/assets/img/menu_icon_img/ezgif.com-gif-maker.png" class="img-responsive" alt="Image"></span>
                    <a><i class="fa fa-plus" aria-hidden="true"></i> Follow</a>
                  </div>
              </div>
                <ul class="list-inline feat_pro_img">
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                  </ul>
                  </div>
                </div>
                
                
                       <div class="item">
            <div class="f_al_xmj">
              <div class="feature_pro_img" style="background-image: url(https://moretolike.com/assets/img/office-supplies-banner.jpg);">
                  <div class="desktop_feature_pro">
                  <img src="https://moretolike.com/assets/img/fff.png" class="img-responsive" alt="Image">
                    <p>Name</p>  
                  </div>
                  
                  <div class="fo_w_nbg">
                      <span><img src="https://www.moretolike.com/assets/img/menu_icon_img/ezgif.com-gif-maker.png" class="img-responsive" alt="Image"></span>
                    <a><i class="fa fa-plus" aria-hidden="true"></i> Follow</a>
                  </div>
              </div>
                <ul class="list-inline feat_pro_img">
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                  </ul>
                  </div>
                </div>
                
                
                       <div class="item">
            <div class="f_al_xmj">
              <div class="feature_pro_img" style="background-image: url(https://moretolike.com/assets/img/office-supplies-banner.jpg);">
                  <div class="desktop_feature_pro">
                  <img src="https://moretolike.com/assets/img/fff.png" class="img-responsive" alt="Image">
                    <p>Name</p>  
                  </div>
                  
                  <div class="fo_w_nbg">
                      <span><img src="https://www.moretolike.com/assets/img/menu_icon_img/ezgif.com-gif-maker.png" class="img-responsive" alt="Image"></span>
                    <a><i class="fa fa-plus" aria-hidden="true"></i> Follow</a>
                  </div>
              </div>
                <ul class="list-inline feat_pro_img">
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/cat-6.jpg" class="img-responsive" alt="Image">
                            <p>Pro Name</p>
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/Accesories-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>    
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                     <li class="list-inline-item">
                        <a href="#">
                          <img src=" https://moretolike.com/assets/img/HomeEnternetiment-330x308.jpg" class="img-responsive" alt="Image">
                          <p>Pro Name</p>          
                        </a>
                      </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <img src="https://moretolike.com/assets/img/AllinOne-330x308.jpg" class="img-responsive" alt="Image">
                         <p>Pro Name</p>      
                        </a>
                      </li>
                             
                  </ul>
                  </div>
                </div>
                
                
                
            </div>
           
                
            
                
                
            </div>
    </section>      
    
      
       <br>    
        
<!--END-->
    </section>      
          
          
          
          
          
@include('frontend/include/mobile_index')
@include('frontend/include/footer')