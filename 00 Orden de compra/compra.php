<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de compra</title>
</head>
<body>
    <h1>Orden de compra</h1>
    <form action="inCompra.php" method="post">
        <span>Proveedor</span>
        <br>
        <select name="idProveedor" id="idProveedor">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <br>
        <span>Usuario</span>
        <br>
        <input type="text" name="usuario" id="usuario">
        <br>
        <span>Fecha de entrega</span>
        <input type="date" name="fechaEntrega" id="fechaEntrega">
        <br>
        <span>Articulo</span>
        <select name="articulo" id="articulo">
            <option>Monitor</option>
        </select>
        <input type="text" name="descripcion" id="descripcion">
        <input type="number" name="precio" id="precio">
        <br>
        <span>Precio sin IVA</span><input type="number" name="precioSin" id="precioSin" value="" onkeyup="total()">
        <br>
        <span>Precio con IVA</span><input type="number" name="precioIva" id="precioIva" value=".17">
        <br>
        <span>Precio Total</span><input type="text" name="precioTot" id="precioTot" value="">
        <br>
        <button type="submit" name="compra">Compra</button>
    </form>

    <h1>BUSCAR</h1>
    <div>
        <label for="caja"></label>
        <input type="text" name="caja" id="caja" class="form-control">
    </div>

    <div id="datos">


    </div>


    <script src="jquery-3.4.1.min.js"></script>
    <!-- <script src="main.js"></script> -->

    <script type="text/javascript">    
    //multiplicar precioSin con PrecioIva para precioTot
    function total() {
        let num1 = document.getElementById('precioSin').value;
        let result1 = parseInt(num1) * 1.15;
        document.getElementById('precioTot').value = result1;
        }
    </script>
</body>
</html>