
@include('single-product-sections/header')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<style type="text/css">
  div.collection-category{
    height: 200px;
    background: #ccc;
    border: 1px solid blue;
    border-radius: 30px;
    margin: 0px;
    background-size: 100%;
    background-repeat: no-repeat;
  }
  div.collection-category:hover {
    background-color: yellow;
    cursor: pointer;
  }
  div.collection-category b {
    position: absolute;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-top: -25px;
    margin-left: -50px;
  }
.heading-profile{margin-top: 15px;
    margin-bottom: 20px; }
    label {
    font-size: 1em;
    line-height: 1.286em;
    font-weight: bold;
    margin-bottom: 0em;
}

</style>
<div class="single-product full-width">

<div id="content" class="site-content" tabindex="-1">
<div class="container">

  <nav class="woocommerce-breadcrumb" >
    <a href="/">Home</a>
    <span class="delimiter">
      <i class="fa fa-angle-right"></i></span><a href="{{url('/customer')}}">My Account</a>
  </nav>
  <center><h5>
    <span style=" color: green; font-weight:bold" >
        {!! Session::has('msg') ? Session::get("msg") : '' !!}
    </span>
  </h5></center>
  <center><h5>
    <span style=" color: red; font-weight:bold" >
        {!! Session::has('err_msg') ? Session::get("err_msg") : '' !!}
    </span>
  </h5></center>
  
  <div id="primary" class="content-area" style="border:2px solid #fed700; border-radius: 5px; padding: 20px;">
      <main id="main" class="site-main">
          <div class="row">
              <div class="col-xs-12">
                  <!-- tabs -->

                  <div class="tabbable tabs-left">
                      <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" style="border:1px solid #fed700; border-radius: 5px;">
                          <!-- <li class="fbt1"><span style="float: left;"><img src="assets/images/user.png" alt=""  /></span><span style="float: left;">Jhon Jeorge</span>  </li> -->
                          <li class="fbt1" style="padding-bottom: 35px;">
                            <span style="float: left;">
                              @if(!empty($user_data->profile_image))
                                <img src="{{asset('uploads')}}/{{$user_data->profile_image}}" alt="" height="25px"  width="25px"  style="margin-top:2.5px;" />
                              @else
                                <img src="{{asset('uploads')}}/default-user.png" alt="" height="25px"  width="25px" />
                              @endif
                            </span>
                          <span style="float: left; padding-left: 10px;"><h5>{{session('f_name')}}</h5></span> </li>
                         
                      

                          <li class="fbt "><a href="javascript:void(0)">ACCOUNT SETTINGS</a></li>

                          <li class="nav-item accessories_tab"><a href="#home" data-toggle="tab" class="bottmbord" >Profile Information</a></li>

                          <li class="nav-item accessories_tab"><a href="#home5" data-toggle="tab" >Change Password</a></li>
                          <li class="nav-item accessories_tab"><a href="#home1" data-toggle="tab"  class="bottmbord">Manage Addresses</a></li>

                         <!--<li class="nav-item accessories_tab"><a href="#home2" data-toggle="tab">Notification Prefrence</a></li>
                          <li class="nav-item accessories_tab"><a href="#home3" data-toggle="tab">Pan Card Information</a></li> -->
                          <li class="fbt "><a href="javascript:void(0)">VENDOR SETTING</a></li>
                          @if(Session::get('vendor_id'))
                            <li class="nav-item accessories_tab">
                              <a href="/admin" class="bottmbord">Upgrade to Vendor</a>
                            </li>

                             <li class="nav-item accessories_tab"><a href="#super_vendor" data-toggle="tab">Upgrade for SuperVendor</a></li>
                          @else

                             <li class="nav-item accessories_tab"><a href="#home4" data-toggle="tab">Upgrade to Vendor</a></li><!-- 
                             <li class="nav-item accessories_tab"><a href="#super_vendor" data-toggle="tab">Upgrade for SuperVendor</a></li> -->

                          @endif

                         

