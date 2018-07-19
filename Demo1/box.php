<html>
<form method="post" action="box.php">
	<input type="text" name="myfile">
	<input type="submit" value="submit">
</form>
</html>


<form method="post">
<?php
$a=$_POST["myfile"];
for($i=0 ; $i<=$a; $i++){
	echo "<input type='text' name='symbol[$i]'>".$i."<br>";
}

}
?>
<select>
	<option>add</option>
	<option>mul</option>
</select>
<input type="submit" value="submit">
</form>

<?php echo array_sum($_REQUEST['symbol']); ?> 
<?php echo array_mul($_REQUEST['symbol']); ?> 