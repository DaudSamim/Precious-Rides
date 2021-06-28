@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-4 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Default Style</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Default Style</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <div class="form-check-label">
                                <div class="checkbox checkbox-primary m-0">
                                    <input id="form-check-input" class="styled form-check-input" type="checkbox"
                                           checked="">
                                    <label for="form-check-input">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right m-r-5">Login</button>
                        <button type="submit" class="btn btn-outline-primary pull-right m-r-5">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Form Horizontal</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Form Horizontal</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal" action="#" method="POST">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email address</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="Enter email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="form-check-label">
                                    <div class="checkbox checkbox-primary m-t-0 p-t-0">
                                        <input id="form-check-input1" class="styled form-check-input"
                                               type="checkbox" checked="">
                                        <label for="form-check-input1">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right m-r-5">Login
                                </button>
                                <button type="submit" class="btn btn-outline-primary pull-right m-r-5">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Form Styled</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Styled Form</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="index.html" method="post">
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                <input type="text" name="name"
                                       class="form-control"
                                       placeholder="Please enter your first name" value=""
                                       tabindex="1" maxlength="35"
                                       required>
                                <label class="control-label">FIRSTNAME</label>
                            </div>
                            <div class="col-lg-12 m-t-16 sm-form-design">
                                <input type="text" name="lastname"
                                       class="form-control"
                                       placeholder="Please enter your first last name"
                                       value=""
                                       tabindex="1"
                                       maxlength="35">
                                <label class="control-label">LASTNAME</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check-label">
                                        <div class="checkbox checkbox-primary m-0">
                                            <input id="form-check-input12" class="styled form-check-input"
                                                   type="checkbox"
                                                   checked="">
                                            <label for="form-check-input12">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right m-r-5">Login
                                </button>
                                <button type="submit" class="btn btn-outline-primary pull-right m-r-5">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Form Inline</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Form Inline</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-inline" action="#" method="POST">
                        <div class="form-group m-r-10">
                            <input type="email" class="form-control" id="exampleInputEmail2"
                                   placeholder="Enter email"/>
                        </div>
                        <div class="form-group m-r-10">
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                   placeholder="Password"/>
                        </div>
                        <div class="form-group m-r-10">
                            <div class="checkbox">
                                <div class="checkbox checkbox-primary m-0 p-l-0">
                                    <input id="form-check-input2" class="styled form-check-input" type="checkbox"
                                           checked="">
                                    <label for="form-check-input2">
                                        Stay sign in
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-r-5">Login</button>
                        <button type="submit" class="btn btn-outline-primary m-r-5">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Styled Form</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Styled Form</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="index.html" method="post">
                        <div class="row m-b-15">
                            <div class="col-lg-6 sm-form-design">
                                <input type="text" name="name" id="cf_name"
                                       class="form-control"
                                       placeholder="Please enter your first name" value=""
                                       tabindex="1" maxlength="35"
                                       required>
                                <label class="control-label">FIRSTNAME</label>
                            </div>
                            <div class="col-lg-6 sm-form-design res-xs-m-t-16 res-md-m-t-16">
                                <input type="text" name="lastname" id="cf_lastname"
                                       class="form-control"
                                       placeholder="Please enter your first last name"
                                       value=""
                                       tabindex="1"
                                       maxlength="35">
                                <label class="control-label">LASTNAME</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                <input type="text" name="email" id="cf_email"
                                       class="form-control h5-email"
                                       placeholder="Please enter your email address"
                                       value=""
                                       tabindex="1"
                                       maxlength="35" required>
                                <label class="control-label">EMAIL</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                                            <textarea name="message" id="cf_message"
                                                                      class="form-control" cols="30" rows="3"
                                                                      placeholder="Your message"
                                                                      tabindex="4"></textarea>
                                <label class="control-label">MESSAGE</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-6 sm-form-design">
                                <select class="form-control"
                                        required=""
                                        tabindex="3">
                                    <option value="">
                                        --None--
                                    </option>
                                    <option value="Andaman and Nicobar Islands">
                                        Andaman
                                        and
                                        Nicobar
                                        Islands
                                    </option>
                                    <option value="Andhra Pradesh">
                                        Andhra
                                        Pradesh
                                    </option>
                                    <option value="Arunachal Pradesh">
                                        Arunachal
                                        Pradesh
                                    </option>
                                    <option value="Assam">
                                        Assam
                                    </option>
                                    <option value="Bihar">
                                        Bihar
                                    </option>
                                    <option value="Chandigarh">
                                        Chandigarh
                                    </option>
                                    <option value="Chhattisgarh">
                                        Chhattisgarh
                                    </option>
                                    <option value="Dadra and Nagar Haveli">
                                        Dadra
                                        and
                                        Nagar
                                        Haveli
                                    </option>
                                    <option value="Daman and Diu">
                                        Daman
                                        and
                                        Diu
                                    </option>
                                    <option value="Delhi">
                                        Delhi
                                    </option>
                                    <option value="Goa">
                                        Goa
                                    </option>
                                    <option value="Gujarat">
                                        Gujarat
                                    </option>
                                    <option value="Haryana">
                                        Haryana
                                    </option>
                                    <option value="Himachal Pradesh">
                                        Himachal
                                        Pradesh
                                    </option>
                                    <option value="Jammu and Kashmir">
                                        Jammu
                                        and
                                        Kashmir
                                    </option>
                                    <option value="Jharkhand">
                                        Jharkhand
                                    </option>
                                    <option value="Karnataka">
                                        Karnataka
                                    </option>
                                    <option value="Kerala">
                                        Kerala
                                    </option>
                                    <option value="Lakshadweep">
                                        Lakshadweep
                                    </option>
                                    <option value="Madhya Pradesh">
                                        Madhya
                                        Pradesh
                                    </option>
                                    <option value="Maharashtra">
                                        Maharashtra
                                    </option>
                                    <option value="Manipur">
                                        Manipur
                                    </option>
                                    <option value="Meghalaya">
                                        Meghalaya
                                    </option>
                                    <option value="Mizoram">
                                        Mizoram
                                    </option>
                                    <option value="Nagaland">
                                        Nagaland
                                    </option>
                                    <option value="Odisha">
                                        Odisha
                                    </option>
                                    <option value="Puducherry">
                                        Puducherry
                                    </option>
                                    <option value="Punjab">
                                        Punjab
                                    </option>
                                    <option value="Rajasthan">
                                        Rajasthan
                                    </option>
                                    <option value="Sikkim">
                                        Sikkim
                                    </option>
                                    <option value="Tamil Nadu">
                                        Tamil
                                        Nadu
                                    </option>
                                    <option value="Telangana">
                                        Telangana
                                    </option>
                                    <option value="Tripura">
                                        Tripura
                                    </option>
                                    <option value="Uttar Pradesh">
                                        Uttar
                                        Pradesh
                                    </option>
                                    <option value="Uttarakhand">
                                        Uttarakhand
                                    </option>
                                    <option value="West Bengal">
                                        West
                                        Bengal
                                    </option>
                                </select>
                                <label class="control-label">STATE
                                    / COUNTY</label>
                            </div>
                            <div class="col-lg-6 sm-form-design res-xs-m-t-16 res-md-m-t-16">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Please enter your city pincode">
                                <label class="control-label">Pincode</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-12">
                                <button class="btn btn-primary pull-right" type="submit">Submit Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Styled Form</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Styled Form</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="index.html" method="post">
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                <input type="text" name="name"
                                       class="form-control"
                                       placeholder="Please enter your first name" value=""
                                       tabindex="1" maxlength="35"
                                       required>
                                <label class="control-label">FIRSTNAME</label>
                            </div>
                            <div class="col-lg-12 m-t-16 sm-form-design">
                                <input type="text" name="lastname"
                                       class="form-control"
                                       placeholder="Please enter your first last name"
                                       value=""
                                       tabindex="1"
                                       maxlength="35">
                                <label class="control-label">LASTNAME</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                <input type="text" name="email"
                                       class="form-control h5-email"
                                       placeholder="Please enter your email address"
                                       value=""
                                       tabindex="1"
                                       maxlength="35" required>
                                <label class="control-label">EMAIL</label>
                            </div>
                        </div>

                        <div class="row m-b-15">
                            <div class="col-lg-12 sm-form-design">
                                <select class="form-control"
                                        required=""
                                        tabindex="3">
                                    <option value="">
                                        --None--
                                    </option>
                                    <option value="Andaman and Nicobar Islands">
                                        Andaman
                                        and
                                        Nicobar
                                        Islands
                                    </option>
                                    <option value="Andhra Pradesh">
                                        Andhra
                                        Pradesh
                                    </option>
                                    <option value="Arunachal Pradesh">
                                        Arunachal
                                        Pradesh
                                    </option>
                                    <option value="Assam">
                                        Assam
                                    </option>
                                    <option value="Bihar">
                                        Bihar
                                    </option>
                                    <option value="Chandigarh">
                                        Chandigarh
                                    </option>
                                    <option value="Chhattisgarh">
                                        Chhattisgarh
                                    </option>
                                    <option value="Dadra and Nagar Haveli">
                                        Dadra
                                        and
                                        Nagar
                                        Haveli
                                    </option>
                                    <option value="Daman and Diu">
                                        Daman
                                        and
                                        Diu
                                    </option>
                                    <option value="Delhi">
                                        Delhi
                                    </option>
                                    <option value="Goa">
                                        Goa
                                    </option>
                                    <option value="Gujarat">
                                        Gujarat
                                    </option>
                                    <option value="Haryana">
                                        Haryana
                                    </option>
                                    <option value="Himachal Pradesh">
                                        Himachal
                                        Pradesh
                                    </option>
                                    <option value="Jammu and Kashmir">
                                        Jammu
                                        and
                                        Kashmir
                                    </option>
                                    <option value="Jharkhand">
                                        Jharkhand
                                    </option>
                                    <option value="Karnataka">
                                        Karnataka
                                    </option>
                                    <option value="Kerala">
                                        Kerala
                                    </option>
                                    <option value="Lakshadweep">
                                        Lakshadweep
                                    </option>
                                    <option value="Madhya Pradesh">
                                        Madhya
                                        Pradesh
                                    </option>
                                    <option value="Maharashtra">
                                        Maharashtra
                                    </option>
                                    <option value="Manipur">
                                        Manipur
                                    </option>
                                    <option value="Meghalaya">
                                        Meghalaya
                                    </option>
                                    <option value="Mizoram">
                                        Mizoram
                                    </option>
                                    <option value="Nagaland">
                                        Nagaland
                                    </option>
                                    <option value="Odisha">
                                        Odisha
                                    </option>
                                    <option value="Puducherry">
                                        Puducherry
                                    </option>
                                    <option value="Punjab">
                                        Punjab
                                    </option>
                                    <option value="Rajasthan">
                                        Rajasthan
                                    </option>
                                    <option value="Sikkim">
                                        Sikkim
                                    </option>
                                    <option value="Tamil Nadu">
                                        Tamil
                                        Nadu
                                    </option>
                                    <option value="Telangana">
                                        Telangana
                                    </option>
                                    <option value="Tripura">
                                        Tripura
                                    </option>
                                    <option value="Uttar Pradesh">
                                        Uttar
                                        Pradesh
                                    </option>
                                    <option value="Uttarakhand">
                                        Uttarakhand
                                    </option>
                                    <option value="West Bengal">
                                        West
                                        Bengal
                                    </option>
                                </select>
                                <label class="control-label">STATE
                                    / COUNTY</label>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit">Submit Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Input Types, Sizes, Input Groups</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-basketball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Input Types, Sizes, Input
                                    Groups</h5>
                                <div class="sm-inner-desc">
                                    Examples and usage guidelines for form control
                                    styles, layout options, and custom components for
                                    creating a wide variety of forms.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"
                                       target="_blank">Learn more about Bootstrap
                                        Forms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="controls">
                                <div class="form-group">
                                    <label>input-lg</label>
                                    <input class="form-control input-lg" placeholder=".input-lg">
                                </div>
                                <div class="form-group">
                                    <label>Default input</label>
                                    <input class="form-control" placeholder="Default input">
                                </div>
                                <div class="form-group">
                                    <label>input-sm</label>
                                    <input class="form-control input-sm" placeholder=".input-sm">
                                </div>
                                <div class="form-group">
                                    <label>input-lg</label>
                                    <select class="form-control input-lg">
                                        <option value="">.input-lg</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Default input</label>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>input-sm</label>
                                    <select class="form-control input-sm">
                                        <option value="">.input-sm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess1"
                                       aria-describedby="helpBlock2">
                                <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning1">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning1">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError1">Input with error</label>
                                <input type="text" class="form-control" id="inputError1">
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" placeholder=".col-xs-2">
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" placeholder=".col-xs-3">
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" placeholder=".col-xs-4">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="defaultinput">Default Input</label>
                                <input type="text" class="form-control"
                                       id="defaultinput"
                                       placeholder="Default Input">
                            </div>

                            <div class="form-group">
                                <label for="disabledinput">Disabled Input</label>
                                <input type="text" disabled="disabled"
                                       class="form-control" id="disabledinput"
                                       placeholder="Disabled Input">
                            </div>

                            <div class="form-group">
                                <label for="select">Select</label>
                                <select class="form-control" id="select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="multipleselect">Multiple Select</label>
                                <select multiple class="form-control" id="multipleselect">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Textarea1">Textarea</label>
                                <textarea class="form-control" id="Textarea1"
                                          rows="3"></textarea>
                            </div>

                            <div class="has-success">
                                <div class="checkbox">
                                    <div class="checkbox checkbox-success p-l-0">
                                        <input id="form-check-inputs" class="styled form-check-input"
                                               type="checkbox" checked="">
                                        <label for="form-check-inputs">
                                            Checkbox with success
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="has-warning">
                                <div class="checkbox">
                                    <div class="checkbox checkbox-warning p-l-0">
                                        <input id="form-check-inputw" class="styled form-check-input"
                                               type="checkbox" checked="">
                                        <label for="form-check-inputw">
                                            Checkbox with success
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="has-error">
                                <div class="checkbox">
                                    <div class="checkbox checkbox-danger p-l-0">
                                        <input id="form-check-inputd" class="styled form-check-input"
                                               type="checkbox" checked="">
                                        <label for="form-check-inputd">
                                            Checkbox with success
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                                <input type="text" class="form-control" id="inputSuccess5"
                                       aria-describedby="inputSuccess5Status">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span id="inputSuccess5Status" class="sr-only">(success)</span>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="control-label sr-only" for="inputGroupSuccess4">Input group with
                                    success</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" id="inputGroupSuccess4"
                                           aria-describedby="inputGroupSuccess4Status">
                                </div>
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <form class="form-default">
                                <div class="form-group">
                                    <label class="control-label">Left aligned
                                        icon</label>
                                    <div class="input-group input-group--style-1">
                                                <span class="input-group-addon">
                                                    <i class="ion-card"></i>
                                                </span>
                                        <input type="text" class="form-control input-lg"
                                               autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Left aligned
                                        icon</label>
                                    <div class="input-group input-group--style-1">
                                                <span class="input-group-addon">
                                                    <i class="ion-card"></i>
                                                </span>
                                        <input type="text" class="form-control" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Left aligned
                                        icon</label>
                                    <div class="input-group input-group--style-1">
                                                <span class="input-group-addon">
                                                    <i class="ion-card"></i>
                                                </span>
                                        <input type="text" class="form-control input-sm"
                                               autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Left aligned
                                        icon</label>
                                    <div class="input-group input-group--style-1">
                                                <span class="input-group-addon">
                                                    <i class="ion-card"></i>
                                                </span>
                                        <input type="text" class="form-control input-xs"
                                               autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Right aligned icon</label>
                                    <div class="input-group input-group--style-1">
                                        <input type="text" class="form-control form-control-lg"
                                               autocomplete="off">
                                        <span class="input-group-addon">
                                                    <i class="ion-card"></i>
                                                </span>
                                    </div>
                                </div>

                                <div class="form-default">
                                    <div class="form-group">
                                        <label>Fixed textarea</label>
                                        <textarea class="form-control input-lg noresize"
                                                  placeholder="This is a fixed height textarea"
                                                  rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Resizable textarea</label>
                                        <textarea class="form-control input-lg"
                                                  placeholder="You can manually resize this textarea"
                                                  rows="5"></textarea>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Checkbox & Radiobox</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <fieldset>
                                <legend>
                                    Basic
                                </legend>
                                <p>
                                    Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code>
                                    etc.
                                </p>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Default
                                    </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                        Primary
                                    </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        Success
                                    </label>
                                </div>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        Info
                                    </label>
                                </div>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">
                                        Warning
                                    </label>
                                </div>
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox6" type="checkbox" checked="">
                                    <label for="checkbox6">
                                        Check me out
                                    </label>
                                </div>
                                <p>Checkboxes without label text</p>
                                <div class="checkbox">
                                    <input type="checkbox" id="singleCheckbox1" value="option1"
                                           aria-label="Single checkbox One">
                                    <label></label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" id="singleCheckbox2" value="option2" checked=""
                                           aria-label="Single checkbox Two">
                                    <label></label>
                                </div>
                                <p>Inline checkboxes</p>
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label for="inlineCheckbox1"> Inline One </label>
                                </div>
                                <div class="checkbox checkbox-success checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                    <label for="inlineCheckbox2"> Inline Two </label>
                                </div>
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option1">
                                    <label for="inlineCheckbox3"> Inline Three </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend>
                                    Circled
                                </legend>
                                <p>
                                    <code>.checkbox-circle</code> for roundness.
                                </p>
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Simply Rounded
                                    </label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" checked="">
                                    <label for="checkbox8">
                                        Me too
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend>
                                    Radio
                                </legend>
                                <p>
                                    Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code>
                                    etc.
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <input type="radio" name="radio1" id="radio1" value="option1"
                                                   checked="">
                                            <label for="radio1">
                                                Small
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio" name="radio1" id="radio2" value="option2">
                                            <label for="radio2">
                                                Big
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio2" id="radio3" value="option1">
                                            <label for="radio3">
                                                Next
                                            </label>
                                        </div>
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio2" id="radio4" value="option2"
                                                   checked="">
                                            <label for="radio4">
                                                One
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <p>Radios without label text</p>
                                <div class="radio">
                                    <input type="radio" id="singleRadio1" value="option1" name="radioSingle1"
                                           aria-label="Single radio One">
                                    <label></label>
                                </div>
                                <div class="radio radio-success">
                                    <input type="radio" id="singleRadio2" value="option2" name="radioSingle1"
                                           checked="" aria-label="Single radio Two">
                                    <label></label>
                                </div>
                                <p>Inline radios</p>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                           checked="">
                                    <label for="inlineRadio1"> Inline One </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2"> Inline Two </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection