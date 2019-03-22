<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/web.js"></script>
  <?php
 	session_start();
  	include "classes/class.php";
	
	include "classes/showModel.php";
	include "responses/showController.php";
	include "classes/commentModel.php";
	include "classes/friendsModel.php";
	include "responses/friendsController.php";
	include "responses/profileController.php"
	?>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
		}
		@media only screen and (max-width: 768px) {
			.imgProfile{
				width: 100%;
				height: 100%;
			}
		}
		@media only screen and (max-width: 600px) {
		  .sidepanel{
		  	display: none;

		  }
		  .lebar{
		  	width: 100%;
		  }
		  .floatBtn{
		  	
		  	width: 50px;
		  	height: 50px;

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
		.floatBtn{
			position: fixed;
			top: 82%;
			left:88%;
			width: 75px;
			height: 75px;
			transition: 1s;
		}
		.floatBtn:hover{
			opacity:0.6;
		}
		.imgcontent{
			margin-bottom: 2%;
			animation-name: fadeIn;
			animation-duration: 3s; 
			
		}
		.imgProfile{
			width: 150px;
			height: 150px;
			border-radius: 50%;
		}
		@keyframes fadeIn {
		  0% {right: -100px;top: 0px;opacity: 0}

		  50% { right: 50px;top: 0px; opacity: 1;}
		  100% { right: 0px;top: 0px; opacity: 1;}
		}
		
		.textbox {
		  width: 130px;
		  box-sizing: border-box;
		  border: 2px solid #ccc;
		  border-radius: 4px;
		  background-image: url('images/assets/profile/comment.png');
		  background-size: 18px;
		  font-size: 16px;
		  background-color: white;
		  background-position: 10px 10px; 
		  background-repeat: no-repeat;
		  padding: 8px 16px 8px 40px;
		  -webkit-transition: width 0.4s ease-in-out;
		  transition: width 0.4s ease-in-out;
		  color: black;
		}

		.textbox:focus {
		  width: 100%;

		}


	</style>
</head>
<body style="background-color: #f69883" onload="fadeIn()">

	<nav class="navbar navbar-inverse" id="bar" >
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Page 1-1</a></li>
	            <li><a href="#">Page 1-2</a></li>
	            <li><a href="#">Page 1-3</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Page 2</a></li>
	        <li><a href="#">Page 3</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="col-md-9 col-sm-8 col-xs-8 isicontent" style="float: right;padding: 0" >
		
			<form action="Search.php" method="POST">
				<div class="input-group sidepanel col-md-12" style="padding: 1%;background-color: #60AAC3;">
				    <input type="text" class="form-control" placeholder="Search" name="search">
				    <div class="input-group-btn">
		   		      <button class="btn btn-default" type="submit">
				            <i class="glyphicon glyphicon-search"></i>
				      </button>
				       <input type="button" name="" class="btn btn-danger" value="Logout" style="margin-left: 5%;">
				    </div>
				   
			    </div>
		    </form>
	      	<div class="col-md-9 col-sm-9 col-xs-8" style="background-color: #5B76B9;padding: 1%;overflow-y: scroll;height:601px;color:white">

	      		<?php include "views/viewsPost.php" ?>
	      
	      		
	      	</div>
	      	<div class="col-md-3 col-sm-3 col-xs-4" style="overflow-y: scroll; color: white;height: 601px;">
			      	<h3>Friends</h3>
			      	<ul style="padding: 0;list-style-type: none;">
			      		
				      	<?php include "views/viewFriends.php" ?>
				      	
			      	</ul>
		      </div>
	     

	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 sidepanel" style="float: left">
		<div class="col-md-12" style="padding-left: 5%;padding-right: 5%;padding-bottom: 7%">
			<a href="index2.php">
			<img src="images/assets/profile/logo_signin.png" style="height: 60%;width: 80%;min-width: 120px">
			</a>
		</div>
		<div class="col-md-12" style="padding-left: 20%;">
			<img src="<?php echo $profileObj->getProfilePic() ?>" class="imgProfile">
		</div>
			<?php
				
				echo "<h3 style='padding-left:32%'>Hi, ".$profileObj->getFirstName()."</h3>";
			?>
			<?php
			if(!isset($_GET['email'])){

			?>
			<a href="editProfile.php" class="btn btn-info" style="margin-left: 30%;">Edit Profile</a>
			<?php } ?>
	</div>
	<?php
	if(!isset($_GET['email'])){
	?>
		<img src="images/assets/profile/tambah.png" class="floatBtn" id="btnModal">
	<?php } ?>
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">
	        <form enctype="multipart/form-data" id="formfile" action="upload.php" method="POST" class="form-horizontal" style="padding-left: 3%;padding-right: 3%">
	        	<div class="form-group">
				<input type="text" name="posting" placeholder="Tuliskan" class="col-md-12 form-control" id="caption">
				</div>
				<div class="form-group">
					<input type="text" name="id" id="id">
					<input type="file"  name="foto" id="foto"  onchange="readURL(this)">
					<img src="profile/profile_orang.png" id="foto1" style="width:100px;height:100px;" onclick="validfoto()" id="images">
					<text id="foto2"></text>
				</div>
				<div class="form-group">
				<input type="submit" class="btn btn-info" value="Input" id="buttonInput" name="buttonInput">
				</div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	
</body>

</html>