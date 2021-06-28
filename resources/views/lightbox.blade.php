@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Lightbox</h6>
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
                                <div class="icon ion-ios-chatboxes-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Lightbox</h5>
                                <div class="sm-inner-desc">
                                    FancyBox is a tool for displaying images, html
                                    content and multi-media in a Mac-style "lightbox"
                                    that floats overtop of web page.
                                    <a href="http://fancyapps.com/fancybox/3/"
                                       target="_blank">Learn more about fancybox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ asset('assets/images/cover/women/1.jpg') }}" data-fancybox
                       data-caption="My caption">
                        <img alt="" src="{{ asset('assets/images/cover/women/1.jpg') }}"
                             class="img-thumbnail">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Grouping</h6>
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
                                <div class="icon ion-ios-box-outline"></div>
                            </div>
                            <div class="sm-info-text">
                                <h5 class="sm-inner-header">Grouping</h5>
                                <div class="sm-inner-desc">
                                    FancyBox is a tool for displaying images, html
                                    content and multi-media in a Mac-style "lightbox"
                                    that floats overtop of web page.
                                    <a href="http://fancyapps.com/fancybox/3/"
                                       target="_blank">Learn more about fancybox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ asset('assets/images/cover/women/1.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/1.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4  res-xs-m-t-20 res-sm-m-t-20 res-md-m-t-20">
                            <a href="{{ asset('assets/images/cover/women/2.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/2.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4  res-xs-m-t-20 res-sm-m-t-20 res-md-m-t-20">
                            <a href="{{ asset('assets/images/cover/women/3.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/3.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4 m-t-20">
                            <a href="{{ asset('assets/images/cover/women/4.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/4.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4 m-t-20">
                            <a href="{{ asset('assets/images/cover/women/4.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/5.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4 m-t-20">
                            <a href="{{ asset('assets/images/cover/women/4.jpg') }}"
                               data-fancybox="gallery" data-caption="My caption">
                                <img alt="" src="{{ asset('assets/images/cover/women/1.jpg') }}"
                                     class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection