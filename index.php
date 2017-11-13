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
		<link href="css\style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>	
		<?php
		    session_start();
        ?>
	
		<?php
			if(isset($_SESSION['username'])) {
				include('php/components/menu.php');
				
				if(!isset($_GET["page"])) {
				    include "php/home.php";
				} else {
				    include "php/".$_GET["page"].".php";
				}
			}
		?>
		
		<?php		
			if(!isset($_SESSION['username'])) {
				include('php/login.php');
				return;
			}
		?>
		
	    <!-- JS -->
		<script type="text/javascript" src="lib\popper\popper.js"></script>
		<script type="text/javascript" src="lib\popper\popper-utils.js"></script>
		<script type="text/javascript" src="lib\jquery\jquery.js"></script>
		<script type="text/javascript" src="lib\jquery\jquery-ui.js"></script>
		<script type="text/javascript" src="lib\bootstrap\bootstrap.js"></script>
	</body>
</html>