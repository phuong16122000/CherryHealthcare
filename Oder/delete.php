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
echo "<p><a href=edit.php>Edit Database Record</a></p>";
echo "<p>Delete Database Record</p>";
echo "<hr>";
echo "<p>Delete Database Record</p>";
echo "<hr>";
?>

<p>Please enter the detail food you want to delete</p>
<form name="deleteform" action ="delete1.php" method="post">
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