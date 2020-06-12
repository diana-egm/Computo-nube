<?php
	NuevoCliente($_POST['rfc'], $_POST['nombre'], $_POST['ap_paterno'], $_POST['ap_materno'], $_POST['usuario'], $_POST['contraseña'], $_POST['estado'], $_POST['ciudad'], $_POST['calle'], $_POST['no_ext'], $_POST['no_int'], $_POST['colonia'], $_POST['cp'], $_POST['telefono'], $_POST['email']);

	function NuevoCliente($rfc, $nombre, $ap_paterno, $ap_materno, $usuario, $contraseña, $estado, $ciudad, $calle, $no_ext, $no_int, $colonia, $cp, $telefono, $email)
	{
		include 'conexion.php';
		$sentencia="INSERT INTO cliente(RFC, Nombre, Ap_paterno, Ap_materno, Nombre_usuario, Contraseña, Estado, Ciudad, Calle, No_exterior, No_interior, Colonia, CP, Telefono, Email) VALUES('".$rfc."', '".$nombre."', '".$ap_paterno."', '".$ap_materno."', '".$usuario."', '".$contraseña."', '".$estado."', '".$ciudad."', '".$calle."', '".$no_ext."', '".$no_int."', '".$colonia."', '".$cp."', '".$telefono."', '".$email."')";
		$conexion->query($sentencia) or die ("Error al ingresar datos" . mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Cliente Ingresado Exitosamente!!");
	window.location.href='reg_clientes.php';
</script>