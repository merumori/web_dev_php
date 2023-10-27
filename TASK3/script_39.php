<?php

$originalArray = array("apple", "banana", "cherry", "date", "fig");
$slicedArray = array_slice($originalArray, 1, 3); 
echo "Original array: " . implode(", ", $originalArray) . "<br>";
echo "Sliced array: " . implode(", ", $slicedArray);
?>
