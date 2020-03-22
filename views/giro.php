<?php
    include_once '../model/acciones.php';
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
    include '../controller/tiempo_sesion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Giro</title>
</head>
<body>
    <?php require 'header.php'; ?>
    <form id="formulario">
        <div class="container">
            <label for="giro">Giro:</label>
            <input type="text" name="giro" id="giro" class="form-control"><br>
            <button class="btn btn-outline-secondary" name="enviar" type="submit" id="enviar">Enviar</button>
        </div>
    </form>
    <br>
    <div class="container" id="alerta">
    
    </div>
    <div class="container">
        <table class="table table-striped table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">GIRO</th>
                </tr>
            </thead>
            <tbody id="datos">
            </tbody>
        </table>
    </div>
    <div class="button-center">
        <a href="home-captura.php"><button class="btn btn-outline-secondary">Regresar</button></a>
    </div>
    <?php require 'footer.php'; ?>
    <script src="../assets/js/giro.js"></script>
</body>
</html>