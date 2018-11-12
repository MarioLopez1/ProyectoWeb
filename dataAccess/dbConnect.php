<?php
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_DATABASE', 'user');
define("BASE_URL", "http://localhost/WebFinal/"); // Eg. http://yourwebsite.com

function getDB() {
    $dbhost = DB_SERVER;
    $dbuser = DB_USERNAME;
    $dbpass = DB_PASSWORD;
    $dbname = DB_DATABASE;
    try {
        $connString="mysql:host=$dbhost;dbname=$dbname";
        $dbConnection = new PDO($connString, $dbuser, $dbpass);      
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbConnection->exec("set names utf8");
        return $dbConnection;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die($e->getMessage);
    }
}

?>