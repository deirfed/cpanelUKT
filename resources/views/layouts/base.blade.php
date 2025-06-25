<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title-head')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/pages/signin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/pages/dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/js/guidely/guidely.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/xterm/css/xterm.css" />

    @vite(['resources/js/app.js'])


</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/excanvas.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/signin.js') }}"></script>
    <script src="{{ asset('assets/js/base.js') }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/themes/adaptive.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://unpkg.com/xterm/lib/xterm.js"></script>

    @yield('javascript')

</body>

</html>
