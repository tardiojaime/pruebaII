<div class="flex flex-col mt-5">
    <div class="flex justify-between px-8">
        <h2 class="text-sm font-medium text-indigo-800 hover:text-indigo-500">Articulos</h2>
        <a href="#" id="create-a"
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
                                Nombre </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Descripcion </th>
                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                Precio </th>
                            <th scope="col" class="relative px-6 py-3"> <span class="sr-only">Opciones</span> </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-indigo-500">
                        @foreach($articulos as $art)
                        <tr>
                            <td class="px-6 py-2  flex items-center">
                                {{$art->id}}
                            </td>
                            <td class="px-6 py-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{asset('storage/'.$art->imagen)}}"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$art->nombre}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2  text-sm text-gray-900">
                                {{$art->descripcion}}
                            </td>
                            <td class="px-6 py-2">
                                {{$art->precio}}
                            </td>
                            <td class="pr-2 py-2">
                                <div class="w-full flex justify-center justify-between">
                                    <a href="" class="btn-enlaces view-user">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" page="1" class="btn-enlaces edit-user">
                                        <i class="fas fa-pen-alt"></i>
                                    </a>
                                    <a href="#" class="btn-enlaces page delete-user">
                                        <i class="far fa-trash-alt"></i>
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
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/articulo/index.js')}}"></script>