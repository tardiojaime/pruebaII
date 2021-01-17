<div class="w-full p-5 sm:p-10 md:p-15">
    <h2 class=" text-center h-8 text-md font-medium text-indigo-500">
        Estadistica de Productividad
    </h2>
    <div class="grid grid-cols-2 gap-4 mb-5">
        @foreach ($datos as $da)
        <div
            class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl">
            <i class="fas fa-coins text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Inversion</b>
                <span class="font-medium">{{$da->inversion}} $.</span>
            </div>
        </div>
        <div
            class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl">
            <i class="fas fa-coins text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Ingreso Total</b>
                <span class="font-medium">{{$da->ingresos}} $.</span> 
            </div>
        </div>
        <div
            class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl">
            <i class="fas fa-hand-holding-usd text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Productos Vendidos</b>
                <span class="font-medium">{{$da->vendidos}} Unidades.</span> 
            </div>
        </div>
        <div
            class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl ">
            <i class="fas fa-hand-holding-usd text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Productos Comprados</b>
                <span class="font-medium">{{$da->comprados}} Unidades.</span> 
            </div>
        </div>
        @endforeach
        <div
            class="bg-gradient-to-r from-green-400 hover:from-green-800 to-yellow-200 h-24 w-full flex items-center rounded-bl-2xl rounded-tr-2xl ">
            <i class="fas fa-pepper-hot text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Tipos de Productos</b>
                <span class="font-medium">{{$articulos}} Tipos.</span>
            </div>
        </div>
        @foreach ($vendedor as $ven)
        <div class="bg-gradient-to-r from-yellow-200 to-pink-500 hover:to-pink-800 h-24 w-full flex items-center rounded-tl-2xl rounded-br-2xl">
            <i class="fas fa-user-tie text-3xl mx-3"></i>
            <div class="flex flex-col">
                <b>Usuario con mas Ventas</b>
                <b class="font-medium">{{$ven->usuario}}</b>
                <b class="font-medium">{{$ven->vendidos}} Ventas realizadas.</b>
            </div>
        </div>
        @endforeach
    </div>
</div>