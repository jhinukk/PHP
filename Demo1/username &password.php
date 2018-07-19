<?php
   mysql_connect("localhost","jhini","password");
mysql_select_db("mysql_demo");
$a=$_POST['myusername'];
$b=$_POST['mypassword'];
mysql_query("INSERT INTO usps (username,password)VALUES ('$a','$b')");
?>  