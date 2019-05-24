<?php
include'conexion.php';
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

$actualizar="UPDATE estadisticas SET id_equipos='$id_equipos',nombre='$nombre',jornada='$jornada',PJ='$PJ',PG='$PG',PE='$PE',PP='$PP',GF='$GF',GC='$GC',PUNTOS='$PUNTOS'
WHERE id_equipos='$id_equipos'";
$insertarhis="INSERT INTO 

hist_est (id_equipos,nombre,jornada,PJ,PG,PE,PP,GF,GC,PUNTOS)

 VALUES('$id_equipos','$nombre','$jornada','$PJ','$PG','$PE','$PP','$GF','$GC','$PUNTOS')";
$r = mysqli_query($conecta,$actualizar);
$res2=mysqli_query($conecta,$insertarhis);

if(!$r){
  echo 'error'; 

}else {
  
 header("location:list_est.php");
  
}

  ?>