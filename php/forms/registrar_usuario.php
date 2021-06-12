<html>

<head>
  <link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">
  <link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
  <meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
  <title> Plataforma Lógica Universitaria Superior </title>
  <meta charset="UTF-8">
</head>

<body>

  <div class= contenedor>


  <header>
      <div id="inicioBoton">
      <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
      </div>
  </header>


  <?php
  if(isset($_POST['envioRegistro'])){

    if($_GET["auth_registroUsuario"]==false) {

      echo  "<p>Compruebe los datos</p>";

    }else{

      echo  "<p>Introduce los datos para registrarte</p>";

      }
  }
  ?>



<div class = contenedorForm>

<div class="registro">

<div class ="form">
      <form method="POST" action ="\php\auth\auth_registroUsuario.php" enctype="multipart/form-data">

        <h1>¡Registrate!</h1>
        <p> Nombre de usuario</p>
        <input type="text" name="nombreUsuario" required>
        <p> Contraseña</p>
        <input type="password" name="pass" required>
        <p>  Confirma tu contraseña</p>
        <input type="password" name="repass" required>
        <p>Ingresa tu email</p>
        <input type="email" name="email" required>
        <p>Nombres</p>
        <input type="text" name="nombrePila" maxlength="32" required>
        <p> apellido Paterno</p>
        <input type="text" name="apellidoPate" maxlength="32" required>
        <p> Apellido Materno* </p>
        <input type="text" name="apellidoMate" maxlength="32">
        <br>
        <input type="submit" name = "envioRegistro" value="Confirmar">
        <br>Los elementos marcados * no son obligatorios
        </form>
</div>
</div>
</div>

<FOOTER>
      <p> Plataforma Lógica Universitaria Superior tiene como objetivo primordial el aprendizaje.</p>
      <p> Mientras usted este utilizando PLUS, usted acepta que ha leído y aceptado nuestros terminos de uso,
      así como nuestra politica de privacidad y cookies </p>
      <p> Universidad de Guadalajara, esta pagina no es una copia literal de coursera y lectortmo, lo juramos. </p>
</FOOTER>


    </div>
</body>

</html>
