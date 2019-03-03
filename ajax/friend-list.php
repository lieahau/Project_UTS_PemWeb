<!-- This php file handle ajax request from profile-view.php -->
<!-- Dev will call ajax from url "ajax/friend-list?..." -->
<!-- Method is GET -->
<!-- Return JSON -->
<!-- JSON consist of username and profile_picture -->

<?php
    // search is searched username value
    // limit is number of results to be returned
    require_once $_SERVER['DOCUMENT_ROOT'].'/classes/Request.php';
    $search = Request::get('search');
    $limit = Request::get('limit')->getVal();

    // Get data from DB
    require_once $_SERVER['DOCUMENT_ROOT'].'/classes/DB.php';
    DB::connect();
    if($search->isValidText()){
        $result = DB::$pdo->query("
            SELECT username, profile_picture 
            FROM user 
            WHERE username LIKE '$username'
            LIMIT $limit
        ");

        // Send JSON data to client
        header($_SERVER['SERVER_PROTOCOL'].'OK', true, 200);
        echo json_encode($result);
    }else{
        header($_SERVER['SERVER_PROTOCOL'].'404 fail to fetch data', true, 404);
    }
?>