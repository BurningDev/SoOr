<?php
    class Team {
        private $id;
        private $creationDate;
        private $name;
        private $description;
        private $status;

        public function getId()
        {
            return $this->id;
        }
    
        public function getCreationDate()
        {
            return $this->creationDate;
        }
    
        public function getName()
        {
            return $this->name;
        }
    
        public function getDescription()
        {
            return $this->description;
        }

        public function getStatus()
        {
            return $this->status;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function setCreationDate($creationDate)
        {
            $this->creationDate = $creationDate;
        }
    
        public function setName($name)
        {
            $this->name = $name;
        }
    
        public function setDescription($description)
        {
            $this->description = $description;
        }
    
        public function setStatus($status)
        {
            $this->status = $status;
        }
    }
?>