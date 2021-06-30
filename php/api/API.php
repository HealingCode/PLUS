<?php


?>

<html>

<script language="javascript">

//----------------------------------------
// BANDERAS ~ Para saber si comenzo o termino la comunicacion
//----------------------------------------
var bandIniciado = false;
var bandFinalizado = false;

//----------------------------------------
// API en javascript ~ Métodos de comunicacion
//----------------------------------------

function LMSInitialize(cadena){ // el parametro cadena se necesita por convencion, pero no se usa

if((bandIniciado) || (bandFinalizado)){ //Si son verdad ambos (empezo y termino por convencion no inicia[Ya acabo])
  return "false";
}

bandIniciado = true;
return "true";
}

function LMSFinish(cadena){

  if((bandIniciado) || (bandFinalizado)){
    return "false";
  }



return "true";
}

function LMSGetValue(){

}

function LMSSetValue(){

}

function LMSCommit(){

}

function LMSGetLastError(){

}

function LMSGetErrorString(){

}

function LMSGetDiagnostic(){

}
</script>
</html>
