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
			require('dao/TeamDAO.php');
			require("objects/Team.php");
		?>
		
		<?php
			if(!isset($_GET['teamname'])) {
				showErrorAll("Error!", "You haven't set the teamname.");
				return;
			}
			
            $teamdao = new TeamDAO("localhost", "root", "", "soor");
            
            $teams = $teamdao->getAllTeams();
            
            $existTeam = false;
            
            foreach($teams as $tempTeam) {
                if(strcmp($tempteam->getName(), $_GET['teamname']) == 0) {
                    $existTeam = true;
                }
            }
            
            if($existTeam == false) {
                showErrorAll("Error!", "The team doesen't exist.");
                return;
            }
            
            $teamdao->deleteTeamById($_GET['id']);
            showSuccessAll("Success!", "Deleted successful the team.");
        ?>
	</body>
</html>