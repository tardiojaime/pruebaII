class Load extends Alert{
    constructor(s,e,i,a,url, container, table, datos){
        super(s,e,i,a);
        this.url = url;
        this.container = container;
        this.table = table; 
        this.datos = datos;
    }
    get index(){
        this.info = "Cargando...";
        this.info;
        $.ajax({
            type: 'GET',
            url: this.url,
            success: (data)=>{
                this.container.html(data);
                $("#table-principal").DataTable();
            },error: ()=>{
                this.alert = "Error en la carga...";
                this.alert;
            }
        });
    }

    set newURL(url){
        this.url = url;
    }
    get create_se(){
        $.ajax({
            type: 'GET',
            url: this.url,
            success: (data)=>{
                this.success = "Cargando...";
                this.success;
                this.container.html(data);
            },error: ()=>{
                this.error = "Se produjo un error...";
                this.error;
            }
        });
    }
    get store(){
        $.post(this.url, this.datos, (info) => {
            this.success = info;
            this.success;
            $.ajax({
                type: 'GET',
                url: this.url,
                success: (data)=>{
                    container.html(data);
                    table.Datatable();
                },error: ()=>{
                    this.alert;
                }
            });
        }).fail(() => {
            this.error;
        })
    }
    get store_modal(){
        $.post(this.url, this.datos, (info) => {
            this.success = info;
            this.success;
        }).fail(() => {
            this.alert = "Iperacion fallida...";
            this.alert;
        })
    }
    get delete(){
        $.post(this.url, this.datos, (info) => {
            this.info = "Eliminacion completa";
            this.info;
        }).fail(() => {
            this.alert = "Error al borrar el dato...";
            this.alert;
        });
    }

}
