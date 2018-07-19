<?php
class A
{
	public function name($string)
	{
		echo "Hi ".$string."<br>";
	}
	public function printname()
	{
		echo "hii i am come form bankura<br>";
	}
}
class B extends A
{
	public function name($string)
	{
		echo "Hi ".$string ."<br>";
	}
	
	public function printname()
	{
		echo "hii i am come form china ";
	}
}

$a = new A();
$b =new B();
$a->name('jhinuk');
$a->printname();
$b->name('papu');
$b->printname();
?>