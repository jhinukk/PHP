<?php
$object =new son;
$object->text();
$object->text2();

class Dad
{
	function text()
	{
		echo "[this dad] hii i am dad function <br>";
	}
}
class son extends Dad
{
	function text()
	{
		echo "[this child] hii i am child <br>";
	}
	function text2()
	{
		parent::text();
	}
} 
?>