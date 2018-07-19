<?php
$con=mysql_connect("localhost","jhini","password");
if(!$con)
{
	echo "Not connect to the server";
}
if(!mysql_db_name($con , 'my_user'))
{
	echo "Database not selected";
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO usps(username,password) VALUES ('$username','$password')";
if(!mysql_query($con,$sql))
{
	echo "not insert";
}
else
{
	echo "interseted";
}
header("refresh:2; url=username &password.html");