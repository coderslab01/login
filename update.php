<?php
include'conexion.php';
$id_equipos=$_POST['id'];
$nombre=$_POST['nombre'];
$horario=$_POST['fecha'];

$actualizar="UPDATE equipos SET nombre='$nombre',horario='$horario' WHERE id_equipos='$id_equipos'";

$r = mysqli_query($conecta,$actualizar);

if(!$r){
  echo 'error'; 

}else {
  
 header("location:editar.php");
  
}

  ?>