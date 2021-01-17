$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSFR_TOKEN': $("meta[name='csfr-token']").attr('content')

        }
    });
    var row = "";
    var content = $('#contenidos');
    var rutas = new Load('', '', '', '', '', '', content, '');

    $("#create-a").on('click', function (evt) {
        evt.preventDefault();
        rutas.newURL = "/Articulos/create";
        rutas.create_se;
    });
    $(".edit-producto").on('click', function (evt) {
        evt.preventDefault();
        alert("edit");
    });
    $(".delete-producto").on('click', function (evt) {
        evt.preventDefault();
        alert("delete");
    })
    $("#enviar-form").on('click', function (evt) {
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');

        $.post(action, form.serialize(), (info) => {
            alert(info.sms);
        }).fail(() => {
            this.error;
        })
    })


    $("#enviar_art").on('click', function (evt) {
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
        row = $(this).closest('tr');
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
        load.newURL ="/Articulos";
        load.newaction = action;
        load.newdatos = form.serialize();
        load.store_modal;
        row.remove();
        addClase();
    });
});