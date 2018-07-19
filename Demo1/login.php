<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>LogIn page</h2>
	<a href="my1stwbsite.php">Click here back to the page</a>
	<form action="login.php" method="post">
     Enter Username<input type="text" name="myusername" required="required"><br>
     Enter Password<input type="text" name="mypassword" required="required"><br>
     <input type="submit" value="LogIn">
 </form>
</body>
</html>
<?php
     mysql_connect("localhost","jhini","password");
mysql_select_db("mysql_demo");  
   $a=$_POST['myusername'];
$b=$_POST['mypassword'];
  $sql="SELECT * FROM usps WHERE username='$a' and password='$b'"; 
  $result=mysql_query($sql);
  $count=mysql_num_rows($result);
  if($count != 1)
  {

  die('Error: ' . mysql_error());

  }

echo "record match";

?>  