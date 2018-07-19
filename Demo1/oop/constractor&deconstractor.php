<?php
class user  {
    public $name;
    public $age;

    public function __construct($name,$age)
    {
    	echo 'class  ' .__CLASS__.' instantiated<br>';
    	$this->name= $name;
    	$this->age=$age;
    }

    public function sayHello()
    {
    	return $this->name." say Hello....";
    }

    public function __destruct()
    {
    	echo "run....";
    }
}
$user1 = new user("jhinuk",23);
echo $user1->name ." is " .$user1->age." year old";
echo "<br>";
echo $user1->sayHello();
echo "<br>";

$user2=new user("papu",20);
echo $user2->name ." is " .$user2->age." year old";
echo "<br>";
echo $user2->sayHello();
?>