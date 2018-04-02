<div class="container">
	<?php
	   require('dao/TeamDAO.php');
	   require('dao/UserDAO.php');
	   require('dao/UserTeamDAO.php');
	   require("objects/User.php");
       require("objects/Team.php");
       require("objects/UserTeam.php");
       require('util/alert_util.php');
          	
       if(!isset($_GET['pk'])) {
           showErrorAll("Error!", "An error occured. Please try again.");
           return;
       }
       
       $teamDao = new TeamDAO("localhost", "root", "", "soor");
       $teams = $teamDao->getAllTeams();
       $team = null;
       
       foreach($teams as $teamTemp) {
           if(strcmp($teamTemp->getId(), $_GET['pk']) == 0) {
               $team = $teamTemp;
           }
       }
       
       if($team == null) {
           showErrorAll("Error!", "The teamname doesen't exist.");
           return;
       }
    ?>
    
    <br />
    <?php handleAlert(); ?>
    <h3><?php echo $team->getName(); ?></h3>
    <b>CreationDate: </b><?php echo $team->getCreationDate(); ?>
    
    <br />
    
    <div class="row">
    	<div class="col-lg-6 box">
    	<h4>Members</h4>
    		<form action="php/proc/member_team_process.php" method="GET">
    			<div class="input-group">
                  <select name="pk" class="form-control">
    				<?php 
        				$userDao = new UserDAO("localhost", "root", "", "soor");
        				$users = $userDao->getAllUsers();
        				
        				foreach ($users as $user) {
        				    echo "<option value=\"".$user->getId()."\">".$user->getUsername()."</option>";        				    
        				}
    				?>
    			  </select>
    			  
                  <span class="input-group-btn">
                	<input type="submit" class="btn btn-secondary" value="Add"/>
                  </span>
                </div>
                
                <input type="text" name="team" value=<?php echo '"'.$team->getId().'"'; ?> class="invisible"/>
                <input type="text" name="action" value="add" class="invisible"/>
    		</form>
    		
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 60px">No.</th>
                  <th>Username</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php 
                  	$userTeamDao = new UserTeamDAO("localhost", "root", "", "soor");
                  	$userTeams = $userTeamDao->getAllUserTeamByTeam($_GET['pk']);
                  	
                  	$userDao = new UserDAO("localhost", "root", "", "soor");
                  	
                  	$count = 0;
                  	
                  	foreach($userTeams as $userTeam) {
                  	    $user = $userDao->getUserById($userTeam->getUserId());
                  	    
                  	    if(count($user) == 0) {
                  	        continue;
                  	    }

                  	    $count = $count + 1;
                  	    
                  	    echo "<tr>";
                  	    echo "<th scope=\"row\">".$count."</th>";
                  	    echo "<td>".$user[0]->getUsername()."</td>";
                  	    echo "<td><a href=\"php/proc/member_team_process.php?action=delete&team=".$team->getId()."&pk=".$user[0]->getId()."\" class=\"btn btn-secondary\">Delete</a></td>";
                  	    echo "</tr>";
                  	}
              	?>
              </tbody>
        	</table>
    	</div>
	</div>
    
    <a class="btn btn-primary" href="php/proc/delete_team_process.php?teamname=<?php echo $team->getName(); ?>&id=<?php echo $team->getId(); ?>">Delete team</a>
    <a class="btn btn-secondary" href="index.php?page=teams">Back</a>
</div>