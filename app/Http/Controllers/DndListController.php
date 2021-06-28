<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DndListController extends Controller
{
    public function index()
    {
        return view('add_dnd_list');
    }

    public function list()
    {
        return view('dnd_list');
    }

    public function data()
    {
        $array = [[2130, "offline", "01:45 AM", "09:45 AM", "06-05-2017", "no", "no", null, "close"], [2659, "offline", "06:33 PM", "09:53 AM", "07-05-2017", "no", "no", null, "close"], [1283, "offline", "11:12 AM", "06:56 PM", "01-05-2017", "no", "no", null, "close"], [1953, "schedule", "12:00 AM", "10:10 AM", "05-05-2017", "no", "yes", "Scheduled when login", "close"], [19209, "offline", "09:20 PM", "10:21 AM", "22-06-2017", "no", "no", null, "close"], [7817, "offline", "08:08 PM", "04:45 PM", "26-05-2017", "no", "no", null, "close"], [8165, "offline", "01:49 AM", "07:35 AM", "28-05-2017", "no", "no", null, "close"], [1135, "offline", "12:06 AM", "09:01 AM", "01-05-2017", "no", "no", null, "close"], [1625, "offline", "08:30 AM", "09:40 AM", "02-05-2017", "no", "no", null, "close"], [368, "schedule", "12:00 AM", "10:30 AM", "05-04-2017", "no", "yes", "Scheduled when login", "close"], [396, "offline", "09:09 PM", "09:34 AM", "05-04-2017", "no", "no", null, "close"], [279, "schedule", "09:35 AM", "10:05 AM", "03-04-2017", "no", "yes", "Scheduled when login", "close"], [455, "schedule", "12:00 AM", "10:55 AM", "07-04-2017", "no", "yes", "Scheduled when login", "close"], [603, "schedule", "09:30 AM", "09:50 AM", "19-04-2017", "no", "yes", "Scheduled when login", "close"], [319, "schedule", "12:00 AM", "10:25 AM", "04-04-2017", "no", "yes", "Scheduled when login", "close"], [538, "schedule", "03:15 PM", "04:05 PM", "11-04-2017", "no", "yes", "", "close"], [13, "offline", "01:17 AM", "09:41 AM", "01-04-2017", "no", "no", null, "close"], [565, "schedule", "09:35 AM", "10:10 AM", "13-04-2017", "no", "yes", "OWN", "close"], [2922, "offline", "07:40 PM", "04:06 PM", "08-05-2017", "no", "no", null, "close"], [2693, "offline", "12:03 AM", "09:18 AM", "08-05-2017", "no", "no", null, "close"]];

        $tags = array_map(function ($tag) {
            return array(
                'vid'     => ucfirst($tag[0]),
                'dndtype' => ucfirst($tag[1]),
                'ft'      => ucfirst($tag[2]),
                'tt'      => ucfirst($tag[3]),
                'date'    => ucfirst($tag[4]),
                'per'     => ucfirst($tag[6]),
                'cmt'     => ucfirst($tag[7])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
