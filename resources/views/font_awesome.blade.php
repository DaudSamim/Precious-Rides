@extends('layout.default')

@section('pageScript')
    <script src="{{ asset('assets/plugins/jquery.search/jquery.search.min.js') }}"></script>
    <script src="{{ asset('assets/js/pvr_icons_font_awesome.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">font awesome</h6>
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
                    <div class="chat-search clearfix col-md-offset-4">
                        <div class="pvr-page-icons element-search col-md-6">
                            <input placeholder="Search by icon name..." type="text" class="form-control">
                        </div>
                    </div>

                    <div class="pvr_material_icons_list">
                        <div class="row text-center append_icons">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection