<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">

    <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/highcharts.js')}}"></script>
    <!-- scripts para la grafica circular -->
    <script src="{{asset('js/variable-pie.js')}}"></script>
    <script src="{{asset('js/export-data.js')}}"></script>
    
    <script src="{{asset('js/exports/Alert.js')}}"></script>
    <script src="{{asset('js/exports/Load.js')}}"></script>
    <!-- script para el grafico de columnas -->
    <script src="{{asset('js/highcharts-3d.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/grafic.css')}}">
    
    <script src="{{asset('js/datatables/jquery.dataTables.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>

</body>

</html>