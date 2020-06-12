<?php

	NuevoProducto($_POST['producto'], $_POST['talla'], $_POST['detalle'], $_POST['precio'], $_POST['stock']);

	function NuevoProducto($producto, $talla, $detalle, $precio, $stock)
	{
		include 'conexion.php';
		$sentencia="INSERT INTO producto(Nombre, Talla, Detalle,  Precio, Stock ) VALUES('".$producto."', '".$talla."', '".$detalle."', '".$precio."', '".$stock."')";
		$conexion->query($sentencia) or die ("Error al ingresar datos" . mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamente!!");
	window.location.href='indexadmin.php';
</script>