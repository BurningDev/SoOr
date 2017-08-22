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
		        $team->setId($row["ID"]);
		        $team->setCreationDate($row["CreationDate"]);
		        $team->setName($row["Name"]);
		        $team->setDescription($row["Description"]);
		        $team->setStatus($row["Status"]);
		        
		        array_push($result, $team);
		    }
		    
		    return $result;
		}
		
		public function createTeam($team) {
		    $sql = "INSERT INTO `soor`.`team` (`CreationDate`, `Name`, `Description`, `Status`) VALUES ('".$team->getCreationDate()."', '".$team->getName()."', '".$team->getDescription()."', '".$team->getStatus()."');";
		    
		    mysql_query($sql);
		}
		
		public function deleteTeamById($id) {
		    $sql = "DELETE FROM team WHERE ID = ".$id;
		    
		    mysql_query($sql);
		}
	}
?>