@extends('layout.default')

@section('pageStyle')
    <link type="text/css" href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/sm_scrumboard.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="scrumboard white lined-primary">
                <div class="scrumboard-header">
                    <h5 class="scrumboard-name">Task Inprogress</h5>
                    <div class="scrumboard-header-numbers">
                        <div class="scrumboard-value">367 Tasks</div>
                        <div class="scrumboard-count">231 High Priority</div>
                    </div>
                    <div class="scrumboard-settings">
                        <i class="ion-android-menu"></i>
                    </div>
                </div>
                <div class="scrumboard-body">
                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Dashboard Design</div>
                                <div class="pi-sub">Andrew Heston</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>12 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">404 Page Design</div>
                                <div class="pi-sub">Michel Newton</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-success"
                                   href="javascript:void(0)">Normal</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">E-Mail Template</div>
                                <div class="pi-sub">Mark Ruffalo</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-light"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="scrumboard white lined-danger">
                <div class="scrumboard-header">
                    <h5 class="scrumboard-name">Bugs</h5>
                    <div class="scrumboard-header-numbers">
                        <div class="scrumboard-value">1,043</div>
                        <div class="scrumboard-count">97 High Priority</div>
                    </div>
                    <div class="scrumboard-settings">
                        <i class="ion-android-menu"></i>
                    </div>
                </div>
                <div class="scrumboard-body">
                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Dashboard Design</div>
                                <div class="pi-sub">Andrew Heston</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>12 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">404 Page Design</div>
                                <div class="pi-sub">Michel Newton</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-success"
                                   href="javascript:void(0)">Normal</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">E-Mail Template</div>
                                <div class="pi-sub">Mark Ruffalo</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-light"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="scrumboard white lined-warning">
                <div class="scrumboard-header">
                    <h5 class="scrumboard-name">Testing Tasks</h5>
                    <div class="scrumboard-header-numbers">
                        <div class="scrumboard-value">1,574</div>
                        <div class="scrumboard-count">13 High Priority</div>
                    </div>
                    <div class="scrumboard-settings">
                        <i class="ion-android-menu"></i>
                    </div>
                </div>
                <div class="scrumboard-body">
                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">404 Page Design</div>
                                <div class="pi-sub">Michel Newton</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-success"
                                   href="javascript:void(0)">Normal</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Dashboard Design</div>
                                <div class="pi-sub">Andrew Heston</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>12 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">E-Mail Template</div>
                                <div class="pi-sub">Mark Ruffalo</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-light"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="scrumboard white lined-primary">
                <div class="scrumboard-header">
                    <h5 class="scrumboard-name">Task Inprogress</h5>
                    <div class="scrumboard-header-numbers">
                        <div class="scrumboard-value">367 Tasks</div>
                        <div class="scrumboard-count">231 High Priority</div>
                    </div>
                    <div class="scrumboard-settings">
                        <i class="ion-android-menu"></i>
                    </div>
                </div>
                <div class="scrumboard-body">
                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Dashboard Design</div>
                                <div class="pi-sub">Andrew Heston</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>12 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">404 Page Design</div>
                                <div class="pi-sub">Michel Newton</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-success"
                                   href="javascript:void(0)">Normal</a>
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">E-Mail Template</div>
                                <div class="pi-sub">Mark Ruffalo</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-light"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-danger"
                                   href="javascript:void(0)">High Priority</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>

                    <div class="scrumboard-item">
                        <div class="sm_ctrl">
                            <div class="pi-settings sm_drop_open">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                        <div class="sm_scr_body">
                            <div class="avatar">
                                <img alt="" src="http://via.placeholder.com/128x128">
                            </div>
                            <div class="sm_scr_info">
                                <div class="h5 pi-name">Pricing Table</div>
                                <div class="pi-sub">Catherine Weiss</div>
                            </div>
                        </div>
                        <div class="sm_scr_foot">
                            <div class="tags">
                                <a class="badge badge-primary"
                                   href="javascript:void(0)">Design</a>
                                <a class="badge badge-warning"
                                   href="javascript:void(0)">Module</a>
                                <a class="badge badge-dark"
                                   href="javascript:void(0)">Normal</a>
                            </div>
                            <a class="extra-info" href="javascript:void(0)">
                                <span>42 Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection