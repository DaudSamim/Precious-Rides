<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OwnerController extends Controller
{
    public function index()
    {
        return view('add_owner');
    }

    public function list()
    {
        $owners = DB::table('owners')->orderBy('id','desc')->get();
        return view('owner',compact('owners'));
    }

    public function list_data()
    {
        $array = [[121, "403 Stephan", "403", "99XXXXXX14", "", "27 Anna nager 5 th st vadavalli", "active"], [407, "407 Rajasekaran", "407", "98XXXXXX22", "", "892, Kannadhasan street, gandhi nagar, edayarpalayam, cbe-641025", "active"], [102, "408 Dilsha", "408 owner", "94XXXXXX78", "", "193 prs Quatres Pn palayam", "active"], [409, "409 Balamurugan", "409", "94XXXXXX12", "", "59c, Gopal Layout, Ponnaiya Raja Puram, Ganhdipark cbe", "active"], [412, "412 Sundar", "412", "78XXXXXX03", "", "28,ganapathy devar colony,ramanathapura, cbe", "active"], [414, "414 Raju", "414", "77XXXXXX42", "", "varatharajapuram", "active"], [71, "415 Thamaraikani", "415..", "89XXXXXX00", "", "52 1 b kalaingar nager Irugur", "active"], [117, "417 Boobalan", "417", "83XXXXXX19", "", "42 Zalikolli St bharathiyarpuram  thenamanallur thomdamuttur post", "active"], [53, "420 Alex", "420", "72XXXXXX04", "", "46 nd street manikavasakar nager kaanusamy road                   kndampalayam ", "active"], [124, "423 Munusamy", "423", "74XXXXXX77", "", "34 muniappan kovil st lawly rd cbe -3", "active"], [424, "424 Suresh", "424", "88XXXXXX55", "", "81,vinayakar temple st,udayampalayam,coimbatore-28", "active"], [146, "425 Krishnaprasath", "425", "96XXXXXX11", "", "F102 Kpk nager Smueka eagles app veriamapalayam rd kalapati", "active"], [105, "426 Suresh", "426 owner", "90XXXXXX19", "", "52, dj nagar, peelamedu cbe-4", "active"], [427, "427 Jaya", "427", "90XXXXXX60", "", "-541, periyar nagar, peelamedu, cbe", "active"], [435, "435 Siva", "435", "75XXXXXX00", "", "907 Annanagar Housing Unit Veerakeralam", "active"], [85, "437 Kathiravan", "437", "86XXXXXX56", "", "124 amma nager kuttianila thottam machamapalayam sundarapuram cbe : 641024", "active"], [438, "438 Ravishankar", "438", "98XXXXXX11", "ravirani211@yahoo.co.in", "411, super garden extension 2, vadavalli", "inactive"], [72, "441 Marimuthu", "441", "74XXXXXX62", "", "23, moover nagar, kavundampalayam, cbe-640030", "inactive"]];

        $tags = array_map(function ($tag) {
            return array(
                'name'     => ucfirst($tag[1]),
                'username' => ucfirst($tag[2]),
                'mobile'   => ucfirst($tag[3]),
                'address'  => ucfirst($tag[5]),
                'status'   => ucfirst($tag[6]),
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
