<?php
$SCOInstanceID = $_GET['SCOInstanceID'] * 1;
$launcher = $_GET['launchpage'];
?>

<html>
<head>
<script language="JavaScript">

		// opens window and runs this SCOInstance
		function runSCO() {
			var SCOInstanceID = "<?php echo $SCOInstanceID ; ?>" ;
      var launch =" <?php echo $launcher ; ?>";
			SCOwin = window.open("../../php/api/rte.php?SCOInstanceID="+SCOInstanceID+"&launchpage="+launch,"SCOwin");
			SCOwin.focus();
		}

	</script>
</head>
<body>
	<table width=100%>
	<tr>
		<td align=left valign=top>
			<form method="post" action="" name="dataForm">
				<h1>VS SCORM Test System</h1>
				<p><a href="javascript:runSCO();">Correr curso</a>
			</form>
		</td>
		<td align=right valign=top>
			<iframe name="monitor" src="" height=400 width=600></iframe>
		</td>
	</tr>
	</table>
</body>
</html>
