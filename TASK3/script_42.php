<?php

$array1 = array("apple", "banana", "cherry", "date", "fig");
$array2 = array("banana", "date", "grape", "fig", "kiwi");
$difference = array_diff($array1, $array2);

echo "Array 1: " . implode(", ", $array1) . "<br>";
echo "Array 2: " . implode(", ", $array2) . "<br>";
echo "Difference: " . implode(", ", $difference);
?>
