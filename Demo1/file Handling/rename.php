<?php
if(!rename('testfile.txt','textfile.new'))
	echo "file not exists";
else echo "file already exsits";
?>