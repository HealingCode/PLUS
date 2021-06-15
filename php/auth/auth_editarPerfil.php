<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$verify= new verifier();
$sqlUser= new sqlUsuario();


$directorioSubida = "../../vistas/uploadPics/";

$extencionesPermitidas = ['jpg','png',''];

$nombreArchivo = $_FILES['fotoPerfil']['name'];
$sizeArchivo = $_FILES['fotoPerfil']['size'];
$nombreTmpArchivo = $_FILES['fotoPerfil']['tmp_name'];
$tipoArchivo = $_FILES['fotoPerfil']['type'];
$varExt = explode('.',$nombreArchivo);
$extencionArchivo = strtolower(end($varExt));
$directorioFinal = $directorioSubida . basename($nombreArchivo);

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

  }elseif(! in_array($extencionArchivo,$extencionesPermitidas)) {

    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=6");

  }elseif(!($verify -> verify_picSizeTrue($sizeArchivo))) {

    header("Location:../../php/forms/editar_usuario.php?auth_editarPerfil=false?=7");

  }else{
echo $directorioFinal;
  move_uploaded_file($nombreTmpArchivo,$directorioFinal);
  $sqlUser -> updateUser($_POST['usuario'],$_POST['pass'],$_POST['nombre'],$_POST['apellido1'],$_POST['apellido2'], $directorioFinal );
    header("Location:../../vistas/perfil_Usuario.php");

  }
}

 ?>
