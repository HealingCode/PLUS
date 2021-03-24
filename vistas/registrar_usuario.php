<html>

<head>
  <link rel="stylesheet" type="text/css" href="registrar_usuario_style.css">
<title> Plataforma Lógica Universitaria Superior </title>
<meta charset="UTF-8">
</head>
<div>
<body>
<div class="sticky">
  <header>
    <a href = ""><img src = "Logo.png"> </a>
  </header>
</div>
<?php
if($_GET["auth_registroUsuario"]==false)
  {
echo  "<p>Compruebe los datos</p>";
}else
{
echo  "<p>Introduce los datos para registrarte</p>";
}
?>

<div class="form">

  <form method="POST" action ="\php\auth\auth_registroUsuario.php">

<p> Nombre de usuario</p>
  <input type="text" name="nombreUsuario">
<p>  Contraseña</p>
  <input type="password" name="pass">
<p>  Confirma tu contraseña</p>
  <input type="password" name="repass">


<input type="submit" name = "envioRegistro" value="Envia Formulario">
<input type="reset"  value="Reiniciar informacion">
</form>
</div>
</body>
</div>
</html>
