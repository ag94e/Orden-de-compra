<?php
class conexion{
  public static function con(){
    $link= mysqli_connect("localhost","root","","ordencompra");
    $link->set_charset("utf8");
    return $link;
    }
  }
?>
