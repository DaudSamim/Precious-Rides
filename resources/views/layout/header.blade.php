<!-- BEGIN TOP NAV ABR -->
<div class="navbar navbar-default navbar-fixed-top bordered">
    <div class="navbar-header">
        <ul class="nav navbar-nav m-l-0 pull-left">
            <li id="minimizeSidebar" class="navbar-toggler">
                <a href="javascript:void(0)">
                    <i class="icons icon-menu f-s-18 f-w-600 v-a-m m-r-10 hidden-xs"></i> <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="perfectin" class="w-115">
                </a>
            </li>

            <li data-toggle="tooltip" data-placement="bottom" data-trigger="hover" class="hidden-xs hidden-sm hidden-md"
                title="Enter Peek Hours">
                <div class="input-group input-group-sm width-300 m-t-8 m-l-25">
                    <span class="input-group-addon btn bg-dark">Peek Hours</span>
                    <input type="text" class="form-control" placeholder="Peek Hours" value="10:10 - 02:54">
                    <span class="input-group-addon btn bg-dark">Save</span>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li class="open_ms_menu">
                <a href="javascript:void(0)">
                    <i class="fa fa-wifi"></i>
                </a>
            </li>
            <li class="open_login_modal">
                <a href="javascript:void(0)">
                    <i class="fa fa-sign-in"></i>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" data-target="#mobile_nav">
                    <i class="fa fa-user"></i>
                </a>
            </li>
            <li id="minimizeSidebar1" class="navbar-toggler">
                <a class="text-center">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="mobile_nav">
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="open_ms_menu hidden-xs">
                    <a href="javascript:void(0)">
                        <i class="fa fa-wifi"></i> Apps
                    </a>
                </li>
                <li class="open_login_modal hidden-xs">
                    <a href="javascript:void(0)">
                        <i class="fa fa-sign-in"></i> Sign In
                    </a>
                </li>
                <li id="btn-search" class="hidden-xs">
                    <a href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li id="toggleFullScreen" class="hidden-xs">
                    <a href="javascript:void(0)">
                        <i class="fa fa-desktop"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="visible-xs-inline-block position-right">Notification(s)</span>
                        <span class="pulse hidden-xs"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                            Notification(s)
                            <ul class="icons-list">
                                <li><a href="javascript:void(0)" class="f-s-10 m-t-5">View All</a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body w-in-20">
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
                </li>
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/images/avatar/user-1.jpg') }}" alt="perfectin">
                        <span>Andrew</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header navigations">Navigation</li>
                        <li class="navigations">
                            <a href="javascript:void(0)">
                                <span class="badge badge-primary pull-right">4</span>
                                <i class="fa fa-comment"></i> Messages
                            </a>
                        </li>
                        <li class="navigations">
                            <a href="javascript:void(0)">
                                <i class="fa fa-user"></i> My profile
                            </a>
                        </li>
                        <li class="navigations">
                            <a href="javascript:void(0)">
                                <i class="fa fa-cogs"></i> Account settings
                            </a>
                        </li>
                        <li class="divider navigations"></li>
                        <li class="navigations">
                            <a href="javascript:void(0)">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END TOP NAV ABR -->