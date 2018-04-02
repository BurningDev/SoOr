<?php
    class RightDAO {
        private $connection;
        private $database;
        
        public function __construct($host, $username, $password, $database) {
            $this->connection = mysql_connect($host, $username, $password);
            $this->database = mysql_select_db($database, $this->connection);
        }
        
        public function getAllRights() {
            $sql = "SELECT * FROM `right`";
            $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
            
            $result = array();
            
            while($row = mysql_fetch_array($rs)) {
                $right = new Right();
                $right->setId($row["ID"]);
                $right->setRight($row["Right"]);
                $right->setAdmin($row["Admin"]);
                
                array_push($result, $right);
            }
            
            return $result;
        }
    }
?>