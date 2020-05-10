@include('frontend/include/header')
</div>
<style type="text/css">
    .account_page_panel input[type="search"] {
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 34px;
    }
    .account_page_panel select {
    border: 1px solid #ccc;
    padding: 5px;
    /*
    margin-left: 10px;
    margin-right: 10px;
    */
    border-radius: 6px;
    }
    .account_page_panel .table-responsive{padding: 15px;}
    /*.account_page_panel .form-control{width: 90%; margin-left: 10px;}*/
    .account_page_panel label {
    display: inline-block;
    margin-bottom: .5rem;
    }
    .imgfc{height: 45px;
    background-color: #ece9e9;}
    input#dob {
    }
    .registert {
    width: 100%;
    background-color: #efecec;
    padding: 5px 0;}
    .border-full {
    border: 2px solid #dee2e6;
    border-radius: 2px;
    padding: 8px;
    }
    ul#myTab {
    
    border-radius: 3px;
    }
    .my_ac_re a{    background: #ffffff;}
    input#dob {
    border: 1px solid #dee2e6;
    padding: 6px;
    border-radius: 3px;
    /*    margin-left: 10px;*/
    }      
    .pa_des_on .user-profile{border-bottom: 1px solid transparent;
    padding-bottom: 0;
    font-size: 20px;
    padding-top: 0;}
    #manage .form-group strong{    font-size: 0.9em;
    color: #7d7d7d;}
    ul.top-link {
    margin-bottom: 20px;
    }
    .error2{
        color: red;
    }
    .success{
        color: green;
        
    }
   
