<?php
session_start();
error_reporting(0);
session_destroy();
header("location:index.php");
$varsession=$_SESSION['usuario'];
if($varsession==null || $varsession==''){
echo "No hay sesiones abiertas";
die();
}

?>