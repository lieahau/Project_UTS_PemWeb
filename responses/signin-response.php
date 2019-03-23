<!-- Used for login -->
<?php
     /*
        This PHP handle signin-response
        when client want to signin and submit the signin form
        this php will return some kind of response to signin VIEW
    */

    // include class
    require_once '../classes/DB.php';
    require_once '../classes/Request.php';
    session_start();

    // jika di submit form signin
    if(isset($_POST['submit-signin']))
    {
        if(Request::post('email')->isValidEmail()) // validate email
            $email = Request::post('email')->getVal();
        else
            $_SESSION['FailSignin'] = "Sign In failed. Invalid Email.";
        
        if(Request::post('password')->isValidPassword()) // validate password
            $password = Request::post('password')->getVal();
        else
            $_SESSION['FailSignin'] = "Sign Up failed. Password length must be greater than 6 and less than 255.";

        if(DB::queryCount('user', "email='".$email."' && password=MD5('".$password."')") == 0)
            $_SESSION['FailSignin'] = "Incorrect email or password.";

        // Sign in fail, reload page
        if(isset($_SESSION['FailSignin'])){
            header("location: ../index.php");
        }
        else{ // sign in success
            // set cookie if remember me checked
            if(Request::post('remember')->getVal()){
                setcookie('remember', $email, time() + (86400 * 30), "/");
            }
            $_SESSION['email'] = $email;
            
            header("location: ../index2.php");
        }
    }
    else{
        header("location: ../index.php");
    }
?>
