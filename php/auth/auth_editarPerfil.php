<?php session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem';
$verify= new verifier();
$sqlUser= new sqlUsuario();
if (isset($_POST['envioUpdate'])) {
  if ($_POST['usuario'] == '' || $_POST['pass'] == '' || $_POST['repass'] == '') {

    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=1");
  }elseif (!($verify -> verify_pass($_POST['pass']))) {

    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=2");

  }elseif (!($verify -> verify_repass($_POST['pass'],$_POST['repass']))) {
    // code...
    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=3");
  }elseif (!($verify -> verify_user($_POST['usuario']))) {
    // code...
    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=4");

  }elseif (!($verify -> verify_names($_POST['nombre'],$_POST['apellido1'],$_POST['apellido2']))) {
    // code...
    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=5");

  }else{

  $sqlUser -> updateUser($_POST['usuario']/*,$_POST['pass'],$_POST['nombre'],$_POST['apellido1'],$_POST['apellido2']*/);
    header("Location:../../index.php?a=1");

  }
}

 ?>
