<?php
    include_once '../model/acciones.php';
    $giro = new compra();
    $user = new session();
    if(isset($_SESSION['usuario'])){
        $usuario = new compra();
        $rolUsuario = $usuario->setUser($user->getCurrentUser());
        $result = $giro->giros();
        echo json_encode($result);
    }else{
        header ("Location: ../");
    }
    include '../controller/tiempo_sesion.php';
?>