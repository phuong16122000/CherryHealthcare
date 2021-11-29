
<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'order';
$table_name = 'orderform';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");
$sql="INSERT INTO $table_name(fullname, gender, dob, tel, email, detailevent, dtevent)
VALUES
('".$_POST['afullname']."','".$_POST['agender']."','".$_POST['adob']."','".$_POST['atel']."','".$_POST['aemail']."','".$_POST['adetailevent']."','".$_POST['dtevent']."')";

if (mysqli_query($connect,$sql))
{
echo "1 record added";
}else{
	
die('Error: ' . mysqli_error($connect));
}
mysqli_close($connect);
?>
