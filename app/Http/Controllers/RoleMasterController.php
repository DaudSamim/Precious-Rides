<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleMasterController extends Controller
{
    public function index()
    {
        return view('role_master');
    }

    public function data()
    {
        $array = [[1, "Admin", "In-Active"], [3, "Assignor", "Active"], [19, "Booking Agents", "Active"], [4, "Driver", "Active"], [18, "manager", "Active"], [5, "Owner", "Active"], [2, "Shift Assignor", "Active"], [6, "Tech Admin", "Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'    => $tag[0],
                'role'   => ucfirst($tag[1]),
                'status' => ucfirst($tag[2])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
