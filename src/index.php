<?php
class database {
public $hostname = '127.0.0.1/phpmyadmin';
public $dbname = 'users';
public $username = 'root';
public $password = '';

    function connectToDB () {
        try {
            $this->dbh = new PDO("mysql:host=$hostname;dbname=users", $username, $password);
        echo 'Connected to database';
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
        return $this->dbh;
    }

    function createTable () {
        $sql_query = "CREATE TABLE users_info(
            username VARCHAR(60) NOT NULL,
            userpassword VARCHAR(30) NOT NULL
        )";

        $result = $dhb->query($sql_query);
        echo $result;

    }
}
$database_connection = new database();
$database_connection->connectToDB();
$database_connection->createTable();
?>
