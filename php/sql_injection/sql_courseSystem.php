<?php

include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';


class sqlCurso{



function insertCurso($name, $version, $launchDir, $zipDir, $Sinopsis) {
$conexion = conecta();
    $id='';
    $default = '../../vistas/default.jpg';
    mysqli_query($conexion,"INSERT INTO cursos VALUES (
      '$id','$name','$version','$launchDir','$zipDir','$default','$Sinopsis') ");

}

  function selectCursos(){
    $conexion = conecta();
    $cursos = mysqli_query($conexion, "SELECT * FROM cursos");

      return $cursos;
}

  function printCursos(){
    $conexion = conecta();
    $cursos = $this->selectCursos();

    while($row=mysqli_fetch_array($cursos)){
      echo '<a href="../../vistas\paginaCurso.php?id='.$row['id_curso'].'">';
      echo '<div class ="curso">';

      echo '<div class="elemento">';
      echo '<img src = "'.$row['imgDir'].'">';
      echo '</div>';
      echo '<div class ="pieTitular">';
      echo $row['course_name'];
      echo '</div>';

      echo '</div>';
      echo '</a>';
    }

  }

}

?>
