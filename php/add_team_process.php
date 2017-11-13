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
			require("dao/TeamDAO.php");
			require("objects/Team.php");
		?>
		
		<?php		
			if(!isset($_POST['name'])) {
				errorAll("Error!", "You haven't set the teamname.");
				return;
			}
			
            $teamdao = new TeamDAO("localhost", "root", "", "soor");
            
            $teams = $teamdao->getAllTeams();
            
            foreach($teams as $tempTeam) {
                if(strcmp($tempTeam->getName(), $_POST['name']) == 0) {
                    errorAll("Error!", "The teamname exist.");
                    return;
                }
            }
            
            $team = new Team();
            $team->setCreationDate(date("d.m.Y"));
            $team->setName($_POST['name']);
            $team->setDescription($_POST['description']);
            $team->setStatus(0);
            $teamdao->createTeam($team);
            
            successAll("Success!", "Created successful a new team.");
        ?>
	</body>
</html>