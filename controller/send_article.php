<?php
    include '../model/acciones.php';
    $article = new compra();
    $prod = $_POST['producto'];
    $descrip = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $giro = $_POST['giro'];
    if(empty($prod) || empty($descrip) || empty($costo) || empty($giro)){
        echo json_encode('error');        
    }else{
        $article->addArticle($prod,$descrip,$costo,$giro);
    }
?>