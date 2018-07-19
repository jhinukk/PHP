
  <?php
$produce=array(
          'paper'=>array(
                            'copiler'=>"cpoier & multiperpose",
                            'inject'=>"inject printer",
                            'laser'=>"laser printer",
                            'photo'=>"photography peaper"),
          'pen'=>array(
          	                'ball'=>"ball piont",
          	                'hilite'=>"hiliter pen",
          	                'marker'=>"marker pen"),
          'music'=>array(
          	                'classical'=>"melodioues",
          	                 'latest'=>"full fun and enjoy "
          	             )
      );
    echo "<pre>";
foreach($produce as $section=>$item)
{
	foreach($item as $key=>$value)
	{
		echo "$section:\t $key\t ($value)  <br>";

	}
}
echo "</pre>";
?>
