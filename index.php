<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="Utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
    </head>
    <body>
        <div class="Todo">
            <div id="contenido">
                <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Talla</th>
                        <th>Detalle</th>
                        
                    </thead>
                    <?php
                    include "conexion.php";
                    $sentencia="SELECT * FROM Producto";
                    $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion)); 
                    while($fila=$resultado->mysqli_fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>"; echo $fila['Id_producto']; echo "</td>";
                        echo "<td>"; echo $fila['Nombre']; echo "</td>";
                        echo "<td>"; echo $fila['Talla']; echo "</td>";
                        echo "<td>"; echo $fila['Detalle']; echo "</td>";
                    }
                    ?>
            </div>
        </div>
    </body>
</html>