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
                        alert(\' Porfavor verifique su informacion\');
                        window.location.href=\'../\';
                    </script>
                ';
            }
        }
        ////////////////////////////////////////////////
        ///////         AGREGAR ARTÍCULOS        ///////
        ///////         AGREGAR ARTÍCULOS        ///////
        ///////         AGREGAR ARTÍCULOS        ///////
        ///////         AGREGAR ARTÍCULOS        ///////
        ///////         AGREGAR ARTÍCULOS        ///////
        ////////////////////////////////////////////////
        public function addArticle($name, $desc, $costo, $giro){
            $query=$this->db->query("SELECT * FROM articulos WHERE nombre = '$name' AND descripcion = '$desc' AND costo = '$costo' AND giro = '$giro'");
            $result = $query->num_rows;
            if ($result > 0) {
              echo '
                  <script>
                      alert("No puedes agregar el mismo articulo, favor de ingresar uno correcto");
                      window.location.href="../views/articulo.php";
                  </script>
              ';
            }else{
              $article=$this->db->query("INSERT INTO articulos (id, nombre, descripcion, costo, giro) VALUES ('', '$name','$desc','$costo','$giro')");
              echo '
                  <script>
                      alert("Se agrego el articulo de manera correcta.");
                      window.location.href="../views/articulo.php";
                  </script>
                ';
            }
        }
        public function articles(){
            $query=$this->db->query("SELECT * FROM articulos");
            return $query;
        }
        ////////////////////////////////////////////////
        ///////         AGREGAR PROVEEDOR        ///////
        ///////         AGREGAR PROVEEDOR        ///////
        ///////         AGREGAR PROVEEDOR        ///////
        ///////         AGREGAR PROVEEDOR        ///////
        ///////         AGREGAR PROVEEDOR        ///////
        ////////////////////////////////////////////////
        public function addProveedor($name, $address, $email, $phone, $rfc, $contact, $giro1, $giro2, $giro3, $giro4){
            $query=$this->db->query("SELECT * FROM provedores WHERE Nombre = '$name' AND Direccion = '$address' AND Correo = '$email' AND Telefono = '$phone' AND RFC = '$rfc' AND Contacto = '$contact' AND giro1 = '$giro1' AND giro2 = '$giro2' AND giro3 = '$giro3' AND giro4 = '$giro4'");
            $result = $query->num_rows;
            if ($result > 0) {
              echo '
                  <script>
                      alert("No puedes agregar el mismo proveedor, favor de ingresar uno nuevo");
                      window.location.href="../views/proveedor.php";
                  </script>
              ';
            }else{
              $prov=$this->db->query("INSERT INTO provedores (id, Nombre, Direccion, Correo, Telefono, RFC, Contacto, Estatus, giro1, giro2, giro3, giro4) VALUES ('', '$name','$address','$email','$phone','$rfc','$contact','Activo','$giro1','$giro2','$giro3','$giro4')");
              echo '
                  <script>
                      alert("Se agrego el proveedor de manera correcta.");
                      window.location.href="../views/proveedor.php";
                  </script>
                ';
            }
        }
        public function proveedor(){
            $query=$this->db->query("SELECT * FROM provedores");
            return $query;
        }
        ////////////////////////////////////////////////
        ///////           AGREGAR GIROS          ///////
        ///////           AGREGAR GIROS          ///////
        ///////           AGREGAR GIROS          ///////
        ///////           AGREGAR GIROS          ///////
        ///////           AGREGAR GIROS          ///////
        ////////////////////////////////////////////////
        public function giros(){
            $query=$this->db->query("SELECT * FROM `giro 1`");
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