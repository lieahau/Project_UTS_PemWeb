<?php
class DB{
    public static function connect(){
        $host = "localhost"; // lokasi mysql
        $username = "root"; // user untuk login
        $password = ""; // password untuk login
        $dbname = "facenote"; // database name

        $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password); // connect pdo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set error mode
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }

    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
    }

    public static function queryInsert($tableName, $params = array()){
        $columns = array_keys($params);
        $values = array_values($params);
        $query = "INSERT INTO $tableName (".implode(',', $columns).") VALUES ('".implode("', '", $values)."')";
        $statement = self::connect()->prepare($query);
        $statement->execute();
    }

    public static function queryCount($tableName, $condition = true){
        $query = "SELECT COUNT(*) FROM $tableName WHERE $condition";
        $statement = self::connect()->query($query); // ini manggil query() function nya PDO, bukan function di class ini
        return $statement->fetchColumn();
    }
}

?>
