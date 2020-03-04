<?php
include 'conexion.php';
class consul{
    private $db; //database
    private $lista;
    private $prov;
    private $tbl;
    public $loggedIn = false;

    public function __construct(){
        $this->db=conexion::con();
        $this->lista=array();
    }
    
    /*REGISTRAR compra*/
    public function inCompra($idProveedor,$usuario,$articulo,$descripcion,$costo,$total,$fechaEntrega){

        $registro=$this->db->query("INSERT INTO `compras` (`noFolio`, `fechaCaptura`, `idProveedor`, `usuario`, `articulo`, `descripcion`, `costo`, `iva`, `total`, `fechaEntrega`) VALUES (NULL, NULL, '$idProveedor', '$usuario', '$articulo', '$descripcion', '$costo', '16', '$total', '$fechaEntrega'); ");

    }







}


?>
