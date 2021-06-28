<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoAssignedBookingsController extends Controller
{
    public function index()
    {
        return view('auto_assigned_bookings');
    }

    public function data()
    {
        $array = [[1, " Anu Radha", "90XXXXXX94", "PN PUDUR", "WOMENS CENTER", "2018-04-09", "31/12/2018", "Mon, Tues, Wed, Thu, Fri", "08:30:00", "active"], [2, " Anuradha", "90XXXXXX19", "Koundampalayam, India", "KOUNDAMPALAYAM", "2018-04-09", "31/12/2018", "Mon, Tues, Wed, Thu, Fri", "16:15:00", "inactive"], [3, " Chitra", "93XXXXXX04", "KANNAPPAN NAGAR", "OPPANAKARA STREET", "2018-06-01", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "09:15:00", "active"], [4, " Chitra", "93XXXXXX04", "OPPANAKARA STREET", "KANNAPPAN NAGAR", "2018-06-01", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "17:00:00", "active"], [5, " Devaraj ", "89XXXXXX45", "RACE COURSE", "LAKSHMI MILLS", "2018-04-07", "31/12/2018", "Sun, Mon, Tues, Wed, Thu, Fri, Sat", "17:30:00", "inactive"], [6, " Devaraj ", "89XXXXXX45", "LAKSHMI MILLS", "RACE COURSE", "2018-04-07", "31/12/2018", "Sun, Mon, Tues, Wed, Thu, Fri, Sat", "20:45:00", "inactive"], [7, " Dr. Ramasamy", "94XXXXXX40", "K.K PUDHUR", "PEELAMEDU", "2018-04-08", "31/12/2018", "Mon, Tues, Wed, Thu, Fri", "08:30:00", "active"], [8, " Dr. Ramasamy", "94XXXXXX40", "PEELAMEDU", "K.K PUDHUR", "2018-04-09", "31/12/2018", "Mon, Tues, Wed, Thu, Fri", "12:30:00", "active"], [9, " Dr. Ramasamy", "94XXXXXX40", "PEELAMEDU", "K.K PUDHUR", "2018-04-09", "31/12/2018", "Mon, Tues, Wed, Thu, Fri", "12:30:00", "inactive"], [10, "DR ANTIHA", "82XXXXXX89", "SAIBABA COLONY", "GH", "2018-06-25", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "08:00:00", "inactive"], [11, "DR ANTIHA", "82XXXXXX89", "GH", "SAIBABA COLONY", "2018-06-25", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "16:30:00", "inactive"], [12, " Dr.sivangyanam", "99XXXXXX62", "HOPE COLLEGE", "KMCH", "2018-04-07", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "08:45:00", "active"], [13, " Dr.sivangyanam", "99XXXXXX62", "KMCH", "HOPE COLLEGE", "2018-04-07", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "18:00:00", "active"], [14, " Dr.sivangyanam", "99XXXXXX62", "HOPE COLLEGE", "FUN MALL", "2018-04-07", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "19:00:00", "active"], [15, " Dr.sivangyanam", "99XXXXXX62", "FUN MALL", "HOPE COLLEGE", "2018-04-07", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "22:00:00", "active"], [16, " Geetha", "99XXXXXX70", "TOWN HALL", "RAMAKRISHNA HOSPITAL", "2018-04-07", "31/12/2018", "Tues, Thu, Sat", "14:00:00", "active"], [17, " Geetha", "99XXXXXX70", "RAMAKRISHNA HOSPITAL", "TOWN HALL", "2018-04-07", "31/12/2018", "Tues, Thu, Sat", "19:30:00", "active"], [18, " Isabella", "90XXXXXX46", "VADAVALLI", "AGRI", "2018-05-26", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "09:30:00", "active"], [19, " Isabella", "90XXXXXX46", "AGRI", "VADAVALLI", "2018-05-26", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "12:30:00", "active"], [20, " Isabella", "90XXXXXX46", "VADAVALLI", "AGRI", "2018-05-26", "31/12/2018", "Mon, Tues, Wed, Thu, Fri, Sat", "13:45:00", "active"]];

        $tags = array_map(function ($tag) {
            return array(
                'SNo'          => ucfirst($tag[0]),
                'CustomerName' => ucfirst($tag[1]),
                'MobileNumber' => ucfirst($tag[2]),
                'FromLocation' => ucfirst($tag[3]),
                'ToLocation'   => ucfirst($tag[4]),
                'StartDate'    => ucfirst($tag[5]),
                'DaysinWeek'   => ucfirst($tag[6]),
                'PickupTime'   => ucfirst($tag[7]),
                'Status'       => ucfirst($tag[8]),
                'Status1'      => ucfirst($tag[9])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
