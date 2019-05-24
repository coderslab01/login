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
  background-repeat: no-repeat;

}
  @media (max-width: 600px) {
  body {
    background-image: url("img/1.1.jpg");
    background-repeat: no-repeat;
  }
  
  @media (max-width: 600px) {

</style>

</head>
<body>

<form action="act_est.php" method="post" accept-charset="utf-8">
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
<div class="alert alert-success font-weight-bold" role="alert">
 Datos Estadisticos hasta la jornada: <?php echo $filas["jornada"] ?></div>
    <tr>
      
      <td><input type="text" class="col-sm-6 form-control"value="<?php echo $cod ?>" name=""></td>
      <td><input type="text" value="<?php echo $filas["nombre"] ?>" class="col-sm-8 form-control"></td>
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

     <td><input type="text" name="id_equipos" class="col-sm-6 form-control"value="<?php echo $cod ?>" name=""></td>
      <td><input type="text" name="nombre" value="<?php echo $filas["nombre"] ?>" class="col-sm-8 form-control"></td>
      <td><input type="text" name="jornada" class="col-sm-6 form-control"></td>
      <td><input type="text" name="PJ" class="col-sm-6 form-control"></td>
      <td><input type="text" name="PG" class="col-sm-6 form-control"></td>
      <td><input type="text" name="PE" class="col-sm-6 form-control"></td>   
      <td><input type="text" name="PP" class="col-sm-6 form-control"></td>
      <td><input type="text" name="GF" class="col-sm-6 form-control"></td>
      <td><input type="text" name="GC" class="col-sm-6 form-control"></td>
      <td><input type="text" name="PUNTOS" class="col-sm-6 form-control"></td> 
    </tr>

  </tbody>
</table>

<input type="submit" class="btn btn-success" value="Actualizar">
      <a href="home.php"><button type="button" class="btn btn-danger">Regresar</button></a>

<?php
}
  ?>
</form>





<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>