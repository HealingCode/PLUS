<html>

<head>
  <link rel="stylesheet" type="text/css" href="inicio_style.css">
<title> Plataforma Lógica Universitaria Superior </title>
<meta charset="UTF-8">
</head>

<div class="sticky">
  <header>
    <a href = ""><img src = "Logo.png"> </a>
  </header>
</div>

<?php
if($_GET["auth_registroUsuario"]==false)
{

  <p>Compruebe los datos</p>

else
{

  <p>Introduce los datos para registrarte</p>

}
}

?>

<div>

  <form method="POST" action ="\php\auth\auth_registroUsuario.php">

  Nombre de usuario
  <input type="text" name="nombreUsuario">
  Contraseña
  <input type="password" name="pass">
  Confirma tu contraseña
  <input type="password" name="repass">


<input type="submit" name = "envioRegistro" value="Envia Formulario">
<input type="reset"  value="Reiniciar informacion">
</form>
</div>


</html>
