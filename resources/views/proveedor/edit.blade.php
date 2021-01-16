<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-2xl font-medium text-indigo-500">
        Actualizar Proveedor
    </h2>
    <form action="/Proveedores/{{$proveedor->id}}" method="POST"  class="space-y-2 mt-3">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value = "{{$proveedor->nombre}}">
            </div>
            <div>
                <label for="email" class="text-sm font-medium text-indigo-500">
                    Email
                </label>
                <input type="email" name="email" id="email"
                class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value="{{$proveedor->email}}">
            </div>
            <div>
                <label for="telefono" class="text-sm font-medium text-indigo-500">
                    Telefono
                </label>
                <input type="number" name="telefono" id="telefono"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value="{{$proveedor->telefono}}">
            </div>
            <div>
                <label for="direcion" class="text-sm font-medium text-indigo-500">
                    Direccion
                </label>
                <input type="text" name="direccion" id="direccion"
                class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                value="{{$proveedor->direccion}}">
                <input type="hidden" name="usuario" value="en seccion">
            </div>
        </div>
        <div class="flex justify-between">
            <input type="submit" value="Guardar" id="provee-update" class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-indigo-600 hover:bg-indigo-800">
            <a href="#" class="cancelar_p py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </form>
</div>
<script src="{{asset('js/index/proveedor.js')}}"></script>