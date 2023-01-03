<?php

$email = strtoupper($_POST["email_uni"]);
$clave = $_POST["pass_uni"];

function obtener_usuario($e_uni){
    include_once ("../../conf/conexion.php");
    $conexion=conectar();

    $sql = "SELECT * FROM usuario WHERE email_uni = '".$e_uni."';";
    $resp = mysqli_query($conexion, $sql);
    $num = mysqli_num_rows($resp);
    return $num;
}

function error(){
    header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1");
}

function Registro($email,$clave){
    include_once ("../../conf/conexion.php");
    $conexion=conectar();

    if(obtener_usuario($email)==0){
        $sqlr="insert into usuario (id, email_uni, pass_uni) values (
		    NULL,
			'".$email."',
			'".$clave."'
        );";
        $resp = mysqli_query($conexion,$sqlr);
    } else {
        header("Location:http://localhost/EDUNI/EDUNI/index.html?error=2");
    }

    if (!isset($resp)) {
        header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1");
    } else {
        header("Location:http://localhost/EDUNI/EDUNI/index.html");
    }
    
}

Registro($email,$clave);
?>
