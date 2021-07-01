<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>PRECIOUS RIDE</title>

    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#4076e0">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4076e0">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4076e0">

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/essential.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- BEGIN END BASE CSS STYLE -->

    @yield('pageStyle')
    <script>
        var plugin_path = '{{ asset("assets/plugins") }}/';
        var image_path = '{{ asset("assets") }}/';
    </script>
</head>

<body class="sidebar_menu top_nav_fixed">

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>
<!-- END PAGE-LOADER -->

@include('layout.sidebar')

<!-- BEGIN HEADER -->
<div id="header">
    @include('layout.header')
</div>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTENT -->
<div class="page-container @yield('cssClass')" id="page-container">
    <!-- BEGIN MAIN CONTENT -->
    <div class="main_content">
        <!-- BEGIN WRAPPER -->
        <div class="content-wrapper">
            <?php
            if(request()->segment(2) != 'booking_v2'){
            ?>
                @include('layout.pageheader')
            <?php
            }
            ?>

            @yield('content')
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END PAGE CONTENT -->

@include('layout.search')

<?php
if(request()->segment(2) != 'booking_v2'){
?>
@include('layout.footer')
<?php
}
?>

@include('layout.officesidebar')

@include('layout.login')

@include('layout.themepanel')

<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.slimscroll.min/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- END BASE JS -->

@yield('pageScript')

</body>
</html>
