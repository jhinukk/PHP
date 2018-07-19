<?php
//numeric array
$a= array("Copiler","inject","laser","photo");
$j=0;
echo "Numeric array <br>";
 foreach($a as $item)
 {
 	
 echo "$j:$item"."<br>";
 ++$j;
}
?> 

<?php
//Assertive array
$b=array(
         'copiler'=>"cpoier & multiperpose",
         'inject'=>"inject printer",
         'laser'=>"laser printer",
         'photo'=>"photography peaper"
         );
echo "Assertive array <br>";

    foreach($b as $item=>$descript)
    {
    	
    	echo "$item=>$descript <br>";
    }     
?>
