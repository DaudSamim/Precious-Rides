@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/jstree/dist/themes/default/style.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/jstree/dist/jstree.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_tree_view.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Default tree</h6>
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
                                <div class="icon ion-ios-grid-view-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Default tree</h5>
                                <div class="sm-inner-desc">
                                    jsTree is easily extendable, themable and
                                    configurable, it supports HTML & JSON data sources
                                    and AJAX loading.
                                    <a href="https://www.jstree.com/api/"
                                       target="_blank">Learn more about jsTree</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="jstree-default">
                                <ul>
                                    <li data-jstree='{"opened":true}'>
                                        Root node 1
                                        <ul>
                                            <li data-jstree='{"opened":true, "selected":true }'>
                                                Initially Selected
                                            </li>
                                            <li>Folder 1</li>
                                            <li>Folder 2</li>
                                            <li>Folder 3</li>
                                            <li data-jstree='{"opened":true}'>
                                                Initially open
                                                <ul>
                                                    <li data-jstree='{"disabled":true}'>
                                                        Disabled node
                                                    </li>
                                                    <li>Another node</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{ "icon" : "fa fa-warning fa-lg text-danger" }'>
                                                custom
                                                icon
                                                class (fontawesome)
                                            </li>
                                            <li data-jstree='{ "icon" : "fa fa-link fa-lg text-primary" }'>
                                                <a
                                                        href="http://www.jstree.com/">Clickable
                                                    link node</a></li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Checkable tree</h6>
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
                                <div class="icon ion-ios-heart-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Checkable tree</h5>
                                <div class="sm-inner-desc">
                                    jsTree is easily extendable, themable and
                                    configurable, it supports HTML & JSON data sources
                                    and AJAX loading.
                                    <a href="https://www.jstree.com/api/"
                                       target="_blank">Learn more about jsTree</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="jstree-checkable"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Contextual Menu with Drag & Drop</h6>
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
                                <div class="icon ion-ios-help-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Contextual Menu with Drag & Drop</h5>
                                <div class="sm-inner-desc">
                                    jsTree is easily extendable, themable and
                                    configurable, it supports HTML & JSON data sources
                                    and AJAX loading.
                                    <a href="https://www.jstree.com/api/"
                                       target="_blank">Learn more about jsTree</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="jstree-drag-and-drop">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Ajax Tree with Drag & Drop</h6>
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
                                <div class="icon ion-ios-home-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Ajax Tree with Drag & Drop</h5>
                                <div class="sm-inner-desc">
                                    jsTree is easily extendable, themable and
                                    configurable, it supports HTML & JSON data sources
                                    and AJAX loading.
                                    <a href="https://www.jstree.com/api/"
                                       target="_blank">Learn more about jsTree</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="jstree-ajax"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection