<?php

$email = strtoupper($_POST["email_uni"]);
$clave = $_POST["pass_uni"];

function error(){
    header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1");
}

function Registro($email,$clave){
    include_once ("../../conf/conexion.php");
    $conexion=conectar();

    $sqlr="insert into usuario (id, email_uni, pass_uni) values (
		    NULL,
			'".$email."',
			'".$clave."'
        );";

    $resp = mysqli_query($conexion,$sqlr);
    if (!isset($resp)) {
        header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1");
    } else {
        header("Location:http://localhost/EDUNI/EDUNI/index.html");
    }
    
}

Registro($email,$clave);
?>
