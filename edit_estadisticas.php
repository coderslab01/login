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

body{
	margin-top: 5%;
}

</style>

</head>
<body>

<form action="edit_estadisticas_submit" method="post" accept-charset="utf-8">
<?php 
$cod=$_GET["parametro"];
require "controldb.php";
$obj= new controldb();
$data=$obj->consultar("SELECT * FROM estadisticas WHERE id_equipos=$cod ");
  ?>
<!----><table class="table table-striped table-dark">
  <thead>
<?php
foreach ($data as $filas ) {
?>
    

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID Equipo</th>
      <th scope="col">Equipo</th>
      <th scope="col">Jornada</th>
       <th scope="col">Pj</th>
      <th scope="col">PG</th>
      <th scope="col">PE</th>
      <th scope="col">PP</th>
      <th scope="col">GF</th>
      <th scope="col">GC</th>
      <th scope="col">Puntos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   <h1>Datos Estadisticos hasta la jornada: <?php echo $filas["jornada"] ?></h1>
    <tr>
      
      <td><input type="text" class="col-sm-6 form-control"value="<?php echo $cod ?>" name=""></td>
      <td><input type="text"   value="<?php echo $filas["nombre"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["jornada"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["PJ"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["PG"] ?>" class="col-sm-6 form-control"></td>   
      <td><input type="text" value="<?php echo $filas["PE"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["PP"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["GF"] ?>" class="col-sm-6 form-control"></td>
      <td><input type="text" value="<?php echo $filas["GC"] ?>"class="col-sm-6 form-control"></td>	
      <td><input type="text" value="<?php echo $filas["PUNTOS"] ?>"class="col-sm-6 form-control"></td> 
    </tr>
    <tr>

      <td><input type="text" class="col-sm-6 form-control"></td>
      <td><input type="text" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>   
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td> 
       <td><input type="number" class="col-sm-6 form-control"></td>
    </tr>
    <tr>
      <td><input type="text" class="col-sm-6 form-control"></td>
      <td><input type="text" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>   
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td>
      <td><input type="number" class="col-sm-6 form-control"></td> 
       <td><input type="number" class="col-sm-6 form-control"></td>
    </tr>
  </tbody>
</table>

<?php
}
  ?>
</form>





<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>