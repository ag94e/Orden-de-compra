$(buscar());

function buscar(consulta){
    $.ajax({
        url:'../controller/send_proveedor.php',
        type:'POST',
        dataType:'html',
        data:{consulta:consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(respuesta){
        
    })
}

// $(document).on('keyup', '#caja', function(){
//     var valor = $(this).val();
//     if(valor != ""){
//         buscar(valor);
//     }else{
//         buscar();
//     }
// })