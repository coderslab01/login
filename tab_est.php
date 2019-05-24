<?php  
    $host="localhost";
    $db_name="admon";
    $user="root";
    $pass="";
    $jornada=$_POST["jornada"];
    $conecta=mysqli_connect($host,$user,$pass);
    $con_bd=mysqli_select_db($conecta,$db_name);
    $consulta="SELECT * FROM hist_est WHERE jornada='$jornada' ";
    $res=mysqli_query($conecta,$consulta);

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Estadistica de equipos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	
  <center><strong>Tabla de estadisticas</strong></center>
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID Estadistica</th>
      <th scope="col">ID Equipo</th>
      <th scope="col">Nombre de equipo</th>
      <th scope="col">jornada</th>
      <th scope="col">PJ</th>
      <th scope="col">PG</th>
      <th scope="col">PE</th>
      <th scope="col">PP</th>
      <th scope="col">GF</th>
      <th scope="col">GC</th>
      <th scope="col">PUNTOS</th>
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
      <td scope="row"><?php echo $fila["id_hist_est"] ?></td>
      <td><?php echo $fila["id_equipos"] ?></td>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["jornada"] ?></td>
      <td><?php echo $fila["PJ"] ?></td>
      <td><?php echo $fila["PG"] ?></td>
      <td><?php echo $fila["PE"] ?></td>
      <td><?php echo $fila["PP"] ?></td>
      <td><?php echo $fila["GF"] ?></td>
      <td><?php echo $fila["GC"] ?></td>
      <td><?php echo $fila["PUNTOS"] ?></td>
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