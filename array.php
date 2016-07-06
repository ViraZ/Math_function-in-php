<html>
    <p>
	<?php
	
    $array = array();
    array_push($array, "John", "Joe", "Jingle", "Himmer", "Schmit");

    $maxNumber = count($array);
    $newMaxNumber = $maxNumber - 1;

    sort($array);
	
    $randomNumber = rand(0, $newMaxNumber);

	$randomWinner = $array[$randomNumber];
	$capsRandomWinner = strtoupper($randomWinner);
	print $capsRandomWinner;
	?>
	</p>
</html>