<!-- 
                          <li class="fbt"><a href="" >PAYMENTS</a></li>

                          <li class="nav-item accessories_tab"><a href="#about" data-toggle="tab">PhonePe Wallet</a></li>
                          <li class="nav-item accessories_tab"><a href="#about1" data-toggle="tab">Gift Card</a></li>
                          <li class="nav-item accessories_tab"><a href="#about2" data-toggle="tab">Save Card</a></li> -->

                          <li class="fbt"><a href="javascript:void(0)">MY SHOPPING</a></li>
                          <li class="nav-item accessories_tab"><a href="#orders" data-toggle="tab" class="bottmbord" >My Shopping</a></li>
                          <li class="fbt nav-item accessories_tab"><a href="javascript:void(0)">MY BLOG</a></li>
                          <li class="nav-item accessories_tab"><a href="#instagram_div" data-toggle="tab" class="bottmbord" >Blog</a></li>
                          <li class="nav-item accessories_tab"><a href="#social-account" data-toggle="tab" class="bottmbord" >Social Accounts</a></li>
                          <li class="fbt nav-item accessories_tab"><a href="javascript:void(0)">SUPPORT</a></li>
                          <li class="nav-item accessories_tab"><a href="#support_div" data-toggle="tab" class="bottmbord" >Support</a></li>

                          <li class="fbt"><a href="javascript:void(0)" >MY COLLECTION</a></li>
                          <li class="nav-item accessories_tab"><a href="#collection_category" data-toggle="tab">My Collection Category</a></li> 
                          <li class="nav-item accessories_tab"><a href="#my-collection" data-toggle="tab">My Collection</a></li> 
                          <!-- <li class="fbt"><a href="javascript:void(0)" >MY STUFF</a></li>
                          <li class="nav-item accessories_tab"><a href="#services" data-toggle="tab">My Rewards</a></li> -->

                          <li class="fbt"><a href="" data-toggle="tab"  class="">REVIEW </a></li>

                          <li class=" nav-item accessories_tab"><a href="#services2" data-toggle="tab"  class="bottmbord">Product Review</a></li>
                          <li class="nav-item accessories_tab"><a href="#services3" data-toggle="tab"  class="bottmbord">Store Review</a></li>
                         <!--  <li class="nav-item accessories_tab"><a href="#services3" data-toggle="tab">All Notification</a></li> -->
                          <li class="nav-item accessories_tab"><a href="#services4" data-toggle="tab">Wishlist</a></li>
                          <li class="fbt" ><a href="/logout" >LOGOUT</a></li>
                      </ul>

                      <div class="tab-content">
                          <!-- my-collection -->
                          <div class="tab-pane" id="my-collection">
                            <div class="row">
                              <h1>My Collections</h1>
                                <div class="col-md-9">
                                  <div id="content" class="site-content" tabindex="-1">
                                    <div class="container">
                                        <div id="primary" class="content-area">
                                          <main id="collection_main" class="site-main">
                                            @if(is_object($product_collection))
                                              @foreach($product_collection as $row)
                                                <div class="col-sm-3 collection-category" onclick="getProduct({{$row->product_id}}, {{$row->id}})" style="background: url({{getenv('URL')}}{{$row->product_img}}); background-size: 100%; background-repeat: no-repeat;"><b id="collection_product_name_{{$row->id}}" style="background: yellow; color: black; padding: 10px;">{{$row->product_name}}</b></div>
                                              @endforeach
                                            @endif


                                            <!-- @if(is_object($collection_category))
                                              @foreach($collection_category as $row)
                                                <div class="col-sm-3 collection-category" onclick="getCollection({{$row->id}})"><b id="collection_category_name_{{$row->id}}">{{$row->collection_category_name}}</b></div>
                                              @endforeach
                                            @endif -->
                                          </main><!-- #main -->
                                        </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                          </div>
                          <!-- Collection_category -->
                          <div class="tab-pane" id="collection_category">
                            <div class="row">
                              <h1>Collection Category</h1>
                                <div class="col-md-9">
                                <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#form-add-category">Add New Product Category</a>
                                <!-- modal add category -->
                                  <div class="modal fade" id="form-add-category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                    <style type="text/css">
                                      .form-group{
                                        padding: 0px;
                                      }
                                      .form-control{
                                        border: 1px solid #ccc;
                                      }
                                    </style>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Add Collection Category</h4>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                              <div class="col-sm-12">
                                              <form id="add_category_form" action="javascript:void(0)">
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
                                              </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                <!-- modal add category -->

                                  <div id="content" class="site-content" tabindex="-1">
                                    <div class="container">
                                        <div id="primary" class="content-area">
                                          <main id="main" class="site-main">
                                            <table class="table table-bordered" id="support_table">
                                              <thead>
                                                <tr>
                                                  <th>Sr No</th>
                                                  <th>Category Name</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="collection_category_list">
                                                @foreach($collection_category as $collection)
                                                <tr>
                                                  <td>{{$collection->id}}</td>
                                                  <td>{{$collection->collection_category_name}}</td>
                                                  
                                                  <td><a onclick="removeCollectionCat(this.id)" id="{{$collection->id}}"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                                @endforeach    
                                              </tbody>
                                            </table>
                                            
                                          </main><!-- #main -->
                                        </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                          </div>
                          <!-- social-account -->
                          <div class="tab-pane" id="social-account">
                            <div class="row">
                              <h1>Manage Social Account</h1>
                                <div class="col-md-9">
                                <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#add-social-account">Add a Social Account</a>
                                <!-- modal add category -->
                                  <div class="modal fade" id="add-social-account" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                    <style type="text/css">
                                      .form-group{
                                        padding: 0px;
                                      }
                                      .form-control{
                                        border: 1px solid #ccc;
                                      }
                                    </style>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Add a Social Account</h4>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                              <div class="col-sm-12">
                                              <form id="add_category_form" action="javascript:void(0)">
                                                <table class="table table-bordered">
                                                   <tr>
                                                      <th>Select Account Type</th>
                                                      <td>
                                                        <a class="btn btn-block btn-social btn-instagram" href="{{$instagram}}"><span class="fa fa-instagram"></span> Sign in with Instagram</a>
                                                        <input type="hidden" name="customer_id" value="{{Session::get('user_id')}}">
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <th><input type="reset" name="reset" class="btn btn-primary"></th>
                                                      <th><button class="btn btn-primary" onclick="addCollectionCategory()">Save</button></th>
                                                   </tr>
                                                 </table>
                                              </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                <!-- modal add category -->

                                  <div id="social-content" class="site-content" tabindex="-1">
                                    <div class="container">
                                        <div id="primary" class="content-area">
                                          <main id="main" class="site-main">
                                            <!--<table class="table table-bordered" id="social-content-data">
                                              <thead>
                                                <tr>
                                                  <th>Sr No</th>
                                                  <th>Category Name</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="collection_category_list">
                                                @foreach($collection_category as $collection)
                                                <tr>
                                                  <td>{{$collection->id}}</td>
                                                  <td>{{$collection->collection_category_name}}</td>
                                                  
                                                  <td><a onclick="removeCollectionCat(this.id)" id="{{$collection->id}}"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                                @endforeach    
                                              </tbody>
                                            </table>-->
                                            
                                          </main><!-- #main -->
                                        </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                          </div>
                          <!-- home -->
                          <div class="tab-pane active" id="home">                
                              <div class="row">
                                  <h1>Profile Information</h1>

                                  <div class="col-md-9"><br><br>
                                    <form class="form-horizontal" method="post" action="/edit-profile" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                        <fieldset>

                                          <!-- Text input-->
                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">First Name</label>  
                                            <div class="col-md-8">
                                            <input id="f_name" name="f_name" type="text" placeholder="Enter First Name" class="form-control input-md" required value="{{$user_data->f_name}}">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">Last Name</label>  
                                            <div class="col-md-8">
                                            <input id="l_name" name="l_name" type="text" placeholder="Enter Last Name" class="form-control input-md" value="{{$user_data->l_name}}">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">User Name</label>  
                                            <div class="col-md-8">
                                            <input id="customer_name" name="customer_name" type="text" placeholder="Enter User Name" class="form-control input-md" required value="{{$user_data->customer_name}}">
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">Email</label>  
                                            <div class="col-md-8">
                                            <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-md" required value="{{$user_data->email}}">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">Contact No</label>  
                                            <div class="col-md-8">

                                            <input id="contact_no" name="contact_no" type="text" placeholder="Enter Contact no" class="form-control input-md" required value="{{$user_data->contact_no}}" onkeypress="return return isNumberKey(event)">
                                            <span id="errmsg" style="color:red"></span>
                                            </div>
                                          </div>
                                          

                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textinput">Dob</label>  
                                            <div class="col-md-8">
                                            <input id="dob" name="dob" type="date" placeholder="" class="form-control input-md dateyear" required value="{{$user_data->dob}}">  
                                            </div>
                                          </div>


                                          <!-- Multiple Radios (inline) -->
                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="radios">Gender</label>
                                            <div class="col-md-8"> 
                                              <label class="radio-inline ins" for="radios-0" >
                                              @if($user_data->gender == "male")  
                                                  <input type="radio" name="gender" id="gender" value="{{$user_data->gender}}" required checked >
                                                 @else
                                                  <input type="radio" name="gender" id="gender" value="male" required >
                                              @endif
                                                Male
                                              </label> 
                                              <label class="radio-inline ins" for="radios-1">
                                             
                                              @if($user_data->gender =="female")  
                                                  <input type="radio" name="gender" id="gender" value="{{$user_data->gender}}" required checked>
                                              @else
                                                  <input type="radio" name="gender" id="gender" value="female" required >
                                              @endif
                                                Female
                                              </label>
                                            </div>
                                          </div>
                                        
                                         <div class="form-group row">
                                           <label class="col-md-4 control-label" for="textinput">Profile Image</label>  
                                           <div class="col-md-8"> <img src="{{asset('uploads')}}/{{$user_data->profile_image}}" height="100px;" width="100px;">
                                           </div>
                                         </div>

                                          <div class="form-group row">
                                           
                                            <label class="col-md-4 control-label" for="textinput">Choose Image</label>  
                                            <div class="col-md-8">
                                              <input id="new_profile_image " name="new_profile_image" type="file" placeholder="" class="form-control input-md climg">

                                              <input id="old_profile_image" name="old_profile_image" type="hidden" class="form-control input-md" value="{{$user_data->profile_image}}">
                                               <span style="color: red;font-size: 11px">Upload only .jpeg, .png, .jpg extension files.</span>
                                            </div>

                                           
                                          </div>



                                          <!-- Button -->
                                          <div class="form-group row">
                                            <label class="col-md-4 control-label" for="singlebutton"></label>
                                            <div class="col-md-8">


                                              <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Save</button>


                                                <button id="singlebutton" name="singlebutton" class="btn btn-danger" type="reset">Reset</button>
                                            </div>
                                          </div>

                                          </fieldset>
                                      </form>
                                  </div>
                              </div>
                          </div> 
                          <!-- home -->
                          <div class="tab-pane" id="home1">                
                              <div class="row">
                                  <h1>Manage Addresses</h1>
                                    <div class="col-md-9">
                                      <div class="col-md-12">
                                        <form class="form-horizontal" method="post" action="/customer/address">

                                          {{csrf_field()}}
                                          <div class="col-md-6">
                                                <h5 class="heading-profile">Billing Address</h5>
                                                <fieldset>
                                                    
                                                      <input id="billing_first_name" name="billing_first_name" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->f_name}}" required>
                                                       
                                                      <input id="billing_last_name" name="billing_last_name" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->l_name}}" required>
                                                       
                                                      <input id="billing_email" name="billing_email" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->email}}" required>
                                                       

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Contact No</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_phone" name="billing_phone" type="text" placeholder="" class="form-control input-md" value="{{$user_data->contact_no}}" required  onkeypress="return isNumberKey(event)">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Billing Company</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_alternate_no" name="billing_alternate_no" type="text" placeholder="" class="form-control input-md" value="">
                                                        </div>
                                                      </div>
                                                      <br>


                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Country Code</label>  
                                                        <div class="col-md-7">
                                                        <input id="contact_country_code" name="billing_country_code" type="text" placeholder="" class="form-control input-md" readonly value="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Country</label>  
                                                        <div class="col-md-7">

                                                        <select class="form-control input-md dateyear" onchange="get_country_code(this.value);" id="fk_billing_country" name="fk_billing_country" required>
                                                          <option value="">Select Country</option>
                                                          @foreach($country as $country1)
                                                          <option value="{{$country1->id}}">{{$country1->country_name}}</option>
                                                          @endforeach
                                                        </select>
                                                      
                                                        </div>
                                                      </div>
                                                      <!-- Text input-->

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">City</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_city" name="billing_city" type="text" placeholder="" class="form-control input-md" required>
                                                        </div>
                                                      </div>


                                                    
                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Address 1</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_address_1" name="billing_address_1" type="text" placeholder="" class="form-control input-md" required>
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Address 2</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_address_2" name="billing_address_2" type="text" placeholder="" class="form-control input-md">
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Pin Code</label>  
                                                        <div class="col-md-7">
                                                        <input id="billing_postcode" name="billing_postcode" type="text" placeholder="" class="form-control input-md" onkeypress="return isNumberKey(event)" required>
                                                        </div>
                                                      </div>

                                                      <!-- Button -->
                                                      <div class="form-group row">
                                                        <!-- <label class="col-md-5 control-label" for="singlebutton"></label> -->
                                                        <div class="col-md-12">
                                                          <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>


                                                          <button id="singlebutton" type="reset" name="singlebutton" class="btn btn-danger">Reset</button>
                                                        </div>
                                                      </div>
                                                </fieldset>
                                          </div>

                                          <div class="col-md-6">
                                                <h5 class="heading-profile">Shipping Address</h5>
                                                <fieldset>
                                                      <input id="shipping_first_name" name="shipping_first_name" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->f_name}}" required>

                                                      <input id="shipping_last_name" name="shipping_last_name" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->l_name}}" required>
                                                      
                                                      <input id="shipping_email" name="shipping_email" type="hidden" placeholder="" class="form-control input-md" value="{{$user_data->email}}" required>
                                                      

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Contact No</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_phone" name="shipping_phone" type="text" placeholder="" class="form-control input-md" value="{{$user_data->contact_no}}" onkeypress="return isNumberKey(event)" required>
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Billing Company</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_alternate_no" name="shipping_alternate_no" type="text" placeholder="" class="form-control input-md" >
                                                        </div>
                                                      </div>
                                                      <br>


                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Country Code</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_contact_country_code" name="shipping_contact_country_code" type="text" placeholder="" class="form-control input-md" readonly>
                                                        </div>
                                                      </div>




                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Country</label>  
                                                        <div class="col-md-7">

                                                        <select class="form-control input-md dateyear" onchange="get_shipping_country_code(this.value);" id="fk_shipping_country" name="fk_shipping_country" required>
                                                          <option value="">Select Country</option>
                                                          @foreach($country as $country1)
                                                          <option value="{{$country1->id}}">{{$country1->country_name}}</option>
                                                          @endforeach
                                                        </select>
                                                      
                                                        </div>
                                                      </div>
                                                      <!-- Text input-->

                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">City</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_city" name="shipping_city" type="text" placeholder="" class="form-control input-md" required>
                                                        </div>
                                                      </div>


                                                    
                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Address 1</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_address_1" name="shipping_address_1" type="text" placeholder="" class="form-control input-md" required>
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Address 2</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_address_2" name="shipping_address_2" type="text" placeholder="" class="form-control input-md">
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="form-group row">
                                                        <label class="col-md-5 control-label" for="textinput">Pin Code</label>  
                                                        <div class="col-md-7">
                                                        <input id="shipping_postcode" name="shipping_postcode" type="text" placeholder="" class="form-control input-md" onkeypress="return isNumberKey(event)" required>
                                                        </div>
                                                      </div>
                                                       <input type="hidden" id="update_id" name="update_id">
                                                </fieldset>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-md-12">


                                        @foreach($addessess as $addessess1)
                                          <div class="row address_div" >
                                            <div class="col-md-12">

                                              <div class="col-md-4">
                                                <div><h5> Billing Address</h5></div><br>
                                                <div> {{$addessess1->billing_phone}} {{$addessess1->billing_company}} 
                                                </div>
                                                <div>{{$addessess1->billing_address_1}} {{$addessess1->billing_address_2}}
                                                  {{$addessess1->billing_city}} {{$addessess1->billing_country_name}} {{$addessess1->billing_postcode}}</div>
                                              </div>
                                            

                                              <div class="col-md-4">
                                                <div><h5> Shipping Address</h5></div><br>
                                                <div> {{$addessess1->shipping_phone}} {{$addessess1->shipping_company}} 
                                                </div>
                                                <div>{{$addessess1->shipping_address_1}} {{$addessess1->shipping_address_2}}
                                                  {{$addessess1->shipping_city}} {{$addessess1->shipping_country_name}} {{$addessess1->shipping_postcode}}</div>
                                              </div>

                                              <div class="col-md-4">
                                                <a href="javascript:void(0)" class="address_edit" onclick="address_edit({{$addessess1->pk_address_id}});">Edit</a> 
                                                &nbsp;&nbsp;&nbsp; 
                                                <a href="javascript:void(0)" class="address_delete" data-id ="{{$addessess1->pk_address_id}}">Delete</a>
                                              </div>

                                            </div>
                                          </div>
                                        <br>
                                        

                                        @endforeach

                                      </div>


                                    </div>
                              </div>
                          </div> 

                          <!-- <div class="tab-pane " id="home2">                
                              <div class="">
                                  <h1>Notification Prefrence</h1>
                                  <p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                              </div>
                          </div> 

                          <div class="tab-pane " id="home3">                
                              <div class="">
                                  <h1>Pan Card Information</h1>
                                  <p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                              </div>
                          </div>  -->


                          <div class="tab-pane" id="home4">                
                              <div class="row">
                                  <div class="col-md-9">
                                    <form class="form-horizontal usrfrm-right" role="form" method="POST" action="">
                           <div class="row">
                              <div class="col-md-12">
                                 <h2 class="user-profile">Upgrade Profile For Vendor</h2>
                                 <hr>
                              </div>
                           </div>
                           <div class="row mrgtp">
                           </div>
                           <div class="row">
                              <div class="col-md-6" style="padding-left: 55px;">
                              
                                 <div class="form-group">
                                    <label for="billing_contact_no"><strong>First Name *</strong></label>
                                    <input type="text" class="form-control" id="billing_contact_no" placeholder="First Name" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="billing_company"><strong>User Name  *</strong></label>
                                    <input type="text" class="form-control" id="billing_company" placeholder="User Name" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="billing_country_code"><strong>Store Name *</strong></label>
                                    <input type="text" class="form-control" id="billing_country_code" placeholder="Store Name">
                                 </div>
                                   <div class="form-group">
                                    <label for="billing_country_code"><strong>Email  *</strong></label>
                                    <input type="text" class="form-control" id="billing_country_code" placeholder="email">
                                 </div>
                                 <div class="form-group">
                                    <label for="billing_country"><strong>State</strong></label>
                                    <select name="billing_country" form="carform" class="form-control" id="billing_country">
                                       <option value="volvo">Country</option>
                                       <option value="saab">Saab</option>
                                       <option value="opel">Opel</option>
                                       <option value="audi">Audi</option>
                                    </select>
                                 </div>
                                    <div class="form-group">
                                    <label for="billing_address_1"><strong>Address 1</strong></label>
                                    <input type="text" class="form-control" id="billing_address_1" name="billing_address_1" placeholder="Address 1">
                                 </div>
                               <div class="form-group">
                                    <label for="billing_pin"><strong>Zip Code</strong></label>
                                    <input type="text" class="form-control" id="billing_pin" placeholder="Zip Code" name="billing_pin">
                                 </div>
                                   <div class="form-group">
                                    <label for="shipping_city"><strong>Store Banner</strong></label>
                                    <input type="file" class="form-control climg" id="store_banner" placeholder="Store Banner" name="store_banner" value="" required="">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_city"><strong>Profile Image</strong></label>
                                    <input type="file" class="form-control climg" id="store_banner" placeholder="Store Banner" name="store_banner" value="" required="">
                                 </div>
                                  <div class="form-group">
                                    <label for="shipping_city"><strong>Facebook</strong></label>
                                    <input type="text" class="form-control" id="shipping_city" placeholder="Facebook" name="shipping_city">
                                 </div>
                                  <div class="form-group">
                                    <label for="shipping_city"><strong>Instagram</strong></label>
                                    <input type="text" class="form-control" id="shipping_city" placeholder="Instagram" name="shipping_city">
                                 </div>
                              </div>
                              <!--Manage Addresses-->
                              <div class="col-md-6" style="padding-right: 30px;">
                                
                                 <div class="form-group">
                                    <label for="shipping_contact_no"><strong>Last Name *</strong></label>
                                    <input type="text" class="form-control" id="shipping_contact_no" placeholder="Last Name" name="shipping_contact_no" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_company"><strong>Password</strong></label>
                                    <input type="text" class="form-control" id="shipping_company" placeholder="Shipping Company" name="shipping_company">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_country_code"><strong>Store URL</strong></label>
                                   <input type="text" class="form-control" id="store_url" placeholder="Store URL" name="store_url" value="" readonly="">
                                 </div>
                                   <div class="form-group">
                                    <label for="shipping_country_code"><strong>Contact No</strong></label>
                                      <input type="text" class="form-control" id="store_url" placeholder="12345678" name="store_url" value="" readonly="">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_country"><strong>Country</strong></label>
                                    <select name="shipping_country" form="carform" class="form-control">
                                       <option value="volvo">Country</option>
                                       <option value="saab">Saab</option>
                                       <option value="opel">Opel</option>
                                       <option value="audi">Audi</option>
                                    </select>
                                 </div>
                                    <div class="form-group">
                                    <label for="billing_address_2"><strong>Address 2</strong></label>
                                    <input type="text" class="form-control" id="billing_address_2" placeholder="Country Code" name="billing_address_1">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_city"><strong>City</strong></label>
                                    <input type="text" class="form-control" id="shipping_city" placeholder="City" name="shipping_city">
                                 </div>
                                <div class="form-group">
                                    <label for="shipping_city"><strong>Store Logo</strong></label>
                                   <input type="file" class="form-control climg" id="store_banner" placeholder="Store Banner" name="store_banner" value="" required="">
                                 </div>
                                 <div class="form-group">
                                    <label for="shipping_city"><strong>Store Discription</strong></label>
                                   <textarea rows="2" cols="50" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                              </textarea>
                                 </div>
                               <div class="form-group">
                                    <label for="shipping_city"><strong>Youtube</strong></label>
                                    <input type="text" class="form-control" id="shipping_city" placeholder="Youtube" name="shipping_city">
                                 </div>
                              </div>
                              <!--Billing Address-->
                           </div>
                           <div class="row">
                              <div class="col-md-4 field-label-responsive"></div>
                              <div class="col-md-5 mb-2 mr-sm-2 mb-sm-0">
                                 <button type="submit" class="btn btn-warning">Register</button>   <button type="submit" class="btn btn-danger">Cancel</button>
                              </div>
                           </div>
                          
                        </form>
                                        <!-- <form role="form" class="form-horizontal" method="post"  action="{{ action('CustomerController@upgradeVendor') }}" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                              <label for="f_name" class="col-sm-4 control-label"> First Name <span style="color:red;">*</span></label>

                                              <div class="col-sm-4">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <input type="text" class="form-control" placeholder="First Name" name="f_name"  value="{{$customer_data->f_name}}" required/>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="l_name" class="col-sm-4 control-label"> Last Name</label>
                                              <div class="col-sm-4">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <input type="text" class="form-control" placeholder="Last Name"  name="l_name"  value="{{$customer_data->l_name}}"/>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="customer_name" class="col-sm-4 control-label"> User Name <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <input type="text" class="form-control" placeholder="User Name"  name="user_name"  value="{{$customer_data->customer_name}}" required/>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="password" class="col-sm-4 control-label"> Password <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="password" class="form-control" id="password" placeholder="Password"  name="password" minlength="4"required/>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label  class="col-sm-4 control-label"> Store Name <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" onchange="return $.ajax({url: '/is-store-available', method: 'post', headers: {'X-STORE-NAME':$('#store_name').val(),'X-CSRF-TOKEN': jQuery('meta[name=csrf-token]').attr('content')} }).done(function(s) { if(s==0){$('#store_name').css('border', '1px solid green');}else{ $('#store_name').css('border', '1px solid red'); return false; } }).error(function (e){ $(this).css('border', '1px solid red'); });" onKeyUp="return document.getElementById('store_url').value=encodeURI(document.getElementById('store_name').value)" id="store_name" placeholder="Store Name"  name="store_name" value="" required/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="text" class="col-sm-4 control-label"> Store URL</label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="store_url" placeholder="Store URL"  name="store_url" value="" readonly />
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="password" class="col-sm-4 control-label"> Website</label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="website" placeholder="Website"  name="website" value="" />
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="mobile" class="col-sm-4 control-label"> Email <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="email" class="form-control" id="email" placeholder="Email"  name="email" value="{{$customer_data->email}}" required/>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="mobile" class="col-sm-4 control-label"> Contact No <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" value="{{$customer_data->contact_no}}" onkeypress="return return isNumberKey(event)" required/>
                                                 <span id="errmsg" style="color:red"></span>
                                              </div>
                                            </div>
                                          
                                            <div class="form-group">
                                              <label for="password" class="col-sm-4 control-label"> Country</label>
                                              <div class="col-sm-4">
                                                 <select class="form-control dateyear" name="country" onchange="get_country_code(this.value); get_state(this.value);" >
                                                    <option value="">Select Country</option>
                                                    @foreach($country as $country )
                                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                    @endforeach

                                                </select>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="password" class="col-sm-4 control-label"> State</label>
                                              <div class="col-sm-4">
                                                 <select class="form-control dateyear" name="state" id="state" onchange="get_city(this.value);">
                                                    <option value="">Select State</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="password" class="col-sm-4 control-label"> City</label>
                                              <div class="col-sm-4">
                                                <select class="form-control dateyear" name="city" id="city" >
                                                    <option value="">Select City</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="address_1" class="col-sm-4 control-label"> Address 1</label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="address_1" placeholder=" Address 1"  name="address1" value="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="text" class="col-sm-4 control-label"> Address 2</label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="address_2" placeholder=" Address 2" name="address2" value=""/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="zip_code" class="col-sm-4 control-label"> Zip Code</label>
                                              <div class="col-sm-4">
                                                <input type="text" class="form-control" id="zip_code" placeholder=" Zip Code"  name="zip_code" value=""  onkeypress="return return isNumberKey(event);"/>
                                              </div>
                                            </div>

                                           <div class="form-group">
                                              <label for="store_banner" class="col-sm-4 control-label"> Store Banner <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="file" class="form-control climg" id="store_banner" placeholder="Store Banner"  name="store_banner" value="" required/>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="store_logo" class="col-sm-4 control-label"> Store Logo <span style="color:red;">*</span></label>
                                              <div class="col-sm-4">
                                                <input type="file" class="form-control climg" id="store_logo"  name="store_logo" value="" required/>
                                              </div>
                                            </div>
                                             
                                             <div class="form-group">
                                           <div class="col-sm-4"> <label>Profile Image</label></div>
                                              <div class="col-sm-4">
                                               
                                                <input type="file" class="form-control climg" id="profile_image" name="profile_image" value=""/>
                                              </div>
                                            </div> 
                                              <div class="form-group" >
                                           
                                              <div class="col-sm-12" style="margin-top: 20px;">
                                              <textarea rows="2" cols="50" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                              </textarea>

                                              </div>
                                            </div>
                                             <div class="form-group">
                                           
                                              <div class="col-sm-4">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" id="facebook" placeholder="Facebook"  name="facebook" value=""/>
                                              </div>
                                            </div>

                                             <div class="form-group">
                                           
                                              <div class="col-sm-4">
                                                <label>Youtube</label>
                                                <input type="text" class="form-control" id="youtube" placeholder="Youtube"  name="youtube" value=""/>
                                              </div>
                                            </div>

                                             <div class="form-group">
                                               
                                           <div class="col-sm-4">
                                                 <label>Instagram</label>
                                                <input type="text" class="form-control" id="instagram" placeholder="Instagram"  name="instagram" value=""/>
                                              </div>
                                            </div>
                                          
                                             
                                           
                                            <div class="row" style="margin-bottom: 20px;">
                                           
                                              <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                                                <button type="reset" class="btn btn-default btn-sm"> Cancel</button>
                                              </div>
                                            </div>
                                        </form> -->
                                        <div class="clearfix"></div>
                                  </div>
                              </div>
                          </div> 
                          <div class="tab-pane" id="super_vendor">                
                              <div class="row">
                                  <h1>Upgrade Profile For Super Vendor</h1><br>

                                  <div class="col-md-9">
                                    
                                        <form role="form" class="form-horizontal" method="post"  action="javascript:void(0)" onsubmit="return bootbox.alert('Thanks for upgrading your profile.')" enctype="multipart/form-data">
                                           <h5>Connect your store to your own domain name with personal branding</h5>
                                             <div class="form-group">
                                              <label for="instagram" class="col-sm-4 control-label">Your Domain</label>

                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" id="domain" placeholder="Domain name"  name="domain" value=""/>
                                              </div>
                                            </div>
                                          
                                             <div class="row"><brs></div>
                                           
                                            <div class="row">
                                              <div class="col-sm-4"> </div>
                                              <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                                                <button type="reset" class="btn btn-default btn-sm"> Cancel</button>
                                              </div>
                                            </div>
                                        </form>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane" id="home5">                
                              <div class="row">
                                  <h1>Change Password</h1><br><br><br>

                                  <div class="col-md-9">
                                      <form class="form-horizontal" method="post" action="/change-customer-pass" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                          <fieldset>

                                          <!-- Text input-->  <div class="form-group">
                                            <label class="col-md-3 control-label" for="textinput">Old Password </label>  
                                            <div class="col-md-4">
                                            <input id="old_password" name="old_password" type="password" placeholder="Enter Old Password" class="form-control input-md"  value="" >
                                              <span style="color: red" id="error_old_password"></span>
                                            </div>
                                          </div><br><br>

                                          <div class="form-group">
                                            <label class="col-md-3 control-label" for="textinput">New Password </label>  
                                            <div class="col-md-4">
                                            <input id="new_password" name="password" type="password" placeholder="Enter New Password" class="form-control input-md"  value="" >
                                              <span style="color: red" id="error_new_password"></span>
                                            </div>
                                          </div><br><br>

                                          <div class="form-group">
                                            <label class="col-md-3 control-label" for="textinput">Re-New Password </label>  
                                            <div class="col-md-4">
                                            <input id="re-pass" name="re-pass" type="password" placeholder="Enter Re-New Password" class="form-control input-md"   >
                                            <span style="color: red" id="error_re_new_password"></span>
                                            </div>
                                          </div><br><br>

                                          <!-- Button -->
                                          <div class="form-group">
                                            <label class="col-md-3 control-label" for="singlebutton"></label>
                                            <div class="col-md-4">
                                              <button id="change_pass" name="singlebutton" class="btn btn-primary" type="submit" onclick="confirm_pass(event);">Update</button>
                                            </div>
                                          </div>

                                          </fieldset>
                                      </form>
                                  </div>
                              </div>
                          </div> 

                          <div class="tab-pane" id="orders">                
                              <div class="row">
                                  <h1>My Orders</h1><br><br><br>
                                  <div class="col-md-9">
                                    <div id="content" class="site-content" tabindex="-1">
                                      <div class="container">
                                          <div id="primary" class="content-area">
                                            <main id="main" class="site-main">


                                              @foreach($order_list as $order_list)
                                                <div class="row brd">
                                                 <!--  <div class="heading">
                                                    <div class="row">
                                                        <div class="col-md-8"> <span class="btn btn-secondary">order id no</span></div>
                                                        <div class="col-md-2"> <span class="btn btn-secondary">Need Help</span></div>
                                                        <div class="col-md-2"> <span class="btn btn-secondary">Track</span></div>
                                                    </div>
                                                  </div>-->
                                                  <?php $attributes = json_decode($order_list->product_attributes); ?>


                                                    <div class="row">
                                                      <div class="col-md-3">
                                                        <table class="shop_table shop_table_responsive cart">
                                                            <tbody>
                                                              <tr class="cart_item">
                                                                <td class="product-thumbnail">
                                                                  <b> Order id: <a href="/order-details/{{ $order_list->order_no}}">{{ $order_list->order_no}}</a></b>
                                                                </td> 
                                                              </tr>
                                                            </tbody>
                                                        </table>
                                                      </div> 
                                                      <div class="col-md-2 ">
                                                        <table class="shop_table shop_table_responsive cart">
                                                            <tbody>
                                                              <tr class="cart_item">
                                                                <td class="product-thumbnail">
                                                                    <a href="product-details/{{$order_list->slug}}"><img width="180" height="180" src="{{getenv('URL')}}{{$attributes->img}}" alt=""></a>
                                                                </td> 
                                                              </tr>
                                                            </tbody>
                                                        </table>
                                                      </div> 
                                                      <div class="col-md-7">
                                                         <table class="shop_table shop_table_responsive cart">
                                                            <tbody>
                                                              <tr class="cart_item">
                                                                <td data-title="Product" class="product-name">
                                                                    <a href="product-details/{{$order_list->slug}}">{{$order_list->product_name}}</a>
                                                                </td>

                                                                <td data-title="Price" class="product-price">
                                                                    <span class="amount">{{$order_list->product_price}}</span>
                                                                </td>

                                                                <?php  $deliver_date =  date('D d F, Y', strtotime($order_list->deliver_date)) ;?>
                                                                <td data-title="Delivered" class="product-subtotal">
                                                                    <span class="amount">Delivered on {{$deliver_date}} </span>
                                                                </td>
                                                              </tr>

                                                           <tr class="cart_item">
                                                                <td data-title="Product" class="product-name">
                                                                    <span> 
                                                                      @if(isset($attributes->color))
                                                                        Color: <input type="color" id="body" name="color" value="{{$attributes->color}}" disabled="" />
                                                                      @endif 
                                                                      @if(isset($attributes->size))
                                                                      Size : 
                                                                      @endif 
                                                                      <br><br>Seller: {{$order_list->f_name}} {{$order_list->l_name}} 
                                                                    </span>
                                                                  </td>

                                                                  <td data-title="OFFERS" class="product-price">
                                                                      <!-- <span class="amount">OFFERS:1 </span> -->
                                                                  </td>
                                                                  <td data-title="Return policy" class="product-subtotal">
                                                                     <!--  <span class="amount">Return policy ended on Jun 19th '18</span> -->
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                        </table>    
                                                      </div>
                                                    </div>
                                               
                                                <!--<div class="row">
                                                    <div class="refund brd">
                                                        <span class="col-md-6"><h5>Refund Status</h5></span>
                                                        <span class="col-md-6 alrtsa"><a href="#">View Detail</a></span>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-12 bgs">
                                                        
                                                          <table class="shop_table shop_table_responsive cart">
                                                            <tbody>
                                                              <tr class="cart_item">
                                                                  <td data-title="Product" class="product-name">
                                                                      <a href="">Refund To: Original payment mode </a>
                                                                  </td>
                                                                  <td data-title="Price" class="product-price">
                                                                    <span class="amount">$ 494.0</span>
                                                                  </td>
                                                                  <td data-title="Delivered" class="product-subtotal">
                                                                      <span class="amount">$ 494.0 as refund will be transferred to your Original payment mode within 6 business days (Bank holidays not included).</span>
                                                                  </td>
                                                              </tr>
                                                              <tr class="cart_item">
                                                                <td data-title="Product" class="product-name"><a href="">Refund ID:124793731</a></td>
                                                                <td class="cart_item"></td>
                                                                <td class="cart_item"></td>
                                                              </tr>
                                                              <tr class="cart_item">
                                                                <td data-title="Product" class="product-name">
                                                                  <a href="">COMPLETED</a>
                                                                </td>
                                                                <td class="cart_item"></td>
                                                                <td class="cart_item"></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                  </div> -->
                                                </div> 
                                              @endforeach
                                            </main><!-- #main -->
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div> 


    <!-- instagram -->
    <div class="tab-pane" id="instagram_div">                
        <div class="row">
            <h1>My Blog</h1><br><br><br>
            <div class="col-md-9">
              <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <div id="primary" class="content-area">
                      <main id="main" class="site-main">
                        @if($instagram == '#')
                          <div class="row brd">
                              <div class="row">
                                <div class="col-sm-12">
                                @foreach($instagram_media as $key => $instagram)
                                  <div class="col-sm-3">
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#{{$instagram->id}}"><img src="{{$instagram->images->thumbnail->url}}"></a>
                                  
                                  <!-- instagram modal -->
                                    <div class="modal fade" id="{{$instagram->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px;background-color: #000;width: 30px;"> ×</button>
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-sm-12">
                                            <div class="col-sm-8" style="border-right: 1px solid black;">
                                                <img src="{{$instagram->images->standard_resolution->url}}">
                                            </div>
                                            <div class="col-sm-4">
                                              <b>@</b>{{$instagram->user->username}}
                                              <hr>
                                              @if(isset($instagram->caption) && !empty($instagram->caption))
                                              <p>{{$instagram->caption->text}}</p>
                                              @endif
                                              <hr>
                                              @if(is_array($instagram_media))
                                              {{$key+1}}/{{count($instagram_media)}}
                                              @endif
                                               | 
                                              <a class="btn-social btn-instagram" href="{{$instagram->link}}" target="_blank"><span class="fa fa-instagram"></span> Instagram</a>
                                              | {{$instagram->likes->count}} <i class="fa fa-heart" style="font-size:15px;color:red"></i>
                                            </div>
                                          </div>
                                          </div>
                                          <!-- <img src="{{$instagram->images->standard_resolution->url}}"> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  <!-- /instagram modal -->
                                @endforeach
                                </div>
                              </div>
                          </div> 
                          @else
                          <a class="btn btn-block btn-social btn-instagram" href="{{$instagram}}"><span class="fa fa-instagram"></span> Sign in with Instagram
                        </a>
                        @endif
                        
                      </main><!-- #main -->
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div> 
    <!-- /instagram -->
    <!-- support pan -->
    <div class="tab-pane" id="support_div">                
      <div class="row">
          <h1>Support Requests</h1><br><br><br>
          <div class="col-md-9">
            <div id="content" class="site-content" tabindex="-1">
              <div class="container">
                  <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                      <table class="table table-bordered" id="support_table">
                        <thead>
                          <tr>
                            <th>Sr No</th>
                            <th>Order ID</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($support_list as $support_item)
                          <tr>
                            <td>{{$support_item->id}}</td>
                            <td>{{$support_item->order_id}}</td>
                            <td>{{$support_item->title}}</td>
                            <td>{{substr($support_item->description, 0, 30)}}</td>
                            <td>
                              @if($support_item->status == 0)
                              <b class="text-warning">Pending</b>
                              @elseif($support_item->status == 0)
                              <b class="text-danger">Contacted</b>
                              @else
                                <b class="text-success">Solved</b>
                              @endif
                            </td>
                            <td>
                              <a href="javascript:void()" data-toggle="modal" data-target="#view_data_{{$support_item->id}}"><i class="fa fa-eye"></i></a>
                              <!-- modal support -->
                              <div class="modal fade" id="view_data_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                <style type="text/css">
                                  .form-group{
                                    padding: 0px;
                                  }
                                  .form-control{
                                    border: 1px solid #ccc;
                                  }
                                </style>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
                                  <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Support Topic</h4>
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
                              <a href="javascript:void()" data-toggle="modal" data-target="#supportReplyModel_{{$support_item->id}}"><i class="fa fa-envelope-o"></i></a>
                              <!-- modal support -->
                                <div class="modal fade" id="supportReplyModel_{{$support_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                  <style type="text/css">
                                    .form-group{
                                      padding: 0px;
                                    }
                                    .form-control{
                                      border: 1px solid #ccc;
                                    }
                                  </style>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; position: absolute; top: 20px; right:50px; font-size: 35px; background-color: #000; width: 30px;"> ×</button>
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Reply For : Camera cable not found</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                              <div class="col-sm-12">
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
                                               <form action="{{getenv('APP_URL')}}/add-ticket-response" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="ticket_id" value="{{$support_item->id}}">
                                                  <div class="form-group">
                                                    <label for="message">Message : </label>
                                                    <textarea class="form-control" name="response" id="message" placeholder="I didn't the data cable for my camera"></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-default">Submit</button>
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
                      
                    </main><!-- #main -->
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div> 
    <!-- support pan -->



                          <!-- <div class="tab-pane" id="about"> 
                              <div class="">
                                  <h1>PhonePe Wallet</h1>
                                  <p>because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                              </div>
                          </div> -->

                        <!--   <div class="tab-pane" id="about1"> 
                              <div class="">
                                  <h1>Gift Card</h1>
                                  <p>because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                              </div>
                          </div>

                          <div class="tab-pane" id="about2"> 
                              <div class="">
                                  <h1>Why is my Card being saved on Flipkart?</h1>
                                  <p>It's quicker. You can save the hassle of typing in the complete card information every time you shop at Flipkart by saving your card details. You can make your payment by selecting the saved card of your choice at checkout. While this is obviously faster, it is also very secure.</p>                 
                              </div>
                          </div>

                          <div class="tab-pane" id="services"> 
                              <div class="">
                                  <h1>No rewards yet !</h1>
                                  <p>Earn rewards from Flipkart to see them here.</p>                 
                              </div>
                          </div> -->

                          <div class="tab-pane" id="services2"> 
                              <div class="row" >
                                <div class="col-md-9">
                                  <h1>Your Reviews & Ratings</h1>
                                  <br><br>
                                  <!-- <p>You have not rated or reviewed any product yet!</p> -->
                                
                                  <table style="overflow-y:auto; height:10%;">
                                      <tr><h4>Product Reviews & Ratings</h4></tr>
                                      <thead>
                                        <th>Product Name</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Approve Status</th>
                                      </thead>

                                      <tbody>
                                       @foreach($product_rating as $product_rating1)
                                           <tr>
                                            <td>{{$product_rating1->product_name}}</td>
                                            <?php  $width =  $product_rating1->rating*20; ?>

                                            <td class="star-rating" title="Rated {{$product_rating1->rating}} out of 5"><span style="width:{{$width}}%; "></span></td>

                                            <td >{{$product_rating1->comment}}</td>


                                            @if($product_rating1->admin_approval =='a')
                                            <td style="color: green"><b>Approved</b></td>
                                            @else
                                            <td style="color: red"><b>Not approve</b></td>
                                            @endif
                                          </tr> 
                                         @endforeach 
                                      </tbody>
                                  </table>
                                </div>  
                              </div>
                          </div>


                          <div class="tab-pane" id="services3"> 
                              <div class="row" >
                                <div class="col-md-9">
                                  <h1>Your Reviews & Ratings</h1>
                                  <br><br>
                                  <table style="overflow-y:auto;  height:50%;">
                                      <tr><h4>Store Reviews & Ratings</h4></tr>
                                      <thead>
                                        <th>Store Name</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Approve Status</th>
                                      </thead>

                                      <tbody>
                                       @foreach($store_rating as $store_rating1)
                                           <tr>
                                            <td>{{$store_rating1->product_name}}</td>
                                            <?php  $width =  $store_rating1->rating*20; ?>

                                            <td class="star-rating" title="Rated {{$store_rating1->rating}} out of 5"><span style="width:{{$width}}%; "></span></td>

                                            <td >{{$store_rating1->comment}}</td>


                                            @if($store_rating1->admin_approval =='a')
                                            <td style="color: green"><b>Approved</b></td>
                                            @else
                                            <td style="color: red"><b>Not approve</b></td>
                                            @endif
                                          </tr> 
                                         @endforeach 
                                      </tbody>
                                  </table>
                                </div>  
                              </div>
                          </div>

                         <!--  <div class="tab-pane" id="services3"> 
                              <div class="">
                                  <h1>All caught up!</h1>
                                  <p>There are no new notifications for you.</p>                 
                              </div>
                          </div> -->

                          <div class="tab-pane" id="services4"> 
                              <div class="row">
                                <div class="col-md-9">
                                  <h1>My Wishlist</h1>
                                   <br> <br>
                                  <form class="woocommerce" method="post" id="yith-wcwl-form">
                                          <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">

                                          <!-- <div class="wishlist-title "><h2>My wishlist</h2></div> -->
                                            @if(count($wishlistData) > 0)

                                          <table id="wishlist_table">

                                              <thead>
                                                  <tr>

                                                      <th class="product-remove"></th>

                                                      <th class="product-thumbnail"></th>

                                                      <th class="product-name">
                                                          <span class="nobr">Product Name</span>
                                                      </th>

                                                      <th class="product-price">
                                                          <span class="nobr">Unit Price</span>
                                                      </th>
                                                      <th class="product-stock-stauts">
                                                          <span class="nobr">Stock Status</span>
                                                      </th>

                                                      <th class="product-add-to-cart"></th>

                                                  </tr>
                                              </thead>

                                              <tbody>
                                                @foreach($wishlistData as $wishlist)
                                                  <tr>
                                                      <td class="product-remove">
                                                          <div>
                                                              <a title="Remove this product" class="remove-wishlist remove_from_wishlist" href="/remove-wishlist/{{$wishlist->pk_cw_id}}">×</a>
                                                          </div>
                                                      </td>

                                                      <td class="product-thumbnail">
                                                          <a href="single-product.html"><img width="180" height="180" alt="1" class="wp-post-image" src="{{getenv('URL')}}{{$wishlist->product_img}}"></a>
                                                      </td>

                                                      <td class="product-name">
                                                          <a href="product-details/{{$wishlist->slug}}">
                                                            {{$wishlist->product_name}}
                                                          </a>
                                                      </td>

                                                      <td class="product-price">
                                                          <span class="electro-price"><span class="amount">${{$wishlist->current_price}}</span></span>
                                                      </td>

                                                      <td class="product-stock-status">
                                                          <span class="in-stock">{{$wishlist->availability}}</span>
                                                      </td>

                                                      <td class="product-add-to-cart wish-profile-cart">
                                                          <!-- Date added -->

                                                          <!-- Add to cart button -->
                                                          <a href="javascript:void(0)" onclick="addToCart()" class="button profile-wish"> Add to Cart</a>
                                                          <input type="hidden" name="quantity" id="quantity" value="1">
                                                          <input type="hidden" name="attr_color" id="attr_color" value="">
                                                          <input type="hidden" name="product_id" id="product_id" value="{{$wishlist->product_id}}">
                                                          <!-- Change wishlist -->

                                                          <!-- Remove from wishlist -->
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>

                                              <tfoot>
                                                  <tr>
                                                      <td colspan="6"></td>
                                                  </tr>
                                              </tfoot>

                                          </table>
                                           @else 

                                          <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">
                                            <tr> <h4>There is no data.</h4></tr>
                                          </table>
                                            @endif
                                          <input type="hidden" value="85fe311a9d" name="yith_wcwl_edit_wishlist" id="yith_wcwl_edit_wishlist"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                  </form>  
                                </div>               
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div> 
      </main><!-- #main -->
  </div><!-- #primary -->

</div><!-- .col-full -->
</div>

<section class="brands-carousel">
<h2 class="sr-only">Brands Carousel</h2>
<div class="container">
  <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">
      <div class="item">
          <a href="#">
              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Acer</h4>
                      </div><!-- /.info -->
                  </figcaption>

                   <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Apple</h4>
                      </div><!-- /.info -->
                  </figcaption>

                   <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Asus</h4>
                      </div><!-- /.info -->
                  </figcaption>

                   <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Dell</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Gionee</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>HP</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>HTC</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>IBM</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Lenova</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>LG</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Micromax</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


      <div class="item">

          <a href="#">

              <figure>
                  <figcaption class="text-overlay">
                      <div class="info">
                          <h4>Microsoft</h4>
                      </div><!-- /.info -->
                  </figcaption>

                  <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">

              </figure>
          </a>
      </div><!-- /.item -->


  </div><!-- /.owl-carousel -->

</div>
</section>
</div> 
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#support_table').DataTable();
    $('#wishlist_table').DataTable();
  });
</script>

@include('layouts/footer')

