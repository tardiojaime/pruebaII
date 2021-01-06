$(function () {
    var content = $('#contenidos');
    var load = new Load("", "","", "", "", content,"","");
    $("#btn-articulos").on("click", (evt)=>{
        evt.preventDefault();
        load.newURL = "/Articulos";
        load.index;
    });

});