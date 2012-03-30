<html>
<body>
<?php

$con = mysql_connect('localhost', 'root', 'm00m00');
if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 }

if (mysql_query("CREATE DATABASE db_csp", $con))
 {
  echo "Database created";
 }
else
 {
  echo "Error creating database: " . mysql_error();
 }

mysql_close($con);
 
?>
</body>
</html>
