@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/horizontal_timeline/timeline.css') }}" rel="stylesheet"/>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/horizontal_timeline/timeline.js') }}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Timeline</h6>
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
                        <div class="icon ion-ios-game-controller-a-outline"></div>
                    </div>
                    <div class="sm-info-text">
                        <h5 class="sm-inner-header">Horizontal Timeline</h5>
                        <div class="sm-inner-desc">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s.
                        </div>
                    </div>
                </div>
            </div>

            <div class="cd-horizontal-timeline">
                <div class="timeline">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li><a href="javascript:void(0)"
                                       data-date="16/01/2015" class="selected">01
                                        May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="28/02/2015">02 May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="20/04/2015">10 May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="20/05/2015">21 May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="09/07/2015">26 May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="30/08/2015">30 May</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="30/09/2015">05 Jun</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="01/11/2015">08 Jun</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="10/12/2015">12 Jun</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="19/01/2016">24 Jun</a></li>
                                <li><a href="javascript:void(0)"
                                       data-date="03/03/2016">29 Jun</a></li>
                            </ol>
                            <span class="filling-line"
                                  aria-hidden="true"></span>
                        </div>
                    </div>
                    <ul class="cd-timeline-navigation">
                        <li><a href="javascript:void(0)" class="prev inactive">Prev</a>
                        </li>
                        <li><a href="javascript:void(0)" class="next">Next</a>
                        </li>
                    </ul>
                </div>
                <div class="events-content">
                    <ol>
                        <li class="selected" data-date="16/01/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 01st, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="28/02/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 02nd, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="20/04/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 10th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="20/05/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 21th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="09/07/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 26th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="30/08/2015">
                            <h3 class="text-muted m-b-16">
                                <em>May 30th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="30/09/2015">
                            <h3 class="text-muted m-b-16">
                                <em>June 05th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="01/11/2015">
                            <h3 class="text-muted m-b-16">
                                <em>June 08th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="10/12/2015">
                            <h3 class="text-muted m-b-16">
                                <em>June 12th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="19/01/2016">
                            <h3 class="text-muted m-b-16">
                                <em>June 24th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                        <li data-date="03/03/2016">
                            <h3 class="text-muted m-b-16">
                                <em>June 29th, 2018</em>
                            </h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                            <p class="lead m-t-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum
                                praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur
                                aspernatur at, eaque hic repellendus sit dicta
                                consequatur
                                quae, ut harum ipsam molestias maxime non nisi
                                reiciendis
                                eligendi! Doloremque quia pariatur harum ea amet
                                quibusdam
                                quisquam, quae, temporibus dolores porro
                                doloribus.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection