@include('frontend/include/header')
   </div>
   
   <hr>
<div class="container content mrgtp"> 
<!--user registration -->
   <div class="row">
    <br>
      @if (session('alert'))
        <b> <div id="alert" style="text-align:center;color: red"  class="col-md-12">
            {{ session('alert') }}
        </div></b>
      @endif
	   @if ($errors->any())
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="alert alert-danger">
				  <ul>
					  @foreach ($errors->all() as $error)
						  <li>{{ $error }}</li>
					  @endforeach
				  </ul>
				</div>
			</div>
			<div class="col-lg-4"></div>
      @endif
   </div>
     <form class="form-horizontal reg_form_panel" role="form" method="POST" action="beta-user-create" enctype="multipart/form-data">
        <div class="row registration">
           {{csrf_field()}}
            <div class="col-md-12 registerpd">
                <h2 class="user-regiter rg">User Registration </h2>
                 <hr>
            </div>
        </div>
		@if(session('success'))
			<div id="alert" style="text-align:center;color: green"  class="col-md-12">
				<b>{{ session('success') }}</b>
			</div>
		@else
        <div class="row registerpad">
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" class="form-control reg_su_cl_m" placeholder="First Name" name="f_name" id="f_name" value="{{ old('f_name') }}" required autofocus />
                    </div>
                </div>
            </div>
         
      
    
            <div class="col-md-6">
                <div class="form-group">
                      <label for="name">Last Name</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" class="form-control reg_su_cl_m" placeholder="Last Name" value="{{ old('l_name') }}" name="l_name" id="l_name" />
                    </div>
                </div>
            </div>
      
       
         
            <div class="col-md-6">
                <div class="form-group">
                      <label for="name">User Name</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" class="form-control reg_su_cl_m" placeholder="User Name"  name="customer_name" value="{{ old('customer_name') }}" id="customer_name" required />
                    </div>
                </div>
            </div>
      
     
         
            <div class="col-md-6">
                <div class="form-group">
                     <label for="email">Contact No</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" class="form-control reg_su_cl_m" id="contact_no" placeholder="Contact No" name="contact_no" onkeypress="return isNumberKey(event)" value="{{ old('contact_no') }}" required />
                    </div>
                </div>
            </div>
 
       
           
            <div class="col-md-6">
                <div class="form-group">
                     <label for="email">E-Mail Address</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="email" class="form-control reg_su_cl_m" id="email" placeholder="Email" value="{{ old('email') }}" name="email" required/>
                    </div>
                </div>
            </div>
       
       
         
            <div class="col-md-6">
                <div class="form-group has-danger">
                     <label for="password">Gender</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <input type="radio" class="infmt"  name="gender" id="gender_male" value="female" required/>&nbsp;&nbsp;&nbsp; Male&nbsp;&nbsp;&nbsp;<br>
                      <input class="infmt" type="radio"  name="gender"  id="gender_female" value="male" required/>&nbsp;&nbsp;&nbsp; Female<br>
					  <input class="infmt" type="radio"  name="gender"  id="gender_other" value="other" required/>&nbsp;&nbsp;&nbsp; Other<br>
                    </div>
                </div>
            </div>
       
      
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">D.O.B.</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="date" class="form-control2 reg_su_cl_m" id="dob" placeholder="Date Of Birth" value="{{ old('dob') }}" name="dob" />
                    </div>
                </div>
            </div>
        
		
         
            <div class="col-md-6">
                <div class="form-group">
                      <label for="description">Profile Description </label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <textarea name="description" id="description" class="form-control" rows="6">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>
      
       
       
            <div class="col-md-6">
                <div class="form-group">
                      <label for="profile_image">Profile Image</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                       <input type="file" class="registert reg_su_cl_m" id="profile_image" name="profile_image" style="    margin-left: 0px;" />
                    </div>
					<p>width:140px height:140px</p>
                </div>
            </div>
   
		
            <div class="col-md-6">
                <div class="form-group">
                     <label for="profile_banner">Profile Banner</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                       <input type="file" class="registert reg_su_cl_m" id="profile_banner" name="profile_banner" />
                    </div>
					<p>width:1110px height:120px</p>
                </div>
            </div>
       
       
           
            <div class="col-md-5">
                <div class="form-group">
                      <label for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="password" class="form-control reg_su_cl_m" placeholder="Password" name="password" id="password_reg" minlength="4" required/>
                    </div>
                </div>
            </div>
        
      
       
            <div class="col-md-6">
                <div class="reg_btn_cl_nxz">
              <button type="submit" class="btn btn-warning bu_asw_o" onclick="customer_register();">Register</button>   
                <button type="reset" class="btn btn-danger bu_asw_t"> Reset</button>
                </div>    
            </div>
            
         </div>
		@endif
    </form>
<!---user registration-->  
</div>
      @include('frontend/include/footer')