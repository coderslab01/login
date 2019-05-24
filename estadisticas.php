<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<style type="text/css">

body {

	background-image: url("img/1.jpg");

}

	
.ingreso {

}

.titulo{

	font-family: 'Josefin Sans-light', sans-serif;
	font-size: 25px;
	color: white;
}


</style>

<script type="text/javascript">
  alert("Esta ventana es para registrar una estadistica de un equipo por primera vez, Antes de registrar una estadistica, verifica que esta no exista ya.");
</script>
</head>
<form action="reg_est.php" method="post" accept-charset="utf-8">
<?php 
$cod=$_GET["parametro"];
require "controldb.php";
$obj= new controldb();
$data=$obj->consultar("SELECT * FROM equipos WHERE id_equipos=$cod ");
  ?>
<!----><table class="table table-striped table-dark">
  <thead>
<?php
foreach ($data as $filas ) {
?>
  
<div class="titulo">
	


</div>


<div class="ingreso">
	<div class="row">
<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Id de equipo</kbd></label>
  <input type="text"  name="id_equipos" value="<?php echo $cod ?>" class="form-control" id="usr">
</div>

<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Nombre de equipo</kbd></label>
  <input type="text" name="nombre" value="<?php echo $filas["nombre"] ?>" class="form-control" id="usr">
</div>
     </div>
     <div class="row">
<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Jornada</kbd></label>
  <input type="text" name="jornada" class="form-control" id="usr">
</div>

<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Partidos jugados</kbd></label>
  <input type="text" name="PJ" class="form-control" id="usr">
</div>
     </div>
     <div class="row">
<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Partidos ganados</kbd></label>
  <input type="text" name="PG" class="form-control" id="usr">
</div>

<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Partidos empatados</kbd></label>
  <input type="text" name="PE" class="form-control" id="usr">
</div>
	</div>
  <div class="row">
<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Partidos perdidos</kbd></label>
  <input type="text" name="PP" class="form-control" id="usr">
</div>

<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Goles a favor</kbd></label>
  <input type="text" name="GF" class="form-control" id="usr">
</div>
  </div>
     <div class="row">
<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Goles en contra</kbd></label>
  <input type="text" name="GC" class="form-control" id="usr">
</div>

<div class="form-group col-md-2 text-center">
  <label for="usr"><kbd>Puntos</kbd></label>
  <input type="text" name="PUNTOS" class="form-control" id="usr">
</div>
</div>
</div>
<?php
}
  ?>
</form>
<center>
<a href="crear_est.php"><button type="button" class="btn btn-success">Regresar</button></a>
<button type="submit" class="btn btn-danger">Actualizar</button>
</center>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>