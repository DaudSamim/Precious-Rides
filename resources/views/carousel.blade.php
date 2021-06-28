@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Basic Carousel</h6>
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
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('assets/images/cover/women/5.jpg') }}" alt="Los Angeles"
                                     style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/images/cover/women/3.jpg') }}" alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/images/cover/women/2.jpg') }}" alt="New york" style="width:100%;">
                            </div>
                        </div>

                        <a class="left carousel-control carousel-control-prev" href="#myCarousel"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control carousel-control-next" href="#myCarousel"
                           data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Carousel Controls</h6>
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
                    <div class="col-md-6">
                        <div id="carousel2" class="carousel slide control-top-left" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('assets/images/cover/women/1.jpg') }}" alt="Los Angeles" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/2.jpg') }}" alt="Chicago" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/3.jpg') }}" alt="New york" style="width:100%;">
                                </div>
                            </div>

                            <a class="left carousel-control carousel-control-prev" href="#carousel2" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carousel2" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="carousel3" class="carousel slide control-top-right" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('assets/images/cover/women/2.jpg') }}" alt="Los Angeles" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/1.jpg') }}" alt="Chicago" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/3.jpg') }}" alt="New york" style="width:100%;">
                                </div>
                            </div>

                            <a class="left carousel-control carousel-control-prev" href="#carousel3" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carousel3" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 m-t-30">
                        <div id="carousel4" class="carousel slide control-bottom-left" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('assets/images/cover/women/4.jpg') }}" alt="Los Angeles" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/2.jpg') }}" alt="Chicago" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/1.jpg') }}" alt="New york" style="width:100%;">
                                </div>
                            </div>

                            <a class="left carousel-control carousel-control-prev" href="#carousel4" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carousel4" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 m-t-30">
                        <div id="carousel5" class="carousel slide control-bottom-right" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('assets/images/cover/women/5.jpg') }}" alt="Los Angeles" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/4.jpg') }}" alt="Chicago" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/images/cover/women/3.jpg') }}" alt="New york" style="width:100%;">
                                </div>
                            </div>

                            <a class="left carousel-control carousel-control-prev" href="#carousel5" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carousel5" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection