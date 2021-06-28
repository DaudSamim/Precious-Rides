@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/sweet_alert/sweetalert.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/sweet_alert/sweetalert.min.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Sweet Alert</h6>
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
                        <div class="icon ion-ios-musical-notes"></div>
                    </div>
                    <div class="sm-info-text">
                        <h5 class="sm-inner-header">Sweet Alert</h5>
                        <div class="sm-inner-desc">
                            A beautiful, responsive, customizable and accessible
                            (WAI-ARIA) replacement for JavaScript's popup boxes.
                            <a href="https://github.com/sweetalert2/sweetalert2"
                               target="_blank">Learn more about Sweet Alert</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sweet_alert">
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_3">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">A basic message</h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in to additional
                                content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="basic_alert" href="javascript:void(0)">Click
                                here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_2">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">Title with a text under</h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in to additional
                                content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="title-and-text" href="javascript:void(0)">Click
                                here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_6">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">Success Message</h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in to additional
                                content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="success-message" href="javascript:void(0)">Click
                                here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_6">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">Custom HTML description
                            </h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in to additional
                                content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="custom-html" href="javascript:void(0)">Click
                                here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_5">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">A warning message, with
                                callback</h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in to additional
                                content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="warning-message-and-confirmation"
                               href="javascript:void(0)">Click here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card sm_bg_5">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">Alert with time</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-primary btn-sm"
                               id="auto-close" href="javascript:void(0)">Click
                                here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-24">
                    <div class="rickshar_card">
                        <div class="rickshar_card-body">
                            <h4 class="card-title">you can execute something
                                else for "Cancel"</h4>
                            <p class="card-text">With supporting text below as a
                                natural lead-in.</p>
                            <a class="btn btn-primary btn-sm"
                               id="warning-message-and-cancel"
                               href="javascript:void(0)">Click here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection