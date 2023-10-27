<?php
$arrayWithDuplicates = array("apple", "banana", "cherry", "apple", "date", "banana");


$uniqueArray = array_unique($arrayWithDuplicates);


echo "Array with duplicates: " . implode(", ", $arrayWithDuplicates) . "<br>";
echo "Unique array: " . implode(", ", $uniqueArray);
?>
