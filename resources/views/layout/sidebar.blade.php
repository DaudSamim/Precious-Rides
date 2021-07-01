Begin Sidebar-->
<div class="sidebar no_bg" data-color="black" data-image="{{ asset('assets/images/sidebar-bg.jpg') }}">
    <div class="sidebar-wrapper">
        <!--Begins Logo start-->
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini" style="width:82px">
                PRECIOUS
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                RIDE           </a>
        </div>
        <!--End Logo start-->

        <!--Begins User Section-->
        <div class="user">
            <div class="photo">
                <img alt="" src="{{ asset('assets/images/avatar/default-avatar.jpg') }}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#taxi_user_nav" class="collapsed">
                            <span class="ttu">Admin
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
                            <a class="profile-dropdown" href="/logout">
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
            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'masters') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_master">
                    <i class="make_icon"></i>
                    <p>
                        Masters
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'masters') ? 'in' : '' }}" id="taxi_master">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'role_master') || (request()->segment(2) == 'add_role_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/role_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Role Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'customer_master') || (request()->segment(2) == 'add_customer_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/customer_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customers Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'customer_type_master') || (request()->segment(2) == 'add_customer_type_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/customer_type_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customer Type Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'user_master') || (request()->segment(2) == 'add_user_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/user_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">User Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'zone_master') || (request()->segment(2) == 'add_zone_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/zone_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Zone Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'location_master') || (request()->segment(2) == 'add_location_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/location_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Location Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle_model_master') || (request()->segment(2) == 'add_vehicle_model_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/vehicle_model_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Model Location</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle_master') || (request()->segment(2) == 'add_vehicle_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/vehicle_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Master</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'reasons_master') || (request()->segment(2) == 'add_reasons_master') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('masters/reasons_master')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Reason Master</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'current_status') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_current_status">
                    <i class="make_icon"></i>
                    <p>
                        Current Status
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'current_status') ? 'in' : '' }}" id="taxi_current_status">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'free_vehicle') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/current_status/free_vehicle')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Free Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'booking_planner') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/current_status/booking_planner')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking Planner</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle_statistics') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/current_status/vehicle_statistics')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicles Statistics</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'news_feeds') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/current_status/news_feeds')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">News Feeds</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'auto_assigned_bookings') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/current_status/auto_assigned_bookings')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Auto Assigned Bookings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'trips_booking') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_trips_booking">
                    <i class="make_icon"></i>
                    <p>
                        Trips Booking
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'trips_booking') ? 'in' : '' }}" id="taxi_trips_booking">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'booking_v1') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/booking_v1')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking v1</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'booking_v2') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/booking_v2')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking v2</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'assign_allot') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/assign_allot')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Assign / Allot</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'pickup_drop') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/pickup_drop')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pickup / Drop</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'regular_trips') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/regular_trips')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Regular Trips</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'intercity_bookings') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/intercity_bookings')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Intercity Bookings</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'cc_collections') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/trips_booking/cc_collections')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">CC Collections</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'follow_up') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_follow_up">
                    <i class="make_icon"></i>
                    <p>
                        Follow-up
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'follow_up') ? 'in' : '' }}" id="taxi_follow_up">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'cancelled_trips') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/follow_up/cancelled_trips')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cancelled Trips</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'enquiries') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/follow_up/enquiries')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Enquiries</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'follow_up') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/follow_up/follow_up')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Follow-up</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'feedback_complaint') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/follow_up/feedback_complaint')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Feedback / Complaint</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'registration') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_registration">
                    <i class="make_icon"></i>
                    <p>
                        Registration
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'registration') ? 'in' : '' }}" id="taxi_registration">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'owner') || (request()->segment(2) == 'add_owner') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('registration/owner')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Owner</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('registration/vehicle')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'driver') || (request()->segment(2) == 'add_driver') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('registration/driver')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Driver</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'traiff') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('registration/traiff')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tariff</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'add_dnd_list') || (request()->segment(2) == 'dnd_list') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('registration/dnd_list')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">DND List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'payments') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_payments">
                    <i class="make_icon"></i>
                    <p>
                        Payments
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'payments') ? 'in' : '' }}" id="taxi_payments">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'payment_list') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('payments/payment_list')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment List</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'make_payment') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('payments/make_payment')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Make Payment</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'pending_payment') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('payments/pending_payment')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pending Payment</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'lock_vehicle') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('payments/lock_vehicle')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Lock Vehicle</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Attendance</li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'attendance') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_attendance">
                    <i class="make_icon"></i>
                    <p>
                        Attendance
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'attendance') ? 'in' : '' }}" id="taxi_attendance">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'attendance_break') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/attendance/attendance_break')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Attendance / Break</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Reports</li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'reports') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_report">
                    <i class="make_icon"></i>
                    <p>
                        Reports
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'reports') ? 'in' : '' }}" id="taxi_report">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'pnr') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/pnr')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">PNR</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'booking_report') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/booking_report')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Booking</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'cancelled_booking') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/cancelled_booking')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cancelled Booking</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle_summary') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/vehicle_summary')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Summary Report</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'attendance') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/attendance')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'customer_report') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/customer_report')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'top_customers') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/reports/top_customers')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Top Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'summary') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_summary">
                    <i class="make_icon"></i>
                    <p>
                        Summary
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'summary') ? 'in' : '' }}" id="taxi_summary">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'dispatcher_wise') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/summary/dispatcher_wise')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dispatcher Wise</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vehicle_consolidate') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/summary/vehicle_consolidate')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vehicle Consolidate</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'call_flow') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/summary/call_flow')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Call Flow</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Settings</li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'settings') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_settings">
                    <i class="make_icon"></i>
                    <p>
                        Settings
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'settings') ? 'in' : '' }}" id="taxi_settings">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'site_settings') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/settings/site_settings')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Site Settings</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'permissions') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/settings/permissions')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Permissions</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'payment') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/settings/payment')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'any_vehicle') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/settings/any_vehicle')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Any Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'mail_settings') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/settings/mail_settings')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Mail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">Dashboard</li>

            <li class="nav-item has-sub-menu {{ (request()->segment(2) == 'dashboard_v1') ? 'active' : '' }}">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_dashboard">
                    <i class="make_icon"></i>
                    <p>
                        Dashboard
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'dashboard') ? 'in' : '' }}" id="taxi_dashboard">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'dashboard_v1') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('dashboard/dashboard_v1')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dashboard v1</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'dashboard_v2') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('dashboard/dashboard_v2')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dashboard v2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu">
                <a class="nav-link" data-toggle="collapse" href="#taxi_page_layouts">
                    <i class="make_icon"></i>
                    <p>
                        Page Layouts
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_page_layouts">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/sidebar_layout')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sidebar Layout</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/minified_sidebar')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Minified Sidebar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/both_menubar')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Both Menubar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/sidebar_fixed_nav')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sidebar Fixed Topbar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/horizontal_layout')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Horizontal Layout</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/top_nav_fixed')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Top Nav</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/fixed_menu_bar')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Menubar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/fixed_both_nav')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Both Nav</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/fixed_footer')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Footer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('page_layout/unfixed_footer')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Un Fixed Footer</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'applications') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_applications">
                    <i class="make_icon"></i>
                    <p>
                        Applications
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'applications') ? 'in' : '' }}" id="taxi_applications">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'scrumboard') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/applications/scrumboard')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Scrumboard</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'chatwidget') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/applications/chatwidget')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Chat Widget</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'contact_application') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/applications/contact_application')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Contact Applications</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'pricing_table') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/applications/pricing_table')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pricing Tables</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'calendar') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/applications/calendar')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Calendar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-header">UI Elements</li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'ui_elements') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_essential">
                    <i class="make_icon"></i>
                    <p>
                        UI Elements
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'ui_elements') ? 'in' : '' }}" id="taxi_essential">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'accordion') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/accordion')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Accordion</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'alert') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/alert')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Alert</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'badges') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/badges')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Badges</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'button') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/button')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'carousel') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/carousel')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Carousel</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'dropdowns') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/dropdowns')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Dropdown</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'lightbox') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/lightbox')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Lightbox</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'googlemap') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/googlemap')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Google Map</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'vectormap') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/vectormap')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Vector Map</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'modals') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/modals')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'timeline') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/timeline')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Timeline</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'pagination') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/pagination')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Pagination</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'progressbar') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/progressbar')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Progress</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'notification') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/notification')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'tabs') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/tabs')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tabs</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'treeview') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/treeview')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Tree View</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'typography') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/typography')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Typography</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'sweetalerts') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/sweetalerts')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'spinerbuttons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/ui_elements/spinerbuttons')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Spinner Buttons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'tables') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_ui_elements">
                    <i class="make_icon"></i>
                    <p>
                        Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'tables') ? 'in' : '' }}" id="taxi_ui_elements">
                    <ul class="nav">
                        <li class=" nav-item {{ (request()->segment(2) == 'regular_tables') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/regular_tables')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Regular Tables</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'bootstrap_tables') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/bootstrap_tables')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Bootstrap Tables</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_default') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_default')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Default DataTable</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_autofill') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_autofill')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Autofill</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_buttons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_buttons')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Buttons</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_colreorder') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_colreorder')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Col Reorder</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_fixed_columns') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_fixed_columns')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Col</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_fixed_header') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_fixed_header')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fixed Header</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_keytable') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_keytable')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Key Table</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_responsive') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_responsive')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Responsive</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_rowreorder') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_rowreorder')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Row Reorder</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_scroller') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_scroller')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Scroller</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_select') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_select')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Select</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_combine') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_combine')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Combination</span>
                            </a>
                        </li>
                        <li class=" nav-item {{ (request()->segment(2) == 'datatable_ajax') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/tables/datatable_ajax')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Ajax Table</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'charts') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_components">
                    <i class="make_icon"></i>
                    <p>
                        Charts
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'charts') ? 'in' : '' }}" id="taxi_components">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'morrischart') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/morrischart')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Morris Charts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'flotchart') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/flotchart')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Flot Charts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'chartjs') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/chartjs')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">ChartJS</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'echarts') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/echarts')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">ECharts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'chartist') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/chartist')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Chartist</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'rickshaw') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/rickshaw')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Rickshaw Charts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'amchart') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/amchart')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">AM Charts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'highchart') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/highchart')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Highcharts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'fusionchart') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/charts/fusionchart')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Fusion Charts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'recaptcha') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/google/recaptcha')}}">
                    <i class="make_icon"></i>
                    <p>
                        Recaptcha
                    </p>
                </a>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'forms') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_form_stuff">
                    <i class="make_icon"></i>
                    <p>
                        Forms
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'forms') ? 'in' : '' }}" id="taxi_form_stuff">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'form_elements') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/forms/form_elements')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Elements</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'form_plugins') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/forms/form_plugins')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Plugins</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'form_validation') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/forms/form_validation')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form Validation</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'form_xeditable') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/forms/form_xeditable')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Form X-Editable</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'editors') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/forms/editors')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Editors</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'widgets') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/widgets/widgets')}}">
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
                            <a class="nav-link sub_link" href="{{url('/authentication/login_v1')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Login V1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/login_v2')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Login V2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/registration_v1')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Registered V1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/registration_v2')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Registered V2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/reset_password')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Reset Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/forgot_password')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Forgot Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/authentication/lock_screen')}}">
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
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_welcome')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Welcome</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_order_confirm')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Order Confirmation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_payment')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Payment Due</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_forgot_password')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Forgot Password</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_activate')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Activate Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_birthday')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Birthday Wish</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_large_table')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Large Table</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="{{url('/email_template/sm_email_template_small_table')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Small Table</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'error_pages') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_maps">
                    <i class="make_icon"></i>
                    <p>
                        Error Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'error_pages') ? 'in' : '' }}" id="taxi_maps">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'page_400') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/error_pages/page_400')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 400</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'page_500') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/error_pages/page_500')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 500</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'page_503') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/error_pages/page_503')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Page 503</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'cookies') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_gallery">
                    <i class="make_icon"></i>
                    <p>
                        Cookies
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'cookies') ? 'in' : '' }}" id="taxi_gallery">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'cookies_v1') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/cookies/cookies_v1')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v1</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'cookies_v2') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/cookies/cookies_v2')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v2</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'cookies_v3') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/cookies/cookies_v3')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Cookies v3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'invoice') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_extras">
                    <i class="material-icons">stars</i>
                    <p>
                        Invoice
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'invoice') ? 'in' : '' }}" id="taxi_extras">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'invoice') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/invoice/invoice')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Invoice</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item has-sub-menu {{ (request()->segment(1) == 'icons') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#taxi_icons">
                    <i class="make_icon"></i>
                    <p>
                        Icons
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{ (request()->segment(1) == 'icons') ? 'in' : '' }}" id="taxi_icons">
                    <ul class="nav">
                        <li class="nav-item {{ (request()->segment(2) == 'material_icons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/icons/material_icons')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Material Icon</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'font_awesome') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/icons/font_awesome')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Font Awesome</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'simple_lineicons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/icons/simple_lineicons')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Simple line Icons</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'weather_icons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/icons/weather_icons')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Weather Icons</span>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(2) == 'ion_icons') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('/icons/ion_icons')}}">
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
<!--End Sidebar