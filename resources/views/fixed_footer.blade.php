<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>ALAR TAXI | Fixed Footer</title>

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

<body class="sidebar_menu top_nav_fixed fixed_footer">

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>
<!-- END PAGE-LOADER -->

<!--Begin Sidebar-->
<div class="sidebar no_bg" data-color="black" data-image="{{ asset('assets/images/sidebar-bg.jpg') }}">
    <div class="sidebar-wrapper">
        <!--Begins Logo start-->
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                ALAR
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                TAXI
            </a>
        </div>
        <!--End Logo start-->

        <!--Begins User Section-->
        <div class="user">
            <div class="photo">
                <img alt="" src="{{ asset('assets/images/avatar/default-avatar.jpg') }}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#taxi_user_nav" class="collapsed">
                            <span class="ttu">Andrew Heston
                                <b class="caret"></b>
                            </span>
                </a>
                <div class="collapse m-t-10" id="taxi_user_nav">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini m-t-5"><i class="icon-user"></i></span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini m-t-5"><i class="icon-settings"></i></span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini m-t-5"><i class="icon-logout"></i></span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End User Section-->

        <ul class="nav" id="side_nav">
            <li class="nav-header">Taxi Booking</li>
            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_master">
                    <i class="make_icon"></i>
                    <p>
                        Masters
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_master">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="role_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Role Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="customer_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customers Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="customer_type_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customer Type Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="user_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">User Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="zone_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Zone Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="location_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Location Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_model_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Model Location</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Master</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="reasons_master.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Reason Master</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_current_status">
                    <i class="make_icon"></i>
                    <p>
                        Current Status
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_current_status">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="free_vehicle.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Free Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="booking_planner.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking Planner</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_statistics.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicles Statistics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="news_feeds.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">News Feeds</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="auto_assigned_bookings.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Auto Assigned Bookings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_trips_booking">
                    <i class="make_icon"></i>
                    <p>
                        Trips Booking
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_trips_booking">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="booking_v1.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking v1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="booking_v2.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking v2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="assign_allot.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Assign / Allot</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="pickup_drop.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pickup / Drop</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="regular_trips.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Regular Trips</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="intercity_bookings.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Intercity Bookings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cc_collections.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">CC Collections</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_follow_up">
                    <i class="make_icon"></i>
                    <p>
                        Follow-up
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_follow_up">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cancelled_trips.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cancelled Trips</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="enquiries.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Enquiries</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="follow_up.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Follow-up</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="feedback_complaint.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Feedback / Complaint</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_registration">
                    <i class="make_icon"></i>
                    <p>
                        Registration
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_registration">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="owner.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Owner</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="driver.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Driver</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="traiff.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tariff</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dnd_list.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">DND List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_payments">
                    <i class="make_icon"></i>
                    <p>
                        Payments
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_payments">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="payment_list.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="make_payment.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Make Payment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="pending_payment.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pending Payment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="lock_vehicle.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Lock Vehicle</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Attendance</li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_attendance">
                    <i class="make_icon"></i>
                    <p>
                        Attendance
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_attendance">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="attendance_break.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Attendance / Break</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Reports</li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_report">
                    <i class="make_icon"></i>
                    <p>
                        Reports
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_report">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="pnr.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">PNR</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="booking.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cancelled_booking.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cancelled Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_summary.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Summary Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="attendance.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="customers.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="top_customers.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Top Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_summary">
                    <i class="make_icon"></i>
                    <p>
                        Summary
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_summary">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dispatcher_wise.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dispatcher Wise</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_consolidate.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Consolidate</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="call_flow.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Call Flow</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Settings</li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_settings">
                    <i class="make_icon"></i>
                    <p>
                        Settings
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_settings">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="site_settings.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Site Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="permissions.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Permissions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="payment.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="any_vehicle.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Any Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="mail_settings.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Mail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Dashboard</li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_dashboard">
                    <i class="make_icon"></i>
                    <p>
                        Dashboard
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_dashboard">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="index.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dashboard v1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dashboard_v2.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dashboard v2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu active">
                <a class="nav-link" data-toggle="collapse" href="#taxi_page_layouts">
                    <i class="make_icon"></i>
                    <p>
                        Page Layouts
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu in" id="taxi_page_layouts">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sidebar_layout.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sidebar Layout</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="minified_sidebar.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Minified Sidebar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="both_menubar.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Both Menubar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sidebar_fixed_nav.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sidebar Fixed Topbar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="horizontal_layout.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Horizontal Layout</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="top_nav_fixed.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Top Nav</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="fixed_menu_bar.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Menubar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="fixed_both_nav.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Both Nav</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link sub_link" href="fixed_footer.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Footer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="unfixed_footer.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Un Fixed Footer</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_applications">
                    <i class="make_icon"></i>
                    <p>
                        Applications
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_applications">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="scrumboard.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Scrumboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="chatwidget.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Chat Widget</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="contactapplication.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Contact Applications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="pricingtable.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pricing Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="calendar.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Calendar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">UI Elements</li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_essential">
                    <i class="make_icon"></i>
                    <p>
                        UI Elements
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_essential">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="accordion.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Accordion</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="alert.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Alert</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="badges.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Badges</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="button.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="carousel.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Carousel</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dropdowns.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dropdown</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="lightbox.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Lightbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="googlemap.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Google Map</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vectormap.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vector Map</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="modals.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="timeline.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Timeline</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="pagination.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pagination</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="progressbar.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Progress</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="notification.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="tabs.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tabs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="treeview.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tree View</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="typography.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Typography</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sweetalerts.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="spinerbuttons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Spinner Buttons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_ui_elements">
                    <i class="make_icon"></i>
                    <p>
                        Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_ui_elements">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="regular_tables.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Regular Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="bootstrap_tables.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Bootstrap Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_default.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Default DataTable</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Autofill.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Autofill</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Buttons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Colreorder.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Col Reorder</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Fixed_Columns.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Col</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Fixed_Header.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Header</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Keytable.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Key Table</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Responsive.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Responsive</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Rowreorder.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Row Reorder</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Scroller.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Scroller</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Select.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Select</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Combine.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Combination</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dataTable_Ajax.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Ajax Table</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_components">
                    <i class="make_icon"></i>
                    <p>
                        Charts
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_components">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="morrischart.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Morris Charts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="flotchart.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Flot Charts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="chartjs.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">ChartJS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="echarts.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">ECharts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="chartist.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Chartist</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="rickshaw.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Rickshaw Charts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="amchart.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">AM Charts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="highchart.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Highcharts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="fusionchart.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fusion Charts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="recaptcha.html">
                    <i class="make_icon"></i>
                    <p>
                        Recaptcha
                    </p>
                </a>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_form_stuff">
                    <i class="make_icon"></i>
                    <p>
                        Forms
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_form_stuff">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="formelements.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Elements</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="formplugins.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Plugins</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="formvalidation.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Validation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="formxeditable.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form X-Editable</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="editors.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Editors</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="widgets.html">
                    <i class="make_icon"></i>
                    <p>
                        Widget
                    </p>
                </a>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_tables">
                    <i class="make_icon"></i>
                    <p>
                        Authentication
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_tables" style="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="login_v1.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Login V1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="login_v2.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Login V2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="registration_v1.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Registered V1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="registration_v2.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Registered V2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="resetpassword.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Reset Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="forgotpassword.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Forgot Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="locakscreen.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Lock Screen</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_charts">
                    <i class="make_icon"></i>
                    <p>
                        Email Templates
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_charts">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_welcome.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Welcome</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_order_confirm.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Order Confirmation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_payment.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment Due</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_forgot_password.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Forgot Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_activate.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Activate Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_birthday.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Birthday Wish</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_large_table.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Large Table</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="sm_email_template_small_table.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Small Table</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_maps">
                    <i class="make_icon"></i>
                    <p>
                        Error Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_maps">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="page400.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 400</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="page500.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 500</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="page503.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 503</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_gallery">
                    <i class="make_icon"></i>
                    <p>
                        Cookies
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_gallery">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cookies_v1.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cookies_v2.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="cookies_v3.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_extras">
                    <i class="material-icons">stars</i>
                    <p>
                        Invoice
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_extras">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="invoice.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Invoice</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_icons">
                    <i class="make_icon"></i>
                    <p>
                        Icons
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_icons">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="materialicons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Material Icon</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="fontawesome.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Font Awesome</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="simplelineicons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Simple line Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="weathericons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Weather Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="ionicons.html">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Ionicons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_menu_levels">
                    <i class="make_icon"></i>
                    <p>
                        Menu Levels
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_menu_levels" style="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="javascript:void(0)">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Menu 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="javascript:void(0)">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Menu 2</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#taxi_menu_sub_level">
                                <i class="make_icon"></i>
                                <p>
                                    Menu 3
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="taxi_menu_sub_level">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                            <i class="make_icon"></i>
                                            <span class="sidebar-normal">Menu 3.1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                            <i class="make_icon"></i>
                                            <span class="sidebar-normal">Menu 3.2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link sub_link second_level_link" href="javascript:void(0)">
                                            <i class="make_icon"></i>
                                            <span class="sidebar-normal">Menu 3.3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--End Sidebar-->

