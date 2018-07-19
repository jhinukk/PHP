<!-- <?php
// class user
// {
// 	function_construct($para1,$para2)
// 	{
// 	public $username="jhinuk";
// 	}
// }
?>  -->

<!-- <?php  
// class User  
// {   
//  function User($param1, $param2)
//   {
//      public $username = "Guest";    
//  }  
// }
 ?>  -->

 <!-- <?php  
 // class User  
 // {    
 // 	function __construct($param1, $param2)    
 // 	{      // Constructor statements go here      
 // 		public $username = "Guest";    }  } ?>  -->

 <?php
$object= new user;
$object->password="jhini";

echo $object->get_password();
class user
{

	public $name,$password;
	function get_password()
	{
		return $this->password;
	}
 }

 ?>
