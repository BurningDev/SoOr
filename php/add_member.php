<div class="container">
	<br />
	<div class="col-xl-6 col-lg-6 col-md-8">
		<?php 
    		require("dao/RoleDAO.php");
    		require("dao/RightDAO.php");
    		require("objects/Role.php");
    		require("objects/Right.php");
    		require("util/alert_util.php");
    		require("util/rights_util.php");
    		
    		validate_rights("add_member", "index.php?page=members");
    		
    		$roleDao = new RoleDAO($CONFIG['sql_address'], $CONFIG['sql_user'], $CONFIG['sql_password'], $CONFIG['sql_database']);
    		$roles = $roleDao->getAllRoles();
    		
    		handleAlert();
		?>
	
    	<form method="POST" action="php/proc/add_member_process.php">
    		<div class="form-group">
    			<label>Username</label>
    			<input class="form-control" name="username" type="text" required/>
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input class="form-control" name="password" type="password" required/>
    		</div>
    		<div class="form-group">
    			<label>Repeat password</label>
    			<input class="form-control" name="passwordRe" type="password" required/>
    		</div>
    		<div class="form-group">
    			<label>Role</label>
        		<select name="role" class="form-control">
        			<?php 
                        foreach($roles as $role) {
                            echo "<option>".$role->getTitle()."</option>";
                        }
        			?>
        		</select>
        	</div>
			<label>Admin</label>
			<input class="form-control" style="width: 5%" name="admin" type="checkbox"/><br />
			<input class="btn btn-primary" type="submit" value="Add" />
			<a class="btn btn-secondary" href="index.php?page=members">Cancel</a>
    	</form>
	</div>
</div>