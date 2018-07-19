<?php
$name= fix_Name("JHINUK","mamon","buRU");

echo $name[0]." ".$name[1]." ".$name[2]."<br>";

function fix_Name($n1,$n2,$n3)
{
	$n1=ucfirst(strtolower($n1));
	$n2=ucfirst(strtolower($n2));
	$n3=ucfirst(strtolower($n3));

	return array($n1,$n2,$n3);
}
?>

<?php
$a1="JHINUK";
$a2="mamon";
$a3="buRU";
 echo $a1." ".$a2." ".$a3."<br>";
 
 fix_Names($a1,$a2,$a3);
 echo $a1." ".$a2." ".$a3."<br>";
 function fix_Names(&$n1,&$n2,&$n3)
 {
 $n1=ucfirst(strtolower($n1));
	$n2=ucfirst(strtolower($n2));
	$n3=ucfirst(strtolower($n3));

	return array($n1,$n2,$n3);	
 }
?>

<?php
$a1="JHINUK";
$a2="mamon";
$a3="buRU";
 echo $a1." ".$a2." ".$a3."<br>";
 require "while.php";
 any_Name();
 echo $a1." ".$a2." ".$a3."<br>";
 function any_Name()
 {
    global $a1; $a1=ucfirst(strtolower($a1));
	global $a2;  $a2=ucfirst(strtolower($a2));
	global $a3;  $a3=ucfirst(strtolower($a3));

	
 }
?>