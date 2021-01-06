$(function(){
    var content = $('#contenidos');
var rutas = new Load('','','','','',content,'','');
$("#create-a").on('click', function(evt){
    evt.preventDefault();
    rutas.newURL = "/Articulos/create";
    rutas.create_se;
});
$(".edit-producto").on('click', function(evt){
    evt.preventDefault();
    alert("edit");
});
$(".delete-producto").on('click', function(evt){
    evt.preventDefault();
    alert("delete");
})
});