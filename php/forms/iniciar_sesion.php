<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">

<body>
<div id='contenedor'>
  <div id = 'cuerpo'>

    <div id = 'cabecera'>

      <div id="inicioBoton">
        <a href = "../../../index.html"><img src = '../../vistas/recursos/Logo.png'></a>
      </div>

      <div id='titulo'>
        PLUS
      </div>

    </div>

    <div id = 'torso'>
      <div id = 'registro'>
        <div id='form'>
          <form method='POST' action="\php\auth\auth_inicioSesion.php">
            <h1> Inicia Sesion! YA! </h1>
            <p> Email </p>
            <input type = "email" name = "email" required>
            <p>Contraseña</p>
            <input type = "password" name ="pass" required>
            <input type = "submit" name = "envioIniSesion" value="Confirmar">
          </form>
        </div>
      </div>
    </div>

    <div id = 'pie'>
      <p> si nos jakeas te buscamos y rompemos una pierna </p>
      <p> Ni que se te ocurra hacernos inyeccion SQL wey </p>
    </div>

  </div>
</div>
</body>

<html>
