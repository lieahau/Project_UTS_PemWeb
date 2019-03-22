<?php
	
	$cls = new crud();
	$where=[
			'field'=>'comment_in',
			'value'=>$d->getID()
	];
	$query = $cls->tampilinnerWhere("*","comment","user","comment_by","email",$where);
	
	$arrComment = array();
	foreach ($query as $value){
		$objComment = new comment;
		$objComment->setComment($value['comment_content']);
		$objComment->setCommentIn($value['comment_in']);
		$objComment->setCommentBy($value['comment_by']);
		$objComment->setDate($value['Date']);
		$objComment->setImage($value['profile_picture']);
		$arrComment[] = $objComment;
	}
	$objComment = "";


?>