<?php
    include '../model/acciones.php';
    $giro = new compra();
    $name = $_POST['giro'];
    if(empty($name)){
        echo json_encode('error');        
    }else{
        $giro->addGiro($name);
    }
?>