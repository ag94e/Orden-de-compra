<?php
    require_once '../controller/sesiones.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Home Captura</title>
</head>
<body>
<?php require_once 'header.php'; ?>
    <a href="proveedor.php"><button>Capturar proveedor</button></a>
    <a href="articulo.php"><button>Capturar artículo</button></a>
    <a href="giro.php"><button>Capturar giro</button></a>
<?php require_once 'footer.php'; ?>
</body>
</html>