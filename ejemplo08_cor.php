<?php 
	include 'encabezado.php';
?>
	<form method="POST" action="ejemplo08_cor01.php">
		<table align="center">
			<tr>
				<td>Para:</td>
				<td>
					<input type="text" 
					       name="v_para"
					       required="">
				</td>
			</tr>			
			<tr>
				<td>Asunto:</td>
				<td>
					<input type="text"
					       name="v_asunto"
					       required="">
				</td>
			</tr>
			<tr>
				<td>Mensaje:</td>
				<td>
					<textarea cols="24"
					          rows="4"
					          name="v_mensaje"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"
				    align="center">
					<input type="submit" 
					       name=""
					       value="ENVIAR">    	
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