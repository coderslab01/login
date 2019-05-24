<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo "No hay sesiones abiertas";
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Equipos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<script>
    function modificar(cod){
      window.location="http://localhost/login/pagos/par_pagos.php?parametro="+cod;

    }
  </script>

  <body>

  	<style type="text/css">
  		body {
  			background:black;
  		}
      p {
        color: white;
      }
  	</style>
    <center><p><strong>Pago Confirmado</strong></p></center>
    <center><img src="../img/pago_con.png"><hr></center>
<center><a href="../home.php"><button type="button"class="btn btn-success">Home</button></a></center> <hr>

<center><a href="pagos.php"><button type="button"class="btn btn-danger">Registrar nuevo pago</button></a>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>