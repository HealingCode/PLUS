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

if(!$minus || !$mayus || !$num || strlen($pass) < 8 || strlen($pass) > 32)
{
  return false;
}else{
  return true;
}

}

function verify_user($user){

if(!(ctype_alnum($user))){
  return false;
}elseif(!(strlen($user) > 25)){
  return false;
}else{
  return true;
}
}


function verify_email($email)
{
  if(strlen($email) > 255)
  {
  return true;

  }else{
  return (filter_var($email, FILTER_VALIDATE_EMAIL )) ? 1 : 0;
 }
}

function verify_names($pila,$paterno,$materno)
{
  if((strlen($pila) > 64)||(strlen($paterno) > 64)||(strlen($materno) > 64)){
    return false;
  }elseif(ctype_alnum($pila)||ctype_alnum($paterno)||(ctype_alnum($materno))){
    return false;
  }else{
    return true;
  }

}

}


?>
