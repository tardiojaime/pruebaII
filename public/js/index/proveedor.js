$(function(){
    $(".view-proveedor").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    });

    $("#create-p").on('click', function(evt){
        evt.preventDefault();
        load.newURL = "Proveedores/create";
        load.create_se;
    });
    $("#enviar_provee").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newaction = action;
        load.newdatos = form.serialize();
        load.newURL = "/Proveedores";
        load.store;

    });
    $("#provee-update").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newURL = "/Proveedores";
        load.newaction = action;
        load.newdatos = form.serialize();
        load.store;

    });
    $(".cancelar_p").on('click', function(evt){
        evt.preventDefault();
        load.newURL = '/Proveedores';
        load.index;
    });
    $(".edit-provee").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    });
    
})
