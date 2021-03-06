<?php
class CRUD{
		//Create database
		function createDB(){
			$conn = new mysqli("localhost", "root", "");
			$sql = "CREATE DATABASE users";
			if ($conn->query($sql) === TRUE ){
				echo "database created successfully";
			}else{
				echo"some error occured during the process of database creation.";
			}
			$conn->close();
		}
		//Create table in database
		function createTable(){
			$conn = new mysqli("localhost", "root", "", "users");
			$sql = "CREATE TABLE user_list(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL)";
			if ($conn->query($sql) === TRUE ){
				echo "table created successfully";
			}else{
				echo"some error occured during the process of table creation.";
			}
			$conn->close();
		}
		//Create row in table
		function createUser(){
			$fname = "M";
			$lname = "F";
			$conn = new mysqli("localhost", "root", "", "users");
			$sql = "INSERT INTO user_list (firstname, lastname) VALUES ('$fname', '$lname')";
			if($conn->query($sql) === TRUE ){
				echo "data enterted successfully";
			}else{
				echo "an error occured during user creation";
			}
			$conn->close();
		}
		//Read table data
		function readUser(){
			$conn = new mysqli("localhost", "root", "", "users");
			$sql = "SELECT * FROM user_list";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
               	while($row = $result->fetch_assoc()) {
                    echo $row['id']."|".$row['lastname']."|".$row['firstname']." <br>";
                }
            }else{
                echo "No Data Avaliable";
            }
            $conn->close();
		}
		//update table data
		function updateUser(){
			$fname = "A";
			$lname = "F";
			$conn = new mysqli("localhost", "root", "", "users");
			$sql = "UPDATE user_list SET firstname = '$fname', lastname = '$lname' WHERE id = '13'";
			if($conn->query($sql) === TRUE){
				echo "updated data successfully";
			}else{
				echo "cant update data";
			}
			$conn->close();
		}
		//delete table data
		function deleteUser(){
			$conn = new mysqli("localhost", "root", "", "users");
			$sql = "DELETE  FROM user_list WHERE id='14'";
			if($conn->query($sql) === TRUE){
				echo "deleted data successfully";
			}else{
				echo "cant delete data";
			}
			$conn->close();
		}
	}
	$connect = new CRUD();
	//$connect->createDB();
	//$connect->createTable();
	//$connect->createUser();
	//$connect->readUser();
	//$connect->updateUser();
	//$connect->deleteUser();
?>
