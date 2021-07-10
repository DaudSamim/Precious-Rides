<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', '\App\Http\Controllers\UserController@getLogin');
Route::get('/login', '\App\Http\Controllers\UserController@getLogin')->name('login');
Route::post('/login', '\App\Http\Controllers\UserController@postLogin');
Route::post('/signup', '\App\Http\Controllers\APIController@sign_up');
Route::post('/verifyOPT', '\App\Http\Controllers\APIController@verifyOPT');
Route::post('/calculateFare', '\App\Http\Controllers\APIController@calculateFare');


Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard/dashboard_v1', 'IndexController@index')->name("dashboard");

	Route::get('/registration/add_owner', 'OwnerController@index')->name("add_owner");
	Route::get('/registration/owner', 'OwnerController@list')->name("owner");
	Route::post('add_owner','\App\Http\Controllers\UserController@postOwner');

	Route::get('promo_code','\App\Http\Controllers\UserController@promoCode');
	Route::get('add_promo','\App\Http\Controllers\UserController@addPromo');
	Route::post('add_promo','\App\Http\Controllers\UserController@postPromo');

	// Driver
	Route::get('/registration/add_driver', 'DriverController@index')->name("add_dnd_list");
	Route::post('/registration/add_driver', 'DriverController@post_driver');
	Route::get('/registration/driver', 'DriverController@list')->name("driver");
	Route::get('/registration/driver_data', 'DriverController@data')->name("driver_data");


	Route::get('logout', '\App\Http\Controllers\UserController@logout');

});





Route::get('/masters/add_customer_master', 'CustomerController@index')->name("add_customer_master");
Route::get('/masters/add_customer_type_master', 'CustomerTypeController@index')->name("add_customer_type_master");
Route::get('/masters/add_location_master', 'LocationController@index')->name("add_location_master");
Route::get('/masters/add_reasons_master', 'ReasonController@index')->name("add_reasons_master");
Route::get('/masters/add_role_master', 'RoleController@index')->name("add_role_master");
Route::get('/masters/add_user_master', 'UserController@index')->name("add_user_master");
Route::get('/masters/add_vehicle_master', 'VehicleController@index')->name("add_vehicle_master");
Route::get('/masters/add_vehicle_model_master', 'VehicleModelController@index')->name("add_vehicle_model_master");
Route::get('/masters/add_zone_master', 'ZoneController@index')->name("add_zone_master");
Route::get('/masters/customer_master', 'CustomerMasterController@index')->name("customer_master");
Route::get('/masters/customer_master_data', 'CustomerMasterController@data')->name("customer_master_data");
Route::get('/masters/customer_type_master', 'CustomerTypeMasterController@index')->name("customer_type_master");
Route::get('/masters/customer_type_master_data', 'CustomerTypeMasterController@data')->name("customer_type_master_data");
Route::get('/masters/location_master', 'LocationMasterController@index')->name("location_master");
Route::get('/masters/location_master_data', 'LocationMasterController@data')->name("location_master_data");
Route::get('/masters/reasons_master', 'ReasonsMasterController@index')->name("reasons_master");
Route::get('/masters/reasons_master_data', 'ReasonsMasterController@data')->name("reasons_master_data");
Route::get('/masters/role_master', 'RoleMasterController@index')->name("role_master");
Route::get('/masters/role_master_data', 'RoleMasterController@data')->name("role_master_data");
Route::get('/masters/user_master', 'UserMasterController@index')->name("user_master");
Route::get('/masters/user_master_data', 'UserMasterController@data')->name("user_master_data");
Route::get('/masters/vehicle_master', 'VehicleController@list')->name("vehicle_master");
Route::get('/masters/vehicle_master_data', 'VehicleController@data')->name("vehicle_master_data");
Route::get('/masters/vehicle_model_master', 'VehicleModelController@list')->name("vehicle_model_master");
Route::get('/masters/vehicle_model_master_data', 'VehicleModelController@data')->name("vehicle_model_master_data");
Route::get('/masters/zone_master', 'ZoneController@list')->name("zone_master");
Route::get('/masters/zone_master_data', 'ZoneController@data')->name("zone_master_data");

