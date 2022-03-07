<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST['fName'];
    $sName = $_POST['sName'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

// //creating table
// $sql = "CREATE TABLE myTabl(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fName VARCHAR(30) NOT NULL,
//     sName VARCHAR(30) NOT NULL,
//     email VARCHAR(100),
//     msg VARCHAR(300)

// )";
// if (mysqli_query ($conn, $sql)){
//     echo 'table created successful';
// }
// else{
//     echo 'error in creating table';
// }
// mysqli_close($conn);

$sql = "INSERT INTO myTabl (fName, sName, email, msg) 
VALUES('$fName', '$sName', '$email', '$msg')";

if(mysqli_query($conn, $sql)){
    echo 'Data stored successful.';
}
else{
    echo 'an error occured.';

}
}
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <ul>
    <li class="hdd"><a href="index.php">Home</a></li>
        <li class="hdd"><a href="about.php">About Us</a></li>
        <li class="hdd"><a href="contact.php">Contact Us</a></li>
        <div style="float:right" class="dropdown">
            <button class="dropbtn">Register</button>
            <div class="dropdown-content">
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
             </div>
        </div>
    </ul>
</header>
<body>
    <form action="contact.php" method="post">
        <input type="text" name="fName" placeholder="First Name"><br>
        <input type="text" name="sName" placeholder="Second Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="textarea" name="msg" placeholder="Your Message"><br>
        <button name="submit">Submit</button>
        
    </form>
    
        <p class="bdy">Contact us though our contacts provided here.</p>

        <footer>
            <p>Designed by Riantech Solutions <br>Copyright &copy; 2022</p>
        </footer>
</body>
</html>