
<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'healthcare';
$table_name = 'registration';

$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");

$sql="INSERT INTO $table_name(fullname, password, telno, email, gender, remark)
VALUES
('".$_POST['fullname']."','".$_POST['password']."',
	'".$_POST['tel']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['remark']."')";

if (!mysqli_query($connect,$sql))
  {
  die('Error: ' . mysqli_error($connect));
  }
  else {
echo "1 record added";
mysqli_close($connect);
  }
  header( "Refresh:3; url=http://localhost/healthsite/home.html", true, 303);
?>