<?php

$myArray = array("cherry", "date", "fig");
$removedElement = array_shift($myArray);
echo "Array after removing element '$removedElement': " . implode(", ", $myArray) . "<br>";
array_unshift($myArray, "apple", "banana");
echo "Array after adding elements: " . implode(", ", $myArray);
?>
