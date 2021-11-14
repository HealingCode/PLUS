<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$sqlUser = new sqlUsuario();
$sqlCursos = new sqlCurso();
?>

<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/cursos_style.css">
<script src='..\vistas\js\borrarCurso.js' language='Javascript'></script>
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
<?php  $sqlCursos->printCursosSubidos($_SESSION['login_user']);?>
    </div>
  </div>

  <footer>
      <p> Plataforma Lógica Universitaria Superior tiene como objetivo primordial el aprendizaje.</p>
      <p> Mientras usted este utilizando PLUS, usted acepta que ha leído y aceptado nuestros terminos de uso,
        así como nuestra politica de privacidad y cookies </p>
      <p> Universidad de Guadalajara, esta pagina no es una copia literal de coursera y lectortmo y/o paginas random de anime, lo juramos. </p>
  </footer>

</div>

</body>

</html>
