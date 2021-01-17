class Load extends Alert {
    constructor(s, e, i, a, action, url, datos) {
        super(s, e, i, a);
        this.action = action;
        this.url = url;
        this.datos = datos;
    }
    get index() {
        $.ajax({
            type: 'GET',
            url: this.url,
            success: (data) => {
                $('#contenidos').html(data);
            }, error: () => {
                this.alert = "Error en la carga...";
                this.alert;
            }
        });
    }

    set newURL(url) {
        this.url = url;
    }
    set newdatos(data) {
        this.datos = data;
    }
    set newaction(a) {
        this.action = a;
    }

    get create_se() {
        $.ajax({
            type: 'GET',
            url: this.url,
            success: (data) => {
                $('#contenidos').html(data);
            }, error: () => {
                this.error = "Se produjo un error...";
                this.error;
            }
        });
    }
    get store() {
        $.post(this.action, this.datos, (info) => {
            $.ajax({
                type: 'GET',
                url: this.url,
                success: (data) => {
                    $('#contenidos').html(data);
                }, error: () => {
                    this.alert = "Error en la carga..."
                    this.alert;
                }
            });
        }).fail(() => {
            this.error;
        })
    }
    get store_modal() {
        $.post(this.action, this.datos, (info) => {
        }).fail(() => {
            this.alert = "Iperacion fallida...";
            this.alert;
        })
    }
    get delete() {
        $.post(this.url, this.datos, (info) => {
            this.info = "Eliminacion completa";
            this.info;
        }).fail(() => {
            this.alert = "Error al borrar el dato...";
            this.alert;
        });
    }

}
var load = new Load(1, 2, 3, 4, 5, 6, "", "");