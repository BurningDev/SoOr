<div class="container">
	<br />
	<div class="col-xl-6 col-lg-6 col-md-8">
    	<form method="POST" action="php/add_project_process.php">
    		<div class="form-group">
    			<label>Title</label>
    			<input class="form-control" name="title" type="text" required/>
    		</div>
    		<div class="form-group">
    			<label>Description</label>
    			<textarea class="form-control" name="description" maxlength="250"></textarea>
    			<small>Max. length: 250 characters</small>
    		</div>
    		<div class="form-group">
    			<label>Type</label>
        		<select class="form-control">
        			<option>system software</option>
        			<option>application software / standard software</option>
        			<option>application software / industry software</option>
        		</select>
    		</div>
    		<div class="form-group">
    			<label>Category</label>
        		<select class="form-control">
        			<option>art</option>
                    <option>catering</option>
                    <option>communication</option>
                    <option>economy</option>
                    <option>education</option>
                    <option>efficiency</option>
                    <option>entertainment</option>
                    <option>fashion</option>
                    <option>health</option>
                    <option>law and order</option>
                    <option>lifestyle</option>
                    <option>music</option>
                    <option>office</option>
                    <option>science</option>
                    <option>security</option>
                    <option>shopping</option>
                    <option>sport</option>
                    <option>technology</option>
                    <option>transport</option>
                    <option>other</option>
        		</select>
    		</div>
    		<div class="form-group">
    			<label>License</label>
        		<select class="form-control">
        			<option>commercial software</option>
        			<option>freeware</option>
        			<option>open source</option>
        			<option>proprietary software</option>
        			<option>public domain</option>
        			<option>shareware</option>
        			<option>other</option>
        		</select>
    		</div>
    		<div class="form-group">
    			<label>Programming language</label>
        		<input class="form-control" name="programminglanguage" type="text" required/>
    		</div>
			<input class="btn btn-primary" type="submit" value="Add" />
			<a class="btn btn-secondary" href="index.php?page=projects">Cancel</a>
    	</form>
	</div>
</div>