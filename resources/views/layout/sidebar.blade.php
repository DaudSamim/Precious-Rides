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
                        <li class="nav-item {{ (request()->segment(1) == 'promo_code') || (request()->segment(2) == 'promo_code') ? 'active' : '' }}">
                            <a class="nav-link sub_link" href="{{url('promo_code')}}">
                                <i class="make_icon"></i>
                                <span class="sidebar-normal">Promo Codes</span>
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

         
            

           
        </ul>
    </div>
</div>
<!--End Sidebar