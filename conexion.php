<?php 
/*
https://micursohtml.000webhostapp.com/php_nivel1_20210531/

https://www.php.net/manual/es/function.mysqli-connect.php

https://www.php.net/manual/es/mysqli.connect-error.php
*/
	$servidor = "localhost";
	//$usuario  = "root";
    $usuario  = "id14560744_root";
	//$clave    = "";
	$clave    = "(5uKFYWh&@L%1hgG";
	//$bd       = "bdphp1_20210531";
	$bd       = "id14560744_bdphp1_20210531";
	$enlace = mysqli_connect($servidor,
	                         $usuario,
	                         $clave,
	                         $bd);
	if (!$enlace) {
		$texto = "<div class='error'>ERROR:".mysqli_connect_error()."</div>";
		header("location:ejemplo08.php?mensaje=".$texto);
	}

?>