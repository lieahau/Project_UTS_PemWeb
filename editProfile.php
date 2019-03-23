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
	  <style type="text/css">
	  html,body{
	  	height: 100%;
	  }
 	@media only screen and (max-width: 600px) {
		  .sidepanel{
		  	display: none;

		  }
		  .isicontent{
		  	width: 100%;
		  }
		 
		}

		@media only screen and (min-width: 600px) {
		  #bar {
		   	display: none;
		  }
		}
 </style>
	<?php
	session_start();
	include "classes/class.php"; 
	include "classes/friendsModel.php";
	include "responses/profileController.php";
	?>
</head>
<body onload="setdate()" style="background-color: #f69883;">
	<nav class="navbar navbar-inverse" id="bar" style="">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a href="index2.php">
			<img src="images/assets/profile/logo_signin.png" style="width: 100px;height: 50px;">
		  </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li><a href="index2.php">Home</a></li>
	       
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?></a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" action="Search.php" method="POST">
	      <div class="input-group">
	        <input type="text" class="form-control" placeholder="Search" name="search">
	        <div class="input-group-btn">
	          <button class="btn btn-default" type="submit">
	            <i class="glyphicon glyphicon-search"></i>
	          </button>
	        </div>
	      </div>
	    </form>
	    </div>
	  </div>
	</nav>
	
		
		<div class="col-md-3 col-sm-4 col-xs-4 sidepanel">
			<div class="col-md-12" style="padding-left: 5%;padding-right: 5%;padding-bottom: 7%">
				<a href="index2.php">
				<img src="images/assets/profile/logo_signin.png" style="height: 60%;width: 80%;min-width: 120px">
				</a>
			</div>
			<div class="col-md-12" style="padding-left: 20%;">
				<img src="images/assets/profile/profile_orang.png" class="imgProfile" style="width: 150px;height: 150px;">
				<h3 style="margin-left: 8%;color: white">Edit Profile</h2>
			</div>
		</div>
		
		<div class="col-md-9 col-sm-8 col-xs-8 isicontent " style="float: right;padding: 0;background-color: #4267b2;padding: 2%;height: 100%;color: white">
		
			<form action="profileedit.php" method="POST" enctype="multipart/form-data" >
				<div class="form-group">
						<text>Email</text>
						<input type="email" value="<?php echo $_SESSION['email'] ?>" name="email" class="form-control" readonly>
						<text>firstname</text>
						<input type="text" class="form-control" name="firstname" value="<?php echo $profileObj->getFirstname() ?>">
						<text>lastname</text>
						<input type="text" class="form-control" name="lastname" value="<?php echo $profileObj->getLastname() ?>">
						<text>BirthDate</text>
						<input type="date" class="form-control" value="<?php echo $profileObj->getBirthdate() ?>" id="date" name="date">
						<text>Picture</text>
						<input type="file"  name="foto" id="foto"  onchange="readURL(this)">
						<img src="<?php echo $profileObj->getProfilepic() ?>" id="foto1" style="width:100px;height:100px;" onclick="validfoto()" id="images" value="<?php echo $profileObj->getProfilepic() ?>" name="images">
						<text id="foto2" ></text>
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