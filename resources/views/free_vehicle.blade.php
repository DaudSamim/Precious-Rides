@extends('layout.default')

@section('pageStyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/free_vehicle.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Free Vehicle</h6>
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
                        <table class="table table-striped table-bordered w-in-100" id="table">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>VID</th>
                                <th>Vehicle Number</th>
                                <th>Idle Time</th>
                                <th>Month Coll</th>
                                <th>Empty KM</th>
                                <th>Trips</th>
                                <th>Collection</th>
                                <th>CC Balance</th>
                                <th>Login Time</th>
                                <th>Current Location</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr id="col_filter">
                                <th class="apply_clear">S.No</th>
                                <th class="apply_search">VID</th>
                                <th class="apply_search">Vehicle Number</th>
                                <th class="apply_search">Idle Time</th>
                                <th class="apply_search">Month Coll</th>
                                <th class="apply_search">Empty KM</th>
                                <th class="apply_search">Trips</th>
                                <th class="apply_search">Collection</th>
                                <th class="apply_search">CC Balance</th>
                                <th class="apply_search">Login Time</th>
                                <th class="apply_search">Current Location</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection