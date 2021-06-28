@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/js.cookie/jquery.cookie.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Cookies v2</h6>
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
                    <div class="pvr_cookie bottomLeft" id="cookie_position">
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
                </div>
            </div>
        </div>
    </div>
@endsection