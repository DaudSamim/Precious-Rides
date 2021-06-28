@extends('layout.default')

@section('pageScript')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm1HP5G4aJACmGuZ5whoebyZnAykANsKQ&sensor=false&ver=4.4"></script>
@endsection

@section('content')
    <div class="map_height" id="google-map"></div>
@endsection