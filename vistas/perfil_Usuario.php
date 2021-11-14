<?php
include_once $_SERVER['DOCUMENT_ROOT'].'..\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
$sqlUser = new sqlUsuario();
$sqlCursos = new sqlCurso();
$consulta = $sqlUser -> selectUser();
$row = mysqli_fetch_array($consulta);
$foto = $row['profilePic'];

/*$veri = new verifier();
$veri -> verify_loginSession();*/
?>

<html>
<head>
  <title>Panel de usuario</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="CSS/profile_style.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/cursos_style.css">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
<body>

<button onclick="location.href='../../index.php' "class="btn btn-outline-danger">Home</button>
<button onclick="location.href='../../php/logic/logout.php'" class="btn btn-outline-danger">Logout</button>
<button onclick="location.href='../../vistas/adminCurso.php'" class="btn btn-outline-info" name="admicur"  >Administrar tus cursos</button>
<button onclick="location.href='../../php/forms/upload_curso.php'" class="btn btn-outline-success">Sube un curso</button>

  <div id = "cuerpo">
    <div id ='cabecera'>
      <div id="inicioBoton">
      </div>
      <div id='titulo'>
      </div>
    </div>
    <div id ='torso'>
      <div class="header">
        <div class="botones">


        </div>
      <?php
      echo "<img class = \"avatar\" src = \" " . $foto . " \">";
      ?>

      <div id="editar">
        <button onclick="location.href='/php/forms/editar_usuario.php'" class="btn btn-outline-warning">Editar Perfil</button>
      </div>
      <h1 class="user-name" ><?php echo $row["userName"]?></h1>

      <ul class="infogen">
        <li>
          <?php echo $row["nombrePila"].' '.$row["apellidoPate"].' '.$row["apellidoMate"]?>
        </li>
      </ul>
      <div class = "cuerpo">
        <div class ="flex-container">
        <?php $sqlCursos -> printCursosInscritos($_SESSION['login_user']); ?>
      </div>
      </div>
      </div>
      </div>
    </div>
    <div id ='pie'>
    </div>
</body>
</html>
