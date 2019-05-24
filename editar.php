<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo "No hay sesiones abiertas";
	die();
}

?>
<!DOCTYPE>
<html>
<style type="text/css">
  
body {
  background-image: url("img/1.jpg");
  background-repeat: no-repeat;

}

@media (max-width: 600px) {
  body {
    background-image: url("img/1.1.jpg");
    background-repeat: no-repeat;
  }
  
}


</style>
<head>
	<title>Equipos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<script>
    function modificar(cod){
      window.location="http://localhost/login/par.update.php?parametro="+cod;

    }
  </script>
<body>
	<?php  
		$host="localhost";
		$db_name="admon";
		$user="root";
		$pass="";
		$conecta=mysqli_connect($host,$user,$pass);
		$con_bd=mysqli_select_db($conecta,$db_name);
		$consulta="SELECT * FROM equipos";
		$res=mysqli_query($conecta,$consulta);

	?>
  <center><strong>Editar equipos</strong></center>
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EQUIPO</th>
      <th scope="col">HORARIO</th>
      <th scope="col">EDITAR</th>
      <th scope="col"><a href="home.php"><button type="button"class="btn btn-success">Home</button></a></th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  		<?php  
  			foreach ($res as $fila) {
  		?>
  	</tr>
    <tr>
      <td scope="row"><?php echo $fila["id_equipos"] ?></td>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["horario"] ?></td>
      <td><img src="img/update.png" onclick="modificar(<?php echo $fila["id_equipos"] ?>)"></td>
      
    </tr>
    
  </tbody>
  <?php
  		}
    ?>
</table>
  </tbody>
</table>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>