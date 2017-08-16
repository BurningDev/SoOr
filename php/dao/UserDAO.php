<?php
	class UserDAO {
		private $connection;
		private $database;
		
		public function UserDAO($host, $username, $password, $database) {
			$this->connection = mysql_connect($host, $username, $password);
			$this->database = mysql_select_db($database);
		}
	}
?>