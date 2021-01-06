@extends('layout.app')
@section('content')
<div id="menu-izquierdo" class="min-h-screen bg-gray-100 menu relative shadow-md bg-white rounded-tl-3xl rounded-br-3xl overflow-hidden">
    <div class="shadow-md bg-center h-36 bg-cover" style="background-image:url({{asset('images/background2.jpg')}})">
        <div class="absolute mt-24">
            <p class="text-sm font-medium">juan</p>
            <p class="text-sm  font-medium">Tardio@gmail.com</p>
        </div>
    </div>
    <ul class=" flex flex-col py-4">
        <li class="mb-1 hover:bg-white">
            <a href="#" id="btn-articulos"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm font-medium">Articulos</span>
            </a>
        </li>
        <li class="mb-1 hover:bg-white">
            <a href="#" id="btn-compras"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm font-medium">Ventas</span>
            </a>
        </li>
        <li class="mb-1 hover:bg-white">
            <a href="#" id="btn-facturas"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm font-medium">Ingresos</span>
            </a>
        </li>

        <li class="mb-1 hover:bg-white">
            <a href="" id="export-pdf"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm font-medium">Proveedores</span>
            </a>
        </li>
        <li class="mb-1 hover:bg-white">
            <a href="" id="export-exel font-medium"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm">Clientes</span>
            </a>
        </li>
        <li class="mb-1 hover:bg-white">
            <a href="" id="export-exel font-medium"
                class="flex items-center transform hover:translate-x-1 text-gray-800 hover:text-gray-500 ml-1 duration h-8">
                <i class="fas fa-home"></i>
                <span class="text-sm">Administrador</span>
            </a>
        </li>
    </ul>
    <div class="absolute bottom-0 w-full h-12 flex items-center justify-center">
        <p class="text-md font-medium text-purple-800">BETO</p>
    </div>
</div>
<div id="dos" class="derecha">
    <nav class="shadow-lg rounded-tr-3xl">
        <div class="mx-auto px-2">
            <div class="flex items-center justify-between h-10">
                <div class="flex items-center">
                    <div class="">
                        <img class="h-8 w-8 rounded-full" src="{{asset('images/bg.jpg')}}" alt="Workflow">
                    </div>
                    <div>
                        <a href="" class="ml-1 p-0.5 rounded-full hover:text-purple-800"><i class="fas fa-home"></i></a>
                    </div>
                </div>
                <div class="flex items-center">
                        <a class="mr-1 rounded-full hover:text-purple-500"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
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
<!--         @section('carga')
        <figure class="highcharts-figure pr-1">
            <div id="container"></div>
            <p class="highcharts-description border-primary">
                Articulos disponibles y los articulos mas vendidos
            </p>
        </figure>
        <figure class="highcharts-figure">
            <div id="container-3d"></div>
            <p class="highcharts-description border-primary border-primary">
                Ventas realizadas durante los ultimos dias
            </p>
        </figure>
        @show -->

    </div>
</div>

<!-- 
    </div> -->
<!-- </div> -->
<!-- Initialize Swiper -->
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
        data: [12, 25, 50, 50

        ]
    }]
});
Highcharts.chart('container', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'Productos mas Vendidos.'
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
        data: [{
            "name": 'Paracetamol Normon EFG 500mg',
            y: 10,
            z: 2
        }, {
            "name": 'Traumeel S 50 ',
            y: 25,
            z: 7
        }, {
            "name": 'Poland',
            y: "80",
            z: 5
        }, {
            "name": 'Frenadol Complex 10',
            y: 5,
            z: 5
        }, {
            "name": 'Italy',
            y: "8",
            z: 2
        }, {
            "name": 'Switzerland',
            y: "41",
            z: 21
        }, {
            "name": 'Germany',
            y: "35",
            z: 6
        }]
    }]
});
</script>
<script src="{{asset('js/cargaIndex/index.js')}}"></script>

@endsection