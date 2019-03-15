<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title>Facenote - Login</title>
    </head>
    <body class="fullPageBody">
        <!-- Create container div for one whole page -->
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Column for facenote login/index logo -->
                <div class="col-5 indexLogoContainer">
                    <div class="row align-items-center h-100">
                        <div class="col">
                            <img class="w-100 img-fluid px-4" src="images/assets/logo_signin.png"/>
                        </div>
                    </div>
                </div>
                <!-- Column for facenote login form -->
                <div class="col indexFormContainer">
                    <div class="row align-items-center h-100 justify-content-center">
                        <div class="col-11 col-sm-10 col-md-8 col-lg-7 col-xl-6">
                            <form class="indexLoginForm" action="responses/login-response.php" method="POST">
                                <!-- Row for form header -->
                                <div class="row indexFormHeader">
                                    <div class="col">
                                        <img class="img-fluid" src="images/assets/header_signin.png"/>
                                        <h1 class="text-center">SIGN IN</h1>
                                    </div>
                                </div>

                                <!-- Row for form body -->
                                <div class="row justify-content-center indexFormBody">
                                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 pt-1 pb-2">
                                        <input type="email" class="form-control" id="email" placeholder="USERNAME" oninput="onFormInput()" name="username" require>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 py-2">
                                        <input type="password" class="form-control" id="password" placeholder="PASSWORD" name="password" require>
                                    </div>
                                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 pt-2">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <!-- Dynamic part of index.php -->
                                    <!-- if login fail then show fail message -->
                                    <?php
                                        session_start();
                                        if(isset($_SESSION['login_res'])){
                                            if($_SESSION['login_res']){
                                                header("location: profile-view.php");
                                            }else{
                                                echo "
                                                <div class=\"col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 pb-2\">
                                                    <p class=\"text-center my-0\">
                                                        Incorrect username or password!
                                                    </p>    
                                                </div>
                                                ";
                                            }
                                        }
                                    ?>
                                </div>

                                <!-- Row for form footer -->
                                <div class="row justify-content-center indexFormFooter">
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <button type="submit" name="submit-login" class="btn w-100 p-0">
                                            <p>LOGIN</p>    
                                            <img class="img-fluid" src="images/assets/button_signin.png">
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="signUpLink">
                                <p class="text-center">
                                    Don't Have Any Account? <a href="signup.php">Sign Up</a> Here!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/indexScript.js"></script>
    </body>
</html>
