<html>
<head>
<title>Delete Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<?php
echo "<p><a href=view.php>View Database Record</p>";
echo "<p><a href=add.html>Add New Database Record</a></p>";
echo "<p><a href=edit.html>Edit Database Record</a></p>";
echo  "<p>Delete Database Record</p>";
echo "<hr>";
echo "<p>Delete Database Record</p>";
echo "<hr>";

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'order';
$table_name = 'orderform';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");
mysqli_select_db($connect,$database);
$detailevent = $_POST["adetailevnt"];
$query = "SELECT * FROM $table_name WHERE detailevent='".$detailevent."'";
$sql = "DELETE FROM $table_name WHERE detailevent='".$detailevent."'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);

$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!$myrow){
print "<p>No such record</p>";
}
else {
mysqli_query($connect,$sql);
print "Detail Event '$detailevent' has been deleted from the Database";
}
mysqli_close($connect);
?>
</body>
</html>