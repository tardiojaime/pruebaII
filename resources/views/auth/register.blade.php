<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beto') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <style>
    .formulario {
        width: 50%;
        background-color: rgba(255, 255, 255, 0.5);

    }

    @media(max-width:900px) {
        .formulario {
            width: 70%;
        }
    }

    @media(max-width:500px) {
        .formulario {
            width: 90%;
        }
    }
    </style>
</head>
<body>
    
    <div class="w-full min-h-screen bg-gradient-to-r from-pink-200 to-yellow-200 overflow-hidden flex items-center justify-center">
        <form method="POST" action="{{ route('register') }}" class=" px-4 py-4 formulario space-y-2 mt-3">
            @csrf
            <h2 class=" text-center h-8 text-2xl font-medium text-indigo-500">
                Registrarme
            </h2>
            <div class="mb-5">
                <div>
                    <label for="nombre" class="text-sm font-medium text-indigo-500">
                        Nombre
                    </label>
                    <input type="text" name="nombre" id="nombre"
                        class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Nombre">
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-indigo-500">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                        class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="email">
                </div>
                <div>
                    <label for="password" class="text-sm font-medium text-indigo-500">
                        Contraseña
                    </label>
                    <input type="text" name="password" id="password"
                        class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="telefono" class="text-sm font-medium text-indigo-500">
                        Telefono
                    </label>
                    <input type="number" name="telefono" id="telefono"
                        class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit"
                        class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-indigo-600 hover:bg-indigo-800">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>