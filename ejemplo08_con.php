<?php 
	include 'encabezado.php';
?>
<form method="POST"
      action="ejemplo08_con01.php">
	<table align="center">
		<tr>
			<td>Identificación:</td>
			<td>
				<select name="v_doc">
					<option value="E">E</option>
					<option value="P">P</option>
					<option value="V"
					        selected="">V</option>
				</select>
				<input type="text" 
				       name="v_nro"
				       required="">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="" value="BUSCAR">
				<input type="reset" name="" value="LIMPIAR">
			</td>
		</tr>
	</table>

<?php 
	include 'pie.php';
?>