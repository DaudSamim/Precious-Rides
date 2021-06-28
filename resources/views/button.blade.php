@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Buttons</h6>
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
                                <div class="icon ion-ios-chatbubble-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Buttons</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s custom button styles for actions in
                                    forms, dialogs, and more with support for multiple
                                    sizes, states, and more.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default m-r-5 m-b-5">Default</button>
                    <button type="button" class="btn btn-primary m-r-5 m-b-5">Primary</button>
                    <button type="button" class="btn btn-info m-r-5 m-b-5">Info</button>
                    <button type="button" class="btn btn-success m-r-5 m-b-5">Success</button>
                    <button type="button" class="btn btn-danger m-r-5 m-b-5">Danger</button>
                    <button type="button" class="btn btn-warning m-r-5 m-b-5">Warning</button>
                    <button type="button" class="btn btn-dark m-r-5 m-b-5">Dark</button>
                    <button type="button" class="btn btn-white m-r-5 m-b-5">White</button>
                    <button type="button" class="btn btn-link m-b-5">Link</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Button Min Width</h6>
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
                                <div class="icon ion-ios-circle-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Min-Width Button</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s custom button styles for actions in
                                    forms, dialogs, and more with support for multiple
                                    sizes, states, and more.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default btn-wd m-r-5 m-b-5">Default</button>
                    <button type="button" class="btn btn-primary btn-wd m-r-5 m-b-5">Primary</button>
                    <button type="button" class="btn btn-info btn-wd m-r-5 m-b-5">Info</button>
                    <button type="button" class="btn btn-success btn-wd m-r-5 m-b-5">Success</button>
                    <button type="button" class="btn btn-danger btn-wd m-r-5 m-b-5">Danger</button>
                    <button type="button" class="btn btn-warning btn-wd m-r-5 m-b-5">Warning</button>
                    <button type="button" class="btn btn-white btn-wd m-r-5 m-b-5">White</button>
                    <button type="button" class="btn btn-link btn-wd m-b-5">Link</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
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
                                <div class="icon ion-ios-chatbubble-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Buttons</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s custom button styles for actions in
                                    forms, dialogs, and more with support for multiple
                                    sizes, states, and more.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
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
                                <button type="button" class="btn btn-dark">Right dropup</button>
                                <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"
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

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Outline Button</h6>
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
                                <div class="icon ion-ios-checkmark-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Outline Buttons</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s custom button styles for actions in
                                    forms, dialogs, and more with support for multiple
                                    sizes, states, and more.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary m-t-5">
                        Primary
                    </button>
                    <button type="button" class="btn btn-outline-secondary m-t-5">
                        Secondary
                    </button>
                    <button type="button" class="btn btn-outline-success m-t-5">
                        Success
                    </button>
                    <button type="button" class="btn btn-outline-danger m-t-5">Danger
                    </button>
                    <button type="button" class="btn btn-outline-warning m-t-5">
                        Warning
                    </button>
                    <button type="button" class="btn btn-outline-info m-t-5">Info
                    </button>
                    <button type="button" class="btn btn-outline-light m-t-5">Light
                    </button>
                    <button type="button" class="btn btn-outline-dark m-t-5">Dark
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Min-Width Outline Button</h6>
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
                    <div class="sm-box">
                        <div class="sm-info">
                            <div class="sm-info-with-icon">
                                <div class="sm-info-icon">
                                    <div class="icon ion-ios-close-outline"></div>
                                </div>
                                <div class="sm-info-text">
                                    <h5 class="sm-inner-header">Min-Width Outline Button</h5>
                                    <div class="sm-inner-desc">
                                        Use Bootstrap’s custom button styles for actions in
                                        forms, dialogs, and more with support for multiple
                                        sizes, states, and more.
                                        <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                            Collapse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-wd btn-outline-primary m-t-5">
                            Primary
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-secondary m-t-5">Secondary
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-success m-t-5">
                            Success
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-danger m-t-5">
                            Danger
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-warning m-t-5">
                            Warning
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-info m-t-5">
                            Info
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-light m-t-5">
                            Light
                        </button>
                        <button type="button" class="btn btn-wd btn-outline-dark m-t-5">
                            Dark
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Button Block</h6>
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
                                <div class="icon ion-ios-people-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Button Blocks</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s custom button styles for actions in
                                    forms, dialogs, and more with support for multiple
                                    sizes, states, and more.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Collapse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a href="javascript:void(0)" class="btn btn-success disabled m-r-5">Disabled Button</a>
                        <a href="javascript:void(0)" class="btn btn-white disabled">Disabled Button</a>
                    </p>
                    <p>
                        <a href="javascript:void(0)" class="btn btn-primary active m-r-5">Active Button</a>
                        <a href="javascript:void(0)" class="btn btn-primary active">Active Button</a>
                    </p>
                    <p>
                        <a href="javascript:void(0)" class="btn btn-warning btn-block">Block Button</a>
                        <a href="javascript:void(0)" class="btn btn-outline-warning btn-block">Block Button</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
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
                            <button type="button" class="btn btn-info">1</button>
                            <button type="button" class="btn btn-info">2</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop2" type="button" class="btn btn-info dropdown-toggle"
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
                                    <button class="btn btn-info btn-lg dropdown-toggle" type="button"
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
                                    <button class="btn btn-danger btn-xs dropdown-toggle" type="button"
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