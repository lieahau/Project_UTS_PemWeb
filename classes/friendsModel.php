<?php
	class friends{
		private $_email;
		private $_username;
		private $_firstname;
		private $_lastname;
		private $_birthdate;
		private $_profilepic;

		public function setEmail($Email){
			$this->_email = $Email;
		}
		public function setUsername($username){
			$this->_username = $username;
		}
		public function setFirstname($firstname){
			$this->_firstname = $firstname;
		}
		public function setLastname($lastname){
			$this->_lastname = $lastname;
		}
		public function setBirthdate($birthdate){
			$this->_birthdate = $birthdate;
		}
		public function setProfilepic($profile){
			$this->_profilepic = $profile;
		}
		public function getEmail(){
			return $this->_email;
		}
		public function getUsername(){
			return $this->_username;
		}
		public function getFirstname(){
			return $this->_firstname;
		}
		public function getLastname(){
			return $this->_lastname;
		}
		public function getBirthdate(){
			return $this->_birthdate;
		}
		public function getProfilepic(){
			return $this->_profilepic;
		}

	}
?>