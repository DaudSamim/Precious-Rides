@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/js.cookie/jquery.cookie.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Cookies v3</h6>
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
                    <!-- BEGIN COOKIE -->
                    <div class="pvr_cookie boxedBottomRight" id="cookie_position">
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

                    <div class="pvr_cookie boxedBottomLeft" id="cookie_position1">
                        <!--topLeft, bottomLeft, boxedTopLeft, boxedTopRight, boxedBottomLeft, boxedBottomRight, boxedCenterTop, boxedCenterBottom-->
                        <div class="CloseBtn close closeModal"></div>
                        <div class="cookieNotice bg-warning" id="cookie_color1">
                            <!--cookie_dark, cookie_light, bg-primary, bg-success, bg-danger, bg-info, bg-warning, bg-secondary-->
                            <div class="title">We use a few cookies</div>
                            <p>This website uses cookies to ensure you get the best
                                experience on our website.
                                <a href="http://www.allaboutcookies.org/cookies/" target="_blank">What is cookie ?</a>
                                <a href="javascript:void(0)">Our Cookie Policy</a>.</p>
                            <label class="closeModal setCookie-1"></label>
                        </div>
                    </div>

                    <div class="pvr_cookie boxedCenterBottom">
                        <!--topLeft, bottomLeft, boxedTopLeft, boxedTopRight, boxedBottomLeft, boxedBottomRight, boxedCenterTop, boxedCenterBottom-->
                        <div class="CloseBtn close closeModal"></div>
                        <div class="cookieNotice bg-primary">
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