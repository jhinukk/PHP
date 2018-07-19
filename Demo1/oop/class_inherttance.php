<?php
class user{
	protected $name;
	protected $age;


	public function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}
}
class person extends user{

	public function __construct($name,$age,$balance)
	{
		parent::__construct($name,$age);
		$this->balance=$balance;
	}
	public function pay($amount){
		return $this->name ." pay $".$age;
	}

	public function getbalance($balance)
	{
         return $this->balance;

	}
}
$person1=new person('papu',30,500);
// echo $person1->pay();
// echo "<br>";
$person2=new person('jk',58,20000);
echo $person2->getbalance(100);
?>