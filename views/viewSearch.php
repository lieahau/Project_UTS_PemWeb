<?php
	include "responses/srcFriendsController.php";
	foreach ($friendarray as $v) {
		
	
?>
	<hr>
	<li style="padding: 5px 30px 5px 30px;">
		<img src="<?php echo $v->getProfilePic() ?>" style="width: 80px;height: 80px;border-radius: 50%;">
		<a href="index2.php?email=<?php echo $v->getEmail() ?>" style="color: white"><?php echo  $v->getFirstName()." ".$v->getLastName() ?></a>


	</li>
	<hr>
<?php } ?>