<?php
class DB{
    private static function connect(){
        $pdo = new PDO("mysql:host='localhost';dbname='facenote';", 'root', ''); // connect pdo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set error mode
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute();
    }
}

?>
