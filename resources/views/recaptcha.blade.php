@extends('layout.default')

@section('pageScript')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LcUpFoUAAAAAN3c1k9FZ6k_yf-R3eQSdgr8nBSA'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm1HP5G4aJACmGuZ5whoebyZnAykANsKQ&sensor=false&ver=4.4"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcUpFoUAAAAAN3c1k9FZ6k_yf-R3eQSdgr8nBSA', {action: 'action_name'})
                .then(function (token) {

                });
        });

        var latitude = 10.0586301,
            longitude = 76.6502277,
            map_zoom = 14;
        var is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
        var marker_url = (is_internetExplorer11) ? '../../assets/images/icons/google-maps/icon-location.png' : 'assets/images/icon-location.svg';
        var main_color = '#007aff',
            saturation_value = -20,
            brightness_value = 5;
        var map_options = {
            center           : new google.maps.LatLng(latitude, longitude),
            zoom             : map_zoom,
            panControl       : false,
            zoomControl      : false,
            mapTypeControl   : false,
            streetViewControl: false,
            mapTypeId        : google.maps.MapTypeId.ROADMAP,
            scrollwheel      : false
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'), map_options);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map     : map,
            visible : true,
            icon    : marker_url
        });
        function CustomZoomControl(controlDiv, map) {
            var controlUIzoomIn = document.getElementById('map-zoom-in'),
                controlUIzoomOut = document.getElementById('map-zoom-out');
            controlDiv.appendChild(controlUIzoomIn);
            controlDiv.appendChild(controlUIzoomOut);
            google.maps.event.addDomListener(controlUIzoomIn, 'click', function () {
                map.setZoom(map.getZoom() + 1)
            });
            google.maps.event.addDomListener(controlUIzoomOut, 'click', function () {
                map.setZoom(map.getZoom() - 1)
            });
        }
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new CustomZoomControl(zoomControlDiv, map);
        map.controls[ google.maps.ControlPosition.LEFT_TOP ].push(zoomControlDiv);
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 equal_height">
            <div class="section-title section-title--style-1 mb-1">
                <h3 class="section-title-inner heading-2 strong-400">
                    <span>Form with Recaptcha</span>
                </h3>
                <span class="section-title-delimiter clearfix"></span>
            </div>
            <p class="m-b-20">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s.
            </p>
            <div class="contactForm make_equal">
                <form action="sm_recaptcha.html" method="post"
                      class="contact_form">
                    <div class="cf_response"></div>
                    <div class="row m-b-16">
                        <div class="col-lg-6 sm-form-design">
                            <input type="text" name="name" id="cf_name"
                                   class="form-control"
                                   placeholder="Please enter your first name" value=""
                                   tabindex="1" maxlength="35"
                                   required>
                            <label class="control-label">FIRSTNAME</label>
                        </div>
                        <div class="col-lg-6 sm-form-design res-xs-m-t-16 res-md-m-t-16">
                            <input type="text" name="lastname" id="cf_lastname"
                                   class="form-control"
                                   placeholder="Please enter your first last name"
                                   value=""
                                   tabindex="1"
                                   maxlength="35">
                            <label class="control-label">LASTNAME</label>
                        </div>
                    </div>
                    <div class="row m-b-16">
                        <div class="col-lg-12 sm-form-design">
                            <input type="text" name="email" id="cf_email"
                                   class="form-control h5-email"
                                   placeholder="Please enter your email address"
                                   value=""
                                   tabindex="1"
                                   maxlength="35" required>
                            <label class="control-label">EMAIL</label>
                        </div>
                    </div>
                    <div class="row m-b-16">
                        <div class="col-lg-12 sm-form-design">
                            <input type="text" name="subject" id="cf_subject"
                                   class="form-control"
                                   placeholder="Enter the subject message" value=""
                                   tabindex="1" maxlength="35">
                            <label class="control-label">SUBJECT</label>
                        </div>
                    </div>
                    <div class="row m-b-16">
                        <div class="col-lg-12 sm-form-design">
                                                            <textarea name="message" id="cf_message" class="form-control" cols="30" rows="10"
                                                                      placeholder="Your message" tabindex="4"></textarea>
                            <label class="control-label">MESSAGE</label>
                        </div>
                    </div>

                    <!-- Google recaptcha required site-key -->
                    <div class="g-recaptcha"
                         data-sitekey="6LdapFoUAAAAADHuqGsrjpNxz4FvBIYj8OzBMpgf"></div>
                    <div class="row m-b-16">
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <button class="btn btn-primary" type="submit">Submit Data
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4 equal_height">
            <div id="google-map" class="make_equal">
                <!-- #map_canvas will contain the map  -->
                <div id="map_canvas" class="map-canvas" style="height: 617px;"></div>

                <!-- #map-zoom-in and #map-zoom-out will be used to create our custom buttons for zooming-in/out -->
                <div id="map-zoom-in"></div>
                <div id="map-zoom-out"></div>
            </div>
        </div>
    </div>
@endsection