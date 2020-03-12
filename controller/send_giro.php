<?php
    include '../model/acciones.php';
    $giro = new compra();
    $name = $_POST['giro'];
    if(empty($name)){
        echo '
            <script>
                alert(\'Porfavor no dejes los campos vacios\');
                window.location.href="../views/giro.php";
            </script>
        ';        
    }else{
        $giro->addGiro($name);
    }
?>