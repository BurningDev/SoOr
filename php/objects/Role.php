<?php
    class Role {
        private $id;
        private $title;
    
        public function getId()
        {
            return $this->id;
        }
    
        public function getTitle()
        {
            return $this->title;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function setTitle($title)
        {
            $this->title = $title;
        }
    }
?>