@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Dropdown Menu</h6>
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
                                <div class="icon ion-ios-calendar-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Dropdown Menu</h5>
                                <div class="sm-inner-desc">
                                    Toggle contextual overlays for displaying lists of
                                    links and more with the Bootstrap dropdown plugin.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Dropdowns</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> <span>Andrew</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Navigation</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="badge badge-primary pull-right">4</span>
                                    <i class="fa fa-comment"></i> Messages
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-user"></i> My profile
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-cogs"></i> Account settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Notifications</h6>
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
                                <div class="icon ion-ios-camera-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Notifications</h5>
                                <div class="sm-inner-desc">
                                    Toggle contextual overlays for displaying lists of
                                    links and more with the Bootstrap dropdown plugin.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Dropdowns</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i> Notifications <i class="caret"></i>
                            <span class="visible-xs-inline-block position-right">Notification(s)</span>
                        </a>

                        <div class="dropdown-menu dropdown-content w-in-60">
                            <div class="dropdown-content-heading">
                                Notification(s)
                                <ul class="icons-list">
                                    <li><a href="javascript:void(0)" class="f-s-10 m-t-5">View All</a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/avatar/user-1.jpg') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">New User Registered</span>
                                            <span class="media-annotation pull-right">2 mins ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/avatar/user-2.jpg') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Andrew shared a memory</span>
                                            <span class="media-annotation pull-right">1 hour ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/pf_logo.png') }}" class="thumbnail" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Perfectin has 1 new view</span>
                                            <span class="media-annotation pull-right">Yesterday</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/svg/server.svg') }}" class="thumbnail p-7" alt="perfectin">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="f-w-500">Server Error Reports</span>
                                            <span class="media-annotation pull-right">2 days ago</span>
                                        </a>
                                        <span class="text-muted f-s-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Dropup variation</h6>
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
                                <div class="icon ion-ios-download-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Dropdown</h5>
                                <div class="sm-inner-desc">
                                    Toggle contextual overlays for displaying lists of
                                    links and more with the Bootstrap dropdown plugin.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Dropdowns</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-example" data-example-id="button-dropdown-dropup">
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-default">Dropup</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-success">Right dropup</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
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
                    <h6 class="panel-title">Dropdown</h6>
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
                    <div class="clearfix">
                        <p>Dropdown Left</p>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-success">1</button>
                            <button type="button" class="btn btn-success">2</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <li><a href="javascript:void(0)">Dropdown link</a></li>
                                    <li><a href="javascript:void(0)">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix m-t-10">
                        <p>Dropdown Right</p>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-success">1</button>
                            <button type="button" class="btn btn-success">2</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <li><a href="javascript:void(0)">Dropdown link</a></li>
                                    <li><a href="javascript:void(0)">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix m-t-10">
                        <p>Single button dropdowns</p>
                        <div class="bs-example" data-example-id="single-button-dropdown">
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Default <span
                                            class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Primary <span
                                            class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Success <span
                                            class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Warning <span
                                            class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Danger <span
                                            class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix m-t-10">
                        <p>Split button dropdowns</p>
                        <div class="bs-example" data-example-id="split-button-dropdown">
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-default">Default</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group  m-r-5 m-b-5">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group m-r-5 m-b-5">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="caret"></span> <span
                                            class="sr-only">Toggle Dropdown</span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix m-t-10">
                        <p>Sizing</p>
                        <div class="bs-example" data-example-id="button-dropdown-sizing">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group m-r-5 m-b-5">
                                    <button class="btn btn-success btn-lg dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Large
                                        button <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group m-r-5 m-b-5">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Small
                                        button <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group m-r-5 m-b-5">
                                    <button class="btn btn-success btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Extra
                                        small button <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection