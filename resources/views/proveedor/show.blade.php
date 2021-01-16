<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Informacion del Proveedor
    </h2>
    <div class="space-y-2 mt-3">
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    id
                </label>
                <input type="text" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$proveedor->id}}" disabled>
            </div>
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$proveedor->nombre}}" disabled>
            </div>
            <div>
                <label for="descripcion" class="text-sm font-medium text-indigo-500">
                    Telefono
                </label>
                <input type="text" 
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$proveedor->telefono}}" disabled>
            </div>
            <div>
                <label for="" class="text-sm font-medium text-indigo-500">
                    Direccion
                </label>
                <input type="text"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$proveedor->direccion}}"
                    disabled>
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Creado.
                </label>
                <input type="text" name="" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$proveedor->fecha}}" disabled
                    >
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Creado por.
                </label>
                <input type="text" name="" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$proveedor->usuario}}" disabled
                    >
            </div>
        </div>
        <div class="flex justify-between">
            <a href="{{URL::action('ProveedorController@edit', $proveedor->id)}}" 
                class="edit-provee py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800 ">Actualizar</a>
            <a href="#"
                class="cancelar_p py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </div>
</div>
<script src="{{asset('js/index/proveedor.js')}}"></script>