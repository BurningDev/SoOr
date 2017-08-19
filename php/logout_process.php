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
		<!-- CSS -->
		<link href="..\lib\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
	        session_start();
		
			require('util/alert_util.php');
		?>
		
		<?php
		      session_destroy();
		      
		      successAll("Success", "You are logged off.");
        ?>
        
        <script type="text/javascript">
        	setTimeout(function(){ 
        		window.location.href = '../index.php'; 
        	}, 2000);
        </script>
	</body>
</html>