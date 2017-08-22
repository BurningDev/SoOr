<div class="container">
	<?php
	   require('dao/UserDAO.php');
       require("objects/User.php");
       require('util/alert_util.php');
          	
       if(!isset($_GET['username'])) {
           errorAll("Error!", "You don't set the username.");
           return;
       }
       
       $userDao = new UserDAO("localhost", "root", "", "soor");
       $users = $userDao->getAllUsers();
       $user = null;
       
       foreach($users as $userTemp) {
           if(strcmp($userTemp->getUsername(), $_GET['username']) == 0) {
               $user = $userTemp;
           }
       }
       
       if($user == null) {
           errorAll("Error!", "The user doesen't exist.");
           return;
       }
    ?>
    
    <br />
    <h3><?php echo $user->getUsername(); ?></h3>
    <b>CreationDate: </b><?php echo $user->getCreationDate(); ?><br />
    <b>Role: </b><?php echo $user->getRole(); ?>
    
    <br /><br />
    
    <a class="btn btn-danger" href="php/delete_member_process.php?username=<?php echo $user->getUsername(); ?>&id=<?php echo $user->getId(); ?>">Delete</a>
    <a class="btn btn-secondary" href="index.php?page=members">Back</a>
</div>