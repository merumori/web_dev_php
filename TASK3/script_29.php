<?php

$originalArray = array("apple", "banana", "cherry");


$reversedArray = array_reverse($originalArray);


echo "Original array: " . implode(", ", $originalArray) . "<br>";
echo "Reversed array: " . implode(", ", $reversedArray);
?>
