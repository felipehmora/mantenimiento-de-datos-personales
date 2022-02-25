<h1>Serie Fibonacci</h1>
<!--
Por omisión al no indicar method="", el navegador
asume que es GET, en el caso del atributo action=""
el navegador, asume que el programa se llama a si
mismo.
-->
<form method="" action="">
	<table align="center">
		<tr>
			<td>1er. número:</td>
			<td>
				<input type="number" 
				       name="n1">
			</td>
		</tr>		
		<tr>
			<td>2do. número:</td>
			<td>
				<input type="number"
				       name="n2">
			</td>
		</tr>
		<tr>
			<td>Cantidad:</td>
			<td>
				<input type="number"
				       name="n">
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
<?php 
	if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n'])) {
			$n1 = $_GET['n1'];
			$n2 = $_GET['n2'];
			$n  = $_GET['n'];
			$suma = 0;
			$i = 2;
			echo $n1."<br>";
			echo $n2."<br>";
			while ($i < $n) {
				$suma = $n1 + $n2;
				echo $suma."<br>";
				$n1 = $n2;
				$n2 = $suma;
				$i = $i + 1;
			}
		}else{
			echo "Debe ingresar los valores para:<br>1er. número<br>2do. número<br>Cantidad<br>";
		}
/*
localhost/php_nivel1_20210531/ejemplo03.php?n1=3&n2=4&n=10
*/
?>