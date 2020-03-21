<?php
    include_once 'acciones.php';
    $prov = new compra();
    require_once '../controller/sesiones.php';
    include '../controller/tiempo_sesion.php';
    if ($_SESSION["usuario"]){
        $result = $prov->proveedor();
        echo json_encode($result);
    }else{
        header("Location: ../");
    }
?>