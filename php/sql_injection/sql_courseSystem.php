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

  function printCursos(){
/*
  $cursos = $this -> selectCursos();
  //print("<p>a</p>");

    while($row = mysqli_fetch_array($cursos)){
      echo '<a href = ../../../index.php> ';
      echo '<div class = "curso">';
      echo '<div class = "elemento" '.
      'style = "background-image:url('.
      $row["imgDir"].
      ')">';
       // lleva a la pagina que muestra cursos

      echo '</div>';
      echo '<div class = "pieTitular">';
      echo $row["course_name"];
      echo '</div>';
      echo '</div></a>';

    }
*/


  }

}

?>
