<?php

$myArray = array("apple", "banana", "cherry");
array_push($myArray, "date", "fig");
echo "Array after adding elements: " . implode(", ", $myArray) . "<br>";
$removedElement = array_pop($myArray);
echo "Array after removing element '$removedElement': " . implode(", ", $myArray);
?>
