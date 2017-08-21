<div class="container">
	<br /><a href="index.php?page=add_project" class="btn btn-primary">Add project</a><br /><br />

    <table class="table">
      <thead>
        <tr>
          <th style="width: 60px">No.</th>
          <th>Title</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
          	require('dao/ProjectDAO.php');
          	require("objects/Project.php");
          	
          	$projectDao = new ProjectDAO("localhost", "root", "", "soor");
          	$projects = $projectDao->getAllProjects();
          	
          	$count = 0;
          	
          	foreach($projects as $project) {
          	    $count = $count + 1;
          	    
          	    echo "<tr>";
          	    echo "<th scope=\"row\">".$count."</th>";
          	    echo "<td scope=\"row\">".$project->getTitle()."</td>";
          	    echo "</tr>";
          	}
      	?>
      </tbody>
    </table>
</div>