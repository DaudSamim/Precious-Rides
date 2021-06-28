<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelledBookingController extends Controller
{
    public function index()
    {
        return view('cancelled_booking');
    }

    public function data()
    {
        $array = [[74285, " Dr.sivangyanam", "99XXXXXX62", "PVR201872583", "653", "653 Muthu Kumar 9789293798", "FUN MALL", "HOPE COLLEGE", "Dzire AC", "crm", "0", 1, "17/09 09:35 PM", null, null, null, "", "", null, null, null, null, null, "9944455662", null, "cancelled", null, null, null, null, "17/09 06:00 AM", 5, "Superadmin", "", "", null, "hopes doctor diabitician in kmch", "353241090040513", "PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam", "Platinum", "Indica NonAC", null, "17/09 09:45 PM", "regular", "17/09 09:23 PM", "Admin.", null, null, null, null, "0", "0", "0", "0", null, null, "", null, "", "", "0", null, null, "Arumugam", "2018-09-17 21:45:19", "Arumugam", "2018-09-17 21:45:19"], [74309, " Ramesh", "99XXXXXX78", "PVR201872607", "607", "607 Pandiyarajan 9585840075", "EDAYARPALAYAM- THADAGAM ROAD", "AVINASHLINGAM CLG", "INDIGO AC", "crm", "0", 1, "17/09 09:40 AM", null, null, null, "", "", null, null, null, null, null, "9994129078", null, "cancelled", null, null, "indigo must", null, "17/09 06:00 AM", 5, "Superadmin", "4222401887", "", null, "marutham apart, srinivasa nagar, edayarpalayam", "864000037625998", "EDAYARPALAYAM, TVS Nagar, Kanuvai", "Gold", "Indica NonAC", null, "17/09 09:54 AM", "regular", "17/09 09:18 AM", "admin1", null, null, null, null, "0", "0", "0", "0", null, null, "", null, "", "", "0", null, null, "admin1", "2018-09-17 09:54:14", "admin1", "2018-09-17 09:54:14"], [74325, " Mary", "99XXXXXX32", "PVR201872623", "644", "644 Thiyagu 8778645599", "LAKSHMI MILLS", "LAKSHMI MILLS", "Etios AC", "crm", "0", 1, "17/09 08:15 AM", null, null, null, "", "", null, null, null, null, null, "9944081732", null, "cancelled", null, null, "School trip, pls tc on time", null, "17/09 06:00 AM", 5, "Superadmin", "", "", "No", "LAKSHMI MILLS ", "863882036878517", "PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam", "Gold", "Indica NonAC", null, "17/09 07:58 AM", "regular", "17/09 07:53 AM", "Arumugam", null, null, null, null, "0", "0", "0", "0", null, null, "", null, "", "17/09 07:53 AM", "0", null, null, "admin1", "2018-09-17 07:58:31", "admin1", "2018-09-17 07:58:31"], [74325, " Mary", "99XXXXXX32", "PVR201872623", "644", "644 Thiyagu 8778645599", "LAKSHMI MILLS", "LAKSHMI MILLS", "Etios AC", "crm", "0", 1, "17/09 08:15 AM", null, null, null, "", "", null, null, null, null, null, "9944081732", null, "cancelled", null, null, "School trip, pls tc on time", null, "17/09 06:00 AM", 5, "Superadmin", "", "", "No", "LAKSHMI MILLS ", "863882036878517", "PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam", "Gold", "Indica NonAC", null, "17/09 07:58 AM", "regular", "17/09 07:53 AM", "Arumugam", null, null, null, null, "0", "0", "0", "0", null, null, "", null, "", "17/09 07:53 AM", "0", null, null, "admin1", "2018-09-17 07:58:31", "Arumugam", "2018-09-17 07:51:45"], [74288, " AP Ganesan", "96XXXXXX72", "PVR201872586", null, null, "SELVAPURAM", "RS PURAM", null, "crm", null, 1, "17/09 05:00 PM", null, null, null, "", "", null, null, null, null, null, "9677707072", null, "cancelled", null, null, null, null, "17/09 06:00 AM", 5, "Superadmin", "", "", "No", "19, chandrasekarapuram selvapurampost cbe chettiveethi, selvapuram.", null, "UKKADAM, Oppanakkara St, Vysyal St, Townhall, Selvapuram", "Platinum", "Indica NonAC", null, "", "regular", "", null, null, null, null, null, "0", "0", "0", "0", null, null, "", null, "", "", "0", null, null, "pradeepa", "2018-09-17 08:15:20", "pradeepa", "2018-09-17 08:15:20"]];

        $tags = array_map(function ($tag) {
            return array(
                'id'          => ucfirst($tag[0]),
                'name'        => ucfirst($tag[1]),
                'number'      => ucfirst($tag[2]),
                'pnr'         => ucfirst($tag[3]),
                'taxino'      => ucfirst($tag[4]),
                'driver'      => ucfirst($tag[5]),
                'from'        => ucfirst($tag[6]),
                'to'          => ucfirst($tag[7]),
                'model'       => ucfirst($tag[40]),
                'bookingtype' => ucfirst($tag[9]),
                'total'       => ucfirst($tag[10]),
                'bookedby'    => ucfirst($tag[32]),
                'assignedby'  => ucfirst($tag[32]),
                'closedby'    => ucfirst($tag[57]),
                'paymode'     => ucfirst($tag[62])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
