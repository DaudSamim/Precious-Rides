<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>ALAR TAXI | Fixed Top Nav</title>

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
    <script>
        var plugin_path = '{{ asset("assets/plugins") }}/';
        var image_path = '{{ asset("assets") }}/';
    </script>
    <!-- BEGIN END BASE CSS STYLE -->
</head>

<body class="top_nav_fixed">

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>
<!-- END PAGE-LOADER -->

<!-- BEGIN HEADER -->
<div id="header">

    <!-- BEGIN TOP NAV ABR -->
    <div class="navbar navbar-inverse navbar-fixed-top bordered">
        <div class="navbar-header m-t-5">
            <ul class="nav navbar-nav m-l-0 pull-left">
                <li id="minimizeSidebar" class="navbar-toggler">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('assets/images/logo.png') }}"
                             alt="perfectin" class="w-115">
                    </a>
                </li>

                <li data-toggle="tooltip" data-placement="bottom" data-trigger="hover" class="hidden-xs hidden-sm hidden-md"
                    title="Enter Peek Hours">
                    <div class="input-group input-group-sm width-300 m-t-8 m-l-25">
                        <span class="input-group-addon btn bg-dark">Peek Hours</span>
                        <input type="text" class="form-control" placeholder="Peek Hours" value="10:10 - 02:54">
                        <span class="input-group-addon btn bg-dark">Save</span>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li class="open_ms_menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
                <li class="open_login_modal">
                    <a href="javascript:void(0)">
                        <i class="fa fa-sign-in"></i>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#mobile_nav">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li id="minimizeSidebar1" class="navbar-toggler">
                    <a class="text-center collapsed" data-toggle="collapse" data-target="#menu_nav">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="mobile_nav">
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="open_ms_menu hidden-xs">
                        <a href="javascript:void(0)">
                            <i class="fa fa-wifi"></i> Apps
                        </a>
                    </li>
                    <li class="open_login_modal hidden-xs">
                        <a href="javascript:void(0)">
                            <i class="fa fa-sign-in"></i> Sign In
                        </a>
                    </li>
                    <li id="btn-search" class="hidden-xs">
                        <a href="javascript:void(0)">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li id="toggleFullScreen" class="hidden-xs">
                        <a href="javascript:void(0)">
                            <i class="fa fa-desktop"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="visible-xs-inline-block position-right">Notification(s)</span>
                            <span class="pulse hidden-xs"></span>
                        </a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Notification(s)
                                <ul class="icons-list">
                                    <li><a href="javascript:void(0)" class="f-s-10 m-t-5">View All</a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body w-in-20">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/avatar/user-1.jpg') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">New User Registered</span>
                                            <span class="media-annotation pull-right">2 mins ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/avatar/user-2.jpg') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Andrew shared a memory</span>
                                            <span class="media-annotation pull-right">1 hour ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/pf_logo.png') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Perfectin has 1 new view</span>
                                            <span class="media-annotation pull-right">Yesterday</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/svg/server.svg') }}" class="thumbnail p-7" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Server Error Reports</span>
                                            <span class="media-annotation pull-right">2 days ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/avatar/user-1.jpg') }}" alt="perfectin">
                            <span>Andrew</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header navigations">Navigation</li>
                            <li class="navigations">
                                <a href="javascript:void(0)">
                                    <span class="badge badge-primary pull-right">4</span>
                                    <i class="fa fa-comment"></i> Messages
                                </a>
                            </li>
                            <li class="navigations">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-user"></i> My profile
                                </a>
                            </li>
                            <li class="navigations">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-cogs"></i> Account settings
                                </a>
                            </li>
                            <li class="divider navigations"></li>
                            <li class="navigations">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END TOP NAV ABR -->

    <!-- BEGIN MENU BAR -->
    <div class="navbar navbar-default navbar-transparent" id="main_menu_bar">
        <div class="navbar-header hidden-sm hidden-xs" style="display: none;">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/images/logo.png') }}" alt="perfectin">
            </a>
        </div>

        <div class="navbar-collapse collapse" id="menu_nav">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle p-l-8" data-toggle="dropdown">
                        Dashboard <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-200">
                        <li class="dropdown-header">Navigations</li>
                        <li>
                            <a href="index.html">
                                <i class="icon-align-center-horizontal"></i> Dashboard 01
                            </a>
                        </li>
                        <li>
                            <a href="dashboard_v2.html">
                                <i class="icon-flip-vertical3"></i> Dashboard 02
                            </a>
                        </li>
                        <li>
                            <a href="dashboard_v3.html">
                                <i class="icon-flip-vertical3"></i> Dashboard 03
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown mega-menu mega-menu-wide active">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        UI Elements <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="menu-icons">
                                        <li class="active">
                                            <a href="accordion.html">
                                                <img src="{{ asset('assets/images/svg/barcode.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Accordion
                                                <small>List</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="alert.html">
                                                <img src="{{ asset('assets/images/svg/calendar.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Alert
                                                <small>Notification</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="badges.html">
                                                <img src="{{ asset('assets/images/svg/call-center.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Badges
                                                <small>Notification</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="button.html">
                                                <img src="{{ asset('assets/images/svg/cargo-ship.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Buttons
                                                <small>Button</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="carousel.html">
                                                <img src="{{ asset('assets/images/svg/cargo.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Carousel
                                                <small>Slider</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="dropdowns.html">
                                                <img src="{{ asset('assets/images/svg/check-list.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Dropdowns
                                                <small>Button</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="lightbox.html">
                                                <img src="{{ asset('assets/images/svg/checkout.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Lightbox
                                                <small>Preview</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="googlemap.html">
                                                <img src="{{ asset('assets/images/svg/delivery-man.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Google Map
                                                <small>Map</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="vectormap.html">
                                                <img src="{{ asset('assets/images/svg/address.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Vector Map
                                                <small>Map</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="modals.html">
                                                <img src="{{ asset('assets/images/svg/delivery.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Modals
                                                <small>Modal</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="timeline.html">
                                                <img src="{{ asset('assets/images/svg/24-hours.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Time Line
                                                <small>List</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="pagination.html">
                                                <img src="{{ asset('assets/images/svg/delivery1.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Pagination
                                                <small>Page</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="progressbar.html">
                                                <img src="{{ asset('assets/images/svg/delivery2.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Progress Bar
                                                <small>Progress</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="notifications.html">
                                                <img src="{{ asset('assets/images/svg/fast-food.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Notifications
                                                <small>Alerts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="tables.html">
                                                <img src="{{ asset('assets/images/svg/fragile.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Tables
                                                <small>Table</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="tabs.html">
                                                <img src="{{ asset('assets/images/svg/logistics.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Tabs
                                                <small>Tabs</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="treeview.html">
                                                <img src="{{ asset('assets/images/svg/motorbike.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Tree View
                                                <small>List</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="typography.html">
                                                <img src="{{ asset('assets/images/svg/package.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Typography
                                                <small>Typography</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="sweetalerts.html">
                                                <img src="{{ asset('assets/images/svg/packaging.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Sweet Alerts
                                                <small>Alerts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="spinerbuttons.html">
                                                <img src="{{ asset('assets/images/svg/plane.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Spinner Buttons
                                                <small>Buttons</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="morrischart.html">
                                                <img src="{{ asset('assets/images/svg/processing.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Morris Charts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="flotchart.html">
                                                <img src="{{ asset('assets/images/svg/processing1.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Flot Charts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="chartjs.html">
                                                <img src="{{ asset('assets/images/svg/receipt.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                ChartJS
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="echarts.html">
                                                <img src="{{ asset('assets/images/svg/return.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                ECharts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="chartist.html">
                                                <img src="{{ asset('assets/images/svg/shipping.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Chartist
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="rickshaw.html">
                                                <img src="{{ asset('assets/images/svg/shipping1.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Rickshaw
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="amchart.html">
                                                <img src="{{ asset('assets/images/svg/shipping2.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                AM Charts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="highchart.html">
                                                <img src="{{ asset('assets/images/svg/shopping-bag.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                High Charts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="fusionchart.html">
                                                <img src="{{ asset('assets/images/svg/truck.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Fusion Charts
                                                <small>Charts</small>
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="recaptcha.html">
                                                <img src="{{ asset('assets/images/svg/warehouse.svg') }}" class="thumbnail"
                                                     alt="perfectin">
                                            </a>
                                            <h4 class="icon-name text-ellipsis">
                                                Recaptcha
                                                <small>Google</small>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown mega-menu mega-menu-wide">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        Pages <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-4 ">
                                    <span class="menu-heading">Authentication</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="login_v1.html">
                                                Login v1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login_v2.html">
                                                Login v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration_v1.html">
                                                Registration v1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration_v2.html">
                                                Registration v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="resetpassword.html">
                                                Reset Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forgotpassword.html">
                                                Forgot Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="locakscreen.html">
                                                Lock Screen
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="menu-heading">Email</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="emailtemplates.html">
                                                Email Templates
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4">
                                    <span class="menu-heading">Error Pages</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="page400.html">
                                                Page 400
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page500.html">
                                                Page 500
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page503.html">
                                                Page 503
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="menu-heading">Cookies</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="cookies_v1.html">
                                                Cookies v1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cookies_v2.html">
                                                Cookies v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cookies_v3.html">
                                                Cookies v3
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4">
                                    <span class="menu-heading">Icons</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="materialicons.html">
                                                Material Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html">
                                                Font Awesome
                                            </a>
                                        </li>
                                        <li>
                                            <a href="simplelineicons.html">
                                                Simple Line Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="weathericons.html">
                                                Weather Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ionicons.html">
                                                Ionicons
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="menu-heading">Invoice</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="invoice.html">
                                                Invoice
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-6 tac visible-lg">
                                    <img src="{{ asset('assets/images/monitor.png') }}" class="w-in-60" alt="perfectin">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        Forms <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-200">
                        <li class="dropdown-header">Navigations</li>
                        <li>
                            <a href="formelements.html">
                                <i class="icon-align-center-horizontal"></i> Form Elements
                            </a>
                        </li>
                        <li>
                            <a href="formplugins.html">
                                <i class="icon-align-center-horizontal"></i> Form Plugins
                            </a>
                        </li>
                        <li>
                            <a href="formvalidation.html">
                                <i class="icon-align-center-horizontal"></i> Form Validation
                            </a>
                        </li>
                        <li>
                            <a href="formxeditable.html">
                                <i class="icon-align-center-horizontal"></i> Form X-Editable
                            </a>
                        </li>
                        <li>
                            <a href="editors.html">
                                <i class="icon-align-center-horizontal"></i> Editors
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        Applications <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-200">
                        <li class="dropdown-header">Navigations</li>
                        <li>
                            <a href="scrumboard.html">
                                <i class="icon-align-center-horizontal"></i> Scrumboard
                            </a>
                        </li>
                        <li>
                            <a href="chatwidget.html">
                                <i class="icon-align-center-horizontal"></i> Chat Widget
                            </a>
                        </li>
                        <li>
                            <a href="contactapplication.html">
                                <i class="icon-align-center-horizontal"></i> Contact Application
                            </a>
                        </li>
                        <li>
                            <a href="pricingtable.html">
                                <i class="icon-align-center-horizontal"></i> Pricing Table
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="icon-align-center-horizontal"></i> Calendar
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets.html">Widgets</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END MENU BAR -->

