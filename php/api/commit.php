<?php

include_once $_SERVER['DOCUMENT_ROOT'].'\php\api\subs.php';

//  read database login information and connect

// read SCOInstanceID
$SCOInstanceID = $_REQUEST['SCOInstanceID'] * 1;
$data = $_REQUEST['data'];
if (! is_array($data)) { $data = array($data); }

// iterate through the data elements
foreach ($data as $varname => $varvalue) {

	// save data to the 'scormvars' table
	writeElement($varname,$varvalue);

	// special cases - set appropriate values in the LMS tables when they are set by the course
	if ($varname == "cmi.core.score.raw") { setInLMS('TestScore',$varvalue); }
	if ($varname == "cmi.core.lesson_status") { setInLMS('Finished',$varvalue); }

}

// return value to the calling program
print "true";

?>
