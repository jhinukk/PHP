<!-- <?php
// $fh=fopen("testfile.txt","w") or die("File already created");
// $text= <<_END Line 1 Line 3 Line 2 _END;
// fwrite($fh, $text) or die("Could not write the file");
// fclose($fh);
// echo "File'testfile.txt' writen success ";
?> -->




<?php // testfile.php 
 $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
  $text = "hii alll";
  fwrite($fh, $text) or die("Could not write to file");  
  fclose($fh);  
  echo "File 'testfile.txt' written successfully"; 
  ?>
