<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    public function index()
    {
        return view('enquiries');
    }

    public function data()
    {
        $array = [[212,"ENQ0298","Sundar","98XXXXXX90","24/09/2018 09:55 AM","km11+200+toll","trip",null,"open","kurinchi st,Vembu avenue, vadavalli","RS PURAM","Rajapalayam, Tamil Nadu, India","Sundar","9865254090","2018-09-25 00:00:00","kurinchi st,Vembu avenue, vadavalli",43121,1269,7759],[211,"ENQ0297","Balaraman","95XXXXXX30","23/09/2018 11:05 AM","48 hrs pkg 6200+km9+bata+permit","trip",null,"open","47,lakshmi nagar.\r\nTHondamuthur road,\r\nvadavalli","VADAVALLI","Mysuru, Karnataka, India","Balaraman","9500100530","2018-10-13 00:00:00","47,lakshmi nagar.\r\nTHondamuthur road,\r\nvadavalli",66858,1334,9993],[210,"ENQ0296","Vimal","98XXXXXX03","19/09/2018 11:44 AM","asked call centre number","general",null,"open","16 c Shakthi Aksaya App Alamelu Mangai Avaenue vadavalli",null,null,"Vimal","9894824403",null,"16 c Shakthi Aksaya App Alamelu Mangai Avaenue vadavalli",56101,null,null],[209,"ENQ0295","Kumar","81XXXXXX72","08/09/2018 01:00 PM","1500+80+8+permit","trip",null,"open","34, alamelu mangai lay out, puliyakulam","VADAVALLI","Thrissur, Kerala, India","Kumar","8122090772","2018-09-09 00:00:00","34, alamelu mangai lay out, puliyakulam",70805,1334,8965],[208,"ENQ0294","Gourish","98XXXXXX52","06/09/2018 12:15 PM","24 hrs pkg booked Rubina","trip",null,"open","","ANNASILAI","Erode, Tamil Nadu, India","Gourish","9884253052","2018-09-06 00:00:00","",128454,1010,7661],[207,"ENQ0293","Ravindar","99XXXXXX14","02/09/2018 07:36 PM","kothagiri return 2300+125+9/addkms dezire","general",null,"open","58,Shresta 2nd st,\r\nMeenaEstate",null,null,"Ravindar","9952622414",null,"58,Shresta 2nd st,\r\nMeenaEstate",45632,null,null],[206,"ENQ0292","Lakshi","70XXXXXX31","31/08/2018 06:00 PM","1500+80+8","trip",null,"open","null","SITRA","Erode, Tamil Nadu, India","Lakshi","7010055131","2018-09-01 00:00:00","null",84304,1384,7661],[205,"ENQ0291","Radha","92XXXXXX80","31/08/2018 08:11 AM","km10+bata200+","trip",null,"open","Radha stores,maruthamalai main rd,navavoor pirivu","NAVAVOOR PIRIVU","Trichy Airport","Radha","9245250580","2018-09-15 00:00:00","Radha stores,maruthamalai main rd,navavoor pirivu",10103,1188,9939],[204,"ENQ0290","Vasavaraj","96XXXXXX18","28/08/2018 11:39 AM","km18+200+cmr not accepted rate","trip",null,"open","65 ,viveganantha rd, Ramnagar","THEETHIPALAYAM","Tirunelveli, Tamil Nadu, India","Vasavaraj","9655944618","2018-08-28 00:00:00","65 ,viveganantha rd, Ramnagar",32002,1310,9970],[203,"ENQ0289","Kumar","98XXXXXX16","26/08/2018 08:55 AM","km 21+200+250","trip",null,"open","2nd block, muthammal avenue, tulipe lay out, vadavalli, ","VADAVALLI","E Pondy Rd, Mandhakarai, Villupuram, Tamil Nadu 605602, India","Kumar","9894833116","2018-08-27 00:00:00","2nd block, muthammal avenue, tulipe lay out, vadavalli, ",58694,1334,7702],[202,"ENQ0288","Merien","94XXXXXX77","25/08/2018 03:48 PM","1500+80+8","trip",null,"open","om ganesh nagar, vadavalli","VADAVALLI","Palakkad, Kerala, India","Merien","9487216977","2018-08-26 00:00:00","om ganesh nagar, vadavalli",7598,1334,7499],[201,"ENQ0287","Uma Krishnan","97XXXXXX02","22/08/2018 10:25 AM","thirupur 12 hres 80kms 1500+8/addkms","general",null,"open","sarojini street,ram nagar,",null,null,"Uma Krishnan","9710127602",null,"sarojini street,ram nagar,",8182,null,null],[200,"ENQ0286","Kumar","98XXXXXX16","21/08/2018 04:46 PM","rs 13+300+250 permit","trip",null,"open","2nd block, muthammal avenue, tulipe lay out, vadavalli, ","VADAVALLI","Cochin Airport ATC Tower, Nedumbassery, Kerala 683111, India","Kumar","9894833116","2018-08-31 00:00:00","2nd block, muthammal avenue, tulipe lay out, vadavalli, ",58694,1334,7799],[199,"ENQ0285","Shamala","95XXXXXX80","16/08/2018 09:47 AM","km 20+permit 250","trip",null,"open","sree varsha gardern,near thudiyalur,opp venu gobal hospital","VADAVALLI","Palakkad, Kerala, India","Shamala","9500746480","2018-08-16 00:00:00","sree varsha gardern,near thudiyalur,opp venu gobal hospital",24851,1334,7499],[198,"ENQ0284","Santhanam","93XXXXXX02","14/08/2018 05:01 PM","km 20+","trip",null,"open","50, Peryathottam colony, 1 st st, Veerakeralam","VADAVALLI","Salem, Tamil Nadu, India","Santhanam","9345815602","2018-08-15 00:00:00","50, Peryathottam colony, 1 st st, Veerakeralam",19297,1334,7697],[197,"ENQ0283","Radha Kirshnan","99XXXXXX50","14/08/2018 10:57 AM","vadavalli-palakad 1700+9/km+300","general",null,"open","archana gardens pnt clny koundampalayam",null,null,"Radha Kirshnan","9944890950",null,"archana gardens pnt clny koundampalayam",63721,null,null],[196,"ENQ0282","Mabel","94XXXXXX75","12/08/2018 05:38 PM","","trip",null,"open","vasan eye care lakshmi mills","PN PALAYAM","Kerala, India","Mabel","9443063475","2018-08-30 00:00:00","vasan eye care lakshmi mills",60131,1227,7657],[195,"ENQ0281","Siva Raman","99XXXXXX98","11/08/2018 12:12 PM","1500+80+8","trip",null,"open","55 2 th cross Periyathottam colony,vadavalli","VADAVALLI","TIRUPPUR","Siva Raman","9944685798","2018-08-15 00:00:00","55 2 th cross Periyathottam colony,vadavalli",14269,1334,1324],[194,"ENQ0280","Sagthivel","99XXXXXX00","10/08/2018 12:23 PM","1800+1+300","trip",null,"open","mani traders,rangee gounders st","VADAVALLI","OOTY","Sagthivel","9994540600","2018-08-11 00:00:00","mani traders,rangee gounders st",37799,1334,1204],[193,"ENQ0279","Dr Irulappan","94XXXXXX75","04/08/2018 10:42 AM","3000+125+8+200","trip",null,"open","5 /12, shagsh apptment, vadavalli","VADAVALLI","Madurai, Tamil Nadu, India","Dr Irulappan","9444017375","2018-08-30 00:00:00","5 /12, shagsh apptment, vadavalli",61964,1334,7494]];

        $tags = array_map(function ($tag) {
            return array(
                'enq'     => ucfirst($tag[1]),
                'name'    => ucfirst($tag[2]),
                'num'      => ucfirst($tag[3]),
                'date'    => ucfirst($tag[4]),
                'desc'    => ucfirst($tag[5]),
                'type'  => ucfirst($tag[6]),
                'enqdes' => ucfirst($tag[7]),
                'status' => ucfirst($tag[8])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
