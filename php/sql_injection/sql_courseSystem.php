<?php

include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';


class sqlCurso{



function insertCurso($name, $version, $launchDir, $zipDir) {
$conexion = conecta();
    $id='';
    $default = '../../vistas/default.jpg';
    mysqli_query($conexion,"INSERT INTO cursos VALUES (
      '$id','$name','$version','$launchDir','$zipDir','$default') ");

}

  function selectCursos(){
    $conexion = conecta();
    $cursos = mysqli_query($conexion, "SELECT * FROM cursos");

      return $cursos;
}



}

?>
