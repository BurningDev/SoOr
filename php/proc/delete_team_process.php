<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

    require('../../config.php');
	require('../util/alert_util.php');
	require('../util/rights_util.php');
	require('../dao/TeamDAO.php');
	require('../dao/RightDAO.php');
	require("../objects/Right.php");
	require("../objects/Team.php");
?>

<?php
    validate_rights("delete_team", "../../index.php?page=teams");    

	if(!isset($_GET['teamname'])) {
		error("Error!", "You haven't set the teamname.");
		header("Location: ../../index.php?page=teams");
		exit();
		return;
	}
	
	$teamdao = new TeamDAO($CONFIG['sql_address'], $CONFIG['sql_user'], $CONFIG['sql_password'], $CONFIG['sql_database']);
    
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
