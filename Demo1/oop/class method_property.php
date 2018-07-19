<?php
//define a class
class user
{
	//property(attibute)
     public $name;

	//mthods(function)
     public function sayHello()
     {
     	return $this->name. "Say Hello";
     }
}
//creat object
$user1=new user();
$user1->name="jhinuk";
echo $user1->name;
echo "<br>";
echo $user1->sayHello();
echo "<br>";


//creat 2d object
$user2 = new user();
$user2->name="papu";
echo $user2->name;
echo "<br>";
echo $user2->sayHello();
?>