</div>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTENT -->
<div class="page-container" id="page-container">

    <!-- BEGIN MAIN CONTENT -->
    <div class="main_content">
        <!-- BEGIN WRAPPER -->
        <div class="content-wrapper">
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h5><span class="f-w-700">Page Layouts</span> - Fixed Top Nav</h5>

                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="javascript:void(0)">Page Layouts</a></li>
                            <li class="active">Fixed Top Nav</li>
                        </ul>
                    </div>

                    <div>
                        <ul id="breadcrumb-right" class="hidden-xs">
                            <li class="breadcrumb-right-info">
                                <h5>
                                    BANDWIDTH <span class="text-success">3,23,357</span>
                                </h5>
                                <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline1">
                                    1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                                </div>
                            </li>
                            <li class="breadcrumb-right-info">
                                <h5>
                                    TRAFFIC <span class="text-success">4,78,494</span>
                                </h5>
                                <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline2">
                                    110,150,300,130,400,240,220,310,220,300, 270, 210
                                </div>
                            </li>
                            <li class="breadcrumb-right-info">
                                <h5>
                                    TRANSFER <span class="text-danger">2,81,281</span>
                                </h5>
                                <div class="sparkline hidden-xs hidden-md hidden-sm" id="sparkline3">
                                    110,150,300,130,400,240,220,310,220,300, 270, 210
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Fixed Top Nav</h6>
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
                            <h1 class="m-t-0">Lorem ipsum dolor sit amet consectetuer adipiscing
                                elit</h1>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa
                                <strong>strong</strong>. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus
                                mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis
                                enim. Donec pede justo, fringilla vel, aliquet nec,
                                vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede <a class="external ext" href="#">link</a>
                                mollis pretium. Integer tincidunt. Cras dapibus.
                                Vivamus elementum semper nisi. Aenean vulputate
                                eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                viverra nulla ut metus varius laoreet. Quisque rutrum.
                                Aenean imperdiet. Etiam ultricies nisi vel augue.
                                Curabitur ullamcorper ultricies nisi.</p>

                            <h1>Lorem ipsum dolor sit amet consectetuer adipiscing
                                elit</h1>

                            <h2>Aenean commodo ligula eget dolor aenean massa</h2>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem.</p>

                            <h2>Aenean commodo ligula eget dolor aenean massa</h2>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem.</p>

                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetuer.</li>
                                <li>Aenean commodo ligula eget dolor.</li>
                                <li>Aenean massa cum sociis natoque penatibus.</li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem.</p>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem.</p>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END PAGE CONTENT -->

