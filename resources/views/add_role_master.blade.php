@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Add Roles</h6>
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
                    <form id="validate" action="role_master.html" data-parsley-validate="true">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Role Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label required">Role Status</label>
                                    <select class="form-control select_2">
                                        <option value="active">Active</option>
                                        <option value="in-active">In-Active</option>
                                        <option value="disabled">Disabled</option>
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
@endsection