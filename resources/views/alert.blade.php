@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Video Alerts</h6>
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
                                <h5 class="sm-inner-header">Style 1</h5>
                                <div class="sm-inner-desc">
                                    Provide contextual feedback messages for typical
                                    user actions with the handful of available and
                                    flexible alert messages.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-dismissible video_alert p-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true" class="text-white">&times;</span></button>
                        <div class="video_content">
                            <div class="video_title"><p class="video_title_text">Check
                                    our Limited Offers</p>
                                <h2 class="video_desc">Save up to 50%</h2></div>
                            <div class="video-player">
                                <video class="video_tag"
                                       src="{{ asset('assets/images/videos/free-video.mp4') }}"
                                       poster="http://via.placeholder.com/670x350"
                                       loop="loop" autoplay></video>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-dismissible video_alert p-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true" class="text-white">&times;</span></button>
                        <div class="video_content">
                            <div class="video_title text-right"><p class="video_title_text">Check
                                    our Limited Offers</p>
                                <h2 class="video_desc text-right">Save up to 50%</h2></div>
                            <div class="video-player">
                                <video class="video_tag"
                                       src="{{ asset('assets/images/videos/free-video.mp4') }}"
                                       poster="http://via.placeholder.com/670x350"
                                       loop="loop" autoplay></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Alerts</h6>
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
                                <h5 class="sm-inner-header">Style 2</h5>
                                <div class="sm-inner-desc">
                                    Provide contextual feedback messages for typical
                                    user actions with the handful of available and
                                    flexible alert messages.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert"><strong>Well done!</strong> You successfully
                        read
                        this important alert message.
                    </div>
                    <div class="alert alert-info" role="alert"><strong>Heads up!</strong> This alert needs your
                        attention, but it's not super important.
                    </div>
                    <div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check
                        yourself,
                        you're not looking too good.
                    </div>
                    <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things
                        up
                        and try submitting again.
                    </div>
                    <div class="alert alert-dark" role="alert"><strong>Oh snap!</strong> Change a few things
                        up
                        and try submitting again.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Dismissible Alerts</h6>
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
                                <h5 class="sm-inner-header">Style 3</h5>
                                <div class="sm-inner-desc">
                                    Provide contextual feedback messages for typical
                                    user actions with the handful of available and
                                    flexible alert messages.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h3 class="m-t-0">Hello World!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro minus sint optio
                            explicabo eum perspiciatis ipsam adipisci, excepturi repellendus debitis fugit
                            laborum quae, aspernatur ex neque hic nihil, reiciendis veritatis.</p>
                    </div>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h3 class="m-t-0">Hello World!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro minus sint optio
                            explicabo eum perspiciatis ipsam adipisci, excepturi repellendus debitis fugit
                            laborum quae, aspernatur ex neque hic nihil, reiciendis veritatis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Links in Alerts</h6>
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
                                <h5 class="sm-inner-header">Style 4</h5>
                                <div class="sm-inner-desc">
                                    Provide contextual feedback messages for typical
                                    user actions with the handful of available and
                                    flexible alert messages.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong>
                        You successfully read <a href="#" class="alert-link">this important alert message</a>.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Heads up!</strong>
                        This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong>
                        Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong>
                        <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection