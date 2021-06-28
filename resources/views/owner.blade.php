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
    <script src="{{ asset('assets/js/owner.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Owner</h6>
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
                                <th>Name</th>
                                <th>Username</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr id="col_filter">
                                <th class="apply_clear">S.No</th>
                                <th class="apply_search">Name</th>
                                <th class="apply_select">Username</th>
                                <th class="apply_search">Mobile</th>
                                <th class="apply_search">Address</th>
                                <th class="apply_select">Status</th>
                                <th class="">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection