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
	<title>Home Admon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>
<body>

<!--Aquí Empieza Barra de navegación-->
<div class="container">
 <div class="row">
 <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bienvenido: <?php echo $_SESSION['usuario'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">Finanzas <span class="sr-only">(current)</span></a>
      </li>-->
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Equipos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="tablaequipos.php">Mostrar Equipos</a>
          <a class="dropdown-item" href="editar.php">Editar Equipos</a>
          <a class="dropdown-item" href="form_reg_equipo.php">Crear Equipos</a>
          <a class="dropdown-item" href="eliminar.php">Eliminar Equipos</a>
        </div>
      </li>
      
        
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estádisticas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="most_jornada.php">Mostrar Jornadas</a>
          <a class="dropdown-item" href="list_est.php">Actualizar Estádisticas</a>
          <a class="dropdown-item" href="crear_est.php">Crear Estádisticas</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pagos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="pagos/m_p.php">Mostrar Pagos</a>
          <a class="dropdown-item" href="pagos/pagos.php">Crear Pagos</a>
          
        </div>
      </li>
      <li class="nav-item">
      <a href="salir.php"><input  type="submit" value="Cerrar sesión" class="btn btn-primary"></input></a>
      <!--<input class="btn btn-primary" type="submit" value="Cerrar sesión ">-->
      </li>
    </ul>
  </div>
  </nav>
  </div>
  </div>
<!--Aquí termina Barra de navegación-->





<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

