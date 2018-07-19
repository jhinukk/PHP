<?php
class A
{
	public function greandage()
	{
		return " age is 80 <br>";
	}
}
class B extends A
	{
		public function fatherage()
		{
			return "age is 50 <br>";
		}
	}

class C extends B
{
	public function sonage()
	{
		return "age is 20";
	}

	public function history()
	{
		echo "class A  ".$this->greandage();
		echo "class B  ".$this->fatherage();
		echo "class C  ".$this->sonage();
	}
}
$p= new C();
$p->history();
?>