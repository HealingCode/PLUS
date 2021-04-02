<?php include_once $_SERVER['DOCUMENT_ROOT'].'..\php\logic\verify.php';
session_start();
$veri = new verifier();
$veri -> verify_loginSession();
?>

<html>
<head>
  <title>Panel de usuario</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="CSS/profile_style.css">
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
      <h1 class="user-name" >El men gangozo xd</h1>

      <ul class="infogen">
        <!-- Id usuario xd-->
        <li>
          218296225
        </li>
        <!-- nombre xd-->
        <li>
          Cuauhtemoc batres Lara
        </li>
        <!-- Correo electronico xd-->
        <li>
          <a href="mailto:Cuauhtemoc.batres@alumnos.udg">Cuauhtemoc.batres@alumnos.udg</a>
        </li>
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
