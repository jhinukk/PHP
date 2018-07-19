<?php
$fh=fopen("textfile.txt","r") or die("Fill to open");
$text=fgets($fh);
fseek($fh,0,SEEK_END);
fwrite($fh,"$text") or die("Could not write to file");
fclose($fh);
echo "File 'textfile.txt'sucessfuly update";
?>