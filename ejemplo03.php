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
			echo "Debe ingresar los valores para:<br>n1<br>n2<br>n<br>";
		}
/*
localhost/php_nivel1_20210531/ejemplo03.php?n1=3&n2=4&n=10
*/
?>