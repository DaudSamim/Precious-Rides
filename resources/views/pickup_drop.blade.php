@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2-full.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/js/pickup.js') }}"></script>
@endsection

@section('content')
    <div class="row" id="show_multiple_filter_div" style="display: none;">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Pickup / Drop Search</h6>
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
                    <div class="row" id="append_col">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Pickup / Drop</h6>
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
                        <table class="table table-striped table-bordered w-in-100 nowrap" id="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="apply_search">PNR</th>
                                <th class="apply_search">Name</th>
                                <th class="apply_search">From</th>
                                <th class="apply_search">To</th>
                                <th class="apply_search">Pickup Time</th>
                                <th class="apply_search">Exp Drop</th>
                                <th class="apply_select">Vehicle Type</th>
                                <th class="apply_search">Mobile</th>
                                <th class="apply_search">Trip Start</th>
                                <th class="apply_search">End Start</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection