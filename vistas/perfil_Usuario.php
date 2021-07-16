<?php
include_once $_SERVER['DOCUMENT_ROOT'].'..\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
$sql = new sqlUsuario();
$sqlCursos = new sqlCurso();
$consulta = $sql -> selectUser();
$row = mysqli_fetch_array($consulta);
$foto = $row['profilePic'];
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
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/cursos_style.css">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
<body>
<a href ="../../php/logic/logout.php">Logout</a>
  <div id = "cuerpo">
    <div id ='cabecera'>
      <div id="inicioBoton">
      </div>
      <div id='titulo'>
        PLUS
      <!--  <input type="submit" name="jajanose" value="akimero">-->
      <a href="../../index.php">Home</a>
      </div>
      <a href="../../php/forms/upload_curso.php">Sube un curso test</a>
    </div>
    <div id ='torso'>
      <div class="header">
      <?php
      echo "<img class = \"avatar\" src = \" " . $foto . " \">";
      ?>
      <!-- Aqui usuario-->
      <div id="editar">
        <button onclick="location.href='/php/forms/editar_usuario.php'">Editar Perfil</button>
      </div>
      <h1 class="user-name" ><?php echo $row["userName"]?></h1>

      <ul class="infogen">
        <!-- Id usuario xd-->
        <!-- nombre xd-->
        <li>
          <?php echo $row["nombrePila"].' '.$row["apellidoPate"].' '.$row["apellidoMate"]?>
        </li>
        <!-- Correo electronico xd
        <li>
          <a href="mailto:Cuauhtemoc.batres@alumnos.udg">Cuauhtemoc.batres@alumnos.udg</a>
        </li>-->
      </ul>
      <div class = "cuerpo">
        <div class ="flex-container">
        <?php $sqlCursos -> printCursos() ?>
      </div>
      </div>
      </div>
      </div>
    </div>
    <div id ='pie'>
    </div>
</body>
</html>
