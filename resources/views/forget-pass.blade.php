        
@include('single-product-sections/header')

  <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-8" class="hentry">

                                <div class="entry-content">
                                    <div class="woocommerce"><br><br>
                                       <!--  <div class="customer-login-form">
                                            <span class="or-text">or</span> -->

                                            <!-- <div class="col2-set" id="customer_login">

                                                <div class="col-1"> -->

                                        


                                                  @if(!isset($expired)) 

                                                    <h2>Forget Password</h2><br><br>

                                                    <form method="post" class="login"> 

                                                        <p class="form-row">
                                                            <label for="username">Email address<span class="required">*</span></label>
                                                            <input type="email" class="input-text" name="email" id="email"  placeholder="Enter register email id">
                                                        </p>

                                                       
                                                        <p class="form-row">
                                                            <input class="button" type="button" value="Submit" name="submit" onclick="get_registered_email();">
                                                        </p>


                                                        <b><span id="success_email" style="color: green"></span></b>
                                                        <span id="error_email" style="color: red"></span>
                                                        <span id="unsuccess_email" style="color: red"></span>

                                                      
                                                    </form> 
                                                    @elseif($expired == true)

                                                     <h2>Reset Password</h2><br><br>

                                                    <form method="post" class="login"> 

                                                      <input id="customer_email" name="customer_email" type="hidden" class="form-control input-md"  value="{{$email}}" >

                                                        <p class="form-row">
                                                            <label for="username">New Password <span class="required" style="color: red">*</span></label>
                                                            <input id="new_password" name="password" type="password" placeholder="Enter New Password" class="form-control input-md"  value="" >
                                                                <span style="color: red" id="error_new_password"></span>
                                                        </p>

                                                        <p class="form-row">
                                                            <label for="username">Re-New Password <span class="required" style="color: red">*</span></label>
                                                            <input id="re-pass" name="re-pass" type="password" placeholder="Enter Re-New Password" class="form-control input-md"   >
                                                            <span style="color: red" id="error_re_new_password"></span>
                                                        </p>

                                                       
                                                        <p class="form-row">
                                                            <input class="button" type="button" value="Update" name="submit" onclick="reset_password();">
                                                        </p>

                                                        <b><span id="unsuccess_reset_pass" style="color: red"></span></b>
                                                        <b><span id="success_reset_pass" style="color: green"></span></b>
                                                    </form> 



                                                    @else

                                                       <p class="form-row"><h3  style="color: red">Your link has been expired.</h3></p>


                                                    @endif




                                               <!--  </div>
                                            </div> -->

                                       <!--  </div> -->
                                    </div>
                                </div>

                            </article>

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .col-full -->
            </div>




@include('layouts/footer')

