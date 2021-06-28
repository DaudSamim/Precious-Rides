<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMasterController extends Controller
{
    public function index()
    {
        return view('user_master');
    }

    public function data()
    {
        $array = [[435, "435 Siva", "435", "75XXXXXX00", "", null, "", "Active", "907 Annanagar Housing Unit Veerakeralam"], [85, "437 Kathiravan", "437", "86XXXXXX56", "", null, "", "Active", "124 amma nager kuttianila thottam machamapalayam sundarapuram cbe : 641024"], [438, "438 Ravishankar", "438", "98XXXXXX11", "ravirani211@yahoo.co.in", null, "", "Active", "4/11, super garden extension 2, vadavalli"], [72, "441 Marimuthu", "441", "74XXXXXX62", "", null, "", "Active", "2/3, moover nagar, kavundampalayam, cbe-640030"], [442, "442 Vaigundaraj", "442", "93XXXXXX08", "", null, "", "Active", "4/134Vijayaachampadu Therku theru Naganeri Tahaluka Thrunelvelli"], [444, "444 Arogyasamy", "444", "88XXXXXX52", "", null, "", "Active", "15 c2, Cheran thottam, GN Mills"], [445, "445 Srinivasan", "445", "88XXXXXX22", "", null, "", "Active", "92c, Maruthakonar street, velandipalayam, cbe-25"], [123, "447 Kalimuthu", "447", "99XXXXXX57", "", null, "", "Active", "2/3 Periyapatti chetti st sundakamuttur cbe-10"], [164, "448 Chinnadurai", "448", "70XXXXXX23", "", null, "", "Active", "107 a Periyar nager saibabakovil cbe :43"], [163, "448 Owner", "448", "70XXXXXX23", "", null, "", "Active", "107 A periyar nager Saibabakovil cbe :43"], [122, "453 Rajkumar", "453", "96XXXXXX35", "", null, "", "Active", "25 Vadavalangulam kodikulam po paramakudi"], [111, "455 Abdul", "455555", "90XXXXXX35", "", null, "", "Inactive", "3rd, cross, sri ayyappan nagar, narasimma puram, kuniamuthur 641008"], [51, "455 Abdul", "45512", "97XXXXXX90", "", null, "", "Active", "50 Om ganesh nager vadavalli"], [155, "455 Durai", "455", "95XXXXXX55", "", null, "", "Active", "9/104 Jeeva nager Gn mills post Urumandampalayam"], [154, "455 Owner", "455", "95XXXXXX15", "", null, "", "Active", "9/104 Jeeva St Gn mills post urumandampalayam"], [456, "456 Govindraj", "456", "96XXXXXX85", "", null, "", "Active", "10/22, kippepalayam, thoendamuthur"], [459, "459 Rafi", "459", "94XXXXXX00", "", null, "", "Active", "27/3 Royal Nagar, Karumbukkadai, Coimbatore 8"], [465, "465 Ajithkumar", "465", "95XXXXXX24", "", null, "", "Active", "1st division, mudis valparai"], [471, "471 Ravi", "471", "82XXXXXX67", "", null, "", "Active", "35/78, Rajiv gandhi 1st street, edayarplayam, cbe-641025"], [106, "471 Senthamarai", "471 Owner", "98XXXXXX32", "", null, "", "Active", "9/73, senniyappa goundar, 9/73,2nd floor, new anantha nagar, p n pudur, cbe 641041"]];

        $tags = array_map(function ($tag) {
            return array(
                'sno'           => ucfirst($tag[0]),
                'namee'         => ucfirst($tag[1]),
                'UaerName'      => ucfirst($tag[2]),
                'PrimaryMobile' => ucfirst($tag[3]),
                'Address'       => ucfirst($tag[8]),
                'Status'        => ucfirst($tag[7])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
