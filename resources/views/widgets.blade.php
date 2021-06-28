@extends('layout.default')

@section('pageStyle')
    <link type="text/css" href="{{ asset('assets/plugins/rickshaw/css/rickshaw.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/amcharts/export.css') }}" type="text/css" media="all"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/skycons/skycons.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/placeholders/placeholders.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
    <script src='{{ asset('assets/plugins/snap/snap.svg-min.js') }}'></script>
    <script src="{{ asset('assets/plugins/d3/js/d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ResizeSensor/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/serial.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/none.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/ammap.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/worldLow.js') }}"></script>
    <script src="{{ asset('assets/plugins/amcharts/export.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/todo-list.js') }}"></script>
    <script src="{{ asset('assets/js/widget.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ui-block">
                <div class="panel widget_1">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-md-3">
                            <i class="icon icon-basket"></i>
                            <div class="wid-content">
                                <label>Total Sales</label>
                                <h2><span data-count="true" data-number="080494" id="ts1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-user"></i>
                            <div class="wid-content">
                                <label>Page Visits</label>
                                <h2><span data-count="true" data-number="944080" id="pv1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-note"></i>
                            <div class="wid-content">
                                <label>Withholding Tax</label>
                                <h2><span data-count="true" data-number="130792" id="wt1"></span></h2>
                            </div>
                        </div>
                        <div class="col-md-3 b-l">
                            <i class="icon icon-wallet"></i>
                            <div class="wid-content">
                                <label>Earnings</label>
                                <h2><span data-count="true" data-number="927013" id="ea1"></span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-b-20">
        <div class="col-lg-4 col-md-6">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Bandwidth Usage</h6>
                    <h3 class="m-b-0 m-t-10">323,3<span id="change_random">60</span></h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-purple">2.<span
                                    id="change_random_per">6%</span> change from
                                                        yesterday</span></p>
                </div>
                <div id="rs1" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 res-xs-m-t-20 res-sm-m-t-20">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Site Traffic</h6>
                    <h3 class="m-b-0 m-t-10">478,486</h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-info">70.5%</span> change from
                        yesterday</p>
                </div>
                <div id="rs2" class="h-70 mg-r--1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 res-md-m-t-20 res-xs-m-t-20">
            <div class="rickshar_card">
                <div class="rickshar_card-body p-b-0">
                    <h6 class="sm-card-title">Data Transfer</h6>
                    <h3 class="m-b-0 m-t-10">281,281</h3>
                    <p class="f-s-12 m-t-10 m-b-16"><span class="tx-primary">32.5%</span> change
                        from yesterday</p>
                </div>
                <div id="rs3" class="h-70 mg-r--1"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel">
                <div class="p-20">
                    <p class="f-w-600"><i class="icons icon-layers p-r-10"></i> TOTAL SALES</p>
                    <i class="icon icon-earphones right_icon"></i>
                    <div style="position: absolute">
                                <span class="f-s-30 m-l-10 f-w-700"><span data-count="true" data-number="080494"
                                                                          id="ts"></span></span>
                    </div>
                </div>
                <div class="p-t-15 text-center">
                    <!--Placeholder-->
                    <canvas height="100" id="pvrLineChart_1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel">
                <div class="p-20">
                    <p class="f-w-600"><i class="icons icon-question p-r-10"></i> PAGE VISITS</p>
                    <i class="icon icon-camcorder right_icon"></i>
                    <div style="position: absolute">
                                <span class="f-s-30 m-l-10 f-w-700"><span data-count="true" data-number="944080"
                                                                          id="pv"></span></span>
                    </div>

                </div>
                <div class="p-t-15 text-center">
                    <!--Placeholder-->
                    <canvas height="100" id="pvrLineChart_2"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel">
                <div class="p-20">
                    <p class="f-w-600"><i class="icons icon-magnet p-r-10"></i> WITHHOLDING TAX</p>
                    <i class="icon icon-chemistry right_icon"></i>
                    <div style="position: absolute">
                                <span class="f-s-30 m-l-10 f-w-700"><span data-count="true" data-number="130792"
                                                                          id="wt"></span></span>
                    </div>
                </div>
                <div class="p-t-15 text-center">
                    <!--Placeholder-->
                    <canvas height="100" id="pvrLineChart_3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel">
                <div class="p-20">
                    <p class="f-w-600"><i class="icons icon-map p-r-10"></i> EARNINGS</p>
                    <i class="icon icon-anchor right_icon"></i>
                    <div style="position: absolute">
                                <span class="f-s-30 m-l-10 f-w-700"><span data-count="true" data-number="927013"
                                                                          id="ea"></span></span>
                    </div>
                </div>
                <div class="p-t-15 text-center">
                    <!--Placeholder-->
                    <canvas height="100" id="pvrLineChart_4"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 equal_height">
            <div class="rickshar_card make_equal">
                <div class="overflow-hidden make_equal">
                    <div class="pri_main_container make_equal" data-test-selector="page-annuals-pricing"
                         data-test-language="en-us">
                        <div class="pri_container">
                            <svg class="pri_svg_fill pri_svg_1" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 85 85" role="img" aria-label="Circle">
                                <defs>
                                    <linearGradient id="id1"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#6d47d9"></stop>
                                        <stop offset="100%" stop-color="#f93d66"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M42.5 4C63.7 4 81 21.3 81 42.5S63.7 81 42.5 81 4 63.7 4 42.5 21.3 4 42.5 4m0-4C19 0 0 19 0 42.5S19 85 42.5 85 85 66 85 42.5 66 0 42.5 0z"
                                      fill="url(#id1)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_2" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 114 24" role="img" aria-label="Squiggle">
                                <defs>
                                    <linearGradient id="id2"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#6d47d9"></stop>
                                        <stop offset="100%" stop-color="#f93d66"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M114 22c0 1.1-.9 2-2 2-3.2 0-5.8-1.3-8-3.8-1.6-1.7-2.6-3.4-4.7-7.3-3.8-6.8-5.7-9-9.2-9-3.5 0-5.5 2.1-9.2 9-2.1 3.9-3.2 5.5-4.8 7.3-2.2 2.5-4.8 3.8-8 3.8s-5.8-1.3-8-3.8c-1.6-1.7-2.6-3.4-4.8-7.3-3.8-6.8-5.7-9-9.2-9-3.5 0-5.5 2.1-9.2 9-2.1 3.9-3.2 5.5-4.8 7.3-2.2 2.5-4.8 3.8-8 3.8s-5.8-1.3-8-3.8c-1.6-1.7-2.6-3.4-4.7-7.3C7.5 6.1 5.5 4 2 4 .9 4 0 3.1 0 2s.9-2 2-2c3.2 0 5.8 1.3 8 3.8 1.6 1.7 2.6 3.4 4.7 7.3 3.8 6.9 5.7 9 9.2 9 3.5 0 5.5-2.1 9.2-9 2.2-3.9 3.2-5.5 4.8-7.3C40.2 1.3 42.8 0 46 0s5.8 1.3 8 3.8c1.6 1.7 2.6 3.4 4.8 7.3 3.8 6.9 5.7 9 9.2 9 3.5 0 5.5-2.1 9.2-9 2.2-3.9 3.2-5.5 4.8-7.3C84.2 1.3 86.8 0 90 0s5.8 1.3 8 3.8c1.6 1.7 2.6 3.4 4.8 7.3 3.8 6.9 5.7 9 9.2 9 1.1-.1 2 .8 2 1.9z"
                                      fill="url(#id2)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_3" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 134.9 70.1" role="img" aria-label="Lines">
                                <defs>
                                    <linearGradient id="id3"
                                                    x1="0%" y1="0%" x2="0%"
                                                    y2="100%">
                                        <stop offset="0%" stop-color="#00dcaf"></stop>
                                        <stop offset="100%" stop-color="#6d47d9"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M2 70.1c-.5 0-1-.2-1.4-.6-.8-.8-.8-2 0-2.8L66.7.6c.8-.8 2-.8 2.8 0s.8 2 0 2.8L3.4 69.5c-.4.4-.9.6-1.4.6zM33.1 70.1c-.5 0-1-.2-1.4-.6-.8-.8-.8-2 0-2.8L97.7.6c.8-.8 2-.8 2.8 0s.8 2 0 2.8l-66 66.1c-.4.4-.9.6-1.4.6zM66.8 70.1c-.5 0-1-.2-1.4-.6-.8-.8-.8-2 0-2.8L131.5.6c.8-.8 2-.8 2.8 0s.8 2 0 2.8L68.2 69.5c-.4.4-.9.6-1.4.6z"
                                      fill="url(#id3)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_4 hide" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 580 580" role="img" aria-label="Circle">
                                <defs>
                                    <linearGradient id="id4"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#f7bc28"></stop>
                                        <stop offset="100%" stop-color="#f93d66"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M290 0C129.8 0 0 129.8 0 290s129.8 290 290 290 290-129.8 290-290S450.2 0 290 0zm195.1 485.1c-25.4 25.4-54.9 45.3-87.7 59.2-34 14.4-70.2 21.7-107.4 21.7s-73.4-7.3-107.4-21.7c-32.9-13.9-62.4-33.8-87.7-59.2-25.3-25.4-45.3-54.9-59.2-87.7C21.3 363.4 14 327.3 14 290s7.3-73.4 21.7-107.4c13.9-32.9 33.8-62.4 59.2-87.7 25.4-25.3 54.9-45.3 87.7-59.2C216.6 21.3 252.7 14 290 14s73.4 7.3 107.4 21.7c32.9 13.9 62.4 33.8 87.7 59.2 25.4 25.4 45.3 54.9 59.2 87.7 14.4 34 21.7 70.2 21.7 107.4s-7.3 73.4-21.7 107.4c-13.9 32.9-33.8 62.4-59.2 87.7z"
                                      fill="url(#id4)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_5" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 57 50" role="img" aria-label="Triangle">
                                <defs>
                                    <linearGradient id="id5"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#00dcaf"></stop>
                                        <stop offset="100%" stop-color="#6d47d9"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M56.7,47L30.2,1c-0.8-1.3-2.7-1.3-3.5,0L0.3,47c-0.8,1.3,0.2,3,1.7,3h53C56.5,50,57.5,48.3,56.7,47z M5.5,46l23-40l23,40 H5.5z"
                                      fill="url(#id5)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_6" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 48 51" role="img" aria-label="Spiral">
                                <defs>
                                    <linearGradient id="id6"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#f7bc28"></stop>
                                        <stop offset="100%" stop-color="#f93d66"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M46.2 34.2C42.5 44.3 33 50.6 23.1 50.6c-2.7 0-5.4-.5-8-1.4-5.6-2.1-10.3-6.4-12.8-11.9C-.1 31.9-.3 26 1.7 20.7c2-5.1 6-9.4 11-11.6 4.8-2.1 10-2.3 14.8-.5 4.6 1.8 8.4 5.5 10.3 10 1.9 4.3 1.9 9 .2 13.2-1.6 4.1-4.9 7.4-8.9 9.1-3.8 1.6-7.9 1.6-11.6 0-3.5-1.5-6.3-4.4-7.7-8-1.3-3.3-1.3-6.9.1-10 1.3-3 3.8-5.3 6.9-6.4 2.8-1 5.8-.9 8.4.3 2.5 1.2 4.4 3.4 5.2 6 .7 2.3.5 4.7-.6 6.7-.9 1.8-2.7 3.2-4.8 3.8-1.9.5-3.8.2-5.4-.8-1.5-1-2.4-2.7-2.5-4.4-.1-1.3.4-2.6 1.4-3.4 1-1 3-1.2 4.2-.4 1.1.7 1.5 1.9 1.1 3.1-.3 1-1.4 1.6-2.4 1.3.1.2.3.4.5.5.7.5 1.6.4 2.1.3 1-.2 1.8-.9 2.2-1.8.8-1.4.6-2.8.3-3.7-.5-1.5-1.6-2.9-3.1-3.6-1.6-.8-3.5-.8-5.3-.2-2 .7-3.7 2.3-4.6 4.3-.9 2.1-1 4.6-.1 6.9 1 2.6 3 4.7 5.5 5.7 2.7 1.1 5.7 1.1 8.5 0 3-1.3 5.5-3.8 6.7-6.9 1.3-3.2 1.2-6.8-.2-10.1-1.5-3.6-4.5-6.4-8.1-7.9-3.8-1.5-7.9-1.3-11.7.4-3.9 2-7.1 5.4-8.7 9.5-1.6 4.3-1.4 9.1.6 13.5 2.1 4.5 5.9 8.1 10.4 9.8 10.2 3.7 22.1-2.1 26-12.6 4-11.3-2.3-24.3-13.9-28.5-1-.4-1.6-1.5-1.2-2.6.4-1 1.5-1.6 2.6-1.2 13.6 5 21.1 20.4 16.3 33.7z"
                                      fill="url(#id6)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_7" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 52 50" role="img" aria-label="Triangle">
                                <defs>
                                    <linearGradient id="id7"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#6d47d9"></stop>
                                        <stop offset="100%" stop-color="#00dcaf"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M50.3,17.6l-15.5-2.3l-7-14.2c-0.7-1.5-2.9-1.5-3.6,0l-7,14.2L1.7,17.6c-1.6,0.2-2.3,2.2-1.1,3.4l11.3,11L9.2,47.7	c-0.3,1.6,1.4,2.9,2.9,2.1L26,42.4l13.9,7.4c1.5,0.8,3.2-0.5,2.9-2.1L40.2,32l11.2-11C52.6,19.8,51.9,17.8,50.3,17.6z M36.6,29.9	c-0.5,0.5-0.7,1.1-0.6,1.8l2.1,12.6l-11.2-6c-0.6-0.3-1.3-0.3-1.9,0l-11.2,6L16,31.7c0.1-0.6-0.1-1.3-0.6-1.8l-9.1-9l12.6-1.8	c0.7-0.1,1.2-0.5,1.5-1.1L26,6.5L31.6,18c0.3,0.6,0.9,1,1.5,1.1L45.7,21L36.6,29.9z"
                                      fill="url(#id7)"></path>
                            </svg>
                            <svg class="pri_svg_fill pri_svg_8" tabindex=""
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 52 50" role="img" aria-label="Pentagon">
                                <defs>
                                    <linearGradient id="id8"
                                                    x1="0%" y1="0%" x2="100%"
                                                    y2="0%">
                                        <stop offset="0%" stop-color="#6d47d9"></stop>
                                        <stop offset="100%" stop-color="#f93d66"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M51.2,18l-24-17.6c-0.7-0.5-1.7-0.5-2.4,0L0.8,18c-0.7,0.5-1,1.4-0.7,2.2l9.2,28.4c0.3,0.8,1,1.4,1.9,1.4h29.7	c0.9,0,1.6-0.6,1.9-1.4l9.2-28.4C52.2,19.4,51.9,18.5,51.2,18z M39.4,46H12.6L4.3,20.3L26,4.5l21.7,15.8L39.4,46z"
                                      fill="url(#id8)"></path>
                            </svg>
                            <div class="pri_title p-10">
                                <div class="col-md-12 p-25">
                                    <h2 class="m-b-30">Great Mobile App.<br>Shop On The Go.</h2>
                                    <p class="m-b-30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Aliquam id purus at risus pellentesque faucibus a quis
                                        eros. In eu
                                        fermentum leo. Integer ut eros lacus. Proin ut accumsan
                                        leo. Morbi vitae
                                        est eget dolor consequat aliquam eget quis dolor.</p>
                                    <a class="market-button apple-button"
                                       href="javascript:void(0)">
                                        <span class="mb-subtitle">Download on the</span>
                                        <span class="mb-title">App Store</span>
                                    </a>
                                    <a class="market-button google-button"
                                       href="javascript:void(0)">
                                        <span class="mb-subtitle">Download on the</span>
                                        <span class="mb-title">Google Play</span>
                                    </a>
                                    <br>
                                    <a class="market-button windows-button"
                                       href="javascript:void(0)">
                                        <span class="mb-subtitle">Download on the</span>
                                        <span class="mb-title">Windows Store</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 equal_height res-xs-m-t-20 res-sm-m-t-20">
            <div class="rickshar_card text-white m-b-20 basic-gradient make_equal">
                <div class="rickshar_card-body p-20">
                    <div class="widget-active-user">
                        <h5 class="text-white">BTC Pending Coins</h5>
                        <div class="heading-1 p-b-20 text-white f-w-800">15483</div>
                        <h5 class="p-b-10 text-white f-s-15">Coin Request Per Minute</h5>
                        <div id="users_online" class="text-center overflow--hidden">
                            <canvas width="200" height="100"
                                    style="display: inline-block; width: 294px; height: 100px; vertical-align: top;"></canvas>
                        </div>
                        <h5 class="text-white m-t-10">Top active users</h5>
                        <ul class="list-unstyled active-page-link">
                            <li>
                                <small>Andrew</small>
                            </li>
                            <li>
                                <small>John Doe</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 equal_height">
            <div class="rickshar_card make_equal">
                <div class="rickshar_card-body p-20">
                    <div class="widget-active-user">
                        <h5>BTC Sales Completed Coins</h5>
                        <div class="heading-1 p-b-20 f-w-800">457133</div>
                        <h5 class="p-b-10 f-s-15">Page view per minutes</h5>
                        <div class="">
                            <canvas id="state_order_chart" height="100"></canvas>
                        </div>
                    </div>
                    <h5 class="m-t-10">Coin Sales Per Minute</h5>
                    <ul class="list-unstyled active-page-link">
                        <li>
                            <small>Andrew</small>
                        </li>
                        <li>
                            <small>John Doe</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row res-md-m-t-10 res-xs-m-t-20">
        <div class="col-lg-6 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Weather</h6>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4 class="m-b-5">Tuesday</h4>
                                    <p class="small hint-text">15th January 2019</p>
                                </div>
                                <div class="col-md-7">
                                    <div class="pull-left">
                                        <p class="small hint-text m-0">Currently</p>
                                        <h4 class="text-danger f-w-900 m-t-5">28°
                                            <span class="small">/ 18C</span>
                                        </h4>
                                    </div>
                                    <div class="pull-right">
                                        <canvas height="64" width="64" class="clear-day"></canvas>
                                    </div>
                                </div>
                            </div>
                            <h5>Feels like
                                <span class="semi-bold">rainy</span>
                            </h5>
                            <p>Weather information</p>
                            <div class="row m-t-10 timeslot">
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">13:30</p>
                                    <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">14:00</p>
                                    <canvas height="25" width="25" class="cloudy"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">14:30</p>
                                    <canvas height="25" width="25" class="rain"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">15:00</p>
                                    <canvas height="25" width="25" class="sleet"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">15:30</p>
                                    <canvas height="25" width="25" class="snow"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                                <div class="col-md-2 col-xs-3 p-t-10 text-center">
                                    <p class="small">16:00</p>
                                    <canvas height="25" width="25" class="wind"></canvas>
                                    <p class="text-danger f-w-900">30°C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-body text-center clearfix">
                    <div class="col-sm-4 p-t-35">
                        <div class="f-w-600">
                            <p class="f-s-36 m-b-0">4,845</p>
                        </div>
                        <p class="f-s-16 f-w-700 ttu">Page Views</p>
                    </div>
                    <div class="col-sm-8">
                        <button class="btn btn-outline-primary m-t-15 m-b-15">View Details</button>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <ul class="row list-unstyled text-center m-0">
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">2,075</span>
                                <p class="text-sm text-muted mar-no">Following</p>
                            </li>
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">23,000+</span>
                                <p class="text-sm text-muted mar-no">Followers</p>
                            </li>
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">4,754</span>
                                <p class="text-sm text-muted mar-no">Post</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-body text-center clearfix">
                    <div class="col-sm-4 p-t-35">
                        <canvas id="dynamic_chart" style="width: 100px;height: 50px"></canvas>
                    </div>
                    <div class="col-sm-8">
                        <button class="btn btn-outline-primary m-t-15 m-b-15">View Details</button>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <ul class="row list-unstyled text-center m-0">
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">2,075</span>
                                <p class="text-sm text-muted mar-no">Following</p>
                            </li>
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">23,000+</span>
                                <p class="text-sm text-muted mar-no">Followers</p>
                            </li>
                            <li class="col-xs-4">
                                <span class="f-s-18 f-w-700">4,754</span>
                                <p class="text-sm text-muted mar-no">Post</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="panel">
                        <div class="panel-body text-center">
                            <div class="p-t-15 p-b-15"><i
                                        class="ion ion-ios-bell-outline fa-4x"></i></div>
                            <p class="f-s-18 f-w-600 m-0">Total Sales</p>
                            <p class="text-muted">4,503</p>
                            <p class="f-s-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s</p>
                            <button class="btn btn-outline-primary btn-sm m-t-15 m-b-15">View Chart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="panel">
                        <div class="panel-body text-center">
                            <div class="p-t-15 p-b-15"><i
                                        class="ion ion-ios-bolt-outline fa-4x"></i></div>
                            <p class="f-s-18 f-w-600 m-0">Page Visits</p>
                            <p class="text-muted">6,245</p>
                            <p class="f-s-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s</p>
                            <button class="btn btn-outline-primary btn-sm m-t-15 m-b-15">View Chart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">USER TRANSACTION HISTORY</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                            <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                            <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                            <li class="close_element"><a href="javascript:void(0)"></a></li>
                        </ul>
                    </div>
                </div>
                <table class="table lg m-b-0">
                    <thead>
                    <tr>
                        <th class="w-in-10">&nbsp;</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="p-l-20">
                            <img src="assets/images/avatar/user-1.jpg" class="w-36" alt="Image">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="f-s-14 f-w-500 d-block">Andrew Heston</a>
                            <span class="f-s-11 d-block">TRANSID: 457946045</span>
                        </td>
                        <td class="f-s-12">
                            <span class="square-8 bg-success m-r-5"></span> Email verified
                        </td>
                        <td class="f-s-12">Just Now</td>
                    </tr>
                    <tr>
                        <td class="p-l-20">
                            <img src="assets/images/avatar/user-2.jpg" class="w-36" alt="Image">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="f-s-14 f-w-500 d-block">Michel Newton</a>
                            <span class="f-s-11 d-block">TRANSID: 457946045</span>
                        </td>
                        <td class="f-s-12">
                            <span class="square-8 bg-warning m-r-5"></span> Pending verification
                        </td>
                        <td class="f-s-12">May 11, 2018 8:34am</td>
                    </tr>
                    <tr>
                        <td class="p-l-20">
                            <img src="assets/images/avatar/user-3.jpg" class="w-36" alt="Image">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="f-s-14 f-w-500 d-block">Mark Ruffalo</a>
                            <span class="f-s-11 d-block">TRANSID: 457946045</span>
                        </td>
                        <td class="f-s-12">
                            <span class="square-8 bg-success m-r-5"></span> Purchased success
                        </td>
                        <td class="f-s-12">May 11, 2018 4:40pm</td>
                    </tr>
                    <tr>
                        <td class="p-l-20">
                            <img src="assets/images/avatar/user-4.jpg" class="w-36" alt="Image">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="f-s-14 f-w-500 d-block">Michel Newton</a>
                            <span class="f-s-11 d-block">TRANSID: 457946045</span>
                        </td>
                        <td class="f-s-12">
                            <span class="square-8 bg-warning m-r-5"></span> Payment on hold
                        </td>
                        <td class="f-s-12">May 11, 2018 6:45pm</td>
                    </tr>
                    <tr>
                        <td class="p-l-20">
                            <img src="assets/images/avatar/user-5.jpg" class="w-36" alt="Image">
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="f-s-14 f-w-500 d-block">Catherine Weiss</a>
                            <span class="f-s-11 d-block">TRANSID: 457946045</span>
                        </td>
                        <td class="f-s-12">
                            <span class="square-8 bg-danger m-r-5"></span> Account deactivated
                        </td>
                        <td class="f-s-12">May 11, 2018 10:30am</td>
                    </tr>
                    </tbody>
                </table>
                <div class="wid-card-footer f-s-12 p-t-12 p-b-12 bg-transparent">
                    <a href="javascript:void(0)">
                        <i class="fa fa-angle-down m-r-5"></i>View All Transaction History
                    </a>
                </div>
            </div>

            <div class="panel">
                <div class="p-20">
                    <ul class="list-unstyled base-timeline activity-timeline">
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/images/avatar/user-1.jpg" alt="">
                            </div>
                            <div class="act-time">Today</div>
                            <div class="base-timeline-info">
                                <a href="javascript:void(0)" class="text-info">John Doe </a> Returned the
                                Ethereum
                                Classic Coin.
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/images/avatar/user-3.jpg" alt="">
                            </div>
                            <div class="base-timeline-info">
                                <a href="javascript:void(0)" class="text-info">John Doe </a> Returned the
                                Ethereum
                                Classic Coin.
                            </div>
                            <small class="text-muted">
                                2 Hours ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/images/avatar/user-4.jpg" alt="">
                            </div>
                            <div class="act-time">Yesterday</div>
                            <div class="base-timeline-info">
                                <a href="javascript:void(0)" class="text-warning">Andrew</a> requested the BTC
                                Coin.
                            </div>
                            <small class="text-muted">
                                1 days ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/images/avatar/user-2.jpg" alt="">
                            </div>
                            <div class="base-timeline-info">
                                <a href="javascript:void(0)" class="text-info">John Doe </a> Returned the
                                Ethereum
                                Classic Coin.
                            </div>
                            <small class="text-muted">
                                1 days ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/images/avatar/user-5.jpg" alt="">
                            </div>
                            <div class="act-time">21 March</div>
                            <div class="base-timeline-info">
                                <a href="javascript:void(0)" class="text-warning">Andrew</a> requested the BTC
                                Coin.
                            </div>
                            <small class="text-muted">
                                2 days ago
                            </small>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="panel">
                <div class="p-20">
                    <div class="text-center f-s-22">Todo Task's</div>
                    <div class="today text-center f-s-16 m-b-20"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group input-group--style-1">
                                    <input type="text" class="form-control input-lg"
                                           placeholder="Add todo list item..." autocomplete="off">
                                    <span class="input-group-addon add-btn">
                                                    <i class="ion-plus" title="Add item"></i>
                                                </span>
                                </div>
                            </div>
                            <p class="err text-danger text-center hidden"><i class="fa fa-warning"></i> Oops!
                                Please, enter name item</p>
                            <p class="no-items text-muted text-center hidden"><i class="fa fa-ban"></i></p>
                            <ul class="todo-list">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="panel">
                        <div class="p-20">
                            <p class="f-w-600"><i class="icons icon-layers p-r-10"></i> PAGE VISITS</p>
                            <p>
                                <span class="pull-right f-w-700">944,080</span> ARNA/index.html
                            </p>
                            <p class="m-0">
                                <span class="pull-right f-w-700">1,45Gb</span> Used space
                            </p>
                        </div>
                        <div class="p-t-15 text-center">
                            <!--Placeholder-->
                            <div id="demo-sparkline-area" class="sparklines-full-content"></div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="pvr_chat_cnt in_position active">
                            <div class="app_chat_i">
                                <div class="chat-close">
                                    <i class="material-icons">close</i>
                                </div>
                                <div class="app_chat_head">
                                    <div class="pvr-user-w with-status status-green">
                                        <div class="pvr-user-avatar-w">
                                            <div class="user-avatar">
                                                <img alt="" src="assets/images/avatar/user-1.jpg">
                                            </div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">
                                                John Smith
                                            </h6>
                                            <div class="user-role">
                                                Administrator
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-messages theme_4">
                                    <div class="message">
                                        <div class="message-content">
                                            Lorem Ipsum is simply dummy.
                                        </div>
                                    </div>
                                    <div class="date-break">
                                        Mon 10:20am
                                    </div>
                                    <div class="message">
                                        <div class="message-content">
                                            Lorem Ipsum is simply dummy text of the printing.
                                        </div>
                                    </div>
                                    <div class="message self">
                                        <div class="message-content">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-controls">
                                    <input class="message-input" id="message-input"
                                           placeholder="Type your message here..." type="text">
                                    <div class="chat-extra">
                                        <a href="javascript:void(0)">
                                            <span class="extra-tooltip">Attach Document</span>
                                            <i class="material-icons">attach_file</i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <span class="extra-tooltip">Insert Photo</span>
                                            <i class="material-icons">add_a_photo</i>
                                        </a>
                                        <a href="javascript:void(0)" class="pull-right change_chat_theme">
                                            <span class="extra-tooltip">Change chat theme</span>
                                            <i class="material-icons">refresh</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel make_equal">
                        <div class="panel-heading">
                            <h6 class="panel-title">Statistics</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                                    <li class="collapse_element"><a class="up" href="javascript:void(0)"></a>
                                    </li>
                                    <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                                    <li class="close_element"><a href="javascript:void(0)"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body p-t-0">
                            <div class="pull-right">
                                <a href="#" class="btn btn-xs btn-default">Today</a>
                                <a href="#" class="btn btn-xs btn-default">Month</a>
                            </div>
                            <div class="panel-title">Last day statistics</div>
                            <small class="f-s-12 f-w-500">Dated - 14-jan-2019</small>
                            <div class="list list-item-container">
                                <div class="list-item">
                                    <h3 class="m-0 f-w-700 text-success"><span data-count="true"
                                                                               data-number="4503"
                                                                               id="tm"></span></h3>
                                    <small>Total Sales</small>
                                    <div class="pull-right f-w-600">98% <i
                                                class="ion-arrow-up-b text-success"></i>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <h3 class="m-0 f-w-700 text-warning"><span data-count="true"
                                                                               data-number="6245"
                                                                               id="ppv"></span></h3>
                                    <small>Page Visits</small>
                                    <div class="pull-right f-w-600">83% <i
                                                class="ion-arrow-down-a text-warning"></i>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <h3 class="m-0 f-w-700 text-danger"><span data-count="true"
                                                                              data-number="3547"
                                                                              id="wht"></span></h3>
                                    <small>Withholding Tax</small>
                                    <div class="pull-right f-w-600">72% <i
                                                class="ion-arrow-down-c text-danger"></i>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <h3 class="m-0 f-w-700 text-success"><span data-count="true"
                                                                               data-number="2035"
                                                                               id="tte"></span></h3>
                                    <small>Total Earnings</small>
                                    <div class="pull-right f-w-600">34% <i
                                                class="ion-arrow-up-c text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="profile-tile">
                            <a class="profile-tile-box" href="javascript:void(0)">
                                <div class="pt-avatar-w">
                                    <img alt="" src="assets/images/avatar/default-avatar.jpg">
                                </div>
                                <div class="pt-user-name">Michel</div>
                            </a>
                            <div class="profile-tile-meta">
                                <ul>
                                    <li>Last Login:<strong>Online Now</strong></li>
                                    <li>Tickets:<strong><a href="javascript:void(0)">12</a></strong></li>
                                    <li>Response Time:<strong>2 hours</strong></li>
                                </ul>
                                <div class="pt-btn">
                                    <a class="btn btn-success btn-xs" href="javascript:void(0)">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="profile-tile">
                            <a class="profile-tile-box" href="javascript:void(0)">
                                <div class="pt-avatar-w">
                                    <img alt="" src="assets/images/avatar/default-avatar.jpg">
                                </div>
                                <div class="pt-user-name">Ruffalo</div>
                            </a>
                            <div class="profile-tile-meta">
                                <ul>
                                    <li>Last Login:<strong>Online Now</strong></li>
                                    <li>Tickets:<strong><a href="javascript:void(0)">12</a></strong></li>
                                    <li>Response Time:<strong>2 hours</strong></li>
                                </ul>
                                <div class="pt-btn">
                                    <a class="btn btn-outline-success btn-xs" href="javascript:void(0)">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="profile-tile">
                            <a class="profile-tile-box" href="javascript:void(0)">
                                <div class="pt-avatar-w">
                                    <img alt="" src="assets/images/avatar/default-avatar.jpg">
                                </div>
                                <div class="pt-user-name">Andrew</div>
                            </a>
                            <div class="profile-tile-meta p-t-15 p-b-20">
                                <ul>
                                    <li>Last Login:<strong>Online Now</strong></li>
                                    <li>Tickets:<strong><a href="javascript:void(0)">12</a></strong></li>
                                    <li>Response Time:<strong>2 hours</strong></li>
                                    <li>Status:<strong>Available</strong></li>
                                    <li>Country:<strong>India</strong></li>
                                </ul>
                                <div class="pt-btn">
                                    <a class="btn btn-outline-warning btn-xs" href="javascript:void(0)">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="sm_wethear m-b-20">
                        <a href="javascript:void(0)" class="more">
                            <svg class="dots-icons">
                                <use xlink:href="assets/images/svg/sprites/icons.svg#dots-icons"></use>
                            </svg>
                        </a>
                        <div class="sm_weather_now inline-items">
                            <div class="sm_temp_sensor">64°</div>
                            <div class="max-min-temperature">
                                <span>58°</span>
                                <span>76°</span>
                            </div>
                            <svg class="olymp-weather-storm-icon large_icon">
                                <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-storm-icon"></use>
                            </svg>
                        </div>
                        <div class="sm_weather_now_dec">
                            <div class="climate">Partly Drizzling</div>
                            <span>Rain: <span>14°</span></span>
                            <span>Chance of Rain: <span>89%</span></span>
                        </div>
                        <ul class="sm_forecast">
                            <li>
                                <div class="day">sun</div>
                                <svg class="olymp-weather-sunny-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-sunny-icon"></use>
                                </svg>

                                <div class="sm_temp_day">60°</div>
                            </li>
                            <li>
                                <div class="day">mon</div>
                                <svg class="olymp-weather-partly-sunny-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use>
                                </svg>
                                <div class="sm_temp_day">58°</div>
                            </li>

                            <li>
                                <div class="day">tue</div>
                                <svg class="olymp-weather-cloudy-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-cloudy-icon"></use>
                                </svg>

                                <div class="sm_temp_day">67°</div>
                            </li>
                            <li>
                                <div class="day">wed</div>
                                <svg class="olymp-weather-rain-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-rain-icon"></use>
                                </svg>

                                <div class="sm_temp_day">70°</div>
                            </li>
                            <li>
                                <div class="day">thu</div>
                                <svg class="olymp-weather-storm-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-storm-icon"></use>
                                </svg>

                                <div class="sm_temp_day">58°</div>
                            </li>
                            <li>
                                <div class="day">fri</div>
                                <svg class="olymp-weather-snow-icon">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-snow-icon"></use>
                                </svg>

                                <div class="sm_temp_day">68°</div>
                            </li>
                            <li>
                                <div class="day">sat</div>

                                <svg class="olymp-weather-wind-icon-header">
                                    <use xlink:href="assets/images/svg/sprites/icons-weather.svg#olymp-weather-wind-icon-header"></use>
                                </svg>

                                <div class="sm_temp_day">65°</div>
                            </li>
                        </ul>
                        <div class="date-and-place">
                            <h5 class="date">Friday, June 15th</h5>
                            <h5 class="place">New York City, USA</h5>
                        </div>
                    </div>

                    <div class="sm_birthday_alert m-b-20">
                        <div class="icons-block">
                            <svg class="olymp-cupcake-icon">
                                <use xlink:href="assets/images/svg/sprites/icons.svg#olymp-cupcake-icon"></use>
                            </svg>
                            <a href="javascript:void(0)" class="more">
                                <svg class="dots-icons">
                                    <use xlink:href="assets/images/svg/sprites/icons.svg#dots-icons"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="content">
                            <div class="author-thumb">
                                <img src="assets/images/avatar/user-1.jpg" alt="author">
                            </div>
                            <span>Today is</span>
                            <a href="javascript:void(0)" class="h4 title">Andrew Heston’s
                                Birthday!</a>
                            <p>Leave her a message with your best wishes on her profile
                                page!</p>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="bg-primary text-center pvr-icon-box">
                                            <i class="icon-people text-light f-s-24"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h5 class="m-t-5 m-b-0 f-s-18">New Users</h5>
                                    <p class="m-b-0 m-t-3">114 New Users</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="bg-warning text-center pvr-icon-box">
                                            <i class="icon-basket-loaded text-light f-s-24"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h5 class="m-t-5 m-b-0 f-s-18">Order Placed</h5>
                                    <p class="m-b-0 m-t-3">574 New Order</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="bg-danger text-center pvr-icon-box">
                                            <i class="icon-handbag text-light f-s-24"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h5 class="m-t-5 m-b-0 f-s-18">Delivery </h5>
                                    <p class="m-b-0 m-t-3">489 New Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="bg-info text-center pvr-icon-box">
                                            <i class="icon-trophy text-light f-s-24"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h5 class="m-t-5 m-b-0 f-s-18">Monthly Profits</h5>
                                    <p class="m-b-0 m-t-3">$19,887 Profit
                                        <span class="float-right text-success"> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="bg-success text-center pvr-icon-box">
                                            <i class="icon-people text-light f-s-24"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h5 class="m-t-5 m-b-0 f-s-18">Returned Users</h5>
                                    <p class="m-b-0 m-t-3">114 Users</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="temp_chart">
                            <div class="card">
                                <div class="about">
                                    <h3 class="ttc">weather</h3>
                                    <p class="text-white">Temperature in °C</p>
                                </div>

                                <canvas id="temp_chart" style=""></canvas>

                                <div class="axis">
                                    <div class="tick">
                                        <span class="day-number">10</span>
                                        <span class="day-name">MON</span>
                                        <span class="value value--this">26°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">11</span>
                                        <span class="day-name">TUE</span>
                                        <span class="value value--this">14°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">12</span>
                                        <span class="day-name">WED</span>
                                        <span class="value value--this">22°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">13</span>
                                        <span class="day-name">THU</span>
                                        <span class="value value--this">12°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">14</span>
                                        <span class="day-name">FRI</span>
                                        <span class="value value--this">20°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">15</span>
                                        <span class="day-name">SAT</span>
                                        <span class="value value--this">12°C</span>
                                    </div>
                                    <div class="tick">
                                        <span class="day-number">16</span>
                                        <span class="day-name">SUN</span>
                                        <span class="value value--this">18°C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 m-b-20">
                    <div class="wid_num">
                        <div class="block">
                            <div class="number">100+</div>
                            <div class="string">Views</div>
                        </div>
                        <div class="block">
                            <div class="number">478</div>
                            <div class="string">Usages</div>
                        </div>
                        <div class="block">
                            <div class="number">6854</div>
                            <div class="string">Coffes</div>
                        </div>
                        <div class="block">
                            <div class="number">3547</div>
                            <div class="string">Persons</div>
                        </div>
                        <div class="block">
                            <div class="number">478+</div>
                            <div class="string">Request</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel">
                        <div class="btc_chart">
                            <div class="f-s-30 f-w-700">01307
                                <span class="f-s-16 m-0">BTC</span></div>
                            <p class="f-w-600 f-s-20 m-b-5">Bitcoin Earnings</p>
                            <p class="m-b-15">Lorem Ipsum is simply<br>dummy text of the.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm w-100">View <i
                                        class="fa fa-angle-right mg-l-5"></i></a>
                        </div>
                        <canvas id="btc_chart" width="100" height="60"></canvas>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel" id="graph-1-container">
                        <div class="p-20 chart-values">
                            <p class="f-w-600"><i class="icons icon-layers p-r-10"></i> TOTAL SALES</p>
                            <p>
                                <span class="pull-right total-gain"></span> Additional Data
                            </p>
                            <p>
                                <span class="pull-right f-w-700 h-value">4541</span> Bandwidth Usage
                            </p>
                            <p class="m-0">
                                <span class="pull-right percentage-value"></span> Space Consumed
                            </p>
                        </div>
                        <div class="fill">
                            <svg class="chart-line" id="chart-1" viewBox="0 0 80 40">
                                <defs>
                                    <linearGradient id="gradient-1">
                                        <stop offset="0" stop-color="#00d5bd"/>
                                        <stop offset="100" stop-color="#24c1ed"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-2">
                                        <stop offset="0" stop-color="#954ce9"/>
                                        <stop offset="0.3" stop-color="#954ce9"/>
                                        <stop offset="0.6" stop-color="#24c1ed"/>
                                        <stop offset="1" stop-color="#24c1ed"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-3" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0" stop-color="rgba(0, 213, 189, 1)" stop-opacity="0.07"/>
                                        <stop offset="0.5" stop-color="rgba(0, 213, 189, 1)"
                                              stop-opacity="0.13"/>
                                        <stop offset="1" stop-color="rgba(0, 213, 189, 1)" stop-opacity="0"/>
                                    </linearGradient>

                                    <linearGradient id="gradient-4" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0" stop-color="rgba(149, 76, 233, 1)"
                                              stop-opacity="0.07"/>
                                        <stop offset="0.5" stop-color="rgba(149, 76, 233, 1)"
                                              stop-opacity="0.13"/>
                                        <stop offset="1" stop-color="rgba(149, 76, 233, 1)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel" id="graph-2-container">
                        <div class="p-20 chart-values">
                            <p class="f-w-600"><i class="icons icon-layers p-r-10"></i> Withholding Tax</p>
                            <p>
                                <span class="pull-right total-gain"></span> Additional Data
                            </p>
                            <p>
                                <span class="pull-right f-w-700 h-value">4785</span> Bandwidth Usage
                            </p>
                            <p class="m-0">
                                <span class="pull-right percentage-value"></span> Space Consumed
                            </p>
                        </div>
                        <div class="fill">
                            <svg class="chart-line" id="chart-2" viewBox="0 0 80 40">
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel right">
                        <div class="graph m-t-10">
                            <svg viewBox="0 0 250 60" class="w-in-100" height="90">
                                <path d="M 209.328 17.34 C 221.956 17.588 235.264 32.599 250 22.328" fill="none"
                                      vector-effect="non-scaling-stroke" stroke-width="2"
                                      stroke="rgb(243,243,250)" stroke-linejoin="miter" stroke-linecap="round"
                                      stroke-miterlimit="3"></path>
                                <linearGradient id="_lgradient_1" x1="0%" y1="50%" x2="100%" y2="50%">
                                    <stop offset="0%" stop-opacity="1"
                                          style="stop-color:rgb(120,113,255);"></stop>
                                    <stop offset="100%" stop-opacity="1"
                                          style="stop-color:rgb(111,234,255);"></stop>
                                </linearGradient>
                                <path d=" M 0 43.634 C 5.934 43.634 11.318 51.209 17.462 51.342 C 33.219 51.683 30.603 59.567 39.187 59.868 C 46.963 60.141 50.44 44.192 60.537 43.77 C 69.126 43.77 72.129 52.461 79.739 52.433 C 90.904 52.433 94.93 38.455 106.648 39.78 C 129.082 42.317 124.556 27.606 139.157 27.177 C 153.758 26.747 158.235 44.485 171.96 44.725 C 196.438 45.155 189.782 17.1 208.248 17.1"
                                      fill="none" vector-effect="non-scaling-stroke" stroke-width="2"
                                      stroke="url(#_lgradient_1)" stroke-linejoin="miter" stroke-linecap="round"
                                      stroke-miterlimit="3"></path>
                                <path d="M 206.649 17.218 C 206.649 15.739 207.85 14.538 209.328 14.538 C 210.807 14.538 212.008 15.739 212.008 17.218 C 212.008 18.696 210.807 19.897 209.328 19.897 C 207.85 19.897 206.649 18.696 206.649 17.218 Z"
                                      fill="rgb(111,232,255)"></path>
                                <text transform="matrix(1,0,0,1,195,5)"
                                      style="font-weight: 700;font-size: 12px;font-style: normal;fill: #6fe8ff;stroke: none;">
                                    +74%
                                </text>
                            </svg>
                            <div class="wid_stk">
                                <div class="stock-logo paperpillar"><i
                                            class="fa fa-inverse fa-angle-double-up"></i></div>
                                <div class="stock-info">
                                    <div class="stock-name">Arna Admin</div>
                                    <div class="stock-fullname">perfectin.co</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel right">
                        <div class="graph m-t-10">
                            <svg viewBox="0 0 250 60" class="w-in-100" height="90">
                                <path d="M 209.328 17.34 C 221.956 17.588 235.264 32.599 250 22.328" fill="none"
                                      vector-effect="non-scaling-stroke" stroke-width="2"
                                      stroke="rgb(243,243,250)" stroke-linejoin="miter" stroke-linecap="round"
                                      stroke-miterlimit="3"></path>
                                <linearGradient id="_lgradient_2" x1="0%" y1="50%" x2="100%" y2="50%">
                                    <stop offset="0%" stop-opacity="1"
                                          style="stop-color:rgb(248, 135, 129);"></stop>
                                    <stop offset="100%" stop-opacity="1"
                                          style="stop-color:rgb(247, 198, 130);"></stop>
                                </linearGradient>
                                <path d=" M 0 43.634 C 5.934 43.634 11.318 51.209 17.462 51.342 C 33.219 51.683 30.603 59.567 39.187 59.868 C 46.963 60.141 50.44 44.192 60.537 43.77 C 69.126 43.77 72.129 52.461 79.739 52.433 C 90.904 52.433 94.93 38.455 106.648 39.78 C 129.082 42.317 124.556 27.606 139.157 27.177 C 153.758 26.747 158.235 44.485 171.96 44.725 C 196.438 45.155 189.782 17.1 208.248 17.1"
                                      fill="none" vector-effect="non-scaling-stroke" stroke-width="2"
                                      stroke="url(#_lgradient_2)" stroke-linejoin="miter" stroke-linecap="round"
                                      stroke-miterlimit="3"></path>
                                <path d="M 206.649 17.218 C 206.649 15.739 207.85 14.538 209.328 14.538 C 210.807 14.538 212.008 15.739 212.008 17.218 C 212.008 18.696 210.807 19.897 209.328 19.897 C 207.85 19.897 206.649 18.696 206.649 17.218 Z"
                                      fill="rgb(247, 198, 130)"></path>
                                <text transform="matrix(1,0,0,1,195,5)"
                                      style="font-weight:700;font-size:12px;font-style:normal;fill:rgb(247, 198, 130);stroke:none;">
                                    +67%
                                </text>
                            </svg>
                            <div class="wid_stk">
                                <div class="stock-logo dandruft"><i class="fa fa-inverse fa-circle-thin"></i>
                                </div>
                                <div class="stock-info">
                                    <div class="stock-name">Arna Admin</div>
                                    <div class="stock-fullname">perfectin.co</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 equal_height">
            <div class="panel p-20 make_equal">
                <div id="chartdiv_map" class="make_equal"></div>
            </div>
        </div>

        <div class="col-md-3 equal_height">
            <div class="panel p-20 make_equal">
                <div class="charjs-chart p-20">
                    <canvas height="150" id="hero-donut" width="180"></canvas>
                    <div class="charjs-chart-label">
                        <strong>
                            175
                        </strong>
                        <span>
                                    <span id="tot_vis_char" data-typeit="true">Total Visits</span>
                                </span>
                    </div>
                </div>
                <div class="table-responsive m-t-20">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="flag">
                                    <img src="assets/images/flags/us.svg" class="w-25" alt="pvr_tech_studio">
                                </div>
                            </td>
                            <td class="text-right">
                                2,420
                            </td>
                            <td class="text-right">
                                77.23%
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flag">
                                    <img src="assets/images/flags/br.svg" class="w-25" alt="pvr_tech_studio">
                                </div>
                            </td>
                            <td class="text-right">
                                4,550
                            </td>
                            <td class="text-right">
                                44.34%
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flag">
                                    <img src="assets/images/flags/ru.svg" class="w-25" alt="pvr_tech_studio">
                                </div>
                            </td>
                            <td class="text-right">
                                7,390
                            </td>
                            <td class="text-right">
                                70.43%
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flag">
                                    <img src="assets/images/flags/in.svg" class="w-25" alt="pvr_tech_studio">
                                </div>
                            </td>
                            <td class="text-right">
                                7,602
                            </td>
                            <td class="text-right">
                                80.35%
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flag">
                                    <img src="assets/images/flags/au.svg" class="w-25" alt="pvr_tech_studio">
                                </div>
                            </td>
                            <td class="text-right">
                                690
                            </td>
                            <td class="text-right">
                                7.87%
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="row m-b-20">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-separate dark text-white table-extended">
                    <thead>
                    <tr>
                        <th class="text-center">
                        </th>
                        <th>Basic Info</th>
                        <th>Company</th>
                        <th>Lead Score</th>
                        <th>Phone</th>
                        <th>Tags</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/default-avatar.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Andrew Heston
                                                </span>
                                    <span class="f-s-11">
                                                    andrew.heston@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Cool Company
                        </td>
                        <td>
                            201
                        </td>
                        <td>
                            022-1254-5215
                        </td>
                        <td>
                            <span class="badge-danger badge">test tag</span>
                            <span class="badge-purple badge">another tag</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            22-Oct-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/user-1.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Michel Newton
                                                </span>
                                    <span class="f-s-11">
                                                    michel.newton@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Company ABC
                        </td>
                        <td>
                            99
                        </td>
                        <td>
                            1254-022-5215
                        </td>
                        <td>
                            <span class="badge-warning badge">test tag</span>
                            <span class="badge-danger badge">in-active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/user-2.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Mark Ruffalo
                                                </span>
                                    <span class="f-s-11">
                                                    mark.ruffalo@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Mark
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            5215-1254-022
                        </td>
                        <td>
                            <span class="badge-warning badge">Stores</span>
                            <span class="badge-info badge">Purchase</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/user-3.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Andrew Heston
                                                </span>
                                    <span class="f-s-11">
                                                    andrew.heston@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Cool Company
                        </td>
                        <td>
                            201
                        </td>
                        <td>
                            022-1254-5215
                        </td>
                        <td>
                            <span class="badge-danger badge">test tag</span>
                            <span class="badge-purple badge">another tag</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            22-Oct-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/user-4.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Michel Newton
                                                </span>
                                    <span class="f-s-11">
                                                    michel.newton@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Company ABC
                        </td>
                        <td>
                            99
                        </td>
                        <td>
                            1254-022-5215
                        </td>
                        <td>
                            <span class="badge-warning badge">test tag</span>
                            <span class="badge-danger badge">in-active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="user_box">
                                <div class="user-with-avatar">
                                    <img alt="" src="assets/images/avatar/user-5.jpg">
                                </div>
                                <div class="user_email">
                                                <span>
                                                    Mark Ruffalo
                                                </span>
                                    <span class="f-s-11">
                                                    mark.ruffalo@gmail.com
                                                </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            Mark
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            5215-1254-022
                        </td>
                        <td>
                            <span class="badge-warning badge">Stores</span>
                            <span class="badge-info badge">Purchase</span>
                            <span class="badge-success badge">active</span>
                        </td>
                        <td>
                            05-Dec-2017
                        </td>
                        <td class="text-center">
                            <i class="material-icons align-middle">more_horiz</i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h6 class="panel-title">Quick Post</h6>
                </div>
                <div class="pvr-reply p-35">
                    <div class="reply-header">
                        <h5>
                            Quick Post to <span>Envato Market</span>
                        </h5>
                    </div>
                    <textarea cols="80" id="ckeditorEmail" name="ckeditor1"
                              rows="5"></textarea>
                    <div class="p-t-20 p-b-20">
                        <div class="pull-left">
                            <a class="btn btn-link"
                               href="javascript:void(0)"><i
                                        class="os-icon os-icon-ui-51"></i><span>Add Attachment</span></a>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary"
                               href="javascript:void(0)">Send
                                Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection