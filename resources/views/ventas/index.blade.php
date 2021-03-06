<div class="flex flex-col mt-5">
    <div class="flex justify-between px-8">
        <h2 class="text-2xl font-medium text-indigo-800 hover:text-indigo-500">Registro de Ventas</h2>
        <a href="#" id="create-v"
            class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
    </div>
    <div class="overflow-x-auto ">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-indigo-500" id="table-principal">
                    <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Id </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Precio </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Fecha </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Vendedor </th>
                            <th scope="col" class="relative px-6 py-3"> <span class="sr-only">Opciones</span> </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-indigo-500">
                        @foreach($venta as $ventas)
                        <tr id="{{$ventas->id}}">
                            <td class="px-6 py-1 ">
                                {{$ventas->id}}
                            </td>
                            <td class="px-6 py-1">
                                {{$ventas->precio}}
                            </td>
                            <td class="px-6 py-1">
                                {{$ventas->fecha}}
                            </td>
                            <td class="px-6 py-1">
                                {{$ventas->usuario}}
                            </td>
                            <td class="pr-2 py-2">
                                <div class="w-full flex justify-center justify-between">
                                    <a href="{{URL::action('VentasController@show', $ventas->id)}}"
                                        class="btn-enlaces view-venta">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" ids="{{$ventas->id}}" precio="{{$ventas->precio}}" class="btn-enlaces delete_venta">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    <a href="{{URL::action('HomeController@PdfVentas', $ventas->id)}}"  class="btn-enlaces">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $("#table-principal").DataTable();
</script>
<script src="{{asset('js/exports/ventas.js')}}"></script>