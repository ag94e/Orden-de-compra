<?php
    include_once '../model/acciones.php';
    $prov = new compra();
    include '../controller/tiempo_sesion.php';
    $user = new session();
    if(isset($_SESSION['usuario'])){
        $usuario = new compra();
        $rolUsuario = $usuario->setUser($user->getCurrentUser());
        $result = $prov->proveedor();
        echo json_encode($result);
    }else{
        header ("Location: ../");
    }
?>