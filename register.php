<?php 
include 'config.php';

$passErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //checking if the Email entered exist.
    if($email==0){}
    //Checking if the password is same
    if($pass!==$confirm_pass){
        $passErr = 'Password must be  same';
    }
    else{
    $sql = "INSERT INTO myTable(first_name, second_name, phone_no, gender, email, pass)
    VALUES('$first_name', '$second_name', '$phone_no', '$gender', '$email', '$pass')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Data stored successful.')</script>";
    }
    else{
        echo "<script>alert('an error has ocurred')</script>";

        }
    
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
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="post"><br>
    <h3>Register with us</h3>
        <input type="text"name="first_name"placeholder="First name"required><br>
        <input type="text"name="second_name"placeholder="Second name"required><br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="text"name="phone_no"placeholder="Phone Number"required><br>
        <input type="email"name="email"placeholder="Email"required><br>
        <input type="password"name="pass"placeholder="Password"required><br>
        <input type="password"name="confirm_pass"placeholder="confirm password"required><br>
        <span class="error"><?php echo $passErr;?></span>
        <button name="submit" class="reg">Register</button>
        <p>Already have account <a href="login.php">login</a></p>

    </form>
    
</body>
</html>