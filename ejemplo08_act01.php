<?php 
	include 'encabezado.php';

	include 'conexion.php';

	$sql = "SELECT * FROM tbl_personas WHERE id = '$_GET[id]'";

	$resultado = mysqli_query($enlace,$sql);

	if ($resultado){
		$data = mysqli_fetch_array($resultado);
?>
		<form method="POST"
		      action="ejemplo08_act02.php">
			<table align="center">
				<tr>
					<td>Identificación:</td>
					<td>
						<?php echo $data['doc']."-".$data['nro'] ?>
					</td>
				</tr>
				<tr>
					<td>Nombre:</td>
					<td>
						<input type="text" 
						       name="v_nom"
						       value="<?php echo $data['nom'] ?>" 
						       required="">
					</td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td>
						<input type="text" 
						       name="v_ape"
						       value="<?php echo $data['ape'] ?>" 
						       required="">
					</td>			
				</tr>
				<tr>
					<td>Sexo:</td>
					<td>
						<?php if ($data['sex'] == "F") { ?>
							<input type="radio" 
							       name="v_sex"
							       value="F"
							       checked="">FEMENINO
							<input type="radio"
							       name="v_sex"
							       value="M">MASCULINO
						<?php } else { ?>
							<input type="radio" 
							       name="v_sex"
							       value="F">FEMENINO
							<input type="radio"
							       name="v_sex"
							       value="M"
							   	   checked="">MASCULINO
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento:</td>
					<td>
						<input type="date"
						       name="v_fna"
						       value="<?php echo $data['fna'] ?>" 
						       required="">
					</td>
				</tr>
				<tr>
					<td>Dirección:</td>
					<td>
						<textarea name="v_dir"
						          cols="24"
						          rows="3"
						          required=""><?php echo $data['dir'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Correo:</td>
					<td>
						<input type="email" 
						       name="v_cor"
						       value="<?php echo $data['cor'] ?>" 
						       required="">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" 
						       name=""
						       value="GUARDAR">
						<input type="hidden" 
						       name="id"
						       value="<?php echo $data['id'] ?>">
					</td>
				</tr>
			</table>	
		</form>
<?php
	}else{
		$texto = "<div class='error'>ERROR:".mysqli_error($enlace)."</div>";
		header("location:ejemplo08_act.php?mensaje=".$texto);
	}
?>
<?php 
	include 'pie.php';
?>