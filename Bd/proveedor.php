<?php
    include_once '../model/acciones.php';
    $prov = new compra();
    $user = new session();
    if(isset($_SESSION['usuario'])){
        $usuario = new compra();
        $rolUsuario = $usuario->setUser($user->getCurrentUser());
        $result = $prov->proveedor();
        echo json_encode($result);
    }else{
        header ("Location: ../");
    }
    include '../controller/tiempo_sesion.php';
?>