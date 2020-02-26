<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de compra</title>
</head>
<body>
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
    <span>Precio</span><input type="number" name="precioSin" id="precioSin" value="" onkeyup="total()">
    <br>
    <span>IVA</span><input type="number" name="precioIva" id="precioIva" value="">
    <br>
    <span>Precio Total</span><input type="number" name="precioTot" id="precioTot" value="">
    </form>
    <script type="text/javascript">    
    //multiplicar precioSin con PrecioIva para precioTot
    function total() {
        let num1 = document.getElementById('precioSin').value;
        let result1 = parseInt(num1) * 1.17;
        document.getElementById('precioTot').value = result1;
        }
    </script>

</body>
</html>