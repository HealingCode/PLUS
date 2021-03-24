<?php  include $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
$verify = new verifier();
if(isset($_POST['envioRegistro']))
{
   if($_POST['nombreUsuario'] == '' || $_POST['pass'] == '' || $_POST['repass'] == '') {
     //Que no esten vacios.
     header('Location:..\vistas\registrar_usuario.php?auth_registroUsuario=false');

   }elseif(!($verify -> verify_pass($_POST['pass']))) {
     //Que la contraseña cumpla los requisitos
     header('Location:..\vistas\registrar_usuario.php?auth_registroUsuario=false');

   }elseif($verify -> verify_repass($_POST['pass'],$_POST['repass'])) {
     //Que la contraseña sea confirmada
     header('Location:..\vistas\registrar_usuario.php?auth_registroUsuario=false');

   }elseif(!($verify -> verify_user($_POST['nombreUsuario']))) {
     //Que el usuario cumpla los requisitors.
     header('Location:..\vistas\registrar_usuario.php?auth_registroUsuario=false');

   }else{
     // El registro fue exitoso.
     // -> LLAMADA DE METODO SQL
      header('Location:php\vistas\inicio.html?a=1');
   }
 }

 ?>
