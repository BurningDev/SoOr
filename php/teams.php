<div class="container">
	<br /><a href="#" class="btn btn-primary">Add team</a><br /><br />

    <table class="table">
      <thead>
        <tr>
          <th style="width: 60px">No.</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
          	require('dao/TeamDAO.php');
          	require("objects/Team.php");
          	
          	$teamDao = new TeamDAO("localhost", "root", "", "soor");
          	$teams = $teamDao->getAllTeams();
          	
          	$count = 0;
          	
          	foreach($teams as $team) {
          	    $count = $count + 1;
          	    
          	    echo "<tr>";
          	    echo "<th scope=\"row\">".$count."</th>";
          	    echo "<td>".$team->getName()."</td>";
          	    echo "</tr>";
          	}
      	?>
      </tbody>
    </table>
</div>