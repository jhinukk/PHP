<?php
mysql_connect("localhost","jhini","password");
mysql_select_db("mysql_demo");
$a=$_POST['myname'];
mysql_query("INSERT INTO next (name)VALUES ('$a')");

?>