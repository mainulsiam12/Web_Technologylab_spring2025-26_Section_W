<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("db.php");

$username = "";
$email = "";
$password = "";
$error = "";

if(isset($_POST['signup'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username == "" || $email == "" || $password == ""){
        $error = "All fields required!";
    }
    else{
        $pass = md5($password); 

        $sql = "INSERT INTO users (username,email,password)
                VALUES ('$username','$email','$pass')";

        if($conn->query($sql)){
            echo "Signup Successful";
        } else {
            echo "Error";
        }
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="signup" value="Sign Up">
</form>

<p style="color:red;"><?php echo $error; ?></p>