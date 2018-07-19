<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $color=array("red","yellow","pink","blue");
    $i=0;
    echo '<select>';
    while(i<count($color))
    {
    	echo '<opion>'.$color[i].'</option>';
    }
    echo '</select>';
	?>
</body>
</html>