Route::get('/registration/add_dnd_list', 'DndListController@index')->name("add_dnd_list");
Route::get('/registration/dnd_list', 'DndListController@list')->name("dnd_list");
Route::get('/registration/dnd_list_data', 'DndListController@data')->name("dnd_list_data");



Route::get('/registration/owner_data', 'OwnerController@list_data')->name("owner_data");
Route::get('/registration/traiff', 'TraiffController@index')->name("traiff");
Route::get('/registration/traiff_data', 'TraiffController@data')->name("traiff_data");
Route::get('/registration/vehicle', 'VehicleRegController@index')->name("vehicle");
Route::get('/registration/vehicle_data', 'VehicleRegController@data')->name("vehicle_data");


Route::get('/dashboard/dashboard_v2', 'DashboardController@index')->name("dashboard2");

Route::get('/ui_elements/accordion', 'UiElementController@accordion')->name("accordion");
Route::get('/ui_elements/alert', 'UiElementController@alert')->name("alert");
Route::get('/ui_elements/badges', 'UiElementController@badges')->name("badges");
Route::get('/ui_elements/button', 'UiElementController@button')->name("button");
Route::get('/ui_elements/carousel', 'UiElementController@carousel')->name("carousel");
Route::get('/ui_elements/dropdowns', 'UiElementController@dropdowns')->name("dropdowns");
Route::get('/ui_elements/googlemap', 'UiElementController@googlemap')->name("googlemap");
Route::get('/ui_elements/lightbox', 'UiElementController@lightbox')->name("lightbox");
Route::get('/ui_elements/modals', 'UiElementController@modals')->name("modals");
Route::get('/ui_elements/notification', 'UiElementController@notification')->name("notification");
Route::get('/ui_elements/pagination', 'UiElementController@pagination')->name("pagination");
Route::get('/ui_elements/progressbar', 'UiElementController@progressbar')->name("progressbar");
Route::get('/ui_elements/spinerbuttons', 'UiElementController@spinerbuttons')->name("spinerbuttons");
Route::get('/ui_elements/sweetalerts', 'UiElementController@sweetalerts')->name("sweetalerts");
Route::get('/ui_elements/tabs', 'UiElementController@tabs')->name("tabs");
Route::get('/ui_elements/timeline', 'UiElementController@timeline')->name("timeline");
Route::get('/ui_elements/treeview', 'UiElementController@treeview')->name("treeview");
Route::get('/ui_elements/typography', 'UiElementController@typography')->name("typography");
Route::get('/ui_elements/vectormap', 'UiElementController@vectormap')->name("vectormap");

Route::get('/charts/amchart', 'ChartsController@amchart')->name("amchart");
Route::get('/charts/chartist', 'ChartsController@chartist')->name("chartist");
Route::get('/charts/chartjs', 'ChartsController@chartjs')->name("chartjs");
Route::get('/charts/echarts', 'ChartsController@echarts')->name("echarts");
Route::get('/charts/flotchart', 'ChartsController@flotchart')->name("flotchart");
Route::get('/charts/fusionchart', 'ChartsController@fusionchart')->name("fusionchart");
Route::get('/charts/highchart', 'ChartsController@highchart')->name("highchart");
Route::get('/charts/morrischart', 'ChartsController@morrischart')->name("morrischart");
Route::get('/charts/rickshaw', 'ChartsController@rickshaw')->name("rickshaw");

Route::get('/settings/any_vehicle', 'SettingsController@any_vehicle')->name("any_vehicle");
Route::get('/settings/mail_settings', 'SettingsController@mail_settings')->name("mail_settings");
Route::get('/settings/payment', 'SettingsController@payment')->name("payment");
Route::get('/settings/permissions', 'SettingsController@permissions')->name("permissions");
Route::get('/settings/site_settings', 'SettingsController@site_settings')->name("site_settings");
Route::get('/settings/site_settings_data', 'SettingsController@site_settings_data')->name("site_settings_data");

Route::get('/trips_booking/assign_allot', 'AssignAllotController@index')->name("assign_allot");
Route::get('/trips_booking/assign_allot_data', 'AssignAllotController@data')->name("assign_allot_data");
Route::get('/trips_booking/booking_v1', 'Bookingv1Controller@index')->name("booking_v1");
Route::get('/trips_booking/booking_v2', 'Bookingv2Controller@index')->name("booking_v2");
Route::get('/trips_booking/cc_collections', 'CCCollectionsController@index')->name("cc_collections");
Route::get('/trips_booking/intercity_bookings', 'IntercityBookingsController@index')->name("intercity_bookings");
Route::get('/trips_booking/intercity_bookings_data', 'IntercityBookingsController@data')->name("intercity_bookings_data");
Route::get('/trips_booking/pickup_drop', 'PickupDropController@index')->name("pickup_drop");
Route::get('/trips_booking/pickup_drop_data', 'PickupDropController@data')->name("pickup_drop_data");
Route::get('/trips_booking/regular_trips', 'RegularTripsController@index')->name("regular_trips");
Route::get('/trips_booking/regular_trips_data', 'RegularTripsController@data')->name("regular_trips_data");

Route::get('/reports/attendance', 'AttendanceController@index')->name("attendance");
Route::get('/reports/attendance_data', 'AttendanceController@data')->name("attendance_data");
Route::get('/reports/customer_report', 'CustomerReportController@index')->name("customer_report");
Route::get('/reports/customer_report_data', 'CustomerReportController@data')->name("customer_report_data");
Route::get('/reports/booking_report', 'AttendanceBookingController@index')->name("booking_report");
Route::get('/reports/booking_report_data', 'AttendanceBookingController@data')->name("booking_report_data");
Route::get('/reports/cancelled_booking', 'CancelledBookingController@index')->name("cancelled_booking");
Route::get('/reports/cancelled_booking_data', 'CancelledBookingController@data')->name("cancelled_booking_data");
Route::get('/reports/pnr', 'PnrReportController@index')->name("pnr");
Route::get('/reports/top_customers', 'TopCustomersController@index')->name("top_customers");
Route::get('/reports/top_customers_data', 'TopCustomersController@data')->name("top_customers_data");
Route::get('/reports/vehicle_summary', 'VehicleSummaryController@index')->name("vehicle_summary");
Route::get('/reports/vehicle_summary_data', 'VehicleSummaryController@data')->name("vehicle_summary_data");

Route::get('/attendance/attendance_break', 'AttendanceBreakController@index')->name("attendance_break");
Route::get('/attendance/attendance_break_data', 'AttendanceBreakController@data')->name("attendance_break_data");

Route::get('/current_status/auto_assigned_bookings', 'AutoAssignedBookingsController@index')->name("auto_assigned_bookings");
Route::get('/current_status/auto_assigned_bookings_data', 'AutoAssignedBookingsController@data')->name("auto_assigned_bookings_data");
Route::get('/current_status/booking_planner', 'BookingPlannerController@index')->name("booking_planner");
Route::get('/current_status/free_vehicle', 'FreeVehicleController@index')->name("free_vehicle");
Route::get('/current_status/free_vehicle_data', 'FreeVehicleController@data')->name("free_vehicle_data");
Route::get('/current_status/news_feeds', 'NewsFeedsController@index')->name("news_feeds");
Route::get('/current_status/vehicle_statistics', 'VehicleStatisticsController@index')->name("vehicle_statistics");
Route::get('/current_status/vehicle_statistics_in', 'VehicleStatisticsController@in')->name("vehicle_statistics_in");
Route::get('/current_status/vehicle_statistics_out', 'VehicleStatisticsController@out')->name("vehicle_statistics_out");

Route::get('/tables/bootstrap_tables', 'TableController@bootstrap_tables')->name("bootstrap_tables");
Route::get('/tables/datatable_autofill', 'TableController@datatable_autofill')->name("datatable_autofill");
Route::get('/tables/datatable_buttons', 'TableController@datatable_buttons')->name("datatable_buttons");
Route::get('/tables/datatable_colreorder', 'TableController@datatable_colreorder')->name("datatable_colreorder");
Route::get('/tables/datatable_combine', 'TableController@datatable_combine')->name("datatable_combine");
Route::get('/tables/datatable_default', 'TableController@datatable_default')->name("datatable_default");
Route::get('/tables/datatable_fixed_columns', 'TableController@datatable_fixed_columns')->name("datatable_fixed_columns");
Route::get('/tables/datatable_fixed_header', 'TableController@datatable_fixed_header')->name("datatable_fixed_header");
Route::get('/tables/datatable_keytable', 'TableController@datatable_keytable')->name("datatable_keytable");
Route::get('/tables/datatable_responsive', 'TableController@datatable_responsive')->name("datatable_responsive");
Route::get('/tables/datatable_rowreorder', 'TableController@datatable_rowreorder')->name("datatable_rowreorder");
Route::get('/tables/datatable_scroller', 'TableController@datatable_scroller')->name("datatable_scroller");
Route::get('/tables/datatable_select', 'TableController@datatable_select')->name("datatable_select");
Route::get('/tables/datatable_ajax', 'TableController@datatable_ajax')->name("datatable_ajax");
Route::get('/tables/datatable_ajax_data', 'TableController@datatable_ajax_data')->name("datatable_ajax_data");
Route::get('/tables/regular_tables', 'TableController@regular_tables')->name("regular_tables");

Route::get('/applications/calendar', 'CalendarController@index')->name("calendar");
Route::get('/applications/chatwidget', 'ChatController@index')->name("chatwidget");
Route::get('/applications/contact_application', 'ContactApplicationController@index')->name("contact_application");
Route::get('/applications/pricing_table', 'PricingTableController@index')->name("pricing_table");
Route::get('/applications/scrumboard', 'ScrumboardController@index')->name("scrumboard");

Route::get('/summary/call_flow', 'CallFlowController@index')->name("call_flow");
Route::get('/summary/dispatcher_wise', 'DispatcherWiseController@index')->name("dispatcher_wise");
Route::get('/summary/dispatcher_wise_data', 'DispatcherWiseController@data')->name("dispatcher_wise_data");
Route::get('/summary/vehicle_consolidate', 'VehicleConsolidateController@index')->name("vehicle_consolidate");
Route::get('/summary/vehicle_consolidate_data', 'VehicleConsolidateController@data')->name("vehicle_consolidate_data");

Route::get('/follow_up/cancelled_trips', 'CancelledTripsController@index')->name("cancelled_trips");
Route::get('/follow_up/cancelled_trips_data', 'CancelledTripsController@data')->name("cancelled_trips_data");
Route::get('/follow_up/enquiries', 'EnquiriesController@index')->name("enquiries");
Route::get('/follow_up/enquiries_data', 'EnquiriesController@data')->name("enquiries_data");
Route::get('/follow_up/feedback_complaint', 'FeedbackComplaintController@index')->name("feedback_complaint");
Route::get('/follow_up/feedback_complaint_data', 'FeedbackComplaintController@data')->name("feedback_complaint_data");
Route::get('/follow_up/follow_up', 'FollowUpController@index')->name("follow_up");
Route::get('/follow_up/follow_up_data', 'FollowUpController@data')->name("follow_up_data");

Route::get('/cookies/cookies_v1', 'CookiesController@cookies_v1')->name("cookies_v1");
Route::get('/cookies/cookies_v2', 'CookiesController@cookies_v2')->name("cookies_v2");
Route::get('/cookies/cookies_v3', 'CookiesController@cookies_v3')->name("cookies_v3");

Route::get('/forms/editors', 'FormsController@editors')->name("editors");
Route::get('/forms/form_elements', 'FormsController@form_elements')->name("form_elements");
Route::get('/forms/form_plugins', 'FormsController@form_plugins')->name("form_plugins");
Route::get('/forms/form_validation', 'FormsController@form_validation')->name("form_validation");
Route::get('/forms/form_xeditable', 'FormsController@form_xeditable')->name("form_xeditable");

Route::get('/icons/font_awesome', 'IconsController@font_awesome')->name("font_awesome");
Route::get('/icons/material_icons', 'IconsController@material_icons')->name("material_icons");
Route::get('/icons/simple_lineicons', 'IconsController@simple_lineicons')->name("simple_lineicons");
Route::get('/icons/weather_icons', 'IconsController@weather_icons')->name("weather_icons");
Route::get('/icons/ion_icons', 'IconsController@ion_icons')->name("ion_icons");

Route::get('/authentication/login_v1', 'AuthenticationController@login_v1')->name("login_v1");
Route::get('/authentication/login_v2', 'AuthenticationController@login_v2')->name("login_v2");
Route::get('/authentication/registration_v1', 'AuthenticationController@registration_v1')->name("registration_v1");
Route::get('/authentication/registration_v2', 'AuthenticationController@registration_v2')->name("registration_v2");
Route::get('/authentication/reset_password', 'AuthenticationController@reset_password')->name("reset_password");
Route::get('/authentication/forgot_password', 'AuthenticationController@forgot_password')->name("forgot_password");
Route::get('/authentication/lock_screen', 'AuthenticationController@lock_screen')->name("lock_screen");

Route::get('/email_template/sm_email_template_welcome', 'EmailController@sm_email_template_welcome')->name("sm_email_template_welcome");
Route::get('/email_template/sm_email_template_order_confirm', 'EmailController@sm_email_template_order_confirm')->name("sm_email_template_order_confirm");
Route::get('/email_template/sm_email_template_payment', 'EmailController@sm_email_template_payment')->name("sm_email_template_payment");
Route::get('/email_template/sm_email_template_forgot_password', 'EmailController@sm_email_template_forgot_password')->name("sm_email_template_forgot_password");
Route::get('/email_template/sm_email_template_activate', 'EmailController@sm_email_template_activate')->name("sm_email_template_activate");
Route::get('/email_template/sm_email_template_birthday', 'EmailController@sm_email_template_birthday')->name("sm_email_template_birthday");
Route::get('/email_template/sm_email_template_large_table', 'EmailController@sm_email_template_large_table')->name("sm_email_template_large_table");
Route::get('/email_template/sm_email_template_small_table', 'EmailController@sm_email_template_small_table')->name("sm_email_template_small_table");

Route::get('/invoice/invoice', 'InvoiceController@index')->name("invoice");

Route::get('/payments/lock_vehicle', 'LockVehicleController@index')->name("lock_vehicle");
Route::get('/payments/lock_vehicle_data', 'LockVehicleController@data')->name("lock_vehicle_data");
Route::get('/payments/lock_vehicle_lock_data', 'LockVehicleController@lock')->name("lock_vehicle_lock_data");
Route::get('/payments/make_payment', 'MakePaymentController@index')->name("make_payment");
Route::get('/payments/payment_list', 'PaymentListController@index')->name("payment_list");
Route::get('/payments/payment_list_data', 'PaymentListController@data')->name("payment_list_data");
Route::get('/payments/pending_payment', 'PendingPaymentController@index')->name("pending_payment");
Route::get('/payments/pending_payment_data', 'PendingPaymentController@data')->name("pending_payment_data");

Route::get('/error_pages/page_400', 'ErrorController@page_400')->name("page_400");
Route::get('/error_pages/page_500', 'ErrorController@page_500')->name("page_500");
Route::get('/error_pages/page_503', 'ErrorController@page_503')->name("page_503");

Route::get('/google/recaptcha', 'RecaptchaController@index')->name("recaptcha");

Route::get('/widgets/widgets', 'WidgetsController@index')->name("widgets");

Route::get('/page_layout/sidebar_layout', 'PageLayoutController@sidebar_layout')->name("sidebar_layout");
Route::get('/page_layout/both_menubar', 'PageLayoutController@both_menubar')->name("both_menubar");
Route::get('/page_layout/fixed_both_nav', 'PageLayoutController@fixed_both_nav')->name("fixed_both_nav");
Route::get('/page_layout/fixed_footer', 'PageLayoutController@fixed_footer')->name("fixed_footer");
Route::get('/page_layout/fixed_menu_bar', 'PageLayoutController@fixed_menu_bar')->name("fixed_menu_bar");
Route::get('/page_layout/horizontal_layout', 'PageLayoutController@horizontal_layout')->name("horizontal_layout");
Route::get('/page_layout/minified_sidebar', 'PageLayoutController@minified_sidebar')->name("minified_sidebar");
Route::get('/page_layout/sidebar_fixed_nav', 'PageLayoutController@sidebar_fixed_nav')->name("sidebar_fixed_nav");
Route::get('/page_layout/top_nav_fixed', 'PageLayoutController@top_nav_fixed')->name("top_nav_fixed");
Route::get('/page_layout/unfixed_footer', 'PageLayoutController@unfixed_footer')->name("unfixed_footer");
Route::get('/page', 'VehicleController@getpage')->name("getpage");
Route::post('/add-vehicle-type-fare', 'VehicleController@postadd_vehicle_type_fare')->name("postadd_vehicle_type_fare");



