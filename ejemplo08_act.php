<?php 
	include 'conexion.php';

	include 'encabezado.php';

	/*
		Ordenado de manera ascendente por el apellido y el nombre
	*/

	$sql = "SELECT * FROM tbl_personas ORDER BY ape, nom";

	$resultado = mysqli_query($enlace, $sql);

	$cantidad = mysqli_num_rows($resultado);

	if ($cantidad > 0){
?>
		<table align="center">
			<tr>
				<th>Identificación</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha de Nacimiento</th>
				<th>Correo Electrónico</th>
				<th>Acción</th>
			</tr>
		<?php while ($data = mysqli_fetch_array($resultado)) { ?>
			<tr>
				<td><?php echo $data['doc']."-".$data['nro'] ?></td>
				<td><?php echo $data['nom'] ?></td>
				<td><?php echo $data['ape'] ?></td>
				<td><?php echo $data['fna'] ?></td>
				<td><?php echo $data['cor'] ?></td>
				<td><a href="ejemplo08_act01.php?id=<?php echo $data['id'] ?>">Actualizar</a></td>
			</tr>
		<?php } ?>
		</table>

<?php
		//$_GET['mensaje'] = "<div class='completado'>Fin del reporte.</div>";
	}else{
		$_GET['mensaje'] = "<div class='alerta'>No hay registros en la tabla tbl_personas.</div>";
	}
?>
<?php 
	include 'pie.php';
?>