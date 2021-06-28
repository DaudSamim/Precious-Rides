@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/amcharts/amcharts4/core.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/amcharts4/charts.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/amcharts4/themes/animated.js') }}"></script>
    <script src="{{ asset('assets/js/sm_am_charts.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Live Charts</h6>
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
                                <h5 class="sm-inner-header">Live Charts</h5>
                                <div class="sm-inner-desc">
                                    A go-to library for data visualization. When you
                                    don’t have time to learn new technologies.
                                    When you need a simple yet powerful and flexible
                                    drop-in data visualization solution.
                                    <a href="https://www.amcharts.com/download/"
                                       target="_blank">Learn more about AMCharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="liveChart" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Dragable Bar Chart</h6>
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
                                <div class="icon ion-ios-bell-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Dragable Bar Chart</h5>
                                <div class="sm-inner-desc">
                                    A go-to library for data visualization. When you
                                    don’t have time to learn new technologies.
                                    When you need a simple yet powerful and flexible
                                    drop-in data visualization solution.
                                    <a href="https://www.amcharts.com/download/"
                                       target="_blank">Learn more about AMCharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dragableChart" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Date Based Radar Chart</h6>
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
                                <div class="icon ion-ios-body-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Date Based Radar Chart</h5>
                                <div class="sm-inner-desc">
                                    A go-to library for data visualization. When you
                                    don’t have time to learn new technologies.
                                    When you need a simple yet powerful and flexible
                                    drop-in data visualization solution.
                                    <a href="https://www.amcharts.com/download/"
                                       target="_blank">Learn more about AMCharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dateBasedRadar" class="height-500"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Radar Timeline Chart</h6>
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
                                <div class="icon ion-ios-bolt-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Radar Timeline Chart</h5>
                                <div class="sm-inner-desc">
                                    A go-to library for data visualization. When you
                                    don’t have time to learn new technologies.
                                    When you need a simple yet powerful and flexible
                                    drop-in data visualization solution.
                                    <a href="https://www.amcharts.com/download/"
                                       target="_blank">Learn more about AMCharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="radarTimelineChart" class="height-500"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Angle Radar Chart</h6>
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
                                <div class="icon ion-ios-book-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Angle Radar Chart</h5>
                                <div class="sm-inner-desc">
                                    A go-to library for data visualization. When you
                                    don’t have time to learn new technologies.
                                    When you need a simple yet powerful and flexible
                                    drop-in data visualization solution.
                                    <a href="https://www.amcharts.com/download/"
                                       target="_blank">Learn more about AMCharts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="angleRadar" class="height-500"></div>
                </div>
            </div>
        </div>
    </div>
@endsection