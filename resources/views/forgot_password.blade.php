<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>ALAR TAXI ADMIN DASHBOARD</title>

    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#4076e0">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4076e0">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4076e0">

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/essential.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- BEGIN END BASE CSS STYLE -->
</head>

<body class="login_v1">

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>
<!-- END PAGE-LOADER -->

<!-- BEGIN PAGE CONTENT -->
<div class="form-body">
    <div class="row">
        <div class="img-holder right">
            <div class="bg" style="background-image: url('{{ asset('assets/images/svg/reset.svg') }}');background-size: 80%;background-repeat: no-repeat;"></div>
            <div class="info-holder">

            </div>
        </div>
        <div class="form-holder right">
            <div class="form-content">
                <div class="form-items">
                    <h3 class="m-t-0">ALAR TAXI.</h3>
                    <p class="f-s-12">Access to the most powerfull tool in the entire design and web industry.</p>
                    <div class="tabbable">
                        <div class="tab-content">
                            <div class="tab-pane active" id="bottom_style2">
                                <h3 class="f-w-400 m-b-5">Forgot Password!</h3>
                                <p class="m-b-0">Sign in to your account to continue</p>
                                <br>
                                <div class="form-group m-b-20">
                                    <div class="form-group">
                                        <div class="sm-form-design">
                                            <input type="text" name="name" id="modal_username"
                                                   class="form-control"
                                                   placeholder="Please enter your username"
                                                   required>
                                            <label class="control-label">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn p-t-12 p-b-12 btn-block btn-primary">Reset Password</button>
                                <div>
                                    <a class="market-button windows-button m-t-10 pull-left m-r-0" href="javascript:void(0)" style="padding: 5px 14px 5px 40px;min-width: 49%;">
                                        <span class="mb-subtitle text-center">Sign in with</span>
                                        <span class="mb-title text-center">Microsoft</span>
                                    </a>
                                    <a class="market-button amazon-button m-t-10 pull-left m-r-0 m-l-5" href="javascript:void(0)" style="padding: 5px 14px 5px 40px;min-width: 49%;">
                                        <span class="mb-subtitle text-center">Sign in with</span>
                                        <span class="mb-title text-center">Amazon</span>
                                    </a>
                                </div>
                                <div class="m-t-30 m-b-20 f-s-12">
                                    Have an account yet? <a href="#bottom_style1" data-toggle="tab">Sign In</a>
                                    <a href="javascript:void(0)" class="f-s-12 d-block m-t-5">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT -->



<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/nicescroll/nicescroll.min.js') }}"></script>
<!-- END BASE JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- END PAGE LEVEL JS -->
</body>
</html>