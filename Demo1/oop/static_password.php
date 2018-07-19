<?php
class user{
	public $name;
	public $age;
	public static $minpasswordlength=6;
	public static $no=6;
	 public static function passwo($password)
	 {
	 	if(strlen($password)>= self::$minpasswordlength)
	 		{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 	}
	 	public static function numer($numeric) 
	 	{
	    if(is_numeric($numeric)== self::$no)
	    	{
	 			return true;
	 		}
	 		else
	 		{
	 			return false;
	 		}

	 }  
}


$passwor="987654";
if(user::passwo($passwor))
	{
		echo "password valid";
	}
	else
	{
		echo "password invalid";
	}

echo "<br>";
if(user::numer($passwor))
{
	echo "password valid";
}	
else
{
	echo "password invalid";
}
?>