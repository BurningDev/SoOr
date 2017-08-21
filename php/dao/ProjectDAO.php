<?php
class ProjectDAO {
    private $connection;
    private $database;
    
    public function __construct($host, $username, $password, $database) {
        $this->connection = mysql_connect($host, $username, $password);
        $this->database = mysql_select_db($database, $this->connection);
    }
    
    public function getAllProjects() {
        $sql = "SELECT * FROM project";
        $rs = mysql_query($sql) or die("SQL-Error: ".mysql_error());
        
        $result = array();
        
        while($row = mysql_fetch_array($rs)) {
            $project = new Project();
            $project->setId($row["ID"]);
            $project->setCreationDate($row["CreationDate"]);
            $project->setTitle($row["Title"]);
            $project->setDescription($row["Description"]);
            $project->setType($row["Type"]);
            $project->setCategory($row["Category"]);
            $project->setLeaderID($row["LeaderID"]);
            $project->setLicense($row["License"]);
            $project->setProgrammingLanguage($row["ProgrammingLanguage"]);
            $project->setStatus($row["Status"]);
            
            array_push($result, $project);
        }
        
        return $result;
    }
}
?>