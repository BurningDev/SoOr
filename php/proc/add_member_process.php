<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<?php
    session_start();

	require('../util/alert_util.php');
	require('../dao/UserDAO.php');
	require("../objects/User.php");
?>

<?php		
	if(!isset($_POST['username'])) {
		error("Error!", "You haven't set the username.");
		header("Location: ../../index.php?page=add_member");
		exit();
		return;
	}
	
	if(strcmp($_POST['passwordRe'], $_POST['password']) != 0) {
	    error("Error!", "The passwords must be equal.");
	    header("Location: ../../index.php?page=add_member");
	    exit();
	    return;
	}
	
    $userdao = new UserDAO("localhost", "root", "", "soor");
    
    $users = $userdao->getAllUsers();
    
    foreach($users as $tempUser) {
        if(strcmp($tempUser->getUsername(), $_POST['username']) == 0) {
            error("Error!", "The username exist.");
            header("Location: ../../index.php?page=add_member");
            exit();
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
    
    success("Success!", "Added successfully a member.");
    header("Location: ../../index.php?page=members");
    exit();
?>