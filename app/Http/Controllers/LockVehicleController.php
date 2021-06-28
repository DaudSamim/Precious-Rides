<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LockVehicleController extends Controller
{
    public function index()
    {
        return view('lock_vehicle');
    }

    public function data()
    {
        $array = [[1, "201", "18", 64], [2, "407", "1834", 68], [3, "426", "4925", 76], [4, "448", "753", 196], [5, "802", "1774", 197], [6, "835", "230", 136]];
        $tags = array_map(function ($tag) {
            return array(
                'vid' => ucfirst($tag[1]),
                'cc'  => ucfirst($tag[2])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }

    public function lock()
    {
        $array = [[1, "00631", "1123", 106], [2, "00635", "449", 170], [3, "00667", "2413", 121], [4, "123", "90", 198], [5, "40", "1", 66], [6, "403", "520", 174], [7, "415", "8945", 73], [8, "415.", "799", 146], [9, "417", "1693", 171], [10, "420", "941", 141], [11, "423", "854", 177]];
        $tags = array_map(function ($tag) {
            return array(
                'vid' => ucfirst($tag[1]),
                'cc'  => ucfirst($tag[2])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