<!-- BEGIN SEARCH -->
<div class="search">
    <i id="btn-search-close" class="btn--search-close"><i class="fa fa-times f-s-48"></i></i>
    <form class="search__form" action="#">
        <input class="search__input" name="search" type="search" placeholder="Search.." autocomplete="off"
               autocapitalize="off" spellcheck="false"/>
        <span class="search__info">Hit enter to search or ESC to close</span>
    </form>
    <div class="search__related">
        <div class="search__suggestion">
            <h3>May We Suggest?</h3>
            <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens
                #green</p>
        </div>
        <div class="search__suggestion">
            <h3>Is It This?</h3>
            <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken
                #lost</p>
        </div>
        <div class="search__suggestion">
            <h3>Needle, Where Art Thou?</h3>
            <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green
                #drone</p>
        </div>
    </div>
</div>
<!-- END SEARCH -->

<!-- BEGIN FOOTER -->
<div class="navbar navbar-default footer">
    <footer id="footer" class="footer footer-inverse">
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-7">
                    <div class="text-xs-center text-sm-left">
                        <ul class="footer-menu">
                            <li>
                                <a href="index.html" class="p-l-0" target="_blank">Home</a>
                            </li>
                            <li>
                                <a href="http://perfectin.co/" target="_blank">Website</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" target="_blank">Portfolio</a>
                            </li>
                        </ul>

                        <div class="copyright">
                            <ul class="copy-links">
                                <li>
                                    © 2019 <a href="http://perfectin.co/" target="_blank">Perfectin</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">Terms</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">License</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 res-xs-m-t-12">
                    <div class="text-sm-right">
                        <ul class="social-media social-media--style">
                            <li>
                                <a href="javascript:void(0)" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- END FOOTER -->

