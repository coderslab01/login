<?php 
include'conexion.php';
//variables para llamar los datos provenientes del formulario
$id_equipos=$_POST["id_equipos"];
$nombre=$_POST["nombre"];
$jornada=$_POST["jornada"];
$PJ=$_POST["PJ"];
$PG=$_POST["PG"];
$PE=$_POST["PE"];
$PP=$_POST["PP"];
$GF=$_POST["GF"];
$GC=$_POST["GC"];
$PUNTOS=$_POST["PUNTOS"];

$insertar="INSERT INTO 

estadisticas (id_equipos,nombre,jornada,PJ,PG,PE,PP,GF,GC,PUNTOS)

 VALUES('$id_equipos','$nombre','$jornada','$PJ','$PG','$PE','$PP','$GF','$GC','$PUNTOS')";
 $insertarhis="INSERT INTO 

hist_est (id_equipos,nombre,jornada,PJ,PG,PE,PP,GF,GC,PUNTOS)

 VALUES('$id_equipos','$nombre','$jornada','$PJ','$PG','$PE','$PP','$GF','$GC','$PUNTOS')";

$res=mysqli_query($conecta,$insertar);
$res2=mysqli_query($conecta,$insertarhis);
if(!$res){
	echo "fallo el registro";
}else{
	header("location:most_jornada.php");
}




?>
 