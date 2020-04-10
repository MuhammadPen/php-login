<?php
class password_auth
{
    #declaring some variables
    public $host;
    public $username;
    public $password;
    public $db;
    public $input_name;
    public $input_password;

    #constructor for defining above variables
    function __construct()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db = 'users';
        $this->input_name = $_POST['name'];
        $this->input_password = $_POST['password'];
    }

    #function for password authentication
    function password_auth($arg1, $arg2)
    {
        #as we are not taking user input for pre-existing values, we can use mysqli
        $mysqli = new mysqli($this->host,$this->username,$this->password,$this->db);
        $result_name = $mysqli->query('SELECT id FROM password_auth WHERE name = "'.$arg1.'"');
        #checking if user exists based on the returned result.
        #if the result has no rows, it means that there were no matches, so user does not exist
        if(mysqli_num_rows($result_name) == 0 ){
            echo "user not found"."<br>";
        }else{
            echo "user found"."<br>";
        }
        $result_password = $mysqli->query('SELECT id FROM password_auth WHERE password = "'.$arg2.'"');
        #checkign if password exists based on returned result. Just like aboove.
        if(mysqli_num_rows($result_password) == 0 ){
            echo "password incorrect"."<br>";
        }else{
            echo "password correct"."<br>";
        }
        #storing returned values in an associated array so we can compare them easily
        $row1 = $result_name->fetch_assoc();
        $row2 = $result_password->fetch_assoc();
        #if id number for username and password is same, it means that they belong in the same row in the database i.e. password for selected user is correct
        if($row1['id'] == $row2['id']){
            echo "success";
        }else{
            echo "failure";
        }
    }

}
#making instance of password_auth object
$object = new password_auth();
#calling password_auth function
$object->password_auth($_POST['name'],$_POST['password']);
?>
<html>
    <title>
     Password Auth
    </title>
    <body>
        <form action="" method="POST">
            <label for="name">Profile name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="password">password</label><br>
            <input type="text" id="password" name="password"><br>
            <input type="submit" name="password_auth"><br>
        </form>
    </body>
</html>
