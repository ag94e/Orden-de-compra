<?php
    class conexion{
        public static function conn(){
            $link = mysqli_connect("localhost","root","","proyecto");
            $link -> set_charset("UTF8");
            return $link;
        }
    }
?>