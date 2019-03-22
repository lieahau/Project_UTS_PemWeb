<?php
	$key = [
		"field"=>"email",
		"value"=>$_SESSION['userName']
	];
	$friendsdata = $cls->tampilCond("user",$key,"!=");
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