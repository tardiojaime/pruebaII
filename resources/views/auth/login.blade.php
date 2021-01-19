<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'login') }}</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <style>
    .fondo {
        background-color: rgba(255, 255, 255, 0.5);
        
    }

    @media(max-width:530px) {
        .max-w-lg.shadow-2xl.mx-auto.rounded-lg.fondo {
            width: 90%;
        }
    }
    </style>
</head>

<body>
    <div class="min-h-screen w-full bg-center bg-cover flex items-center justify-center"
        style="background-image:url({{asset('images/loginbg.jpg')}})">
        <div class="container mx-auto py-2 login_init">
            <div class="max-w-lg shadow-2xl mx-auto rounded-lg fondo">
                <form action="{{route('login')}}" method="POST" class="space-y-2 w-full p-10" >
                    <h3 class="text-3xl font-medium text-indigo-800 text-center block font bold">
                        Iniciar session
                    </h3>
                    @csrf
                    <div>
                        <label for="email" class="text-sm font-medium text-indigo-500">{{__('Email')}}</label>
                        <input type="email" name="email" id="email"
                            class="w-full py-0.5  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{old('email')}}" required autocomplete="email" autofocus>
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-indigo-500">{{__('Contraseña')}}</label>
                        <input type="password" name="password" id="password"
                            class="w-full py-0.5  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>
                    <div>
                        @if(count($errors)>0)
                        <span class="text-sm font-bold font-medium text-red-500">
                            Datos incorrectos..?
                        </span>
                        @endif
                    </div>
                    <div class="flex justify-end">
                        <a href="#" id="abrir_form"
                            class="text-sm font-medium text-indigo-500 hover:text-indigo-800">Restablecer
                            contraseña</a>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Agregar"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">
                    </div>
                </form>
            </div>
        </div>
        <div class="container mx-auto py-2 absolute hidden fase_uno">
            <div class="max-w-lg shadow-2xl mx-auto rounded-lg fondo">
                <form action="{{route('cambio')}}" method="POST" class="space-y-2 w-full p-10" id ="cambiar_ruta">
                    <h3 class="text-3xl font-medium text-indigo-800 text-center block font bold">
                        Restablecer Contraseña
                    </h3>
                    @csrf
                    <div class="ocultar-campos">
                        <label for="email" class="text-sm font-medium text-indigo-500">{{__('Email')}}</label>
                        <input type="email" name="email" id="email"
                            class="w-full py-0.5  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            value="{{old('email')}}" required autocomplete="email" autofocus>
                    </div>
                    <div class="ocultar-campos">
                        <label for="telefono" class="text-sm font-medium text-indigo-500">
                            Telefono
                        </label>
                        <input type="number" name="telefono" id="telefono"
                            class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="mostrar-campos hidden">
                        <label for="password" class="text-sm font-medium text-indigo-500">
                            Nueva Contraseña
                        </label>
                        <input type="text" name="password" id="password"
                            class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            <input type="hidden" name="codigo" id="codigo">
                            <input type="hidden" name="idusuario" id="token">
                            <div class="text-center">
                        <input type="submit" value="Cambiar"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">
                    </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Continuar" id="verificar_telefono"
                            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">
                    </div>
                    <span class="text-sm font-bold font-medium text-red-500 hidden errors">
                        Datos incorrectos..?
                    </span>
                </form>
            </div>
        </div>
    </div>
   
    <script>
       $("#verificar_telefono").on('click', function(evt) {
            evt.preventDefault();
            let form = $(this).parents('form');
            let action = form.attr('action');
            $.post(action, form.serialize(), (info) => {
                if (info.sms == true) {
                    $("#cambiar_ruta").attr('action', '/verificado/ingresar');
                    $("#token").val(info.codigo);
                    $("#codigo").val(info.id);
                    $(".ocultar-campos").addClass('hidden');
                    $(".mostrar-campos").removeClass('hidden');
                    $(".errors").addClass('hidden');
                    $(this).remove();
                } else {
                    $(".errors").removeClass('hidden');
                }
            }).fail(() => {
                alert('Se produjo un error');
            });
        });
    $("#abrir_form").on('click', function(evt) {
        evt.preventDefault();
        $(".login_init").addClass('hidden');
        $(".fase_uno").removeClass("hidden");

    });
    </script>
</body>

</html>