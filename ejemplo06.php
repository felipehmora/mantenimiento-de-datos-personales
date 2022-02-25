<h1>Serie Fibonacci</h1>
<!--
Por omisión al no indicar method="", el navegador
asume que es GET, en el caso del atributo action=""
el navegador, asume que el programa se llama a si
mismo.
-->
<form method="POST" action="ejemplo07.php">
	<table align="center">
		<tr>
			<td>1er. número:</td>
			<td>
				<input type="number" 
				       name="n1"
				       required="">
			</td>
		</tr>		
		<tr>
			<td>2do. número:</td>
			<td>
				<input type="number"
				       name="n2"
				       required="">
			</td>
		</tr>
		<tr>
			<td>Cantidad:</td>
			<td>
				<input type="number"
				       name="n"
				       required="">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit"
				       name=""
				       value="PRODUCIR">
				<input type="reset"
				       name=""
				       value="LIMPIAR">
			</td>
		</tr>
	</table>
</form>
