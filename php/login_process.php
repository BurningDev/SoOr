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
			require('dao/UserDAO.php');
			require("objects/User.php");
		?>
		
		<?php
			if(!isset($_POST['username'])) {
				errorAll("Error!", "You haven't set the username.");
				return;
			}
			
            $teamdao = new UserDAO("localhost", "root", "", "soor");
            $teams = $teamdao->getAllUsers();
            
            $existUser = false;
            
            foreach ($teams as $user) {
                if(strcmp($user->getUsername(), $_POST['username']) == 0) {
                    $existUser = true;
                    if(strcmp($user->getPassword(), hash("sha256", $_POST['password'])) == 0) {
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = hash("sha256", $_POST['password']);
                        
                        successAll("Success!", "You are logged in.");
                    } else {
                        errorAll("Error!", "Password is wrong.");
                        return;
                    }
                }
            }
            
            if($existUser == false) {
                errorAll("Error!", "Username not found.");
            }
        ?>
        
        <script type="text/javascript">
        	setTimeout(function(){ 
        		window.location.href = '../index.php'; 
        	}, 1500);
        </script>
	</body>
</html>