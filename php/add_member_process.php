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
			if(!isset($_POST['username'])) {
				errorAll("Error!", "You haven't set the username.");
				return;
			}
			
            $userdao = new UserDAO("localhost", "root", "", "soor");
            
            $users = $userdao->getAllUsers();
            
            foreach($users as $tempUser) {
                if(strcmp($tempUser->getUsername(), $_POST['username']) == 0) {
                    errorAll("Error!", "The username exist.");
                    return;
                }
            }
            
            $user = new User();
            $user->setCreationDate(date("d.m.Y"));
            $user->setUsername($_POST['username']);
            $user->setPassword(hash("sha256", $_POST['password']));
            if(isset($_POST['admin'])) {
                $user->setAdmin(1);
            } else {
                $user->setAdmin(0);
            }
            $user->setStatus(0);
            $user->setRole($_POST['role']);
            $userdao->createUser($user);
            
            successAll("Success!", "Created successful an new user.");
        ?>
	</body>
</html>