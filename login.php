<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Log in</h2>
  <form action =# method="POST">
    <div class="form-group">
      <label for="user">User:</label>
      <input type="text" class="form-control"placeholder="Enter User Name" name="user">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php
  session_start();
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "facenote";

  $conn = new mysqli($host, $user, $password, $db);

  if(isset($_POST["user"])){
  $query = "SELECT * FROM user WHERE email = '".$_POST["user"]."' AND password = '".md5($_POST['pwd'])."'";
  $result = $conn->query($query);
  echo mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0){
      session_start();
      $_SESSION["userName"] = $_POST['user'];
      $_SESSION["pwd"] = md5($_POST['pwd']);
    ?>
    <script type="text/javascript">
      location.href ="index2.php";
    </script>
    <?php
    }else{
    ?>
    <script type="text/javascript">
      alert("Log in Failed");
    </script>
    <?php
    }
  }
?>
<script>
  <?php      ?>
  var user = "<?php echo $_SESSION['userName']; ?>";
  var pwd = "<?php echo $_SESSION['pwd']; ?>";
  $(document).ready(function() {
        if( user!= "" &&  pwd!=""){
          location.href="index2.php";
        }
        
    });
</script>
</body>
</html>
