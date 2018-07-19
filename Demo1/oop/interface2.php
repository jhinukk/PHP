<?php
interface A 
{
	public function computer();
}
interface B extends A
{
    public function device();
}
class C implements B
{
	public function device()
	{
		$x=16;
		$y=2;
		$z=$x/$y;
		echo "the result is ".$z."<br>";
	}

	public function computer()
	{
		$x=10;
		$y=2;
		$z=$x/$y;
		echo "the result is ".$z."<br>";
	}
}
$q=new C();
$q->computer();
$q->device();
?>