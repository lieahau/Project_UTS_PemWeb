<?php
	class comment{		
		private $_CommentContent;
		private $_CommentBy;
		private $_Date;
		private $_CommentId;
		private $_CommentIn;
		private $_images;
		public function setComment($Comment){
			$this->_CommentContent = $Comment;
		}
		public function setCommentBy($CommentBy){
			$this->_CommentBy = $CommentBy;
		}
		public function setDate($Date){
			$this->_Date = $Date;
		}
		public function setCommentId($CommentId){
			$this->_CommentId = $CommentId;
		}
		public function setCommentIn($CommentIn){
			$this->_CommentIn = $CommentIn;
		}
		public function setImage($images){
			$this->_images = $images;
		}
		public function getDate(){
			return $this->_CommentDate;
		}
		public function getCommentBy(){
			return $this->_CommentBy;
		}
		public function getCommentContent(){
			return $this->_CommentContent;
		}
		public function getCommentId(){
			return $this->_CommentId;
		}
		public function getIn(){
			return $this->_CommentIn;
		}
		public function getImage(){
			return $this->_images;
		}
	}
?>