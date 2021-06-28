@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Style 1</h6>
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
                                <div class="icon ion-ios-color-filter-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Style 1</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for how to use
                                    Bootstrap’s included navigation components.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Tabs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#basic1" data-toggle="tab">Nav Tab 1</a></li>
                            <li><a href="#basic2" data-toggle="tab">Nav Tab 2</a></li>
                            <li><a href="#basic3" data-toggle="tab">Nav Tab 3</a></li>
                            <li><a href="#basic4" data-toggle="tab">Nav Tab 4</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="basic1">
                                <h4>Nav Tab 1</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="basic2">
                                <h4>Nav Tab 2</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="basic3">
                                <h4>Nav Tab 3</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="basic4">
                                <h4>Nav Tab 4</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Style 2</h6>
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
                                <div class="icon ion-ios-color-wand-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Style 2</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for how to use
                                    Bootstrap’s included navigation components.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Tabs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <li class="active"><a href="#bottom_style1" data-toggle="tab">Nav Tab 1</a></li>
                            <li><a href="#bottom_style2" data-toggle="tab">Nav Tab 2</a></li>
                            <li><a href="#bottom_style3" data-toggle="tab">Nav Tab 3</a></li>
                            <li><a href="#bottom_style4" data-toggle="tab">Nav Tab 4</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="bottom_style1">
                                <h4>Nav Tab 1</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style2">
                                <h4>Nav Tab 2</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style3">
                                <h4>Nav Tab 3</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style4">
                                <h4>Nav Tab 4</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Style 3</h6>
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
                                <div class="icon ion-ios-albums-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Style 3</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for how to use
                                    Bootstrap’s included navigation components.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Tabs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="active"><a href="#bottom_style11" data-toggle="tab">Nav Tab 1</a></li>
                            <li><a href="#bottom_style21" data-toggle="tab">Nav Tab 2</a></li>
                            <li><a href="#bottom_style31" data-toggle="tab">Nav Tab 3</a></li>
                            <li><a href="#bottom_style41" data-toggle="tab">Nav Tab 4</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="bottom_style11">
                                <h4>Nav Tab 1</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style21">
                                <h4>Nav Tab 2</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style31">
                                <h4>Nav Tab 3</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="bottom_style41">
                                <h4>Nav Tab 4</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 equal_height">
            <div class="panel make_equal">
                <div class="panel-heading">
                    <h6 class="panel-title">Style 4</h6>
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
                                <div class="icon ion-ios-wineglass-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Style 4</h5>
                                <div class="sm-inner-desc">
                                    Documentation and examples for how to use
                                    Bootstrap’s included navigation components.
                                    <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Learn more about Bootstrap
                                        Tabs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="active"><a href="#pills1" data-toggle="tab">Nav Tab 1</a></li>
                            <li><a href="#pills2" data-toggle="tab">Nav Tab 2</a></li>
                            <li><a href="#pills3" data-toggle="tab">Nav Tab 3</a></li>
                            <li><a href="#pills4" data-toggle="tab">Nav Tab 4</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="pills1">
                                <h4>Nav Tab 1</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="pills2">
                                <h4>Nav Tab 2</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="pills3">
                                <h4>Nav Tab 3</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="pills4">
                                <h4>Nav Tab 4</h4>
                                <p class="l-h-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection