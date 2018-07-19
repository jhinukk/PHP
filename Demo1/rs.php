<?php
    mysql_connect("localhost","jhini","password");
    mysql_select_db("mysql_demo");
   $a=$_POST['username'];
   $b=$_POST['password'];
   mysql_query("INSERT INTO usps (username,password) VALUES ('$a','$b')");
?>    