<?php
error_reporting(0);
session_start();

if (isset($_SESSION['tiempo'])) {

    $inactivo = 3600;

    $vida_session = time() - $_SESSION['tiempo'];

        if( $vida_session > $inactivo)
        {
            session_unset();
            session_destroy();
        }

} else {
    $_SESSION['tiempo'] = time();
}
?>