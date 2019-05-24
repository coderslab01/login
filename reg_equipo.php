<?php 
include'conexion.php';
//variables para llamar los datos provenientes del formulario
$nombre_equipo=$_POST["nombre"];
$horario=$_POST["horario"];
//consulta
$insertar="INSERT INTO equipos (nombre,horario) VALUES('$nombre_equipo','$horario')";

$res=mysqli_query($conecta,$insertar);
if(!$res){
	echo "fallo el registro";
}else{
	header("location:home.php");
}




?>