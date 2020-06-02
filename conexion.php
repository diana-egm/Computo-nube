<?php
$conexion = new mysqli("localhost","root","123456789","SqlQuery_1");
if (mysqli_connect_errno()) {
        print("Fallo la conexion");
    }
else{
        print("Conexion Exitosa");
    }
?>