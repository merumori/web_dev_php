<?php

function customFunction($value) {
    return $value * 2;
}
$originalArray = array(1, 2, 3, 4, 5);
$modifiedArray = array_map('customFunction', $originalArray);
echo "Original array: " . implode(", ", $originalArray) . "<br>";
echo "Modified array: " . implode(", ", $modifiedArray);
?>
