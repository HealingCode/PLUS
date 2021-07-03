<?php

class lectorXML{

function getNameVerLauncher_XMLimsmanifest($filePath){

  $xmlfile = file_get_contents($filePath);
  $new = simplexml_load_string($xmlfile);
  $con = json_encode($new);
  $manifesto = json_decode($con,true);

//==================================================
//OBETER LOS DATOS DE INTERES
//==================================================

//==========
// Nombre del curso
// Version del curso
// Archivo de lanzamiento
//=========

$bandMeta = array_key_exists("metadata",$manifesto);
$bandOrga = array_key_exists("organizations",$manifesto);
$bandResource = array_key_exists("resources",$manifesto);

if($bandMeta && $bandOrga && $bandResource){
$metadata = $manifesto["metadata"];
$organizations = $manifesto["organizations"];
$resources = $manifesto["resources"];

$organization = $organizations["organization"];
$resource = $resources["resource"];

$resource_2 = $resource["@attributes"];

$nombreCurso = $organization["title"];
$launcher = $resource_2["href"];
$version = $metadata["schemaversion"];

$vars = array(
"nombre" => $nombreCurso,
"version" => $version,
"launcher" => $launcher );

return $vars;
}else{
  return NULL;
}
}
}

?>
