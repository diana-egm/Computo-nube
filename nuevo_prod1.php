<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nuevo producto</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="todo">
			<div id="contenido">
				<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
					<span> <h1>Agregar Producto</h1> </span>
					<br>
					<form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
						<label>Nombre del producto: </label>
						<input type="text" id="producto" name="producto" ><br>
						<label>Talla: </label>
						<input type="text" id="talla" name="talla" ><br>
						<label>Descripcion: </label>
						<textarea style="border-radius: 10px;" rows="3" cols="50" name="detalle" ></textarea><br>
						<label>Precio: </label>
						<input type="text" id="precio" name="precio"><br>
						<label>Stock: </label>
						<input type="text" id="stock" name="stock"><br>
						<br>
						<button type="submit" class="btn btn-success">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>