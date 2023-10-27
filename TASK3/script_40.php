<?php

$myArray = array("apple", "banana", "cherry", "date", "fig");

$removedElements = array_splice($myArray, 1, 2);

echo "Array after removing elements: " . implode(", ", $myArray) . "<br>";
echo "Removed elements: " . implode(", ", $removedElements) . "<br>";
array_splice($myArray, 2, 0, array("grape", "kiwi"));
echo "Array after replacing elements: " . implode(", ", $myArray);
?>
