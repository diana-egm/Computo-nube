<?php
    EliminarCliente($_GET['Id_cliente']);

    function EliminarCliente($id_cliente){
        include "conexion.php";
        $sentancia= "DELETE FROM Cliente WHERE Id_cliente= '".$id_cliente."' ";
        $conexion->query($sentancia) or die ("Error al eliminar".mysqli_error($conexion)); 
    }
?>

<script type="text/javascript">
    alert("Producto Eliminado Exitosamente");
    window.location.href='reg_clientes.php';
</script>