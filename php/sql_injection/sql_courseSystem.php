<?php

include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';


class sqlCurso{



function insertCurso($name, $version, $launchDir, $zipDir, $Sinopsis, $owner) {
$conexion = conecta();
    $id='';
    $default = '../../vistas/default.jpg';
    mysqli_query($conexion,"INSERT INTO cursos VALUES (
      '$id',
      '$name',
      '$version',
      '$launchDir',
      '$zipDir',
      '$default',
      '$Sinopsis',
      '$owner')
      ");

}

function deleteCurso($idCurso){
$conexion = conecta();
mysqli_query($conexion, "DELETE FROM cursos WHERE id_curso = '$idCurso'");

}

  function selectCursos(){
    $conexion = conecta();
    $cursos = mysqli_query($conexion,
    "SELECT * FROM cursos");

      return $cursos;
}

  function selectCursosById($id){
    $conexion = conecta();
    $cursos = mysqli_query($conexion,
    "SELECT * FROM cursos
    WHERE id_curso = '$id'");

      return $cursos;
  }

  function selectCursosByOwner($id){
    $conexion = conecta();
    $cursos = mysqli_query($conexion,
    "SELECT * FROM cursos
    WHERE owner_email = '$id'");

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

  function printCursosInscritos($idUser){
    $conexion = conecta();
    $registrados = mysqli_query($conexion,
    "SELECT curso FROM registroCursos
    WHERE email = '$idUser'");

    // ENTONCES SE HACE UNA CONSULTA A LA TABLA DE CURSOS
    // SE OBTIENE LA INFORMACION DEL CURSO
    // SE DESPLIEGA DE MANERA BONITA
    // Y ENTONCES SI SE CLICKEA ~~
    // EL <a> REDIRIGE A UN HANDLER CON LOS DATOS DEL USUARIO

    if($registrados != null){
    $inscripciones = array();

    while($row = mysqli_fetch_array($registrados)){
      array_push($inscripciones, $row["curso"]);
    }
    //========================================
    // ~~ Ahora se hace la impresion
    //========================================

    $cont = count($inscripciones);

    for ($i=0; $i < $cont ; $i++) {

      $cursos = $this->selectCursosById($inscripciones[$i]);

      while($row = mysqli_fetch_array($cursos)){

    /*
    ~~ Impresion de los cursos ~~
    */
    echo '<a href="'.$row['launch_dir'].'">';
    echo '<div class ="curso">';

    echo '<div class="elemento">';
    echo '<img src = "'.$row['imgDir'].'">';
    echo '</div>';
    echo '<div class ="pieTitular">';
    echo $row['course_name'];
    echo '</div>';
    echo '</div>';
    echo '</a>';

    /*
    ~~ Fin impresion de los cursos ~~
    */
  }
}

  }else{
  echo "<H1>Registrate en algún curso !</H1>";
}
}

  function printCursosSubidos($idUser){
    $conexion = conecta();
    $cursos = $this -> selectCursosByOwner($idUser);

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

      /*
        Impresion de botones que borran y editan haciendo llamada AJAX

        Ejemplo : echo '<b id="registrador" onclick="registrarCurso(\''.$idCurso.'\',\''.$idStd.'\')">Registrate al Curso </b>';
      */

      echo '<b id = "borrador" onclick= "borrarCurso(\''.$row['id_curso'].'\')">Borrar</b>';
      echo '<b id = "editador" onclick= "editarCurso()">Editar</b>';
    }
  }
}

?>
