<?php
interface op
{
	public function setroom($x);
	public function setrent($y);
	public function setstudent($z);
}
class home implements op
{
	public function setroom($x)
	{
		echo $x."no of room avalable <br>";
	}
	public function setrent($y)
	{
		echo $y."price of roomrent <br>";
	} 
	public function setstudent($z)
	{
		echo $z."no of student";
	}
}
$name= new home();
$name->setroom(6);
$name->setrent(2000);
$name->setstudent(18);
?>