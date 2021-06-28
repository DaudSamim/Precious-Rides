<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackComplaintController extends Controller
{
    public function index()
    {
        return view('feedback_complaint');
    }

    public function data()
    {
        $array = [[1419,"Meenashi","98xxxxxx26",null,"29/09/2018 04:34 PM",null,null,null,"open","vadavalli","","","","vadavalli","Meenashi","9894838126","vadavalli",null,95749],[1418,"Jaganathan","88xxxxxx80",null,"29/09/2018 04:33 PM",null,null,null,"open","vnr nagarvadavalli 4th st","","","","vnr nagarvadavalli 4th st","Jaganathan","8870289280","vnr nagarvadavalli 4th st",null,42237],[1417,"Lalitha","95xxxxxx34",null,"29/09/2018 04:33 PM",null,null,null,"open","B-15/16,vsk nagar,vadavalli","","","","B-15/16,vsk nagar,vadavalli","Lalitha","9585516834","B-15/16,vsk nagar,vadavalli",null,6489],[1416,"Siva Raman","99xxxxxx98",null,"29/09/2018 04:33 PM",null,null,null,"open","55 2 th cross Periyathottam colony,vadavalli","","","","55 2 th cross Periyathottam colony,vadavalli","Siva Raman","9944685798","55 2 th cross Periyathottam colony,vadavalli",null,14269],[1415,"RB Umahari","94xxxxxx63",null,"29/09/2018 04:33 PM",null,null,null,"open","","","","","","RB Umahari","9487530963","",null,125438],[1414,"Mohan Ganapathy","98xxxxxx01",null,"29/09/2018 04:33 PM",null,null,null,"open","navavoor privu,vadvalli","","","","navavoor privu,vadvalli","Mohan Ganapathy","9840030001","navavoor privu,vadvalli",null,7737],[1413,"Srinivasan","93xxxxxx29",null,"29/09/2018 04:33 PM",null,null,null,"open","thatja gardern,thiruvalluvar nagar,vadavalli","","","","thatja gardern,thiruvalluvar nagar,vadavalli","Srinivasan","9363114229","thatja gardern,thiruvalluvar nagar,vadavalli",null,76323],[1412,"Shobana","80xxxxxx77",null,"29/09/2018 04:33 PM",null,null,null,"open","139,Krishna colony,ramanathapuram","","","","139,Krishna colony,ramanathapuram","Shobana","8098424277","139,Krishna colony,ramanathapuram",null,13902],[1411,"Muthu Mani","98xxxxxx19",null,"29/09/2018 04:32 PM",null,null,null,"open","Sowparniya apartment arun nagar,vadavalli","","","","Sowparniya apartment arun nagar,vadavalli","Muthu Mani","9843916619","Sowparniya apartment arun nagar,vadavalli",null,81],[1410,"RB Abirami","98xxxxxx22",null,"29/09/2018 04:32 PM",null,null,null,"open","new anukiraha app, manis theater near, hopes","","","","new anukiraha app, manis theater near, hopes","RB Abirami","9843451522","new anukiraha app, manis theater near, hopes",null,43735],[1409,"Senthil","96xxxxxx45",null,"29/09/2018 04:32 PM",null,null,null,"open","tvh","","","","tvh","Senthil","9677402745","tvh",null,81932],[1408,"Ganapathy","94xxxxxx87",null,"29/09/2018 04:32 PM",null,null,null,"open","54,Marthanagar.\r\nVadavalli","","","","54,Marthanagar.\r\nVadavalli","Ganapathy","9442139087","54,Marthanagar.\r\nVadavalli",null,3392],[1407,"Anitha","90xxxxxx31",null,"29/09/2018 04:31 PM",null,null,null,"open","","","","","","Anitha","9042004031","",null,126406],[1406,"Krishnan","88xxxxxx57",null,"29/09/2018 04:31 PM",null,null,null,"open","g1, block 2, kujan building, anjanur, bommannampalayam pirivu","","","","g1, block 2, kujan building, anjanur, bommannampalayam pirivu","Krishnan","8883009057","g1, block 2, kujan building, anjanur, bommannampalayam pirivu",null,81701],[1405,"Kalayana Ram","98xxxxxx57",null,"29/09/2018 04:31 PM",null,null,null,"open","4a,Vincent colony,R.S.Puram","","","","4a,Vincent colony,R.S.Puram","Kalayana Ram","9840279957","4a,Vincent colony,R.S.Puram",null,5175],[1404,"ROSELIN","81xxxxxx07",null,"29/09/2018 04:29 PM",null,null,null,"open","H-101,AIR FORCE HOUSING UINT ATHIPALYAM PIRIVU radio city office, (sungam)","","","","H-101,AIR FORCE HOUSING UINT ATHIPALYAM PIRIVU radio city office, (sungam)","ROSELIN","8122604907","H-101,AIR FORCE HOUSING UINT ATHIPALYAM PIRIVU radio city office, (sungam)",null,79088],[1403,"Narayanan","89xxxxxx90",null,"29/09/2018 04:29 PM",null,null,null,"open","16 E sasthri nagar near kongunadu clg gn mills","","","","16 E sasthri nagar near kongunadu clg gn mills","Narayanan","8903447690","16 E sasthri nagar near kongunadu clg gn mills",null,8479],[1402,"Krishnan","88xxxxxx57",null,"29/09/2018 04:29 PM",null,null,null,"open","g1, block 2, kujan building, anjanur, bommannampalayam pirivu","","","","g1, block 2, kujan building, anjanur, bommannampalayam pirivu","Krishnan","8883009057","g1, block 2, kujan building, anjanur, bommannampalayam pirivu",null,81701],[1401,"Sri","70xxxxxx56",null,"29/09/2018 04:28 PM",null,null,null,"open","null","","","","null","Sri","7092927656","null",null,96248],[1400,"pradeen","70xxxxxx20",null,"29/09/2018 04:27 PM",null,null,null,"open","null","","","","null","pradeen","7094972020","null",null,96238]];

        $tags = array_map(function ($tag) {
            return array(
                'cus'     => ucfirst($tag[1]),
                'mob'    => ucfirst($tag[2]),
                'fed'      => ucfirst($tag[3]),
                'cd'    => ucfirst($tag[4]),
                'fo'    => ucfirst($tag[6]),
                'des'  => ucfirst($tag[5]),
                'status' => ucfirst($tag[8])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
