<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\logic\verify.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\sql_courseSystem.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/php/logic/lectorXML.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/php\logic\fileManipulate.php';
$verify = new verifier();
$sqlCurso = new sqlCurso();
$xmlLector = new lectorXML();
$manipul = new fileManipulate();
//--------------------
// Variables de archivo ZIP
//--------------------

$dirToUploadZip = "../../cursos/SCORM/1.2/zips/";
$extencionPermitida = 'zip';
$fileName = $_FILES['cursoZip']['name'];
$fileSize = $_FILES['cursoZip']['size'];
$fileTmpName  = $_FILES['cursoZip']['tmp_name'];
$fileType = $_FILES['cursoZip']['type'];
$tmpNoerr= explode('.', $fileName);
$fileExtension = strtolower(end($tmpNoerr));
$dirToUpload = $dirToUploadZip . basename($fileName);


//--------------------
// Verify
//--------------------

if(isset($_POST['envioZip'])){

if(!$verify -> verify_extencion($fileExtension, $extencionPermitida)){

header("Location:../../php/forms/upload_curso.php?auth_uploadCurso.php=false?=1");

}elseif(!$verify -> verify_courseSize($fileSize)){

header("Location:../../php/forms/upload_curso.php?auth_uploadCurso.php=false?=2");

}else{
  // todo bien aqui
$banderaSubido = move_uploaded_file($fileTmpName, $dirToUpload);
}

}

//DESCOMPRIMIR CURSO

//--------------------
// HAY QUE EditarR LA PARTE QUE DICE TEST EN EL METODO DE EXTRACTO
// DEBIDO A QUE ESO DEBE SER ACORDE AL NOMBRE DEL CURSO EN CUESTION
//--------------------
if($banderaSubido){

$zip = new ZipArchive;
$zip -> open($dirToUpload);
mkdir('../../cursos/SCORM/1.2/test');
$zip -> extractTo('../../cursos/SCORM/1.2/test');


//----------------------------------------
//lEER EL MANIFESTO SCORM
//----------------------------------------

$pathManifest = '../../cursos/SCORM/1.2/test/imsmanifest.xml';
$SCOdatos = $xmlLector -> getNameVerLauncher_XMLimsmanifest($pathManifest);
$tituloCurso = $SCOdatos["nombre"];
$version = $SCOdatos["version"];
$launchDir = $SCOdatos["launcher"];

mkdir("../../cursos/SCORM/". $version.'/' . $tituloCurso.'/');
$zip -> extractTo("../../cursos/SCORM/". $version. '/'. $tituloCurso);
$zip -> close();
$sqlCurso -> insertCurso($tituloCurso,$version,$launchDir,$dirToUpload);

//BORRAR LOS ARCHIVOS

$manipul -> delete_directory('../../cursos/SCORM/1.2/test/');
header("Location:../../../../index.php");
}

?>
