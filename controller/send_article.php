<?php
    include '../model/acciones.php';
    $article = new compra();
    $prod = $_POST['producto'];
    $descrip = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $giro = $_POST['giro'];
    if(empty($prod) || empty($descrip) || empty($costo) || empty($giro)){
        echo '
            <script>
                alert(\'Porfavor no dejes los campos vacios\');
                window.location.href="../views/articulo.php";
            </script>
        ';        
    }else{
        $article->addArticle($prod,$descrip,$costo,$giro);
    }
?>