<?php
//Local Server Information
$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "test";

// Check if connection was successful
try   {
     $handle = new PDO("mysql:host=$server;dbname=$db", "$usernmae","$password");
     $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "connected";

}catch(PDOException $e) {
die("Oops.Something went wrong in the database.");


}

$sql_query = "CREATE TABLE users_info(
     username VARCHAR(60) NOT NULL,
     userpassword VARCHAR(30) NOT NULL
 )";
 $result = $dhb->query($sql_query);
 echo $result;

?>




