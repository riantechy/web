<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="somb";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error){
    die("connection failed");
}

?>