$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSFR_TOKEN': $("meta[name='csfr-token']").attr('content')

        }
    });
    $("#create-a").on('click', function (evt) {
        evt.preventDefault();
        load.newURL = "/Articulos/create";
        load.create_se;
    });
    $(".view-article").on('click', function (evt) {
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    });
    $(".edit-article").on('click', function (evt) {
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    })
    /* index fin */
    $("#article_update").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newaction = action;
        load.newURL = "/Articulos";
        load.newdatos = form.serialize();
        load.store;
    });
    /* edit fin */
    $("#enviar_art").on('click', function (evt) {
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newaction = action;
        load.newURL = "/Articulos";
        load.newdatos = form.serialize();
        load.store;
    })
/* create fin */
$(".cancelar_a").on('click', function(evt){
    evt.preventDefault();
    load.newURL = "/Articulos";
    load.index;
})
/*     $("#enviar_art").on('click', function (evt) {
        evt.preventDefault();
        let form = $(this).parents('form');
        let dataform = new FormData(form[0]);
        let action = form.attr('action');
        $.ajax({
            data: dataform,
            url: action,
            type: 'POST',
            contentType: false,
            processData: false,
            success: (info) => alert(info.sms),
            error: () => alert("Se produjo un error..")
        });
    }); */

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
        $("#modal-form").attr('action', '/Articulos/'+id);
        $("#id_delete").html(id);
        $("#info_title").html("Articulo");
        $("#id_info").html(usuario);
        $("#mensajes").html('Supender Articulo..?');
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
});