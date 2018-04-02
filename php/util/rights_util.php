<?php
    function validate_rights($rightName, $redirectView) {
        $rightDao = new RightDAO("localhost", "root", "", "soor");
        $rights = $rightDao->getAllRights();
        
        foreach($rights as $right) {
            if(strcmp($right->getRight(), $rightName) == 0) {
                if($right->getAdmin() == 1 && $_SESSION['admin'] == 0) {
                    error("No permission!", "You don't have the permission, to do that.");
                    header("Location: ".$redirectView);
                    exit();
                    return 0;
                }
            }
        }
        
        return 1;
    }
?>