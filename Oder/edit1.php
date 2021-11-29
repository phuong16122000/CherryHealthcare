<html>
<head>
<title>Edit Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<?php
echo "<p><a href=view.php>View Database Record</p>";
echo "<p><a href=add.html>Add New Database Record</a></p>";
echo "<p>Edit Database Record</p>";
echo "<p><a href=delete.php>Delete Database Record</a></p>";
echo "<hr>";
echo "<p>Edit Database Record</p>";
echo "<hr>";

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'order';
$table_name = 'orderform';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");
$adetailfood = $_POST["adetailfood"];
$query = "SELECT * FROM $table_name WHERE detailvent='".$adetailevent."'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$fullname=$myrow['fullname'];
$gender=$myrow['gender'];
$dob=$myrow['dob'];
$tel=$myrow['tel'];
$email=$myrow['email'];
$detailfood=$myrow['detailevent'];
$dtevent=$myrow['dtevent'];

if (!$myrow){
echo "string"; "<p>No such record</p>";
}
else {
echo "<form name='editform' action ='edit2.php' method='post'>
<table>
<tr><td>Full Name</td><td>$fullname<input type='hidden' name='afullname' value='$fullname' ></td></tr>
<tr><td>Gender</td><td><input type='text' name='agender' value='$gender'></td></tr>
<tr><td>Date Of Birth</td><td><input type='dob' name='adob' value='$dob'></td></tr>
<tr><td>Telephone Number</td><td><input type='text' name='atel' value='$tel'></td></tr>
<tr><td>Email</td><td><input type='text' name='aemail' value='$email'></td></tr>
<tr><td>Detail Event</td><td><input type='text' name='adetailevent' value='$detailevent'></td></tr>
<tr><td>Date and Time Event</td><td><input type='text' name='adtevent' value='$dtevent'></td></tr>
<tr><td><input type='submit' value='submit' />
<input type='reset' value='Reset Form'/></td>
</tr>
</table>
</form>";
}
mysqli_close($connect);
?>
</body>
</html>