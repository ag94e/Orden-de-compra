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
        private $list;

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
                            window.location.href=\'../views/inicio.php\';
                        </script>
                    ';
                    break;
                    case 2:
                    echo '
                        <script>
                            window.location.href=\'../views/home-captura.php\';
                        </script>
                    ';
                    break;
                    case 3:
                    echo '
                        <script>
                            window.location.href=\'../views/compra.php\';
                        </script>
                        ';
                    break;
                    case 4:
                    echo '
                        <script>
                            window.location.href=\'../views/inicio.php\';
                        </script>
                    ';
                    break;
                    default: '
                        <script>
                            alert(\'Usuario sin rol, verifique con el administrador\');
                            window.location.href=\'../model/cerrar.php\';
                        </script>
                    ';
                }
            }else{
                echo '
                    <script>
                        alert(\'Porfavor verifique su informacion\');
                        window.location.href=\'../model/cerrar.php\';
                    </script>
                ';
            }
        }
        public function setUser($user){
            $query=$this->db->query("SELECT * FROM usuarios WHERE usuario = '$user'");
            return $query;
        }
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
                $err = 'error2';
                $error = json_encode($err);
                echo $error;
                return $error;
            }else{
              $prov=$this->db->query("INSERT INTO provedores (id, Nombre, Direccion, Correo, Telefono, RFC, Contacto, Estatus, giro1, giro2, giro3, giro4) VALUES ('', '$name','$address','$email','$phone','$rfc','$contact','Activo','$giro1','$giro2','$giro3','$giro4')");
              echo json_encode('success');
            }
        }
        public function proveedor(){
            $query=$this->db->query("SELECT * FROM provedores");
            while($filas=$query->fetch_assoc()){
                $this->list[]=$filas;
            }
            return $this->list;
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
        public function addGiro($giros){
            $query = $this->db->query("SELECT * FROM `giro 1` WHERE Descripcion = '$giros'");
            $nameGiro = $query->num_rows;
            if ($nameGiro > 0){
                echo '
                <script>
                    alert("Verifique que la información sea correcta.");
                    window.location.href="../views/giro.php";
                </script>
                ';
            }else{
                $this->db->query("INSERT INTO `giro 1` (ID, Descripcion) VALUES ('', '$giros')");
                echo '
                <script>
                    alert("Se agregó correctamente el giro");
                    window.location.href="../views/giro.php";
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
    class session{
        public function __construct(){
            session_start();
        }
        public function setCurrentUser($usuario){
            $_SESSION['usuario'] = $usuario;
        }
        public function getCurrentUser(){
            return $_SESSION['usuario'];
        }
    }
?>