<?php 
echo __DIR__;

require_once(__DIR__."/LIBS/Database.php");

require_once(__DIR__."/LIBS/Modelo.php");

include_once("CLASES/Aprendiz.php");

$database = new Database();
$connection = $database->getConnection($database);
$aprendiz = new Aprendiz($connection);

if(
   !isset($_POST["first_name"]) &&
   !isset($_POST["last_name"]) &&
   !isset($_POST["email"]) &&
   !isset($_POST["phone"]) &&
   !isset($_POST["dni"]) 

  )
  // {

   //$aprendiz -> store([
      //'first_name' => $_POST["first_name"],
      //'lats_name' => $_POST["lats_name"],
      //'email' => $_POST["email"],
      //'phone' => $_POST["phone"],
      //'dni' => $_POST["dni"],
      //'user_accout' => isset($_POST["user_accout"]) ? $_POST["user_accout"] : '' ,
      //'average' => isset($_POST["average"]) ? $_POST["average"] : ''
     // ]
   //);
   //}else {
      //echo "No llegaron los campos";
//}




// $nombre = $_POST["first_name"];
// $apellido = $_POST["lats_name"];
// $correo = $_POST["email"];
// $telefono = $_POST["phone"];
// $dni = $_POST["dni"];

// var_dump($nombre);
// var_dump($apellido);
// var_dump($correo);
// var_dump($telefono);
// var_dump($dni);

// $aprendiz -> update(2,[
//    'first_name' => 'Dayana',
//    'lats_name' => 'Hernandez',
//    'addres' => 'Rincon de giron',
//    'user_account' => 2696521,
//    ]
// );


// Llama al método `getAll` de la instancia `$aprendiz` para obtener todos los registros de aprendices de la base de datos.
// El resultado es un array o colección de registros que se guarda en la variable `$results`.
// $results = $aprendiz->getAll();
// echo "<pre>";
// print_r($results);
// echo "</pre>";

// // Llama al método `getById` de la instancia `$aprendiz` para obtener un registro específico de aprendiz por su ID.
// // En este caso, se busca el aprendiz con ID 1. El resultado se guarda en la variable `$resultsId`.
// $resultsId = $aprendiz->getById(1);

// // var_dump($results);

// // Muestra en pantalla el contenido de la variable `$resultsId`.
// // `var_dump` es útil para ver la estructura y el contenido detallado de una variable.
// var_dump($resultsId);

?>