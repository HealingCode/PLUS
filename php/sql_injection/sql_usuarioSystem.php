<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlUsuario{

  /*FUNCIONES PARA LA TABLA DE USUARIOS*/
  function insertUser($user,$pass,$email,$nombre,$ApePate,$ApeMate,$default){
    $conexion = conecta();
    $id='';
    mysqli_query($conexion,"INSERT INTO usuario VALUES ('$id','$user','$pass','$email','$nombre','$ApePate','$ApeMate','$default') ");
  }

  function deleteUser(){

  }

  function updateUser($editUser,$editpass,$editnom,$editaPate,$editaMate,$ruta){
    $conexion = conecta();
    $var = $_SESSION['login_user'];
    mysqli_query($conexion, "UPDATE usuario SET
      userName = '$editUser',
      password = '$editpass',
      nombrePila = '$editnom',
      apellidoPate = '$editaPate',
      apellidoMate = '$editaMate',
      profilePic = '$ruta'
      WHERE email = '$var' ");
  }



  function selectUser(){
    $conexion = conecta();
    $var = $_SESSION['login_user'];
    $result = mysqli_query($conexion, "SELECT * FROM usuario where email = '$var' ");
    return $result;
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

  function selectProfilePic($email)
  {
    $conexion = conecta();
    $result = mysqli_query($conexion, "SELECT profilePic FROM usuario WHERE email = '$email' ");
    return $result;
  }

  function registrarCurso($idUser, $idCurso){
    $conexion = conecta();
    mysqli_query($conexion, "INSERT INTO registroCursos VALUES('$idUser','$idCurso')");
  }

}

?>
