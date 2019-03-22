<!-- Used for login -->
<?php
    /*
        This PHP handle login-response
        when client want to login and submit the login form
        this php will return some kind of response to login VIEW
        
        Since this project use php to handle the response(not ajax)
        this controller will start a session and save the response into "login_res"
    */
    /* ======= THIS PHP NOT TESTED YET ======= */

    // jika di submit form login
    if(isset($_POST['submit-login']))
    {
        // Match login information from login form into "facenote database"
        // remember merupakan boolean
        // remember true = menyimpan sesi login di cookie sehingga ketika membuka lagi tidak usah login
        // remember false = tidak menyimpan sesi login di cookie akan menghapus sesi pada saat keluar site
        // succeed merupakan hasil pencocokan username dan password dengan database
        // jika true maka berhasil login
        // akan menset session name dengan username dari user
        // sehingga dapat mengingat identitas user yang masuk
        require_once '../classes/Request.php';
        $email = Request::post('email');
        $password = Request::post('password');
        $remember = Request::post('remember');
        $succeed = false;
        
        // membuat object DB untuk menghandle pengambilan informasi ke database
        require_once '../classes/DB.php';
        if($email->isValidEmail() && $password->isValidPassword()){
            if(DB::queryCount('user', "email='".$email->getVal()."' 
            && password=MD5('".$password->getVal()."')") == 1){
                $succeed = true;
            }
        }

        // Start session and save response into "login_res"
        session_start();
        if($succeed){
            $_SESSION['email'] = $email->getVal();
        }else{
            unset($_SESSION['email']);
            die("Incorrect email or password.");
        }
        header("location: ../index2.php");
    }
    else{
        die("no data submitted");
    }
    
?>
