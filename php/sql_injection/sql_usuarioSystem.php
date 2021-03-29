<?php include $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlUsuario{

  /*FUNCIONES PARA LA TABLA DE USUARIOS*/
  function insertUser($user,$pass,$email,$nombre,$ApePate,$ApeMate){
    $conexion = conecta();
    $id='';
    mysqli_query($conexion,"INSERT INTO usuario VALUES ('$id','$user','$pass','$email','$nombre','$ApePate','$ApeMate') ");
  }

  function deleteUser(){
  }

  function updateUser()
  {
  }

  function editUser()
  {
  }


}

?>
