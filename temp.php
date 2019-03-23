<?php
    require_once 'classes/DB.php';
    $arr1 = DB::querySelect('user'); // SELECT * FROM user;
    $arr2 = DB::querySelect('user', array('id', 'email')); // SELECT id, email FROM user;
    $arr = DB::querySelect('user', array('id', 'email'), 'email="asd@as.com"'); // SELECT id, email, FROM user WHERE email="asd@as.com";
    var_dump($arr);
?>
