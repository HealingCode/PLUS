<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_usuarioSystem.php';

$sql = new sqlUsuario();

$consulta = $sql -> selectUser();
$row = mysqli_fetch_array($consulta);

 ?>
<html>
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">

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
    <form method='POST' action="\php\auth\auth_editarPerfil.php">
        <h1>Editar perfil</h1> <br>
        <h2>Datos del usuario a modificar </h2>
         <h4><?php echo "Usuario: ".$row["userName"] ?> </h4>
        <input type="text" name="usuario" placeholder="nuevo usuario">
        <h4> <?php echo 'Contraseña actual: '.$row["password"] ?> </h4>
        <input type="password" name="pass" placeholder="Ingrese la Contraseña Nueva">
        <input type="password" name="repass" placeholder="Verificar la Contraseña Nueva">
        <h4>Email <i>*No modificable*</i> </h4>
        <input type="text" name="email" placeholder="<?php echo $row["email"] ?>" readonly>
        <h4><?php echo "Nombre: ".$row["nombrePila"] ?> </h4>
        <input type="text" name="nombre" placeholder="nuevo nombre">
        <h4><?php echo "Apellido Paterno: ".$row["apellidoPate"] ?> </h4>
        <input type="text" name="apellido1" placeholder="nuevo apellido paterno">
        <h4><?php echo "Apellido Materno: ".$row["apellidoMate"] ?> </h4>
        <input type="text" name="apellido2" placeholder="nuevo apellido Materno">


        <input type = "submit" name = "envioUpdate" value="Confirmar">



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
