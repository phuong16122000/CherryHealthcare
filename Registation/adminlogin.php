html>
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
<div class="h1">Administration Screen</div>
<hr>
<?php
$host       = "localhost";
$database   = "healthcare";
$table_name = "user";
$username   = "root";
$passwd     = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");

$adminID     = $_POST["username"];
$adminPasswd = $_POST["password"];
		
$query = "SELECT * FROM $table_name WHERE adminID='".$adminID."' And adminPasswd='" .$adminPasswd. "'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
if (!$myrow){
   print "<div class='h1'>Wrong admin ID or wrong password</div>";
   print "<div class='h1'>Please try again</p>";
}
else {
   header("Location: http://localhost/raz_sample/admin.html");
 
   }
mysqli_close($connect);
?>
</body>
</html>