<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículo</title>
</head>
<body>
    <form action="" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto"><br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"><br>
        <label for="costo">Costo (antes de IVA)</label>
        <input type="text" name="costo" id="costo"><br>
        <label for="giro">Giro</label>
        <input type="text" name="giro" id="giro"><br>
        <button name="enviar" type="submit">Enviar</button>
    </form>
    <a href="home-captura.php"><button>Regresar</button></a>
</body>
</html>