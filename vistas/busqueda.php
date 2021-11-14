<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/php\sql_injection\sql_courseSystem.php';

$sqlCursos = new sqlCurso();
?>

<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/cursos_style.css">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >

<body>

<div class='contenedor'>


    <HEADER>

      <div id="inicioBoton">
        <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
      </div>
      <b onclick=" location.href='/vistas/perfil_Usuario.php' ">Perfil de Usuario</b>
    </HEADER>
    <div class = "cuerpo">
      <div class ="flex-container">
      <?php $sqlCursos -> printCursos() ?>
    </div>
    </div>

    <FOOTER>

    </FOOTER>

</div>

</body>

</html>
