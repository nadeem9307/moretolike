
@include('frontend/include/header')
</div>
<hr>
<div class="container content mrgtp aqs_mbzv"> 
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
   </div>
     <form class="form-horizontal forget_psw_pan_cl" method="POST" style="border-radius: 5px;">
        
        <div class="row registration new_sa_mv">
           {{csrf_field()}}
            <div class="col-md-12 registerpd">
                <h2 class="user-regiter rg">{{ $expired? 'Reset':'Forgot'}} Password</h2>
                <hr>
                <br>
               
            </div>
        </div>



        @if(!isset($expired))
        <div class="row registerpad">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Email address</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter register email id">
                    </div>
                </div>
            </div>
          
            <div class="col-md-12">
              <a href="javascript:void(0)" class="btn btn-warning" onclick="get_registered_email();">Submit</a>
            </div> 
            
        </div>
        @elseif($expired == true)
        <div class="row registerpad">
            <div class="col-md-4 field-label-responsive">
                <label for="name">New Password</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input id="new_password" name="password" type="password" placeholder="Enter New Password" class="form-control input-md"  value="" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row registerpad">
            <div class="col-md-4 field-label-responsive">
                <label for="name">Re-New Password </label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input id="re-pass" name="re-pass" type="password" placeholder="Enter Re-New Password" class="form-control input-md"   >
                    </div>
                </div>
            </div>         
        </div>
        <input id="customer_email" name="customer_email" type="hidden" class="form-control input-md"  value="{{$email}}" >
        <div class="row registerpad">
            <div class="col-md-4 field-label-responsive"></div>
            <div class="col-md-5 mb-2 mr-sm-2 mb-sm-0">
              <button type="submit" class="btn btn-warning" onclick="reset_password();">Submit</button>
            </div>
        </div>
        <b><span id="unsuccess_reset_pass" style="color: red"></span></b>
        <b><span id="success_reset_pass" style="color: green"></span></b>
        @else
            <p class="form-row"><h3  style="color: red">Your link has been expired.</h3></p>
        @endif
    </form>
</div>
@include('frontend/include/footer')