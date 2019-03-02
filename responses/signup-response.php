<!-- Used for signup -->
<?php
    // auto load semua class
    spl_autoload_register(function($className){ 
        $path = $_SERVER['DOCUMENT_ROOT'].'/classes/';
        include $path.$className.'.php';
    });
    // session_start(); // session_start must below spl_autoload

    // jika di submit form sign up
    if(isset($_POST['submit-signup']))
    {
        // Validate submitted form
        if(Request::post('username')->isValidUsername()) // validate username
            $username = Request::post('username')->getVal();
        else
            die("Sign Up failed. Invalid Username. Username must be greater than 3 and less than 255 with only alpha-numeric and underscore allowed.");
        
        if(Request::post('email')->isValidEmail()) // validate email
            $email = Request::post('email')->getVal();
        else
            die("Sign Up failed. Invalid Email.");

        if(Request::post('password')->isValidPassword()) // validate password
            $password = Request::post('password')->getVal();
        else
            die("Sign Up failed. Password length must be greater than 6 and less than 255.");
        
        if(Request::post('firstname')->isValidLength()) // validate first name
            $firstname = Request::post('firstname')->getVal();
        else
            die("Sign Up failed. First Name must be less than 255.");

        if(Request::post('lastname')->isValidLength()) // validate last name
            $lastname = Request::post('lastname')->getVal();
        else
            die("Sign Up failed. Last Name must be less than 255.");

        if(Request::post('birthdate')->isValidBirthDate()) // validate birth of date
            $birthdate = Request::post('birthdate')->getVal();
        else
            die("Sign Up failed. Invalid Date of Birth.");

        $sex = Request::post('sex')->getVal();
        $profilepicture = 'placeholder.jpg'; // belom bisa upload file, jadi pake default value dulu
        
        // validate apakah sudah ada di database
        if(DB::queryCount('user', "username = '$username'")){
            die("Sign Up failed. Username existed. Please use another username.");
        }
        else if(DB::queryCount('user', "email = '$email'")){
            die("Sign Up failed. Email already registered. Please use another email.");
        }
        else{
            // insert into database
            DB::queryInsert('user', array(
                'username'=>$username, 'email'=>$email, 'password'=>md5($password),
                'first_name'=>$firstname, 'last_name'=>$lastname, 'birthdate'=>$birthdate, 'sex'=>$sex,
                'profile_picture'=>$profilepicture
            ));
            echo "Sign Up Success.";
        }
    }
    else{
        die("no data submitted");
    }

?>
