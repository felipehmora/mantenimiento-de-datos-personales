<?php 
	include 'conexion.php';

	$sql = "UPDATE tbl_personas set nom = '$_POST[v_nom]',
	                                ape = '$_POST[v_ape]',
	                                dir = '$_POST[v_dir]',
	                                sex = '$_POST[v_sex]',
	                                fna = '$_POST[v_fna]',
	                                cor = '$_POST[v_cor]'
	        						WHERE id = '$_POST[id]'";

	//echo $sql;
	$resultado = mysqli_query($enlace,$sql);

	if ($resultado){
		$texto = "<div class='completado'>El registro fue actualizado con éxito</div>";		
	}else{
		$texto = "<div class='error'>ERROR:".mysqli_error($enlace)."</div>";
	}
	//echo $texto;
	header("location:ejemplo08_act.php?mensaje=".$texto);
?>