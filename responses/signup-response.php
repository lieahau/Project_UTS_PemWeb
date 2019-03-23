<!-- Used for signup -->
<?php
    /*
        This PHP handle signup-response
        when client want to signup and submit the signup form
        this php will return some kind of response to signup VIEW
    */

    // include class
    require_once '../classes/DB.php';
    require_once '../classes/Request.php';
    session_start();

    // jika di submit form sign up
    if(isset($_POST['submit-signup']))
    {
        // Validate submitted form
        if(Request::post('username')->isValidUsername()) // validate username
            $username = Request::post('username')->getVal();
        else
            $_SESSION['FailSignup'] = "Sign Up failed. Invalid Username. Username must be greater than 3 and less than 255 with only alpha-numeric and underscore allowed.";

        if(Request::post('email')->isValidEmail()) // validate email
            $email = Request::post('email')->getVal();
        else
            $_SESSION['FailSignup'] = "Sign Up failed. Invalid Email.";

        if(Request::post('password')->isValidPassword()) // validate password
            $password = Request::post('password')->getVal();
        else
            $_SESSION['FailSignup'] = "Sign Up failed. Password length must be greater than 6 and less than 255.";
        
        if(Request::post('firstname')->isValidLength()) // validate first name
            $firstname = Request::post('firstname')->getVal();
        else
            $_SESSION['FailSignup'] = "Sign Up failed. First Name must be less than 255.";

        if(Request::post('lastname')->isValidLength()) // validate last name
            $lastname = Request::post('lastname')->getVal();
        else
            $_SESSION['FailSignup'] ="Sign Up failed. Last Name must be less than 255.";

        if(Request::post('birthdate')->isValidBirthDate()) // validate birth of date
            $birthdate = Request::post('birthdate')->getVal();
        else
            $_SESSION['FailSignup'] = "Sign Up failed. Invalid Date of Birth.";

        $sex = Request::post('sex')->getVal();
        if(Request::post('profilepict')->isValidImage('profilepict')){
            $profilepicture = Request::post('profilepict')->setUploadImage('profilepict');
        }
        else{
            $profilepicture = 'uploads/placeholder.png';
        }

        // cek apakah sudah ada di database
        if(DB::queryCount('user', "username = '$username'")){
            $_SESSION['FailSignup'] = "Sign Up failed. Username existed. Please use another username.";
        }
        else if(DB::queryCount('user', "email = '$email'")){
            $_SESSION['FailSignup'] = "Sign Up failed. Email already registered. Please use another email.";
        }

        // Sign up fail, reload page
        if(isset($_SESSION['FailSignup'])){
            header("location: ../signup.php");
        }
        else{
            // insert into database
            DB::queryInsert('user', array(
                'username'=>$username, 'email'=>$email, 'password'=>md5($password),
                'first_name'=>$firstname, 'last_name'=>$lastname, 'birthdate'=>$birthdate, 'sex'=>$sex,
                'profile_picture'=>$profilepicture
            ));

            // Sign up success, direct to login page
            if(isset($_COOKIE['remember'])){
                unset($_COOKIE['remember']);
                setcookie('remember', "", time() - 86400, '/'); // unset cookie
            }
            unset($_SESSION['email']);
            header("location: ../index.php");
        }
    }
    else{
        header("location: ../signup.php");
    }

?>
