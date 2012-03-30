<html>
<body>
<?php

$con = mysql_connect('localhost', 'root', 'm00m00');
if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 }

//connect to cold spring park database
mysql_select_db('db_csp', $con);

//create t_csmg_message table

mysql_query("DROP TABLE t_csmg_message", $con);
$sql = "CREATE TABLE t_csmg_message
 (
  msg_id       int          not null auto_increment,
  msg_d        datetime     not null,
  name         varchar(30)  not null,
  tel_n        char(12)     not null,
  email_addr_x varchar(150) not null,
  msg          text(500)    not null,
  primary key(msg_id) 
 )";

echo 't_csmg_message table created<br/>';

// execute query
mysql_query($sql, $con);

mysql_close($con);

?>
</body>
</html>
