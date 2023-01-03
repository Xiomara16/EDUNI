<?php
session_start();

$email = strtoupper($_POST["email_uni"]);
$clave = $_POST["pass_uni"];

function error(){
    header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1");
}

function comprueba($email,$clave){
    include_once ("../../conf/conexion.php");
    $conexion=conectar();

    $sql="select * from usuario WHERE email_uni='".$email."' AND pass_uni='".$clave."'";

    if($result = mysqli_query($conexion, $sql)){

        if(mysqli_num_rows($result) == 1){

            while($data = mysqli_fetch_array($result)){

                $_SESSION['logueado']='estaadentro';
                $_SESSION['id']=$data['id'];;

                $_SESSION['name_usuario']=$data['email_uni'];

                header("Location:../../ingreso.php");
            }

            mysqli_free_result($result);
            
        } else{
            mysqli_error($conexion);
            header("Location:http://localhost/EDUNI/EDUNI/index.html?error=1"); 
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}

comprueba($email,$clave);
?>
