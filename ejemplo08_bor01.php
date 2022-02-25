<?php 
	include 'conexion.php';

	$sql = "DELETE FROM tbl_personas WHERE id = '$_GET[id]'";

	$resultado = mysqli_query($enlace, $sql);

	if ($resultado){
		$texto = "<div class='completado'>El Registro fue borrado con éxito.</div>";
	}else{
		$texto = "<div class='error'>ERROR:".mysqli_error($enlace)."</div>";
	}

	header("location:ejemplo08_bor.php?mensaje=".$texto);
?>