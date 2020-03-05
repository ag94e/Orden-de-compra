<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/header.css">
    <title>Articulo</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <form action="../controller/send_article.php" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto"><br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion"><br>
        <label for="costo">Costo (antes de IVA)</label>
        <input type="text" name="costo" id="costo"><br>
        <label for="giro">Giro</label>
        <select name="giro" id="giro">
        <?php include_once '../model/acciones.php';
            $art = new compra();
            $giro = new compra();
            $showArt = $art->articles();
            $showGiro = $giro->giros();
            foreach($showGiro as $giro) { 
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
                <th>ID ARTICULO</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>COSTO (ANTES DE IVA)</th>
                <th>GIRO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($showArt as $art){?>
            <tr>
                <td><?php echo $art['id']; ?></td>
                <td><?php echo $art['nombre']; ?></td>
                <td><?php echo $art['descripcion']; ?></td>
                <td><?php echo $art['costo']; ?></td>
                <td><?php echo $art['giro']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>