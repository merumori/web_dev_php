<?php
	function swap($x, $y) {
	  echo "Before Swap.</br>";
	  echo "x = $x </br>";
	  echo "y = $y </br>";

	  //Swap technique
	  $x = $x * $y;
	  $y = $x / $y;
	  $x = $x / $y;

	  echo "After Swap.</br>";
	  echo "x = $x </br>";
	  echo "y = $y </br>";
	}

	swap(5,7);
?>