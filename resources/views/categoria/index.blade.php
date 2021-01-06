<div class="flex flex-col mt-5">
    <div class="flex justify-between px-8">
    <h2 class="text-sm font-medium text-indigo-800 hover:text-indigo-500">Articulos</h2>
    <a href="#" id="create-a" class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800">Agregar</a>
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
              <tr>
                <td class="px-6 py-2  flex items-center">
                  1524555
                </td>
                <td class="px-6 py-2">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                        alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Leche</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-2  text-sm text-gray-900">
                  Lactosa
                </td>
                <td class="px-6 py-2">
                    j255
                </td>
                <td class="px-6 py-2 options"> 
                <a href="#" class="btn-opciones"><i class="fas fa-plus"></i></a>
                    <div class="mas-opciones">
                        <li>
                            <a href=""
                                class="btn-enlaces view-user">
                                <i class="fas fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" page="1"
                                class="btn-enlaces edit-user">
                                <i class="fas fa-pen-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                            class="btn-enlaces page delete-user">                            
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </li>
                    </div>
                </td>
              </tr> <!-- More rows... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('js/.index.js')}}"></script>
  <script src="{{asset('js/articulo/index.js')}}"></script>