<html>

<!--<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">-->
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >\
<title>Iniciar Sesion </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/my.css">
</head>
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
<body>


    <HEADER>
          <div id="inicioBoton">
            <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
          </div>
    </HEADER>
  
  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
      <div class="modal-content">
        <div class="col-12 user-img">
          <img src='../../vistas/recursos/user.png'/>

        </div>
        <form method='POST' action="\php\auth\auth_inicioSesion.php" class="col-12 ">
          <div class="form-group" id="user-group">
            <input type="text" name = "email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group" id="contrasena-group">
            <input type="password" name ="pass" class="form-control" placeholder="Contraseña" required>
          </div>
          <button type="submit" name = "envioIniSesion" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Confirmar </button>
        </form>
        <div class="col-12 forgot">
          <a href="#">Recordar Contraseña</a>
        </div>
      </div>
    </div>
    <FOOTER>
      <p> si nos jakeas te buscamos y rompemos una pierna </p>
      <p> Ni que se te ocurra hacernos inyeccion SQL wey </p>
    <FOOTER>
  </div>


<!-- <div class='contenedor'>
<HEADER>
      <div id="inicioBoton">
        <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
      </div>
</HEADER>
     <div class = 'registro'>
        <div class ='form'>
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
    <FOOTER>
      <p> si nos jakeas te buscamos y rompemos una pierna </p>
      <p> Ni que se te ocurra hacernos inyeccion SQL wey </p>
    <FOOTER>
    </div>-->
</body>

<html>
