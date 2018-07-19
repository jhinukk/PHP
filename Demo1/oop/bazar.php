<?php
class bazar
{
	public $price;
	public $brend;
	public function name()
	{
	echo "BigBazar";
	}
	public function Address()
	{
	echo "salt lake";
	}

	//Member Function
	function setprice($price)
	{
		 $this->price =$price;
	}
	function getprice()
	{
		echo $this->price."is<br>";
	}
	function product($brend)
	{
		$this->brend=$brend;
	} 
	function productbr()
	{
		echo $this->brend."<br>";
	}
}
$bigmarket = new bazar();

$bigmarket->name();
$bigmarket->address();
$bigmarket->setprice(1000);
$bigmarket->getprice();
$bigmarket->product('pantaloon');
$bigmarket->productbr();
?>