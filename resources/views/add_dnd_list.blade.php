@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Add DND</h6>
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
                    <form id="validate" action="driver.html" data-parsley-validate="true">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Vehicle Id</label>
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
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">DND Type</label>
                                    <select class="form-control select_2">
                                        <option value="off">Offline</option>
                                        <option value="on">Online</option>
                                        <option value="sch">Schedule</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">From Time</label>
                                    <input type="text" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">To Time</label>
                                    <input type="password" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Date</label>
                                    <input type="password" class="form-control date_picker">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Permision</label>
                                    <select class="form-control select_2">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label">Comments</label>
                                    <input type="text" class="form-control">
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
@endsection