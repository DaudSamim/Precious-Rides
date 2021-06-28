<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentListController extends Controller
{
    public function index()
    {
        return view('payment_list');
    }

    public function data()
    {
        $array = [[3931, "SCC0003883", "412", "412 Sundar", "-94.65", "-30.21", "86", "-116.21", "08/2018", "20/09/2018", "Indica AC", null, "7868070703", "412 Sundar 7868070703", "credit", "Admin."], [3932, "SCC0003884", "447", "447 Kalimuthu", "159.6", "372.12", "50", "322.12", "08/2018", "20/09/2018", "Indica AC", null, "9940712957", "447 Kalimuthu 9940712957", "credit", "Admin."], [3933, "SCC0003885", "685", "685 Sivakumar", "-1091.11", "-565.84", "80", "-645.84", "08/2018", "20/09/2018", "Etios AC", null, "9786064991", "685 Sivakumar 9786064991", "credit", "Admin."], [3934, "SCC0003886", "653", "653 Muthu", "-133.13", "451.87", "185", "266.87", "08/2018", "20/09/2018", "Dzire AC", null, "9789293798", "653 Muthu Kumar 9789293798", "credit", "Admin."], [3935, "SCC0003887", "653", "653 Muthu", "266.87", "266.87", "190", "76.87", "08/2018", "20/09/2018", "Dzire AC", null, "9789293798", "653 Muthu Kumar 9789293798", "credit", "Admin."], [3936, "SCC0003888", "625", "625 Ramesh", "429.33", "495.81", "200", "295.81", "08/2018", "20/09/2018", "Dzire ac", null, "8056365129", "625 Ramesh 8056365129", "credit", "Admin."], [3937, "SCC0003889", "617", "617 Mani", "2766.45", "2766.45", "148", "2618.45", "08/2018", "20/09/2018", "INDIGO AC", null, "8220110069", "617 Mani 8220110069", "credit", "Admin."], [3938, "SCC0003890", "678", "678 Owner", "-162", "594.48", "148", "446.48", "08/2018", "20/09/2018", "Dzire ac", null, "9003889285", "678 Guna 7708777347", "credit", "Admin."], [3939, "SCC0003891", "442", "442 Vaigundaraj", "628.86", "761.46", "96", "665.46", "08/2018", "20/09/2018", "Indica AC", null, "9384157208", "442 Vaigundaraj 9384157208", "credit", "Admin."], [3940, "SCC0003892", "438", "438 Ravishankar", "176.44", "362.44", "210", "152.44", "08/2018", "20/09/2018", "Indica AC", null, "9894981811", "438 Ravishankar 9894981811", "credit", "Admin."], [3941, "SCC0003893", "603", "603 Jai", "194.56", "763.12", "500", "263.12", "08/2018", "20/09/2018", "Dzire AC", null, "9566441575", "603 Jai ganesh 9566441575", "cash", "Admin."], [3942, "SCC0003894", "442", "442 Vaigundaraj", "665.46", "747.06", "200", "547.06", "08/2018", "20/09/2018", "Indica AC", null, "9384157208", "442 Vaigundaraj 9384157208", "cash", "Admin."]];

        $tags = array_map(function ($tag) {
            return array(
                'uid'      => ucfirst($tag[1]),
                'vid'      => ucfirst($tag[2]),
                'owner'    => ucfirst($tag[3]),
                'prev'     => ucfirst($tag[4]),
                'tobepaid' => ucfirst($tag[5]),
                'received' => ucfirst($tag[6]),
                'bal'      => ucfirst($tag[7]),
                'recdate'  => ucfirst($tag[9]),
                'driver'   => ucfirst($tag[3]),
                'modal'    => ucfirst($tag[14]),
                'recby'    => ucfirst($tag[15])
            );
        }, $array);
        $data['data'] = $tags;
        print_r(json_encode($data));
        exit;
    }
}
