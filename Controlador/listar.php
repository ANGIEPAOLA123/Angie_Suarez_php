<?php
require_once(__DIR__."/LIBS/Database.php");

require_once(__DIR__."/LIBS/Modelo.php");

include_once("CLASES/Aprendiz.php");

$database = new Database();
$connection = $database->getConnection($database);
$aprendiz = new Aprendiz($connection);

$lista = $aprendiz -> getAll();
?>
<table >
    <thead>
       <th>id</th>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Correo</th> 
       <th>Telefono</th>
       <th>dni</th>
    </thead>

</table>
<?php
for($i = 0; $i < count($lista); $i++){
    ?>
    <tr>
        <td><?= $lista[$i]['id']?></td>
        <td><?= $lista[$i]['firts_name']?></td>
        <td><?= $lista[$i]['firts_name']?></td>
        <td><?= $lista[$i]['firts_name']?></td>
        <td><?= $lista[$i]['firts_name']?></td>
    </tr>
     <div>
        <a href="editar.php?id=$lista"
     </div>
<?php } ?>
   

