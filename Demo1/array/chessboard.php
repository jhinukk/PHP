<?php
$chessboard=array(
                  array('r','n','b','k','b','n','r'),
                  array('p','p','p','p','p','p','p'),
                  array(' ',' ',' ',' ',' ',' ',' '),
                  array(' ',' ',' ',' ',' ',' ',' '),
                  array(' ',' ',' ',' ',' ',' ',' '),
                  array(' ',' ',' ',' ',' ',' ',' '),
                  array('P','P','P','P','P','P','P'),
                  array('R','N','B','K','B','N','R'));
echo "<pre>";
foreach($chessboard as $row)
{
  foreach($row as $price)
  {
    echo "$price";
  } 
  echo "<br>";
}
echo "</pre>";
echo $chessboard[0][3];
?>