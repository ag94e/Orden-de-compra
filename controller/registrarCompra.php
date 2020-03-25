<?php
    include '../model/acciones.php';
    $compra = new compra();
    $fecha = date("Y-m-d H:i:s");
    $idProv = $_POST['id'];
    $IVA = $_POST['IVA'];
    $usuario = $_POST['usuario'];
    $fechaEntrega = $_POST['fechaEntrega'];
    $articulo = $_POST['articulo'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $costoIVA = $_POST['costoIVA'];
    // echo json_encode($costo);
    // echo json_encode(gettype($costo));
    // echo json_encode($idProv);
    // echo json_encode($IVA);
    // echo json_encode($usuario);
    // echo json_encode($fecha);
    // echo json_encode($articulo);
    // echo json_encode($descripcion);
    // echo json_encode($costo);
    // echo json_encode($costoIVA);

    if(empty($costoIVA) || empty($idProv)){
        echo json_encode('error');
    }else{
        $compra->registrarCompra($fecha,$idProv,$usuario,$articulo,$descripcion,$costo,$IVA,$costoIVA,$fechaEntrega);
    }
?>