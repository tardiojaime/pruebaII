$(function () {
    
    var responsive = ()=>{
        $("#menu-izquierdo").toggleClass("menu");
        $("#menu-izquierdo").toggleClass("menu-fix");
        $("#icon_responsive").toggleClass("fa-bars");
        $("#icon_responsive").toggleClass("fa-times");
    }
    var volver  = () =>{
        $("#icon_responsive").removeClass("fa-times");
        $("#icon_responsive").addClass("fa-bars");
        $("#menu-izquierdo").removeClass("menu-fix");
        $("#menu-izquierdo").addClass("menu");
    }
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
        volver()        ;
    });
    
    $("#btn-ventas").on('click', function (evt) {
        evt.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = "/Ventas";
        load.index;
        volver();
    });
    
    $("#btn-ingresos").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Ingresos';
        load.index;
        volver();
    });
    $("#btn-proveedores").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Proveedores';
        load.index;
        volver();
    });
    $("#btn-usuarios").on('click', function (a) {
        a.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/Usuarios';
        load.index;
        volver();
    });
    $("#btn-estadistica").on('click', function (e) {
        e.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        load.newURL = '/estadis';
        load.index;
        volver();
    });
    $("#btn-excel").on('click', function (r) {
        r.preventDefault();
        quitar();
        $(this).parents('li').addClass('bg-white');
        $(this).addClass('border-l-2');
        removerclase();
        volver();
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
        volver();
        
    });
    $("#a_responsive").on('click', function(evt){
        evt.preventDefault();
        responsive();
    });
});