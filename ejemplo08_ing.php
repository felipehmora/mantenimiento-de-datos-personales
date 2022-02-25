<?php 
	include 'encabezado.php';
?>
<form method="POST"
      action="ejemplo08_ing01.php">
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
			<td>Nombre:</td>
			<td>
				<input type="text" 
				       name="v_nom"
				       required="">
			</td>
		</tr>
		<tr>
			<td>Apellido:</td>
			<td>
				<input type="text" 
				       name="v_ape"
				       required="">
			</td>			
		</tr>
		<tr>
			<td>Sexo:</td>
			<td>
				<input type="radio" 
				       name="v_sex"
				       value="F"
				       checked="">FEMENINO
				<input type="radio"
				       name="v_sex"
				       value="M">MASCULINO
			</td>
		</tr>
		<tr>
			<td>Fecha de Nacimiento:</td>
			<td>
				<input type="date"
				       name="v_fna"
				       required="">
			</td>
		</tr>
		<tr>
			<td>Dirección:</td>
			<td>
				<textarea name="v_dir"
				          cols="24"
				          rows="3"
				          required=""></textarea>
			</td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td>
				<input type="email" 
				       name="v_cor"
				       required="">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" 
				       name=""
				       value="GUARDAR">
				<input type="reset" 
				       name=""
				       value="LIMPIAR">
			</td>
		</tr>
	</table>	
</form>
<?php 
	include 'pie.php';
?>