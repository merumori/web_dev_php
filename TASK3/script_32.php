<?php
$array1 = array("apple", "banana", "cherry");
$array2 = array("date", "fig", "grape");


$combinedArray = array_merge($array1, $array2);


echo "Array 1: " . implode(", ", $array1) . "<br>";
echo "Array 2: " . implode(", ", $array2) . "<br>";
echo "Combined array: " . implode(", ", $combinedArray);
?>
