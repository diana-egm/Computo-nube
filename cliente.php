<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="Utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <title>LOGIN</title>
        <!-- Jquery -->
        <script src="https://ajax.googlaepis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap para estilo de pagina -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="css/cliente.css">
    </head>
    <body>
        <div class="Todo">
            <div id="contenido">
                <table>
                    <thead>
                        <th>RFC</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Ciudad</th>
                        <th>Calle</th>
                        <th>Numero</th>
                        <th>Colonia</th>
                        <th>CP</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </thead>
                    <?php
                    include "conexion.php";
                    $sentencia="SELECT * FROM Producto";
                    $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion)); 
                    while($fila=$resultado->mysqli_fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>"; echo $fila['RFC']; echo "</td>";
                        echo "<td>"; echo $fila['Nombre']; echo "</td>";
                        echo "<td>"; echo $fila['Ap_Paterno']; echo "</td>";
                        echo "<td>"; echo $fila['Ap_materno']; echo "</td>";
                        echo "<td>"; echo $fila['Nombre_usuario']; echo "</td>";
                        echo "<td>"; echo $fila['Estado']; echo "</td>";
                        echo "<td>"; echo $fila['Ciudad']; echo "</td>";
                        echo "<td>"; echo $fila['Calle']; echo "</td>";
                        echo "<td>"; echo $fila['No_exterior']; echo "</td>";
                        echo "<td>"; echo $fila['Colonia']; echo "</td>";
                        echo "<td>"; echo $fila['CP']; echo "</td>";
                        echo "<td>"; echo $fila['Telefono']; echo "</td>";
                        echo "<td>"; echo $fila['Email']; echo "</td>";
                        
                    }
                    ?>
            </div>
        </div>
    </body>
</html>