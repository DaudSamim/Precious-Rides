<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function index()
    {
        return view('add_vehicle_model_master');
    }

    public function list()
    {
        return view('vehicle_model_master');
    }

    public function data()
    {
        $array = [[92, "Any vehicle", "", "Any vehicle", 4, 20, "Inactive"], [83, "chevarlot", "Hatch Back", "Enjoy AC", 5, 12, "Active"], [81, "chevarlot", "Hatch Back", "Tavera AC", 5, 12, "Active"], [88, "chevarlot", "Mini Ac", "Beat NonAC", 5, 10, "Active"], [75, "chevarlot", "Mini Ac", "Beat", 5, 12, "Active"], [67, "chinna", "Hatch Back", "bpl", 10, 12, "Active"], [65, "Ford", "Sedan Ac", "Aspire", 4, 15, "Active"], [79, "Hyundai", "Sedan Ac", "Hyundai Xcent", 5, 12, "Active"], [80, "mahendra", "Hatch Back", "XYLO AC", 7, 12, "Active"], [91, "Maruti", "Sedan Ac", "Dzire ac", 4, 20, "Active"], [90, "Maruti", "Sedan Ac", "Dzire non ac", 4, 20, "Active"], [77, "Maruti suzuki", "Sedan Ac", "Dzire AC", 5, 12, "Active"], [74, "Maruti suzuki", "Mini Ac", "Maruti Ritz", 5, 12, "Active"], [82, "Renault", "Hatch Back", "Renault Lodgy", 5, 15, "Active"], [73, "Tata", "Mini Ac", "Indica AC", 5, 12, "Active"], [87, "Tata", "Mini Ac", "Indica NonAC", 5, 12, "Active"], [86, "Tata", "Mini Ac", "Indigo Xest", 5, 12, "Active"], [89, "Tata", "Mini Ac", "Indica non ac", 4, 20, "Active"], [85, "Tata", "Mini Ac", "INDIGO AC", 6, 12, "Active"], [76, "Tata", "Mini Ac", "INDIGO NonAC", 4, 12, "Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'     => ucfirst($tag[0]),
                'make'    => ucfirst($tag[1]),
                'tariff'  => ucfirst($tag[2]),
                'model'   => ucfirst($tag[3]),
                'seat'    => ucfirst($tag[4]),
                'mileage' => ucfirst($tag[5]),
                'status'  => ucfirst($tag[6])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
