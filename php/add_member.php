<div class="container">
	<br />
	<div class="col-xl-6 col-lg-6 col-md-8">
    	<form method="POST" action="php/add_member_process.php">
    		<div class="form-group">
    			<label>Username</label>
    			<input class="form-control" name="username" type="text" required/>
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input class="form-control" name="password" type="password" required/>
    		</div>
			<label>Admin</label>
			<input class="form-control" style="width: 5%" name="admin" type="checkbox"/><br />
			<input class="btn btn-primary" type="submit" value="Add" />
			<a class="btn btn-secondary" href="index.php?page=members">Cancel</a>
    	</form>
	</div>
</div>