<!--
SoOr - SoftwareOrganizer
Licensed unter MIT-License
-->
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<h2>SoOr</h2>
		</div>
		
		<div class="col-xl-6 col-lg-6 col-md-8">
			<form method="POST" action="php/proc/login_process.php">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter username here" required>
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter password here" required>
				</div>
				
				<input type="submit" class="btn btn-primary"></input>
			</form>
		</div>
	</div>
</div>

<div class="fill">
</div>

<footer>
	<div class="container">
		SoOr - SoftwareOrganizer
		<br />Licensed under MIT-License
		<br /><a href="php/contributors.php">Contributors</a> <a href="https://github.com/BurningDev/SoOr">Source</a>
	</div>
</footer>