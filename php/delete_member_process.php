<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

	require('util/alert_util.php');
	require('dao/UserDAO.php');
	require("objects/User.php");
?>

<?php
	if(!isset($_GET['username'])) {
		error("Error!", "You haven't set the member.");
		header("Location: ../index.php?page=members");
		exit();
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
        error("Error!", "The member doesen't exist.");
        header("Location: ../index.php?page=members");
        exit();
        return;
    }
    
    $userdao->deleteUserById($_GET['id']);
    success("Success!", "Deleted successful the user.");
    header("Location: ../index.php?page=members");
    exit();
?>
