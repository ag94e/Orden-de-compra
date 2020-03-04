<?php
error_reporting(-1);
ini_set('display_errors', '1');
    include_once 'conexion.php';
////////////////////////////////////////////////
///////        CLASE PARA COMPRAS        ///////
///////        CLASE PARA COMPRAS        ///////
///////        CLASE PARA COMPRAS        ///////
///////        CLASE PARA COMPRAS        ///////
///////        CLASE PARA COMPRAS        ///////
////////////////////////////////////////////////

    class compra{
        private $db;
        private $table;

        public function __construct(){
            $this->db=conexion::conn();
            $this->list=array();
        }

        public function llamarTabla(){
            $query=$this->db->query("SELECT * FROM usuarios");
            return $query;
        }
        public function login($user,$contra){
            $query=$this->db->query("SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$contra'");
            $result = $query->num_rows;
            if ($result > 0){
                foreach ($query as $resultado){
                    $rol = $resultado['rol'];
                }
                switch ($rol) {
                    case 1:
                    echo '
                        <script>
                            alert(\'Bienvenido\');
                            window.location.href=\'../views/inicio.php\';
                        </script>
                    ';
                    break;
                    case 2:
                    echo '
                        <script>
                            alert(\'Bienvenido\');
                            window.location.href=\'../views/home-captura.php\';
                        </script>
                    ';
                    break;
                    case 3:
                    echo '
                        <script>
                            alert(\'Bienvenido\');
                            window.location.href=\'../views/compras.php\';
                        </script>
                        ';
                    break;
                    case 4:
                    echo '
                        <script>
                            alert(\'Bienvenido\');
                            window.location.href=\'../views/inicio.php\';
                        </script>
                    ';
                    break;
                    default: '
                        <script>
                            alert(\'Usuario sin rol, verifique con el administrador\');
                            window.location.href=\'../\';
                        </script>
                    ';
                }
            }else{
                echo '
                    <script>
                        alert(\' Porfavor verifique su información\');
                        window.location.href=\'../\';
                    </script>
                ';
            }
        }
    }
////////////////////////////////////////////////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
////////////////////////////////////////////////
    class sesion{
    
        public function __construct(){
            session_start();
        }
        public function setCurrentUser($usuario){
            $_SESSION['usuario'] = $usuario;
        }
        public function getCurrentUser(){
            return $_SESSION['usuario'];
        }
        public function closeSession(){
            session_unset();
            session_destroy();
        }
    }

?>