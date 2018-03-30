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
		<link href="..\css\style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		    session_start();
		
			require('util/alert_util.php');
			require('dao/UserDAO.php');
			require("objects/User.php");
		?>
		
		<?php
			if(!isset($_GET['username'])) {
				showErrorAll("Error!", "You haven't set the member.");
				return;
			}
			
            $userdao = new UserDAO("localhost", "root", "", "soor");
            
            $users = $userdao->getAllUsers();
            
            $existUser = false;
            
            foreach($users as $tempUser) {
                if(strcmp($tempUser->getUsername(), $_GET['username']) == 0) {
                    $existUser = true;
                }
            }
            
            if($existUser == false) {
                showErrorAll("Error!", "The member doesen't exist.");
                return;
            }
            
            $userdao->deleteUserById($_GET['id']);
            success("Success!", "Deleted successful the user.");
            header("Location: ../index.php?page=members");
            exit();
        ?>
	</body>
</html>