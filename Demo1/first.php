<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
$color=array("red","yellow","blue","green");
$i=0;
echo '<select name=color>';
 while($i<count($color)){
    echo '<option>' .$color[$i]. '</option>';
	$i++;
    }
echo'</select>';
 
?>
    
     
</body>
</html>




