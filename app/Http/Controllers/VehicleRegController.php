<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleRegController extends Controller
{
    public function index()
    {
        return view('vehicle');
    }

    public function data()
    {
        $data = [["model"=>"ASPIRE","reg"=>"9520","vid"=>"698","km"=>5000,"driver"=>"698 ravi","status"=>"In-active"],["model"=>"ASPIRE","reg"=>"8872","vid"=>"667","km"=>4500,"driver"=>"667 Mukundan","status"=>"Active"],["model"=>"BEAT","reg"=>"3795","vid"=>"424","km"=>0,"driver"=>"424 Suresh","status"=>"In-active"],["model"=>"BEAT","reg"=>"8163","vid"=>"426","km"=>0,"driver"=>"426 Su","status"=>"Disabled"],["model"=>"DZIRE AC","reg"=>"4617","vid"=>"625","km"=>100,"driver"=>"625 Ramesh","status"=>"Active"],["model"=>"DZIRE AC","reg"=>"3384","vid"=>"678","km"=>100,"driver"=>"678 Owner Varshaprabhu","status"=>"Active"],["model"=>"DZIRE AC","reg"=>"2445","vid"=>"699","km"=>0,"driver"=>"699 Praveen","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"8944","vid"=>"608","km"=>0,"driver"=>"608 Rizwan Ahamed","status"=>"Active"],["model"=>"DZIRE AC","reg"=>"2929","vid"=>"663","km"=>0,"driver"=>"663 Saran","status"=>"Active"],["model"=>"DZIRE AC","reg"=>"3637","vid"=>"501","km"=>3265,"driver"=>"","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"5340","vid"=>"603","km"=>0,"driver"=>"603 Jai ganesh","status"=>"Active"],["model"=>"DZIRE AC","reg"=>"6844","vid"=>"671","km"=>14366,"driver"=>"671   Krishnan","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"3678","vid"=>"642","km"=>170000,"driver"=>"642 Senthil kumar","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"4993","vid"=>"679","km"=>100,"driver"=>"679 Rajesh","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"5265","vid"=>"632","km"=>0,"driver"=>"632 N Karthi","status"=>"In-active"],["model"=>"DZIRE AC","reg"=>"7139","vid"=>"633","km"=>0,"driver"=>"633 Muthu Ramu","status"=>"Active"]];
        print_r(json_encode($data));
        exit;
    }
}
