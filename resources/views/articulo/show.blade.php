<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Informacion del Articulo
    </h2>
    <div class="space-y-2 mt-3">
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    id
                </label>
                <input type="text" name="nombre" id="nombre"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$datos->id}}" disabled>
            </div>
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$datos->nombre}}" disabled>
            </div>
            <div>
                <label for="descripcion" class="text-sm font-medium text-indigo-500">
                    Descripcion
                </label>
                <input type="text" name="descripcion" id="descripcion"
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$datos->descripcion}}" disabled>
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Precio
                </label>
                <input type="number" name="precio" id="precio" disabled
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$datos->precio}}"
                    >
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Fecha de creacion
                </label>
                <input type="text" name="" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$datos->fecha}}" disabled
                    >
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Creado por:
                </label>
                <input type="text" name="" id=""
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$datos->usuario}}"
                    disabled>
            </div>
        </div>
        <div class="flex justify-between">
            <a href="{{URL::action('ArticuloController@edit', $datos->id)}}" class="edit-article py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800 ">Editar</a>
            <a href="#" 
                class="cancelar_a py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </div>
</div>
<script src="{{asset('js/articulo/index.js')}}"></script>