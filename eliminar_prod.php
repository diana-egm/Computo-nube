<?php

	EliminarProducto($_GET['Id_producto']);

	function EliminarProducto($producto_id)
	{
	    include "conexion.php";
		$sentencia="DELETE FROM Producto WHERE Id_producto='".$producto_id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado Exitosamente");
	window.location.href='indexadmin.php';
</script>