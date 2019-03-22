<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/web.js"></script>
	<?php
	session_start();
	include "classes/class.php"; 
	include "classes/friendsModel.php";
	include "responses/profileController.php";
	?>
</head>
<body onload="setdate()">
	<div class="container ">
		<form action="profileedit.php" method="POST" enctype="multipart/form-data" >
			<div class="form-group">
					<text>Email</text>
					<input type="email" value="<?php echo $_SESSION['userName'] ?>" name="email" class="form-control" readonly>
					<text>firstname</text>
					<input type="text" class="form-control" name="firstname" value="<?php echo $profileObj->getFirstname() ?>">
					<text>lastname</text>
					<input type="text" class="form-control" name="lastname" value="<?php echo $profileObj->getLastname() ?>">
					<text>BirthDate</text>
					<input type="date" class="form-control" value="<?php echo $profileObj->getBirthdate() ?>" id="date" name="date">
					<text>Picture</text>
					<input type="file"  name="foto" id="foto"  onchange="readURL(this)">
					<img src="<?php echo $profileObj->getProfilepic() ?>" id="foto1" style="width:100px;height:100px;" onclick="validfoto()" id="images" value="<?php echo $profileObj->getProfilepic() ?>" name="images">
					<text id="foto2" >
					<div class="form-group" style="margin-top: 2%">
						<input type="submit" name="" class="btn btn-warning" value="Edit">
					</div>
			</div>	
		</form>
	</div>
</body>
	<script type="text/javascript">

		function setdate(){
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			 if(dd<10){
			        dd='0'+dd
			    } 
			    if(mm<10){
			        mm='0'+mm
			    } 

			today = yyyy+'-'+mm+'-'+dd;
			document.getElementById("date").setAttribute("max", today);
		}
	</script>
</html>