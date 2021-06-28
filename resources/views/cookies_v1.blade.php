@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/js.cookie/jquery.cookie.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Cookies v1</h6>
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
                    <div class="text-center" style="margin-bottom: 60px;">
                        <h3 class="heading heading-2 strong-400 ttu">
                            Cookie
                        </h3>
                        <div class="fluid-paragraph fluid-paragraph-lg m-t-16">
                            Simple & easy to customize.
                            Don’t go by our Words, checkout our awesome demos and verify yourself.
                            Save 100s of hours of designing and coding work as we already did that for you.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cookie Position</label>
                                <select class="form-control form-control-lg" id="cookie_position_select">
                                    <option value="" disabled selected hidden>Select</option>
                                    <option value="topLeft">Full Width Top</option>
                                    <option value="bottomLeft">Full Width Bottom</option>
                                    <option value="boxedTopLeft">Top Left</option>
                                    <option value="boxedTopRight">Top Right</option>
                                    <option value="boxedBottomLeft">Bottom Left</option>
                                    <option value="boxedBottomRight">Bottom Right</option>
                                    <option value="boxedCenterTop">Center Top</option>
                                    <option value="boxedCenterBottom">Center Bottom</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cookie Theme</label>
                                <select class="form-control form-control-lg" id="cookie_color_select">
                                    <option value="" disabled selected hidden>Select Theme</option>
                                    <option value="cookie_dark">BG Dark</option>
                                    <option value="cookie_light">BG Light</option>
                                    <option value="bg-primary">BG Primary</option>
                                    <option value="bg-success">BG Success</option>
                                    <option value="bg-danger">BG Danger</option>
                                    <option value="bg-info">BG Info</option>
                                    <option value="bg-warning">BG Warning</option>
                                    <option value="bg-secondary">BG Secondary</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-world"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Left Top</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="left_top"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 res-xs-m-t-20 res-sm-m-t-20 res-md-m-t-20">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-wineglass-outline"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Left Bottom</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="left_bottom"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 res-xs-m-t-20 res-sm-m-t-20 res-md-m-t-20">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-videocam-outline"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Right Top</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="right_top"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 m-t-20">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-time-outline"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Right Bottom</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="right_bottom"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 m-t-20">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-thunderstorm-outline"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Top Center</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="top_center"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 m-t-20">
                            <div class="feature feature--boxed-border image_border active">
                                <div class="icon-block icon-block--style-1-v1">
                                    <div class="block-icon">
                                        <i class="ion-ios-stopwatch-outline"></i>
                                    </div>
                                    <div class="block-content">
                                        <h3 class="heading heading-5 strong-600">Bottom Center</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a target="_blank" href="javascript:void(0)" id="bottom_center"
                                           class="btn btn-icon-right m-t-16 btn-sm btn-primary text-white">
                                            View Cookie Modal Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BEGIN COOKIE -->
                    <div class="pvr_cookie boxedBottomRight" id="cookie_position" style="display: none;">
                        <!--topLeft, bottomLeft, boxedTopLeft, boxedTopRight, boxedBottomLeft, boxedBottomRight, boxedCenterTop, boxedCenterBottom-->
                        <div class="CloseBtn close closeModal"></div>
                        <div class="cookieNotice cookie_dark" id="cookie_color">
                            <!--cookie_dark, cookie_light, bg-primary, bg-success, bg-danger, bg-info, bg-warning, bg-secondary-->
                            <div class="title">We use a few cookies</div>
                            <p>This website uses cookies to ensure you get the best
                                experience on our website.
                                <a href="http://www.allaboutcookies.org/cookies/" target="_blank">What is cookie ?</a>
                                <a href="javascript:void(0)">Our Cookie Policy</a>.</p>
                            <label class="closeModal setCookie-1"></label>
                        </div>
                    </div>
                    <!-- END COOKIE -->

                    <!-- BEGIN COOKIE -->
                    <div id="cookie_modal" class="modal effect-flip-horizontal top_left">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
                                <div class="modal-body p-0">
                                    <div class="row no-gutters">
                                        <div class="col-md-12 bg-white p-0">
                                            <div class="p-20">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="p-l-30 p-r-30 p-t-10 p-b-10">
                                                    <h3 class="f-w-400 m-b-5 m-t-5">Welcome back!</h3>
                                                    This website uses cookies to ensure you get the best
                                                    experience on our website.
                                                    <a href="http://www.allaboutcookies.org/cookies/" target="_blank">What is cookie ?</a>
                                                    <a href="javascript:void(0)">Our Cookie Policy</a>
                                                    <div class="checkbox m-t-30">
                                                        <input type="checkbox" id="chkRemember">
                                                        <label for="chkRemember">Don't show this again!</label>
                                                    </div>
                                                    <div class="m-t-0 m-b-20 f-s-12">
                                                        Privacy Policy <a href="javascript:void(0)" id="agree_cookie" class="pull-right">Understand</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COOKIE -->
                </div>
            </div>
        </div>
    </div>
@endsection