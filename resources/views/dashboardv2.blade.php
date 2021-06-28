@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/nvd3/build/nv.d3.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/amcharts/export.css') }}" type="text/css" media="all"/>
    <link type="text/css" href="{{ asset('assets/plugins/rickshaw/css/rickshaw.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/d3/d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/nvd3/build/nv.d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ResizeSensor/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/exporting.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/export-data.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/serial.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/none.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/ammap.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/worldLow.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/export.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/none.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard_v2.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">FREE VEHICLE</div>
                <div class="value">1,224</div>
                <div class="trending trending-up"><span>11%</span></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4 res-xs-m-t-0">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">RUNNING VEHICLE</div>
                <div class="value">1,118</div>
                <div class="trending trending-down"><span>14%</span></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4 res-xs-m-t-20">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">ALLOTTED VEHICLE</div>
                <div class="value">1,384</div>
                <div class="trending trending-up"><span>16%</span></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4 res-xs-m-t-20 res-md-m-t-20">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">BREAK VEHICLE</div>
                <div class="value text-danger">1,634</div>
                <div class="trending trending-up"><span>13%</span></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4 res-xs-m-t-20 res-md-m-t-20 res-lg-m-t-20">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">ASSIGNED VEHICLE</div>
                <div class="value">3,447</div>
                <div class="trending trending-down"><span>02%</span></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2 col-md-4 res-xs-m-t-20 res-md-m-t-20 res-lg-m-t-20">
            <a class="sm-box sm_bodered_widget centered trend-in-corner xs" href="#">
                <div class="label">DISABLED VEHICLE</div>
                <div class="value">1,448</div>
                <div class="trending trending-down"><span>24%</span></div>
            </a>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-lg-4 col-md-6">
            <div class="card" style="border: 1px solid #ded5d5;">
                <div class="card-body p-b-0">
                    <h6 class="sm-card-title">GPS Bandwidth Usage</h6>
                    <h3 class="">323,3<span id="change_random">60</span></h3>
                    <p class="f-s-12"><span class="tx-purple">2.<span id="change_random_per">6%</span> change from
                                                        yesterday</span></p>
                </div>
                <div id="rs1" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 res-xs-m-t-20 res-sm-m-t-20">
            <div class="card" style="border: 1px solid #ded5d5;">
                <div class="card-body p-b-0">
                    <h6 class="sm-card-title">GPS Site Traffic</h6>
                    <h3 class="">478,4<span id="change_random1">60</span></h3>
                    <p class="f-s-12"><span class="tx-info">70.<span id="change_random_per1">6%</span>%</span>
                        change from
                        yesterday</p>
                </div>
                <div id="rs2" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 res-xs-m-t-20 res-md-m-t-20">
            <div class="card" style="border: 1px solid #ded5d5;">
                <div class="card-body p-b-0">
                    <h6 class="sm-card-title">GPS Data Transfer</h6>
                    <h3 class="">281,281</h3>
                    <p class="f-s-12"><span class="tx-primary">32.5%</span> change
                        from yesterday</p>
                </div>
                <div id="rs3" class="h-70 mg-r--1"></div>
            </div>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-lg-6 col-md-6">
            <div class="card p-10 zoom_in">
                <table class="table table-valign-middle m-b-0 bit_source" id="bit_source">
                    <thead>
                    <tr>
                        <th>Source</th>
                        <th>USD Price</th>
                        <th>BTC Price</th>
                        <th>Trend</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><label class="label label-danger">Bitcoin</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 8525.07</span></td>
                        <td>1.0</td>
                        <td>
                            <div class="sparkline">
                                1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-warning">Ethereum</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 520.092</span></td>
                        <td>0.0616599</td>
                        <td>
                            <div class="sparkline">
                                110, 150, 300, 130, 400, 240, 220, 310, 220, 300, 270, 210
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-success">Ripple</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i>  0.632798</span></td>
                        <td>0.00007502</td>
                        <td>
                            <div class="sparkline">
                                475, 200, 300, 480, 375, 240, 680, 698, 1057, 789, 270, 345
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-primary">Bitcoin Cash</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 985.056</span></td>
                        <td>0.116784</td>
                        <td>
                            <div class="sparkline">
                                1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-default">Litecoin</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 159.138</span></td>
                        <td>0.0188668</td>
                        <td>
                            <div class="sparkline">
                                475, 200, 300, 480, 375, 240, 680, 698, 1057, 789, 270, 345
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-danger">EOS</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 6.81231</span></td>
                        <td>0.00080764</td>
                        <td>
                            <div class="sparkline">
                                110, 150, 300, 130, 400, 240, 220, 310, 220, 300, 270, 210
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-danger">Bitcoin</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 8525.07</span></td>
                        <td>1.0</td>
                        <td>
                            <div class="sparkline">
                                1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-warning">Ethereum</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i> 520.092</span></td>
                        <td>0.0616599</td>
                        <td>
                            <div class="sparkline">
                                110, 150, 300, 130, 400, 240, 220, 310, 220, 300, 270, 210
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="label label-success">Ripple</label></td>
                        <td><span><i class="cc BTC" title="BTC"></i>  0.632798</span></td>
                        <td>0.00007502</td>
                        <td>
                            <div class="sparkline">
                                475, 200, 300, 480, 375, 240, 680, 698, 1057, 789, 270, 345
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 res-xs-m-t-20 res-sm-m-t-20">
            <div id="chartdiv_map"></div>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-lg-12">
            <div class="ui-block">
                <div class="panel m-b-0 widget_1">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-md-3 b-b">
                            <i class="icon icon-login"></i>
                            <div class="wid-content">
                                <label>Logged-in</label>
                                <h2><span data-count="true" data-number="097" id="ts1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-bag"></i>
                            <div class="wid-content">
                                <label>Break</label>
                                <h2><span data-count="true" data-number="32" id="pv1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-home"></i>
                            <div class="wid-content">
                                <label>Leave</label>
                                <h2><span data-count="true" data-number="100" id="wt1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-calendar"></i>
                            <div class="wid-content">
                                <label>Informed</label>
                                <h2><span data-count="true" data-number="19" id="ea1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <i class="icon icon-anchor"></i>
                            <div class="wid-content">
                                <label>Non Informed</label>
                                <h2><span data-count="true" data-number="12" id="ts2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-software-transform-bezier"></i>
                            <div class="wid-content">
                                <label>Pending</label>
                                <h2><span data-count="true" data-number="64" id="pv2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-trophy"></i>
                            <div class="wid-content">
                                <label>Inactive</label>
                                <h2><span data-count="true" data-number="4" id="wt2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-action-redo"></i>
                            <div class="wid-content">
                                <label>Total</label>
                                <h2><span data-count="true" data-number="206" id="ea2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-t-20">
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