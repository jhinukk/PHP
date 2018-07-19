<html>

<body>

 

 

<?php

$con = mysql_connect("localhost","jhini","password");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("mysql_demo", $con);

 

$sql="INSERT INTO nametable (firstname, lastname)

VALUES

('$_POST[fname]','$_POST[lname]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 