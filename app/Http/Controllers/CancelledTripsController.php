<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelledTripsController extends Controller
{
    public function index()
    {
        return view('cancelled_trips');
    }

    public function data()
    {
        $array = [[9913,"Sundharam","98XXXXXX18","PVR201874671","KOUNDAMPALAYAM","GANDHIPURAM",null,"Others","vna",null,null,"open","Indica non ac","crm",2,"27/09/2018 05:30 AM","19, nk nagar, pnt cly koundampalayam","9840899118","27/09/2018 05:04 AM",49532,76373],[9912,"RB Devaraj ","89XXXXXX45","PVR201874521","KIDNEY CENTER","RACE COURSE","409","Others","vna","409 Balamurugan 9940775294",null,"open","Indica NonAC","crm",1,"26/09/2018 08:40 PM","airforce quaters athipalaya priviu ","8903254945","26/09/2018 09:12 PM",70871,76223],[9911,"Praveenkumar","99XXXXXX34","PVR201874682","OLAMBUS","SOWRIPALYAM","412","Others","cmr went own veh","412 Sundar 7868070703",null,"open","Indica non ac","crm",2,"26/09/2018 08:14 PM","sowripalayam","9944032634","26/09/2018 08:39 PM",91768,76384],[9910,"RB Divya","95XXXXXX98","PVR201874503","RACE COURSE","SUNGAM","409","Customer Program Change","cumr pc","409 Balamurugan 9940775294",null,"open","Indica NonAC","crm",1,"26/09/2018 07:30 PM","sungam, sinthamani,","9500505898","26/09/2018 07:07 PM",85923,76205],[9909,"Siva Pragasam","94XXXXXX20","PVR201874642","GKNM","EDAYARPALAYAM- THADAGAM ROAD","635","Others","own trip cancel","635 Amalanathan 8248375935",null,"open","Indica non ac","crm",2,"26/09/2018 05:00 PM","edayarpalayam","9442287720","26/09/2018 04:50 PM",88505,76344],[9907,"Rajan Iyyer ","99XXXXXX53","PVR201874616","Brindavan Senior Citizen India","VADAVALLI",null,"Customer Cancellation","trip chngd u/d",null,null,"open","Indica AC","crm",2,"26/09/2018 05:00 PM","bindhavan hill view lakshmi nager thondamuthur rd vadavalli","9986130953","26/09/2018 03:06 PM",69303,76318],[9906,"RB Rohini","75XXXXXX32","PVR201874520","PEELAMEDU","PEELAMEDU",null,"Customer Program Change","school leave",null,null,"open","Indica AC","crm",1,"26/09/2018 02:40 PM","A 309 Sri Ram App , avarampalayam rd, Peelamedu.","7598667032","26/09/2018 01:24 PM",31952,76222],[9904,"RB Priya","99XXXXXX23","PVR201874515","SAIBABA KOIL","Saibaba Colony, Coimbatore, Tamil Nadu, India",null,"Bad Vehicle Condition","today leave",null,null,"open","Indica non ac","crm",1,"26/09/2018 12:00 PM","","9942797723","26/09/2018 10:47 AM",126398,76217],[9903,"Palani Samy","96XXXXXX00","PVR201874559","PEELAMEDU","CHINNA VEDAMPATTY",null,"Others","cus no rsp",null,null,"open","Indica AC","crm",2,"26/09/2018 09:50 AM","221 c block,Manchester grant app, Aavarampalayam","9600693500","26/09/2018 10:30 AM",8986,76261],[9900,"Murali ","94XXXXXX08","PVR201874549","RAM NAGAR","COLLECTOR OFFICE",null,"Others","pc",null,null,"open","Indica AC","crm",2,"26/09/2018 10:00 AM","210-A,Sastri rd,Ram nagar.","9443046808","26/09/2018 09:25 AM",7933,76251],[9899,"RB Easwara Moorthy","98XXXXXX39","PVR201874516","GOLD WINS","100 FEET Road","412","Customer Cancellation","pc","412 Sundar 7868070703",null,"open","Indica NonAC","crm",1,"26/09/2018 09:00 AM","Gandhipuram","9842253339","26/09/2018 09:07 AM",3186,76218],[9898,"RB Isabella","90XXXXXX46","PVR201874495","VADAVALLI","AGRI",null,"Customer Cancellation","pc",null,null,"open","Indica non ac","crm",1,"26/09/2018 09:30 AM","vmal nagar,vadavalli","9003432546","26/09/2018 09:05 AM",94323,76197],[9897,"RB Vishnu","98XXXXXX77","PVR201874505","GP","PN PALAYAM",null,"Customer Cancellation","leave",null,null,"open","Indica NonAC","crm",1,"26/09/2018 09:30 AM","gp signal","9843034077","26/09/2018 08:46 AM",32908,76207],[9896,"Prabhu","99XXXXXX48","PVR201874545","RAINBOW SUNGAM","PAAL COMPANY","640","Customer Cancellation","pc","640 sukumaran 9500266380",null,"open","Indica AC","crm",2,"26/09/2018 09:00 AM","manoharam hosp Paal company, RS puram","9942757448","26/09/2018 08:42 AM",9428,76247],[9895,"RB Saraswathi","90XXXXXX56","PVR201874500","THANEER PANDHAL","KALAPATTY","412","Others","cmr no response after pick up time","412 Sundar 7868070703",null,"open","Indica NonAC","crm",1,"26/09/2018 08:25 AM","25,Gowthamapuri,Vilankuruchi Road,thaneeerpandal,","9043473856","26/09/2018 08:32 AM",92395,76202],[9893,"RB Dorathy","96XXXXXX50","PVR201874517","GV RESIDENCY","GV RESIDENCY",null,"Customer Cancellation","today leave",null,null,"open","Indica non ac","crm",1,"26/09/2018 08:00 AM","Sungam","9655581750","26/09/2018 07:22 AM",92574,76219],[9892,"RB Hemalatha","98XXXXXX75","PVR201874519","CODISSIA","OLAMBUS",null,"Customer Cancellation","leave",null,null,"open","Indica NonAC","crm",1,"26/09/2018 03:25 PM","","9894020075","26/09/2018 06:13 AM",125437,76221],[9891,"RB Hemalatha","98XXXXXX75","PVR201874523","OLAMBUS","CODISSIA",null,"Customer Cancellation","leave",null,null,"open","Indica NonAC","crm",1,"26/09/2018 01:35 PM","","9894020075","26/09/2018 06:13 AM",125437,76225],[9890,"RB Dr.sivangyanam","99XXXXXX62","PVR201874303","HOPE COLLEGE","FUN MALL","437","Others","vna","437 Kathiravan 8667668556",null,"open","Indica NonAC","crm",1,"25/09/2018 07:00 PM","hopes doctor diabitician in kmch","9944455662","25/09/2018 08:31 PM",80184,76005],[9889,"Nayagam","99XXXXXX96","PVR201874474","VELLAKINAR PIRIVU","Railway Station",null,"Bad Vehicle Condition","informed vna due to traffic",null,null,"open",null,"crm",4,"25/09/2018 09:30 PM","vellakinar, thudiyalur","9965595796","25/09/2018 08:26 PM",8627,76176]];

        $tags = array_map(function ($tag) {
            return array(
                'pnr'     => ucfirst($tag[3]),
                'from'    => ucfirst($tag[4]),
                'to'      => ucfirst($tag[5]),
                'vech'    => ucfirst($tag[6]),
                'reason'  => ucfirst($tag[7]),
                'desc'    => ucfirst($tag[8]),
                'follow'  => ucfirst($tag[9]),
                'candate' => ucfirst($tag[15])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
