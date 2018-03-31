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
		        $user->setId($row["ID"]);
		        $user->setUsername($row["Username"]);
		        $user->setPassword($row["Password"]);
		        $user->setCreationDate($row["CreationDate"]);
		        $user->setRole($row["Role"]);
		        
		        array_push($result, $user);
		    }
		    
		    return $result;
		}
		
		public function createUser($user) {
		    $sql = "INSERT INTO `soor`.`user` (`CreationDate`, `Username`, `Password`, `Role`, `Admin`, `Status`) VALUES ('".$user->getCreationDate()."', '".$user->getUsername()."', '".$user->getPassword()."', '".$user->getRole()."', '".$user->getAdmin()."', '".$user->getStatus()."');";
		    
		    mysql_query($sql);
		}
		
		public function deleteUserById($id) {
		    $sql = "DELETE FROM user WHERE ID = ".$id;
		    
		    mysql_query($sql);
		}
		
		public function getUserById($id) {
		    $sql = "SELECT * FROM user WHERE ID = ".$id;
		    $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
		    
		    $result = array();
		    
		    while($row = mysql_fetch_array($rs)) {
		        $user = new User();
		        $user->setId($row["ID"]);
		        $user->setUsername($row["Username"]);
		        $user->setPassword($row["Password"]);
		        $user->setCreationDate($row["CreationDate"]);
		        $user->setRole($row["Role"]);
		        
		        array_push($result, $user);
		    }
		    
		    return $result;
		}
	}
?>