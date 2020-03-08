<?php 
    include '../model/acciones.php';
    $userSession = new session();
    $newusuario = new compra();
    if(isset($_SESSION['usuario'])){
        $newusuario->setUser($userSession->getCurrentUser());
    }else{
        header("Location: ../");
    }
?>