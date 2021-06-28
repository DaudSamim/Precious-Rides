@extends('layout.default')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Page 500</h6>
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
                    <div class="container-fluid text-center m-t-30">
                        <div>
                            <h1 class="f-w-800 m-t-0">500</h1>
                            <h1 class="m-t-0">This page is lost in space!</h1>
                            <h4 class="m-t-0">We can’t find what you’re looking for, but the links below
                                may help.</h4>
                        </div>
                        <div class="pvr-404"
                             style="background: url('{{ asset('assets/images/404/4042.png') }}') no-repeat 50%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection