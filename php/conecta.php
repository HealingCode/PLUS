<?php

function conecta(){

$server="localhost";
$usuario="root";
$password="";
$db="plus";
$puerto="3306";
$conexion = mysqli_connect($server,$usuario,$password,$db,$puerto);
return $conexion;
}

 ?>
