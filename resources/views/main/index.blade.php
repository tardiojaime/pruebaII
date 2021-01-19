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
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
</head>
<body>
    @section('main')
    <a href="#" class="icon_responsive w-8 h-8 text-center rounded-full bg-black px-2 py-1 text-white" id="a_responsive"><i class="fas fa-bars" id="icon_responsive"></i></a>
    <div id="menu-izquierdo"
        class="min-h-screen bg-gray-100 menu relative shadow-md bg-white rounded-tl-3xl rounded-br-3xl overflow-hidden">
        @if(Auth()->user()->avatar == NULL)
        <div class="shadow-md bg-center h-36 bg-cover"
            style="background-image:url({{asset('images/background2.jpg')}})">
            <div class="absolute mt-24">
                <p class="text-sm ml-1 font-bold text-white font-medium">{{Auth()->user()->name}}</p>
                <p class="text-sm ml-1 font-bold text-white  font-medium">{{auth()->user()->email}}</p>
            </div>
        </div>
        @else    
        <div class="shadow-md bg-center h-36 bg-cover"
            style="background-image:url({{asset('storage/'.Auth()->user()->avatar)}})">
            <div class="absolute mt-24">
                <p class="text-sm ml-1 font-bold font-medium">{{Auth()->user()->name}}</p>
                <p class="text-sm ml-1 font-bold font-medium">{{auth()->user()->email}}</p>
            </div>
        </div>
        @endif
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
            @if(Auth()->user()->rol == "administrador")
            <li class="mb-1 hover:bg-white">
                <a href="" id="btn-usuarios"
                    class="px-2 addClass border-blue-300 font-medium flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                    <i class="fas fa-users quinto"></i>
                    <span class="text-sm">Usuarios</span>
                </a>
            </li>
            @endif
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
                            <img class="h-8 w-8 rounded-full" src="{{asset('images/icono.ico')}}" alt="Workflow">
                        </div>
                        <div>
                            <a href="" class="ml-1 p-0.5 rounded-full hover:text-purple-800"><i
                                    class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="{{URL::action('UserController@visualizacion', Auth()->user()->id)}}" class="edit-user mr-3 rounded-full hover:text-blue-500"><i class="fas fa-user-cog"></i></a>
                        <a class="mr-1 rounded-full hover:text-red-500" href="{{ route('logout') }}" onclick="event.preventDefault();
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
            @if(count($Article) != 0 && count($ventas) !=0)
            <div class="flex flex-col">
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
            
            </div>
            @else
            <div class="w-full p-5 sm:p-10 md:p-15">
                <h2 class=" text-center h-8 text-2xl font-medium text-indigo-500">
                    Bienvenido
                </h2>
                <p>Inicie A Manejar el sistema</p>
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
            text: 'Ventas realizadas durante los ultimos 5 dias.'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
                @foreach($ventas as $ven)"{{$ven->fecha}}", @endforeach
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
                text: 'Unidades vendidas'
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
                @foreach($Article as $art) 
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