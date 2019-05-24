<!DOCTYPE>
<html>

<head>
	<title>Registrar nuevo equipo</title>
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
  
}


</style>
</head>
<body>
  <center><strong>Registrar nuevo equipo</strong></center>
	<form action="reg_equipo.php" method="post">
  <div class="form-group">
    <label ><strong>Nuevo Equipo</strong></label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre de equipo">
  
  
    <label><strong>Seleccione el horario</strong></label>
    <select class="form-control" name="horario">
      <option>8:00</option>
      <option>10:00</option>
      <option>12:00</option>
      <option>14:00</option>
      <option>16:00</option>
      <option>18:00</option>
      <option>20:00</option>
      <option>22:00</option>
    </select>
  
  <input type="submit" value="Confirmar!" class="btn btn-success">
  <a href="home.php"><button type="button" class="btn btn-Danger">Cancelar</button></a>
</div>
</form>




<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>