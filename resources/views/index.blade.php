@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.print.css') }}" rel=" stylesheet" media='print'/>
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel=" stylesheet"/>
    <link href="{{ asset('assets/plugins/sweet_alert/sweetalert.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel=" stylesheet"/>
    <link href="{{ asset('assets/plugins/owl.carousel/css/owl.carousel.css') }}" rel=" stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/snap/snap.svg-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/gcal.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet_alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ui-block">
                <div class="panel widget_1">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-md-3">
                            <i class="icon icon-basket"></i>
                            <div class="wid-content">
                                <label>Live Trips</label>
                                <h2><span data-count="true" data-number="1494" id="ts1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-user"></i>
                            <div class="wid-content">
                                <label>Scheduled Trips</label>
                                <h2><span data-count="true" data-number="1180" id="pv1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-note"></i>
                            <div class="wid-content">
                                <label>Completed Trips</label>
                                <h2><span data-count="true" data-number="3792" id="wt1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-wallet"></i>
                            <div class="wid-content">
                                <label>Earnings</label>
                                <h2>$<span data-count="true" data-number="92701" id="ea1"></span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel" id="graph-1-container">
                        <div class="p-20 chart-values">
                            <p class="f-w-600"><i class="icons icon-target p-r-10"></i> Vehicle A206</p>
                            <p>
                                <span class="pull-right total-gain"></span> Driving Distance
                            </p>
                            <p>
                                <span class="pull-right f-w-700 h-value">254H 35M</span> Driving Time
                            </p>
                            <p class="m-0">
                                <span class="pull-right percentage-value"></span> Avg Speed
                            </p>
                        </div>
                        <div class="fill">
                            <svg class="chart-line" id="chart-1" viewBox="0 0 80 40">
                                <defs>
                                    <linearGradient id="gradient-1">
                                        <stop offset="0" stop-color="#00d5bd"/>
                                        <stop offset="100" stop-color="#24c1ed"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-2">
                                        <stop offset="0" stop-color="#954ce9"/>
                                        <stop offset="0.3" stop-color="#954ce9"/>
                                        <stop offset="0.6" stop-color="#24c1ed"/>
                                        <stop offset="1" stop-color="#24c1ed"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-3" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0" stop-color="rgba(0, 213, 189, 1)" stop-opacity="0.07"/>
                                        <stop offset="0.5" stop-color="rgba(0, 213, 189, 1)"
                                              stop-opacity="0.13"/>
                                        <stop offset="1" stop-color="rgba(0, 213, 189, 1)" stop-opacity="0"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-4" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0" stop-color="rgba(149, 76, 233, 1)"
                                              stop-opacity="0.07"/>
                                        <stop offset="0.5" stop-color="rgba(149, 76, 233, 1)"
                                              stop-opacity="0.13"/>
                                        <stop offset="1" stop-color="rgba(149, 76, 233, 1)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel" id="graph-2-container">
                        <div class="p-20 chart-values">
                            <p class="f-w-600"><i class="icons icon-target p-r-10"></i> Vehicle A208</p>
                            <p>
                                <span class="pull-right total-gain"></span> Driving Distance
                            </p>
                            <p>
                                <span class="pull-right f-w-700 h-value">454H 50M</span> Driving Time
                            </p>
                            <p class="m-0">
                                <span class="pull-right percentage-value"></span> Avg Speed
                            </p>
                        </div>
                        <div class="fill">
                            <svg class="chart-line" id="chart-2" viewBox="0 0 80 40">
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="p-20">
                            <ul class="list-unstyled base-timeline activity-timeline">
                                <li class="">
                                    <div class="timeline-icon">
                                        <img src="{{ asset('assets/images/avatar/user-1.jpg') }}" alt="">
                                    </div>
                                    <div class="act-time">Today</div>
                                    <div class="base-timeline-info">
                                        <a href="javascript:void(0)" class="text-info">VID: 645 </a>
                                        has been Alloted for PNR: PVR201873894 From: GANDHIPURAM To: VADAVALLI PICKUP
                                        TIME: 04:00 ETD: 04:23
                                    </div>
                                    <small class="text-muted">
                                        28 mins ago
                                    </small>
                                </li>
                                <li class="">
                                    <div class="timeline-icon">
                                        <img src="{{ asset('assets/images/avatar/user-3.jpg') }}" alt="">
                                    </div>
                                    <div class="base-timeline-info">
                                        <a href="javascript:void(0)" class="text-info">VID: 403 </a> has Dropped Cust
                                        Name: Venkatraman in Railway Station at 04:29
                                    </div>
                                    <small class="text-muted">
                                        2 Hours ago
                                    </small>
                                </li>
                                <li class="">
                                    <div class="timeline-icon">
                                        <img src="{{ asset('assets/images/avatar/user-4.jpg') }}" alt="">
                                    </div>
                                    <div class="act-time">Yesterday</div>
                                    <div class="base-timeline-info">
                                        <a href="javascript:void(0)" class="text-warning">New CRM Bookings</a>
                                        Cust Name: Chandran Nair PNR: PVR201873895 From: CENTRAL STUDIO To: GANDHIPURAM
                                        PICKUP TIME: 06:20
                                    </div>
                                    <small class="text-muted">
                                        1 days ago
                                    </small>
                                </li>
                                <li class="">
                                    <div class="timeline-icon">
                                        <img src="{{ asset('assets/images/avatar/user-2.jpg') }}" alt="">
                                    </div>
                                    <div class="base-timeline-info">
                                        <a href="javascript:void(0)" class="text-info">VID: 205 </a> has Dropped Cust
                                        Name: Venkatraman in Railway Station at 04:29
                                    </div>
                                    <small class="text-muted">
                                        1 days ago
                                    </small>
                                </li>
                                <li class="">
                                    <div class="timeline-icon">
                                        <img src="{{ asset('assets/images/avatar/user-5.jpg') }}" alt="">
                                    </div>
                                    <div class="act-time">21 March</div>
                                    <div class="base-timeline-info">
                                        <a href="javascript:void(0)" class="text-info">VID: 475 </a> has Dropped Cust
                                        Name: Venkatraman in Railway Station at 04:29
                                    </div>
                                    <small class="text-muted">
                                        2 days ago
                                    </small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body text-center clearfix">
                            <div class="col-sm-4 p-t-35">
                                <div class="f-w-600">
                                    <p class="f-s-36 m-b-0">4,845</p>
                                </div>
                                <p class="f-s-16 f-w-700 ttu">Revenue Status</p>
                            </div>
                            <div class="col-sm-8">
                                <button class="btn btn-outline-primary m-t-15 m-b-15">View Details</button>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                <ul class="row list-unstyled text-center m-0">
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">4,845</span>
                                        <p class="text-sm text-muted mar-no">Today</p>
                                    </li>
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">5,845</span>
                                        <p class="text-sm text-muted mar-no">Yesterday</p>
                                    </li>
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">3,754</span>
                                        <p class="text-sm text-muted mar-no">21 Feb 19</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body text-center clearfix">
                            <div class="col-sm-4 p-t-35">
                                <canvas id="dynamic_chart" style="width: 100px;height: 50px"></canvas>
                            </div>
                            <div class="col-sm-8">
                                <button class="btn btn-outline-primary m-t-15 m-b-15">View Details</button>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                <ul class="row list-unstyled text-center m-0">
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">2,145</span>
                                        <p class="text-sm text-muted mar-no">Today</p>
                                    </li>
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">1,445</span>
                                        <p class="text-sm text-muted mar-no">Yesterday</p>
                                    </li>
                                    <li class="col-xs-4">
                                        <span class="f-s-18 f-w-700">2,744</span>
                                        <p class="text-sm text-muted mar-no">21 Feb 19</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel p-20">
                        <div id="calendar" class="vertical-box-column calendar"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel-group accordion accordion_success" id="accordion1">
                        <div class="panel overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse"
                                       data-parent="#accordion1" href="#collapseOne1">
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        Custom Vehicle Search
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseOne1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="">
                                        <div class="form-group p-l-0 col-sm-4 m-r-0">
                                            <label class="control-label required">Vehicle No</label>
                                            <select class="form-control select_2">
                                                <option value="172">902</option>
                                                <option value="198">123</option>
                                                <option value="149" selected>817</option>
                                                <option value="165">637</option>
                                                <option value="98">602</option>
                                                <option value="153">811</option>
                                                <option value="176">447</option>
                                                <option value="87">459</option>
                                                <option value="186">815</option>
                                                <option value="143">645</option>
                                                <option value="174">403</option>
                                                <option value="72">414</option>
                                                <option value="90">471</option>
                                                <option value="91">487</option>
                                                <option value="193">655</option>
                                                <option value="86">456</option>
                                                <option value="110">639</option>
                                                <option value="197">802</option>
                                                <option value="108">633</option>
                                                <option value="82">442</option>
                                                <option value="81">438</option>
                                                <option value="136">835</option>
                                                <option value="189">678</option>
                                                <option value="103">617</option>
                                                <option value="68">407</option>
                                                <option value="199">667</option>
                                                <option value="194">499</option>
                                                <option value="114">646</option>
                                                <option value="195">607</option>
                                                <option value="191">636</option>
                                                <option value="120">663</option>
                                                <option value="164">685</option>
                                                <option value="185">635</option>
                                                <option value="178">810</option>
                                                <option value="119">662</option>
                                                <option value="150">621</option>
                                                <option value="101">608</option>
                                                <option value="116">653</option>
                                                <option value="99">603</option>
                                                <option value="148">625</option>
                                                <option value="70">409</option>
                                                <option value="69">408</option>
                                                <option value="71">412</option>
                                                <option value="111">640</option>
                                            </select>
                                        </div>

                                        <div class="form-group p-l-0 col-sm-4 m-r-0">
                                            <label class="control-label required">Registration No</label>
                                            <select class="form-control select_2">
                                                <option value="149">TN3XXXX273</option>
                                                <option value="165">TN3XXXX718</option>
                                                <option value="98">TN9XXXX56</option>
                                                <option value="153">TN4XXXX86</option>
                                            </select>
                                        </div>

                                        <div class="form-group p-l-0 col-sm-4 m-r-0">
                                            <label class="control-label required">Mobile No</label>
                                            <select class="form-control select_mobile">
                                            </select>
                                        </div>

                                        <div id="custom_srch_res" class="table-responsive" style="clear: both">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tbody>
                                                <tr>
                                                    <td><b> Vehicle No:</b></td>
                                                    <td class="ftext">817</td>
                                                    <td><b> Vehicle Status:</b></td>
                                                    <td class="ftext">leave</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Driver:</b></td>
                                                    <td class="ftext">817 Bharath 81XXXXXX00</td>
                                                    <td><b> Mobile:</b></td>
                                                    <td>81XXXXXX00</td>
                                                </tr>
                                                <tr>
                                                    <td><b> Model:</b></td>
                                                    <td class="ftext">XYLO AC</td>
                                                    <td><b> Seat Capacity:</b></td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td><b> Pending Target:</b></td>
                                                    <td>---</td>
                                                    <td><b> Assigned Trips:</b></td>
                                                    <td>---</td>
                                                </tr>
                                                <tr>
                                                    <td><b> From Location:</b></td>
                                                    <td>---</td>
                                                    <td><b> To Location:</b></td>
                                                    <td>---</td>
                                                </tr>
                                                <tr>
                                                    <td><b> Current Location:</b></td>
                                                    <td>Saibaba Codata-lony, Coimbatore, TN</td>
                                                    <td><b> Free time:</b></td>
                                                    <td>0 Mns</td>
                                                </tr>
                                                <tr>
                                                    <td><b> Today Collection:</b></td>
                                                    <td><i class="fa fa-inr"></i>0</td>
                                                    <td><b> Total Collection:</b></td>
                                                    <td><i class="fa fa-inr"></i>0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                                       data-parent="#accordion1" href="#collapseTwo1">
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        Consolidated Details
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Count</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><strong>FREE</strong></td>
                                                <td>7</td>
                                            </tr>
                                            <tr>
                                                <td><strong>RUNNING</strong></td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td><strong>ALLOTTED</strong></td>
                                                <td>7</td>
                                            </tr>
                                            <tr>
                                                <td><strong>BREAK</strong></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td><strong>BREAK</strong></td>
                                                <td>23</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <strong>
                                                        <span class="w-200 display_inline">Total Vehicle : 43</span>
                                                    </strong>
                                                    <strong>
                                                        <span class="pull-right display_inline">Assigned Vehicle : 4</span>
                                                    </strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                                       data-parent="#accordion1" href="#collapseThree1">
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        Free Vehicle
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTable">
                                            <thead>
                                            <tr>
                                                <th>Vehicle</th>
                                                <th>Location</th>
                                                <th>Distance (in Km)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd">
                                                <td>456 - Indica AC</td>
                                                <td>1st Cross Rd, Thangammal Nagar, Kalpana Layout, Ganapathypudur,
                                                    Coimbatore, Tamil Nadu 641006, India
                                                </td>
                                                <td>7.49 km</td>
                                            </tr>
                                            <tr class="even">
                                                <td>608 - Dzire AC</td>
                                                <td>Sri Krishna layout, Anandha Nagar, New Thillai Nagar, PN Pudur,
                                                    Coimbatore, Tamil Nadu 641041, India
                                                </td>
                                                <td>2.10 km</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>639 - Etios AC</td>
                                                <td>26, Vadavalli, Coimbatore, Tamil Nadu 641041, India</td>
                                                <td>4.40 km</td>
                                            </tr>
                                            <tr class="even">
                                                <td>653 - Dzire AC</td>
                                                <td>67/1, Near Vadavalli Bus Stop, Road,, V.N.R.Nagar, Vadavalli,
                                                    Coimbatore, Tamil Nadu 641041, India
                                                </td>
                                                <td>0.90 km</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>625 - Dzire ac</td>
                                                <td>Vadavalli-Thondamuthur Rd, Gurusamy Nagar, Chinmaya Nagar,
                                                    Coimbatore,
                                                    Tamil Nadu 641041, India
                                                </td>
                                                <td>3.05 km</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-separate table-extended">
                    <thead class="bg-dark">
                    <tr>
                        <th class="text-center">
                        </th>
                        <th>Basic Info</th>
                        <th>Company</th>
                        <th>Lead Score</th>
                        <th>Phone</th>
                        <th>Tags</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/default-avatar.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Andrew Heston
                                                        </span>
                                    <span class="f-s-11">
                                                            andrew.heston@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Cool Company
                        </td>
                        <td>
                            201
                        </td>
                        <td>
                            022-1254-5215
                        </td>
                        <td>
                            <span class="badge-danger badge">test tag</span>
                            <span class="badge-purple badge">another tag</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            22-Oct-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/user-1.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Michel Newton
                                                        </span>
                                    <span class="f-s-11">
                                                            michel.newton@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Company ABC
                        </td>
                        <td>
                            99
                        </td>
                        <td>
                            1254-022-5215
                        </td>
                        <td>
                            <span class="badge-warning badge">test tag</span>
                            <span class="badge-danger badge">in-active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/user-2.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Mark Ruffalo
                                                        </span>
                                    <span class="f-s-11">
                                                            mark.ruffalo@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Mark
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            5215-1254-022
                        </td>
                        <td>
                            <span class="badge-warning badge">Stores</span>
                            <span class="badge-info badge">Purchase</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/user-3.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Andrew Heston
                                                        </span>
                                    <span class="f-s-11">
                                                            andrew.heston@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Cool Company
                        </td>
                        <td>
                            201
                        </td>
                        <td>
                            022-1254-5215
                        </td>
                        <td>
                            <span class="badge-danger badge">test tag</span>
                            <span class="badge-purple badge">another tag</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            22-Oct-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/user-4.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Michel Newton
                                                        </span>
                                    <span class="f-s-11">
                                                            michel.newton@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Company ABC
                        </td>
                        <td>
                            99
                        </td>
                        <td>
                            1254-022-5215
                        </td>
                        <td>
                            <span class="badge-warning badge">test tag</span>
                            <span class="badge-danger badge">in-active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="{{ asset('assets/images/avatar/user-5.jpg') }}">
                                </div>
                                <div class="user_email">
                                                        <span>
                                                            Mark Ruffalo
                                                        </span>
                                    <span class="f-s-11">
                                                            mark.ruffalo@gmail.com
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Mark
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            5215-1254-022
                        </td>
                        <td>
                            <span class="badge-warning badge">Stores</span>
                            <span class="badge-info badge">Purchase</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection