

// $('#myBoton').on('click', function(){
//     $('#myModal').modal('show');
// })

// $('#myBoton2').on('click', function(){
//     $('#myModal2').modal('show');
// })

function modalAñadir(){
    $('#myModal').modal('show');
}

function modalEditar(ideditar){

    $.ajax({
        url: "../../General/Queries/infoproducto.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var codigo = info[0].codigo;
        var nombre = info[0].nombre;
        var fecha_creacion = info[0].fecha_creacion;
        var precio_costo = info[0].precio_costo;
        var precio_venta = info[0].precio_venta;
        

        $("#ideditar").val(ideditar);
        $("#codigo").val(codigo);
        $("#nombre").val(nombre);
        $("#fecha_creacion").val(fecha_creacion);
        $("#precio_costo").val(precio_costo);
        $("#precio_venta").val(precio_venta);
        $('#myModal2').modal('show');
    });
}

function modalEliminar(ideliminar){
    document.getElementById("ideliminar").value = ideliminar;
    $('#myModal3').modal('show');
}