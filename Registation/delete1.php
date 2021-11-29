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
<?php
print "<p>Delete Database Record</p>";

$host          = "localhost";
$database      = "healthcare";
$table_name    = "registration";
$username      = "root";
$passwd        = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");
mysqli_select_db($connect,$database);

$NRIC = $_POST["NRIC"];

$query = "SELECT * FROM $table_name WHERE NRIC='".$NRIC."'";
$sql = "DELETE FROM $table_name WHERE NRIC='".$NRIC."'";

mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);

$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
if (!$myrow){
   print "<p>No such record</p>";
}
else {
   mysqli_query($connect,$sql);
   print "Record ID '$NRIC' has been deleted from the Database";	
}

mysqli_close($connect);
?>

</section>
</body>
</html>