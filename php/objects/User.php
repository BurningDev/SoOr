<?php
	class User {
		private $id;
		private $creationDate;
		private $username;
		private $password;
		private $admin;
		private $status;
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setCreationDate($creationDate) {
			$this->creationDate = $creationDate;
		}
		
		public function getCreationDate() {
			return $this->creationDate;
		}
		
		public function setUsername($username) {
			$this->username = $username;
		}
		
		public function getUsername() {
			return $this->username;
		}
		
		public function setPassword($password) {
			$this->password = $password;
		}
		
		public function getPassword() {
			return $this->password;
		}
		
		public function setAdmin($admin) {
			$this->admin = $admin;
		}
		
		public function getAdmin() {
			return $this->admin;
		}
		
		public function setStatus($status) {
			$this->status = $status;
		}
		
		public function getStatus() {
			return $this->status;
		}
	}
?>