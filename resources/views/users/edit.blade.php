@if(Auth()->user()->rol == "administrador")
<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-2xl font-medium text-indigo-500">
        Actualizar Usuario
    </h2>
    <form action="/Usuarios/{{$user->id}}" method="POST" enctype="multipart/form-data" class="space-y-2 mt-3" id="articulo-form">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div>
                <label for="nombre" class="text-sm font-medium text-indigo-500">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$user->name}}">
            </div>
            <div>
                <label for="email" class="text-sm font-medium text-indigo-500">
                    Email
                </label>
                <input type="email" name="email" id="email"
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    value="{{$user->email}}">
            </div>
            <div>
                <label for="avatar" class="text-sm font-medium text-indigo-500">
                    Avatar
                </label>
                <input type="file" name="avatar" id="avatar"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="rol" class="text-sm font-medium text-indigo-500">
                    Rol
                </label>
                <select name="rol" id="rol"
                    class="w-full py-1 px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"">
                    @if($user->rol == " usuario") <option select value=" usuario">Usuario</option>
                    <option value="administrador">Administrador</option>
                    @else
                    <option select value=" usuario">Usuario</option>
                    <option value="administrador">Administrador</option>
                    @endif
                </select>
            </div>
            <div>
                <label for="telefono" class="text-sm font-medium text-indigo-500">
                    Telefono
                </label>
                <input type="number" name="telefono" id="telefono" value="{{$user->telefono}}"
                    class="w-full py-1  px-2 border border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
        </div>
        <div class="flex justify-between">
            <input type="submit" value="Editar" id="user-update"
                class="py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-indigo-600 hover:bg-indigo-800">
            <a href="#"
                class="cancelar_u py-1 px-8 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-red-600 hover:bg-red-800 ">Volver</a>
        </div>
    </form>
</div>
<script src="{{asset('js/index/users.js')}}"></script>
@else
<h1>Usuario no autorizado</h1>
@endif