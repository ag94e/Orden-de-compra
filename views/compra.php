<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/general.css">
    <link rel="stylesheet" href="../assets/styles/header.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <title>Orden de compra</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <h1>Orden de compra</h1>
    <span>Proveedor</span>
    <br>
    <form action="" method="post">
    <input type="text" name="proveedorId" id="proveedorId">
    <select name="proveedor" id="proveedor">
        <option value=""></option>
    </select>
    <br>
    <span>Fecha y Fecha de entrega</span>
    <input type="date" name="fecha" id="fecha"><input type="date" name="fechaEn" id="fechaEn">
    <br>
    <span>Materiales</span>
    <select name="material" id="material">
        <option value=""></option>
    </select>
    <input type="text" name="descripcion" id="descripcion">
    <input type="number" name="cantidad" id="cantidad">
    <input type="number" name="precio" id="precio">
    <br>
    <span>Precio</span><input type="number" name="precioSin" id="precioSin">
    <br>
    <span>IVA</span><input type="number" name="precioIva" id="precioIva">
    <br>
    <span>Precio Total</span><input type="number" name="precioTot" id="precioTot">
    </form>
    <script>
    let numero = document.getElementById('precioSin');
    numero.addEventListener('keyup',total);
    function total() {
        let num1 = document.getElementById('precioSin').value;
        let result = parseInt(num1) * 1.16;
        // let result1 = result.toFixed(2);
        document.getElementById('precioTot').value = result.toFixed(2);
        }
    </script>
    <?php require_once 'footer.php'; ?>
</body>
</html>