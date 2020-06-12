<?php 
    include "conexion.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="Utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <title>Nuevo Cliente</title>
    </head>

    <body>
        <div class="todo">
            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                    <span> <h1>Agregar nuevo cliente</h1> </span>
                    <br>
                    <form action="nuevo_cli2.php" method="POST">
                        <label>RFC: </label>
                        <input type="text" class="form-control mt-2" id="rfc" name="rfc"><br>
                        <label>Nombre: </label>
                        <input type="text" class="form-control mt-2" id="nombre" name="nombre"><br>
                        <label>Apellido paterno: </label>
                        <input type="text" class="form-control mt-2" id="ap_paterno" name="ap_paterno"><br>
                        <label>Apellido materno: </label>
                        <input type="text" class="form-control mt-2" id="ap_materno" name="ap_materno"><br>
                        <label>Nombre de usuario: </label>
                        <input type="text" class="form-control mt-2" id="usuario" name="usuario"><br>
                        <label>Contraseña: </label>
                        <input type="text" class="form-control mt-2" id="contraseña" name="contraseña"><br>
                        <label>Estado: </label>
                        <input type="text" class="form-control mt-2" id="estado" name="estado"><br>
                        <label>Ciudad: </label>
                        <input type="text" class="form-control mt-2" id="ciudad" name="ciudad"><br>
                        <label>Calle: </label>
                        <input type="text" class="form-control mt-2" id="calle" name="calle"><br>
                        <label>No. exterior: </label>
                        <input type="text" class="form-control mt-2" id="no_ext" name="no_ext"><br>
                        <label>No. interior: </label>
                        <input type="text" class="form-control mt-2" id="no_int" name="no_int"><br>
                        <label>Colonia: </label>
                        <input type="text" class="form-control mt-2" id="colonia" name="colonia"><br>
                        <label>Cp: </label>
                        <input type="text" class="form-control mt-2" id="cp" name="cp"><br>
                        <label>Telefono: </label>
                        <input type="text" class="form-control mt-2" id="telefono" name="telefono"><br>
                        <label>Email</label>
                        <input type="text" class="form-control mt-2" id="email" name="email"><br>
                        <button class="btn btn-primary mt-3">Agregar</button>
                    </form>
                </div>
			</div>
		</div>
    </body>
</html>