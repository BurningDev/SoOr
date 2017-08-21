<?php
    class RoleDAO {
        private $connection;
        private $database;
        
        public function __construct($host, $username, $password, $database) {
            $this->connection = mysql_connect($host, $username, $password);
            $this->database = mysql_select_db($database, $this->connection);
        }
        
        public function getAllRoles() {
            $sql = "SELECT * FROM role";
            $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
            
            $result = array();
            
            while($row = mysql_fetch_array($rs)) {
                $role = new Role();
                $role->setId($row["ID"]);
                $role->setTitle($row["Title"]);
                
                array_push($result, $role);
            }
            
            return $result;
        }
    }
?>