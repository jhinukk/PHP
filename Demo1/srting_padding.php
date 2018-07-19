<?php
echo "<pre>";
 $h="jhinuk";
 printf("[%s]\n",$h);
 printf("[%12s]\n",$h);
 printf("[%-12s]\n",$h);
 printf("[%012s]\n",$h);
 printf("[%'#12s]\n",$h);
 printf("[%-s]\n",$h);

 $b="JHinuk Kundu";
printf("[%12.8s]\n",$b);
printf("[%-12.10s]\n",$b);
printf("[%'@12.10s]\n",$b);
echo "</pre>";
?>


<?php
$out=sprintf("the result is:%0.2f",124/12);
echo $out;
// $out = sprintf("The result is: $%.2f", 123.42 / 12); echo $out; 
?>