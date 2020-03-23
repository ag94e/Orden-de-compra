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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Articulo</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <form id="formulario">
        <div class="container">
            <label for="producto">Producto:</label>
            <input type="text" name="producto" id="producto" class="form-control"><br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"><br>
            <label for="costo">Costo (antes de IVA)</label>
            <input type="text" name="costo" id="costo" class="form-control"><br>
            <label for="giro">Giro</label>
            <select name="giro" id="giro" class="form-control">
            <?php include_once '../model/acciones.php';
                $giro = new compra();
                $showGiro = $giro->giros();
                foreach($showGiro as $giro) { 
            ?>
                <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
            <?php 
                }
            ?>
            </select><br>
            <button class="btn btn-outline-secondary" name="enviar" type="submit" id="enviar">Enviar</button>
        </div>
    </form>
    <br>
    <div class="container" id="alerta">
    
    </div>
    <div>
        <table class="table table-striped table-responsive-lg">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID ARTICULO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">COSTO (ANTES DE IVA)</th>
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
    <?php require_once 'footer.php'; ?>
    <script src="../assets/js/articulo.js"></script>
</body>
</html>