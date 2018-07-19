<?php
$object=new chield;
$object->name="jhunuk";
$object->password="1234";
$object->phone="789 126 528";
$object->email="abc.@gmail.com";
$object->display();

class user
{
	public $name, $password;
	function xyz()
	{
		echo "save user code goes here";
	}
}
class chield extends user
{
	public $name, $password;
	function display()
	{
     echo "name:".$this->name."<br>";
     echo "password:".$this->password."<br>";
     echo "phone:".$this->phone."<br>";
     echo "email:".$this->email."<br>";
	}
}
?>