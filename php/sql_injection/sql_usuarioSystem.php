<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlUsuario{

  /*FUNCIONES PARA LA TABLA DE USUARIOS*/
  function insertUser($user,$pass,$email,$nombre,$ApePate,$ApeMate){
    $conexion = conecta();
    $id='';
    mysqli_query($conexion,"INSERT INTO usuario VALUES ('$id','$user','$pass','$email','$nombre','$ApePate','$ApeMate') ");
  }

  function deleteUser(){

  }

  function updateUser(){

  }


  function selectFromUserEmailPass($email,$pass){
    $conexion = conecta();
    $result = mysqli_query($conexion, "SELECT id_usuario FROM usuario WHERE email='$email' AND password='$pass'");
    return $result;
  }

    function selectFromUserIdEmail($email)
    {
      $conexion = conecta();
      $result = mysqli_query($conexion, "SELECT email FROM usuario WHERE email='$email' ");
      return $result;
    }

}

?>
