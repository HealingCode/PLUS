<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';
$curso = new sqlCurso();
$user = new sqlUsuario();
$cursos = $curso->selectCursos();
$row = mysqli_fetch_array($cursos);
$idStd = $_SESSION['login_user'];
$idCurso=$_GET['id'];
$registros = $user->selectRegistroCursosSpecific($idStd,$idCurso);
$row2 = mysqli_fetch_array($registros);
$flagRegistro = false;
if($row2 != null){
  $flagRegistro = true;
}
?>

<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<script src='..\vistas\js\registrarCurso.js' language='Javascript'></script>
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >

<body>

<div class='contenedor'>


  <HEADER>
    <div id="inicioBoton">
      <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
    </div>
  </HEADER>

  <div class = "cuerpo">

    <?php
    if($flagRegistro == true){
      echo "Registrado";
    }else{
      echo '<b id="registrador" onclick="registrarCurso(\''.$idCurso.'\',\''.$idStd.'\')">Registrate al Curso </b>';
    }
    ?>

    <img src = "<?php echo $row['imgDir'] ?>">
    <h1>Sinopsis</h1>
    <p><?php echo $row['Sinopsis'] ?></p>
  </div>

  <FOOTER>

  </FOOTER>

</div>

</body>

</html>
