<?php
	class UserDAO {
		private $connection;
		private $database;
		
		public function __construct($host, $username, $password, $database) {
			$this->connection = mysql_connect($host, $username, $password);
			$this->database = mysql_select_db($database, $this->connection);
		}
		
		public function getAllUsers() {		    
		    $sql = "SELECT * FROM user";
		    $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
		    
		    $result = array();
		    
		    while($row = mysql_fetch_array($rs)) {		        
		        $user = new User();
		        $user->setUsername($row["Username"]);
		        $user->setPassword($row["Password"]);
		        $user->setCreationDate($row["CreationDate"]);
		        
		        array_push($result, $user);
		    }
		    
		    return $result;
		}
	}
?>