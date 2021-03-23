<?php

function conecta(){

$server="localhost";
$usuario="root";
$password="";
$db="plus";
$puerto="3308";
mysqli_connect($server,$usuario,$password,$db,$puerto);
$conexion = mysqli_connect($server,$usuario,$password,$db,$puerto);
return $conexion;
}

 ?>
