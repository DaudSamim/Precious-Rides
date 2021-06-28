@extends('layout.default')

@section('pageStyle')
    <link type="text/css" href="{{ asset('assets/plugins/chartist/css/chartist.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/ResizeSensor/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist/js/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/sm_chartist.js') }}"></script>
@endsection

@section('content')
    <div class="row">
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
                                <div class="icon ion-ios-calculator-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartLine1" class="sm-chartist height-sm"></div>
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
                                <div class="icon ion-ios-calendar-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartArea2" class="sm-chartist height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
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
                                <div class="icon ion-ios-camera-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartBar2" class="sm-chartist height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Horizontal Bar Charts</h6>
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
                                <div class="icon ion-ios-cart-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Horizontal Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartBar6" class="sm-chartist height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
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
                                <div class="icon ion-ios-chatboxes-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Donut Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartDonut2" class="sm-chartist height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
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
                                <div class="icon ion-ios-chatbubble-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Pie Charts</h5>
                                <div class="sm-inner-desc">
                                    Chartist.js is a simple responsive charting library
                                    built with SVG. There are hundreds of nice charting
                                    libraries already out there
                                    <a href="https://github.com/gionkunz/chartist-js"
                                       target="_blank">Learn more about Chartist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chartPie2" class="sm-chartist height-sm"></div>
                </div>
            </div>
        </div>
    </div>
@endsection