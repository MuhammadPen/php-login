<?php
	include "PDO_CRUD.php";
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addUser'])){
		$connect->PDOCreateUser();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<form action="" method="POST">
		<label for="firstname">firstname</label><br>
		<input type="text" id="firstname" name="firstname"><br>
		<label for="lastname">lastname</label><br>
		<input type="text" id="lastname" name="lastname"><br>
		<input type="submit" name="addUser" value="addUser">
	</form>
</body>
</html>
