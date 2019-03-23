<!DOCTYPE html>
<html>
<head>
	<?php session_start() ?>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/web.js"></script>
	<title></title>
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
</head>
<body style="background-color: #f69883">
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
			<img src="images/assets/search.png" class="imgProfile" style="width: 150px;height: 150px;">
			<h3 style="margin-left: 15%;color: white">Search</h2>
		</div>
	</div>
	<div class="col-md-9 col-sm-8 col-xs-8 isicontent " style="float: right;padding: 0;height: 100%;">
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
		<div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #4267b2;color: white;padding: 2%;overflow-y: scroll;height: 100%">
			<?php include "views/viewSearch.php" ?>
		</div>
	</div>
	
</body>
</html>