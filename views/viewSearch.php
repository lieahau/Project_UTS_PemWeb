<?php
	include "responses/srcFriendsController.php";
	foreach ($friendarray as $v) {
		
	
?>
	<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 2%;background-color: #344D90;margin-bottom: 1%;border-radius: 10px;">
	
		<img src="<?php echo $v->getProfilePic() ?>" style="width: 80px;height: 80px;border-radius: 50%;">
		<a href="index2.php?email=<?php echo $v->getEmail() ?>" style="color: white"><?php echo  $v->getFirstName()." ".$v->getLastName() ?></a>


	</div>
	
<?php } ?>