<html>

<body>
<?php

$msg_d = date(c);
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$tel_n = $_REQUEST["phone"];
$subject = "Cold Spring Park: Message from " . $name . " (" . $tel_n . ")"; 
$message = $_REQUEST["message"];

if (strlen($name) == 0 || strlen($email) == 0 || strlen($tel_n) == 0)
  {
   die('Form must be filled in.  Please proceed to the contact page');
  }

//populate the message (csmg) table
$con = mysql_connect('localhost', 'root', 'm00m00');
if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 }
//connect to cold spring park database
mysql_select_db('db_csp', $con);
mysql_query
("insert into t_csmg_message (msg_d,
                               name, 
                               tel_n,
                               email_addr_x, 
                               msg)
 values('$msg_d',
        '$name', 
        '$tel_n',
        '$email',
        '$message')
");

mysql_close($con);

//send email
// change to coldspringpark@gmail.com
mail("acacheung@gmail.com", $subject,
$message, "From:" . $email);
echo ('Thank You');
