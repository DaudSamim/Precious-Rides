@extends('layout.default')

@section('pageStyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vehicle_statistics.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Logged In Vehicle</h6>
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
                                <table class="table table-striped table-bordered w-in-100" id="loggedin">
                                    <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Location</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Logged Out Vehicle</h6>
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
                                <table class="table table-striped table-bordered w-in-100" id="loggedout">
                                    <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Location</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Logged Out Vehicle</h6>
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
                                <table class="table table-striped table-bordered w-in-100" id="stat">
                                    <thead>
                                    <tr>
                                        <th>Statistics</th>
                                        <th>Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Vehicle on trip</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Free Vehicles</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Alotted Vehicles</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Assigned Vehicles</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Break Vehicles</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Vehicles Logged In</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Vehicles Logged Out</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>Not Logged in Vehicles</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Total Active Taxis</td>
                                        <td>50</td>
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