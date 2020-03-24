<?php
    include_once '../model/acciones.php';
    $user = new session();
    if(isset($_SESSION['usuario'])){
        $usuario = new compra();
        $rolUsuario = $usuario->setUser($user->getCurrentUser());
        foreach ($rolUsuario as $usuario){
            $rol = $usuario['rol'];
            if($rol == 2){
                header("Location: home-captura.php");
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
    <title>Orden de compra</title>
</head>
<body>
    <?php require_once 'header.php';
    $usuario1 = $user->getCurrentUser();
    $nameUser = new compra();
    $nombre = $nameUser->setUser($usuario1);
    foreach ($nombre as $nameUser){
        $name = $nameUser['nombre'];
    }
    $compras = new compra();
    $verCompras = $compras->verCompras();
    foreach($verCompras as $compras){
        $folio = $compras['Folio'];
    }
    ?>
    <div class="container mt-4 mb-5">
    <div class="container d-flex justify-content-between">
        <h1>Folio: <?php $nuevoFolio = $folio + 1; echo $nuevoFolio;?></h1>
        <h2 id="fecha">Fecha: </h2>
    </div>
        <form action="" method="post">
            <label for="provedor">Proveedor</label>
            <select name="provedor" id="provedor" class="form-control">
            <?php
                $provedor = new compra();
                $verProvedor = $provedor->proveedor();
                foreach($verProvedor as $provedor){
            ?>
            <option value="<?php echo $provedor['Nombre']; ?>"> <?php echo $provedor['Nombre']; ?></option>
            <?php } ?> </select>
            <label for="fechaEntrega">Fecha estimada de entrega:</label>
            <input type="date" name="fechaEntrega" id="fechaEntrega" class="form-control">
            <label for="articulo">Artículo:</label>
            <select name="articulo" id="articulo" class="form-control">
            <?php
                $article = new compra();
                $verArticle = $article->articles();
                foreach($verArticle as $article){
            ?>
            <option value="<?php echo $article['nombre']; ?>"> <?php echo $article['nombre']; ?></option>
            <?php } ?> </select>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" readonly/>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad"  min="1" class="form-control" value="1">
            <label for="costo">Costo</label>
            <input type="text" id="costo" name="costo" class="form-control" readonly />
            <label for="IVA">IVA</label>
            <input type="text" id="IVA" name="IVA" class="form-control" readonly />
            <label for="costoIVA">Costo + IVA</label>
            <input type="text" id="costoIVA" name="costoIVA" class="form-control" readonly />
        </form>
    </div>
    <div class="container d-flex justify-content-around mb-5">
        <button class="btn btn-primary">Registrar Orden de compra</button>
        <button class="btn btn-secondary">Ver Ordenes de compra</button>
    </div>
    <?php require_once 'footer.php'; ?>
    <script src="../assets/js/compras.js"></script>
</body>
</html>