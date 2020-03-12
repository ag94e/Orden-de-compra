<?php
    require_once '../controller/sesiones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Giro</title>
</head>
<body>
    <?php require 'header.php'; ?>
    <form action="../controller/send_giro.php" method="POST">
        <label for="giro">Giro:</label>
        <input type="text" name="giro" id="giro"><br><br>
        <button name="enviar" type="submit">Enviar</button>
    </form><br>
    <a href="home-captura.php"><button>Regresar</button></a>
    <?php include_once '../model/acciones.php';
        $giro = new compra();
        $showGiro = $giro->giros();
    ?>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>GIRO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($showGiro as $giro){?>
            <tr>
                <td><?php echo $giro['ID']; ?></td>
                <td><?php echo $giro['Descripcion']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php require 'footer.php'; ?>
</body>
</html>