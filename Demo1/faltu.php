<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Register page</h2>
	<a href="my1stwbsite.php">Click here back to the page</a>
	<form action="faltu.php" method="POST">
     Enter Username<input type="text" name="myuse"  ><br>
     Enter Password<input type="text" name="mypas" ><br>
     <input type="submit" value="Register">
 </form>
</body>
</html>


<?php
     mysql_connect("localhost","jhini","password");
mysql_select_db("jk");  
   $a=$_POST['myuse'];
$b=$_POST['mypas'];
  mysql_query("INSERT INTO register (username,password)VALUES ('$a','$b')"); 
?>  