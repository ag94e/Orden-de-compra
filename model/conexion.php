<?php
    class conexion{
        public static function conn(){
            $link = mysqli_connect("localhost","root","","tipo_de_usuario");
            $link -> set_charset("UTF8");
            return $link;
        }
    }
?>