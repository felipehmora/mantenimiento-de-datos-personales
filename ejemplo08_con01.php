<?php 
	include 'conexion.php';

	$sql = "SELECT * from tbl_personas where doc = '$_POST[v_doc]' and nro = '$_POST[v_nro]'";

	$resultado = mysqli_query($enlace, $sql);

	if ($resultado){
		$cantidad = mysqli_num_rows($resultado);
		if ($cantidad > 0){
			$data = mysqli_fetch_array($resultado);
			include 'encabezado.php';
?>
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
						<?php echo $data['nom'] ?>
					</td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td>
						<?php echo $data['ape'] ?>
					</td>			
				</tr>
				<tr>
					<td>Sexo:</td>
					<td>
						<?php 
							if ($data['sex'] == "F") {
								echo "FEMENINO";
							}else{
								echo "MASCULINO";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento:</td>
					<td>
						<?php echo $data['fna'] ?>
					</td>
				</tr>
				<tr>
					<td>Dirección:</td>
					<td>
						<textarea cols="24"
						          rows="3"
						          disabled="" 
						          ><?php echo $data['dir'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Correo:</td>
					<td>
						<?php echo $data['cor'] ?>
					</td>
				</tr>
			</table>
<?php
			$_GET['mensaje'] = "<div class='completado'>Consulta efectuada con éxito.</div>";
			include 'pie.php';
		}else{
			$texto = "<div class='alerta'>No se encontró la identificación ".$_POST['v_doc']."-".$_POST['v_nro']." </div>";
			header("location:ejemplo08_con.php?mensaje=".$texto);
		}
	}else{
		$texto = "<div class = 'error'>ERROR:".mysqli_error($enlace)."</div>";
		header("location:ejemplo08_con.php?mensaje=".$texto);
	}
?>