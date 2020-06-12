<?php

  $consulta=ConsultarCliente($_GET['Id_cliente']);

  function ConsultarCliente($id_cliente)//variable numero de cliente
  {
    include 'conexion.php';
    $sentencia="SELECT * FROM Cliente WHERE Id_cliente='".$id_cliente."' ";
    $resultado=$conexion->query($sentencia) or die ("Error en la consulta".mysqli_error($conexion));
    $filas=$resultado->fetch_assoc();
    return [
        $filas['RFC'],
        $filas['Nombre'],
        $filas['Ap_paterno'],
        $filas['Ap_materno'],
        $filas['Nombre_usuario'],
        $filas['Contraseña'],
        $filas['Estado'],
        $filas['Ciudad'],
        $filas['Calle'],
        $filas['No_exterior'],
        $filas['No_interior'],
        $filas['Colonia'],
        $filas['CP'],
        $filas['Telefono'],
        $filas['Email']
    ];
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Cliente</title>
    </head>
    <body>
        <div class="todo">
            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <span> <h1>Modificar Cliente</h1> </span>
                <br>
                <form action="modif_cli2.php" method="POST" style="border-collapse: separate; border-spacing: 500px 20px;">
                    <input type="hidden" name="id_cliente" value="<?php echo $_GET['Id_cliente']?> ">
                    <label>RFC: </label>
                    <input type="text" id="rfc" name="rfc"; value="<?php echo $consulta[0] ?>" ><br>
                    <label>Nombre: </label>
                    <input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[1] ?>" ><br>
                    <label>Apellido paterno: </label>
                    <input type="text" id="ap_paterno" name="ap_paterno"; value="<?php echo $consulta[2] ?>" ><br>
                    <label>Apellido materno: </label>
                    <input type="text" id="ap_materno" name="ap_materno"; value="<?php echo $consulta[3] ?>" ><br>
                    <label>Nombre de usuario: </label>
                    <input type="text" id="usuario" name="usuario"; value="<?php echo $consulta[4] ?>" ><br>
                    <label>Contraseña: </label>
                    <input type="text" id="contraseña" name="contraseña"; value="<?php echo $consulta[5] ?>" ><br>
                    <label>Estado: </label>
                    <input type="text" id="estado" name="estado"; value="<?php echo $consulta[6] ?>" ><br>
                    <label>Ciudad: </label>
                    <input type="text" id="ciudad" name="ciudad"; value="<?php echo $consulta[7] ?>" ><br>
                    <label>Calle: </label>
                    <input type="text" id="calle" name="calle"; value="<?php echo $consulta[8] ?>" ><br>
                    <label>No. exterior: </label>
                    <input type="text" id="no_ext" name="no_ext"; value="<?php echo $consulta[9] ?>" ><br>
                    <label>No. interior: </label>
                    <input type="text" id="no_int" name="no_int"; value="<?php echo $consulta[10] ?>" ><br>
                    <label>Colonia: </label>
                    <input type="text" id="colonia" name="colonia"; value="<?php echo $consulta[11] ?>" ><br>
                    <label>CP: </label>
                    <input type="text" id="cp" name="cp"; value="<?php echo $consulta[12] ?>" ><br>
                    <label>Telefono: </label>
                    <input type="text" id="tel" name="tel"; value="<?php echo $consulta[13] ?>" ><br>
                    <label>Email: </label>
                    <input type="text" id="email" name="email" value="<?php echo $consulta[14] ?>" ><br>
                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
                </div>
            </div>
        </div> 
    </body>
</html>