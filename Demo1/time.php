<?php
echo time();
echo "<br>";
echo time()+7 * 24 * 60 * 60;
echo "<br>";
echo mktime(0,0,0,1,1,2000);
echo "<br>";
echo date("l F jS,Y -g.ia",time());

?>

<?php
$month=2;
$day=28;
$year=2018;

if(checkdate($month,$day,$year))
echo "valid";
else echo "not valid";
?>