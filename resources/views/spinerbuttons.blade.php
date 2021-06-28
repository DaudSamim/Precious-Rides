@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/ladda-bootstrap/ladda-themeless.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/ladda-bootstrap/spin.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ladda-bootstrap/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_spinner_buttons.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Spinner Buttons</h6>
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
                                <div class="icon ion-ios-mic-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ladda Buttons</h5>
                                <div class="sm-inner-desc">
                                    Buttons with built-in loading indicators,
                                    effectively bridging the gap between action and
                                    feedback.
                                    <a href="https://github.com/hakimel/Ladda"
                                       target="_blank">Learn more about Ladda
                                        Buttons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary ladda-button m-t-10"
                            data-style="expand-left"
                            data-spinner-color="#333">
                        <span class="ladda-label">Expand Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-secondary ladda-button m-t-10"
                            data-style="expand-right">
                        <span class="ladda-label">Expand Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-success ladda-button m-t-10"
                            data-style="expand-up">
                        <span class="ladda-label">Expand Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-danger ladda-button m-t-10"
                            data-style="expand-down">
                        <span class="ladda-label">Expand Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-warning ladda-button m-t-10"
                            data-style="zoom-in">
                        <span class="ladda-label">Zoom In</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-info ladda-button m-t-10"
                            data-style="zoom-out">
                        <span class="ladda-label">Zoom Out</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-purple ladda-button m-t-10"
                            data-style="slide-left">
                        <span class="ladda-label">Slide Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-red ladda-button m-t-10"
                            data-style="slide-right">
                        <span class="ladda-label">Slide Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-blue ladda-button m-t-10"
                            data-style="slide-up">
                        <span class="ladda-label">Slide Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-dark ladda-button m-t-10"
                            data-style="slide-down">
                        <span class="ladda-label">Slide Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-purple ladda-button m-t-10"
                            data-style="contract">
                        <span class="ladda-label">Contract</span>
                        <span class="ladda-spinner"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Outline buttons</h6>
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
                                <div class="icon ion-ios-moon-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ladda Buttons</h5>
                                <div class="sm-inner-desc">
                                    Buttons with built-in loading indicators,
                                    effectively bridging the gap between action and
                                    feedback.
                                    <a href="https://github.com/hakimel/Ladda"
                                       target="_blank">Learn more about Ladda
                                        Buttons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-outline-primary ladda-button m-t-10"
                            data-style="expand-left"
                            data-spinner-color="#333">
                        <span class="ladda-label">Expand Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-secondary ladda-button m-t-10"
                            data-style="expand-right" data-spinner-color="#333">
                        <span class="ladda-label">Expand Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-success ladda-button m-t-10"
                            data-style="expand-up"
                            data-spinner-color="#333">
                        <span class="ladda-label">Expand Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-danger ladda-button m-t-10"
                            data-style="expand-down"
                            data-spinner-color="#333">
                        <span class="ladda-label">Expand Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-warning ladda-button m-t-10"
                            data-style="zoom-in"
                            data-spinner-color="#333">
                        <span class="ladda-label">Zoom In</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-info ladda-button m-t-10"
                            data-style="zoom-out"
                            data-spinner-color="#333">
                        <span class="ladda-label">Zoom Out</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-dark ladda-button m-t-10"
                            data-style="slide-left"
                            data-spinner-color="#333">
                        <span class="ladda-label">Slide Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-warning ladda-button m-t-10"
                            data-style="slide-right"
                            data-spinner-color="#333">
                        <span class="ladda-label">Slide Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-primary ladda-button m-t-10"
                            data-style="slide-up"
                            data-spinner-color="#333">
                        <span class="ladda-label">Slide Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-dark ladda-button m-t-10"
                            data-style="slide-down"
                            data-spinner-color="#333">
                        <span class="ladda-label">Slide Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-outline-info ladda-button m-t-10"
                            data-style="contract"
                            data-spinner-color="#333">
                        <span class="ladda-label">Contract</span>
                        <span class="ladda-spinner"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Button Min Width</h6>
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
                                <div class="icon ion-ios-monitor-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ladda Buttons</h5>
                                <div class="sm-inner-desc">
                                    Buttons with built-in loading indicators,
                                    effectively bridging the gap between action and
                                    feedback.
                                    <a href="https://github.com/hakimel/Ladda"
                                       target="_blank">Learn more about Ladda
                                        Buttons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-wd btn-primary ladda-button m-t-10"
                            data-style="expand-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-secondary ladda-button m-t-10"
                            data-style="expand-right" data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-success ladda-button m-t-10"
                            data-style="expand-up"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-danger ladda-button m-t-10"
                            data-style="expand-down"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-warning ladda-button m-t-10"
                            data-style="zoom-in"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Zoom In</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-info ladda-button m-t-10"
                            data-style="zoom-out"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Zoom Out</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-purple ladda-button m-t-10"
                            data-style="slide-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-wd btn-red ladda-button m-t-10"
                            data-style="slide-right"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-blue ladda-button m-t-10"
                            data-style="slide-up"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Up</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-dark ladda-button m-t-10"
                            data-style="slide-down"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Down</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-wd btn-purple ladda-button m-t-10"
                            data-style="contract"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Contract</span>
                        <span class="ladda-spinner"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Button block</h6>
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
                                <div class="icon ion-ios-more-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ladda Buttons</h5>
                                <div class="sm-inner-desc">
                                    Buttons with built-in loading indicators,
                                    effectively bridging the gap between action and
                                    feedback.
                                    <a href="https://github.com/hakimel/Ladda"
                                       target="_blank">Learn more about Ladda
                                        Buttons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-block btn-danger ladda-button m-t-10"
                            data-style="expand-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-block btn-warning ladda-button m-t-10"
                            data-style="expand-right" data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-block btn-success ladda-button m-t-10"
                            data-style="slide-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Button Size</h6>
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
                                <div class="icon ion-ios-navigate-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ladda Buttons</h5>
                                <div class="sm-inner-desc">
                                    Buttons with built-in loading indicators,
                                    effectively bridging the gap between action and
                                    feedback.
                                    <a href="https://github.com/hakimel/Ladda"
                                       target="_blank">Learn more about Ladda
                                        Buttons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-lg btn-primary ladda-button m-t-10"
                            data-style="expand-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button" class="btn btn-primary ladda-button m-t-10"
                            data-style="expand-right"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Expand Right</span>
                        <span class="ladda-spinner"></span>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-primary ladda-button m-t-10"
                            data-style="slide-left"
                            data-spinner-color="#FFF">
                        <span class="ladda-label">Slide Left</span>
                        <span class="ladda-spinner"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection