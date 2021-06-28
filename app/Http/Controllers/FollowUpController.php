<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowUpController extends Controller
{
    public function index()
    {
        return view('follow_up');
    }

    public function data()
    {
        $array = [[5945,"PVR201874689","Ganapathy","98xxxxxx19","27/09/2018 07:04 AM","Driver SMS not Delivered","not call cmr ",null,"open","3-b,block -2,sreerosh freedom squre appartment,sowripalyam","Sowripalayam, Coimbatore, Tamil Nadu, India","Railway Station",76391],[5944,"PVR201874722","RB Anu Radha","90xxxxxx94","27/09/2018 06:10 AM","Booking Conformed","time chng",null,"open","KK colony,pn pudur,","PN PUDUR","WOMENS CENTER",76424],[5943,"PVR201874654","K.C.N Swamy","99xxxxxx08","26/09/2018 05:55 PM","Booking Conformed","",null,"open","block a-flat a1, anjjanur road, bommanampalayam pirivu(vedapatti , gayathiri nagar","Ramanathapuram, Coimbatore, Tamil Nadu, India","Vadavalli, Coimbatore, Tamil Nadu, India",76356],[5942,"PVR201874613","Krishnamurthy","94xxxxxx08","26/09/2018 02:58 PM","Booking Conformed","PVR dtls",null,"open","1458, brindhavan hill view lakshmi nagarvadavalli","ONAAMPALAYAM","Brindavan Senior Citizen Foundation Guhan Garden, Lakshmi Nagar, Thondamuthur Road, Bharathiar University Post, Coimbatore-641 046, Bommanampalayam, Coimbatore, Tamil Nadu 641046, India",76315],[5941,"PVR201874576","S.Venkat","97xxxxxx31","26/09/2018 12:32 PM","Driver Not Yet Called Customer","",null,"open","107 Brindavan Hill View Lakshmni Nager, gujan garden ","Brindavan Senior Citizen Foundation Guhan Garden, Lakshmi Nagar, Thondamuthur Road, Bharathiar University Post, Coimbatore-641 046, Bommanampalayam, Coimbatore, Tamil Nadu 641046, India","Brindavan Senior Citizen Foundation Guhan Garden, Lakshmi Nagar, Thondamuthur Road, Bharathiar University Post, Coimbatore-641 046, Bommanampalayam, Coimbatore, Tamil Nadu 641046, India",76278],[5940,"PVR201874583","Radha","96xxxxxx85","26/09/2018 11:42 AM","Booking Conformed","drop place chngd",null,"open","34 ,Nana Nani Phase 2 vadvalli","Nana Nani Phase 2 Vadavalli","Nana Nani Phase 4 Kasturinayakenpalayam",76285],[5939,"PVR201874548","RB Vishnu","98xxxxxx77","26/09/2018 11:29 AM","Driver SMS not Delivered","conformation msg not received ",null,"open","gp signal","GP","PERUR PACCHAPALAYAM",76250],[5938,"PVR201874561","RB Sagundhala","98xxxxxx33","26/09/2018 10:21 AM","Booking Conformed","PVR dtls",null,"open","65 raganendra nagar,bharathiyar univ,iob colony","IOB COLONY","IOB COLONY",76263],[5937,"PVR201874559","Palani Samy","96xxxxxx00","26/09/2018 09:58 AM","Driver Not Yet Called Customer","",null,"open","221 c block,Manchester grant app, Aavarampalayam","PEELAMEDU","CHINNA VEDAMPATTY",76261],[5936,"PVR201874462","Rajamani","89xxxxxx75","26/09/2018 08:12 AM","Booking Conformed","PVR dtls",null,"open","166, Brindavan Hill View, Vadavalli","Brindavan Senior Citizen Foundation Guhan Garden, Lakshmi Nagar, Thondamuthur Road, Bharathiar University Post, Coimbatore-641 046, Bommanampalayam, Coimbatore, Tamil Nadu 641046, India","KANNAPPAN NAGAR, sanganoor,coimbatore",76164],[5935,"PVR201874468","Murali","70xxxxxx19","26/09/2018 08:06 AM","Booking Conformed","PVR dtls",null,"open","vadavalli","VADAVALLI","AIRPORT",76170],[5934,"PVR201874470","Nambi","94xxxxxx54","26/09/2018 07:04 AM","Driver SMS not Delivered","PVR detailes",null,"open","Flat no 7 G.G.Avenue Near more super market road, vadavalli","VADAVALLI","GKNM",76172],[5933,"PVR201874446","Vaithyanathan","99xxxxxx91","26/09/2018 06:33 AM","Driver SMS not Delivered","pick up time change",null,"open","Thaygi Shanmugan ager Singanallur","SINGANALLUR","NEELAMBUR",76148],[5932,"PVR201874498","RB Anu Radha","90xxxxxx94","26/09/2018 06:02 AM","Driver SMS not Delivered","pick up time change",null,"open","KK colony,pn pudur,","PN PUDUR","WOMENS CENTER",76200],[5931,"PVR201874468","Murali","70xxxxxx19","26/09/2018 05:48 AM","Driver SMS not Delivered","pick up time change",null,"open","vadavalli","VADAVALLI","AIRPORT",76170],[5930,"PVR201874376","Ramalingam","96xxxxxx81","25/09/2018 11:00 AM","Booking Conformed","PVR dtls",null,"open","kuruchi, sundarapuram ","RS PURAM","SUNDARAPURAM",76078],[5929,"PVR201874308","RB Isabella","90xxxxxx46","25/09/2018 09:40 AM","Driver Not Yet Called Customer","drvr not call cus",null,"open","vmal nagar,vadavalli","AGRI","VADAVALLI",76010],[5928,"PVR201874187","Akilashweran","94xxxxxx58","25/09/2018 09:32 AM","Driver SMS not Delivered","",null,"open","26,vana prasta,kasturinayaken palayam,Vadavalli","Vanaprastha Vadavalli","Vanaprastha Vadavalli",75889],[5927,"PVR201874349","RB Vanitha","99xxxxxx26","25/09/2018 09:15 AM","Booking Conformed","PVR dtls",null,"open","amirhtha school near ,nallampalayam road,kavundampalayam","NALLAM PALAYAM","GANAPATHY",76051],[5926,"PVR201874298","LAXMI KRISHNAN","98xxxxxx05","25/09/2018 06:28 AM","Booking Conformed","PVR dtls\r\n\r\n",null,"open","32 Dhyana prastha Vadavalli.","Vanaprastha Vadavalli","Railway Station",76000]];

        $tags = array_map(function ($tag) {
            return array(
                'enq'     => ucfirst($tag[1]),
                'name'    => ucfirst($tag[2]),
                'num'      => ucfirst($tag[3]),
                'date'    => ucfirst($tag[4]),
                'desc'    => ucfirst($tag[6]),
                'type'  => ucfirst($tag[5]),
                'enqdes' => ucfirst($tag[6]),
                'status' => ucfirst($tag[8])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
