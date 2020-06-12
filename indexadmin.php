<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c1a673c0f7.js" crossorigin="anonymous"></script>
    <title>Pantalla compra</title>
  </head>
  <body>
  <div class="todo">
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <div>
            <th>ID</th>
            <th>Producto</th>
            <th>Talla</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
          </div>
          <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>
      
        <?php
          include "conexion.php";
          $sentencia="SELECT * FROM Producto";
          $resultado= $conexion->query($sentencia) or die (mysqli_error($conexion)); 
        
          foreach($resultado as $fila): ?>
            <div>
              <?php echo "<tr>";
                    echo "<td>"; echo $fila['Id_producto']; echo "</td>"; 
                    echo "<td>"; echo $fila['Nombre']; echo "</td>"; 
                    echo "<td>"; echo $fila['Talla']; echo "</td>"; 
                    echo "<td>"; echo $fila['Detalle']; echo "</td>"; 
                    echo "<td>"; echo $fila['Precio']; echo "</td>"; 
                    echo "<td>"; echo $fila['Stock']; echo "</td>"; 
                    echo "<td> <a href='modif_prod1.php?Id_producto=".$fila['Id_producto']."'>"?> <i class="fas fa-pencil-alt"></i> <?php "</a> </td>";
                    echo "<td> <a href='eliminar_prod.php?Id_producto=".$fila['Id_producto']."''>"?> <i class="fas fa-trash-alt"></i> <?php "</a> </td>";
                  echo "</tr>";?>
            </div>
          <?php endforeach ?>
    </table>
  </body>
</html>