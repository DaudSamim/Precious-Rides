<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DispatcherWiseController extends Controller
{
    public function index()
    {
        return view('dispatcher_wise');
    }

    public function data()
    {
        $array = [[3, "Arumugam", 5, 28, 29, 0, 51, 20, 0, 8, 0, 0, "6715", "11074", 0, 1], [5, "Superadmin", 0, 0, 44, 0, 0, 0, 0, 0, 0, 0, "4935", "0", 0, 2], [6, "testadmin", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "0", "0", 0, 3], [11, "Julie", 0, 0, 1, 0, 0, 0, 0, 2, 46, 0, "170", "0", 0, 4], [61, "Admin.", 0, 0, 20, 0, 13, 7, 0, 0, 0, 0, "20026", "5661", 0, 5], [62, "admin1", 3, 2, 46, 0, 333, 7, 0, 23, 0, 0, "13791", "1125", 3, 6], [63, "pradeepa", 0, 2, 118, 0, 11, 28, 0, 18, 0, 38, "37997", "4826", 4, 7], [64, "anitha", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "0", "0", 0, 8], [67, "rubina", 0, 0, 61, 0, 0, 2, 0, 8, 0, 25, "14721", "278", 3, 9], [172, "kamal", 0, 15, 66, 0, 0, 20, 0, 9, 0, 1, "15128", "14693", 3, 10]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'        => ucfirst($tag[0]),
                'name'       => ucfirst($tag[1]),
                'login'      => ucfirst($tag[2]),
                'logout'     => ucfirst($tag[3]),
                'book'       => ucfirst($tag[4]),
                'appbook'    => ucfirst($tag[5]),
                'allot'      => ucfirst($tag[6]),
                'close'      => ucfirst($tag[7]),
                'enquiry'    => ucfirst($tag[8]),
                'cancel'     => ucfirst($tag[9]),
                'complaint'  => ucfirst($tag[10]),
                'followup'   => ucfirst($tag[11]),
                'collection' => ucfirst($tag[12]),
                'new'        => ucfirst($tag[2])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
