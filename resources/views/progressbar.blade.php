@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Basic Progress Bars</h6>
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
                                <div class="icon ion-ios-flame-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Basic Progress Bar</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-b-16">
                        <div class="progress-bar" style="width: 15%">
                            <span class="sr-only">15% Complete</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-danger" style="width: 35%">
                            <span class="sr-only">35% Complete (danger)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-success" style="width: 55%">
                            <span class="sr-only">55% Complete (success)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-warning" style="width: 75%">
                            <span class="sr-only">75% Complete (warning)</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-info" style="width: 95%">
                            <span class="sr-only">95% Complete (info)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Striped Progress Bars</h6>
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
                                <div class="icon ion-ios-flask-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">With background Colors</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped" style="width: 15%">
                            <span class="sr-only">15% Complete</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width: 35%">
                            <span class="sr-only">35% Complete (danger)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped progress-bar-success" style="width: 55%">
                            <span class="sr-only">55% Complete (success)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped progress-bar-warning" style="width: 75%">
                            <span class="sr-only">75% Complete (warning)</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-info" style="width: 95%">
                            <span class="sr-only">95% Complete (info)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Animated Progress Bars</h6>
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
                                <div class="icon ion-ios-flower-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Animated Progress Bar</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped active" style="width: 15%">
                            <span class="sr-only">15% Complete</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped active progress-bar-danger" style="width: 35%">
                            <span class="sr-only">35% Complete (danger)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped active progress-bar-success" style="width: 55%">
                            <span class="sr-only">55% Complete (success)</span>
                        </div>
                    </div>

                    <div class="progress m-b-16">
                        <div class="progress-bar progress-bar-striped active progress-bar-warning" style="width: 75%">
                            <span class="sr-only">75% Complete (warning)</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active progress-bar-info" style="width: 95%">
                            <span class="sr-only">95% Complete (info)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Progress Bar Sizing</h6>
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
                                <div class="icon ion-ios-gear-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Progress Bar Sizing</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-b-16">
                        <div class="progress progress-lg">
                            <div class="progress-bar" style="width: 15%">
                                <span class="sr-only">15% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-16">
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-16">
                        <div class="progress progress-sm">
                            <div class="progress-bar" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-16">
                        <div class="progress progress-xs">
                            <div class="progress-bar" style="width: 60%">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-16">
                        <div class="progress progress-xxs">
                            <div class="progress-bar" style="width: 75%">
                                <span class="sr-only">75% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-16">
                        <div class="progress progress-micro">
                            <div class="progress-bar" style="width: 90%">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Progress Bar With Labels</h6>
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
                                <div class="icon ion-ios-game-controller-b-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Progress Bar With Labels</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-teal" style="width: 85%">
                            <span>85% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection