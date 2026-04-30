<?php
session_start();
include("db.php");

$error = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row['username'];

        header("Location: dashboard.php");
    } else {
        $error = "Invalid login";
    }
}
?>

<form method="POST">
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
</form>

<p style="color:red;"><?php echo $error; ?></p>