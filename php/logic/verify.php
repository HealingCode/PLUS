<?php

class verifier{

function __construct(){
  //vacio D: como su amor por ti !!! D:
}


function verify_repass($pass, $repass){

if($pass == $repass)
{
  return true;
}else{
  return false;
}

}

function verify_pass($pass){
  /*
  La contraseña debe tener:
  almenos 1 letra minuscula
  alemnos 1 letra mayuscula
  almenos 1 numero
  y almenos medir 8 caracteres
  y menos de 16
  */

  $minus = preg_match('@[a-z]@',$pass);
  $mayus = preg_match('@[A-Z]@',$pass);
  $num = preg_match('@[0-9]@',$pass);

if(!$minus || !$mayus || !$num || strlen($pass) < 8 || strlen > 16)
{
  return false;
}else{
  return true;
}

}

function verify_user($user){

if(ctype_alnum($user)){
  return true;
}else{
  return false;
}

}

}


?>
