<?php
    include '../model/acciones.php';
    $login = new compra();
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    if(empty($usuario) || empty($contra)){
        echo '
            <script>
                alert(\'Porfavor no dejes los campos vacíos\');
            </script>
        ';        
    }else{
        $login->login($usuario,$contra);
    }
?>