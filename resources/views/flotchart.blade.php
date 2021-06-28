@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.errorbars.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.navigate.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_flot_charts.js') }}"></script>
@endsection

@section('content')
    <div class="row">
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
                                <div class="icon ion-ios-game-controller-a-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Area Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="line-chart" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Live Charts</h6>
                    <div class="heading-elements">
                        <form class="form-inline pull-left m-r-10">
                            <select class="form-control input-xs"
                                    id="updateInterval">
                                <option value="5">
                                    5ms
                                </option>
                                <option value="15">
                                    15ms
                                </option>
                                <option value="30">
                                    30ms
                                </option>
                                <option value="45">
                                    45ms
                                </option>
                                <option value="60">
                                    60ms
                                </option>
                                <option value="75">
                                    75ms
                                </option>
                                <option value="90">
                                    90ms
                                </option>
                            </select>
                        </form>
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
                                <div class="icon ion-ios-game-controller-b-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Live Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="realtime" class="height-sm"></div>
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
                                <div class="icon ion-ios-gear-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bar-chart" class="height-sm"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Stacked Bar Charts</h6>
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
                                <div class="icon ion-ios-glasses-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Stacked Bar Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stacked-bar" class="height-sm"></div>
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
                                <div class="icon ion-ios-grid-view-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Donut Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charjs-chart">
                        <div id="donut-hole-chart" class="height-sm"></div>
                        <div class="charjs-chart-label" style="left: 46%;">
                            <strong>
                                <span class="f-s-20">175</span>
                            </strong>
                            <span>Total Visits</span>
                        </div>
                    </div>
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
                                <div class="icon ion-ios-heart-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Pie Charts</h5>
                                <div class="sm-inner-desc">
                                    Flot is a pure JavaScript plotting library for
                                    jQuery, with a focus on simple usage, attractive
                                    looks and interactive features.
                                    <a href="https://github.com/flot/flot"
                                       target="_blank">Learn more about Flot Chart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="interactive-pie-chart" class="height-sm"></div>
                    <div id="hover"></div>
                </div>
            </div>
        </div>
    </div>
@endsection