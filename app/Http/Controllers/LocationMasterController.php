<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationMasterController extends Controller
{
    public function index()
    {
        return view('location_master');
    }

    public function data()
    {
        $array = [[1696, "1B, Gandhi Nagar Main Road, Gandhi Nagar, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India", 11.034532, 76.981335, "Active"], [1650, "1, NH948, VGP Prem Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035, India", 11.1006189, 77.0199, "Active"], [3092, "212, Sivasakthi Colony, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India", 11.031021, 76.977936, "Active"], [3105, "220, 7th St, Gandipuram, Coimbatore, Tamil Nadu 641012, India", 11.019211, 76.965934, "Active"], [7624, "247-1, SH167, Aishwarya Nagar, PN Pudur, Coimbatore, Tamil Nadu 641007, India", 11.0168685, 76.9234717, "Active"], [3073, "26, Hosur Rd, Richmond Town, Bengaluru, Karnataka 560025, India", 12.9588129, 77.605965, "Active"], [3128, "27 A, Puliakulam Rd, Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India", 11.0076385, 76.9911236, "Active"], [3085, "29/1B, Marudhamalai Rd, Thirumurugan Nagar, Vadavalli, Coimbatore, Tamil Nadu 641041, India", 11.0233707, 76.9096076, "Active"], [3114, "29, Damodarswamy Nagar, Thirumagal Nagar, Masakalipalayam, Coimbatore, Tamil Nadu 641028, India", 11.016909, 76.999219, "Active"], [3122, "2, Kamarajar Rd, TNHB Housing Unit", 11.0027985, 77.0282839, "Active"], [1610, "2nd Cross St, Raja Rajeshwari Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035, India", 11.0789611, 76.9998954, "Active"], [1706, "2, Vilankuruchi Rd, Poompugar Nagar, Murugan Nagar, Vinayagapuram, Coimbatore, Tamil Nadu 641035, India", 11.0641825, 77.0079297, "Active"], [3087, "3/10B, Mullai Nagar, Thudiyalur, Coimbatore, Tamil Nadu 641034, India", 11.0799949, 76.9314334, "Active"], [1637, "355B, Patel Rd, Ram Nagar, Coimbatore, Tamil Nadu 641009, India", 11.0107288, 76.9601196, "Active"], [3089, "35, Koothandai Kovil St, IOB Colony, Vadavalli, Coimbatore, Tamil Nadu 641041, India", 11.0266274, 76.9038067, "Active"], [1629, "363-372, Nehru St, Peranaidu Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India", 11.0165005, 76.9624154, "Active"], [1628, "372, Nehru St, Peranaidu Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India", 11.0166004, 76.9624119, "Active"], [3086, "3/78, VKV Nagar, NGGO Colony, Thudiyalur, Coimbatore, Tamil Nadu 641022, India", 11.0937905, 76.9432598, "Active"], [3127, "38, Old Damu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India", 11.0055982, 76.9904102, "Active"], [1473, "3rd Cross St, G K S Nagar, Ramanandha Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035, India", 11.0717696, 76.9993955, "Active"]];
        $tags = array_map(function ($tag) {
            return array(
                'sno'    => ucfirst($tag[0]),
                'name'   => ucfirst($tag[1]),
                'lat'    => ucfirst($tag[2]),
                'lon'    => ucfirst($tag[3]),
                'Status' => ucfirst($tag[4])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
