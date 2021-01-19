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
     /* componentes para la eliminacion */
     var removerclase = () => {
        $("#modal_delete").removeClass("hidden");
    }
    var addClase = () => {
        $("#modal_delete").addClass("hidden");
    }
    $(".delete_close").on('click', ()=>addClase());
    
    $(".delete-article").on('click', function (evt){
        evt.preventDefault();
        let id = $(this).attr('ids');
        let usuario = $(this).attr('nombre');
        $("#modal-form").attr('action', '/Proveedores/'+id);
        $("#id_delete").html(id);
        $("#info_title").html("Proveedor");
        $("#id_info").html(usuario);
        $("#mensajes").html('Supender Proveedor..?');
        removerclase();
    });
    $("#delete_data").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newaction = action;
        load.newdatos = form.serialize();
        load.store_modal;
        let id =$("#id_delete").text();
        $("#"+id+"").remove();
        addClase();
    });
})
