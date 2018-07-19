<?php
$a=10;
$b=32;
echo $a."<br>";
echo $a+$b."<br>";
?>
<?php
#numeric array
$arr=array(1,2,"abc");
echo "<pre>";
print_r ($arr);
echo "<br>";
echo $arr[0]+$arr[1];
echo "<br>";
#Assoceative array
$arr2=array("a" => "111", "b" => "bbb" ,"c" => "222");
$arr2["d"]="ddd";
print_r($arr2);
#Mlti Array
$arr3=array("a" => "111", "b" => array(3,4,5,array("m"=>2,"n"=>3)) ,"c" => "222");
$arr3["d"]="ddd";
print_r($arr3);
echo $arr3["b"][3]["m"];
?>
<?php
$ad="10";
if($ad%2 == 0)
{
	echo "even";
}
else
{
	echo "odd";
}
echo "<br>";
?>
<?php
$lep=2016;
if($lep%400==0 ||($lep%100!=0 && $lep%4==0))
{
	echo "leap";
}
else
{
	echo "normal";
}
?>
<?php
$arr4=array("a" => "111", "b" => "333" ,"c" => "222");
foreach($arr4 as $p => $s)
{
	echo $p."=>".$s."<br>";
}
?>