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
$host     = "localhost";
$database = "healthcare";
$table_name    = "registration";
$username = "root";
$passwd   = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");

$query = "SELECT * FROM $table_name";
mysqli_select_db($connect,$database);
$results = mysqli_query($connect, $query);

if ($results) {
   print '<table border=1 width="75%">';
   print '<th>Fullname</th><th>NRIC</th><th>Tel No</th><th>E-Mail</th><th>Gender</th><th>Remarks</th>';
   while ($row = mysqli_fetch_row($results)){
     print '<tr>';
     foreach ($row as $field) {
 	print "<td>$field</td> ";
     }
     print '</tr>';
   }
 } else { die ("Query=$query failed!"); }
 mysqli_close($connect);
?>

Please enter the NRIC you want to DELETE
<form name="editform" action ="delete1.php" method="post">
<table>
<tr>
   <td>NRIC No:</td>
   <td><input type="text" name="NRIC"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="submit"/>
<input type="reset" value="Reset Form"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>