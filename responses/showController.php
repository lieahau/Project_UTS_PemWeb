<?php
	$cls = new crud();
	$key = array();
	if(isset($_GET['email'])){
		$key = [
			"field"=>"writed_by",
			"value"=>$_GET['email']
		];
		
	}else if(isset($_SESSION['email'])){
		$key = [
			"field"=>"writed_by",
			"value"=>$_SESSION['email']
		];
	}
	$dataShow = $cls->tampilcond("status",$key,"=");	
	
	$arr=array();
	foreach ($dataShow as $d ) {
		$obj = new post;
		$obj->setID($d['status_id']);
		$obj->setCaption($d['status_content']);
		$obj->setDate($d['Date']);
		$obj->setImage($d['images']);
		$obj->setWritedBy($d['writed_by']);
		$arr[] = $obj;
	}
	
?>