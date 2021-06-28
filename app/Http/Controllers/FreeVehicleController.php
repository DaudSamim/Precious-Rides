<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeVehicleController extends Controller
{
    public function index()
    {
        return view('free_vehicle');
    }

    public function data()
    {
        $data = [["id"=>82,"vehicle_no"=>"442","last_trip_time"=>"2018-09-22 10=>47=>00","month_collection"=>"19790","today_empty_km"=>"0","total_km"=>"3","today_trips"=>1,"today_collection"=>"65","current_place"=>"VADAVALLI","running_status"=>"break","zone_name"=>"VADAVALLI, PN Pudur, Marudhamalai","flag"=>1,"last_packet_time"=>"09=>35","attence_loc"=>false,"login_time"=>"08:48 AM","previous_balance"=>"643","login_days"=>15,"current_place_full"=>"VADAVALLI","idle_time"=>"09:04","sno"=>1],["id"=>164,"vehicle_no"=>"685","last_trip_time"=>"2018-09-22 18=>07=>02","month_collection"=>"31568","today_empty_km"=>"14","total_km"=>"51","today_trips"=>5,"today_collection"=>"932","current_place"=>"Nagapattinam - ","running_status"=>"free","zone_name"=>"EDAYARPALAYAM, TVS Nagar, Kanuvai","flag"=>1,"last_packet_time"=>"18=>03","attence_loc"=>false,"login_time"=>"06:47 AM","previous_balance"=>"-476","login_days"=>17,"current_place_full"=>"Nagapattinam - Coimbatore - Gundlupet Hwy, Ukkadam, Coimbatore, Tamil Nadu 641001, India","idle_time"=>"01:44","sno"=>2],["id"=>113,"vehicle_no"=>"644","last_trip_time"=>"2018-09-22 18=>20:33","month_collection"=>"39101","today_empty_km"=>"5","total_km"=>"80","today_trips"=>4,"today_collection"=>"1645","current_place"=>"GCT nagar Phase","running_status"=>"free","zone_name"=>"VADAVALLI, PN Pudur, Marudhamalai","flag"=>0,"last_packet_time"=>"19=>51","attence_loc"=>false,"login_time"=>"07:24 AM","previous_balance"=>"367","login_days"=>15,"current_place_full"=>"GCT nagar Phase 1, Kasthurinaikenpalayam, Vadavalli, Coimbatore, Tamil Nadu 641041, India","idle_time"=>"01:30","sno"=>3],["id"=>120,"vehicle_no"=>"663","last_trip_time"=>"2018-09-22 19=>13=>32","month_collection"=>"29553","today_empty_km"=>"15","total_km"=>"65","today_trips"=>5,"today_collection"=>"1220","current_place"=>"West Periasamy ","running_status"=>"free","zone_name"=>"","flag"=>0,"last_packet_time"=>"19=>51","attence_loc"=>false,"login_time"=>"08:55 AM","previous_balance"=>"-2266","login_days"=>17,"current_place_full"=>"West Periasamy Road, R.S. Puram, Coimbatore, Tamil Nadu 641002, India","idle_time"=>"00:37","sno"=>4],["id"=>190,"vehicle_no"=>"485","last_trip_time"=>"2018-09-22 19:25=>21","month_collection"=>"29591","today_empty_km"=>"0","total_km"=>"71","today_trips"=>7,"today_collection"=>"1356","current_place"=>"935\/2326, FCI R","running_status"=>"free","zone_name"=>"SARAVANAMPATTI, Ramakrishnapuram, KGISL, Keeranatham","flag"=>0,"last_packet_time"=>"19=>49","attence_loc"=>false,"login_time"=>"05:48 AM","previous_balance"=>"1265","login_days"=>17,"current_place_full"=>"935\/2326, FCI Rd, Ganapathi Police Quarters, Peelamedu, Coimbatore, Tamil Nadu 641006, India","idle_time"=>"00:25","sno"=>5],["id"=>114,"vehicle_no"=>"646","last_trip_time"=>"2018-09-22 19=>31=>43","month_collection"=>"24704","today_empty_km"=>"0","total_km"=>"148","today_trips"=>2,"today_collection"=>"2310","current_place"=>"Hudco Colony, T","running_status"=>"free","zone_name"=>"THUDIYALUR, GN Mills, NGGO Colony, Goundampalayam","flag"=>1,"last_packet_time"=>"19=>32","attence_loc"=>false,"login_time"=>"12:06 AM","previous_balance"=>"982","login_days"=>9,"current_place_full"=>"Hudco Colony, Tatabad, Coimbatore, Tamil Nadu 641012, India","idle_time"=>"00:19","sno"=>6]];
        print_r(json_encode($data));
        exit;
    }
}
