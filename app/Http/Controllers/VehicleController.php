<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VehicleController extends Controller
{
    public function index()
    {
        return view('add_vehicle_master');
    }

    public function list()
    {
        return view('vehicle_master');
    }
    public function getpage()
    {
        return view('vehicle_type_fare');
    }

    public function postadd_vehicle_type_fare(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'fare' => 'required',

        ]);

        DB::table('vehicle_type_fares')->insert([
            'name' => $request->name,

            'description' => $request->description,
            'fare_rate' => $request->fare,
            

        ]);

        return redirect()->back()->with('info', 'You have Added Data Successfully!');
    }

    public function data()
    {
        $array = [[155, "Indica AC", "8648500359*************9", "tn 99 j 3994", "437", 100, "", 'Yes', "Disabled"], [66, "Indica AC", "3571520846*************0", "TN11Y21", "40", 0, "", 'No', "Inactive"], [171, "Indica AC", "3581880770*************0", "tn37bp 2946", "417", 230000, "", null, "Inactive"], [69, "Maruti Ritz", "8691240264*************6", "TN66T0759", "408", 0, "408", null, "Active"], [67, "Maruti Ritz", "null", "TN99F7354", "404", 0, "", null, "Inactive"], [141, "Maruti Ritz", "3533220669*************7", "Tn 38 CD 1231", "420", 100177, "", null, "Inactive"], [70, "Maruti Ritz", "8697280207*************5", "TN66T3368", "409", 0, "", null, "Active"], [188, "Maruti Ritz", "3554060916*************9", "Tn37da 6169", "425", 25000, "425", null, "Inactive"], [75, "Beat", "null", "TN37CR3795", "424", 0, "", null, "Inactive"], [76, "Beat", "8629600339*************0", "TN37CQ8163", "426", 0, "426", null, "Disabled"], [170, "INDIGO NonAC", "3527450722*************1", "tn 38 bt 8107", "00635", 10000, "", null, "Inactive"], [97, "INDIGO NonAC", "9114307081*************6", "TN37CM6154", "601", 0, "", null, "Inactive"], [108, "Dzire AC", "8613270311*************6", "TN38CC7139", "633", 0, "", null, "Active"], [193, "Dzire AC", "3580010728*************3", "Tn 99 f 7954", "655", 54980, "655", null, "Active"], [185, "Dzire AC", "8681430293*************6", "tn38 cm 7018", "635", 100, "635", null, "Active"], [101, "Dzire AC", "3535730940*************5", "TN99E8944", "608", 0, "", null, "Active"], [123, "Dzire AC", "9115770501*************5", "TN37TT2445", "699", 0, "", null, "Inactive"], [106, "Dzire AC", "3527760707*************5", "TN38BT3766", "00631", 0, "", null, "Inactive"], [107, "Dzire AC", "8663440337*************6", "TN99C5265", "632", 0, "", null, "Inactive"], [159, "Dzire AC", "3552870819*************1", "Tn 37 da 4993", "679", 100, "", null, "Inactive"]];

        $tags = array_map(function ($tag) {
            return array(
                'sno'    => ucfirst($tag[0]),
                'model'  => ucfirst($tag[1]),
                'imei'   => ucfirst($tag[2]),
                'reg'    => ucfirst($tag[3]),
                'vech'   => ucfirst($tag[4]),
                'km'     => ucfirst($tag[5]),
                'driver' => ucfirst($tag[6]),
                'app'    => ucfirst($tag[7]),
                'status' => ucfirst($tag[8])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
