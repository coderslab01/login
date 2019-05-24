<?php
//conexion a BD 
$host="localhost";
$db_name="admon";
$user="root";
$pass="";
$conecta=mysqli_connect($host,$user,$pass);
$con_bd=mysqli_select_db($conecta,$db_name);

  ?>