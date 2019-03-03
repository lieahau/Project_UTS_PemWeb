<!-- This php file handle ajax request from profile-view.php -->
<!-- Dev will call ajax from url "ajax/friend-list?..." -->
<!-- Method is GET -->
<!-- Return JSON -->
<!-- JSON consist of username and profile_picture -->

<?php
    // search is searched username value
    // limit is number of results to be returned
    include_once $_SERVER['DOCUMENT_ROOT'].'/classes/Request.php';
    $search = Request::get('search');
    $limit = Request::get('limit')->getVal();

    // Get data from DB
    include_once $_SERVER['DOCUMENT_ROOT'].'/classes/DB.php';
    DB::connect();
    if($search->isValidText()){
        $result = DB::$pdo->query("
            SELECT username, profile_picture 
            FROM user 
            WHERE username LIKE '$username'
            LIMIT $limit
        ");

        // Send JSON data to client
        echo json_encode($result);
    }else{
        http_response_code(404);
    }
?>