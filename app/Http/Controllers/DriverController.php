<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        return view('add_driver');
    }

    public function list()
    {
        return view('driver');
    }

    public function data()
    {
        $array = [[121, "403 Stephan", "403", "99XXXXXX14", "", "27 Anna nager 5 th st vadavalli", "active", "8677670333*************2"], [407, "407 Rajasekaran", "407", "98XXXXXX22", "", "89/2, Kannadhasan street, gandhi nagar, edayarpalayam, cbe-641025", "active", "8652300275*************1"], [408, "408 Nagaraj", "408", "90XXXXXX64", "", "KRS Residency, kulathuplayam, thondamuthur post, cbe", "active", "8691240264*************6"], [409, "409 Balamurugan", "409", "94XXXXXX12", "", "59c, Gopal Layout, Ponnaiya Raja Puram, Ganhdipark cbe", "active", "8697280207*************5"], [412, "412 Sundar", "412", "78XXXXXX03", "", "28,ganapathy devar colony,ramanathapura, cbe", "active", "3560420819*************0"], [414, "414 Raju", "414", "77XXXXXX42", "", "varatharajapuram", "active", "3571510870*************8"], [97, "415 Thamaraikani", "415", "89XXXXXX78", "", "1 b kalaingar nager Irugur", "active", "3590270862*************1"], [71, "415 Thamaraikani", "415..", "89XXXXXX00", "", "52 1 b kalaingar nager Irugur", "active", "3590270862***********8"], [117, "417 Boobalan", "417", "83XXXXXX19", "", "42 Zalikolli St bharathiyarpuram thenamanallur thomdamuttur post", "active", "3581880770*************0"], [53, "420 Alex", "420", "72XXXXXX04", "", "46 nd street manikavasakar nager kaanusamy road kndampalayam ", "active", "3533220669*************7"], [124, "423 Munusamy", "423", "74XXXXXX77", "", "34 muniappan kovil st lawly rd cbe -3", "active", "3552610748*************6"], [424, "424 Suresh", "424", "88XXXXXX55", "", "81,vinayakar temple st,udayampalayam,coimbatore-28", "active", "null"], [147, "425 Krishnaprasath", "425", "96XXXXXX11", "", "F 102 Sumatha eagles nest App Veeraimapalayam rd Sitra", "active", "3554060916*************9"], [426, "426 Rajesh", "426", "95XXXXXX13", "", "319A, Sriram nagar, 4th street, gandhi maa nagar, peelamedu, cbe-641004", "active", "8629600339*************0"], [427, "427 Jaya", "427", "90XXXXXX60", "", "-5/41, periyar nagar, peelamedu, cbe", "active", "8636610339*************3"], [435, "435 Siva", "435", "75XXXXXX00", "", "907 Annanagar Housing Unit Veerakeralam", "active", "8681430293*************0"], [85, "437 Kathiravan", "437", "86XXXXXX56", "", "124 amma nager kuttianila thottam machamapalayam sundarapuram cbe : 641024", "active", "8648500359*************9"], [438, "438 Ravishankar", "438", "98XXXXXX11", "ravirani211@yahoo.co.in", "4/11, super garden extension 2, vadavalli", "active", "3559830567*************8"], [72, "441 Marimuthu", "441", "74XXXXXX62", "", "2/3, moover nagar, kavundampalayam, cbe-640030", "in-active", "null"]];

        $tags = array_map(function ($tag) {
            return array(
                'name'     => ucfirst($tag[1]),
                'username' => ucfirst($tag[2]),
                'mobile'   => ucfirst($tag[3]),
                'address'  => trim(substr(ucfirst($tag[5]), 0, 30)) . '...',
                'imei'     => ucfirst($tag[7]),
                'status'   => ucfirst($tag[6])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
