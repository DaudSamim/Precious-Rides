@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
    <link href="{{ asset('assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ asset('assets/js/bookingv1.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel-group accordion accordion_success" id="accordion1">
                <div class="panel overflow-hidden">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse"
                               data-parent="#accordion1" href="#collapseOne1">
                                <i class="fa fa-plus-circle pull-right"></i>
                                Custom Vehicle Search
                            </a>
                        </h3>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="">
                                <div class="form-group p-l-0 col-sm-4 m-r-0">
                                    <label class="control-label required">Vehicle No</label>
                                    <select class="form-control select_2">
                                        <option value="172">902</option>
                                        <option value="198">123</option>
                                        <option value="149" selected>817</option>
                                        <option value="165">637</option>
                                        <option value="98">602</option>
                                        <option value="153">811</option>
                                        <option value="176">447</option>
                                        <option value="87">459</option>
                                        <option value="186">815</option>
                                        <option value="143">645</option>
                                        <option value="174">403</option>
                                        <option value="72">414</option>
                                        <option value="90">471</option>
                                        <option value="91">487</option>
                                        <option value="193">655</option>
                                        <option value="86">456</option>
                                        <option value="110">639</option>
                                        <option value="197">802</option>
                                        <option value="108">633</option>
                                        <option value="82">442</option>
                                        <option value="81">438</option>
                                        <option value="136">835</option>
                                        <option value="189">678</option>
                                        <option value="103">617</option>
                                        <option value="68">407</option>
                                        <option value="199">667</option>
                                        <option value="194">499</option>
                                        <option value="114">646</option>
                                        <option value="195">607</option>
                                        <option value="191">636</option>
                                        <option value="120">663</option>
                                        <option value="164">685</option>
                                        <option value="185">635</option>
                                        <option value="178">810</option>
                                        <option value="119">662</option>
                                        <option value="150">621</option>
                                        <option value="101">608</option>
                                        <option value="116">653</option>
                                        <option value="99">603</option>
                                        <option value="148">625</option>
                                        <option value="70">409</option>
                                        <option value="69">408</option>
                                        <option value="71">412</option>
                                        <option value="111">640</option>
                                    </select>
                                </div>

                                <div class="form-group p-l-0 col-sm-4 m-r-0">
                                    <label class="control-label required">Registration No</label>
                                    <select class="form-control select_2">
                                        <option value="149">TN3XXXX273</option>
                                        <option value="165">TN3XXXX718</option>
                                        <option value="98">TN9XXXX56</option>
                                        <option value="153">TN4XXXX86</option>
                                    </select>
                                </div>

                                <div class="form-group p-l-0 col-sm-4 m-r-0">
                                    <label class="control-label required">Mobile No</label>
                                    <select class="form-control select_mobile">
                                    </select>
                                </div>

                                <div id="custom_srch_res" class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tbody>
                                        <tr>
                                            <td><b> Vehicle No:</b></td>
                                            <td class="ftext">817</td>
                                            <td><b> Vehicle Status:</b></td>
                                            <td class="ftext">leave</td>
                                        </tr>
                                        <tr>
                                            <td><b>Driver:</b></td>
                                            <td class="ftext">817 Bharath 81XXXXXX00</td>
                                            <td><b> Mobile:</b></td>
                                            <td>81XXXXXX00</td>
                                        </tr>
                                        <tr>
                                            <td><b> Model:</b></td>
                                            <td class="ftext">XYLO AC</td>
                                            <td><b> Seat Capacity:</b></td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td><b> Pending Target:</b></td>
                                            <td>---</td>
                                            <td><b> Assigned Trips:</b></td>
                                            <td>---</td>
                                        </tr>
                                        <tr>
                                            <td><b> From Location:</b></td>
                                            <td>---</td>
                                            <td><b> To Location:</b></td>
                                            <td>---</td>
                                        </tr>
                                        <tr>
                                            <td><b> Current Location:</b></td>
                                            <td>Saibaba Codata-lony, Coimbatore, TN</td>
                                            <td><b> Free time:</b></td>
                                            <td>0 Mns</td>
                                        </tr>
                                        <tr>
                                            <td><b> Today Collection:</b></td>
                                            <td><i class="fa fa-inr"></i>0</td>
                                            <td><b> Total Collection:</b></td>
                                            <td><i class="fa fa-inr"></i>0</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel overflow-hidden">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                               data-parent="#accordion1" href="#collapseTwo1">
                                <i class="fa fa-plus-circle pull-right"></i>
                                Consolidated Details
                            </a>
                        </h3>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong>FREE</strong></td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td><strong>RUNNING</strong></td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ALLOTTED</strong></td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td><strong>BREAK</strong></td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td><strong>BREAK</strong></td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <strong>
                                                <span class="w-200 display_inline">Total Vehicle : 43</span>
                                            </strong>
                                            <strong>
                                                <span class="pull-right display_inline">Assigned Vehicle : 4</span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel overflow-hidden">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                               data-parent="#accordion1" href="#collapseThree1">
                                <i class="fa fa-plus-circle pull-right"></i>
                                Free Vehicle
                            </a>
                        </h3>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTable">
                                    <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Location</th>
                                        <th>Distance (in Km)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd">
                                        <td>456 - Indica AC</td>
                                        <td>1st Cross Rd, Thangammal Nagar, Kalpana Layout, Ganapathypudur,
                                            Coimbatore, Tamil Nadu 641006, India
                                        </td>
                                        <td>7.49 km</td>
                                    </tr>
                                    <tr class="even">
                                        <td>608 - Dzire AC</td>
                                        <td>Sri Krishna layout, Anandha Nagar, New Thillai Nagar, PN Pudur,
                                            Coimbatore, Tamil Nadu 641041, India
                                        </td>
                                        <td>2.10 km</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>639 - Etios AC</td>
                                        <td>26, Vadavalli, Coimbatore, Tamil Nadu 641041, India</td>
                                        <td>4.40 km</td>
                                    </tr>
                                    <tr class="even">
                                        <td>653 - Dzire AC</td>
                                        <td>67/1, Near Vadavalli Bus Stop, Road,, V.N.R.Nagar, Vadavalli,
                                            Coimbatore, Tamil Nadu 641041, India
                                        </td>
                                        <td>0.90 km</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>625 - Dzire ac</td>
                                        <td>Vadavalli-Thondamuthur Rd, Gurusamy Nagar, Chinmaya Nagar, Coimbatore,
                                            Tamil Nadu 641041, India
                                        </td>
                                        <td>3.05 km</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel overflow-hidden">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                               data-parent="#accordion1" href="#collapseFour1">
                                <i class="fa fa-plus-circle pull-right"></i>
                                Assigned Vehicle
                            </a>
                        </h3>
                    </div>
                    <div id="collapseFour1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTable">
                                    <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Location</th>
                                        <th>Distance (in Km)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd">
                                        <td>603 - Dzire AC [1]</td>
                                        <td>AIRPORT</td>
                                        <td>0.05 km</td>
                                    </tr>
                                    <tr class="even">
                                        <td>617 - INDIGO AC [1]</td>
                                        <td>1328, Avinashi Rd, Peelamedu, Coimbatore, Tamil Nadu 641004, India</td>
                                        <td>1.09 km</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>621 - INDIGO AC [1]</td>
                                        <td>PONNIARAJA PURAM</td>
                                        <td>8.50 km</td>
                                    </tr>
                                    <tr class="even">
                                        <td>811 - XYLO AC [2]</td>
                                        <td>Sri Ramakrishna Dental College and Hospital, Peelamedu, Coimbatore,
                                            Tamil
                                            Nadu, India
                                        </td>
                                        <td>30.05 km</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>635 - Dzire AC [1]</td>
                                        <td>AIRPORT</td>
                                        <td>4.03 km</td>
                                    </tr>
                                    <tr class="even">
                                        <td>607 - INDIGO AC [2]</td>
                                        <td>Railway Station</td>
                                        <td>7.49 km</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- begin panel -->
            <form id="validate" data-parsley-validate="true">
                <div class="panel">
                    <div class="panel-heading">
                        <h6 class="panel-title">Booking Panel</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                                <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                                <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                                <li class="close_element"><a href="javascript:void(0)"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-5 p-l-0">
                                <div class="form-group">
                                    <label class="control-label text-warning required">Mobile Number </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 p-l-0">
                                <div class="form-group">
                                    <label class="control-label text-warning required">Unique ID </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 p-l-0">
                                <div class="form-group">
                                    <label class="control-label text-warning required">Call Type </label>
                                    <select class="form-control select_2 w-in-100">
                                        <option value="booking">Booking</option>
                                        <option value="enquiry">Enquiry</option>
                                        <option value="canceldata-lation" disabled="">Canceldata-lation</option>
                                        <option value="follow_up">Follow-up</option>
                                        <option value="feedbacks">Feedback / Complaint</option>
                                        <option value="vna">VNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-5 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Mobile</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Zone </label>
                                    <select class="form-control _validate required select_2">
                                        <option value="10">SAIBABA COdata-lonY, KK Pudur, Velandipalayam,
                                            Venkatapuram
                                        </option>
                                        <option value="11">RS PURAM, Vadakovai, Poo Market, Ghandhipark</option>
                                        <option value="12">VADAVALLI, PN Pudur, Marudhamalai</option>
                                        <option value="13">EDAYARPALAYAM, TVS Nagar, Kanuvai</option>
                                        <option value="14">THUDIYALUR, GN Mills, NGGO Codata-lony, Goundampalayam
                                        </option>
                                        <option value="16">GANAPATHY, Sanganoor, Textool</option>
                                        <option value="18">GANDHIPURAM, Sidhapudur, Omni Bus Stand, Ram Nagar
                                        </option>
                                        <option value="19">SARAVANAMPATTI, Ramakrishnapuram, KGISL, Keeranatham
                                        </option>
                                        <option value="20">THONDAMUTHUR, Siruvani, Vellingiri</option>
                                        <option value="21">VEDAPATTI, Veerakeralam, Sundapalayam</option>
                                        <option value="24">SITRA, Airport, Hopes, Kalapptti, CODISSIA</option>
                                        <option value="25">KOVAIPUDUR, Sundakkamuthur, Perur, Telungulapalayam
                                        </option>
                                        <option value="27">UKKADAM, Oppanakkara St, Vysyal St, Townhall, Selvapuram
                                        </option>
                                        <option value="30">POTHANUR, Sundarapuram, Kuniamuthur, Ichanari</option>
                                        <option value="32"> RAILWAY STATION, Collector Office,Race Course, Anna
                                            Silai
                                        </option>
                                        <option value="33">PEELAMEDU, Laxmi Mills, Nava India, Avarampalayam
                                        </option>
                                        <option value="34">SINGANALLUR, GV Residency, Sowripalayam, Udayampalayam
                                        </option>
                                        <option value="35">RAMANATHAPURAM, Nanjundapuram, Sungam, Puliakulam
                                        </option>
                                        <option value="36">data-long Distance &lt; 100 Kms</option>
                                        <option value="37">data-long Distance &gt; 100 Kms but &lt; 200 kms</option>
                                        <option value="38">data-long Distance &gt;200 Kms But &lt; 300 Kms</option>
                                        <option value="39">data-long Distance &gt; 300 kms</option>
                                        <option value="40">CHERAN MAA NAGAR, Gandhi Maa Nagar, Thannerrpandal
                                        </option>
                                        <option value="41">ONDIPUDUR, Chinthamani Pudur, Pappampatti, Sulur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end panel -->

                <!-- begin panel -->
                <div class="panel">
                    <div class="panel-body">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Pickup Location </label>
                                    <select class="form-control select_2">
                                        <option value="1003" data-lat="11.021125" data-lon="76.976163">100 FEET Road
                                        </option>
                                        <option value="3080" data-lat="11.020374" data-lon="76.992865">110, Avinashi
                                            Rd,
                                            KR Puram,
                                            Udayampalayam, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="1653" data-lat="11.0611107" data-lon="76.9887207">11/4,
                                            Chinnavedampatti
                                            Rd, Murugan Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641049, India
                                        </option>
                                        <option value="1467" data-lat="11.0776826" data-lon="76.9973725">11-A, Sathy
                                            Rd,
                                            EB
                                            Codata-lony, Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1707" data-lat="11.0611239" data-lon="76.9887234">11,
                                            Chinnavedampatti Rd,
                                            Murugan Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641049, India
                                        </option>
                                        <option value="1678" data-lat="11.030443" data-lon="76.976051">11, NH948,
                                            Sivasakthi
                                            Codata-lony, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="10018" data-lat="10.9970625" data-lon="76.9822627">1212,
                                            Trichy
                                            Road,
                                            Bannari Amman Sugars Limited, Trichy Road, Nadar Codata-lony,
                                            Ramanathapuram,
                                            Coimbatore, Tamil Nadu 641018, India
                                        </option>
                                        <option value="1627" data-lat="11.0158792" data-lon="76.9632253">121, Rajaji
                                            Rd,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1464" data-lat="11.034672" data-lon="76.968389">12 Sanganoor
                                            Main
                                            Road
                                            Ganapathypudur Coimbatore Tamil Nadu India
                                        </option>
                                        <option value="1411" data-lat="11.030518" data-lon="76.966423">12, Sanganoor
                                            Main Road,
                                            Tatabad
                                        </option>
                                        <option value="1410" data-lat="11.0231978" data-lon="77.0020938">1326,
                                            Avinashi
                                            Rd,
                                            Peelamedu
                                        </option>
                                        <option value="1671" data-lat="11.0232674" data-lon="77.0013445">1328,
                                            Avinashi
                                            Rd,
                                            Peelamedu, Coimbatore, Tamil Nadu 641004, India
                                        </option>
                                        <option value="1631" data-lat="11.0164984" data-lon="76.9624531">13, Nehru
                                            St,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="7651" data-lat="11.03309" data-lon="76.9781">140, Vysiyal
                                            Street,
                                            Vysiyal
                                            Street, Near Om Sakthi Temple, Perur Road, Sivasakthi Codata-lony,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641026, India
                                        </option>
                                        <option value="3115" data-lat="11.0611199" data-lon="76.9908502">142, Mani
                                            Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1700" data-lat="11.0877478" data-lon="77.0092463">14 I,
                                            NH948,
                                            Amman Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1677" data-lat="10.9705408" data-lon="76.9691396"> 152E,
                                            Podanur
                                            Rd,
                                            Kurichi Pirivu, K.R. Koil Bus Stop, Thirumarai Nagar, Kurichi,
                                            Coimbatore,
                                            Tamil Nadu 641023, India
                                        </option>
                                        <option value="3077" data-lat="11.0767343" data-lon="77.0022736">160, Sathy
                                            Rd,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="7658" data-lat="11.03929" data-lon="76.98036">189,
                                            Thondamuthur
                                            Road,
                                            Thondamuthur Road, Near Police Station, Perur, Sri Lakshmi Nagar,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641010, India
                                        </option>
                                        <option value="1689" data-lat="11.0013698" data-lon="77.0291534">18,
                                            Kamarajar
                                            Rd,
                                            Singanallur, Coimbatore, Tamil Nadu 641005, India
                                        </option>
                                        <option value="1696" data-lat="11.034532" data-lon="76.981335">1B, Gandhi
                                            Nagar
                                            Main Road,
                                            Gandhi Nagar, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="1650" data-lat="11.1006189" data-lon="77.0199">1, NH948, VGP
                                            Prem
                                            Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="3092" data-lat="11.031021" data-lon="76.977936">212,
                                            Sivasakthi
                                            Codata-lony,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="3105" data-lat="11.019211" data-lon="76.965934">220, 7th St,
                                            Gandipuram,
                                            Coimbatore, Tamil Nadu 641012, India
                                        </option>
                                        <option value="7624" data-lat="11.0168685" data-lon="76.9234717">247-1,
                                            SH167,
                                            Aishwarya
                                            Nagar, PN Pudur, Coimbatore, Tamil Nadu 641007, India
                                        </option>
                                        <option value="3073" data-lat="12.9588129" data-lon="77.605965">26, Hosur
                                            Rd,
                                            Richmond
                                            Town, Bengaluru, Karnataka 560025, India
                                        </option>
                                        <option value="3128" data-lat="11.0076385" data-lon="76.9911236">27 A,
                                            Puliakulam Rd,
                                            Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="3085" data-lat="11.0233707" data-lon="76.9096076">29/1B,
                                            Marudhamalai Rd,
                                            Thirumurugan Nagar, Vadavalli, Coimbatore, Tamil Nadu 641041, India
                                        </option>
                                        <option value="3114" data-lat="11.016909" data-lon="76.999219">29,
                                            Damodarswamy
                                            Nagar,
                                            Thirumagal Nagar, Masakalipalayam, Coimbatore, Tamil Nadu 641028, India
                                        </option>
                                        <option value="3122" data-lat="11.0027985" data-lon="77.0282839">2,
                                            Kamarajar
                                            Rd, TNHB
                                            Housing Unit
                                        </option>
                                        <option value="1610" data-lat="11.0789611" data-lon="76.9998954">2nd Cross
                                            St,
                                            Raja
                                            Rajeshwari Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1706" data-lat="11.0641825" data-lon="77.0079297">2,
                                            Vilankuruchi
                                            Rd,
                                            Poompugar Nagar, Murugan Nagar, Vinayagapuram, Coimbatore, Tamil Nadu
                                            641035, India
                                        </option>
                                        <option value="3087" data-lat="11.0799949" data-lon="76.9314334">3/10B,
                                            Mullai
                                            Nagar,
                                            Thudiyalur, Coimbatore, Tamil Nadu 641034, India
                                        </option>
                                        <option value="1637" data-lat="11.0107288" data-lon="76.9601196">355B, Patel
                                            Rd,
                                            Ram
                                            Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="3089" data-lat="11.0266274" data-lon="76.9038067">35,
                                            Koothandai
                                            Kovil St,
                                            IOB Codata-lony, Vadavalli, Coimbatore, Tamil Nadu 641041, India
                                        </option>
                                        <option value="1629" data-lat="11.0165005" data-lon="76.9624154">363-372,
                                            Nehru
                                            St,
                                            Peranaidu Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1628" data-lat="11.0166004" data-lon="76.9624119">372, Nehru
                                            St,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="3086" data-lat="11.0937905" data-lon="76.9432598">3/78, VKV
                                            Nagar, NGGO
                                            Codata-lony, Thudiyalur, Coimbatore, Tamil Nadu 641022, India
                                        </option>
                                        <option value="3127" data-lat="11.0055982" data-lon="76.9904102">38, Old
                                            Damu
                                            Nagar,
                                            Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="1473" data-lat="11.0717696" data-lon="76.9993955">3rd Cross
                                            St, G
                                            K S
                                            Nagar, Ramanandha Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035,
                                            India
                                        </option>
                                        <option value="1691" data-lat="11.0232114" data-lon="77.0021598">410,
                                            Avinashi
                                            Rd,
                                            Masakalipalayam, Peelamedu, Coimbatore, Tamil Nadu 641004, India
                                        </option>
                                        <option value="3094" data-lat="11.015142" data-lon="76.994224">421,
                                            Udayampalayam,
                                            Coimbatore, Tamil Nadu 641028, India
                                        </option>
                                        <option value="1670" data-lat="11.032166" data-lon="76.995232">440,
                                            Peelamedu,
                                            Coimbatore,
                                            Tamil Nadu 641004, India
                                        </option>
                                        <option value="3088" data-lat="11.0245237" data-lon="76.8984557">49,
                                            Vadavalli-Thondamuthur Rd, Maharani Avenue, Vadavalli, Coimbatore, Tamil
                                            Nadu 641041, India
                                        </option>
                                        <option value="1672" data-lat="10.991601" data-lon="77.016807">4,
                                            Kallimadai,
                                            Coimbatore,
                                            Tamil Nadu 641005, India
                                        </option>
                                        <option value="1669" data-lat="11.008013" data-lon="76.950609">520, R.S.
                                            Puram,
                                            Coimbatore, Tamil Nadu 641002, India
                                        </option>
                                        <option value="1667" data-lat="11.0151062" data-lon="76.9578716">56, Patel
                                            Rd,
                                            Opposite
                                            Lakshmi Gas, Kattoor, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1673" data-lat="11.0025067" data-lon="77.0284134">58,
                                            Kamarajar
                                            Rd, TNHB
                                            Housing Unit, Singanallur, Coimbatore, Tamil Nadu 641005, India
                                        </option>
                                        <option value="7669" data-lat="11.0227045" data-lon="76.9060559">60603030
                                            Office
                                        </option>
                                        <option value="3124" data-lat="11.0069516" data-lon="76.9915615">63/54-55,
                                            Puliakulam Rd,
                                            Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="9992" data-lat="12.9286135" data-lon="80.1623916">6th Cross
                                            St,
                                            Tharakeswari Nagar, Gowrivakkam, Sembakkam, Chennai, Tamil Nadu 600064,
                                            India
                                        </option>
                                        <option value="3126" data-lat="11.0066331" data-lon="76.9917613">74/75,
                                            Street
                                            Number 33,
                                            Opp. Sri Hospital, Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu
                                            641045,
                                            India
                                        </option>
                                        <option value="3129" data-lat="11.0065229" data-lon="76.991613">79,
                                            Puliakulam
                                            Rd, Pudur,
                                            Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="3054" data-lat="11.0206995" data-lon="76.9967382">7, Avinashi
                                            Rd,
                                            Near
                                            Anjaneyar Kovil, Esso Bunk, Navaindia, Kalki Nagar, Peelamedu,
                                            Coimbatore,
                                            Tamil Nadu 641004, India
                                        </option>
                                        <option value="1635" data-lat="10.9420836" data-lon="76.9464481">7, Pleasant
                                            Nagar,
                                            Sreevatsa Hill View, BK Pudur, Kuniamuthur, Coimbatore, Tamil Nadu
                                            641042,
                                            India
                                        </option>
                                        <option value="1686" data-lat="11.0448999" data-lon="76.9877641">89,
                                            Prashakthi
                                            Nagar,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="9991" data-lat="12.9297688" data-lon="80.160678">8th Cross
                                            St, MF
                                            Nagar,
                                            Thirumalai Nagar, Sembakkam, Chennai, Tamil Nadu 600064, India
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Drop Location </label>
                                    <select class="form-control select_2">
                                        <option value="1003" data-lat="11.021125" data-lon="76.976163">100 FEET Road
                                        </option>
                                        <option value="3080" data-lat="11.020374" data-lon="76.992865">110, Avinashi
                                            Rd,
                                            KR Puram,
                                            Udayampalayam, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="1653" data-lat="11.0611107" data-lon="76.9887207">11/4,
                                            Chinnavedampatti
                                            Rd, Murugan Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641049, India
                                        </option>
                                        <option value="1467" data-lat="11.0776826" data-lon="76.9973725">11-A, Sathy
                                            Rd,
                                            EB
                                            Codata-lony, Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1707" data-lat="11.0611239" data-lon="76.9887234">11,
                                            Chinnavedampatti Rd,
                                            Murugan Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641049, India
                                        </option>
                                        <option value="1678" data-lat="11.030443" data-lon="76.976051">11, NH948,
                                            Sivasakthi
                                            Codata-lony, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="10018" data-lat="10.9970625" data-lon="76.9822627">1212,
                                            Trichy
                                            Road,
                                            Bannari Amman Sugars Limited, Trichy Road, Nadar Codata-lony,
                                            Ramanathapuram,
                                            Coimbatore, Tamil Nadu 641018, India
                                        </option>
                                        <option value="1627" data-lat="11.0158792" data-lon="76.9632253">121, Rajaji
                                            Rd,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1464" data-lat="11.034672" data-lon="76.968389">12 Sanganoor
                                            Main
                                            Road
                                            Ganapathypudur Coimbatore Tamil Nadu India
                                        </option>
                                        <option value="1411" data-lat="11.030518" data-lon="76.966423">12, Sanganoor
                                            Main Road,
                                            Tatabad
                                        </option>
                                        <option value="1410" data-lat="11.0231978" data-lon="77.0020938">1326,
                                            Avinashi
                                            Rd,
                                            Peelamedu
                                        </option>
                                        <option value="1671" data-lat="11.0232674" data-lon="77.0013445">1328,
                                            Avinashi
                                            Rd,
                                            Peelamedu, Coimbatore, Tamil Nadu 641004, India
                                        </option>
                                        <option value="1631" data-lat="11.0164984" data-lon="76.9624531">13, Nehru
                                            St,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="7651" data-lat="11.03309" data-lon="76.9781">140, Vysiyal
                                            Street,
                                            Vysiyal
                                            Street, Near Om Sakthi Temple, Perur Road, Sivasakthi Codata-lony,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641026, India
                                        </option>
                                        <option value="3115" data-lat="11.0611199" data-lon="76.9908502">142, Mani
                                            Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1700" data-lat="11.0877478" data-lon="77.0092463">14 I,
                                            NH948,
                                            Amman Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1677" data-lat="10.9705408" data-lon="76.9691396"> 152E,
                                            Podanur
                                            Rd,
                                            Kurichi Pirivu, K.R. Koil Bus Stop, Thirumarai Nagar, Kurichi,
                                            Coimbatore,
                                            Tamil Nadu 641023, India
                                        </option>
                                        <option value="3077" data-lat="11.0767343" data-lon="77.0022736">160, Sathy
                                            Rd,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="7658" data-lat="11.03929" data-lon="76.98036">189,
                                            Thondamuthur
                                            Road,
                                            Thondamuthur Road, Near Police Station, Perur, Sri Lakshmi Nagar,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641010, India
                                        </option>
                                        <option value="1689" data-lat="11.0013698" data-lon="77.0291534">18,
                                            Kamarajar
                                            Rd,
                                            Singanallur, Coimbatore, Tamil Nadu 641005, India
                                        </option>
                                        <option value="1696" data-lat="11.034532" data-lon="76.981335">1B, Gandhi
                                            Nagar
                                            Main Road,
                                            Gandhi Nagar, Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="1650" data-lat="11.1006189" data-lon="77.0199">1, NH948, VGP
                                            Prem
                                            Nagar,
                                            Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="3092" data-lat="11.031021" data-lon="76.977936">212,
                                            Sivasakthi
                                            Codata-lony,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="3105" data-lat="11.019211" data-lon="76.965934">220, 7th St,
                                            Gandipuram,
                                            Coimbatore, Tamil Nadu 641012, India
                                        </option>
                                        <option value="7624" data-lat="11.0168685" data-lon="76.9234717">247-1,
                                            SH167,
                                            Aishwarya
                                            Nagar, PN Pudur, Coimbatore, Tamil Nadu 641007, India
                                        </option>
                                        <option value="3073" data-lat="12.9588129" data-lon="77.605965">26, Hosur
                                            Rd,
                                            Richmond
                                            Town, Bengaluru, Karnataka 560025, India
                                        </option>
                                        <option value="3128" data-lat="11.0076385" data-lon="76.9911236">27 A,
                                            Puliakulam Rd,
                                            Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="3085" data-lat="11.0233707" data-lon="76.9096076">29/1B,
                                            Marudhamalai Rd,
                                            Thirumurugan Nagar, Vadavalli, Coimbatore, Tamil Nadu 641041, India
                                        </option>
                                        <option value="3114" data-lat="11.016909" data-lon="76.999219">29,
                                            Damodarswamy
                                            Nagar,
                                            Thirumagal Nagar, Masakalipalayam, Coimbatore, Tamil Nadu 641028, India
                                        </option>
                                        <option value="3122" data-lat="11.0027985" data-lon="77.0282839">2,
                                            Kamarajar
                                            Rd, TNHB
                                            Housing Unit
                                        </option>
                                        <option value="1610" data-lat="11.0789611" data-lon="76.9998954">2nd Cross
                                            St,
                                            Raja
                                            Rajeshwari Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035, India
                                        </option>
                                        <option value="1706" data-lat="11.0641825" data-lon="77.0079297">2,
                                            Vilankuruchi
                                            Rd,
                                            Poompugar Nagar, Murugan Nagar, Vinayagapuram, Coimbatore, Tamil Nadu
                                            641035, India
                                        </option>
                                        <option value="3087" data-lat="11.0799949" data-lon="76.9314334">3/10B,
                                            Mullai
                                            Nagar,
                                            Thudiyalur, Coimbatore, Tamil Nadu 641034, India
                                        </option>
                                        <option value="1637" data-lat="11.0107288" data-lon="76.9601196">355B, Patel
                                            Rd,
                                            Ram
                                            Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="3089" data-lat="11.0266274" data-lon="76.9038067">35,
                                            Koothandai
                                            Kovil St,
                                            IOB Codata-lony, Vadavalli, Coimbatore, Tamil Nadu 641041, India
                                        </option>
                                        <option value="1629" data-lat="11.0165005" data-lon="76.9624154">363-372,
                                            Nehru
                                            St,
                                            Peranaidu Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1628" data-lat="11.0166004" data-lon="76.9624119">372, Nehru
                                            St,
                                            Peranaidu
                                            Layout, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="3086" data-lat="11.0937905" data-lon="76.9432598">3/78, VKV
                                            Nagar, NGGO
                                            Codata-lony, Thudiyalur, Coimbatore, Tamil Nadu 641022, India
                                        </option>
                                        <option value="3127" data-lat="11.0055982" data-lon="76.9904102">38, Old
                                            Damu
                                            Nagar,
                                            Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="1473" data-lat="11.0717696" data-lon="76.9993955">3rd Cross
                                            St, G
                                            K S
                                            Nagar, Ramanandha Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035,
                                            India
                                        </option>
                                        <option value="1691" data-lat="11.0232114" data-lon="77.0021598">410,
                                            Avinashi
                                            Rd,
                                            Masakalipalayam, Peelamedu, Coimbatore, Tamil Nadu 641004, India
                                        </option>
                                        <option value="3094" data-lat="11.015142" data-lon="76.994224">421,
                                            Udayampalayam,
                                            Coimbatore, Tamil Nadu 641028, India
                                        </option>
                                        <option value="1670" data-lat="11.032166" data-lon="76.995232">440,
                                            Peelamedu,
                                            Coimbatore,
                                            Tamil Nadu 641004, India
                                        </option>
                                        <option value="3088" data-lat="11.0245237" data-lon="76.8984557">49,
                                            Vadavalli-Thondamuthur Rd, Maharani Avenue, Vadavalli, Coimbatore, Tamil
                                            Nadu 641041, India
                                        </option>
                                        <option value="1672" data-lat="10.991601" data-lon="77.016807">4,
                                            Kallimadai,
                                            Coimbatore,
                                            Tamil Nadu 641005, India
                                        </option>
                                        <option value="1669" data-lat="11.008013" data-lon="76.950609">520, R.S.
                                            Puram,
                                            Coimbatore, Tamil Nadu 641002, India
                                        </option>
                                        <option value="1667" data-lat="11.0151062" data-lon="76.9578716">56, Patel
                                            Rd,
                                            Opposite
                                            Lakshmi Gas, Kattoor, Ram Nagar, Coimbatore, Tamil Nadu 641009, India
                                        </option>
                                        <option value="1673" data-lat="11.0025067" data-lon="77.0284134">58,
                                            Kamarajar
                                            Rd, TNHB
                                            Housing Unit, Singanallur, Coimbatore, Tamil Nadu 641005, India
                                        </option>
                                        <option value="7669" data-lat="11.0227045" data-lon="76.9060559">60603030
                                            Office
                                        </option>
                                        <option value="3124" data-lat="11.0069516" data-lon="76.9915615">63/54-55,
                                            Puliakulam Rd,
                                            Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="9992" data-lat="12.9286135" data-lon="80.1623916">6th Cross
                                            St,
                                            Tharakeswari Nagar, Gowrivakkam, Sembakkam, Chennai, Tamil Nadu 600064,
                                            India
                                        </option>
                                        <option value="3126" data-lat="11.0066331" data-lon="76.9917613">74/75,
                                            Street
                                            Number 33,
                                            Opp. Sri Hospital, Dhamu Nagar, Puliakulam, Coimbatore, Tamil Nadu
                                            641045,
                                            India
                                        </option>
                                        <option value="3129" data-lat="11.0065229" data-lon="76.991613">79,
                                            Puliakulam
                                            Rd, Pudur,
                                            Coimbatore, Tamil Nadu 641045, India
                                        </option>
                                        <option value="3054" data-lat="11.0206995" data-lon="76.9967382">7, Avinashi
                                            Rd,
                                            Near
                                            Anjaneyar Kovil, Esso Bunk, Navaindia, Kalki Nagar, Peelamedu,
                                            Coimbatore,
                                            Tamil Nadu 641004, India
                                        </option>
                                        <option value="1635" data-lat="10.9420836" data-lon="76.9464481">7, Pleasant
                                            Nagar,
                                            Sreevatsa Hill View, BK Pudur, Kuniamuthur, Coimbatore, Tamil Nadu
                                            641042,
                                            India
                                        </option>
                                        <option value="1686" data-lat="11.0448999" data-lon="76.9877641">89,
                                            Prashakthi
                                            Nagar,
                                            Ganapathypudur, Coimbatore, Tamil Nadu 641006, India
                                        </option>
                                        <option value="9991" data-lat="12.9297688" data-lon="80.160678">8th Cross
                                            St, MF
                                            Nagar,
                                            Thirumalai Nagar, Sembakkam, Chennai, Tamil Nadu 600064, India
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Number of Passenger </label>
                                    <select class="form-control select_2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Round?</label>
                                    <div class="h-34">
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input type="hidden" value="No">
                                                <input type="checkbox" value='Yes' class="onoffswitch-checkbox"
                                                       id="is_round_id">
                                                <label class="onoffswitch-label" for="is_round_id">
                                                    <span class="onoffswitch-inner" data-label_1='Yes'
                                                          data-label_2='No'></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Emergency?</label>
                                    <div class="h-34">
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input type="hidden" value="No">
                                                <input type="checkbox" value='Yes' class="onoffswitch-checkbox"
                                                       id="is_Emergency">
                                                <label class="onoffswitch-label" for="is_Emergency">
                                                    <span class="onoffswitch-inner" data-label_1='Yes'
                                                          data-label_2='No'></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Own Trip?</label>
                                    <div class="h-34">
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input type="hidden" value="No">
                                                <input type="checkbox" value='Yes' class="onoffswitch-checkbox"
                                                       id="is_own">
                                                <label class="onoffswitch-label" for="is_own">
                                                    <span class="onoffswitch-inner" data-label_1='Yes'
                                                          data-label_2='No'></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Preferred Model</label>
                                    <select class="form-control select_2">
                                        <option value="0">Any Vehicle</option>
                                        <option value="65">Aspire</option>
                                        <option value="75">Beat</option>
                                        <option value="88">Beat NonAC</option>
                                        <option value="91">Dzire ac</option>
                                        <option value="77">Dzire AC</option>
                                        <option value="90">Dzire non ac</option>
                                        <option value="83">Enjoy AC</option>
                                        <option value="78">Etios AC</option>
                                        <option value="79">Hyundai Xcent</option>
                                        <option value="73">Indica AC</option>
                                        <option value="89">Indica non ac</option>
                                        <option value="87">Indica NonAC</option>
                                        <option value="85">INDIGO AC</option>
                                        <option value="76">INDIGO NonAC</option>
                                        <option value="86">Indigo Xest</option>
                                        <option value="84">Innova AC</option>
                                        <option value="74">Maruti Ritz</option>
                                        <option value="82">Renault Lodgy</option>
                                        <option value="81">Tavera AC</option>
                                        <option value="93">Tempo traveller</option>
                                        <option value="80">XYLO AC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Tariff Type</label>
                                    <select class="form-control select_2">
                                        <option value="1">One - One</option>
                                        <option value="2">Hourly Package</option>
                                        <option value="3">One-Day Package</option>
                                        <option value="4">Multi-Day Package</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Schedule Booking</label>
                                    <div class="h-34">
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input type="hidden" value="No">
                                                <input type="checkbox" value='Yes' class="onoffswitch-checkbox"
                                                       id="scheduild">
                                                <label class="onoffswitch-label" for="scheduild">
                                                    <span class="onoffswitch-inner make_smaller" data-label_1='Later'
                                                          data-label_2='Now'></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Pickup Date/Time</label>
                                    <input type="text" class="form-control time_picker">
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label required">Landmark</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Follow-up Mobile No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Landline No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row m-l-0 m-r-0">
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Number of Vehicles</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 p-l-0">
                                <div class="form-group">
                                    <label class="control-label">Accessories</label>
                                    <input type="text" class="form-control" value="wheelchair, bags"
                                           data-role="tagsinput">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-sm btn-block ladda-button pull-right m-b-40 ttu"
                        data-color="mint" data-style="expand-right" data-size="l"><span
                            class="ladda-label">Book now</span><span class="ladda-spinner"></span></button>
                <!-- end panel -->

            </form>
        </div>
    </div>
@endsection