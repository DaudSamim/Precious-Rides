<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        return view('add_zone_master');
    }

    public function list()
    {
        return view('zone_master');
    }

    public function data()
    {
        $array = [[10, "SAIBABA COLONY, KK Pudur, Velandipalayam, Venkatapuram", "In-Active"], [11, "RS PURAM, Vadakovai, Poo Market, Ghandhipark", "Active"], [12, "VADAVALLI, PN Pudur, Marudhamalai", "Active"], [13, "EDAYARPALAYAM, TVS Nagar, Kanuvai", "Active"], [14, "THUDIYALUR, GN Mills, NGGO Colony, Goundampalayam", "Active"], [16, "GANAPATHY, Sanganoor, Textool", "Active"], [18, "GANDHIPURAM, Sidhapudur, Omni Bus Stand, Ram Nagar", "Active"], [19, "SARAVANAMPATTI, Ramakrishnapuram, KGISL, Keeranatham", "Active"], [20, "THONDAMUTHUR, Siruvani, Vellingiri ", "Active"], [21, "VEDAPATTI, Veerakeralam, Sundapalayam", "Active"], [24, "SITRA, Airport, Hopes, Kalapptti, CODISSIA", "Active"], [25, "KOVAIPUDUR, Sundakkamuthur, Perur, Telungulapalayam", "Active"], [27, "UKKADAM, Oppanakkara St, Vysyal St, Townhall, Selvapuram", "Active"], [30, "POTHANUR, Sundarapuram, Kuniamuthur, Ichanari", "Active"], [32, " RAILWAY STATION, Collector Office,Race Course, Anna Silai", "Active"], [33, "PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam", "Active"], [34, "SINGANALLUR, GV Residency, Sowripalayam, Udayampalayam", "Active"], [35, "RAMANATHAPURAM, Nanjundapuram, Sungam, Puliakulam", "Active"], [36, "Long Distance < 100 Kms", "Active"], [37, "Long Distance > 100 Kms but < 200 kms", "Active"], [38, "Long Distance >200 Kms But < 300 Kms", "Active"], [39, "Long Distance > 300 kms", "Active"], [40, "CHERAN MAA NAGAR, Gandhi Maa Nagar, Thannerrpandal", "Active"], [41, "ONDIPUDUR, Chinthamani Pudur, Pappampatti, Sulur", "Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'    => ucfirst($tag[0]),
                'namee'  => ucfirst($tag[1]),
                'Status' => ucfirst($tag[2])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
