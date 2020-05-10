@include('single-product-sections/header')
<section>
	
                <div class="container">
	                   <!-- <div class="tab-pane" id="tab-description"> -->
                     <!-- <form role="form" class="form-horizontal"  action="javascript:void(0)" enctype="multipart/form-data" id="customer_reg"> -->
                    <div class="row">
                      <br>

                        @if (session('success'))
                          <b> <div  id="alert" style="text-align:center;color: green"  class="col-md-12">
                              {{ session('success') }}
                          </div></b>
                        @endif

                        @if (session('alert'))
                          <b> <div id="alert" style="text-align:center;color: red"  class="col-md-12">
                              {{ session('alert') }}
                          </div></b>
                        @endif

                     	<div class="col-md-12" style="margin-bottom: 30px; margin-top: 30px;">
                     		<h2 style="text-align: center;">User Registration Form</h2>
                     	</div>
                      <div class="col-md-2"></div>
                     		<div class="col-md-8">
                     			
                     				<form role="form" class="form-horizontal" method="post"  
                             action="user-create" enctype="multipart/form-data">  

                                    <div class="form-group">
                                      {{csrf_field()}}
                                        <label for="f_name" class="col-sm-4 control-label"> First Name <span style="color: red">*</span></label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="First Name" name="f_name" id="f_name"  required/>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       <label for="l_name" class="col-sm-4 control-label"> Last Name</label>
                                          <div class="col-sm-8">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Last Name"  name="l_name" id="l_name" />
                                              </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cutomer_name" class="col-sm-4 control-label"> User Name <span style="color: red">*</span></label>
                                          <div class="col-sm-8">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="User Name"  name="customer_name"  id="customer_name" required />
                                              
                                              </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="password" class="col-sm-4 control-label"> Password <span style="color: red">*</span></label>
                                      <div class="col-sm-8">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <input type="password" class="form-control" placeholder="Password"  name="password" id="password_reg" minlength="4" required/>
                                              </div>
                                            </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="email" class="col-sm-4 control-label">Email <span style="color: red">*</span></label>
                                      <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" placeholder="Email"  name="email" required/>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="contact_no" class="col-sm-4 control-label"> Contact No <span style="color: red">*</span></label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" onkeypress="return isNumberKey(event)" required/>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="dob" class="col-sm-4 control-label"> DOB</label>
                                      <div class="col-sm-8">
                                        <input type="date" class="form-control2" id="dob" placeholder="Date Of Birth" name="dob" />
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="gender" class="col-sm-4 control-label"> Gender <span style="color: red">*</span></label>
                                      <div class="col-sm-8">
                                       <input type="radio" class="infmt"  name="gender" id="gender_male" value="female" required/>  &nbsp;&nbsp;<span>Female</span>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<input class="infmt" type="radio"  name="gender"  id="gender_female" value="male" required/>&nbsp;&nbsp;&nbsp;&nbsp;<span>Male</span>
                                      </div>
                                    </div>
                                
                                    <div class="form-group">
                                      <label for="profile_image" class="col-sm-4 control-label">Profile Image</label>
                                      <div class="col-sm-8">
                                        <input type="file" class="form-control fc2" id="profile_image"  name="profile_image" />
                                        <span style="color: red;font-size: 11px">Upload only .jpeg, .png, .jpg, .svg extension files.</span>
                                      </div>
                                    </div>  
                                    
                                    <div class="row">
                                      <div class="col-sm-12" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="customer_register();"> Register</button>
                                          <button type="reset" class="btn btn-danger btn-sm"> Reset</button>

                                      </div>
                                    </div>
                                    <br>
                            </form>
                     		</div>
                    </div>
                    <!-- </div> -->
                </div>
</section>

@include('layouts/footer')