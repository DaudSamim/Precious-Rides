<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerMasterController extends Controller
{
    public function index()
    {
        return view('customer_master');
    }

    public function data()
    {
        $array = [[49562, "Subramaniyam", "94XXXXXX60", "su*******l@yahoo.com", null, "In-Active", "vadavalli, Mullai Nagar", null, "crm"], [80158, "Stanley", "98XXXXXX25", "st**********r@gmail.com", null, "Active", "3/122,teachers col,annur", null, "crm"], [126578, "Stanly", "95XXXXXX83", "st***********r@gmail.com", "No", "Active", "", "30-08-2018", "crm"], [60305, "Ibrahim ", "99XXXXXX02", "s.*********c@gmail.com", null, "Active", "grand regent", null, "crm"], [12752, "Sasikumar.", "98XXXXXX21", "ss**************y@gmail.com", null, "Active", "14/26 sri ram garden phase II, Vedapatti, Kurumbapalayam", null, "crm"], [28234, "Raguraman", "96XXXXXX46", "sr******4@yahoo.co.in", null, "Active", "Sri Garden Apartment Flat E 2, 3 rd Floor Arun Nager Vadavalli", null, "crm"], [32272, "Ramaswamy", "94XXXXXX37", "sr*******a@yahoo.co.in", null, "Active", "2, indra nagar, gold wins, cbe 14 ", null, "crm"], [126695, "srisarankumar m", "99XXXXXX22", "sr************2@gmail.com", null, "Active", null, "22-03-2018", "app"], [54538, "Srinivasan ", "94XXXXXX11", "sr*******a@gmail.com", null, "Active", "koundam,apalayam govt it staff", null, "crm"], [60101, "Anand", "98XXXXXX82", "sr***i@fashionsquare.biz", null, "Active", "lee meridian hotel, chiniyam palayam\r\n\r\nnot give address", null, "crm"], [83831, "Srinivasan", "93XXXXXX06", "sr********0@yahoo.com", null, "Active", "7,hindusthan avenue,avarampalayam", null, "crm"], [18984, "Sushant", "93XXXXXX94", "sr*********a@gmail.com", "No", "Active", "chinmaya mission 1334a, thadagam rd, rspuram", "16-08-2018", "crm"], [90962, "Bhuvaneshwari", "99XXXXXX91", "sr*********a@gmail.com", "No", "Active", "kavundampalaym ", "16-08-2018", "crm"], [62453, "Valli murugesan", "94XXXXXX60", "sr*********a@gmail.com", "No", "Active", "3rd st, KOUNDAMPALAYAM", "16-08-2018", "crm"], [52616, "Srinath", "97XXXXXX64", "sr*****6@gmail.com", null, "Active", "gm mills koungu nadu arts", null, "crm"], [41229, "Kokila", "87XXXXXX48", "sp**********b@yahoo.co.in", null, "Active", "Maha Rani Avanue,\r\nvadavalli", null, "crm"], [74564, "Gopinath", "97XXXXXX17", "sp**o@smcindia.in", null, "Active", "41 cwest barshikarler rd \r\nnera eye foundation \r\nrs puram", null, "crm"], [51708, "Santhosh", "97XXXXXX10", "so*******7@gmail.com", null, "Active", "1,gandhi nagar, behind charan nager", null, "crm"], [11624, "Ravi Venkataraman", "97XXXXXX76", "so*****a@hotmail.com", null, "Active", "D2 Tri Star Apartment laxmi mills avinashi road cbe", null, "crm"], [74468, "Sounder Rajan", "99XXXXXX35", "so***********n@wipro.com", null, "Active", "106,lingapa setty st,coimbatore-1", null, "crm"]];

        $tags = array_map(function ($tag) {
            return array(
                'sno'              => ucfirst($tag[0]),
                'Name'             => ucfirst($tag[1]),
                'PrimaryMobile'    => ucfirst($tag[2]),
                'Email'            => ucfirst($tag[3]),
                'VIP'              => ucfirst($tag[4]),
                'Status'           => ucfirst($tag[5]),
                'Address'          => ucfirst($tag[6]),
                'RegistrationDate' => ucfirst($tag[7]),
                'RegMode'          => ucfirst($tag[8]),
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }

}
