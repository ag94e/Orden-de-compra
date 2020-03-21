<?php
    // header("Content-type: application/json; charset=utf-8");
    // $input = json_decode(file_get_contents("php://input"), true);
    include '../model/acciones.php';
    $proveedor = new compra();
    $name = $_POST['nombre'];
    $address = $_POST['direccion'];
    $email = $_POST['correo'];
    $phone = $_POST['telefono'];
    $rfc = $_POST['rfc'];
    $contact = $_POST['contacto'];
    $giro1 = $_POST['giro1'];
    $giro2 = $_POST['giro2'];
    $giro3 = $_POST['giro3'];
    $giro4 = $_POST['giro4'];
    if(empty($name) || empty($address) || empty($email) || empty($phone) || empty($rfc) || empty($contact) || empty($giro1)){
        echo json_encode('No dejes campos vacios, al menos el giro 1 debe tener datos.');
    }else{
        // $proveedor->addProveedor($name,$address,$email,$phone,$rfc,$contact,$giro1,$giro2,$giro3,$giro4);
    }
?>