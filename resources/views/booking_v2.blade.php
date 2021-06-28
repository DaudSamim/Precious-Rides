@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet"/>
    <style>
        #page-container{
            padding: 0 !important;
        }
    </style>
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB_b9s0QjHlfdYwX4ZjF71GIf7W3bUHYc&sensor=false&ver=4.4"></script>
    <script src="{{ asset('assets/js/vehiclelist_booking.js') }}"></script>
    <script src="{{ asset('assets/js/map-icons.js') }}"></script>
    <script src="{{ asset('assets/js/markerclusterer_compiled.js') }}"></script>
    <script src="{{ asset('assets/js/booking_v2.js') }}"></script>
@endsection

@section('content')
    <div class="map_height_booking" id="google-map" ></div>
@endsection