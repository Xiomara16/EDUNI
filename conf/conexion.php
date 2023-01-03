<?php

function conectar(){
	$servername = "localhost";
	$database = "eduni";
	$username = "root";
	$password = "";
	//$password = "Z3kr0m::";
	$conetado = mysqli_connect($servername,$username,$password,$database)or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	
	mysqli_set_charset($conetado, 'utf8');
	return $conetado;
}

?>