<?php  include $_SERVER['DOCUMENT_ROOT']."/php/logic/verify.php";
$verify = new verifier();
if(isset($_POST['envioRegistro']))
{
   if($_POST['nombreUsuario'] == '' || $_POST['pass'] == '' || $_POST['repass'] == '') {
     header("Location:registrar_usuario.php?auth_registroUsuario=false")
   }elseif(!($verify -> verify_pass($_POST['pass']))){
     header("Location:registrar_usuario.php?auth_registroUsuario=false")
   }elseif(!($verify -> verify_user($_POST['nombreUsuario']))) {
     header("Location:registrar_usuario.php?auth_registroUsuario=false")
   }else{
     //El registro fue exitoso.
      header("Location:inicio.html")
   }
 }

 ?>
