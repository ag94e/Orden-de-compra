<?php
include_once '../model/acciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>
    <label for="nombre">Proveedor:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="producto">Producto:</label>
    <input type="text" name="producto" id="producto">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="precio">Precio (antes de IVA)</label>
    <input type="text" name="precio" id="precio">
    <label for="direccion">Ubicación</label>
    <input type="text" name="direccion" id="direccion">
</body>
</html>