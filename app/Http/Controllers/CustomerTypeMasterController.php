<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerTypeMasterController extends Controller
{
    public function index()
    {
        return view('customer_type_master');
    }

    public function data()
    {
        $array = [[2, "Gold", "#a67c00", "Active"], [4, "Normal", "#1b66ff", "Active"], [1, "Platinum", "#7F51BE", "Active"], [3, "Silver", "#FA8072", "Active"], [2, "Golden", "#68df2b", "In-Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'    => ucfirst($tag[0]),
                'Type'   => ucfirst($tag[1]),
                'Color'  => ucfirst($tag[2]),
                'Status' => ucfirst($tag[3])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }

}
