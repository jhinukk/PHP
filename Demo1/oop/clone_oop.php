<?php
$object1=new user();
$object1->name ="jhinuk";
$object2=clone $object1;
$object2->name ="papu";

echo "object1 name=".$object1->name."<br>";
echo "object2 name=".$object2->name."<br>";

class user
{
	public $name;
}
?>