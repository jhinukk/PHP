<?php
$object=new Tiger;

echo "Tiger have: <br>";
echo "Far:".$object->far."<br>";
echo "Stripes".$object->stripes;

class wildcat
{
	public $fur;
	function __construct()
	{
		$this->fur="true";
	}
}
 class Tiger extends Wildcat  
 {    
 public $stripes; // Tigers have stripes
    
    function __construct()    
    {     
     parent::__construct(); 
     // Call parent constructor first      
     $this->stripes = "TRUE";    }  }
?>