<div class="flex flex-col mt-5">
    <div class="flex justify-between px-8">
        <h2 class="text-2xl font-medium text-indigo-800 hover:text-indigo-500">Detalle de la Venta.</h2>
    </div>
    <div class="grid grid-cols-2 gap-4 border rounded-md shadow-xl px-3 py-3">
        <div>
            <label class="text-sm font-medium text-indigo-500">Id venta</label>
            <input type="text" value="{{$venta->id}}" disabled
                class="w-full py-1  px-2 border border-gray-200 rounded-bl-lg rounded-tr-lg">
        </div>
        <div>
            <label class="text-sm font-medium text-indigo-500">Precio</label>
            <input type="text" value="{{$venta->precio}}" disabled
                class="w-full py-1  px-2 border border-gray-200 rounded-bl-lg rounded-tr-lg">
        </div>
        <div>
            <label class="text-sm font-medium text-indigo-500">Fecha</label>
            <input type="text" value="{{$venta->fecha}}" disabled
                class="w-full py-1  px-2 border border-gray-200 rounded-bl-lg rounded-tr-lg">
        </div>
        <div>
            <label class="text-sm font-medium text-indigo-500">Vendedor</label>
            <input type="text" value="{{$venta->usuario}}" disabled
                class="w-full py-1  px-2 border border-gray-200 rounded-bl-lg rounded-tr-lg ">
        </div>
    </div>
    <h3 class="text-2xl font-medium text-green-500 hover:text-green-800">Articulos</h3>
    <div class="overflow-x-auto">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full shadow-md divide-y divide-indigo-500" id="table-principal">
                    <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Id </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Precio </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Cantidad </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Articulo </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-indigo-500">
                        @foreach($detalle as $detalleV)
                        <tr>
                            <td class="px-6 py-2  flex items-center">
                                {{$detalleV->id}}
                            </td>
                            <td class="px-6 py-2">
                                {{$detalleV->precio}}
                            </td>
                            <td class="px-6 py-2  text-sm text-gray-900">
                                {{$detalleV->cantidad}}
                            </td>
                            <td class="px-6 py-2">
                                {{$detalleV->nombre}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
        <div class="flex justify-between px-8">
            <a href="#" sitio="/Ventas"
                class="vi-index py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-gray-800 bg-gradient-to-r from-green-500 to-green-200 hover:text-white">Ventas</a>
        </div>    
</div>
<script src="{{asset('js/exports/ventas.js')}}"></script>