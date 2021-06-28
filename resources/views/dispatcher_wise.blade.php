@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ asset('assets/js/data.js') }}"></script>
    <script src="{{ asset('assets/js/dispatcher_wise.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Dispatcher Wise Search</h6>
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
                            <form class="" id="validate" data-parsley-validate="true" action="#" method="POST">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label required">Start Date</label>
                                            <input type="text" class="form-control date_picker">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label required">End Date</label>
                                            <input type="text" class="form-control date_picker">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label required">Dispatcher</label>
                                            <select class="form-control select_2" multiple="multiple">
                                                <option value="7" selected>ASSIGN</option>
                                                <option value="66">MANIKANDAN</option>
                                                <option value="3">ARUMUGAM</option>
                                                <option value="5">SUPERADMIN</option>
                                                <option value="172">KAMAL</option>
                                                <option value="67">RUBINA</option>
                                                <option value="61">ADMIN</option>
                                                <option value="68">ABIRAMI</option>
                                                <option value="62">ADMIN</option>
                                                <option value="63">PRADEEPA</option>
                                                <option value="69">SOWMIYA</option>
                                                <option value="70">LATHA</option>
                                                <option value="65">RAMYA</option>
                                                <option value="64">ANITHA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label w-in-100 invisible">Submit</label>
                                            <button type="submit" class="btn btn-dark m-r-5 m-b-5 ladda-button"
                                                    data-color="mint" data-style="expand-right" data-size="l"><span
                                                        class="ladda-label">Submit</span><span class="ladda-spinner"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                    <h6 class="panel-title">Dispatcher Wise Result</h6>
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
                                        <th>VID Login's</th>
                                        <th>VID Logout's</th>
                                        <th>Book</th>
                                        <th>AppBook</th>
                                        <th>Allot</th>
                                        <th>Close</th>
                                        <th>Enquiry</th>
                                        <th>Cancel</th>
                                        <th>Complaint</th>
                                        <th>Followup</th>
                                        <th>Collection</th>
                                        <th>New Customer</th>
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