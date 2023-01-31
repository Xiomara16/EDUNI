<?php
session_start();

include("conexion.php");
$conexion=conectar();

if ($_SESSION['logueado'] == 'ingresado') {

} else {
	mysqli_close($conexion);
	header('Location: http://localhost/EDUNI/finalizo.html');
}
session_destroy();
header("Location: http://localhost/EDUNI/finalizo.html");
exit();
?>
