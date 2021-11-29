<html>
<head>
<title>Edit Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<?php
echo "<p><a href='view.php'>View Database Record</p>";
echo "<p><a href='add.html'>Add New Database Record</a></p>";
echo "<p>Edit Database Record<</p>";
echo "<p><a href='delete.php'>Delete Database Record</a></p>";
echo "<hr>";
echo "<p>Edit Database Record</p>";
echo "<hr>";

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'productdb';
$table_name = 'product';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");
mysqli_select_db($connect,$database);
$productid =$_POST["aproductid"];
$title =$_POST["atitle"];
$qtyonhand =$_POST["aqtyonhand"];
$sellprice =$_POST["asellprice"];
$reorderlevel =$_POST["areorderlevel"];
$sql="UPDATE $table_name SET title = '$title',qtyonhand='$qtyonhand',sellprice='$sellprice', reorderlevel='$reorderlevel'
WHERE productid = '".$productid."'";

if (!mysqli_query($connect,$sql))
{
die('Error: ' . mysqli_error($connect));
}
print "<p>Your information has been updated in the database</p>";
mysqli_close($connect);
?>
</body>
</html>