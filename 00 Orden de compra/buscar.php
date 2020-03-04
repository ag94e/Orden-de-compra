<?php
 $mysqli = new  mysqli("localhost", "root", "", "ordencompra");

 $salida = "";

 $query = "SELECT * FROM compras";

 if(isset($_POST['consulta'])){
     $q =$mysqli->real_escape_string($_POST['consulta']);
     $query = "SELECT * FROM comprasFROM usuarios WHERE noFolio LIKE '%".$q."%' OR fechaCaptura LIKE '%".$q."%' OR fechaCaptura LIKE '%".$q."%'OR idProveedor LIKE '%".$q."%' OR usuario LIKE '%".$q."%' OR articulo LIKE '%".$q."%' OR descripcion LIKE '%".$q."%' OR costo LIKE '%".$q."%'  OR total LIKE '%".$q."%' OR fechaEntrega LIKE '%".$q."%'" ;
    }
  $resultado = $mysqli->query($query);

  if($resultado->num_rows > 0){

    $salida.="<table class='tabla_datos'>
    <thead>
        <tr>
            <td>noFolio </td>
            <td>fechaCaptura</td>
            <td>idProveedor</td>
            <td>usuario</td>
            <td>articulo</td>
            <td>descripcion</td>
            <td>costo</td>
            <td>iva</td>
            <td>total</td>
            <td>fechaEntrega</td>
            <tbody>";
    while($fila = $resultado->fetch_assoc()){
        $salida.="<tr>
            <td>".$fila['noFolio']."</td>
            <td>".$fila['fechaCaptura']."</td>
            <td>".$fila['idProveedor']."</td>
            <td>".$fila['usuario']."</td>
            <td>".$fila['articulo']."</td>
            <td>".$fila['descripcion']."</td>
            <td>".$fila['costo']."</td>
            <td>".$fila['iva']."</td>
            <td>".$fila['total']."</td>
            <td>".$fila['fechaEntrega']."</td>
        ";
    }   
    
    $salida.="</tbody></table>";
  }else{
      $salida.="No hay datos";
  }

  echo $salida;

  $mysqli->close();

?>