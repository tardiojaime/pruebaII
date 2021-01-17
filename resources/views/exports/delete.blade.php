<div class="bg-black hidden bg-opacity-50 absolute  flex inset-0 flex justify-center items-center" id="modal_delete">
    <div class="bg-white w-11/12 max-w-md py-2 px-3 rounded shadow-xl text-gray-800">
        <div class="flex justify-end items-center">
            <a href="#" class="delete_close"><i class="fas fa-times"></i></a>
        </div>
        <form action="/a" method="post" class="spacy-y-4" id="modal-form">
        @method('DELETE')
        @csrf
            <div class="mt-1 text-sm flex flex-col mb-2 px-3 py-3">
                <h4 class="text-lg text-center font-bold">Eliminar Registro</h4>
                <label class="text-medium w-full text-md mt-2 font-medium text-blue-500">
                    ID: <span id="id_delete"></span>
                </label>
                <label class="text-medium w-full text-md mt-2 font-medium text-indigo-500">
                    <span id="info_title"></span>: <span id="id_info"></span>
                </label>
                <h4 id="mensajes" class="text-sm text-center text-gray-500 font-medium"></h4>
            </div>
            <div class="mt-3 flex  justify-between space-x-3">
                <input type="submit" id="delete_data" value = "Eliminar"
                    class="py-1 px-4 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-gradient-to-r from-green-500 to-green-400">
                <a href="#"
                    class="delete_close py-1 px-4 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-gradient-to-r to-red-500 from-red-400">Cancelar</a>
            </div>
        </form>
    </div>
</div>