<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<!DOCTYPE html>
<html>
	<head>
		<!-- OTHER -->
		<title>Softwarename</title>
		<!-- META -->
		<meta charset="utf-8">
		<!-- CSS -->
		<link href="..\lib\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			require('util/alert_util.php');
		?>
		
		<?php
			if(!isset($_POST['username'])) {
				errorAll("Error!", "You haven't set the username.");
			}
			
			
		?>
	</body>
</html>