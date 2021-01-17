$(function () {
    
    const container = $("#modals");
    const cerrar = $("#cerrar_modal");
    const cancelar = $("#cancelar_modal");
    
    var removerclase = (a) => {
        container.toggleClass("hidden");
    }
    
    $("#btn-articulos").on("click", function (evt) {
        evt.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = "/Articulos";
        load.index;
    });
    
    $("#btn-ventas").on('click', function (evt) {
        evt.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = "/Ventas";
        load.index;
    });
    
    $("#btn-ingresos").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Ingresos';
        load.index;
    });
    $("#btn-proveedores").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Proveedores';
        load.index;
    });
    $("#btn-usuarios").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Usuarios';
        load.index;
    });
    $("#btn-estadistica").on('click', function (e) {
        e.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/estadis';
        load.index;
    });
    $("#btn-excel").on('click', function (r) {
        r.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        removerclase();
    });
    function quitar() {
        $(".addClass").removeClass("border-l-2");
        $(".addClass").parents('li').removeClass('bg-white');
    }
    
    cerrar.on('click', ()=>removerclase());
    cancelar.on('click', ()=>removerclase());

    $("#tabla_seleccionada").on('change', function(){
        let  url = $(this).val();
        url = "/export/"+url;
        if(url.length <= 8){
            $("#export_excel").addClass('hidden');
        }else{
            $("#export_excel").removeClass('hidden');
        }
        $("#export_excel").attr('href', url);
    });
    $("#export_excel").on('click', function(evt){
        removerclase();
        
    });
    
});