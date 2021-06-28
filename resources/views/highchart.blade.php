@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/data.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/drilldown.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/exporting.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/export-data.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/highcharts-more.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/solid-gauge.js') }}"></script>
    <script src="{{ asset('assets/js/sm_high_charts.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Spline Updating Each Second</h6>
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
                                <div class="icon ion-ios-americanfootball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Spline Updating Each
                                    Second</h5>
                                <div class="sm-inner-desc">
                                    DataTables is a plug-in for the jQuery Javascript
                                    library. It is a highly flexible tool, build upon
                                    the foundations of progressive enhancement, that
                                    adds all of these advanced features to any HTML
                                    table.
                                    <a href="https://github.com/DataTables/DataTables"
                                       target="_blank">Learn more about DataTables</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="randomData" class="height-400"
                         style="margin: 0 auto;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Column with Drilldown</h6>
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
                                <div class="icon ion-ios-analytics-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Column with Drilldown</h5>
                                <div class="sm-inner-desc">
                                    DataTables is a plug-in for the jQuery Javascript
                                    library. It is a highly flexible tool, build upon
                                    the foundations of progressive enhancement, that
                                    adds all of these advanced features to any HTML
                                    table.
                                    <a href="https://github.com/DataTables/DataTables"
                                       target="_blank">Learn more about DataTables</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="colunmDrildown" class="height-400"
                         style="margin: 0 auto;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Semi Circle Donut</h6>
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
                                <div class="icon ion-ios-at-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Semi Circle Donut</h5>
                                <div class="sm-inner-desc">
                                    Highcharts is a SVG-based, multi-platform charting
                                    library that has been actively developed since 2009.
                                    It makes it easy to add interactive,
                                    mobile-optimized charts to your web and mobile
                                    projects.
                                    <a href="https://www.highcharts.com/demo"
                                       target="_blank">Learn more about Highcharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pieSemiCircle" class="height-400"
                         style="margin: 0 auto;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Pie with Drilldown</h6>
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
                                <div class="icon ion-ios-barcode-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Pie with Drilldown</h5>
                                <div class="sm-inner-desc">
                                    Highcharts is a SVG-based, multi-platform charting
                                    library that has been actively developed since 2009.
                                    It makes it easy to add interactive,
                                    mobile-optimized charts to your web and mobile
                                    projects.
                                    <a href="https://www.highcharts.com/demo"
                                       target="_blank">Learn more about Highcharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pieDrilDown" class="height-400"
                         style="margin: 0 auto;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Solid Gauge</h6>
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
                                <div class="icon ion-ios-baseball-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Solid Gauge</h5>
                                <div class="sm-inner-desc">
                                    Highcharts is a SVG-based, multi-platform charting
                                    library that has been actively developed since 2009.
                                    It makes it easy to add interactive,
                                    mobile-optimized charts to your web and mobile
                                    projects.
                                    <a href="https://www.highcharts.com/demo"
                                       target="_blank">Learn more about Highcharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 0 auto" class="height-400">
                        <div id="container-speed"
                             style="width: 50%; height: 350px; float: left"></div>
                        <div id="container-rpm"
                             style="width: 50%; height: 350px; float: left"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection