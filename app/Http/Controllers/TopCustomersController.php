<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopCustomersController extends Controller
{
    public function index()
    {
        return view('top_customers');
    }

    public function data()
    {
        $data = [["uniqueid"=>6489,"name"=>"Lalitha","primary_mobile"=>"95XXXXXX34","secondary_mobile"=>"-","last_week_usage"=>4003,"last_month_usage"=>16207,"total_usage"=>1144404],["uniqueid"=>7367,"name"=>"Manonmani Appu","primary_mobile"=>"98XXXXXX50","secondary_mobile"=>"9244440423","last_week_usage"=>502,"last_month_usage"=>11113,"total_usage"=>492895],["uniqueid"=>9459,"name"=>"Pradeep","primary_mobile"=>"91XXXXXX11","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>444996],["uniqueid"=>1694,"name"=>"Banumathi","primary_mobile"=>"99XXXXXX06","secondary_mobile"=>"","last_week_usage"=>850,"last_month_usage"=>8164,"total_usage"=>412042],["uniqueid"=>18852,"name"=>"Usha","primary_mobile"=>"98XXXXXX78","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>347522],["uniqueid"=>1772,"name"=>"K.L Bhaskaran  ","primary_mobile"=>"94XXXXXX73","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>335559],["uniqueid"=>1754,"name"=>"Vaasu Devan","primary_mobile"=>"99XXXXXX10","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>1500,"total_usage"=>329098],["uniqueid"=>16680,"name"=>"Master Ji","primary_mobile"=>"90XXXXXX53","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>323344],["uniqueid"=>14972,"name"=>"Sudha","primary_mobile"=>"95XXXXXX90","secondary_mobile"=>"","last_week_usage"=>1223,"last_month_usage"=>2698,"total_usage"=>319374],["uniqueid"=>1625,"name"=>"Subramaniyam","primary_mobile"=>"94XXXXXX83","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>10810,"total_usage"=>302904],["uniqueid"=>6347,"name"=>"Kumudha","primary_mobile"=>"94XXXXXX83","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>1545,"total_usage"=>283438],["uniqueid"=>30197,"name"=>"Citra Kala","primary_mobile"=>"98XXXXXX65","secondary_mobile"=>"4222563476","last_week_usage"=>965,"last_month_usage"=>6712,"total_usage"=>261321],["uniqueid"=>35580,"name"=>"RB Chitra","primary_mobile"=>"98XXXXXX80","secondary_mobile"=>"","last_week_usage"=>952,"last_month_usage"=>4463,"total_usage"=>251097],["uniqueid"=>22846,"name"=>"Sivasubramaniam","primary_mobile"=>"99XXXXXX22","secondary_mobile"=>"","last_week_usage"=>350,"last_month_usage"=>7170,"total_usage"=>250626],["uniqueid"=>11023,"name"=>"Ramakrishnan","primary_mobile"=>"98XXXXXX24","secondary_mobile"=>"","last_week_usage"=>4689,"last_month_usage"=>7514,"total_usage"=>248597],["uniqueid"=>5,"name"=>"RB Ishabella","primary_mobile"=>"93XXXXXX76","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>246428],["uniqueid"=>4391,"name"=>"Irene","primary_mobile"=>"98XXXXXX96","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>850,"total_usage"=>240630],["uniqueid"=>16658,"name"=>"RB Chinna Durai","primary_mobile"=>"98XXXXXX91","secondary_mobile"=>"","last_week_usage"=>951,"last_month_usage"=>9054,"total_usage"=>238435],["uniqueid"=>7511,"name"=>"Meenakshi","primary_mobile"=>"96XXXXXX79","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>3384,"total_usage"=>232045],["uniqueid"=>16946,"name"=>"Venkat Raman","primary_mobile"=>"97XXXXXX15","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>1767,"total_usage"=>214262],["uniqueid"=>6174,"name"=>"Kumar","primary_mobile"=>"94XXXXXX90","secondary_mobile"=>"","last_week_usage"=>0,"last_month_usage"=>0,"total_usage"=>213632]];
        print_r(json_encode($data));
        exit;
    }
}
