<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

    require('../../config.php');
	require('../util/alert_util.php');
	require("../dao/TeamDAO.php");
	require("../objects/Team.php");
?>

<?php		
	if(!isset($_POST['name'])) {
		error("Error!", "You haven't set the teamname.");
		header("Location: ../../index.php?page=add_team");
		exit();
		return;
	}
	
	$teamdao = new TeamDAO($CONFIG['sql_address'], $CONFIG['sql_user'], $CONFIG['sql_password'], $CONFIG['sql_database']);
    
    $teams = $teamdao->getAllTeams();
    
    foreach($teams as $tempTeam) {
        if(strcmp($tempTeam->getName(), $_POST['name']) == 0) {
            error("Error!", "The teamname exist.");
            header("Location: ../../index.php?page=add_team");
            exit();
            return;
        }
    }
    
    $team = new Team();
    $team->setCreationDate(date("d.m.Y"));
    $team->setName($_POST['name']);
    $team->setDescription($_POST['description']);
    $team->setStatus(0);
    $teamdao->createTeam($team);
    
    success("Success!", "Created successful a new team.");
    header("Location: ../../index.php?page=teams");
    exit();
?>