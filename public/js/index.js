$(function () {
    /* enlaces para las opciones de eliminar, editar...  */

    $(".btn-opciones").click(function (e) {
        e.preventDefault();
        $(".btn-opciones").css({
            'opacity': '1'
        });
        $(".btn-opciones").next(".mas-opciones").css({
            'transform': 'translate(500px,10px)'
        });
        $(this).css({
            'opacity': '0'
        });
        $(this).next(".mas-opciones").css({
            'transform': 'translate(-30px,0px)'
        });
    });
    /*     
        $("#bars").on("click",function (evt) {
            evt.preventDefault();
            $("#menu-izquierdo").removeClass("menu");
            $("#menu-izquierdo").addClass("menu-fix");
            $("#hide-main").css("display", "block")
        })
        $("#hide-main").on("click", ()=>{
            $("#menu-izquierdo").addClass("menu");
            $("#menu-izquierdo").removeClass("menu-fix");
            $("#hide-main").css("display", "none");
        }) */
    /*     var i =2;
        $("#colapso").on("click", ()=>{
            toastr.success("exito");
            if(i % 2==0){
                $("#mostrar0").collapse('show');
            }else{
                $("#mostrar0").collapse('hide');
            }
            i++;
        })
        $("#btn-personal").on("click", ()=>{
            if(i % 2==0){
                $("#mostrarUsuarios").collapse('show');
            }else{
                $("#mostrarUsuarios").collapse('hide');
            }
            i++;
        }) */
});



