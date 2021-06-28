@extends('layout.default')

@section('pageStyle')
    <link href="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
@endsection

@section('content')
    <div id="world-map" class="map_height"></div>
@endsection