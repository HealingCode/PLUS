<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

function readElement($VarName) {

  $conexion = conecta();
	global $SCOInstanceID;
	$result = mysqli_query($conexion,
  "SELECT VarValue from cursotracking where SCOInstanceID='$SCOInstanceID' and VarName='$VarName'");
	list($value) = mysqli_fetch_array($result);

	return $value;
}

function writeElement($VarName,$VarValue) {

	$conexion = conecta();
	global $SCOInstanceID;
	mysqli_query($conexion,
  "UPDATE cursotracking  SET VarValue='$VarValue' where SCOInstanceID='$SCOInstanceID' and VarName='$VarName'");

	return;

}

function initializeElement($VarName,$VarValue) {

	$conexion = conecta();
	global $SCOInstanceID;


	// look for pre-existing values
	$result = mysqli_query($conexion,
  "SELECT VarValue from cursotracking where SCOInstanceID='$SCOInstanceID' and VarName='$VarName'");
	// if nothing found ...

	if (!mysqli_num_rows($result)) {

    mysqli_query($conexion,"INSERT INTO cursotracking VALUES ('$SCOInstanceID','$VarName','$VarValue') ");

  }
}

function initializeSCO($SCOInstanceID) {

	$conexion = conecta();

	// has the SCO previously been initialized?
	$result = mysqli_query($conexion,
  "SELECT count(VarName) from cursotracking where SCOInstanceID='$SCOInstanceID'");
	list($count) = mysqli_fetch_array($result);

	// not yet initialized - initialize all elements
	if (! $count) {

		// elements that tell the SCO which other elements are supported by this API
		initializeElement('cmi.core._children','student_id,student_name,lesson_location,credit,lesson_status,entry,score,total_time,exit,session_time');
		initializeElement('cmi.core.score._children','raw');

		// student information
		initializeElement('cmi.core.student_name',getFromLMS('cmi.core.student_name'));
		initializeElement('cmi.core.student_id',getFromLMS('cmi.core.student_id'));

		// test score
		initializeElement('cmi.core.score.raw','');
		initializeElement('adlcp:masteryscore',getFromLMS('adlcp:masteryscore'));

		// SCO launch and suspend data
		initializeElement('cmi.launch_data',getFromLMS('cmi.launch_data'));
		initializeElement('cmi.suspend_data','');

		// progress and completion tracking
		initializeElement('cmi.core.lesson_location','');
		initializeElement('cmi.core.credit','credit');
		initializeElement('cmi.core.lesson_status','not attempted');
		initializeElement('cmi.core.entry','ab-initio');
		initializeElement('cmi.core.exit','');

		// seat time
		initializeElement('cmi.core.total_time','0000:00:00');
		initializeElement('cmi.core.session_time','');

	}

	// new session so clear pre-existing session time
	writeElement('cmi.core.session_time','');

	// create the javascript code that will be used to set up the javascript cache,
	$initializeCache = "var cache = new Object();\n";

	$result = mysqli_query($conexion,
  "SELECT VarName,VarValue from cursotracking where SCOInstanceID='$SCOInstanceID'");
	while (list($varname,$varvalue) = mysqli_fetch_array($result)) {

		// make the value safe by escaping quotes and special characters
		$jvarvalue = addslashes($varvalue);

		// javascript to set the initial cache value
		$initializeCache .= "cache['$varname'] = '$jvarvalue';\n";

	}

	// return javascript for cache initialization to the calling program
	return $initializeCache;

}

// ------------------------------------------------------------------------------------
// LMS-specific code
// ------------------------------------------------------------------------------------
function setInLMS($varname,$varvalue) {
	return "OK";
}

function getFromLMS($varname) {

	switch ($varname) {

		case 'cmi.core.student_name':
			$varvalue = "Addison, Steve";
			break;

		case 'cmi.core.student_id':
			$varvalue = "007";
			break;

		case 'adlcp:masteryscore':
			$varvalue = 0;
			break;

		case 'cmi.launch_data':
			$varvalue = "";
			break;

		default:
			$varvalue = '';

	}

	return $varvalue;

}

?>
