<?php

	ModificarProducto($_POST['nombre'], $_POST['talla'], $_POST['detalle'], $_POST['precio'], $_POST['stock'], $_POST['id_producto']);

	function ModificarProducto($nombre, $talla, $detalle, $precio, $stock, $id_producto)
	{
		include 'conexion.php';
		$sentencia="UPDATE producto SET Nombre= '".$nombre."', Talla='".$talla."', Detalle='".$detalle."', Precio='".$precio."', Stock='".$stock."' WHERE Id_producto='".$id_producto."'";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Modificado Exitosamente");
	window.location.href='indexadmin.php';
</script>