<?php 
	include 'conexion.php';

	$sql = "INSERT INTO tbl_personas(doc,nro,nom,
                                     ape,sex,fna,
                                     dir,cor) VALUES 
                                     ('$_POST[v_doc]','$_POST[v_nro]','$_POST[v_nom]',
                                      '$_POST[v_ape]','$_POST[v_sex]','$_POST[v_fna]',
                                      '$_POST[v_dir]','$_POST[v_cor]')";

    $resultado = mysqli_query($enlace, $sql);

    if ($resultado){
    	$texto = "<div class='completado'>El registro fué almacenado con éxito.</div>";
    }else{
        if (mysqli_errno($enlace) == 1062) {
            $texto = "<div class='alerta'>ERROR: El número de identificación ".$_POST['v_doc']."-".$_POST['v_nro'].", ya se encuentra registrado.</div>";
        }else{
    	       $texto = "<div class='error'>ERROR:".mysqli_errno($enlace).",".mysqli_error($enlace)."</div>";
        }
    }

    header("location:ejemplo08_ing.php?mensaje=".$texto);

?>