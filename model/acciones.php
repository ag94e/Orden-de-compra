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
            $query=$this->db->query("SELECT * FROM usuarios WHERE usuario = '$user' AND passw = '$contra'");
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
        public function addArticle($name, $desc, $costo, $giro){
            $query=$this->db->query("SELECT * FROM articulos WHERE nombre = '$name' AND descripcion = '$desc' AND costo = '$costo' AND giro = '$giro'");
            $result = $query->num_rows;
            if ($result > 0) {
              echo '
                  <script>
                      alert("No puedes agregar el mismo artículo, favor de ingresar uno correcto");
                      window.location.href="../views/articulo.php";
                  </script>
              ';
            }else{
              $article=$this->db->query("INSERT INTO articulos (id, nombre, descripcion, costo, giro) VALUES ('', '$name','$desc','$costo','$giro')");
              var_dump($article);
              echo '
                  <script>
                      alert("Se agregó el artículo de manera correcta.");
                      window.location.href="../views/articulo.php";
                  </script>
                ';
            }
        }
        public function articles(){
            $query=$this->db->query("SELECT * FROM articulos");
            return $query;
        }
    }
////////////////////////////////////////////////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
///////        CLASE PARA SESSION        ///////
////////////////////////////////////////////////

?>