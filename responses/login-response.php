<!-- Used for login -->
<?php
    /*
        This PHP handle login-response
        when client want to login and submit the login form
        this php will return some kind of response to login VIEW
        
        Since this project use php to handle the response(not ajax)
        this controller will start a session and save the response into "login_res"
    */
    // Match login information from login form into "facenote database"
    // remember merupakan boolean
    // remember true = menyimpan sesi login di cookie sehingga ketika membuka lagi tidak usah login
    // remember false = tidak menyimpan sesi login di cookie akan menghapus sesi pada saat keluar site
    // succeed merupakan hasil pencocokan username dan password dengan database
    // jika true maka berhasil login
    $username;
    $password;
    $remember;
    $succeed = false;
    if(isset($_POST['username'])) $username = $_POST['username'];
    if(isset($_POST['password'])) $password = $_POST['password'];
    if(isset($_POST['remember'])) $remember = $_POST['remember'];
    
    // membuat object DB untuk menghandle pengambilan informasi ke database
    include_once $_SERVER['DOCUMENT_ROOT'].'DB.php';
    $pdo = DB::connect();
    $result = $pdo->query("SELECT * FROM user WHERE username='$username' && password=MD5('$password')");
    foreach($result as $row){
        if($row['username'] == $username && $row['password'] == md5($password)){
            $succeed = true;
        }
        break;
    }

    // Start session and save response into "login_res"
    session_start();
    if($succeed){
        $_SESSION['login_res'] = true;
    }else{
        $_SESSION['login_res'] = false;
    }
    header("location: index.php");
?>
