@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>
    <script src="{{ asset('assets/js/sm_echarts.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Stacked Line</h6>
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
                                <div class="icon ion-ios-checkmark-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Stacked Line</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stacked-line" class="height-sm echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Basic Column</h6>
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
                                <div class="icon ion-ios-cloud-download-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Basic Column</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="basic-column" class="height-sm echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Basic Pie</h6>
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
                                <div class="icon ion-ios-cloud-upload-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Basic Pie</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="basic-pie" class="height-400 echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Doughnut Charts</h6>
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
                                <div class="icon ion-ios-cog-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Doughnut Charts</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="doughnut" class="height-400 echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Doughnut Infographic</h6>
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
                                <div class="icon ion-ios-color-filter-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Doughnut Infographic</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="doughnut-infographic"
                         class="height-400 echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Nested Pie</h6>
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
                                <div class="icon ion-ios-color-wand-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Nested Pie</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="nested-pie" class="height-400 echart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Combined Charts</h6>
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
                                <div class="icon ion-ios-copy-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Combined Charts</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="pie-chart"
                                 class="height-400 echart-container"></div>
                        </div>
                        <div class="col-md-6">
                            <div id="column-chart"
                                 class="height-400 echart-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Candlestick Charts</h6>
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
                                <div class="icon ion-ios-filing-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Candlestick Charts</h5>
                                <div class="sm-inner-desc">
                                    ECharts is a free, powerful charting and
                                    visualization library offering an easy way of adding
                                    intuitive, interactive, and highly customizable
                                    charts to your commercial products.
                                    <a href="https://github.com/apache/incubator-echarts"
                                       target="_blank">Learn more about echarts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="candlestick-multilevel-control"
                                 class="height-400 echart-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection