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
/*Pantalla celular hasta tablet*/@media (max-width: 799px){
	body {

		background-image: url("img/1.1.jpg");
		background-size:cover;
		background-repeat: no-repeat;
	}
    }
    .container  {
    	margin-top: 150px;
    }

/*Pantalla tablet en adelante*/@media (min-width: 800px) {

	.container {

		margin-top: 180px;
		margin-left: 225px;
		/*margin-right: 10px;*/

	}

	body {
		background-color: #0000;
		background-image: url("img/1.jpg");
		background-repeat: no-repeat;
	
	}
    /* }

</style>

</head>
<body>
	<center><strong><p>Administrador<br>SoccerCity</p></strong></center>
 <!-- Contiene el login --> 
 	<div class="container">
		<div class="row">
		<div class="col-sm-4 col-md-8 col-lg-4 col-xl-4">	
		
		<form action="validar.php" method="POST" >
		
	<!--Aqui empieza campos de formulario-->	

	    <div class="form-group">			
        	<input type="text" name="usuario" class="form-control"  placeholder="Nombre de Usuario">
        </div>
        
        <div class="form-group">
        	<input type="password" class="form-control" name="clave" placeholder="Contraseña">
        </div>
        
        <input type="submit" value="Continuar" class="btn btn-primary"></input>
        </form>

			</div>
		   </div>
	    </div>

	<!--Aqui termina campos de formulario-->

	


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>