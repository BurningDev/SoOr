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
    ?>
    
    <br />
    <h3><?php echo $user->getUsername(); ?></h3>
    <b>CreationDate: </b><?php echo $user->getCreationDate(); ?>
    
    <br /><br />
    
    <a class="btn btn-danger" href="">Delete</a>
    <a class="btn btn-secondary" href="index.php?page=members">Back</a>
</div>