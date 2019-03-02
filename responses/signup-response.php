<!-- Used for signup -->
<?php
    // auto load semua class
    spl_autoload_register(function($className){ 
        $path = $_SERVER['DOCUMENT_ROOT'].'/classes/';
        include $path.$className.'.php';
    });
    session_start();

    // jika di submit form sign up
    if(isset($_POST['submit-signup']))
    {
        $username = Request::post('username')->safe();
        $email = Request::post('email')->sanitizeEmail();
        $password = Request::post('password')->raw();
        $firstname = Request::post('firstname')->raw();
        $lastname = Request::post('lastname')->raw();

        if(Request::post('birthdate')->isValidDate()) // validate birthdate
            $birthdate = Request::post('birthdate')->raw();
        else
            die("Invalid Date of Birth.");

        $sex = Request::post('sex')->raw();
        $profilepicture = 'placeholder.jpg'; // belom bisa upload file
        
        // validate before insert into database
        if(DB::queryCount('user', "username = '$username'")){
            $_SESSION['signupfailed'] = true;
            die("Sign Up failed. Username existed. Please use another username.");
        }
        else if(DB::queryCount('user', "email = '$email'")){
            $_SESSION['signupfailed'] = true;
            die("Sign Up failed. Email already registered. Please use another email.");
        }
        else{
            // insert into database
            $_SESSION['userexisted'] = false;
            DB::queryInsert('user', array(
                'username'=>$username, 'email'=>$email, 'password'=>md5($password),
                'first_name'=>$firstname, 'last_name'=>$lastname, 'birthdate'=>$birthdate, 'sex'=>$sex,
                'profile_picture'=>$profilepicture
            ));
            echo "Success Insert Data";
        }
    }
    else{
        die("no data submitted");
    }

?>
