<?php
include_once $_SERVER['DOCUMENT_ROOT']. '..\php\sql_injection\sql_courseSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/php\logic\fileManipulate.php';

$sqlCurso = new sqlCurso();
$manipul = new fileManipulate();

$curso = $_POST["idCurso"];
$consulta = $sqlCurso -> selectCursosById($_POST["idCurso"]);

while($row = mysqli_fetch_array($consulta)){

$TITLE = $row["course_name"];
$ZIP =  $row["zip_dir"];
}

/*
  -> Ahora borramos los archivos físicos
  -> Borramos en base al titulo
  -> Borramos el archivo zip

  ~~ @Path: ~> cursos/SCORM/1.2/{$TITLE} :: delete_directory
  ~~ @Path: ~> cursos/SCORM/1.2/zips/{$} :: delete_file

*/

$manipul -> delete_directory("../../cursos/SCORM/1.2/{$TITLE}");
$manipul -> delete_file($ZIP);

/*
  -> Ahora borramos en la base de datos.
*/

$sqlCurso -> deleteCurso($curso);


 ?>
