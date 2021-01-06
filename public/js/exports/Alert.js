class Alert{
    constructor(success, error, info, alert){
        this.correcto = success;
        this.eror = error;
        this.informacion = info;
        this.alerta = alert;
        toastr.options = {
            "progressBar": true,
            "timeOut": "1000",
        }
    }
    get success(){
        return toastr.success(this.correcto);
    }
    get info(){
        toastr.info(this.informacion);
    }
    get alert(){
        toastr.warning(this.alerta);
    }
    get error(){
        toastr.error(this.eror);
    }
    set success(sms){
        this.correcto = sms;
    }
    set info(sms){
        this.informacion = sms;
    }
    set error(sms){
        this.eror = sms;
    }
    set alert(sms){
        this.alerta = sms;
    }
}
