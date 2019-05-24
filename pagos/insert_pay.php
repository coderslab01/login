<?php 
include'../conexion.php';
//variables para llamar los datos provenientes del formulario
$id_eq=$_POST["id"];
$nombre_equipo=$_POST["nombre"];
$horario=$_POST["fecha"];
$cantidad=$_POST["cantidad"];
//consulta
$insertar="INSERT INTO pagos (id_equipo,nombre,fecha,cantidad) VALUES('$id_eq','$nombre_equipo','$horario','$cantidad')";

$res=mysqli_query($conecta,$insertar);
if(!$res){
	echo "fallo el registro";
}else{
	header("location:pago_con.php");
}




?>
