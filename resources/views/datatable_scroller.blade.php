@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/DataTables/extensions/Scroller/css/scroller.bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_tables_dataTable_Scroller.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">DataTables Scroller</h6>
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
                    <div class="sm-info">
                        <div class="sm-info-with-icon">
                            <div class="sm-info-icon">
                                <div class="icon ion-ios-keypad-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Scroller</h5>
                                <div class="sm-inner-desc">
                                    DataTables is a plug-in for the jQuery Javascript
                                    library. It is a highly flexible tool, build upon
                                    the foundations of progressive enhancement, that
                                    adds all of these advanced features to any HTML
                                    table.
                                    <a href="https://github.com/DataTables/DataTables"
                                       target="_blank">Learn more about DataTables</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table id="data-table" class="table table-striped table-bordered display w-in-100">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>ZIP / Post code</th>
                            <th>Country</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection