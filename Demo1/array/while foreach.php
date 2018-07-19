<?php
//Assertive array
$b=array(
         'copiler'=>"cpoier & multiperpose",
         'inject'=>"inject printer",
         'laser'=>"laser printer",
         'photo'=>"photography peaper"
         );
echo "Assertive array <br>";

    while(list($item, $descript)=each($b))
    {
    	
    	echo "$item=>$descript <br>";
    }     
?>