<!-- BEGIN TO TOP -->
<a href="javascript:void(0)" class="back-to-top btn-back-to-top"></a>
<!-- END TO TOP -->

<!--BEGIN OFFICE SIDEBAR-->
<div class="o365cs-base o365cs-nav-navMenu popupShadow removeFocusOutline o365cs-newALV3-on" data-ispopup="0"
     style="display: none;">
    <div class="o365cs-nav-navMenuContent">
        <button type="button" class="o365cs-nav-closeButton o365button">
            <span class="ion-ios-close-outline f-s-24"></span>
        </button>
        <div class="o365cs-nav-hasGetMoreAppsLink">
            <div class="o365cs-nav-pinnedTab o365cs-nav-navMenuTabContainer o365cs-nav-scrollbar">
                <div class="o365cs-nav-placesLinks">
                    <a class="o365cs-nav-fluentLink o365cs-nav-placesLink o365button"
                       target="_blank" href="javascript:void(0)">
                        <span>Office 365</span>
                        <span class="ion-ios-arrow-thin-right f-s-22 owaimg"> </span>
                    </a>
                </div>

                <span class="o365cs-nav-moduleLabel f-w-500" role="heading">Apps</span>
                <div class="o365cs-nav-appsModuleTiles">
                    <div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OutlookLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Outlook</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OneDrive"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>OneDrive</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(43, 87, 154); background-color: rgb(43, 87, 154);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--WordLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Word</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(33, 115, 70); background-color: rgb(33, 115, 70);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--ExcelLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Excel</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(183, 71, 42); background-color: rgb(183, 71, 42);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--PowerPointLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>PowerPoint</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(119, 25, 170); background-color: rgb(119, 25, 170);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OneNoteLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>PowerPoint</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(85, 88, 175); background-color: rgb(85, 88, 175);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--TeamsLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Teams</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                            class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--YammerLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Yammer</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="o365cs-clear"></div>
                <button type="button" class="o365cs-nav-fluentLink o365cs-nav-appsModuleMore o365button">
                    <span>All apps</span>
                    <span class="ion-ios-arrow-thin-right f-s-22 owaimg"> </span>
                </button>

                <span class="o365cs-nav-moduleLabel f-w-500" role="heading">Documents</span>

                <div class="o365cs-nav-docsModuleEmpty">
                    <div class="o365cs-nav-docsModuleEmptyImage"></div>
                    <span class="o365cs-nav-docsModuleEmptyTitle">Your recently viewed docs will show here.</span>
                    <span class="o365cs-nav-docsModuleEmptyText">Create new docs and collaborate with others.</span>
                    <div class="o365cs-clear"></div>
                    <div class="btn-group m-t-20">
                        <button class="btn btn-primary" type="button">
                            Upload New File
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END OFFICE SIDEBAR-->

