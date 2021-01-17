<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beto') }}</title>

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
    @section('main')
    <div id="menu-izquierdo"
        class="min-h-screen bg-gray-100 menu relative shadow-md bg-white rounded-tl-3xl rounded-br-3xl overflow-hidden">
        <div class="shadow-md bg-center h-36 bg-cover"
            style="background-image:url({{asset('images/background2.jpg')}})">
            <div class="absolute mt-24">
                <p class="text-sm font-medium">juan</p>
                <p class="text-sm  font-medium">Tardio@gmail.com</p>
            </div>
        </div>
        <ul class=" flex flex-col py-4">
            <li class="mb-1 hover:bg-white">
                <a href="#" id="btn-articulos"
                    class="px-2 addClass border-red-300 flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-box-open primero"></i>
                    <span class="text-sm font-medium">Articulos</span>
                </a>
            </li>
            <li class="mb-1 hover:bg-white">
                <a href="#" id="btn-ventas"
                    class="px-2 addClass border-yellow-300 flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-cart-plus segundo"></i>
                    <span class="text-sm font-medium">Ventas</span>
                </a>
            </li>
            <li class="mb-1 hover:bg-white">
                <a href="#" id="btn-ingresos"
                    class="px-2 addClass border-green-200 flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-dolly tercero"></i>
                    <span class="text-sm font-medium">Ingresos</span>
                </a>
            </li>

            <li class="mb-1 hover:bg-white">
                <a href="" id="btn-proveedores"
                    class="px-2 addClass border-green-800 flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-truck cuarto"></i>
                    <span class="text-sm font-medium">Proveedores</span>
                </a>
            </li>
            <li class="mb-1 hover:bg-white">
                <a href="" id="btn-usuarios"
                    class="px-2 addClass border-blue-300 font-medium flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-users quinto"></i>
                    <span class="text-sm">Usuarios</span>
                </a>
            </li>
            <li class="mb-1 hover:bg-white">
                <a href="" id="btn-estadistica"
                    class="px-2 addClass border-blue-800 flex font-medium items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-chart-bar sexto"></i>
                    <span class="text-sm">Estadistica</span>
                </a>
            </li>
            <li class="mb-1 hover:bg-white">
                <a href="" id="btn-excel"
                    class="px-2 addClass border-green-500 flex items-center font-medium transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-file-excel septimo"></i>
                    <span class="text-sm">Excel</span>
                </a>
            </li>
        </ul>
        <div class="absolute bottom-0 w-full h-12 flex items-center justify-center">
            <p class="text-md font-medium text-purple-800">BETO</p>
        </div>
    </div>
    @show
    <div id="dos" class="derecha max-h-screen overflow-auto">
        <nav class="shadow-lg rounded-tr-3xl">
            <div class="mx-auto px-2">
                <div class="flex items-center justify-between h-10">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-8 w-8 rounded-full" src="{{asset('images/bg.jpg')}}" alt="Workflow">
                        </div>
                        <div>
                            <a href="" class="ml-1 p-0.5 rounded-full hover:text-purple-800"><i
                                    class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a class="mr-1 rounded-full hover:text-purple-500" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="px-2 mx-auto container" id="contenidos">
            @if(count($articulo) != 0 && count($ventas) !=0)
            <figure class="highcharts-figure pr-1">
                <div id="container"></div>
                <p class="highcharts-description border-primary">
                    Articulos mas Vendidos
                </p>
            </figure>

            </figure>
            <figure class="highcharts-figure">
                <div id="container-3d"></div>
                <p class="highcharts-description border-primary border-primary">
                    Ventas realizadas durante los ultimos dias
                </p>
            </figure>
            @else
            <div class="w-full p-5 sm:p-10 md:p-15">
                <h2 class=" text-center h-8 text-2xl font-medium text-indigo-500">
                    Bienvenido
                </h2>
                <div class="grid grid-cols-2 gap-8 mb-5">
                    <div
                        class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl">
                        <i class="fas fa-coins text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                        class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>
                    <div
                        class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl">
                        <i class="fas fa-coins text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                         class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>
                    <div
                        class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl">
                        <i class="fas fa-hand-holding-usd text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>
                    <div
                        class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl ">
                        <i class="fas fa-hand-holding-usd text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                         class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>
                    <div
                        class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl ">
                        <i class="fas fa-pepper-hot text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>
                    <div
                        class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl">
                        <i class="fas fa-user-tie text-3xl mx-3"></i>
                        <a href="#" id="create-p"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
                    </div>

                </div>
            </div>
            @endif
        </div>
    </div>
    @include('exports.delete')
    @include('estadistica.excel')

    <script>
    /* graficas */
    Highcharts.chart('container-3d', {
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Informe de Ventas'
        },
        subtitle: {
            text: 'Ventas realizadas durante los ultimos dias.'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [

            ],
            labels: {
                skew3d: true,
                style: {
                    fontSize: '16px'
                }
            }
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Ventas',
            data: [@foreach($ventas as $ven){{$ven->cantidad}}, @endforeach]
        }]
    });
    Highcharts.chart('container', {
        chart: {
            type: 'variablepie'
        },
        title: {
            text: 'Articulos mas Vendidos.'
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Vendidos: <b>{point.y}</b><br/>' +
                'Disponibles: <b>{point.z}</b><br/>'
        },
        series: [{
            minPointSize: 10,
            innerSize: '20%',
            zMin: 0,
            name: 'countries',
            data: [
                @foreach($articulo as $art) 
                {
                    "name": '{{$art->nombre}}',
                    y: {{$art->cantidad}},
                    z: {{$art->disponibles}}
                },
                @endforeach
            ]
        }]
    });
    </script>
    <!-- <script src="{{asset('js/cargaIndex/index.js')}}"></script> -->
    @show
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/cargaIndex/index.js')}}"></script>
    @yield('scripts')
</body>

</html>