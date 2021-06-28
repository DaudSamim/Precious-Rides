@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/fusioncharts/js/fusioncharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/fusioncharts/js/themes/fusioncharts.theme.zune.js') }}"></script>
    <script src="{{ asset('assets/plugins/fusioncharts/js/themes/fusioncharts.theme.fint.js') }}"></script>
    <script src="{{ asset('assets/js/sm_fusion_chart.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Line Chart</h6>
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
                                <div class="icon ion-android-cloud-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Chart</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_1" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Colunm 2D Chart</h6>
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
                                <div class="icon ion-android-favorite-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Colunm 2D Chart</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_2" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Gaudge Chart</h6>
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
                                <div class="icon ion-android-star-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Gaudge Chart</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_3" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bar Chart</h6>
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
                                <div class="icon ion-happy-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bar Chart</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_4" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Stacked Column Chart</h6>
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
                                <div class="icon ion-ios-alarm-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Stacked Column Chart</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_5" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Doughnut 3D</h6>
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
                                <div class="icon ion-ios-albums-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Doughnut 3D</h5>
                                <div class="sm-inner-desc">
                                    The most comprehensive JavaScript charting library,
                                    with over 90+ charts and 1000+ maps.
                                    Loved by 27,000 customers in 118 countries.
                                    <a href="https://www.fusioncharts.com/download/"
                                       target="_blank">Learn more about Fusion
                                        Charts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart_6" class="height-sm"></div>
                </div>
            </div>
        </div>
    </div>
@endsection