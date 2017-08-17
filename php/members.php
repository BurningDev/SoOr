<div class="container">
	<br /><a href="#" class="btn btn-primary">Add user</a><br /><br />

    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Creationdate</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
          	require('dao/UserDAO.php');
          	require("objects/User.php");
          	
          	$userDao = new UserDAO("localhost", "root", "", "soor");
          	$users = $userDao->getAllUsers();
          	
          	$count = 0;
          	
          	foreach($users as $user) {
          	    $count = $count + 1;
          	    
          	    echo "<tr>";
          	    echo "<th scope=\"row\">".$count."</th>";
          	    echo "<td>".$user->getCreationDate()."</td>";
          	    echo "<td>".$user->getUsername()."</td>";
          	    echo "</tr>";
          	}
      	?>
      </tbody>
    </table>
</div>