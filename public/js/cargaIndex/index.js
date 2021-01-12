$(function () {
    $("#btn-articulos").on("click", (evt)=>{
        evt.preventDefault();
        load.newURL = "/Articulos";
        load.index;
    });

    $("#btn-ventas").on('click', function(evt){
        evt.preventDefault();
        load.newURL = "/Ventas";
        load.index;
    });

    $("#btn-ingresos").on('click', function(a){
        a.preventDefault();
        load.newURL = '/Ingresos';
        load.index;
    });
    $("#btn-proveedores").on('click', function(a){
        a.preventDefault();
        load.newURL = '/Proveedores';
        load.index;
    });
    $("#btn-usuarios").on('click', function(a){
        a.preventDefault();
        load.newURL = '/Usuarios';
        load.index;
    });
    $("#btn-estadistica").on('click', function(e){
        e.preventDefault();
        alert("Estadistica");
    });
    $("#btn-excel").on('click', function(r){
        r.preventDefault();
        alert("Excel");
    })

});