</style>
<hr>
<div class="bg_ac_account_p">
    <div class="container content mrgtp account_page_panel">
        <!--my account -->
        <div class="container mrgin-botom">
            <div class="row">
                <ul class="top-link">
                    <li><a href="">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li class="my_ac_re"><a href="javascript:void(0)" class="top-link-btn">My Account</a></li>
                </ul>
            </div>
            <div class="row mrgtp_m border-full_m">
                <!--
                    <div class="col-lg-12">
                      <div class="row">
                            <div class="col-lg-12">
                            <h2 class="user-profile">Profile Information</h2>
                            </div>
                        </div>
                    </div>
                    
                    -->
                <div class="profile_slide_more">
                    <p class="cli_ac_pro_menu"><img src="https://moretolike.com/assets/images/my_ac.png" class="img-responsive" alt="Image"> 
                        Click More Info
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 pa_des_on slide_menu_account">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item board profile_info_ac_pnv ">
                            <a href="javascript:void(0)" class="nav-link board" style="cursor: inherit;"> 
                            <img src="{{asset('uploads/'.$data['user']->profile_image)}}" alt="" /> 
                            <span>{{$data['user']->f_name.' '.$data['user']->l_name}}</span>
                            </a>
                            <div class="close_acc_slide">
                                <p>×</p>
                            </div>
                        </li>
                        <hr>
                        <li class="nav-item board caret ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#contset">
                                <span>
                                <img src="{{asset('assets/images/my_ac.png')}}" class="img-responsive" alt="Image">
                                </span>   
                                <h5 class="tab-heading">ACCOUNT SETTING</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="contset">
                            <li class="nav-item board pro_fasx_ac">
                                <a class="nav-link board active" data-toggle="tab" href="#profile" role="tab" aria-controls="home">Profile Information</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#change" role="tab" aria-controls="profile">Change Password</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#manage" role="tab" aria-controls="messages">Manage Address</a>
                            </li>
                        </div>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#mgmt_staff">
                                <span>
                                <img src="{{asset('assets/images/s_man.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">STAFF MANAGEMENT</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="mgmt_staff">
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#member" role="tab" aria-controls="member">Staff</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#vendor_setting">
                                <span>
                                <img src="{{asset('assets/images/vendor.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">VENDOR SETTING</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="vendor_setting">
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#vendor" role="tab" aria-controls="settings">Upgrade to Vendor</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Upgrade for SuperVendor</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#my_shop">
                                <span>
                                <img src="{{asset('assets/images/my_shop.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">MY SHOP</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="my_shop">
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#shopping" role="tab" aria-controls="settings">My Shopping</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#my_blog">
                                <span>
                                <img src="{{asset('assets/images/blogging.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">MY BLOG</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="my_blog">
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#blog" role="tab" aria-controls="settings">Blog</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#social" role="tab" aria-controls="settings">Social Account</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#acc_support">
                                <span>
                                <img src="{{asset('assets/images/support_co.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">SUPPORT</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="acc_support">
                            <li class="nav-item board">
                                <a class="nav-link board close_cl_h" data-toggle="tab" href="#support" role="tab" aria-controls="settings">Support</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#acc_collection">
                                <span>
                                <img src="{{asset('assets/images/menu.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">MY COLLECTION</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="acc_collection">
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#categaries" role="tab" aria-controls="settings">My Collection Categaries</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#collection" role="tab" aria-controls="settings">My Collection</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#my_payment">
                                <span>
                                <img src="{{asset('assets/images/hand.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">MY PAYMENT</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="my_payment">
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#payment-history" role="tab" aria-controls="settings">Payment History</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#active-cards" role="tab" aria-controls="settings">Active Cards</a>
                            </li>
                        </div>
                        <hr>
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board caret1" data-toggle="collapse" data-target="#acc_review">
                                <span>
                                <img src="{{asset('assets/images/review_ac.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">REVIEW</h5>
                            </a>
                        </li>
                        <hr>
                        <div class="w100p collapse removeActive" id="acc_review">
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#review" role="tab" aria-controls="settings">Product Review</a>
                            </li>
                            <li class="nav-item board">
                                <a class="nav-link board" data-toggle="tab" href="#store" role="tab" aria-controls="settings">Store Review</a>
                            </li>
                        </div>
                        <!-- <li class="nav-item board">
                            <a class="nav-link board" data-toggle="tab" href="#whishlist" role="tab" aria-controls="settings">Whishlist</a>
                            </li> -->
                        <li class="nav-item board ck_add_cl">
                            <a href="#" class="nav-link board">
                                <span>
                                <img src="{{asset('assets/images/logout.png')}}" class="img-responsive" alt="Image">
                                </span> 
                                <h5 class="tab-heading">LOGOUT</h5>
                            </a>
                        </li>
                        <hr>
                    </ul>
                </div>
                <!--navigation-->
                <div class="col-lg-9 col-md-8 pa_des_on">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            @if (session('alert'))
                            <b>
                                <div id="alert" style="text-align:center;color: red"  class="col-lg-12">
                                    {{ session('alert') }}
                                </div>
                            </b>
                            @endif
                            @if(session('err_msg'))
                            <b>
                                <div id="alert" style="text-align:center;color: red"  class="col-lg-12">
                                    {{ session('err_msg') }}
                                </div>
                            </b>
                            @endif
                            @if(session('success'))
                            <div id="alert" style="text-align:center;color: green"  class="col-lg-12">
                                <b>{{ session('success') }}</b>
                            </div>
                            @endif
                            @if($errors->any())
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
                            <form class="form-horizontal usrfrm-right form_custmize_cl" method="POST" action="/edit-profile" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12 man_ad_yt">
                                        <h2 class="user-profile">Profile Information</h2>
                                        <hr>
                                    </div>
                                </div>
                                <input type="hidden" name="profile_image_old" value="{{$data['user']->profile_image}}" />
                                <input type="hidden" name="profile_banner_old" value="{{$data['user']->profile_banner}}" />
                                <div class="row mrgtp1s" >
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="f_name">First Name</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" value="{{$data['user']->f_name}}" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="l_name">Last Name</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name" value="{{$data['user']->l_name}}" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="customer_name">User Name</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="User Name" value="{{$data['user']->customer_name}}" readonly="" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="contact_no">Contact No</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="+91-9876543210" value="{{$data['user']->contact_no}}" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="email">E-Mail Address</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" value="{{$data['user']->email}}" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive" style="padding-top: 0px;">
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group has-danger">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="radio" name="gender" class="rediof" value="male" {{ $data['user']->gender=='male'?'checked':''}}>&nbsp;&nbsp;&nbsp; Male&nbsp;&nbsp;&nbsp;<br>
                                                <input type="radio" name="gender" class="rediof" value="female" {{ $data['user']->gender=='female'?'checked':''}}>&nbsp;&nbsp;&nbsp; Female &nbsp;&nbsp;&nbsp;<br>  <input type="radio" name="gender" class="rediof" value="other" {{ $data['user']->gender=='other'?'checked':''}}>&nbsp;&nbsp;&nbsp; Other<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="dob">D.O.B.</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="date" value="{{$data['user']->dob}}" class="" id="dob" placeholder="Date Of Birth" name="dob">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="description">Profile Description </label>
                                    </div>
                                    <div class="col-lg-9" >
                                        <textarea class="form-control " id="description" name="description" rows="3" >{{$data['user']->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="profile_image">Profile Image </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0 poly_isaw">
                                                <!--img src="{{asset('uploads/'.$data['user']->profile_image)}}" class="profile_image_preview" -->
                                                <input type="file" class="registert" id="profile_image" name="profile_image" onchange="readURL(this);">
                                                &nbsp;&nbsp;&nbsp; <span>width:140px height:140px</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="profile_image">Profile Banner </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0 poly_isaw">
                                                <!--img src="{{asset('uploads/'.$data['user']->profile_banner)}}" class="profile_banner_preview" -->
                                                <input type="file" class="registert" id="profile_banner" name="profile_banner" onchange="readURL(this);">
                                                &nbsp;&nbsp;&nbsp; <span>width:1110px height:120px</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-4 field-label-responsive">
                                       <label for="password">Password</label>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="form-group">
                                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                             <input type="password" autocomplete="autocomplete" name="password" class="form-control" id="password" placeholder="Password" required="">
                                          </div>
                                       </div>
                                    </div>
                                    </div> -->
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive"></div>
                                    <div class="col-lg-9">
                                        <div class="up_btn_acc">
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="change" role="tabpanel">
                            <form class="form-horizontal usrfrm-right form_custmize_cl" method="POST" onsubmit="return change_password(event)">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="user-profile">Change Password </h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="error2" id="passwordErr"></div>
                                    <div class="error2" id="passwordErr2"></div>
                                    <div class="success" id="successfullychange"></div>
                                <div class="row mrgtp1s" >
                                    
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="old_password">Old Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="password" autocomplete="off" name="old_password" class="form-control" id="old_password" placeholder="Old Password" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="new_password">New Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="password" autocomplete="autocomplete" name="new_password" class="form-control" id="new_password" placeholder="New Password" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive">
                                        <label for="re_new_password">Re-New Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="password" autocomplete="autocomplete" name="re_new_password" class="form-control" id="re_new_password" placeholder="Re-New Password" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 field-label-responsive"></div>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--password-->
                        <div class="tab-pane" id="manage" role="tabpanel">
                            <form class="form-horizontal usrfrm-right" role="form" method="POST"
                            onsubmit="return update_address(event)">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div id="successfullyupdate" style="text-align:center;color: green ;padding: 18px; font-size: 20px" class="col-lg-12">
                                
                            </div>
                                     <div class="success" ></div>
                                    <div class="col-lg-12 man_ad_yt">
                                        <h2 class="user-profile">Manage Addresses</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" style="">
                                        <h5 class="manageac">Billing Address</h5>
                                       
                                        <div class="form-group">
                                            <label for="billing_name"><strong>Name </strong></label>
                                            <input type="text" class="form-control" id="billing_name" name="billing_name" placeholder="Name" value="{{$data['user']->billing_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_contact"><strong>Contact No</strong></label>
                                            <input type="text" class="form-control" id="billing_contact" name="billing_contact" placeholder="1234567890" value="{{$data['user']->billing_contact}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_zipcode"><strong>Pin Code</strong></label>
                                            <input type="text" class="form-control" id="billing_zipcode" placeholder="Pin Code" name="billing_zipcode" value="{{$data['user']->billing_zipcode}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_locality"><strong>Locality</strong></label>
                                            <input type="text" class="form-control" id="billing_locality" placeholder="Locality" name="billing_locality" value="{{$data['user']->billing_locality}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_address1"><strong>Address </strong></label>
                                            <textarea class="form-control " id="billing_address1" name="billing_address1" rows="3" placeholder="address">{{$data['user']->billing_address1}}</textarea>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="billing_country"><strong>Country</strong></label>
                                            <select name="billing_country" class="form-control country" id="billing_country" name="billing_country" target='billing_state'>
                                                <option value="volvo">Country</option>
                                                @foreach($data['countries'] as $key=>$country)
                                                <option value="{{ $country->id}}" {{$data['user']->billing_country==$country->id?'selected':''}}>{{ $country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_state"><strong>State</strong></label>
                                            <select name="billing_state" class="form-control state" id="billing_state" target="billing_city">
                                                <option value="">Select State</option>
                                                @foreach($data['bstates'] as $key=>$state)
                                                <option value="{{ $state->id}}" {{$data['user']->billing_state==$state->id?'selected':''}}>{{ $state->state_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="billing_city"><strong>City</strong></label>
                                            <select name="billing_city" class="form-control" id="billing_city">
                                                <option value="">Select City</option>
                                                @foreach($data['bcities'] as $key=>$city)
                                                <option value="{{ $city->id}}" {{$data['user']->billing_city==$city->id?'selected':''}}>{{ $city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Manage Addresses-->
                                    <div class="col-md-6">
                                        <h5 class="manageac">Shipping Address</h5>
                                        <div class="form-group">
                                            <label for="shipping_name"><strong>Name </strong></label>
                                            <input type="text" class="form-control" id="shipping_name" name="shipping_name" placeholder="Name" value="{{$data['user']->shipping_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_contact"><strong>Contact No</strong></label>
                                            <input type="text" class="form-control" id="shipping_contact" name="shipping_contact" placeholder="1234567890" value="{{$data['user']->shipping_contact}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_zipcode"><strong>Pin Code</strong></label>
                                            <input type="text" class="form-control" id="shipping_zipcode" placeholder="Pin Code" name="shipping_zipcode" value="{{$data['user']->shipping_zipcode}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_locality"><strong>Locality</strong></label>
                                            <input type="text" class="form-control" id="shipping_locality" placeholder="Locality" name="shipping_locality" value="{{$data['user']->shipping_locality}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_address1"><strong>Address </strong></label>
                                            <textarea class="form-control " id="shipping_address1" name="shipping_address1" rows="3" placeholder="address">{{$data['user']->shipping_address1}}</textarea>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="shipping_country"><strong>Country</strong></label>
                                            <select name="shipping_country" class="form-control country" id="shipping_country" target="shipping_state">
                                                <option value="volvo">Country</option>
                                                @foreach($data['countries'] as $key=>$country)
                                                <option value="{{ $country->id}}" {{$data['user']->shipping_country==$country->id?'selected':''}}>{{ $country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_state"><strong>State</strong></label>
                                            <select name="shipping_state" class="form-control state" id="shipping_state" target="shipping_city">
                                                <option value="">Select State</option>
                                                @foreach($data['sstates'] as $key=>$state)
                                                <option value="{{ $state->id}}" {{$data['user']->shipping_state==$state->id?'selected':''}}>{{ $state->state_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="shipping_city"><strong>City</strong></label>
                                            <select name="shipping_city" id="shipping_city" class="form-control">
                                                <option value="">Select City</option>
                                                @foreach($data['scities'] as $key=>$city)
                                                <option value="{{ $city->id}}" {{$data['user']->shipping_city==$city->id?'selected':''}}>{{ $city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Billing Address-->
                                </div>
                                <div class="row">
                                    <!--                              <div class="col-lg-4 field-label-responsive"></div>-->
                                    <div class="col-lg-12 mb-2 mr-sm-2 mb-sm-0 text-center">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                                <div class="row address_div">
                                    <div class="col-lg-4">
                                        <div>
                                            <h5> Billing Address</h5>
                                        </div>
                                        <br>
                                        <div>{{$data['user']->billing_name}} {{$data['user']->billing_contact}} </div>
                                        <div>
                                            {{$data['user']->billing_locality}}
                                            {{$data['user']->billing_address1}}
                                            {{$data['b_state']->state_name}}
                                            {{$data['b_city']->name}}
                                            {{$data['b_country']->country_name}}
                                            {{$data['user']->billing_zipcode}} 
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <h5> Shipping Address</h5>
                                        </div>
                                        <br>
                                        <div>{{$data['user']->shipping_name}} {{$data['user']->shipping_contact}} </div>
                                        <div>
                                            {{$data['user']->shipping_locality}}
                                            {{$data['user']->shipping_address1}}
                                            {{$data['s_state']->state_name}}
                                            {{$data['s_city']->name}}
                                            {{$data['s_country']->country_name}}
                                            {{$data['user']->shipping_zipcode}} 
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--manage address-->
                        <div class="tab-pane" id="vendor" role="tabpanel">
                            <form class="form-horizontal usrfrm-right" role="form" method="POST" action="/upgrade-vendor" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="old_store_logo" value="{{$data['vendor']->store_logo}}" />
                                <input type="hidden" name="old_store_banner" value="{{$data['vendor']->store_banner}}" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="user-profile">Upgrade Profile For Vendor</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row mrgtp" style="">
                                    <!-- <h6 style="padding-left: 40px;">Link To Admin</h6> -->
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="store_name">Store Name *</label>
                                        <input type="text" class="form-control " id="store_name" name="store_name" value="{{$data['vendor']->store_name}}" placeholder="Store Name" required />
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="store_url">Store URL </label>
                                        <input type="text" class="form-control " id="store_url" value="{{url('/store')}}/{{$data['vendor']->store_url}}" name="store_url" readonly >
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="contact_no">Contact Number</label>
                                        <input type="text" class="form-control " id="contact_no" value="{{$data['vendor']->contact_no}}" name="contact_no" >
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="address1">Address  1 *</label>
                                        <input type="text" class="form-control " id="address1" value="{{$data['vendor']->address1}}" name="address1" placeholder="Address  1">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="address2">Address  2 *  </label>
                                        <input type="text" class="form-control " value="{{$data['vendor']->address2}}" id="address2" name="address2" placeholder="Address  2">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="vendor_country">Country * </label>
                                        <select name="country" class="form-control country" id="vendor_country" target="vendor_state">
                                            <option value="">Country</option>
                                            @foreach($data['countries'] as $key=>$country)
                                            <option value="{{ $country->id}}" 
                                            {{ $data['vendor']->country==$country->id ? 'selected':''}} >{{ $country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="vendor_state">State *</label>
                                        <select name="state" class="form-control state" id="vendor_state" target="vendor_city">
                                            <option value="">Select State</option>
                                            @foreach($data['v_states'] as $key=>$v_state)
                                            <option value="{{ $v_state->id}}" {{$data['vendor']->state==$v_state->id?'selected':''}}>{{ $v_state->state_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="vendor_city">City *</label>
                                        <select name="city" class="form-control" id="vendor_city">
                                            <option value="">Select City</option>
                                            @foreach($data['v_cities'] as $key=>$v_city)
                                            <option value="{{ $v_city->id}}" {{$data['vendor']->city==$v_city->id?'selected':''}}>{{ $v_city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="zip_code">Zip Code *</label>
                                        <input type="text" class="form-control " id="zip_code" value="{{$data['vendor']->zip_code}}" name="zip_code" placeholder="Zip Code">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="facebook">Facebook  </label>
                                        <input type="text" class="form-control " id="facebook" value="{{$data['vendor']->facebook}}" name="facebook" placeholder="Facebook">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="youtube">Youtube  </label>
                                        <input type="text" class="form-control " value="{{$data['vendor']->youtube}}" id="youtube" name="youtube" placeholder="Youtube">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="instagram">Instagram </label>
                                        <input type="text" class="form-control " id="instagram" value="{{$data['vendor']->instagram}}" name="instagram" placeholder="Instagram">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="store_banner">Store Banner * width:1110px  height:250px </label>
                                        <input type="file" class="" id="store_banner" name="store_banner" style="width: 90%;">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="store_logo">Store Logo *  width:220px  height:180px </label>
                                        <input type="file" class="" id="store_logo" name="store_logo" style="width: 90%;">
                                    </div>
                                    <div class="form-group col-lg-12 col-sm-12 aswc_d_xz">
                                        <button type="submit" class="btn btn-warning">Upgrade Account</button>  
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--password-->
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <form class="form-horizontal usrfrm-right" role="form" method="POST" action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="user-profile">Upgrade Profile For Super Vendor</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row mrgtp" >
                                    <div class="col-lg-12">
                                        <h6 class="text-center"> Connect your store to your own domain name with personal branding</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 field-label-responsive yuo_dom">
                                        <label for="name">Your Domain</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="www.example.com" required="" autofocus="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 field-label-responsive"></div>
                                    <div class="col-lg-5 mb-2 mr-sm-2 mb-sm-0">
                                        <button type="submit" class="btn btn-warning">Register</button> <button type="submit" class="btn btn-danger"> Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- member -->
                        <div class="tab-pane" id="member" role="tabpanel">
                            <!-- <form class="form-horizontal usrfrm-right" role="form" method="POST" action=""> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Staff</h2>
                                    <hr>
                                    <br>
                                    <a href="javascript:void(0)" class="btn btn-warning" data-toggle="modal" data-target="#add-member">Add New Staff</a>
                                    <div id="add-member" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header aqn_w_bzv">
                                                    <h4 class="modal-title">Add New Staff</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" class="form-horizontal" method="post"  action="{{ action('CustomerController@addStaff') }}" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                            <label for="f_name" class="control-label"> First Name <span style="color:red;">*</span></label>
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="text" class="form-control" placeholder="First Name" name="f_name"  value="{{$customer_data->f_name}}" required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="l_name" class=" control-label"> Last Name</label>
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <input type="text" class="form-control" placeholder="Last Name"  name="l_name"  value="{{$customer_data->l_name}}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mobile" class=" control-label"> Email <span style="color:red;">*</span></label>
                                                            <div class="">
                                                                <input type="email" class="form-control" id="add-member-email" placeholder="Email"  name="email" value="{{$customer_data->email}}" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mobile" class=" control-label"> Contact No <span style="color:red;">*</span></label>
                                                            <div class="">
                                                                <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" value="{{$customer_data->contact_no}}" onkeypress="return return isNumberKey(event)" required/>
                                                                <span id="errmsg" style="color:red"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class=""> </div>
                                                            <div class="col-sm-6 sam_paqxz">
                                                                <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                                                                <button type="reset" class="btn btn-default btn-sm can_poma"> Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive" >
                                    <table class="table ">
                                        <thead style="text-align: center;">
                                            <tr class="rav_se_qaz">
                                                <th>Sr No </th>
                                                <!-- <th>User Name</th> -->
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Registered Date</th>
                                                <!-- <th>Role</th>
                                                    <th>Status</th> -->
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                            <?php 
                                                $i = 1;
                                                ?>
                                            @foreach($data['member'] as $row)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <!-- for user details -->
                                                <!-- <td><a href="javascript:void(0)" data-toggle="modal" data-target="#detail-member-{{$row->id}}">{{$row->user_name}}</a>
                                                    <div id="detail-member-{{$row->id}}" class="modal fade" role="dialog">
                                                         <div class="modal-dialog">
                                                           
                                                           <div class="modal-content">
                                                             <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">{{$row->f_name}}`s Details</h4>
                                                             </div>
                                                             <div class="modal-body">
                                                                <table class="table table-responsive">
                                                                   <tr>
                                                                      <td colspan="2">
                                                                         <img src="{{getenv('APP_URL')}}/uploads/{{$row->profile_image}}">
                                                                      </td>
                                                                   </tr>
                                                                   <tr>
                                                                      <td><b>User Name</b></td>
                                                                      <td>{{$row->user_name}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                      <td><b>Name</b></td>
                                                                      <td>{{$row->f_name.' '.$row->l_name}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                      <td><b>Email</b></td>
                                                                      <td>{{$row->email}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                      <td><b>Contact No</b></td>
                                                                      <td>{{$row->contact_no}}</td>
                                                                   </tr>
                                                                </table>
                                                             </div>
                                                             <div class="modal-footer">
                                                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                             </div>
                                                           </div>
                                                         </div>
                                                       </div>
                                                    </td> -->
                                                <!-- for user details -->  
                                                <td><a href="javascript:void(0)">{{$row->f_name.' '.$row->l_name}}</a></td>
                                                <td><a href="mailto:{{$row->email}}">{{$row->email}}</a></td>
                                                <td><a href="cell:{{$row->contact_no}}">{{$row->contact_no}}</a></td>
                                                <td><a href="cell:{{$row->contact_no}}">{{$row->created_date}}</a></td>
                                                <!-- <td>
                                                    <select class="form-control" name="user_role" readonly>
                                                       <option value="0">Select Role</option>
                                                          @foreach($data['user_role'] as $row)
                                                             <option <?= $row->role == $row->id ? 'selected = "selected"' : '' ?> value="{{$row->id}}">{{$row->group_name}}</option>
                                                          @endforeach
                                                    </select>
                                                    </td> -->
                                                <!-- edit user -->
                                                <!-- <td>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-member-{{$row->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                       <div id="edit-member-{{$row->id}}" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                           
                                                           <div class="modal-content">
                                                             <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Update{{$row->f_name}}'s Profile</h4>
                                                             </div>
                                                             <div class="modal-body" style="text-align: left">
                                                                <form role="form" class="form-horizontal" method="post"  action="/update-member" enctype="multipart/form-data">
                                                                    
                                                                    
                                                                    
                                                                  <div class="form-group">
                                                                       <div class="row">
                                                                        <div class="col-lg-12">
                                                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                                    <label for="f_name" class="control-label"> First Name <span style="color:red;">*</span></label>
                                                                    <input type="hidden" name="update_user_id" value="{{$row->id}}">
                                                                    <div class="">
                                                                     
                                                                          <input type="text" class="form-control" placeholder="First Name" name="f_name"  value="{{$row->f_name}}" required/>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                  <div class="form-group">
                                                                    <label for="l_name" class=" control-label"> Last Name</label>
                                                                    <div class="">
                                                                      <div class="row">
                                                                        <div class="col-lg-12">
                                                                          <input type="text" class="form-control" placeholder="Last Name"  name="l_name"  value="{{$row->l_name}}"/>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                  <div class="form-group">
                                                                    <label for="customer_name" class=" control-label"> User Name <span style="color:red;">*</span></label>
                                                                    <div class="">
                                                                      <div class="row">
                                                                        <div class="col-lg-12">
                                                                          <input type="text" class="form-control" readonly="readonly" value="{{$row->user_name}}" required/>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                  <div class="form-group">
                                                                    <label for="mobile" class=" control-label"> Email <span style="color:red;">*</span></label>
                                                                    <div class="">
                                                                      <input type="email" class="form-control"  value="{{$row->email}}" readonly="readonly" required/>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                  <div class="form-group">
                                                                    <label for="mobile" class=" control-label"> Contact No <span style="color:red;">*</span></label>
                                                                    <div class="">
                                                                      <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" value="{{$row->contact_no}}" onkeypress="return return isNumberKey(event)" required/>
                                                                       <span id="errmsg" style="color:red"></span>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                  <div class="form-group diff_cl_h_sel">
                                                                    <label for="role" class="control-label"> User Role <span style="color:red;">*</span></label>
                                                                    <div class="">
                                                                      <select class="form-control" name="user_role">
                                                                         <option value="0">Select Role</option>
                                                                         @foreach($data['user_role'] as $row)
                                                                            <option <?= $row->role == $row->id ? 'selected = "selected"' : '' ?> value="{{$row->id}}">{{$row->group_name}}</option>
                                                                         @endforeach
                                                                      </select>
                                                                      <span id="errmsg" style="color:red"></span>
                                                                    </div>
                                                                  </div>
                                                                    
                                                                   <div class="form-group ma_ba_cl_aq"> 
                                                                    <label for="profile_image" class=" control-label"> Profile Image</label>
                                                                    <div class="">
                                                                      <img src="{{getenv('APP_URL')}}/uploads/{{$row->profile_image}}" style="height: 100px; width: 150px;">
                                                                      <input type="file" class="form-control climg" id="profile_image" name="profile_image" value=""/>
                                                                    </div>
                                                                  </div> 
                                                                    
                                                                  <div class="row">
                                                                    <div class=""> </div>
                                                                    <div class="col-sm-6 sam_ewaq">
                                                                      <button type="submit" class="btn btn-primary btn-sm color_th_f"> Update Staff</button>
                                                                      <button type="reset" class="btn btn-default btn-sm cance_btn_awq"> Cancel</button>
                                                                    </div>
                                                                  </div>
                                                                    
                                                              </form>
                                                             </div>
                                                             <div class="modal-footer">
                                                               <button type="button" class="btn btn-default bacaew" data-dismiss="modal">Close</button>
                                                             </div>
                                                           </div>
                                                         </div>
                                                       </div>
                                                    </td> -->
                                                <!-- edit user -->
                                            </tr>
                                            <?php 
                                                $i++;
                                                ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="settingss" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Wishlist</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mrgtp" >
                                <div class="col-lg-12">
                                    <h6 style="padding-left: 40px;"> There is no data.</h6>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="shopping" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Order</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive" >
                                    <table class="table table-formated">
                                        <thead style="">
                                            <tr class="name_ihav_p">
                                                <th>Order ID</th>
                                                <th>Product</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['order_list'] as $order_list)
                                            <?php $attributes = json_decode($order_list->product_attributes); ?>
                                            <tr>
                                                <td><a href="/order-details/{{ $order_list->order_no}}">{{ $order_list->order_no}}</a></td>
                                                <td><a href=""><img src="{{getenv('URL')}}{{$attributes->img}}" alt="" style="width: 50px;" /></a></td>
                                                <td><a href="product-details/{{$order_list->slug}}">{{$order_list->product_name}}</a></td>
                                                <td>${{money_format('%i', $order_list->product_price)}}</td>
                                                <?php  $deliver_date =  date('D d F, Y', strtotime($order_list->deliver_date)) ;?>
                                                <td><span class="amount">Delivered on {{$deliver_date}} </span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="blog" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Blog</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="">
                                <section class="section pair">
                                    <div class="wrap">
                                        @if(isset($data['instagram_media']) && !empty($data['instagram_media']))
                                        <ul class="box-container three-cols">
                                            @foreach($data['instagram_media'] as $key => $instagram)
                                            <li class="box">
                                                <a href="{{$instagram->images->standard_resolution->url}}" class="glightbox2" data-glightbox="title: Instagram Profile Desciption; descPosition: right;">
                                                    <img src="{{$instagram->images->thumbnail->url}}" alt="image">
                                                    <p> <b>@</b>{{$instagram->user->username}} <br> <i class="fa fa-heart"></i> {{$instagram->likes->count}}  <i class="fa fa-comments-o"></i>0 </p>
                                                    <div class="glightbox-desc">
                                                        <hr>
                                                        @if(isset($instagram->caption) && !empty($instagram->caption))
                                                        <p>{{$instagram->caption->text}}</p>
                                                        @endif
                                                        <p><i class="fa fa-heart"></i> {{$instagram->likes->count}}  <i class="fa fa-comments-o"></i>0 </p>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <a class="btn btn-warning space1" href="{{isset($data['instagram_url']) ? $data['instagram_url'] : '#'}}"><span class="fa fa-instagram"></span> Sign in with Instagram
                                        </a>
                                        @endif
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane" id="social" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Manage Social Account</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mrgtp" >
                                <div class="col-lg-12">
                                    <h6 class="text-center">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal-button">
                                        Add a Social Account
                                        </button>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="support" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Support Requests</h2>
                                    <hr>
                                </div>
                            </div>
                            <!---Tab--->
                            <ul class="nav nav-pills cus_nav_pil_acc" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#home_ac">All Ticket <span>(5)</span><b>|</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#menu1_ac">Open Tickets <span>(3)</span><b>|</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#menu2_ac">Close Tickets <span>(2)</span></a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content ccus_sawa">
                                <div id="home_ac" class="container tab-pane active">
                                    <br>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="mast_sl_acz">
                                                        <th class="wa_pmczxs">Sr No</th>
                                                        <th>Order ID </th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['support_list'] as $support_item)
                                                    <tr>
                                                        <td>{{$support_item->id}}</td>
                                                        <td>{{$support_item->order_id}}</td>
                                                        <td>{{$support_item->title}}</td>
                                                        <td>{{substr($support_item->description, 0, 30)}}</td>
                                                        <td class="in_loga_b">
                                                            @if($support_item->status == 0)
                                                            <b class="text-default">Pending</b>
                                                            @elseif($support_item->status == 1)
                                                            <b class="text-primary">Workin on it</b>
                                                            @elseif($support_item->status == 2)
                                                            <b class="text-success">Done</b>
                                                            @endif
                                                        </td>
                                                        <td class="store_view_eye">
                                                            <a href="javascript:void()" data-toggle="modal" data-target="#view_data_{{$support_item->id}}"><i class="fa fa-eye"></i></a>
                                                            <!-- modal support -->
                                                            <div class="modal fade" id="view_data_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Support Topic</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                                                                        </div>
                                                                        <div class="modal-body pa_pocxz">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <table class="table">
                                                                                        <tbody class="tdaxsw">
                                                                                            <tr class="table-light">
                                                                                                <th>Order No</th>
                                                                                                <td>{{$support_item->order_id}}</td>
                                                                                            </tr>
                                                                                            <tr class="table-light">
                                                                                                <th>Subject</th>
                                                                                                <td>{{$support_item->title}}</td>
                                                                                            </tr>
                                                                                            <tr class="table-light">
                                                                                                <th>Message</th>
                                                                                                <td>{{$support_item->description}}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                            <a class="store_mail_mo_v change_seen" href="javascript:void()" data-toggle="modal" data-target="#supportReplyModel_{{$support_item->id}}" support_id="{{$support_item->id}}"><i class="fa fa-envelope-o"></i></a>
                                                            @if($support_item->seen_msg)
                                                            <span class="badge badge-light support_id{{$support_item->id}}" style="color: #fff;    background-color: #772125;position: relative;bottom: 10px;right: 6px;">{{$support_item->seen_msg}}</span>
                                                            @endif
                                                            <!-- modal support -->
                                                            <div class="modal fade" id="supportReplyModel_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Reply For : To</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" > ×</button>
                                                                        </div>
                                                                        <div class="modal-body pa_pocxz">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <!-- <table class="table">
                                                                                        <tbody class="tdaxsw">
                                                                                        <tr class="table-light">
                                                                                        <th>Order No</th>
                                                                                        <td>{{$support_item->order_id}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Subject</th>
                                                                                        <td>{{$support_item->title}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Message</th>
                                                                                        <td>{{$support_item->description}}</td>
                                                                                        </tr>
                                                                                            
                                                                                        
                                                                                        
                                                                                            
                                                                                         </tbody>   
                                                                                        </table> -->
                                                                                    <div style="overflow-y: scroll;overflow-x: hidden; height: 400px;">
                                                                                        @foreach($support_item->chat_message as $chat)
                                                                                        <div class="row" >
                                                                                            @if($chat->from_user_id==$data['current_user_id'])
                                                                                            <div class="col-sm-12" >
                                                                                                <div style="float: right;">
                                                                                                    <h6>{{$chat->from_u_f_name}} {{$chat->from_u_l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->to_img}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif
                                                                                            @if($chat->from_user_id!=$data['current_user_id'])
                                                                                            <div class="col-sm-12" *ngIf="$chat->from_user_id!=1;">
                                                                                                <div style="float: left;">
                                                                                                    <h6>{{$chat->f_name}} {{$chat->l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->from_u_profile}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif   
                                                                                        </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <br/>               
                                                                                    <form class="mon_aszr" action="{{getenv('APP_URL')}}/add-ticket-response" method="post">
                                                                                        {{csrf_field()}}
                                                                                        <input type="hidden" name="ticket_id" value="{{$support_item->id}}">
                                                                                        <input type="hidden" name="customer_id" value="{{$support_item->customer_id}}">
                                                                                        <!-- <div class="form-group">
                                                                                            <label for="message">Message : </label>
                                                                                            <textarea class="form-control" name="response" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-default">Submit</button> -->
                                                                                        <div class="form-group m-form__group">
                                                                                            <textarea name="response" id="message" placeholder="Type.." class="form-control" id="exampleTextarea1" rows="1"></textarea>
                                                                                        </div>
                                                                                        <button type="submit" class="btn btn-default" style="float: right;">
                                                                                        Send
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                        </td>
                                                    </tr>
                                                    @endforeach  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1_ac" class="container tab-pane fade">
                                    <br>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="wa_pmczxs">Sr No</th>
                                                        <th>Order ID </th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['support_list'] as $support_item)
                                                    @if($support_item->status == 0 || $support_item->status == 1)
                                                    <tr>
                                                        <td>{{$support_item->id}}</td>
                                                        <td>{{$support_item->order_id}}</td>
                                                        <td>{{$support_item->title}}</td>
                                                        <td>{{substr($support_item->description, 0, 30)}}</td>
                                                        <td class="in_loga_b">
                                                            @if($support_item->status == 0)
                                                            <b class="text-default">Pending</b>
                                                            @elseif($support_item->status == 1)
                                                            <b class="text-primary">Working on it</b>
                                                            @endif
                                                        </td>
                                                        <td class="store_view_eye">
                                                            <a href="javascript:void()" data-toggle="modal" data-target="#view_data_{{$support_item->id}}"><i class="fa fa-eye"></i></a>
                                                            <!-- modal support -->
                                                            <div class="modal fade " id="view_data_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md cdsaqwx">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Support Topic</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <table class="table table-bordered">
                                                                                        <tr>
                                                                                            <th>Order No</th>
                                                                                            <td>{{$support_item->order_id}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Subject</th>
                                                                                            <td>{{$support_item->title}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Message</th>
                                                                                            <td>{{$support_item->description}}</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                            <a class="store_mail_mo_v change_seen" href="javascript:void()" data-toggle="modal" data-target="#supportReplyModel3_{{$support_item->id}}" support_id="{{$support_item->id}}"><i class="fa fa-envelope-o"></i></a>
                                                            @if($support_item->seen_msg)
                                                            <span class="badge badge-light support_id{{$support_item->id}}" style="color: #fff;    background-color: #772125;position: relative;bottom: 10px;right: 6px;">{{$support_item->seen_msg}}</span>
                                                            @endif
                                                            <!-- modal support -->
                                                            <div class="modal fade" id="supportReplyModel3_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Reply For : To</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" > ×</button>
                                                                        </div>
                                                                        <div class="modal-body pa_pocxz">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <!-- <table class="table">
                                                                                        <tbody class="tdaxsw">
                                                                                        <tr class="table-light">
                                                                                        <th>Order No</th>
                                                                                        <td>{{$support_item->order_id}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Subject</th>
                                                                                        <td>{{$support_item->title}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Message</th>
                                                                                        <td>{{$support_item->description}}</td>
                                                                                        </tr>
                                                                                            
                                                                                        
                                                                                        
                                                                                            
                                                                                         </tbody>   
                                                                                        </table> -->
                                                                                    <div style="overflow-y: scroll;overflow-x: hidden; height: 400px;">
                                                                                        @foreach($support_item->chat_message as $chat)
                                                                                        <div class="row" >
                                                                                            @if($chat->from_user_id==$data['current_user_id'])
                                                                                            <div class="col-sm-12" >
                                                                                                <div style="float: right;">
                                                                                                    <h6>{{$chat->from_u_f_name}} {{$chat->from_u_l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->to_img}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif
                                                                                            @if($chat->from_user_id!=$data['current_user_id'])
                                                                                            <div class="col-sm-12" *ngIf="$chat->from_user_id!=1;">
                                                                                                <div style="float: left;">
                                                                                                    <h6>{{$chat->f_name}} {{$chat->l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->from_u_profile}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif   
                                                                                        </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <br/>               
                                                                                    <form class="mon_aszr" action="{{getenv('APP_URL')}}/add-ticket-response" method="post">
                                                                                        {{csrf_field()}}
                                                                                        <input type="hidden" name="ticket_id" value="{{$support_item->id}}">
                                                                                        <input type="hidden" name="customer_id" value="{{$support_item->customer_id}}">
                                                                                        <!-- <div class="form-group">
                                                                                            <label for="message">Message : </label>
                                                                                            <textarea class="form-control" name="response" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-default">Submit</button> -->
                                                                                        <div class="form-group m-form__group">
                                                                                            <textarea name="response" id="message" placeholder="Type.." class="form-control" id="exampleTextarea1" rows="1"></textarea>
                                                                                        </div>
                                                                                        <button type="submit" class="btn btn-default" style="float: right;">
                                                                                        Send
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2_ac" class="container tab-pane fade">
                                    <br>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th >Sr No</th>
                                                        <th>Order ID </th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['support_list'] as $support_item)
                                                    @if($support_item->status == 2)
                                                    <tr>
                                                        <td class="wa_pmczxs">{{$support_item->id}}</td>
                                                        <td>{{$support_item->order_id}}</td>
                                                        <td>{{$support_item->title}}</td>
                                                        <td>{{substr($support_item->description, 0, 30)}}</td>
                                                        <td class="in_loga_b">
                                                            @if($support_item->status == 2)
                                                            <b class="text-success">Done</b>
                                                            @endif
                                                        </td>
                                                        <td class="store_view_eye">
                                                            <a href="javascript:void()" data-toggle="modal" data-target="#view_data_{{$support_item->id}}"><i class="fa fa-eye"></i></a>
                                                            <!-- modal support -->
                                                            <div class="modal fade" id="view_data_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Support Topic</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <table class="table table-bordered">
                                                                                        <tr>
                                                                                            <th>Order No</th>
                                                                                            <td>{{$support_item->order_id}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Subject</th>
                                                                                            <td>{{$support_item->title}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Message</th>
                                                                                            <td>{{$support_item->description}}</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                            <a class="store_mail_mo_v change_seen" href="javascript:void()" data-toggle="modal" data-target="#supportReplyModel2_{{$support_item->id}}" support_id="{{$support_item->id}}"><i class="fa fa-envelope-o"></i></a>
                                                            @if($support_item->seen_msg)
                                                            <span class="badge badge-light support_id{{$support_item->id}}" style="color: #fff;    background-color: #772125;position: relative;bottom: 10px;right: 6px;">{{$support_item->seen_msg}}</span>
                                                            @endif
                                                            <!-- modal support -->
                                                            <div class="modal fade" id="supportReplyModel2_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                                                <div class="modal-dialog modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header cust_sclo_btn_n">
                                                                            <h4 class="modal-title">Reply For : To</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" > ×</button>
                                                                        </div>
                                                                        <div class="modal-body pa_pocxz">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <!-- <table class="table">
                                                                                        <tbody class="tdaxsw">
                                                                                        <tr class="table-light">
                                                                                        <th>Order No</th>
                                                                                        <td>{{$support_item->order_id}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Subject</th>
                                                                                        <td>{{$support_item->title}}</td>
                                                                                        </tr>
                                                                                        <tr class="table-light">
                                                                                        <th>Message</th>
                                                                                        <td>{{$support_item->description}}</td>
                                                                                        </tr>
                                                                                            
                                                                                        
                                                                                        
                                                                                            
                                                                                         </tbody>   
                                                                                        </table> -->
                                                                                    <div style="overflow-y: scroll;overflow-x: hidden; height: 400px;">
                                                                                        @foreach($support_item->chat_message as $chat)
                                                                                        <div class="row" >
                                                                                            @if($chat->from_user_id==$data['current_user_id'])
                                                                                            <div class="col-sm-12" >
                                                                                                <div style="float: right;">
                                                                                                    <h6>{{$chat->from_u_f_name}} {{$chat->from_u_l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->to_img}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif
                                                                                            @if($chat->from_user_id!=$data['current_user_id'])
                                                                                            <div class="col-sm-12" *ngIf="$chat->from_user_id!=1;">
                                                                                                <div style="float: left;">
                                                                                                    <h6>{{$chat->f_name}} {{$chat->l_name}}</h6>
                                                                                                    <div>
                                                                                                        <img src="{{$chat->from_u_profile}}" width="50px">
                                                                                                    </div>
                                                                                                    <p style="margin-bottom: 0;">
                                                                                                        {{$chat->message}}
                                                                                                    </p>
                                                                                                    <p>{{$chat->created_at}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif   
                                                                                        </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <br/>               
                                                                                    <form class="mon_aszr" action="{{getenv('APP_URL')}}/add-ticket-response" method="post">
                                                                                        {{csrf_field()}}
                                                                                        <input type="hidden" name="ticket_id" value="{{$support_item->id}}">
                                                                                        <input type="hidden" name="customer_id" value="{{$support_item->customer_id}}">
                                                                                        <!-- <div class="form-group">
                                                                                            <label for="message">Message : </label>
                                                                                            <textarea class="form-control" name="response" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-default">Submit</button> -->
                                                                                        <div class="form-group m-form__group">
                                                                                            <textarea name="response" id="message" placeholder="Type.." class="form-control" id="exampleTextarea1" rows="1"></textarea>
                                                                                        </div>
                                                                                        <button type="submit" class="btn btn-default" style="float: right;">
                                                                                        Send
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /modal support -->
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="categaries" role="tabpanel">
                            <div class="form-horizontal usrfrm-right" role="form" method="POST" action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="user-profile">Collection Category</h2>
                                        <hr>
                                        <div class="collection_report_g_ne_s">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="crea_mo_aq" data-toggle="modal" data-target="#myModaladdcoll">
                                                        <img src="https://moretolike.com/assets/images/add.png">
                                                        <p>Create New List</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co">
                                                            <img src="https://moretolike.com/assets/images/empty-photo.jpg">
                                                        </div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co"></div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co"></div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co">
                                                            <img src="https://moretolike.com/assets/images/empty-photo.jpg">
                                                        </div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co"></div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co"></div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="new_pro_cat_ac">
                                                        <div class="space_diff_co"></div>
                                                        <p>Store Name</p>
                                                        <span>0 item</span>
                                                        <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                    <div class="row mrgtp" >
                                       <div class="col-lg-12 text-center">
                                        
                                          <a class="btn btn-warning" href="javascript:void(0)" data-toggle="modal" data-target="#form-add-category">Add New Product Category</a>
                                        
                                           <div class="modal fade" id="form-add-category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                         
                                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
                                               <div class="modal-dialog modal-md">
                                                 <div class="modal-content">
                                                   <div class="modal-header">
                                                     <h4 class="modal-title">Add Collection Category</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                     <div class="row">
                                                       <form id="add_category_form" action="javascript:void(0)">
                                                          <div class="col-sm-12">
                                                            <table class="table table-bordered">
                                                               <tr>
                                                                  <th>Category Name</th>
                                                                  <td>
                                                                    <input type="text" name="category_name">
                                                                    <input type="hidden" name="customer_id" value="{{Session::get('user_id')}}">
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <th><input type="reset" name="reset" class="btn btn-primary"></th>
                                                                  <th><button class="btn btn-primary" onclick="addCollectionCategory()">Save</button></th>
                                                               </tr>
                                                             </table>
                                                          </div>
                                                      </form>
                                                     </div>
                                                   </div>
                                                 </div>
                                               </div>
                                           </div>
                                     
                                       </div>
                                    </div>
                                      <div id="content" class="site-content" tabindex="-1">
                                             <div class="">
                                                 <div id="primary" class="content-area">
                                                   <main id="main" class="site-main">
                                                     <table class="table " id="support_table">
                                                       <thead>
                                                         <tr>
                                                           <th>Sr No</th>
                                                           <th>Category Name</th>
                                                           <th>Action</th>
                                                         </tr>
                                                       </thead>
                                                       <tbody id="collection_category_list">
                                                         @foreach($data['collection_category'] as $collection)
                                                         <tr>
                                                           <td>{{$collection->id}}</td>
                                                           <td>{{$collection->collection_category_name}}</td>
                                                           <td><a onclick="removeCollectionCat(this.id)" id="{{$collection->id}}"><i class="fa fa-trash"></i></a></td>
                                                         </tr>
                                                         @endforeach    
                                                       </tbody>
                                                     </table>
                                                   </main>
                                                 </div>
                                             </div>
                                           </div>
                                      -->
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="collection" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Collection</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="collection_report_g_ne_s">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co">
                                                <img src="{{asset('assets/images/empty-photo.jpg')}}">
                                            </div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co">
                                                <img src="{{asset('assets/images/empty-photo.jpg')}}">
                                            </div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="new_pro_cat_ac">
                                            <div class="space_diff_co"></div>
                                            <p>Store Name</p>
                                            <span>0 item</span>
                                            <h5 data-toggle="modal" data-target="#myModalcolEdit">Edit list</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="review" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Your Reviews & Ratings</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mrgtp" >
                                <div class="col-lg-12">
                                    <h6 style="padding-left: 40px;"> Product Reviews & Ratings</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-formated">
                                        <thead>
                                            <tr class="">
                                                <th class="nam_peo_asd">Product Name</th>
                                                <th class="rating_cl_ewa">Rating</th>
                                                <th>Comment</th>
                                                <th>Approve Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['product_rating'] as $product_rating1)
                                            <tr>
                                                <td>{{$product_rating1->product_name}}
                                                    <?php  $width =  $product_rating1->rating*20; ?>
                                                </td>
                                                <td class="star-rating" title="Rated {{$product_rating1->rating}} out of 5">
                                                    <span style="width:{{$width}}%; "></span>
                                                </td>
                                                <td >{{$product_rating1->comment}}</td>
                                                <td {{$product_rating1->admin_approval =='a' ? 'style="color: green"' : 'style="color: red"'}}>{{$product_rating1->admin_approval =='a' ? 'Approved' : 'Not approve'}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="store" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Your Reviews & Ratings</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mrgtp" >
                                <div class="col-lg-12">
                                    <h6 style="padding-left: 40px;"> Store Reviews & Ratings</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-formated">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Rating</th>
                                                <th>Comment</th>
                                                <th>Approve Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['store_ratings'] as $store_rating)
                                            <tr>
                                                <td>{{$store_rating->product_name}}
                                                    <?php  $width =  $store_rating->rating*20; ?>
                                                </td>
                                                <td class="star-rating" title="Rated {{$store_rating->rating}} out of 5">
                                                    <span style=""></span>
                                                </td>
                                                <td >{{$store_rating->comment}}</td>
                                                <td {{$store_rating->admin_approval =='a' ? 'style="color: green"' : 'style="color: red"'}}>{{$store_rating->admin_approval =='a' ? 'Approved' : 'Not approve'}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="whishlist" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">My Wishlist</h2>
                                </div>
                            </div>
                            <div class="row mrgtp" >
                                <div class="col-lg-12">
                                    <h6 style="padding-left: 40px;"> There is no data.</h6>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="payment-history" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Payment History</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-formated">
                                        <thead>
                                            <tr class="af_ga_ta_nb">
                                                <th>Order No </th>
                                                <th>Card End With </th>
                                                <th>Amount Paid</th>
                                                <th>Payment Date</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['payment_history'] as $row)
                                            <tr>
                                                <td><a href="/beta-order-details/{{$row->order_no}}">{{$row->order_no}}</a></td>
                                                <td>{{$row->charge['source']['last4']}}</td>
                                                <td>{{$row->total_amount}}</td>
                                                <td>{{$row->payment_date}}</td>
                                                <td>{{$row->payment_status}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                        <div class="tab-pane" id="active-cards" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="user-profile">Active Card</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-formated">
                                        <thead>
                                            <tr>
                                                <th>Card ended with</th>
                                                <th>Brand</th>
                                                <th>Expired on</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['active_card']['data'] as $row)
                                            <tr>
                                                <td>************{{$row['last4']}}</td>
                                                <td>{{$row['brand']}}</td>
                                                <td>{{$row['exp_month']}}/{{$row['exp_year']}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--profile-->
                    </div>
                    <!--profile-->
                </div>
            </div>
            <!--content profile information-->
        </div>
        <!---my account-->  
    </div>
</div>
<!---Collection Cat List--->
<section class="collect_cat_list_panel">
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="myModaladdcoll">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create New List</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="usr">Store Name</label>
                            <input placeholder="Store Name" type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary">Create New List <i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <!-- Modal footer -->
                </div>
            </div>
        </div>
    </div>
</section>
<!---Edit Collection List--->
<section class="collect_cat_list_panel">
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="myModalcolEdit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit List</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body model_collection_edit">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="feature_img_col">
                                    <img src="https://moretolike.com/assets/images/empty-photo.jpg">     
                                </div>
                                <input class="input_feat_cl" type="file" name="pic_1">
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <label for="usr">Title</label>
                                    <input placeholder="Title" type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Body Text</label>
                                    <textarea class="form-control" rows="3" id="comment" placeholder="Body Text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button_cl_model_col">
                            <div class="row">
                                <hr>
                                <div class="col-lg-8 col-md-8 col-6">
                                    <div class="del_model_se_cl">
                                        <button type="button" class="btn btn-secondary">Delete List</button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-3">
                                    <div class="cancel_model_se_cl">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-3">
                                    <div class="Save_model_se_cl">
                                        <button type="button" class="btn btn-secondary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend/include/footer')
<script type="text/javascript">
    $(document).ready(function(){
      $('.change_seen').click(function(){
        var support_id = $(this).attr('support_id');
           $.ajax({
          url:'/beta-seen',
          type:'GET',
           headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          data:{support_id: support_id},
          success:function(data){
              $('.support_id'+support_id).remove();
          }
          });
      });
    });

 function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
    function change_password(e){
    e.preventDefault();
    var old_password = $('#old_password').val();
    var new_password = $('#new_password').val();
    var re_new_password = $('#re_new_password').val();

    token = document.querySelector('meta[name="csrf-token"]').content;
        $.ajax({
        url:"/change-password",
        method:"POST", //First change type to method here
        data:{
          "old_password": old_password,
          "new_password":new_password,
          "re_new_password":re_new_password,
          "_token":token // Second add quotes on the value.
        },
        success:function(response) {
         if(response == 'Please Enter Old Password Corrrectly'){
          printError("passwordErr", "Please Enter Old Password Corrrectly"); 
         }else {
          printError("passwordErr", ""); 
         }
         if(response == 'New Password and  Re-password not equal.'){
          printError("passwordErr2", "New Password and  Re-password not equal."); 
         }else{
          printError("passwordErr2", ""); 
         }
         if(response == 'Your password change successfully'){
          printError("successfullychange", "Your password change successfully");   
         }else{
          printError("successfullychange", "");   
         }
       },
       error:function(){
        alert("error");
       }

      });

}
function update_address(e){
    e.preventDefault();
    var billing_name    = $('#billing_name').val();
    var billing_contact = $('#billing_contact').val();
    var billing_zipcode = $('#billing_zipcode').val();
    var billing_locality= $('#billing_locality').val();
    var billing_address1= $('#billing_address1').val();
    var billing_country = $('#billing_country').val();
    var billing_state   = $('#billing_state').val();
    var billing_city    = $('#billing_city').val();
    var shipping_name   = $('#shipping_name').val();
    var shipping_contact= $('#shipping_contact').val();
    var shipping_zipcode= $('#shipping_zipcode').val();
    var shipping_locality = $('#shipping_locality').val();
    var shipping_address1 = $('#shipping_address1').val();
    var shipping_country = $('#shipping_country').val();
    var shipping_state = $('#shipping_state').val();
    var shipping_city = $('#shipping_city').val();

    token = document.querySelector('meta[name="csrf-token"]').content;
        $.ajax({
        url:"/update-address",
        method:"POST", //First change type to method here
        data:{
          "billing_name": billing_name,
          "billing_contact":billing_contact,
          "billing_zipcode":billing_zipcode,
          "billing_locality":billing_locality,
          "billing_address1":billing_address1,
          "billing_country":billing_country,
          "billing_state":billing_state,
          "billing_city":billing_city,
          "shipping_name":shipping_name,
          "shipping_contact":shipping_contact,
          "shipping_zipcode":shipping_zipcode,
          "shipping_locality":shipping_locality,
          "shipping_address1":shipping_address1,
          "shipping_country":shipping_country,
          "shipping_state":shipping_state,
          "shipping_city":shipping_city,
          "_token":token // Second add quotes on the value.
        },
        success:function(response) {
         if(response == 'Your Address updated successfully.'){
          printError("successfullyupdate", "Your Address updated successfully."); 
         }else {
          printError("successfullyupdate", ""); 
         }
         
       },
       error:function(){
        alert("error");
       }

      });

}
</script>