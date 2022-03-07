 <?php
include 'config.php';

$first_name = $_SESSION['first_name'];
$sql = "SELECT * FROM myTable WHERE first_name = '$first_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo $row['first_name'];


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="welc.css">
</head>
<body>

<div class="header">
  <h1>Welcome <?php echo $first_name;?></h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        <li><a href="about.php">About</a></li><br>
        <li><a href="#">Update Your Profile</a></li><br>
        <li><a href="contact.php">Contact Us</a></li><br>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h1>Users dashboard</h1>
    <p>This is the User dashboard where the user can select one of the services we provide.</p>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>App development</h2>
      <p>we are the leadng organization which deals with development of responsive apps.</p>
      <h2>Web design</h2>
      <p>The website we design is among the best in their responsiveness and of high standards.</p>
      <h2>Software Installation and support</h2>
      <p>If you ave any problem in installing the softwares in your organasation you can reach us.</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Designed by Riantechy solutions Copyright &copy; 2022</p>
</div>

</body>
</html>

