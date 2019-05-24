
<?php
include'conexion.php';
$id=$_POST['id'];

$eliminar="DELETE FROM equipos WHERE id_equipos=$id";
$r = mysqli_query($conecta,$eliminar);

if(!$r){
  echo 'error'; 

}else {
  
 header("location:eliminar.php");
  # code...
}

  ?>
  