<?php
    include_once '../model/acciones.php';
    include '../controller/tiempo_sesion.php';
    $user = new session();
    if(isset($_SESSION['usuario'])){
        $usuario = new compra();
        $rolUsuario = $usuario->setUser($user->getCurrentUser());
        foreach ($rolUsuario as $usuario){
            $rol = $usuario['rol'];
            if($rol == 3){
                header("Location: compra.php");
            }
        }
    }else{
        header ("Location: ../");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Home Captura</title>
</head>
<body>
<?php require_once 'header.php'; ?>
    <div class="medio">
        <div class="container">
            <a href="proveedor.php"><button class="button type3">Capturar proveedor</button></a>
            <a href="articulo.php"><button class="button type3">Capturar articulo</button></a>
            <a href="giro.php"><button class="button type3">Capturar giro</button></a>
        </div>
    </div>
<?php require_once 'footer.php'; ?>
</body>
</html> 