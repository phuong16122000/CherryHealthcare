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
print "<p>Edit Database Record</p>";
$host     = "localhost";
$database = "healthcare";
$table_name    = "registration";
$username = "root";
$passwd   = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");

$NRIC = $_POST["NRIC"];
      
$query = "SELECT * FROM $table_name WHERE NRIC='".$NRIC."'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

$fname=$myrow['fullname'];
$nric=$myrow['password'];
$telno=$myrow['telno'];
$email=$myrow['email'];
$gender=$myrow['gender'];
$remark=$myrow['remark'];

	
if (!$myrow){
   print "<p>No such record</p>";
}
else {
   print "<form name='editform' action ='edit2.php' method='post'>
   <table>
   <tr><td>Fullname</td><td><input type='text' name='fullname' value='$fname'></td></tr>
   <tr><td>nric</td><td><input type='text' name='password' value='$nric'></td></tr>
   <tr><td>Tel No</td><td><input type='text' name='telno' value='$telno'></td></tr>
   <tr><td>E-Mail</td><td><input type='text' name='email' value='$email'></td></tr>
    <tr><td>Gender</td><td><input type='text' name='gender' value='$gender'></td></tr>
   <tr><td>Remarks</td><td><input type='text' name='remark' value='$remark'></td></tr>


   <tr><td><input type='submit' value='submit' />
   <input type='reset' value='Reset Form'/></td>
   </tr>
   </table>
   </form>";
}
mysqli_close($connect);

?>
</div>
</body>
</html>