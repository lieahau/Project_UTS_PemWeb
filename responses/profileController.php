<?php
	$cls = new crud();
	$where;
	if(isset($_GET['email'])){
		$where = $_GET['email'];
	}else if(isset($_SESSION['email'])){
		$where = $_SESSION['email'];
	}
	$key=[
			'field'=>'email',
			'value'=>$where
	];
	$query = $cls->tampilCond("user",$key,"=");
	$profileObj = new friends();
	foreach ($query as $data) {
		$profileObj->setProfilepic($data['profile_picture']);
		$profileObj->setFirstname($data['first_name']);
		$profileObj->setLastname($data['last_name']);
		$profileObj->setBirthdate($data['birthdate']);

	}
	
?>