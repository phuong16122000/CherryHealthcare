<!DOCTYPE html>
<html>
<head>
<meta charset = 'utf-8'>
<title>TMC Student Club</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<center><img src=".\image\TMC-Logo-3.jpg" margin="auto" width="370px" height="110px"></img></center>
<p \>
  <nav>
    <div class="topnav" id="myTopnav">
    <a href="home.html">Home</a>
    <a href="about.html">About the Club</a>
    <a href="photo.html">Photo Gallery</a>
    <a href="registration.html">Member Registration</a>
    <a href="login.html">Admin Login</a>
</div>
</nav>
<p \>
<section>
<div class="h1">Administration Screen</div>
<hr>
<div class="sidebar">
<div class="h2">Admin Menu</div>
<nav>
    <div class="leftnav" id="myLeftnav">
    <p \><a href="view.php">View Record</a>
	<p \><a href="edit.php">Edit Record</a>
	<p \><a href="delete.php">Delete Record</a>
	<p \><a href="logout.php">Logout</a>
    </div>
 </nav>
 </div>
</section>
<div class="main">
<section>
<?php
$host     = "localhost";
$database = "healthcare";
$table_name    = "registration";
$username = "root";
$passwd   = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");
mysqli_select_db($connect,$database);

$fname=$_POST["fullname"];
$NRIC=$_POST["password"];
$telno=$_POST["telno"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$remark=$_POST["remark"];

$sql="UPDATE $table_name SET fullname = '$fname',password = '$NRIC',telno='$telno', email='$email', gender='$gender', remark='$remark' WHERE NRIC = '".$NRIC."'";

if (!mysqli_query($connect,$sql))
  {
  die('Error: ' . mysqli_error($connect));
  }
  print "<p>Your information has been updated in the database</p>";

mysqli_close($connect);
?>
</section>
</div>
</body>
</html>