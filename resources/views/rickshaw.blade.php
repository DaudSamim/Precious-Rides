@extends('layout.default')

@section('pageStyle')
    <link type="text/css" href="{{ asset('assets/plugins/rickshaw/css/rickshaw.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/d3/js/d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ResizeSensor/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/js/sm_rickshaw.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Bandwidth Usage</h6>
                    <h3 class="m-b-0 m-t-10">323,3<span id="change_random">60</span></h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-purple">2.<span
                                    id="change_random_per">6%</span> change from
                                                        yesterday</span></p>
                </div>
                <div id="rs1" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 res-xs-m-t-10">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Site Traffic</h6>
                    <h3 class="m-b-0 m-t-10">478,486</h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-info">70.5%</span> change from
                        yesterday</p>
                </div>
                <div id="rs2" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 res-md-m-t-10 res-xs-m-t-10">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Data Transfer</h6>
                    <h3 class="m-b-0 m-t-10">281,281</h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-primary">32.5%</span> change
                        from yesterday</p>
                </div>
                <div id="rs3" class="h-70 mg-r--1"></div>
            </div>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Line Charts</h6>
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
                                <div class="icon ion-ios-bookmarks-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Charts</h5>
                                <div class="sm-inner-desc">
                                    Rickshaw is a JavaScript toolkit for creating
                                    interactive time series graphs
                                    <a href="https://github.com/shutterstock/rickshaw"
                                       target="_blank">Learn more about Rickshaw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rickshaw-wrap height-sm">
                        <div id="line-chart" class="height-sm"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Area Charts</h6>
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
                                <div class="icon ion-ios-box-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Rickshaw is a JavaScript toolkit for creating
                                    interactive time series graphs
                                    <a href="https://github.com/shutterstock/rickshaw"
                                       target="_blank">Learn more about Rickshaw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rickshaw-wrap">
                        <div id="area-chart" class="height-sm"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Scatter Charts</h6>
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
                                <div class="icon ion-ios-briefcase-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Scatter Charts</h5>
                                <div class="sm-inner-desc">
                                    Rickshaw is a JavaScript toolkit for creating
                                    interactive time series graphs
                                    <a href="https://github.com/shutterstock/rickshaw"
                                       target="_blank">Learn more about Rickshaw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rickshaw-wrap">
                        <div id="scatter-chart" class="height-sm"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Area Charts</h6>
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
                                <div class="icon ion-ios-browsers-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Rickshaw is a JavaScript toolkit for creating
                                    interactive time series graphs
                                    <a href="https://github.com/shutterstock/rickshaw"
                                       target="_blank">Learn more about Rickshaw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="rs4" class="mg-r--1 height-sm"></div>
                </div>
            </div>
        </div>
    </div>
@endsection