<!-- BEGIN HEADER -->
<div id="header">

    <!-- BEGIN TOP NAV ABR -->
    <div class="navbar navbar-default navbar-fixed-top bordered">
        <div class="navbar-header">
            <ul class="nav navbar-nav m-l-0 pull-left">
                <li id="minimizeSidebar" class="navbar-toggler">
                    <a href="javascript:void(0)">
                        <i class="icons icon-menu f-s-18 f-w-600 v-a-m m-r-10 hidden-xs"></i> <img
                                src="{{ asset('assets/images/logo.png') }}"
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
                    <a class="text-center">
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
                        <h5><span class="f-w-700">Page Layouts</span> - Fixed Footer</h5>

                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="javascript:void(0)">Page Layouts</a></li>
                            <li class="active">Fixed Footer</li>
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
                    <h6 class="panel-title">Fixed Footer</h6>
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
<div class="navbar navbar-default navbar-fixed-bottom">
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

<!--BEGIN THEME PANEL-->
<div class="template-options-wrapper" id="theme_panel">
    <a href="javascript:void(0)" class="template-options-btn">
        <i class="ion-ios-settings" id="theme_panel_icon"></i>
    </a>
    <h1 class="template-option-logo">ALAR TAXI</h1>

    <h6 class="template-options-title">Template Settings</h6>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Fixed Topbar</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="fixed_topbar" checked>
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Minified Sidebar</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="minified_sidebar">
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Sidebar Background Image</label>
        <div>
            <label class="toggle-switch m-b-0">
                <input type="checkbox" id="background_image_sidebar">
                <span class="toggle-switch-slider round"></span>
            </label>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper">
        <label class="slim-options-label">Sidebar Color</label>
        <div>
            <div class="toggle-switch m-b-0">
                <div class="fcp-colors m-l-75" id="sidebar_color">
                    <div class="color-selector top-bar-color-selector color-blue" data-color="blue"></div>
                    <div class="color-selector top-bar-color-selector color-purple" data-color="purple"></div>
                    <div class="color-selector top-bar-color-selector color-orange" data-color="orange"></div>
                    <div class="color-selector top-bar-color-selector color-green" data-color="green"></div>
                    <div class="color-selector top-bar-color-selector color-red" data-color="red"></div>
                    <div class="color-selector top-bar-color-selector color-azure" data-color="azure"></div>
                    <div class="color-selector top-bar-color-selector color-black selected" data-color="black"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- OPTION-ROW-WRAPPER -->
    <div class="option-row-wrapper" id="sticky_nav_div">
        <ul class="bg_imgs p-l-0">
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-1.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-3.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-4.jpg') }}" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-5.jpg') }}" alt="">
                </a>
            </li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/images/sidebar-bg.jpg') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--END THEME PANEL-->

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
