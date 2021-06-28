@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_chartjs.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
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
                                <div class="icon ion-ios-film-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="chartLine2" height="200" style="height: 200px"
                            class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
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
                                <div class="icon ion-ios-flag-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="chartLine3" height="200" style="height: 200px"
                            class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Bar Charts</h6>
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
                                <div class="icon ion-ios-flask-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas id="sales_chart" height="200" style="height: 200px"
                            class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Donut Charts</h6>
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
                                <div class="icon ion-ios-flower-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Donut Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charjs-chart p-20">
                        <canvas height="200" style="height: 200px" id="hero-donut"></canvas>
                        <div class="charjs-chart-label">
                            <strong>175</strong>
                            <span>Total Visits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Pie Charts</h6>
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
                                <div class="icon ion-ios-folder-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Pie Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas height="200" style="height: 200px" id="simple-pie-chart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Donut Charts</h6>
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
                                <div class="icon ion-ios-football-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Donut Charts</h5>
                                <div class="sm-inner-desc">
                                    Simple yet flexible JavaScript charting for
                                    designers & developers
                                    <a href="https://github.com/chartjs/Chart.js"
                                       target="_blank">Learn more about Chart JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charjs-chart p-20">
                        <canvas height="200" style="height: 200px" id="donutChart1"></canvas>
                        <div class="charjs-chart-label">
                            <strong>175</strong>
                            <span>Total Visits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection