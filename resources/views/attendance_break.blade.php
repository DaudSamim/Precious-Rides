@extends('layout.default')

@section('pageStyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/js/attendance_break.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ui-block">
                <div class="panel widget_1">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-md-3 b-b">
                            <i class="icon icon-login"></i>
                            <div class="wid-content">
                                <label>Logged-in</label>
                                <h2><span data-count="true" data-number="097" id="ts1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-bag"></i>
                            <div class="wid-content">
                                <label>Break</label>
                                <h2><span data-count="true" data-number="32" id="pv1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-home"></i>
                            <div class="wid-content">
                                <label>Leave</label>
                                <h2><span data-count="true" data-number="100" id="wt1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l b-b">
                            <i class="icon icon-calendar"></i>
                            <div class="wid-content">
                                <label>Informed</label>
                                <h2><span data-count="true" data-number="19" id="ea1"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <i class="icon icon-anchor"></i>
                            <div class="wid-content">
                                <label>Non Informed</label>
                                <h2><span data-count="true" data-number="12" id="ts2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-software-transform-bezier"></i>
                            <div class="wid-content">
                                <label>Pending</label>
                                <h2><span data-count="true" data-number="64" id="pv2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-trophy"></i>
                            <div class="wid-content">
                                <label>Inactive</label>
                                <h2><span data-count="true" data-number="4" id="wt2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-action-redo"></i>
                            <div class="wid-content">
                                <label>Total</label>
                                <h2><span data-count="true" data-number="206" id="ea2"></span> <small class="hidden-md">Vehicle</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Attendance / Break</h6>
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
                                        <th>S.No</th>
                                        <th>Driver Name</th>
                                        <th>VID</th>
                                        <th>Mobile</th>
                                        <th>Break At</th>
                                        <th>Break Minutes</th>

                                        <th>Logged In</th>
                                        <th>Expected logout</th>
                                        <th>Login Hours</th>
                                        <th>Today Collection</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection