<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Proveedores</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nombre">Proveedor:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo"><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="rfc">RFC:</label>
        <input type="text" name="rfc" id="rfc"><br>
        <label for="contacto">Contacto:</label>
        <input type="text" name="contacto" id="contacto"><br>
        <label for="estatus">Estatus:</label>
        <select name="estatus" id="estatus">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br>
        <label for="giro1">Giro 1:</label>
        <input type="text" name="giro1" id="giro1"><br>
        <label for="giro2">Giro 2:</label>
        <input type="text" name="giro2" id="giro2"><br>
        <label for="giro3">Giro 3:</label>
        <input type="text" name="giro3" id="giro3"><br>
        <label for="giro4">Giro 4:</label>
        <input type="text" name="giro4" id="giro4"><br>
        <button name="enviar" type="submit">Enviar</button>
    </form>
    <a href="home-captura.php"><button>Regresar</button></a>
</body>
</html>