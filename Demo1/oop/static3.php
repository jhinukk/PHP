<?php
$temp= new user;
  
echo "test a:" .user::$static_property."<br>";
echo "test b:" . $temp->get_sp()."<br>";
echo "text c:" .$temp->static_property."<br>";

class user
{
	static $static_property="I'm bad";
	function get_sp()
	{
		return self::$static_property;
	}
}
?>