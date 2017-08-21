<?php
    class Project {
        private $id;
        private $creationDate;
        private $title;
        private $description;
        private $type;
        private $category;
        private $leaderID;
        private $license;
        private $programmingLanguage;
        private $status;
        
        public function getId()
        {
            return $this->id;
        }
    
        public function getCreationDate()
        {
            return $this->creationDate;
        }
    
        public function getTitle()
        {
            return $this->title;
        }
    
        public function getDescription()
        {
            return $this->description;
        }
    
        public function getType()
        {
            return $this->type;
        }
        
        public function getCategory()
        {
            return $this->category;
        }
        
        public function setCategory($category)
        {
            $this->category = $category;
        }
    
        public function getLeaderID()
        {
            return $this->leaderID;
        }
    
        public function getLicense()
        {
            return $this->license;
        }
    
        public function getProgrammingLanguage()
        {
            return $this->programmingLanguage;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function setCreationDate($creationDate)
        {
            $this->creationDate = $creationDate;
        }
    
        public function setTitle($title)
        {
            $this->title = $title;
        }
    
        public function setDescription($description)
        {
            $this->description = $description;
        }
    
        public function setType($type)
        {
            $this->type = $type;
        }
    
        public function setLeaderID($leaderID)
        {
            $this->leaderID = $leaderID;
        }
    
        public function setLicense($license)
        {
            $this->license = $license;
        }
    
        public function setProgrammingLanguage($programmingLanguage)
        {
            $this->programmingLanguage = $programmingLanguage;
        }

        public function getStatus()
        {
            return $this->status;
        }
        
        public function setStatus($status)
        {
            $this->status = $status;
        }
    }
?>