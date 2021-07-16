<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$sqlUser = new sqlUsuario();
$sqlCursos = new sqlCurso();
?>

<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">

<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >

<body>

<div class='contenedor'>


  <HEADER>
    <div id="inicioBoton">
      <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
    </div>
  </HEADER>

  <div class = "cuerpo">

<?php  $sqlCursos->printCursosSubidos($_SESSION['login_user']);?>

  </div>

  <FOOTER>

  </FOOTER>

</div>

</body>

</html>
