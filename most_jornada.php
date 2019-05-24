<?php
session_start();
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo "No hay sesiones abiertas";
	die();
}

?>

<!DOCTYPE>
<html>

<style type="text/css" >
  
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
 .pregunta {

 	margin-top: 50%;

 }


}

regresa {

	margin-top: 50%;

}

</style>
<head>
<title>Mostrar Jornada</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>



<body>
<div class="pregunta">
<center><form action="tab_est.php" method="post" accept-charset="utf-8">
  <div class="alert alert-danger col-sm-12 col-lg-6 text-center font-weight-bold" role="alert">
  ¿Qué jornada desea consultar?
</div></center>
</div>

<div class="form-row">
    <div class="col-sm-12 col-lg-4 text-center font-weight-bold">
      <label for="validationServer01"></label>
      <input type="number" name="jornada" class="form-control is-valid" id="validationServer01" placeholder="Numero de Jornada" value="" min="0" max="50" required>
      <div class="valid-feedback">
        Listo!
      </div>
      <input type="submit" class="btn btn-success" value="Solicitar">
      <a href="home.php"><button type="button" class="btn btn-danger">Regresar</button></a>
</div>	
    
</div>

</form>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

