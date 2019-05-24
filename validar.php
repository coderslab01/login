<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

session_start();
$_SESSION['usuario'] = $usuario;



//Conectar con base de datos

$conectar=mysqli_connect("localhost", "root","","admon");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conectar, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:home.php");
}
else{
	echo "Error en el usuario o la contraseña";
}

//mysqli_free_result($resultado);
//mysqli_close($conectar);?>

<!--HTML-->
<br><a href="index.php"><input type="submit" value="Volver"></input></a>
