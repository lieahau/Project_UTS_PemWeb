<!DOCTYPE html>
<?php session_start();
    setcookie('remember', "", time() - 3600);
    if(isset($_COOKIE['remember'])){
        $_SESSION['email'] = $_COOKIE['remember'];
        header("location: ../index2.php");
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style-login.css">

        <title>Facenote - Login</title>
    </head>
    <body>
        <div class="container-fluid min-vh-100 signin-container-fluid">
            <div class="row min-vh-100">
                <!-- START LEFT CONTAINER -->
                <div class="col-6 d-none d-sm-block signin-left-container d-sm-flex align-items-center justify-content-center">
                    <img class="img-fluid px-3" src="images/assets/signin/logo_signin.png"/>
                </div>
                <!-- END LEFT CONTAINER -->
                <!-- START RIGHT CONTAINER -->
                <div class="col-12 col-sm-6 d-flex flex-column signin-right-container">
                    <!-- START HEADER FOR MOBILE -->
                    <div class="row h-25 d-sm-none signin-top-right-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <img class="img-fluid w-75 h-auto" src="images/assets/signin/logo_signin.png"/>
                        </div>
                    </div>
                    <!-- END HEADER FOR MOBILE -->
                    <!-- START SIGNIN FORM -->
                    <div class="row d-flex align-items-center justify-content-center signin-form-container min-vh-100">
                        <div class="col-11 col-sm-10 col-md-8 col-lg-7 col-xl-6">
                            <form class="signin-form" action="responses/signin-response.php" method="POST">
                                <!-- START HEADER FORM -->
                                <div class="row signin-form-header">
                                    <div class="col">
                                        <img class="img-fluid" src="images/assets/header_form.png"/>
                                        <h1 class="text-center">SIGN IN</h1>
                                    </div>
                                </div>
                                <!-- END HEADER FORM -->
                                <!-- START BODY FORM -->
                                <div class="row justify-content-center signin-form-body">
                                    <!-- START EMAIL -->
                                    <div class="col-10 input-group py-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><img class="img-fluid form-input-icon" src="images/assets/logo_username.png"/></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required>
                                    </div>
                                    <!-- END EMAIL -->
                                    <!-- START PASSWORD -->
                                    <div class="col-10 input-group py-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><img class="img-fluid form-input-icon" src="images/assets/logo_password.png"/></span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" required>
                                    </div>
                                    <!-- END PASSWORD -->
                                    <!-- START REMEMBER ME -->
                                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 pt-1 pb-5">
                                        <div class="custom-control custom-checkbox remember-me">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember" value="remember">
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <!-- END REMEMBER ME -->
                                </div>
                                <!-- END BODY FORM -->
                                <!-- START FOOTER FORM -->
                                <div class="row justify-content-center signin-form-footer">
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <button type="submit" name="submit-signin" class="btn w-100 p-0">
                                            <h4 class="text-button">SIGN IN</h4>    
                                            <img class="img-fluid" src="images/assets/button_form.png">
                                        </button>
                                    </div>
                                </div>
                                <!-- END FOOTER FORM -->
                            </form>
                            <div class="signUpLink pt-5">
                                <h5 class="text-center text-white">
                                    Don't Have Any Account? <a href="signup.php">Sign Up</a> Here!
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- END SIGNIN FORM -->
                </div>
                <!-- END RIGHT CONTAINER -->
            </div>
        </div>

        <!-- Javascript Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                <?php
                    if(isset($_SESSION['FailSignin'])){
                        echo "alert('".$_SESSION['FailSignin']."');";
                        unset($_SESSION['FailSignin']);
                    }
                ?>
            });
        </script>
    </body>
</html>
