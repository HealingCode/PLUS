<?php
include_once $_SERVER['DOCUMENT_ROOT'].'..\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$sql = new sqlUsuario();
$consulta = $sql -> selectUser();
$row = mysqli_fetch_array($consulta);

//session_start();
$veri = new verifier();
$veri -> verify_loginSession();
?>

<html>
<head>
  <title>Panel de usuario</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="CSS/profile_style.css">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
<body>
<a href ="../../php/logic/logout.php">Logout</a>
  <div id = "cuerpo">
    <div id ='cabecera'>
      <div id="inicioBoton">
      </div>
      <div id='titulo'>
        PLUS
        <input type="submit" name="jajanose" value="akimero">
      </div>

    </div>
    <div id ='torso'>
      <div class="header">
      <img class="avatar"src = '../../vistas/recursos/diomio.png'></a>
      <!-- Aqui usuario-->
      <div id="editar">
        <button onclick="location.href='/php/forms/editar_usuario.php'">Editar Perfil</button>
      </div>
      <h1 class="user-name" ><?php echo $row["userName"]?></h1>

      <ul class="infogen">
        <!-- Id usuario xd-->
        <li>
          218296225
        </li>
        <!-- nombre xd-->
        <li>
          <?php echo $row["nombrePila"].' '.$row["apellidoPate"].' '.$row["apellidoMate"]?>
        </li>
        <!-- Correo electronico xd
        <li>
          <a href="mailto:Cuauhtemoc.batres@alumnos.udg">Cuauhtemoc.batres@alumnos.udg</a>
        </li>-->
      </ul>
      <div>
        <h3>Acerca de</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      </div>
      </div>
    </div>
    <div id ='pie'>
    </div>
  </div>
</body>
<html>
