<form method="POST" action="saveComment.php">
	<?php
		$id = $_GET['id'];
		include "../responses/commentController.php";
		foreach ($arrComment as $d) {
			# code...
		
	?>

	<li class="list-group-item"><?php echo $d->getCommentContent(); ?></li>
	<?php } ?>
	<div style="margin-top: 2%;">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="text" name="comment">
		<input type="submit" value="Comment" class="btn btn-warning">
	</div>
</form>