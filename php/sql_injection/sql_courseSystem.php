<?php

include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';


class sqlCurso{



function insertCurso($name, $version, $launchDir, $zipDir) {
$conexion = conecta();
    $id='';
    mysqli_query($conexion,"INSERT INTO cursos VALUES (
      '$id','$name','$version','$launchDir','$zipDir') ");

}

}

?>
