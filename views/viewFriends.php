<?php
	
	foreach ($friendarray as $v) {
		
	
?>
	<hr>
	<li style="padding: 5px 30px 5px 30px;">
		<img src="<?php echo $v->getProfilePic() ?>" style="width: 30px;height: 30px;border-radius: 50%">
		<a href="index2.php?email=<?php echo $v->getEmail() ?>"><?php echo  $v->getUsername() ?></a>


	</li>
	<hr>
<?php } ?>