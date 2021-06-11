<?php session_start();?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="vistas/CSS/inicio_style.css">
  <link rel="stylesheet" type="text/css" href="vistas/CSS/style_general.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<title> Plataforma Lógica Universitaria Superior </title>
<meta charset="UTF-8">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
</head>
<body>

<div class = "contenedor">


  <header>
    <div id="inicioBoton">

      <a href = "../../../index.html"><img src = 'vistas/recursos/Logo.png'></a>

    </div>

    <div id="login">

<?php
$temp = "\"location.href= '/php/forms/iniciar_sesion.php'\"";
$temp2 = "\"location.href='/vistas/perfil_Usuario.php'\"";
      if(!(isset($_SESSION['login_user']))){
        ECHO "<b onclick=" .$temp . ">Iniciar sesion</b>" ;
      }else{
        ECHO "<b onclick=" .$temp2 . ">Perfil de Usuario</b>";
      }
?>


    </div>

    <div id="registrar">
      <?php
      $temp ="\"location.href='php/forms/registrar_usuario.php'\"";
      if(!(isset($_SESSION['login_user'])))
      {
      ECHO "<b onclick=".$temp. ">registrate</b> ";
      }
      ?>
    </div>

  </header>

<div id='torso'>

<div id="portada">

<h1>PLUS</h1>

</div>



</div>

<!-- CARRUSEL DE IMAGENES -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="vistas/recursos/Estudiando1.jpg">
      <div class="texto-encima">Texto</div>
      <div class="centrado">Centrado</div>
    </div>

    <div class="carousel-item">
      <img src="vistas/recursos/Libros1.jpg" >
    </div>

    <div class="carousel-item">
      <img src="vistas/recursos/Salon1.jpg">
    </div>
  </div>


  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
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
