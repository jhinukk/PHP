<?php
$object= new user;
print_r ($object);
class user
{
	public $name, $password;
	function save_user()
	{
		echo "save user code here <br>" ;
	}
}
?>