<html>

<head>
  <link rel="stylesheet" type="text/css" href="../../vistas/registrar_usuario_style.css">
  <title> Plataforma Lógica Universitaria Superior </title>
  <meta charset="UTF-8">
</head>

<body>

  <div id= contenedor>

  <div id="cuerpo">

  <div id="cabecera">
    <header>

      <div id = "navMenu">

      </div>

      <div id="inicioBoton">
        <a href = ""><img src = "Logo.png"> </a>
      </div>

      <div id="login">

      </div>

    </header>
  </div>


  <?php
  if(isset($_POST['envioRegistro'])){

    if($_GET["auth_registroUsuario"]==false) {

      echo  "<p>Compruebe los datos</p>";

    }else{

      echo  "<p>Introduce los datos para registrarte</p>";

      }
  }
  ?>



<div id="torso">

<div id="registro">
<div id ="form">
      <form method="POST" action ="\php\auth\auth_registroUsuario.php">

        <h1>¡Registrate!</h1>
        <p> Nombre de usuario</p>
        <input type="text" name="nombreUsuario">
        <p> Contraseña</p>
        <input type="password" name="pass">
        <p>  Confirma tu contraseña</p>
        <input type="password" name="repass">
        <p>Ingresa tu email</p>
        <input type="email" name="email">
        <p>Nombres</p>
        <input type="text" name="nombrePila" maxlength="32">
        <p> apellido Paterno</p>
        <input type="text" name="apellidoPate" maxlength="32">
        <p> Apellido Materno* </p>
        <input type="text" name="apellidoMate" maxlength="32">
        <br>
        <input type="submit" name = "envioRegistro" value="Confirmar">
        <br>Los elementos marcados * no son obligatorios
        </form>
</div>
</div>

</div>

  <div id="pie">
    <footer>
      <p> Plataforma Lógica Universitaria Superior tiene como objetivo primordial el aprendizaje.</p>
      <p> Mientras usted este utilizando PLUS, usted acepta que ha leído y aceptado nuestros terminos de uso,
      así como nuestra politica de privacidad y cookies </p>
      <p> Universidad de Guadalajara, esta pagina no es una copia literal de coursera y lectortmo, lo juramos. </p>
    </footer>
  </div>


    </div>
    </div>
</body>

</html>
