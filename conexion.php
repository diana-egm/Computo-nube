<?php
    $conexion = new mysqli("localhost","root","root","bestshoes");
    if (mysqli_connect_errno()) {
            print("Fallo la conexion");
        }
?>