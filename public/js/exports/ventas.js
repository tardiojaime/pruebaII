$(function(){
    var incremento = 0, total = 0, adicion = [];
    var dat = new Date();
    dat = dat+"";
    dat = dat.substr(8,16);
    $("#fecha").val(dat);
    var contenedor_table = $("#contenedor_table");
    var tabla = $("#tabla_add");
    var cantidad = $("#cantidad");
    var precio_total_db = $("#precio_total");

    $("#articulo").on('change', function(){
        var datos  =  document.getElementById('articulo').value.split("_");
        if(datos.length === 4){
            $("#precio").html(datos[2]);
            $("#disponible").html(datos[3]);
            $("#AgregarV").removeClass('hidden')

        }else{
            $("#precio").html("0.0");
            $("#disponible").html("0");
            $("#AgregarV").addClass('hidden')
        }
    });
    function eliminar(id){
        let a = id.attr('ids');
        $("#span_precio").html(parseFloat($("#span_precio").text())-parseFloat(a))
        total = parseFloat($("#span_precio").text());
        id.remove();
    }
    $("#AgregarV").on('click', function(evt){
        evt.preventDefault();
        let datos = document.getElementById('articulo').value.split("_");
        let id = datos[0].trim();
        if($("#span_precio")){
            total = parseFloat($("#span_precio").text());
        }
        if($("tr#"+id).length != 0){
            eliminar($("tr#"+id));
        }
        agregar();
    });

    function agregar(){
        let datos = document.getElementById('articulo').value.split("_");
        let id = datos[0], articulo = datos[1], precio = datos[2], disponible = datos[3];
        precio = parseFloat(precio);
        let ids = "$('tr#"+id+"')";
        disponible = parseInt(disponible);
        let cantida = cantidad.val();
        let precioA = cantida*precio;

        if(cantidad.val().length>0){
            if(disponible >= cantidad.val()){
                adicion[incremento] = precioA;
                total = total+adicion[incremento]; 
                let funcion = 'a = $(this).closest("tr").attr("ids");$("#span_precio").html(parseFloat($("#span_precio").text())-parseFloat(a)); $(this).closest("tr").remove();';
                let fila = "<tr ids="+precioA+" id="+id+">";
                fila+="<td class='px-3 py-1'><input type='hidden' name='articulos[]' value='"+id+"'>"+articulo+"</td>";
                fila+="<td class='px-3 py-1'><input type='hidden' name='cantidad[]' value='"+precio+"'>"+precio+"</td>";
                fila+="<td class='px-3 py-1'><input type='hidden' name='precioi[]' value='"+cantida+"'>"+cantida+"</td>";
                fila+="<td class='px-3 py-1'><input type='hidden'  value='"+precioA+"'>"+precioA+"</td>";
                fila+="<td class='px-3 py-1'><a href='#'";
                fila+= "onclick='"+funcion+"'";
                fila+="class='py-1 px-2 border-transparent text-sm font-medium rounded-bl-lg rounded-tr-lg text-white bg-green-600 hover:bg-green-800'><i class='far fa-times-circle'></i></a></td></tr>";
                precio_total_db.val(total);
                $("#span_precio").html(total);
                tabla.append(fila);
                contenedor_table.removeClass('hidden')
                incremento++;
            }else{
                load.info = "Articulo no disponible...";
                load.info;
                cantidad.focus();
            }

        }else{
            load.info = "Ingrese la cantidad de productos";
            load.info;
            cantidad.focus();
        }     
    };

    $(".view-venta").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
        
    });
    $("#create-v").on('click', function(evt){
        load.newURL =  "/Ventas/create";
        load.create_se;
    });

    $("#enviar-venta").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newURL =  "/Ventas";
        load.newaction = action;
        load.newdatos = form.serialize();
        load.store;
    });

    $("#create-i").on('click', function(evt){
        load.newURL =  '/Ingresos/create';
        load.create_se;
    });
    $("#enviar-ingreso").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let action = form.attr('action');
        load.newURL =  "/Ingresos";
        load.newaction = action;
        load.newdatos = form.serialize();
        load.store;
    });
    $(".view-ingreso").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
        
    });
    $(".vi-index").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('sitio');
        load.newURL = url;
        load.create_se;
        
    });

})