<!-- BEGIN MODAL LOGIN -->
<div id="login_modal" class="modal effect-flip-horizontal fade">
    <div class="modal-dialog modal-lg fullmodal_login" role="document">
        <div class="modal-content bd-0 bg-white rounded overflow-hidden fullmodal">
            <div class="modal-body bg_header">
                <div class="row">
                    <div class="col-md-5 gray_right hidden-xs">
                        <div class="p-40">
                            <h1 class="m-b-20">ALAR TAXI</h1>
                            <div class="account-info">
                                <ul>
                                    <li><i class="icon-magic-wand"></i> Fully customizable</li>
                                    <li><i class="icon-layers"></i> Responsive Design</li>
                                    <li><i class="icon-drop"></i> Multiple Backgrounds</li>
                                    <li><i class="icon-arrow-right"></i> 24/7 Support / Service</li>
                                </ul>
                            </div>
                            <p class="m-t-30">
                                <span class="f-w-400 d-block m-b-15">Address:</span>
                                <span>Perfectin, Vetri Vinayagar Nagar, Ganapathy, Coimbatore, India 641006</span>
                            </p>
                            <div class="text-xs-center text-sm-right m-b-15 m-t-20">
                                <ul class="social-media social-media--style">
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Github">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="res-xs-p-0" style="padding: 30px;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="p-l-30 p-r-30 p-t-10 p-b-10">
                                <h3 class="f-w-400 m-b-5">Welcome back!</h3>
                                <p>Sign in to your account to continue</p>
                                <br>
                                <div class="form-group">
                                    <div class="sm-form-design">
                                        <input type="text" name="name" id="modal_username"
                                               class="form-control"
                                               placeholder="Please enter your username"
                                               required>
                                        <label class="control-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group m-b-20">
                                    <div class="sm-form-design">
                                        <input type="text" name="name" id="modal_password"
                                               class="form-control"
                                               placeholder="Please enter your password"
                                               required>
                                        <label class="control-label">Password</label>
                                    </div>
                                    <a href="javascript:void(0)" class="f-s-12 d-block m-t-10">Forgot password?</a>
                                </div>
                                <button class="btn p-t-12 p-b-12 btn-block btn-primary">Sign In</button>
                                <div class="m-t-30 m-b-20 f-s-12">
                                    Don't have an account yet? <a href="javascript:void(0)">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL LOGIN -->

<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.slimscroll.min/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
<!-- END BASE JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(function () {
        $('a').attr('href', 'javascript:void(0)');
    })
</script>
<!-- END PAGE LEVEL JS -->
</body>
</html>
