<?php
    require_once '../controller/sesiones.php';
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
    <title>Proveedores</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <form action="../controller/send_proveedor.php" method="POST">
        <div class="container">
            <label for="nombre">Proveedor:</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control"><br>
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo" class="form-control"><br>
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control"><br>
            <label for="rfc">RFC:</label>
            <input type="text" name="rfc" id="rfc" class="form-control"><br>
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" id="contacto" class="form-control"><br>
            <label for="giro1">Giro1:</label>
            <select name="giro1" id="giro1" class="form-control">
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
            <select name="giro2" id="giro2" class="form-control">
            <?php foreach($showGiro as $giro) { 
            ?>
                <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
            <?php 
                }
            ?>
            </select><br>
            <label for="giro1">Giro3:</label>
            <select name="giro3" id="giro3" class="form-control">
            <?php foreach($showGiro as $giro) { 
            ?>
                <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
            <?php 
                }
            ?>
            </select><br>
            <label for="giro1">Giro4:</label>
            <select name="giro4" id="giro4" class="form-control">
            <?php foreach($showGiro as $giro) { 
            ?>
                <option value="<?php echo $giro['Descripcion']; ?>"> <?php echo $giro['Descripcion']; ?></option>
            <?php 
                }
            ?>
            </select>
            <br>
            <button class="btn btn-outline-secondary" name="enviar" type="submit">Enviar</button>
        </div>
    </form>
    <br>
    <div id="datos">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID PROVEEDOR</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">RFC</th>
                    <th scope="col">CONTACTO</th>
                    <th scope="col">ESTATUS</th>
                    <th scope="col">GIRO 1</th>
                    <th scope="col">GIRO 2</th>
                    <th scope="col">GIRO 3</th>
                    <th scope="col">GIRO 4</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($showProv as $prov){?>
                <tr>
                    <th scope="row"><?php echo $prov['id']; ?></th>
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
    </div>
    <div class="button-center">
        <a href="home-captura.php"><button class="btn btn-outline-secondary">Regresar</button></a>
    </div>
    <?php require_once 'footer.php'; ?>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="../assets/js/proveedor.js"></script>
</body>
</html>