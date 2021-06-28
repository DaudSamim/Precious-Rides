<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraiffController extends Controller
{
    public function index()
    {
        return view('traiff');
    }

    public function data()
    {
        $array = [["hatch back", 8, "One - One", "2", "50", "14", "25", "active"], ["hatchback non ac", 11, "One - One", "4", "49", "11", "15", "active"], ["mini", 21, "One - One", "2", "49", "15", "25", "active"], ["mini ac", 24, "One - One", "2", "49", "16", "25", "active"], ["mini nonac", 23, "One - One", "2", "49", "14", "25", "active"], ["sedan", 22, "One - One", "2", "49", "16", "25", "active"], ["sedan ac", 26, "One - One", "2", "49", "17", "25", "active"], ["sedan non ac", 25, "One - One", "2", "49", "15", "25", "active"], ["suv", 15, "One - One", "4", "49", "11", "15", "active"], ["suv ac", 28, "One - One", "4", "100", "17", "25", "active"], ["suv non ac", 27, "One - One", "4", "100", "16", "25", "active"], ["trail", 20, "One - One", "1", "12", "25", "2", "active"]];

        $tags = array_map(function ($tag) {
            return array(
                'cat'    => ucfirst($tag[0]),
                'tt'     => ucfirst($tag[2]),
                'minkm'  => ucfirst($tag[3]),
                'minc'   => ucfirst($tag[4]),
                'exkm'   => ucfirst($tag[5]),
                'nc'     => ucfirst($tag[6]),
                'status' => ucfirst($tag[7])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
