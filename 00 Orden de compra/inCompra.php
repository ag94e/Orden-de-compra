<?php

include ("acciones.php");


$idProveedor=$_POST['idProveedor'];
$usuario=$_POST['usuario'];
$articulo=$_POST['articulo'];
$descripcion=$_POST['descripcion'];
$costo=$_POST['precioSin'];
$total=$_POST['precioTot'];
$fechaEntrega=$_POST['fechaEntrega'];


//Crear pdf
require ("fpdf/fpdf.php");

$pdf = new fpdf();
$pdf -> AddPage();
$pdf -> SetFont("Arial","B",16,'C');
$pdf -> Cell(0,10,"Orden de Compra",1,1);
$pdf -> Cell(0,10,"idProveedor: {$idProveedor}",1,1);
$pdf -> Cell(0,10,"Usuario: {$usuario}",1,1);
$pdf -> Cell(0,10,"Articulo: {$articulo}",1,1);
$pdf -> Cell(0,10,"Descripcion: {$descripcion}",1,1);
$pdf -> Cell(0,10,"Costo: {$costo}",1,1);
$pdf -> Cell(0,10,"Total: {$total}",1,1);
$pdf -> Cell(0,10,"Fecha de Entrega: $fechaEntrega",1,1);
$pdf -> output('I');


$compra= new consul();

$compra->inCompra($idProveedor,$usuario,$articulo,$descripcion,$costo,$total,$fechaEntrega);

        



?>