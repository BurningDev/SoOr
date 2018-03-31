<?php
    class UserTeam {
        private $userId;
        private $teamId;
    
        public function getTeamId()
        {
            return $this->teamId;
        }
    
        public function getUserId()
        {
            return $this->userId;
        }
    
        public function setUserId($userId)
        {
            $this->userId = $userId;
        }
    
        public function setTeamId($teamId)
        {
            $this->teamId = $teamId;
        }
    }
?>