<?php
abstract class car{
	public abstract function carname();
	public abstract function price();
}
class taxi extends car
{
	public function carname()
	{
		return "Maruti"." <br>";
	}
	public function price()
	{
		return "650000"."<br>";
	}
}
$sprots=new taxi();
echo $sprots->carname();
echo $sprots->price();
?>

