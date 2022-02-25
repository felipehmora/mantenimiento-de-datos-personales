<?php 
	if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n'])) {
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n  = $_POST['n'];
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