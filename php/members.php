<div class="container">
	<br /><h2>Members</h2>

	<br /><a href="index.php?page=add_member" class="btn btn-primary">Add user</a><br /><br />

    <table class="table">
      <thead>
        <tr>
          <th style="width: 60px">No.</th>
          <th>Username</th>
          <th>Role</th>
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
          	    echo "<td><a href=\"index.php?page=member_view&username=".$user->getUsername()."\">".$user->getUsername()."</a></td>";
          	    echo "<td scope=\"row\">".$user->getRole()."</td>";
          	    echo "</tr>";
          	}
      	?>
      </tbody>
    </table>
</div>