@extends('layout.app')

@section('content')
<div class="min-h-screen w-full bg-center bg-cover flex items-center justify-center"
    style="background-image:url({{asset('images/index1.jpg')}})">
    <div class="container mx-auto">
        <div class="max-w-lg shadow-2xl mx-auto rounded-lg ">
            <h3 class="text-3xl font-medium text-indigo-600 text-center block font bold">
                Iniciar session
            </h3>
            <form action="{{route('login')}}" method="POST" class="space-y-2 w-full p-10">
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
                    <a href="" class="text-sm font-medium text-indigo-500 hover:text-indigo-800">Restablecer
                        contraseña</a>
                </div>
                <div class="text-center">
                    <input type="submit" value="Agregar"
                        class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection