@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('assets/js/sm_morris_charts.js') }}"></script>
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
                                <div class="icon ion-ios-home-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-line-chart" class="height-sm"></div>
                </div>
            </div>
        </div>

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
                                <div class="icon ion-ios-infinite-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Line Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="line-example" class="height-sm"></div>
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
                                <div class="icon ion-ios-information-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="area-example" class="height-sm"></div>
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
                                <div class="icon ion-ios-ionic-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-area-chart" class="height-sm"></div>
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
                                <div class="icon ion-ios-keypad-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-bar-chart" class="height-sm"></div>
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
                                <div class="icon ion-ios-lightbulb-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Donut Charts</h5>
                                <div class="sm-inner-desc">
                                    Line & Area Charts. Line Charts. The public API is
                                    terribly simple.
                                    <a href="https://github.com/morrisjs/morris.js') }}"
                                       target="_blank">Learn more about Morris Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="morris-donut-chart" class="height-sm"></div>
                </div>
            </div>
        </div>
    </div>
@endsection