@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_editors_v2.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">CK Editor</h6>
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
                        <div class="icon ion-ios-americanfootball-outline"></div>
                    </div>
                    <div class="sm-info-text">
                        <h5 class="sm-inner-header">CK Editor</h5>
                        <div class="sm-inner-desc">
                            CKEditor is a WYSIWYG rich text editor which enables
                            writing content directly inside of web pages or
                            online applications.
                            <a href="javascript:void(0)"
                               target="_blank">Learn more about CK Editor</a>
                        </div>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" name="ckeditor" method="POST">
                                                        <textarea class="ckeditor" id="editor1" name="editor1"
                                                                  rows="40">
                                                            <h1>Hello world!</h1>
                                                            <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                                                        </textarea>
            </form>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Summernote</h6>
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
                        <div class="icon ion-ios-americanfootball-outline"></div>
                    </div>
                    <div class="sm-info-text">
                        <h5 class="sm-inner-header">Summernote</h5>
                        <div class="sm-inner-desc">
                            Summernote is a JavaScript library that helps you
                            create WYSIWYG editors online.
                            <a href="https://github.com/summernote/summernote"
                               target="_blank">Learn more about Summernote</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="index.html" method="POST" name="summernote_form">
                <textarea class="summernote" name="content"></textarea>
            </form>
        </div>
    </div>
@endsection