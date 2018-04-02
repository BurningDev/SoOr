<div class="container">
	<br />
	<div class="col-xl-6 col-lg-6 col-md-8">
		<?php
    	  require_once("objects/Right.php");
    	  require_once("dao/RightDAO.php");
    	  require("util/rights_util.php");
    	  require("util/alert_util.php");
		  
		  validate_rights("add_team", "index.php?page=teams");
		  
		  handleAlert();
		?>
		
    	<form method="POST" action="php/proc/add_team_process.php">
    		<div class="form-group">
    			<label>Name</label>
    			<input class="form-control" name="name" type="text" required/>
    		</div>
    		<div class="form-group">
    			<label>Description</label>
    			<textarea class="form-control" name="description" maxlength="250"></textarea>
    			<small>Max. length: 250 characters</small>
    		</div>
			<input class="btn btn-primary" type="submit" value="Add" />
			<a class="btn btn-secondary" href="index.php?page=teams">Cancel</a>
    	</form>
	</div>
</div>