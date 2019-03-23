<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style-signup.css">

        <!-- Include Bootstrap Datepicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />

        <title>Facenote - Sign Up</title>
    </head>
    <body>
        <div class="container-fluid min-vh-100 signup-container-fluid">
            <div class="row min-vh-100">
                <!-- START LEFT CONTAINER -->
                <div class="col-6 d-none d-sm-block signup-left-container d-sm-flex align-items-center justify-content-center">
                    <img class="img-fluid px-3" src="images/assets/signup/logo.png"/>
                </div>
                <!-- END LEFT CONTAINER -->
                <!-- START RIGHT CONTAINER -->
                <div class="col-12 col-sm-6 d-flex flex-column signup-right-container">
                    <!-- START HEADER FOR MOBILE -->
                    <div class="row h-25 d-sm-none signup-top-right-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <img class="img-fluid w-75 h-auto" src="images/assets/signup/logo.png"/>
                        </div>
                    </div>
                    <!-- END HEADER FOR MOBILE -->
                    <!-- START SIGNUP FORM -->
                    <div class="row d-flex align-items-center justify-content-center signup-form-container min-vh-100">
                        <div class="col-11 col-sm-10 col-md-8 col-lg-7 col-xl-6">
                            <form class="signup-form" action="responses/signup-response.php" method="POST" enctype="multipart/form-data">
                                <!-- START HEADER FORM -->
                                <div class="row signup-form-header">
                                    <div class="col">
                                        <img class="img-fluid" src="images/assets/header_form.png"/>
                                        <h1 class="text-center">SIGN UP</h1>
                                    </div>
                                </div>
                                <!-- END HEADER FORM -->
                                <!-- START BODY FORM -->
                                <div class="row justify-content-center signup-form-body">
                                    <!-- START USERNAME -->
                                    <div class="col-10 input-group py-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><img class="img-fluid form-input-icon" src="images/assets/logo_username.png"/></span>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="USERNAME" required>
                                    </div>
                                    <!-- END USERNAME -->
                                    <!-- START PASSWORD -->
                                    <div class="col-10 input-group py-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><img class="img-fluid form-input-icon" src="images/assets/logo_password.png"/></span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" required>
                                    </div>
                                    <!-- END PASSWORD -->
                                    <!-- START EMAIL -->
                                    <div class="col-10 input-group py-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="form-input-icon fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required>
                                    </div>
                                    <!-- END EMAIL -->
                                    <!-- START NAME -->
                                    <div class="col-10 input-group py-1">
                                        <div class="form-row signup-form-name">
                                            <div class="col">
                                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FIRST NAME" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LAST NAME" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END NAME -->
                                    <!-- START BIRTHDATE -->
                                    <div class="col-10 input-group py-1 signup-form-birthdate">
                                        <input type="text" class="form-control birthdatepicker text-center" id="birthdate" name="birthdate" placeholder="BIRTHDATE" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><img src="images/assets/signup/calendar.png" /></span>
                                        </div>
                                    </div>
                                    <!-- END BIRTHDATE -->
                                    <!-- START GENDER -->
                                    <div class="col-10 input-group py-1 justify-content-center">
                                        <div class="form-row signup-form-gender">
                                            <div class="col input-radio">
                                                <label>
                                                    <input type="radio" class="form-control" id="male" name="sex" value="Male" checked required>
                                                    <img src="images/assets/signup/cowo_unselect.png" />
                                                </label>
                                            </div>
                                            <div class="col input-radio">
                                                <label>
                                                    <input type="radio" class="form-control" id="female" name="sex" value="Female" required>
                                                    <img src="images/assets/signup/cewe_unselect.png" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END GENDER -->
                                    <!-- START PROFILE PICTURE -->
                                    <div class="col-10 input-group pt-1 pb-5">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="profile-pict-icon"><img class="img-fluid form-input-icon" src="images/assets/signup/camera.png"/></span>
                                        </div>
                                        <div class="custom-file" id="signup-form-profilepict">
                                            <input type="file" class="custom-file-input" id="signup-input-profilepict" name="profilepict" accept=".jpg,.jpeg,.png">
                                            <label class="custom-file-label form-control-file" for="signup-input-profilepict" data-browse="">Add Profile Picture</label>
                                        </div>
                                    </div>
                                    <!-- END PROFILE PICTURE -->
                                </div>
                                <!-- END BODY FORM -->
                                <!-- START FOOTER FORM -->
                                <div class="row justify-content-center signup-form-footer">
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <button type="submit" name="submit-signup" class="btn w-100 p-0">
                                            <h4 class="text-button">SIGN UP</h4>    
                                            <img class="img-fluid" src="images/assets/button_form.png">
                                        </button>
                                    </div>
                                </div>
                                <!-- END FOOTER FORM -->
                            </form>
                        </div>
                    </div>
                    <!-- END SIGNUP FORM -->
                </div>
                <!-- END RIGHT CONTAINER -->
            </div>
        </div>

        <!-- Javascript Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function(){
                <?php
                    if(isset($_SESSION['FailSignup'])){
                        echo "alert('".$_SESSION['FailSignup']."');";
                        unset($_SESSION['FailSignup']);
                    }
                ?>
            })
            $('.birthdatepicker').datepicker({
                    format: "yyyy-mm-dd",
                    title: "Your Birthdate",
                    startDate: "1920-01-01",
                    endDate: "0d",
                    maxViewMode: "years",
                    autoclose: true,
                    disableTouchKeyboard: false
                });

            $('.custom-file-input').change(function(e){
                let fileName = e.target.files[0].name;
                $(this).next('.form-control-file').addClass("selected").html(fileName);
            })
        </script>
    </body>
</html>
