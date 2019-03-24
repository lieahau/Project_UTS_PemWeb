<?php
	include "classes/DB.php";
	$cls = new DB;
	$comment = $_POST['comment'];
	$id = $_POST['id'];
	$dt = getdate();
	$now = "";
	$now .= $dt['year']. "-";
	$now .= $dt['mon']. "-";
	$now .= $dt['mday'] ;
	$field = [
		"comment_id"=>'',
		"comment_in"=>$id,
		"comment_by"=>$_SESSION['email'],
		"comment_content"=>$comment,
		"Date"=> $now
	];
	$cls->queryInsert("comment",$field);
	header("Location:index2.php");
?>