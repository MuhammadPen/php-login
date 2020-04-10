	<?php
		include "PDO_CRUD.php";
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addUser'])){
			$connect->PDOCreateUser();
		}
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ReadUser'])){
			$connect->PDOReadUser();
		}
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['UpdateUser'])){
			$connect->PDOUpdateUser();
		}
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['DeleteUser'])){
			$connect->PDODeleteUser();
		}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Login Page</title>
</head>
<body>
	<form action="" method="POST">
		<label for="firstname">firstname</label><br>
		<input type="text" id="firstname" name="firstname"><br>
		<label for="lastname">lastname</label><br>
		<input type="text" id="lastname" name="lastname"><br>
		<input type="submit" name="addUser" value="addUser">
		<input type="submit" name="ReadUser" value="ReadUser">
		<input type="submit" name="UpdateUser" value="UpdateUser">
		<input type="submit" name="DeleteUser" value="DeleteUser">
	</form>
</body>
</html>