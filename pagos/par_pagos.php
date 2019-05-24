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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>

	<form action="insert_pay.php" method="post" accept-charset="utf-8">
			<?php 
$cod=$_GET["parametro"];
require "../controldb.php";
$obj= new controldb();
$data=$obj->consultar("SELECT * FROM equipos WHERE id_equipos=$cod ");
	?>
<!----><table class="table table-striped table-dark">
  <thead>
<?php
foreach ($data as $filas ) {
?>
	
	
		<tr>
		<th scope="col">ID EQUIPO</th>
		<th><input type="text" name="id" value="<?php echo $cod ?>"></th>
		
		
	</tr>
	<tr>
		<th scope="col">NOMBRE DEL EQUIPO</th>
		<th><input type="text" name="nombre" value="<?php echo $filas["nombre"] ?>"></th>
		
	</tr>
	<tr>
		<th scope="col">FECHA</th>
		<th><input type="date" name="fecha" value="fecha"></th>
		
	</tr>
	<tr>
		<th scope="col">CANTIDAD</th>
		<th><input type="text" name="cantidad" placeholder="Cantidad"></th>
		
	</tr>
	
	
	
	<?php 
}
	?>

  </thead>
</table>
  <a href="pagos.php"><button type="button"class="btn btn-success">Regresar</button></a><!--<button type="button" class="btn btn-success"></button>-->
  <input type="submit" value="Confirmar Pago" class="btn btn-danger">
</form>
<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>