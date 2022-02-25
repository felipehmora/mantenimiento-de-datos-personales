<?php 
  error_reporting(0); // Quitar mensaje de advertencia
  $v_to      = $_POST['v_para'];
  $v_subject = $_POST['v_asunto'];
  $v_message = $_POST['v_mensaje'];
  $resultado = mail($v_to, $v_subject, $v_message);
  if ($resultado){
  	$texto = "<div class='completado'>El correo fue enviado con éxito.</div>";
  }else{
  	$texto = "<div class='alerta'>El correo no fue enviado por una falla en el servidor.</div>";
  }
  header('location:ejemplo08_cor.php?mensaje='.$texto);
?>