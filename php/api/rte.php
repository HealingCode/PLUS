<?php

$SCOInstanceID = $_GET['SCOInstanceID'] * 1;
$launcher = $_GET['launchpage'];
?>

<html>
<head>
	<title>VS SCORM</title>
</head>
<frameset frameborder="0" framespacing="0" border="0" rows="50,*" cols="*" onbeforeunload="API.LMSFinish('');" onunload="API.LMSFinish('');">
	<frame src="../../php/api/api.php?SCOInstanceID=<?php print $SCOInstanceID; ?>" name="API" noresize>
	<frame src=" <?php echo $launcher ?>" name="course">
</frameset>
</html>
