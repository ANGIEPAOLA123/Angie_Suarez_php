<?php

require_once(__DIR__."/../LIBS/Database.php");

require_once(__DIR__."/../LIBS/Modelo.php");

include_once("../CLASES/Aprendiz.php");


$nombre = isset($_POST["first_name"]) ? 
    ($_POST["first_name"] != "" ? $_POST["first_name"] : false) : 
    false;

$apellido = isset($_POST["last_name"]) ? 
    ($_POST["last_name"] != "" ? $_POST["last_name"] : false) : 
    false;

$correo = isset($_POST["email"]) ? 
    ($_POST["email"] != "" ? $_POST["email"] : false) : 
    false;

$telefono = isset($_POST["phone"]) ? 
    ($_POST["phone"] != "" ? $_POST["phone"] : false) : 
    false;

$dni = isset($_POST["dni"]) ? 
    ($_POST["dni"] != "" ? $_POST["dni"] : false) : 
    false;

if ($nombre && $apellido && $correo && $telefono && $dni){
    echo "Guardar";
    $database = new Database();
    
    $connection = $database->getConnection($database);
    
    $aprendiz = new Aprendiz($connection);

    $aprendiz -> store([
        'firts_name' => $nombre,
        'last_name' => $apellido,
        'email' => $correo,
        'phone' => $telefono,
        'dni' => $dni,
        'user_accout' => isset($_POST["user_accout"]) ? $_POST["user_accout"] : ' ',
        'average' => isset($_POST["average"]) ? $_POST["average"] : ' '
        ]
    );

    if($valor != null){
        header('location','listar.php');

    }

}else {
    echo "Faltan campos obligatorios";
}


?>