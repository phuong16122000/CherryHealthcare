<?php
session_start();
?>
<!DOCTYPE html>
<html>
<Head>
<meta http-equiv="Refresh" content="3;url=home.html">
</head>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

echo "All session variables are now removed, and the session is destroyed." 
?>

</body>
</html>