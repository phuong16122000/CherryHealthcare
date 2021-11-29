<html>
<head>
<title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<?php
echo "<p>View Database Record</p>";
echo "<p><a href=add.html>Add New Database Record</a></p>";
echo "<p><a href=edit.php>Edit Database Record</a></p>";
echo "<p><a href=delete.php>Delete Database Record</a></p>";
echo "<hr>";
echo "<p>View Database Record</p>";
echo "<hr>";

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'order';
$table_name = 'orderform';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");
$query = "SELECT * FROM $table_name";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);

if ($result) {
print '<table border=1>';
print '<th>Full Name<th>Gender<th>Date of Birth<th>Telephone Number<th>Email<th>Detail Event<th>Date and Time Event';
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
print '<tr>';
foreach ($row as $field) {
print "<td>$field</td> ";
}
print '</tr>';
}
} else { die ("Query=$query failed!"); }
mysqli_close($connect);
?>
</body>
</html>