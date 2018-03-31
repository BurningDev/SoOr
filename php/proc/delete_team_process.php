<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

	require('../util/alert_util.php');
	require('../dao/TeamDAO.php');
	require("../objects/Team.php");
?>

<?php
	if(!isset($_GET['teamname'])) {
		error("Error!", "You haven't set the teamname.");
		header("Location: ../../index.php?page=teams");
		exit();
		return;
	}
	
    $teamdao = new TeamDAO("localhost", "root", "", "soor");
    
    $teams = $teamdao->getAllTeams();
    
    $existTeam = false;
    
    foreach($teams as $tempTeam) {
        if(strcmp($tempTeam->getName(), $_GET['teamname']) == 0) {
            $existTeam = true;
        }
    }
    
    if($existTeam == false) {
        error("Error!", "The team doesen't exist.");
        header("Location: ../../index.php?page=teams");
        exit();
        return;
    }
    
    $teamdao->deleteTeamById($_GET['id']);
    success("Success!", "Deleted successful the team.");
    header("Location: ../../index.php?page=teams");
    exit();
?>
