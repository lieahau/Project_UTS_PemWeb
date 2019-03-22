<?php
	class post{
		private $_StatusId;
		private $_Date;
		private $_StatusContent;
		private $_Images;
		private $_WritedBy;
		public function setID($Status){
			$this->_StatusId = $Status;
		}
		public function setDate($Date){
			$this->_Date = $Date;
		}
		public function setCaption($StatusContent){
			$this->_StatusContent = $StatusContent;
		}
		public function setImage($Images){
			$this->_Images = $Images;
		}
		public function setWritedBy($WritedBy){
			$this->_WritedBy = $WritedBy;
		}
		public function getID(){
			return $this->_StatusId;
		}
		public function getDate(){
			return $this->_Date;
		}
		public function getCaption(){
			return $this->_StatusContent;
		}
		public function getImage(){
			return $this->_Images;
		}
		public function getEmail(){
			return $this->_WritedBy;
		}
		
	}
?>