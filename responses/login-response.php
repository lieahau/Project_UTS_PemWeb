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
        require_once $_SERVER['DOCUMENT_ROOT'].'/classes/Request.php';
        $username = Request::post('username');
        $password = Request::post('password');
        $remember = Request::post('remember');
        $succeed = false;
        
        // membuat object DB untuk menghandle pengambilan informasi ke database
        require_once $_SERVER['DOCUMENT_ROOT'].'/classes/DB.php';
        if($username->isValidText() && $password->isValidPassword()){
            if(DB::queryCount('user', "username='$username->getVal()' 
            && password=MD5('$password->getVal()'") == 1){
                $succeed = true;
            }
        }

        // Start session and save response into "login_res"
        session_start();
        if($succeed){
            $_SESSION['login_res'] = true;
        }else{
            $_SESSION['login_res'] = false;
            die("Invalid username or password.");
        }
        header("location: index.php");
    }
    else{
        die("no data submitted");
    }
?>
