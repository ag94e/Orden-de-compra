<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/header.css">
    <title>Proveedores</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <form action="../controller/send_proveedor.php" method="POST">
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
        <label for="giro1">Giro1:</label>
        <select name="giro1" id="giro1">
        <?php include_once '../model/acciones.php';
            $prov = new compra();
            $showProv = $prov->proveedor();
            $giro = new compra();
            $showGiro = $giro->giros();
            foreach($showGiro as $giro) { 
        ?>
            <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
        <?php 
            }
        ?>
        </select><br>
        <label for="giro1">Giro2:</label>
        <select name="giro2" id="giro2">
        <?php foreach($showGiro as $giro) { 
        ?>
            <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
        <?php 
            }
        ?>
        </select><br>
        <label for="giro1">Giro3:</label>
        <select name="giro3" id="giro3">
        <?php foreach($showGiro as $giro) { 
        ?>
            <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
        <?php 
            }
        ?>
        </select><br>
        <label for="giro1">Giro4:</label>
        <select name="giro4" id="giro4">
        <?php foreach($showGiro as $giro) { 
        ?>
            <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
        <?php 
            }
        ?>
        </select>
        <button name="enviar" type="submit">Enviar</button>
    </form>
    <a href="home-captura.php"><button>Regresar</button></a>
    <table>
        <thead>
            <tr>
                <th>ID PROVEEDOR</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>RFC</th>
                <th>CONTACTO</th>
                <th>ESTATUS</th>
                <th>GIRO 1</th>
                <th>GIRO 2</th>
                <th>GIRO 3</th>
                <th>GIRO 4</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($showProv as $prov){?>
            <tr>
                <td><?php echo $prov['id']; ?></td>
                <td><?php echo $prov['Nombre']; ?></td>
                <td><?php echo $prov['Direccion']; ?></td>
                <td><?php echo $prov['Correo']; ?></td>
                <td><?php echo $prov['Telefono']; ?></td>
                <td><?php echo $prov['RFC']; ?></td>
                <td><?php echo $prov['Contacto']; ?></td>
                <td><?php echo $prov['Estatus']; ?></td>
                <td><?php echo $prov['giro1']; ?></td>
                <td><?php echo $prov['giro2']; ?></td>
                <td><?php echo $prov['giro3']; ?></td>
                <td><?php echo $prov['giro4']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>