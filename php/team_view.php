<div class="container">
	<?php
	   require('dao/TeamDAO.php');
       require("objects/Team.php");
       require('util/alert_util.php');
          	
       if(!isset($_GET['name'])) {
           showErrorAll("Error!", "You don't set the teamname.");
           return;
       }
       
       $teamDao = new TeamDAO("localhost", "root", "", "soor");
       $teams = $teamDao->getAllTeams();
       $team = null;
       
       foreach($teams as $teamTemp) {
           if(strcmp($teamTemp->getName(), $_GET['name']) == 0) {
               $team = $teamTemp;
           }
       }
       
       if($team == null) {
           showErrorAll("Error!", "The teamname doesen't exist.");
           return;
       }
    ?>
    
    <br />
    <h3><?php echo $team->getName(); ?></h3>
    <b>CreationDate: </b><?php echo $team->getCreationDate(); ?>
    
    <br /><br />
    
    <a class="btn btn-danger" href="php/delete_team_process.php?teamname=<?php echo $team->getName(); ?>&id=<?php echo $team->getId(); ?>">Delete</a>
    <a class="btn btn-secondary" href="index.php?page=teams">Back</a>
</div>