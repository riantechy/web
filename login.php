<?php
include 'config.php';

if(isset($_POST['login'])){
session_start();
error_reporting(0);
// $_SESSION['']=1;

$email =$_POST['email'];
$pass = $_POST['pass'];
   
$sql ="SELECT * FROM myTable WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $sql);
if ($result -> num_rows > 0){
    header("location: welcome.php");
}
else{
    echo "<script>alert('Email or password is wrong')</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post"><br>
    <h3>Login To access our services</h3>
        <input type="email"name="email"placeholder="Username"required><br>
        <input type="password"name="pass"placeholder="Password"required><br>
        <button name ="login" class="log">Login</button>
        <p>Don't have account <a href="register.php">Register</a></p>

    </form>
    
</body>
</html>