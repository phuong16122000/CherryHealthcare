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
echo "<p>Edit Database Record<</p>";
echo "<p><a href=delete.php>Delete Database Record</a></p>";
echo "<hr>";
echo "<p>Edit Database Record</p>";
echo "<hr>";
?>

<p>Please enter the event you want to edit</p>
<form name="editform" action ="edit1.php" method="post">
<table>
<tr>
<td>Detail Food</td>
<td><input type="text" name="adetailevent" size="10"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="submit"/>
<input type="reset" value="Reset Form"/></td>
</tr>
</table>
</form>
</body>
</html>