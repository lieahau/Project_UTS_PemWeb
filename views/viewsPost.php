<script>
      function edit(id,caption,image){
                  $("#myModal").modal("show");
                   document.getElementById('id').value = id;
                  document.getElementById('caption').value = caption;
                  document.getElementById('foto1').src = image;
                 document.getElementById('buttonInput').value="edit";
      }
</script>
<?php 
	foreach ($arr as $d) {
?>

	<div style="border-radius:15px;background-color: #f69883;padding: 1%;margin-bottom: 2%" class="container col-md-12 col-sm-12 col-xs-12">
            <?php
                  if(!isset($_GET['email'])){ ?>
            <button type="button" class="btn btn-info" style="float: right;" onclick="edit('<?php echo $d->getID() ?>','<?php echo $d->getCaption() ?>','<?php echo $d->getImage() ?>')">
                  
                  <span class="glyphicon glyphicon-wrench"></span>
               
            </button>
               <?php  } ?>
            
      	<p>Date : <?php echo $d->getDate() ?></p>
      	<p><?php echo $d->getCaption() ?></p>
            <?php 
            $valid = $d->getImage();
            if(isset($valid)){ ?>
            
      	<img src="<?php echo $d->getImage() ?>" class="col-md-12 col-sm-12 col-xs-12 imgcontent">
            <?php  } ?>
      	<div class="col-md-12" style="margin-top: 1%">
      		
      			
      		<a href="#<?php echo $d->getID() ?>" style="transition: 1s;"><img src="images/assets/profile/comment.png" style="width: 30px;height: 30px;" class="commentBtn"></a>
                  <hr>
      			
      	</div>
            <?php
                  include "responses/commentController.php";
                  
            ?>
            <form method="POST" action="saveComment.php">
                  <input type="hidden" name="id" value="<?php echo $d->getID() ?>">
                  <div class="col-md-12" style="padding: 2%;background-color: #4267b2; border-radius: 20px;" id="<?php echo $d->getID() ?>">
                        <?php 
                        foreach ($arrComment as $value) {
                        ?>
                        <div class="col-md-12" style="margin-top: 2%; margin-bottom: 1%;color: #4267b2">
                              <img src="<?php echo $value->getImage() ?>" style="width: 30px;height: 30px;border-radius: 30px;">
                              <text style="background-color: #f2f3f5;padding: 10px;border-radius: 13px"><?php echo $value->getCommentContent() ?></text>

                        </div>
                        <?php
                              }
                        ?>

                        <input type="text" placeholder="comment" class="textbox"  style="margin-top: 1%;" name="comment">

                        <div></div>
                  </div>
            </form>
           
    </div>


<?php  } ?>