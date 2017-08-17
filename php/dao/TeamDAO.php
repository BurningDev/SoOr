<?php
	class TeamDAO {
		private $connection;
		private $database;
		
		public function __construct($host, $username, $password, $database) {
			$this->connection = mysql_connect($host, $username, $password);
			$this->database = mysql_select_db($database, $this->connection);
		}
		
		public function getAllTeams() {		    
		    $sql = "SELECT * FROM team";
		    $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
		    
		    $result = array();
		    
		    while($row = mysql_fetch_array($rs)) {		        
		        $team = new Team();
		        $team->setCreationDate($row["CreationDate"]);
		        $team->setName($row["Name"]);
		        $team->setDescription($row["Description"]);
		        $team->setStatus($row["Status"]);
		        
		        array_push($result, $team);
		    }
		    
		    return $result;
		}
	}
?>