@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Add Customers</h6>
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
                <div class="col-lg-12">
                    <form id="validate" action="/masters/customer_master" data-parsley-validate="true">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Primary Mobile</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Secondary Mobile</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Land Line Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Confirm Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Customer Type</label>
                                    <select class="form-control select_2">
                                        <option value="platinum">Platinum</option>
                                        <option value="gold">Gold</option>
                                        <option value="silver">Silver</option>
                                        <option value="normal">Normal</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group m-h-57">
                                    <label class="control-label w-in-100 required">VIP</label>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                               checked="">
                                        <label for="inlineRadio1"> Yes </label>
                                    </div>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                        <label for="inlineRadio2"> No </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Landmark</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <input type="text" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Anniversary Date</label>
                                    <input type="text" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group m-h-57">
                                    <label class="control-label w-in-100 required">Gender</label>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="male" value="option1" name="radioInline"
                                               checked="">
                                        <label for="male"> Male </label>
                                    </div>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="female" value="option2" name="radioInline">
                                        <label for="female"> Female </label>
                                    </div>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="other" value="option2" name="radioInline">
                                        <label for="other"> Other </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Blood Group</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Zone</label>
                                    <select class="form-control _validate required select_2">
                                        <option value="10">SAIBABA COdata-lonY, KK Pudur, Velandipalayam,
                                            Venkatapuram
                                        </option>
                                        <option value="11">RS PURAM, Vadakovai, Poo Market, Ghandhipark</option>
                                        <option value="12">VADAVALLI, PN Pudur, Marudhamalai</option>
                                        <option value="13">EDAYARPALAYAM, TVS Nagar, Kanuvai</option>
                                        <option value="14">THUDIYALUR, GN Mills, NGGO Codata-lony, Goundampalayam
                                        </option>
                                        <option value="16">GANAPATHY, Sanganoor, Textool</option>
                                        <option value="18">GANDHIPURAM, Sidhapudur, Omni Bus Stand, Ram Nagar
                                        </option>
                                        <option value="19">SARAVANAMPATTI, Ramakrishnapuram, KGISL, Keeranatham
                                        </option>
                                        <option value="20">THONDAMUTHUR, Siruvani, Vellingiri</option>
                                        <option value="21">VEDAPATTI, Veerakeralam, Sundapalayam</option>
                                        <option value="24">SITRA, Airport, Hopes, Kalapptti, CODISSIA</option>
                                        <option value="25">KOVAIPUDUR, Sundakkamuthur, Perur, Telungulapalayam
                                        </option>
                                        <option value="27">UKKADAM, Oppanakkara St, Vysyal St, Townhall, Selvapuram
                                        </option>
                                        <option value="30">POTHANUR, Sundarapuram, Kuniamuthur, Ichanari</option>
                                        <option value="32"> RAILWAY STATION, Collector Office,Race Course, Anna
                                            Silai
                                        </option>
                                        <option value="33">PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam
                                        </option>
                                        <option value="34">SINGANALLUR, GV Residency, Sowripalayam, Udayampalayam
                                        </option>
                                        <option value="35">RAMANATHAPURAM, Nanjundapuram, Sungam, Puliakulam
                                        </option>
                                        <option value="36">data-long Distance &lt; 100 Kms</option>
                                        <option value="37">data-long Distance &gt; 100 Kms but &lt; 200 kms</option>
                                        <option value="38">data-long Distance &gt;200 Kms But &lt; 300 Kms</option>
                                        <option value="39">data-long Distance &gt; 300 kms</option>
                                        <option value="40">CHERAN MAA NAGAR, Gandhi Maa Nagar, Thannerrpandal
                                        </option>
                                        <option value="41">ONDIPUDUR, Chinthamani Pudur, Pappampatti, Sulur</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Status</label>
                                    <select class="form-control select_2">
                                        <option value="active">Active</option>
                                        <option value="in-active">In-Active</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label w-in-100 invisible">Submit</label>
                                    <button type="submit" class="btn btn-dark m-r-5 m-b-5 ladda-button"
                                            data-color="mint" data-style="expand-right" data-size="l"><span
                                                class="ladda-label">Submit</span><span class="ladda-spinner"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection