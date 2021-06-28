<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function any_vehicle()
    {
        return view('any_vehicle');
    }

    public function mail_settings()
    {
        return view('mail_settings');
    }

    public function payment()
    {
        return view('payment');
    }

    public function permissions()
    {
        return view('permissions');
    }

    public function site_settings()
    {
        return view('site_settings');
    }

    public function site_settings_data()
    {
        $data = [["SNo"=>"","Property"=>"Pnr Prefix","Property Value"=>"<a href='#' class='pnr_prefix' id='pnr_prefix' data-pk='96' data-type='text' data-title='Enter Pnr Prefix'>ABCD</a>"],["SNo"=>"","Property"=>"Allot In Booking","Property Value"=>"<a href='#' class='allot_in_booking' id='allot_in_booking' data-pk='112' data-type='select' data-title='Enter Allot In Booking'>No</a>"],["SNo"=>"","Property"=>"Inter City Booking","Property Value"=>"<a href='#' class='inter_city_booking' id='inter_city_booking' data-pk='111' data-type='select' data-title='Enter Inter City Booking'>No</a>"],["SNo"=>"","Property"=>"Pnr Format","Property Value"=>"<a href='#' class='pnr_format' id='pnr_format' data-pk='95' data-type='select' data-title='Enter Pnr Format'>YYYY</a>"],["SNo"=>"","Property"=>"Menu Bar","Property Value"=>"<a href='#' class='menu_bar' id='menu_bar' data-pk='115' data-type='select' data-title='Enter Menu Bar'>Side Menu</a>"],["SNo"=>"","Property"=>"Password Minimum Length","Property Value"=>"<a href='#' class='password_minimum_length' id='password_minimum_length' data-pk='104' data-type='text' data-title='Enter Password Minimum Length'>4</a>"],["SNo"=>"","Property"=>"Night Tariff Time (24 hrs) ","Property Value"=>"<a href='#' class='night_tariff_time' id='night_tariff_time' data-pk='101' data-type='text' data-title='Enter Night Tariff Time (24 hrs) '>21:45-4:45</a>"],["SNo"=>"","Property"=>"Login Template","Property Value"=>"<a href='#' class='login_template' id='login_template' data-pk='100' data-type='select' data-title='Enter Login Template'>Template 3</a>"],["SNo"=>"","Property"=>"Package Km","Property Value"=>"<a href='#' class='package_km' id='package_km' data-pk='121' data-type='text' data-title='Enter Package Km'>19</a>"],["SNo"=>"","Property"=>"Ac Vehicle","Property Value"=>"<a href='#' class='ac_vehicle' id='ac_vehicle' data-pk='124' data-type='select' data-title='Enter Ac Vehicle'>No</a>"],["SNo"=>"","Property"=>"Night Tariff","Property Value"=>"<a href='#' class='night_tariff' id='night_tariff' data-pk='126' data-type='select' data-title='Enter Night Tariff'>Yes</a>"],["SNo"=>"","Property"=>"Tariff Local Kms","Property Value"=>"<a href='#' class='tariff_local_kms' id='tariff_local_kms' data-pk='117' data-type='text' data-title='Enter Tariff Local Kms'>0.</a>"],["SNo"=>"","Property"=>"Shared App Count","Property Value"=>"<a href='#' class='shared_app_count' id='shared_app_count' data-pk='130' data-type='text' data-title='Enter Shared App Count'>90</a>"],["SNo"=>"","Property"=>"Trip Reject Time Limit (sec) ","Property Value"=>"<a href='#' class='trip_reject_time_limit' id='trip_reject_time_limit' data-pk='129' data-type='text' data-title='Enter Trip Reject Time Limit (sec) '>75</a>"],["SNo"=>"","Property"=>"Extended Validity Days","Property Value"=>"<a href='#' class='extended_validity_days' id='extended_validity_days' data-pk='131' data-type='text' data-title='Enter Extended Validity Days'>30</a>"],["SNo"=>"","Property"=>"Collection General Amount","Property Value"=>"<a href='#' class='collection_general_amount' id='collection_general_amount' data-pk='110' data-type='text' data-title='Enter Collection General Amount'>500</a>"],["SNo"=>"","Property"=>"Collection Based On Days","Property Value"=>"<a href='#' class='collection_based_on_days' id='collection_based_on_days' data-pk='127' data-type='text' data-title='Enter Collection Based On Days'>1</a>"],["SNo"=>"","Property"=>"Allowed Max Rejections Per Day","Property Value"=>"<a href='#' class='allowed_max_rejections_per_day' id='allowed_max_rejections_per_day' data-pk='128' data-type='text' data-title='Enter Allowed Max Rejections Per Day'>5</a>"],["SNo"=>"","Property"=>"SMS provider","Property Value"=>"<a href='#' class='sms_provider' id='sms_provider' data-pk='123' data-type='select' data-title='Enter SMS provider'>SMSCountry</a>"],["SNo"=>"","Property"=>"Autoassign Cron Run","Property Value"=>"<a href='#' class='autoassign_cron_run' id='autoassign_cron_run' data-pk='137' data-type='readonly' data-title='Enter Autoassign Cron Run'>2018-08-14 09:22:03.519486+05:30</a>"],["SNo"=>"","Property"=>"Auto Assign Crm","Property Value"=>"<a href='#' class='auto_assign_crm' id='auto_assign_crm' data-pk='136' data-type='text' data-title='Enter Auto Assign Crm'>No</a>"],["SNo"=>"","Property"=>"Peak Hrs","Property Value"=>"<a href='#' class='peak_hrs' id='peak_hrs' data-pk='132' data-type='text' data-title='Enter Peak Hrs'>00:00-00:00</a>"],["SNo"=>"","Property"=>"Autoassign To","Property Value"=>"<a href='#' class='autoassign_to' id='autoassign_to' data-pk='139' data-type='text' data-title='Enter Autoassign To'>15</a>"],["SNo"=>"","Property"=>"Autoassign From","Property Value"=>"<a href='#' class='autoassign_from' id='autoassign_from' data-pk='138' data-type='text' data-title='Enter Autoassign From'>1</a>"],["SNo"=>"","Property"=>"Empty Km","Property Value"=>"<a href='#' class='empty_km' id='empty_km' data-pk='133' data-type='text' data-title='Enter Empty Km'>4</a>"],["SNo"=>"","Property"=>"Auto Assign Duration","Property Value"=>"<a href='#' class='auto_assign_duration' id='auto_assign_duration' data-pk='135' data-type='text' data-title='Enter Auto Assign Duration'>30</a>"],["SNo"=>"","Property"=>"Auto Assign","Property Value"=>"<a href='#' class='auto_assign' id='auto_assign' data-pk='134' data-type='text' data-title='Enter Auto Assign'>No</a>"]];
        print_r(json_encode($data));
        exit;
    }


}
