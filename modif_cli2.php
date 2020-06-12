<?php

	ModificarCliente($_POST['rfc'], $_POST['nombre'], $_POST['ap_paterno'], $_POST['ap_materno'], $_POST['usuario'], $_POST['contraseña'], $_POST['estado'], $_POST['ciudad'], $_POST['calle'], $_POST['no_ext'], $_POST['no_int'], $_POST['colonia'], $_POST['cp'], $_POST['tel'], $_POST['email'], $_POST['id_cliente']);

	function ModificarCliente($rfc, $nombre, $ap_paterno, $ap_materno, $usuario, $contraseña, $estado, $ciudad, $calle, $no_ext, $no_int, $colonia, $cp, $tel, $email, $id_cliente)
	{
		include 'conexion.php';
		$sentencia="UPDATE cliente SET RFC= '".$rfc."', Nombre= '".$nombre."', Ap_paterno= '".$ap_paterno."', Ap_materno= '".$ap_materno."', Nombre_usuario= '".$usuario."', Contraseña= '".$contraseña."', Estado= '".$estado."', Ciudad= '".$ciudad."', Calle= '".$calle."', No_exterior= '".$no_ext."', No_interior= '".$no_int."', Colonia= '".$colonia."', CP= '".$cp."', Telefono= '".$tel."', Email= '".$email."' WHERE Id_cliente='".$id_cliente."'";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Cliente Modificado Exitosamente");
	window.location.href='reg_clientes.php';
</script>