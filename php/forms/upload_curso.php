<html>

<link rel="stylesheet" type="text/css" href="../../vistas/CSS/style_general.css">
<link rel="stylesheet" type="text/css" href="../../vistas/CSS/forms_style.css">
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >

<body>

<div class='contenedor'>


<HEADER>

      <div id="inicioBoton">
        <a href = "../../../index.php"><img src = '../../vistas/recursos/Logo.png'></a>
      </div>


</HEADER>

      <div class = 'registro'>
        <div class ='form'>

          <form method='POST' action="\php\auth\auth_uploadCurso.php" enctype="multipart/form-data">
              <input type="file" name="cursoZip" id="zipToUpload">
              <br>
              Agregue una sinopsis sobre el curso ingresado antes de subirlo.
          <p>
            <input type="text" name="Sinopsis" value="Escribe una sinopsis aquí">
          </p>
            <input type="submit" name="envioZip" value="subir">
          </form>

        </div>
      </div>


    <FOOTER>

    </FOOTER>

    </div>

</body>

</html>
