
@include('single-product-sections/header')

<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <div class="tab-pane" id="tab-specification">
           {!! Session::has('msg') ? Session::get("msg") : '' !!}
                        <form role="form" class="form-horizontal" method="post"  action="{{ action('CustomerController@upgradeVendor') }}" enctype="multipart/form-data">
                            <div class="form-group">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                              <label for="f_name" class="col-sm-4 control-label"> First Name <span style="color:red;">*</span></label>

                              <div class="col-sm-8">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="First Name" name="f_name"  value="{{$customer_data->f_name}}" required/>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="l_name" class="col-sm-4 control-label"> Last Name</label>
                              <div class="col-sm-8">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Last Name"  name="l_name"  value="{{$customer_data->l_name}}"/>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="customer_name" class="col-sm-4 control-label"> User Name <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="User Name"  name="user_name"  value="{{$customer_data->customer_name}}" required/>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="password" class="col-sm-4 control-label"> Password <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" placeholder="Password"  name="password" minlength="4"required/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label  class="col-sm-4 control-label"> Store Name <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="store_name" placeholder="Store Name"  name="store_name" value="" required/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="text" class="col-sm-4 control-label"> Store URL</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="store_url" placeholder="Store URL"  name="store_url" value="" />
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="password" class="col-sm-4 control-label"> Website</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="website" placeholder="Website"  name="website" value="" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="mobile" class="col-sm-4 control-label"> Email <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" placeholder="Email"  name="email" value="{{$customer_data->email}}" required/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="text" class="col-sm-4 control-label"> Country Code</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control"  placeholder=" Contry Code"  name="contact_country_code" id="contact_country_code"  readonly value=""/>
                              
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="mobile" class="col-sm-4 control-label"> Contact No <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="number" class="form-control" id="contact_no" placeholder="Contact No" name="contact_no" value="{{$customer_data->contact_no}}" required/>
                              </div>
                            </div>
                          
                            <div class="form-group">
                              <label for="password" class="col-sm-4 control-label"> Country</label>
                              <div class="col-sm-8">
                                 <select class="form-control" name="country" onchange="get_country_code(this.value); get_state(this.value);" >
                                    <option value="">Select Country</option>
                                    @foreach($country as $country )
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach

                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="password" class="col-sm-4 control-label"> State</label>
                              <div class="col-sm-8">
                                 <select class="form-control" name="state" id="state" onchange="get_city(this.value);">
                                    <option value="">Select State</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="password" class="col-sm-4 control-label"> City</label>
                              <div class="col-sm-8">
                                <select class="form-control" name="city" id="city" >
                                    <option value="">Select City</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="address_1" class="col-sm-4 control-label"> Address 1</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="address_1" placeholder=" Address 1"  name="address1" value="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="text" class="col-sm-4 control-label"> Address 2</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="address_2" placeholder=" Address 2" name="address2" value=""/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="zip_code" class="col-sm-4 control-label"> Zip Code</label>
                              <div class="col-sm-8">
                                <input type="number" class="form-control" id="zip_code" placeholder=" Zip Code"  name="zip_code" value=""/>
                              </div>
                            </div>

                           <div class="form-group">
                              <label for="store_banner" class="col-sm-4 control-label"> Store Banner <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="file" class="form-control" id="store_banner" placeholder="Store Banner"  name="store_banner" value="" required/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="store_logo" class="col-sm-4 control-label"> Store Logo <span style="color:red;">*</span></label>
                              <div class="col-sm-8">
                                <input type="file" class="form-control" id="store_logo"  name="store_logo" value="" required/>
                              </div>
                            </div>

                             <div class="form-group">
                              <label for="profile_image" class="col-sm-4 control-label"> Profile Image</label>
                              <div class="col-sm-8">
                                <input type="file" class="form-control" id="profile_image" name="profile_image" value=""/>
                              </div>
                            </div> 

                             <div class="form-group">
                              <label for="facebook" class="col-sm-4 control-label"> Facebook</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="facebook" placeholder="Facebook"  name="facebook" value=""/>
                              </div>
                            </div>

                             <div class="form-group">
                              <label for="youtube" class="col-sm-4 control-label">Youtube</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="youtube" placeholder="Youtube"  name="youtube" value=""/>
                              </div>
                            </div>

                             <div class="form-group">
                              <label for="instagram" class="col-sm-4 control-label">Instagram</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="instagram" placeholder="Instagram"  name="instagram" value=""/>
                              </div>
                            </div>
                          
                             
                           
                            <div class="row">
                              <div class="col-sm-4"> </div>
                              <div class="col-sm-8">
                                <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                                <button type="reset" class="btn btn-default btn-sm"> Cancel</button>
                              </div>
                            </div>
                        </form>
        </div> 
    </div>
</div>



<footer id="colophon" class="site-footer">                
@include('layouts/footer') 