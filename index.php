<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<!DOCTYPE html>
<html>
	<head>
		<!-- OTHER -->
		<title>SoOr</title>
		<!-- META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link href="lib\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- JS -->
		<script src="lib\bootstrap\bootstrap.min.js" ></script>
		<script src="lib\jquery\jquery.js" ></script>
	</head>
	<body>
		<?php
			if(isset($_SESSION['username'])) {
				include('php/components/menu.php');
			}
		?>
		
		<?php
			if(!isset($_SESSION['username'])) {
				include('php/login.php');
				return;
			}
		?>
	</body>
</html>