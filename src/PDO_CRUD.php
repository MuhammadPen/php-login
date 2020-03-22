<?php
class CRUD {
	public $host = 'localhost';
	public $database = 'users';
	public $username = 'root';
	public $password = '';
	function PDOCreateDB (){
		$dsn ='mysql:host='. $this->host;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = "CREATE DATABASE users";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$pdo->connection=null;
	}
	function PDOCreateTable (){
		$dsn ='mysql:host='. $this->host.';dbname='.$this->database;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = "CREATE TABLE user_list(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$pdo->connection=null;
	}
	function PDOCreateUser (){
		$dsn ='mysql:host='. $this->host.';dbname='.$this->database;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = 'INSERT INTO `user_list` (`id`, `firstname`, `lastname`) VALUES (:id,:firstname,:lastname)';
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['id'=>NULL,'firstname'=>$this->database,'lastname'=>$this->database]);
		$pdo->connection=null;
	}
	function PDOReadUser (){
		$dsn ='mysql:host='. $this->host.';dbname='.$this->database;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = 'SELECT * FROM user_list';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo $row['id'] . "|" . $row['firstname'] . "|" . $row['lastname'] . "<hr>";
		}
		$pdo->connection=null;
}
	function PDOUpdateUser (){
		$dsn ='mysql:host='. $this->host.';dbname='.$this->database;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = "UPDATE user_list SET firstname = '$this->host', lastname = '$this->host' WHERE id = '2338'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$pdo->connection=null;
	}
	function PDODeleteUser (){
		$dsn ='mysql:host='. $this->host.';dbname='.$this->database;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$sql = "DELETE  FROM user_list WHERE id='2338'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$pdo->connection=null;
	}
}

$connect = new CRUD();
//$connect->PDOCreateDB();
//$connect->PDOCreateTable();
//$connect->PDOCreateUser();
//$connect->PDOReadUser();
//$connect->PDOUpdateUser();
//$connect->PDODeleteUser();
