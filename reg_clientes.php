<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c1a673c0f7.js" crossorigin="anonymous"></script>
    <title>Clientes</title>
  </head>
  <body>
    <div class="todo">
      <div id="contenido">
        <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
          <thead>
            <div>
              <th>ID</th>
              <th>RFC</th>
              <th>Nombre</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Nombre de usuario</th>
              <th>Contraseña</th>
              <th>Estado</th>
              <th>Ciudad</th>
              <th>Calle</th>
              <th>No. exterior</th>
              <th>No. interior</th>
              <th>Colonia</th>
              <th>CP</th>
              <th>Tel</th>
              <th>Email</th>
              <th> <a href="nuevo_cli1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
            </div>
          </thead>

          <?php
          include "conexion.php";
          $sentencia="SELECT * FROM Cliente";
          $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion)); 
        
          foreach($resultado as $fila): ?>
            <div>
              <?php echo "<tr>";
                     echo "<td>"; echo $fila['Id_cliente']; echo "</td>";
                     echo "<td>"; echo $fila['RFC']; echo "</td>";
                     echo "<td>"; echo $fila['Nombre']; echo "</td>";
                     echo "<td>"; echo $fila['Ap_paterno']; echo "</td>";
                     echo "<td>"; echo $fila['Ap_materno']; echo "</td>";
                     echo "<td>"; echo $fila['Nombre_usuario']; echo "</td>";
                     echo "<td>"; echo $fila['Contraseña']; echo "</td>";
                     echo "<td>"; echo $fila['Estado']; echo "</td>";
                     echo "<td>"; echo $fila['Ciudad']; echo "</td>";
                     echo "<td>"; echo $fila['Calle']; echo "</td>";
                     echo "<td>"; echo $fila['No_exterior']; echo "</td>";
                     echo "<td>"; echo $fila['No_interior']; echo "</td>";
                     echo "<td>"; echo $fila['Colonia']; echo "</td>";
                     echo "<td>"; echo $fila['CP']; echo "</td>";
                     echo "<td>"; echo $fila['Telefono']; echo "</td>";
                     echo "<td>"; echo $fila['Email']; echo "</td>"; 
                    echo "<td> <a href='modif_cli1.php?Id_producto=".$fila['Id_producto']."'>"?> <i class="fas fa-user-edit"></i> <?php "</a> </td>";
                    echo "<td> <a href='eliminar_cli.php?Id_producto=".$fila['Id_producto']."''>"?> <i class="fas fa-user-minus"></i> <?php "</a> </td>";
                  echo "</tr>";?>
            </div>
          <?php endforeach ?>
        </table>
  </body>
</html>