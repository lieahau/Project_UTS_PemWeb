<?php
	include "classes/class.php";
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
	$cls = new crud();
	$validfile = basename($_FILES['foto']['name']);
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
	if(!isset($validfile)){
		$field = [
			"birthdate"=>$_POST['date'],
			"first_name"=>$_POST['firstname'],
			"last_name"=>$_POST['lastname']
			
		];
	}else{
		$field = [
			"birthdate"=>$_POST['date'],
			"first_name"=>$_POST['firstname'],
			"last_name"=>$_POST['lastname'],
			"profile_picture"=>$uploadfile
		];
	}
	
	$where = [
		"field"=>"email",
		"value"=>$_POST['email']
	];
	
	move_uploaded_file($_FILES['foto']['tmp_name'] , $uploadfile);
	$cls->edit("user",$field,$where);
	
?>