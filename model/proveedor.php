<?php
    include_once 'acciones.php';
    $prov = new compra();
    require_once '../controller/sesiones.php';
    include '../controller/tiempo_sesion.php';
    if ($_SESSION["usuario"]){
        $result = json_encode($prov->proveedor());
        echo $result;
        return $result;
    }else{
        header("Location: ../");
    }
?>