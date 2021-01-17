<div class="bg-black bg-opacity-50 absolute hidden flex inset-0 flex justify-center items-center" id="modals">
    <div class="bg-white w-11/12 max-w-md py-2 px-3 rounded shadow-xl text-gray-800">
        <div class="flex justify-between items-center">
            <h4 class="text-lg text-center text-indigo-500 font-bold">Exportar Datos</h4>
            <a href="#" id="cerrar_modal"><i class="fas fa-times"></i></a>
        </div>
        <div class="mt-2 text-sm flex flex-col mb-2 px-3 py-3">
            <label for="tabla_seleccionada" class="text-medium font-medium text-indigo-500">Exportar Coleccion</label>
            <select name="tabla_seleccionada" id="tabla_seleccionada"
            class="border py-1 px-1 border-gray-300 rounded-bl-lg rounded-tr-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            >
                <option value="">Coleccion</option>
                <option value="articulos">Articulos</option>
                <option value="ventas">Ventas</option>
                <option value="ingresos">Ingresos</option>
                <option value="proveedores">Proveedores</option>
                <option value="usuarios">Usuarios</option>
            </select>
        </div>
        <div class="mt-3 flex  justify-between space-x-3">
        <a href="#" id="export_excel" class="hidden py-1 px-4 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-gradient-to-r from-green-500 to-green-400">Exportar</a>
        <a href="#" id="cancelar_modal"class="py-1 px-4 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-gradient-to-r to-red-500 from-red-400">Cancelar</a>
        </div>
    </div>
</div>
