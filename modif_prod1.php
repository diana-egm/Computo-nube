<?php

  $consulta=ConsultarProducto($_GET['Id_producto']);

  function ConsultarProducto($id_producto)//variable numero de producto
  {
    include 'conexion.php';
    $sentencia="SELECT * FROM Producto WHERE Id_producto='".$id_producto."' ";
    $resultado=$conexion->query($sentencia) or die ("Error en la consulta".mysqli_error($conexion));
    $filas=$resultado->fetch_assoc();
    return [
      $filas['Nombre'],
      $filas['Talla'],
      $filas['Detalle'],
      $filas['Precio'],
      $filas['Stock']
    ];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
  </head>
  <body>
    <div class="todo">
      <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
          <span> <h1>Modificar Producto</h1> </span>
          <br>
          <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
            <input type="hidden" name="id_producto" value="<?php echo $_GET['Id_producto']?> ">
            <label>Nombre: </label>
            <input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[0] ?>" ><br>
            <label>Talla: </label>
            <input type="text" id="talla" name="talla"; value="<?php echo $consulta[1] ?>" ><br>
            <label>Descripcion: </label>
            <textarea style="border-radius: 10px;" rows="3" cols="50" name="detalle"> <?php echo $consulta[2] ?> </textarea><br>
            <label>Precio: </label>
            <input type="text" id="precio" name="precio"; value="<?php echo $consulta[3] ?>" ><br>
            <label>Stock: </label>
            <input type="text" id="stock" name="stock" value="<?php echo $consulta[4] ?>"><br>
            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>