$(function () {
    var content = $('#contenidos');
    $("#new_users").on("click", (evt) => {
        evt.preventDefault();
        success();
        create('Users/create');
    });

    const create = (url) => {
        $.ajax({
            type: 'GET',
            url: url,
            success: (data) => {
                content.html(data);
            },
            error: () => {
                error();
            }
        })
    }

    const error = () => {
        toastr.error("Error al cargar la pagina...", "Error");
    }
    const success = () => {
        toastr.success("Cargando...");
    }
    const stores = (sms) => {
        toastr.success(sms, "Iniciando...");
    }
    /* en create */
    $("#user-submist").on('click', function (evt) {
        evt.preventDefault();
        let formu = $(this).parents('form');
        let route = "http://localhost:8000/" + formu.attr('action');
        store(route, formu.serialize());

    })
    const store = (action, datos) => {
        $.post(action, datos, (info) => {
            stores(info.sms);
        }).fail(() => {
            error();
        })
    }
    $(".view-user").on("click", function (evt) {
        evt.preventDefault();
        let url = $(this).attr('href');
        create(url);
    })
    $(".edit-user").on('click', function (evt) {
        evt.preventDefault();
        let url = $(this).attr('href');
        create(url);
    });
    $(".delete-user").on('click', function (evt) {
        evt.preventDefault();
        let form = $("#form-dele");
        let code = $(this).attr('code');
        form.attr('action', 'Users/'+code);
        let user = $(this).attr('user');
        let email = $(this).attr('email');
        $("#user-modal").text(user);
        $("#email-modal").text(email);
        $("#modal-delete-u").modal('show');
    });
    $("#delete-user").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        store(action, form.serialize());
    });
    const init = (url) => {
        $.ajax({
            type: "GET",
            url: url,
            success: function (datos) {
                content.html(datos);
                $("#table-users").DataTable();
            },
            error: function () {
                error();
            }
        })
    }

});