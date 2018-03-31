<?php
    class UserTeamDAO {
        private $connection;
        private $database;
        
        public function __construct($host, $username, $password, $database) {
            $this->connection = mysql_connect($host, $username, $password);
            $this->database = mysql_select_db($database, $this->connection);
        }
        
        public function getAllUserTeam() {
            $sql = "SELECT * FROM user_team";
            $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
            
            $result = array();
            
            while($row = mysql_fetch_array($rs)) {
                $userTeam = new UserTeam();
                $userTeam->setUserId($row["UserID"]);
                $userTeam->setTeamId($row["TeamID"]);
                
                array_push($result, $userTeam);
            }
            
            return $result;
        }
        
        public function getAllUserTeamByTeam($teamId) {
            $sql = "SELECT * FROM user_team WHERE TeamID = ".$teamId;
            $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
            
            $result = array();
            
            while($row = mysql_fetch_array($rs)) {
                $userTeam = new UserTeam();
                $userTeam->setUserId($row["UserID"]);
                $userTeam->setTeamId($row["TeamID"]);
                
                array_push($result, $userTeam);
            }
            
            return $result;
        }
        
        public function createUserTeam($userTeam) {
            $sql = "INSERT INTO `soor`.`user_team` (`UserID`, `TeamID`) VALUES ('".$userTeam->getUserId()."', '".$userTeam->getTeamId()."');";
            
            mysql_query($sql);
        }
        
        public function deleteUserTeamById($userId, $teamId) {
            $sql = "DELETE FROM user_team WHERE UserID = ".$userId." AND TeamID = ".$teamId;
            
            mysql_query($sql);
        }
        
        public function deleteAllUserById($userId) {
            $sql = "DELETE FROM user_team WHERE UserID = ".$userId;
            
            mysql_query($sql);
        }
        
        public function deleteAllTeamById($teamId) {
            $sql = "DELETE FROM user_team WHERE TeamID = ".$teamId;
            
            mysql_query($sql);
        }
    }
?>