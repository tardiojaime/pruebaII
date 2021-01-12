@extends('main.index')
@section('content')
@parent
@endsection
@section('carga')
<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Editar Articulo
    </h2>
    <form action="/Articulos/{{$datos->id}}" method="POST" enctype="multipart/form-data" class="space-y-2 mt-3">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value="{{$datos->nombre}}">
            </div>
            <div>
                <label for="descripcion" class="text-sm font-medium text-indigo-500">
                    Descripcion
                </label>
                <input type="text" name="descripcion" id="descripcion"
                class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value="{{$datos->descripcion}}">
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Precio
                </label>
                <input type="number" name="precio" value="{{$datos->precio}}"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>
            <div>
                <label for="imagen" class="text-sm font-medium text-indigo-500">
                    Imagen
                </label>
                <input type="file" name="imagen" id="imagen"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>
        </div>
        <div class="flex justify-between">
            <input type="submit" value="Agregar" class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-indigo-600 hover:bg-indigo-800">
            <a href="{{route('articulo')}}" value="Cancelar" class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </form>
</div>
@endsection