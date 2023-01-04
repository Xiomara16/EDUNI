<?php
    session_start();
    if(isset($_SESSION['logueado']) && isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUNI - Tienda Virtual</title>
</head>
<body>
    <h1>Ingreso a la página</h1>
    <a class="nav-link" href="./conf/cierre_sesion.php">Salir</a>

</body>
</html>

<?php
}
?>