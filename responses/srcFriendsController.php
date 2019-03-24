<?php
	include "classes/class.php";
	include "classes/friendsModel.php";
	$cls = new crud;
	$src = $_POST['search'];
	$key = [
		"field"=>"first_name",
		"value"=>$src
	];
	$cond = [
		"field" =>"email",
		"value"=>$_SESSION['email'],
		"conds"=>"!="
	];
	$friendsdata = $cls->tampilSrc("user",$key,$cond);
	$friendarray = array();
	foreach ($friendsdata as $f) {
		$friends = new friends;
		$friends->setEmail($f['email']);
		$friends->setUsername($f['username']);
		$friends->setFirstname($f['first_name']);
		$friends->setLastname($f['last_name']);
		$friends->setBirthdate($f['birthdate']);
		$friends->setProfilepic($f['profile_picture']);
		$friendarray[] = $friends;
	}
	
?>