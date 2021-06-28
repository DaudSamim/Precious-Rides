<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleSummaryController extends Controller
{
    public function index()
    {
        return view('vehicle_summary');
    }

    public function data()
    {
        $array = [[192019, "Driver Call"], [52, "Breakdown"], [41609, "Enquiry"], [732, "Feedbacks"], [120965, "Unable to Book"], [1060089, "Booking"], [99858, "Followup"], [207373, "Cancellation"]];
        $tags = array_map(function ($tag) {
            return array(
                'count' => ucfirst($tag[0]),
                'name'  => ucfirst($tag[1])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
