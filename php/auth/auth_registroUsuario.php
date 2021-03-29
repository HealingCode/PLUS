<?php
include $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
include $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$verify = new verifier();
$sqlUser = new sqlUsuario();
if(isset($_POST['envioRegistro'])) {
  if($_POST['nombreUsuario'] == '' || $_POST['pass'] == '' || $_POST['repass'] == '') {
    //Que no esten vacios.
    header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=1");
  }elseif(!($verify -> verify_pass($_POST['pass']))) {
    //Que la contraseña cumpla los requisitos
  header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=2");
  }elseif(!($verify -> verify_repass($_POST['pass'],$_POST['repass']))) {
    //Que la contraseña sea confirmada
    header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=3");
  }elseif(!($verify -> verify_user($_POST['nombreUsuario']))) {
    //Que el usuario cumpla los requisitors.
    header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=4");
  /*
}elseif(($verify -> verify_email($_POST['email']))) {
    //Que el usuario cumpla el email
    header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=5");
*/
  }elseif(!($verify -> verify_names($_POST['nombrePila'],$_POST['apellidoPate'],$_POST['apellidoMate']))){
    //Que el usuario cumpla sus nombres y apellidos.
    header("Location:../../php/forms/registrar_usuario.php?auth_registroUsuario=false?a=6");
  }else{
    // El registro fue exitoso.
    // -> LLAMADA DE METODO SQL
    // -> iniciar sesion
    $sqlUser -> insertUser($_POST['nombreUsuario'],$_POST['pass'],$_POST['email'],$_POST['nombrePila'],$_POST['apellidoPate'],$_POST['apellidoMate']);
    header("Location:../../index.html?a=1");
  }
}

 ?>
