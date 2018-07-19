<?php
$object=new user;
print_r ($object);
echo "<br>";

$object->name ="jhinuk";
$object->password="papu";
print_r ($object);
echo "<br>";

$object->user_new();

class user
{
public $name,$password;

function user_new()
{
	echo "save here all the document";
}
}
?>