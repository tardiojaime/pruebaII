<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Nuevo Venta
    </h2>
    <form action="/Ventas" method="POST" class="space-y-2 mt-3">
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="usuario" class="text-sm font-medium text-indigo-500">
                    Descripcion
                </label>

                <select name="usuario" id=""
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"">
                    @foreach($usuario as $usu)
                    <option value=" {{$usu->id}}">{{$usu->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="fecha" class="text-sm font-medium text-indigo-500">
                    Fecha
                </label>
                <input type="text" name="fecha" id="fecha" disabled
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 border border-green-600 rounded-md px-5 py-5">
            <div>
                <label for="articulo" class="text-sm font-medium text-indigo-500">
                    Articulo
                </label>

                <select name="" id="articulo"
                    class="w-full  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"">
                    <option value="">Articulo</option> 
                    @foreach($articulo as $art)
                     <option value="
                    {{$art->id}}_{{$art->nombre}}_{{$art->precio}}_{{$art->cantidad}}">{{$art->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Precio
                </label>
                <p id="precio"
                    class="w-full px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    0.0
                </p>
            </div>
            <div>
                <label class="text-sm font-medium text-indigo-500">
                    Disponible
                </label>
                <p id="disponible"
                    class="w-full px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    0.0
                </p>
            </div>
            <div>
                <label for="cantidad" class="text-sm font-medium text-indigo-500">
                    Cantidad
                </label>
                <input type="number" name="" id="cantidad"
                    class="w-full px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div></div>
            <div class="flex w-full justify-end items-center">
                <a href="#" id="AgregarV"
                    class="hidden py-1 px-2 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800 ">Agregar</a>
            </div>
        </div>
        <div class="overflow-x-auto hidden" id="contenedor_table">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-indigo-500" id="tabla_add">
                        <thead class="bg-gray-100">
                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Articulo </th>
                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Precio </th>
                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Cantidad </th>
                            <th class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                total </th>
                            <th class="relative px-6 py-3">
                                 <span class="sr-only">Opciones</span>
                            </th>
                        </thead>
                        <tbody class="bg-white divide-y divide-indigo-500">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><input type="hidden" name="totalv" id="precio_total" value="0"><span
                                        id="span_precio">0.0</span>Bs.</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


        <div class="flex justify-between">
            <input type="submit" value="Agregar" id="enviar-venta"
                class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-indigo-600 hover:bg-indigo-800">
            <a href="{{route('articulo')}}"
                class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </form>
</div>
<script src="{{asset('js/exports/ventas.js')}}"></script>
