<?php
$fh=fopen("testfile.txt",'r') or die ("File does not exists");
$text=fread($fh,3);
fclose($fh);
echo $text;
?>