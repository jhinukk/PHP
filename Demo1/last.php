<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="op"></div>
	<?php
    $color=array("red","yellow","pink","blue");
    $i=0;
    echo '<select id='.$color[$i].'>';
    while($i<count($color))
    {
    	echo '<option>'.$color[$i].'</option>';
    	?>
    	<script>
    		$(document).ready(function(){
    			$(<?php echo $color[$i]; ?>).change(function(){
    				$("op").
    			})
    		})
    	</script>
    	<?php
    	$i++;
    }
    echo '</select>';
	?>
</body>
</html>