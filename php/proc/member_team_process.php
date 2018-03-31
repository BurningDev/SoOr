<?php
    session_start();

    require('../util/alert_util.php');
    require('../dao/UserTeamDAO.php');
    require('../objects/UserTeam.php');
    
    if(!isset($_GET['action'])) {        
        error("Error!", "An error occured. Please try again.");
        header("Location: ../../index.php?page=teams");
        exit();
        return;
    }
    
    $action = $_GET['action'];
    $teamId = $_GET['team'];
    $userId = $_GET['pk'];
    
    $userDao = new UserTeamDAO("localhost", "root", "", "soor");
    
    if(strcmp($action, "add") == 0) {
        $userTeam = new UserTeam();
        $userTeam->setTeamId($teamId);
        $userTeam->setUserId($userId);
        $userDao->createUserTeam($userTeam);
        
        success("Success!", "Assigned successful the member.");
        header("Location: ../../index.php?page=team_view&pk=".$teamId);
    }
    
    if(strcmp($action, "delete") == 0) {
        $userDao->deleteUserTeamById($userId, $teamId);
        
        success("Success!", "Deleted successful the member.");
        header("Location: ../../index.php?page=team_view&pk=".$teamId);
    }
    
    exit();
?>