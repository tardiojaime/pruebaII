@if(Auth()->user()->rol == "administrador")
<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Informacion del Usuario
    </h2>
    <div class="space-y-2 mt-3">
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    id
                </label>
                <input type="text" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$user->id}}" disabled>
            </div>
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$user->name}}" disabled>
            </div>
            <div>
                <label for="descripcion" class="text-sm font-medium text-indigo-500">
                    Email
                </label>
                <input type="text" 
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$user->email}}" disabled>
            </div>
            <div>
                <label for="" class="text-sm font-medium text-indigo-500">
                    Telefono
                </label>
                <input type="number" name="precio" id="precio"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$user->telefono}}"
                    >
            </div>
            <div>
                <label for="imagen" class="text-sm font-medium text-indigo-500">
                    Avatar
                </label>
                <img src="{{asset('storage/'.$user->avatar)}}" class="w-40 h-40 ">
            </div>
            <div>
                <label for="precio" class="text-sm font-medium text-indigo-500">
                    Rol
                </label>
                <input type="text" name="" 
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value = "{{$user->rol}}" disabled
                    >
            </div>
        </div>
        <div class="flex justify-between">
            <a href="{{URL::action('UserController@edit', $user->id)}}" 
                class="edit-user py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800 ">Editar</a>
            <a href="#"
                class="cancelar_u py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </div>
</div>
<script src="{{asset('js/index/users.js')}}"></script>
@else
<h1>Usuario no Autorizado</h1>
@endif
