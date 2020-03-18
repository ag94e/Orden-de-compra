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

        $registro=$this->db->query("INSERT INTO `tabla_de_compras` (`Folio`, `Fecha de captura`, `id_proveedor`, `Usuario`, `Articulo`, `Descripcion`, `Costo unitario(sin iva)`, `IVA`, `Costo total`, `Fecha de entrega`) VALUES (NULL, NULL, '$idProveedor', '$usuario', '$articulo', '$descripcion', '$costo', '16', '$total', '$fechaEntrega'); ");

    }







}


?>
