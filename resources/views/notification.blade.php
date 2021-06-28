@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/js/pvr_ui_notification.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Toastr Notifications</h6>
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
                    <div class="row">
                        <div class="col-md-4" id="tostrnoti">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control"
                                       placeholder="Enter a title ...">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"
                                          placeholder="Enter a message ..."></textarea>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="closeButton" type="checkbox" value="checked"
                                       class="styled form-check-input"
                                       checked="">
                                <label class="checkbox" for="closeButton">
                                    Close Button
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="addBehaviorOnToastClick" type="checkbox" value="checked"
                                       class="styled form-check-input">
                                <label class="checkbox" for="addBehaviorOnToastClick">
                                    Add behavior on toast click
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="debugInfo" type="checkbox" value="checked"
                                       class="styled form-check-input">
                                <label class="checkbox" for="debugInfo">
                                    Debug
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="progressBar" type="checkbox" value="checked"
                                       class="styled form-check-input"
                                       checked="">
                                <label class="checkbox" for="progressBar">
                                    Progress Bar
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="preventDuplicates" type="checkbox" value="checked" class="styled form-check-input">
                                <label class="checkbox checkbox-primary" for="preventDuplicates">
                                    Prevent Duplicates
                                </label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group" id="toastTypeGroup">
                                <label>Toast Type</label>
                                <div class="radio radio-primary">
                                    <input type="radio" name="toasts" value="success" checked="" id="rad1">
                                    <label for="rad1">
                                        Success
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="toasts" value="info" id="rad2">
                                    <label for="rad2">
                                        Info
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="toasts" value="warning" id="rad3">
                                    <label for="rad3">
                                        Warning
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="toasts" value="error" id="rad4">
                                    <label for="rad4">
                                        Error
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="positionGroup">
                                <label>Position</label>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-top-right" id="rad5"
                                           checked="">
                                    <label for="rad5">
                                        Top Right
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-bottom-right" id="rad6">
                                    <label for="rad6">
                                        Bottom
                                        Right
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-bottom-left" id="rad7">
                                    <label for="rad7">
                                        Bottom
                                        Left
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-top-left" id="rad8">
                                    <label for="rad8">
                                        Top Left
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-top-full-width" id="rad9">
                                    <label for="rad9">
                                        Top
                                        Full
                                        Width
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions"
                                           value="toast-bottom-full-width" id="rad10">
                                    <label for="rad10">
                                        Bottom
                                        Full Width
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-top-center" id="rad11">
                                    <label for="rad11">
                                        Top
                                        Center
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <input type="radio" name="positions" value="toast-bottom-center" id="rad12">
                                    <label for="rad12">
                                        Bottom
                                        Center
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="showEasing">Show Easing</label>
                                <input id="showEasing" type="text" placeholder="swing, linear"
                                       class="form-control"
                                       value="swing">
                            </div>
                            <div class="form-group">

                                <label for="hideEasing">Hide Easing</label>
                                <input id="hideEasing" type="text" placeholder="swing, linear"
                                       class="form-control"
                                       value="linear">
                            </div>
                            <div class="form-group">

                                <label for="showMethod">Show Method</label>
                                <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown"
                                       class="form-control" value="fadeIn">
                            </div>
                            <div class="form-group">

                                <label for="hideMethod">Hide Method</label>
                                <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp"
                                       class="form-control" value="fadeOut">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="showDuration">Show Duration</label>
                                <input id="showDuration" type="text" placeholder="ms" class="form-control"
                                       value="400">
                            </div>
                            <div class="form-group">
                                <label for="hideDuration">Hide Duration</label>
                                <input id="hideDuration" type="text" placeholder="ms" class="form-control"
                                       value="1000">
                            </div>
                            <div class="form-group">
                                <label for="timeOut">Time out</label>
                                <input id="timeOut" type="text" placeholder="ms" class="form-control"
                                       value="7000">
                            </div>
                            <div class="form-group">
                                <label for="extendedTimeOut">Extended time out</label>
                                <input id="extendedTimeOut" type="text" placeholder="ms"
                                       class="form-control"
                                       value="1000">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-success" id="showtoast">Show
                                Toast
                            </button>
                            <button type="button" class="btn btn-warning" id="cleartoasts">
                                Clear Toasts
                            </button>
                            <button type="button" class="btn btn-danger"
                                    id="clearlasttoast">Clear Last Toast
                            </button>
                            <button type="button" class="btn btn-success" id="showsimple">
                                Show simple
                                options
                            </button>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-lg-12">
                            <small>Toastr Options in JSON</small>
                            <pre id="toastrOptions" class="p-m"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Bootstrap Notify</h6>
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
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-lg-3">
                            <button class="btn btn-success btn-block"
                                    onclick="app.show_not('top','left')">
                                Top Left
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3 res-xs-m-t-10 res-sm-m-t-10 res-md-m-t-10">
                            <button class="btn btn-primary btn-block"
                                    onclick="app.show_not('top','center')">
                                Top Center
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3 res-xs-m-t-10 res-sm-m-t-10 res-md-m-t-10">
                            <button class="btn btn-warning btn-block"
                                    onclick="app.show_not('top','right')">
                                Top Right
                            </button>
                        </div>
                    </div>
                    <div class="row justify-content-center m-t-10">
                        <div class="col-md-3 col-lg-3">
                            <button class="btn btn-danger btn-block"
                                    onclick="app.show_not('bottom','left')">
                                Bottom Left
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3 res-xs-m-t-10 res-sm-m-t-10 res-md-m-t-10">
                            <button class="btn btn-info btn-block"
                                    onclick="app.show_not('bottom','center')">
                                Bottom Center
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3 res-xs-m-t-10 res-sm-m-t-10 res-md-m-t-10">
                            <button class="btn btn-white btn-block"
                                    onclick="app.show_not('bottom','right')">
                                Bottom Right
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection