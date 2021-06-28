@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" media='print'/>
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/sweet_alert/sweetalert.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/gcal.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet_alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_calendar_v1.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Calendar v1</h6>
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
                        <div class="col-lg-12">
                            <div id="external-events" class="fc-event-list">
                                <h6 class="m-t-0 m-l-5 m-b-15">Draggable Events</h6>
                                <div class="fc-event" data-color="#00acac">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    Conference Meeting
                                </div>
                                <div class="fc-event" data-color="#348fe2">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-primary"></i></div>
                                    Birthday party
                                </div>
                                <div class="fc-event" data-color="#f59c1a">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-warning"></i></div>
                                    Dance party
                                </div>
                                <div class="fc-event" data-color="#ff5b57">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-danger"></i></div>
                                    Dinner
                                </div>
                                <div class="fc-event">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-inverse"></i></div>
                                    Happy Hour
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-primary"></i></div>
                                    Dance Class
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-inverse"></i></div>
                                    Conference
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    Meeting
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-warning"></i></div>
                                    Long Event
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    All Day Event
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Calendar v1</h6>
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
                        <div class="col-lg-12">
                            <div id="calendar" class="vertical-box-column calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Google Calendar</h6>
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
                        <div class="col-lg-12">
                            <div id="external-events1" class="fc-event-list">
                                <h6 class="m-t-0 m-l-5 m-b-15">Draggable Events</h6>
                                <div class="fc-event" data-color="#00acac">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    Conference Meeting
                                </div>
                                <div class="fc-event" data-color="#348fe2">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-primary"></i></div>
                                    Birthday party
                                </div>
                                <div class="fc-event" data-color="#f59c1a">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-warning"></i></div>
                                    Dance party
                                </div>
                                <div class="fc-event" data-color="#ff5b57">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-danger"></i></div>
                                    Dinner
                                </div>
                                <div class="fc-event">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-inverse"></i></div>
                                    Happy Hour
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-primary"></i></div>
                                    Dance Class
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-inverse"></i></div>
                                    Conference
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    Meeting
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-warning"></i></div>
                                    Long Event
                                </div>
                                <div class="fc-event" data-color="#b6c2c9">
                                    <div class="fc-event-icon"><i
                                                class="fa fa-circle fa-fw f-s-9 text-success"></i></div>
                                    All Day Event
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Google Calendar</h6>
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
                        <div class="col-lg-12">
                            <div id="calendar1" class="vertical-box-column calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection