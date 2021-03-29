<?php
include $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
include $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$sqlUser = new sqlUsuario();

if(isset($_POST['envioIniSesion'])){
$consulta = $sqlUser -> selectFromUserEmailPass($_POST['email'],$_POST['pass']);
$row = mysqli_fetch_array($consulta);

  if($row == null)
  {
    header("Location:../../php/forms/iniciar_sesion.php?try=fail.php");
  }else{
    $mail = $row['email'];
    echo "$mail" ;
    header("Location:../../vistas/perfil_Usuario.php");
  }

}

 ?>
