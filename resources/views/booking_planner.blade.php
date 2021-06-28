@extends('layout.default')

@section('pageStyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/booking_planner.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Allot - Next 20 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Vehicle</th>
                                        <th>Pickup</th>
                                        <th>From</th>
                                        <th>To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aanandhi</td>
                                        <td>Indica</td>
                                        <td>08:30 PM</td>
                                        <td>Venkittapuram</td>
                                        <td>KOVAI PUDUR</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NARASIMAN</td>
                                        <td>Indica</td>
                                        <td>08:30 PM</td>
                                        <td>Ram Nagar, Coimbator</td>
                                        <td>Venkittapuram</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Allot - Next 60 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>VID</th>
                                        <th>Pickup Time</th>
                                        <th>ETD</th>
                                        <th>From</th>
                                        <th>Location</th>
                                        <th>To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>414</td>
                                        <td>09:30 PM</td>
                                        <td>09:40 PM</td>
                                        <td>Nana Nani Phase 2 Va</td>
                                        <td>Mouthi Hospital Rd, (21:15)</td>
                                        <td>Omni Bus Stand</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>637</td>
                                        <td>09:14 PM</td>
                                        <td>09:44 PM</td>
                                        <td>VEERAKERALAM</td>
                                        <td>Anna Nagar 5th Street (21:12)</td>
                                        <td>100 FEET Road</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>447</td>
                                        <td>09:15 PM</td>
                                        <td>09:45 PM</td>
                                        <td>RACE COURSE</td>
                                        <td>Race Course Scheme R (21:15)</td>
                                        <td>SUNGAM</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Allot - More Than 60 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Taxi-Type</th>
                                    <th>Pickup</th>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nagarajan</td>
                                    <td>Indica non ac</td>
                                    <td>11:30 PM</td>
                                    <td>VADAVALLI</td>
                                    <td>Railway Station</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Drop - Next 15 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>VID</th>
                                        <th>Pickup Time</th>
                                        <th>ETD</th>
                                        <th>From</th>
                                        <th>Location</th>
                                        <th>To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>835</td>
                                        <td>07:00 PM</td>
                                        <td>07:30 PM</td>
                                        <td>Vadavalli, Coimbator</td>
                                        <td>Marudhamalai Rd,(19:07)</td>
                                        <td>Vadavalli, Coimbator</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>637</td>
                                        <td>07:15 PM</td>
                                        <td>07:45 PM</td>
                                        <td>MULLAI NAGAR</td>
                                        <td>Venkatasamy Rd W,(19:02)</td>
                                        <td>MULLAI NAGAR</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>414</td>
                                        <td>07:25 PM</td>
                                        <td>08:36 PM</td>
                                        <td>PSG HOSPITAL</td>
                                        <td>Thadagam Main(20:27)</td>
                                        <td>Vadavalli, Coimbator</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>655</td>
                                        <td>07:42 PM</td>
                                        <td>08:37 PM</td>
                                        <td>SINGANALLUR</td>
                                        <td>Thadagam Main(20:27)</td>
                                        <td>Vadavalli, Coimbator</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>621</td>
                                        <td>08:15 PM</td>
                                        <td>08:37 PM</td>
                                        <td>Sidhapudur</td>
                                        <td>Gandhipuram Bus Stan (20:27)</td>
                                        <td>MANIKARAMPALAYAM</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Drop - Next 30 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>VID</th>
                                        <th>Pickup Time</th>
                                        <th>ETD</th>
                                        <th>From</th>
                                        <th>Location</th>
                                        <th>To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>414</td>
                                        <td>09:30 PM</td>
                                        <td>09:40 PM</td>
                                        <td>Nana Nani Phase 2 Va</td>
                                        <td>Mouthi Hospital Rd, (21:15)</td>
                                        <td>Omni Bus Stand</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>637</td>
                                        <td>09:14 PM</td>
                                        <td>09:44 PM</td>
                                        <td>VEERAKERALAM</td>
                                        <td>Anna Nagar 5th Street (21:12)</td>
                                        <td>100 FEET Road</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>447</td>
                                        <td>09:15 PM</td>
                                        <td>09:45 PM</td>
                                        <td>RACE COURSE</td>
                                        <td>Race Course Scheme R (21:15)</td>
                                        <td>SUNGAM</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Drop - Next 60 Min</h6>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered w-in-100 m-0 nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>VID</th>
                                        <th>Pickup Time</th>
                                        <th>ETD</th>
                                        <th>From</th>
                                        <th>Location</th>
                                        <th>To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>485</td>
                                        <td>08:00 PM</td>
                                        <td><a href="javascript:void(0)">09:53 PM</a></td>
                                        <td>Nana Nani Phase 2 Va</td>
                                        <td>935/2326, FCI Rd, Ga(21:21)</td>
                                        <td>TVS NAGAR</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>447</td>
                                        <td>09:30 PM</td>
                                        <td><a href="javascript:void(0)">10:00 PM</a></td>
                                        <td>BROOKE FIELD</td>
                                        <td>Trichy Rd, Red Field(21:21)</td>
                                        <td>RACE COURSE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>646</td>
                                        <td>09:30 PM</td>
                                        <td><a href="javascript:void(0)">10:00 PM</a></td>
                                        <td>PEELAMEDU</td>
                                        <td>24 /1 &amp; 24/4, 100 Fe(21:12)</td>
                                        <td>Railway Station</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>639</td>
                                        <td>09:40 PM</td>
                                        <td><a href="javascript:void(0)">10:10 PM</a></td>
                                        <td>Vadavalli, Coimbator</td>
                                        <td>VADAVALLI GOPALAPURA(21:21)</td>
                                        <td>Railway Station</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection