<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReasonsMasterController extends Controller
{
    public function index()
    {
        return view('reasons_master');
    }

    public function data()
    {
        $array = [[3, "Breakdown", "Accident", "Active"], [4, "Breakdown", "Mechanical Complaint", "Active"], [5, "Breakdown", "Driver Health", "Active"], [23, "Breakdown", "test", "Active"], [6, "Breakdown", "Vehicle Puncture", "Active"], [1, "Cancellation", "Customer Cancellation", "Active"], [21, "Cancellation", "test", "Active"], [8, "Cancellation", "Driver no responce", "Active"], [25, "Cancellation", "Customer Program Change", "Active"], [26, "Cancellation", "Others", "Active"], [7, "Cancellation", "Bad Vehicle Condition", "Active"], [9, "Cancellation", "Double Booking", "Active"], [18, "Negative Feedback", "Any other reason explained as per remarks column", "Active"], [17, "Negative Feedback", "Rude Behavior of driver", "Active"], [20, "Negative Feedback", "test", "Active"], [14, "Positive Feedback", "Will suggest to the friends", "Active"], [16, "Positive Feedback", "Ease of App Operation", "Active"], [19, "Positive Feedback", "test", "Active"], [11, "Positive Feedback", "Clean Vehicle", "Active"], [12, "Positive Feedback", "On Time Arrival", "Active"], [13, "Positive Feedback", "Ease of settling", "Active"], [15, "Positive Feedback", "Knowledgeable  Driver", "Active"], [29, "Followup", "Driver Not Yet Called Customer", "Active"], [28, "Followup", "Driver SMS not Delivered", "Active"], [22, "Followup", "Driver Non Cooperation / Rude Behaviour", "Active"], [27, "Followup", "Booking Conformed", "Active"], [2, "Reopen", "Customer Request", "Active"], [10, "Reopen", "Technical Error", "In-Active"], [24, "Reopen", "test", "Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'    => ucfirst($tag[0]),
                'type'   => ucfirst($tag[1]),
                'reason' => ucfirst($tag[2]),
                'status' => ucfirst($tag[3])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
