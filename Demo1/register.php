<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Register page</h2>
	<a href="my1stwbsite.php">Click here back to the page</a>
	<form action="register.php" method="POST">
     Enter Username<input type="text" name="myusername" ><br>
     Enter Password<input type="text" name="mypassword" ><br>
     <input type="submit" value="Register">
 </form>
</body>
</html>


<?php
    mysql_connect("localhost","jhini","password");
    mysql_select_db("mysql_demo");
   $a=$_POST['myusername'];
   $b=$_POST['mypassword'];
   mysql_query("INSERT INTO usps (username,password)VALUES ('$a','$b')");
?>  

<!-- mysql_connect("localhost","jhini","password");
mysql_select_db("mysql_demo");
$a=$_POST['myusername'];
$b=$_POST['mypassword'];
mysql_query("INSERT INTO usps (username,password)VALUES ('$a','$b')");
 -->
 <!-- or die(mysql_error())
 or die("Cannot connect to database") -->