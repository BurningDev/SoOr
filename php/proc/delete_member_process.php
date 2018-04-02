<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

    require('../../config.php');
	require('../util/alert_util.php');
	require('../util/rights_util.php');
	require('../dao/UserDAO.php');
	require('../dao/RightDAO.php');
	require("../objects/Right.php");
	require("../objects/User.php");
?>

<?php
    validate_rights("delete_member", "../../index.php?page=members");

	if(!isset($_GET['username'])) {
		error("Error!", "You haven't set the member.");
		header("Location: ../../index.php?page=members");
		exit();
		return;
	}
	
	$userdao = new UserDAO($CONFIG['sql_address'], $CONFIG['sql_user'], $CONFIG['sql_password'], $CONFIG['sql_database']);
    
    $users = $userdao->getAllUsers();
    
    $existUser = false;
    
    foreach($users as $tempUser) {
        if(strcmp($tempUser->getUsername(), $_GET['username']) == 0) {
            $existUser = true;
        }
    }
    
    if($existUser == false) {
        error("Error!", "The member doesen't exist.");
        header("Location: ../../index.php?page=members");
        exit();
        return;
    }
    
    $userdao->deleteUserById($_GET['id']);
    success("Success!", "Deleted successful the user.");
    header("Location: ../../index.php?page=members");
    exit();
?>
