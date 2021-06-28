@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Login Modal</h6>
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
                                <div class="icon ion-log-in"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Login Modal</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s JavaScript modal plugin to add
                                    dialogs to your site for lightboxes, user
                                    notifications, or completely custom content.
                                    <a href="https://getbootstrap.com/docs/3.3/"
                                       target="_blank">Learn more about Bootstrap
                                        Modals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="login_modal_1" class="effect-flip-horizontal" style="width: 100%">
                        <div class="modal-dialog modal-lg fullmodal_login" role="document">
                            <div class="modal-content bd-0 bg-white rounded overflow-hidden fullmodal">
                                <div class="modal-body bg_header">
                                    <div class="row">
                                        <div class="col-md-5 gray_right hidden-xs">
                                            <div class="p-40">
                                                <h1 class="m-b-20">ALAR</h1>
                                                <div class="account-info">
                                                    <ul>
                                                        <li><i class="icon-magic-wand"></i> Fully customizable</li>
                                                        <li><i class="icon-layers"></i> Responsive Design</li>
                                                        <li><i class="icon-drop"></i> Multiple Backgrounds</li>
                                                        <li><i class="icon-arrow-right"></i> 24/7 Support / Service</li>
                                                    </ul>
                                                </div>
                                                <p class="m-t-30">
                                                    <span class="f-w-400 d-block m-b-15">Address:</span>
                                                    <span>Perfectin, Vetri Vinayagar Nagar, Ganapathy, Coimbatore, India 641006</span>
                                                </p>
                                                <div class="text-xs-center text-sm-right m-b-15 m-t-20">
                                                    <ul class="social-media social-media--style">
                                                        <li>
                                                            <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                               data-original-title="Facebook">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                               data-original-title="Twitter">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                               data-original-title="Instagram">
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                               data-original-title="Github">
                                                                <i class="fa fa-github"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="res-xs-p-0" style="padding: 30px;">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="p-l-30 p-r-30 p-t-10 p-b-10">
                                                    <h3 class="f-w-400 m-b-5">Welcome back!</h3>
                                                    <p>Sign in to your account to continue</p>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="sm-form-design">
                                                            <input type="text" name="name" id="modal_username1"
                                                                   class="form-control"
                                                                   placeholder="Please enter your username"
                                                                   required>
                                                            <label class="control-label">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-b-20">
                                                        <div class="sm-form-design">
                                                            <input type="text" name="name" id="modal_password1"
                                                                   class="form-control"
                                                                   placeholder="Please enter your password"
                                                                   required>
                                                            <label class="control-label">Password</label>
                                                        </div>
                                                        <a href="javascript:void(0)" class="f-s-12 d-block m-t-10">Forgot password?</a>
                                                    </div>
                                                    <button class="btn p-t-12 p-b-12 btn-block btn-primary">Sign In</button>
                                                    <div class="m-t-30 m-b-20 f-s-12">
                                                        Don't have an account yet? <a href="javascript:void(0)">Sign Up</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Modal Login</h6>
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
                                <div class="icon ion-log-in"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Login Modal</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s JavaScript modal plugin to add
                                    dialogs to your site for lightboxes, user
                                    notifications, or completely custom content.
                                    <a href="https://getbootstrap.com/docs/3.3/"
                                       target="_blank">Learn more about Bootstrap
                                        Modals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#login_modal" id="launch_login_modal">
                        Launch Login Modal
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Modal Login</h6>
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
                                <div class="icon ion-log-in"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Login Modal</h5>
                                <div class="sm-inner-desc">
                                    Use Bootstrap’s JavaScript modal plugin to add
                                    dialogs to your site for lightboxes, user
                                    notifications, or completely custom content.
                                    <a href="https://getbootstrap.com/docs/3.3/"
                                       target="_blank">Learn more about Bootstrap
                                        Modals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary m-t-10"
                            data-toggle="modal"
                            data-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <button type="button" class="btn btn-primary m-t-10"
                            data-toggle="modal"
                            data-target=".bd-example-modal-lg">Large modal
                    </button>

                    <button type="button" class="btn btn-primary m-t-10"
                            data-toggle="modal"
                            data-target=".bd-example-modal-sm">Small modal
                    </button>
                </div>
            </div>

            <div id="exampleModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Basic modal</h4>
                        </div>

                        <div class="modal-body">
                            <h4>Lorem ipsum dolor sit amet consectetuer adipiscing
                                elit</h4>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa
                                <strong>strong</strong>. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus
                                mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis
                                enim. Donec pede justo, fringilla vel, aliquet nec,
                                vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede <a class="external ext" href="#">link</a>
                                mollis pretium. Integer tincidunt. Cras dapibus.
                                Vivamus elementum semper nisi. Aenean vulputate
                                eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                viverra nulla ut metus varius laoreet. Quisque rutrum.
                                Aenean imperdiet. Etiam ultricies nisi vel augue.
                                Curabitur ullamcorper ultricies nisi.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="exampleModal1" class="modal modal-lg bd-example-modal-lg fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Basic modal</h4>
                        </div>

                        <div class="modal-body">
                            <h4>Lorem ipsum dolor sit amet consectetuer adipiscing
                                elit</h4>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa
                                <strong>strong</strong>. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus
                                mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis
                                enim. Donec pede justo, fringilla vel, aliquet nec,
                                vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede <a class="external ext" href="#">link</a>
                                mollis pretium. Integer tincidunt. Cras dapibus.
                                Vivamus elementum semper nisi. Aenean vulputate
                                eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                viverra nulla ut metus varius laoreet. Quisque rutrum.
                                Aenean imperdiet. Etiam ultricies nisi vel augue.
                                Curabitur ullamcorper ultricies nisi.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="exampleModal2" class="modal modal-xs bd-example-modal-sm fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Basic modal</h4>
                        </div>

                        <div class="modal-body">
                            <h4>Lorem ipsum dolor sit amet consectetuer adipiscing
                                elit</h4>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa
                                <strong>strong</strong>. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus
                                mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis
                                enim. Donec pede justo, fringilla vel, aliquet nec,
                                vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede <a class="external ext" href="#">link</a>
                                mollis pretium. Integer tincidunt. Cras dapibus.
                                Vivamus elementum semper nisi. Aenean vulputate
                                eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                viverra nulla ut metus varius laoreet. Quisque rutrum.
                                Aenean imperdiet. Etiam ultricies nisi vel augue.
                                Curabitur ullamcorper ultricies nisi.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection